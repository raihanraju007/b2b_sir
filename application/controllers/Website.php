<?php

class Website extends Frontend_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->set_layout('website');
		$this->load->helper(array('html', 'array', 'form', 'url'));

		//$this->rand = random_string('numeric', 4);
		$this->load->library('session');
	}


	function mailsend()
	{
		echo md5('123456');
		exit;
		/*
		$to = "rhrabbi42@gmail.com";
		$subject = "My subject";
		$txt = "Hello world!";
		$headers = "From: rhrabbi96@gmail.com" . "\r\n";

		mail($to,$subject,$txt,$headers);
		exit;*/

		//echo 'Mail';exit;

		$to = 'rhrabbi42@gmail.com';
		//$to = "system@arena.com.bd";

		$body = "";
		$body .= "জানাব  ,<br>";
		$body .= "আপনার নিকট পেনশন এর একটি আবেদন এসেছে , আবেদন কারীর তথ্যাদি :<br><br>";
		$body .= "আবেদন কারীর নাম  : Asfi<br>";
		$body .= "আবেদন কারীর আইডি  : 242342342342<br>";
		$body .= "আবেদন কারীর পদবী   :md<br><br>";

		$message = $body;
		$subject = 'নতুন পেনশন আবেদন পত্র প্রসঙ্গে';

		$config = array(
			'mailtype' => 'html',
			'wordwrap' => TRUE,
			'charset' => 'utf-8',
			'validation' => true
		);

		$config['newline'] = "\r\n";
		$config['crlf']    = "\n";

		$this->load->library('email', $config);

		//$this->email->initialize($config);

		$this->email->set_newline("\r\n");
		$this->email->from('rhrabbi96@gmail.com', 'B2BITEM');
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->set_crlf("\r\n");
		//$this->email->send();

		if ($this->email->send()) {
			echo 'ss';
		} else {
			echo $this->email->print_debugger();
		}

		echo 'doen';
		exit;
	}

	function mailsend2()
	{
		//echo phpinfo();exit;
		$to_email = "rhrabbi42@gmail.com";

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'mail.b2bitem.com';
		$config['smtp_port'] = 587; //if 80 dosenot work use 24 or 21
		$config['smtp_user']  = 'support@b2bitem.com';
		$config['smtp_pass']  = 'WEGME}?vbcgN';
		$config['_smtp_auth'] = true;
		$config['smtp_crypto'] = 'tls';
		$config['protocol'] = 'smtp';
		$config['mailtype']  = 'html';
		$config['charset']    = 'iso-8859-1';
		$config['wordwrap']   = TRUE;

		$this->load->library('email');
		$this->email->initialize($config);

		$this->email->set_newline("\r\n");
		$this->email->from('no-reply@b2bitem.com', 'B2BITEM');  //same email u use for smtp_user 
		$this->email->to($to_email);
		$this->email->subject($subject);
		$this->email->message($message);

		if ($this->email->send()) {
			echo 'Email sent.';
		} else {
			show_error($this->email->print_debugger());
		}
		exit;
	}


	public function index()
	{
		
		//echo $this->session->userdata('company_id');exit;

		$product_cat = $this->websitemodel->get_cat_list();
		$this->assign('product_cat', $product_cat);

		$productlist = $this->websitemodel->get_product_list();
		$this->assign('productlist', $productlist);

		$productlist2 = $this->websitemodel->get_product_top12_list();
		$this->assign('productlist2', $productlist2);

		$featured_cat_list = $this->websitemodel->get_featured_cat_list();
		$this->assign('featured_cat_list', $featured_cat_list);
		// echo '<pre>';
		// print_r($featured_cat_list);
		// exit;

		$sellercompany = $this->websitemodel->get_new_seller_compnay_list();
		$this->assign('sellercompany', $sellercompany);

		$country = $this->websitemodel->get_country_top9_list();
		//echo '<pre>';print_r($country);exit;
		$this->assign('country', $country);

		$this->load->view('website/index');
	}

	public function register()
	{

		$this->load->helper('captcha');

		//--------------session set for captcha-----------\\

		$company_user_type = $this->session->userdata('company_user_type');


		if ($company_user_type) {
			$sesdata['company_user_type'] = $company_user_type;
		} else {
			$sesdata['company_user_type'] = '';
		}

		$country_id = $this->session->userdata('country_id');



		if ($country_id) {
			$sesdata['country_id'] = $country_id;
		} else {
			$sesdata['country_id'] = 0;
		}

		$email = $this->session->userdata('email');


		if ($email) {
			$sesdata['email'] = $email;
		} else {
			$sesdata['email'] = '';
		}

		$mobile = $this->session->userdata('mobile');

		if ($mobile) {
			$sesdata['mobile'] = $mobile;
		} else {
			$sesdata['mobile'] = '';
		}

		$company_name_ses = $this->session->userdata('company_name_ses');

		if ($company_name_ses) {
			$sesdata['company_name_ses'] = $company_name_ses;
		} else {
			$sesdata['company_name_ses'] = '';
		}

		$contact_person_ses = $this->session->userdata('contact_person_ses');

		if ($contact_person_ses) {
			$sesdata['contact_person_ses'] = $contact_person_ses;
		} else {
			$sesdata['contact_person_ses'] = '';
		}

		$captcha = $this->session->userdata('captcha');

		if ($captcha) {
			$sesdata['captcha'] = $captcha;
		} else {
			$sesdata['captcha'] = '';
		}


		$array_items = array('company_user_type' => '', 'country_id' => '', 'email' => '', 'mobile' => '', 'contact_person_ses' => '', 'company_name_ses' => '', 'captcha' => '');
		$this->session->set_userdata($array_items);
		//------------------end--------------\\

		$random_number = substr(number_format(time() * rand(), 0, '', ''), 0, 4);

		$config = array(
			'word'   => $random_number,
			//'word'   => $this->rand,
			'img_path'      => 'captcha_images/',
			'img_url'       => base_url() . 'captcha_images/',
			'font_path'     => 'system/fonts/texb.ttf',
			'img_width'     => '160',
			'img_height'    => 38,
			'word_length'   => 4,
			'font_size'     => 22
		);
		$captcha = create_captcha($config);

		if ($captcha) {

			$this->session->set_userdata(array('captchaCode' => $captcha['word']));
		}


		$this->session->unset_userdata(array('com_id', 'com_email', 'company_name', 'contact_person'));


		$cap_img = $captcha['image'];
		$this->assign('captchaImg', $cap_img);

		$this->assign('sesdata', $sesdata);

		$sdata = array(
			'com_id' => '',
			'com_email' => '',
			'company_name' => '',
			'contact_person' => ''
		);

		$this->session->set_userdata($sdata);

		$country = $this->websitemodel->get_country_list();
		$this->assign('country', $country);

		// echo '<pre>';print_r($this->session);exit;

		$this->load->view('website/join_fee');
	}

	public function refresh()
	{

		$this->load->helper('captcha');

		$random_number = substr(number_format(time() * rand(), 0, '', ''), 0, 4);

		$config = array(
			'word'   => $random_number,
			//'word'   => $this->rand,
			'img_path'      => 'captcha_images/',
			'img_url'       => base_url() . 'captcha_images/',
			'font_path'     => 'system/fonts/texb.ttf',
			'img_width'     => '160',
			'img_height'    => 38,
			'word_length'   => 4,
			'font_size'     => 22
		);
		$captcha = create_captcha($config);

		if ($captcha) {

			$this->session->set_userdata(array('captchaCode' => $captcha['word']));
		}

		// Display captcha image
		echo $captcha['image'];
		//echo $captcha['word'];
	}

	function removeSpecialCharacters($inputString)
	{
		// Define an array with the characters to be removed
		$charactersToRemove = array(',', '.', '&');

		// Replace each character with an empty string
		$cleanedString = str_replace($charactersToRemove, '', $inputString);

		return $cleanedString;
	}


	public function virify_email()
	{

		$inputCaptcha = $this->input->post('captcha');
		$sessCaptcha = $this->session->userdata('captchaCode');


		if ($inputCaptcha === $sessCaptcha) {

			$token = bin2hex(openssl_random_pseudo_bytes(200));

			$post_data = $this->input->post();


			$post_data['email'] = str_replace(" ", "", $post_data['email']);

			$check_com_email = $this->websitemodel->check_company_email($post_data['email']);

			if ($check_com_email > 0) {

				$this->session->set_flashdata('error', $this->tpl->set_message('error', 'Email Already exits. Please change your email address.'));
				redirect('register', 'refresh');
				exit;
			}

			$comslag = $this->removeSpecialCharacters($post_data['company_name']);

			$slag = strtolower($comslag);

			$slag = str_replace(" ", "-", $slag);

			$post_data['activation_code'] = $token;
			$post_data['reg_ip'] = $this->get_client_ip();
			$post_data['text_password'] = $post_data['password'];
			$post_data['password'] = md5($post_data['password']);
			$post_data['join_date'] = date("Y-m-d");

			unset($post_data['captcha']);

			//	echo '<pre>';print_r($post_data);exit;

			$company_id = $this->websitemodel->insert('company', $post_data);

			//$company_id = 27634;
			if ($company_id) {

				$slagdata['slag'] = $slag . '-' . $company_id;

				$this->websitemodel->update('company', $company_id, $slagdata);

				$url = $this->send_verification_mail($company_id, $post_data);
			}

			$this->tpl->set_layout('website_layout');

			$this->assign('verify_url', $url);

			$this->assign('info', $post_data);

			$this->load->view('website/virify_email');
		} else {

			$postdata = $this->input->post();
			$postdata['company_name_ses'] = $postdata['company_name'];
			$postdata['contact_person_ses'] = $postdata['contact_person'];

			$this->session->set_userdata($postdata);

			$this->session->set_flashdata('error', $this->tpl->set_message('error', 'Captcha code does not match, please try again.'));
			redirect('register', 'refresh');
			exit;
		}
	}

	public function send_verification_mail($com_id, $data)
	{

		$this->tpl->set_layout('ajax_layout');

		$active_url = site_url('website/active_company/' . $data['activation_code'] . '__' . $com_id);

		$this->assign('info', $data);
		$this->assign('active_url', $active_url);

		$mialcontent  = $this->load->view('website/mailcontent', '', true);

		//echo $mialcontent;exit;

		$sdata['com_id'] = $com_id;
		$sdata['com_email'] = $data['email'];
		$sdata['company_name'] = $data['company_name'];
		$sdata['contact_person'] = $data['contact_person'];
		$this->session->set_userdata($sdata);


		//-----------------send mail------------------\\


		$to_email = $data['email'];

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'mail.b2bitem.com';
		$config['smtp_port'] = 587; //if 80 dosenot work use 24 or 21
		$config['smtp_user']  = 'support@b2bitem.com';
		$config['smtp_pass']  = 'WEGME}?vbcgN';
		$config['_smtp_auth'] = true;
		$config['smtp_crypto'] = 'tls';
		$config['protocol'] = 'smtp';
		$config['mailtype']  = 'html';
		$config['charset']    = 'iso-8859-1';
		$config['wordwrap']   = TRUE;

		$this->load->library('email');
		$this->email->initialize($config);

		$this->email->set_newline("\r\n");
		$this->email->from('no-reply@b2bitem.com', 'B2BITEM');  //same email u use for smtp_user 
		$this->email->to($to_email);

		$cclist = array('shimul39@gmail.com');
		//$this->email->cc($cclist);
		$this->email->bcc($cclist);

		$this->email->subject('Verify Your Email Address');
		$this->email->message($mialcontent);

		if ($this->email->send()) {
		} else {

			echo "<h2 style='text-align: center;color: red; margin: 100px;'> Can not send verificatio mail. Please change your mail address.</h2>";
			exit;
		}

		return $active_url;
	}

	public function resent_verification_code()
	{

		$com_id = $this->session->userdata('com_id');

		$com_info = $this->websitemodel->get_all_info('company', $com_id);

		$this->send_verification_mail($com_id, $com_info);

		echo json_encode(1);

		exit;
	}

	public function update_user_email_address()
	{

		$email = $this->input->post('new_email');

		$com_email = $this->session->userdata('com_email');
		$com_id = $this->session->userdata('com_id');
		$company_name = $this->session->userdata('company_name');
		$reg_name = $this->session->userdata('contact_person');


		$email = str_replace(" ", "", $email);
		if ($email == $com_email) {
			$res  = 0;
			echo json_encode(0);
			exit;
		}

		$token = bin2hex(openssl_random_pseudo_bytes(200));

		$updata['activation_code'] = $token;
		$updata['email'] = $email;
		$company_id = $this->websitemodel->update('company', $com_id, $updata);

		$maildata['activation_code'] = $token;
		$maildata['email'] = $email;
		$maildata['contact_person'] = $reg_name;
		$maildata['company_name'] = $company_name;

		$this->send_verification_mail($com_id, $maildata);

		$res  = 1;

		echo json_encode(1);

		exit;
	}

	public function active_company($v_token)
	{

		$data = explode("__", $v_token);
		$token = $data[0];
		$id = $data[1];

		$update_data['verify'] = 1;
		$statusupdate = $this->websitemodel->update('company', $id, $update_data);
		$user = $this->websitemodel->get_all_info('company', $id);

		$sdata['admin_username'] = $user['contact_person'];
		$sdata['admin_email'] = $user['email'];
		$sdata['admin_userid'] = $user['id'];
		$sdata['admin_name'] = $user['contact_person'];
		$sdata['admin_group_id'] = $user['company_user_type'];
		$sdata['company_id'] = $user['id'];
		$sdata['title'] = $user['company_user_type'];
		$this->session->set_userdata($sdata);

		if ($user['company_user_type'] == 'Seller') {
			redirect('seller', 'refresh');
		} else {
			redirect('buyer', 'refresh');
		}
	}

	public function get_client_ip()
	{
		$ipaddress = '';
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if (getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if (getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if (getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if (getenv('HTTP_FORWARDED'))
			$ipaddress = getenv('HTTP_FORWARDED');
		else if (getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}

	public function login()
	{
		$this->load->view('website/login');
	}

	public function dologin()
	{

		$user = $this->websitemodel->check_login();
		if (!empty($user)) {
			$sdata['admin_username'] = $user['contact_person'];
			$sdata['admin_email'] = $user['email'];
			$sdata['admin_userid'] = $user['id'];
			$sdata['admin_name'] = $user['contact_person'];
			$sdata['admin_group_id'] = $user['company_user_type'];
			$sdata['company_id'] = $user['id'];
			$sdata['title'] = $user['company_user_type'];
			$this->session->set_userdata($sdata);

			if ($user['company_user_type'] == 'Seller') {
				redirect('seller', 'refresh');
			} else {
				redirect('buyer', 'refresh');
			}
		} else {

			$this->session->set_flashdata('error', $this->tpl->set_message('error', 'Email or password did not match.'));
			redirect('login', 'refresh');
		}
	}

	public function logout()
	{
		$sdata['admin_username'] = '';
		$sdata['admin_email'] = '';
		$sdata['admin_userid'] = '';
		$sdata['admin_group_id'] = '';
		$this->session->sess_destroy($sdata);
		redirect('login', 'refresh');
	}



	public function business_directory()
	{

		$product_cat = $this->websitemodel->get_cat_list();
		$this->assign('product_cat', $product_cat);

		$productlist = $this->websitemodel->get_product_list();
		$this->assign('productlist', $productlist);

		$sellercompany = $this->websitemodel->get_new_seller_compnay_list();
		$this->assign('sellercompany', $sellercompany);

		$country = $this->websitemodel->get_country_list();
		//echo '<pre>';print_r($country);exit;
		$this->assign('country', $country);


		$this->load->view('website/business_directory');
	}

	public function companies()
	{

		$product_cat = $this->websitemodel->get_cat_list();
		$this->assign('product_cat', $product_cat);


		$suppliers = $this->websitemodel->new_seller_top_10_last();
		$this->assign('suppliers', $suppliers);

		$product = $this->websitemodel->new_product_companies();
		$this->assign('product', $product);

		$country = $this->websitemodel->get_country_list();
		//echo '<pre>';print_r($country);exit;
		$this->assign('country', $country);


		$this->load->view('website/companies');
	}

	public function b2bleads()
	{
		$list = $this->websitemodel->getAllBuySell();
		//echo '<pre>';print_r($list);exit;
		$this->assign('list', $list);

		$product_cat = $this->websitemodel->get_cat_list();
		$this->assign('product_cat', $product_cat);

		$this->load->view('website/b2bleads');
	}

	public function cat_wise_buyer($slag)
	{
		$list = $this->websitemodel->getAllBuySell($slag);
		//echo '<pre>';print_r($list);exit;
		$this->assign('list', $list);

		$product_cat = $this->websitemodel->get_cat_list();
		$this->assign('product_cat', $product_cat);

		$this->load->view('website/cat_b2bleads');
	}


	public function buysell($slag)
	{


		$info = $this->websitemodel->getBuySell($slag);
		//echo '<pre>';print_r($info);exit;
		$this->assign('info', $info);

		$product_cat = $this->websitemodel->get_cat_list();
		$this->assign('product_cat', $product_cat);

		$this->load->view('website/buysell');
	}
	
	 public function quatation($id){
        
        
        $bsinfo = $this->websitemodel->getbuysellinfora($id);
        $this->assign('info', $bsinfo);
        
        $product_cat = $this->websitemodel->get_cat_list();
		
		$this->assign('product_cat', $product_cat);

		$product_unit = $this->websitemodel->get_product_unit_list();
		$this->assign('unit', $product_unit);
        
        $this->load->view('website/quatation');
    }

	public function forgot_password()
	{

		$fform = 1;

		$check = 1;

		$email = '';

		if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$email = $this->input->post('email');

			$info = $this->websitemodel->check_company_email($email);

			if (empty($info)) {
				$check = 0;
			} else {

				$pass = rand(99999, 1000000);

				$update['password'] = md5($pass);

				$this->websitemodel->update('company', $update, $info['id']);

				$fform = 0;

				//$email = 'rhrabbi42@gmail.com';

				$mialcontent = '';

				$mialcontent .= '<h4>Hello ' . $info['contact_person'] . '</h4>';

				$mialcontent .= '<p>Here is your login information with new password.</p>';
				$mialcontent .= '<p>Email: ' . $email . '</p>';
				$mialcontent .= '<p>Password: ' . $pass . '</p>';
				$mialcontent .= '<p>Login URL: <a href="https://b2bitem.com/login">https://b2bitem.com/login</a></p>';

				$mialcontent .= '<br><p>Please change your password, after login to your b2bitem account.</p>';

				$to_email = $email;

				$config['protocol'] = 'smtp';
				$config['smtp_host'] = 'mail.b2bitem.com';
				$config['smtp_port'] = 587; //if 80 dosenot work use 24 or 21
				$config['smtp_user']  = 'support@b2bitem.com';
				$config['smtp_pass']  = 'WEGME}?vbcgN';
				$config['_smtp_auth'] = true;
				$config['smtp_crypto'] = 'tls';
				$config['protocol'] = 'smtp';
				$config['mailtype']  = 'html';
				$config['charset']    = 'iso-8859-1';
				$config['wordwrap']   = TRUE;

				$this->load->library('email');
				$this->email->initialize($config);

				$this->email->set_newline("\r\n");
				$this->email->from('no-reply@b2bitem.com', 'B2BITEM');  //same email u use for smtp_user 
				$this->email->to($to_email);
				$this->email->subject('Your Updated Login Info');
				$this->email->message($mialcontent);

				$this->email->send();
			}
		}

		$this->assign('email', $email);
		$this->assign('check', $check);
		$this->assign('fform', $fform);

		$this->load->view('website/forgot_password');
	}

	public function buysell_req_from()
	{

		$post_data = $this->input->post();

		//echo '<pre>';print_r($post_data);exit;

		$countylist = $this->websitemodel->get_country_list();
		$this->assign('countylist', $countylist);


		$product_cat = $this->websitemodel->get_cat_list();
		$this->assign('product_cat', $product_cat);

		$product_unit = $this->websitemodel->get_product_unit_list();
		$this->assign('product_unit', $product_unit);

		$this->assign('req_data', $post_data);

		$this->load->view('website/buysell_req_from');
	}

	public function savebuyselldata()
	{


		$data = $this->input->post();


		if ($data['member_type'] == 'existing') {

			$user = $this->websitemodel->check_login();

			if (!empty($user)) {
				$sdata['admin_username'] = $user['contact_person'];
				$sdata['admin_email'] = $user['email'];
				$sdata['admin_userid'] = $user['id'];
				$sdata['admin_name'] = $user['contact_person'];
				$sdata['admin_group_id'] = $user['company_user_type'];
				$sdata['company_id'] = $user['id'];
				$sdata['title'] = $user['company_user_type'];
				$this->session->set_userdata($sdata);
			} else {

				$this->session->set_flashdata('error', $this->tpl->set_message('error', 'Email or password did not match.'));
				redirect('website/buysell_req_from', 'refresh');
			}
		} else {

			$token = bin2hex(openssl_random_pseudo_bytes(200));

			$post_data['email'] = str_replace(" ", "", $data['registration_email']);

			$check_com_email = $this->websitemodel->check_company_email($post_data['email']);

			if ($check_com_email > 0) {

				$this->session->set_flashdata('error', $this->tpl->set_message('error', 'Email Already exits. Please change your email address.'));
				redirect('website/buysell_req_from', 'refresh');
				exit;
			}

			$comslag = $this->removeSpecialCharacters($data['company_name']);

			$slag = strtolower($comslag);

			$slag = str_replace(" ", "-", $slag);

			$post_data['activation_code'] = $token;
			$post_data['reg_ip'] = $this->get_client_ip();
			$post_data['text_password'] = $data['registration_password'];
			$post_data['password'] = md5($data['registration_password']);
			$post_data['join_date'] = date("Y-m-d");
			$post_data['country_id'] = $data['country_id'];
			$post_data['contact_person'] = $data['contact_person'];
			$post_data['mobile'] = $data['mobile'];
			$post_data['company_name'] = $data['company_name'];

			$company_id = $this->websitemodel->insert('company', $post_data);

			//$company_id = 27634;
			if ($company_id) {

				$slagdata['slag'] = $slag . '-' . $company_id;

				$this->websitemodel->update('company', $company_id, $slagdata);

				$this->send_verification_mail($company_id, $post_data);
			}

			$user['id'] = $company_id;
		}


		$validate = date('Y-m-d', strtotime($data['validity_date']));

		$buydata['company_id'] = $user['id'];
		$buydata['ad_title'] = $data['ad_title'];
		$buydata['product_name'] = $data['product_name'];
		$buydata['category_id'] = $data['cat_id'];
		$buydata['req_details'] = $data['details'];
		$buydata['qty'] = $data['quantity'];
		$buydata['unit_id'] = $data['quantity_unit'];
		$buydata['packaging_terms'] = $data['packing_terms'];
		$buydata['shipping_terms'] = $data['shipping_terms'];
		$buydata['validity_date'] = $validate;
		$buydata['date'] = date('Y-m-d');
		$buydata['category'] = 'buy';
		$buydata['status'] = 'Pending';
		$buydata['slag'] = uniqid();


		if (trim($_FILES["productImg"]["name"]) != '') {

			$files = $_FILES;
			$_FILES['image_name']['name'] = $files['productImg']['name'];
			$_FILES['image_name']['type'] = $files['productImg']['type'];
			$_FILES['image_name']['tmp_name'] = $files['productImg']['tmp_name'];
			$_FILES['image_name']['error'] = $files['productImg']['error'];
			$_FILES['image_name']['size'] = $files['productImg']['size'];
			$new_name = rand(100000, 999999) . '_' . rand(100000, 999999) . $_FILES['image_name']['name'];
			$new_name = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\.]/s', '', $new_name);
			$new_name = preg_replace('/\s+/', '_', $new_name);
			$field_name = "productImg";

			$this->upload_product($field_name, $new_name);

			$productImg = $new_name;

			$buydata['product_img'] = $productImg;
		}


		$this->websitemodel->insert('buysale', $buydata);

		redirect('website/buysell_req_from_success', 'refresh');
		exit;
	}

	public function buysell_req_from_success()
	{


		$this->load->view('website/buysell_req_from_success');
	}


	function upload_product($field_name, $image_name)
	{
		$upconfig['upload_path'] = "../upload/buysell";
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

	// public function business($ctype, $cat_slag)
	// {


	// 	$result =  $this->websitemodel->get_business_list($ctype, $cat_slag);
	// 	$this->assign('data', $result);
	// 	echo '<Pre>';
	// 	print_r($result);
	// 	exit;
	// 	// $this->load->view('website/business');
	// 	$this->load->view('website/business', ['data_list' => $result['data_list']]);
	// }

	// public function business($ctype, $cat_slag)
	// {
	// 	$result = $this->websitemodel->get_business_list($ctype, $cat_slag);
	// 	$category_name = ''; // Initialize category name

	// 	// Determine category name based on $ctype and $cat_slag logic
	// 	if ($ctype == 'm') {
	// 		$category_name = $this->websitemodel->get_category_name($cat_slag);
	// 	} else {
	// 		$category_name = $this->websitemodel->get_subcategory_name($cat_slag);
	// 	}

	// 	// echo '<Pre>';
	// 	// print_r($result);
	// 	// exit;

	// 	$this->load->view('website/business', [
	// 		'data_list' => $result['data_list'],
	// 		'category_name' => $category_name
	// 	]);
	// }

	public function business($ctype, $cat_slag)
{
    // Get category information
    $cat_info = $this->websitemodel->category_info($cat_slag);

// 	echo '<Pre>';
// 	print_r($cat_info);
// 	exit;

    // Get product list for the category
    $fplist = $this->websitemodel->get_cat_prodcut_list_last4($cat_info['id']);

    // Get all product categories
    $product_cat = $this->websitemodel->get_cat_list();

    // Get suppliers for the category
    $product_suppliear = $this->websitemodel->get_category_wise_company($cat_info['id']);

    // Get business list based on $ctype and $cat_slag
    $result = $this->websitemodel->get_business_list($ctype, $cat_slag);

    // Determine category name based on $ctype and $cat_slag logic
    if ($ctype == 'm') {
        $category_name = $this->websitemodel->get_category_name($cat_slag);
    } else {
        $category_name = $this->websitemodel->get_subcategory_name($cat_slag);
    }

    // Get sub-category information
    $sub_cat_info = $this->websitemodel->sub_category_info($cat_slag);
    
//      echo '<Pre>';
// 	 print_r($sub_cat_info);
// 	 exit;

    // Get product list for the sub-category
    $sub_product_list = $this->websitemodel->get_sub_cat_prodcut_list($sub_cat_info['id']);

    // Get all product categories
    $product_cat = $this->websitemodel->get_cat_list();

    // Pass all necessary data to the view
    $this->load->view('website/business', [
        'data_list' => $result['data_list'],
        'category_name' => $category_name,
        'cat_info' => $cat_info,
        'fplist' => $fplist,
        'product_suppliear' => $product_suppliear,
        'sub_cat_info' => $sub_cat_info,
        'sub_product_list' => $sub_product_list,
        'product_cat' => $product_cat
    ]);
}

    public function subCategoryCompany($slag) {
   
    if (empty($slag)) {
        show_error('Slug is missing', 500);
    }
    $sub_cat_info = $this->websitemodel->sub_category_info($slag);
    // echo '<pre>';print_r($sub_cat_info);exit;

    if (empty($sub_cat_info)) {
        show_error('No data found for the given slug', 404);
    }

    $this->assign('sub_cat_info', $sub_cat_info);
    
    // 	echo '<pre>';print_r($sub_cat_info);exit;
     $company_list = $this->websitemodel->get_sub_category_wise_company($sub_cat_info['category_id'], $sub_cat_info['id']);
	 $cat_info = $this->websitemodel->category_info($sub_cat_info[link_prefix]);
     
     
     
       	// echo '<pre>';print_r($sub_product_list);exit;
     

    $this->load->view('website/subcategory_company',[
        'sub_cat_info' => $sub_cat_info,
        'company_list' => $company_list,
        'cat_info' => $cat_info,
        
    ]);
    
}



    
   


    



}
