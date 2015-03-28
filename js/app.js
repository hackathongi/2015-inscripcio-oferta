

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var myApp = angular.module('hackathonApp',[]);

myApp.controller('InscriptionController', ['$scope', '$http', '$location', function($scope, $http, $location) {
	$scope.job = {};

	$scope.register = function(form) {
   		window.location.href = 'recommend.html';
    	return false;
	};

	var url = $location.absUrl();
	var token = url.split('/')[url.split('/').length-1];

	token = getParameterByName('job_id');
	$scope.user_id = getParameterByName('id');

  	$http.get("https://api.wallyjobs.com/jobs/" + token)
           .success(function(response) {
           	$scope.job = response;
        });

}]);

var register = function(form) {
   		window.location.href = 'recommend.html';
    	return false;
	};