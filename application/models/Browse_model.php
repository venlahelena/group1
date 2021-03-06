<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse_model extends CI_Model{

  public function __construct(){
    $this->load->database();
  }

  public function get_items($idProducts = FALSE) {
    if($idProducts === FALSE) {
      $query = $this->db->get('products');
      return $query->result_array();
    }
    $query = $this->get_where('products', array('idProducts' => $idProducts));
    return $query->row_array();
  }
}