<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������������� ������");

$APPLICATION->IncludeComponent(
    "bitrix:system.auth.forgotpasswd",
    ".default",
    Array(
        "COMPONENT_TEMPLATE" => ".default"
    )
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>