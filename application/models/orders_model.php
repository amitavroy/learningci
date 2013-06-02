<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders_model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
    $this->order_tbl = 'orders';
    $this->order_dtl_tbl = 'orderdetails';
  }
  
  /**
   * Update the order when an orderNumber is provided.
   */
  public function update($order_number, $data) {
    $this->db->where('orderNumber', $order_number);
    $this->db->update($this->order_tbl, $data);
  }
  
  /**
   * Getting the list of orders which are currently in In Process status.
   */
  public function get_active_orders() {
    $query = $this->db->select()
      ->from($this->order_tbl)
      ->where('status', 'In Process')
      ->order_by('requiredDate','asc')
      ->get();
      
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {return false;}
  }
  
  /**
   * Getting a single order row from the order table based on the orderNumber.
   * TODO: To have meaningful information, need to join other tables.
   */
  public function get_order_by_id($order_number) {
    $query = $this->db->select()
      ->from($this->order_tbl)
      ->where('orderNumber', $order_number)
      ->get();
      
    if ($query->num_rows() > 0) {
      return $query->row_array();
    } else {return false;}
  }
}