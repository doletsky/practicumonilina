<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>

                    <?
                    if ($USER->IsAuthorized()) {
                        if ($USER->IsAdmin()) {
                            LocalRedirect('/lk/admin.php');
                        } else {
                            LocalRedirect('/lk/');
                        }
                    } else {
                        $APPLICATION->IncludeComponent(
                            "bitrix:system.auth.form",
                            "",
                            Array(
                                "REGISTER_URL" => "",
                                "FORGOT_PASSWORD_URL" => "/fogotpass.php",
                                "PROFILE_URL" => "",
                                "SHOW_ERRORS" => "Y"
                            ),
                            false
                        );
                    }
                    ?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>