var spf = angular.module('spf', ['$strap.directives']);

spf.factory('SharedObj', ['$http', function($http) {
  var SharedObj = {};
  
  SharedObj.getProductLines = function() {
    return $http.get(base_url + 'singlepageform/get_productlines').then(function(response) {
      return response.data;
    });
  },
  SharedObj.getProduct = function(productLine) {
    productLine = encodeURIComponent(productLine);
    return $http.get(base_url + 'singlepageform/get_product/' + productLine).then(function(response) {
      return response.data;
    });
  }

  return SharedObj;

}]);

spf.controller('MainCtrl', ['$scope','SharedObj', function($scope, SharedObj) {
  $scope.title = 'Amitav';
  
  SharedObj.getProductLines().then(function(data) {
    $scope.productLines = data;
  });

  $scope.getProducts = function(productLine) {
    SharedObj.getProduct(productLine.productLine).then(function(data) {
      $scope.products = data;
    });
  }

}]);