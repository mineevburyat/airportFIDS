<?php
defined('_JEXEC') or die;

echo '<a href="' . $link . '" class="art-rss-tag-icon syndicate-module' . $moduleclass_sfx . '">'
  . ($text ? '<span>' . $text . '</span>' : '') . '</a>';
