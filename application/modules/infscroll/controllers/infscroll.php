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
    // loading the required files
    $this->load->model('customers_model', 'cust');
    // view data
    $data['header']['title'] = 'Customer listing';
    $data['footer']['scripts']['infscroll.js'] = 'infscroll';
    $data['view_name'] = 'infscroll/infscroll_customlisting_view';
    $data['view_data']['customers'] = $this->cust->get_customers();

    $this->load->view('page_view', $data);
  }

  /**
   * This page will return the html of the list of customers
   * which will be appended to the table
   * @param null $offset
   */
  public function ajax_customer_list($offset = null) {
    $this->load->model('customers_model', 'cust');
    if ($this->cust->get_customers(20,$offset)) {
      $data['customers'] = $this->cust->get_customers(20,$offset);
      $this->load->view('infscroll/ajax_listing_view',$data);
    }
    else {
      echo 'End';
    }
  }
}