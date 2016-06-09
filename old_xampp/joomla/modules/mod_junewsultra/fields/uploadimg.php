<?php
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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="../../../administrator/templates/bluestork/css/template.css" type="text/css" />

<style type="text/css">
/*<![CDATA[*/
body{ background: transparent; font-size: 90%; overflow: hidden!important;}
/*]]>*/
</style>
</head>
<body>
<b>Upload image</b><br /><br />
	<form enctype="multipart/form-data" method="post">
	<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_image_size; ?>">
	<input name="userfile" type="file">
	<input type="submit" value="Upload">
	</form>
<?php
$path               = str_replace('modules/mod_junewsultra/fields/../../..', 'media/mod_junewsultra', JPATH_BASE);
$max_image_width	= 800;
$max_image_height	= 800;
$max_image_size		= 640 * 1024;
$valid_types 		= array("gif","jpg", "png", "jpeg");

if (isset($_FILES["userfile"])) {
	if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
		$filename = $_FILES['userfile']['tmp_name'];
		$ext = substr($_FILES['userfile']['name'],
			1 + strrpos($_FILES['userfile']['name'], "."));
		if (filesize($filename) > $max_image_size) {
			echo '<dl id="system-message">
        <dt class="notice">Notice</dt>
        <dd class="message notice fade">
           	<ul>
           		<li>Error: File size > '.$max_image_size.' KB</li>
           	</ul>
        </dd>
        </dl>';
		} elseif (!in_array($ext, $valid_types)) {
			echo '<dl id="system-message">
        <dt class="notice">Notice</dt>
        <dd class="message notice fade">
           	<ul>
           		<li>Error: Invalid file type</li>
           	</ul>
        </dd>
        </dl>';
		} else {
 			$size = GetImageSize($filename);
 			if (($size) && ($size[0] < $max_image_width)
				&& ($size[1] < $max_image_height)) {
				if (@move_uploaded_file($filename, $path.'/jn_'.$_FILES['userfile']['name'])) {
					echo '<dl id="system-message"><dt class="message">Notice</dt><dd class="message message fade"><ul><li>File successful uploaded.</li></ul></dd></dl>';
				} else {
					echo '<dl id="system-message">
        <dt class="notice">Notice</dt>
        <dd class="message notice fade">
           	<ul>
           		<li>Error: moving fie failed.</li>
           	</ul>
        </dd>
        </dl>';
				}
			} else {
				echo '<dl id="system-message">
        <dt class="notice">Notice</dt>
        <dd class="message notice fade">
           	<ul>
           		<li>Error: invalid image properties.</li>
           	</ul>
        </dd>
        </dl>';
			}
		}
	} else {
		echo '<dl id="system-message">
        <dt class="notice">Notice</dt>
        <dd class="message notice fade">
           	<ul>
           		<li>Error: empty file.</li>
           	</ul>
        </dd>
        </dl>';
	}
}
?>
</body>
</html>