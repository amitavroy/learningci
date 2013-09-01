<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Spf_model extends CI_Model {

  function __construct() {
    parent::__construct();
    $this->load->database();
  }

  function get_product_lines() {
    $query = $this->db->query("SELECT productLine FROM productlines ORDER BY productLine ASC");
    return $query->result_array();
  }

  function get_products($line) {
    $query = $this->db->query("SELECT productName FROM products WHERE productLine = ? ORDER BY productName ASC", array($line));
    
    return $query->result_array();
  }
}