<?php
defined('_JEXEC') or die;

require_once dirname(__FILE__) . str_replace('/', DIRECTORY_SEPARATOR, '/../../../functions.php');

// Create View adapter for Joomla! 1.5 or 1.6. "protected" visibility level 
// of the item/article property prevents from creating view factory.
// The ArtxContentArticleView16 and ArtxContentArticleView15 classes are defined
// in ../../../functions.php file and contain version-specific queries and formatting.
if ($GLOBALS['version']->RELEASE == '1.6') {
 $view = new ArtxContentArticleView16($this, $this->item, $this->params);
 JHtml::addIncludePath(JPATH_COMPONENT . DS . 'helpers');
} else {
 $view = new ArtxContentArticleView15($this, $this->article, $this->params);
}


echo $view->renderPageContainerBegin();
echo $view->renderPageHeading();

$article = $view->getArticleViewParameters();
if ($view->titleVisible) {
 $article['header-text'] = $this->escape($view->title);
 if (strlen($view->titleLink))
  $article['header-link'] = $view->titleLink;
}
// Change the order of "if" statements to change the order of article metadata header items.
if ($view->params->get('show_create_date'))
 $article['metadata-header-icons'][] = $view->renderCreateDateInfo();
if ($view->params->get('show_modify_date'))
 $article['metadata-header-icons'][] = $view->renderModifyDateInfo();
if ($view->params->get('show_publish_date'))
 $article['metadata-header-icons'][] = $view->renderPublishDateInfo();
if ($view->params->get('show_author') && !empty($view->item->author))
 $article['metadata-header-icons'][] = $view->renderAuthorInfo();
if (!$view->print && $view->pdf && $view->params->get('show_pdf_icon'))
 $article['metadata-header-icons'][] = $view->renderPdfIcon();
if (!$view->print && $view->params->get('show_print_icon'))
 $article['metadata-header-icons'][] = $view->renderPrintPopupIcon();
if ($view->print)
 $article['metadata-header-icons'][] = $view->renderPrintScreenIcon();
if (!$view->print && $view->params->get('show_email_icon'))
  $article['metadata-header-icons'][] = $view->renderEmailIcon();
if (!$view->print && $view->canEdit)
  $article['metadata-header-icons'][] = $view->renderEditIcon();
if ($view->hits && $view->params->get('show_hits'))
 $article['metadata-header-icons'][] = $view->renderHitsInfo();
// Build article content
$content = '';
if (!$view->params->get('show_intro'))
 $content .= $view->item->event->afterDisplayTitle;
$content .= $view->item->event->beforeDisplayContent;
if (isset ($view->item->toc))
 $content .= $view->item->toc;
$content .= "<div class=\"art-article\">" . $view->item->text . "</div>";
$content .= $view->item->event->afterDisplayContent;
$article['content'] = $content;
// Change the order of "if" statements to change the order of article metadata footer items.
if ($view->parentCategoryVisible || $view->categoryVisible)
  $article['metadata-footer-icons'][] = $view->renderCategories();;
// Render article
echo $view->renderArticle($article);

echo $view->renderPageContainerEnd();
