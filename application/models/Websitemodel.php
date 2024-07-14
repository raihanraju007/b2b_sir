<?php

class Websitemodel extends Frontend_Model
{


	public function check_email_id($email)
	{

		$this->db->select('id');
		$this->db->from('user');
		$this->db->where('email', $email);
		$rs = $this->db->get();
		return $rs->num_rows();
	}

	public function check_company_email($email)
	{

		$this->db->select('*');
		$this->db->from('company');
		$this->db->where('email', $email);
		$rs = $this->db->get();
		return $rs->row_array();
	}

	public function getCompanyProfile($slag)
	{
		$this->db->select('c.*, co.country_name');
		$this->db->from('company c');
		$this->db->join('country co', 'c.country_id=co.id', 'left');
		$this->db->where('c.slag', $slag);
		//$this->db->where('id',27619);
		//$this->db->order_by('id', 'DESC');
		$rs = $this->get_row();
		return $rs;
	}


	public function get_all_info($table, $id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('id', $id);
		$rs = $this->get_row();
		return $rs;
	}

	public function insert($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function update($table, $id, $data)
	{
		return $this->db->update($table, $data, array('id' => $id));
	}

	public function check_login()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('password');

		$this->db->select('*');
		$this->db->from('company');
		$this->db->where('email', $email);
		$this->db->where('password', md5($pass));
		//$this->db->where('password', $pass);	
		$this->db->where('verify', 1);
		$query = $this->db->get();
		$rs = $query->row_array();

		return $rs;
	}


	public function get_logged_user()
	{
		$userid = $this->session->userdata('admin_userid');
		$this->db->select('*');
		$this->db->from('company');
		$this->db->where(array('id' => $userid));
		$user = $this->get_row();
		return $user;
	}

	//----------get country---------\\

