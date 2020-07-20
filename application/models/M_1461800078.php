<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_1461800078 extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	function input_data($table, $data){
		$this->db->insert($table, $data);
	}

	public function view_data(){
		return $this->db->get('user')->result_array();
	}

	function select_data($where){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id', $where);
		return $this->db->get()->result_array();
	}

	function update_data($id, $data){
		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}

	function delete_data($where){
		return $this->db->delete('user', $where);
	}

	public function histori(){
		$this->db->select('tbl_order.tanggal,tbl_detail_order.produk,tbl_detail_order.qty,tbl_detail_order.harga, tbl_detail_order.status');
		$this->db->from('tbl_order');
		$this->db->join('tbl_detail_order', 'tbl_detail_order.order_id = tbl_order.id');
		$query = $this->db->get();
		return $query;
	}
}
