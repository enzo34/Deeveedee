<?php

class ADMING_model extends CI_model {
  public function __construct(){
    $this->load->database();
  }

  protected $table='societe';
  protected $tablee='employe';
  protected $tableh='horaires';

  public function create($values) {
    if ($this->db->set($values)->insert($this->table)) return $this->db->insert_id();
    return false;
}
public function find($table) {
  $query = $this->db->get($table);
  return $query->result_array();
}

public function update($where, $values) {
  if ($this->db->set($values)->insert($this->table))
    return $this->db->where($where)->set($this->table, $values);
}
public function delete($where) {

    return $this->db->where($where)->delete($this->table);
}
public function get_dvd($table) {
  $query = $this->db->get($table);
  return $query->result_array();
}

}
