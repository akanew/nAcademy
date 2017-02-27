<?
global $APPLICATION;

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
					$APPLICATION->throwException("Не стоит удалять товар, количество просмотров которого составляет ".$ar_fields[SHOW_COUNTER].'.');
					return false;
				}
		}
    }
}

AddEventHandler("main", "OnBeforeUserAdd", Array("Add_User_To_Group_Manager", "OnBeforeUserAddHandler"));
AddEventHandler("main", "OnBeforeUserUpdate", Array("Add_User_To_Group_Manager", "OnBeforeUserUpdateHandler"));

class Add_User_To_Group_Manager
{
    function OnBeforeUserAddHandler(&$arFields){
		//sendPostAllUsers(&$arFields);
		foreach($arFields["GROUP_ID"] as $arGroup){			
			if($arGroup["GROUP_ID"] == CONTENT_MANAGER_GROUP_ID){
				$arUsers = CGroup::GetGroupUser($arGroup["GROUP_ID"]);
				foreach($arUsers as $arUser){
					$arFilter = Array("GROUPS_ID" => Array($arGroup["GROUP_ID"]));
					$rsUsers = CUser::GetList(($by="personal_country"), ($order="desc"), $arFilter);
					$arEmail = array();
					while($arResUser = $rsUsers->GetNext())
						$arEmail[] = $arResUser["EMAIL"];
				}
			}
		}
		
		if(count($arEmail) > 0)
		{
			$arEventFields = array(
				"MAIL_TO" => implode(", ", $arEmail),
				"USER" => $arFields["LAST_NAME"].' '.$arFields["NAME"]
			);
			CEvent::Send("ADD_USER_TO_MANAGER_GROUP", "s1", $arEventFields);
		}
		$APPLICATION->throwException("Этого пользователя в группу \"Контент-менеджер\" позже добавит администратор.");
		//return false;
    }
	
	function OnBeforeUserUpdateHandler(&$arFields){
		//sendPostAllUsers(&$arFields)
		foreach($arFields["GROUP_ID"] as $arGroup){			
			if($arGroup["GROUP_ID"] == CONTENT_MANAGER_GROUP_ID){
				$arUsers = CGroup::GetGroupUser($arGroup["GROUP_ID"]);
				foreach($arUsers as $arUser){
					$arFilter = Array("GROUPS_ID" => Array($arGroup["GROUP_ID"]));
					$rsUsers = CUser::GetList(($by="personal_country"), ($order="desc"), $arFilter);
					$arEmail = array();
					while($arResUser = $rsUsers->GetNext())
						$arEmail[] = $arResUser["EMAIL"];
				}
			}
		}
		
		if(count($arEmail) > 0)
		{
			$arEventFields = array(
				"MAIL_TO" => implode(", ", $arEmail),
				"USER" => $arFields["LAST_NAME"].' '.$arFields["NAME"]
			);
			CEvent::Send("ADD_USER_TO_MANAGER_GROUP", "s1", $arEventFields);
		}
		$APPLICATION->throwException("Этого пользователя в группу \"Контент-менеджер\" позже добавит администратор.");
		//return false;
	}
	
	/*function sendPostAllUsers(&$arFields){}*/
	
}
?>