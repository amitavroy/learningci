<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dragdrop extends CI_Controller
{

  /* this is the landing page of the drag and drop tutorial. */
  public function index()
  {
    $this->carabiner->css('redmond/jquery-ui-1.10.3.custom.min.css');
    $this->carabiner->js('jquery-ui-1.10.3.custom.min.js');
    $this->carabiner->js('dragdrop/dragdrop.js');

    $data['header']['page_title'] = 'Antoher page'; // title for the page
    $data['content']['view_name'] = 'drag_drop_view'; // name of the partial view to load
    $data['content']['view_data'] = array(); // data coming inside the view

    $this->load->view('main_page_view',$data);
  }

  /* this is a page to fetcht the titles */
  public function get_titles()
  {
    is_ajax_req();
    $this->load->model('dragdrop_m', 'ddm');
    $products = $this->ddm->get_products();
    $output = "";
    
    foreach ($products as $product)
    {
      $output .= $this->load->view('drag_drop_ind_items_view', array(
        'productCode' => $product['productCode'],
        'productName' => $product['productName']
      ), true);
    }

    echo $output;
  }

  public function submit()
  {
    check_if_post();
    $selected_data = json_decode($this->input->post('checkpost'));
    dsm($selected_data);
    echo anchor('dragdrop', 'Back');
  }
}