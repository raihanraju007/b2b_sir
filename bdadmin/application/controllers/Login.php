<?php 

class Login extends Admin_Controller 
{
	
	function __construct() {
        parent::__construct();
        $this->set_layout('login_layout');
        $this->load->helper(array('html', 'array', 'form', 'url'));
    }

    public function index(){
        $this->load->view('login');
    }
	
	public function login(){
		
		$this->load->view('login');	

	}

	public function dologin(){

		$user = $this->bizadminmodel->check_login();
      
		if (!empty($user)) {

            $date_time = $this->current_date();
            $this->bizadminmodel->update_login_time($user['id'], $date_time);
            
            $sdata['admin_username'] = $user['username'];
            $sdata['admin_email'] = $user['email'];
            $sdata['admin_userid'] = $user['id'];
            $sdata['admin_name'] = $user['u_name'];
            $sdata['admin_group_id'] = $user['user_group_id'];
            $sdata['title'] = $user['title'];
            $this->session->set_userdata($sdata);
			
			redirect('/dashboard/');
			
        } else {
            $this->session->set_flashdata('error', $this->tpl->set_message('error', 'Username or password did not match.'));
            redirect('login/login');
        }


	}

	public function logout() {
        $sdata['admin_username'] = '';
        $sdata['admin_email'] = '';
        $sdata['member_id'] = '';
        $sdata['admin_userid'] = '';
        $sdata['admin_group_id'] = '';
        $sdata['centre_id'] = '';
        $this->session->sess_destroy($sdata);
        redirect('login/index', 'refresh');
    }


    //--------------------------------\\


}