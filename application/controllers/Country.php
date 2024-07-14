<?php 

class Country extends Frontend_Controller 
{

	function __construct() {
        parent::__construct();
        $this->set_layout('country_layout');
        $this->load->helper(array('html', 'array', 'form', 'url'));
    }

    public function index($slag){
        echo $slag;exit;
    	$cat_info = $this->websitemodel->category_info($slag);
    	$this->assign('cat_info',$cat_info);
		
		$fplist = $this->websitemodel->get_cat_prodcut_list_last4($cat_info['id']);
		$this->assign('fplist',$fplist);
		
    	$product_cat = $this->websitemodel->get_cat_list();
    	$this->assign('product_cat',$product_cat);


    	$product_suppliear = $this->websitemodel->get_category_wise_company($cat_info['id']);
    	$this->assign('product_suppliear',$product_suppliear);



    	$this->load->view('country/index');
    }

    


}