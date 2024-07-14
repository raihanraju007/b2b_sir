<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends Admin_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('html', 'array', 'form'));
	}

	public function index()
	{
		$plist = $this->bizadminmodel->get_product_list();
		$this->assign('list', $plist);
		//echo '<pre>';print_r($plist);exit;
		$this->load->view('product/product_list');
	}

	public function pending_product_list()
	{

		$plist = $this->bizadminmodel->get_pending_product_list();
		$this->assign('list', $plist);

		$this->load->view('product/pending_product_list');
	}

	public function view($id)
	{
		$info = $this->bizadminmodel->get_product_details($id);
		$this->assign('info', $info);

		$gl = $this->bizadminmodel->get_product_gallary($id);
		$this->assign('image', $gl);
		//echo '<pre>';print_r($gl);exit;
		$this->load->view('product/product_view');
	}

	public function add()
	{

		$company = $this->bizadminmodel->getCompanyList();
		$country = $this->bizadminmodel->get_country_list(0);
		$unit = $this->bizadminmodel->getProductUnit();

		$this->assign('unit', $unit);
		$this->assign('country', $country);
		$this->assign('company', $company);



		if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$data = $this->input->post();

			if (trim($_FILES["productImg"]["name"]) != '') {

				$files = $_FILES;
				$_FILES['image_name']['name'] = $files['productImg']['name'];
				$_FILES['image_name']['type'] = $files['productImg']['type'];
				$_FILES['image_name']['tmp_name'] = $files['productImg']['tmp_name'];
				$_FILES['image_name']['error'] = $files['productImg']['error'];
				$_FILES['image_name']['size'] = $files['productImg']['size'];
				$new_name = rand(100000, 999999) . '_' . rand(100000, 999999) . $_FILES['image_name']['name'];
				$new_name = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '', $new_name);
				$new_name = preg_replace('/\s+/', '_', $new_name);
				$field_name = "productImg";

				$this->upload_product($field_name, $new_name);

				$productImg = $new_name;

				$data['product_image'] = $productImg;
			}

			$pid = $this->bizadminmodel->insert_date('product', $data);

			$p_gallery = $_FILES["pg"]["name"];

			if (!empty($p_gallery)) {

				foreach ($p_gallery as $key => $pgallary) {
					if ($pgallary == '' || $pgallary == null) {
						continue;
					}
					$imgGallery = $pgallary;
					$expbanner1 = explode('.', $imgGallery);
					$imgType = $expbanner1[1];
					date_default_timezone_set('Australia/Melbourne');
					$date = date('m/d/Yh:i:sa', time());
					$rand = rand(10000, 99999);
					$encname = $date . $rand;
					$gallaryImg = md5($encname) . '.' . $imgType;
					$gallaryImgUpload = "../upload/product/" . $gallaryImg;
					move_uploaded_file($_FILES['pg']['tmp_name'][$key], $gallaryImgUpload);

					$gallaryStore['product_pic'] = $gallaryImg;
					$gallaryStore['product_id'] = $pid;

					$this->bizadminmodel->insert_date('product_gallery', $gallaryStore);
				}
			}

			//echo '<Pre>';print_r($data);exit;

			redirect('product/index', 'refresh');
		}



		$this->load->view('product/product_add');
	}

	public function edit($id)
	{

		$pinfo = $this->bizadminmodel->get_product_info($id);
		$this->assign('pinfo', $pinfo);

		//	echo '<pre>';print_r($pinfo);exit;

		$com_cat = $this->bizadminmodel->get_com_cat_list($pinfo['company_id']);

		$cclist = array();
		foreach ($com_cat as $v) {
			$cclist[$v['id']] = $v['category_name'];
		}

		$exitinglist = $cclist[$pinfo['category_id']];

		if (empty($exitinglist)) {

			$ccdata['company_id'] = $pinfo['company_id'];
			$ccdata['category_id'] = $pinfo['category_id'];
			$ccdata['sub_category_id'] = $pinfo['sub_category_id'];
			$ccdata['bus_category_id'] = 2;

			$this->bizadminmodel->insert_date('assign_company', $ccdata);
		}

		$com_cat = $this->bizadminmodel->get_com_cat_list($pinfo['company_id']);
		$this->assign('com_cat', $com_cat);


		$com_sub_cat = $this->bizadminmodel->get_com_sub_cat_list($pinfo['company_id'], $pinfo['category_id']);
		$this->assign('com_sub_cat', $com_sub_cat);

		$company = $this->bizadminmodel->getCompanyList();
		$country = $this->bizadminmodel->get_country_list(0);
		$unit = $this->bizadminmodel->getProductUnit();

		$this->assign('unit', $unit);
		$this->assign('country', $country);
		$this->assign('company', $company);

		$gl = $this->bizadminmodel->get_product_gallary($id);
		$this->assign('image', $gl);



		if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$data = $this->input->post();

			if (trim($_FILES["productImg"]["name"]) != '') {

				$files = $_FILES;
				$_FILES['image_name']['name'] = $files['productImg']['name'];
				$_FILES['image_name']['type'] = $files['productImg']['type'];
				$_FILES['image_name']['tmp_name'] = $files['productImg']['tmp_name'];
				$_FILES['image_name']['error'] = $files['productImg']['error'];
				$_FILES['image_name']['size'] = $files['productImg']['size'];
				$new_name = rand(100000, 999999) . '_' . rand(100000, 999999) . $_FILES['image_name']['name'];
				$new_name = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '', $new_name);
				$new_name = preg_replace('/\s+/', '_', $new_name);
				$field_name = "productImg";

				$this->upload_product($field_name, $new_name);

				$productImg = $new_name;

				$data['product_image'] = $productImg;
			}

			//echo '<pre>';print_r($id);

			//echo '<pre>';print_r($data);


			if (empty($data['is_feture_product'])) {
				$data['is_feture_product'] = 0;
			}

			//echo '<pre>';print_r($data);exit;

			$this->bizadminmodel->update_date('product', $data, $id);

			$pid = $id;

			$p_gallery = $_FILES["pg"]["name"];

			if (!empty($p_gallery)) {

				foreach ($p_gallery as $key => $pgallary) {
					if ($pgallary == '' || $pgallary == null) {
						continue;
					}
					$imgGallery = $pgallary;
					$expbanner1 = explode('.', $imgGallery);
					$imgType = $expbanner1[1];
					date_default_timezone_set('Australia/Melbourne');
					$date = date('m/d/Yh:i:sa', time());
					$rand = rand(10000, 99999);
					$encname = $date . $rand;
					$gallaryImg = md5($encname) . '.' . $imgType;
					$gallaryImgUpload = "../upload/product/" . $gallaryImg;
					move_uploaded_file($_FILES['pg']['tmp_name'][$key], $gallaryImgUpload);

					$gallaryStore['product_pic'] = $gallaryImg;
					$gallaryStore['product_id'] = $pid;

					$this->bizadminmodel->insert_date('product_gallery', $gallaryStore);
				}
			}

			//echo '<Pre>';print_r($data);exit;

			redirect('product/edit/' . $id, 'refresh');
		}



		$this->load->view('product/product_edit');
	}


	public function get_com_cat_list($id)
	{

		$sub_cat = $this->bizadminmodel->get_com_cat_list($id);

		$list = array();

		foreach ($sub_cat as $key => $v) {
			$list[] = array('id' => $v['id'], 'name' => $v['category_name']);
		}

		echo json_encode($list);
		exit;
	}

	public function get_com_sub_cat_list($cat_id, $com_id)
	{

		$sub_cat = $this->bizadminmodel->get_com_sub_cat_list($cat_id, $com_id);

		$list = array();

		foreach ($sub_cat as $key => $v) {
			$list[] = array('id' => $v['id'], 'name' => $v['sub_category_name']);
		}

		echo json_encode($list);
		exit;
	}


	function upload_product($field_name, $image_name)
	{
		$upconfig['upload_path'] = "../upload/product";
		$file_info = pathinfo($image_name);
		$upconfig['file_name'] = basename($image_name, '.' . $file_info['extension']);
		$upconfig['allowed_types'] = 'gif|jpg|png|jpeg';
		/*$upconfig['max_size'] = '300';
        $upconfig['max_width'] = '300';
        $upconfig['max_height'] = '320';*/
		$upconfig['overwrite'] = FALSE;
		$this->load->library('upload');
		$this->upload->initialize($upconfig);

		if (!$this->upload->do_upload($field_name)) {
			return false;
		} else {
			$updata = $this->upload->data();
			return true;
		}
	}


	public function assing_compnay_category()
	{

		$data['company_id'] = $this->input->post('company_id');
		$data['category_id'] = $this->input->post('assing_cat_id');
		$data['sub_category_id'] = $this->input->post('assing_sub_cat_id');
		$data['bus_category_id'] = $this->input->post('bus_cat_id');
		//echo '<pre>';print_r($data);exit;

		$id = $this->bizadminmodel->insert_date('assign_company', $data);

		echo json_encode($id);
		exit;
	}


	public function get_similar_product()
	{

		$name = $this->input->post('name');

		$list = $this->bizadminmodel->get_similar_product_search($name);

		echo json_encode($list);
	}

	public function delete($id)
	{
		if (!is_numeric($id)) {
			show_404();
		}

		$result = $this->bizadminmodel->delete_product($id);

		if ($result) {
			$this->session->set_flashdata('success', 'Product deleted successfully.');
		} else {
			$this->session->set_flashdata('error', 'Failed to delete product.');
		}

		redirect('product/index', 'refresh');
	}

	public function delete_pending_product($id)
	{
		if (!is_numeric($id)) {
			show_404();
		}

		$result = $this->bizadminmodel->delete_product($id);

		if ($result) {
			$this->session->set_flashdata('success', 'Product deleted successfully.');
		} else {
			$this->session->set_flashdata('error', 'Failed to delete product.');
		}

		redirect('product/pending_product_list', 'refresh');
	}
}
