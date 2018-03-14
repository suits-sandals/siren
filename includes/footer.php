<?php
//Siren Framework v3.6
//File Name: Global Footer
//File Purpose: Ends each page, includes styled footer, includes Javascript
//File Notes: 
?>

<footer class="footer">
	<p class="footer_content">Legal Jargon</p>
</footer>

<!-- FONT LOADING -->
<?php if(!isset($_COOKIE['fontloaded-project'])) { ?>
	<script>
<?php
		if(isset($_COOKIE['fullCSS-project'])) {
			require_once('js/loading/cookie.js');
		}

		require_once('js/loading/fonts.js');
?>
		var observer = new FontFaceObserver("Avenir Next LT W01 Bold", {
			weight: 700
		});
		observer.check().then(function () {
			document.getElementsByTagName('body')[0].className += "font-loaded";
			cookie( 'fontloaded-project', "true", 7 );
		});
	</script>
<?php } ?>


</body>

</html>