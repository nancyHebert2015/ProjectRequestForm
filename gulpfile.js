var gulp = require('gulp'),
    gutil = require('gulp-util'),
    autoprefixer = require('gulp-autoprefixer'),
    cache = require('gulp-cache'),
    concat = require('gulp-concat'),
    imagemin = require('gulp-imagemin'),
    jshint = require('gulp-jshint'),
    less = require('gulp-less'),
    livereload = require('gulp-livereload'),
    minifycss = require('gulp-minify-css'),
    notify = require('gulp-notify'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),
    watch = require('gulp-watch'),
    phpunit = require('gulp-phpunit');


// Where do you store your less files?
var lessDir = 'public/less';

// Which directory should LESS compile to?
var targetCSSDir = 'public/css';

// Which directory should CoffeeScript compile to?
var targetJSDir = 'public/js';


// Paths variables
var paths = {  
    'dev': {
        'less': lessDir
    },
    'assets': {
        'css': targetCSSDir
    }

};


// What tasks does running gulp trigger?
gulp.task('default', ['css', 'main.css', 'phpunit', 'watch']);





// --- TASKS
// Keep an eye on less, Coffee, and PHP files for changes...
gulp.task('watch', function () {
  
gulp.watch(paths.dev.less+'/*.less', ['css']);
gulp.watch('./laravel/app/tests/*.php', ['phpunit']);

});


 
 
// CSS frontend minify less 
gulp.task('main.css', function() {  

  return gulp.src(paths.dev.less+'main.less') // get file
    .pipe(less())
    .pipe(gulp.dest(paths.assets.css)) // output: frontend.css
    .pipe(minifycss({keepSpecialComments:0}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(paths.assets.css)); // output: frontend.min.css
});





// Compile Less, autoprefix CSS3,
// and save to target CSS directory
// gulp.task('css', function () {
//     return gulp.src(lessDir + '/*.less')
//         .pipe(less({ style: 'compressed' }).on('error', gutil.log))
//         //.pipe(autoprefix('last 10 version'))
//         .pipe(gulp.dest(targetCSSDir))
//         .pipe(notify('CSS minified'))
// });




 
 // PHP unit
gulp.task('phpunit', function() {  
  var options = {debug: false, notify: false};
  return gulp.src('./laravel/app/tests/*.php')
    .pipe(phpunit('./laravel/vendor/bin/phpunit', options))
    // .pipe(phpunit())

    //both notify and notify.onError will take optional notifier: growlNotifier for windows notifications
    //if options.notify is true be sure to handle the error here or suffer the consequenses!
    .on('error', notify.onError({
      title: 'PHPUnit Failed',
      message: 'One or more tests failed, see the cli for details.'
    }))

        //will fire only if no error is caught
    .pipe(notify({
      title: 'PHPUnit Passed',
      message: 'All tests passed!'
    }));
});
 
 // Run all PHPUnit tests
//gulp.task('phpunit', function() {
//    exec('phpunit', function(error, stdout) {
//        sys.puts(stdout);
//    });
//});
