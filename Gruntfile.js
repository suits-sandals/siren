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
      all: ['Gruntfile.js', 'js/jsSrc/functions.js', 'js/jsSrc/global.js']
    },

    //Uglify for JS
    uglify: {
      dist:{
        files:{
          'js/global.min.js' : ['js/jsSrc/libs/jquery.js', 'js/jsSrc/polyfills/respimage.js', 'js/jsSrc/plugins/lazysizes.js', 'js/jsSrc/global.js'],
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

      //Home
      homePage: {
        options: {
          url: "http://localhost:8888/siren-wordpress/",
          outputfile: "css/critical/raw/critical-home.css",
          filename: "style.css"
        }
      },

      //Archives - index, taxonomies, archives, etc.
      archives: {
        options: {
          url: "http://localhost:8888/siren-wordpress/news/",
          outputfile: "css/critical/raw/critical-archives.css",
          filename: "style.css"
        }
      },

      //Post
      post: {
        options: {
          url: "http://localhost:8888/siren-wordpress/news/",
          outputfile: "css/critical/raw/critical-post.css",
          filename: "style.css"
        }
      },

      //Page
      page: {
        options: {
          url: "http://localhost:8888/siren-wordpress/store/",
          outputfile: "css/critical/raw/critical-page.css",
          filename: "style.css"
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
        src: 'style.css',
        dest: 'style.css'
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

    //Browser Syncing
    browserSync: {
      dev: {
          bsFiles: {
              src : 'style.css'
          },
          options: {
              watchTask: true,
             proxy: "localhost:8888"
          }
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
    }

    
  });

  // Load up pluggins
  grunt.loadNpmTasks('grunt-contrib-watch'); //Update watcher
  grunt.loadNpmTasks('grunt-contrib-uglify'); //Uglify JS
  grunt.loadNpmTasks('grunt-contrib-compass'); //Compress Compass
  grunt.loadNpmTasks('grunt-contrib-jshint'); //JS Hint
  grunt.loadNpmTasks('grunt-contrib-imagemin'); //Image Optimization
  grunt.loadNpmTasks("grunt-contrib-yuidoc"); //JS Documentation
  grunt.loadNpmTasks('grunt-criticalcss'); //Critical CSS
  grunt.loadNpmTasks('grunt-contrib-cssmin'); //CSS Minification
  grunt.loadNpmTasks('grunt-combine-mq'); //Combine Media Queries
  grunt.loadNpmTasks('grunt-browser-sync'); //Browser syncing

  // Default task(s).
  grunt.registerTask('default', ['uglify', 'compass', 'combine_mq', 'jshint','imagemin', 'yuidoc', 'criticalcss']);

};