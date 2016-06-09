<?php
/**
* @package Joomla! 1.7
* @author 2008 (c)  Denys Nosov (aka Dutch)
* @author web-site: www.joomla-ua.org
* @copyright This module is licensed under a Creative Commons Attribution-Noncommercial-No Derivative Works 3.0 License.
**/

/*******************PARAMS****************/
/*
/* $params->get('moduleclass_sfx') - module class suffix
/*
/* $item->link        -   display link
/* $item->title       -   display title
/*
/* $item->image       -   display image
/*
/* $item->created     -   display date & time
/* $item->df_d        -   display day
/* $item->df_m        -   display mounth
/* $item->df_y        -   display mounth
/*
/* $item->author      -   display author
/*
/* $item->sectitle    -   display Section title
/* $item->cattitle    -   display Category title
/*
/* $item->hits        -   display Hits
/*
/* $item->introtext   -   display introtex
/* $item->fulltext    -   display fulltext
/* $item->readmore    -   display Read more...
/* $item->rmtext      -   display Read more... text
/*
/* $item->comments    -   display JComments
/*
/*****************************************/

// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<ul class="junewsultra <?php echo $params->get('moduleclass_sfx'); ?>">
<?php foreach ($list as $item) :  ?>
	<li class="jn-list">
        <?php if($item->title): ?>
    	<strong><a href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>"><?php echo $item->title; ?></a></strong>
        <?php endif; ?>
        <div class="jn-list-info">
            <?php if($params->get('showRating')): ?>
            <div class="left">
                <?php echo $item->rating; ?>
                <div>
                <?php if($params->get('showRatingCount')): ?>
                <?php echo $item->rating_count; ?>
                <?php endif; ?>
                <?php if($params->get('showHits')): ?>
                <?php echo JText::_('JGLOBAL_HITS'); ?>: <?php echo $item->hits; ?>
                <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="right">
            <?php if($params->get('show_date')): ?>
            <span><?php echo $item->created; ?></span>
            <?php endif; ?>
            <?php if($params->get('showcat')): ?>
            <span><?php echo $item->cattitle; ?></span>
            <?php endif; ?>
            <?php if($params->def('juauthor')): ?>
            <span><?php echo $item->author; ?></span>
            <?php endif; ?>
            <?php if($params->def('JC')): ?>
			<span><a class="jn-comment-link" href="<?php echo $item->link; ?><?php echo $item->commentslink; ?>"><?php echo $item->commentstext; ?></a></span>
            <?php endif; ?>
            </div>
        </div>
	</li>
<?php endforeach; ?>
</ul>