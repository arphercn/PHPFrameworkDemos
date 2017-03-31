<?php
	class Common extends Action {
		function init(){
			echo '权限验证<br><br>';
		}

		function mycom() {
			echo '每个模块都可以调用mycom这个方法<br>';
			p($_GET);
			echo '<br>';
		}
	}