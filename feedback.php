<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������� �����");
?>

    <form id="feedback" class="feedback">
        <div class="feedback_title"><h4 class="white">������� ��� ������:</h4></div>
        <input class="feedback_addres" type="text" name="addres" placeholder="���� ��� ��������?">
        <textarea class="feedback_qwest" name="qwest" placeholder="��� ������."></textarea>
        <input class="feedback_detect" type="hidden">
        <input type="button" class="feedback_button btn colorful" name="button" value="���������">
    </form>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>