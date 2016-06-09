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

// No direct access.
defined('_JEXEC') or die;
// Note. It is important to remove spaces between elements.
	$document 			=& JFactory::getDocument();
	$jquery   			= $params->get('jquery');
	$jt_jquery_ver		= $params->get('jt_jquery_ver');
	$jt_load_jquery		= $params->get('jt_load_jquery');
	$document->addStyleSheet(JURI::base() . 'modules/mod_jt_superfish_menu/css/superfish.css');
	if ($jt_style_menu == 1) { $document->addStyleSheet(JURI::base() . 'modules/mod_jt_superfish_menu/css/superfish-vertical.css'); }
	if ($jt_style_menu == 2) { $document->addStyleSheet(JURI::base() . 'modules/mod_jt_superfish_menu/css/superfish-navbar.css'); }	
	
	if ($jt_menu == 1) {	
		if ($jt_load_jquery == 0) {
		if ($jquery == 1) { $document->addScript('http://ajax.googleapis.com/ajax/libs/jquery/'.$jt_jquery_ver.'/jquery.min.js'); }
		$document->addScript(JURI::base() . 'modules/mod_jt_superfish_menu/js/hoverIntent.js'); 
		$document->addScript(JURI::base() . 'modules/mod_jt_superfish_menu/js/superfish.js'); 
		$document->addCustomTag('<script type = "text/javascript">jQuery.noConflict();</script>');
		}
		if ($jt_load_jquery == 1) { 
		if ($jquery == 1) { $document->addCustomTag('<script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/'.$jt_jquery_ver.'/jquery.min.js"></script>'); }
		$document->addCustomTag('<script type = "text/javascript" src = "'.JURI::root().'modules/mod_jt_superfish_menu/js/hoverIntent.js"></script>');	
		$document->addCustomTag('<script type = "text/javascript" src = "'.JURI::root().'modules/mod_jt_superfish_menu/js/superfish.js"></script>');
		$document->addCustomTag('<script type = "text/javascript">jQuery.noConflict();</script>');	
		}
		if ($jt_load_jquery == 2) { ?>
		<?php if ($jquery == 1) { ?><script src="http://ajax.googleapis.com/ajax/libs/jquery/<?php echo $jt_jquery_ver; ?>/jquery.min.js" type="text/javascript"></script> <?php }?>
		<script type = "text/javascript" src = "<?php echo JURI::root() ?>/modules/mod_jt_superfish_menu/js/hoverIntent.js"></script>
		<script type = "text/javascript" src = "<?php echo JURI::root() ?>/modules/mod_jt_superfish_menu/js/superfish.js"></script>
		<script type = "text/javascript">jQuery.noConflict();</script>
<?php } }?>
	
	
<ul class="jt-menu<?php echo $class_sfx;?>"<?php
	$tag = '';
	if ($params->get('tag_id')!=NULL) {
		$tag = $params->get('tag_id').'';
		echo ' id="'.$tag.'"';
	}
?>>
<?php
foreach ($list as $i => &$item) :
	$class = 'item-'.$item->id;
	if ($item->id == $active_id) {
		$class .= ' current';
	}

	if (in_array($item->id, $path)) {
		$class .= ' active';
	}
	elseif ($item->type == 'alias') {
		$aliasToId = $item->params->get('aliasoptions');
		if (count($path) > 0 && $aliasToId == $path[count($path)-1]) {
			$class .= ' active';
		}
		elseif (in_array($aliasToId, $path)) {
			$class .= ' alias-parent-active';
		}
	}

	if ($item->deeper) {
		$class .= ' deeper';
	}

	if ($item->parent) {
		$class .= ' parent';
	}

	if (!empty($class)) {
		$class = ' class="'.trim($class) .'"';
	}

	echo '<li'.$class.'>';

	// Render the menu item.
	switch ($item->type) :
		case 'separator':
		case 'url':
		case 'component':
			require JModuleHelper::getLayoutPath('mod_jt_superfish_menu', 'default_'.$item->type);
			break;

		default:
			require JModuleHelper::getLayoutPath('mod_jt_superfish_menu', 'default_url');
			break;
	endswitch;

	// The next item is deeper.
	if ($item->deeper) {
		echo '<ul>';
	}
	// The next item is shallower.
	elseif ($item->shallower) {
		echo '</li>';
		echo str_repeat('</ul></li>', $item->level_diff);
	}
	// The next item is on the same level.
	else {
		echo '</li>';
	}
endforeach;
?></ul>
<?php if ($jt_menu == 1) { ?>
<script type="text/javascript"> 
   jQuery(document).ready(function(){ 
        jQuery("ul.jt-menu").superfish({ 
            animation:  <?php echo $animation; ?>,
            delay:      <?php echo $delay; ?>,
			speed:      '<?php echo $speed; ?>',
            autoArrows: <?php echo $autoarrows ?> 
        }); 
    });  
</script>
<?php } ?>
<div style="clear: both;"></div>
<div style="display:none"><a href="http://www.jtemplate.ru/en" target="_blank">free templates joomla</a></div>