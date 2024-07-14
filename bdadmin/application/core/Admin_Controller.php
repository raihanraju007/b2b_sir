<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * Created on June 16, 2014
 * Created by imrul.hasan@arena.com.bd
 *
 */

class Admin_Controller extends CI_Controller {

    var $data = array();
    var $name;
    var $method;

    function __construct() {
        parent::__construct();
        $this->load->library('template', '', 'tpl');
        $this->load->helper(array('text', 'date'));
        $this->name = $this->router->class;
        $this->method = $this->router->method;
        $this->_check_access();
        $this->access_check();
        $this->_temp_init();
    }


    function _temp_init() {
        $this->_assign_template_var();
        if ($this->input->is_ajax_request()) {
            $this->tpl->set_layout('ajax_layout');
        }

    }

    function _assign_template_var() {
        $this->tpl->set_page_title('Admin panel');
        $this->tpl->assign('active_controller', $this->name);
        $this->tpl->assign('active_method', $this->method);
    }

    function access_check() {

        $admin_group = $this->session->userdata('admin_group_id');
      
        $admin_group_list = array('0','1','2','3','4','5','6','7','8');

		if (in_array($admin_group, $admin_group_list)) {
            return true;
        } elseif ($this->name == 'login') {
            return true;
        } else {
            redirect('login');
        }
		
    }

    function _check_access() {

        $username = $this->session->userdata('admin_username');
        $userid = $this->session->userdata('admin_userid');
        $admin_group_id = $this->session->userdata('admin_group_id');

        if ($username && $userid) {

            $user = $this->bizadminmodel->get_logged_user();

            if (empty($user) AND $admin_group_id == 0) {

               redirect(base_url('login?mt='.mt_rand(0,99999999)));

            } elseif ($this->name == 'login' && $this->method != 'logout') {
                redirect('dashboard');
            } else {

                $this->assign('userdata', $user);
            }
        } else {
           
            $ret = $this->_is_login_require();

            if ($ret) {

                if ($this->name == 'login') {
                    
                }else{
                    redirect('login');
                }

                
            }
        }

        
    }

    function _is_login_require() {

        if ($this->name == 'login') {
            return false;
        } else {
            return true;
        }
    }


    function assign($key, $val = '') {
        $this->tpl->assign($key, $val);
    }

    function set_layout($file) {
        $this->tpl->set_layout($file);
    }

    function set_pagination($info = array()) {
        $info['sufix'] = '';
        $this->load->library('pagination');
        $rec_per_page = $info['select_value'];
        $data['offset'] = 0;

        if ($rec_per_page) {
            $config['per_page'] = $rec_per_page;
        } else {
            $config['per_page'] = 50;
        }
        $data['rec_per_page'] = $config['per_page'];
        $config['num_links'] = 2;
        $config['uri_segment'] = $info['uri_segment'];
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = 'Next â†’';
        $config['prev_link'] = 'â† Previous';
        $config['total_rows'] = $info['total_rows'];
        $stypes = array('asc' => 'desc', 'desc' => 'asc');
        $nstype = $stypes[$info['sort_type']];

        $data['sort_type'] = $info['sort_type'];
        $data['sort_on'] = $info['sort_on'];
        if (!empty($info['extra_url'])) {
            if ($info['sufix'])
                $url = $this->tpl->site_url . $this->name . '/' . $this->method . '/' . $info['extra_url'] . '/' . $info['extra_param'] . '/' . $info['sufix'] . '/';
            else
                $url = $this->tpl->site_url . $this->name . '/' . $this->method . '/' . $info['extra_url'] . '/';
        }
        else {
            if ($info['sufix'])
                $url = $this->tpl->site_url . $this->name . '/' . $this->method . '/' . $info['sufix'] . '/';
            else
                $url = $this->tpl->site_url . $this->name . '/' . $this->method . '/';
        }
        if ($info['sort_type'] && $info['sort_on']) {
            $config['base_url'] = $url . $info['sort_type'] . '/' . $info['sort_on'] . '/page';
            $data['sort_url'] = $url . $nstype . '/%s' . '/page';
        } else {
            $config['base_url'] = $url;
            $data['sort_url'] = $url . 'asc/';
        }

        $this->pagination->initialize($config);
        $data['total_record'] = $config['total_rows'];
        $pagination_html = $this->pagination->create_links();
        $this->tpl->set_pagination($pagination_html);
        $this->db->order_by($info['sort_on'], $info['sort_type']);
        if ($pagination_html) {

            $data['total_page'] = ceil($config['total_rows'] / $config['per_page']);
            $data['cur_page'] = $this->pagination->cur_page;
            $data['offset'] = (int) $this->uri->segment($info['uri_segment']);
            $data['sort_url'] = $data['sort_url'] . '/' . $data['offset'];
            $this->db->limit($config['per_page'], $data['offset']);
        } else {
            $data['total_page'] = 1;
            $data['cur_page'] = 1;
            $data['offset'] = 0;
        }
        $this->tpl->assign($data);
    }

    

    /* -------------- set current date ----------------- */

    function current_date() {
        $timezone = "Asia/Dhaka";
        if (function_exists('date_default_timezone_set'))
            date_default_timezone_set($timezone);
        return date("Y-m-d h:i:s");
    }

    /* -------------- End ----------------- */

    function status_change($id, $val) {
        if (strtolower($val) == 'publish') {
            $data = '<span class="label label-success">Publish</span>';
        } else if (strtolower($val) == 'unpublish') {
            $data = '<span class="label label-danger">Unpublish</span>';
        } else if (strtolower($val) == 'active') {
            $data = '<span class="label label-success">Active</span>';
        } else if (strtolower($val) == 'inactive') {
            $data = '<span class="label label-danger">Inactive</span>';
        } else if (strtolower($val) == 'live') {
            $data = '<span class="label label-success">Live</span>';
        } else if (strtolower($val) == 'draft') {
            $data = '<span class="label label-danger">Draft</span>';
        }
        $array = array('id' => $id, 'data' => $data);
        return json_encode($array);
    }

    function full_url() {
        $ci = & get_instance();
        $return = $ci->uri->uri_string();
        return $return;
    }

    function upload_dir() {
        return './../upload_images/';
    }
	
	
	function get_random_password($chars_min=6, $chars_max=8, $use_upper_case=false, $include_numbers=false, $include_special_chars=false)
	{
		$length = rand($chars_min, $chars_max);
		$selection = 'aeuoyibcdfghjklmnpqrstvwxz';
		if($include_numbers) {
			$selection .= "1234567890";
		}
		if($include_special_chars) {
			$selection .= "!@\"#$%&[]{}?|";
		}
	
		$password = "";
		for($i=0; $i<$length; $i++) {
			$current_letter = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];            
			$password .=  $current_letter;
		}                
	
	  return $password;
	}
    function pr($data){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
	
}

?>
