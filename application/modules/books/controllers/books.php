<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {

  // calling the constructor
  public function __construct() {
    parent::__construct();
    $this->load->model('books/books_model', 'books');
  }

  public function index() {
    redirect('books/listing');
  }

  /**
   * This function will display the list of books
   * data coming from the model
   */
  public function listing() {
    $data['header']['title'] = 'Books listing';
    $data['footer']['scripts']['homescript.js'] = 'home';
    $data['view_name'] = 'books/books_listing_view';
    $data['view_data'] = $this->books->get();

    $this->load->view('page_view', $data);
  }

  /**
   * This function will display the form to add a new book
   */
  public function add() {
    $data['header']['title'] = 'Add a new book';
    $data['footer']['scripts']['homescript.js'] = 'home';
    $data['view_name'] = 'books/books_add_view';
    $data['view_data'] = '';

    $this->load->view('page_view', $data);
  }

  /**
   * This function will display the form for editing a book
   * the get function used to fetch the book info
   * [If no id, then it should display error]
   * @param int $id
   */
  public function modify($id = null) {
    if ($id == null) {
      show_error('No identifier provided', 500);
    }
    else {
      $data['header']['title'] = 'Edit a book';
      $data['footer']['scripts']['homescript.js'] = 'home';
      $data['view_name'] = 'books/books_edit_view';
      $data['view_data'] = $this->books->get($id);

      $this->load->view('page_view', $data);
    }
  }

  /**
   * This function deletes a book from the database
   * and redirects back to the listing
   * @param int $id
   */
  public function remove($id = null) {
    if ($id == null) {
      show_error('No identifier provided', 500);
    }
    else {
      $this->books->remove($id);
      redirect('books/listing'); // back to the listing
    }
  }

  /**
   * This function will call the model add function
   * and add the new book.
   */
  public function save() {
    if (isset($_POST) && $_POST['save'] == 'Add') {
      $data['name'] = $this->input->post('book_name');
      $data['price'] = $this->input->post('book_price');
      $data['author_id'] = $this->input->post('book_author_id');

      $this->books->add($data);
      redirect('books/listing'); // back to the add form
    }
    else {
      redirect('books/listing');
    }
  }

  /**
   * This function will update the info of the existing book
   */
  public function update() {
    if (isset($_POST) && $_POST['save'] == 'Save') {
      $data['book_id'] = $this->input->post('book_id');
      $data['name'] = $this->input->post('book_name');
      $data['price'] = $this->input->post('book_price');
      $data['author_id'] = $this->input->post('book_author_id');

      $this->books->add($data);
      redirect('books/listing'); // back to the add form
    }
    else {
      redirect('books/listing');
    }
  }
}