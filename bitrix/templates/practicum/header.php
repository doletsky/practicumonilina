<?if($APPLICATION->GetCurDir()=='/lk/' && !$USER->IsAuthorized()) LocalRedirect('/');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title><?$APPLICATION->ShowTitle()?></title>
<meta http-equiv="Content-Type" content="text/xml; charset=windows-1251" />
<script type="text/javascript" src="/promo/js/jquery-2.2.3.min.js"></script>
<?$APPLICATION->ShowHead();?>

</head>

<body>
<?
if ($USER->IsAdmin())$APPLICATION->ShowPanel();
?>