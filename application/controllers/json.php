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
}