<?php
/**
* @версия $Id: mod_CatContent
* @расширение: Компонент
* @Копирайт Котофей 23.07.2007
* www.SkyDisign.Com
*/

defined( '_VALID_MOS' ) or die( 'Restricted access' );

$moduleclass_sfx = $params->get('moduleclass_sfx', '');
$wherefrom = $params->get('where', '');
$section = $params->get('set_section_id', '');
$category = $params->get('set_category_id', '');
$id = $params->get('where_id', '');
$lastimage = $params->get('lastimage', '');
$seperator = $params->get('seperator', '');
$linkedtitle = $params->get('linkedtitle', '');
$timeformat = "classic";
$linkedimage = $params->get('linkedimg', '');
$catlink = 0;
$orderby = $params->get('orderby', '');
$outputorder = $params->get('outputorder', '');
$count = intval($params->get('count',1));
$chars = intval($params->get('chars',''));
$words = intval($params->get('words',''));
$readmore = $params->get('readmore','');
$custumimage = "";
$align = $params->get ('align', '');
$width = $params->get ('width', '');
$height = $params->get ('height', '');
$cycle = $params->get('cycle','');
$sbbot = $params->get('sbbot', '');
$marginchik = $params->get('marginchik', '');

$pref_text = $params->get('pref_text', '');
$post_text = $params->get('post_text', '');

/*
if ($id ){
	$ida = explode (',', $id);
	}
foreach ($ida as $id){
*/

