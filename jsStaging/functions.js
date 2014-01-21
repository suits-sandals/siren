/**
* This file contains core functions used in the Siren Framework
* @module Siren-Core
*/

/**
Methods related to manipulating classes in the HTML
@class classManipulation
@static
*/

/**
@method hasClass
@param element {object} The target element
@param className {string} The class name to check against
@return boolean
*/
function hasClass(element, className) {
    return element.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(element.className);
}

/**
Used to add a class "active" to triggers and related targets
@method activeState
@param trigger {string} The name of the trigger
@param target {string} The name of the target
*/
function activeState(trigger1, target1){
	var trigger = document.getElementById(trigger1);
	var target = document.getElementById(target1);
	var triggerClasses, targetClasses;

	trigger.onclick = function(){
		//Retrieve class name list for each object
		triggerClasses = trigger.className;
		targetClasses = target.className;

		if(hasClass(trigger, 'active')){

			//Remove active state from both elements
			trigger.setAttribute("class", triggerClasses).replace('active',triggerClasses);
			target.setAttribute("class", targetClasses).replace('active',targetClasses);
		}
		else{
			//Add active to existing class list
			trigger.setAttribute("class", " active " + triggerClasses);
			target.setAttribute("class", " active " + targetClasses);
		}
	};
}