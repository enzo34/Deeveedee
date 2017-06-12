<?php

class Dvd_Model extends CI_Model {
  public function __construct(){
    $this->load->database();
  }
  public function get_dvd($table) {
    $query = $this->db->get($table);
    return $query->result_array();
  }
  public function get_byid($table) {
    $query = $this->db->query("SELECT * FROM `dvd` WHERE `societeD`= 1;");
    return $query->result_array();
  }
  public function get_acteur($table) {
    $query = $this->db->query("SELECT * FROM `dvd` WHERE `castingD`= 1;");
    return $query->result_array();
  }
}
