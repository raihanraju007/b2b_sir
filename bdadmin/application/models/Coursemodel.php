<?php 

class Coursemodel extends Admin_Model
{
	
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

	public function remove($tableName, $id)
	{
		if($id) {
			$this->db->where('id', $id);
			$delete = $this->db->delete($tableName);
			return ($delete == true) ? true : false;
		}
	}
	
	public function getUserData($userId = null) 
	{
		if($userId) {
			$sql = "SELECT * FROM users WHERE id = ?";
			$query = $this->db->query($sql, array($userId));
			return $query->row_array();
		}

		$sql = "SELECT * FROM users WHERE id != ?";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}

	public function getUserGroup($userId = null) 
	{
		if($userId) {
			$sql = "SELECT * FROM user_group WHERE user_id = ?";
			$query = $this->db->query($sql, array($userId));
			$result = $query->row_array();

			$group_id = $result['group_id'];
			$g_sql = "SELECT * FROM groups WHERE id = ?";
			$g_query = $this->db->query($g_sql, array($group_id));
			$q_result = $g_query->row_array();
			return $q_result;
		}
	}

	//-----------------course------------\\

	public function get_course_list($cid = null) 
	{
		if($cid) {
			$sql = "SELECT * FROM course WHERE id = ?";
			$query = $this->db->query($sql, array($cid));
			return $query->row_array();
		}

		$sql = "SELECT c.*, ct.name as type, cc.name as category, rp.name as person FROM course c LEFT JOIN course_type ct ON ct.id=c.course_type_id LEFT JOIN course_cetagory cc ON cc.id=c.course_cetagory_id LEFT JOIN research_person rp ON rp.id=c.research_person_id";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_course_view_data($id){

		$sql = "SELECT c.*, ct.name as type, cc.name as category, rp.name as person FROM course c LEFT JOIN course_type ct ON ct.id=c.course_type_id LEFT JOIN course_cetagory cc ON cc.id=c.course_cetagory_id LEFT JOIN research_person rp ON rp.id=c.research_person_id WHERE c.id = ?";
		$query = $this->db->query($sql, array($id));
		return $query->row_array();

	}

	//----------------user---------------\\

	public function get_user_list($id = null) 
	{
		if($id) {
			$sql = "SELECT * FROM user WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM user order by id desc";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	//---------------------course type--------------\\

	public function get_course_type_list($typeid = null) 
	{
		if($typeid) {
			$sql = "SELECT * FROM course_type WHERE id = ?";
			$query = $this->db->query($sql, array($typeid));
			return $query->row_array();
		}

		$sql = "SELECT * FROM course_type";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	//------------------course category-------------\\

	public function get_course_category_list($catid = null) 
	{
		if($catid) {
			$sql = "SELECT * FROM course_cetagory WHERE id = ?";
			$query = $this->db->query($sql, array($catid));
			return $query->row_array();
		}

		$sql = "SELECT * FROM course_cetagory";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	//------------------designation-------------\\

	public function get_designation_list($did = null) 
	{
		if($did) {
			$sql = "SELECT * FROM designation WHERE id = ?";
			$query = $this->db->query($sql, array($did));
			return $query->row_array();
		}

		$sql = "SELECT * FROM designation";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	//------------------Research Person-------------\\

	public function get_research_person_list($did = null) 
	{
		if($did) {
			$sql = "SELECT rp.*, d.name as designation FROM research_person rp LEFT JOIN designation d ON d.id=rp.designation_id WHERE rp.id = ?";
			$query = $this->db->query($sql, array($did));
			return $query->row_array();
		}

		$sql = "SELECT rp.*, d.name as designation FROM research_person rp LEFT JOIN designation d ON d.id=rp.designation_id";
		$query = $this->db->query($sql);
		return $query->result_array();
	}


	//-----------website-------------\\

	public function get_category_wise_course_count($catid, $typeid) 
	{
		
		if($typeid > 0){
			$where = " AND course_type_id=$typeid";
		}else{
			$where = " ";
		}

		$sql = "SELECT * FROM course WHERE course_cetagory_id =$catid  $where";
		$query = $this->db->query($sql);
		return $query->num_rows();
		
	}

	public function get_category_course_list($catid, $typeid){

		if($typeid > 0){
			$where = " AND course_type_id=$typeid";
		}else{
			$where = ' ';
		}

		$sql = "SELECT * FROM course WHERE course_cetagory_id =$catid  $where";
		$query = $this->db->query($sql);
		return $query->result_array();
	}




	public function get_type_wise_course_count($catid) 
	{
		
		$sql = "SELECT * FROM course WHERE course_type_id = ?";
		$query = $this->db->query($sql, array($catid));
		return $query->num_rows();
		
	}

	public function get_type_wise_course_list($id){
		$sql = "SELECT * FROM course WHERE course_type_id = ?";
		$query = $this->db->query($sql, array($id));
		return $query->result_array();
	}

	public function get_type_cat_wise_course_count($cid, $id){

		$sql = "SELECT * FROM course WHERE course_cetagory_id =$cid and course_type_id=$id ";
		$query = $this->db->query($sql);
		return $query->num_rows();

	}


	public function get_related_courese_list($id, $type){

		$this->db->select('c.*, rp.name as reperson, rp.photo as r_img, ct.name as cat_name');
        $this->db->from('course c');
        $this->db->join('research_person rp', 'rp.id=c.research_person_id', 'left');
        $this->db->join('course_cetagory ct', 'ct.id=c.course_cetagory_id', 'left');
        $this->db->where('c.id !=', $id);
        $this->db->where('course_type_id', $type);
        $this->db->order_by('c.id', 'desc');
        $this->db->limit(6);
        $rs = $this->db->get();
        return $rs->result_array();

	}




	public function get_active_menu_id($url)
	{
		$this->db->select('id,parent_id,admin_group_id');		
 	 	$this->db->from('menu');
 	 	$this->db->where('module_link',$url);
		$this->db->order_by('order');
 		$rs = $this->get_row();

 		//echo $this->db->last_query();die();
 		return $rs;
	}

	public function check_email_id($email){

		$this->db->select('id');		
 	 	$this->db->from('user');
 	 	$this->db->where('email',$email);
 		$rs = $this->db->get();
        return $rs->num_rows();

	}

	public function get_user_info($id){
		$this->db->select('*');		
 	 	$this->db->from('user');
 	 	$this->db->where('id',$id);
 		$rs = $this->get_row();
 		return $rs;
	}

	public function insert($table, $data){
 		$this->db->insert($table, $data);
        return $this->db->insert_id();
 	}

 	public function get_logged_user()
 	{
 		$userid = $this->session->userdata('admin_userid');
 		$username = $this->session->userdata('admin_username');
        $admin_group_id = $this->session->userdata('admin_group_id');
        $this->db->select('user.id,id_admin_group, username, first_name,ag.title admin_type,last_name,' .
                    ' email, address, mobile');
        $this->db->from('user');
        $this->db->join('user_group ag', 'ag.id = id_admin_group', 'left');
        $this->db->where(array('user.id'=>$userid,'username'=>$username));
        $user=$this->get_row();
        return $user;
 	}

 	public function check_login()
	{
 		$user =$this->input->post('username');
 		$pass = md5($this->input->post('passwd'));

 		$this->db->select('user.id,user.id_admin_group,user.username,user_group.title');
 		$this->db->from('user');
		$this->db->join("user_group","user_group.id=user.id_admin_group");
 		$this->db->where("(username='".$user."' OR email='".$user."')");
 		$this->db->where('password',$pass);
 		//$this->db->where('user.status','ACTIVE');
 		$this->db->where('id_admin_group !=',10);		
 		$query = $this->db->get();
 		$rs = $query->row_array();
 		return $rs; 		
	}

	public function update_login_time($user_id,$date_time)
	{
		$data['last_login_time']=$date_time;
		$this->db->update('user',$data,array('id'=>$user_id));
	}

	public function get_user_courses_list($id){

		$this->db->select('c.*, rp.name as reperson, rp.photo as r_img, ct.name as cat_name');
        $this->db->from('course c');
        $this->db->join('research_person rp', 'rp.id=c.research_person_id', 'left');
        $this->db->join('course_cetagory ct', 'ct.id=c.course_cetagory_id', 'left');
        $this->db->join('course_payment cp', 'cp.course_id=c.id', 'left');
        $this->db->where('cp.user_id', $id);
        $this->db->order_by('c.id', 'desc');
        $rs = $this->db->get();
        return $rs->result_array();

	}

	public function get_user_courses_payment_list($id){

		$this->db->select('c.*, cp.*, cp.id as payment_id, rp.name as reperson,');
        $this->db->from('course c');
        $this->db->join('research_person rp', 'rp.id=c.research_person_id', 'left');
        $this->db->join('course_cetagory ct', 'ct.id=c.course_cetagory_id', 'left');
        $this->db->join('course_payment cp', 'cp.course_id=c.id', 'left');
        $this->db->where('cp.user_id', $id);
        $this->db->order_by('c.id', 'desc');
        $rs = $this->db->get();
        return $rs->result_array();
        
	}

	public function get_course_payment_data($id){
		$this->db->select('*');		
 	 	$this->db->from('course_payment');
 	 	$this->db->where('id',$id);
 		$rs = $this->get_row();
 		return $rs;
	}

	public function get_last_temp_info($id){
		$this->db->select('*');		
 	 	$this->db->from('course_payment_temp');
 	 	$this->db->where('id',$id);
 	 	$this->db->order_by('id', 'desc');
 		$rs = $this->get_row();
 		return $rs;
	}

	public function get_temp_payment_info($id){
		$this->db->select('*');		
 	 	$this->db->from('course_payment_temp');
 	 	$this->db->where('course_payment_id',$id);
 	 	$this->db->where('payment_status', 'PAID');
 	 	$this->db->order_by('id', 'desc');
 		$rs = $this->get_row();
 		return $rs;
	}


	
}