<div id="form-wrapper" ng-app="spf">
  <div id="saveform" ng-controller="MainCtrl">
    <h1>{{title}}</h1>
    <form>
      <label>Date:</label>
      <input type="text" class="form-control" id="date" ng-model="data.date" data-date-format="dd/mm/yyyy" bs-datepicker>

      <label>Description:</label>
      <input type="text" name="description" ng-model="data.desc" />

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

    </form>

    <pre>{{data}}</pre>
    <pre>{{products}}</pre>
  </div>
</div>