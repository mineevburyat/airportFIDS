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

class JFormFieldArticle extends JFormField
{

	protected $type = 'Article';

	protected function getInput()
	{
		JHtml::_('behavior.modal', 'a.modal');

		$script = array();
		$script[] = '	function jSelectArticle_jform_'.$this->id.'(id, title, filename, object) {';
		$script[] = '		document.id("'.$this->id.'_id").value = id;';
		$script[] = '		document.id("'.$this->id.'_name").value = title;';
		$script[] = '		SqueezeBox.close();';
		$script[] = '	}';

		JFactory::getDocument()->addScriptDeclaration(implode("\n", $script));

		$html	= array();
		$link	= 'index.php?option=com_content&view=articles&layout=modal&tmpl=component&function=jSelectArticle_jform_'.$this->id;

		$db	= JFactory::getDBO();
		$db->setQuery(
			'SELECT title' .
			' FROM #__content' .
			' WHERE id = '.(int) $this->value
		);
		$title = $db->loadResult();

		if ($error = $db->getErrorMsg()) {
			JError::raiseWarning(500, $error);
		}

		if (empty($title)) {
			$title = JText::_('MOD_JUNEWS_ARTICLE_INPUT');
		}

		$title  = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
        $id     = $this->id.'_name';

		$html[] = '<div class="fltlft">';
		$html[] = '  <input type="text" id="'.$id.'" value="'.$title.'" disabled="disabled" size="25" />';
		$html[] = '</div>';

		$html[] = '<div class="button2-left" style="float: left;">';
		$html[] = '  <div class="blank">';
		$html[] = '	    <a class="modal"  href="'.$link.'" rel="{handler: \'iframe\', size: {x: 800, y: 450}}">'.JText::_('MOD_JUNEWS_ARTICLE').'</a>';
		$html[] = '  </div>';
		$html[] = '</div>';
		$html[] = '<div class="button2-left">';
		$html[] = '  <div class="blank">';
		$html[] = "     <a onclick=\"document.id('".$id."').value='".JText::_("MOD_JUNEWS_ARTICLE_INPUT")."'; document.id('".$id."').fireEvent('change'); return false;\" href=\"#\" title=\"Очистити\">".JText::_("JCLEAR")."</a>";
		$html[] = '  </div>';
		$html[] = '</div>';

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