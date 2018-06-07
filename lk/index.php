<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if(strlen($APPLICATION->GetTitle())<=0)$APPLICATION->SetTitle("Курсы");
?> 
<div class="col-lg-6" style="height: 95%;"> 
  <div class="scroll-work-area" style="height: 100%;">
    <div>
        <?if(isset($_REQUEST["id"])):
            $APPLICATION->IncludeComponent(
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
            <?$APPLICATION->IncludeComponent(
            "bitrix:form.result.list.my",
            "",
            Array(
                "FORMS" => array("4"),
                "NUM_RESULTS" => "10",
                "LIST_URL" => "my_result_list.php?WEB_FORM_ID=#FORM_ID#",
                "VIEW_URL" => "my_result_view.php?WEB_FORM_ID=#FORM_ID#&RESULT_ID=#RESULT_ID#",
                "EDIT_URL" => "my_result_edit.php?WEB_FORM_ID=#FORM_ID#&RESULT_ID=#RESULT_ID#"
            ),
            false
        );?> 
            <?$APPLICATION->IncludeComponent(
            "bitrix:form.result.new",
            "",
            Array(
                "SEF_MODE" => "N",
                "WEB_FORM_ID" => "4",
                "LIST_URL" => "result_list.php",
                "EDIT_URL" => "result_edit.php",
                "SUCCESS_URL" => "",
                "CHAIN_ITEM_TEXT" => "",
                "CHAIN_ITEM_LINK" => "",
                "IGNORE_CUSTOM_TEMPLATE" => "N",
                "USE_EXTENDED_ERRORS" => "N",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "CACHE_NOTES" => "",
                "VARIABLE_ALIASES" => Array(
                    "WEB_FORM_ID" => "WEB_FORM_ID",
                    "RESULT_ID" => "RESULT_ID"
                )
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
</div>
  </div>
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>