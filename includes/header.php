<?php
//Siren Framework v3.2
//File Name: Global Header
//File Purpose: Starts page, include <head> element, includes styled header of page
//File Notes: 

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="For SEO">

	<title><?php echo $meta_title; ?>| Suits &amp; Sandals Sample Framework</title>
	<meta name="description" content="<?php echo $meta_desc; ?>"/>
	<meta name="keywords" content="<?php echo $meta_keywords; ?>">

	<link rel="shortcut icon" type="image/x-icon" href="icons/favicon.ico">
	<?php 
		if($pagename == 'contact'){
		   	echo '<meta name="fulljs"  content="js/contact.min.js">';
		}
		else{ 
		    echo '<meta name="fulljs"  content="js/global.min.js">';
		} 
	?>
	<script>
        <?php require_once('js/enhance.js'); ?>
    </script>


	    <script>
	        <?php require_once(  'js/polyfills/html5.js'); ?>
	    </script>


	<!--[if (gt IE 6) & (lte IE 8)]>
		<link rel="stylesheet" href="css/enhanced-ie.css" type="text/css" />
	<![endif]-->


	<style>
        <?php require_once('css/basic.css'); ?>
    </style>

	<!--[if (gt IE 6) & (lte IE 8)]>
	    <script>
	        <?php require_once( 'js/polyfills/respond.js'); ?>
	    </script>
    <![endif]-->

	<link rel="stylesheet" href="css/enhanced.css" type="text/css" media="only all" />
	


</head>

<!-- Page class and page specific class -->
<body class="page page-<?php echo $pagename; ?>"> 

<!-- main-header -->
<header class="header" role="banner">

	<!-- main-title -->
	<div class="siteTitle">
		<h1 class="siteTitle_logo">
			Demo
		</h1>
	</div>

	<nav class="siteNav" role="navigation">
		<a href="#navList" class="siteNav_button" id="navBtn">MENU</a>
		<ul class="siteNav_list" id="navList">
			<li class="siteNav_item" ><a href="index" class="nav-main_link">Home</a></li>
			<li class="siteNav_item" ><a href="#" class="nav-main_link">About</a></li>
			<li class="siteNav_item" ><a href="#" class="nav-main_link">Another Page</a></li>
			<li class="siteNav_item" ><a href="contact" class="nav-main_link">Contact</a></li>
		</ul>
	</nav>

</header>