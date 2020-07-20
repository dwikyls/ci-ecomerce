<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
	function create(){
		$this->load->view('form_upload');
	}

	function proses(){
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'pdf|jpg|png';
		$config['max_size']             = 500;
		$config['max_width']            = 2048;
		$config['max_height']           = 1000;
		$config['encrypt_name'] 		= false;
		$this->load->library('upload',$config);
		$jumlah_berkas = count($_FILES['berkas']['name']);
		for($i = 0; $i < $jumlah_berkas;$i++){
            if(!empty($_FILES['berkas']['name'][$i])){
				$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
				$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
				$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];
				if($this->upload->do_upload('file')){
					$uploadData = $this->upload->data();
					$data['nama'] = $uploadData['file_name'];
					$data['tipe'] = $uploadData['file_ext'];
					$data['ukuran'] = $uploadData['file_size'];
					$this->db->insert('tbl_berkas',$data);
				}
			}
		}
		redirect('Page/index');
    }
}