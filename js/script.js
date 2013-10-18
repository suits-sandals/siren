/*Sassy Siren*/
/*Version 1.5*/
/*6/2/13*/

/*Navigation on mobile*/
 $('.nav-button').click(
    function(){
    		if($(this).hasClass('active')){
	          $('.nav ul').removeClass('active');
	          $(this).removeClass('active');
	        }
		    else{
		        $(this).addClass('active');
		        $('.nav ul').addClass('active');
		    }    
	}
);
 