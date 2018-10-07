<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctampilsatu extends CI_Controller {
function __construct()
{
	parent::__construct();
    $this->load->model('Madd');
}
	public function index()
	{
		$data['judul']= "Tampilan Pertama";
		$this->load->view('template/head',$data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('tampilsatu',$data);//isi view
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
}
