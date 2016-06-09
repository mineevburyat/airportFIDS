<?php
/**
 * Jlcackle
 *
 * @version 1.0
 * @author Kunicin Vadim(vadim@joomline.ru)
 * @copyright (C) 2011 by Kunicin Vadim(http://www.joomline.ru)
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
 **/

// no direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

class plgContentJlcackle extends JPlugin
{

	public function onContentPrepare($context, &$article, &$params, $page = 0){

		if (!isset($article->catid)) {
			$article->catid='';	
		}

		if (strpos($article->text, '{jlcackle-off}') !== false) {
			$article->text = str_replace("{jlcackle-off}","",$article->text);
			return true;
		}

		if (strpos($article->text, '{jlcackle}') === false && !$this->params->def('autoAdd')) {
			return true;
		}

		$exceptcat = is_array($this->params->def('categories')) ? $this->params->def('categories') : array($this->params->def('categories'));
		if (!in_array($article->catid,$exceptcat)) {
			$view = JRequest::getCmd('view');
			if ($view == 'article') {

				$doc = JFactory::getDocument();
			
	
	switch ($doc ->getlanguage())
		{   case 'ru-ru' : $langcackle = 'ru';
		   break;
		   case 'lv-lv' : $langcackle = 'lv';
		   break;
		   case 'de-de' : $langcackle = 'de';
		   break;
		   case 'en-gb' : $langcackle = 'en';
		   break;
		   default      : $langcackle = 'en';
		   break;
		   }
				$apiId = $this->params->def('apiId');
				$pagehash = $article->id;
				$scriptPage = <<<HTML
				
				<div id="mc-container"></div>
					<script type="text/javascript">
					var mcSite = '$apiId';
					var mcChannel = '$pagehash';
					var mcLocale = '$langcackle';
					(function() {
						var mc = document.createElement('script');
						mc.type = 'text/javascript';
						mc.async = true;
						mc.src = 'http://cackle.ru/mc.widget-min.js';
						(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(mc);
					})();
					</script>
				<div style="text-align: right;">
					<a href="http://joomline.ru/ru/rasshirenija/plugin/jlcackle.html" target="_blank" style="text-decoration:none; color: #c0c0c0; font-family: arial,helvetica,sans-serif; font-size: 5pt; ">Social commentary Cackle</a>
				</div>
HTML;

				
				if ($this->params->def('autoAdd') == 1) {
					$article->text .= $scriptPage;
				} else {
					$article->text = str_replace("{jlcackle}",$scriptPage,$article->text);
				}

			}
		} else {
			$article->text = str_replace("{jlcackle}","",$article->text);
		}

	}


}