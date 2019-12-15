//
// ============================================
// 自動で感知してコンパイル　Gulp ｖ4
// ============================================

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');
var rename = require('gulp-rename');
var cleanCSS = require('gulp-clean-css');
var browsersync = require('browser-sync')

// Sassをコンパイルするタスクの設定
gulp.task("css", function () {
    return gulp.src('./scss/**/*.scss')// コンパイル対象のSassファイル
        .pipe(sass()) // コンパイル実行
        .pipe(autoprefixer()) // ベンダープレフィックスの付与
        .pipe(gulp.dest('css')); // 出力
});

// .min.cssを生成するタスクの設定
gulp.task("mincss", function () {
    return gulp.src('css')//上のタスクで出力したcssファイル
        .pipe(cleanCSS()) // cssを圧縮
        .pipe(rename({extname:'.min.css'})) // 名前を.min.cssにする
        .pipe(gulp.dest('css')) // 出力
        .pipe(notify({
            title: 'Scssをコンパイルしました。',
            message: new Date(),
            sound: 'Pop',
            icon: 'icon.png' // 適当なアイコンを追加してみてください
        }));
});



gulp.task("default", function () {
    // scssフォルダを監視し、変更があったらコンパイルする
    gulp.watch('./scss/**/**/*.scss', gulp.series('css', 'mincss'));
});
