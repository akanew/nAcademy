<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<ul>
<?foreach ($arResult["SECTIONS_NAME"] as $arSN):?>
	<li><input hidden type='checkbox'><span><?=$arSN["NAME"]?></span></input>
	<?$isParent = false;?>
	<?foreach ($arResult["ITEMS"] as $arItem):?>
		<?if($arItem["IBLOCK_SECTION_ID"] == $arSN["ID"]):?>
			<?if(!$isParent):?>
				<?$isParent = true;?>
				<ul class="parent open">
			<?else:?>
				<li><span><?=$arItem["NAME"]?></span></li>
			<?endif;?>
		<?endif;?>
	<?endforeach;?>
		<?if($isParent == true):?>
			</ul>
		<?endif;?>
	</li>
<?endforeach;?>
</ul>

<script type="text/javascript" >
	$().ready(function(){
		$('span').click(function() {
			var t = this.parentElement.getElementsByTagName('input')[0];
			t.checked = (!t.checked);
			if(!t.checked)
				this.parentElement.getElementsByTagName('ul')[0].style.display = 'block';
			else this.parentElement.getElementsByTagName('ul')[0].style.display = 'none';
			});
	});	
</script>