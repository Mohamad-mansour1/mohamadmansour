const { series, parallel, src, dest } = require('gulp');
//used to clean (delete) directories
const clean = require('gulp-clean');
//concatenate css
const concatCss = require('gulp-concat-css');
//compress css files
const cleanCSS = require('gulp-clean-css');
//replace html build tags
var htmlreplace = require('gulp-html-replace');

function cleanbuild() {
  return src('build', { read: false, allowEmpty: true }).pipe(clean());
}

function css() {
  return src(['./public/assets/css/style.css'])
    .pipe(concatCss('all.min.css'))
    .pipe(cleanCSS())
    .pipe(clean())
    .pipe(dest('./build/assets/css'));
}

function js() {
  return src('./assets/js/**/*').pipe(dest('./build/assets/js'));
}

function vendor() {
  return src('./assets/vendor/**/*').pipe(dest('./build/assets/vendor'));
}

function img() {
  return src('./assets/img/**/*').pipe(dest('./build/assets/img'));
}

function apis() {
  return src('./assets/apis/**/*').pipe(dest('./build/assets/apis'));
}

function html() {
  return src('./*.html')
    .pipe(
      htmlreplace({
        CSS: './assets/css/all.min.css',
      })
    )
    .pipe(dest('./build/'));
}

exports.default = series(
  cleanbuild,
  parallel(css)
);
