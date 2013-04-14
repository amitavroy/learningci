<div id="customer-wrapper">
  <div class="span8">
    <table class="table table-stripped">
      <thead>
      <tr>
        <th>Company Name</th>
        <th>Customer Name</th>
        <th>Customer Title</th>
        <th>City</th>
        <th>Country</th>
      </tr>
      </thead>

      <tbody>
      <?php foreach ($customers as $customer): ?>
      <tr>
        <td><?php echo $customer['CompanyName']; ?></td>
        <td><?php echo $customer['ContactName']; ?></td>
        <td><?php echo $customer['ContactTitle']; ?></td>
        <td><?php echo $customer['City']; ?></td>
        <td><?php echo $customer['Country']; ?></td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
