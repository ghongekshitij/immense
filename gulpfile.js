var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var pkg = require('./package.json');

// Copy third party libraries from /node_modules into /vendor
gulp.task('library', function() {
  // Bootstrap
   gulp.src([
       './library/node_modules/bootstrap/dist/**/*',
       '!./library/node_modules/bootstrap/dist/css/bootstrap-grid*',
       '!./library/node_modules/bootstrap/dist/css/bootstrap-reboot*'
     ])
     .pipe(gulp.dest('./library/bootstrap'))
     // jQuery
      gulp.src([
          './library/node_modules/jquery/dist/*',
          '!./library/node_modules/jquery/dist/core.js'
        ])
        .pipe(gulp.dest('./library/jquery'))

    })

    // Default task
    gulp.task('default', ['library']);
    // Configure the browserSync task
    gulp.task('browserSync', function() {
      browserSync.init({
        proxy:"http://localhost/immense_project/"

        // server: {
        //   baseDir: "./"
        // }
      });
    });

    // Dev task
    gulp.task('dev', ['browserSync'], function() {
      gulp.watch('./css/*.css', browserSync.reload);
      gulp.watch('./*.html', browserSync.reload);
      gulp.watch('./*.php',browserSync.reload);
    });



    /*
    const gulp = require('gulp');
    const uglify = require('gulp-uglify');
    const sass = require('gulp-sass');
    */
    /*
              ----  TOP LEVEL FUNCTION ------
              gulp.task - define tasks
              gulp.src -point to file to use
              gulp.dest -points to folder
              gulpwatch -watch files and folders for changes
    */
    //logs message
    /*
    gulp.task('message',function()
    {
      return console.log('gulp is running...');
    });
    gulp.task('copyHtml',function(){
      gulp.src('src/*.html').pipe(gulp.dest('dist'));
    });
    const imagemin=require('gulp-imagemin');
    gulp.task('imageMin',() => gulp.src('src/images/*').pipe(imagemin()).pipe(gulp.dest('dist/images')));
    gulp.task('minify',function(){
      gulp.src('src/js/*.js').pipe(uglify()).pipe(gulp.dest('dist/js'));
    });
    //compile SASS
    gulp.task('sass', function(){
      gulp.src('src/sass/*.scss')
      .pipe(sass().on('error',sass.logError))
      .pipe(gulp.dest('dist/css'));
    });
    gulp.task('default',['message','copyHtml','imageMin','minify','sass']);
    */
