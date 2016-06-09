<?php
/**
* @package Joomla! 1.7
* @version 2.2
* @author 2008-2011 (c)  Denys Nosov (aka Dutch)
* @author web-site: www.joomla-ua.org
* @copyright This module is licensed under a Creative Commons Attribution-Noncommercial-No Derivative Works 3.0 License.
**/

// no direct access
defined('_JEXEC') or die;

require_once JPATH_SITE.'/components/com_content/helpers/route.php';

jimport('joomla.application.component.model');

JModel::addIncludePath(JPATH_SITE.'/components/com_content/models', 'ContentModel');

abstract class modJUNewsUltraHelper {

	public static function getList(&$params) {

		// Get the dbo

		$db = JFactory::getDbo();
        $query = $db->getQuery(true);

		// Get an instance of the generic articles model

        $model = JModel::getInstance('Articles', 'ContentModel', array('ignore_request' => true));

		// Set application parameters in model

		$app = JFactory::getApplication();
		$appParams = $app->getParams();
		$model->setState('params', $appParams);

        // Set new params

        // Introtext
		$show_intro         = $params->get( 'show_intro');
		$introtext_limit	= intval( $params->get( 'introtext_limit') );
		$li                 = $params->get('li');
		$lmttext            = $params->get('lmttext');
		$clear_tag          = $params->get('clear_tag');

		// Date
		$data_format	    = $params->get('data_format');
		$df_d			    = $params->get('df_d');
		$df_m			    = $params->get('df_m');
		$df_y			    = $params->get('df_y');

        // Image
		$imageWidth         = intval($params->get('imageWidth'));
		$imageHeight        = intval($params->get('imageHeight'));
		$thumb_width        = intval($params->get('thumb_width'));
		$thumb_filter       = intval($params->get('thumb_filter'));
		$Zoom_Crop          = intval($params->get('Zoom_Crop'));
		$thumb_filter_color = intval($params->get('thumb_filter_color'));
		$pik                = $params->def('pik');
		$noimage            = $params->def('noimage');
		$imglink            = $params->def('imglink');
   		$youtube_img_show   = $params->def('youtube_img_show');

		// Set the filters based on the module params
		$model->setState('list.start', 0);
		$model->setState('list.limit', (int) $params->get('count', 5));
		$model->setState('filter.published', 1);

		// Access filter
		$access = !JComponentHelper::getParams('com_content')->get('show_noauth');
		$authorised = JAccess::getAuthorisedViewLevels(JFactory::getUser()->get('id'));
		$model->setState('filter.access', $access);

        // User filter
		$userId = JFactory::getUser()->get('id');
		switch ($params->get('user_id')) {
			case 'by_me':
				$model->setState('filter.author_id', (int) $userId);
			break;
			case 'not_me':
				$model->setState('filter.author_id', $userId);
				$model->setState('filter.author_id.include', false);
			break;
			case '0':
			break;
			default:
				$model->setState('filter.author_id', (int) $params->get('user_id'));
			break;
		}

		// Filter by language
		$model->setState('filter.language',$app->getLanguageFilter());

		//  Featured switch
		switch ($params->get('show_featured')) {
			case '1':
				$model->setState('filter.featured', 'only');
			break;
			case '0':
				$model->setState('filter.featured', 'hide');
			break;
			default:
				$model->setState('filter.featured', 'show');
			break;
		}

		// Set ordering
	    $order_map = array(
			'title_asc'             => 'a.title ASC',
			'title_desc'            => 'a.title DESC',
			'id_asc'                => 'a.id',
			'id_desc'               => 'a.id DESC',
            'hits_desc'             => 'a.hits DESC',
            'created_asc'           => 'a.created',
            'created_desc'          => 'a.created DESC',
            'modified_desc'         => 'a.modified DESC',
            'modified_created_dsc'  => 'a.modified DESC, a.created',
			'modified_touch_dsc'    => 'CASE WHEN (a.modified = '.$db->quote($db->getNullDate()).') THEN a.created ELSE a.modified END',
			'ordering_asc'          => 'a.ordering ASC',
			'ordering_desc'         => 'a.ordering DESC',
			'rand'                  => 'rand()',
			'publish_dsc'           => 'a.publish_up',
			'rating_dsc'            => 'v.rating_count',
		);

		$ordering = JArrayHelper::getValue($order_map, $params->get('ordering'), 'a.publish_up');
		$dir = '';

		$model->setState('list.ordering', $ordering);
	   	$model->setState('list.direction', $dir);

		// Select article or categories
        if($params->def('display_article') == 1) {
    		// Article filter
    		$model->setState('filter.article_id', $params->def('articleid', array()));
        } else {
    		// Category filter
    		$model->setState('filter.category_id', $params->get('catid', array()));
        }

        $items = $model->getItems();

        // JComments integration
        if ($params->def('JC') == 1 && count($items)) {

            $ids = array();

            foreach($items as $item) {
                $ids[] = $item->id;
            }

            $db = JFactory::getDBO();
            $db->setQuery('SELECT object_id, count(*) AS cnt FROM #__jcomments WHERE object_group="com_content" AND object_id IN ('.implode(',', $ids).')');

            $commentsCount = $db->loadObjectList('object_id');

            foreach($items as &$item) {

                $item->comments     = isset($commentsCount[$item->id]) ? $commentsCount[$item->id]->cnt : 0;
                $item->commentslink = '#comments';
                $item->commentstext = JText::plural('LINK_READ_COMMENTS', $item->comments);

                if ($item->comments == 0) {
                    $item->comments     = '';
                    $item->commentslink = '#addcomments';
                    $item->commentstext = JText::_('LINK_ADD_COMMENT');
                }
            }

        }
        // JComments integration

		foreach ($items as &$item) {

			$item->slug = $item->id.':'.$item->alias;
			$item->catslug = $item->catid.':'.$item->category_alias;

			if ($access || in_array($item->access, $authorised)) {
				$item->link = JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catslug));
                $catlink = JRoute::_(ContentHelperRoute::getCategoryRoute($item->catslug));
			} else {
				$item->link = JRoute::_('index.php?option=com_users&view=login');
                $catlink = $item->link;
			}

