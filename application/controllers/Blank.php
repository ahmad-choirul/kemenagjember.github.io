<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blank extends CI_Controller {

	public function index()
	{
		$data['judul']= "Blank";
		$this->load->view('template/head',$data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('blank',$data);//isi view
		$this->load->view('template/js');
		$this->load->view('template/foot');
	}
}
