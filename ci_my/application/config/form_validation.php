<?php
$config = array(
	'article' => array(
		array(
			'field' => 'title',
			'label' => '标题',
			'rules' =>'required|max_length[25]'
			),
		array(
			'field' => 'content',
			'label' => '内容',
			'rules' => 'required'
			)
		),
	'cate' => array(
		array(
			'field' => 'cname',
			'label' => '栏目名称',
			'rules' =>'required|max_length[6]'			
			)
		)
	);