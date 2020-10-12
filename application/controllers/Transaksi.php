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

	 		$data = array(
	 			'nik' => $nik,
	 			'nama' => $nama,
	 			'tanggal' => $tanggal,
	 			'barang' => $barang,
	 			'harga' => $harga,
	 			'keterangan' => $keterangan
	 		);

	 		$query = $this->ModelPiutang->tambah('transaksi',$data);
	 		if($query) {
	 			redirect(base_url('dashboard'));
	 		} else {
	 			echo "gagal";
	 		}
	 	} else {
	 		$this->load->view('create');
	 	}
	 }

	 public function delete($id)
	 {
	 	$where = array('no_transaksi' => $id);
	 	$query = $this->ModelPiutang->hapus("transaksi", $where);

	 	if($query) {
	 		redirect(base_url('dashboard'));
	 	}

	 }

	 public function edit($id)
	 {
	 	if($this->input->post('submit')) {
	 		$nik = $this->input->post('nik');
	 		$nama = $this->input->post('nama');
	 		$tanggal = $this->input->post('tanggal');
	 		$barang = $this->input->post('barang');
	 		$harga = $this->input->post('harga');
	 		$keterangan = $this->input->post('keterangan');

	 		$data = array(
	 			'nik' => $nik,
	 			'nama' => $nama,
	 			'tanggal' => $tanggal,
	 			'barang' => $barang,
	 			'harga' => $harga,
	 			'keterangan' => $keterangan
	 		);

	 		$where = array('no_transaksi' => $id);
	 		$query = $this->ModelPiutang->update_data('transaksi',$data,$where);

	 		if($query) {
	 			redirect(base_url('dashboard'));
	 		}

	 	} else {
	 		$where = array('no_transaksi' => $id);
		 	$query = $this->ModelPiutang->pilih_tertentu('transaksi',$where);
		 	$result = $query->result_array();
		 	$data['transaksi'] = $result;
		 	$this->load->view('edit',$data);
	 	}
	 }

	 public function changestatus($id)
	 {
	 	if($this->input->post('submit')) {
	 		$angsuran = $this->input->post('angsuran');
	 		$sisa = $this->input->post('sisa');

	 		if($angsuran == 1) {
	 			$data = array(
	 				'angsuran_1' => $sisa,
	 				'tanggal' => date('Y-m-d')
	 			);
	 		} else if($angsuran == 2) {
	 			$data = array(
	 				'angsuran_2' => $sisa,
	 				'tanggal' => date('Y-m-d')
	 			);
	 		} else if($angsuran == 3) {
	 			$data = array(
	 				'angsuran_3' => $sisa,
	 				'tanggal' => date('Y-m-d')
	 			);
	 		}

	 		$where = array('no_transaksi' => $id);
	 		$query = $this->ModelPiutang->update_data('transaksi',$data,$where);

	 		if($query) {
	 			redirect(base_url('dashboard'));
	 		}

	 	} else {
	 		$where = array('no_transaksi' => $id);
		 	$query = $this->ModelPiutang->pilih_tertentu('transaksi',$where);
		 	$result = $query->result_array();
		 	$data['transaksi'] = $result;
		 	$this->load->view('changestatus',$data);
	 	}
	 
	}
}

?>