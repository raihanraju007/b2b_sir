<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends Admin_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'array', 'form'));
 
    }

	public function index()
	{
		$company = $this->bizadminmodel->get_compnay_list(0);
		$this->assign('categorylist',$company);
        //echo "<pre>";print_r($company);exit;
		$this->load->view('company/company_list');
	}

    public function pending_com_list()
    {
        $company = $this->bizadminmodel->get_pending_compnay_list();
        $this->assign('categorylist',$company);
        //echo "<pre>";print_r($company);exit;
        $this->load->view('company/pending_company_list');
    }
    
    public function not_verify_com_list(){
        $company = $this->bizadminmodel->not_verify_company_list();
        $this->assign('categorylist',$company);
       // echo "<pre>";print_r($company);exit;
        $this->load->view('company/not_verify_com_list');
    }
    
    public function company_review_data(){
        $company = $this->bizadminmodel->get_company_review_data_list(0);
        $this->assign('categorylist',$company);
       // echo "<pre>";print_r($company);exit;
        $this->load->view('company/compnay_review_list');
    }

    public function get_similar_company(){

        $name = $this->input->post('name');

        $list = $this->bizadminmodel->get_similar_compnay_search($name);

        echo json_encode($list);

    }

    public function view($id){

        $info = $this->bizadminmodel->get_all_view_compnay_list($id);
        $this->assign('info',$info[0]);


        $assigncompany = $this->bizadminmodel->getAssignCompany($id);
        $serviceassigncompany = $this->bizadminmodel->getAssignServiceCompany($id);

       // echo '<pre>';print_r($serviceassigncompany);exit;

        $this->assign('serviceassigncompany',$serviceassigncompany);
        $this->assign('assigncompany',$assigncompany);
        
        
        $plist = $this->bizadminmodel->get_company_product_list($id);
		$this->assign('list',$plist);




        $this->load->view('company/company_view');
    }
    
    public function review_data($id){
        
        $compnay_log = $this->bizadminmodel->get_company_review_data_list($id);
        
        $info = $this->bizadminmodel->get_all_view_compnay_list($compnay_log[0]['company_id']);
        
        
        $this->assign('info',$info[0]);
    
        
        $this->assign('compnay_log',$compnay_log[0]);
        
        $this->load->view('company/review_data');
    }

    public function edit($id){
		
        $info = $this->bizadminmodel->get_all_view_compnay_list($id);
        $this->assign('info',$info[0]);
		
		//echo '<pre>';print_r($info[0]);exit;

        $contrylist = $this->bizadminmodel->get_country_list();
        $this->assign('contrylist',$contrylist);

        $district = $this->bizadminmodel->get_distric_list($info[0]['country_id']);
        $this->assign('district',$district);

        $categorylist = $this->bizadminmodel->get_category_list();
        $this->assign('categorylist',$categorylist);

        $subcategorylist = $this->bizadminmodel->get_sub_category_list(0, $info[0]['cat_id']);
        $this->assign('subcategorylist',$subcategorylist);

       // echo '<pre>';print_r($info);exit;

        if ($this->input->server('REQUEST_METHOD') == 'POST'){

            $post_data = $this->input->post();

            $post_data['type'] = implode(",",$post_data['type']);

           // echo '<pre>';print_r();exit;
		   
		   if(trim($_FILES["clogo"]["name"])!='') {

	            $files = $_FILES;
	            $_FILES['image_name']['name']= $files['clogo']['name'];
	            $_FILES['image_name']['type']= $files['clogo']['type'];
	            $_FILES['image_name']['tmp_name']= $files['clogo']['tmp_name'];
	            $_FILES['image_name']['error']= $files['clogo']['error'];
	            $_FILES['image_name']['size']= $files['clogo']['size'];
	            $new_name=rand(100000,999999).'_'.rand(100000,999999).$_FILES['image_name']['name'];
	            $new_name=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '',$new_name);
	            $new_name=preg_replace('/\s+/','_',$new_name);
	            $field_name = "clogo";
	            
	            $this->upload_image($field_name,$new_name);

	            $clogo = $new_name;

	            $post_data['logo'] = $clogo;

	        }
			
			if(trim($_FILES["cbanner"]["name"])!='') {

	            $files = $_FILES;
	            $_FILES['image_name']['name']= $files['cbanner']['name'];
	            $_FILES['image_name']['type']= $files['cbanner']['type'];
	            $_FILES['image_name']['tmp_name']= $files['cbanner']['tmp_name'];
	            $_FILES['image_name']['error']= $files['cbanner']['error'];
	            $_FILES['image_name']['size']= $files['cbanner']['size'];
	            $new_name=rand(100000,999999).'_'.rand(100000,999999).$_FILES['image_name']['name'];
	            $new_name=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '',$new_name);
	            $new_name=preg_replace('/\s+/','_',$new_name);
	            $field_name = "cbanner";
	            
	            $this->upload_image($field_name,$new_name);

	            $cbanner = $new_name;

	            $post_data['banner'] = $cbanner;

	        }
		

            $this->bizadminmodel->update_date('company', $post_data, $id);
            $this->session->set_flashdata('success', 'Company Updated Succesfully.');

            redirect('company/index', 'refresh');

        }

        $this->load->view('company/company_edit');
    }
    
    public function review_data_updated(){
        $id = $this->input->post('id');
        $compnay_id = $this->input->post('company_id');
        
        $compnay_log = $this->bizadminmodel->get_company_review_data_list($id);
        
        
       unset($compnay_log[0]['password']);
       unset($compnay_log[0]['email']);
       unset($compnay_log[0]['company_name']);
       unset($compnay_log[0]['company_id']);
        unset($compnay_log[0]['id']);
        unset($compnay_log[0]['approve_status']);
        unset($compnay_log[0]['slag']);
        unset($compnay_log[0]['updated_at']);
        
        $update = $compnay_log[0];
        
        
        $this->bizadminmodel->update_date('company', $update, $compnay_id);
        
        
        $logs['approve_status'] = 1;
        
        $this->bizadminmodel->update_date('company_log', $logs, $id);
        
        $this->session->set_flashdata('success', 'Company Data Approved Succesfully.');

        redirect('company/company_review_data', 'refresh');

        
        
        
        
    }

    public function approve_compnay(){

        $data = $this->input->post();

        $id = $data['id'];

        $cat_id = $data['cat_id'];
        $sub_cat_id = $data['sub_cat_id'];
        $bus_cat_id = $data['bus_cat_id'];

        $servicedata['service_category_id'] = $data['service_cat_id'];
        $servicedata['sub_service_category_id'] = $data['sub_service_cat_id'];
        $servicedata['company_id'] = $id;

        $this->bizadminmodel->delete_assing_service_comapny($id);
        $this->bizadminmodel->insert_date('assign_service_company', $servicedata);


        unset($data['service_cat_id']);
        unset($data['sub_service_cat_id']);
        unset($data['cat_id']);
        unset($data['sub_cat_id']);
        unset($data['bus_cat_id']);

        $data['cat_id'] = $cat_id[0];
        $data['sub_cat_id'] = $sub_cat_id[0];


        $table = "company";

        unset($data['id']);

        if($id > 0){
            $this->bizadminmodel->update_date($table, $data, $id);
            $this->session->set_flashdata('success', 'Company Approved Succesfully.');
            
            $this->send_company_approve_main($id);
            
        }


        $this->bizadminmodel->delete_assing_comapny($id);


        foreach ($cat_id as $key => $v) {

           $insert=array();

           $insert['category_id'] = $v;
           $insert['company_id'] = $id;
           $insert['sub_category_id'] = $sub_cat_id[$key];
           $insert['bus_category_id'] = $bus_cat_id[$key];

           $this->bizadminmodel->insert_date('assign_company', $insert);

        }

        redirect('company/index', 'refresh');

    }

	public function p_brochure(){
        $brochurelist = $this->bizadminmodel->get_compnay_product_brochure_list();
        //echo "<pre>";print_r($brochurelist);exit;
        $this->assign('brochurelist',$brochurelist);
        $this->load->view('company/brochure');
    }

    public function approve_brochure(){

        $data = $this->input->post();

        $id = $data['id'];

        $table = "company_brochure";

        unset($data['id']);

        if($id > 0){
            $this->bizadminmodel->update_date($table, $data, $id);
            $this->session->set_flashdata('success', 'Brochure Approved Succesfully.');
        }

        redirect('company/p_brochure', 'refresh');
    }


    public function certificate(){
        $brochurelist = $this->bizadminmodel->get_compnay_certificate_list();
        //echo "<pre>";print_r($brochurelist);exit;
        $this->assign('brochurelist',$brochurelist);
        $this->load->view('company/certificate');
    }

    public function approve_certificate(){

        $data = $this->input->post();

        $id = $data['id'];

        $table = "company_certificate";

        unset($data['id']);

        if($id > 0){
            $this->bizadminmodel->update_date($table, $data, $id);
            $this->session->set_flashdata('success', 'Certificate Approved Succesfully.');
        }
        
        redirect('company/certificate', 'refresh');
    }

    public function video(){
        $brochurelist = $this->bizadminmodel->get_compnay_video_list();
        //echo "<pre>";print_r($brochurelist);exit;
        $this->assign('brochurelist',$brochurelist);
        $this->load->view('company/video');
    }

    public function approve_video(){

        $data = $this->input->post();

        $id = $data['id'];

        $table = "company_video";

        unset($data['id']);

        if($id > 0){
            $this->bizadminmodel->update_date($table, $data, $id);
            $this->session->set_flashdata('success', 'Video Approved Succesfully.');
        }
        
        redirect('company/video', 'refresh');
    }

    public function get_sub_cat_list($id){

        $sub_cat = $this->bizadminmodel->get_sub_cat_list($id);

        $list =array();

        foreach ($sub_cat as $key => $v) {
            $list[] = array('id'=>$v['id'], 'name'=>$v['sub_category_name']);
        }

        echo json_encode($list);
        exit;

    }

     public function get_sub_service_cat_list($id){

        $sub_cat = $this->bizadminmodel->get_sub_service_cat_list($id);

        $list =array();

        foreach ($sub_cat as $key => $v) {
            $list[] = array('id'=>$v['id'], 'name'=>$v['s_sub_category_name']);
        }

        echo json_encode($list);
        exit;

    }

    public function delete($id){

        $this->bizadminmodel->delete('company', $id);
        $this->session->set_flashdata('success', 'Company delete Succesfully.');
        
        redirect('company/index', 'refresh');
    }
	
	public function pending_delete($id){

        $this->bizadminmodel->delete('company', $id);
        $this->session->set_flashdata('success', 'Company delete Succesfully.');
        
        redirect('company/pending_com_list', 'refresh');
    }
	
	function upload_image($field_name,$image_name)
    {
        $upconfig['upload_path'] = "../upload/company";
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
    
    public function delete_approve_company(){
        
        $data = $this->input->post();
        
        if(empty($data['comids'])){
            
            $this->session->set_flashdata('error', 'Please Select Checkbox.');
            
            if( $data['comtype'] == 3 ){
                redirect('company/not_verify_com_list', 'refresh');
            }
        
            redirect('company/pending_com_list', 'refresh');
            
        }else{
            
            $table = "company";
            $updata['status'] = 'Approve';
            
            foreach( $data['comids'] as $ids ){
                
                if( $data['comtype'] == 1 ){
                   
                    
                    $rval = $this->send_company_approve_main($ids);
                    
                    if( $rval == 1){
                        $this->bizadminmodel->update_date($table, $updata, $ids);
                    }
                        
                }else{
                    
                     $this->bizadminmodel->delete('company', $ids);
                     
                }
                
            }
            
        }
        
        
        if( $data['comtype'] == 1 ){
            $this->session->set_flashdata('success', 'Company approve Succesfully.');
        }elseif( $data['comtype'] == 3){
            
            $this->session->set_flashdata('success', 'Company delete Succesfully.');
            
             redirect('company/not_verify_com_list', 'refresh');
             
        }else{
            
            $this->session->set_flashdata('success', 'Company delete Succesfully.');
             
        }
        
        
        redirect('company/pending_com_list', 'refresh');
        
       
        
        
    }
    
    public function send_company_approve_main($com_id){
		
		//-----------------send mail------------------\\
		
		$info = $this->bizadminmodel->get_all_view_compnay_list($com_id);
       
       $mialcontent = "Your company is approved.";
	
		//$to_email = $data['email'];
		$to_email = $info[0]['email'];
		
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'mail.b2bitem.com';
		$config['smtp_port'] = 587; //if 80 dosenot work use 24 or 21
		$config['smtp_user']  = 'support@b2bitem.com';  
		$config['smtp_pass']  = 'WEGME}?vbcgN';  
		$config['_smtp_auth'] = true;
		$config['smtp_crypto'] = 'tls';
		$config['protocol'] = 'smtp';
		$config['mailtype']  = 'html'; 
		$config['charset']    = 'iso-8859-1';
		$config['wordwrap']   = TRUE;

		$this->load->library('email');
		$this->email->initialize($config);

		$this->email->set_newline("\r\n");
		$this->email->from('no-reply@b2bitem.com', 'B2BITEM');  //same email u use for smtp_user 
		$this->email->to($to_email);
		$this->email->subject('Verify Your Email Address');
		$this->email->message($mialcontent);
		
		if($this->email->send())
		 {
		  return 1;	
		 } else{
		    return 0;	
		  
		
		}
		
	
	}
	
	
	public function c_product_view($pid, $cid){
	    
	    $info = $this->bizadminmodel->get_product_details($pid);
		$this->assign('info',$info);
		
		$gl = $this->bizadminmodel->get_product_gallary($pid);
		$this->assign('image',$gl);
		
		$this->assign('cid',$cid);
		//echo '<pre>';print_r($gl);exit;
		$this->load->view('company/product_view');
	    
	}




}
