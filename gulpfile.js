// adiciona os módulos instalados
const gulp =            require('gulp');
const sass =            require('gulp-sass')(require('sass'));
const autoprefixer =    require('gulp-autoprefixer');
const concat =          require('gulp-concat');
const babel =           require('gulp-babel');
const uglify =          require('gulp-uglify');
const csso =            require('gulp-csso');

/**
 * Novo método de criar uma task:
 * exports.sass = sass
 * 
 * Método antigo de criar uma task:
 * gulp.task('sass', sass)
 */

//função para compilar SASS e adicionar os prefixos
function compilaSass() {
    return gulp
        .src('./style/sass/**/*.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(csso())
        .pipe(concat('style.css'))
        .pipe(gulp.dest('style/'))
}
//Tarefa de gulp para a função de SASS
exports.compilaSass = compilaSass

//Função para juntar o js
function js() {
    return gulp
        .src('./js/**/*.js')
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(uglify())
        .pipe(concat('script.js'))//nome do arquivo
        .pipe(gulp.dest('js/'))
}
exports.js = js

//Função de watch do gulp(nativo do gulp)
function watch() {
    gulp.watch('style/**/*.scss', sass)
    gulp.watch(['js/**/*.js', '!js/script.js'], js)//não ficara atento a mais.js, senão ficara em loop infinito
}
//Inicia a tarefa de watch
exports.watch = watch

//Tarefa padrão do gulp, que inicia o watch e browser-sync
//paralelas ou em series(uma atras da outra)
//só digitar 'gulp' no terminal que irá executar essa task(desfault)
//combinação de series e parallel
exports.default = gulp.series(gulp.parallel(watch, js), compilaSass)