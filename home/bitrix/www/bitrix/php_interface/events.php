<?
AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", Array("IBlock_Elements_Update", "OnBeforeIBlockElementUpdateHandler"));

class IBlock_Elements_Update
{
    function OnBeforeIBlockElementUpdateHandler(&$arFields)
    {
		if($arFields["IBLOCK_ID"] == PRODUCTS_IBLOCK_ID){
		$db_props = CIBlockElement::GetProperty($arFields['IBLOCK_ID'], $arFields['ID'], array("sort" => "asc"), Array("CODE"=>"PRICE"));
		if($ar_props = $db_props->Fetch())
			if(strlen($arFields["PROPERTY_VALUES"][$ar_props["ID"]][$ar_props["PROPERTY_VALUE_ID"]]['VALUE']))
				$arFields["PROPERTY_VALUES"][$ar_props["ID"]][$ar_props["PROPERTY_VALUE_ID"]]['VALUE']=preg_replace("/[^\d]/","",$arFields["PROPERTY_VALUES"][$ar_props["ID"]][$ar_props["PROPERTY_VALUE_ID"]]['VALUE']);
		}
		
		if($arFields["IBLOCK_ID"] == NEWS_IBLOCK_ID){
			if($arFields["ACTIVE"] == 'Y'){
				$previousDate = strtotime("-3 day");
				if($arFields["ACTIVE_FROM"] < $previousDate){
					$arFields["ACTIVE"]='N';
					
				}
			}
		}
    }
}

AddEventHandler("iblock", "OnBeforeIBlockElementDelete", Array("IBlock_Elements_Delete", "OnBeforeIBlockElementDeleteHandler"));

class IBlock_Elements_Delete
{
    function OnBeforeIBlockElementDeleteHandler($ID)
    {
		if(CModule::IncludeModule('iblock'))
			{
			$arFilter = Array("IBLOCK_ID"=>PRODUCTS_IBLOCK_ID, "ID" => $ID);
			$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, Array("ID", "SHOW_COUNTER"));
			while($ar_fields = $res->GetNext())
				if($ar_fields[SHOW_COUNTER] > 1){
					$APPLICATION->throwException("�� ����� ������� �����, ���������� ���������� �������� ���������� ".$ar_fields[SHOW_COUNTER].'.');
					return false;
				}
					
			}
    }
}
?>