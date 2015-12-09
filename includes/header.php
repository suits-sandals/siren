<?php
//Siren Framework v3.6
//File Name: Global Header
//File Purpose: Starts page, include <head> element, includes styled header of page
//File Notes: 
?>

<!DOCTYPE html manifest="manifest.appcache" >
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title><?php echo $meta_title; ?> | Suits &amp; Sandals Sample Framework</title>
	<meta name="description" content="<?php echo $meta_desc; ?>"/>
	<meta name="keywords" content="<?php echo $meta_keywords; ?>">

	<link rel="shortcut icon" type="image/x-icon" href="icons/favicon.ico">

	<!--[if lt IE 9]>
	    <script>
	        <?php require_once( 'js/polyfills/html5.js'); ?>
			document.createElement( "picture" );
	    </script>
    <![endif]-->

<?php if(isset($_COOKIE['fullCSS-project'])) { //If cookie is set load stylesheet normally ?>
	
	<link rel="stylesheet" href="css/style.css" type="text/css" data-test />

<?php } else{

	//Critical CSS is Served based on major template groupings
	echo '<style>';

		require_once(  'css/critical/critical-generic.css');

	echo '</style>';
?>


	<script>
		<?php require_once('js/loading/loadcss.js'); ?>
	    loadCSS( "css/style.css" );
		<?php require_once('js/loading/cookie.js'); ?>
	    cookie( 'fullCSS', "true", 7 );
	</script>
	
<?php } ?>

	<script>
		// JS Enhancment and Async Loading
		<?php require_once('js/loading/loadjs.js'); ?>
		//Test only supports browsers that are IE8 and newer


		if(typeof(document.querySelectorAll) != 'undefined'){
			document.addEventListener("DOMContentLoaded", function() {
				loadJS( "js/global.min.js" );
			});
	    }

	    //Fix for Windows 8
	    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
		    var msViewportStyle = document.createElement("style");
		    msViewportStyle.appendChild(
		        document.createTextNode(
		            "@-ms-viewport{width:auto!important}"
		        )
		    );
		    document.getElementsByTagName("head")[0].
		        appendChild(msViewportStyle);
		}

    </script>


    <!--[if IE 8]>
	    <script src="js/polyfills/respond.js" async ></script>
	    <link rel="stylesheet" href="css/ie8.css" type="text/css" />    
    <![endif]-->
	


</head>

<!-- Page class and page specific class -->
<?php if(isset($_COOKIE['fontloaded-project'])) { ?>
<body class="page page-<?php echo $pagename; ?> font-loaded"> 
<?php } else{ ?>
<body class="page page-<?php echo $pagename; ?>"> 
<?php } ?>

<!-- main-header -->
<header class="header" role="banner">

	<!-- main-title -->
	<div class="header_title">
		<h1 class="header_logo">
			Demo
		</h1>
	</div>

	<nav class="nav">
		<a href="#navList" class="nav_button" id="navBtn">MENU</a>
		<ul class="nav_list" id="navList">
			<li class="nav_item" ><a href="index" class="nav_link">Home</a></li>
			<li class="nav_item" ><a href="#" class="nav_link">About</a></li>
			<li class="nav_item" ><a href="#" class="nav_link">Another Page</a></li>
			<li class="nav_item" ><a href="contact" class="nav_link">Contact</a></li>
		</ul>
	</nav>

</header>