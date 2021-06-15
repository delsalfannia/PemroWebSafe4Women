<?php

class join_customer{
	private $table = 'join_customer';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function tambahDataCustomer($data)
	{	
		$query = "INSERT INTO join_customer VALUES ('', :nama, :umur, :alamat, :instansi , :email, :file_ssig, :file_ssposter, :file_ssshare, :file_ssikut)";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('umur', $data['umur']);
		$this->db->bind('alamat', $data['alamat']);
		$this->db->bind('instansi', $data['instansi']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('file_ssig', $data['file_ssig']);
		$this->db->bind('file_ssposter', $data['file_ssposter']);
		$this->db->bind('file_ssshare', $data['file_ssshare']);
		$this->db->bind('file_ssikut', $data['file_ssikut']);

		$this->db->execute();

		return $this->db->rowCount();		

	}
}