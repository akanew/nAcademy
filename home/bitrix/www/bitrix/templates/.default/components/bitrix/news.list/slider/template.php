<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<script type="text/javascript" >
	$().ready(function(){
		$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: false,
				autoHeight: true,
				play: 4000,
				effect: 'fade'
			});
		});
	});
</script>
		
<div class="sl_slider" id="slides">
	<div class="slides_container">
		<? $arTempID = array(); ?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<? $arProd = $arItem['PROPERTIES']['PRODUCT'];
		$arTempID[]=$arProd['VALUE'];
			$arSort = false;
			$arFilter = array(
			"IBLOCK_ID" => $arProd['LINK_IBLOCK_ID'],
			"ACTIVE" => $arProd['ACTIVE'],
			"ID" => $arTempID
			);
			$arGroupBy = false;
			$arNavStartParams = array("nTopCount" => false);
			$arSelect = array("ID","DETAIL_PAGE_URL");

			$res = CIBlockElement::GetList($arTempID, $arFilter, $arGroupBy, arNavStartParams, $arSelect);
			
			while($ob = $res->GetNextElement())
				$arFields = $ob->GetFields();
		?>
		<div>
			<div>
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" />
				<h2><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h2>
				<p><?=$arItem["PREVIEW_TEXT"]?></p>
				<a href="<?=$arFields["DETAIL_PAGE_URL"]?>" class="sl_more"><?=GetMessage('READ_MORE')?> &rarr;</a>
			</div>
		</div>
		<?endforeach?>
	</div>
</div>

