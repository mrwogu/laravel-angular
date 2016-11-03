const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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
    mix
		.less('app.less')
		.sass('layout.scss')
		.scripts([
			'../bower/angular/angular.min.js',
			'../bower/angular-animate/angular-animate.min.js',
			'../bower/angular-aria/angular-aria.min.js',
			'../bower/angular-material/angular-material.min.js',
			'../bower/angular-messages/angular-messages.min.js',
			'../bower/angular-resource/angular-resource.min.js',
			'../bower/angular-route/angular-route.min.js',
			'../angular-app/app.js'
		])
		.webpack('app.js')
		.copy('resources/assets/angular-app/views', 'public/views')
		.version(["css/app.css", "js/all.js"]);
	;
});
