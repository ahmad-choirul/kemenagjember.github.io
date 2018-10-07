<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard2 extends CI_Controller {

	public function index()
	{
		$data['judul']= "Dashboard2";
		$this->load->view('dashboard2',$data);
	}
}
