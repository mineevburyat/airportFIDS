<?php
/**
* @package Joomla! 1.7
* @version 2.2
* @author 2008-2011 (c)  Denys Nosov (aka Dutch)
* @author web-site: www.joomla-ua.org
* @copyright This module is licensed under a Creative Commons Attribution-Noncommercial-No Derivative Works 3.0 License.
**/

defined('_JEXEC') or die;

require_once(dirname(__FILE__).DS.'helper.php');

$list = modJUNewsUltraHelper::getList($params);

if(!count($list))
{
	return;
}

$template       = str_replace('_:', '', $params->def('template'));

$all_in         = $params->def('all_in') ;
$link_all_in    = trim( $params->get( 'link_all_in' ) );
$text_all_in    = trim( $params->get( 'text_all_in' ) );
$class_all_in   = trim( $params->get( 'class_all_in' ) );

$layoutpath     = JModuleHelper::getLayoutPath('mod_junewsultra', $template );

if($params->get('jsjquery') == 1 || $params->get('cssstyle') == 1){
    $document =JFactory::getDocument();
    if($params->get('jsjquery') == 1){
        $document->addCustomTag('<script language="JavaScript" src="'. JURI::base() .'modules/mod_junewsultra/assets/jQuery.js" type="text/javascript"></script>');
    }
    if($params->get('cssstyle') == 1){
        $document->addCustomTag('<link rel="stylesheet" href="'. JURI::base() .'modules/mod_junewsultra/tmpl/'.$template.'/css/style.css" type="text/css" />');
    }
}

if( file_exists($layoutpath) )
{
	require($layoutpath);
    if ($all_in==1)
    {
    	echo '<a class="'.$class_all_in.'" href="'.$link_all_in.'">'.$text_all_in.'</a>';
    }

    if( $params->def('copy') )
    {
    	echo '<span style="clear:both;text-align:right;display:block;line-height:10px;width: 100%;font-size:9px;"><a href="http://www.joomla-ua.org" style="color:#ccc;text-decoration:none;" title="Joomla! Україна" target="_blank" >Joomla! Україна</a></span>';
    }
} else {
	echo JText::_("<strong>Template <span style=\"color: green;\">$template</span> do is not found!</strong><br />Please, upload new template to <em>modules/mod_junewsultra/tmpl</em> folder or select other template from back-end!");
}
?>