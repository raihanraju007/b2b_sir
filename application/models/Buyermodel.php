<?php 

class Buyermodel extends Frontend_Model
{
	
	
	public function get_comapany_info($id){

		$this->db->select('*');		
 	 	$this->db->from('company');
 	 	$this->db->where('id',$id);
 		$rs = $this->db->get();
        return $rs->row_array();

	}

	public function get_office_list($company_id, $id=0){

		$this->db->select('*');		
 	 	$this->db->from('office');
 	 	$this->db->where('company_id',$company_id);
 	 	if($id > 0){
 	 		$this->db->where('id',$id);
 	 	}
 		$rs = $this->db->get();
        return $rs->result_array();

	}

	public function get_year(){
		$year = array();
		for($i=0; $i <= 50; $i++){
           $y = date('Y', strtotime("-$i year"));
	       $year[$y] = $y;
		}  

		return $year;

	}

	

 	
}