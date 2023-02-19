<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas_auth extends CI_Model {
    public function insert($nama_petugas,$username,$password,$telp)
    {
        return  $this->db->insert('petugas', array('nama_petugas'=> $nama_petugas,'username'=> $username,'password'=> $password,'telp'=> $telp,'level'=> 'admin'));
    }
}