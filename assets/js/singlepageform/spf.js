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
  },
  SharedObj.saveUserData = function($params) {

    return $http({
      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
      url: base_url + 'singlepageform/save_user_data',
      method: "POST",
      data: $params,
    }).success(function(data) {
      alert("Data Saved");
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

  $scope.saveData = function(data) {
    var filteredData = {
      "date": data.date,
      "description": data.desc,
      "product": data.product.productName,
      "productLine": data.productline.productLine
    };

    $params = $.param({
      "data": filteredData
    });
    
    SharedObj.saveUserData($params);
  }

}]);