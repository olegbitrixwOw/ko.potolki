<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("� ���");
?>

���� �������� �������� �������� ���������� ������� �� �����. �� ���������� ����� ������ � ���������� ���� �� �������� �������. � ���� �� ������ ���� ��������, ��� ���� ������ �� ����� ��������� ���. &nbsp;��� ������������ �������� ����������� ������ ����������� � ����������� ���������. ������ �������� ������� �������� ������� �������� ��������. ���������� ��������� � ����� ������ ����� ��������.

<br/>
	<p><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/video_youtube.php"), false);?></p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

