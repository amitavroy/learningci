<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Json extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    show_error('You should not be here',500);
  }

  public function get_books_json() {
    $this->load->model('books/books_model','books');
    $data = $this->books->get();
    print json_encode($data);
    exit();
  }

  public function save_book() {
    $this->load->model('books/books_model','books');
    $data = array(
      'name' => $this->input->post('name'),
      'price' => $this->input->post('price'),
      'author_id' => $this->input->post('author_id')
    );
    $this->books->add($data);

    $new_books = $this->books->get();
    print json_encode($new_books);
    exit();
  }
}