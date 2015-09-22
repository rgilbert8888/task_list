'use strict';

var gulp = require('gulp'), 
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	sass = require('gulp-sass'),
	maps = require('gulp-sourcemaps'); 

// defining a gulp task:
		// (task name of choice, function(){ // stuff it does });
gulp.task('concatScripts', function() {
	return gulp.src([  //get source file(s)
		'js/main.js', 
		'js/anotherfile.js'])    //jquery code comes before things that depend on it
		.pipe(maps.init())
		.pipe(concat('app.js'))
		.pipe(maps.write('./'))
		.pipe(gulp.dest('js'));    // provide folder you want it to result in..  //run: > gulp concat scripts
}); 

// minify scripts (only after the above is run) and write sourcemap

gulp.task('minifyScripts',['concatScripts'], function() {
	return gulp.src("js/app.js")
		.pipe(uglify())
		.pipe(rename('app.min.js'))  // rename files so you can have both versions
		.pipe(gulp.dest('js'));
});

// compile sass files and write sourcemap

gulp.task('compileSass', function(){   // best to configure just one sass file that imports all the others
	return gulp.src("_styles/main.scss")
		.pipe(maps.init())   // add to task to find out exactly where your style is coming from
		.pipe(sass())
		.pipe(maps.write('./'))
		.pipe(gulp.dest('_styles'));
});		

// put it all togetherrr!

gulp.task('build', ['minifyScripts', 'compileSass']);   // runs all tasks simultaneously - but we cant do that..

// minifyScripts depends on the concat task to finished before it starts! modify code above.. 

//set up a default task: runs hello task, then runs default task

gulp.task('default', ['build']);   