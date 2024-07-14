<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends Admin_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'array', 'form'));
 
    }

	public function index()
	{
		$contrylist = $this->bizadminmodel->get_country_list();
		$this->assign('contrylist',$contrylist);
		$this->load->view('country/country_list');
	}

	public function get_country_info(){
        $id = $this->input->post('id');
        $info = $this->bizadminmodel->get_country_list($id);
        echo json_encode($info[0]);
        exit;
    }

    public function AddEditFromCountry(){

    	$data = $this->input->post();

        $id = $data['id'];

        $table = "country";

        unset($data['id']);
		
		
		if (isset ($_FILES['new_image'])){   
	  
		  $imagename = $_FILES['new_image']['name'];
          $source = $_FILES['new_image']['tmp_name'];
          $target = "../upload/country/128_128/".$imagename;
          $type=$_FILES["new_image"]["type"];

          if($type=="image/jpeg" || $type=="image/jpg" || $type=="image/png"){
			  
			  move_uploaded_file($source, $target);
			  
			  //orginal image making part

			  $imagepath = $imagename;
			  $save = "../upload/country/128_128/" . $imagepath; //This is the new file you saving
			  $file = "../upload/country/128_128/" . $imagepath; //This is the original file
			  
			  list($width, $height) = getimagesize($file) ;
			  
			  $modwidth = 114;
			  $modheight = 84;
			  
			  $tn = imagecreatetruecolor($modwidth, $modheight) ;
			  $image = imagecreatefromjpeg($file) ;
			  imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;
								
			  imagejpeg($tn, $save, 100) ;

			  //thumbnail image making part
			  $save = "../upload/country/16_16/" . $imagepath; //This is the new file you saving
			  $file = "../upload/country/128_128/" . $imagepath; //This is the original file   
			  
			  
			  list($width, $height) = getimagesize($file) ;
			  $modwidth = 14;
			  $modheight = 11;
			  $tn = imagecreatetruecolor($modwidth, $modheight) ;
			  $image = imagecreatefromjpeg($file) ;
			  imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;
			
			   imagejpeg($tn, $save, 100) ;
			   
			   $data['flag'] = $imagepath;
		   
			}
		}

        if($id > 0){
            $this->bizadminmodel->update_date($table, $data, $id);
            $this->session->set_flashdata('success', 'Country Updated Succesfully.');
        }else{

            $this->bizadminmodel->insert_date($table, $data);
            $this->session->set_flashdata('success', 'Country Added Succesfully.');
        }

        redirect('country/index', 'refresh');

    }
	
	public function flag(){
		
		$this->load->view('country/flag');
	}




}
