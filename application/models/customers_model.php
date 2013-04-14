<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers_model extends MY_Model {
  public function __construct() {
    parent::__construct();
    $this->table_name = 'customers';
    $this->order_by = 'ContactName';
  }

  public function get_customers($limit = 20, $offset = 0) {
    $this
      ->db
      ->select()
      ->from($this->table_name)
      ->order_by($this->order_by)
      ->limit($limit, $offset);
    $query = $this->db->get();
    if ($query->num_rows > 0) {
      return $query->result_array();
    }
    else {
      return false;
    }

  }
}