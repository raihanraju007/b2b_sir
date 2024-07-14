<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buysell extends Admin_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'array', 'form'));
 
    }

	public function index()
	{
		$buyselllist = $this->bizadminmodel->get_buysell_list();
		
		$this->assign('buysell',$buyselllist);
       
		$this->load->view('buysell/buysell_list');
	}
	
	public function add(){
	    
	    $company = $this->bizadminmodel->getCompanyList();
		$this->assign('company',$company);
        
        $unit = $this->bizadminmodel->getProductUnit();
		$this->assign('unit',$unit);
		
		
		if ($this->input->server('REQUEST_METHOD') == 'POST'){

			$data = $this->input->post();
			$slag = strtolower($data['ad_title']);
			$slag = str_replace(" ","-", $slag);
			$slag = str_replace(".","", $slag);
			$slag = str_replace(",","", $slag);
			$slag = str_replace("&","", $slag);
			$slag = str_replace("@","", $slag);
			$slag = str_replace("#","", $slag);
			$slag = str_replace("%","", $slag);
			$slag = str_replace("*","", $slag);
			$slag = str_replace("!","", $slag);
			
			$data['slag'] = uniqid();
			
			if(trim($_FILES["productImg"]["name"])!='') {

	            $files = $_FILES;
	            $_FILES['image_name']['name']= $files['productImg']['name'];
	            $_FILES['image_name']['type']= $files['productImg']['type'];
	            $_FILES['image_name']['tmp_name']= $files['productImg']['tmp_name'];
	            $_FILES['image_name']['error']= $files['productImg']['error'];
	            $_FILES['image_name']['size']= $files['productImg']['size'];
	            $new_name=rand(100000,999999).'_'.rand(100000,999999).$_FILES['image_name']['name'];
	            $new_name=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '',$new_name);
	            $new_name=preg_replace('/\s+/','_',$new_name);
	            $field_name = "productImg";
	            
	            $this->upload_product($field_name,$new_name);

	            $productImg = $new_name;

	            $data['product_img'] = $productImg;

	        }

	         $this->bizadminmodel->insert_date('buysale', $data);

	         

			 redirect('buysell/index', 'refresh');

		}
		
		
		
		
       
		$this->load->view('buysell/add');
	    
	}
	
	public function edit($id){
	    
	    $info = $this->bizadminmodel->get_buysell_info($id);
		//echo '<pre>'; print_r($info);exit;
		$this->assign('info',$info);
		
		$company = $this->bizadminmodel->getCompanyList();
		$this->assign('company',$company);
		
		//$categorylist = $this->bizadminmodel->get_com_cat_list($info['company_id']);
		$categorylist = $this->bizadminmodel->get_category_list(0);
		
		//$categorylist = $this->bizadminmodel->get_category_list();
        $this->assign('categorylist',$categorylist);
        
        $unit = $this->bizadminmodel->getProductUnit();
		$this->assign('unit',$unit);
		
		
		if ($this->input->server('REQUEST_METHOD') == 'POST'){

			$data = $this->input->post();

			if(trim($_FILES["productImg"]["name"])!='') {

	            $files = $_FILES;
	            $_FILES['image_name']['name']= $files['productImg']['name'];
	            $_FILES['image_name']['type']= $files['productImg']['type'];
	            $_FILES['image_name']['tmp_name']= $files['productImg']['tmp_name'];
	            $_FILES['image_name']['error']= $files['productImg']['error'];
	            $_FILES['image_name']['size']= $files['productImg']['size'];
	            $new_name=rand(100000,999999).'_'.rand(100000,999999).$_FILES['image_name']['name'];
	            $new_name=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '',$new_name);
	            $new_name=preg_replace('/\s+/','_',$new_name);
	            $field_name = "productImg";
	            
	            $this->upload_product($field_name,$new_name);

	            $productImg = $new_name;

	            $data['product_img'] = $productImg;

	        }
			
			//echo '<pre>'; print_r($id);
			//echo '<pre>'; print_r($data);exit;

	         $this->bizadminmodel->update_date('buysale', $data, $id);

	         

			 redirect('buysell/edit/'. $id, 'refresh');

		}
		
		
		
		
       
		$this->load->view('buysell/edit');
	    
	}
	
	
    function upload_product($field_name,$image_name)
    {
        $upconfig['upload_path'] = "../upload/buysell";
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

?>