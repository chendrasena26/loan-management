<?php
class ModelPiutang extends CI_Model {

	public function tampil_semua($table)
	{
		return $this->db->get($table);
	}

	public function hapus($table, $where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function tambah($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	public function pilih_tertentu($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($table, $data, $where)
	{
		$this->db->where($where);
		return $this->db->update($table, $data);
	}
}