var gulp       = require('gulp'),
	browser    = require('browser-sync'),
	plumber    = require('gulp-plumber'),
    notify     = require('gulp-notify'),
	babel      = require('gulp-babel'),
    watch      = require('gulp-watch'),
	sourcemaps = require('gulp-sourcemaps'),
	config     = require('../config').js;

gulp.task('babel', function() {
	return gulp.src(config.src)
        .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
        .pipe(sourcemaps.init())
		.pipe(babel())
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(config.dest))
        .pipe(browser.reload({
			stream: true
		}));
});
