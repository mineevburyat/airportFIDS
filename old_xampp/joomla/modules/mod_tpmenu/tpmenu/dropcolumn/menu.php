<?php

defined('_JEXEC') or die('Restricted access'); 
ini_set('arg_separator.output','&amp;');

class Menu {
  var $_menuname;
  var $_openall;
  var $_start;
  var $_end;
  var $_open;
  var $_menu_name;
  var $_menu_name_extra;
  var $_output;
  var $_indents;
  var $_columns;
  
	var $_display_image_on_top_menu_dropcolumn;
	var $_display_image_with_text_on_top_menu_dropcolumn;
	var $_image_position_on_top_menu_dropcolumn;
	var $_display_image_on_sub_menu_dropcolumn;
	var $_display_image_with_text_on_sub_menu_dropcolumn;
	var $_image_position_on_sub_menu_dropcolumn;
	var $_image_suffix_hover;

  function Menu($dataMenu) {
    $this->_menuname = (!empty($dataMenu["menuname"]))?$dataMenu["menuname"]:'mainmenu';
    $this->_openall = (!empty($dataMenu["openall"]))?$dataMenu["openall"]:0;
    $this->_start = (!empty($dataMenu["start"]))?$dataMenu["start"]:0;
    $this->_end = (!empty($dataMenu["end"]))?$dataMenu["end"]:0;
    $this->_columns = (!empty($dataMenu["columns"]))?$dataMenu["columns"]:0;
	

    $this->_display_image_on_top_menu_dropcolumn = (!empty($dataMenu["display_image_on_top_menu_dropcolumn"]))?$dataMenu["display_image_on_top_menu_dropcolumn"]:0;
    $this->_display_image_with_text_on_top_menu_dropcolumn = (!empty($dataMenu["display_image_with_text_on_top_menu_dropcolumn"]))?$dataMenu["display_image_with_text_on_top_menu_dropcolumn"]:0;
    $this->_image_position_on_top_menu_dropcolumn = (!empty($dataMenu["image_position_on_top_menu_dropcolumn"]))?$dataMenu["image_position_on_top_menu_dropcolumn"]:0;

    $this->_display_image_on_sub_menu_dropcolumn = (!empty($dataMenu["display_image_on_sub_menu_dropcolumn"]))?$dataMenu["display_image_on_sub_menu_dropcolumn"]:0;
    $this->_display_image_with_text_on_sub_menu_dropcolumn = (!empty($dataMenu["display_image_with_text_on_sub_menu_dropcolumn"]))?$dataMenu["display_image_with_text_on_sub_menu_dropcolumn"]:0;
    $this->_image_position_on_sub_menu_dropcolumn = (!empty($dataMenu["image_position_on_sub_menu_dropcolumn"]))?$dataMenu["image_position_on_sub_menu_dropcolumn"]:0;

    $this->_image_suffix_hover = (!empty($dataMenu["image_suffix_hover"]))?$dataMenu["image_suffix_hover"]:'';

    $this->_open = array();
    
    $this->_indents = array(array( "<ul>", "<li>" , "</li>", "</ul>" ),	);
    $this->_menu_name = '';
    $this->_menu_name_extra = " Menu";
    
   	global $Itemid,$mainframe;
  	global $HTTP_SERVER_VARS;

	$database      = & JFactory::getDBO();
    $my 	       = & JFactory::getUser();
    $cur_template  = $mainframe->getTemplate(); 
	$contentConfig = &JComponentHelper::getParams( 'com_content' );
	$noauth		   = $contentConfig->get('shownoauth');

   	//error_reporting(E_ALL ^ E_NOTICE);
   	$hilightid = null;
   	$startid = 0;
		
		if ($noauth) {
			$database->setQuery("SELECT m.*, count(p.parent) as cnt" .
			"\nFROM #__menu AS m" .
		  "\nLEFT JOIN #__menu AS p ON p.parent = m.id" .
		  "\nWHERE m.menutype='$this->_menuname' AND m.published='1' AND m.parent=0" .
		  "\nGROUP BY m.id ORDER BY m.parent, m.ordering ");
		} else {
			$database->setQuery("SELECT m.*, sum(case when p.published=1 then 1 else 0 end) as cnt" .
			"\nFROM #__menu AS m" .
			"\nLEFT JOIN #__menu AS p ON p.parent = m.id" .
			"\nWHERE m.menutype='$this->_menuname' AND m.published='1' AND m.access <= '$my->gid' AND m.parent=0" .
			"\nGROUP BY m.id ORDER BY m.parent, m.ordering ");
	  }

	 	$rows = $database->loadObjectList();
	 	echo $database->getErrorMsg();
  	$active_stat = true;
		if (count($rows)) {
			$this->_output .= '<ul class="clearfix"  id="tp-cssmenu">';
			$n = 0;
		 	foreach ($rows as $row) {
				if ($noauth) {
			  	$database->setQuery("SELECT count(*) FROM #__menu AS m WHERE m.menutype='$this->_menuname' AND m.published='1' AND m.parent='$row->id'");
				} else {
					$database->setQuery("SELECT count(*) FROM #__menu AS m WHERE m.menutype='$this->_menuname' AND m.published='1' AND m.access <= '$my->gid' AND m.parent='$row->id'");
			  }
			  echo $database->getErrorMsg();

				if ($noauth) {
				 	$query ="SELECT m.*, count(p.parent) as cnt" .
				  "\nFROM #__menu AS m" .
				  "\nLEFT JOIN #__menu AS p ON p.parent = m.id" .
				  "\nWHERE m.menutype='$this->_menuname' AND m.published='1' AND m.parent='$row->id'" .
				  "\nGROUP BY m.id ORDER BY m.parent, m.ordering ";
					$database->setQuery($query);
				} else {
					
					$query ="SELECT m.*, sum(case when p.published=1 then 1 else 0 end) as cnt" .
					"\nFROM #__menu AS m" .
					"\nLEFT JOIN #__menu AS p ON p.parent = m.id" .
					"\nWHERE m.menutype='$this->_menuname' AND m.published='1' AND m.access <= '$my->gid' AND m.parent='$row->id'" .
					"\nGROUP BY m.id ORDER BY m.parent, m.ordering ";
					$database->setQuery($query);
			  }
				//echo $query;
				$rows2 = $database->loadObjectList( 'id' );
				echo $database->getErrorMsg();
				  
			  $active = "";
				$active_stat = false;
			  if($Itemid == $row->id) {
			  	$active = "active ";
					$active_stat = true;
				}
				  
			  foreach ($rows2 as $subrow) {
			  	if($Itemid == $subrow->id) {
				  	$active = "active ";
						$active_stat = true;
					}
			  }

        $current_itemid =JRequest::getVar( 'Itemid', 0, '', 'int' );
        if ($row->link != "seperator" 
  					&& $current_itemid == $row->id 
            || in_array($row->id,$this->_open)
          	|| (JRoute::_( substr($_SERVER['PHP_SELF'],0,-9) . $row->link)) == $_SERVER['REQUEST_URI']
          	|| (JRoute::_( substr($_SERVER['PHP_SELF'],0,-9) . $row->link)) == $HTTP_SERVER_VARS['REQUEST_URI']) {
  							$active = "active ";
  							$active_stat = true;
  			}

				$class = "";
	  		switch ($this->isFullImageMenu($row, 1)) {
		  		case 1:
			  		$class .= 'fulltpmenuimages ';
		  			break;
		  		case 2:
			  		$class .= 'tpmenutextandimage ';
		  			break;
		  	}
  			
  			if($database->loadResult() >= 1 ) {
			 		$this->_output .= '<li class="'.$active.$class.'parent">' . $this->getLink( $row, 1, $active_stat );
			 	} else {
			 		$this->_output .= '<li class="'.$active.$class.'">' . $this->getLink( $row, 1, $active_stat );
			 	}
			 	
				if (count($rows2)) {
					$this->_output .= '<ul><li><table><tr>';
					
					//echo "<BR>Kolom:".$this->_columns."<BR>";
					//echo "<BR>Rows:".count($rows2)."<BR>";

					$limit = ceil(count($rows2) / $this->_columns);
					$x = 0;
					$c = 0;
					foreach($rows2 as $submenu) {
						$x++;
						$c++;
						if($x==1) {
							$this->_output .= "<td valign='top'>";
						}
					  switch ($submenu->type) {
				   		case 'separator':
					   		// do nothing
					   		$submenu->link = "seperator";
					   		break;
				  		case 'url':
				      	if ( eregi( 'index.php\?', $submenu->link ) ) {
				      		if ( !eregi( 'Itemid=', $submenu->link ) ) {
				      			$submenu->link .= '&Itemid='. $submenu->id;
				      		}
				      	}
				       	break;
							default:
				      	$submenu->link .= "&Itemid=$submenu->id";
								break;
				    }
				    $mysubmenulink = $submenu->link;
						//$this->_output .= "<span><a href='".sefRelToAbs($mysubmenulink)."'>".$submenu->name."</a></span>";
						$this->_output .= "<span>" . $this->getLink( $submenu, 2, $active_stat ) . "</span>";
						if (($x==$limit) OR ($c==count($rows2))) {
							$this->_output .= "</td>";
						}
							
						if($x==$limit) { $x = 0; }
						
					}
						
					$this->_output .= '</tr></table></li></ul>';
				}
				$this->_output .= "</li>";
			}
			$this->_output .= "</ul>";
		}	  	  
    $pre = '<div id="tp-mainnavwrap"><div id="tp-mainnav" class="clearfix">';
    $post = '</div></div>';
           
    if (isset($this->_output)) {
       $this->_output = $pre . $this->_output . $post;
     } 
  }


