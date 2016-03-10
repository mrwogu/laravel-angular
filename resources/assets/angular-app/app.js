(function (angular) {
    'use strict';

    var app = angular.module('app', [
		'ngAnimate',
		'ngMessages',
		'ngResource',
		'ngRoute',
		'ngTouch',
		'ui.bootstrap'
	]);
	
	angular.element(document).ready(function () {
        angular.bootstrap(document, ['app']);
    });
	
	app.run(function($log) {
		$log.debug('Angular App is working!');
	});
	
})(angular);
