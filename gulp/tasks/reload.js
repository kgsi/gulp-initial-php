var gulp    = require('gulp'),
	browser = require('browser-sync'),
	changed = require('gulp-changed'),
	config  = require('../config');

// reload
gulp.task('reload', function(){
	gulp.src(config.baseDir)
		.pipe(changed(config.baseDir))
		.pipe(browser.reload({
			stream: true
		}));
})
