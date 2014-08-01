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

var mobileNav = function(triggerID, widthLimit){
	
	if(window.innerWidth < widthLimit){
		var trigger = document.getElementById(triggerID);
		if(trigger){
			trigger.onclick = function(){
				activeState(this);
				if(this.classList.contains('active')){
					this.innerHTML = "CLOSE";
				}
				else{
					this.innerHTML = "MENU";
				}
				return false;
			};
		}
	}
};

/**
@class callFunctions
@static
*/

/**
@method CallsOnLoad
*/

window.onload=function(){
	mobileNav("navBtn", 600);
};

/**
@method CallsOnResize
@param selector {string} 
*/

window.onresize=function(){
	mobileNav("navBtn", 600);
};