            // article title
            $item->title = strip_tags( $item->title );

            // category title
            if($params->get('showcat') == 1) {

                $cattitle = strip_tags( $item->category_title );

                if($params->get('showcatlink') == 1) {
                    $item->cattitle = '<a href="'. $catlink .'" title="'. $cattitle .'">'. $cattitle .'</a>';
                } else {
                    $item->cattitle = $cattitle;
                }

            }

            // tips
            if ($params->get('tips') == 1) {
                $title_tips = ' title="'. strip_tags( $item->title ) .'" ';
            } else {
                $title_tips = '';
            }

            // images
            if ($pik==1) {

                $iW = $imageWidth;
                $iH = $imageHeight;

                if ($imglink == 1) {
                    $imlink  = '<a href="'. $item->link .'"'. $title_tips .'>';
                    $imlink2 = '</a>';
                }

                $imgPrefix = JURI::base() .'modules/mod_junewsultra/img/img.php?src=../../../';

                if ($thumb_width==1) {

                    if ($thumb_filter==1) {

                        if ($thumb_filter_color==1){
                            $imgfiltr = '&fltr[]=sep';
                        } else {
                            $imgfiltr = '&fltr[]=gray';
                        }
                        $img_filtr = $imgfiltr;

                    } else {

                        $img_filtr = "";

                    }

                    $imgthr = JURI::base() .'modules/mod_junewsultra/img/';
                    $imgthr2 = '&w='. $iW .'&h='. $iH .'&q=100'. ($Zoom_Crop == '1' ? '&zc=1' : '') . $img_filtr;

                }

                $junuimgresmatche = $item->introtext;

                $regex = '/<img(.*?)src="(.*?)"(.*?)>\s*(<\/img>)?/';
                preg_match($regex, $junuimgresmatche, $junuimgsource);

                if( $junuimgsource ) {

                    $junuimgsource  = $junuimgsource[2];
                    $junuimgsource  = str_replace(JURI::base(), '', $junuimgsource);

                }

                if ($thumb_width==1) {

                    $junuimg         = base64_encode(  '../../../' . $junuimgsource . $imgthr2 );
                    $jununoimg       = base64_encode(  '../../../media/mod_junewsultra/' . $noimage . $imgthr2 );

                    if( $junuimgsource  )
                    {
                        $item->image = $imlink .'<img src="'. $imgthr . $junuimg .'_junus.jpg" alt="'. strip_tags( $item->title ) .'" />'. $imlink2;
                    } else {

                        if($youtube_img_show == 1) {

                            $regex = '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';
                            if (preg_match($regex, $junuimgresmatche, $match)) {
                                $item->image = $imlink .'<img src="'. $imgthr . base64_encode( modJUNewsUltraHelper::youtube('http://youtu.be/'. $match[1],'hqthumb') . $imgthr2 ) .'_junus.jpg" alt="'. strip_tags( $item->title ) .'" />'. $imlink2;
                            }

                        } else {

                            $item->image = $imlink .'<img src="'. $imgthr . $jununoimg .'_junus.jpg" alt="'. strip_tags( $item->title ) .'" />'. $imlink2;

                        }
                    }



                } else {

                    if( $junuimgsource  )
                    {
                        $item->image = $imlink .'<img src="'. $junuimgsource .'" width="'. $imageWidth .'" alt="'. strip_tags( $item->title ) .'" />'. $imlink2;
                    } else {

                        if($youtube_img_show == 1) {

                            $regex = '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';                         
                            if (preg_match($regex, $junuimgresmatche, $match)) {

                                $yimg = modJUNewsUltraHelper::youtube('http://youtu.be/'. $match[1],'hqthumb');
                                $item->image = $imlink .'<img src="'. $yimg .'" width="'. $imageWidth .'" alt="'. strip_tags( $item->title ) .'" />'. $imlink2;
                            }

                        } else {

                            $jununoimg      = JURI::base().'/media/mod_junewsultra/' . $noimage;

                            $item->image = $imlink .'<img src="'. $jununoimg .'" width="'. $imageWidth .'" alt="'. strip_tags( $item->title ) .'" />'. $imlink2;

                        }
                    }
                }
            }

