/*defining the module*/
var angularXML = angular.module('angularXML', []);

angularXML.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/home', {templateUrl: base_url + 'angularxml/home', controller: angularXML.MainCtrl});
  $routeProvider.when('/chapter/:id', {templateUrl: base_url + 'angularxml/chapter_page', controller: angularXML.chapterCtrl});
  $routeProvider.otherwise({redirectTo: '/home'});
}]);

angularXML.controller('MainCtrl', ['$scope', '$http', function($scope, $http) {
  $scope.title = "How to use XML inside AngularJS";
  $http.get(base_url + 'assets/js/angularxml/courseDef.xml').then(function(response) {
    var chapters = [];
    /*setting up the response*/
    var courseDef = x2js.xml_str2json(response.data);
    $scope.chaptersObj = courseDef.course.navigation.chapter;

    /*looping through the chapters*/
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

angularXML.controller('chapterCtrl', ['$scope', '$routeParams', '$http', function($scope, $routeParams, $http) {
  $scope.chapterNumber = $routeParams.id;
  var chapter = $scope.chapterNumber - 1; /* index starts from zero */

  $http.get(base_url + 'assets/js/angularxml/courseDef.xml').then(function(response) {
    var chapters = [];
    var pages = [];

    /*setting up the response*/
    var courseDef = x2js.xml_str2json(response.data);
    chapters = courseDef.course.navigation.chapter;

    var numOfPages = chapters[chapter].length;
    var thisChapter = chapters[chapter];
    var numOfPages = thisChapter.page.length;

    /* looping through the pages. */
    for (var i = 0; i < numOfPages; i++) {
      pages.push({
        name: thisChapter.page[i]
      });
    }

    $scope.pages = pages;
    $scope.chapterName = thisChapter.name;
  });

}]);