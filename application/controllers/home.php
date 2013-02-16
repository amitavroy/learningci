<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __constructor() {
		parent::__constructor();
	}

	// this is the home page
	public function index() {
		$this->load->view('page_view');
	}
}