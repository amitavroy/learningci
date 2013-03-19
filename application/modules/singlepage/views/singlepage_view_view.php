<div ng-controller="bookViewCtrl">
  <h3>View the list of Books</h3>

  <div class="row-fluid">

    <div class="span12">

      <div class="span7">
        <table class="table table-bordered table-striped table-hover">
          <tr>
            <th>Book name</th>
            <th>Price</th>
          </tr>
          <tr ng-repeat="book in books">
            <td>{{book.name}}</td>
            <td>{{book.price}}</td>
          </tr>
        </table>
      </div>

      <div class="span4 offset1">
        <fieldset>
          <legend>Add a new book</legend>
          <label for="book-name">Book name:</label>
          <input type="text" name="book-name" ng-model="bookData.name" id="book-name">

          <label for="book-price">Book price:</label>
          <input type="text" name="book-price" ng-model="bookData.price" id="book-price">

          <label for="author-id">Author id:</label>
          <input type="text" name="author-id" ng-model="bookData.authorId" id="author-id">

          <label></label>
          <button class="btn btn-large btn-success" ng-click="addNewBook(bookData)">Add</button>
        </fieldset>
      </div>

    </div>

  </div>
</div>