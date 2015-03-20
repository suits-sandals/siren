# Table of Contents for the CSS/SASS Directory #
## As of Siren Wordpress Theme 3.5 ##
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
2. BASE-BASIC
	- Contains SCSS snippets for the basic experience including a variant on the Normalize reset
3. HELPERS
	- Contains snippets that contain helper and utility classes
3. LAYOUT-BASIC
	- Contains snippets pertaining to layout rules that are safe for all contexts including spacing
4. LAYOUT-BENHANCED
	- Contains snippets pertaining to layout rules that are enhanced including grids and positioning
5. MISC
	- Contains snippets that don't fit elsewhere the _print.scss snippet
6. MIXINS
	- Contains snippets for mixins
7. OBJECTS-BASIC
	- Contains highlevel CSS objects seperated into snippets based on purpose that are safe for all contexts
8. OBJECTS-ENHANCED
	- Contains highlevel CSS objects seperated into snippets based on purpose that are enhanced
9. RESPONSIVE-CORE
	- Contains snippets related to the responsive design of the foundation and layout
	- Everything is mobile first
10. RESPONSIVE-OBJECT
	- Contains snippets related to the responsive design of objects
	- Everything is mobile first
11. STATES
	- Contains snippets related to state transitions
12. VARIABLES
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

#### BASE-BASIC ####
1. _foundation.scss
	- Contains a variant on the Normalize reset and the basic styles for the project
	- Contains SAFE styles only
2. _forms.scss
	- Contains SAFE styles for forms

#### BASE-ENHANCED ####
1. _foundation.scss
	- Styling for element selectors
2. _form.scss
	- Extends the style rules for Form elements for the enhanced experience

#### LAYOUT-BASIC ####
1.  _spacing.scss
	- Classes that affect the spacing of objects

#### LAYOUT-ENHANCED ####
1. _grid.scss
	- Contains the basic horrizontal grid rules for the project and related classes
2. _spacing.scss
	- Classes that affect the spacing of objects
3. _positioning.scss
	- Classes that affect the positioning of objects

#### OBJECTS-BASIC ####
1. _headerfooter.scss
	- Contain the style rules for the Header and Footer sections of the project

#### OBJECTS-ENHANCED ####
1. _headerfooter.scss
	- Contain the style rules for the Header and Footer sections of the project

#### RESPONSIVE-CORE ####
1. _foundation.scss
	- Responsive rules that affect the foundation styles
2. _layout.scss
	- Responsive rules for layout

#### RESPONSIVE-OBJECTS ####
1. _headerfooter.scss
	- Contains min-width media queries contolling the style rules for the header and footer areas on larger browser sizes

#### HELPERS ####
1. _typographic.scss
	- Utility classes for typographic styles

#### STATES ####
1. _state.scss
	- Classes that control or reflect the states of objects

#### MISC ####
1. _print.scss
	- Contains the print style rules

