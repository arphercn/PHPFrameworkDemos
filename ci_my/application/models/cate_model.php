<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cate_model extends CI_Model { //选择模型名 对应数据表名
	/**
	 * 查看栏目
	 */
	public function show() {
		// $data = $this->db->get('cate') -> result();//从表中取出对象
		$data = $this->db->get('cate') -> result_array();//从表中取出数组
		//p($data);
		return $data;
	}
	/**
	 * 添加栏目
	 */
	public function add($data) {
		//echo '这是栏目管理模型里的add方法';
		$this->db->insert('cate',$data);//数据表不用写前缀
	}
	/**
	 * 查询对应的栏目
	 */
	public function check($cid) {
		//          查'cid'最好用array过滤            从cate表        返回数组
		$data = $this->db->where(array('cid'=>$cid)) ->get('cate') -> result_array();
		return $data;
	}
	/**
	 * 修改栏目
	 */
	public function update($cid,$data) {
		//传参：          数据表，修改值，修改条件
		$this->db->update('cate',$data,array('cid'=>$cid));
	}
	/**
	 * 删除栏目
	 */
	public function del($cid) {
		$this->db->delete('cate',array('cid'=>$cid));
	}
	/**
	 * 导航栏目数 限制
	 */
	public function nav($limit) {
		$data = $this->db->limit($limit)->get('cate')->result_array();
		return $data;
	}



}
