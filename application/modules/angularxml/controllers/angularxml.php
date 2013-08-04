<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Angularxml extends CI_Controller {
  /*calling the constructor*/
  public function __construct() {
    parent::__construct();
  }

  /*this is the home page*/
  public function index() {
    /*calling the js file*/
    $this->carabiner->js('xml2json.js');
    $this->carabiner->js('angularxml/angularxml_app.js');

    /*setting up the view data*/
    $data['header']['page_title'] = 'Learning CI Tutorial - Parsing and playing with XML in AngularJS'; // title for the page
    $data['content']['view_name'] = 'index_view'; // name of the partial view to load
    $data['content']['view_data'] = array(); // data coming inside the view

    /*calling the view file itself*/
    $this->load->view('main_page_view',$data);
  }

  public function home() {
    $this->load->view('home_view');
  }

  public function chapter_page() {
    $this->load->view('chapter_view');
  }
}