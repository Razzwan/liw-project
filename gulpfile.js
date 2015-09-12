var browserSync = require('browser-sync').create(),
    gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    concatCss = require('gulp-concat-css'),
    minifyCss = require('gulp-minify-css'),
    compass = require('gulp-compass');

gulp.task('connect', function() {
    browserSync.init({
        proxy: 'blog.loc/'
    });

    gulp.watch('web/sass/**/*.scss', ['sass']);

    gulp.watch('web/assets/*.css', ['my_styles']);

    gulp.watch('web/assets/**/*.css', ['bootstrap']);

    gulp.watch('web/assets/**/*.css', ['semantic']);

    gulp.watch('blog/views/**/*.php').on('change', browserSync.reload);

    gulp.watch('web/js/**/*.js').on('change', browserSync.reload);
});

gulp.task('sass', function(){
    gulp.src('web/sass/**/*.scss')
        .pipe(compass({
            config_file : 'config.rb',
            css : 'web/assets',
            sass : 'web/sass'
        }))
        .pipe(gulp.dest('web/assets'));
});

// my_styles
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
