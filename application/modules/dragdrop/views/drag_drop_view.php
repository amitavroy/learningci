<?php echo form_open('dragdrop/submit','id="target"'); ?>
<div class="row">
  <div class="span8">
    <div id="droppable"></div>
  </div>
  <div class="span4" id="blog-posts"></div>
</div>
<br>
<div class="row">
  <div class="span12">
    <button class="btn btn-primary" id="click-btn">Button</button>
  </div>
</div>
<input type="hidden" id="checkpost" name="checkpost" />
<?php echo form_close(); ?>