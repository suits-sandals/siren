/**
* This file contains the Global calls and custom functions of the project
* @module Global
*/

/**
Creates the neccessary additional markup
@class setUp
@static
*/


/**
@method navPrimarySetup
*/

$('html').addClass('navigation-enabled');

var pInit = false;
var navPrimarySetup = function() {
	$('.nav').before('<button class="nav_btn">Menu</button>');

	//Click event
	$('.nav_btn').bind("click", function(){
		
		if($(this).is('.s-active')) {

			$(this).removeClass('s-active');

			$('.nav').removeClass('s-active');

		}
		else {
			$(this).addClass('s-active');
			$('.nav').addClass('s-active');
		}

	});
};

if(window.innerWidth < 650) {
	navPrimarySetup();

	pInit = true;
}

window.onresize = function() {
	if(window.innerWidth < 650 && !pInit) {
		navPrimarySetup();

		pInit = true;
	}
};