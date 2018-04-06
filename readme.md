# Siren Framework #

## Introduction ##
Siren is the name given to a series of project scaffolding frameworks developed by the Suits & Sandals team. The goal of each is to provide a base for your project including directory structure, sample files, a Gulp file, and examples of performance, accessibility, and responsive design techniques.

Siren is constantly evolving. As workflow, methodologies, or technologies shift for the Suits & Sandals team, Siren should shift with them.

### This Versions ###
The prototypical version of Siren features the core directory structure, sample styles and scripts, Gulpfile, and accessibility and performance techniques used across the Siren frameworks. The markup files in this version are written in PHP; they can easily be compiled into HTML in your environment and placed on the server as static HTML files.

This version is best suited for static website creation.

## Key Aspects ##

The key aspects of the Siren framework focus are easy project starts, progressive enhancement, responsive design, performance, and accessibility. These aspects are displayed through sample files and directories for CSS/SCSS, Javascript, markup, and the Gulp task runner.

### 6.4.1 Getting Up and Running Quickly ###
The core concern of Siren is to give developers a way to start a variety of types of projects quickly. For that reason each framework will likely have more in it than is needed for your tasks. It is advised to remove unneeded aspects from the code base as they become apparent.

#### 6.4.1.1 CSS/SCSS ####
All Siren frameworks utilize the SCSS version of SASS; which is itself a preprocessor for CSS. 

The css directory contains a folder scss, where the SCSS files live.

The scss directory is broken up into several directories, separated by concerns, which house individual snippet files, which are further separated by concern. These snippet files are referenced in the style.scss, which is compiled into the style.css. A variables/_variables.scss stores all of the variables for the project.


There are several files precreated with examples of object oriented CSS development using a BEM-like class naming convention. 

As your project grows, it is advised to create additional files in order to house styles with separate concerns than the examples provided.

It is also advised to remove any code and files that are unneeded.

#### 6.4.1.2 Javascript ####
All Siren frameworks come prepared with example files and directories for a variety of Javascript development purposes.

The js directory contains four folders:

jsSrc : containing example files and libraries for non-Preact Javascript development
jsSrcPreactEx : is an example project for the creation of widgets utilizing the Preact variant of React
loading : contains scripts related to progressive enhancement techniques
polyfills : contains script files for various polyfills

The contents of the first two directories are most relevant to Javascript development. They each contain project examples and a few suggested libraries. These should be edited, removed, or added to as needed.

Files in jsSrc are directly compiled by Gulp and use the jsImport plugin to concatenate additional scripts.

Files in jsSrcPreactEx are compiled by Webpack and Babel through Grunt. These files should follow ES6 conventions.

#### 6.4.1.3 Templates ####
Each version of Siren comes prepared with several example templates.

#### 6.4.1.4 Gulp ####
Each version of Siren comes prepared with a Gulpfile which should be read, understood, and adjusted as needed.

### 6.4.2 Progressive Enhancement ###
Siren utilizes Cut the Mustard tests in serving Styles and Scripts in order to intentionally give the user only what their browser/device can handle.

#### 6.4.2.1 CSS/SCSS ####
Within the Stylesheet we perform a “cut the mustard” using the simple media query @media only all. The goal with progressive enhancement with CSS is not to prevent the loaded of “enhanced” styles but simply to not impede the experience of a user using a browser or device that cannot handle certain styles. Media queries happen to be a great test for this and are thus used in this way.

All browsers should be delivered the “safe styles” outside of a media query. These safe styles lay the base for the site’s brand and for spacing of elements. You can view this as the foundation for the rest of your styles.

Property rules and techniques that should not be used in your safe styles include:

- CSS3 properties
- Width and height
- All Position properties
- Display
- Light text on dark backgrounds
- Float
- Flexbox
- Overflow

All other properties may be used. 

The key is to focus on typography and spacing. Make the content look good and apply a base for the rest of the styles.

It is advised that you comment out all non-safe styles while working on the safe styles.

#### 6.4.2.2 Javascript ####
To test for basic Javascript stability we test for test for document.querySelectorAll. If this passes we load the javascript with loadJS.

If stronger support is needed you may adjust this.

### 6.4.3 Performance ###
In general, performance must be one of your top priorities. Keep pages as light as possible, optimize all images, and use advanced performance techniques wherever possible.

#### 6.4.3.1 Asynchronous Loading of Media ####
Siren comes with examples of asynchronously load all multimedia assets location “below the fold” using Alexander Farkas’ Lazysizes loader to accomplish this. 

#### 6.4.3.2 Asynchronous Loading Scripts ####
After the global script, which includes the Lazysizes extension Unveilhooks , use that format for asynchronously loading additional scripts. 

### 6.4.4 Responsive Design ###
All websites created by the Suits & Sandals team must be responsive with a mobile first approach. All versions of Siren reflect this.

#### 6.4.4.1 CSS/SCSS ####
All styles must be developed and applied in a mobile first approach. This is reflected in the example files.

For this approach, your media queries should prioritize min-width rules.

Including safe styles, the cascade of your style sheets and your development process should be as follows:

- Safe Styles for Type Selectors
- Safe Styles for Classes
- Enhanced Styles for Type Selectors
- Enhanced Styled for Classes
- Media Queries
- Print Styles 

#### 6.4.4.2 Responsive Images ####
Examples of responsive image techniques can be found in the sample templates. Use responsive image techniques in all cases unless the image is less than 600 pixels wide and tall.

Use the srcset attribute with image tags when art direction isn’t necessary.

Use the picture element, with fallbacks, when art direction is necessary.

#### 6.4.4.2 Javascript ####
The file global.js features an example of only applying handlers when certain browser conditions have been met. In general, this is a good approach for applying features only when needed.

### 6.4.5 Accessibility ###
Siren templates come with a base for accessibility. This includes media fallbacks by default and an example of easy tab navigation.

Accessibility must be a major consideration for all projects.

You may refer to WebAIM for more information.
