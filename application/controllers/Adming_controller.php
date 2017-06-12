<?php

class Adming_controller extends CI_Controller {
  public function __construct(){

parent::__construct();
$this->load->model('ADMING_model');
$this->load->helper('url_helper');
}
    public function index() {
        $this->load->model('ADMING_model');
        //$this->load->library('Grocery_crud');
        //chargement du helper form
        $this->load->helper('form');
        $this->load->view('adming');

         //
        //  $data['create']=$this->GERANT_model->create('nomS');
         //
        //  $data['create']=$this->GERANT_model->create('rueS');
        //  $data['create']=$this->GERANT_model->create('directeurS');
        //  $data['create']=$this->GERANT_model->create('num_rue');
        //  $data['create']=$this->GERANT_model->create('nomS');
         //
        // input = 5152151
    //    $this->input->create('nomS');
      //  $this->input->create('rueS');



          // $this->input->create('nomS'));
        //  $envoie = array(
        //    $this->input->create('rueS'));
        //    $this->load->view('adming',$input);

  // $this->ADMING_model->create($envoie);

        // $data['create']=$this->GERANT_model->create('id');

        $data['societe']=$this->ADMING_model->find('societe');

        $this->load->view('adming',$data);
    }
    public function create_societe(){
      $var = array('nomS' => $_POST['nomS'],
                   'rueS' => $_POST['rueS']);
      $this->ADMING_model->create($var);
      $data['societe']=$this->ADMING_model->find('societe');
      $this->load->view('create_societe',$data);
    }
    public function edit_societe(){
      $var = array('nomS' => $_POST['nomS'],
                   'rueS' => $_POST['rueS'],
                   'villeS' => $_POST['villeS'],
                   'directeurS' => $_POST['directeurS'],
                   'num_rue' => $_POST['num_rue'],
                   'employe' => $_POST['employe']);
      $this->ADMING_model->update($var);
    //  $data['societe']=$this->ADMING_model->find('societe');
      $this->load->view('create_societe',$data);


    }
//     public function delete_societe($table,$id){
//       $res = mysql_query("DELETE FROM $table WHERE user_id=".$id);
//       return $res;
//           // $this->load->model('ADMING_model');
//           // //chargement du helper form
//           // $this->load->helper('form');
//           if(isset($_GET['delete_id']))
// {
//  $id=$_GET['id'];
//  $data['societe']=$this->ADMING_model->find('societe');
//  $res=$con->delete($table,$id);
// }
//       $data['societe']=$this->ADMING_model->delete('societe');$this->db->insert('societe');
//       $this->load->view('delete_societe',$data);
//     }
    // public function formulaire() {
    //   //chargement de la librairie pour la validation du formulaire
    //   $this->load->library('form_validation');
    //   //chargement du helper form
    //   $this->load->helper('form');
    //   $this->load->view('adming');
    // }


}
