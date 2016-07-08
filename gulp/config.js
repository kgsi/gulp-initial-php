var path = require('path'),
	app = 'app',
	dist = 'dist';

module.exports = {

	baseDir: 'app',

	watch: [
		app + '/**/*.html',
		app + '/**/*.php'
	],

	css: {
		src:    app + '/assets/sass/**/*.scss',
		dest:   app + '/assets/css',
		sass:   app + '/assets/sass',
		images: app + '/assets/images',
		uglify: true
	},

	js: {
		src:    app + '/assets/js/src/*.js',
		dest:   app + '/assets/js',
		uglify: false
	},

	libs: {
		src:    '*',
		dest:   app + '/assets/js/vendor/',
		rename: 'libs.js',
		uglify: false
	},

	image: {
		src:  dist + '/assets/images/**/*',
		dest: dist + '/assets/images'
	}
};
