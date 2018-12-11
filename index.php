<?php
	//Siren Framework v3.0
	//File Name: Sample Page
	//File Purpose: To show developer class and element structure
	//File Notes: Just an example

	//Page Data Variables
	$pagename = 'index';

	$meta_title = 'Homepage';
	$meta_desc = "Welcome to the site";
	$meta_keywords = "stuff";


	//Header
	require_once('includes/header.php'); 
?>

<!-- Examples of classes and how to set up section and article correctly --><main>
	
	<section class="header-page l-row">
		<h1 class="title-page">Page Title</h1>
		<hr>
	</section>
	
	<section class="blurb-page l-row">
		<p class="blurb-page_p">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level.</p>
	</section>
	
	<!-- An article/content class structure -->
	<section class="section-page section-articles l-row">
		<div class="article col_hlf">
	
			<div class="article_header">
				<h2 class="article_title">Article Title</h2>
			</div>
	
			<p class="article_p article_p-first">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>
	
	
		</div>
	
		<div class="article col_hlf">	
			<div class="article_header">
				<h2 class="article_title">Article Title</h2>
			</div>
			<p class="article_p article_p-first">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>
	
		</article>
	
	</section>
	</main>



<?php require_once('includes/footer.php'); ?>