<div id="form-wrapper" ng-app="spf">
  <div id="saveform" ng-controller="MainCtrl">
    <h1>{{title}}</h1>
    <form>
      <label>Date:</label>
      <input type="text" class="form-control" id="date" ng-model="data.date" data-date-format="dd/mm/yyyy" bs-datepicker>

      <div ng-show="productLines">
        <label>Product Line:</label>
        <select
          name="productline"
          id="productline"
          class="form-control"
          ng-model="data.productline"
          ng-options="c.productLine for c in productLines"
          ng-change="getProducts(data.productline)">
        </select>
      </div>

      <div ng-show="products">
        <label>Products:</label>
        <select
          name="products"
          id="products"
          class="form-control"
          ng-model="data.product"
          ng-options="c.productName for c in products">
        </select>
      </div>

      <div ng-show="products">
        <label>Description:</label>
        <textarea ng-model="data.desc"></textarea>
      </div>

      <label></label>
      <button class="btn btn-primary btn-large" ng-click="saveData(data)">Save</button>

    </form>

    <pre>{{data}}</pre>
  </div>
</div>