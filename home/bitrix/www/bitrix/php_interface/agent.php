<?
	function agentCheckStocks(){
		define("OFFERS_IBLOCK_ID",7);
		define("ADMIN_GROUP_ID",1);
		require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
		$APPLICATION->SetTitle("Test");

		$arSelect = Array("ID", "NAME", "DATE_ACTIVE_TO");
		$arFilter = Array("IBLOCK_ID" => OFFERS_IBLOCK_ID, "DATE_MODIFY_TO" => date('d.m.Y H:i:s'));
		$cntFilteringEls = CIBlockElement::GetList(Array(), $arFilter, Array(), Array("nPageSize"=>50), $arSelect);

		CEventLog::Add(array(
		"SEVERITY" => "SECURITY",
		"AUDIT_TYPE_ID" => "CHECK_OFFERS_CNT",
		"MODULE_ID" => "iblock",
		"ITEM_ID" => "",
		"DESCRIPTION" => "Количесво завершившихся акций ".$cntFilteringEls.". Администратору стоит о них позаботиться."
		));

		if($cntFilteringEls > 0)
		{
			$arFilter = Array("GROUPS_ID" => Array(ADMIN_GROUP_ID));
			$rsUsers = CUser::GetList(($by="personal_country"), ($order="desc"), $arFilter);
			$arEmail = array();
			while($arResUser = $rsUsers->GetNext())
			{
				$arEmail[] = $arResUser["EMAIL"];
				
				if(count($arEmail) > 0)
				{
					$arEventFields = array(
							"COUNT" => $cntFilteringEls,
							"MAIL_TO" => implode(", ", $arEmail)
					);
					CEvent::Send("INFO_PRICE", "s1", $arEventFields);
				}
			}
		}
		return "agentCheckStocks();";
	}
?>