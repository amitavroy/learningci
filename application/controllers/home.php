<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __constructor() {
		parent::__constructor();
	}

	// this is the home page
	public function index() {
		$data['header']['title'] = 'Home page';
		$data['footer']['scripts']['homescript.js'] = 'home';
		
		$this->load->view('page_view', $data);
	}
}