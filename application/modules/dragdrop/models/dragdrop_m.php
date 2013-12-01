<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dragdrop_m extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_products()
  {
    $query = $this->db->select()->from('products')->order_by('productName')->limit(7)->get();
    return $query->result_array();
  }
}