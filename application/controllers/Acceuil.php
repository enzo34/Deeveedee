<?php

class Acceuil extends CI_Controller {

public function __construct() {

parent::__construct();
$this->load->model('Dvd_Model');
$this->load->helper('url_helper');
}

public function index(){
  $data['societes']=$this->Dvd_Model->get_dvd('societe');
  $data['films']=$this->Dvd_Model->get_dvd('dvd');
  $this->load->view('acceuil',$data);
}
}
 ?>
