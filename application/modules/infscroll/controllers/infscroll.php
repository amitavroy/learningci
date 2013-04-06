<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Infscroll extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  /**
   * This is the home page
   */
  public function index() {
    redirect('infscroll/dashboard');
  }

  /**
   * This is the landing page for the infinite scroll
   */
  public function dashboard() {

  }

  /**
   * This function will return html of the list of customers
   * this will be a page serving only Ajax calls.
   * @param  int $offset the number of records to offset in query
   * @return [type]         [description]
   */
  public function ajax_customer_list($offset = null) {
    
  }
}