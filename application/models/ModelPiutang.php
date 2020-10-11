<?php
class ModelPiutang extends CI_Model {

	public function tampil_semua($table)
	{
		return $this->db->get($table);
	}
}