<?php 
// no direct access
defined('_JEXEC') or die('Restricted access'); 

$columns 	= $params->get( 'columns', 3 );
$start		= 1;
$end 		= $params->get( 'end', 100 );
$openall	= true;


function injectCustomHeadTags($html) {
	/*$buf = ob_get_contents();
	if (!empty($buf) && !headers_sent()) {
		$buf = preg_replace("/<\/head>/", $html."</head>", $buf, 1, $count);
		if ($count == 1) {
			ob_clean();
			echo $buf;
			return true;
		}
	}
	return false;*/
	$document=& JFactory::getDocument();
		if($document->getType() == 'html') {
			$document->addCustomTag($html);
		}
	return true;
}

$html = "";

if ($animatedtype == "animated") {
	$buf = ob_get_contents();
	if (!empty($buf) && !headers_sent()) {
		if (!preg_match("/\bmootools\b/i", $buf)) {
			$html .= '<script type="text/javascript" src="'.JURI::base().'modules/mod_tpmenu/tpmenu/mootools.js"></script>';
		}
	}
	$html .=  '<script type="text/javascript" src="'.JURI::base().'/modules/mod_tpmenu/tpmenu/'.$menutype.'/menu.js.php?animated='.$animatedFx.'"></script>';
} else {
	if($menutype == "dolphin") {
		$html .=  '<script type="text/javascript" src="'.JURI::base().'/modules/mod_tpmenu/tpmenu/'.$menutype.'/menu.js.php?animated='.$animatedFx.'"></script>';	
	} else {
		$html .=  '<script type="text/javascript" src="'.JURI::base().'/modules/mod_tpmenu/tpmenu/'.$menutype.'/menu2.js.php?animated='.$animatedFx.'"></script>';	
	}
}

$default_css_absolute_path = JPATH_SITE."/templates/" . $mainframe->getTemplate() . "/css/" . $menutype . "tpmenu.css";


$default_css_live_site = JURI::base()."templates/" . $mainframe->getTemplate() . "/css/" . $menutype . "tpmenu.css";

//echo "<BR>default_css_absolute_path:".$default_css_absolute_path."<BR>";
//echo "<BR>default_css_live_site:".JURI::base()."<BR>";

if (file_exists($default_css_absolute_path)) {
	$html .=  '<link href="'.$default_css_live_site.'" rel="stylesheet" type="text/css" />';
} else {
	$html .=  '<link href="'.JURI::base().'modules/mod_tpmenu/tpmenu/'.$menutype.'/menu.css" rel="stylesheet" type="text/css" />';
}


injectCustomHeadTags($html);

require(JPATH_SITE."/modules/mod_tpmenu/tpmenu/".$menutype."/menu.php");

$dataMenu = array("menuname" => $menuname,
							"displaytype" => $displaytype,
							"animatedtype" => $animatedtype,
							"columns" => $columns,
							"openall" => $openall,
							"start" => $start,
							"end" => $end,
							"display_image_on_top_menu_dropcolumn" => $display_image_on_top_menu_dropcolumn,
							"display_image_with_text_on_top_menu_dropcolumn" => $display_image_with_text_on_top_menu_dropcolumn,
							"image_position_on_top_menu_dropcolumn" => $image_position_on_top_menu_dropcolumn,
							"display_image_on_sub_menu_dropcolumn" => $display_image_on_sub_menu_dropcolumn,
							"display_image_with_text_on_sub_menu_dropcolumn" => $display_image_with_text_on_sub_menu_dropcolumn,
							"image_position_on_sub_menu_dropcolumn" => $image_position_on_sub_menu_dropcolumn,
							"image_suffix_hover" => $image_suffix_hover,
							"display_image_on_top_menu" => $display_image_on_top_menu,
							"display_image_with_text_on_top_menu" => $display_image_with_text_on_top_menu,
							"image_position_on_top_menu" => $image_position_on_top_menu,
							"display_image_on_child_menu" => $display_image_on_child_menu,
							"display_image_with_text_on_child_menu" => $display_image_with_text_on_child_menu,
							"image_position_on_child_menu" => $image_position_on_child_menu,
							"display_image_option_on_child_menu" => $display_image_option_on_child_menu,
							"display_image_level" => $display_image_level,
							"level_configured_2" => $level_configured_2,
							"level_configured_3" => $level_configured_3,
							"level_configured_4" => $level_configured_4,
							"level_configured_5" => $level_configured_5,
							"level_configured_6" => $level_configured_6,
							"level_configured_7" => $level_configured_7,
							"level_configured_8" => $level_configured_8,
							"level_configured_9" => $level_configured_9,
							"level_configured_10" => $level_configured_10,
							"level_configured_11" => $level_configured_11);

$menu = new Menu($dataMenu);
echo $menu->display();

?>