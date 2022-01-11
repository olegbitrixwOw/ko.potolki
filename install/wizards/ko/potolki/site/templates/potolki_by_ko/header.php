<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)  die();
$curPage = $APPLICATION->GetCurPage();
IncludeTemplateLangFile(__FILE__);

?><!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->

<!--<![endif]-->
<head>
<meta charset="<?=SITE_CHARSET?>">
<title><?$APPLICATION->ShowTitle()?></title>
<?

$APPLICATION->ShowMeta("robots", false, false);
$APPLICATION->ShowMeta("keywords", false, false);
$APPLICATION->ShowMeta("description", false, false);
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<meta name="author" content="">
<meta name="yandex-verification" content="">
<meta name="google-site-verification" content="">

<link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico">
	<link rel="apple-touch-icon" href="./img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./img/apple-touch-icon-114x114.png">
<?//$APPLICATION->ShowHead();?>

<?

$APPLICATION->ShowLink("canonical", null, false);

	


	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap-slider.min.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/libs/font-awesome-4.2.0/css/font-awesome.min.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/libs/fancybox/jquery.fancybox.css", true);
//	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/libs/owl-carousel/owl.carousel.css", true);
	//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/libs/countdown/jquery.countdown.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/fonts.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/preset.css", true);
	//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/main.css", true);
	
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery.bxslider.css", true);
	
	//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/color.switch.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/ui.totop.css", true);
	
	//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/media.css", true);
$APPLICATION->ShowCSS(true, false);
?>
	<link rel="stylesheet" id="theme" href="<?=SITE_TEMPLATE_PATH?>/#STYLES#.css" type="text/css" />
	

	<link rel="stylesheet"  href="<?=SITE_TEMPLATE_PATH?>/css/media.css" />


	<?
	$APPLICATION->ShowHeadStrings();
	$APPLICATION->ShowHeadScripts();
	?>

</head>
<body>
    <?$APPLICATION->ShowPanel();?>

<!--	<div class="editor" style="left: -150px;">

    <div class="panel">

      <h5>Кликните для выбора цвета</h5>
      
      <div id="changecss" style="">
      
      <div class="row">
      
      <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="green"><div class="left skin1-l"></div><div class="right skin1-r"></div></a></div>
      
      <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="blue"><div class="left skin2-l"></div><div class="right skin2-r"></div></a></div>
      
      <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="red"><div class="left skin3-l"></div><div class="right skin3-r"></div></a></div> 
      
      <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="orange"><div class="left skin4-l"></div><div class="right skin4-r"></div></a></div> 
      
      <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="violet"><div class="left skin5-l"></div><div class="right skin5-r"></div></a></div> 
      
      <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="brown"><div class="left skin6-l"></div><div class="right skin6-r"></div></a></div> 
      
	 
	  
	  <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="grey"><div class="left skin8-l"></div><div class="right skin8-r"></div></a></div>
	  
	  <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="pink"><div class="left skin9-l"></div><div class="right skin9-r"></div></a></div>
	  
	  <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="beige"><div class="left skin10-l"></div><div class="right skin10-r"></div></a></div>
	  
	  <div class="circle-skin"><a href="javascript: void(0)" title="switch styling" id="gay"><div class="left skin11-l"></div><div class="right skin11-r"></div></a></div>
	  
      </div>
      
      </div>
      
      <div class="clearfix"></div>
       

  </div>

     <div class="switch">
         <i class="fa fa-cog fa-spin fa-2x"></i>
     </div>

