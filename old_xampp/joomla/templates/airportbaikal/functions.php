<?php
defined('_JEXEC') or die;

if (!defined('_ARTX_FUNCTIONS')) {

	define('_ARTX_FUNCTIONS', 1);

	$GLOBALS['artx_settings'] = array(
		'block' => array('has_header' => true),
		'menu' => array('show_submenus' => true),
		'vmenu' => array('show_submenus' => false, 'simple' => false)
	);

	class ArtxContentArticleView15
	{
		private $_document;
		private $_data;

		public $version;
		public $params;
		public $canEdit;
		public $pageHeadingVisible;
		public $pageHeading;
		public $titleVisible;
		public $titleLink;
		public $title;
		public $print;
		public $pdf;
		public $hits;
		public $parentCategoryVisible;
		public $categoryVisible;

		function __construct(&$document, &$item, &$params) {
			$this->_document = $document;
			$this->_data = array();

			$this->item = & $item;
			$this->params = & $params;

			$this->canEdit = $this->_document->user->authorize('com_content', 'edit', 'content', 'all') || $this->_document->user->authorize('com_content', 'edit', 'content', 'own');
			$this->pageHeadingVisible = $this->params->get('show_page_title', 1) && $this->params->get('page_title') != $this->item->title;
			$this->pageHeading = $this->params->get('page_title');
			$this->titleVisible = $this->params->get('show_title');
			$this->titleLink = ($this->params->get('link_titles') && !empty($this->item->readmore_link)) ? $this->item->readmore_link : '';
			$this->title = $this->item->title;
			$this->print = $this->print;
			$this->pdf = true;
			$this->hits = false;
			$this->parentCategoryVisible = $this->params->get('show_section') && $this->item->sectionid && isset($this->item->section);
			$this->categoryVisible = $this->params->get('show_category') && $this->item->catid;
		}

		function renderPageContainerBegin() {
			return '';
		}

		function renderPageHeading() {
			if ($this->pageHeadingVisible)
				return artxPost(array('header-text' => $this->_document->escape($this->pageHeading)));
			return '';
		}

		function getArticleViewParameters() {
			return array('metadata-header-icons' => array(), 'metadata-footer-icons' => array());
		}

		function renderCreateDateInfo() {
			return JHTML::_('date', $this->item->created, JText::_('DATE_FORMAT_LC2'));
		}

		function renderModifyDateInfo() {
			return JText::sprintf('LAST_UPDATED2', JHTML::_('date', $this->item->modified, JText::_('DATE_FORMAT_LC2')));
		}

		function renderPublishDateInfo() {
			return '';
		}

		function renderAuthorInfo() {
			return JText::sprintf('Written by', (!empty($this->item->created_by_alias)
				? $this->_document->escape($this->item->created_by_alias)
				: $this->_document->escape($this->item->author)));
		}

		function renderPrintPopupIcon() {
			return JHtml::_('icon.print_popup',  $this->item, $this->params, $this->_document->access);
		}

		function renderPrintScreenIcon() {
			return JHtml::_('icon.print_screen',  $this->item, $this->params, $this->_document->access);
		}

		function renderEmailIcon() {
			return JHtml::_('icon.email',  $this->item, $this->params, $this->_document->access);
		}

		function renderEditIcon() {
			return JHtml::_('icon.edit', $this->item, $this->params, $this->_document->access);
		}
		
		function renderPdfIcon() {
			return JHTML::_('icon.pdf',  $this->item, $this->params, $this->_document->access);
		}
		
		function renderHitsInfo() {
			return '';
		}
		
		function renderCategories() {
			$result = JText::_('Category') . ': ';
			if ($this->parentCategoryVisible) {
				$result .= '<span class="art-post-metadata-category-parent">';
				$title = $this->_document->escape($this->item->section);
				if ($this->params->get('link_section'))
					$result .= '<a href="' . JRoute::_(ContentHelperRoute::getSectionRoute($this->item->sectionid)).'">' . $title . '</a>';
				else
					$result .= $title;
				$result .= '</span>';
			}
			if ($this->parentCategoryVisible && $this->categoryVisible)
				$result .= ' / ';
			if ($this->categoryVisible) {
				$result .= '<span class="art-post-metadata-category-name">';
				$title = $this->_document->escape($this->item->category);
				if ($this->params->get('link_category'))
					$result .= '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug, $this->item->sectionid)) . '">' . $title . '</a>';
				else
					$result .= $title;
				$result .= '</span>';
			}
			return $result;
		}
		
		function renderArticle($article) {
			return artxPost($article);
		}

		function renderPageContainerEnd() {
			return '';
		}

	}

	class ArtxContentArticleView16
	{
		private $_document;

		public $version;
		public $params;
		public $canEdit;
		public $pageHeadingVisible;
		public $pageHeading;
		public $titleVisible;
		public $titleLink;
		public $title;
		public $print;
		public $pdf;
		public $hits;
		public $parentCategoryVisible;
		public $categoryVisible;

		function __construct(&$document, &$item, &$params) {
			$this->_document = $document;

			$this->item = & $item;
			$this->params = & $params;

			$this->canEdit = $document->user->authorise('core.edit', 'com_content.frontpage.' . $this->item->id); 
			$this->pageHeadingVisible = $this->params->get('show_page_heading', 1);
			$this->pageHeading = $this->params->get('page_heading');
			$this->titleVisible = $this->params->get('show_title') || $this->params->get('access-edit');
			$this->titleLink = $this->params->get('link_titles') && !empty($this->item->readmore_link) ? $this->item->readmore_link : '';
			$this->title = $this->item->title;
			$this->print = $this->print;
			$this->hits = true;
			$this->pdf = false;
			$this->parentCategoryVisible = $this->params->get('show_parent_category') && $this->item->parent_slug != '1:root';
			$this->categoryVisible = $this->params->get('show_category');
		}

		function renderPageContainerBegin() {
			return '<div class="item-page' . $this->params->get('pageclass_sfx') . '">';
		}

		function renderPageHeading() {
			if ($this->pageHeadingVisible)
				return artxPost(array('header-text' => $this->_document->escape($this->pageHeading)));
			return '';
		}

		function getArticleViewParameters() {
			return array('metadata-header-icons' => array(), 'metadata-footer-icons' => array());
		}

		function renderCreateDateInfo() {
			return JText::sprintf('COM_CONTENT_CREATED_DATE_ON', JHTML::_('date', $this->item->created, JText::_('DATE_FORMAT_LC2')));
		}

		function renderModifyDateInfo() {
			return JText::sprintf('COM_CONTENT_LAST_UPDATED', JHTML::_('date', $this->item->modified, JText::_('DATE_FORMAT_LC2')));
		}

		function renderPublishDateInfo() {
			return JText::sprintf('COM_CONTENT_PUBLISHED_DATE', JHTML::_('date', $this->item->publish_up, JText::_('DATE_FORMAT_LC2')));
		}

		function renderAuthorInfo() {
			$author = $this->params->get('link_author', 0)
				? JHTML::_('link', JRoute::_('index.php?option=com_users&view=profile&member_id=' . $this->item->created_by), $this->item->author)
				: $this->item->author;
			$author = $this->item->created_by_alias ? $this->item->created_by_alias : $author;
			return JText::sprintf('COM_CONTENT_WRITTEN_BY', $author);
		}

		function renderPrintPopupIcon() {
			return JHtml::_('icon.print_popup',  $this->item, $this->params);
		}

		function renderPrintScreenIcon() {
			return JHtml::_('icon.print_screen',  $this->item, $this->params);
		}

		function renderEmailIcon() {
			return JHtml::_('icon.email',  $this->item, $this->params);
		}

		function renderEditIcon() {
			return JHtml::_('icon.edit', $this->item, $this->params);
		}
		
		function renderPdfIcon() {
			return '';
		}
		
		function renderHitsInfo() {
			return JText::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits);
		}
		
		function renderCategories() {
			$result = JText::_('Category') . ': ';
			if ($this->parentCategoryVisible) {
				$result .= '<span class="art-post-metadata-category-parent">';
				$title = $this->_document->escape($this->item->parent_title);
				if ($this->params->get('link_parent_category') && $this->item->parent_slug)
					$result .= '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->parent_slug)) . '">' . $title . '</a>';
				else
					$result .= $title;
				$result .= '</span>';
			}
			if ($this->parentCategoryVisible && $this->categoryVisible)
				$result .= ' / ';
			if ($this->categoryVisible) {
				$result .= '<span class="art-post-metadata-category-name">';
				$title = $this->_document->escape($this->item->category_title);
				if ($this->params->get('link_category') && $this->item->catslug)
					$result .= '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug)) . '">' . $title . '</a>';
				else
					$result .= $title;
				$result .= '</span>';
			}
			return $result;
		}
		
		function renderArticle($article) {
			return artxPost($article);
		}

		function renderPageContainerEnd() {
			return '</div>';
		}

	}

	function artxHasMessages()
	{
		if (isset($GLOBALS['mainframe'])) {
			// Joomla 1.5
			global $mainframe;
			$app = & $mainframe;
		} else
			// Joomla 1.6
			$app = JFactory::getApplication();
		$messages = $app->getMessageQueue();
		if (is_array($messages) && count($messages))
			foreach ($messages as $msg)
				if (isset($msg['type']) && isset($msg['message']))
					return true;
		return false;
	}


	/**
	 * Renders article or block in the Post style.
	 *
	 * Elements of the $data array:
	 *  'classes'
	 *  'header-text'
	 *  'header-icon'
	 *  'header-link'
	 *  'metadata-header-icons'
	 *  'metadata-footer-icons'
	 *  'content'
	 */
	function artxPost($data)
	{
		if (is_string($data))
			$data = array('content' => $data);
		$classes = isset($data['classes']) && strlen($data['classes']) ? $data['classes'] : '';
		artxFragmentBegin(str_replace('class="art-post">', 'class="art-post' . $classes . '">', "<div class=\"art-post\">\r\n    <div class=\"art-post-body\">\r\n<div class=\"art-post-inner\">\r\n"));
		artxFragmentBegin("<div class=\"art-postmetadataheader\">\r\n");
		artxFragmentBegin("<h2 class=\"art-postheader\">" . JHTML::_('image.site', 'postheadericon.png', null, null, null, '', array('width' => '6', 'height' => '6')) . " ");
		artxFragmentBegin("");
		if (isset($data['header-text']) && strlen($data['header-text'])) {
			if (isset($data['header-link']) && strlen($data['header-link']))
				artxFragmentContent('<a href="' . $data['header-link'] . '" class="PostHeader">' . $data['header-text'] . '</a>');
			else
				artxFragmentContent($data['header-text']);
		}
		artxFragmentEnd("\r\n");
		artxFragmentEnd("</h2>\r\n");
		artxFragmentEnd("\r\n</div>\r\n");
		artxFragmentBegin("<div class=\"art-postheadericons art-metadata-icons\">\r\n");
		if (isset($data['metadata-header-icons']) && count($data['metadata-header-icons']))
			foreach ($data['metadata-header-icons'] as $icon)
				artxFragment('', $icon, '', ' | ');
		artxFragmentEnd("\r\n</div>\r\n");
		artxFragmentBegin("<div class=\"art-postcontent\">\r\n");
		if (isset($data['content']) && strlen($data['content']))
			artxFragmentContent($data['content']);
		artxFragmentEnd("\r\n</div>\r\n<div class=\"cleared\"></div>\r\n");
		artxFragmentBegin("<div class=\"art-postfootericons art-metadata-icons\">\r\n");
		if (isset($data['metadata-footer-icons']) && count($data['metadata-footer-icons']))
			foreach ($data['metadata-footer-icons'] as $icon)
				artxFragment('', $icon, '', ' | ');
		artxFragmentEnd("\r\n</div>\r\n");
		return artxFragmentEnd("\r\n</div>\r\n\r\n		<div class=\"cleared\"></div>\r\n    </div>\r\n</div>\r\n", '', true);
	}

	function artxBlock($caption, $content, $classes = '')
	{
		$hasCaption = ($GLOBALS['artx_settings']['block']['has_header']
			&& null !== $caption && strlen(trim($caption)) > 0);
		$hasContent = (null !== $content && strlen(trim($content)) > 0);

		if (!$hasCaption && !$hasContent)
			return '';

		ob_start();
?>
		<?php ob_start(); ?>
<div class="art-block">
		    <div class="art-block-body">
		
		<?php echo str_replace('class="art-block">', 'class="art-block' . $classes . '">', ob_get_clean()); ?>
		<?php if ($hasCaption): ?>
<div class="art-blockheader">
		    <div class="l"></div>
		    <div class="r"></div>
		    <h3 class="t">
		<?php echo $caption; ?>
</h3>
		</div>
		
		<?php endif; ?>
		<?php if ($hasContent): ?>
<div class="art-blockcontent">
		    <div class="art-blockcontent-body">
		
		<?php echo artxReplaceButtons($content); ?>

		
				<div class="cleared"></div>
		    </div>
		</div>
		
		<?php endif; ?>

				<div class="cleared"></div>
		    </div>
		</div>
		
<?php
		return ob_get_clean();
	}



	function artxPageTitle($page, $criteria = null, $key = null)
	{
		if ($criteria === null)
			$criteria = $page->params->def('show_page_title', 1);
		return $criteria
			? ('<span class="componentheading' . $page->params->get('pageclass_sfx') . '">'
				. $page->escape($page->params->get($key === null ? 'page_title' : $key)) . '</span>')
			: '';
	}
	
	function artxCountModules(&$document, $position)
	{
		return $document->countModules($position);
	}
	
	function artxPositions(&$document, $positions, $style)
	{
		ob_start();
		if (count($positions) == 3) {
			if (artxCountModules($document, $positions[0])
				&& artxCountModules($document, $positions[1])
				&& artxCountModules($document, $positions[2]))
			{
				?>
<table class="position" cellpadding="0" cellspacing="0" border="0">
<tr valign="top">
  <td width="33%"><?php echo artxModules($document, $positions[0], $style); ?></td>
  <td width="33%"><?php echo artxModules($document, $positions[1], $style); ?></td>
  <td><?php echo artxModules($document, $positions[2], $style); ?></td>
</tr>
</table>
<?php
			} elseif (artxCountModules($document, $positions[0]) && artxCountModules($document, $positions[1])) {
?>
<table class="position" cellpadding="0" cellspacing="0" border="0">
<tr valign="top">
  <td width="33%"><?php echo artxModules($document, $positions[0], $style); ?></td>
  <td><?php echo artxModules($document, $positions[1], $style); ?></td>
</tr>
</table>
<?php
			} elseif (artxCountModules($document, $positions[1]) && artxCountModules($document, $positions[2])) {
?>
<table class="position" cellpadding="0" cellspacing="0" border="0">
<tr valign="top">
  <td width="67%"><?php echo artxModules($document, $positions[1], $style); ?></td>
  <td><?php echo artxModules($document, $positions[2], $style); ?></td>
</tr>
</table>
<?php
			} elseif (artxCountModules($document, $positions[0]) && artxCountModules($document, $positions[2])) {
?>
<table class="position" cellpadding="0" cellspacing="0" border="0">
<tr valign="top">
  <td width="50%"><?php echo artxModules($document, $positions[0], $style); ?></td>
  <td><?php echo artxModules($document, $positions[2], $style); ?></td>
</tr>
</table>
<?php
			} else {
				echo artxModules($document, $positions[0], $style);
				echo artxModules($document, $positions[1], $style);
				echo artxModules($document, $positions[2], $style);
			}
		} elseif (count($positions) == 2) {
			if (artxCountModules($document, $positions[0]) && artxCountModules($document, $positions[1])) {
?>
<table class="position" cellpadding="0" cellspacing="0" border="0">
<tr valign="top">
<td width="50%"><?php echo artxModules($document, $positions[0], $style); ?></td>
<td><?php echo artxModules($document, $positions[1], $style); ?></td>
</tr>
</table>
<?php
			} else {
				echo artxModules($document, $positions[0], $style);
				echo artxModules($document, $positions[1], $style);
			}
		} // count($positions)
		return ob_get_clean();
	}
	
	function artxGetContentCellStyle(&$document)
	{
		$leftCnt = artxCountModules($document, 'left');
		$rightCnt = artxCountModules($document, 'right');
		if ($leftCnt > 0 && $rightCnt > 0)
			return 'content';
		if ($rightCnt > 0)
			return 'content-sidebar1';
		if ($leftCnt > 0)
			return 'content-sidebar2';
		return 'content-wide';
	}

	/**
	 * Wraps component content into article style unless it is not wrapped already.
	 *
	 * The artxComponentWrapper function gets the content of the 'component' buffer and search for the '<div class="art-post">' string in it.
	 * Then it replaces the componentheading DIV tag with span (to fix the w3.org validation) and replaces content of the buffer with
	 * wrapped content.
	 */
	function artxComponentWrapper(&$document)
	{
		if ($document->getType() != 'html')
			return;
		$content = $document->getBuffer('component');
		if (false === strpos($content, '<div class="art-post')) {
			$title = null;
			if (preg_match('~<div\s+class="(componentheading[^"]*)"([^>]*)>([^<]+)</div>~', $content, $matches, PREG_OFFSET_CAPTURE)) {
				$content = substr($content, 0, $matches[0][1]) . substr($content, $matches[0][1] + strlen($matches[0][0]));
				$title = '<span class="' . $matches[1][0] . '"' . $matches[2][0] . '>' . $matches[3][0] . '</span>';
			}
			$document->setBuffer(artxPost(array('header-text' => $title, 'content' => $content)), 'component');
		}
	}

	function artxModules(&$document, $position, $style = null)
	{
		return '<jdoc:include type="modules" name="' . $position . '"' . (null != $style ? ' style="artstyle" artstyle="' . $style . '"' : '') . ' />';
	}


		function artxUrlToHref($url)
		{
			$result = '';
			$p = parse_url($url);
			if (isset($p['scheme']) && isset($p['host'])) {
				$result = $p['scheme'] . '://';
				if (isset($p['user'])) {
					$result .= $p['user'];
					if (isset($p['pass']))
						$result .= ':' . $p['pass'];
					$result .= '@';
				}
				$result .= $p['host'];
				if (isset($p['port']))
					$result .= ':' . $p['port'];
				if (!isset($p['path']))
					$result .= '/';
			}
			if (isset($p['path']))
				$result .= $p['path'];
			if (isset($p['query'])) {
				$result .= '?' . str_replace('&', '&amp;', $p['query']);
			}
			if (isset($p['fragment']))
				$result .= '#' . $p['fragment'];
			return $result;
		}
	
		function artxReplaceButtonsRegex()
		{
			return '~<input\b[^>]*'
				. '\bclass=(?:(")(?:[^"]*\s)?button(?:\s[^"]*)?"|(\')(?:[^\']*\s)?button(?:\s[^\']*)?\'|button(?=[/>\s]))'
				. '[^>]*/?\s*>~i';
		}
	
		function artxReplaceButtons($content)
		{
			$re = artxReplaceButtonsRegex();
			if (!preg_match_all($re, $content, $matches, PREG_OFFSET_CAPTURE))
				return $content;
			$result = '';
			$position = 0;
			for ($index = 0; $index < count($matches[0]); $index++) {
				$match = $matches[0][$index];
				if (is_array($matches[1][$index]) && strlen($matches[1][$index][0]) > 0)
					$quote = $matches[1][$index][0];
				else if (is_array($matches[2][$index]) && strlen($matches[2][$index][0]) > 0)
					$quote = $matches[2][$index][0];
				else
					$quote = '"';
				$result .= substr($content, $position, $match[1] - $position);
				$position = $match[1] + strlen($match[0]);
				$result .= str_replace('"', $quote, '<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span>')
					. preg_replace('~\bclass=(?:"([^"]*\s)?button(\s[^"]*)?"|\'([^\']*\s)?button(\s[^\']*)?\'|button(?=[/>\s]))~i',
						str_replace('"', $quote, 'class="\1\3button art-button\2\4"'), $match[0]) . '</span>';
			}
			$result .= substr($content, $position);
			return $result;
		}
	
		function artxLinkButton($data = array())
		{
			return '<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span>'
				. '<a class="' . (isset($data['classes']) && isset($data['classes']['a']) ? $data['classes']['a'] . ' ' : '')
				. 'art-button" href="' . $data['link'] . '">' . $data['content'] . '</a></span>';
		}
	
		function artxHtmlFixFormAction($content)
		{
			if (preg_match('~ action="([^"]+)" ~', $content, $matches, PREG_OFFSET_CAPTURE)) {
				$content = substr($content, 0, $matches[0][1])
					. ' action="' . artxUrlToHref($matches[1][0]) . '" '
					. substr($content, $matches[0][1] + strlen($matches[0][0]));
			}
			return $content;
		}
	
		function artxTagBuilder($tag, $attributes, $content) {
			$result = '<' . $tag;
			foreach ($attributes as $name => $value) {
				if (is_string($value)) {
					if (!empty($value))
						$result .= ' ' . $name . '="' . $value . '"';
				} else if (is_array($value)) {
					$values = array_filter($value);
					if (count($values))
						$result .= ' ' . $name . '="' . implode(' ', $value) . '"';
				}
			}
			$result .= '>' . $content . '</' . $tag . '>';
			return $result;
		}
	
		$artxFragments = array();
	
		function artxFragmentBegin($head = '')
		{
			global $artxFragments;
			$artxFragments[] = array('head' => $head, 'content' => '', 'tail' => '');
		}
	
		function artxFragmentContent($content = '')
		{
			global $artxFragments;
			$artxFragments[count($artxFragments) - 1]['content'] = $content;
		}
	
		function artxFragmentEnd($tail = '', $separator = '', $return = false)
		{
			global $artxFragments;
			$fragment = array_pop($artxFragments);
			$fragment['tail'] = $tail;
			$content = trim($fragment['content']);
			if (count($artxFragments) == 0) {
				if ($return)
					return (trim($content) == '') ? '' : ($fragment['head'] . $content . $fragment['tail']);
				echo (trim($content) == '') ? '' : ($fragment['head'] . $content . $fragment['tail']);
			} else {
				$result = (trim($content) == '') ? '' : ($fragment['head'] . $content . $fragment['tail']);
				$fragment =& $artxFragments[count($artxFragments) - 1];
				$fragment['content'] .= (trim($fragment['content']) == '' ? '' : $separator) . $result;
			}
		}
	
		function artxFragment($head = '', $content = '', $tail = '', $separator = '', $return = false)
		{
			global $artxFragments;
			if ($head != '' && $content == '' && $tail == '' && $separator == '') {
				$content = $head;
				$head = '';
			} elseif ($head != '' && $content != '' && $tail == '' && $separator == '') {
				$separator = $content;
				$content = $head;
				$head = '';
			}
			artxFragmentBegin($head);
			artxFragmentContent($content);
			artxFragmentEnd($tail, $separator, $return);
		}
	

}