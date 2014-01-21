<?php
//Siren Framework v2.0
//File Name: Global Footer
//File Purpose: Ends each page, includes styled footer, includes Javascript
//File Notes: 
?>

<footer class="page-footer">
	<p class="page-footer_content">Legal Jargon</p>
</footer>

<script src="js/global.min.js"></script>


<?php if($pagename == 'contact'){ ?>
    <script src="js/contact.min.js"></script>
<?php } ?>


<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->


</body>

</html>