<?if($APPLICATION->GetCurDir()=='/lk/' && !$USER->IsAuthorized()) LocalRedirect('/');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title><?$APPLICATION->ShowTitle()?></title>
<meta http-equiv="Content-Type" content="text/xml; charset=windows-1251" />
<link href="/promo/css/style.css" rel="stylesheet" type="text/css" />
<link href="/promo/css/style_lk.css" rel="stylesheet" type="text/css" />
    <link href="/promo/css/jquery.jscrollpane.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/promo/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="/promo/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="/promo/js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="/promo/js/lk.js"></script>

<?$APPLICATION->ShowHead();?>
<?//if(!isset($_SESSION["PR"]["topic_id"]) || !isset($_SESSION["PR"]["main_id"])){
//    CModule::IncludeModule("iblock");
//    $arFilter = Array(
//        "IBLOCK_ID"=>MAIN_IBLOCK_ID,
//        "ACTIVE"=>"Y",
//        "PROPERTY_USER"=>$USER->GetID()
//    );
//    $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, Array("ID","IBLOCK_ID","PROPERTY_FORUM_TOPIC_ID"));
//    if($ar_fields = $res->GetNext()){
//        $_SESSION["PR"]["topic_id"]=$ar_fields["PROPERTY_FORUM_TOPIC_ID_VALUE"];
//        $_SESSION["PR"]["main_id"]=$ar_fields["ID"];
//    }
//
//}?>
</head>

<body>
<?
if ($USER->IsAdmin() && $_GET["panel"]==1)$APPLICATION->ShowPanel();
?>
<div class="section-content mfp-wrap">
    <div class="container lk-students">
        <div class="row">
            <div class="col-md-3">
                <a class="logo-header">
                    <span class="pull-right">ONLINE</span>
                    <h4><span class="colored">PRACTICUM</span></h4>
                    <div class="clearfix"></div>
                    <hr>
                </a>
            </div>
            <div class="col-lg-8">menu</div>
        </div>

