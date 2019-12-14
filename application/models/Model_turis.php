<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_turis extends CI_Model
{
  function _get_hotel($param=null, $limit=null,$offset=null){
	if($param['id']){
		$this->db->where('id', $param['id']);
	}
    $x = $this->db->get('turis_hotel', $limit, $offset)->result();
    return $x;
  }
  ///-------------------------------------
  // delete dengan acuan id_kelas
  ///-------------------------------------
  function _del_kelas($kelas_id){
	  
	$this->db->where('kelas_id',$kelas_id);
	$this->db->delete('kelas');
  }
  ///-------------------------------------
  ///------------------------------------- 
  ///-------------------------------------
  ///-------------------------------------
  function _cek_hotel($param){
	$this->db->where('id',$param['id']);
	return $this->db->get('turis_hotel')->num_rows();
  }
  ///-------------------------------------
  // insert
  ///-------------------------------------
  function _set_hotel($param){
	$cek = $this->_cek_hotel($param);
	if($cek){
		$this->db->where('id',$param['id']);
		$this->db->update('turis_hotel', $param);
	}
	else{
		$this->db->insert('turis_hotel', $param);
	}
  }
  ///-------------------------------------
  function _get_kelas_xxx($param=null, $limit=null, $offset=null){
    
	if(isset($param['kelas_id'])){
		$this->db->where('kelas_id',$param['kelas_id']);
	}
	
	//('select * from kelas left join kelas ON kelas.id=kelas.kelas_id left join kelas ON kelas.nip=kelaspas_nip');
	
	$this->db->join('kelas', 'kelas.kelas_id = kelas.kelas_id', 'left');		
	// $this->db->join('kelas', 'kelas.kelas_nip = kelas.kelas_nip', 'left');
	// kenapa idnya null?
	//
    $x = $this->db->get('kelas', $limit, $offset )->result();
    return $x;
  }

  ///-------------------------------------
  function _get_hotel_count(){
    return $this->db->get('turis_hotel')->num_rows();
  }
}