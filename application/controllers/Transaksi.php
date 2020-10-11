<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	public function __construct()
	{
	 	parent::__construct();
	 	$this->load->library('form_validation');
	  	$this->load->library('email');
	  	$this->load->library('session');
	  	$this->load->model('ModelPiutang');
	  	if($this->session->userdata("status") == NULL) {
			redirect(base_url());
		}
	 }

	 public function create()
	 {
	 	if($this->input->post('submit')) {
	 		$nik = $this->input->post('nik');
	 		$nama = $this->input->post('nama');
	 		$tanggal = $this->input->post('tanggal');
	 		$barang = $this->input->post('barang');
	 		$harga = $this->input->post('harga');
	 		$keterangan = $this->input->post('keterangan');

	 		
	 	} else {
	 		$this->load->view('dashboard');
	 	}
	 }
}

?>