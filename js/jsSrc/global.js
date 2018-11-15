/**
* This file contains the Global calls and custom functions of the project
* @module Global
*/

@import 'polyfills/respimage.js';
@import 'plugins/lazysizes.js';
@import 'plugins/ls.unveilhooks.js';
@import '../loading/cookie.js';

/**
Creates the neccessary additional markup
@class setUp
@static
*/


/**
@method navPrimarySetup
*/

document.querySelectorAll('body')[0].classList.add('navigation-enabled');
cookie( 'nav-site', "true", 7 );


var navPrimarySetup = function() {
	var navEl = document.querySelectorAll('.nav-primary')[0];

	var btn = document.createElement('button');

	btn.classList.add('nav-primary_btn');

	btn.innerHTML = "Menu";

	navEl.parentNode.insertBefore(btn, navEl);

	btn.onclick = function(e) {

		if(this.classList.contains('s-nav-active')) { 
			this.classList.remove('s-nav-active');
			navEl.classList.remove('s-nav-active');

		}
		else {
			this.classList.add('s-nav-active');
			navEl.classList.add('s-nav-active');
		}

	};

	navEl.onclick = function(e) {
		var target = e.target || e.toElement;

		if(target.classList.contains('nav-primary_link-withchildren')) { 
			e.preventDefault();
			
			if(target.classList.contains('s-subnav-active')) {

				var active = document.querySelectorAll('.s-subnav-active');

				active.forEach(function(el) {
					el.classList.remove('s-subnav-active');
				});

			}
			else {
				var active = document.querySelectorAll('.s-subnav-active');

				active.forEach(function(el) {
					el.classList.remove('s-subnav-active');
				});

				target.classList.add('s-subnav-active');
				target.nextElementSibling.classList.add('s-subnav-active');
			}
		}
	};

};

if(typeof(document.querySelectorAll('body')[0].classList) != 'undefined'){
	navPrimarySetup();
}
