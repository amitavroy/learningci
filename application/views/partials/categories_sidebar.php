<ul class="cat-menu">
	<li ng-repeat="category in categories">
		<a href="<?php echo base_url(); ?>#/category/{{category.CategoryID}}" 
			alt="{{category.Description}}" title="{{category.Description}}">{{category.CategoryName}}
		</a>
	</li>
</ul>