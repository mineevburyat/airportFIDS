<?php
// @version $Id: mod_tpmenu.php 1.5.0
// http://www.templateplazza.com


// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
ini_set('arg_separator.output','&amp;');

$menuname	= $params->get( 'menu', 'mainmenu' );
$menutype 	= $params->get( 'menutype', 'dropdown' );
$displaytype 	= $params->get( 'displaytype', 'standard' );
$animatedtype = $params->get( 'animatedtype', 'standard' );
$animatedFx = $params->get( 'animatedFx', 'Fx.Transitions.Bounce.easeOut' );

//Drop Column
$display_image_on_top_menu_dropcolumn = $params->get( 'display_image_on_top_menu_dropcolumn', '1' );
$display_image_with_text_on_top_menu_dropcolumn = $params->get( 'display_image_with_text_on_top_menu_dropcolumn', '1' );
$image_position_on_top_menu_dropcolumn = $params->get( 'image_position_on_top_menu_dropcolumn', '1' );

$display_image_on_sub_menu_dropcolumn = $params->get( 'display_image_on_sub_menu_dropcolumn', '1' );
$display_image_with_text_on_sub_menu_dropcolumn = $params->get( 'display_image_with_text_on_sub_menu_dropcolumn', '1' );
$image_position_on_sub_menu_dropcolumn = $params->get( 'image_position_on_sub_menu_dropcolumn', '1' );

$image_suffix_hover = $params->get( 'image_suffix_hover', '' );

//parent menu
$display_image_on_top_menu = $params->get( 'display_image_on_top_menu', '1' );
$display_image_with_text_on_top_menu = $params->get( 'display_image_with_text_on_top_menu', '1' );
$image_position_on_top_menu = $params->get( 'image_position_on_top_menu', '1' );

//child menu
$display_image_on_child_menu = $params->get( 'display_image_on_child_menu', '1' );
$display_image_with_text_on_child_menu = $params->get( 'display_image_with_text_on_child_menu', '0' );
$image_position_on_child_menu = $params->get( 'image_position_on_child_menu', 'right' );
$display_image_option_on_child_menu = $params->get( 'display_image_option_on_child_menu', 'right' );

$display_image_level = $params->get( 'display_image_level', '1' );

$level_configured_1  = $params->get( 'level_configured_1', '1' );
$level_configured_2  = $params->get( 'level_configured_2', '1' );
$level_configured_3  = $params->get( 'level_configured_3', '1' );
$level_configured_4  = $params->get( 'level_configured_4', '1' );
$level_configured_5  = $params->get( 'level_configured_5', '1' );
$level_configured_6  = $params->get( 'level_configured_6', '1' );
$level_configured_7  = $params->get( 'level_configured_7', '1' );
$level_configured_8  = $params->get( 'level_configured_8', '1' );
$level_configured_9  = $params->get( 'level_configured_9', '1' );
$level_configured_10 = $params->get( 'level_configured_10', '1' );
$level_configured_11 = $params->get( 'level_configured_11', '1' );




require( JModuleHelper::getLayoutPath( 'mod_tpmenu' ) );







