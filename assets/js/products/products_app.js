northWind.controller('productListController', function($scope, $routeParams, sharedCategories) {
	/*getting the categories from shared object*/
	sharedCategories.getCategories().then(function(categories) {
		$scope.categories = categories;
	});
});

northWind.controller('categoryProductController', function($scope, $routeParams, $http, $rootScope, sharedCategories) {
	/*getting the categories from shared object*/
	sharedCategories.getCategories().then(function(categories) {
		$scope.categories = categories;
	});

	/*getting products based on category selected*/
	$scope.products = $http.get(base_url + 'products/products_ajax_by_cat/' + $routeParams.id).then(function(response) {
		$rootScope.$broadcast('getProductByCatList',$scope.products);
		return response.data;
	});
});

northWind.controller('productByIdController', function($scope, $routeParams, $http, $rootScope, sharedCategories) {
	/*getting the categories from shared object*/
	sharedCategories.getCategories().then(function(categories) {
		$scope.categories = categories;
	});

	/*getting the product details by the product id*/
	$scope.product = $http.get(base_url + 'products/products_ajax_by_id/' + $routeParams.id).then(function(response) {
		$rootScope.$broadcast('getProductByIdList',$scope.product);
		return response.data;
	});
});