<?php
defined('BASEPATH') or exit('No direct script access allowed');

class masyarakat_login extends CI_Model
{
    public function ambillogin($username, $password)
    {
        // $nik = $this->db->get('nik');
        // $_SESSION = $nik;
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        // $this->db->where('nik');
        // $this->db->where('nik', $nik);
        // $this->db->where('password', $password);
        $query = $this->db->get('masyarakat');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'username' => $row->username,
                    'password' => $row->password,
                    'nik' => $row->nik,
                    'nama' => $row->nama,
                    'telp' => $row->telp,
                );
            }
            $this->session->set_userdata($sess);

            redirect('masyarakat/laporan');
            // var_dump($username);
        } else {
            $this->session->set_flashdata('info', 'Maaf Data Yang Anda Masukkan Salah');
            redirect('masyarakat/login');
        }
        // var_dump($username);
        // var_dump($password);

    }

    public function cek_session()
    {
        if (!isset($_SESSION['username'])) {
            redirect('masyarakat/login');
        }
    }
}
