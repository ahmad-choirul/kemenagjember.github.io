<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cchart extends CI_Controller {
	function __construct()
{
	parent::__construct();
    $this->load->model('Madd');
}
	public function index()
	{
		$object['controller']=$this; 
		$this->load->view('chart',$object);
	}
public function ambildata()
{	
$angka=$this->Madd->ambiljson();
echo $angka;
return $angka;
}

}

/* End of file Cchart.php */
/* Location: ./application/controllers/Cchart.php */