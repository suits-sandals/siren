module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    //Watching Functionality
    watch: {
      options: {
        livereload: 35729,
      },
      scripts: {
        files: ['js/*.js'],
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
        file: ['images/*.{png,jpg,gif}', 'imagesSrc/*.{png,jpg,gif}'],
        tasks: ['imagemin'],
        options: {
          spawn: false,
        }
      }
    },

    //Uglify for JS
    uglify: {
      build: {
       // src: ['js/libs/jquery.js', 'js/functions.js' 'js/global.js'], //When jQuery is needed
       src: ['js/functions.js', 'js/global.js'], //When jQuery is not needed
        dest: 'js/build/global.min.js' //Output
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

    //JS Hinting
    jshint: {
      all: ['Gruntfile.js', 'js/*.js', 'js/**/*.js']
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
                outdir: 'docs/'
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
  grunt.registerTask('default', ['uglify', 'compass', 'jshint','imagemin']);

};