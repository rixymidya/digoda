<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->_is_login = false;
    $this->_is_logout = true;
    $this->_is_admin = false;
    $this->_is_user = false;
	
	$this->data['is_admin'] = '';
	$this->data['is_user'] = '';
	
	// opn($_SESSION);
    
    if(!isset($_SESSION['user_info'])){ 
		// $user_info = array();
		//$this->data['user_name'] = $user_info;
		// opn($user_info);
		$this->data['user_info'] = array();
	}
    else{ 
		$user_info = $_SESSION['user_info'];
		$this->data['user_info'] = $user_info;
		
		$this->_is_login   = true; 
		$this->_is_logout   = false; 
	    $this->_is_admin   = in_array('1', $_SESSION['user_info'][0]->user_role);
	    $this->_is_user    = in_array('2', $_SESSION['user_info'][0]->user_role);
	}	/// ini salah tempat
	$this->data['is_admin'] = $this->_is_admin?:'hidden destroy';
	$this->data['is_user'] = $this->_is_user?:'hidden destroy';
	$this->data['is_login'] = $this->_is_login?:'hidden destroy';
	$this->data['is_logout'] = $this->_is_logout?:'hidden destroy';
    
	
    $base = str_replace($_SERVER['SERVER_ADDR'], $_SERVER['HTTP_HOST'], base_url());
	$base = str_replace('[','',$base);
	$base = str_replace(']','',$base);
	define('base', rtrim($base,'/'));
    $this->data['base'] = base;  
  }
  
}