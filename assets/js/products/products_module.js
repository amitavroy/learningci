northWind.config(['$routeProvider', function($routeProvider) {
	$routeProvider
	.when('/list', {templateUrl: base_url + 'products/products_ajax_list', controller: northWind.productListController})
	.otherwise({redirectTo: '/list'});
}]);