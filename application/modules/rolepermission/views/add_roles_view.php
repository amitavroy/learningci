<div class="row">
  <div class="span12">
    <?php echo form_open('rolepermission/role/save_role'); ?>
    <label for="role-name">
      <input id="role-name" type="text" name="role-name" placeholder="Enter a new role"/>
      <span id="role-machine-name"></span>
    </label>

    <label for="role-submit-button">
      <input type="submit" class="btn btn-primary"/>
    </label>
    <?php echo form_close(); ?>
  </div>
</div>