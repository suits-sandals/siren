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
        files: ['jsstaging/*.js'],
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
        tasks: ['imagemin'],
        options: {
          spawn: false,
        }
      }
    },

     //JS Hinting
    jshint: {
      all: ['Gruntfile.js', 'jsstaging/functions.js', 'jsstaging/global.js']
    },

    //Uglify for JS
    uglify: {
      files:{
        'js/global.min.js' : ['jsstaging/functions.js', 'jsstaging/global.js'],
       // 'js/build/contact.min.js' : ['js/plugins/validate.js', 'js/contact.js']
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
          cwd: 'imagesSrc/',     
          src: ['**/*.{png,jpg,gif}'],  
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
  grunt.loadNpmTasks("grunt-contrib-yuidoc"); //JS Documentation

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'compass', 'jshint','imagemin', 'yuidoc']);

};