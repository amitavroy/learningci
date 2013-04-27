<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function get_products($category_id = null) {
		$this->db->select()->from('products');
		if ($category_id != null) {
			$this->db->where('CategoryID', $category_id);
		}
		$this->db->order_by('ProductName', 'asc');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}
}