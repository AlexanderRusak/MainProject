var
 gulp  		   =require("gulp"),
 livereload    =require("gulp-livereload");
 sass      	   =require("gulp-sass");
 autoprefixer  =require("gulp-autoprefixer");
 cleancss	   =require("gulp-clean-css");
 rename		   =require("gulp-rename");
 
gulp.task("reload-css", function() {
 gulp.src('./src/style.scss')
 .pipe(sass().on('error', sass.logError))
 .pipe(autoprefixer({
 	browsers:['last 3 version'],
 	cascade:false
 }))
 .pipe(gulp.dest('./src/css/'))
 .pipe(cleancss({compatibility:'ie8'}))
 .pipe(rename({suffix:'.min'}))
 .pipe(livereload())
 .pipe(gulp.dest('./src/css/'))
 .pipe(livereload());
});

gulp.task("default", function() {
 livereload.listen();
 gulp.watch('./src/style.scss', ['reload-css']);
});﻿