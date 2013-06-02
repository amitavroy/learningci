<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notification extends CI_Controller {
  public function __construct() {
    parent::__construct();
  }
  
  /**
   * Listing of orders. This is where the automatic update will happen.
   */
  public function index() {
    $this->carabiner->js('notification/notification_app.js');
    $data['header']['page_title'] = 'Learning CI Tutorial - Notification order listing'; // title for the page
		$data['content']['view_name'] = 'product_dash'; // name of the partial view to load
		$data['content']['view_data'] = array(); // data coming inside the view
    
		$this->load->view('main_page_view',$data);
  }
  
  /**
   * This is the page which will return the ajax result.
   */
  public function get_product_orders() {
    if ($this->input->is_ajax_request()) {
      $this->load->model('orders_model', 'orders');
      $data = $this->orders->get_active_orders();
      echo json_encode($data);
    } else {
      redirect('notification');
    }
  }
  
  /**
   * This is where the edit order form is getting rendered.
   */
  public function edit_order() {
    $this->load->helper('form');
    $this->load->model('orders_model', 'orders');
    $order_number = 10423;
    $order = $this->orders->get_order_by_id($order_number);
    
    $data['header']['page_title'] = 'Learning CI Tutorial - Notification edit order'; // title for the page
		$data['content']['view_name'] = 'order_edit'; // name of the partial view to load
		$data['content']['view_data'] = array(
      'order' => $order
    ); // data coming inside the view
    
		$this->load->view('main_page_view',$data);
  }
  
  /**
   * The post of the update form is handled here.
   */
  public function update_order() {
    // if not post then user will redirect to notification page.
    check_if_post('notification');
    
    $order_number = 10423;
    $message = $this->input->post('comment');
    
    $this->load->model('orders_model', 'orders');
    $this->orders->update($order_number, array(
      'comments' => $this->input->post('comment'),
    ));
    
    redirect('notification/edit_order');
  }
}