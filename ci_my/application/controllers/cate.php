<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cate extends MY_controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct();//框架要求必须写前面，以下方法中用到的地方用/**/代替
		$this->load->model('cate_model','cate');//第二个参数是别名
	}


	//查看栏目
	public function index() {
		//echo '查看栏目';
		/**/
		$data['cate'] = $this->cate->show();//调用模型cate_model的check方法

		$this->load->view('admin/cate.html',$data);//调用直接用$data
	}


	//添加栏目模板
	public function cate_add() {
		//$this->output->enable_profiler(TRUE);//debug调试模式打开

		$this->load->helper('form');
		$this->load->view('admin/cate_add.html');
	} 

	// 提交添加动作
	public function add() {
		$this->load->library('form_validation');
		$status = $this->form_validation->run('cate');

		if($status){
			//echo $_POST['abc'];//如果是abc会报错abc未定义
			//预处理学习，可以用以下3中方法post,get,server取值
			// var_dump($this->input->post('abc'));//返回null
			// var_dump($this->input->post('cname'));//返回值
			// var_dump($this->input->get('abc'));
			// echo $this->input->server('HTTP_HOST');

			//echo '数据库操作';
			$data = array(
				//'cname' => $_POST['cname'] //不建议用
				'cname' => $this->input->post('cname')//不报错，更安全
				);
			/**/
			$this->cate->add($data);
			success('cate/index','添加成功');
		}else{
			$this->load->helper('form');
			$this->load->view('admin/cate_add.html');
		}
	}


	//编辑栏目模板
	public function cate_edit() {
		$cid = $this->uri->segment(3);//框架自动加载，取 地址的 第3个片段
		//echo $cid;die();

		/**/
		$data['cate'] = $this->cate->check($cid);//查询对应的栏目

		$this->load->helper('form');
		$this->load->view('admin/cate_edit.html',$data);//把$cate传给模板
	}

	// 提交编辑栏目动作
		public function edit() {
		$this->load->library('form_validation');
		$status = $this->form_validation->run('cate');

		if($status){
			//echo '数据库操作';
			/**/

			$cid = $this->input->post('cid');
			$cname = $this->input->post('cname');
			$data = array(
				'cname'=>$cname //数据表的字段名=>修改值
				);

			$data['cate'] = $this->cate->update($cid,$data);
			success('cate/index','修改成功');
		}else{

			$this->load->helper('form');
			$this->load->view('admin/cate_edit.html',$data);
		}
	}


	//删除栏目
	public function del() {
		$cid = $this->uri->segment(3);

		/**/
		$this->cate->del($cid);
		success('cate/index','删除成功');
	}

	
}