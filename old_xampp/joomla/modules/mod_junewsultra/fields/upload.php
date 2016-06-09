<?php
/**
* Podcast Manager for Joomla!
*
* @copyright	Copyright (C) 2011 Michael Babker. All rights reserved.
* @license		GNU/GPL - http://www.gnu.org/copyleft/gpl.html
* 
*/

defined('JPATH_BASE') or die;

jimport('joomla.html.html');
jimport('joomla.form.formfield');

class JFormFieldUpload extends JFormField
{

	protected $type = 'Upload';

	/**
	 * Method to get the field input markup.
	 *
	 * @return	string	The field input markup.
	 * @since	1.6
	 */
	protected function getInput()
	{
        if(!isset($_GET["id"])){
          echo JText::_('MOD_JUNEWS_NOT_EDIT_TEMPLATE');
          return;
        }

		JHtml::_('behavior.modal', 'a.modal');

		$html	= array();
		$link	= str_replace('/administrator', '', JURI::base()).'modules/mod_junewsultra/fields/uploadimg.php';

   		$html[] = '<div class="button2-left">';
   		$html[] = '  <div class="blank">';
   		$html[] = '	<a class="modal"  href="'.$link.'" rel="{handler: \'iframe\', size: {x: 330, y: 180}}">'.JText::_('MOD_JUNEWS_IMAGE_UPLOAD').'</a>';
   		$html[] = '  </div>';
   		$html[] = '</div>';

		// The active podcast id field.
		if (0 == (int)$this->value) {
			$value = '';
		} else {
			$value = (int)$this->value;
		}

		$class = '';
		if ($this->required) {
			$class = ' class="required modal-value"';
		}

		$html[] = '<input type="hidden" id="'.$this->id.'_id"'.$class.' name="'.$this->name.'" value="'.$value.'" />';


		return implode("\n", $html);
	}
}