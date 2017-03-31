<?
//[配置文件]
//定义根目录
	define("ROOT", str_replace("\\", "/", dirname(__FILE__))."/");

	include ROOT."/libs/Smarty.class.php";

	$smarty = new Smarty;
//这是smarty2时期的用法	
   //$smarty -> template_dir = "./views/";
   //$smarty -> compile_dir = "./comps/";

//以下是smarty3时期用法
	$smarty -> setTemplateDir(ROOT."/views/");
	$smarty -> setCompileDir(ROOT."/comps/");
    //$smarty -> addTemplateDir("./home/");//可以添加模板，就可以给他分配
	
//就可以让定界符号使用空格
	$smarty -> auto_literal = false; 
//设置定界符号
	//默认是{  } 里面不能有空格 想要空格可以设置
	$smarty -> left_delimiter = "<{";
	$smarty -> right_delimiter = "}>";
	
//指定 配置变量文件 所在的目录	
	$smarty -> setConfigDir(ROOT.'/configs/');
	
//添加一个插件的目录
$smarty -> addPluginsDir(ROOT."/myplugins/");

