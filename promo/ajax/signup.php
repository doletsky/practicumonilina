<?php
//регистрация лида в системе
        require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
        //получаем группу лида и курса
        //получаем id группы ЛИДЫ, Студенты и КУРС
        $rsLids = CGroup::GetList ($by = "c_sort", $order = "asc", Array ("STRING_ID" => 'lids'));
        $arLids=$rsLids->Fetch();
        $rsStud = CGroup::GetList ($by = "c_sort", $order = "asc", Array ("STRING_ID" => 'students'));
        $arStud=$rsStud->Fetch();
        $rsCourse = CGroup::GetList ($by = "c_sort", $order = "asc", Array ("STRING_ID" => $_REQUEST['COURSE']));
        $arCourse=$rsCourse->Fetch();
        //проверяем, есть ли такой пользователь в системе
        global $USER;
        $filter = Array("EMAIL" => $_REQUEST['EMAIL']);
        $rsUsers = CUser::GetList(($by = "NAME"), ($order = "desc"), $filter);
        if($arUser = $rsUsers->Fetch()) {
            //есть такой, проверяем группы
            $arGroups = CUser::GetUserGroup($arUser["ID"]);
            if(in_array($arStud["ID"],$arGroups)){
                //уже обучается
                if(in_array($arCourse["ID"],$arGroups)){
                    //уже оплатил этот курс
                    //письмо с уведомлением и ссылкой в ЛК,
                    //промо предложением и ссылкой на восстановление пароля
                }
            }

        }else{
            //готовим $checkword
            $checkword = randString(8);
            $salt = randString(8);
            //создаем лида
            $user = new CUser;
            $arFields = Array(
                "EMAIL"             => $_REQUEST['EMAIL'],
                "LOGIN"             => $_REQUEST['EMAIL'],
                "LID"               => "ru",
                "ACTIVE"            => "Y",
                "GROUP_ID"          => array($arLids["ID"]),
                "CHECKWORD"         => $salt.md5($salt.$checkword),
                "PASSWORD"          => "!Aa123456",
                "CONFIRM_PASSWORD"  => "!Aa123456"
            );

            $ID = $user->Add($arFields);
            if (intval($ID) > 0)
            {
                echo "Пользователь успешно добавлен.";
                //письмо с приглашением в личный кабинет
                //промо предложением и предложением оплатить курс $arCourse["ID"]
                //ОТПРАВИТЬ В ПИСЬМЕ $checkword
            }
            else
            {
                echo $user->LAST_ERROR;
            }

        }


        //оповещение по почте
        /* получатель */
        $to= $_REQUEST['EMAIL'];

        /* тема/subject */
        $subject = "Вы записались на обучающий курс ".$arCourse["NAME"];

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