<?
/*
  выводит св-ва пользовательского типа
*/
CModule::IncludeModule("iblock");
CModule::IncludeModule('highloadblock');

$hlblock = \Bitrix\Highloadblock\HighloadBlockTable::getList( array("filter" => array( 'TABLE_NAME' => "b_hlbd_dictsizes" )) )->fetch();

print_r($hlblock);

$entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();
$rsPropEnums = $entity_data_class::getList(array('filter'=>array("UF_XML_ID" => "22b3192e-fdbe-11e5-810b-00155dd24501")));

while ($arEnum = $rsPropEnums->fetch()) {
  print_r($arEnum);
}
?>
