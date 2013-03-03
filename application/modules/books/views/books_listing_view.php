<h2>Listing of the books</h2>

<div class="row-fluid">
  <div class="span8">
    <table class="table table-bordered table-condensed table-striped">
      <tr class="info">
        <td><strong>Book name</strong></td>
        <td><strong>Book price</strong></td>
        <td><strong>Edit / Delete</strong></td>
      </tr>
      <?php foreach ($view_data as $key => $data): ?>
      <tr>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['price']; ?></td>
        <td><?php echo anchor('books/modify/'.$data['book_id'], 'Edit')
          . ' / '
          . anchor('books/remove/'.$data['book_id'], 'Delete'); ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>
<div class="row-fluid">
  <div class="span12">
    <?php
    echo anchor('books/add', 'Add new book', 'class="btn btn-primary"');
    ?>
  </div>
</div>