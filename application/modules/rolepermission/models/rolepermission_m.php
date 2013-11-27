<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rolepermission_m extends CI_Model
{
  private $role_table;
  private $perm_table;

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->role_table = 'roles';
    $this->perm_table = 'permissions';
  }

  function get_roles()
  {
    $query = $this->db->select()->from($this->role_table)->order_by('role_machine_name')->get();
    if ($query->num_rows() > 0)
    {
      return $query->result_array();
    }
    else
    {
      return false;
    }
  }

  function add_new_role($actual_string, $role)
  {
    if ($this->check_if_role_exist($role))
    {
      return false; // should not add this role. It is already present.
    }
    else
    {
      $this->db->insert($this->role_table, array(
        'role_name' => $actual_string,
        'role_machine_name' => $role
      ));

      return true;
    }
  }

  private function check_if_role_exist($role)
  {
    $query = $this->db->select()->from($this->role_table)->where('role_machine_name', $role)->get();
    if ($query->num_rows() > 0)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
}