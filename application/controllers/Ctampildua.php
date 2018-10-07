<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctampildua extends CI_Controller {

	public function index()
	{
		$data['judul']= "Tampilan Kedua";
		$this->load->view('template/head',$data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('tampildua',$data);//isi view
		$this->load->view('template/js');
		$this->load->view('template/foot');

	}
}
