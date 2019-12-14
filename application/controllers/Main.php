<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {
	
	public function __construct(){
		parent::__construct(); 
		//opn($this->data);
		$this->data['header'] = $this->parser->parse('adminLTE/alt_header.html', $this->data, true); 
		
		$this->data['sidebar_left'] = $this->parser->parse('adminLTE/alt_sidebar_left.html', $this->data, true);
		$this->data['sidebar_right'] = $this->parser->parse('adminLTE/alt_sidebar_right.html', $this->data, true); 
    
		$this->data['footer'] = $this->parser->parse('adminLTE/alt_footer.html', $this->data, true); 
	}

	public function index()
	{
		
		// if($this->_is_login){
			
			// if ($this->_is_admin){
				// $this->parser->parse('mybalikpapan/admin_main.html',$this->data);
			// }else{
				
				// $this->parser->parse('mybalikpapan/user_main.html',$this->data);
			// }
		// }else{ 
			$this->data['body'] = $this->parser->parse('adminLTE/alt_dashboard.html', $this->data, true); 
			$this->parser->parse('adminLTE/alt_index.html', $this->data);
		// }
		
	}
}
