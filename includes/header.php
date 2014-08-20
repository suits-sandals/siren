<?php
//Siren Framework v3.2
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

    <!--[if lt IE 9]>
	    <script>
	        <?php require_once(  'js/polyfills/html5.js'); ?>
	<![endif]-->


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
<header class="header-main" role="banner">

	<!-- main-title -->
	<div class="title-main">
		<h1 class="title-main_logo">
			Demo
		</h1>
	</div>

	<nav class="nav-main" role="navigation">
		<a href="#navList" class="nav-main_button" id="navBtn">MENU</a>
		<ul class="nav-main_list" id="navList">
			<li class="nav-main_item" ><a href="index" class="nav-main_link">Home</a></li>
			<li class="nav-main_item" ><a href="#" class="nav-main_link">About</a></li>
			<li class="nav-main_item" ><a href="#" class="nav-main_link">Another Page</a></li>
			<li class="nav-main_item" ><a href="contact" class="nav-main_link">Contact</a></li>
		</ul>
	</nav>

</header>