<?php
$this->load->helper('form');
echo form_open('books/save');

echo form_fieldset('Add a new book');

echo form_label('Book Name: ');
echo form_input('book_name', '');

echo form_label('Book price');
echo form_input('book_price', '');

echo form_label('Book author id');
echo form_input('book_author_id', '');

echo form_label();
echo form_submit('save','Add', 'class="btn btn-success btn-large"');

echo form_fieldset_close();

echo form_close();
?>