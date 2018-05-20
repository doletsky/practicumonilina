<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?>

    <form id="feedback" class="feedback">
        <div class="feedback_title"><h4 class="white">Задайте Ваш вопрос:</h4></div>
        <input class="feedback_addres" type="text" name="addres" placeholder="Куда Вам ответить?">
        <textarea class="feedback_qwest" name="qwest" placeholder="Ваш вопрос."></textarea>
        <input class="feedback_detect" type="hidden">
        <input type="button" class="feedback_button btn colorful" name="button" value="Отправить">
    </form>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>