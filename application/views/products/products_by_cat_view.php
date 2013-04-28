<div ng-controller="categoryProductController">
	<div class="span2">
		<ul class="cat-menu">
			<li ng-repeat="category in categories">
				<a href="<?php echo base_url(); ?>#/category/{{category.CategoryID}}" 
					alt="{{category.Description}}" title="{{category.Description}}">{{category.CategoryName}}
				</a>
			</li>
		</ul>
	</div>

	<div class="span10">
		<div id="product-grid" class="row-fluid">
			<div class="products" ng-repeat="product in products">
				<?php echo anchor('prduct/view/{{product.ProductID}}', img('assets/img/products/{{product.ProductID}}_big.jpg')); ?>
				<span class="product-name">{{product.ProductName}}</span>
			</div>
		</div>
	</div>
</div>