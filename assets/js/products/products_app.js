northWind.controller('productListController', function($scope, $routeParams,sharedCategories) {
	sharedCategories.getCategories().then(function(categories) {
		$scope.categories = categories;
	});
});