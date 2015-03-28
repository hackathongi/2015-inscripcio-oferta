

var myApp = angular.module('hackathonApp',[]);

myApp.controller('InscriptionController', ['$scope', '$http', '$location', function($scope, $http, $location) {
	$scope.data = {};

	$scope.register = function(form) {
   		window.location.href = 'recommend.html';
    	return false;
	};

	var url = $location.absUrl();
	var token = url.split('/')[url.split('/').length-1];

	token = "1";//integracio

  	$http.post({url:"http://apic.wallyjobs.com/user/"+token})
           .success(function(response) {$scope.items = response;});

}]);

myApp.controller('RecommendController', ['$scope', '$http', function($scope, $http) {
  $http.post({url:"http://apic.wallyjobs.com/jobs/" + token})
           .success(function(response) {$scope.items = response;});
}]);

var register = function(form) {
   		window.location.href = 'recommend.html';
    	return false;
	};