if (1==1)
{
$sql = "SELECT * FROM #__content";

if ($section>0 || $category>0)
{
$sql.=" WHERE ";
if ($section>0 && empty($category)) $sql.=" sectionid=$section";
if ($category>0 && empty($section)) $sql.=" catid=$section";
if ($section>0 && $category>0) $sql.=" sectionid=$section AND catid=$category";
} 

/*
switch($wherefrom){
  case 'section': $sql.="\n WHERE sectionid=$id";
    break;
  case 'category': $sql.="\n WHERE catid=$id";
    break;
  case 'content': $sql.="\n WHERE id=$id";
    break;
  default:
    break;
}
*/
$sql .= "\n AND ( publish_up = '0000-00-00 00:00:00' OR publish_up <= now() )
            AND ( publish_down = '0000-00-00 00:00:00' OR publish_down >= now() )
            AND state != -1 AND state != 0";

switch ($orderby){
  case 0:
    $sql .= "\n ORDER BY title";
    break;
  case 1:
    $sql .= "\n ORDER BY title DESC";
    break;
  case 2:
    $sql .= "\n ORDER BY id";
    break;
  case 3:
    $sql .= "\n ORDER BY id DESC";
    break;
  case 4:
    $sql .= "\n ORDER BY created DESC";
    break;
  case 5:
    $sql .= "\n ORDER BY created ";
    break;
  case 6:
    $sql .= "\n ORDER BY ordering ";
    break;
  case 7:
    $sql .= "\n ORDER BY ordering DESC";
    break;
  case 8:
    $sql .= "\n ORDER BY rand()";
    break;
}

if (is_numeric($count)){
  $sql .= "\n LIMIT $count";
}
$database->setQuery($sql);
if(!$database->query()) {
  die($database->stderr(true));
}

$items= $database->loadObjectList();
echo "<div class=\"flexcontent\">";
if ($cycle!=''){
  $cycle = explode(",",$cycle);
  $cyclecount = 0;
}
foreach($items as $item){

	// get itemid if contentitem in menu
	list(,$r) = each($items);
		// get itemid if contentitem in menu
			$contentid = $r->id;
				$query = "select id from #__menu where published = '1' and type = 'content_item_link' and componentid='$contentid';";
				$database->setQuery( $query );
				$Itemid = $database->loadresult();
			if (!$Itemid) {
				// needed to reduce queries used by getItemid		
			$bs = $mainframe->getBlogSectionCount();
			$bc = $mainframe->getBlogCategoryCount();
			$gbs = $mainframe->getGlobalBlogSectionCount();
			// get Itemid
			$Itemid = $mainframe->getItemid( $r->id, 0, 0, $bs, $bc, $gbs );
			}    
			// Blank itemid checker for SEF
			if ($Itemid == NULL) {
			$Itemid = '';
			} else {
			$Itemid = '&amp;Itemid='. $Itemid;
			}
  if ($linkedcat AND $wherefrom!='content'){
    if ($wherefrom='category'){
      $link = sefRelToAbs( 'index.php?option=com_content&amp;task=blogcategory&amp;id='. $id . $Itemid);
    }elseif($wherefrom='section'){
      $link = sefRelToAbs( 'index.php?option=com_content&amp;task=blogsection&amp;id='. $id . $Itemid);
    }
  }else{
    $link = sefRelToAbs( 'index.php?option=com_content&amp;task=view&amp;id='. $item->id . $Itemid);
  }
  if (is_array($cycle)){
    echo "<div class=\"flexcontentitem $cycle[$cyclecount]\">";
    $cyclecount=$cyclecount+1;
    if ($cyclecount==count($cycle)){$cyclecount=0;}
  }else{
    echo "<div class=\"flexcontentitem\">";
  }
  $item->introtext = preg_replace('/{([a-zA-Z0-9\-_]*)\s*(.*?)}/i', '', $item->introtext);
  $text = $item->introtext;
  if ($chars!=''){
    $text = substr($text, 0, $chars) . "...";
  }else if ($words!=''){
    $prevwords = count(explode(" ",$text));
    $text = implode(" ", array_slice(explode(" ",$text), 0, $words));
    if (count(explode(" ",$text))<$prevwords){
      $text .= "...";
    }
  }
  if (substr_count($text, '<p>')!=substr_count($text, '</p>')){
     $text .= "</p>";
  }
  
  if ($readmore){
    $text .= "<a class=\"readon\" href=\"$link\">Читать дальше...</a>";
  }
 

  if ($linkedtitle){
    $title = "<h3><a href=\"$link\">$item->title</a></h3>";
  }else{    
$title = "<h3>$item->title</h3>";
  }
  
	
  if ($lastimage){
    $item->images 	= explode( "\n", $item->images );
    $item->lastimage = end($item->images);
    $item->lastimage = explode ("|", $item->lastimage);
    /*echo "<pre>";
    print_r($item->lastimage[0]);
    echo "</pre>";*/
    $imageurl=$item->lastimage[0];
    if (isset($item->lastimage[2])){
      $imagealt=$item->lastimage[2];
    }else{
      $imagealt="";
    }
  } else {
 $imageurl = $custumimage;
    }
    /*else 
    { $image="";
    }*/
    
  if (isset($imageurl) AND $imageurl!=''){
    if ($linkedimage){
      $image = "<a href=\"$link\"><img src=\"/images/stories/$imageurl\" alt=\"$imagealt\" align=\"$align\" width=\"$width\" height=\"$height\" style='padding:".$marginchik."px'/></a>";
    }else{
      $image = "<img src=\"/images/stories/$imageurl\" alt=\"$imagealt\" align=\"$align\" width=\"$width\" height=\"$height\" style='padding:".$marginchik."px'/>";
    }
  }else{ $image="";
  }
  $time_month = strftime("%m", strtotime($item->created));
  $time_day = strftime("%d", strtotime($item->created));
  $time_year = strftime("%Y", strtotime($item->created));
  
  if($timeformat=='classic'){
	$time = strftime("%d.%m.%Y", strtotime($item->created));
	$time .="<br/><br/>";
	}else{
	$time ="<div style=\"width:10%;float:left;margin-left:5px;margin-top:0px;display:inline;\">";
	$time  .= "<span class=\"ort_month\">$time_month<br/></span>";
	$time  .= "<span class=\"ort_day\">$time_day<br/></span>";
	$time  .= "<span class=\"ort_month\">$time_year<br/></span></div>";
	}
echo $pref_text;
	echo "<div style=\"width:100%;float:left;\">";
	
	
	switch($outputorder){
    case 0:
      echo $title;
      echo $time;
      echo $text;
      echo $image;
      break;
    case 1:
      echo $title;
      echo $time;
      echo $image;
      echo $text;
      break;
    case 2:
      echo $image;
      echo $title;
      echo $time;
      echo $text;
      break;
    case 3:
      echo $image;
      echo $title;
      echo $text;
      echo $time;
      break;
    case 4:
      echo $image;
      echo $text;
      echo $title;
      echo $time;
      break;
    case 5:
      echo $text;
      echo $title;
      echo $time;
      echo $image;
      break;
    case 6:
      echo $text;
      echo $image;
      echo $title;
      break;
    case 7:
      echo $title;
      echo $time;
      echo $text;
      break;
    case 8:
      echo $title;
      echo $time;
      echo $image;
      break;
    case 9:
      echo $image;
      echo $time;
      echo $title;
      break;
    case 10:
      echo $image;
      echo $text;
      break;
    case 11:
      echo $text;
      echo $title;
      break;
    case 12:
      echo $text;
      echo $image;
      break;    
  }
  
   
  echo "</div><br/></div><div class=\"clr\"></div>";
   
  if ($catlink && $wherefrom =='category'){
        $linkcat = sefRelToAbs( 'index.php?option=com_content&amp;task=blogcategory&id='. $id);
		echo "<a href=\"$linkcat\" class=\"flexcontentlink\">Read All</a>";
    }elseif($catlink && $wherefrom=='section'){
      $linkcat = sefRelToAbs( 'index.php?option=com_content&amp;task=blogsection&id='. $id);
	  echo "<a href=\"$linkcat\" class=\"flexcontentlink\">Read All</a>";
    }
echo $post_text;    
  if ($seperator){
  echo "<div style=\"width:99%;border-bottom:1px dotted #cccccc;\">&nbsp;</div>";
  }
}
echo "</div>";

}

?> 

  