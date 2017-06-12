<?php

class Dvdstore_dvd extends CI_Controller {

public function __construct() {

parent::__construct();
$this->load->model('Dvd_Model');
$this->load->helper('url_helper');
}

public function index(){
  $data['films']=$this->Dvd_Model->get_byid('dvd');
  $this->load->view('dvdstore_dvd',$data);
}
}
 ?>
