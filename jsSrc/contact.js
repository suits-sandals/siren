/**
* This file contains core functions used in the Siren Framework
* @module Contact-Page
*/


/**
Functionality checks for cross Browser
@class browserTest
@static
*/

/**
Checks if browser has HTML5 form validation
@method hasFormValidation
@return boolean
*/
function hasFormValidation() {

    return (typeof document.createElement( 'input' ).checkValidity == 'function');

}

/**
Methods related to manipulating classes in the HTML
@class formValidation
@static
*/

/**
@method FormValidator
@requires Validate.js and hasFormValidation
@return boolean
*/
if( !hasFormValidation() ) {
	var validator = new FormValidator('example_form', [{
		name: 'input_name',
		display: 'Name',    
		rules: 'required'
	}, {
		name: 'input_email',
		display: 'Email',
		rules: 'valid_email|required'
	}]);
}