<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller {
function __construct()
{
	parent::__construct();
    $this->load->model('Madd');
}
	public function index($id,$kemiringan,$gerakan)
	{
	}
public function tambah($id,$kemiringan,$gerakan)
	{
		$data = array(
        'id' => null,
        'iddevice' => $id,
        'nilaikemiringan' => $kemiringan,
        'nilaigerakan' => $gerakan,
         'waktu' => null
    );
		$inser = $this->Madd->tambah($data);
		if ($inser > 0) {
			echo "berhasil input";
		}else {
			echo "gagal input";
		}
	}
	public function ambil()
	{
		// $x['data']=$this->Madd->show_barang();

            //$this->load->view('v_barang',$x);
	}
}

/* End of file Add.php */
/* Location: ./application/controllers/Add.php */