<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<div class="review-block">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('NEWS_DELETE_CONFIRM')));
		?>
		<div class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="review-block">
				<div class="review-text">
					<div class="review-block-title"><span class="review-block-name"><a href="#"><?=$arItem["NAME"]?></a></span><span class="review-block-description"><?echo $arItem["PROPERTIES"]["PROFESSION"]["VALUE"].' "'.$arItem["PROPERTIES"]["COMPANY"]["VALUE"].'"'?></span></div>
					<div class="review-text-cont">
						<?=$arItem["PREVIEW_TEXT"]?>
					</div>
				</div>
				<div class="review-img-wrap"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="img"></div>
			</div>
		</div>
	<?endforeach?>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>