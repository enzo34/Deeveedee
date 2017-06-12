<?php

class Acteur extends CI_Controller {

public function __construct() {

parent::__construct();
$this->load->model('Dvd_Model');
$this->load->helper('url_helper');
}

public function index(){
  $data['films']=$this->Dvd_Model->get_dvd('dvd');
  $data['acteur']=$this->Dvd_Model->get_dvd('acteur');
  $this->load->view('acteur',$data);
}
}
 ?>
