<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("����� ������");

$APPLICATION->IncludeComponent(
    "bitrix:system.auth.changepasswd",
    ".default",
    Array(
        "SHOW_ERRORS" => "Y"
    )
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");