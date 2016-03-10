var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
	.less('app.less')
	.scripts([
		'../bower/angular/angular.js',
		'../bower/angular-animate/angular-animate.js',
		'../bower/angular-bootstrap/ui-bootstrap.js',
		'../bower/angular-bootstrap/ui-bootstrap-tpls.js',
		'../bower/angular-messages/angular-messages.js',
		'../bower/angular-resource/angular-resource.js',
		'../bower/angular-route/angular-route.js',
		'../bower/angular-touch/angular-touch.js',
		'../angular-app/app.js'
	]);
});