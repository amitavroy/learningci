/*defining the module*/
var northWind = angular.module('northWind', []);

/*adding the routes*/
northWind.config(['$routeProvider', function($routeProvider) {
	$routeProvider
	.when('/list', {templateUrl: base_url + 'products/products_ajax_list', controller: northWind.productListController})
	.when('/category/:id', {templateUrl: base_url + 'products/products_by_cat', controller: northWind.categoryProductController})
	.when('/product/view/:id', {templateUrl: base_url + 'products/products_by_id', controller: northWind.productByIdController})
	.otherwise({redirectTo: '/list'});
}]);