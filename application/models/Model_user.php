<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
	/*^^^^^^^^^^^^^*/


	///-------------------------------------
	function _get_user_roles($user_id){
		$this->db->where('user_id', $user_id);
		// return $this->db->get('user_roles')->result();
		
		$x = $this->db->get('user_roles')->result();
		if (false == empty($x)) {
			$user_role_type_id = array();
			foreach ($x as $key => $value) {
				$user_role_type_id[] = $value->roles_id;
			}
			return $user_role_type_id;
		}
		
	}
	///-------------------------------------
	///-------------------------------------
	function _get_user($param){
    
		$param['user_password'] = md5($param['user_password']); /// 
		
		$this->db->where('user_email', $param['user_email']);
		$this->db->where('user_password', $param['user_password']);
		$x = $this->db->get('user')->result();
// opn($x);
		if (false == empty($x)) {
			$nomor = 1;
			foreach ($x as $key => $value) {
				$value->nomor = $nomor++;
				$value->user_role = $this->_get_user_roles($value->user_id);
			}
			return $x;
		} else {
			return array();
		}
	}

  

  ///-------------------------------------
}