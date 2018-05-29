<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("forum");
$arTopic = CForumTopic::GetByID($_REQUEST["tid"]);

$ar=array(
    'new_mess'=>'0'
);
if($_REQUEST["count"]!=$arTopic["POSTS"]+1){
    //добавились сообщения
    $arMess=array();
    $db_res = CForumMessage::GetList(array("POST_DATE"=>"ASC"), array("TOPIC_ID"=>$_REQUEST["tid"]));
    while ($res = $db_res->Fetch())
    {
        $me='';
        $author='Куратор ';
        if($USER->GetID()==$res["AUTHOR_ID"]){
            $me='chat-message-me';
        }
        if($USER->GetID()==$res["AUTHOR_ID"]){
            $author='Я ';
        }
        $arMess[]=array(
            "id"=>$res["ID"],
            "data"=>$res["POST_DATE"],
            "post"=>$res["POST_MESSAGE_TEXT"],
            "me"=>$me,
            "author"=>$author
        );

    }
}
$ar=array(
    'new_mess'=>'1',
    'html_mess'=>$arMess
);
echo json_encode( $ar );