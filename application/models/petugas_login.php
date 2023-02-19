<?php
defined('BASEPATH') or exit('No direct script access allowed');

class petugas_login extends CI_Model
{
    public function ambillogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('petugas');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'username' => $row->username,
                    'password' => $row->password,
                    'nama_petugas' => $row->nama_petugas,
                    'telp' => $row->telp,
                    'level' => $row->level,
                );
            }
            $this->session->set_userdata($sess);

            redirect('petugas/tanggapan');
        } else {
            $this->session->set_flashdata('info', 'Maaf Data Yang Anda Masukkan Salah');
            redirect('petugas/login');
        }
        // var_dump($sess);

    }

    public function cek_session()
    {
        if (!isset($_SESSION['username'])) {
            redirect('petugas/login');
        }
    }

    public function cek_login()
    {
        if (isset($_SESSION['username'])) {
            redirect('petugas/tanggapan');
        }
    }
}
