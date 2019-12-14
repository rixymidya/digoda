<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_generic extends CI_Model
{
	
	
	/************************************************************/
	public function _del($param){
		$table = $param['table']; 
		$this->db->where($table.'_id', $param[$table.'_id']); 
		$this->db->delete($table);
	}
	/************************************************************/
	public function _cek($param){
		$table = $param['table']; 
		$this->db->where($table.'_id', $param[$table.'_id']);
		return $this->db->get($table)->num_rows();
	}
	/************************************************************/
	public function _set($param){
		$table = $param['table'];
		$cek = $this->_cek($param);
		unset($param['table']);
		if($cek){
			$this->db->where($table.'_id', $param[$table.'_id']);
			$this->db->update($table,$param);
		}else{
			$this->db->insert($table, $param);
		}
	}
	/************************************************************/
	/************************************************************/
	public function _get($param, $limit=null, $offset=null){
		
		$table = $param['table'];
		$x = $this->db->get($table, $limit, $offset)->result();
		return $x;
	}
	/************************************************************/
} 