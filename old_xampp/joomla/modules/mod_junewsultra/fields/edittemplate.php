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

if(isset($_GET["css"])){
    $css = str_replace('.php', '', $_GET["file"]);
    $filename = JPATH_BASE.'/modules/mod_junewsultra/tmpl/'. $css .'/css/style.css';
} else {
    $filename = JPATH_BASE.'/modules/mod_junewsultra/tmpl/'. $_GET["file"];
}

if (isset($_POST['newd'])) $newdata = $_POST['newd'];

if (isset($newdata) != '') {
    $fw = fopen($filename, 'w') or die('Could not open file!');
    $fb = fwrite($fw,stripslashes($newdata)) or die('Could not write to file');
    fclose($fw);
    chmod($filename, 0777);
}

$fh = fopen($filename, "r") or die("Could not open file!");
$data = fread($fh, filesize($filename)) or die("Could not read file!");

fclose($fh);
chmod($filename, 0777);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language; ?>" lang="<?php echo $language; ?>">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../../templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="../../../administrator/templates/bluestork/css/template.css" type="text/css" />
<link rel="stylesheet" href="../assets/css/codemirror.css" />
<style type="text/css">
/*<![CDATA[*/
body{ background: transparent; font-size: 102%;}
.CodeMirror-scroll {
    height: auto!important;
    overflow-y: hidden!important;
    overflow-x: auto!important;
}
/*]]>*/
</style>

</head>
<body>
<form method="post">
    <?php if(file_exists(JPATH_BASE.'/modules/mod_junewsultra/tmpl/'. str_replace('.php', '', $_GET["file"]) .'/css/style.css')){ ?>
    <b>Edit template:</b> <?php echo (isset($_GET["css"]) ? '<a href="'. JURI::base().'edittemplate.php?file='.$_GET['file'] .'">'. $_GET['file'] .'</a>' : '<span style="color: green;">'.$_GET['file'].'</span>'); ?><br />
    <b>Edit CSS:</b> <?php echo (isset($_GET["css"]) ? '<span style="color: green;">style.css</span>' : '<a href="'. JURI::base().'edittemplate.php?file='.$_GET['file'].'&css=1">style.css</a>'); ?>
    <?php } else {
    ?>
    <b>Edit template: <?php echo $_GET['file']; ?></b><br />
    <?php } ?>
    <span style="float:right;"><input type="submit" value='Save template' style="font-size: 14px;"></span><br /><br />
    <textarea name="newd" style="width: 100%; height: 585px;" id="newd"><?php echo $data; ?></textarea>
</form>

    <script src="../assets/js/codemirror.js"></script>
    <script src="../assets/js/xml.js"></script>
    <script src="../assets/js/javascript.js"></script>
    <script src="../assets/js/css.js"></script>
    <script src="../assets/js/clike.js"></script>
    <script src="../assets/js/php.js"></script>
    <link rel="stylesheet" href="../assets/css/default.css">
    <link rel="stylesheet" href="../assets/css/elegant.css">
<script type="text/javascript">
      var editor = CodeMirror.fromTextArea(document.getElementById("newd"), {
        lineNumbers: true,
        matchBrackets: true,
        <?php if(isset($_GET["css"])): ?>
        mode: "text/css",
        <?php else: ?>
        mode: "application/x-httpd-php",
        <?php endif; ?>
        indentUnit: 8,
        indentWithTabs: true,
        enterMode: "keep",
        tabMode: "shift"
      });
</script>
</body>
</html>