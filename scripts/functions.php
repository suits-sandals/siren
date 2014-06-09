<?php
//Siren Framework v2.0
//File Name: Core PHP Functions
//File Purpose: Holds Important PHP Functions
/*File Notes: 
Functions Included:
- Picturefill Markup Creator
 */


/*
currentPage
Adds a current class to the top navigation
Param {string} $linkname
Param {string} $pagename
*/
function currentPage($linkname, $pagename){
	if($linkname == $pagename){
		echo 'current';
	}
}

?>