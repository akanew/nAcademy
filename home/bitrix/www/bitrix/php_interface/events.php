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
?>