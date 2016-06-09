<?php
/**
* @package MOD_JUNEWS
* @author Denys Nosov (http://denysdesign.com), Joomla! Ukraine (http://joomla-ua.org)
* @copyright (C) 2007-2012 Denys Nosov. All rights reserved.
* @license http://creativecommons.org/licenses/by-nc-nd/3.0/ Creative Commons Attribution-Noncommercial-No Derivative Works 3.0 License
* @version 4.0
* @description: Multifunction plugin for creating thumbnails of images, using LightBox libraries and watermark
*/

//error_reporting(0);

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

$config = &JFactory::getConfig();
$locale = $config->getValue('config.language');

$lang =& JFactory::getLanguage();
$lang->load('mod_junewsultra', JPATH_SITE);



if ($joomlaUser->get('id') < 1) {
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><link rel="stylesheet" href="../../../../../templates/system/css/system.css" type="text/css" /><link href="../../../../../administrator/templates/bluestork/css/template.css" rel="stylesheet" type="text/css" /></head><body><dl id="system-message"><dt class="error"><?php echo JText::_('MOD_JUNEWS_NOTICE'); ?></dt><dd class="message error fade"><ul><li><?php echo JText::_('MOD_JUNEWS_LOGIN'); ?></li></ul></dd></dl></body></html>
<?php
    return;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta content="text/html; charset=utf-8" http-equiv="content-type">
<title><?php echo JText::_('MOD_JUNEWS_DONATE'); ?></title>
<link rel="stylesheet" href="../../../../../templates/system/css/system.css" type="text/css" />
<link href="../../../../../administrator/templates/bluestork/css/template.css" rel="stylesheet" type="text/css" />
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
h3 {
  clear: both;
  padding: 12px 0 3px 0;
  margin: 3px 0;
}

p {
  clear: both; 
}

/*]]>*/
</style>
</head>
<body>
<fieldset class="adminform">
    <legend><?php echo JText::_('MOD_JUNEWS_DONATE'); ?></legend>
    <?php if ($locale == 'uk-UA'): ?>
    <p>Ви можете зробити пожертвування наступним чином:</p>

    <h3>Сервіс платежів Інтеркаса</h3>
    <p>За допомогою цього сервісу Ви можете зробити пожертвування через банки, електронні гроші, сенсорні термінали, тощо.</p>
    <form accept-charset="cp1251" action="https://interkassa.com/lib/payment.php" enctype="application/x-www-form-urlencoded" method="post" name="payment" target="_blank">
	    <input name="ik_shop_id" type="hidden" value="6B90164E-0507-DF3F-0AD2-1D4E8B0B4CDD" /> <input name="ik_payment_amount" value="10.00" /> USD<br /><input name="ik_payment_id" type="hidden" value="1" /> <input name="ik_payment_desc" type="hidden" value="Пожертвування" /> <input name="process" type="submit" value="Пожертвувати" class="clear" />
    </form>
    <p><em>Будь-ласка, введіть суму пожертвування та оберіть в новому вікні за допомогою якої системи Ви хотіли б зробити своє пожертвування</em>.</p>

    <h3>WebMoney</h3>
    <ul>
    	<li>Z162084860012</li>
    	<li>R371967759323</li>
    </ul>
    <?php elseif ($locale == 'ru-RU'): ?>
    <p>Вы можете сделать пожертвование следующим образом:</p>

    <h3>Сервис платежей Интеркасса</h3>
    <p>С помощью этого сервиса Вы можете сделать пожертвование через банки, электронные деньги, сенсорные терминалы и т.д.</p>
    <form accept-charset="cp1251" action="https://interkassa.com/lib/payment.php" enctype="application/x-www-form-urlencoded" method="post" name="payment" target="_blank">
	    <input name="ik_shop_id" type="hidden" value="6B90164E-0507-DF3F-0AD2-1D4E8B0B4CDD" /> <input name="ik_payment_amount" value="10.00" /> USD<br /><input name="ik_payment_id" type="hidden" value="1" /> <input name="ik_payment_desc" type="hidden" value="Пожертвование" /> <input name="process" type="submit" value="Пожертвовать" class="clear" />
    </form>
    <p><em>Пожалуйста, введите сумму пожертвования и выбирите в новом окне с помощью какой системы Вы хотели бы сделать свое пожертвование</em>.</p>

    <h3>WebMoney</h3>
    <ul>
    	<li>Z162084860012</li>
    	<li>R371967759323</li>
    </ul>
    <?php else: ?>
    <h3>Interkassa</h3>
    <form accept-charset="cp1251" action="https://interkassa.com/lib/payment.php" enctype="application/x-www-form-urlencoded" method="post" name="payment" target="_blank">
	    <input name="ik_shop_id" type="hidden" value="6B90164E-0507-DF3F-0AD2-1D4E8B0B4CDD" />
        <input name="ik_payment_amount" value="10.00" /> USD<br />
        <input name="ik_payment_id" type="hidden" value="1" />
        <input name="ik_payment_desc" type="hidden" value="Donate" />
        <input name="process" type="submit" value="Donate" class="clear" />
    </form>
    <br /><br />
    <h3>WebMoney</h3>
    <ul>
    	<li>Z162084860012</li>
    	<li>R371967759323</li>
    </ul>
    <?php endif; ?>
</fieldset>
</body>
</html>