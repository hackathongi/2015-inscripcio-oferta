

var myApp = angular.module('hackathonApp',[]);

myApp.controller('InscriptionController', ['$scope', '$http', '$location', function($scope, $http, $location) {
	$scope.job = {};

	$scope.register = function(form) {
   		window.location.href = 'recommend.html';
    	return false;
	};

	var url = $location.absUrl();
	var token = url.split('/')[url.split('/').length-1];

	token = "1";//integracio

  	$http.get("http://apic.wallyjobs.com/jobs/" + token)
           .success(function(response) {
           	$scope.job = response;
        });

}]);

myApp.controller('RecommendController', ['$scope', '$http', function($scope, $http) {
	$scope.job = {};

	var url = $location.absUrl();
	var token = url.split('/')[url.split('/').length-1];

	token = "1";//integracio

  	$http.get("http://apic.wallyjobs.com/jobs/" + token)
           .success(function(response) {
           	$scope.job = response;
        });
}]);

var register = function(form) {
   		window.location.href = 'recommend.html';
    	return false;
	};