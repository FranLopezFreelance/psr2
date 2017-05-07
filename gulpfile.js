var gulp = require('gulp');
var minifyCSS = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var less = require('gulp-less');
var concat = require('gulp-concat');
var rename = require("gulp-rename");
var uglify = require("gulp-uglify");
var browserSync = require('browser-sync');

var path = {
    src: "node_modules/",
    js: "site/scripts/"
}

var config = {
    ngsrc: [
    ],
    scripts:[
      'site/scripts/pages/home.js'
    ]
}

gulp.task("scripts", function () {
    return gulp.src(config.scripts)
     .pipe(concat("pages.js"))
     .pipe(gulp.dest("./dist/js/"))
     .pipe(rename("pages.min.js"))
     .pipe(uglify())
     .pipe(gulp.dest("./dist/js/"))
});

gulp.task("html", function () {
    return gulp.src('site/html/**/*.html')
     .pipe(gulp.dest("./dist/html/"))
});

gulp.task('styles', function() {
    gulp.src(['resources/assets/less/front/main.less'])
        .pipe(less())
        .pipe(autoprefixer('last 1 version'))
        .pipe(concat('thestyle.css'))
        .pipe(gulp.dest('./public/css/front/'))
        .pipe(minifyCSS())
        .pipe(rename("thestyle.min.css"))
        .pipe(gulp.dest('./public/css/front'))
        .pipe(browserSync.reload({stream:true}));
})

gulp.task('encuesta-styles', function() {
    gulp.src(['resources/assets/less/front/encuesta.less'])
        .pipe(less())
        .pipe(autoprefixer('last 1 version'))
        .pipe(concat('encuesta.css'))
        .pipe(gulp.dest('./public/css/front/'))
        .pipe(minifyCSS())
        .pipe(rename("encuesta.min.css"))
        .pipe(gulp.dest('./public/css/front'))
        .pipe(browserSync.reload({stream:true}));
})

gulp.task('browser-sync', function(){
    browserSync({
         proxy: "http://localhost:8000",
         /*port: 8000*/
    });
});
gulp.task('bs-reload', function (){
    browserSync.reload();
});

gulp.task('default', ['browser-sync'], function () {
  //  gulp.run('styles');
    //gulp.run('html');


    gulp.watch('resources/assets/less/front/*.less',['styles','encuesta-styles']);
    gulp.watch('resources/views/**/*.php',['bs-reload']);
    //gulp.watch('site/scripts/**/*.js',['scripts','bs-reload']);
});
