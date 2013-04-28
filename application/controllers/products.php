<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('html');
	}

	function index() {
		// loading assets
		$this->carabiner->js('categories/categories_module.js');
		$this->carabiner->js('products/products_module.js');
		$this->carabiner->js('products/products_app.js');
		
		// setting the data for the view
		$data['header']['page_title'] = 'North Wind Shopping cart'; // title for the page
		$data['content']['view_name'] = 'products/products_index_view'; // name of the partial view to load
		$data['content']['view_data'] = array(); // data coming inside the view

		// calling the view and sending data
		$this->load->view('main_page_view',$data);
	}

	function products_by_cat() {
		$this->load->view('products/products_by_cat_view');
	}

	function products_by_id() {
		$this->load->view('products/products_by_id_view');
	}

	/*Ajax pages are here*/
	function products_ajax_list() {
		is_ajax_req();
		$this->load->view('products/products_ajax_list_view');
	}

	function products_ajax_by_cat($category_id) {
		$this->load->model('products_model');
		$data = $this->products_model->get_products($category_id);
		echo json_encode($data);
	}
}