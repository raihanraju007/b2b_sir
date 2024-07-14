<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quatation extends Admin_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'array', 'form'));
 
    }

	public function index()
	{
		$type = $this->bizadminmodel->get_type_list();
		$quatation = $this->bizadminmodel->get_quatation_list_for_buysell(0);
		
		$this->assign('quatation',$quatation);
		$this->assign('type',$type);
       
		$this->load->view('quatation/quatation_list');
	}
	
	public function view($id){
	    
	    $quatation = $this->bizadminmodel->get_quatation_list_for_buysell($id);
	    
	    //echo '<pre>';print_r($quatation[0]);
		
		$this->assign('quatation',$quatation[0]);
		
		$buysellinfo = $this->bizadminmodel->get_buysell_information($quatation[0]['buysell_id']);
	    
	    
	    //echo '<pre>';print_r($buysellinfo);exit;
	    
	    	$this->assign('bsinfo', $buysellinfo);
	    
	    
	    $this->load->view('quatation/view');
	    
	    
	    
	    
	    
	}
	
	public function update_quatation_status(){
	    $post_data = $this->input->post();
	    
	    $id=$post_data['id'];
	    unset($post_data['id']);
	    
	    $this->bizadminmodel->update_date('quotation', $post_data, $id);
	    
	     redirect('quatation/view/'. $id, 'refresh');
	    
	}
	
	
	
}