<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_stok extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_stok');
        $this->load->library('form_validation');
        $this->load->helper('download');
    }
    
    public function index(){
        $this->load->view('/pages/v_login');
    }

    public function home(){
        $this->load->view('kasir/home');
    }

    function create_view(){
        $this->load->view('kasir/create');
    }
    
    function create_data(){
        $nama_produk    = $this->input->post('nama_produk');
        $ukuran         = $this->input->post('ukuran');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');
        $data = array(
            'nama_produk'   => $nama_produk,
            'ukuran'        => $ukuran,
            'harga'         => $harga,
            'stok'          => $stok
        );
        $this->M_stok->input_data('db_toko',$data);
        $this->load->view('kasir/home');
    }
        
    function read(){
        $data = $this->M_stok->view_data();
        $data = array('data'=>$data);
        $this->load->view('kasir/read',$data);
    }

    function update(){
		$data = $this->M_stok->view_data();
		$data = array('data' => $data);
		$this->load->view('kasir/update_view', $data);
	}

	function goupdate(){
		$id = $this->input->post('id');
		$data = $this->M_stok->select_data($id);
		$data = array('data' => $data);
		$this->load->view('kasir/update', $data);
	}

	function sendupdate(){
		$nama_produk    = $this->input->post('nama_produk');
        $ukuran         = $this->input->post('ukuran');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');
		$id             = $this->input->post('id');
		$data = array(
			'nama_produk'   => $nama_produk,
            'ukuran'        => $ukuran,
            'harga'         => $harga,
            'stok'          => $stok
		);
		$this->M_stok->update_data($id, $data);
		$this->load->view('kasir/home');
	}

    function delete(){
        $data = $this->M_stok->view_data();
        $data = array('data'=>$data);
        $this->load->view('kasir/delete',$data);
    }

    function deletedata(){
        $id = $this->input->post('id');
        $where = array('id' => $id);
        $this->M_stok->delete_data($where);
        $this->load->view('v_1461800078');
    }

    function pembelian(){
		$data = $this->M_stok->view_pembelian();
		$data = array('data' => $data);
		$this->load->view('kasir/pembelianview', $data);
	}

	function gopembelian(){
		$id = $this->input->post('id');
		$data = $this->M_stok->select_pembelian($id);
		$data = array('data' => $data);
		$this->load->view('kasir/pembelianform', $data);
	}

	function sendpembelian(){
		$order_id    = $this->input->post('order_id');
        $produk         = $this->input->post('produk');
        $qty          = $this->input->post('qty');
        $harga           = $this->input->post('harga');
        $status         = $this->input->post('status');
		$id             = $this->input->post('id');
		$data = array(
			'order_id'   => $order_id,
            'produk'        => $produk,
            'qty'           => $qty,
            'harga'         => $harga,
            'status'          => $status
		);
		$this->M_stok->update_pembelian($id, $data);
		$this->load->view('kasir/home');
    }
    
    public function bukti(){
		$data['berkas'] = $this->db->get('tbl_berkas');
		$this->load->view('kasir/bukti',$data);
	}

	function download($id){
        $data = $this->db->get_where('tbl_berkas',['id'=>$id])->row();
		force_download('uploads/'.$data->nama,NULL);
	}
}