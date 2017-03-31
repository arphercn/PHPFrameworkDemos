<!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		  
<!--模板文件,注释会显示在html代码文件中-->
<{*加载 配置变量文件 局部变量为list，注释不会被php传到模板，推荐*}>
<{config_load file="sns.conf" section="list"}>
变量格式<br>

	content:<{$content}> <br>
数组<br>
	<{$arr1}> <br>
	<{$title}> <br>
	<{$author}> <br>
	<{$content}> <br>
    <{$arr.hello[0]}> <br>
    <{$arr['hello'][0]}> <br> <{*smarty3可以*}>
对象 <br>
	<{$mz->sex}> <br>
    <{$mz->say()->eat()}> <br>

配置变量<br>
		<{ #color# }><br>  <{*全局变量*}>
		<{#cc#}><br>  <{*局部变量*}>
保留变量 <br> 
		<{$smarty.get.username}> <br>  
		<{$smarty.session.hello}> <br>
		<{$smarty.now}> <br>
		<{$smarty.const.ROOT}> <br>
		<{$smarty.template}>  <br> <{*显示用那个模板*}>
		<{$smarty.current_dir}> <br>
		<{$smarty.version}> <br>
变量调节器  <br><{*相当于	<{date("Y-m-d",$smarty.now)}>*}>
		<{$var|upper}> <br>
		<{$var|count_words}> <br>
		<{$var|truncate:10}>//截取10个<br>
		<{$var|default:"数据库中没有数据!"}>//变量为空是默认值 <br>
		<{$var|cat:"test test!<br>"|cat:"hello world"}> //连接 <br>
		<{$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}>//时间格式 <br>
		<{$var|regex_replace:"/\d/":"#"}>//正则 <br>
自定义变量调节器插件<br>
		<{$var|yourstyle:4}> <br>
		<{$var|yourstyle:5:"blue"}> <br>
		<{$var|myucword}> //大学字母 <br>    
		<{$var|zzreplace:'/\s/':"|"}> //把空格换成| <br> 
使用插件注册变量调节器，控制器里逻辑不混乱<br>
		<{$var|mystyle:6:"yellow"}> <br>
自定义函数<br>
	<{hello content="hello 自定义函数" color="red" size="4" line="2"}><br>
	<{hello1 color="green" line="2" size="5" content="Hi自定义函数插件"}><br>
	<{world line="2" size="4" color="red"}>
		Hello 块函数 world
	<{/world}>
	<{world1 line=2 size=5  color="blue"}>
		Hello 块函数插件 world
	<{/world1}>
	
	<{color name="titlecolor" value="$titlecolor"}> <br>
	<{date name="starttime" time=1 value="$ctime"}> - <{date name="endtime" time=1}> <br>
	<{textarea name="content" toolbar="basic" color="#ccc" height="200"}> Hello beautiful World <{/textarea}> <br>

内置函数<br>
	
	<{literal}>
		写js{}等代码 定界符冲突用，可以写现在的<{定界符}>
		但不能加smarty标签了<br>
	<{/literal}>
	<{capture name="one"}>麻雀<{/capture}>
	<{capture name="two"}>鸽子<{/capture}>
	<{$smarty.capture.one}> <br>

变量
	<{assign var="one" value="hello world"}> <br>
	<{$one}> <br>
	<{assign "two" "this is a demo"}>
	<{$two}> <br>
	<{$three="最终简写版"}>
	<{$three}> <br>
	
	<{$four[]=1}> <{$four[]=2}>
	<{$four[0]}> <br>
	<{$four[1]}> <br>

	<{$four.aa.bb=10}>
	<{$four.aa.bb}> <br>

	<{append var="four" value="55555555" index="cc"}> 追加，用不上<br>
	<{$four.cc}> <br>

	<{$five=$four[1]+10}><br>
	<{$five}> <br>
	<{$five++}><br>
流程<br>
	<{if $varr==55}>
	5555555555555555555555<br>
	<{elseif $varr==6}>
		<{if $varr1==8}>
			$varr==6 and $varr1==8 <br>
		<{/if}>
	<{else}>
		########################<br>
	<{/if}>
	
	<{if count($arrr) gt 5}>
		$arrr数组个数大于5<br>
	<{/if}>
	
	<{if isset($arrr)}>
		$arrr数组有值存在<br>
	<{/if}>
	<{if $varr is even }>
		$varr是偶数even 不是odd<br>
	<{/if}>
	

	<{$start=0}>
	<{$end=15}>

	<{for $var=$start to $end step 3 max=3}>
		<{$var}> <br>
	<{forelse}>
		条件不成功，没有循环<br>
	<{/for}>


	<{$var=0}>
	<{while $var lt 5}>
	<{$var++}> &nbsp;
	<{/while}><br>
	
	//Smarty2的foreach<br>
	<{foreach name="one" from=$arr4 item="value" key="k"}>
		<{if $smarty.foreach.one.first}>
			这是第一次循环:
		<{/if}>
		<{if $smarty.foreach.one.last}>
			这是最后一次循环:
		<{/if}>
		<{$smarty.foreach.one.iteration}>==><{$k}>=><{$value}> <br>
	<{foreachelse}>
		数组为空或数组不存在!<br>
	<{/foreach}>
	
	//Smarty3的foreach<br>
	<{foreach $arr4 as $value}>
		<{$value@iteration}>==<{$value@index}>==><{$value@key}>=><{$value}> <br>
	<{/foreach}><br>
	<{$value@total}>
<{*	
	<table border="1" width="800" align="center">
		<{foreach $users as $user}>
			<{if $user@first}>
				<tr bgcolor="red">
			<{elseif $user@last}>
				<tr bgcolor="blue">
			<{elseif $user@index is even}>
				<tr bgcolor="green">
			<{else}>
				<tr>
			<{/if}>
				<{foreach $user as $col}>
					<td><{$col}></td>
				<{/foreach}>
			</tr>
		<{foreachelse}>
			没有用户查询出来!
		<{/foreach}>
	</table>
*}>	
<{*
<table border="1" width="800" align="center">
	<caption><h1>用户表</h1></caption>
	<tr>
		<th>index</th>
		<th>iteration</th>
		<th>ID</th> 
		<th>NAME</th> 
		<th>AGE</th> 
		<th>SEX</th> 
		<th>EMAIL</th> 
	</tr>
	<{section name="u" loop=$users step=3 start=8}>
		<{if $smarty.section.u.first}>
			<tr bgcolor="red">
		<{elseif $smarty.section.u.last}>
			<tr bgcolor="blue">
		<{elseif $smarty.section.u.iteration is even}>
			<tr bgcolor="green">
		<{else}>
			<tr>
		<{/if}>
			<td><{$smarty.section.u.index}></td>
			<td><{$smarty.section.u.iteration}></td>
			<td><{$users[u].id}></td>
			<td><{$users[u].name}></td>
			<td><{$users[u].age}></td>
			<td><{$users[u].sex}></td>
			<td><{$users[u].email}></td>
		</tr>
	<{sectionelse}>
		数组为空或不存在
	<{/section}>
</table>
*}>
	

	
	

