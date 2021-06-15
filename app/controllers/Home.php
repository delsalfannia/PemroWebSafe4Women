<?php

class Home extends Controller {
	public function index()
	{	
		$this->view('home/index');
	}

	public function tambah()
	{	
		if($this->model('tabel_pengaduan')->tambahDataAduan($_POST) > 0){
			header('Location:' . BASEURL);
			exit;
		}
	}
}