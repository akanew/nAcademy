<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Продукция");
?><?$APPLICATION->IncludeComponent("bitrix:catalog", ".default", array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "2",
	"BASKET_URL" => "",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/products/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_SHADOW" => "Y",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"DISPLAY_PANEL" => "N",
	"SECTION_SHOW_PARENT_NAME" => "N",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "Y",
	"USE_FILTER" => "N",
	"USE_COMPARE" => "N",
	"PRICE_CODE" => array(
		0 => "PRICE",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "N",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"SHOW_TOP_ELEMENTS" => "N",
	"PAGE_ELEMENT_COUNT" => "10",
	"LINE_ELEMENT_COUNT" => "1",
	"ELEMENT_SORT_FIELD" => "sort",
	"ELEMENT_SORT_ORDER" => "asc",
	"LIST_PROPERTY_CODE" => array(
		0 => "PRICECURRENCY",
		1 => "",
	),
	"INCLUDE_SUBSECTIONS" => "Y",
	"LIST_META_KEYWORDS" => "-",
	"LIST_META_DESCRIPTION" => "-",
	"LIST_BROWSER_TITLE" => "-",
	"DETAIL_PROPERTY_CODE" => array(
		0 => "SIZE",
		1 => "S_SIZE",
		2 => "ARTNUMBER",
		3 => "MATERIAL",
		4 => "MANUFACTURER",
		5 => "",
	),
	"DETAIL_META_KEYWORDS" => "-",
	"DETAIL_META_DESCRIPTION" => "-",
	"DETAIL_BROWSER_TITLE" => "-",
	"DETAIL_SHOW_PICTURE" => "Y",
	"LINK_IBLOCK_TYPE" => "",
	"LINK_IBLOCK_ID" => "",
	"LINK_PROPERTY_SID" => "",
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Продукция",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => "arrows",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
	"PAGER_SHOW_ALL" => "N",
	"AJAX_OPTION_ADDITIONAL" => "",
	"SEF_URL_TEMPLATES" => array(
		"sections" => "",
		"section" => "#SECTION_ID#/",
		"element" => "#SECTION_ID#/#ELEMENT_ID#/",
		"compare" => "",
	)
	),
	false
);?>

<?
	/*define("PRODUCTS_IBLOCK_ID", 2);
	//Выборка всех секций
	//if(CModule::IncludeModule('iblock')){
	//	$arSelect = Array('ID', 'NAME', 'SECTION_ID');
	//	$arFilter = Array('IBLOCK_ID'=>PRODUCTS_IBLOCK_ID);
	//	$res = CIBlockSection::GetList(Array('SORT'=>'ASC'), $arFilter, true, $arSelect);
	//	while($ob = $res->GetNext())
	//		echo $ob['ID'].'-'.$ob['NAME'].'-'.$ob['SECTION_ID'].'<br />';
	//}
	//Получаем id раздела
	$page = $APPLICATION->GetCurPage();
	$indSlash = strrpos($page, '/');
	$subStr = substr($page, 0, $indSlash);
	$indSlash2 = strrpos($subStr, '/');
	$sectionId = substr($subStr, $indSlash2+1);

	//Получаем список всех товаров раздела
	$arSelect = Array("ID");
	$arFilter = Array("IBLOCK_ID" => PRODUCTS_IBLOCK_ID, 'SECTION_ID'=>$sectionId);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
	$materials = array();
	$materialsCnt = array();
	while($ob = $res->GetNextElement()){
		$arFields = $ob->GetFields();
		//Определяем материалы всех товаров раздела		
		$db_props = CIBlockElement::GetProperty(PRODUCTS_IBLOCK_ID, $arFields['ID'], array("sort" => "asc"), Array("CODE"=>"MATERIAL"));
		if($ar_props = $db_props->Fetch()){
			$materials[] = $ar_props["VALUE"];
			$materialsCnt[] = 0;
		}
	}

	//Вычисляем количество товаров каждого типа
	$arSelect = Array("ID");
	$arFilter = Array("IBLOCK_ID" => PRODUCTS_IBLOCK_ID, 'SECTION_ID'=>$sectionId);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
	while($ob = $res->GetNextElement()){
		$arFields = $ob->GetFields();
		//Определяем материалы всех товаров раздела
		$db_props = CIBlockElement::GetProperty(PRODUCTS_IBLOCK_ID, $arFields['ID'], array("sort" => "asc"), Array("CODE"=>"MATERIAL"));
		if($ar_props = $db_props->Fetch()){
			for($i=0; $i<count($materials); $i++){
				if(strcmp($ar_props["VALUE"],$materials[$i])==0){
					$materialsCnt[$i]++;
					break;
				}
			}
		}
	}	
	
	$this->SetViewTarget();
	for($i=0; $i<count($materials); $i++)
		echo 'Из материалов "'.$material[$i].'" выполнено '.$materialsCnt[$i].' товаров.<br>'
	$this->EndViewTarget();*/
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>