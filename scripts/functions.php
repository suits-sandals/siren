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


/*
printImage
Generates an image. Origin: https://github.com/laras126/starter-kit
Param {string} $path
Param {string} $alt
Param {string} $containerClasses
*/
function printImage($path, $alt, $containerClasses) { 
		echo '<div class="'. $containerClasses .'">';
			echo '<img src="' . $path .'" alt="' . $alt .'">';
		echo '</div>';
}


/*
printImage
Generates an image gallery. Origin: https://github.com/laras126/starter-kit
Param {string} $dir
Param {string} $galleryName
Param {string} $galleryClasses
Param {string} $containerClasses
*/
function printGallery($dir, $galleryName, $galleryClasses, $containerClasses) {
	echo '<div class="gallery">';
		$fdir =  $dir . '/*';
		foreach(glob($fdir) as $img_path) {  
			$rT = explode( '.', end( explode ( '/', $img_path ) ) )[0]; //Make array out of path and get last part without file extension
			$rT = ucfirst( preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', ' ', $rT) ); //Replace symbols with spaces and capitalize
			$alt = "Image in " . $galleryName . ": " . $rT . ".";
			printImage($img_path, $alt, $containerClasses );
		}
		echo '</div>';
	}

?>