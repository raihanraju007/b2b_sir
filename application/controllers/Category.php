<?php 

class Category extends Frontend_Controller 
{

	function __construct() {
        parent::__construct();
        $this->set_layout('website');
        $this->load->helper(array('html', 'array', 'form', 'url'));
    }

    public function index($slag){
		//print_r($slag);exit;
    	$cat_info = $this->websitemodel->category_info($slag);
    	$this->assign('cat_info',$cat_info);
		
		$fplist = $this->websitemodel->get_cat_prodcut_list_last4($cat_info['id']);
		$this->assign('fplist',$fplist);
		
    	$product_cat = $this->websitemodel->get_cat_list();
    	$this->assign('product_cat',$product_cat);


    	$product_suppliear = $this->websitemodel->get_category_wise_company($cat_info['id']);
    	$this->assign('product_suppliear',$product_suppliear);



    	$this->load->view('category/clist');
    }

    public function sub($slag){

    	$sub_cat_info = $this->websitemodel->sub_category_info($slag);
    	$this->assign('sub_cat_info',$sub_cat_info);

    	$sub_product_list = $this->websitemodel->get_sub_cat_prodcut_list($sub_cat_info['id']);
		
		//echo '<pre>';print_r($sub_cat_info);exit;
    	$this->assign('sub_product_list',$sub_product_list);

    	$product_cat = $this->websitemodel->get_cat_list();
    	$this->assign('product_cat',$product_cat);

    	$this->load->view('category/sub_list');


    }


}