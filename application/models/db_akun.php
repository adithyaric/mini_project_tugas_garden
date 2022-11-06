<?php
class Db_akun extends CI_Model
{
	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function detail_data($id = NULL)
	{
		$query = $this->db->get_where('tb_akun', array('id' => $id))->row();
		return $query;
	}
	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function tampil_data()
	{
		return $this->db->get('tb_akun');
	}
	public function tampil_pengaturan()
	{
		return $this->db->get('tb_pengaturan');
	}
	// public function tampil_suhu()
	// {
	// 	return $this->db->get('tb_suhu');
	// }
	// public function tampil_tanah()
	// {
	// 	return $this->db->get('tb_tanah');
	// }
	// public function tampil_udara()
	// {
	// 	return $this->db->get('tb_udara');
	// }
}
