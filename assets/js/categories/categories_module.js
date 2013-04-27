/*categories factory method*/
northWind.factory('sharedCategories', ['$http', '$rootScope', function ($http, $rootScope) {
	var categories = [];
	return {
		getCategories: function() {
			return $http.get(base_url + 'categories/categories_ajax_list').then(function(response) {
				categories = response.data;
				$rootScope.$broadcast('getCategoriesList',categories);
				return categories;
			})
		}
	};
}]);