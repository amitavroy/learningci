var singlePageModule = angular.module('singlePageModule', []);

singlePageModule.config(['$routeProvider', function($routeProvider) {
    $routeProvider
    .when('/view',{templateUrl: base_url + 'singlepage/view', controller: singlePageModule.bookViewCtrl})
    .when('/edit/:id',{templateUrl: base_url + 'singlepage/edit', controller: singlePageModule.bookEditCtrl});
}]);

singlePageModule.factory('sharedBooks', ['$http', '$rootScope', function($http, $rootScope) {
  var books = [];

  return {
    getBooks: function() {
      return $http.get(base_url + 'json/get_books_json').then(function(response) {
        books = response.data;
        $rootScope.$broadcast('handleSharedBooks',books);
        return books;
      })
    },
    saveBooks: function() {}
  };
}]);