<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Singlepageform extends CI_Controller {
  
  function __construct() {
    parent::__construct();
  }

  function index() {
    $this->carabiner->js('Singlepageform/angular-strap.min.js');
    $this->carabiner->js('Singlepageform/bootstrap-datepicker.js');
    $this->carabiner->js('Singlepageform/spf.js');
    $this->carabiner->css('bootstrap-datepicker.css');

    $data['header']['page_title'] = 'Learning CI Tutorial - Single page form'; // title for the page
    $data['content']['view_name'] = 'spf_form'; // name of the partial view to load
    $data['content']['view_data'] = array(); // data coming inside the view
    
    $this->load->view('main_page_view',$data);
  }

  function get_productlines() {
    $this->load->model('spf_model','spf');
    $product_lines = $this->spf->get_product_lines();
    echo json_encode($product_lines);
  }

  function get_product($line = null) {
    if ($line != null) {
      $line = urldecode($line);
      $this->load->model('spf_model','spf');
      $product = $this->spf->get_products($line);
      echo json_encode($product);
      // dsm($line);
    }
    else {
      show_error('No parameter', 500);
    }
  }
}