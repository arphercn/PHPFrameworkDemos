<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 文章管理模型
 */
class Article_model extends CI_Model {
	/**
	 * 发表文章
	 */
	public function add($data) {
		$this->db->insert('article',$data);
	}
	/**
	 * 关联cate查看文章
	 */
	public function show() {
		$data = $this->db->select('aid,title,cname,atime') -> from('article')->join('cate','article.cid=cate.cid')->order_by('aid','desc')->get()->result_array();
		return $data;
	}
	/**
	 * 查询文章
	 */
	public function check($aid) {
		// $data = $this->db->select('aid,title,cname,type,info,content,atime') -> from('article')->join('cate','article.cid=cate.cid')->where(array('aid'=>$aid))->get()->result_array();
		$data = $this->db->where(array('aid'=>$aid)) ->get('article') -> result_array();
		return $data;
	}
	/**
	 * 文章修改
	 */
	public function change($aid,$data) {
		$this->db->update('article',$data,array('aid'=>$aid));
	}
	/**
	 * 文章删除
	 */
	public function del($aid) {
		$this->db->delete('article',array('aid'=>$aid));
	}
	/**
	 * 首页查询文章
	 */
	public function article_type() {
		$data['new'] = $this->db->select('aid,title,info,thumb')->order_by('atime','desc')->get_where('article',array('type'=>0))->result_array();
		$data['old'] = $this->db->select('aid,title,info,thumb')->order_by('atime','desc')->get_where('article',array('type'=>1))->result_array();
		return $data;
	}
	/**
	 * 主页右侧标题 限数查询
	 */
	public function title($limit) {
		$data = $this->db->select('aid,title')->order_by('atime','desc')->limit($limit)->get('article')->result_array();
		return $data;
	}
	/**
	 * 文章通过栏目cid查询
	 */
	public function article_cid($cid) {
		$data = $this->db->select('aid,cid,title,info,thumb')->order_by('atime','desc')->get_where('article',array('cid'=>$cid))->result_array();
		return $data;
	}
	/**
	 * 文章通过aid查询
	 */
	public function article_aid($aid) {
		$data = $this->db->select('aid,cname,title,thumb,content,atime')->join('cate','article.cid=cate.cid')->order_by('atime','desc')->get_where('article',array('aid'=>$aid))->result_array();
		return $data;
	}



}