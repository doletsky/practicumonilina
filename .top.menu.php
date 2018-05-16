<?
$aMenuLinks = Array();
if(CModule::IncludeModule("iblock"))
{

  $arFilter = Array('IBLOCK_ID'=>24, 'ACTIVE'=>'Y');
  $db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
  while($ar_result = $db_list->GetNext())
  {
   $aMenuLinks[]=array($ar_result['NAME'],"/".$ar_result['CODE']."/",array(),array(),"");
  }

}
?>