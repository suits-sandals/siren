<?php
	/*Siren v2.0*/
	/*HEADER*/

	//Get Page Name
	$file = basename($_SERVER['PHP_SELF']);
    $pagename = str_replace(".php","",$file); 
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

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />

	<!-- Your styles -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

	<!-- Print styles-->
	<link rel="stylesheet" href="css/print.css" type="text/css" media="print" />


	<!-- Styles for IE -->
	<!--[if lte IE 8]>
		<script type="text/javascript" src="js/html5.js"></script>
		<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<![endif]-->

	<!--[if lte IE 8]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<![endif]-->
</head>

<body>
<!--TWO TYPES OF HEADERS-->
<header class="container header">

<!--TYPE 1 : Everything in one row-->
	<div class="row">
		<div class="col_3">
			<h1>	
				<!--<img src="images/logo.png" alt="LOGO" />-->
				Demo
			</h1>
		</div>

		<nav class="col_9 nav">
			<div class="nav-button"></div>
			<ul>
				<li><a href="index">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">ANOTHER PAGE</a></li>
				<li><a href="contact">CONTACT</a></li>
			</ul>
		</nav>
	</div> 
<!--END FIRST TYPE OF HEADER-->


<!--TYPE 2 : Two Rows-->
<!-- <div class="row">
		<div class="col_12">
			<h1>
				<img src="images/logo.png" alt="LOGO" />
			</h1>
		</div>
	</div>

	<div class="row">
		<nav class="col_12 nav">
			<div class="nav-button"></div>
			<ul>
				<li><a href="index">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">ANOTHER PAGE</a></li>
				<li><a href="contact">CONTACT</a></li>
			</ul>
		</nav>
	</div>
	-->
<!--END SECOND TYPE OF HEADER-->

</header>