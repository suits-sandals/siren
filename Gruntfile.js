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
        tasks: ['uglify'],
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
      }
    },

    //Uglify for JS
    uglify: {
      build: {
        src: ['js/libs/*.js', 'js/script.js'], //Input
        dest: 'js/build/script.min.js' //Output
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
    }

    
  });

  // Load up pluggins
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-compass');

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'compass', 'watch']);

};