var notificationModule = angular.module('notificationModule', []);

notificationModule.factory('sharedorders', ['$http', '$rootScope', function($http, $rootScope) {
  var orders = [];
 
  return {
    getOrders: function() {
      return $http.get(base_url + 'notification/get_product_orders').then(function(response) {
        orders = response.data;
        return orders;
      })
    }
  };
}]);

notificationModule.controller('orders', function($scope,$timeout,sharedorders) {
  $scope.name = 'orders';
  (function tock() {
    sharedorders.getOrders().then(function(orders) {
      $scope.orders = orders;
      $timeout(tock, 5000);
    });
  })();  
});