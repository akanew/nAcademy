<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="main_post">
	<div class="main_title">
		<p class="title"><?=$arResult["NAME"]?></p>
	</div>

	<div class="ps_content">
		<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" align="left" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"/>
			<?=$arResult["DETAIL_TEXT"];?>
			</br>
			<?=$arResult["DISPLAY_PROPERTIES"]["GOOD"]["NAME"]?>: <?=$arResult["DISPLAY_PROPERTIES"]["GOOD"]["DISPLAY_VALUE"]?>
	</div>
</div>