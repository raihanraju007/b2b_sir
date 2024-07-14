<?php 

class Settingmodel extends Admin_Model
{

	

	public function get_user_group_list($id, $status=null){

		$this->db->select('*');
        $this->db->from('user_group');

        if($id > 0){
        	$this->db->where('id', $id);
        }
        if($status){
            $this->db->where('status', $status);
        }
        $rs = $this->db->get();
        return $rs->result_array();

	}

	public function get_brand_type_list($id, $status=null){

		$this->db->select('*');
        $this->db->from('brand_type');
        if($id > 0){
        	$this->db->where('id', $id);
        }
        if($status){
            $this->db->where('status', $status);
        }
        $rs = $this->db->get();
        return $rs->result_array();

	}

	public function get_brand_type_active_list(){

		$this->db->select('id, name');
        $this->db->from('brand_type');
        $this->db->where('status', 'Active');
        $rs = $this->db->get();
        return $rs->result_array();

	}

	public function get_brand_list($id, $status=null){

		$this->db->select('b.*, bt.name as b_type, bt.id as type_id');
        $this->db->from('brand b');
        $this->db->join('brand_type bt', 'bt.id=b.brand_type_id', 'left');
        if($id > 0){
        	$this->db->where('b.id', $id);
        }
        if($status){
            $this->db->where('b.status', $status);
        }
        $rs = $this->db->get();
        return $rs->result_array();

	}

	public function get_active_brand_list(){

		$this->db->select('id, brand_name as name');
        $this->db->from('brand');
        $this->db->where('status', 'Active');
        $rs = $this->db->get();
        return $rs->result_array();
	}


	public function get_company_type_list($id, $status=null){

		$this->db->select('*');
        $this->db->from('company_type');
        if($id > 0){
        	$this->db->where('id', $id);
        }

        if($status){
            $this->db->where('status', $status);
        }

        $rs = $this->db->get();
        return $rs->result_array();

	}

	public function get_company_type_active_list(){

		$this->db->select('id, name');
        $this->db->from('company_type');
        $this->db->where('status', 'Active');
        $rs = $this->db->get();
        return $rs->result_array();

	}

	public function get_comapany_list($id, $status=null){

		$this->db->select('c.*');
        $this->db->from('company c');
       
        if($id > 0){
        	$this->db->where('c.id', $id);
        }
        
        $rs = $this->db->get();
        return $rs->result_array();

	}

    public function get_company_log_info($id){

        $this->db->select('*');
        $this->db->from('company_log');
        $this->db->where('company_id', $id);
        $this->db->order_by('id', 'desc');
        $rs = $this->db->get();
        return $rs->row_array();

    }

	public function get_company_active_list(){

		$this->db->select('id, name');
        $this->db->from('company');
        $this->db->where('status', 'Active');
        $rs = $this->db->get();
        return $rs->result_array();

	}

	public function get_user_group_active_list(){

		$this->db->select('id, name');
        $this->db->from('user_group');
        $this->db->where('status', 'Active');
        $this->db->where('id >', 1);
        $rs = $this->db->get();
        return $rs->result_array();

	}

	public function get_user_list($id, $status=null, $company_id=0){
        
		$this->db->select('u.*, ug.name as ug_name, c.name as company_name');
        $this->db->from('user u');
        $this->db->join('user_group ug', 'ug.id=u.user_group_id', 'left');
        $this->db->join('company c', 'c.id=u.company_id', 'left');
        $this->db->where('u.id >', 1);
        if($id > 0){
        	$this->db->where('u.id', $id);
        }
        if($status){
            $this->db->where('u.status', $status);
        }
        
        if($company_id > 0){
            $this->db->where('u.company_id', $company_id);
        }

        $rs = $this->db->get();
        return $rs->result_array();

	}

	public function get_parent_product_category_active_list(){

		$this->db->select('id, name');
        $this->db->from('product_categories');
        $this->db->where('status', 'Active');
        $this->db->where('parent_id', 0);
        $rs = $this->db->get();
        return $rs->result_array();

	}

	public function product_info($id){

		$this->db->select('p.*,pc.name as cat_name, c.name as company_name');
        $this->db->from('product p');
         $this->db->join('product_categories pc', 'pc.id=p.product_category', 'left');
         $this->db->join('company c', 'c.id=p.company_id', 'left');
        $this->db->where('p.id', $id);
        $rs = $this->db->get();
        return $rs->row_array();

	}

	public function select_product_brand($pid){
		$this->db->select('*');
        $this->db->from('product_brand');
        $this->db->where('product_id', $pid);
        $rs = $this->db->get();
        return $rs->result_array();
	}

	public function get_product_brand_list($pid){
		$this->db->select('b.brand_name as name');
        $this->db->from('product_brand pb');
        $this->db->join('brand b', 'b.id=pb.brand_id', 'left');
        $this->db->where('pb.product_id', $pid);
        $rs = $this->db->get();
        return $rs->result_array();
	}

