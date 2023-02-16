<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class masyarakat extends CI_Controller {
    
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
		$this->load->model('masyarakat_login');
		$this->masyarakat_login->cek_session();
	}

	// public function sidebar()
	// {
	// 	$this->load->view('sidebar/sidebar');
	// }

}
