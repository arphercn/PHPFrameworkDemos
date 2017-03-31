<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 用户管理模型
 */
class User_model extends CI_Model {
	/**
	 * 查询后台用户数据
	 */
	public function check($username) {
		// $this->db->where(array('username'=>$username))->get('user')->result();
		$data = $this->db->get_where('user',array('username'=>$username))->result_array();
		return $data;
	}

	/**
	 * 修改密码
	 */
	public function change($uid,$data) {
		$this->db->update('user',$data,array('uid'=>$uid) );
	}

}