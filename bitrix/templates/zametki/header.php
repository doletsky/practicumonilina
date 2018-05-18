<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<?$APPLICATION->ShowMeta("keywords")?>
<?$APPLICATION->ShowMeta("description")?>
<title><?$APPLICATION->ShowTitle()?></title>
<meta http-equiv="Content-Type" content="text/xml; charset=windows-1251" />
<script type="text/javascript" src="/js/jquery-1.5.2.min.js"></script>
<script>
$(document).ready(function () {


});

function lshow(el){
 $(el).css('display','block');
 $(el).hover(function(){$(this).stop();$(this).css('display','block');$(this).css('opacity','0.9');},function(){$(this).fadeOut(500);});
 $(el).fadeOut(2000);
}
</script>
<!--link type="text/css" rel="stylesheet" href="css/style.css"-->
<?$APPLICATION->ShowHead();?>
</head>

<body>
<?if ($USER->IsAdmin())$APPLICATION->ShowPanel();?>
<div id="all">
<div class="head">
 <div id="right"> </div> 
 <div id="center"><img title="На главную" onclick="location.href='/';" class="img_title" src="/images/zametki/title2.png" />
<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "z1"
	),
false
);?>
 <div class="head_right">
  <a href="/"><img title="На главную" class="img_title" src="/images/zametki/ihome.png" /></a>
  <a href="#" onclick="lshow($('.search-form'));return false;"><img title="Найти" class="img_title" src="/images/zametki/ifind.png" /></a>
  <a href="#" onclick="lshow($('.bx-system-auth-form'));return false;"><img title="Авторизация/регистрация" class="img_title" src="/images/zametki/ilogin.png" /></a>
  <a href="/pravila.php"><img title="Правила" class="img_title" src="/images/zametki/iattention.png" /></a>
<div class="today" title="Сегодня <?=ConvertTimeStamp(time(), "SHORT", "ru")?> <?=FormatDate("l",time())?>"><?=ConvertDateTime(ConvertTimeStamp(time(), "SHORT", "ru"), "DD", "ru")?>
</div><br />
<?$APPLICATION->IncludeComponent(
	"znp:subscribe.form",
	"",
	Array(
		"USE_PERSONALIZATION" => "Y",
		"PAGE" => "#SITE_DIR#personal/subscribe/",
		"SHOW_HIDDEN" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_NOTES" => ""
	),
false
);?>
<div id="hr"> <?$APPLICATION->IncludeComponent(
	"znp:system.auth.form",
	"",
	Array(
		"REGISTER_URL" => "/auth/",
		"FORGOT_PASSWORD_URL" => "/auth/",
		"PROFILE_URL" => "/personal/profile/",
		"SHOW_ERRORS" => "N"
	),
false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:search.form",
	"flat",
	Array(
		"USE_SUGGEST" => "N",
		"PAGE" => "#SITE_DIR#search/index.php"
	),
false
);?> </div>
 </div>
 <?
// выведем меню типа "top"
$APPLICATION->IncludeComponent(
	"znp:menu",
	"h_main",
	Array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "1"
	)
);
?>
			<div class="clear"></div>

 </div>
</div>



<div id="container">
	<div id="inner">
		<div id="left">

		</div>

		<div id="right"> </div>

		<div id="center">

               <div class="right_colum">
<b>Популярные сообщения:</b>
<?$APPLICATION->IncludeComponent("znp:news.list","",Array(
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "24",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "show_counter",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => Array("SHOW_COUNTER"),
		"PROPERTY_CODE" => Array(),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?>
  <hr />
<b>Самые комментируемые:</b>
<?$APPLICATION->IncludeComponent("znp:news.list","",Array(
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "24",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "PROPERTY_FORUM_MESSAGE_CNT",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => Array(),
		"PROPERTY_CODE" => Array("FORUM_MESSAGE_CNT"),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?>
  <hr />
<b>Галерея блога:</b>
<?$APPLICATION->IncludeFile("/rndfoto.php");?>

 <br />Из интернета<br />
<div id="outlinks"></div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42811926-1', 'zametkina.ru');
  ga('send', 'pageview');

</script>
</div> 
                <div style="font-size:14px; float: left; width: 69%;">