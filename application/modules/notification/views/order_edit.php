<?php 
dsm($order);
echo form_open('notification/update_order');
echo form_textarea('comment', $order['comments']);
echo form_label();
echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?>