</div>-->
    
        <div class="container" >
            <div class="header row">
                <div class="logo col-lg-3 col-md-4 col-sm-4 col-xs-6">
                    <a href="/"><div class="logo_bg"></div></a>
					<h2 class="header_title"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/header_title.php"), false);?></h2>
					
                </div>
                <div class="title col-lg-2 col-md-3 col-sm-3 col-xs-6 hidden-xs phone_block">
				     <p class="phone"><i class="fa fa-mobile" aria-hidden="true"></i><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phone.php"), false);?> </p>
					 <p class="phone"><i class="fa fa-mobile" aria-hidden="true"></i><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phone2.php"), false);?> </p>
                   
                    <a href="#" class="callback feedback_btn"><?=GetMessage("FEEDBACK_TITLE")?></a> 
                </div>
               <div class="title col-lg-4 col-md-5 col-sm-5 col-xs-5 hidden-xs">
                   
				  <p class="adress"><i class="fa fa-map-marker" aria-hidden="true"></i><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/addr.php"), false);?> </p>
				  <p class="adress"><i class="fa fa-clock-o" aria-hidden="true"></i><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/time.php"), false);?> </p>
				  <a href="#" class="callback call_master_btn"></i><?=GetMessage("CALL_MASTER_TITLE")?></a> 
                    
                </div>
				 <div class="title col-lg-3 col-md-3 mail-skype hidden-xs hidden-md hidden-sm">
				 <p ><i class="fa fa-envelope" aria-hidden="true"></i><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/email.php"), false);?> </p>
                 <p ><i class="fa fa-skype" aria-hidden="true"></i><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/skype.php"), false);?> </p>
               
                  
                    
                </div>
            </div>
		</div>
		<div class="container phone_block_mobile" style="display: none;">
            <div class="header row">
				<div class="title col-lg-2 col-md-3 col-sm-3 col-xs-12">
					 <p class="phone"><i class="fa fa-mobile" aria-hidden="true"></i><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phone.php"), false);?> </p>
					 <p class="phone"><i class="fa fa-mobile" aria-hidden="true"></i><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phone2.php"), false);?> </p>
					 <p class="adress"><i class="fa fa-map-marker" aria-hidden="true"></i><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/addr.php"), false);?> </p>
				     <p class="adress"><i class="fa fa-clock-o" aria-hidden="true"></i><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/time.php"), false);?> </p>
                     <p ><i class="fa fa-envelope" aria-hidden="true"></i><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/email.php"), false);?> </p>
                     <p ><i class="fa fa-skype" aria-hidden="true"></i><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/skype.php"), false);?> </p>

				</div>	
			</div>
		</div>			
		<div class="container-fluid">
            <div class="hmenu row">
                <div class="col-lg-12 col col-xs-12">
				
					<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel_by_ko", Array(
	"ALLOW_MULTI_SELECT" => "N",	
		"CHILD_MENU_TYPE" => "left",	
		"DELAY" => "N",	
		"MAX_LEVEL" => "2",	
		"MENU_CACHE_GET_VARS" => "",	
		"MENU_CACHE_TIME" => "3600",	
		"MENU_CACHE_TYPE" => "N",	
		"MENU_CACHE_USE_GROUPS" => "Y",	
		"ROOT_MENU_TYPE" => "top",	
		"USE_EXT" => "Y",	 
		"COMPONENT_TEMPLATE" => "horizontal_multilevel"
	),
	false
);?>
		

                   
                </div>
            </div>
        </div>    
        <?
			
			if ($curPage == "/" || $curPage == SITE_DIR):
		?>
			<?
	$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"slider_index_by_ko",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "Y",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("", ""),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "#SLIDER_IBLOCK_ID#",
			"IBLOCK_TYPE" => "#TYPE_IBLOCK_ID#",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "3",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("", ""),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N", 
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC"
		)
	);
	
	?>	
       
    
		<?endif;?>
			<!--begin inner content-->
			<?if ($curPage <> "/" && $curPage != SITE_DIR):?>
				<div class="container inner">	
				
					<?$APPLICATION->IncludeComponent(
					"bitrix:breadcrumb",
					"",
					Array(
						"PATH" => "",
						"SITE_ID" => "#BREADCRUMB_DIR#",
						"START_FROM" => "0"
					)
				);?>
				   <h1><?$APPLICATION->ShowTitle(false)?> </h1>
						<div class="row">
							<div class="col-lg-12 col">
			<?endif;?>
			<!--end inner content--> 		