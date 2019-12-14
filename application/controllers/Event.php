<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_Controller {
	
	public function __construct(){
		parent::__construct(); 
		$this->load->model('model_generic');
		
		
		$this->data['header'] = $this->parser->parse('adminLTE/alt_header.html', $this->data, true); 
		$this->data['sidebar_left'] = $this->parser->parse('adminLTE/alt_sidebar_left.html', $this->data, true);
		$this->data['sidebar_right'] = $this->parser->parse('adminLTE/alt_sidebar_right.html', $this->data, true); 
		$this->data['footer'] = $this->parser->parse('adminLTE/alt_footer.html', $this->data, true); 
    
	}
	/************************************************************/
	public function del($kalender_event_id){
		
		$param['table'] = 'kalender_event';
		$param['kalender_event_id'] = $kalender_event_id;
		$this->model_generic->_del($param);
		redirect(base.'/kreatif/kegiatan');
	}
	/************************************************************/
	public function add(){
		
		if($_POST){
			$param = $_POST;
			$param['table'] = 'kalender_event';
			$param['kalender_event_id'] = '';
			$param['date'] = date('Y-m-d',strtotime($param['tanggal'])).' '. date('H:i:s',strtotime($param['jam']));
			unset($param['tanggal']);
			unset($param['jam']);
			// opn($param);
			$this->model_generic->_set($param);
			redirect(base.'/kreatif/kegiatan');
		}
		
		$this->data['body'] = $this->parser->parse('mybalikpapan/kreatif/event_add.html',$this->data, true);
		$this->parser->parse('adminLTE/alt_index.html', $this->data);
	}
	/************************************************************/
	/************************************************************/
	public function event_ajax()
	{
		$param['table'] = 'kalender_event';
		if(isset($_GET['date'])){
			//$a = $_GET['date'].' '.$_GET['date'];
			// die($a);
			
			$this->db->like('date', $_GET['date']);
		}
		$event = $this->model_generic->_get($param);
		foreach($event as $key=>$value){
			$value->tanggal = date('Y-m-d', strtotime($value->date));
			$value->jam = date('h:i A', strtotime($value->date));//kek apa s nya biar ga nongol
			// Kalau pake AM / PM,  H = kecil
			// dahitu dibuangnya piye hehe apanya
		}
		$event = json_encode($event);
		echo $event;
		//opn($event);
		
	}
	/************************************************************/
	/************************************************************/
}
