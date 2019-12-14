<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar extends MY_Controller {

	public function __construct(){
		parent::__construct(); 
	}
	public function index()
	{ 
		session_destroy();
		// unset($_SESSION['user_info']);
		redirect(base);
	}
}