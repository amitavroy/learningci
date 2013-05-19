<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('html');
	}

	/**
	 * This is the home page for the display of the products
	 * @return void [type] [description]
	 */
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

	/**
	 * Template page for displaying products by category.
	 * This is used through the angular routes
	 * @return void [type] [description]
	 */
	function products_by_cat() {
		$this->load->view('products/products_by_cat_view');
	}

	/**
	 * This page is generating the details of the product
	 * based on the id which is provided.
	 * @return void [type] [description]
	 */
	function products_by_id() {
		$this->load->view('products/products_by_id_view');
	}

	/**
	 * This page will return the listing of products with their qty.
	 * This is used for the tutorial to show online sync.
	 */
	function product_monitor() {
		$this->load->model('products_model', 'product');
//		$data = $this->product->get_products();
//		dsm($data);
		$this->load->view('products/products_monitor_view');
	}

	/*Ajax pages are here*/

	function products_ajax_list() {
		is_ajax_req();
		$this->load->view('products/products_ajax_list_view');
	}

	function products_ajax_by_cat($category_id) {
		is_ajax_req();
		$this->load->model('products_model');
		$data = $this->products_model->get_products($category_id);
		echo json_encode($data);
	}

	function products_ajax_by_id($product_id) {
		is_ajax_req();
		$this->load->model('products_model');
		$data = $this->products_model->get_product_by_id($product_id);
		echo json_encode($data);
	}

	function sidebar_generate() {
		$this->load->view('partials/categories_sidebar');
	}

	function get_all_product_details() {
		$this->load->model('products_model');
		$data = $this->products_model->get_products();
		echo json_encode($data);
	}
}