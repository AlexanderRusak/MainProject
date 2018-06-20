var
 gulp  = require("gulp"),
 livereload = require("gulp-livereload");
 sass      =require("gulp-sass");
 
gulp.task("reload-css", function() {
 gulp.src('./src/*.scss')
 .pipe(sass().on('error', sass.logError))
 .pipe(gulp.dest('./src/css/'))
 .pipe(livereload());
});

gulp.task("default", function() {
 livereload.listen();
 gulp.watch('./src/*.scss', ['reload-css']);
});﻿