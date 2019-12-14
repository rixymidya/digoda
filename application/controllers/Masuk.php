<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_user');
	}
	public function index()
	{ 
		if($this->_is_login){
			redirect(base);
		}
		else{
			
			if($this->input->post()){
				$param = $this->input->post();
				$user_info = $this->model_user->_get_user($param); 
					
					if($user_info == null){
						redirect(base.'/masuk');
					}else{
						$_SESSION['user_info'] = $user_info;
						redirect(base);
					}
			}else{
				$this->parser->parse('mybalikpapan/login.html', $this->data);
			}
			
		}
	
	}
}
				
				