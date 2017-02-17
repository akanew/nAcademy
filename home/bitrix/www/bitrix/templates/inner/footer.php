<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
			</div>
				</div>
				<div class="sb_sidebar">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"footer_menu",
						Array(
							"ROOT_MENU_TYPE" => "left",
							"MAX_LEVEL" => "2",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "N",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => "",
							"COMPONENT_TEMPLATE" => "vertical_multilevel"
						)
					);?>
					<?
						//определяем каталог для сравнения
						$curPage = $APPLICATION->GetCurPage();
						$cutCurPage = substr($curPage, 1, strrpos($curPage, "/")-1);
						
						if($cutCurPage != "forPartners"){
							$APPLICATION->IncludeComponent(
							"bitrix:main.include", 
							"template1", 
							array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"AREA_FILE_RECURSIVE" => "Y",
								"EDIT_TEMPLATE" => "",
								"COMPONENT_TEMPLATE" => "template1",
								"PATH" => "/bitrix/templates/inner/components/bitrix/main.include/template1/sect_inc.php"
							),
							false);
						}
						else {
							$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "sect",
									"AREA_FILE_SUFFIX" => "inc",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => ""
								)
							);
						}?>
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"offers",
							Array(
								"DISPLAY_DATE" => "N",
								"DISPLAY_NAME" => "N",
								"DISPLAY_PICTURE" => "N",
								"DISPLAY_PREVIEW_TEXT" => "N",
								"AJAX_MODE" => "N",
								"IBLOCK_TYPE" => "offer",
								"IBLOCK_ID" => "7",
								"NEWS_COUNT" => "20",
								"SORT_BY1" => "ACTIVE_FROM",
								"SORT_ORDER1" => "DESC",
								"SORT_BY2" => "SORT",
								"SORT_ORDER2" => "ASC",
								"FILTER_NAME" => "",
								"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",),
								"PROPERTY_CODE" => "",
								"CHECK_DATES" => "Y",
								"DETAIL_URL" => "",
								"PREVIEW_TRUNCATE_LEN" => "",
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"SET_TITLE" => "N",
								"SET_BROWSER_TITLE" => "N",
								"SET_META_KEYWORDS" => "N",
								"SET_META_DESCRIPTION" => "N",
								"SET_LAST_MODIFIED" => "N",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
								"ADD_SECTIONS_CHAIN" => "Y",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"PARENT_SECTION" => "",
								"PARENT_SECTION_CODE" => "",
								"INCLUDE_SUBSECTIONS" => "N",
								"CACHE_TYPE" => "A",
								"CACHE_TIME" => "36000000",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "Y",
								"PAGER_TEMPLATE" => ".default",
								"DISPLAY_TOP_PAGER" => "N",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"PAGER_TITLE" => "Новости",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"PAGER_BASE_LINK_ENABLE" => "N",
								"SET_STATUS_404" => "N",
								"SHOW_404" => "N",
								"MESSAGE_404" => "",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"AJAX_OPTION_HISTORY" => "N"
							)
						);?>
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"rand_review",
							Array(
								"DISPLAY_DATE" => "N",
								"DISPLAY_NAME" => "N",
								"DISPLAY_PICTURE" => "N",
								"DISPLAY_PREVIEW_TEXT" => "N",
								"AJAX_MODE" => "N",
								"IBLOCK_TYPE" => "reviews",
								"IBLOCK_ID" => "6",
								"NEWS_COUNT" => "1",
								"SORT_BY1" => "ID",
								"SORT_ORDER1" => "rand",
								"SORT_BY2" => "ID",
								"SORT_ORDER2" => "rand",
								"FILTER_NAME" => "",
								"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"",),
								"PROPERTY_CODE" => array(0=>"PROFESSION",1=>"COMPANY",2=>"",),
								"CHECK_DATES" => "Y",
								"DETAIL_URL" => "",
								"PREVIEW_TRUNCATE_LEN" => "",
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"SET_TITLE" => "N",
								"SET_BROWSER_TITLE" => "N",
								"SET_META_KEYWORDS" => "N",
								"SET_META_DESCRIPTION" => "N",
								"SET_LAST_MODIFIED" => "N",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"ADD_SECTIONS_CHAIN" => "N",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"PARENT_SECTION" => "",
								"PARENT_SECTION_CODE" => "",
								"INCLUDE_SUBSECTIONS" => "Y",
								"CACHE_TYPE" => "A",
								"CACHE_TIME" => "36000000",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "Y",
								"PAGER_TEMPLATE" => ".default",
								"DISPLAY_TOP_PAGER" => "N",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"PAGER_TITLE" => "Новости",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"PAGER_BASE_LINK_ENABLE" => "N",
								"SET_STATUS_404" => "N",
								"SHOW_404" => "N",
								"MESSAGE_404" => "",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"AJAX_OPTION_HISTORY" => "N",
								"COMPONENT_TEMPLATE" => ".default",
								"AJAX_OPTION_ADDITIONAL" => "undefined"
							)
						);?>
					</div>
				<div class="clearboth"></div>
			</div>
		</div>

		<?include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/templates/.default/include/footer.php')?>
	</div>
</body>
</html>