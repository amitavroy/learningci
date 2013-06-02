<div ng-controller="categoryProductController">
	<div class="span2">
		<div ng:include="'<?php echo base_url(); ?>/products/sidebar_generate'"></div>
	</div>
	<div class="span8" ng-controller="productMonitor">
		This is the content part
		{{name}}
		<!--{{products}}-->
		<table class="table">
			<tr>
				<td>Product Name</td>
				<td>Qty per unit</td>
				<td>Unit price</td>
				<td>Units in stock</td>
				<td>Units in order</td>
			</tr>
			<tr ng-repeat="product in products">
				<td>{{product.ProductName}}</td>
				<td>{{product.QuantityPerUnit}}</td>
				<td>{{product.UnitPrice}}</td>
				<td>{{product.UnitsInStock}}</td>
				<td>{{product.UnitsOnOrder}}</td>
			</tr>
		</table>
	</div>
</div>