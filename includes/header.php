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
		print_r($formKey);
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

	<title>Suits &amp; Sandals Sample Framework</title>

	<link rel="shortcut icon" type="image/x-icon" href="icons/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-touch-icon-114x114.png" />

	<!-- STYLES -->

	<!-- Main Styles -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

	<!-- Print styles-->
	<link rel="stylesheet" href="css/print.css" type="text/css" media="print" /> 
	
	<!-- STYLES END -->

	<!-- Styles for IE -->
	<!--[if lte IE 8]>
		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->

	<!--[if lte IE 8]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<![endif]-->

</head>

<!-- Page class and page specific class -->
<body class="page page-<?php echo $pagename; ?>"> 

<!-- main-header -->
<header class="main-header">

	<!-- main-title -->
	<div class="main-title">
		<h1 class="main-title_logo">
			Demo
		</h1>
	</div>

	<nav class="main-nav">
		<div class="main-nav_button">MENU</div>
		<ul class="main-nav_list">
			<li class="main-nav_item" ><a href="index">Home</a></li>
			<li class="main-nav_item" ><a href="#">About</a></li>
			<li class="main-nav_item" ><a href="#">Another Page</a></li>
			<li class="main-nav_item" ><a href="contact">Contact</a></li>
		</ul>
	</nav>

</header>