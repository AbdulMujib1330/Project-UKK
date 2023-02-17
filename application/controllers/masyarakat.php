<?php
defined('BASEPATH') or exit('No direct script access allowed');

class masyarakat extends CI_Controller
{

	public function login()
	{
		$this->load->view('masyarakat/login');
	}

	public function register()
	{
		$this->load->view('masyarakat/register');
	}

	public function laporan()
	{
		// $this->sidebar('laporan');
		$this->load->view('masyarakat/laporan');
		$this->load->view('sidebar/sidebar2');
		$this->load->model('masyarakat_login');
		$this->masyarakat_login->cek_session();
		// $this->session->set_userdata($_SESSION['nik']);
		// $nik = $_SESSION['nik'];
	}

	public function pengaduan()
	{
		$this->load->view('masyarakat/pengaduan');
	}

	public function settings()
	{
		$this->load->view('masyarakat/settings');
	}

	// public function sidebar()
	// {
	// 	$this->load->view('sidebar/sidebar');
	// }

}
