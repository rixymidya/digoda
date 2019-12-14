<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kreatif extends CI_Model
{
  function _get_kalender_event($param=null, $limit=null,$offset=null){
	if($param['id']){
		$this->db->where('date_event', $param['date_event']);
	}
    $x = $this->db->get('kalender_event', $limit, $offset)->result();
    return $x;
  }
  ///-------------------------------------
  // delete dengan acuan id_kelas
  ///-------------------------------------
  // function _del_kelas($kelas_id){
	  
	// $this->db->where('kelas_id',$kelas_id);
	// $this->db->delete('kelas');
  // }
  // ///-------------------------------------
  // ///------------------------------------- 
  // ///-------------------------------------
  // ///-------------------------------------
  function _cek_event($param){
	$this->db->where('id',$param['id']);
	return $this->db->get('kalender_event')->num_rows();
  }
  // ///-------------------------------------
  // // insert
  // ///-------------------------------------
  function _set_event($param){
	$cek = $this->_cek_event($param);
	if($cek){
		$this->db->where('id',$param['id']);
		$this->db->update('kalender_event', $param);
	}
	else{
		$this->db->insert('kalender_event', $param);
	}
  }
  // ///-------------------------------------
  // function _get_kelas_xxx($param=null, $limit=null, $offset=null){
    
	// if(isset($param['kelas_id'])){
		// $this->db->where('kelas_id',$param['kelas_id']);
	// }
	
	// //('select * from kelas left join kelas ON kelas.id=kelas.kelas_id left join kelas ON kelas.nip=kelaspas_nip');
	
	// $this->db->join('kelas', 'kelas.kelas_id = kelas.kelas_id', 'left');		
	// // $this->db->join('kelas', 'kelas.kelas_nip = kelas.kelas_nip', 'left');
	// // kenapa idnya null?
	// //
    // $x = $this->db->get('kelas', $limit, $offset )->result();
    // return $x;
  // }

  // ///-------------------------------------
  // function _get_kreatif_count(){
    // return $this->db->get('kreatif')->num_rows();
  // }
}