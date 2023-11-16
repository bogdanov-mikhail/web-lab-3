const gulp = require('gulp');
const browserSync = require('browser-sync').create()

gulp.task("simple_task_1", function (callback) {
    console.log("I am simple task 1!")
    callback()
})

gulp.task("simple_task_2", function (callback) {
    console.log("I am simple task 2!")
    callback()
})

gulp.task('start-server', function() {

    browserSync.init({
        server: {
            baseDir: './app/',
        },
    });

    gulp.watch('./app/**/*.*').on('change', browserSync.reload);
});

gulp.task("test-consequence", gulp.series('simple_task_1', 'simple_task_2'))
gulp.task("test-parallel", gulp.parallel('simple_task_1', 'simple_task_2'))