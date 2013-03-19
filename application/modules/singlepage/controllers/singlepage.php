<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Singlepage extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  /**
   * This is the home page
   */
  public function index() {
    redirect('singlepage/dashboard');
  }

  /**
   * This is the dashboard for the single page app
   */
  public function dashboard() {
// 		meta data for the page
    $data['header']['title'] = 'Single page app for the Books sections';

// 		adding the script
    $data['footer']['scripts']['angular.min.js'] = '';
    $data['footer']['scripts']['singlepage_module.js'] = 'singlepage';
    $data['footer']['scripts']['singlepage_app.js'] = 'singlepage';

// 		supplying the data for the view
    $data['view_name'] = 'singlepage/singlepage_dashboard_view';
    $data['view_data'] = array(1,2,3);

    $this->load->view('page_view', $data);
  }

  /**
   * This page is taken by the view route
   */
  public function view() {
    $this->load->view('singlepage/singlepage_view_view');
  }

  /**
   * This page is taken by the edit route
   */
  public function edit() {
    $this->load->view('singlepage/singlepage_edit_view');
  }
}