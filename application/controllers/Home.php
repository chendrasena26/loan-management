<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
	 	parent::__construct();
	 	$this->load->library('form_validation');
	  	$this->load->library('email');
	  	$this->load->library('session');
	  	if($this->session->userdata("status") != NULL) {
			redirect(base_url('dashboard'));
		}
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function login()
	{
		$passwd = $this->input->post('passwd');

		$where1 = array(
			'passwd' => md5($passwd)
		);
		$query = $this->db->get_where("user", $where1);
		$cek = $query->num_rows();
		if($cek > 0) {
			$data_session = array(
				'status' => "logged in"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('dashboard'));
		} else {
			$this->session->set_flashdata('gagal', 'gagal');
   			redirect(base_url());
		}
	}
}

?>