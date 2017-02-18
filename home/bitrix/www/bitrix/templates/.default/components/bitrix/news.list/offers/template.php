<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>


<div class="sb_action">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<a href="<?=SITE_DIR.$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/></a>
	<h4><?=$arItem["NAME"]?></h4>
	<h5><a href=""><?=$arItem["PREVIEW_TEXT"];?></a></h5>
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="sb_action_more"><?=GetMessage('READ_MORE')?> &rarr;</a>
<?endforeach?>
</div>