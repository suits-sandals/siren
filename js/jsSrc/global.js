/**
* This file contains the Global calls and custom functions of the project
* @module Global
*/

/**
Creates the neccessary additional markup
@class setUp
@static
*/

@import 'polyfills/respimage.js';
@import 'plugins/lazysizes.js';
@import 'plugins/ls.unveilhooks.js';
@import 'libs/shoestring.js';
@import '../loading/cookie.js';


/**
@method navPrimarySetup
*/

$('html').addClass('navigation-enabled');

var pInit = false;
var navPrimarySetup = function() {
	$('.nav-primary').before('<button class="nav-primary_btn">Menu</button>');

	//Click event
	$('.nav-primary_btn').bind("click", function(){
		
		if($(this).is('.s-active')) {

			$(this).removeClass('s-active');

			$('.nav-primary').removeClass('s-active');

		}
		else {
			$(this).addClass('s-active');
			$('.nav-primary').addClass('s-active');
		}

	});
};

if(window.innerWidth < 600) {
	navPrimarySetup();

	pInit = true;
}

window.onresize = function() {
	if(window.innerWidth < 600 && !pInit) {
		navPrimarySetup();

		pInit = true;
	}
};