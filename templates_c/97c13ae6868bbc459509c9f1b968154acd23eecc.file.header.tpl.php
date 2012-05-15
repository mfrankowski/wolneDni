<?php /* Smarty version Smarty-3.0.6, created on 2012-05-15 15:36:12
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63504fb25bcc4f4f77-35882444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1337088923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63504fb25bcc4f4f77-35882444',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-language" content="pl">
		<title>
			Wolne Dni - Oferty noclegów, hoteli i pensjonatów
		</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" media="screen" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="/css/filters.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="/css/maps.css" />
		<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
		<script type="text/javascript" src="js/map.js"></script>
	</head>
	<body onload="mapaStart()">
		<center>
			<div class="main">

				<div class="header">
					<div class="logo"><img src="/images/sigla.jpg" alt="Wolne Dni - ?eba"></div>
					<div class="top_menu">
							<a href="#" title="Start" class="home">Start</a>
							<a href="#" title="Najnowsze oferty">Najnowsze oferty</a>
							<a href="#" title="Najlepsze oferty">Najlepsze oferty</a>
							<a href="#" title="Szukaj">Szukaj</a>
							<a href="#" title="Kontakt">Kontakt</a>
					  <div class="search">
							<form action="/search.php" method="post" class="searchform">
								<input name="string" class="searchfield" id="string" type="text"> 
								
								<input name="search" class="searchsubmit" id="search" value="Szukaj" type="submit">
							</form>
					  </div>
							
				  </div>

				</div><!-- header -->

				<div class="left_menu">
					<div class="section">
						<div class="sectiontitle">Kategorie</div>
						<ul class="catlist">
<!--							<li class="level0">
								<a href="http://polltyka.com.pl/wynajem/">Wynajem</a>				
								</li>
-->
								<li class="level1"><a>Pensjonaty</a></li>
								<li class="level1"><a>Pensjonaty</a></li>
								<li class="level1"><a>Pensjonaty</a></li>
						</ul>
					</div>
				</div>

				<div class="content">
