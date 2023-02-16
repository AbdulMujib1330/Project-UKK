<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {
	    
	function __construct()
	{
		parent::__construct();
		$this->load->model('masyarakat_auth');
		$this->load->model('masyarakat_login');
	}

	// SEMENTARA
	function sidebar()
	{
		$this->load->view('sidebar/sidebar2');
	}


	
	public function home()
	{
		$this->load->view('home');
	}
	
    public function register()
    {
        $this->load->view('masyarakat/register');
		$nik 		= $this->input->post('nik');
		$nama 		= $this->input->post('nama');
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$telp 		= $this->input->post('telp');
		// $data['username'] = $username;
		// $data['nama'] = $nama;
		// $data['password'] = $password;
		// $data['telp'] = $telp;

        // $data = [
		// 	'nik' => $this->input->post('nik'),
		// 	'nama' => $this->input->post('nama'),
		// 	'username' => $this->input->post('username'),
        //     'password' => $this->input->post('password'),
        //     'telp' => $this->input->post('telp'),
		// ];

		// $query = $this->db->insert('masyarakat', $data);
		// $this->load->model('masyarakat_auth');
		$query = $this->masyarakat_auth->insert($nik,$nama,$username,$password,$telp);
		if ($query) {
			redirect('masyarakat/register');
		}
		else{
			redirect('masyarakat/register');
		}
    }
	
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// $this->load->model('masyarakat_login');
		$this->masyarakat_login->ambillogin($username,$password);
		// var_dump($username);
		// var_dump($password);
		
		// $this->session->set_userdata($nama);
		// 	$data =array(
		//         'author_name'  => 'Sajal Soni',
		//         'website'     => 'http://code.tutsplus.com',
		//         'twitter_id' => '@sajalsoni',
		//         'interests' => array('tennis', 'travelling')
		// );
		// echo '<pre>';
		// print_r($this->session->userdata());
		// isset($_SESSION['name'])
	}
	
	public function logout()
	{
		// $this->session->set_userdata('username',FALSE);
		$this->session->sess_destroy();
		redirect('masyarakat/login');
	}
}
