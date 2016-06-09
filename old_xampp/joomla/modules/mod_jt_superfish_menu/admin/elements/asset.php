<?php
/*
# ------------------------------------------------------------------------
# Templates for Joomla 1.6 / Joomla 1.7
# ------------------------------------------------------------------------
# Copyright (C) 2011 Jtemplate.ru. All Rights Reserved.
# @license - PHP files are GNU/GPL V2.
# Author: JTemplate.ru
# Websites:  http://www.jtemplate.ru 
# ---------  http://code.google.com/p/jtemplate/   
# ------------------------------------------------------------------------
*/
defined('JPATH_BASE') or die;
jimport('joomla.form.formfield');
class JFormFieldAsset extends JFormField {
        protected $type = 'asset';
        protected function getInput() {
                $doc = JFactory::getDocument();
                $doc->addStyleSheet(JURI::root().$this->element['path'].'style.css');
				$doc->addScript(JURI::root().$this->element['path'].'script.js');
                return null;
        }
}
?>