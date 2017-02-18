<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="ps_head"><a class="ps_head_link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><h2 class="ps_head_h"><?=$arItem["NAME"]?></h2></a></div>
	<div class="ps_content">
		<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" align="left" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/> 
		<?=$arItem["PREVIEW_TEXT"]?>
	</div>
	<div class="clearboth"></div>
<?endforeach?>
