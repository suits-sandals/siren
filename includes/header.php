<?php
//Siren Framework v2.0
//File Name: Global Header
//File Purpose: Starts page, include <head> element, includes styled header of page
//File Notes: 

	//Get Page Name
	$file = basename($_SERVER['PHP_SELF']);
    $pagename = str_replace(".php","",$file); 

    //Form Token Vallidation To Make Sure Its Not A Random Request/Hack
    if($pagename == 'contact' || $pagename == 'result'){
    	//Start the session
		session_start();
		//Require the class
		require('scripts/form_key.php');
		//Start the class
		$formKey = new formKey();
    }

    //For Mobile Detection
    require_once 'scripts/Mobile_Detect.php';
	$detect = new Mobile_Detect;

    require('scripts/functions.php');


    //SET UP META DATA
    if($pagename == 'contact' || $pagename == 'result'){
    	$title = 'Contact';
    	$desc = "The contact page";
    	$keywords = "contact";
    }
    else{
    	$title = 'Welcome to this site.';
    	$desc = "A bit about this site.";
    	$keywords = "Stuff";
    }
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

	<title><?php echo $title; ?>| Suits &amp; Sandals Sample Framework</title>
	<meta name="description" content="<?php echo $desc; ?>"/>
	<meta name="keywords" content="<?php echo $keywords; ?>">

	<link rel="shortcut icon" type="image/x-icon" href="icons/favicon.ico">

	


	<!-- STYLES -->

	<!-- Main Styles: 
		Calls basic, element, styles 
		Then use conditional statements to load the enhanced version the right way
		TEST AND WATCH THIS, if it messes up work flow just move core back into style
	-->
	<link rel="stylesheet" href="css/basic.css" />
	<!--[if (gt IE 6) & (lte IE 8)]>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	<![endif]-->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="only all" />
	
	<!-- STYLES END -->

	<!-- PICTURE FILL -->
	<!-- FIRST LINE NEEDED ONLY IF USING THE PICTURE ELEMENT -->
	<script>document.createElement( "picture" );</script>
	<script src="js/polyfills/picturefill.js" async></script>

	<!-- Styles for IE -->
	<!--[if lte IE 8]>
		<script type="text/javascript" src="js/polyfills/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<![endif]-->

</head>

<!-- Page class and page specific class -->
<body class="page page-<?php echo $pagename; ?>"> 

<!-- main-header -->
<header class="header-main" role="banner">

	<!-- main-title -->
	<div class="title-main">
		<h1 class="title-main_logo">
			Demo
		</h1>
	</div>

	<nav class="nav-main" role="navigation">
		<a href="#" class="nav-main_button" id="navBtn">MENU</a>
		<ul class="nav-main_list">
			<li class="nav-main_item" ><a href="index" class="nav-main_link">Home</a></li>
			<li class="nav-main_item" ><a href="#" class="nav-main_link">About</a></li>
			<li class="nav-main_item" ><a href="#" class="nav-main_link">Another Page</a></li>
			<li class="nav-main_item" ><a href="contact" class="nav-main_link">Contact</a></li>
		</ul>
	</nav>

</header>