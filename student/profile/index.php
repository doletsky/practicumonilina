<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
    <div class="col-lg-6">
        <?$APPLICATION->IncludeComponent("bitrix:forum.user.profile.edit","",Array(
                "UID" => $USER->GetID(),
                "URL_TEMPLATES_PROFILE_VIEW" => "profile_view.php?UID=#UID#",
                "USER_PROPERTY" => Array(),
                "SET_NAVIGATION" => "Y",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => 0,
                "SET_TITLE" => "Y"
            )
        );?>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>