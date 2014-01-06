/**
* This file contains core functions used in the Siren Framework
* @module Siren-Core
*/

/**
@class hasClass
@param element {object} The target element
@param className {string} The class name to check against
*/
function hasClass(element, className) {
    return element.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(element.className);
}

/**
Used to add a class "active" to triggers and related targets
@class activeState
@param trigger {string} The name of the trigger
@param target {string} The name of the target
*/
function activeState(trigger, target){
	var button = document.getElementById(trigger);
	var target = document.getElementById(target);

	button.onclick = function(){
		if(hasClass(button, 'active')){
			button.setAttribute("class", "");
			target.setAttribute("class", "");
		}
		else{
			button.setAttribute("class", "active");
			target.setAttribute("class", "active");
		}
	};
}
 