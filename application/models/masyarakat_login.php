<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class masyarakat_login extends CI_Model {
    public function ambillogin($username,$password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('masyarakat');
        if ($query->num_rows()>0){
            foreach($query->result() as $row){
                $sess = array ( 'usename' => $row->username,
                                'password' => $row->password,
            );
            }
            $this->session->get_userdata($sess);
            redirect('masyarakat/laporan');
        }
        else{
            $this->session->set_flashdata('info','Maaf Data Yang Anda Masukkan Salah');
            redirect('masyarakat/login');
        }
        // var_dump($username);
        // var_dump($password);

    }
    
    public function cek_session()
    {
        // $username = $_SESSION["username"];
        $username = $this->session->sess_destroy('username');
        if(!empty($username)){
            $this->session->sess_destroy();
            redirect('masyarakat/login');
        }
        var_dump($username);
        // var_dump($password);
    }
}