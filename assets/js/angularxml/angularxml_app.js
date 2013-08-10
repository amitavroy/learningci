/*defining the module*/
var angularXML = angular.module('angularXML', []);

angularXML.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/home', {templateUrl: base_url + 'angularxml/home', controller: angularXML.MainCtrl});
  $routeProvider.when('/chapter/:id', {templateUrl: base_url + 'angularxml/chapter_page', controller: angularXML.chapterCtrl});
  $routeProvider.otherwise({redirectTo: '/home'});
}]);

angularXML.factory('courseDefService', ['$http', function($http) {
  var courseDefService = {};

  courseDefService.data = '';
  courseDefService.load = function() {
    this.data = $http.get(base_url + 'assets/js/angularxml/courseDef.xml').then(function(data) {
      return x2js.xml_str2json(data.data);
    });
    return this.data;
  };

  courseDefService.get = function() {
    return this.data === '' ? this.load() : this.data;
  };

  return courseDefService;
}]);

angularXML.controller('MainCtrl', ['$scope', '$http', 'courseDefService', function($scope, $http, courseDefService) {
  $scope.title = "How to use XML inside AngularJS";
  courseDefService.get().then(function(data) {
    $scope.courseDef = data;
    var chapters = [];
    var courseDef = $scope.courseDef
    $scope.chaptersObj = courseDef.course.navigation.chapter;

    var numOfChapters = $scope.chaptersObj.length;
    for (var i = 0; i < numOfChapters; i++) {
      chapters.push({
        name: $scope.chaptersObj[i].name,
        number: $scope.chaptersObj[i]._number
      });
    }

    $scope.chapterNames = chapters;
  });
}]);

angularXML.controller('chapterCtrl', ['$scope', '$routeParams', '$http', 'courseDefService', function($scope, $routeParams, $http, courseDefService) {
  $scope.chapterNumber = $routeParams.id;
  var chapter = $scope.chapterNumber - 1;

  courseDefService.get().then(function(data) {
    var chapters = [];
    var pages = [];

    var courseDef = data;
    chapters = courseDef.course.navigation.chapter;

    var numOfPages = chapters[chapter].length;
    var thisChapter = chapters[chapter];
    var numOfPages = thisChapter.page.length;

    for (var i = 0; i < numOfPages; i++) {
      pages.push({
        name: thisChapter.page[i]
      });
    }

    $scope.pages = pages;
    $scope.chapterName = thisChapter.name;
  });
}]);