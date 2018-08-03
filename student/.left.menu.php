<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$aMenuLinks = Array();

if(!isset($_REQUEST["course"])){
    $arFilter = Array(
        "IBLOCK_ID"=>COURSE_IBLOCK_ID,
        "ACTIVE"=>"Y",
        "IBLOCK_SECTION_ID"=>false
    );
    $res = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter);
    while ($ar_fields = $res->GetNext()){
        $aMenuLinks[]=Array(
            $ar_fields["NAME"],
            "/student/course/".$ar_fields["CODE"]."/",
            Array(),
            Array(),
            ""
        );
    }
}else{
    $arFilter = Array(
        "IBLOCK_ID"=>COURSE_IBLOCK_ID,
        "ACTIVE"=>"Y",
        "CODE"=>$_REQUEST["course"]
    );
    $res = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter);
    $ar_fields = $res->GetNext();
    $course_id = $ar_fields["ID"];

    $arEFilter = Array(
        "IBLOCK_ID"=>COURSE_IBLOCK_ID,
        "ACTIVE"=>"Y",
        "IBLOCK_SECTION_ID"=>$course_id
    );
    $resEl = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFEilter);
    while ($arEfields = $resEl->GetNext()){
        if($arEfields["IBLOCK_ID"]==COURSE_IBLOCK_ID){
            $aMenuLinks[]=Array(
                $arEfields["NAME"],
                "/student/course/".$_REQUEST["course"]."/".$arEfields["ID"]."/",
                Array(),
                Array(),
                "",
                print_r($arEFilter ,true),
                print_r($arEfields,true)
            );
        }

    }
    $APPLICATION->SetTitle($ar_fields["NAME"]);
}

?>