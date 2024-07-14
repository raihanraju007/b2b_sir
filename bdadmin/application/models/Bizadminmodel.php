<?php

class Bizadminmodel extends Admin_Model
{
	//---------------login information ----------\\

	public function get_dashboad_data()
	{

		$this->db->select('id');
		$this->db->from('company');
		//$this->db->where('status', 'Approve');
		$rs = $this->db->get();
		$data['total_compnay'] =  $rs->num_rows();

		$this->db->select('id');
		$this->db->from('company');
		$this->db->where('status !=', 'Approve');
		$this->db->where('verify', '1');
		$rs2 = $this->db->get();
		$data['total_pending_compnay'] =  $rs2->num_rows();


		$this->db->select('id');
		$this->db->from('company');
		$this->db->where('status !=', 'Approve');
		$this->db->where('verify', '0');
		$rs3 = $this->db->get();
		$data['total_non_verify_compnay'] =  $rs3->num_rows();

		$this->db->select('id');
		$this->db->from('company_log');
		$this->db->where('approve_status', '0');
		$rs4 = $this->db->get();
		$data['total_pending_compnay_reveiw'] =  $rs4->num_rows();

		$this->db->select('id');
		$this->db->from('company_brochure');
		$this->db->where('status', 'Pending');
		$rs5 = $this->db->get();
		$data['total_pending_brochure'] =  $rs5->num_rows();

		$this->db->select('id');
		$this->db->from('company_certificate');
		$this->db->where('status', 'Pending');
		$rs6 = $this->db->get();
		$data['total_pending_certificate'] =  $rs6->num_rows();

		$this->db->select('id');
		$this->db->from('company_video');
		$this->db->where('status', 'Pending');
		$rs7 = $this->db->get();
		$data['total_pending_video'] =  $rs7->num_rows();

		$this->db->select('id');
		$this->db->from('product');
		$this->db->where('status', 'Pending');
		$rs8 = $this->db->get();
		$data['total_pending_product'] =  $rs8->num_rows();

		return $data;
	}



	public function check_login()
	{
		$user = $this->input->post('email');
		$pass = $this->input->post('password');

		$this->db->select('user.id,user.email,user.name as u_name,user.user_group_id,user.username,user_group.name as title');
		$this->db->from('user');
		$this->db->join("user_group", "user_group.id=user.user_group_id");
		$this->db->where("(username='" . $user . "' OR email='" . $user . "')");
		$this->db->where('password', $pass);
		$this->db->where('user.status', 'Active');
		$query = $this->db->get();
		$rs = $query->row_array();
		return $rs;
	}

	public function update_login_time($user_id, $date_time)
	{
		$data['last_login_time'] = $date_time;
		$this->db->update('user', $data, array('id' => $user_id));
	}

	public function get_logged_user()
	{
		$userid = $this->session->userdata('admin_userid');
		$username = $this->session->userdata('admin_username');
		$admin_group_id = $this->session->userdata('admin_group_id');
		$this->db->select('user.id,user_group_id, username, user.name as full_name,ag.name as title,' .
			' email, mobile');
		$this->db->from('user');
		$this->db->join('user_group ag', 'ag.id = user_group_id', 'left');
		$this->db->where(array('user.id' => $userid, 'username' => $username));
		$user = $this->get_row();
		return $user;
	}

	//---------------end------------\\

	//-----------country --------\\
	public function get_country_list($id = 0)
	{

		$this->db->select('*');
		$this->db->from('country');
		if ($id > 0) {
			$this->db->where('id', $id);
		}
		$this->db->order_by('id', 'desc');
		$rs = $this->db->get();
		return $rs->result_array();
	}

	public function get_district_list($id = 0)
	{

		$this->db->select('d.*, c.country_name');
		$this->db->from('district d');
		$this->db->join('country c', 'c.id=d.country_id', 'left');
		if ($id > 0) {
			$this->db->where('d.id', $id);
		}
		$this->db->order_by('d.id', 'desc');
		$rs = $this->db->get();
		return $rs->result_array();
	}
	//-----------end----------------\\

	//-----------cetagory --------\\
	public function get_category_list($id = 0)
	{

		$this->db->select('*');
		$this->db->from('category');
		if ($id > 0) {
			$this->db->where('id', $id);
		}
		$this->db->order_by('id', 'desc');
		$rs = $this->db->get();
		return $rs->result_array();
	}
	//-----------end----------------\\

