<?php
defined('BASEPATH') or exit('No direct script access allowed');

class masyarakat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('masyarakat_login');
	}

	public function login()
	{
		$this->load->view('masyarakat/login');
		$this->masyarakat_login->cek_login();
	}

	public function register()
	{
		$this->load->view('masyarakat/register');
		$this->masyarakat_login->cek_login();
	}

	public function laporan()
	{
		$pengaduan['pengaduan'] = $this->db->get('pengaduan')->result_array();
		$this->load->view('masyarakat/laporan', $pengaduan);
		$this->masyarakat_login->cek_session();
		// $this->sidebar('laporan');
		// $this->load->view('sidebar/sidebar2');
		// $this->session->set_userdata($_SESSION['nik']);
		// $nik = $_SESSION['nik'];
	}

	public function pengaduan()
	{
		$this->load->view('masyarakat/pengaduan');
		$this->masyarakat_login->cek_session();
	}

	public function settings()
	{
		$this->load->view('masyarakat/settings');
		$this->masyarakat_login->cek_session();
	}

	// public function sidebar()
	// {
	// 	$this->load->view('sidebar/sidebar');
	// }

}
