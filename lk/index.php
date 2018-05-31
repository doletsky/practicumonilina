<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

    <div class="col-lg-6">
        <pre><?print_r($_REQUEST)?></pre>
            <h4><span class="colored"><?$APPLICATION->ShowTitle()?></span></h4>
        Это рабочее поля занятия.<br>
        Здесь будет весь рабочий материал: видео, текст, тесты и поле выполнения д/з.
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>