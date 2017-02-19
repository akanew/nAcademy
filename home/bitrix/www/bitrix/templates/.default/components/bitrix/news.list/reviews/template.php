<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="rw_reviewed">
	<div class="rw_slider">
	<h4><?=GetMessage("REVIEWS")?></h4>
		<div>
			<ul id="foo">
				<?
					$getJob = false;
					$getCompany = false;
					$reviewerJOB = '';
				?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<li>
						<div class="rw_message">
							<img src="<?=(isset($arItem["PREVIEW_PICTURE"]["SRC"]))?$arItem["PREVIEW_PICTURE"]["SRC"]:'/bitrix/templates/.default/images/people.jpg'?>" class="rw_avatar" alt=""/>
							<span class="rw_name"><?=(isset($arItem["NAME"]))?$arItem["NAME"]:'Автор неизвестен'?></span>

							<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
								<small>
									<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
										<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
									<?else:?>
										<?
											if($arProperty['CODE']==(string)'JOB'){
												$getJob = true;
												$reviewerJOB = '<span class="rw_job">'.$arProperty["DISPLAY_VALUE"].' "';
											}
											if($arProperty['CODE']==(string)'COMPANY'){
												$getCompany = true;
												$reviewerJOB .= $arProperty["DISPLAY_VALUE"].'"</span>';
											}
											if($getJob && $getCompany){
												echo $reviewerJOB;
												$reviewerJOB = '';
												$getJob = false;
												$getCompany = false;
											}
										?>
									<?endif?>
								</small><br />
							<?endforeach;?>

							<p><?if(isset($arItem['PREVIEW_TEXT'])) echo '"'.$arItem['PREVIEW_TEXT'].'"'?></p>
							<div class="clearboth"></div>
							<div class="rw_arrow"></div>
						</div>
					</li>
				<?endforeach;?>
			</ul>
		</div>
	<div id="rwprev"></div>
	<div id="rwnext"></div>
	<a href="/company/re/" class="rw_allreviewed"><?=GetMessage("ALL_REVIEWS")?></a>
</div>