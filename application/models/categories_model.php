<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Categories_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function get_categoires($category_id = null) {
		$this->db->select();
		$this->db->from('categories');
		if ($category_id != null) {
			$this->db->where('CategoryID', $category_id);
		}
		$this->db->order_by('CategoryName', 'asc');
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}
}