<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

    <div class="col-lg-6">
        <pre><?print_r($_REQUEST)?></pre>
            <h4><span class="colored"><?$APPLICATION->ShowTitle()?></span></h4>
        ��� ������� ���� �������.<br>
        ����� ����� ���� ������� ��������: �����, �����, ����� � ���� ���������� �/�.
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>