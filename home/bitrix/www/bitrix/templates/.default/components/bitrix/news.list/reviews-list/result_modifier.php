<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<? foreach($arResult["ITEMS"] as $ID=>$arItems): ?>
	<? $arImage = CFile::ResizeImageGet($arItems['DETAIL_PICTURE'], array('width'=>$arParams['IMG_PREVIEW_DISPLAY_W'], 'height'=>$arParams['IMG_PREVIEW_DISPLAY_H']), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
	<? $arResult['ITEMS'][$ID]['DETAIL_PICTURE'] = $arImage;?>
<?endforeach?>
	

