<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_category extends Admin_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'array', 'form'));
 
    }

	public function index()
	{
		$categorylist = $this->bizadminmodel->get_service_category_list();
		$this->assign('categorylist',$categorylist);
		$this->load->view('service_category/service_category_list');
	}

	public function get_service_category_info(){
        $id = $this->input->post('id');
        $info = $this->bizadminmodel->get_service_category_list($id);
        echo json_encode($info[0]);
        exit;
    }

    public function AddEditFromServiceCategory(){

    	$data = $this->input->post();

        $id = $data['id'];

        $table = "service_category";

        unset($data['id']);

        if($id > 0){
            $this->bizadminmodel->update_date($table, $data, $id);
            $this->session->set_flashdata('success', 'Service Category Updated Succesfully.');
        }else{

            $this->bizadminmodel->insert_date($table, $data);
            $this->session->set_flashdata('success', 'Service Category Added Succesfully.');
        }

        redirect('service_category/index', 'refresh');

    }




}
