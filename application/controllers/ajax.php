<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_ajax_req();
  }

  public function get_active_orders()
  {
    $this->load->model('orders_model', 'o');
    $data = $this->o->get_active_orders();
    echo json_encode($data);
  }

}
