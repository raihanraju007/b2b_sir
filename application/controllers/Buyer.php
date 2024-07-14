<?php 

class Buyer extends Frontend_Controller 
{
	
	function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'array', 'form', 'url'));
    }

    public function index(){

        $company_id = $this->session->userdata('company_id');

        $company_info = $this->sellermodel->get_comapany_info($company_id);
        //echo '<pre>';print_r($company_info);exit;
		
		$sdata['com_log'] = $company_info['logo'];
		$sdata['com_name'] = $company_info['company_name'];
		
        $this->session->set_userdata($sdata);
        
        
         $loginfo = $this->sellermodel->get_comapany_log_status($company_id);
		
		
        $this->assign('loginfo',$loginfo);
        
        $this->assign('company_info',$company_info);


    	$this->load->view('buyer/profile');
    }

    public function update_profile(){

        $company_id = $this->session->userdata('company_id');

        $post_data = $this->input->post();

        $post_data['type'] = implode(",",$post_data['type']);
        
        $company_info = $this->sellermodel->get_comapany_info($company_id);
       
        
        if( $company_info['status'] == 'Approve' ){
            
            foreach( $post_data as $key => $val){
                unset($company_info[$key]);
            }
            
            unset($company_info['id']);
            
            $post_data['company_id'] = $company_id;
            $post_data['approve_status'] = 0;
            
            $insert_val = array_merge($company_info, $post_data);
            
             $this->sellermodel->insert('company_log',  $insert_val);
            
        }else{
             $this->sellermodel->update('company', $company_id, $post_data);
        }

       // echo '<pre>';print_r($post_data);exit;
        
       

        redirect('buyer/index', 'refresh');
    }

    public function update_company_logo(){

        $company_id = $this->session->userdata('company_id');

        $image_name = $_FILES["logo"]["name"];
        
        $ext = end(explode(".", $_FILES['logo']['name']));
        $file_name = rand(100000,999999).'_'.rand(100000,999999).'.'.$ext; 
    
        if ($this->upload_images('logo',$file_name)) {
            $post_data['logo'] = $file_name;
            $this->sellermodel->update('company', $company_id, $post_data);
            echo json_encode(array('status'=>'1','logo_path'=>$file_name));
        }else{
            echo json_encode(array('status'=>'0','msg'=>$this->upload->display_errors()));
        }
    }



    public function get_sub_cat_list($id){

        $sub_cat = $this->sellermodel->get_sub_cat_list($id);

        $list =array();

        foreach ($sub_cat as $key => $v) {
            $list[] = array('id'=>$v['id'], 'name'=>$v['sub_category_name']);
        }

        echo json_encode($list);
        exit;

    }

    function upload_images($field_name,$image_name)
    {
        $upconfig['upload_path'] = "upload/company/";
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

    //----------------brochure----------\\

    public function brochure(){

        $company_id = $this->session->userdata('company_id');
        $brochurelist = $this->sellermodel->get_comapany_brochure_list($company_id);
		//echo '<pre>';print_r($brochurelist);exit;
        $this->assign('brochurelist',$brochurelist);
       
        $this->load->view('buyer/brochure');
    }

    public function brochure_save(){

        $post_data = $this->input->post();

        $id = $post_data['id'];

        unset($post_data['id']);

        if(trim($_FILES["brochure"]["name"])!='') {
            $files = $_FILES;
            $_FILES['image_name']['name']= $files['brochure']['name'];
            $_FILES['image_name']['type']= $files['brochure']['type'];
            $_FILES['image_name']['tmp_name']= $files['brochure']['tmp_name'];
            $_FILES['image_name']['error']= $files['brochure']['error'];
            $_FILES['image_name']['size']= $files['brochure']['size'];
            $new_name=rand(100000,999999).'_'.rand(100000,999999).$_FILES['image_name']['name'];
            $new_name=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '',$new_name);
            $new_name=preg_replace('/\s+/','_',$new_name);
            $field_name = "brochure";
            
            $this->upload_brochure($field_name,$new_name);

            $brochure = $new_name;

            $post_data['brochure'] = $brochure;

        }

         $company_id = $this->session->userdata('company_id');

         $post_data['company_id'] = $company_id;

            //echo '<pre>';print_r($post_data);exit;
        if($id > 0){
            $this->sellermodel->update('company_brochure', $id, $post_data);
        }else{
            $this->sellermodel->insert('company_brochure', $post_data);
        }
        

         redirect('buyer/brochure', 'refresh');

    }

    function upload_brochure($field_name,$image_name)
    {
        $upconfig['upload_path'] = "upload/company/brochure";
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

    //----------------certificate----------\\

    public function certificate(){

        $company_id = $this->session->userdata('company_id');
        $brochurelist = $this->sellermodel->get_comapany_certificate_list($company_id);
        $this->assign('brochurelist',$brochurelist);

        $certificateType = $this->sellermodel->certificate_type();
        $this->assign('certificateType',$certificateType);
        
       
        $this->load->view('buyer/certificate');
    }

    public function certificate_save(){

        $post_data = $this->input->post();

        $id = $post_data['id'];

        unset($post_data['id']);

        if(trim($_FILES["certification_image"]["name"])!='') {
            $files = $_FILES;
            $_FILES['image_name']['name']= $files['certification_image']['name'];
            $_FILES['image_name']['type']= $files['certification_image']['type'];
            $_FILES['image_name']['tmp_name']= $files['certification_image']['tmp_name'];
            $_FILES['image_name']['error']= $files['certification_image']['error'];
            $_FILES['image_name']['size']= $files['certification_image']['size'];
            $new_name=rand(100000,999999).'_'.rand(100000,999999).$_FILES['image_name']['name'];
            $new_name=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '',$new_name);
            $new_name=preg_replace('/\s+/','_',$new_name);
            $field_name = "certification_image";
            
            $this->upload_certificate($field_name,$new_name);

            $certification_image = $new_name;

            $post_data['certificate'] = $certification_image;

        }

         $company_id = $this->session->userdata('company_id');

         $post_data['company_id'] = $company_id;

        //echo '<pre>';print_r($post_data);exit;
        if($id > 0){
            $this->sellermodel->update('company_certificate', $id, $post_data);
        }else{
            $this->sellermodel->insert('company_certificate', $post_data);
        }
        

         redirect('buyer/certificate', 'refresh');

    }

    function upload_certificate($field_name,$image_name)
    {
        $upconfig['upload_path'] = "upload/company/certificate";
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


    //----------------vedio----------\\

    public function video(){

        $company_id = $this->session->userdata('company_id');
        $brochurelist = $this->sellermodel->get_comapany_video_list($company_id);
        $this->assign('brochurelist',$brochurelist);
        $this->load->view('buyer/video');
    }

    public function video_save(){

        $post_data = $this->input->post();

        $id = $post_data['id'];

        unset($post_data['id']);

         $company_id = $this->session->userdata('company_id');

         $post_data['company_id'] = $company_id;

        //echo '<pre>';print_r($post_data);exit;
        if($id > 0){
            $this->sellermodel->update('company_video', $id, $post_data);
        }else{
            $this->sellermodel->insert('company_video', $post_data);
        }
        

         redirect('buyer/video', 'refresh');

    }

    //---------------account-settings---------- \\


    public function account_settings(){

        $company_id = $this->session->userdata('company_id');

        $company_info = $this->sellermodel->get_comapany_info($company_id);
        //echo '<pre>';print_r($company_info);exit;
        $this->assign('company_info',$company_info);

        $this->load->view('buyer/account_settings');
    }

    public function save_contact_person_name(){


        $company_id = $this->session->userdata('company_id');

        $name = $this->input->post('name');

        $post_data['contact_person'] = $name;

       // echo '<pre>';print_r($post_data);exit;
        
        $updaterow = $this->sellermodel->update('company', $company_id, $post_data);

        if($updaterow){
           
            $array = array('status' => 200, 'message'=>'Save Successfully', 'contact_person'=>$name );
            
        }else{
            $array = array('status' => 300, 'message'=>'Error', 'contact_person'=>$name );
        }

        echo json_encode($array);


    }

    public function save_password(){


        $company_id = $this->session->userdata('company_id');

        $password = $this->input->post('password');

        $post_data['password'] = md5($password);
        $post_data['text_password'] = $password;

       // echo '<pre>';print_r($post_data);exit;
        
        $updaterow = $this->sellermodel->update('company', $company_id, $post_data);

        if($updaterow){
           
            $array = array('status' => 200, 'message'=>'Save Successfully' );
            
        }else{
            $array = array('status' => 300, 'message'=>'Error' );
        }

        echo json_encode($array);


    }

    //--------------name verication ---------\\

    public function get_verified(){

        $company_id = $this->session->userdata('company_id');

        $company_info = $this->sellermodel->get_comapany_info($company_id);
        //echo '<pre>';print_r($company_info);exit;
        $this->assign('company_info',$company_info);

        $this->load->view('buyer/get_verified');

    }


    public function save_company_name_file(){

        $post_data = '';

        if(trim($_FILES["business_license"]["name"])!='') {
            $files = $_FILES;
            $_FILES['image_name']['name']= $files['business_license']['name'];
            $_FILES['image_name']['type']= $files['business_license']['type'];
            $_FILES['image_name']['tmp_name']= $files['business_license']['tmp_name'];
            $_FILES['image_name']['error']= $files['business_license']['error'];
            $_FILES['image_name']['size']= $files['business_license']['size'];
            $new_name=rand(100000,999999).'_'.rand(100000,999999).$_FILES['image_name']['name'];
            $new_name=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '',$new_name);
            $new_name=preg_replace('/\s+/','_',$new_name);
            $field_name = "business_license";
            
            $this->upload_compnay_verification_file($field_name,$new_name);

            $certification_image = $new_name;

            $post_data['business_license']= $certification_image;


        }

        if(trim($_FILES["certification_file"]["name"])!='') {
            $files = $_FILES;
            $_FILES['image_name']['name']= $files['certification_file']['name'];
            $_FILES['image_name']['type']= $files['certification_file']['type'];
            $_FILES['image_name']['tmp_name']= $files['certification_file']['tmp_name'];
            $_FILES['image_name']['error']= $files['certification_file']['error'];
            $_FILES['image_name']['size']= $files['certification_file']['size'];
            $new_name=rand(100000,999999).'_'.rand(100000,999999).$_FILES['image_name']['name'];
            $new_name=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '',$new_name);
            $new_name=preg_replace('/\s+/','_',$new_name);
            $field_name = "certification_file";
            
            $this->upload_compnay_verification_file($field_name,$new_name);

            $certification_image = $new_name;
             $post_data['certification_file']= $certification_image;

        }

         if(trim($_FILES["telephone_bill"]["name"])!='') {
            $files = $_FILES;
            $_FILES['image_name']['name']= $files['telephone_bill']['name'];
            $_FILES['image_name']['type']= $files['telephone_bill']['type'];
            $_FILES['image_name']['tmp_name']= $files['telephone_bill']['tmp_name'];
            $_FILES['image_name']['error']= $files['telephone_bill']['error'];
            $_FILES['image_name']['size']= $files['telephone_bill']['size'];
            $new_name=rand(100000,999999).'_'.rand(100000,999999).$_FILES['image_name']['name'];
            $new_name=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '',$new_name);
            $new_name=preg_replace('/\s+/','_',$new_name);
            $field_name = "telephone_bill";
            
            $this->upload_compnay_verification_file($field_name,$new_name);

            $certification_image = $new_name;
            $post_data['telephone_bill']= $certification_image;

        }

         if(trim($_FILES["bank_statement"]["name"])!='') {
            $files = $_FILES;
            $_FILES['image_name']['name']= $files['bank_statement']['name'];
            $_FILES['image_name']['type']= $files['bank_statement']['type'];
            $_FILES['image_name']['tmp_name']= $files['bank_statement']['tmp_name'];
            $_FILES['image_name']['error']= $files['bank_statement']['error'];
            $_FILES['image_name']['size']= $files['bank_statement']['size'];
            $new_name=rand(100000,999999).'_'.rand(100000,999999).$_FILES['image_name']['name'];
            $new_name=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '',$new_name);
            $new_name=preg_replace('/\s+/','_',$new_name);
            $field_name = "bank_statement";
            
            $this->upload_compnay_verification_file($field_name,$new_name);

            $certification_image = $new_name;
            $post_data['bank_statement']= $certification_image;

        }


        $company_id = $this->session->userdata('company_id');

        if(!empty($post_data)){
            $this->sellermodel->update('company', $company_id, $post_data);
            $array = array('status' => 200);
        }else{
            $array = array('status' => 300);
        }

        

       
        
            

        echo json_encode($array);


    }

    function upload_compnay_verification_file($field_name,$image_name)
    {
        $upconfig['upload_path'] = "upload/company";
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

    public function p_list(){
        $company_id = $this->session->userdata('company_id');
        $plist = $this->sellermodel->get_product_list($company_id);
        $this->assign('plist',$plist);

        $this->load->view('seller/product_list');
    }

    public function add_product(){
        
        $this->load->view('buyer/product_add');   
    }

    public function edit_product($id){

        $info = $this->sellermodel->get_product_info($id);
        $this->assign('info',$info);

        $this->load->view('buyer/edit_product');

    }


    public function product_save(){

        $data = $this->input->post();
        $data['company_id'] = $this->session->userdata('company_id');
        
        $id = $data['id'];
        
        unset($data['id']);
        
        if($id == 0){

            $pid = $this->sellermodel->insert('product', $data);
			
			$paname = strtolower($data['product_name']);
			
			$paname = str_replace(" ","", $paname);
			$paname = str_replace(",","-", $paname);
			$paname = str_replace("&","", $paname);
			
			$update2['pslag'] = $paname . '-' . $pid;
			
			$this->sellermodel->update('product', $pid, $update2);
            
        }else{
            $pid = $id;

            $this->sellermodel->update('product', $pid, $data);
            
        }


        $p_gallery = $_FILES["images"]["name"];

        if(!empty($p_gallery)){
            
			$mpid = 1;
			
            foreach ($p_gallery as $key => $pgallary) {
                if($pgallary == '' || $pgallary == null){
                    continue;
                }
                $imgGallery=$pgallary; 
                $expbanner1=explode('.',$imgGallery);
                $imgType=$expbanner1[1];
                date_default_timezone_set('Australia/Melbourne');
                $date = date('m/d/Yh:i:sa', time());
                $rand=rand(10000,99999);
                $encname=$date.$rand;
                $gallaryImg=md5($encname).'.'.$imgType;
                $gallaryImgUpload="upload/product/".$gallaryImg;
                move_uploaded_file($_FILES['images']['tmp_name'][$key],$gallaryImgUpload);
                
                $gallaryStore['product_pic'] = $gallaryImg;
                $gallaryStore['product_id'] = $pid;
               
                $this->sellermodel->insert('product_gallery', $gallaryStore);
				
				
				if($mpid  ==  1){
				
					$data34['product_image'] = $gallaryImg;
				
				
					$this->sellermodel->update('product', $pid, $data34);
					
					$mpid ++;
				
				}
				
            }
        }

        
         redirect('buyer/p_list', 'refresh');
        
    
    }



}
?>