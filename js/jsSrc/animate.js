/**
* @module Animations
*/

@import '../loading/cookie.js';
@import 'libs/shoestring.js';

/**
@class animations
@static
*/

/**
@method load-animate
*/

$('html').addClass('animate-enabled');
cookie( 'animate-site', "true", 7 );

var animate = function(curPos, winHeight) {

	var yPos;

	$('.js-animate').each(function(){
		yPos = this.offsetTop;
		curPos = (curPos);
		
		//alert((curPos + winHeight) + " --- " + yPos);

		if(curPos + winHeight * 0.8 >= yPos) {

			if(!this.classList.contains('s-active')){
				this.classList.add('s-active');
			}
			
		}

	});
	
};






/**
@class init
@static
*/

/**
@method animations-init
*/

animate(window.pageYOffset, window.innerHeight);

window.onscroll = function(){
	animate(window.pageYOffset, window.innerHeight);
};