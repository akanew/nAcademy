<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<ul id="foo">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<li>
		<div class="rw_message">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="rw_avatar" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/>
			<span class="rw_name"><?=$arItem["NAME"]?></span>
			<span class="rw_job"><?echo $arItem["PROPERTIES"]["PROFESSION"]["VALUE"].' "'.$arItem["PROPERTIES"]["COMPANY"]["VALUE"].'"'?></span>
			<p>“<?=$arItem["PREVIEW_TEXT"]?>”</p>
			<div class="clearboth"></div>
			<div class="rw_arrow"></div>
		</div>
	</li>
	<?endforeach?>
</ul>
	
