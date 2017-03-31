<?php

	class Article {
		function index () {
			
			p('文章列表');
			p($_GET);
			$this->assign('data','这是标题啊');
			$this->display();//默认直接显示对应的模板
		}
		
		function content() {
			$this->assign('data','这是内容内容内容内容内容内容内容内容');
			$this->display();//默认直接显示对应的模板
			//$this->display('hello');//显示其他模板
			//$this->display('demo/one');//显示其他目录的模板
			
		}
		
	}