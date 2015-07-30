/**
* This file contains the Global calls and custom functions of the project
* @module Global
*/

/**
Related to navigation.
@class navigationUI
@static
*/

/**
Test if a css selector can be used
@method mobileNav
@param triggerID {string} 
@param widthLimit {int} 
*/

$('.siteNav_button').click(function(){

	if($(this).hasClass('active')){

		$(this).removeClass('active');
		$('.siteNav_list').removeClass('active');

	}
	else {

		$(this).addClass('active');
		$('.siteNav_list').addClass('active');

	}
	return false;
});
