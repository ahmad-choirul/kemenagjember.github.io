
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendbot extends CI_Controller {

	public function index()
	{
		$apiToken = "663831584:AAFY2F_cN-YxkoIBv6j8vCUuTRBNj4Lh8H0";

$data = [
    'chat_id' => '@tanahlongsor',
    'text' => 'terjadi pergerakan tanah segera mengungsi!'
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

	}

}

/* End of file Sendbot.php */
/* Location: ./application/controllers/Sendbot.php */