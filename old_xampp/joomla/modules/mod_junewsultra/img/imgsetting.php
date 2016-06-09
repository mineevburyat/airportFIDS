<?php
/**
* @package MOD_JUNEWS
* @author Denys Nosov (http://denysdesign.com), Joomla! Ukraine (http://joomla-ua.org)
* @copyright (C) 2007-2012 Denys Nosov. All rights reserved.
* @license http://creativecommons.org/licenses/by-nc-nd/3.0/ Creative Commons Attribution-Noncommercial-No Derivative Works 3.0 License
* @version 4.0
* @description: Multifunction plugin for creating thumbnails of images, using LightBox libraries and watermark
*/

error_reporting(0);

define( '_JEXEC', 1 );
define('DS', DIRECTORY_SEPARATOR);
define('JPATH_BASE', dirname(__FILE__).DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."..");
define ("MAX_SIZE","500");

require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );
require_once ( JPATH_BASE .DS.'includes'.DS.'framework.php' );
require_once ( JPATH_BASE .DS.'libraries'.DS.'joomla'.DS.'factory.php' );

$mainframe =& JFactory::getApplication('administrator');
$mainframe->initialise();

$joomlaUser =& JFactory::getUser();

$lang =& JFactory::getLanguage();
$lang->load('mod_junewsultra', JPATH_SITE);

$language = mb_strtolower($lang->getTag());

if ($joomlaUser->get('id') < 1) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../../../templates/system/css/system.css" type="text/css" />
<link href="../../../../../administrator/templates/bluestork/css/template.css" rel="stylesheet" type="text/css" />
</head>
<body>
<dl id="system-message">
    <dt class="error"><?php echo JText::_('MOD_JUNEWS_NOTICE'); ?></dt>
    <dd class="message error fade">
        <ul>
            <li><?php echo JText::_('MOD_JUNEWS_LOGIN'); ?></li>
        </ul>
    </dd>
</dl>
</body>
</html>
<?php
    return;
}

if(!file_exists("config.php")){
    $file = fopen("config.php", 'w');
    $data = "<?php
    \$juimagemagick       = '1';
    \$juimagemagickpath   = '';
    \$juformat            = 'jpeg';
    \$junohotlinkenabled  = '1';
    \$jumaxage            = '30';
    \$jumaxsize           = '10';
    \$jumaxfiles          = '200';
?>";
    fputs($file, $data);
    fclose($file);
    chmod("config.php", 0777);

    $notice = '
    <dl id="system-message">
        <dt class="notice">'. JText::_('MOD_JUNEWS_NOTICE') .'</dt>
        <dd class="message notice fade">
           	<ul>
           		<li>'. JText::_('MOD_JUNEWS_NOTICE17') .'</li>
           		<li>'. JText::_('MOD_JUNEWS_NOTICE18') .'</li>
        	</ul>
        </dd>
    </dl>
            ';
}

if(filesize("config.php") < 1){
    $file = fopen("config.php", 'w');
    $data = "<?php
    \$juimagemagick       = '1';
    \$juimagemagickpath   = '';
    \$juformat            = 'jpeg';
    \$junohotlinkenabled  = '1';
    \$jumaxage            = '30';
    \$jumaxsize           = '10';
    \$jumaxfiles          = '200';
?>";
    fputs($file, $data);
    fclose($file);
    chmod("config.php", 0777);

    $notice = '
    <dl id="system-message">
        <dt class="notice">'. JText::_('MOD_JUNEWS_NOTICE') .'</dt>
        <dd class="message notice fade">
         	<ul>
           		<li>'. JText::_('MOD_JUNEWS_NOTICE20') .'</li>
           		<li>'. JText::_('MOD_JUNEWS_NOTICE18') .'</li>
           	</ul>
        </dd>
    </dl>
    ';
}

if(isset($_POST['save'])) {
    $juimagemagick      = $_POST['juimagemagick'];
    $juimagemagickpath  = $_POST['juimagemagickpath'];
    $juformat           = $_POST['juformat'];
    $junohotlinkenabled = $_POST['junohotlinkenabled'];
    $jumaxage           = $_POST['jumaxage'];
    $jumaxsize          = $_POST['jumaxsize'];
    $jumaxfiles         = $_POST['jumaxfiles'];

    $fp = fopen("config.php", "w");

    $data = "<?php
    \$juimagemagick       = '". ($juimagemagick == '0' ? $juimagemagick : '1') ."';
    \$juimagemagickpath   = '". ($juimagemagickpath ? $juimagemagickpath : '') ."';
    \$juformat            = '". ($juformat ? $juformat : 'jpeg') ."';
    \$junohotlinkenabled  = '". ($junohotlinkenabled == 0 ? $junohotlinkenabled : '1') ."';
    \$jumaxage            = '". ($jumaxage ? $jumaxage : '30') ."';
    \$jumaxsize           = '". ($jumaxsize ? $jumaxsize : '10') ."';
    \$jumaxfiles          = '". ($jumaxfiles ? $jumaxfiles : '200') ."';
?>";

    fputs($fp, $data);
    fclose($fp);
    chmod("config.php", 0777);

    $notice = '
    <dl id="system-message">
        <dt class="notice">'. JText::_('MOD_JUNEWS_NOTICE') .'</dt>
        <dd class="message message fade">
           	<ul>
           		<li>'. JText::_('MOD_JUNEWS_NOTICE19') .'</li>
        	</ul>
        </dd>
    </dl>
            ';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF'); ?></title>
