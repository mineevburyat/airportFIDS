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
  var $_output;
  var $_indents;

	var $_display_image_on_top_menu;
	var $_display_image_with_text_on_top_menu;
	var $_image_position_on_top_menu;
	var $_display_image_on_child_menu;
	var $_display_image_with_text_on_child_menu;
	var $_image_position_on_child_menu;
	var $_display_image_option_on_child_menu;

	var $_display_image_level;

	var $_image_suffix_hover;
	
	var $_level_configured_2;
	var $_level_configured_3;
	var $_level_configured_4;
	var $_level_configured_5;
	var $_level_configured_6;
	var $_level_configured_7;
	var $_level_configured_8;
	var $_level_configured_9;
	var $_level_configured_10;
	var $_level_configured_11;
	  
  function Menu($dataMenu) {
    $this->_menuname = (!empty($dataMenu["menuname"]))?$dataMenu["menuname"]:'mainmenu';
    $this->_openall = (!empty($dataMenu["openall"]))?$dataMenu["openall"]:0;
    $this->_start = (!empty($dataMenu["start"]))?$dataMenu["start"]:0;
    $this->_end = (!empty($dataMenu["end"]))?$dataMenu["end"]:0;
    $this->_open = array();
    $this->_indents = array(array( "<ul>", "<li>" , "</li>", "</ul>" ),	);
    $this->_menu_name = '';

    $this->_display_image_level = $dataMenu["display_image_level"];

		$this->_display_image_on_top_menu = $dataMenu["display_image_on_top_menu"];
		$this->_display_image_with_text_on_top_menu = $dataMenu["display_image_with_text_on_top_menu"];
		$this->_image_position_on_top_menu = $dataMenu["image_position_on_top_menu"];
		$this->_display_image_on_sub_menu = (!empty($dataMenu["display_image_on_sub_menu"]))?$dataMenu["display_image_on_sub_menu"]:0;
		$this->_display_image_with_text_on_sub_menu = (!empty($dataMenu["display_image_with_text_on_sub_menu"]))?$dataMenu["display_image_with_text_on_sub_menu"]:0;
		$this->_image_position_on_sub_menu = (!empty($dataMenu["image_position_on_sub_menu"]))?$dataMenu["image_position_on_sub_menu"]:0;
		$this->_display_image_option_on_sub_menu = (!empty($dataMenu["display_image_option_on_sub_menu"]))?$dataMenu["display_image_option_on_sub_menu"]:0;

		$this->_image_suffix_hover = (!empty($dataMenu["image_suffix_hover"]))?$dataMenu["image_suffix_hover"]:'';

		$this->_level_configured_2 = (!empty($dataMenu["level_configured_2"]))?$dataMenu["level_configured_2"]:0;
		$this->_level_configured_3 = (!empty($dataMenu["level_configured_3"]))?$dataMenu["level_configured_3"]:0;
		$this->_level_configured_4 = (!empty($dataMenu["level_configured_4"]))?$dataMenu["level_configured_4"]:0;
		$this->_level_configured_5 = (!empty($dataMenu["level_configured_5"]))?$dataMenu["level_configured_5"]:0;
		$this->_level_configured_6 = (!empty($dataMenu["level_configured_6"]))?$dataMenu["level_configured_6"]:0;
		$this->_level_configured_7 = (!empty($dataMenu["level_configured_7"]))?$dataMenu["level_configured_7"]:0;
		$this->_level_configured_8 = (!empty($dataMenu["level_configured_8"]))?$dataMenu["level_configured_8"]:0;
		$this->_level_configured_9 = (!empty($dataMenu["level_configured_9"]))?$dataMenu["level_configured_9"]:0;
		$this->_level_configured_10 = (!empty($dataMenu["level_configured_10"]))?$dataMenu["level_configured_10"]:0;
		$this->_level_configured_11 = (!empty($dataMenu["level_configured_11"]))?$dataMenu["level_configured_11"]:0;
    
   	global  $mainframe,$Itemid;
   
    
	$database      = & JFactory::getDBO();
    $my 	       = & JFactory::getUser();
    $cur_template  = $mainframe->getTemplate(); 
	$contentConfig = &JComponentHelper::getParams( 'com_content' );
	$noauth		   = $contentConfig->get('shownoauth');


   	$hilightid = null;
   	$startid = 0;
   	if ($noauth) {
      $database->setQuery("SELECT m.*, count(p.parent) as cnt" .
      "\nFROM #__menu AS m" .
      "\nLEFT JOIN #__menu AS p ON p.parent = m.id" .
      "\nWHERE m.menutype='$this->_menuname' AND m.published='1'" .
      "\nGROUP BY m.id ORDER BY m.parent, m.ordering ");
    } else {
      $database->setQuery("SELECT m.*, sum(case when p.published=1 then 1 else 0 end) as cnt" .
      "\nFROM #__menu AS m" .
      "\nLEFT JOIN #__menu AS p ON p.parent = m.id" .
      "\nWHERE m.menutype='$this->_menuname' AND m.published='1' AND m.access <= '$my->gid'" .
      "\nGROUP BY m.id ORDER BY m.parent, m.ordering ");
    }

   	$rows = $database->loadObjectList( 'id' );
   	echo $database->getErrorMsg();
  	
    // fix weird problem with itemid undefined
   	if ($Itemid > 999999) { 
   	  $current = current($rows);
   	  $Itemid = $current->id; 
   	}
   	
   	//work out if this should be highlighted
   	$sql = "SELECT m.* FROM #__menu AS m"
   	. "\nWHERE menutype='". $this->_menuname ."' AND m.published='1'"; 
   	$database->setQuery( $sql );
   	$subrows = $database->loadObjectList( 'id' );
   	$maxrecurse = 5;
   	$parentid = $Itemid;

   	//this makes sure toplevel stays hilighted when submenu active
   	while ($maxrecurse-- > 0) {
   		$parentid = $this->getTheParentRow($subrows, $parentid);
   		if (isset($parentid) && $parentid >= 0 && $subrows[$parentid]) {
   			$hilightid = $parentid;
   		} else {
   			break;	
   		}
   	}	
    // establish the hierarchy of the menu
   	$children = array();

    // first pass - collect children
    foreach ($rows as $v ) {
  		$pt = $v->parent;
   		$list = @$children[$pt] ? $children[$pt] : array();
   		array_push( $list, $v );

      $children[$pt] = $list;
    }

    // second pass - collect 'open' menus
  	$this->_open = array( $Itemid );
   	$count = 20; // maximum levels - to prevent runaway loop
   	$id = $Itemid;
   	while (--$count) {
   		if (isset($rows[$id]) && $rows[$id]->parent > 0) {
   			$id = $rows[$id]->parent;
   			$this->_open[] = $id;
   		} else {
   			break;
   		}
   	}
   	
    //get the name of the parent node
 	  $parentopen = array_reverse($this->_open);
 	  if (array_key_exists($parentopen[0],$rows)) 
 	    $this->_menu_name = $rows[$parentopen[0]]->name;
   	
	  if ($this->_start > 1) $startid = $id;
	  $this->_output = $this->recurseListMenu( $startid, $this->_start, $children, $hilightid );
	  	  
    $pre = '<div id="tp-mainnavwrap"><div id="tp-mainnav" class="clearfix">';
    $post = '</div></div>';
           
    if (isset($this->_output)) {
       $this->_output = $pre . $this->_output . $post;
     } 
  }
  
  function recurseListMenu( $id, $level, &$children, $highlight ) {
  	global $Itemid;
  	global $HTTP_SERVER_VARS;

  	$output = "";
  	$ulstyle = "";


  	if (@$children[$id] && $level < $this->_end) {
  		$n = min( $level, count( $this->_indents )-1 );

  		if($this->_start==$level) {
  		  $ulstyle .= ' class="clearfix" ';
  		} 
  		if($level==1) {
  		  $ulstyle .= ' id="tp-cssmenu"'; 
  		}
  		
  		$output .= "<ul" . $ulstyle . ">";

  		foreach ($children[$id] as $row) {

  		  switch ($row->type) {
       		case 'separator':
       		// do nothing
       		$row->link = "seperator";

       		break;

       		case 'url':
       		if ( eregi( 'index.php\?', $row->link ) ) {
      				if ( !eregi( 'Itemid=', $row->link ) ) {
      					$row->link .= '&Itemid='. $row->id;
      				}
      			}
       		break;

       		default:
       			$row->link .= "&Itemid=$row->id";

       		break;
       	}

        $class = "";
      //$current_itemid = trim( mosGetParam( $_REQUEST, 'Itemid', 0 ) );
        $current_itemid =JRequest::getVar( 'Itemid', 0, '', 'int' );
				$active_stat = false;
		if ($row->link != "seperator" 
  					&& $current_itemid == $row->id 
            || in_array($row->id,$this->_open)
  					|| $row->id == $highlight
          	|| (JRoute::_( substr($_SERVER['PHP_SELF'],0,-9) . $row->link)) == $_SERVER['REQUEST_URI']
          	|| (JRoute::_( substr($_SERVER['PHP_SELF'],0,-9) . $row->link)) == $HTTP_SERVER_VARS['REQUEST_URI']) {
  							$class .= "active ";
  							$active_stat = true;
  			}
  			if ($row->cnt > 0) {
  				$class .= "parent ";
  			}
		  	if($level == 1) {
		  		switch ($this->isFullImageMenu($row, $level)) {
			  		case 1:
				  		$class .= 'fulltpmenuimages ';
			  			break;
			  		case 2:
				  		$class .= 'tpmenutextandimage ';
			  			break;
			  	}
			  } else {
		  		switch ($this->isFullImageMenu($row, $level)) {
			  		case 1:
				  		$class .= 'fulltpmenuimageschild ';
			  			break;
			  		case 2:
				  		$class .= 'tpmenutextandimagechild ';
			  			break;
			  	}
			  }
  	    $output .= '<li class="' . trim($class) . '">' . "\n";

        $output .= $this->getLink( $row, $level, $active_stat );
        if ( $this->_openall || in_array( $row->id, $this->_open )) {
  			  $output .= $this->recurseListMenu( $row->id, $level+1, $children, "");
  		  }
        $output .= $this->_indents[$n][2];

      }
  		$output .= "\n".$this->_indents[$n][3];

  		return $output;

  	}
  }

  function getTheParentRow($rows, $id) {
		if (isset($rows[$id]) && $rows[$id]) {
  		if($rows[$id]->parent > 0) {
  			return $rows[$id]->parent;
  		}	
  	}
 		return -1;
	}

  function getLink( $mitem, $level, $active_stat) {
  	global $Itemid;
  	$txt = '';
  	$topdaddy = 'top';
  	
  	$class = ($mitem->cnt > 0) ? ' class="haschild" ' : ' ';
  	
  	$mitem->link = str_replace( '&', '&amp;', $mitem->link );
  	$mitem->name = stripslashes( JFilterOutput::ampReplace($mitem->name));

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
  		default:	// formerly case 2
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
				if($this->_display_image_on_top_menu == 1) {
					$ima = explode(".", $menu_image);
					if($this->_display_image_with_text_on_top_menu == 1) {
						if($this->_image_position_on_top_menu == "left") {
							$image = '<img src="'. JURI::base().'images/stories/'.(($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1] : $menu_image) . '" border="0" alt="'. $mitem->namedisplay . '" onmouseover="javascript:this.src=\'' .JURI::base(). 'images/stories/' . $ima[0] . $this->_image_suffix_hover . "." . $ima[1] . '\'" onmouseout="javascript:this.src=\'' .JURI::base(). 'images/stories/' . (($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1]  : $menu_image) . '\'" />' . $mitem->namedisplay . $subtitle;
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
				if($this->_display_image_option_on_child_menu == 0) {
					if($level >= $this->_display_image_level) {
						$ima = explode(".", $menu_image);
						if($this->_display_image_with_text_on_child_menu == 1) {
							if($this->_image_position_on_child_menu == "left") {
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
					$arrayLevel = array();
					if ($this->_level_configured_2 == 1) { $arrayLevel[] = 2; }
					if ($this->_level_configured_3 == 1) { $arrayLevel[] = 3; }
					if ($this->_level_configured_4 == 1) { $arrayLevel[] = 4; }
					if ($this->_level_configured_5 == 1) { $arrayLevel[] = 5; }
					if ($this->_level_configured_6 == 1) { $arrayLevel[] = 6; }
					if ($this->_level_configured_7 == 1) { $arrayLevel[] = 7; }
					if ($this->_level_configured_8 == 1) { $arrayLevel[] = 8; }
					if ($this->_level_configured_9 == 1) { $arrayLevel[] = 9; }
					if ($this->_level_configured_10 == 1) { $arrayLevel[] = 10; }
					if ($this->_level_configured_11 == 1) { $arrayLevel[] = 11; }
					
					if (in_array($level, $arrayLevel)) {
						$ima = explode(".", $menu_image);
						if($this->_display_image_with_text_on_child_menu == 1) {
							if($this->_image_position_on_child_menu == "left") {
								$image = '<img src="'. JURI::base() .'images/stories/'.(($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1] : $menu_image) . '" border="0" alt="'. $mitem->namedisplay . '" onmouseover="javascript:this.src=\'' .JURI::base(). 'images/stories/' . $ima[0] . $this->_image_suffix_hover . "." . $ima[1] . '\'" onmouseout="javascript:this.src=\'' .JURI::base(). 'images/stories/' . (($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1]  : $menu_image) . '\'" />' . $mitem->namedisplay . $subtitle;
							} else {
								$image = $mitem->namedisplay . '<img src="'. JURI::base() .'images/stories/'.(($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1] : $menu_image) . '" border="0" alt="'. $mitem->namedisplay . '" onmouseover="javascript:this.src=\'' .JURI::base(). 'images/stories/' . $ima[0] . $this->_image_suffix_hover . "." . $ima[1] . '\'" onmouseout="javascript:this.src=\'' .JURI::base(). 'images/stories/' . (($_REQUEST['Itemid'] == ($mitem->id)) ? $ima[0] . $active_image . "." . $ima[1]  : $menu_image) . '\'" />' . $subtitle;
							}
							$txt = $image;
						} else {
							$txt = $mitem->namedisplay . $subtitle;
						}
					} else {
						$txt = $mitem->namedisplay . $subtitle;
					}
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
				if($this->_display_image_on_top_menu == 1) {
					if($this->_display_image_with_text_on_top_menu == 1) {
						return 2;
					} else {
						return 1;
					}
				} else {
					return 0;
				}
			} else {
				if($this->_display_image_on_sub_menu == 1) {
					if($this->_display_image_with_text_on_sub_menu == 1) {
						return 2;
					} else {
						return 1;
					}
				} else {
					return 0;
				}
			}
		} else {
			return 0;
		}
	}
  
  function display() {
    return $this->_output;
  }
}

?>