  function getLink( $mitem, $level, $active_stat ) {
  	global $Itemid;
  	$txt = '';
  	switch ($mitem->type) {
   		case 'separator':
	   		// do nothing
	   		$mitem->link = "seperator";
	   		break;
  		case 'url':
      	if ( eregi( 'index.php\?', $mitem->link ) ) {
      		if ( !eregi( 'Itemid=', $mitem->link ) ) {
      			$mitem->link .= '&Itemid='. $mitem->id;
      		}
      	}
       	break;
			default:
      	$mitem->link .= "&Itemid=$mitem->id";
				break;
    }
  	$mitem->link = str_replace( '&', '&amp;', $mitem->link );
    $mitem->name = stripslashes(JFilterOutput::ampReplace($mitem->name) );

  	if (strcasecmp(substr($mitem->link,0,4),"http")) {
  		if($mitem->link == 'index.php?option=com_content&amp;view=frontpage&amp;Itemid=1') {
  			$mitem->link = JURI::base();
  		} else {
	  		$mitem->link = JRoute::_($mitem->link);
	  	}
  	} else {
  		if($mitem->link == 'index.php?option=com_content&amp;view=frontpage&amp;Itemid=1') {
  			$mitem->link = JURI::base();
  		}
  	}

		$class = " ";
  	if($this->isFullImageMenu($mitem, $level)) {
  		$class .= 'class="fulltpmenuimages" ';
  	}
  	
  	$class = ($mitem->cnt > 0) ? ' class="haschild" ' : ' ';

    switch ($mitem->browserNav) {
  		case 1:
				$txt = "<a".$class."href=\"$mitem->link\" target=\"_window\" >".$this->show_image($mitem, $level, $active_stat)."</a>\n";
  			break;
  		case 2:
	  		$txt = "<a".$class."href=\"#\" onClick=\"javascript: window.open('$mitem->link', '', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=780,height=550');\">".$this->show_image($mitem, $level, $active_stat)."</a>\n";
	  		break;
  		case 3:
				$txt = "<a".$class.">".$this->show_image($mitem, $level, $active_stat)."</a>\n";
  			break;
  		default:
  		  $txt = "<a".$class."href=\"$mitem->link\">".$this->show_image($mitem, $level, $active_stat)."</a>";
	      break;
  	}
    return $txt;
  }

