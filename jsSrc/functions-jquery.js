/**
* This file contains core functions used in the Siren Framework
* @module Function-JQuery
*/

/**
@class scrollingFunctions
@static
*/

/**
//Scroll to target
@method scrollTon
@param target {string} Id of target
@return false
*/
function scrollTo(target){
    var targetLoc = $(target).offset().top;
    $('html, body').stop().animate({scrollTop : targetLoc}, 500);
    return false;
}



/**
@class layoutFunctions
@static
*/

/**
//Determine size of page hero
@method fixTheHeight
*/
function fixTheHeight(){
	var full_height = $(window).height();

	var head_height = $(".page-header").height();

	var final_height = full_height - (head_height);

	var ratio = final_height / $(window).width();

	if(final_height < 300){
	}
	else if(ratio> 0.52){
		$("#home-hero").height($(window).width()/2);
	}
	else{
		$("#home-hero").height(final_height);
	}
}

/**
//Determine size of page hero
@method fixTheHeight
@param parent {string} Id of parent wrapper
*/
function evenHeight(parent){
	var maxHeight = 0;

	$(parent).children("div").each(function(){
	   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
	});

	$(parent).children("div").height(maxHeight);
}


