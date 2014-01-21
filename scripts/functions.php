<?php
//Siren Framework v2.0
//File Name: Core PHP Functions
//File Purpose: Holds Important PHP Functions
/*File Notes: 
Functions Included:
- Picturefill Markup Creator
 */


/*
pictureFill
Creates the markup for picture fill
Param {string} $basename The base name of the file with directory structure
Param {string} $ext The file extension ex. 'php' or 'jpg'
Param {string} $alt The alt text
Param {array} $sizes An associative array with size name and pixel widths (Images must exist for these size names)
Notes: Sizes should include a Middle which is default for ie8 and a small which is NOSCRIPT fallback, larger isn't necesary
*/
function pictureFill($basename, $ext, $alt, $sizes){
	echo '<span data-picture data-alt="'.$alt.'">';
		foreach($sizes as $name => $size){
			//Small should be the default fall back
			if($name == 'small'){
				echo '<span data-src="'.$basename.'-small.'.$ext.'"></span>';
			}
			else{
				echo '<span data-src="'.$basename.'-'.$name.'.'.$ext.'" data-media="(min-width:'.$size.')"></span>';
			}	
		}

		echo '<!--[if (lt IE 9) & (!IEMobile)]>'
          		.'<span data-src="'.$basename.'-medium.'.$ext.'"></span>'
           	.'<![endif]-->';

        echo '<noscript>'
	       		.'<img src="'.$basename.'-small.'.$ext.'" alt="'.$alt.'">'
	   		.'</noscript>';

	echo '</span>';
}



?>