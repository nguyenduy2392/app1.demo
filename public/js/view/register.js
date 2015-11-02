var fullProject = angular.module('AllProject', []);
fullProject.config(function($interpolateProvider) {
	$interpolateProvider.startSymbol('{[');
	$interpolateProvider.endSymbol(']}');
});

fullProject.controller('registerController', function ($scope) {
	$scope.confirmPass = false;
	$scope.passKey = ($scope.registerPassword == undefined) && ($scope.registerRePassword == undefined);

	$scope.isDisabled = function() {
		$scope.confirmPass = $scope.registerPassword == $scope.registerRePassword;

		if($scope.confirmPass == false) {
			$scope.errorVal = "errorVal-input";
		} else {
			$scope.errorVal = "";
		}
	};
});
$('body').attr('ng-app');