	public function get_product_gallery_list($pid){
		$this->db->select('product_pic');
        $this->db->from('product_gallery');
        $this->db->where('product_id', $pid);
        $rs = $this->db->get();
        return $rs->result_array();
	}

	public function get_product_list($company_id, $status=null){

		$this->db->select('p.*, pc.name as cat_name');
        $this->db->from('product p');
        $this->db->join('product_categories pc', 'pc.id=p.product_category', 'left');
        if($company_id > 0){
        	$this->db->where('p.company_id', $company_id);
        }

        if($status){
            $this->db->where('p.status', $status);
        }
        
        $rs = $this->db->get();
        return $rs->result_array();

	}


	public function get_product_cat_list($id, $company_id=null, $status=null){

		$this->db->select('pc.*, pc2.name as parent_cat_name, c.company_name as company');
        $this->db->from('product_categories pc');
        $this->db->join('product_categories pc2', 'pc2.id=pc.parent_id', 'left');
        $this->db->join('company  c', 'c.id=pc.company_id', 'left');
        if($id > 0){
        	$this->db->where('pc.id', $id);
        }

        if($status){
            $this->db->where('pc.status', $status);
        }

        if($company_id > 0){
        	$this->db->where('pc.company_id', $company_id);
        }

        $rs = $this->db->get();
        return $rs->result_array();

	}


	public function create($tableName, $data)
	{
		if($data) {
			$insert = $this->db->insert($tableName, $data);
			return ($insert == true) ? true : false;
		}
	}

	public function update($tableName, $data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update($tableName, $data);
			return ($update == true) ? true : false;
		}
	}
	

	public function inser_data_return_id($table, $data){
		$this->db->insert($table, $data);
        return $this->db->insert_id();
	}

	public function brand_delete($tableName, $pid)
	{
		if($pid) {
			$this->db->where('product_id', $pid);
			$delete = $this->db->delete($tableName);
			return ($delete == true) ? true : false;
		}
	}

	public function check_login()
	{
 		$user =$this->input->post('email');
 		//$pass = md5($this->input->post('password'));
 		$pass = $this->input->post('password');

 		$this->db->select('user.id,user.email,user.name as u_name,user.company_id,user.user_group_id,user.username');
 		$this->db->from('user');
		//$this->db->join("user_group","user_group.id=user.user_group_id");
 		$this->db->where("(username='".$user."' OR email='".$user."')");
 		$this->db->where('password',$pass);
 		$this->db->where('status','Active');
 		//$this->db->where('user_group_id !=',1);		
 		$query = $this->db->get();
 		$rs = $query->row_array();
 		return $rs; 		
	}

	public function update_login_time($user_id,$date_time)
	{
		$data['last_login_time']=$date_time;
		$this->db->update('user',$data,array('id'=>$user_id));
	}



	public function get_logged_user()
 	{
 		$userid = $this->session->userdata('admin_userid');
 		$username = $this->session->userdata('admin_username');
        $admin_group_id = $this->session->userdata('admin_group_id');
        $this->db->select('user.id,user_group_id, username, user.name as full_name,' .
                    ' email, mobile');
        $this->db->from('user');
        //$this->db->join('user_group ag', 'ag.id = user_group_id', 'left');
        $this->db->where(array('user.id'=>$userid,'username'=>$username));
        $user=$this->get_row();
        return $user;
 	}


 	public function checkuserinfo($id){

 		$this->db->select('*');
 		$this->db->from('user');
 		$this->db->where('id', $id);
 		$query = $this->db->get();
 		$rs = $query->row_array();
 		return $rs; 

 	}

	public function getmonthyear()
	{
		$mname['01'] = "January";
		$mname['02'] = "February";
		$mname['03'] = "March";
		$mname['04'] = "April";
		$mname['05'] = "May";
		$mname['06'] = "June";
		$mname['07'] = "July";
		$mname['08'] = "August";
		$mname['09'] = "September";
		$mname['10'] = "October";
		$mname['11'] = "November";
		$mname['12'] = "December";

		$data['monthList'] = $mname;

		$year = array('2021', '2022', '2023', '2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032');

		$data['yearList'] = $year;

		return $data;
	}

    public function data_count($table){

        $this->db->select('id');
        $this->db->from($table);
        if($table == 'user'){
            $this->db->where('id >', 1);
        }
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        $rs = $query->num_rows();

        $this->db->select('id');
        $this->db->from($table);
        if($table == 'user'){
            $this->db->where('id >', 1);
        }
        $this->db->where('status', 'Inactive');
        $query2 = $this->db->get();
        $rs2 = $query2->num_rows();

        $data['total'] = $rs+$rs2;
        $data['active'] = $rs;
        $data['inactive'] = $rs2;

        return $data;
        
    }


    public function get_office_list($id){

        $this->db->select('o.*, c.company_name');
        $this->db->from('office o');
        $this->db->join('company c', 'c.id = o.company_id', 'left');
        if($id >  0){
            $this->db->where('o.id', $id);
        }
        $rs = $this->db->get();
        return $rs->result_array();

    }

	
}