<div ng-app="notificationModule">
  
  <div ng-controller="orders">
  
    <h2>Orders which are in Progess</h2>
    
    <table class="tabl table-striped table-bordered table-condensed table-hover">
      <tr>
      	<td><strong>Order Number</strong></td>
      	<td><strong>Order Date</strong></td>
      	<td><strong>Req. Date</strong></td>
      	<td><strong>Comments</strong></td>
      </tr>
      
      <tr ng-repeat="order in orders">
      	<td>{{order.orderNumber}}</td>
      	<td>{{order.orderDate}}</td>
      	<td>{{order.requiredDate}}</td>
      	<td>{{order.comments}}</td>
      </tr>
    </table>
    
  </div>

</div>