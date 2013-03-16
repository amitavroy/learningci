<div ng-controller="bookViewCtrl">
  <h3>View the list of Books</h3>
  
  <div class="row-fluid">

    <div class="span12">

      <div class="span7">
        <table class="table table-bordered table-striped table-hover">
          <tr>
            <th>Book name</th>
            <th>Price</th>
            <th></th>
          </tr>
          <tr ng-repeat="book in books">
            <td>{{book.name}}</td>
            <td>{{book.price}}</td>
            <td>Edit / Del</td>
          </tr>
        </table>
      </div>

    </div>

  </div>
</div>