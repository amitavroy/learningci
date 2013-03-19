singlePageModule.controller('bookViewCtrl', function($scope,$routeParams,sharedBooks) {
  $scope.name = 'bookViewCtrl';
  sharedBooks.getBooks().then(function(books) {
    $scope.books = books;
  });

  $scope.$on('handleSharedBooks', function(events, books) {
    $scope.books = books;
  });

//  handling the submit button for the form
  $scope.addNewBook = function(bookData) {
    $params = $.param({
      "name": bookData.name,
      "price": bookData.price,
      "author_id": bookData.authorId
    })
    sharedBooks.saveBooks($params);
  }
});

singlePageModule.controller('bookEditCtrl', function($scope, $routeParams) {
  $scope.name = 'bookEditCtrl';
  $scope.id = $routeParams.id;
});