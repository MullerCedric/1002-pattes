/* La Maison du 1002 pattes
 * /gulpfile.js - Gulp tasks
 * coded by MullerCedric
 */

var gulp = require("gulp"),
    image = require("gulp-image"),
    sass = require("gulp-sass"),
    autoprefixer = require("gulp-autoprefixer"),
    csso = require("gulp-csso"),
    babel = require("gulp-babel"),
    sourcemaps = require("gulp-sourcemaps");

// --- Task for images
gulp.task("images", function () {
    gulp.src("src/images/**")
        .pipe(image())
        .pipe(gulp.dest("assets/images"));
});

// --- Task for styles
gulp.task("css", function () {
    gulp.src("src/sass/**/*.scss")
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: ['node_modules/avalanche-css/']
        }))
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(csso())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest("assets/css"));
});

// --- Task for js
gulp.task("js", function () {
    gulp.src("src/js/**/*.js")
        .pipe(sourcemaps.init())
        .pipe(babel())
        .on("error", function (oError) {
            console.error(oError);
            this.emit("end");
        })
        .pipe(sourcemaps.write())
        .pipe(gulp.dest("assets/js"));
});


// --- Watch tasks
gulp.task("watch", function () {
    gulp.watch("src/images/**", ["images"]);
    gulp.watch("src/sass/**/*.scss", ["css"]);
    gulp.watch("src/js/**/*.js", ["js"]);
});

// --- Aliases
gulp.task("default", ["images", "css", "js"]);
gulp.task("work", ["default", "watch"]);
