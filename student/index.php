<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if(strlen($APPLICATION->GetTitle())<=0)$APPLICATION->SetTitle("Êóðñû");
?>

    <!-- Header -->
    <header id="header">
        <a href="#" class="logo"><?=$APPLICATION->ShowTitle()?></a>
        <?/*?>
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
        </ul>
        <?*/?>
    </header>
    <section>
    <?/*?>
    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <header>
                <h1>Hi, I’m Editorial<br />
                    by HTML5 UP</h1>
                <p>A free and fully responsive site template</p>
            </header>
            <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
            <ul class="actions">
                <li><a href="#" class="button big">Learn More</a></li>
            </ul>
        </div>
									<span class="image object">
										<img src="<?=SITE_TEMPLATE_PATH?>/images/pic10.jpg" alt="" />
									</span>
    </section>

    <!-- Section -->
    <section>
        <header class="major">
            <h2>Erat lacinia</h2>
        </header>
        <div class="features">
            <article>
                <span class="icon fa-diamond"></span>
                <div class="content">
                    <h3>Portitor ullamcorper</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
            <article>
                <span class="icon fa-paper-plane"></span>
                <div class="content">
                    <h3>Sapien veroeros</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
            <article>
                <span class="icon fa-rocket"></span>
                <div class="content">
                    <h3>Quam lorem ipsum</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
            <article>
                <span class="icon fa-signal"></span>
                <div class="content">
                    <h3>Sed magna finibus</h3>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                </div>
            </article>
        </div>
    </section>

    <!-- Section -->
    <section>
        <header class="major">
            <h2>Ipsum sed dolor</h2>
        </header>
        <div class="posts">
            <article>
                <a href="#" class="image"><img src="<?=SITE_TEMPLATE_PATH?>/images/pic01.jpg" alt="" /></a>
                <h3>Interdum aenean</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                <ul class="actions">
                    <li><a href="#" class="button">More</a></li>
                </ul>
            </article>
            <article>
                <a href="#" class="image"><img src="<?=SITE_TEMPLATE_PATH?>/images/pic02.jpg" alt="" /></a>
                <h3>Nulla amet dolore</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                <ul class="actions">
                    <li><a href="#" class="button">More</a></li>
                </ul>
            </article>
            <article>
                <a href="#" class="image"><img src="<?=SITE_TEMPLATE_PATH?>/images/pic03.jpg" alt="" /></a>
                <h3>Tempus ullamcorper</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                <ul class="actions">
                    <li><a href="#" class="button">More</a></li>
                </ul>
            </article>
            <article>
                <a href="#" class="image"><img src="<?=SITE_TEMPLATE_PATH?>/images/pic04.jpg" alt="" /></a>
                <h3>Sed etiam facilis</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                <ul class="actions">
                    <li><a href="#" class="button">More</a></li>
                </ul>
            </article>
            <article>
                <a href="#" class="image"><img src="<?=SITE_TEMPLATE_PATH?>/images/pic05.jpg" alt="" /></a>
                <h3>Feugiat lorem aenean</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                <ul class="actions">
                    <li><a href="#" class="button">More</a></li>
                </ul>
            </article>
            <article>
                <a href="#" class="image"><img src="<?=SITE_TEMPLATE_PATH?>/images/pic06.jpg" alt="" /></a>
                <h3>Amet varius aliquam</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                <ul class="actions">
                    <li><a href="#" class="button">More</a></li>
                </ul>
            </article>
        </div>
    </section>
<?*/?>

<!--    <div class="col-lg-6" style="height: 95%;">-->
<!--        <div class="scroll-work-area" style="height: 100%;">-->
<!--            <div>-->
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
                            "PAGER_TITLE" => "Ñòðàíèöà",
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
                        "CACHE_TYPE" => "N",
                        "CACHE_TIME" => "3600",
                        "CACHE_NOTES" => "",
                        "SHOW_ADDITIONAL" => "Y",
                        "VARIABLE_ALIASES" => Array(
                            "WEB_FORM_ID" => "WEB_FORM_ID",
                            "RESULT_ID" => "RESULT_ID"
                        )
                    ),
                    false
                );?>
                <?elseif(isset($_REQUEST["course"])):
                    CModule::IncludeModule('iblock');
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
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>