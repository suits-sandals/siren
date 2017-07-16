var gulp = require('gulp'),
  jshint = require('gulp-jshint'),
  uglify = require('gulp-uglify'),
  sass = require('gulp-sass'),
  postcss = require('gulp-postcss'),
  autoprefixer = require('autoprefixer'),
  cssmqpacker = require('css-mqpacker'),
  cssnano = require('cssnano'),
  rename = require('gulp-rename'),
  webpack = require('webpack'),
  webpackStream = require('webpack-stream');

/* CSS Build Steps */

gulp.task('build-css', function() {
  var plugins = [
    autoprefixer({ browsers: 'last 4 versions' }),
    //cssmqpacker({sort: true}),
    cssnano()
  ];

  return gulp
    .src('css/scss/*.scss')
    .pipe(sass({ outputStyle: 'expanded' }))
    .on('error', sass.logError)
    .pipe(postcss(plugins))
    .pipe(gulp.dest('css'));
});

/* JS Build Steps */

gulp.task('build-js', function() {
  return gulp
    .src('js/jsSrc/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'))
    .pipe(uglify())
    .pipe(
      rename(function(path) {
        path.basename += '.min';
      })
    )
    .pipe(gulp.dest('js'));
});

/* Preact Build */

gulp.task('build-preact', function(callback) {
  return gulp
    .src('js/jsSrcPreactEx/index.js')
    .pipe(webpackStream(require('./webpack.config.js'), webpack))
    .pipe(gulp.dest('js'));
});

/* Watching */

gulp.task('watch', function() {
  gulp.watch('js/jsSrc/*.js', ['build-js']);
  gulp.watch('js/jsSrc/**/*.js', ['build-js']);

  gulp.watch('js/jsSrcPreactEx/*.js', ['build-preact']);
  gulp.watch('js/jsSrcPreactEx/**/*.jsx', ['build-preact']);

  gulp.watch('css/scss/*.scss', ['build-css']);
  gulp.watch('css/scss/**/*.scss', ['build-css']);
});

/* Default Task */

gulp.task('default', ['watch']);
