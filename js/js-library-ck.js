//JS Library//
//This is a library of simple functions//
//Do not use this file directly but pick and choose functions from it//
//NAVIGATION FUNCTIONS//
//Scroll To target on click function
function scrollTo(e){var t=$(e).offset().top;$("html, body").stop().animate({scrollTop:t},500);return!1}function fixTheHeight(){var e=$(window).height(),t=$(".page-header").height(),n=e-t,r=n/$(window).width();n<300||(r>.52?$("#home-hero").height($(window).width()/2):$("#home-hero").height(n))}var maxHeight=0;$("div").each(function(){$(this).height()>maxHeight&&(maxHeight=$(this).height())});$("div").height(maxHeight);$("#myElement").length>0;