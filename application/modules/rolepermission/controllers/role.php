<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    auth_user();
  }

  function view_roles()
  {
    $this->load->model('rolepermission_m', 'rm');

    $data['header']['page_title'] = 'View the roles'; // title for the page
    $data['content']['view_name'] = 'view_roles_view'; // name of the partial view to load
    $data['content']['view_data'] = array(
      'roles' => $this->rm->get_roles()
    ); // data coming inside the view

    $this->load->view('main_page_view',$data);
  }

  function add_role()
  {
    $this->load->helper('form');
    $this->carabiner->js('rolepermission/rolepermission.js');

    $data['header']['page_title'] = 'Add new roles'; // title for the page
    $data['content']['view_name'] = 'add_roles_view'; // name of the partial view to load
    $data['content']['view_data'] = array(); // data coming inside the view

    $this->load->view('main_page_view',$data);
  }

  function save_role()
  {
    if (check_if_post())
    {
      $actual_string = $this->input->post('role-name');
      $role_name = preg_replace('/[^a-zA-Z0-9]/', '_', $actual_string);
      $role_name = strtolower($role_name);
      $this->load->model('rolepermission_m', 'rm');

      $role_added = $this->rm->add_new_role($actual_string, $role_name);
      if ($role_added)
        set_message('Role added: ' . $actual_string);
      else
        set_message('Role already exist.');

      redirect('rolepermission/role/add_role');
    }
  }
}