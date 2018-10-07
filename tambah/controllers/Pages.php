<?php
class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
	}

	public function view()
	{
		$data['title'] = 'SISTEM INFORMASI SATU PINTU KEMENTRIAN AGAMA JEMBER';

		$this->load->view('templates/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer', $data);
	}
}