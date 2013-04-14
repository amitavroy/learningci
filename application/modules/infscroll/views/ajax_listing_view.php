<?php foreach ($customers as $customer): ?>
<tr>
  <td><?php echo $customer['CompanyName']; ?></td>
  <td><?php echo $customer['ContactName']; ?></td>
  <td><?php echo $customer['ContactTitle']; ?></td>
  <td><?php echo $customer['City']; ?></td>
  <td><?php echo $customer['Country']; ?></td>
</tr>
<?php endforeach; ?>