singlePageModule.controller('bookViewCtrl', function($scope,$routeParams,sharedBooks) {
  $scope.name = 'bookViewCtrl';
  sharedBooks.getBooks().then(function(books) {
    $scope.books = books;
  });

  $scope.$on('handleSharedBooks', function(events, books) {
    $scope.books = books;
  })
});

singlePageModule.controller('bookEditCtrl', function($scope, $routeParams) {
  $scope.name = 'bookEditCtrl';
  $scope.id = $routeParams.id;
});