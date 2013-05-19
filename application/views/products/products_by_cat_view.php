<div ng-controller="categoryProductController">
	<div class="span2">
		<div ng:include="'<?php echo base_url(); ?>/products/sidebar_generate'"></div> 
	</div>

	<div class="span10">
		<div id="product-grid" class="row-fluid">
			<div class="products" ng-repeat="product in products">
				<?php echo anchor('#/product/view/{{product.ProductID}}', img('assets/img/products/{{product.ProductID}}_big.jpg')); ?>
				<span class="product-name">{{product.ProductName}}</span>
			</div>
		</div>
	</div>
</div>