<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	function index() {

	}

	function categories_ajax_list() {
		is_ajax_req();
		$this->load->model('categories_model');
		$data = $this->categories_model->get_categoires();
		echo json_encode($data);
	}
}