<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class District extends Admin_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'array', 'form'));
 
    }

	public function index()
	{
		$contrylist = $this->bizadminmodel->get_district_list();
		$this->assign('contrylist',$contrylist);

        $country = $this->bizadminmodel->get_country_list();
        $this->assign('country',$country);

		$this->load->view('district/district_list');
	}

	public function get_district_info(){
        $id = $this->input->post('id');
        $info = $this->bizadminmodel->get_district_list($id);
        echo json_encode($info[0]);
        exit;
    }

    public function AddEditFromDistrict(){

    	$data = $this->input->post();

        $id = $data['id'];

        $table = "district";

        unset($data['id']);

        if($id > 0){
            $this->bizadminmodel->update_date($table, $data, $id);
            $this->session->set_flashdata('success', 'District Updated Succesfully.');
        }else{

            $this->bizadminmodel->insert_date($table, $data);
            $this->session->set_flashdata('success', 'District Added Succesfully.');
        }

        redirect('district/index', 'refresh');

    }




}
