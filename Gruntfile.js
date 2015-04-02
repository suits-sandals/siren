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
        tasks: ['jshint', 'uglify', 'yuidoc'],
        options: {
          spawn: false
        }
      },
      scss: {
        files: ['css/sass/*.scss','css/sass/*/*.scss'],
       tasks: ['compass', 'combine_mq', 'criticalcss', 'cssmin'],
        options: {
          spawn: false,
        }
      },
      images: {
        files: ['images/imagesSrc/*.{png,jpg,gif}'],
        tasks: ['imagemin'],
        options: {
          spawn: false,
        }
      }

    },

     //JS Hinting
    jshint: {
      all: ['Gruntfile.js', 'js/jsSrc/global.js', 'js/jsSrc/contact.js']
    },

    //Uglify for JS
    uglify: {
      dist:{
        files:{
          'js/global.min.js' : ['js/jsSrc/libs/jquery.js', 'js/jsSrc/polyfills/respimage.js', 'js/jsSrc/plugins/lazysizes.js', 'js/jsSrc/global.js'],
          'js/contact.min.js' : ['js/jsSrc/libs/jquery.js', 'js/jsSrc/polyfills/respimage.js', 'js/jsSrc/plugins/lazysizes.js', 'js/jsSrc/global.js', 'js/jsSrc/contact.js'],
          'js/loadcss.js' : ['js/jsSrc/loading/cookie.js', 'js/jsSrc/loading/loadcss.js'],
          'js/loadjs.js' : 'js/jsSrc/loading/loadjs.js'

        }
      }
    },

    //Compass for SCSS
    compass: {                 
      dist: { 
        options: {    
          config: 'config.rb',       
          sassDir: 'css/sass',
          cssDir: 'css',
          environment: 'development'
        }
      }
    },

    //Critical CSS
    criticalcss: {

      //Set up a critical CSS file for each major template type

      //Generic
      generic: {
        options: {
          url: "http://localhost:8888/siren/",
          outputfile: "css/critical/raw/critical-generic.css",
          filename: "css/style.css"
        }
      }

    },

    //CSS Min
    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'css/critical/raw',
          src: ['*.css'],
          dest: 'css/critical'
        }]
      }
    },

    //Combine Media Queries
    combine_mq: {
      options: {
        beautify: false
      },
      main: {
        src: 'css/style.css',
        dest: 'css/style.css'
      }
    },

    //Image Optimization
    imagemin: {  
      standard: {                  
        files: [{
          expand: true,    
          src: ['**/*.{png,jpg,gif}'],
          cwd: 'images/imagesSrc',
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
                paths: ['js/jsSrc/'],
                outdir: 'docs/docs-js/'
            }
        }
    },

    //Generates a Cache Manifest
    manifest: {
      generate: {
        options: {
          basePath: '',
          //cache: ['js/*', 'css/style.css', 'images/*'],
          //network: ['http://*', 'https://*'],
          //exclude: ['js/polyfills/*', 'js/jsSrc/*'],
          //preferOnline: true,
          verbose: true,
          timestamp: false,
          hash: true
          //master: ['index.html']
          /*process: function(path) {
            return path.substring('build/'.length);
          }*/
        },
        src: [
          'js/*.min.js',
            'css/style.css',
            'images/*.{png,jpg,gif}'
        ],
        dest: 'manifest.appcache'
      }
    },

    //Performance Budget Test
    //The Options are only an example and should be changed depending on the project and performance budget
    //Waiting for API key
   perfbudget: {
      desktop: {
        options: {
          url: 'http://suits-sandals.com/work',
          key: '871a57d18e0e43f8b3c56aa2ed272d27',
          location : 'Dulles:Chrome',
          budget: {
            visualComplete: '2000',
            SpeedIndex: '1500',
            bytesIn: 320000
          }
        }
      },
      mobile: {
        options: {
          url: 'http://suits-sandals.com/work',
          key: '871a57d18e0e43f8b3c56aa2ed272d27',
          location : 'Dulles_MotoG:Motorola G - Chrome',
          budget: {
            visualComplete: '9000',
            SpeedIndex: '8000',
            bytesIn: 384000
          }
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
  grunt.loadNpmTasks('grunt-perfbudget'); //Performance Budget Test
  grunt.loadNpmTasks('grunt-criticalcss'); //Critical CSS
  grunt.loadNpmTasks('grunt-contrib-cssmin'); //CSS Minification
  grunt.loadNpmTasks('grunt-combine-mq'); //Combine Media Queries
  grunt.loadNpmTasks('grunt-manifest'); //Cache Manifest 

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'compass', 'combine_mq', 'jshint','imagemin', 'yuidoc', 'criticalcss', 'manifest']);

};