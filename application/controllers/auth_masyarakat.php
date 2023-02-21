<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth_masyarakat extends CI_Controller
{

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

	public function pengaduan()
	{

		// id_pengaduan	tgl_pengaduan	nik	isi_laporan	foto	status	
		$tgl_pengaduan 	= $this->input->post('tgl_pengaduan');
		$nik 			= $_SESSION['nik'];
		$isi_laporan 	= $this->input->post('isi_laporan');
		// $foto 			= $this->input->post('foto');
		$foto 			= $_FILES['foto'];

		if ($foto = '') {
		} else {
			var_dump(is_dir('./uploads/'));
			// TES
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = 0;
			$config['max_width'] = 0;
			$config['max_height'] = 0;
			$config['encrypt_name'] = TRUE;

			var_dump($config);
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('foto')) {

				echo "yes";
			} else {
				// print_r($this->upload->display_errors());
				// die();
				// alert("Only Jpg Or Png");
				// 				$message = "Only Jpg Or Png";
				// echo "<script type='text/javascript'>alert('$message');</script>";
				redirect('masyarakat/pengaduan');
			}
		}
		// $img = $_FILES['img']['name'];
		// $img_tmp = $_FILES['img']['tmp_name'];
		$query = $this->masyarakat_auth->pengaduan($tgl_pengaduan, $nik, $isi_laporan, $this->upload->data()['file_name']);
		if ($query) {
			redirect('masyarakat/laporan');
		}
		// var_dump($tgl_pengaduan);
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
		$cek = $this->masyarakat_auth->get_data($nik);

		if (count($cek) <= 0) {
			$query = $this->masyarakat_auth->insert($nik, $nama, $username, $password, $telp);
			if ($query) {
				// var_dump($cek);
				redirect('masyarakat/login');
			}
			// else{
			// 	redirect('masyarakat/register');
			// }

		} else {
			// echo "Data salah";
			echo '<script> alert("Duplicate Data") ; </script>';
		}
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// $this->load->model('masyarakat_login');
		$this->masyarakat_login->ambillogin($username, $password);
	}

	public function logout()
	{
		// $this->session->set_userdata('username',FALSE);
		$this->session->sess_destroy();
		redirect('masyarakat/login');
	}
}


	
	
				// redirect('masyarakat/register');
	
			// $data = [
			// 	'nik' => $this->input->post('nik'),
			// 	'nama' => $this->input->post('nama'),
			// 	'username' => $this->input->post('username'),
			//     'password' => $this->input->post('password'),
			//     'telp' => $this->input->post('telp'),
			// ];
	
			// $query = $this->db->insert('masyarakat', $data);
			// $this->load->model('masyarakat_auth');
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