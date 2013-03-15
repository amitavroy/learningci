var singlePageModule = angular.module('singlePageModule', []);

singlePageModule.config(['$routeProvider', function($routeProvider) {
    $routeProvider
    .when('/view',{templateUrl: base_url + 'singlepage/view', controller: singlePageModule.bookViewCtrl})
    .when('/edit/:id',{templateUrl: base_url + 'singlepage/view', controller: singlePageModule.bookViewCtrl});
}]);