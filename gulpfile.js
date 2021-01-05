
/**
 * Include Gulp & tools to use
 */
var gulp = require('gulp');
var php = require('gulp-connect-php');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();
const sourcemaps = require('gulp-sourcemaps');
var reload = browserSync.reload;

/**
 * configs
 */
var config = {
  scssSrc: './assets/scss/*.scss',
  scssDest: './assets/css'
};

/**
 * compile sass for development
 */
gulp.task("sass", function() {
  return gulp
    .src(config.scssSrc)
    .pipe(sass({
      errLogToConsole: true,
      outputStyle: 'expanded'
    }).on("error", sass.logError))
    .pipe(gulp.dest(config.scssDest))
    .pipe(browserSync.stream({ match: "**/*.css" }));
});

/**
 * compile sass for deployment
 */
gulp.task("default", function() {
  return gulp
    .src(config.scssSrc)
    .pipe(sass({
      outputStyle: 'compressed'
    }).on("error", sass.logError))
    .pipe(gulp.dest(config.scssDest));
});

/**
 * watch task with browser reload
 */
gulp.task("watch", function() {
  php.server({
    base:'./',
    port: "8080",
    keepalive:true
  });

  browserSync.init({
    proxy: "localhost:8080",
    baseDir: "./",
    injectChanges: true,
    notify: false
  });

  gulp.watch(["./assets/scss/**/*.scss"], gulp.series('sass')).on("change", browserSync.reload);
  gulp.watch(["./assets/js/**/*.js"]).on("change", browserSync.reload);
  gulp.watch(["./**/*.php"]).on("change", browserSync.reload);
});

/**
 * watch dev task, compiles sass first before watch task is run
 */
gulp.task('dev', gulp.series('sass', 'watch'));
