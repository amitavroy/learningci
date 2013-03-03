<?php
$this->load->helper('form');
echo form_open('books/update');

echo form_fieldset('Edit book');

echo form_label('Book Name: ');
echo form_input('book_name', $view_data['name']);

echo form_label('Book price');
echo form_input('book_price', $view_data['price']);

echo form_label('Book author id');
echo form_input('book_author_id', $view_data['author_id']);

echo form_hidden('book_id', $view_data['book_id']);

echo form_label();
echo form_submit('save','Save', 'class="btn btn-success btn-large"');

echo form_fieldset_close();

echo form_close();
?>