	//-----------sub cetagory --------\\
	public function get_sub_category_list($id = 0, $cat_id = 0)
	{

		$this->db->select('*');
		$this->db->from('sub_category');
		if ($id > 0) {
			$this->db->where('id', $id);
		}
		if ($cat_id > 0) {
			$this->db->where('category_id', $cat_id);
		}
		$this->db->order_by('id', 'desc');
		$rs = $this->db->get();
		return $rs->result_array();
	}
	//-----------end----------------\\

	//----------service -----------\\
	public function get_service_category_list($id = 0)
	{

		$this->db->select('*');
		$this->db->from('service_category');
		if ($id > 0) {
			$this->db->where('id', $id);
		}
		$this->db->order_by('id', 'desc');
		$rs = $this->db->get();
		return $rs->result_array();
	}

	public function get_service_sub_category_list($id = 0, $cat_id = 0)
	{

		$this->db->select('*');
		$this->db->from('service_sub_category');
		if ($id > 0) {
			$this->db->where('id', $id);
		}
		if ($cat_id > 0) {
			$this->db->where('service_category_id', $cat_id);
		}
		$this->db->order_by('id', 'desc');
		$rs = $this->db->get();
		return $rs->result_array();
	}

	//------------insert and update ------------\\

	public function update_date($tableName, $data, $id)
	{
		if ($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update($tableName, $data);
			return ($update == true) ? true : false;
		}
	}


