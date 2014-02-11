<?php
//Siren Framework v2.0
//File Name: Global Footer
//File Purpose: Ends each page, includes styled footer, includes Javascript
//File Notes: 
?>

<footer class="footer-main">
	<p class="footer-main_content">Legal Jargon</p>
</footer>


<?php 
	//First Check if devices are mobile or not
	//Then do a second check to see which scripts to load
	if(isset($detect) && $detect->isMobile() && !$detect->isTablet()){
		if($pagename == 'contact'){ //If contact page 
	   		echo '<script src="js/contact-mobile.min.js"></script>';
		}
		else{ //If note specialized page
	    	echo '<script src="js/global-mobile.min.js"></script>';
		} 
	}
	//If Desktop or Tablet
	else{
		if($pagename == 'contact'){ //If contact page 
	   		echo '<script src="js/contact.min.js"></script>';
		}
		else{ //If note specialized page
	    	echo '<script src="js/global.min.js"></script>';
		} 
	}
?>

<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->


</body>

</html>