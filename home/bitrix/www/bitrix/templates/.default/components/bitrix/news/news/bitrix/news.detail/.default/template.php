<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="main_post">
	<div class="main_title">
		<?$this->SetViewTarget("news_date");?>
		<span class="main_date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
		<?$this->EndViewTarget("news_date");?>
		<p class="title"><?=$arResult["NAME"]?></p>
	</div>

	<div class="ps_content">
		<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" align="left" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"/>
			<?=$arResult["DETAIL_TEXT"];?>
	</div>
</div>