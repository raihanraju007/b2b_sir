<?php

class Product extends Frontend_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->set_layout('website');
		$this->load->helper(array('html', 'array', 'form', 'url'));
	}

	public function index()
	{

		$product_cat = $this->websitemodel->get_cat_list();
		$this->assign('product_cat', $product_cat);

		$country = $this->websitemodel->get_country_list();
		//echo '<pre>';print_r($country);exit;
		$this->assign('country', $country);

		$productlist = $this->websitemodel->get_product_top12_list();
		$this->assign('productlist', $productlist);

		$this->load->view('product/p_cat_list');
	}

	public function view($slag)
	{

		$pinfo = $this->websitemodel->get_product_details($slag);
		$this->assign('pinfo', $pinfo);
		//echo '<pre>';print_r($pinfo);exit;

		$countylist = $this->websitemodel->get_country_list();
		$this->assign('countylist', $countylist);

		$pgalary = $this->websitemodel->get_product_gallary($pinfo['pid']);
		$this->assign('pgalary', $pgalary);

		$relatedproduct = $this->websitemodel->get_related_product($pinfo['category_id'], $pinfo['sub_category_id'], $pinfo['pid']);
		$this->assign('relatedproduct', $relatedproduct);



		$this->load->view('product/pview');
	}
}
