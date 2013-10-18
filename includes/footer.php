<?php
//FOOTER//
//SUITS AND SANDALS//
?>

<footer class="footer">
	<p>Legal Jargon</p>
</footer>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.10.2.min.js"><\/script>')</script>
<script src="js/script-ck.js"></script>


<?php if($pagename == 'contact'){ ?>
    <script src="js/plugins/jquery.validate.min.js"></script>
    <script>
        $('#contact').vallidate();
    </script>
<?php } ?>






  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->


</body>

</html>