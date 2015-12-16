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
$(document).ready(function() {
	loadUpload();

	window.makeNewUpload = function(index) {
		var number = (parseInt(index) + 1);
		var btnUpload =  '<div class="parent-item col-xs-6 col-sm-4 col-lg-3" data-index="' + number + '">'
							+ '<div class="item">'
			                    + '<div class="mf-upload" data-type="create-new" mf-upload="upload-picture">'
			                        + '<div class="img-thumb">'
										+ '<div class="img-background" style="background-image:url(' + noImage + ')"></div>'
										+ '<input name="picture[' + number + '][image]" class="picture-upload" type="hidden" value="">'
									+ '</div>'
			                    + '</div>'
		                    + '</div>'
		                + '</div>'
		$('#upload-list .list-upload').append(btnUpload);
		loadUpload();
	}
});
//# sourceMappingURL=view.js.map
