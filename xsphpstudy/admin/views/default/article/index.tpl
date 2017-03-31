<{include file='public/header.tpl'}>

<{$data}><br>
	<img src="<{$res}>/images/weixin.gif"><br>

	<a href="<{$app}>/user/insert">跳到用户插入方法</a><br>

	<form action="<{$url}>/content" method="post">
	<input type='submit' name='dosubmit' value='跳转到内容' >

	</form>
<{$data}><br>


<{include file='public/footer.tpl'}>