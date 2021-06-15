<?php

class Join extends Controller {
	public function index()
	{
		$this->view('join/index');
	}

	public function tambah()
	{	
		$namaFile = $_FILES['file_ssig']['name'];
    	$namaTmp = $_FILES['file_ssig']['tmp_name'];
    	$target_dir = '../public/img/';
    	$uploaded = move_uploaded_file($namaTmp, $target_dir.$namaFile);
    	$_POST['file_ssig'] = $namaFile;

    	$namaFile = $_FILES['file_ssposter']['name'];
    	$namaTmp = $_FILES['file_ssposter']['tmp_name'];
    	$target_dir = '../public/img/';
    	$uploaded = move_uploaded_file($namaTmp, $target_dir.$namaFile);
    	$_POST['file_ssposter'] = $namaFile;

    	$namaFile = $_FILES['file_ssshare']['name'];
    	$namaTmp = $_FILES['file_ssshare']['tmp_name'];
    	$target_dir = '../public/img/';
    	$uploaded = move_uploaded_file($namaTmp, $target_dir.$namaFile);
    	$_POST['file_ssshare'] = $namaFile;

    	$namaFile = $_FILES['file_ssikut']['name'];
    	$namaTmp = $_FILES['file_ssikut']['tmp_name'];
    	$target_dir = '../public/img/';
    	$uploaded = move_uploaded_file($namaTmp, $target_dir.$namaFile);
    	$_POST['file_ssikut'] = $namaFile;
		if($this->model('join_customer')->tambahDataCustomer($_POST) > 0){
			header('Location:' . BASEURL);
			exit;
		}
	}
}