<?php
	header("Content-Type:text/html;charset=UTF-8");

//[控制文件]
	session_start();
	include "init.inc.php";
	
	$_SESSION['hello'] = 'world';
//字符串变量
	$var = "this is a demo this is a demo this is a demo";
	$smarty -> assign("var", $var);
	
//数组变量	
	$smarty -> assign("arr1", "Hello World");
	$smarty -> assign(array("title"=>"标题", "author"=>"作者", "content"=>"你好，Smarty!"));
	$smarty -> assign("arr", array("hello"=>array("one", "two", "three")));
//对象变量
	class Person {
		public $name = "meizi";
		public $sex = "nv";
		public function say() {
			echo "this is a  {$this->name} and {$this->sex}";
			return  $this;
		}
		function eat() {
			echo "good very!";
		}
	}
	$smarty -> assign("mz", new Person());
//自定义变量调节器插件
	//改样式
	function fontstyle($str, $fontsize="3", $fontcolor="green")
	{
		return '<font color="'.$fontcolor.'" size="'.$fontsize.'">'.$str.'</font>';
	}
	$smarty -> registerPlugin("modifier", "yourstyle", "fontstyle");
	//也可以把系统函数做成 插件
	$smarty -> registerPlugin("modifier", "myucword", "ucwords");
	//第一个参数必须是在前面
	//正则的格式是preg_replace("//", "str", $text);
	function zhengze($text, $zz, $str){        //
		return preg_replace($zz, $str, $text);
	}
	$smarty -> registerPlugin("modifier", "zzreplace", "zhengze");
//自定义函数

	function hello($args, $smarty) {
		//Array ( [content] => Hello world [color] => red [size] => 7 [line] => 5 ) 
		$str = "";
		for($i=0; $i<$args['line']; $i++) {
			$str .="<font color='{$args['color']}' size='{$args['size']}'>{$args['content']}</font><br>";
		}
		return $str;
	}
	//第二个hello是上面的函数名
	$smarty->registerPlugin("function", "hello", "hello");

	//块函数，带两个标签的如<if></if>
	function world($args, $content, $aaa) {
		$str = "";
		for($i=0; $i<$args['line']; $i++) {
			$str .="<font color='{$args['color']}' size='{$args['size']}'>{$content}</font><br>";
		}
		return $str;	
	}
	$smarty->registerPlugin("block", "world", "world");
	$smarty -> assign("titlecolor", "FF0000");
	$smarty -> assign("ctime", date("Y-m-d H:i:s"));

//测试模板流程	
	$smarty -> assign("varr", 6);
	$smarty -> assign("varr1", 8);

	$smarty -> assign("arrr", array(1,2,3,4,5,6,7,8));
	
	
	$smarty -> assign("arr4", array("os"=>"Linux", "webserver"=>"Apache", "db"=>"MySQL", "language"=>"PHP"));
	
	// $pdo = new  PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");
	// $stmt = $pdo->prepare("select id, name, age, sex, email from users");
	// $stmt -> execute();
	// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
	// print_r($users);
	// $smarty -> assign("users", $users);




	
	
	$smarty -> display("index.tpl");


			














