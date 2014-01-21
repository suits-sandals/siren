<?php
//Siren Framework v2.0
//File Name: Sample Page
//File Purpose: To show developer class and element structure
//File Notes: Just an example
?>

<?php require_once('includes/header.php'); ?>

<!-- Examples of classes and how to set up section and article correctly -->

<header class="page-header">
	<h1 class="page-title">Page Title</h1>
</header>

<article class="page-blurb">
	<p class="page-blurb_p">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level.</p>
</article>

<!-- An article/content class structure -->
<section class="page-section section-articles">
	<article class="article">	
		<header class="article_header">
			<h2 class="article_title">Article Title</h2>
		</header>
		<p class="article_p article-first_p">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>

		<section class="article_section">
			<header class="article-section_header">
				<h3 class="article-section_title">Article Section Title</h3>
			</header>
			<p class="article_p article-section_first">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>
			<p class="article_p">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>
		</section>

	</article>

	<article class="article">	
		<header class="article_header">
			<h2 class="article_title">Article Title</h2>
		</header>
		<p class="article_p article-first_p">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>

		<section class="article_section">
			<header class="article-section_header">
				<h3 class="article-section_title">Article Section Title</h3>
			</header>
			<p class="article_p article-section_first">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>
			<p class="article_p">Occupy flexitarian incididunt, ad typewriter laborum whatever. Organic mollit chillwave helvetica do lomo, skateboard gluten-free williamsburg nulla. Wolf jean shorts id qui. Sapiente godard master cleanse, fap locavore hella enim proident wolf next level. Seitan pickled terry richardson, gastropub biodiesel put a bird on it reprehenderit adipisicing authentic laboris. Pitchfork Austin est adipisicing, trust fund tattooed nisi. Dolor brunch single-origin coffee, beard duis reprehenderit tattooed ex elit put a bird on it brooklyn 3 wolf moon laborum lo-fi.</p>
		</section>

	</article>

</section>
<!-- End article/class section -->

<!--Start Picture Fill Example -->
<section>
	<?php
		$sizes = array(
			'small' => '',
			'medium' => '400px',
			'large' => '700px'
			);

		pictureFill('images/test', 'png', 'A Test Image', $sizes);
	?>
</section>
<!--End Picture Fill Example -->

<?php require_once('includes/footer.php'); ?>