<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth_petugas extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('petugas_auth');
        $this->load->model('petugas_login');
    }

    public function register()
        {
            $this->load->view('petugas/register');
            $nama_petugas   = $this->input->post('nama_petugas');
            $username 	    = $this->input->post('username');
            $password 	    = $this->input->post('password');
            $telp 		    = $this->input->post('telp');
    
                $query = $this->petugas_auth->insert($nama_petugas, $username, $password, $telp);
                if ($query) {
                    redirect('petugas/login');
                }
    
    
        }
        
        public function login()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $this->petugas_login->ambillogin($username, $password);
        }
        
        public function logout()
        {
            // $this->session->set_userdata('username',FALSE);
            $this->session->sess_destroy();
            redirect('petugas/login');
        }
}
