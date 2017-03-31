<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index() {
		/**
		 * 验证码
		 */
		// $this->load->helper('captcha');

		// $speed = 'abcdefghjkmnpqrstwxy3456789';
		// $word = '';
		// for($i=0; $i<4; $i++) {
		// 	$word .= $speed[mt_rand(0,strlen($speed)-1)];
		// }

		// //配置
		// $vals = array(
		// 	'word' => $word,
		// 	'img_path' => './captcha/',
		// 	'img_url' => base_url().'/captcha/',
		// 	'img_width' => 80,
		// 	'img_height' => 25,
		// 	'expiration' => 60 //存放图片过期时间s
		// 	);
		// //创建验证码
		// $cap = create_captcha($vals);

		// $data['captcha'] = $cap['image'];

		//$this->load->view('admin/login.html',$data);
		$this->load->view('admin/login.html');
	}

	/**
	 * 用自定义验证码
	 */
	public function code() {
		$config = array(
			'width' => 80,
			'height' => 25,
			'codeLen' => 1,
			'fontSize' => 16
			);
		$this->load->library('code',$config);

		$this->code->show();
	}
	/**
	 * 登录
	 */
	public function login_in() {
		$code = $this->input->post('captcha');
		if(!isset($_SESSION)) {
			session_start();
		}

	if(strtoupper($code) != $_SESSION['code'] ) error('验证码错误');

	$username = $this->input->post('username');
	$password = md5($this->input->post('password'));
	$this->load->model('user_model','user');
	$userData = $this->user->check($username);

	if($userData[0]['username'] != $username||
		$userData[0]['password'] != $password
		) error('用户名或密码不正确');
	
	$sessionData = array(
		'username' => $username,
		'uid' =>$userData[0]['uid'],
		'logintime' =>time()
		);
	//已自动加载session类，默认开启，设置session
	$this->session->set_userdata($sessionData);

	redirect('admin/index');

	}

	/**
	 * 退出
	 */
	public function login_out() {
		$this->session->sess_destroy();
		success('login/index','退出成功');
	}


	/**
	 * 密码修改
	 */
	public function password_change() {
		$this->load->view('admin/password_change.html');
	}

	/**
	 * 密码修改动作
	 */
	public function change() {

		//判断原始密码
		$password_old = $this->input->post('password_old');

		$this->load->model('user_model','user');
		$username = $this->session->userdata('username');
		$user_data = $this->user->check($username);

		if( md5($password_old) != $user_data[0]['password'] ) error('密码不正确');
		
		//判断两次密码一致
		$password_new = md5($this->input->post('password_new'));
		$password_check = md5($this->input->post('password_check'));
		if($password_new != $password_check) error('两次输入密码不一致');
		if(!$password_new || !$password_check) error('请输入新密码');

		//提交
		$uid = $this->session->userdata('uid');
		$data = array(
			'password' => $password_new
			);
		$this->user->change($uid,$data);
		success('admin/copy','密码修改成功');


	}



}