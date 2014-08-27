var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var watch = require('gulp-watch');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var utils = require('gulp-util');

gulp.task('sass', function(){
    gulp.src('../app/assets/sass/parsian.scss')
    .pipe(sass().on('error', utils.log))
    .pipe(autoprefixer('last 10 version'))
    .pipe(gulp.dest('../public/parsian/css'))
});

gulp.task('concatFormValidators',function(){

        gulp.src('../app/assets/javascript/**/*.js')
            .pipe(concat('parsian.js'))
            .pipe(gulp.dest('../public/parsian/js/'))

});

gulp.task('uglify', function() {
    gulp.src('../public/parsian/js/parsian.js')
        .pipe(uglify('parsian.min.js').on('error', utils.log))
        .pipe(gulp.dest('../public/parsian/js/'))
});

gulp.task('watch',function(){
    gulp.watch('../app/assets/sass/**/*.scss',['sass']);
    gulp.watch('../app/assets/javascript/**/*.js',['concatFormValidators']);
    gulp.watch('../public/parsian/js/*.js',['uglify']);

});

gulp.task('default',['watch']);