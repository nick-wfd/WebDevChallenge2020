const { watch, src, dest } = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const rename = require('gulp-rename');
const minify = require('gulp-minify');
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');

function css() {
  	return src('resources/sass/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(rename('style.css'))
    .pipe(autoprefixer())
    .pipe(dest('./'))
}

function js() {
    return src('resources/js/*.js')
    .pipe(minify({
    ext: {
      min: '.js'
    },
    noSource: true
  }))
    .pipe(concat('app.js'))
    .pipe(dest('dist/js'))
}

function scripts() {
    return src('resources/js/scripts/**/*.js')
    .pipe(minify({
        ext: {
            min: '.js'
        },
        noSource: true
    }))
    .pipe(concat('scripts.js'))
    .pipe(dest('dist/js'))
}

exports.default = function() {
    watch('resources/sass/**/*.scss', css);
    watch('resources/js/*.js', js);
    watch('resources/js/scripts/**/*.js', scripts);
};
