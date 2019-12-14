<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turis extends MY_Controller {
	
	public function __construct(){
		parent::__construct(); 
		$this->load->model('model_turis');
		
		$this->data['jumlah_hotel'] = $this->model_turis->_get_hotel_count(); //hotel  
		$hotel_all = $this->model_turis->_get_hotel(); 
		
		foreach($hotel_all as $key=>$value){
			$bintang_hotel = $value->bintang_hotel;
			$beha = range(0, $bintang_hotel-1);
			$bbhh = array();
			foreach($beha as $val_beha){
				$bbhh[] = '<i class="fa fa-star text-yellow"></i>';
			}
			$xxx = implode('',$bbhh);
			$value->bintang_hotel = $xxx;
		} 
		// opn($hotel_all);
		
		$this->data['hotel_all'] = $hotel_all;  //hotel
		
		
		$this->data['header'] = $this->parser->parse('adminLTE/alt_header.html', $this->data, true); 
		$this->data['sidebar_left'] = $this->parser->parse('adminLTE/alt_sidebar_left.html', $this->data, true);
		$this->data['sidebar_right'] = $this->parser->parse('adminLTE/alt_sidebar_right.html', $this->data, true); 
		$this->data['footer'] = $this->parser->parse('adminLTE/alt_footer.html', $this->data, true); 
    
	}

	public function index()
	{
		
			$this->data['body'] = $this->parser->parse('mybalikpapan/turis.html', $this->data, true); 
			$this->parser->parse('adminLTE/alt_index.html', $this->data);
		
	}
		
	public function hotel()
	{ 
		$this->data['body'] = $this->parser->parse('mybalikpapan/turis/hotel.html', $this->data, true); 
		$this->parser->parse('adminLTE/alt_index.html', $this->data);
	}
	/////////
	public function create_hotel(){
	   if($this->_is_login){
			if( $this->input->post()){
				$param=$this->input->post();
				$this->model_turis->_set_hotel($param);
				redirect(base.'/turis/hotel');
			}else{
				$this->data['body'] = $this->parser->parse('mybalikpapan/penginapan/create_hotel.html', $this->data, true);  
				$this->parser->parse('adminLTE/alt_index.html', $this->data);
			}
			}else{ 
							redirect(base);
			}
	}
			
	
	public function guesthouse()
	{
			$this->data['body'] = $this->parser->parse('mybalikpapan/turis/guesthouse.html', $this->data, true); 
			$this->parser->parse('adminLTE/alt_index.html', $this->data);
	}
		
	public function kost()
	{
			$this->data['body'] = $this->parser->parse('mybalikpapan/turis/kost.html', $this->data, true); 
			$this->parser->parse('adminLTE/alt_index.html', $this->data);
	}
		
	
	
}
