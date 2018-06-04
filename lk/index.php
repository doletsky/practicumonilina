<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if(strlen($APPLICATION->GetTitle())<=0)$APPLICATION->SetTitle("Курсы");
?> 
<div class="col-lg-6" style="height: 95%;">
    <div class="scroll-work-area" style="height: 100%"><div>
<?if(isset($_REQUEST["id"])):$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"",
	Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "contents",
		"IBLOCK_ID" => "34",
		"ELEMENT_ID" => $_REQUEST["id"],
		"ELEMENT_CODE" => "",
		"CHECK_DATES" => "Y",
		"FIELD_CODE" => array(),
		"PROPERTY_CODE" => array('MEDIA','USER_GROUP_ID'),
		"IBLOCK_URL" => "",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"USE_PERMISSIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Страница",
		"PAGER_TEMPLATE" => "",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	),
false
);?>
<?elseif(isset($_REQUEST["course"])):
    $arFilter = Array(
        "IBLOCK_ID"=>COURSE_IBLOCK_ID,
        "ACTIVE"=>"Y",
        "CODE"=>$_REQUEST["course"]
    );
    $res = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter);
    $ar_fields = $res->GetNext();
    echo $ar_fields["DESCRIPTION"];
    ?>

<?endif;?>
        </div></div>
</div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>