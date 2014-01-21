//JS Library//
//This is a library of simple functions//
//Do not use this file directly but pick and choose functions from it//


//NAVIGATION FUNCTIONS//

//Scroll To target on click function
function scrollTo(target){
    var targetLoc = $(target).offset().top;
    $('html, body').stop().animate({scrollTop : targetLoc}, 500);
    return false;
}

//END NAVIGATION//

//LAYOUT FUNCTIONS//

//Set a fixed height for a header//
//Can be adapted for different applications//
//The Ratio is for making sure a background image is in ratio to the container//
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

//Equalize the heights of Divs
//From css-tricks
var maxHeight = 0;

$("div").each(function(){
   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
});

$("div").height(maxHeight);

//END LAYOUT//

//DATA FUNCTIONS//

//Check if element exists
//from css-tricks
if ($('#myElement').length > 0) { 
    // it exists 
}

//END DATA//