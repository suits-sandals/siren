# Table of Contents for the CSS/SASS Directory #
## As of Siren 3.4 ##
This Table of Contents goes through top level files first and then the files, .scss snippets, in the different subdirectories grouped by subdirectory.

### FILES ###
Collection files

1.  style.scss
	- Contains all of the CSS sent to browsers
	- Seperates basic and enhanced style with a "only all" media querie
	- Developed responsively and mobile-first
	- Collects snippet files
3. ie8.scss
	- Served to IE8
	- Additional styles and fixes for ie8


### DIRECTORIES ###
The directories in the CSS/SCSS folder and notes.

1. BASE-ENHANCED
	- Contains SCSS snippets referring to universal selectors in the enhanced experience for the project
2. BASIC
	- Contains SCSS snippets for the basic experience including a variant on the Normalize reset
3. LAYOUT
	- Contains all snippets pertaining to layout rules
4. MISC
	- Contains snippets that don't fit elsewhere the _print.scss snippet
5. MIXINS
	- Contains snippets for mixins
6. OBJECTS
	- Contains highlevel CSS objects seperated into snippets based on purpose
7. RESPONSIVE
	- Contains snippets related to the responsive design of the site
	- Everything is mobile first
8. VARIABLES
	- Contains snippets relating to Global variables for the project


### FILES BY SUBDIRECTORIES ###
This list, more than others, should be updated often throughout the project.

#### VARIABLES ####
1. _variables.scss
	- Contains Variables for colors used throughout the project
	- Contains extendable classes for fonts used throughout the project

#### MIXINS ####
1. _mixins.scss
	- Contains mixins that represent common CSS patterns

#### BASIC ####
1. _foundation.scss
	- Contains a variant on the Normalize reset and the basic styles for the project
	- Contains SAFE styles only
2. _forms.scss
	- Contains SAFE styles for forms
3. _safe-custom.scss
	- Contains custom styles that appear in the Basic experience

#### BASE-ENHANCED ####
1. _foundation.scss
	- Styling for element selectors
2. _form.scss
	- Extends the style rules for Form elements for the enhanced experience


#### LAYOUT ####
1. _grid.scss
	- Contains the basic horrizontal grid rules for the project and related classes
2. _helpers.scss
	- Helper classes that effect spacing and alignment

#### OBJECTS ####
1. _headerfooter.scss
	- Contain the style rules for the Header and Footer sections of the project

#### RESPONSIVE ####
1. _foundation.scss
	- Responsive rules that affect the foundation styles
2. _layout.scss
	- Responsive rules for layout
3. _headerfooter.scss
	- Contains min-width media queries contolling the style rules for the header and footer areas on larger browser sizes

#### MISC ####
1. _print.scss
	- Contains the print style rules

