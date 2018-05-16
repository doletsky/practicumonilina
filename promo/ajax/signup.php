<?php

function writeToLog($data, $title = '')
{
    $log = "\n------------------------\n";
    $log .= date("Y.m.d G:i:s") . "\n";
    $log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
    $log .= print_r($data, 1);
    $log .= "\n------------------------\n";
    file_put_contents(getcwd() . '/hook.log', $log, FILE_APPEND);
    return true;
}

function BXCRMwebhook($command, $data = array()){
    $queryUrl = 'https://practicumonline.bitrix24.ru/rest/1/808gmadqp2pwcyb2/'.$command.'.json';
    $queryData = http_build_query($data);
    $curl = curl_init();
    curl_setopt_array($curl, array(CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_POST => 1, CURLOPT_HEADER => 0, CURLOPT_RETURNTRANSFER => 1, CURLOPT_URL => $queryUrl, CURLOPT_POSTFIELDS => $queryData,));
    $result = curl_exec($curl);
    curl_close($curl);
    $result = json_decode($result, 1);
    return $result;
}

//проверить лиды на совпадение почты
$command='crm.lead.list';
$arData=array(
        "filter"=> array("EMAIL"=>$_REQUEST['EMAIL']),
        "select" => "*"
);
$arResult=BXCRMwebhook($command, $arData);

if((int)$arResult["total"]>0){
    // в существующие лиды добавить коммент о повторной подписке
    $command='crm.lead.update';
    $arData=array(
            'id' => $arResult['result'][0]["ID"],
            'fields' => array(
            'COMMENTS' => $arResult['result'][0]["COMMENTS"]."<br>Повтор подписки: ".date('d.m.Y H:i:s')
        ),
        'params' => array("REGISTER_SONET_EVENT" => "Y")
    );
    $arResult=BXCRMwebhook($command, $arData);
    //оповещение по почте


}else{
    //содаем новый лид
    $command='crm.lead.add';
    $arData=array(
            'fields' => array(
                "TITLE" => 'Подписка на курс',
                "NAME" => "",
                "LAST_NAME" => "",
                "STATUS_ID" => "NEW",
                "OPENED" => "Y",
                "SOURCE_ID" => "WEB",
                "ASSIGNED_BY_ID" => 1,
                "EMAIL" => array(
                    array(
                        "VALUE" => $_REQUEST['EMAIL'],
                        "VALUE_TYPE" => "WORK"
                    )
                ),
            ),
            'params' => array("REGISTER_SONET_EVENT" => "Y")
        );
    $addLeadResult=BXCRMwebhook($command, $arData);
    if (array_key_exists('error', $addLeadResult)) echo "Ошибка при сохранении лида: " . $result['error_description'] . "

	 ";
    else {//регистрация нового лида в системе
        require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
        //проверяем, есть ли такой пользователь в системе
        global $USER;
        $filter = Array("EMAIL" => $_REQUEST['EMAIL']);
        $rsUsers = CUser::GetList(($by = "NAME"), ($order = "desc"), $filter);
        if($arUser = $rsUsers->Fetch()) {
            //есть такой, проверяем группы
        }else{
            //создаем лида
            $user = new CUser;
            $arFields = Array(
                "EMAIL"             => $_REQUEST['EMAIL'],
                "LOGIN"             => $_REQUEST['EMAIL'],
                "LID"               => "ru",
                "ACTIVE"            => "Y",
                //"GROUP_ID"          => array(10,11),
                "PASSWORD"          => "!Aa123456",
                "CONFIRM_PASSWORD"  => "!Aa123456"
            );

            $ID = $user->Add($arFields);
            if (intval($ID) > 0)
                echo "Пользователь успешно добавлен.";
            else
                echo $user->LAST_ERROR;
        }


        //оповещение по почте
        /* получатель */
        $to= $_REQUEST['EMAIL'];

        /* тема/subject */
        $subject = "Вы записались на обучающий курс 'Как заказать сайт.'";

        /* сообщение */
        $message = '
<html>
<head>
 <title>Birthday Reminders for August</title>
</head>
<body>
Здравствуйте!<br>
Вы записались на обучающий курс "Как заказать сайт.".
</body>
</html>
';

        /* Для отправки HTML-почты вы можете установить шапку Content-type. */
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        /* дополнительные шапки */
        $headers .= "From: PRACTICUMonline <info@practicumonline.ru>\r\n";

        /* и теперь отправим из */
//        mail($to, $subject, $message, $headers);
        echo "send email: ".mail($_REQUEST['EMAIL'], "My Subject", "Line 1\nLine 2\nLine 3");
    } ;


}
//$defaults = array('first_name' => '', 'last_name' => '', 'phone' => '', 'email' => '');
//    $defaults = $_REQUEST;
//    writeToLog($_REQUEST, 'webform');
//    $queryUrl = 'https://practicumonline.bitrix24.ru/rest/1/808gmadqp2pwcyb2/crm.lead.add.json';
//    $queryData = http_build_query(
//        array(
//            'fields' => array(
//                "TITLE" => '',
//                "NAME" => "",
//                "LAST_NAME" => "",
//                "STATUS_ID" => "NEW",
//                "OPENED" => "Y",
//                "SOURCE_ID" => "WEB",
//                "ASSIGNED_BY_ID" => 1,
//                "EMAIL" => array(
//                    array(
//                        "VALUE" => $_REQUEST['EMAIL'],
//                        "VALUE_TYPE" => "WORK"
//                    )
//                ),
//            ),
//            'params' => array("REGISTER_SONET_EVENT" => "Y")
//        )
//    );
//    $queryUrl = 'https://practicumonline.bitrix24.ru/rest/1/808gmadqp2pwcyb2/crm.lead.userfield.add.json';
//    $queryData = http_build_query(
//        array(
//            'fields' => array(
//                "FIELD_NAME" =>  'PROMOCODE',
//                "EDIT_FORM_LABEL" => "Промокод",
//                "LIST_COLUMN_LABEL" => "Промокод",
//                "USER_TYPE_ID" => "string",
//                "XML_ID" => "PROMOCODE"
//            )
//        )
//    );

//    writeToLog($result, 'webform result');
//    if (array_key_exists('error', $result)) echo "Ошибка при сохранении лида: " . $result['error_description'] . "
//
//	 ";
?><pre><?print_r($arResult)?></pre>