<?php
	/**
	 * 单一入口文件
	 */
	define("TPLSTYLE", "default");   //模板存放的目录
	//define("TPLSTYLE", "mystyle");   //自定义一套模板(删掉runtime可自动生成目录)
	 
	define("BROPHP", "./brophp");  //框架源文件的位置
	define("APP", "./home");           //设置当前应用的目录
	require(BROPHP.'/brophp.php'); //加载框架的入口文件


