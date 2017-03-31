<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_controller {

	 public $article;
	 public $cate;

	public function __construct() {
		parent::__construct();
		$this->load->model('article_model','arti');
		$this->load->model('cate_model','cate');
		$title = 8;
		$this->article = $this->arti->title($title);
	 	$nav = 4;
		$this->cate = $this->cate->nav($nav);
	}
	
	/**
	 * 默认首页显示
	 */
	public function index() {
		//开启缓存
		// $this->output->cache(3/60);
		//调试模式
		//$this->output->enable_profiler(TRUE);
		//内容页
		$data = $this->arti->article_type();
		//右标题
		$data['title'] = $this->article;
		//导航
		$data['cate'] = $this->cate;

//p($data);
		$this->load->view('index/index.html',$data);
	} 
	/**
	 * 分类页显示
	 */
	public function cate() {
		$cid = $this->uri->segment(2);
		$data['info']= $this->arti->article_cid($cid);
		//右标题
		$data['title'] = $this->article;
		//导航
		$data['cate'] = $this->cate;

 // p($data);

		$this->load->view('index/cate.html',$data);
	}
	/**
	 * 文章阅读页显示
	 */
	public function details() {
		$aid = $this->uri->segment(3);
		$data['content']= $this->arti->article_aid($aid);
		//右标题
		$data['title'] = $this->article;
		//导航
		$data['cate'] = $this->cate;
// p($data);

		$this->load->view('index/details.html',$data);
	}
	






}