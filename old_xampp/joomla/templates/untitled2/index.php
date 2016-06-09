<?php
defined('_JEXEC') or die;

/**
 * Template for Joomla! CMS, created with Artisteer.
 * See readme.txt for more details on how to use the template.
 */



require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

// Create alias for $this object reference:
$document = & $this;

// Shortcut for template base url:
$templateUrl = $document->baseurl . '/templates/' . $document->template;

// Initialize $view:
$view = $this->artx = new ArtxPage($this);

// Decorate component with Artisteer style:
$view->componentWrapper();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $document->language; ?>" lang="<?php echo $document->language; ?>" dir="ltr">
<head>
 <jdoc:include type="head" />
 <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" type="text/css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" />
 <!--[if IE 6]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie6.css" type="text/css" media="screen" /><![endif]-->
 <!--[if IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" type="text/css" media="screen" /><![endif]-->
 <script type="text/javascript">if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
 <script type="text/javascript" src="<?php echo $templateUrl; ?>/jquery.js"></script>
 <script type="text/javascript">jQuery.noConflict();</script>
 <script type="text/javascript" src="<?php echo $templateUrl; ?>/script.js"></script>
 <script type="text/javascript">if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
<script type="text/javascript">
function startTime()
{
var tm=new Date();
var h=tm.getUTCHours()+9;
var m=tm.getMinutes();
var s=tm.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}
function checkTime(i)
{
if (i<10)
{
i="0" + i;
}
return i;
}
</script>
<script language="javascript">
<!-- Date in Java Script .. Cameron Gregory  http://www.bloke.com/
// http://www.bloke.com/javascript/Date/
// change and modify this if you like, but leave these
// 4 comment lines in tact and unchanged.

function longMonthArray() {
	this[0] = "Января";	this[1] = "Февраля";	this[2] = "Марта";
	this[3] = "Апреля";	this[4] = "Мая";	this[5] = "Июнь";
	this[6] = "Июля";	this[7] = "Августа";	this[8] = "Сентября";
	this[9] = "Октября";	this[10] = "Ноября";	this[11] = "Декабря";
        return (this);
}

function shortMonthArray() {
	this[0] = "Jan";	this[1] = "Feb";	this[2] = "Mar";
	this[3] = "Apr";	this[4] = "May";	this[5] = "Jun";
	this[6] = "Jul";	this[7] = "Aug";	this[8] = "Sep";
	this[9] = "Oct";	this[10] = "Nov";	this[11] = "Dec";
        return (this);
}

function longDayArray() {
	this[0] = "Sunday";	this[1] = "Monday";	this[2] = "Tuesday";
	this[3] = "Wednesday";	this[4] = "Thursday";	this[5] = "Friday";
	this[6] = "Saturday";
        return (this);
}

function shortDayArray() {
	this[0] = "Sun"; this[1] = "Mon"; this[2] = "Tue"; this[3] = "Wed";
	this[4] = "Thu"; this[5] = "Fri"; this[6] = "Sat";
        return (this);
}

function getShortYear(year)
{
shortyear =  year%100;
     if (shortyear < 10) shortyear = "0"+shortyear;
	return shortyear
}

function getLongYear(year)
{
  if (year > 1900) return year
  return year+1900;
}

function writeDateLong(format)
{
   shortDays = new shortDayArray();
   longDays = new longDayArray();
   shortMonths = new shortMonthArray();
   longMonths = new longMonthArray();
   d = new Date();
   day = d.getDate();
   month = d.getMonth();
	year = d.getYear();
   if (format == 0)
     str = shortDays[d.getDay()] + " " + shortMonths[month] +". " + day + ", "+getLongYear(year);
  else if (format == 1)
     str = shortDays[d.getDay()] + " " + longMonths[month] + " " + day + ", "+getLongYear(year);
  else if (format == 2)
     str = longDays[d.getDay()] + " " + longMonths[month] + " " + day + ", "+getLongYear(year);
  else if (format == 3)
     str = longMonths[month] + " " + day + ", "+getLongYear(year);
   else if (format == 4)
     str = shortDays[d.getDay()] + " " + day + " " + shortMonths[month] +". " +getLongYear(year);
  else if (format == 5)
     str = shortDays[d.getDay()] + " " + day + " " + longMonths[month] + " " +getLongYear(year);
  else if (format == 6)
     str = longDays[d.getDay()] + " " + day + " " + longMonths[month] + " " + getLongYear(year);
  else if (format == 7)
     str = day + " " + longMonths[month] +" "+ getLongYear(year)+" года";
  else {
     month++;
     shortyear = getShortYear(year);
     if (format == 8)
       str = month + "/" + day + "/" + shortyear;
     else if (format == 9)
       str = month + "/" + day + "/" + getLongYear(year);
     else if (format == 10)
       str = day + "/" + month + "/" + shortyear;
     else if (format == 11)
       str = day + "/" + month + "/" + getLongYear(year);
     else if (format == 12)
       str = shortyear + "/" + month + "/" + day;
     else if (format == 13)
       str = shortyear + "/" + month + "/" + day;
     else {
        if (day < 10) day = "0"+day
        if (month < 10) month = "0"+month
        if (format == 14)
          str = month + "/" + day + "/" + shortyear;
        else if (format == 15)
          str = month + "/" + day + "/" + getLongYear(year);
        else if (format == 16)
          str = day + "/" + month + "/" + shortyear;
        else if (format == 17)
          str = day + "/" + month + "/" + getLongYear(year);
        else if (format == 18)
          str = shortyear + "/" + month + "/" + day;
        else if (format == 19)
          str = shortyear + "/" + month + "/" + day;
        }
     }
  document.writeln(str);
}

function writeDate()
{
   writeDateLong(0);
}

function writeTimeLong(format)
{
   d = new Date();
   hour=d.getHours();
   min=d.getMinutes();
   sec=d.getSeconds();
   if (hour < 10) hour = "0"+hour;
   if (min < 10) min = "0"+min;
   if (sec < 10) sec = "0"+sec;
   
   if (format == 0)
      str = hour+":"+min+":"+sec;
   else if (format == 1)
      str = hour+":"+min;
   
   document.writeln(str);
}

function writeTime()
{
   writeTimeLong(0);
}


// end-->
</script>

<!--[if IE 6]>
<style>
body {behavior: url("csshover3.htc");}
#menu li .drop {background:url("images/drop.gif") no-repeat right 8px; 
</style>
<![endif]-->
 
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
 
<!-- Автор Dylan Wagstaff, http://www.alohatechsupport.net -->
<script type="text/javascript">
 
function theRotator() {
	// Устанавливаем прозрачность всех картинок в 0
	$('div#rotator ul li').css({opacity: 0.0});
 
	// Берем первую картинку и показываем ее (по пути включаем полную видимость)
	$('div#rotator ul li:first').css({opacity: 1.0});
 
	// Вызываем функцию rotate для запуска слайдшоу, 5000 = смена картинок происходит раз в 5 секунд
	setInterval('rotate()',5000);
}
 
function rotate() {	
	// Берем первую картинку
	var current = ($('div#rotator ul li.show')?  $('div#rotator ul li.show') : $('div#rotator ul li:first'));
 
	// Берем следующую картинку, когда дойдем до последней начинаем с начала
	var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div#rotator ul li:first') :current.next()) : $('div#rotator ul li:first'));	
 
	// Расскомментируйте, чтобы показвать картинки в случайном порядке
	// var sibs = current.siblings();
	// var rndNum = Math.floor(Math.random() * sibs.length );
	// var next = $( sibs[ rndNum ] );
 
	// Подключаем эффект растворения/затухания для показа картинок, css-класс show имеет больший z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);
 
	// Прячем текущую картинку
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
};
 
$(document).ready(function() {		
	// Запускаем слайдшоу
	theRotator();
});
 
</script>

 </head>
 
<body onload="startTime()" link="#005897" vlink="#005897" alink="#005897">
<div id="art-page-background-glare-wrapper">
    <div id="art-page-background-glare"></div>
</div>
<div id="art-main">
    <div class="cleared reset-box"></div>
<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<div class="art-bar art-nav">
<div class="art-nav-outer">
<div class="art-nav-wrapper">
<a href="index.php"><img src="<?php echo $templateUrl; ?>/images/logo.png" height=50px; style="padding:10px;"/></a> <a href="http:\\metropol.ru"><img src="<?php echo $templateUrl; ?>/images/metropol.png" height=50px; style="padding:8px;"/></a> 

<a href="index.php"><img src="<?php echo $templateUrl; ?>/images/eng.jpg" height=15px; style="padding:5px; float:right; margin-right:60px;"/></a>
<a href="index.php"><img src="<?php echo $templateUrl; ?>/images/rus.jpg" height=15px; style="padding:5px;float:right;"/></a>
<a href="index.php"><img src="<?php echo $templateUrl; ?>/images/ch.jpg" height=15px; style="padding:5px; float:right;"/></a>
<br>
<a href="index.php" style="color:black; margin-left:150px;"> >Путешествующим </a> <a href="index.php" style="color:black;"> >Бизнесу </a> <a href="index.php" style="color:black;"> >Вакансии </a> <a href="index.php" style="color:black;"> >Аэропорт "Байкал" </a>
<ul id="menu">

	<li><a href="index.php" class="drop">Главная</a>
	</li>

	<li><a href="#" class="drop">О рейсах</a>
		<div class="dropdown_2columns">
                <div class="col_1">
                    <ul class="simple">
                        <li><a href="#">Онлайн табло</a></li>
                        <li><a href="#">Расписание</a></li>
                        <li><a href="#">Авиалинии</a></li>
                        <li><a href="#">Направления</a></li>
                    </ul>   
                </div>
                <div class="col_1">
					<img src="<?php echo $templateUrl; ?>/images/jpg.jpg" height=100px; />
                </div>
		</div>
	</li>
	
	<li><a href="#" class="drop">Как добраться</a>
		<div class="dropdown_2columns">
                <div class="col_1">
                    <ul class="simple">
                        <li><a href="#">Парковка</a></li>
                        <li><a href="#">Автобус</a></li>
                        <li><a href="#">Такси</a></li>
                        <li><a href="#">Аренда автомобиля</a></li>
                    </ul>   
                </div>
                <div class="col_1">
					<img src="<?php echo $templateUrl; ?>/images/jpg.jpg" height=100px; />
                </div>
		</div>
	</li>
	
	<li><a href="#" class="drop">В аэропорту</a>
		<div class="dropdown_2columns">
                <div class="col_1">
                    <ul class="simple">
                        <li><a href="#">Правила поведения</a></li>
                        <li><a href="#">Регистрация и контроль</a></li>
                        <li><a href="#">Багаж</a></li>
                        <li><a href="#">Схема аэропорта</a></li>
                    </ul>   
                </div>
                <div class="col_1">
					<img src="<?php echo $templateUrl; ?>/images/jpg.jpg" height=100px; />
                </div>
		</div>
	</li>
	
	<li><a href="#" class="drop">Услуги и удобства</a>
		<div class="dropdown_2columns">
                <div class="col_1">
                    <ul class="simple">
                        <li><a href="#">Магазины и развлечения</a></li>
                        <li><a href="#">Кафе</a></li>
                        <li><a href="#">Электронные услуги</a></li>
                        <li><a href="#">Купить билет</a></li>
						<li><a href="#">Зарегистрироваться</a></li>
                        <li><a href="#">Обмен валют и банкоматы</a></li>
                        <li><a href="#">VIP сервис</a></li>
                        <li><a href="#">Комната матери и ребенка</a></li>
						<li><a href="#">Медицинская помощь</a></li>
                    </ul>   
                </div>
                <div class="col_1">
					<img src="<?php echo $templateUrl; ?>/images/jpg.jpg" height=100px; />
                </div>
		</div>
	</li>


</ul>

<ul id="menu2"></ul>

<div id="informer"> 
<?
	sleep(1);
	$weather = simplexml_load_file('http://export.yandex.ru/weather/?city=30823');		
?>

<span style="color:#000000; margin-left: 55px; font-size:12px; float:left; margin-top:7px;"><b>Сегодня</b> <SCRIPT>writeDateLong(7);</SCRIPT><br/>
<b>Время</b> в Улан-Удэ <span id="txt"/></span><br/>
<span style="color:#000000; font-size:12px;"><b>Погода:</b> <?=$weather->temperature?>&deg;C, <?=$weather->weather_type?><br /></span>
</div>

<div style="margin-right: -390px; font-size:16px; float:right; margin-top:-135px;"><?php echo $view->positions(array('position-18' => 34), 'art-block'); ?></div>
</div>
</div>
</div>
<div class="cleared reset-box"></div>
<?php endif; ?>
<div class="art-header">
<div class="art-header-position">
    <div class="art-header-wrapper">
	
<div id="rotator">
<ul>
<li class="show"><img src="<?php echo $templateUrl; ?>/images/sfon1.jpg" width="870" height="200"  alt="pic1" /></li>
<li><img src="<?php echo $templateUrl; ?>/images/sfon2.jpg" width="870" height="200"  alt="pic2" /></li>
<li><img src="<?php echo $templateUrl; ?>/images/sfon3.jpg" width="870" height="200"  alt="pic3" /></li>
<li><img src="<?php echo $templateUrl; ?>/images/sfon4.jpg" width="870" height="200"  alt="pic3" /></li>
</ul>
</div> 
        <div class="cleared reset-box"></div>
        <div class="art-header-inner">
		
<div class="art-logo">
</div>

        </div>
    </div>
</div>


</div>


<div class="cleared reset-box"></div>
<div class="art-box art-sheet">
    <div class="art-box-body art-sheet-body">
<?php echo $view->position('position-15', 'art-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33), 'art-block'); ?>
<div class="art-layout-wrapper">
    <div class="art-content-layout">
        <div class="art-content-layout-row">
<?php if ($view->containsModules('position-4', 'position-7',  'position-5')) : ?>
<div class="art-layout-cell art-sidebar1">
<ul id="menu3"><br>
<img src="<?php echo $templateUrl; ?>/images/1.png" width="30" height="30" style="margin: 0px 0 0 -0px; float:left;"/><a href="index.php" style="font-size:11px;margin: 0 0 0 5px;float:left; " target="_blank">Расписание</a><img src="<?php echo $templateUrl; ?>/images/2.png" width="30" height="30" style="margin: 0px 0 0 20px; float:left;"/><a href="index.php" style="font-size:11px;margin: 0 0 0 5px;float:left;" target="_blank">Купить билет</a><img src="<?php echo $templateUrl; ?>/images/3.png" width="30" height="30" style="margin: 0px 0 0 10px; float:left;"/><a href="index.php" style="font-size:11px; line-height: 10px; margin: 5px;">Правила<font  style="margin: 0px 0 0 5px; float:left;">провозки</font><font style="margin: 0px 0 0 5px; float:left;">багажа</font></a><br>
<br><br>
<img src="<?php echo $templateUrl; ?>/images/4.png" width="30" height="30" style="margin: 0px 0 0 -0px; float:left;"/><a href="index.php" style="font-size:11px;margin: 0 0 0 5px;float:left; " target="_blank">Как проехать</a><img src="<?php echo $templateUrl; ?>/images/5.png" width="30" height="30" style="margin: 0px 0 0 10px; float:left;"/><a href="index.php" style="font-size:11px;margin: 0 0 0 5px;float:left;" target="_blank">Регистрация<br><font  style="margin: -10px 0 0 15px; float:left;">online</font></a><img src="<?php echo $templateUrl; ?>/images/6.png" width="30" height="30" style="margin: 0px 0 0 17px; float:left;"/><a href="index.php" style="font-size:11px; line-height: 10px; margin: 15px;">Карта <font  style="margin: 0px 0 0 5px; float:left;">аэропорта</font></a><br>
<br><br>
<img src="<?php echo $templateUrl; ?>/images/7.png" width="30" height="30" style="margin: 0px 0 0 -0px; float:left;"/><a href="index.php" style="font-size:11px;margin: 0 0 0 5px;float:left; " target="_blank">Вопрос-Ответ</a><img src="<?php echo $templateUrl; ?>/images/8.png" width="30" height="30" style="margin: 0px 0 0 5px; float:left;"/><a href="index.php" style="font-size:11px;margin: 0 0 0 5px;float:left;" target="_blank">Справочная</a><img src="<?php echo $templateUrl; ?>/images/9.png" width="30" height="30" style="margin: 0px 0 0 20px; float:left;"/><a href="index.php" style="font-size:11px; line-height: 10px; margin: 5px;">Услуги и <font  style="margin: 0px 0 0 5px; float:left;">удобства</font></a><br>

</ul>

<div class="art12">

</div>
<?php echo $view->position('position-4', 'art-block'); ?>
<?php echo $view->position('position-7', 'art-block'); ?>
<?php echo $view->position('position-5', 'art-block'); ?>
<br>
  <div class="cleared"></div>
</div>
<?php endif; ?>
<div class="art-layout-cell art-content">


<? /*<img src="<?php echo $templateUrl; ?>/images/main.jpg" width="600" height="680"/>*/ ?>

<?php 
  echo $view->position('position-19', 'art-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'art-article');
  echo $view->position('position-12', 'art-nostyle');
  if ($view->hasMessages())
    echo artxPost('<jdoc:include type="message" />');
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'art-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'art-article');
  echo $view->position('position-25', 'art-nostyle'); 
?>


  <div class="cleared"></div>
</div>

        </div>
    </div>
</div>
<div class="cleared"></div>


<?php echo $view->positions(array('position' => 33, 'position' => 33, 'position' => 34), 'art-block'); ?>
<?php echo $view->position('position-26', 'art-nostyle'); ?>
<div class="art-footer">
    <div class="art-footer-body">
        <?php echo $view->position('position-14'); ?>
                <div class="art-footer-text">
                    <?php if ($view->containsModules('position-27')): ?>
                    <?php echo $view->position('position-27', 'art-nostyle'); ?>
                    <?php else: ?>
                    <?php ob_start(); ?>
<p>
ОАО "Аэропорт Байкал" © 2012<br>
ОАО "Аэропорт Байкал", 670018 г.Улан-Удэ, Аэропорт,10<br>
Телефон: +7 (3012) 22-79-59, 22-70-44, 22-70-05<br>
Факс: +7 (3012) 22-79-59<br>
</p>


                    <?php echo str_replace('%YEAR%', date('Y'), ob_get_clean()); ?>
                    <?php endif; ?>
                </div>
        <div class="cleared"></div>
    </div>
</div>

		<div class="cleared"></div>
<center><td width="300" style="padding:15px; float:right; margin-right:40px;">
<p class="smaller mediumGray pb2 usual">Сайты группы «МЕТРОПОЛЬ»</p><select style="width: 230px;" class="small" onchange="if( this.options[this.selectedIndex].value != '' ) window.location.href = this.options[this.selectedIndex].value;"><option value="http://www.metropolgroup.ru" style="color: black;">Группа МЕТРОПОЛЬ</option>
<option value="http://www.metropol.ru">&nbsp;&nbsp;&nbsp;ООО «ИФК «МЕТРОПОЛЬ»</option>
<option value="http://ib.metropol.ru">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Инвестиционно-банковское направление</option>
<option value="http://trade.metropol.ru">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Информационно-аналитический портал</option>
<option value="http://www.am-metropol.ru">&nbsp;&nbsp;&nbsp;УК «МЕТРОПОЛЬ»</option>
<option value="http://www.obibank.ru">&nbsp;&nbsp;&nbsp;КБ «Обибанк»</option>
<option value="http://www.metropol-uk.com/rus">&nbsp;&nbsp;&nbsp;METROPOL (UK) Limited</option>
<option value="http://www.metropol-cyprus.com">&nbsp;&nbsp;&nbsp;METROPOL (Cyprus) Limited</option>
<option value="http://www.metropol.co.jp">&nbsp;&nbsp;&nbsp;METROPOL JAPAN</option>
<option value="http://www.metropoldevelopment.ru">&nbsp;&nbsp;&nbsp;ООО «МЕТРОПОЛЬ ДЕВЕЛОПМЕНТ»</option>
<option value="http://tot.metropol.ru">&nbsp;&nbsp;&nbsp;Венчурный фонд «Русский аккумулятор идей»</option>
<option value="http://www.putnik.com">&nbsp;&nbsp;&nbsp;Туристическое агентство «Путник»</option>
<option value="http://www.alexandreiii.ru">&nbsp;&nbsp;&nbsp;Alexandre III</option>
<option value="http://www.airportbaikal.ru">&nbsp;&nbsp;&nbsp;Аэропорт «Байкал»</option>
<option value="" style="color: black;">Промышленность:</option>
<option value="http://www.mbc-corp.com">&nbsp;&nbsp;&nbsp;Корпорация «Металлы Восточной Сибири»</option>
<option value="" style="color: black;">Социальная и благотворительная деятельность:</option>
<option value="http://www.kyokushinkan.ru">&nbsp;&nbsp;&nbsp;Кёкусин-кан каратэ-до</option>
<option value="http://www.cruiservaryag.ru">&nbsp;&nbsp;&nbsp;Благотворительный фонд «Крейсер «Варяг»</option>
<option value="http://polus.metropol.ru">&nbsp;&nbsp;&nbsp;Полет к вершине планеты</option>
<option value="http://baikalfund.ru">&nbsp;&nbsp;&nbsp;Фонд содействия сохранению озера Байкал</option>
<option value="http://energyoga.ru">&nbsp;&nbsp;&nbsp;Студия йоги</option>
<option value="http://hopestar.ru">&nbsp;&nbsp;&nbsp;Фонд «Под звездой надежды»</option></select>
</td></center>
    </div>
</div>

<div class="cleared"></div>
<p class="art-page-footer">Joomla template created by Ankudinov.</p>

    <div class="cleared"></div>
</div>

<?php echo $view->position('debug'); ?>
</body>
</html>