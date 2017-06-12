<?php

class LandingPage extends CI_Controller {

public function __construct() {

parent::__construct();
$this->load->model('Dvd_Model');
$this->load->helper('url_helper');
}

public function index(){
  $data['films']=$this->Dvd_Model->get_dvd('dvd');
  $this->load->view('landingpage',$data);
}
}
 ?>
