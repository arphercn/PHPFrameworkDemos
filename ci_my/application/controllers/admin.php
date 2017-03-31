<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_controller {
	
	//默认首页显示
	public function index() {
		$this->load->view('admin/index.html');
	}

	//后台iframe版权copy
	public function copy() {
		$this->load->view('admin/copy.html'); 
	}
	
}