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
			<?include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/templates/.default/include/header.php')?>
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