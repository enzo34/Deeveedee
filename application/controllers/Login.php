<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

        public function index()
        {
            $this->form_validation->set_rules('username', 'Username','trim|required');
            $this->form_validation->set_rules('password', 'Password','trim|required|callback_basisdata_cek');
             if ($this->form_validation->run()==false)
             {
                 $this->load->view('login_view');
             } else {
                redirect(base_url('index.php/home'), 'refresh');
             }
        }

        function basisdata_cek($password){
            $username = $this->input->post('username');
            $result = $this->login->login($username,$password);
            if($result){
                $sess_array = array();
                foreach ($result as $row) {
                    $sess_array = $arrayName = array('id' => $row->id, 'username' => $row->username, 'fullname' => $row->fullname);
                    $this->session->set_userdata('logged_in', $sess_array);
                }
                return true;
            } else{
                $this->form_validation->set_message('basisdata_cek', 'Invalid username or password(xc)');
                return false;
            }
         }

         public function register(){
            if($this->input->post('register')){
                $this->login->register();
                redirect('login');
            } else {
                $this->load->view('register_view');
            }
         }

    }
