<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Localstorage extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->carabiner->js('localstorage/angularls.js');
    $this->carabiner->js('localstorage/app_script.js');
    $data['header']['page_title'] = 'Learning CI Tutorial - Notification order listing'; // title for the page
    $data['content']['view_name'] = 'localstorage/index'; // name of the partial view to load
    $data['content']['view_data'] = array(); // data coming inside the view

    $this->load->view('main_page_view',$data);
  }

}
