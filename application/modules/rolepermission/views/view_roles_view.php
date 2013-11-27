<div class="row">
  <div class="span12"><h2>Roles</h2></div>
</div>

<?php if($roles && is_array($roles)): ?>
<div class="row">
  <div class="span12">
    <table class="table table-bordered table-hover table-striped">
      <tr>
        <th>Role name</th>
        <th>Edit link</th>
      </tr>
      <?php foreach ($roles as $role): ?>
        <tr>
          <td class="span8"><?php echo $role['role_name']; ?></td>
          <td class="span4"><?php echo anchor('#', 'Edit'); ?></td>
          <td class="span4"><?php echo anchor('#', 'Delete', 'class="role-delete"'); ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>
<?php endif; ?>

<div class="row">
  <div class="span12"><?php echo anchor('rolepermission/role/add_role', '+ Add', 'class="btn btn-primary"') ?></div>
</div>