	public function insert_date($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	//-----------------end------------------\\

	//------------compnay---------\\


	public function get_compnay_product_brochure_list()
	{

		$this->db->select('cb.*, c.company_name');
		$this->db->from('company_brochure cb');
		$this->db->join('company c', 'c.id=cb.company_id', 'left');
		$this->db->order_by('cb.id', 'desc');
		$rs = $this->db->get();
		return $rs->result_array();
	}


	public function get_compnay_certificate_list()
	{

		$this->db->select('cb.*, c.company_name');
		$this->db->from('company_certificate cb');
		$this->db->join('company c', 'c.id=cb.company_id', 'left');
		$this->db->order_by('cb.id', 'desc');
		$rs = $this->db->get();
		return $rs->result_array();
	}

	public function get_compnay_video_list()
	{

		$this->db->select('cb.*, c.company_name');
		$this->db->from('company_video cb');
		$this->db->join('company c', 'c.id=cb.company_id', 'left');
		$this->db->order_by('cb.id', 'desc');
		$rs = $this->db->get();
		return $rs->result_array();
	}

	public function get_compnay_list($id)
	{

		$this->db->select('*');
		$this->db->from('company');
		if ($id > 0) {
			$this->db->where('id', $id);
		}
		$this->db->where('status', 'Approve');
		$this->db->order_by('id', 'desc');
		$this->db->limit(1000);
		$rs = $this->db->get();
		return $rs->result_array();
	}

	public function get_all_view_compnay_list($id)
	{

		$this->db->select('*');
		$this->db->from('company');
		if ($id > 0) {
			$this->db->where('id', $id);
		}
		//$this->db->where('status', 'Approve');
		$this->db->order_by('id', 'desc');
		$this->db->limit(1000);
		$rs = $this->db->get();
		return $rs->result_array();
	}



	public function get_pending_compnay_list()
	{

		$this->db->select('*');
		$this->db->from('company');
		$this->db->where('status !=', 'Approve');
		$this->db->where('verify', '1');
		$this->db->order_by('id', 'desc');
		$this->db->limit(1000);
		$rs = $this->db->get();
		return $rs->result_array();
	}

	public function not_verify_company_list()
	{

		$this->db->select('*');
		$this->db->from('company');
		$this->db->where('status !=', 'Approve');
		$this->db->where('verify', '0');
		$this->db->order_by('id', 'desc');
		$this->db->limit(1000);
		$rs = $this->db->get();
		return $rs->result_array();
	}

	public function get_company_review_data_list($id)
	{

		$this->db->select('*');
		$this->db->from('company_log');

		if ($id > 0) {
			$this->db->where('id', $id);
		}

		$this->db->where('approve_status', '0');
		$this->db->order_by('id', 'desc');
		$rs = $this->db->get();
		return $rs->result_array();
	}

	public function get_similar_compnay_search($name)
	{

		$this->db->select('id, company_name, status');
		$this->db->from('company');
		$this->db->where("(company_name LIKE '%" . $name . "%')", NULL, FALSE);
		$this->db->order_by('id', 'asc');
		$rs = $this->db->get();
		return $rs->result_array();

		/* $con = '%'.$name.'%';
        $sql = "
            SELECT * FROM company WHERE company_name LIKE  $con
        ";

        $query = $this->db->query($sql);
        return $query->result_array();*/
	}

	public function get_similar_product_search($name)
	{

		$this->db->select('product_name, status as pstatus');
		$this->db->from('product');
		$this->db->where("(product_name LIKE '%" . $name . "%')", NULL, FALSE);
		$this->db->order_by('id', 'asc');
		$rs = $this->db->get();
		return $rs->result_array();

		/* $con = '%'.$name.'%';
        $sql = "
            SELECT * FROM company WHERE company_name LIKE  $con
        ";

        $query = $this->db->query($sql);
        return $query->result_array();*/
	}

	public function get_country_name($id)
	{

		$this->db->select('*');
		$this->db->from('country');
		$this->db->where('id', $id);
		$rs = $this->db->get();
		$row =  $rs->row_array();

		return $row['country_name'];
	}

	public function get_district_name($id)
	{

		$this->db->select('*');
		$this->db->from('district');
		$this->db->where('id', $id);
		$rs = $this->db->get();
		$row =  $rs->row_array();

		return $row['name'];
	}

	public function get_business_type_name($id)
	{
		$id = explode(",", $id);

		$this->db->select('*');
		$this->db->from('business_category');
		$this->db->where_in('id', $id);
		$rs = $this->db->get();
		$row =  $rs->result_array();
		// echo $this->db->last_query();exit;
		return $row;
	}
	public function get_category_name($id)
	{

		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('id', $id);
		$rs = $this->db->get();
		$row =  $rs->row_array();

		return $row['category_name'];
	}

	public function get_sub_category_name($id)
	{

		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('id', $id);
		$rs = $this->db->get();
		$row =  $rs->row_array();

		return $row['sub_category_name'];
	}

	public function get_cat_list()
	{
		$this->db->select('*');
		$this->db->from('category');
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_service_cat_list()
	{
		$this->db->select('*');
		$this->db->from('service_category');
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_business_category()
	{
		$this->db->select('*');
		$this->db->from('business_category');
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_sub_cat_list($cat_id)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('category_id', $cat_id);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_sub_service_cat_list($cat_id)
	{
		$this->db->select('*');
		$this->db->from('service_sub_category');
		$this->db->where('service_category_id', $cat_id);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_country_list_active()
	{
		$this->db->select('*');
		$this->db->from('country');
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}

	public function delete($table, $id)
	{
		$this->db->where('id', $id);
		$this->db->delete($table);
	}


	public function delete_assing_comapny($id)
	{
		$this->db->where('company_id', $id);
		$this->db->delete('assign_company');
	}

	public function delete_assing_service_comapny($id)
	{
		$this->db->where('company_id', $id);
		$this->db->delete('assign_service_company');
	}

	public function delete_product($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('product');
	}

	public function getAssignCompany($id)
	{
		$this->db->select('*');
		$this->db->from('assign_company');
		$this->db->where('company_id', $id);
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}

	public function getAssignServiceCompany($id)
	{
		$this->db->select('*');
		$this->db->from('assign_service_company');
		$this->db->where('company_id', $id);
		$query = $this->db->get();
		$rs = $query->row_array();
		return $rs;
	}

	//---------------product-----------\\

	public function get_product_list()
	{

		$this->db->select('p.*, c.company_name, scg.sub_category_name, cg.category_name');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cg', 'cg.id=p.category_id', 'left');
		$this->db->join('sub_category scg', 'scg.id=p.sub_category_id', 'left');
		$this->db->where('p.status', 'Active');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}

	public function get_pending_product_list()
	{

		$this->db->select('p.*, c.company_name, scg.sub_category_name, cg.category_name');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cg', 'cg.id=p.category_id', 'left');
		$this->db->join('sub_category scg', 'scg.id=p.sub_category_id', 'left');
		$this->db->where('p.status !=', 'Active');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}

	public function get_product_details($id)
	{
		$this->db->select('p.*, c.company_name, scg.sub_category_name, cg.category_name, pu.name as unit, coun.country_name');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cg', 'cg.id=p.category_id', 'left');
		$this->db->join('sub_category scg', 'scg.id=p.sub_category_id', 'left');
		$this->db->join('product_unit pu', 'pu.id=p.unit_id', 'left');
		$this->db->join('country coun', 'coun.id=p.country_id', 'left');
		$this->db->where('p.id', $id);
		$query = $this->db->get();
		$rs = $query->row_array();
		return $rs;
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

	public function getCompanyList()
	{

		$this->db->select('id,company_name');
		$this->db->from('company');
		$this->db->order_by('id', 'desc');
		$this->db->limit(1000);
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}

	public function get_com_cat_list($com_id)
	{

		$this->db->select('c.id,c.category_name');
		$this->db->from('assign_company ac');
		$this->db->join('category c', 'c.id=ac.category_id', 'inner');
		$this->db->where('ac.company_id', $com_id);
		//$this->db->where('ac.company_id', 27619);
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}

	public function get_com_sub_cat_list($cat_id, $com_id)
	{

		$this->db->select('c.id,c.sub_category_name');
		$this->db->from('assign_company ac');
		$this->db->join('sub_category c', 'c.id=ac.sub_category_id', 'inner');
		$this->db->where('ac.category_id', $cat_id);
		$this->db->where('ac.company_id', $com_id);
		//$this->db->where('ac.company_id', 27619);
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}

	public function getProductUnit()
	{

		$this->db->select('id,name');
		$this->db->from('product_unit');
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}

	public function get_product_info($id)
	{

		$this->db->select('p.*, c.company_name');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->where('p.id', $id);
		$query = $this->db->get();
		$rs = $query->row_array();
		return $rs;
	}

	public function get_distric_list($id)
	{
		$this->db->select('*');
		$this->db->from('district');
		$this->db->where('country_id', $id);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_biz_type()
	{
		$this->db->select('*');
		$this->db->from('business_category');
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_buysell_list()
	{

		$this->db->select('c.company_name, bs.*');
		$this->db->from('buysale bs');
		$this->db->join('company c', 'c.id=bs.company_id', 'left');
		//$this->db->join('category cat', 'cat.id=p.category_id', 'left');
		//$this->db->join('sub_category sub_cat', 'sub_cat.id=p.sub_category_id', 'left');
		//$this->db->join('country cou', 'cou.id=c.country_id', 'left');
	//	$this->db->where('c.status', 'Approve');
		//$this->db->order_by('bs.updated_at', 'DESC');
		//$this->db->limit(5000);
		$rs = $this->db->get();
		return  $rs->result_array();
	}

	public function get_buysell_info($id)
	{
		$this->db->select('*');
		$this->db->from('buysale');
		$this->db->where('id', $id);
		$rs = $this->db->get();
		return  $rs->row_array();
	}

	public function get_company_product_list($id)
	{

		$this->db->select('p.*, c.company_name, scg.sub_category_name, cg.category_name');
		$this->db->from('product p');
		$this->db->join('company c', 'c.id=p.company_id', 'left');
		$this->db->join('category cg', 'cg.id=p.category_id', 'left');
		$this->db->join('sub_category scg', 'scg.id=p.sub_category_id', 'left');
		$this->db->where('c.id', $id);
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		$rs = $query->result_array();
		return $rs;
	}
	
	
	public function get_quatation_list_for_buysell($id){

		$this->db->select('q.*, q.id as qid, q.status as q_status, q.date as q_date, c.*, cou.country_name, cou.flag, pu.name as unit');
		$this->db->from('quotation q');
		$this->db->join('company c', 'q.company_id=c.id', 'left');
		$this->db->join('country cou', 'c.country_id=cou.id', 'left');
			$this->db->join('product_unit pu', 'q.unit_id=pu.id', 'left');
		if($id > 0){
		    $this->db->where("q.id", $id);
		}
		
		//$this->db->where("c.id", $com_id);
	    //$this->db->where("q.buysell_id", $buysellid);
		//$this->db->where("p.status", "Active");
		$rs = $this->db->get();
		return  $rs->result_array();
	
	    
	    
	    
	}
	
	public function get_buysell_information($id){

		$this->db->select('bs.*, bs.id as qid, bs.status as q_status, bs.date as q_date, c.*, cou.country_name, cou.flag, pu.name as unit, cg.category_name');
		$this->db->from('buysale bs');
		$this->db->join('product_unit pu', 'bs.unit_id=pu.id', 'left');
		$this->db->join('company c', 'bs.company_id=c.id', 'left');
		$this->db->join('country cou', 'c.country_id=cou.id', 'left');
		$this->db->join('category cg', 'cg.id=bs.category_id', 'left');
		$this->db->where("bs.id", $id);
	
		$rs = $this->db->get();
		return  $rs->row_array();
	
	    
	    
	    
	}
	
	public function get_type_list()
	{

		$this->db->select('*');
		$this->db->from('business_category');
		$rs = $this->db->get();
		return $rs->result_array();
	}
	
	
	
	
	
	
	
	
}
