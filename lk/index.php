<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
<div class="row lk-students-body">
    <div class="col-md-3">
        <h5>Список уроков</h5>
        <div class="col-md-12">
            <a href="#">
                Урок 1. Введение.
            </a>
        </div>
        <div class="col-md-12">
            <a href="#">
                Урок 2. Тема.
            </a>
        </div>
        <div class="col-md-12">
            <a href="#">
                Урок 3. Тема.
            </a>
        </div>

    </div>
    <div class="col-lg-5">
            <h4><span class="colored"><?$APPLICATION->ShowTitle()?></span></h4>
        Это рабочее поля занятия.<br>
        Здесь будет весь рабочий материал: видео, текст, тесты и поле выполнения д/з.
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>