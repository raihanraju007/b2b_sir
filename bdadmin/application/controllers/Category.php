<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('html', 'array', 'form'));
	}

	public function index()
	{
		$categorylist = $this->bizadminmodel->get_category_list();
		$this->assign('categorylist', $categorylist);
		//echo "<pre>";print_r($categorylist);exit;
		$this->load->view('category/category_list');
	}

	public function get_category_info()
	{
		$id = $this->input->post('id');
		$info = $this->bizadminmodel->get_category_list($id);
		echo json_encode($info[0]);
		exit;
	}

	public function AddEditFromCategory()
	{
		$data = $this->input->post();

		$id = $data['id'];

		// Check if the is_feature_cat field is set, if not set it to 0
		$data['is_feature_cat'] = isset($data['is_feature_cat']) ? $data['is_feature_cat'] : 0;

		if (trim($_FILES["catIimg"]["name"]) != '') {

			$files = $_FILES;
			$_FILES['image_name']['name'] = $files['catIimg']['name'];
			$_FILES['image_name']['type'] = $files['catIimg']['type'];
			$_FILES['image_name']['tmp_name'] = $files['catIimg']['tmp_name'];
			$_FILES['image_name']['error'] = $files['catIimg']['error'];
			$_FILES['image_name']['size'] = $files['catIimg']['size'];
			$new_name = rand(100000, 999999) . '_' . rand(100000, 999999) . $_FILES['image_name']['name'];
			$new_name = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '', $new_name);
			$new_name = preg_replace('/\s+/', '_', $new_name);
			$field_name = "catIimg";

			$this->upload_cat_img($field_name, $new_name);

			$productImg = $new_name;

			$data['cat_img'] = $productImg;
		}

		$table = "category";

		unset($data['id']);

		if ($id > 0) {
			$this->bizadminmodel->update_date($table, $data, $id);
			$this->session->set_flashdata('success', 'Category Updated Succesfully.');
		} else {
			$this->bizadminmodel->insert_date($table, $data);
			$this->session->set_flashdata('success', 'Category Added Succesfully.');
		}

		redirect('category/index', 'refresh');
	}

	function upload_cat_img($field_name, $image_name)
	{
		$upconfig['upload_path'] = "../upload/category";
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
}
