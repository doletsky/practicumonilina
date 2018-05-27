<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
<div class="row">
    <div class="col-md-3">
        <h5>Список уроков</h5>
        <div class="col-md-12">
            <a href="#">
                Урок 1. Введение.
            </a>
        </div>
        <div class="col-md-12">
            <a href="#">
                Урок 2. Тема.
            </a>
        </div>
        <div class="col-md-12">
            <a href="#">
                Урок 3. Тема.
            </a>
        </div>

    </div>
    <div class="col-lg-5">
            <h4><span class="colored"><?$APPLICATION->ShowTitle()?></span></h4>
        Это рабочее поля занятия.<br>
        Здесь будет весь рабочий материал: видео, текст, тесты и поле выполнения д/з.
    </div>
    <div class="col-md-4" style="overflow-y: scroll;height: 310px;position: relative;">
        <?$APPLICATION->IncludeComponent("bitrix:forum.topic.reviews","chat",Array(
                "SHOW_LINK_TO_FORUM" => "N",
                "FILES_COUNT" => "2",
                "FORUM_ID" => "8",
                "IBLOCK_TYPE" => "photos",
                "IBLOCK_ID" => MAIN_IBLOCK_ID,
                "ELEMENT_ID" => $_SESSION["PR"]["main_id"],
                "AJAX_POST" => "N",
                "POST_FIRST_MESSAGE" => "Y",
                "POST_FIRST_MESSAGE_TEMPLATE" => "#IMAGE#[url=#LINK#]#TITLE#[/url]#BODY#",
                "URL_TEMPLATES_READ" => "read.php?FID=#FID#&TID=#TID#",
                "URL_TEMPLATES_DETAIL" => "photo_detail.php?ID=#ELEMENT_ID#",
                "URL_TEMPLATES_PROFILE_VIEW" => "profile_view.php?UID=#UID#",
                "MESSAGES_PER_PAGE" => "10",
                "PAGE_NAVIGATION_TEMPLATE" => "",
                "DATE_TIME_FORMAT" => "d.m.Y H:i:s",
                "PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
                "EDITOR_CODE_DEFAULT" => "Y",
                "SHOW_AVATAR" => "Y",
                "SHOW_RATING" => "Y",
                "RATING_TYPE" => "like",
                "SHOW_MINIMIZED" => "Y",
                "USE_CAPTCHA" => "Y",
                "PREORDER" => "Y",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "0"
            )
        );?>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>