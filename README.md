sassysiren
==========

# Siren Framework # 
## Version 3.7 ##
by Zachary Brady
www.zacharybrady.com
www.suits-sandals.com


## About ##
Siren is the work horse quick start website framework for Suits & Sandals, LLC. It strives to provide simple building blocks in order to make starting a project quicker while maintaining best practices. Siren is designed to handle a variety of use cases and should be edited to perfectly fit the project at hand. Lastly, this is a living framework that is constantly updated as lessons are learned and discoveries are made.


## Dependencies ##
The following list are the dependencies built into Siren.

- PHP 5.0 +
- Grunt 0.4.3 +
	- Default plugins listed in TOC
- PostCSS 
- SCSS 3.3+ (Soon to settle on 3.4+)
- HTML5SHIV
- Respond.js
- Boxsizing Polyfill
- loadJS.js, loadCSS.js, and cookies.js by Filament Group ( https://github.com/filamentgroup )
- Lazysizes and related plugins by A. Farkas
- Git
	- Not so much a dependency as highly recomended


## Table of Contents ##
This index is for files and directories in the top level directory. Sub-directories have their own indexes where noted. Update this list and related lists throughout a project.

### Directories ###
1. CSS
	- Contains the CSS files, the SASS directory, and the POLYFILL directory
	- TOC included
2. DOCS
	- Contains the Javascript documentation in YUI format.
	- View in browser for best experience
3. IMAGES
	- Contains the images for the project and two sub-directories for storing the raw image files prior to Optimization and/or Responsive Image creation
	- IMAGESRESSRC : For images that will be used as a base for responsive image sets
	- IMAGESRC : For images that need to be optimized
4. INCLUDES
	- For PHP files containing markup snippets such as the header.php and footer.php files
	- TOC included
5. JS
	- Contains the project Javascript files. 
	- Seperated into Production and Development files.
	- TOC included
6. NODE_MODULES
	- Contains the Node Modules for Grunt and its plugins


### Files ###
1. index.php
	- Sample index file demoing markup and class conventions.
2. contact.php
	- Sample contact form.
3. result.php
	- Sample contact form handling and results page.
4. .htaccess
	- Sample .htaccess. Contains code for rewritting URLs to drop the ".php" extension and some simple cacheing. 
5. Gruntfile.js
	- The projects Gruntfile. By default the Gruntfile includes the plugins:
		- grunt-contrib-watch : For automating Grunt tasks during file changes.
        - grunt-contrib-uglify : For Uglifiing Javascript and concatenating files
        - grunt-contrib-compass : For running compass tasks and processing the SCSS
        - grunt-contrib-jshint : For checking for javascript errors
        - grunt-contrib-imagemin : For optimizing images
        - grunt-combine-mq : Used to combine like mediaqueries in the production style sheet.
        - grunt-contrib-cssmin : Used to minify the Critical CSS stylesheets
        - grunt-criticalcss : Determines the critical CSS for different templates and delivers style sheets with just the critical CSS to be inlined
        - grunt-contrib-yuidoc : For autogenerating Javascript documentation as formated in the comments
		- grunt-perfbudget : For running automated performance budget tests
		- grunt-manifest : For autocreating the .appcache manifest
6. config.rb 
	- The Compass configuration file.
	- Processed CSS is compressed by default but can be processed normally for debugging.
7. README.md
	- The Readme file you are currently reading.
8. changelog.md
	- The master changelog for Siren.
	- Full of Zack's ramblings. Notes have recently been stored in Evernote and linked to from this file.
9. LICENSE.txt
	- An MIT License
10. robots.txt
	- Edit as needed
11. package.json
	- The JSON file handling Node packages for Grunt
12. yuidoc.json
	- The JSON file configuring the YUI Javascript Documentation
13. favicon.ico


## Philosophy ##
Siren is an extension of its creator's, Zachary Brady, key philosophies in regards to the creation of websites and applications. The core tennants of this philosophy are:

- Performance: A great website MUST be optimized for speed and percieved performance.
- Accessibility: A great site MUST be accessible to all possible users regardless of physical or mental handicap, browser or device usage, or internet connection speed. 
- Progressive Enhancement: Advanced features should not be applied in a way that hinders the basic experience. Websites are a peanut M&M with Semantic HTML5 as the peanut, smartly applied CSS3 as the chocolate, and Javascript/enhanced features as the candy coating.
- Mobile First Responsible Responsive Design: All web projects must adhere smartly applied responsive design. The base must be the mobile experience with adjustments made through media queries as the browser expands
- Code Cleanliness: Code must be kept clean and logical. Documentation and coding logs must be created alongside the coding process and either kept within the project or linked to.
- Coding Must Be Fun: It just has to be or we'll get bored quickly and our code will suffer for it.


## Use and Contact Information ##
The Siren Framework is free to use in projects as allowed in its MIT license. Feel free to Fork, submit Issues, etc on Github.
You can reach Zachary at zachary@sasbranding.com for questions regarding the framework, for inqueries about services offered by Suits & Sandals, LLC. , or for job opportunities.


## Headline Format ##
The required headline for the top of SCSS snippets and Markup sections

- Siren Framework v3.7
- File Name: {file name}
- File Purpose: {file purpose}
- File Notes: {notes for file}