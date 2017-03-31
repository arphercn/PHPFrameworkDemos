<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('article_model','arti');
	}

	//文章列表显示
	public function index() {
		//分页-----------------------
		$this->load->library('pagination');

		$perPage = 9;
		$config['base_url'] = site_url('article/index');
		$config['total_rows'] = $this->db->count_all_results('article');
		$config['per_page'] = $perPage;
		$config['uri_segment'] = 3;//默认会自动检测，可以设置为自己的值
		$config['num_links'] = 2;//当前页码的前面和后面的“数字”链接的数量
		$config['first_link'] = '首页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['last_link'] = '末页';

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$offset = $this->uri->segment(3);
		$this->db->limit($perPage,$offset);

		//列表模板显示----------------------------------
		$data['article'] = $this->arti->show();
		$this->load->view('admin/article.html',$data);
	}

	// 发表文章模板显示
	public function article_send() {
		$this->load->model('cate_model','cate');
		$data['cate'] = $this->cate->show();

		$this->load->helper('form');
		$this->load->view('admin/article_send.html',$data);
	}

	//发表文章动作
	public function send(){

		//文件上传处理---------------------------
		//配置
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['file_name'] = time().mt_rand(1000,9999);
		//载入上传类，处理配置
		$this->load->library('upload', $config);
		//执行上传
		$this->upload->do_upload('thumb');
		//错误信息处理
		$wrong = $this->upload->display_errors();
		if($wrong) {
			error($wrong);
		}
		//返回信息
		$info = $this->upload->data();
		//p($info);die;

		//缩略图处理-----------------------------------------
		$arr['source_image'] = $info['full_path'];
		$arr['create_thumb'] = FALSE;
		$arr['maintain_ratio'] = TRUE;
		$arr['width']     = 200;
		$arr['height']   = 200;
		//载入缩略图类
		$this->load->library('image_lib', $arr);
		//执行动作
		$this->image_lib->resize();

		// 载入表单验证类------------------------------------
		$this->load->library('form_validation');
		// 执行规则
		// $this->form_validation->set_rules('title','文章标题','required|max_length[25]');
		// $this->form_validation->set_rules('content','内容','required');
		// 执行验证
		$status = $this->form_validation->run('article');

		if($status){
			//echo '数据库操作';
			$this->load->model('article_model','arti');
			$data = array(
				'title' => $this->input->post('title'),
				'type' => $this->input->post('type'),
				'cid' => $this->input->post('cid'),
				'thumb' => $info['file_name'],
				'info' => $this->input->post('info'),
				'content' => $this->input->post('content'),
				'atime' => time()
				);
			$this->arti->add($data);
			success('article/index','文章发布成功');
		}else{
			$this->load->model('cate_model','cate');
			$data['cate'] = $this->cate->show();

			$this->load->helper('form');
			$this->load->view('admin/article_send.html',$data);
		}
	}

	// 编辑文章模板
	public function article_edit(){
		$this->load->model('cate_model','cate');
		$data['cate'] = $this->cate->show();
		
		$aid = $this->uri->segment(3);
		$data['article'] = $this->arti->check($aid);

		$this->load->helper('form');
		$this->load->view('admin/article_edit.html',$data);
	}
	//编辑文章动作
	public function edit(){
		$this->load->library('form_validation');
		$status = $this->form_validation->run('article');
		

		if($status){
			//echo '数据库操作';
			$aid = $this->input->post('aid');
			$data = array(
				'aid' => $this->input->post('aid'),
				'title' => $this->input->post('title'),
				'type' => $this->input->post('type'),
				'cid' => $this->input->post('cid'),
				'info' => $this->input->post('info'),
				'content' => $this->input->post('content'),
				'atime' => time()
				);
			$this->arti->change($aid,$data);
			success('article/index','文章修改成功');
		}else{
			$this->load->helper('form');
			$this->load->view('admin/article_edit.html',$data);
		}
	}
	/**
	 * 文章删除
	 */
	public function del($aid) {
		$aid = $this->uri->segment(3);
		$this->arti->del($aid);
		success('article/index','文章删除成功');
	}



}