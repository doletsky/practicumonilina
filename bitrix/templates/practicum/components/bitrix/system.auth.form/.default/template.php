<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <link href="/promo/css/style.css" rel="stylesheet" type="text/css">

                    <a class="logo-header">
                        <span class="pull-right">ONLINE</span>
                        <h4><span class="colored">PRACTICUM</span></h4>
                    </a>
                    <div class="clearfix"></div>
                    <hr>
                    <div>
                        <h2><span class="colored">Авторизация</span></h2>
                        <form id="login_form" name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
                            <input type="hidden" name="AUTH_FORM" value="Y" />
                            <input type="hidden" name="TYPE" value="AUTH" />
                            <input type="text" name="USER_LOGIN" placeholder="Логин" required="required"><br><br>
                            <input type="password" name="USER_PASSWORD" placeholder="Пароль" required="required"><br><br>
                            <input type="button" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" id="btn_form" onclick="$('#login_form').submit();">
                        </form>
                        <a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
                    </div>