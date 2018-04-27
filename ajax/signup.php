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

$defaults = array('first_name' => '', 'last_name' => '', 'phone' => '', 'email' => '');
    $defaults = $_REQUEST;
//    writeToLog($_REQUEST, 'webform');
//    $queryUrl = 'https://practicumonline.bitrix24.ru/rest/1/808gmadqp2pwcyb2/crm.lead.add.json';
//    $queryData = http_build_query(
//        array(
//            'fields' => array(
//                "TITLE" => ' ',
//                "NAME" => "",
//                "LAST_NAME" => "",
//                "STATUS_ID" => "NEW",
//                "OPENED" => "Y",
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
    $queryUrl = 'https://practicumonline.bitrix24.ru/rest/1/808gmadqp2pwcyb2/crm.lead.userfield.add.json';
    $queryData = http_build_query(
        array(
            'fields' => array(
                "FIELD_NAME" =>  'PROMOCODE',
                "EDIT_FORM_LABEL" => "Промокод",
                "LIST_COLUMN_LABEL" => "Промокод",
                "USER_TYPE_ID" => "string",
                "XML_ID" => "PROMOCODE"
            )
        )
    );
    $curl = curl_init();
    curl_setopt_array($curl, array(CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_POST => 1, CURLOPT_HEADER => 0, CURLOPT_RETURNTRANSFER => 1, CURLOPT_URL => $queryUrl, CURLOPT_POSTFIELDS => $queryData,));
    $result = curl_exec($curl);
    curl_close($curl);
    $result = json_decode($result, 1);
//    writeToLog($result, 'webform result');
//    if (array_key_exists('error', $result)) echo "Ошибка при сохранении лида: " . $result['error_description'] . "
//
//	 ";
?><pre><?print_r($result)?></pre>