<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class masyarakat_auth extends CI_Model {
    public function insert($nik,$nama,$username,$password,$telp)
    {
        return  $this->db->insert('masyarakat', array('nik'=> $nik,'nama'=> $nama,'username'=> $username,'password'=> $password,'telp'=> $telp));
    }
}