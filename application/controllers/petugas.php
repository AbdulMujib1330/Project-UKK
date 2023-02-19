<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('petugas_login');
	}

	public function login()
	{
		$this->load->view('petugas/login');
		$this->petugas_login->cek_login();
	}
	
	public function register()
	{
		$this->load->view('petugas/register');
		$this->petugas_login->cek_login();
	}

	public function tanggapan()
	{
		$this->load->view('petugas/tanggapan');
		$this->petugas_login->cek_session();
	}
}
