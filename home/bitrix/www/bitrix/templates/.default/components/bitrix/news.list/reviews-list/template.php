<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="review-block">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="review-block">
		<div class="review-text">
			<div class="review-block-title"><span class="review-block-name"><a href="#"><?=$arItem["NAME"]?></a></span><span class="review-block-description"><?echo $arItem["PROPERTIES"]["PROFESSION"]["VALUE"].' "'.$arItem["PROPERTIES"]["COMPANY"]["VALUE"].'"'?></span></div>
			<div class="review-text-cont">
				<?=$arItem["PREVIEW_TEXT"]?>
			</div>
		</div>
		<div class="review-img-wrap"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="img"></div>
	</div>
<?endforeach?>
</div>

