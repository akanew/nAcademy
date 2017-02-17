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
						
						echo $cutCurPage;
					?>
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
					<div class="sb_action">
						<a href=""><img src="<?=SITE_TEMPLATE_PATH?>/../.default/content/11.png" alt=""/></a>
						<h4>Акция</h4>
						<h5><a href="">Мебельная полка всего за 560 Р</a></h5>
						<a href="" class="sb_action_more">Подробнее &rarr;</a>
					</div>
					<div class="sb_reviewed">
							<img src="<?=SITE_TEMPLATE_PATH?>/../.default/content/8.png" class="sb_rw_avatar" alt=""/>
							<span class="sb_rw_name">Сергей Антонов</span>
							<span class="sb_rw_job">Руководитель финансового отдела “Банк+”</span>
							<p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
							<div class="clearboth"></div>
							<div class="sb_rw_arrow"></div>
					</div>
				</div>
				<div class="clearboth"></div>
			</div>
		</div>

		<?include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/templates/.default/include/footer.php')?>
	</div>
</body>
</html>