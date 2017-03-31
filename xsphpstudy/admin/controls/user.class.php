<?php

	class User {
		function lists() {
			$users=D('users');
			//实例化分页，（总数,每页显示,url传参,0:倒序）
			$page= new Page($users->total(),10,'one/1',0);

			$page->set('head','个用户')
				->set('fisrt','|<<')
				->set('last','>>|')
				->set('next','>')
				->set('prev','<');
			
			//加入每页显示限制
			$data = $users->field('id,name,age,sex,email')->limit($page->limit)->select();
			$this->assign('users',$data);
			//赋值给fpage
			$this->assign('fpage',$page->fpage(0,4,5,6,7,3));
			$this->assign('cpage',$page->page);
			
			$this->display();
		}
		
		function mod() {
			echo 'mod11111111111111';
			p($_GET);
			echo '<br><br>';
			echo '<img src="'.B_RES.'/images/weixin.gif" />';//php中常量用B开头的
			mkdir("./one/two",0777);//php里找位置是相对于主入口的位置，比如admin.php的位置
		}
		
		function test() {
			 
			$user=D('user');//调model里user类的方法，第一次调时获表结构(开启memcache时)
			
			//$user=D('user','home');//可以前后台都调用home/model里的user类的方法
			
			p($user->one());//经常user类不写，不调用改扩展方法，直接调父类dpdo的方法
			
			p($user->pub());//和其他模型公用的方法echoname写在继承类username中
			
			p($user->select());//可以直接调用dpdo-->db类的方法
			
		}
		
		function insert() {
			p('执行插入程序');
			$this->success();//默认跳回上次页面
			//$this->success('插入数据成功',2,'mod');//2秒后，跳到mod方法
			//$this->success('插入数据成功',2,'article/lists');//跳到article的方法
			//$this->success('插入数据成功',2,'article/lists/id/5');//带数据id=5的方法
			//$this->success('插入数据成功',2,'user/mod/id/6');//带数据id=6到本模块**要写全
			//$this->error('插入数据失败',3,'user/mod/id/7');//失败跳转，模式一样 id=7
			
		}
		function insert1() {
			p('执行插入程序');
			//$this->redirect('mod');//重定向，
			//$this->redirect('article/lists');//重定向
			$this->redirect('article/lists','id/8');//重定向，传参分开写 id=8
		}
		//也可以在common里自己写个跳转方法，任意跳转

		
	}