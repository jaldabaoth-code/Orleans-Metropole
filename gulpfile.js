const { src, dest, watch, series, parallel } = require('gulp');

// Récupération des dépendances
const gulp = require("gulp")
const sass = require('gulp-sass')(require('sass'));
const uglify = require('gulp-uglify');
const plumber = require("gulp-plumber")
const sourcemaps = require('gulp-sourcemaps')
const bs = require("browser-sync").create()
const concat = require('gulp-concat');
const postcss = require('gulp-postcss');
const rename = require("gulp-rename");
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const cssbeautify = require('gulp-cssbeautify');
var replace = require('gulp-replace');

// File paths
const files = {
    scssPath: 'assets/sources/scss/**/*.scss',
    jsPath: 'assets/sources/js/**/*.js'
}

function scssTask(){
    return src(files.scssPath)
        .pipe(sourcemaps.init()) // initialize sourcemaps first
        .pipe(sass()) // compile SCSS to CSS
        .pipe(cssbeautify())
        .pipe(dest('assets/dist/css'))
        .pipe(postcss([ autoprefixer(), cssnano() ])) // PostCSS plugins
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(sourcemaps.write('.')) // write sourcemaps file in current directory
        .pipe(dest('assets/dist/css'))
	; // put final CSS in dist folder
}

function jsTask(){
    return src(files.jsPath)
        .pipe(concat('all.js'))
        .pipe(uglify())
		.pipe(dest('assets/dist/js'))
  }

  gulp.task('js', function() {
    gulp.src([
            'sources/js/*.js'
        ])
        .pipe(uglify())
        .pipe(concat('all.js'))
        .pipe(gulp.dest('assets/dist/js'));
});

function reload(done) {
    bs.reload();
    done();
}

function serve(done) {
    bs.init({
        //proxy: "http://dev.ca-tdb.com/", // Pensez à mettre votre URL ici
        ghostMode: false,
        open: false,
        notify: false
    })
    done();
}

// Cachebust
function cacheBustTask(){
    var cbString = new Date().getTime();
    return src(['index.php'])
        .pipe(replace(/cb=\d+/g, 'cb=' + cbString))
        .pipe(dest('.'));
}

// Watch task: watch SCSS and JS files for changes
// If any change, run scss and js tasks simultaneously
function watchTask(){
    watch([files.scssPath, files.jsPath],
        {interval: 1000, usePolling: true}, //Makes docker work
        series(
            parallel(scssTask, jsTask),
            reload,
            cacheBustTask
        )
    );
}

// Export the default Gulp task so it can be run
// Runs the scss and js tasks simultaneously
// then runs cacheBust, then watch task
exports.default = series(
    parallel(scssTask, jsTask),
    serve,
    cacheBustTask,
    watchTask
);
