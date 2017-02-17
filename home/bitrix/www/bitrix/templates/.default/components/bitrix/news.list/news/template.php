<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="cn_hp_lastnews">
	<h3><a href=""><?=GetMessage('NEWS')?></a></h3>		
	<ul>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<li>
				<h4><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></a></h4>
				<p><?echo $arItem["NAME"]?></p>
			</li>
		<?endforeach;?>
	</ul>
	<br/>
	<a href="" class="cn_hp_lastnews_more"><?=GetMessage('ALL_NEWS')?> &rarr;</a>
</div>
