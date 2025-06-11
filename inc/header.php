<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
    	mb_internal_encoding("UTF-8");
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title><?=$title?></title>
        <meta name="title" content="DENIXFEEL.RU">
        <meta name="author" content="denixfeel">
        <meta name="keywords" content="DENIXFEEL.RU, Официальный сайт denixfeel.ru, denixfeel.ru, denixfeel">
        <meta name="description" content="Официальный блог denixfeel! Данный сайт предназначен для помощи, кто не может разобраться в IT-сфере.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, fullow">
        <link rel="stylesheet" href="./style/bootstrap.css" type="text/css">
        <link rel="shortcut icon" href="favicon.png" type="image/png">
        <script src="./script/bootstrap.js"></script>
    </head>
    <body>
   	<div id="header" style="background:url('./images/main.jpg'); height:400px; width: 100%; background-size: cover; background-position: bottom;"></div>
	<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  		<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
   			<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    			<span class="fs-4">DENIXFEEL.RU</span>
  		</a>
	  	<ul class="nav nav-pills">
	    		<li class="nav-item"><a href="articles.php" class="nav-link active" aria-current="page">Статьи</a></li>
	    		<li class="nav-item"><a href="projects.php" class="nav-link">Проекты</a></li>
	    		<li class="nav-item"><a href="software.php" class="nav-link">Софт</a></li>
	    		<li class="nav-item"><a href="/#faq" class="nav-link">FAQ</a></li>
	    		<li class="nav-item"><a href="/#about" class="nav-link">Обо мне</a></li>
	  	</ul>
	</header>
