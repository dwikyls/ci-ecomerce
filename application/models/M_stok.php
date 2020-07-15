<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_stok extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}

	function input_data($table, $data){
		$this->db->insert($table, $data);
	}

	public function view_data(){
		return $this->db->get('tbl_produk')->result_array();
	}

	function select_data($where){
		$this->db->select('*');
		$this->db->from('tbl_produk');
		$this->db->where('id', $where);
		return $this->db->get()->result_array();
	}

	function update_data($id, $data){
		$this->db->where('id', $id);
		$this->db->update('tbl_produk', $data);
	}

	function delete_data($where){
		return $this->db->delete('tbl_produk', $where);
	}

	public function view_pembelian(){
		return $this->db->get('tbl_detail_order')->result_array();
	}

	function select_pembelian($where){
		$this->db->select('*');
		$this->db->from('tbl_detail_order');
		$this->db->where('id', $where);
		return $this->db->get()->result_array();
	}

	function update_pembelian($id, $data){
		$this->db->where('id', $id);
		$this->db->update('tbl_detail_order', $data);
	}
}
