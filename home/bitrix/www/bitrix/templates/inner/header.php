<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<?$APPLICATION->ShowHead();?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/../.default/template_style.css', true)?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/../.default/js/jquery-1.8.2.min.js')?>	
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/../.default/js/slides.min.jquery.js')?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/../.default/js/jquery.carouFredSel-6.1.0-packed.js')?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/../.default/js/functions.js')?>
	<link rel="stylesheet icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/../.default/favicon.ico"></link>
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div class="wrap">
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1><a href=""><?$APPLICATION->ShowTitle(false)?></a></h1>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel">8 (495) 212-85-06</span>	<br/>	
							<?=GetMessage('WORKING_TIME')?> <span class="workhours">ежедневно с 9-00 до 18-00</span>						
						</td>
						<td style="width:232px">
							<form action="">
								<div class="hd_search_form" style="float:right;">
									<input placeholder="Поиск" type="text"/>
									<input type="submit" value=""/>
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
							<span class="hd_singin"><a id="hd_singin_but_open" href="">Войти на сайт</a>
							<div class="hd_loginform">
								<span class="hd_title_loginform">Войти на сайт</span>
								<form name="" method="" action="">
					
									<input placeholder="Логин"  type="text">
									<input  placeholder="Пароль"  type="password">			
									<a href="/" class="hd_forgotpassword">Забыли пароль</a>
									
									<div class="head_remember_me" style="margin-top: 10px">
										<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
										<label for="USER_REMEMBER_frm" title="Запомнить меня на этом компьютере">Запомнить меня</label>
									</div>				
									<input value="Войти" name="Login" style="margin-top: 20px;" type="submit">
									</form>
								<span class="hd_close_loginform">Закрыть</span>
							</div>
							</span><br>
							<a href="" class="hd_signup">Зарегистрироваться</a>
						</td>
					</tr>
				</table>
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"horizontal_menu",
					Array(
						"ROOT_MENU_TYPE" => "top",
						"MAX_LEVEL" => "2",
						"CHILD_MENU_TYPE" => "left",
						"USE_EXT" => "N",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => ""
					)
				);?>
			</div>
		</div>
		
		<!--- // end header area --->
		<?$APPLICATION->IncludeComponent(
			"bitrix:breadcrumb",
			"template1",
			Array(
				"START_FROM" => "0",
				"PATH" => "",
				"SITE_ID" => "-"
			)
		);?>
		<div class="main_container page">
			<div class="mn_container">
				<div class="mn_content">
					<div class="main_post">
						<div class="main_title">
							<p class="title"><?$APPLICATION->ShowTitle(false)?></p>
						</div>