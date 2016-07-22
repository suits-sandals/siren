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
        files: ['js/jsSrc/*.js','js/jsSrc/*/*.js'],
        tasks: ['jshint', 'uglify'],
        options: {
          spawn: false
        }
      },
      scss: {
        files: ['css/scss/*.scss','css/scss/*/*.scss'],
        //tasks: ['sass', 'criticalcss', 'postcss' ],
        tasks: ['sass', 'postcss' ],
        options: {
          spawn: false,
        }
      }
    },

     //JS Hinting
    jshint: {
      all: ['Gruntfile.js', 'js/jsSrc/global.js']
    },

    //Uglify for JS
    uglify: {
      dist:{
        files:{
          'js/global.min.js' : ['js/jsSrc/polyfills/respimage.js', 'js/jsSrc/plugins/lazysizes.js', 'js/jsSrc/libs/shoestring.js', 'js/jsSrc/global.js']
        }
      }
    },

    //SASS
    sass: {                              
      dist: {                            
        options: {                   
          style: 'expanded',
          sourcemap: 'none'
        },
        files: {                        
          'css/style.css': 'css/scss/style.scss',       
          'css/ie8.css': 'css/scss/ie8.scss'
        }
      }
    },

    //Critical CSS
    criticalcss: {

      //Set up a critical CSS file for each major template type

      //Home
      homePage: {
        options: {
          url: "http://siren.dev/",
          outputfile: "css/critical/standard.css",
          filename: "css/style.css"
        }
      }

    },

    postcss: {
      options: {
        map: false, // inline sourcemaps

        processors: [
          require('autoprefixer')({browsers: 'last 4 versions'}),
          require('css-mqpacker')(),
          require('cssnano')()
        ]
      },
      dist: {
        files: [{
          src: ['css/*.css', 'css/**/*.css']
        }]
      }
    }

    
  });

  // Load up pluggins
  grunt.loadNpmTasks('grunt-contrib-watch'); //Update watcher
  grunt.loadNpmTasks('grunt-contrib-uglify'); //Uglify JS
  grunt.loadNpmTasks('grunt-contrib-jshint'); //JS Hint
  grunt.loadNpmTasks('grunt-criticalcss'); //Critical CSS
  grunt.loadNpmTasks('grunt-postcss'); //Post CSS
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Default task(s).
  grunt.registerTask('default', ['sass', 'criticalcss', 'postcss' ]);

};