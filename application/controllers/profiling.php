<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profiling extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->output->enable_profiler($this->config->item('developer_profiling'));
	}

	public function index() {
		$this->benchmark->mark('code_start');

		// loading assets
		$this->load->model('products_model', 'products');

		// setting the data for the view
		$data['header']['page_title'] = 'Profiling a page inside Code Igniter'; // title for the page
		$data['content']['view_name'] = 'profiling_view'; // name of the partial view to load
		$data['content']['view_data'] = array(
			'products' => $this->products->get_products(1)
		); // data coming inside the view

		// calling the view and sending data
		$this->load->view('main_page_view',$data);
		
		$this->benchmark->mark('code_end');
		echo '<br> Elapsed time in the controller: ' . $this->benchmark->elapsed_time('code_start', 'code_end');
	}
}