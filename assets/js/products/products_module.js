/*categories factory method*/
northWind.factory('sharedProducts', ['$http', '$rootScope', function ($http, $rootScope) {
	var products = [];
	return {
		getAllProducts: function() {
			return $http.get(base_url + 'products/get_all_product_details').then(function(response) {
				products = response.data;
				$rootScope.$broadcast('getAllProducts', products);
				return products;
			});
		}
	};
}]);