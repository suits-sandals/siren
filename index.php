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

<!-- Examples of classes and how to set up section and article correctly -->

<header class="header-page row">
	<h1 class="title-page">Page Title</h1>
	<hr>
</header>



<article class="blurb-page row">
	<p class="blurb-page_p">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level.</p>
</article>

<!-- An article/content class structure -->
<section class="section-page section-articles row">
	<article class="article col_hlf">

		<header class="article_header">
			<h2 class="article_title">Article Title</h2>
		</header>

		<p class="article_p article_p-first">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>



		<section class="article_section">
			<header class="section-article_header">
				<h3 class="section-article_title">Article Section Title</h3>
			</header>
			<p class="article_p article_section-first">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>
			<p class="article_p">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>
		</section>

	</article>

	<article class="article col_hlf">	
		<header class="article_header">
			<h2 class="article_title">Article Title</h2>
		</header>
		<p class="article_p article_p-first">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>

		<section class="article_section">
			<header class="article-section_header">
				<h3 class="article-section_title">Article Section Title</h3>
			</header>
			<p class="article_p article_section-first">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>
			<p class="article_p">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>
		</section>

	</article>

</section>
<!-- End article/class section -->




<?php require_once('includes/footer.php'); ?>