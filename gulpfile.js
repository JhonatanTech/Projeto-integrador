// adiciona os módulos instalados
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const csso = require('gulp-csso');

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

function css() {
    return gulp
        .src('style/**/*.css')
        .pipe(concat('style.css'))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(csso())
        .pipe(gulp.dest('style/'))
}
exports.css = css

//Função para juntar o SASS
function javascript() {
    return gulp
        .src('js/**/**/*.js')
        .pipe(concat('main.js'))//nome do arquivo
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(uglify())
        .pipe(gulp.dest('js/'))
        .pipe(browserSync.stream())//onde manda a tarefa pro browser
}
exports.javascript = javascript

//Js plugins
function plugins() {
    return gulp
        .src([
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/materialize-css/dist/js/materialize.min.js',
        ])
        .pipe(concat('plugins.js'))
        .pipe(gulp.dest('js/'))
        .pipe(browserSync.stream())//onde manda a tarefa pro browser
}
exports.plugins = plugins

//função para inicializar o browser
//pacote que atualiza o navegador sempre q tiver mudança
function browser() {
    browserSync.init({
        server: {
            baseDir:'./'
        }
    })
}
//Tarefa para inicializar o browser-sync
exports.browser = browser

//Função de watch do gulp(nativo do gulp)
function watch() {
    gulp.watch('style/**/*.scss', sass)
    gulp.watch(['style/**/*.css', '!style/style.css'], css)
    gulp.watch(['js/**/*.js', '!js/main.js'], javascript)//não ficara atento a mais.js, senão ficara em loop infinito
    gulp.watch(['*.html', '*.php']).on('change', browserSync.reload)
}
//Inicia a tarefa de watch
exports.watch = watch

//Tarefa padrão do gulp, que inicia o watch e browser-sync
//paralelas ou em series(uma atras da outra)
//só digitar 'gulp' no terminal que irá executar essa task(desfault)
//combinação de series e parallel
exports.default = gulp.series(gulp.parallel(watch, /*browser,*/ javascript, plugins, css), compilaSass)