<?php
class Clogin extends CI_Controller {
    function __construct() {
        parent::__construct();
        if (!session_id()) session_start();
        $this->load->model(array('Mlogin'));
        if ($this->session->userdata('u_name')) {
            redirect('dashboard1');
        }
    }
    function index() {
        $this->load->view('login');
    }
    function proses() {
                $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $cek = $this->Mlogin->cek_login("admin",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("dashboard1"));
 
        }else{
            echo "Username dan password salah !";
        }
    }
    function logout() {
        $this->session->sess_destroy();
        redirect('Clogin');
    }
}