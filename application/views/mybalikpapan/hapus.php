<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_siswa');

		$this->data['jumlah_siswa'] = $this->model_siswa->_get_siswa_count();  
		$this->data['gurus_all'] = $this->model_siswa->_get_gurus();  
		$this->data['kelas_all'] = $this->model_siswa->_get_kelas();  
		
		$this->data['header'] = $this->parser->parse('adminLTE/alt_header.html', $this->data, true); 
		
		$this->data['sidebar_left'] = $this->parser->parse('adminLTE/alt_sidebar_left.html', $this->data, true);
		$this->data['sidebar_right'] = $this->parser->parse('adminLTE/alt_sidebar_right.html', $this->data, true); 
    
		$this->data['footer'] = $this->parser->parse('adminLTE/alt_footer.html', $this->data, true); 
	}
	/***************************************************/
	/***************************************************/
	public function index(){ 
		// if($this->_is_admin){
		// if(1==1){
		if($this->_is_admin || $this->_is_guru){
			$this->data['body'] = $this->parser->parse('adminLTE/alt_dashboard.html', $this->data, true); 
			$this->parser->parse('adminLTE/alt_index.html', $this->data);
		}else{
			redirect(base.'logout');
		}
	
	}
	/***************************************************/
   
}