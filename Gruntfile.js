module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    //Watching Functionality
    watch: {
      options: {
        livereload: true,
      },
      scripts: {
        files: ['jsSrc/*.js','jsSrc/build/*.js'],
        tasks: ['jshint', 'uglify', 'yuidoc'],
        options: {
          spawn: false
        }
      },
      css: {
        files: ['sass/*.scss'],
       tasks: ['compass'],
        options: {
          spawn: false,
        }
      },
      images: {
        files: ['images/*.{png,jpg,gif}', 'imagesStaging/*.{png,jpg,gif}'],
        tasks: ['imagemin','responsive_images'],
        options: {
          spawn: false,
        }
      }
    },

     //JS Hinting
    jshint: {
      all: ['Gruntfile.js', 'jsSrc/functions.js', 'jsSrc/global.js', 'jsSrc/plugins/validate.js', 'jsSrc/contact.js']
    },

    //Uglify for JS
    uglify: {
      dist:{
        files:{
          'js/global.min.js' : ['jsSrc/polyfills/picturefill.js','jsSrc/functions.js', 'jsSrc/global.js'],
          'js/contact.min.js' : ['jsSrc/plugins/validate.js', 'jsSrc/contact.js']
        }
      }
    },

    //Compass for SCSS
    compass: {                 
      dist: { 
        options: {    
          config: 'config.rb',       
          sassDir: 'sass',
          cssDir: 'css',
          environment: 'development'
        }
      }
    },

   

    //Image Optimization
    imagemin: {  
      dynamic: {                  
        files: [{
          expand: true,    
          src: ['**/*.{png,jpg,gif}'],  
          cwd: 'imagesSrc/',
          dest: 'imagesSrc/'   
        }]
      }
    },

    //Create Images for Responsive Images
    //Configure size feature per project
    responsive_images: {
        dev: {
        sizes: [{
          name: 'small',
          width: 320
        },{
          name: 'medium',
          width: 640
        },{
          name: "large",
          width: 1024
        }],
        files: [{
          expand: true,
          src: ['**/*.{png,jpg,gif}'],  
          cwd: 'imagesSrc/',
          dest: 'images/'
        }]
      }
    },

    //Javascript documentation
    yuidoc: {
        all: {
            name: 'Siren Core',
            description: 'Change this on project start',
            version: '0',
            url: '',
            options: {
                paths: ['js/'],
                outdir: 'docs/docs-js/'
            }
        }
    }

    
  });

  // Load up pluggins
  grunt.loadNpmTasks('grunt-contrib-watch'); //Update watcher
  grunt.loadNpmTasks('grunt-contrib-uglify'); //Uglify JS
  grunt.loadNpmTasks('grunt-contrib-compass'); //Compress Compass
  grunt.loadNpmTasks('grunt-contrib-jshint'); //JS Hint
  grunt.loadNpmTasks('grunt-contrib-imagemin'); //Image Optimization
  grunt.loadNpmTasks('grunt-responsive-images'); //Responsive Image Creator; imageMagick should be installed on computer as well through homebrew
  grunt.loadNpmTasks("grunt-contrib-yuidoc"); //JS Documentation

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'compass', 'jshint','imagemin', 'responsive_images', 'yuidoc']);

};