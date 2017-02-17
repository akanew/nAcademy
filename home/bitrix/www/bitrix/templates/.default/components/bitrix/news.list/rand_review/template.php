<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="sb_reviewed">
		<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="sb_rw_avatar" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/>
		<span class="sb_rw_name"><?=$arItem["NAME"]?></span>
		<span class="sb_rw_job"><?echo $arItem["PROPERTIES"]["PROFESSION"]["VALUE"].' "'.$arItem["PROPERTIES"]["COMPANY"]["VALUE"].'"'?></span>
		<p>“<?=$arItem["PREVIEW_TEXT"]?>”</p>
		<div class="clearboth"></div>
		<div class="sb_rw_arrow"></div>
	</div>
<?endforeach?>