var elixir = require('laravel-elixir');

var paths = {
	'jquery': 'node_modules/jquery/dist/jquery.js',
	'moment': 'node_modules/moment/min/moment-with-locales.js',
	'bootbox': 'node_modules/bootbox/bootbox.js',
	'bootstrap': 'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js'
}

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    mix.scripts([
	    paths.jquery,
	    paths.moment,
	    paths.bootbox
	    //paths.bootstrap
	], 'public/js/app.js', './');
});
