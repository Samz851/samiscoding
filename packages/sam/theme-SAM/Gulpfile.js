var gulp = require("gulp");
var uglify = require('gulp-uglify')
var concat = require("gulp-concat");
var notify = require("gulp-notify");
var sourcemaps = require("gulp-sourcemaps");
const terser = require('gulp-terser');
let cleanCSS = require('gulp-clean-css');


var composer = require('gulp-uglify/composer');
// var minify = composer(uglifyes, console);

gulp.task("base-js", function(){
    return gulp
      .src(["js/*.js"])
      .pipe(sourcemaps.init())
      .pipe(uglify())
      .pipe(sourcemaps.write())
      .pipe(gulp.dest("js/minified/"))
      .pipe(notify({ message: "Modules js files successfully concated and reduced" }));
})
gulp.task("base-css", function(){
    return gulp
      .src(["css/*.css"])
      .pipe(sourcemaps.init())
      .pipe(cleanCSS())
      .pipe(sourcemaps.write())
      .pipe(gulp.dest("css/minified/"))
      .pipe(notify({ message: "App css files successfully concated and reduced" }));
})

gulp.task("build", gulp.series("base-js", "base-css"));