	function show_image($mitem, $level, $active_stat){
		global $Itemid;
		$mitem->namedisplay = $mitem->name;
		$subtitle = null;
		$split = explode('||', $mitem->name, 2);
		if (count($split) == 2) {
			$mitem->namedisplay = $split[0];
			$subtitle = '<span class="tpsubtitle">'.$split[1].'</span>';
		}
		$menu_params = new stdClass();
		$menu_params = new JParameter( $mitem->params );
		$menu_image = $menu_params->def( 'menu_image', -1 );
		$active_image = ($active_stat == true)?$this->_image_suffix_hover:"";
		if ( ( $menu_image != '-1' ) && $menu_image && (strlen($menu_image)>0)) {
			if($level == 1) {
				if($this->_display_image_on_top_menu_dropcolumn == 1) {
					$ima = explode(".", $menu_image);
					if($this->_display_image_with_text_on_top_menu_dropcolumn == 1) {
						if($this->_image_position_on_top_menu_dropcolumn == "left") {
							$image = '<img src="'. JURI::base() .'images/stories/'.(($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1] : $menu_image) . '" border="0" alt="'. $mitem->namedisplay . '" onmouseover="javascript:this.src=\'' .JURI::base(). 'images/stories/' . $ima[0] . $this->_image_suffix_hover . "." . $ima[1] . '\'" onmouseout="javascript:this.src=\'' .JURI::base(). 'images/stories/' . (($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1]  : $menu_image) . '\'" />' . $mitem->namedisplay . $subtitle;
						} else {
							$image = $mitem->namedisplay . '<img src="'. JURI::base() .'images/stories/'.(($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1] : $menu_image) . '" border="0" alt="'. $mitem->namedisplay . '" onmouseover="javascript:this.src=\'' .JURI::base(). 'images/stories/' . $ima[0] . $this->_image_suffix_hover . "." . $ima[1] . '\'" onmouseout="javascript:this.src=\'' .JURI::base(). 'images/stories/' . (($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1]  : $menu_image) . '\'" />' . $subtitle;
						}
					} else {
						$image = '<img src="'. JURI::base() .'images/stories/'.(($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1] : $menu_image) . '" border="0" alt="'. $mitem->namedisplay . '" onmouseover="javascript:this.src=\'' .JURI::base(). 'images/stories/' . $ima[0] . $this->_image_suffix_hover . "." . $ima[1] . '\'" onmouseout="javascript:this.src=\'' .JURI::base(). 'images/stories/' . (($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1]  : $menu_image) . '\'" />';
					}
					$txt = $image;
				} else {
					$txt = $mitem->namedisplay . $subtitle;
				}
			} else {
				if($this->_display_image_on_sub_menu_dropcolumn == 1) {
					$ima = explode(".", $menu_image);
					if($this->_display_image_with_text_on_sub_menu_dropcolumn == 1) {
						if($this->_image_position_on_sub_menu_dropcolumn == "left") {
							$image = '<img src="'. JURI::base() .'images/stories/'.(($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1] : $menu_image) . '" border="0" alt="'. $mitem->namedisplay . '" onmouseover="javascript:this.src=\'' .JURI::base(). 'images/stories/' . $ima[0] . $this->_image_suffix_hover . "." . $ima[1] . '\'" onmouseout="javascript:this.src=\'' .JURI::base(). 'images/stories/' . (($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1]  : $menu_image) . '\'" />' . $mitem->namedisplay . $subtitle;
						} else {
							$image = $mitem->namedisplay . '<img src="'. JURI::base() .'images/stories/'.(($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1] : $menu_image) . '" border="0" alt="'. $mitem->namedisplay . '" onmouseover="javascript:this.src=\'' .JURI::base(). 'images/stories/' . $ima[0] . $this->_image_suffix_hover . "." . $ima[1] . '\'" onmouseout="javascript:this.src=\'' .JURI::base(). 'images/stories/' . (($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1]  : $menu_image) . '\'" />' . $subtitle;
						}
					} else {
						$image = '<img src="'. JURI::base() .'images/stories/'.(($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1] : $menu_image) . '" border="0" alt="'. $mitem->namedisplay . '" onmouseover="javascript:this.src=\'' .JURI::base(). 'images/stories/' . $ima[0] . $this->_image_suffix_hover . "." . $ima[1] . '\'" onmouseout="javascript:this.src=\'' .JURI::base(). 'images/stories/' . (($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1]  : $menu_image) . '\'" />';
					}
					$txt = $image;
				} else {
					$txt = $mitem->namedisplay . $subtitle;
				}
			}
	  } else {
			$txt = $mitem->namedisplay . $subtitle;
		}
		return $txt;
	}

	function isFullImageMenu($mitem, $level){
		global $Itemid;
		$menu_params = new stdClass();
		$menu_params = new JParameter( $mitem->params );
		$menu_image = $menu_params->def( 'menu_image', -1 );
		if ( ( $menu_image != '-1' ) && $menu_image && (strlen($menu_image)>0)) {
			if($level == 1) {
				if($this->_display_image_on_top_menu_dropcolumn == 1) {
					if($this->_display_image_with_text_on_top_menu_dropcolumn == 1) {
						return false;
					} else {
						return true;
					}
				} else {
					return false;
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
  
  function display() {
    return $this->_output;
  }
}

?>