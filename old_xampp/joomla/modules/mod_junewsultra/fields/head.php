<?php
/**
* @package plg_junewsultra
* @author Denys Nosov (http://denysdesign.com), Joomla! Ukraine (http://joomla-ua.org)
* @copyright (C) 2007-2012 Denys Nosov. All rights reserved.
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License version 2 or later
* @version 2.0
* @description: Multifunction plugin for creating thumbnails of images, using LightBox libraries and watermark
*/

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

class JFormFieldHead extends JFormField
{

	protected $type = 'Head';

	protected function getInput()
	{
	    $document    = & JFactory::getDocument();
		$document->addStyleSheet( JURI::root( true ).'/modules/mod_junewsultra/assets/css/junewsultra.css' );
	}
    
}