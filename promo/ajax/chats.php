<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("forum");
$arTopic = CForumTopic::GetByID($_REQUEST["tid"]);

$ar=array(
    'new_mess'=>'0'
);
if($_REQUEST["count"]!=$arTopic["POSTS"]+1){
    //добавились сообщения
    $messHtml='';
    $db_res = CForumMessage::GetList(array("POST_DATE"=>"ASC"), array("TOPIC_ID"=>$_REQUEST["tid"]));
    while ($res = $db_res->Fetch())
    {
        $messHtml.='<div class="chat-message col-md-12">';
        $messHtml.='<div class="reviews-text ';
        if($USER->GetID()==$res["AUTHOR_ID"]){
            $messHtml.='chat-message-me';
        }
        $messHtml.='" id="message_text_'.$res["ID"].'"><div class="chat-message-author col-md-12">';
        if($USER->GetID()!=$res["AUTHOR_ID"]){
            $messHtml.='Куратор ';
        }else{
            $messHtml.='Я ';
        }
        $messHtml.='<span class="message-post-date">'.$res["POST_DATE"]."</span></div>".$res["POST_MESSAGE_TEXT"]."</div></div>";
    }
}
$ar=array(
    'new_mess'=>'1',
    'html_mess'=>$messHtml
);
echo json_encode( $ar );