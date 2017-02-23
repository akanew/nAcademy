<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="ps_head"><a class="ps_head_link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><h2 class="ps_head_h"><?=$arItem["NAME"]?></h2></a></div>
	<div class="ps_content">
		<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" align="left" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/> 
		<?=$arItem["PREVIEW_TEXT"]?> всего за <?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]?> руб.
		</br>
		<?=$arItem["DISPLAY_PROPERTIES"]["GOOD"]["NAME"]?>: <?=$arItem["DISPLAY_PROPERTIES"]["GOOD"]["DISPLAY_VALUE"]?>
		</br>
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" style="float:left; text-decoration:none;"><?=GetMessage('READ_MORE')?> &rarr;</a>
	</div>
	<div class="clearboth"></div>
<?endforeach?>