<link rel="stylesheet" href="../../../../templates/system/css/system.css" type="text/css" />
<link href="../../../../administrator/templates/bluestork/css/template.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/*<![CDATA[*/
body{ background: transparent; }
fieldset{
  margin: 5px 0!important;
}
.clear {
  clear: both;
  display: block;
}
label {
  margin: 0;
  width: 145px;
  font-weight: bold;
}
code {
  font-size: 12px;
  color: #993366;
}

.jutips {
  margin: 2px 0 2px 150px;
  color: #777;
}

#save {
  margin: 0 0 0 150px;
}

b {
   color: green;
 }

/*]]>*/
</style>
</head>
<body>
<?php if(isset($_GET['clearcache']) == '1'):
    function recursiveDelete($str) {
        if(is_file($str)){
            return @unlink($str);
        } elseif(is_dir($str)) {
            $scan = glob(rtrim($str,'/').'/*');
            foreach($scan as $index=>$path){
                recursiveDelete($path);
            }
            return @rmdir($str);
        }
    }
?>
<fieldset class="adminform">
    <legend><?php echo JText::_('MOD_JUNEWS_NOTICE12'); ?></legend>
    <?php
        recursiveDelete( JPATH_BASE .'/cache/plg_img_jumultithumb');
        recursiveDelete( JPATH_BASE .'/cache/com_content');
        if(is_dir( JPATH_BASE .'/cache/plg_img_jumultithumb')){
        ?>
        <dl id="system-message">
        <dt class="notice"><?php echo JText::_('MOD_JUNEWS_NOTICE'); ?></dt>
        <dd class="message notice fade">
           	<ul>
           		<li><?php echo JText::_('MOD_JUNEWS_NOTICE13'); ?></li>
           	</ul>
        </dd>
        </dl>
        <?php
        } else {
        ?>
        <dl id="system-message">
        <dt class="message"><?php echo JText::_('MOD_JUNEWS_NOTICE'); ?></dt>
        <dd class="message message fade">
           	<ul>
           		<li><?php echo JText::_('MOD_JUNEWS_NOTICE14'); ?></li>
           	</ul>
        </dd>
        </dl>
        <?php
        }
    ?>
</fieldset>
<?php else: ?>
<fieldset class="adminform">
    <legend><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF'); ?></legend>
    <?php
    if(isset($notice)){
      echo $notice;
    }
    include('config.php');
    ?>
    <form name="imgsetting" id="imgsetting" action="imgsetting.php" method="post">
        <p>
            <label><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF01'); ?></label>
            <span class="input">
            <select name="junohotlinkenabled" id="junohotlinkenabled">
            	<option <?php echo ($junohotlinkenabled == 0 ? 'selected="selected" ' : ''); ?>value="0"><?php echo JText::_('JYES'); ?></option>
            	<option <?php echo ($junohotlinkenabled == 1 ? 'selected="selected" ' : ''); ?>value="1"><?php echo JText::_('JNO'); ?></option>
            </select>
            </span>
            <span class="clear jutips"><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF01_TIPS'); ?></span>
        </p>

        <p>
            <label><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF02'); ?></label>
            <span class="input">
            <select name="juimagemagick" id="juimagemagick">
            	<option <?php echo ($juimagemagick == '1' ? 'selected="selected" ' : ''); ?>value="1"><?php echo JText::_('JYES'); ?></option>
            	<option <?php echo ($juimagemagick == '0' ? 'selected="selected" ' : ''); ?>value="0"><?php echo JText::_('JNO'); ?></option>
            </select>
            </span>
            <span class="clear jutips"><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF02_TIPS'); ?></span>
        </p>

        <p>
            <label><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF03'); ?></label>
            <span class="input">
            <input type="text" name="juimagemagickpath" id="juimagemagickpath" value="<?php echo $juimagemagickpath; ?>" size="50" />
            </span>
            <span class="clear jutips"><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF03_TIPS'); ?></span>
        </p>

        <p>
            <label><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF04'); ?></label>
            <span class="input">
            <select name="juformat" id="juformat">
            	<option <?php echo ($juformat == 'jpeg' ? 'selected="selected" ' : ''); ?>value="jpeg">JPG</option>
            	<option <?php echo ($juformat == 'png' ? 'selected="selected" ' : ''); ?>value="png">PNG</option>
            	<option <?php echo ($juformat == 'gif' ? 'selected="selected" ' : ''); ?>value="gif">GIF</option>
            </select>
            </span>
            <span class="clear jutips"><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF04_TIPS'); ?></span>
        </p>

        <p>
            <label><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF05'); ?></label>
            <span class="input">
            <input type="text" name="jumaxage" id="jumaxage" value="<?php echo $jumaxage; ?>" size="6" />
            </span>
            <span class="clear jutips"><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF05_TIPS'); ?></span>
        </p>

        <p>
            <label><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF06'); ?></label>
            <span class="input">
            <input type="text" name="jumaxsize" id="jumaxsize" value="<?php echo $jumaxsize; ?>" size="6" />
            </span>
            <span class="clear jutips"><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF06_TIPS'); ?></span>
        </p>

        <p>
            <label><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF07'); ?></label>
            <span class="input">
            <input type="text" name="jumaxfiles" id="jumaxfiles" value="<?php echo $jumaxfiles; ?>" size="6" />
            </span>
            <span class="clear jutips"><?php echo JText::_('MOD_JUNEWS_IMAGE_CONF07_TIPS'); ?></span>
        </p>

        <p><input type="submit" name="save" id="save" value="<?php echo JText::_('MOD_JUNEWS_IMAGE_CONF_SAVE'); ?>" /></p>
    </form>
</fieldset>
<?php endif; ?>
</body>
</html>