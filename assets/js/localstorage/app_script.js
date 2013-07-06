/*define the application*/
var localstorageApp = angular.module('localstorageApp', ['LocalStorageModule']);

localstorageApp.factory('sharedOrders', ['$http', '$rootScope', function($http, $rootScope) {
  var orders = [];
  return {
    getOrders: function() {
      return $http.get(base_url + 'ajax/get_active_orders').then(function(response) {
        orders = response.data;
        $rootScope.$broadcast('handleSharedOrders',orders);
        return orders;
      })
    }
  };
}]);

localstorageApp.controller('MainCtrl', ['$scope', '$rootScope', 'localStorageService', 'sharedOrders', function($scope, $rootScope, localStorageService, sharedOrders) {
  $scope.welcome = "Local storage with Angular JS example";
  $scope.orders = localStorageService.get('localOrders');
  $scope.source = "Local";
  if ($scope.orders == null) {
    console.log('http required');
    sharedOrders.getOrders().then(function(response) {
      $scope.orders = response;
      $rootScope.$broadcast('handleSharedOrders',response);
      localStorageService.add('localOrders',$scope.orders);
      $scope.source = "Online";
    })
  }
  else {
    console.log('On local storage. Nothing do be done.');
  }
}]);