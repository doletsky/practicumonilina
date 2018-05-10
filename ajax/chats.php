<?php
function BXCRMwebhook($command, $data = array()){
    $queryUrl = 'https://practicumonline.bitrix24.ru/rest/1/808gmadqp2pwcyb2/im.message.add.json';
    $queryData = http_build_query($data);
    $curl = curl_init();
    curl_setopt_array($curl, array(CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_POST => 1, CURLOPT_HEADER => 0, CURLOPT_RETURNTRANSFER => 1, CURLOPT_URL => $queryUrl, CURLOPT_POSTFIELDS => $queryData,));
    $result = curl_exec($curl);
    curl_close($curl);
    $result = json_decode($result, 1);
    return $result;
}
$arData=array(
    'CODE' => '808gmadqp2pwcyb2',
    'CHAT_ID' => 22, // Идентификатор чата получателя, если сообщение для чата
    'MESSAGE' => 'Текст сообщения' // Тест сообщения
);
$arResult=BXCRMwebhook($command, $arData);
?><pre><?print_r($arResult)?></pre>