            // introtext
            if ($clear_tag == 1) {
                $item->introtext = preg_replace('/{([a-zA-Z0-9\-_]*)\s*(.*?)}/i', '', $item->introtext);
                $item->introtext = str_replace( '&nbsp;', ' ', $item->introtext );
                $item->introtext = strip_tags( $item->introtext );
            } else {
                $item->introtext = preg_replace('/{([a-zA-Z0-9\-_]*)\s*(.*?)}/i', '', $item->introtext);
                $item->introtext = preg_replace('/<img(.*?)>/i', '', $item->introtext);
            }

            if ($li==1) {

                if ($lmttext==1) {
                    $item->introtext = trim(implode(" ", array_slice(explode(" ", $item->introtext), 0, $introtext_limit)));
                } else {
                    $item->introtext = trim(JString::substr($item->introtext, 0, $introtext_limit));
                }

                if (!preg_match('#(\.|\?|\!)$#ismu', $item->introtext)) {
                    $item->introtext = preg_replace('#^\s?(\,|\;|\:|\-)#ismu', '', $item->introtext);
                    $item->introtext = $item->introtext . '...';
                }

            } else {
                $item->introtext = $item->introtext;
            }

            // author
            if ($params->def('juauthor') == 1) {
                if ( $item->created_by_alias )
                {
				    $item->author = $item->created_by_alias;
			    } else {
				    $item->author = $item->author;
			    }
            }

            // date
            if ($params->get('show_date') == 1) {
                $item->created  = JHTML::_('date', $item->created, $data_format );
                $item->df_d     = JHTML::_('date', $item->created, $df_d );
                $item->df_m     = JHTML::_('date', $item->created, $df_m );
                $item->df_y     = JHTML::_('date', $item->created, $df_y );
            }

            // hits
            if ($params->get('showHits') == 1) {
                $item->hits   = $item->hits;
            }

            // hits
            if ($params->get('showRating') == 1) {
                $template     = str_replace('_:', '', $params->def('template'));

    			$img = '';
    			$starImageOn  = JHTML::_('image.site', 'modules/mod_junewsultra/tmpl/'.$template.'/images/rating_star.png', null);;
    			$starImageOff = JHtml::_('image.site','modules/mod_junewsultra/tmpl/'.$template.'/images/rating_star_blank.png', NULL, NULL, true);

    			for ($i=0; $i < $item->rating; $i++) {
    				$img .= $starImageOn;
    			}
    			for ($i=$item->rating; $i < 5; $i++) {
    				$img .= $starImageOff;
    			}

    			$item->rating  = $img;

            }
		}

		return $items;
	}

    /*
    * parse_youtube_url() PHP function
    * Author: takien
    * URL: http://takien.com
    *
    * @param string $url URL to be parsed, eg:
    * http://youtu.be/zc0s358b3Ys,
    * http://www.youtube.com/embed/zc0s358b3Ys
    * http://www.youtube.com/watch?v=zc0s358b3Ys
    * @param string $return what to return
    * - embed, return embed code
    * - thumb, return URL to thumbnail image
    * - hqthumb, return URL to high quality thumbnail image.
    * @param string $width width of embeded video, default 560
    * @param string $height height of embeded video, default 349
    * @param string $rel whether embeded video to show related video after play or not.

    */
    function youtube($url,$return='embed',$width='',$height='',$rel=0){
    	$urls = parse_url($url);

    	//url is http://youtu.be/xxxx
    	if($urls['host'] == 'youtu.be'){
    		$id = ltrim($urls['path'],'/');
    	}
    	//url is http://www.youtube.com/embed/xxxx
    	else if(strpos($urls['path'],'embed') == 1){
    		$id = end(explode('/',$urls['path']));
    	}
    	 //url is xxxx only
    	else if(strpos($url,'/')===false){
    		$id = $url;
    	}
    	//http://www.youtube.com/watch?feature=player_embedded&v=m-t4pcO99gI
    	//url is http://www.youtube.com/watch?v=xxxx
    	else{
    		parse_str($urls['query']);
    		$id = $v;
    		if(!empty($feature)){
    			$id = end(explode('v=',$urls['query']));
    		}
    	}
    	//return embed iframe
    	if($return == 'embed'){
    		return '<iframe width="'.($width?$width:560).'" height="'.($height?$height:349).'" src="http://www.youtube.com/embed/'.$id.'?rel='.$rel.'" frameborder="0" allowfullscreen></iframe>';
    	}
    	//return normal thumb
    	else if($return == 'thumb'){
    		return 'http://i1.ytimg.com/vi/'.$id.'/default.jpg';
    	}
    	//return hqthumb
    	else if($return == 'hqthumb'){
    		return 'http://i1.ytimg.com/vi/'.$id.'/hqdefault.jpg';
    	}
    	// else return id
    	else{
    		return $id;
    	}
    }

}
