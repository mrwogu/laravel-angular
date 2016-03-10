(function (angular) {
    'use strict';

    var app = angular.module('app', [
		'ngAnimate',
		'ngAria',
		'ngMaterial',
		'ngMessages',
		'ngResource',
		'ngRoute',
		'users'
	]);
	
	app.config(function($mdThemingProvider, $mdIconProvider) {
		$mdIconProvider
		  .defaultIconSet("./img/svg/avatars.svg", 128)
		  .icon("menu"       , "./img/svg/menu.svg"        , 24)
		  .icon("share"      , "./img/svg/share.svg"       , 24)
		  .icon("google_plus", "./img/svg/google_plus.svg" , 512)
		  .icon("hangouts"   , "./img/svg/hangouts.svg"    , 512)
		  .icon("twitter"    , "./img/svg/twitter.svg"     , 512)
		  .icon("phone"      , "./img/svg/phone.svg"       , 512);

		  $mdThemingProvider.theme('default')
			  .primaryPalette('brown')
			  .accentPalette('red');

		});
		
	app.run(function($log) {
		$log.debug('Angular App is working!');
	});
	
})(angular);
