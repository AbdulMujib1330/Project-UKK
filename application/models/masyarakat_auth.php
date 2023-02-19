<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class masyarakat_auth extends CI_Model {
    public function insert($nik,$nama,$username,$password,$telp)
    {
        return  $this->db->insert('masyarakat', array('nik'=> $nik,'nama'=> $nama,'username'=> $username,'password'=> $password,'telp'=> $telp));
    }
    public function pengaduan($tgl_pengaduan,$nik,$isi_laporan,$foto){
        return  $this->db->insert('pengaduan',array('tgl_pengaduan'=>$tgl_pengaduan,'nik'=>$nik,'isi_laporan'=>$isi_laporan,'foto'=>$foto,'status'=>'0'));
    }
    public function get_data($nik)
    {
        return $this->db->get_where('masyarakat',array('nik'=>$nik))->result();
    }
}