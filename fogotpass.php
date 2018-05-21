<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Восстановление пароля");

$APPLICATION->IncludeComponent(
    "bitrix:system.auth.forgotpasswd",
    "practicum",
    Array(
        "COMPONENT_TEMPLATE" => ".default"
    )
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>