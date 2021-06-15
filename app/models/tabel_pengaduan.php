<?php

class tabel_pengaduan {
	private $table = 'tabel_pengaduan';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}
	public function tambahDataAduan($data)
	{	
		$query = "INSERT INTO tabel_pengaduan VALUES ('',:nama, :nama_lengkap, :email , :pesan_aduan)";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nama_lengkap', $data['nama_lengkap']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('pesan_aduan', $data['pesan']);

		$this->db->execute();

		return $this->db->rowCount();
	}
}