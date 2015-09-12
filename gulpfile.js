var browserSync = require('browser-sync').create(),
    gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    concatCss = require('gulp-concat-css'),
    minifyCss = require('gulp-minify-css'),
    conf = require('./gulp_conf.json')
    ;

gulp.task('connect', function() {
    browserSync.init({
        proxy: conf.host
    });

    gulp.watch('web/assets/*.css', ['my_styles']);

    gulp.watch('web/assets/bootstrap/*.css', ['bootstrap']);

    gulp.watch('web/assets/semantic/*.css', ['semantic']);

    gulp.watch('blog/views/**/*.php').on('change', browserSync.reload);

    gulp.watch('web/js/**/*.js').on('change', browserSync.reload);
});

// my_styles
gulp.task('my_styles', function(){
    gulp.src('web/assets/*.css')
        .pipe(concatCss("css/style.css"))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(minifyCss())
        .pipe(gulp.dest('web/'))
        .pipe(browserSync.stream());
});

// bootstrap
gulp.task('bootstrap', function(){
    gulp.src('web/assets/bootstrap/*.css')
        .pipe(concatCss("css/with_bootstrap.css"))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(minifyCss())
        .pipe(gulp.dest('web/'))
        .pipe(browserSync.stream());
});

// semantic
gulp.task('semantic', function(){
    gulp.src('web/assets/semantic/*.css')
        .pipe(concatCss("css/with_semantic.css"))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(minifyCss())
        .pipe(gulp.dest('web/'))
        .pipe(browserSync.stream());
});

gulp.task('default', ['connect']);
