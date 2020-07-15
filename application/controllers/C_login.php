<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_login');
        $this->load->helper('url');
        $this->load->model('M_1461800078');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $this->load->view('/pages/v_login');
    }

    public function home(){
        $this->load->view('admin/home');
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cek = $this->M_login->cek_login('user', array('username' => $username), array('password' => $password));
        if($cek > 0){
            foreach($cek as $apps){
                $session_data = array(
                    'id'        => $apps->id,
                    'nama'      => $apps->nama,
                    'username'  => $apps->username,
                    'password'  => $apps->password,
                    'level'     => $apps->level
                );
                $this->session->set_userdata($session_data);

                if($this->session->userdata("level") == "admin"){
                    $this->load->view('admin/home');
                }
                else if($this->session->userdata("level") == "kasir"){
                    $this->load->view('kasir/home');
                }
                else{
                    redirect('Page/index');
                }
            }
        }
        else{
			$this->load->view('/pages/v_login');
        }
    }

    function homekonsumen(){
        $this->load->view('konsumen/home');
    }

    function create_view(){
        $this->load->view('admin/create');
    }
    
    function create_data(){
        $nama           = $this->input->post('nama');
        $email            = $this->input->post('email');
        $alamat       = $this->input->post('alamat');
        $data = array(
            'nama'      => $nama,
            'email'     => $email,
            'alamat'    => $alamat
        );
        $this->M_1461800078->input_data('db_toko',$data);
        $this->load->view('admin/home');
    }
        
    function read(){
        $data = $this->M_1461800078->view_data();
        $data = array('data'=>$data);
        $this->load->view('admin/read',$data);
    }

    function update(){
		$data = $this->M_1461800078->view_data();
		$data = array('data' => $data);
		$this->load->view('admin/update_view', $data);
	}

	function goupdate(){
		$id = $this->input->post('id');
		$data = $this->M_1461800078->select_data($id);
		$data = array('data' => $data);
		$this->load->view('admin/update', $data);
	}

	function sendupdate(){
		$nama   = $this->input->post('nama');
		$email  = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$id     = $this->input->post('id');
		$data   = array(
			'nama'      => $nama,
			'email'     => $email,
            'alamat'    => $alamat
		);
		$this->M_1461800078->update_data($id, $data);
		$this->load->view('admin/home');
	}

    function delete(){
        $data = $this->M_1461800078->view_data();
        $data = array('data'=>$data);
        $this->load->view('admin/delete',$data);
    }

    function deletedata(){
        $id = $this->input->post('id');
        $where = array('id' => $id);
        $this->M_1461800078->delete_data($where);
        $this->load->view('v_1461800078');
    }

    function history(){
        $data['data']=$this->M_1461800078->histori()->result();
		$this->load->view('konsumen/history',$data);
    }
}