	public function get_country_list()
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->where('flag !=', 'null');
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}


	public function get_cat_list()
	{
		$this->db->select('*');
		$this->db->from('category');
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_product_list()
	{

		$this->db->select('p.id, p.product_name, p.price, p.pslag, c.company_name, cat.category_name, pn.name as unit');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cat', 'cat.id=p.category_id', 'left');
		$this->db->join('product_unit pn', 'pn.id=p.unit_id', 'left');
		$this->db->where("p.status", "Active");
		$this->db->order_by("p.updated_at", "desc");
		$this->db->limit(8);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_product_top12_list()
	{

		$this->db->select('p.id, p.product_name, p.product_image, p.price, p.pslag, c.company_name, cat.category_name, pn.name as unit, cou.country_name, cou.flag');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cat', 'cat.id=p.category_id', 'left');
		$this->db->join('country cou', 'cou.id=p.country_id', 'left');
		$this->db->join('product_unit pn', 'pn.id=p.unit_id', 'left');
		$this->db->where("p.status", "Active");
		$this->db->order_by("p.updated_at", "desc");
		$this->db->limit(12);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_new_seller_compnay_list()
	{
		$this->db->select('c.*, cou.country_name, cou.flag');
		$this->db->from('company c');
		$this->db->join('country cou', 'cou.id=c.country_id', 'left');
		$this->db->where('c.company_user_type', 'Seller');
		$this->db->where('c.status', 'Approve');
		$this->db->order_by("c.updated_at", "desc");
		$this->db->limit(8);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_country_top9_list()
	{
		$this->db->select('*');
		$this->db->from('country');
		$this->db->limit(9);
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}

	public function new_seller_top_10_last()
	{

		$this->db->select('c.company_name, c.slag, cat.category_name, sub_cat.sub_category_name, cou.country_name,cou.flag');
		$this->db->from('company c');
		$this->db->join('category cat', 'cat.id=c.cat_id', 'left');
		$this->db->join('sub_category sub_cat', 'sub_cat.id=c.sub_cat_id', 'left');
		$this->db->join('country cou', 'cou.id=c.country_id', 'left');
		$this->db->where('c.status', 'Approve');
		$this->db->where('c.company_user_type', 'Seller');
		$this->db->order_by("c.updated_at", "desc");
		$this->db->limit(10);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function new_product_companies()
	{

		$this->db->select('p.id, p.pslag, p.product_name, p.product_image, p.price, cat.category_name, cou.country_name, cou.flag, sub_cat.sub_category_name ');
		$this->db->from('product p');
		$this->db->join('category cat', 'cat.id=p.category_id', 'left');
		$this->db->join('sub_category sub_cat', 'sub_cat.id=p.sub_category_id', 'left');
		$this->db->join('country cou', 'cou.id=p.country_id', 'left');
		$this->db->where('p.status', 'Active');
		$this->db->order_by("p.updated_at", "desc");
		$this->db->limit(6);
		$rs = $this->db->get();
		return  $rs->result_array();
	}


	public function category_info($slag)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('link_prefix', $slag);
		$rs = $this->db->get();
		return  $rs->row_array();
	}

	public function sub_category_info($slag)
	{
		$this->db->select('sc.*, cat.category_name, cat.link_prefix, cat.id as cat_id');
		$this->db->from('sub_category sc');
		$this->db->join('category cat', 'cat.id=sc.category_id', 'left');
		$this->db->where('sub_link_prefix', $slag);
		$rs = $this->db->get();
		return  $rs->row_array();
	}
	
	
	
    public function get_sub_category_wise_company($cat_id, $sub_cat_id)
    {
        $this->db->select('c.company_name, c.slag, c.type, c.main_product, c.contact_person, c.description, cou.country_name, cou.flag');
        $this->db->from('company c');
        $this->db->join('country cou', 'cou.id=c.country_id', 'left');
        $this->db->where("c.cat_id", $cat_id);
        $this->db->where("c.sub_cat_id", $sub_cat_id);
        $rs = $this->db->get();
        return $rs->result_array();
    }


	public function get_category_wise_company($id)
	{

		$this->db->select('c.company_name, cat.category_name, sub_cat.sub_category_name, cou.country_name, cou.flag');
		$this->db->from('company c');
		$this->db->join('category cat', 'cat.id=c.cat_id', 'left');
		$this->db->join('sub_category sub_cat', 'sub_cat.id=c.sub_cat_id', 'left');
		$this->db->join('country cou', 'cou.id=c.country_id', 'left');
		$this->db->where("c.cat_id", $id);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_sub_cat_prodcut_list($sub_cat_id)
	{

		$this->db->select('c.company_name, c.slag, p.id, p.pslag, p.product_name, p.product_image, p.price, cat.category_name, cou.country_name, cou.flag, sub_cat.sub_category_name, pn.name as unit');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cat', 'cat.id=p.category_id', 'left');
		$this->db->join('sub_category sub_cat', 'sub_cat.id=p.sub_category_id', 'left');
		$this->db->join('country cou', 'cou.id=p.country_id', 'left');
		$this->db->join('product_unit pn', 'pn.id=p.unit_id', 'left');
		$this->db->where('p.sub_category_id', $sub_cat_id);
		$this->db->where('p.status', 'Active');
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_cat_prodcut_list_last4($cat_id)
	{

		$this->db->select('c.company_name, p.pslag, p.product_image, p.id, p.product_name, p.price, cat.category_name, sub_cat.sub_link_prefix, cou.country_name, sub_cat.sub_category_name, pn.name as unit');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cat', 'cat.id=p.category_id', 'left');
		$this->db->join('sub_category sub_cat', 'sub_cat.id=p.sub_category_id', 'left');
		$this->db->join('country cou', 'cou.id=p.country_id', 'left');
		$this->db->join('product_unit pn', 'pn.id=p.unit_id', 'left');
		$this->db->where('p.category_id', $cat_id);
		$this->db->where('p.is_feture_product', 1);
		$this->db->where('p.status', 'Active');
		$this->db->order_by('p.updated_at', 'DESC');
		$this->db->limit(6);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_cat_prodcut_list_for_heme()
	{

		$this->db->select('c.company_name, c.slag as com_slag, p.product_image, p.pslag, p.id, p.product_name, p.price, cat.link_prefix, cat.category_name, cou.country_name, sub_cat.sub_category_name, pn.name as unit');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cat', 'cat.id=p.category_id', 'left');
		$this->db->join('sub_category sub_cat', 'sub_cat.id=p.sub_category_id', 'left');
		$this->db->join('country cou', 'cou.id=p.country_id', 'left');
		$this->db->join('product_unit pn', 'pn.id=p.unit_id', 'left');
		$this->db->where('p.is_feture_product', 1);
		$this->db->where('p.status', 'Active');
		$this->db->order_by('p.updated_at', 'DESC');
		$this->db->limit(8);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_featured_cat_list()
	{

		$this->db->select('cat.*');
		$this->db->from('category cat');
		$this->db->where('cat.is_feature_cat', 1);
		$this->db->where('cat.status', 'Active');
		$this->db->limit(8);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_sell_offer_list_top_5()
	{

		$this->db->select('c.company_name, cou.flag, cou.country_name, bs.*');
		$this->db->from('buysale bs');
		$this->db->join('company c', 'c.id=bs.company_id', 'left');
		//$this->db->join('category cat', 'cat.id=p.category_id', 'left');
		//$this->db->join('sub_category sub_cat', 'sub_cat.id=p.sub_category_id', 'left');
		$this->db->join('country cou', 'cou.id=c.country_id', 'left');
		$this->db->where('bs.category', 'sell');
		$this->db->order_by('bs.id', 'DESC');
		$this->db->limit(5);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_com_cat_list($com_id)
	{

		$this->db->select('c.*');
		$this->db->from('assign_company ac');
		$this->db->join('category c', 'c.id=ac.category_id', 'inner');
		$this->db->where('ac.company_id', $com_id);
		//$this->db->where('ac.company_id', 27619);
		$this->db->group_by('ac.category_id');
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}

	public function get_company_product_list($id)
	{

		$this->db->select('c.company_name, p.pslag, p.product_image, p.min_order_qty, p.price, p.id, p.product_name, p.price, cat.category_name, cat.link_prefix, cou.country_name, sub_cat.sub_category_name, pn.name as unit');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cat', 'cat.id=p.category_id', 'left');
		$this->db->join('sub_category sub_cat', 'sub_cat.id=p.sub_category_id', 'left');
		$this->db->join('country cou', 'cou.id=p.country_id', 'left');
		$this->db->join('product_unit pn', 'pn.id=p.unit_id', 'left');
		$this->db->where('c.id', $id);
		$this->db->where('p.status', 'Active');
		$this->db->order_by('p.updated_at', 'DESC');
		$this->db->limit(8);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_all_company_product_list($id)
	{

		$this->db->select('c.company_name, cat.link_prefix, sub_cat.sub_link_prefix, p.pslag, p.product_image, p.min_order_qty, p.price, p.id, p.product_name, p.price, cat.category_name, cou.country_name, sub_cat.sub_category_name, pn.name as unit');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cat', 'cat.id=p.category_id', 'left');
		$this->db->join('sub_category sub_cat', 'sub_cat.id=p.sub_category_id', 'left');
		$this->db->join('country cou', 'cou.id=p.country_id', 'left');
		$this->db->join('product_unit pn', 'pn.id=p.unit_id', 'left');
		$this->db->where('c.id', $id);
		$this->db->where('p.status', 'Active');
		$this->db->order_by('p.updated_at', 'DESC');

		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_product_details($slag)
	{

		$this->db->select('c.*, c.id as cid, p.*, p.id as pid, cat.link_prefix, cat.category_name, cou.flag, cou.country_name, sub_cat.sub_link_prefix, sub_cat.sub_category_name, pn.name as unit');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cat', 'cat.id=p.category_id', 'left');
		$this->db->join('sub_category sub_cat', 'sub_cat.id=p.sub_category_id', 'left');
		$this->db->join('country cou', 'cou.id=p.country_id', 'left');
		$this->db->join('product_unit pn', 'pn.id=p.unit_id', 'left');
		$this->db->where('p.pslag', $slag);
		// $this->db->order_by('p.id', 'desc');
		$rs = $this->db->get();

		return  $rs->row_array();
	}

	public function get_product_gallary($id)
	{

		$this->db->select('*');
		$this->db->from('product_gallery');
		$this->db->where('product_id', $id);
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}

	public function get_related_product($cat_id, $sub_id, $pid)
	{

		$this->db->select('p.*, c.company_name, c.slag as com_slag, cat.link_prefix, cat.category_name, sub_cat.sub_category_name, pn.name as unit, cou.country_name, cou.flag');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cat', 'cat.id=p.category_id', 'left');
		$this->db->join('sub_category sub_cat', 'sub_cat.id=p.sub_category_id', 'left');
		$this->db->join('product_unit pn', 'pn.id=p.unit_id', 'left');
		$this->db->join('country cou', 'cou.id=p.country_id', 'left');
		$this->db->where('p.status', 'Active');
		$this->db->where('p.category_id', $cat_id);
		$this->db->where('p.id !=', $pid);
		$this->db->where('p.sub_category_id', $sub_id);
		$this->db->order_by("p.updated_at", "desc");
		$this->db->limit(4);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function getBuySell($slag)
	{
		$this->db->select('bs.*, bs.id as bs_id, c.*, c.id as com_id, pn.name as unit, cat.category_name, cou.country_name');
		$this->db->from('buysale bs');
		$this->db->join('company c', 'c.id=bs.company_id', 'left');
		$this->db->join('country cou', 'cou.id=c.country_id', 'left');
		$this->db->join('product_unit pn', 'pn.id=bs.unit_id', 'left');
		$this->db->join('category cat', 'cat.id=bs.category_id', 'left');
		$this->db->where('bs.slag', $slag);
		$rs = $this->get_row();
		return $rs;
	}

	public function getAllBuySell($calslag = null)
	{

		$this->db->select('bs.*, bs.id as bs_id, bs.slag as offer_url, c.*, c.id as com_id, pn.name as unit, cat.category_name, cou.country_name');
		$this->db->from('buysale bs');
		$this->db->join('company c', 'c.id=bs.company_id', 'left');
		$this->db->join('country cou', 'cou.id=c.country_id', 'left');
		$this->db->join('product_unit pn', 'pn.id=bs.unit_id', 'left');
		$this->db->join('category cat', 'cat.id=bs.category_id', 'left');
		$this->db->where('bs.status', 'Approve');

		if (!empty($calslag)) {
			$this->db->where('cat.link_prefix', $calslag);
		}

		$this->db->order_by('bs.updated_at', 'desc');
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}
	
	public function getbuysellinfora($id)
	{

		$this->db->select('bs.*, bs.id as bs_id, bs.slag as offer_url, c.*, c.id as com_id, pn.name as unit, cat.category_name, cou.country_name');
		$this->db->from('buysale bs');
		$this->db->join('company c', 'c.id=bs.company_id', 'left');
		$this->db->join('country cou', 'cou.id=c.country_id', 'left');
		$this->db->join('product_unit pn', 'pn.id=bs.unit_id', 'left');
		$this->db->join('category cat', 'cat.id=bs.category_id', 'left');
		//$this->db->where('bs.status', 'Approve');

	
		$this->db->where('bs.id', $id);
		$query = $this->db->get();
		$rs = $query->row_array();
		return $rs;
	}
	
	public function quatation_check($bsid, $comid){
	    
	    $this->db->select('id');
		$this->db->from('quotation');
		$this->db->where('buysell_id', $bsid);
		$this->db->where('company_id', $comid);
		$rs = $this->db->get();
		return  $rs->num_rows();
		
	}
	

	public function get_product_unit_list()
	{
		$this->db->select('*');
		$this->db->from('product_unit');
		$rs = $this->db->get();
		return  $rs->result_array();
	}


	public function get_business_list($ctype, $cat_slag)
	{

		if ($ctype == 'm') {

			$this->db->select('*');
			$this->db->from('category');
			$this->db->where('link_prefix', $cat_slag);
			$rs = $this->db->get();
			$catinfo = $rs->row_array();
			$cid = $catinfo['id'];

			$this->db->select('c.*');
			$this->db->from('company c');
			$this->db->join('assign_company ac', 'c.id=ac.company_id', 'left');
			$this->db->where("c.status", "Approve");
			$where = "(c.cat_id='" . $cid . "' or ac.category_id='" . $cid . "')";
			$this->db->where($where);

			$rs2 = $this->db->get();

			$catinfo = $rs2->result_array();

			$compnayproductlist = array();

			foreach ($catinfo as $val) {

				$cid = $val['id'];

				$val['product_list'] = $this->get_compnay_wise_product_last3_list($cid);

				$compnayproductlist[] = $val;
			}

			$res['data_list'] = $compnayproductlist;
		} else {

			$this->db->select('c.id as cat_id, sc.id as sub_id');
			$this->db->from('category c');
			$this->db->join('sub_category sc', 'c.id=sc.category_id', 'left');
			$this->db->where('c.link_prefix', $ctype);
			$this->db->where('sc.sub_link_prefix', $cat_slag);
			$rs = $this->db->get();
			$catinfo = $rs->row_array();

			$sub_id = $catinfo['sub_id'];

			$this->db->select('c.*');
			$this->db->from('company c');
			$this->db->join('assign_company ac', 'c.id=ac.company_id', 'left');
			$this->db->where("c.status", "Approve");
			$where = "(c.sub_cat_id='" . $sub_id . "' or ac.sub_category_id='" . $sub_id . "')";
			$this->db->where($where);

			$rs2 = $this->db->get();

			$catinfo = $rs2->result_array();

			$compnayproductlist = array();

			foreach ($catinfo as $val) {

				$cid = $val['id'];

				$val['product_list'] = $this->get_compnay_wise_product_last3_list($cid);

				$compnayproductlist[] = $val;
			}

			$res['data_list'] = $compnayproductlist;
		}

		return $res;
	}

	public function get_compnay_wise_product_last3_list($cid)
	{

		$this->db->select('p.id, p.product_name, p.product_image, p.price, p.pslag, c.company_name, cat.category_name, pn.name as unit, cou.country_name, cou.flag');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cat', 'cat.id=p.category_id', 'left');
		$this->db->join('country cou', 'cou.id=p.country_id', 'left');
		$this->db->join('product_unit pn', 'pn.id=p.unit_id', 'left');
		$this->db->where("c.id", $cid);
		$this->db->where("p.status", "Active");
		$this->db->order_by("p.updated_at", "desc");
		$this->db->limit(3);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_category_name($cat_slag)
	{
		$this->db->select('category_name');
		$this->db->from('category');
		$this->db->where('link_prefix', $cat_slag);
		$rs = $this->db->get();
		$catinfo = $rs->row_array();
		return $catinfo['category_name'];
	}

	public function get_subcategory_name($cat_slag)
	{
		$this->db->select('sub_category_name');
		$this->db->from('sub_category');
		$this->db->where('sub_link_prefix', $cat_slag);
		$rs = $this->db->get();
		$catinfo = $rs->row_array();
		return $catinfo['sub_category_name'];
	}
}
