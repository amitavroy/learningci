<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_m extends CI_Model {

  function __construct() {
    parent::__construct();
    $this->load->database();
  }

  function user_validate($email, $password) {
    $result = $this->db->select('user_id,password,created')
    ->from('users')
    ->where('email', $email)
    ->get();

    // check if the email is present.
    if ($result->num_rows() == 1) {
      $result_p = $result->result_array();
      $hash = $password . $result_p[0]['created']; // adding the created time to the hash for a unique string.
      $password_result = $this->db->select()
      ->from('users')
      ->where('email', $email)
      ->where('password', hash('sha256',$hash))
      ->get();

      if ($password_result->num_rows() == 1) {
        $user_data = $password_result->result_array();
        $user_data = $user_data[0];
        $session_array = array(
          'auth' => 1,
          'uid' => $user_data['user_id'],
          'displayname' => $user_data['display_name'],
          'email' => $user_data['email']
        );
        $this->session->set_userdata($session_array);
        return true;
      }
      else {
        set_message('Login credentials are wrong');
        redirect('/');
      }
    }
    else {
      set_message('Email entered is wrong');
      redirect('/');
    }
  }
}