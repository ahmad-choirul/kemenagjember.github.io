<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cregistrasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    $this->load->model('Madd');
	}

	public function index()
	{
		$this->load->view('register');
	}
function registrasi()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		 $passwordx = md5($password);
		 echo $username;
		 echo $passwordx;
$data = array(
			'id' => null,
			'username' => $username,
			'password' => $passwordx,
    );
		$inser = $this->Madd->registrasi($data);
		if ($inser > 0) {
			echo "berhasil input";
			 redirect('Clogin');
		}else {
			echo "gagal input";
		}
	}
}

/* End of file Cregistrasi.php */
/* Location: ./application/controllers/Cregistrasi.php */