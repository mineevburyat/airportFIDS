<?php

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
$attributes = array('class' => array(),
	'title' => $item->params->get('menu-anchor_title', ''));
$linktype = $item->params->get('menu_image', '')
	? '<img src="' . $item->params->get('menu_image', '') . '" /> '
	: $item->title;

if ($menutype == 'default') {
	echo '<span class="separator">' . $linktype . '</span>';
} else if ($menutype == 'horizontal') {
	if (in_array($item->id, $path))
		$attributes['class'][] = 'active';
	$attributes['class'][] = 'separator';
	if (!$item->deeper)
		$attributes['class'][] = ' separator-without-submenu';
	if ($item->level == 1)
		$linktype = '<span class="l"></span><span class="r"></span><span class="t">' . $linktype . '</span>';
	echo artxTagBuilder('a', $attributes, $linktype);
}
