<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
  
  function __construct() {
    parent::__construct();
  }

  function index() {

  }

  function login() {
    $this->load->helper('form'); // loading the form helper on this page.

    $data['header']['page_title'] = 'Welcome to Clean plate login page'; // title for the page
    $data['content']['view_name'] = 'user/login_view'; // name of the partial view to load
    $data['content']['view_data'] = array(); // data coming inside the view

    $this->load->view('main_page_view',$data);
  }

  function logout() {
    $this->session->sess_destroy();
    redirect('/');
  }

  function do_edit_profile() {

  }

  function do_login() {
    $this->load->model('user/user_m', 'user');
    $validation = $this->user->user_validate($this->input->post('email'), $this->input->post('password'));
    if ($validation) 
    {
      redirect('welcome/area51');
    }
  }


}