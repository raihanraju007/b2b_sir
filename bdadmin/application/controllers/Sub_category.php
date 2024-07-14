<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_category extends Admin_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'array', 'form'));
 
    }

	public function index($cat_id)
	{
		$subcategorylist = $this->bizadminmodel->get_sub_category_list(0, $cat_id);
		$this->assign('subcategorylist',$subcategorylist);
       
        $info = $this->bizadminmodel->get_category_list($cat_id);
        $this->assign('info',$info[0]);
		
        $this->load->view('sub_category/sub_category_list');
	}

	public function get_sub_category_info(){
        $id = $this->input->post('id');
        $info = $this->bizadminmodel->get_sub_category_list($id, 0);
        echo json_encode($info[0]);
        exit;
    }

    public function AddEditFromSubCategory(){

    	$data = $this->input->post();

        $cat_id = $data['category_id'];

        $id = $data['id'];


        if(trim($_FILES["catIimg"]["name"])!='') {

            $files = $_FILES;
            $_FILES['image_name']['name']= $files['catIimg']['name'];
            $_FILES['image_name']['type']= $files['catIimg']['type'];
            $_FILES['image_name']['tmp_name']= $files['catIimg']['tmp_name'];
            $_FILES['image_name']['error']= $files['catIimg']['error'];
            $_FILES['image_name']['size']= $files['catIimg']['size'];
            $new_name=rand(100000,999999).'_'.rand(100000,999999).$_FILES['image_name']['name'];
            $new_name=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '',$new_name);
            $new_name=preg_replace('/\s+/','_',$new_name);
            $field_name = "catIimg";
            
            $this->upload_cat_img($field_name,$new_name);

            $productImg = $new_name;

            $data['sub_cat_img'] = $productImg;

        }



        $table = "sub_category";

        unset($data['id']);

        if($id > 0){
            $this->bizadminmodel->update_date($table, $data, $id);
            $this->session->set_flashdata('success', 'Sub Category Updated Succesfully.');
        }else{

            $this->bizadminmodel->insert_date($table, $data);
            $this->session->set_flashdata('success', 'Sub Category Added Succesfully.');
        }

        redirect('sub_category/index/'.$cat_id, 'refresh');

    }


    function upload_cat_img($field_name,$image_name)
    {
        $upconfig['upload_path'] = "../upload/category";
        $file_info = pathinfo($image_name);
        $upconfig['file_name']=basename($image_name,'.'.$file_info['extension']);
        $upconfig['allowed_types'] = 'gif|jpg|png|jpeg';
        /*$upconfig['max_size'] = '300';
        $upconfig['max_width'] = '300';
        $upconfig['max_height'] = '320';*/
        $upconfig['overwrite'] = FALSE;
        $this->load->library('upload');
        $this->upload->initialize($upconfig);

        if (!$this->upload->do_upload($field_name))
        {   
            return false;
        }
        else
        {   
            $updata=$this->upload->data();          
            return true;            
        }
    }




}
