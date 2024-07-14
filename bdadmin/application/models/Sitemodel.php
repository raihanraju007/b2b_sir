<?php 

class Sitemodel extends Admin_Model
{
	
	
	public function check_email_id($email){

		$this->db->select('id');		
 	 	$this->db->from('user');
 	 	$this->db->where('email',$email);
 		$rs = $this->db->get();
        return $rs->num_rows();

	}

	public function get_all_info($table, $id){
		$this->db->select('*');		
 	 	$this->db->from($table);
 	 	$this->db->where('id',$id);
 		$rs = $this->get_row();
 		return $rs;
	}

	public function insert($table, $data){
 		$this->db->insert($table, $data);
        return $this->db->insert_id();
 	}

 	public function update($table, $id, $data){
        return $this->db->update($table, $data, array('id' => $id));
    }

    public function check_login()
	{
 		$email =$this->input->post('email');
 		$pass = $this->input->post('password');

 		$this->db->select('*');
 		$this->db->from('company');
 		$this->db->where('email', $email);	
 		$this->db->where('password', md5($pass));	
 		$this->db->where('verify', 1);	
 		$query = $this->db->get();
 		$rs = $query->row_array();

 		return $rs; 		
	}

 	
}