<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_sub_category extends Admin_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'array', 'form'));
 
    }

	public function index($cat_id)
	{
		$subcategorylist = $this->bizadminmodel->get_service_sub_category_list(0, $cat_id);
		$this->assign('subcategorylist',$subcategorylist);
        //echo '<pre>';print_r($subcategorylist);exit;
        $info = $this->bizadminmodel->get_service_category_list($cat_id);
        $this->assign('info',$info[0]);
		
        $this->load->view('service_sub_category/service_sub_category_list');
	}

	public function get_service_sub_category_info(){
        $id = $this->input->post('id');
        $info = $this->bizadminmodel->get_service_sub_category_list($id, 0);
        echo json_encode($info[0]);
        exit;
    }

    public function AddEditFromServiceSubCategory(){

    	$data = $this->input->post();

        $cat_id = $data['service_category_id'];

        $id = $data['id'];

        $table = "service_sub_category";

        unset($data['id']);

        if($id > 0){
            $this->bizadminmodel->update_date($table, $data, $id);
            $this->session->set_flashdata('success', 'Service Sub Category Updated Succesfully.');
        }else{

            $this->bizadminmodel->insert_date($table, $data);
            $this->session->set_flashdata('success', 'Service Sub Category Added Succesfully.');
        }

        redirect('service_sub_category/index/'.$cat_id, 'refresh');

    }




}
