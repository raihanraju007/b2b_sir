<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'array', 'form'));
 
    }

	public function index()
	{
	    
	    $ddata = $this->bizadminmodel->get_dashboad_data();
		$this->assign('ddata',$ddata);
	    
		$this->load->view('dashboard/admin_db');
	}
}
