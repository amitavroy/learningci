<div ng-controller="productByIdController">
	<div class="span2">
		<ul class="cat-menu">
			<li ng-repeat="category in categories">
				<a href="<?php echo base_url(); ?>#/category/{{category.CategoryID}}" 
					alt="{{category.Description}}" title="{{category.Description}}">{{category.CategoryName}}
				</a>
			</li>
		</ul>
	</div>

	<div class="span10 product-display">
		<h2>{{product.ProductName}}</h2>
		<?php
		$image = array(
			'src' => 'assets/img/products/{{product.ProductID}}_big.jpg',
			'width' => 200,
			'height' => 200
		);
		?>
		<div class="product-image pull-left"><?php echo img($image); ?></div>
		<div class="product-details pull-left span8">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr class="info">
						<td><strong>Item</strong></td>
						<td><strong>Details</strong></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="span3"><strong>Unit Qty</strong></td>
						<td>{{product.QuantityPerUnit}}</td>
					</tr>
					<tr>
						<td><strong>Supplier</strong></td>
						<td>{{product.CompanyName}}</td>
					</tr>
					<tr>
						<td><strong>Contact person</strong></td>
						<td>{{product.ContactTitle}}</td>
					</tr>
					<tr>
						<td><strong>Contact Number</strong></td>
						<td>{{product.Phone}}</td>
					</tr>
					<tr>
						<td><strong>Address</strong></td>
						<td>{{product.Address}} {{product.City}} {{product.Coutry}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</div>