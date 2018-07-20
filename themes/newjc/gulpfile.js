let gulp = require( 'gulp' )
let sass = require( 'gulp-sass' )

gulp.task( 'sass', () => {
    return gulp.src( 'assets/css/scss/*.scss' )
        .pipe( sass() ) // Converts Sass to CSS with gulp-sass
        .pipe( gulp.dest( 'assets/css' ) )
})

gulp.task( 'watch', [ 'sass' ], () => {
    gulp.watch( 'assets/css/scss/*.scss', ['sass'] )
})

gulp.task( 'default', [ 'sass'] )