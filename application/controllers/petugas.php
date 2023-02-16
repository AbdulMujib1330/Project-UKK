<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas extends CI_Controller {

	public function login()
	{
		$this->load->view('petugas/login');
	}
	
	public function register()
	{
		$this->load->view('petugas/register');
	}
}
