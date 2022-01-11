<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)  die();
$curPage = $APPLICATION->GetCurPage();
IncludeTemplateLangFile(__FILE__);
?>				
<!--begin inner content-->
	<?if ($page <> "/"):?>		
				</div>
			</div>
		</div>
   <?endif;?>
<!--end inner content-->   
   </div>
<div class="container">
   <?$APPLICATION->IncludeComponent(
		"ko:main.feedback",
		"feedback_form_footer_by_ko",
		Array(
			"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
			"EVENT_MESSAGE_ID" => array("#FOOTER_FEEDBACK_FORM_ID#"),
			"AJAX_MODE" => "Y",  
			"AJAX_OPTION_SHADOW" => "N", 
			"AJAX_OPTION_JUMP" => "N", 
			"AJAX_OPTION_STYLE" => "Y", 
			"AJAX_OPTION_HISTORY" => "N",
			"OK_TEXT" => "Спасибо, ваша заявка отправлена. В ближайшее время с Вами свяжутся наши менеджеры.",
			"REQUIRED_FIELDS" => array("NONE","NAME","EMAIL"),
			"USE_CAPTCHA" => "Y"
		)
	);?>
</div>  
      
		
		<div class="container-fluid footer">
			<div class="container">
				<div class="row">
					<div class="logo col-lg-3 ">
                    <a href="/"><div class="logo_bg"></div></a>
					
						</div>
				
					<div class="menu_footer col-lg-6 hidden-xs">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu_by_ko", Array(
							"ALLOW_MULTI_SELECT" => "N",	
								"CHILD_MENU_TYPE" => "left",	
								"DELAY" => "N",	
								"MAX_LEVEL" => "1",	
								"MENU_CACHE_GET_VARS" => "",	
								"MENU_CACHE_TIME" => "3600",	
								"MENU_CACHE_TYPE" => "N",	
								"MENU_CACHE_USE_GROUPS" => "Y",	
								"ROOT_MENU_TYPE" => "footer",	
								"USE_EXT" => "Y",	
								"COMPONENT_TEMPLATE" => ""
							),
							false
						);?>
						<?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu_by_ko", Array(
							"ALLOW_MULTI_SELECT" => "N",	
								"CHILD_MENU_TYPE" => "left",	
								"DELAY" => "N",	
								"MAX_LEVEL" => "1",	
								"MENU_CACHE_GET_VARS" => "",	
								"MENU_CACHE_TIME" => "3600",	
								"MENU_CACHE_TYPE" => "N",	
								"MENU_CACHE_USE_GROUPS" => "Y",	
								"ROOT_MENU_TYPE" => "footer2",	
								"USE_EXT" => "Y",	
								"COMPONENT_TEMPLATE" => ""
							),
							false
						);?>
					</div>
				
					<div class="social col-lg-3">
                   
					        <p> <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer_title_social.php"), false);?></p>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer_social_icon.php"), false);?>
								
							<p class="copy"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer_copy.php"), false);?></p>	
						</div>
					</div>
			</div>			
		</div>
		

	

	
	<div id="modal_feedback" class="modal fade" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" style="cursor: pointer;" data-dismiss="modal" aria-hidden="true">X</button>
			<h4><?=GetMessage("ZAKAZ_ZVONOK_TITLE")?></h4>
		  </div>
		  <div class="modal-body">
			  <?$APPLICATION->IncludeComponent(
					"ko:main.feedback",
					"feedback_popup_by_ko",
					Array(
						"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
						"EVENT_MESSAGE_ID" => array("#FOOTER_FEEDBACK_FORM_ID#"),
						"AJAX_MODE" => "Y", 
						"AJAX_OPTION_SHADOW" => "N", 
						"AJAX_OPTION_JUMP" => "N", 
						"AJAX_OPTION_STYLE" => "Y", 
						"AJAX_OPTION_HISTORY" => "N",
						"OK_TEXT" => "Спасибо, ваша заявка отправлена. В ближайшее время с Вами свяжутся наши менеджеры.",
						"REQUIRED_FIELDS" => array("NONE","NAME","EMAIL"),
						"USE_CAPTCHA" => "Y"
					)
				);?>
			</div>	
			
				
		
		</div>
	  </div>
	</div>
	
	<div id="modal_call_master" class="modal fade" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" style="cursor: pointer;" data-dismiss="modal" aria-hidden="true">X</button>
			<h4><?=GetMessage("CALL_MASTER_TITLE")?></h4>
		  </div>
		  <div class="modal-body">
			  <?$APPLICATION->IncludeComponent(
					"ko:main.feedback",
					"feedback_popup_by_ko",
					Array(
						"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
						"EVENT_MESSAGE_ID" => array("#VIZOV_MASTERA_ID#"),
						"AJAX_MODE" => "Y",  
						"AJAX_OPTION_SHADOW" => "N", 
						"AJAX_OPTION_JUMP" => "N", 
						"AJAX_OPTION_STYLE" => "Y", 
						"AJAX_OPTION_HISTORY" => "N",
						"OK_TEXT" => "Спасибо, ваша заявка отправлена. В ближайшее время с Вами свяжутся наши менеджеры.",
						"REQUIRED_FIELDS" => array("NONE","NAME","EMAIL"),
						"USE_CAPTCHA" => "Y"
					)
				);?>
			</div>	
			
				
		
		</div>
	  </div>
	</div>
	
	<div id="modal_add_review" class="modal fade" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" style="cursor: pointer;" data-dismiss="modal" aria-hidden="true">X</button>
			<h4><?=GetMessage("ADD_REVIEW_TITLE")?></h4>
		  </div>
		  <div class="modal-body">
			  <?$APPLICATION->IncludeComponent(
					"bitrix:main.feedback",
					"feedback_by_ko",
					Array(
						"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
						"EVENT_MESSAGE_ID" => array("#ADD_REVIEW_ID#"),
						"AJAX_MODE" => "Y",  
						"AJAX_OPTION_SHADOW" => "N", 
						"AJAX_OPTION_JUMP" => "N", 
						"AJAX_OPTION_STYLE" => "Y", 
						"AJAX_OPTION_HISTORY" => "N",
						"OK_TEXT" => "Спасибо, ваш отзыв добавлен. На сайте он появится после просмотра администратором.",
						"REQUIRED_FIELDS" => array("NONE","NAME","EMAIL","MESSAGE"),
						"USE_CAPTCHA" => "Y"
					)
				);?>
			</div>	
			
				
		
		</div>
	  </div>
	</div>
	
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.8.3.min.js"></script>
	
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/scripts/bootstrap/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap-slider.js"></script>

	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/functions.js"></script> 

	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.flexisel.js"></script>
	
	<script src="<?=SITE_TEMPLATE_PATH?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	
	
	<!--begin scripts slider on index page-->
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.bxslider.js"></script>
	
	<!--end scripts slider on index page-->

	
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.ui.totop.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.style-switcher.js" type="text/javascript"></script>
	
	<script src="<?=SITE_TEMPLATE_PATH?>/js/script.js" type="text/javascript"></script>
</body>
</html>