<?php
/*
# ------------------------------------------------------------------------
# Templates for Joomla 2.5
# ------------------------------------------------------------------------
# Copyright (C) 2011-2012 Jtemplate.ru. All Rights Reserved.
# @license - PHP files are GNU/GPL V2.
# Author: JTemplate.ru
# Websites:  http://www.jtemplate.ru 
# ---------  http://code.google.com/p/jtemplate/   
# 
*/
/**
 * @package		Joomla.Site
 * @subpackage	mod_menu
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$list	= modJTSFMenuHelper::getList($params);
$app	= JFactory::getApplication();
$menu	= $app->getMenu();
$active	= $menu->getActive();
$active_id = isset($active) ? $active->id : $menu->getDefault()->id;
$path	= isset($active) ? $active->tree : array();
$showAll	= $params->get('showAllChildren');
$class_sfx	= htmlspecialchars($params->get('class_sfx'));
$jt_style_menu	= $params->get('stylemenu');
$jt_menu		= $params->get('jtmenu');
//$jquery			= $params->get('jquery');
$animation		= $params->get('animation');
$delay			= $params->get('delay');
$speed			= $params->get('speed');
$autoarrows		= $params->get('autoarrows');

if(count($list)) {
	require JModuleHelper::getLayoutPath('mod_jt_superfish_menu', $params->get('layout', 'default'));
}
