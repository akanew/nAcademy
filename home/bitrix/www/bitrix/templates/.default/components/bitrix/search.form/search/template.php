<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<form action="<?=$arResult["FORM_ACTION"]?>">
	<div class="hd_search_form" style="float:right;">
		<input placeholder="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" type="text"/>
		<input type="submit" value=""/>
	</div>
</form>