<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
<div class="row lk-students-body">
    <div class="col-md-3">
        <h5>������ ������</h5>
        <div class="col-md-12">
            <a href="#">
                ���� 1. ��������.
            </a>
        </div>
        <div class="col-md-12">
            <a href="#">
                ���� 2. ����.
            </a>
        </div>
        <div class="col-md-12">
            <a href="#">
                ���� 3. ����.
            </a>
        </div>

    </div>
    <div class="col-lg-5">
            <h4><span class="colored"><?$APPLICATION->ShowTitle()?></span></h4>
        ��� ������� ���� �������.<br>
        ����� ����� ���� ������� ��������: �����, �����, ����� � ���� ���������� �/�.
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>