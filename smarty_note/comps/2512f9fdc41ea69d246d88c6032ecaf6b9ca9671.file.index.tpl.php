<?php /* Smarty version Smarty-3.1.17, created on 2015-12-07 19:44:39
         compiled from "D:\phpStudy\WWW\smarty_note\views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1991556651e49b8ee23-29099170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2512f9fdc41ea69d246d88c6032ecaf6b9ca9671' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty_note\\views\\index.tpl',
      1 => 1449488678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1991556651e49b8ee23-29099170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_56651e49d01ff4_57080852',
  'variables' => 
  array (
    'content' => 0,
    'arr1' => 0,
    'title' => 0,
    'author' => 0,
    'arr' => 0,
    'mz' => 0,
    'var' => 0,
    'one' => 0,
    'two' => 0,
    'three' => 0,
    'four' => 0,
    'five' => 0,
    'varr' => 0,
    'varr1' => 0,
    'arrr' => 0,
    'start' => 0,
    'end' => 0,
    'arr4' => 0,
    'k' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56651e49d01ff4_57080852')) {function content_56651e49d01ff4_57080852($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\phpStudy\\WWW\\smarty_note\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\smarty_note\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_regex_replace')) include 'D:\\phpStudy\\WWW\\smarty_note\\libs\\plugins\\modifier.regex_replace.php';
if (!is_callable('smarty_modifier_mystyle')) include 'D:/phpStudy/WWW/smarty_note//myplugins\\modifier.mystyle.php';
if (!is_callable('smarty_function_hello1')) include 'D:/phpStudy/WWW/smarty_note//myplugins\\function.hello1.php';
if (!is_callable('smarty_block_world1')) include 'D:/phpStudy/WWW/smarty_note//myplugins\\block.world1.php';
if (!is_callable('smarty_function_color')) include 'D:/phpStudy/WWW/smarty_note//myplugins\\function.color.php';
if (!is_callable('smarty_function_date')) include 'D:/phpStudy/WWW/smarty_note//myplugins\\function.date.php';
if (!is_callable('smarty_block_textarea')) include 'D:/phpStudy/WWW/smarty_note//myplugins\\block.textarea.php';
?><!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		  
<!--模板文件,注释会显示在html代码文件中-->

<?php  $_config = new Smarty_Internal_Config("sns.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("list", 'local'); ?>
变量格式<br>

	content:<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
 <br>
数组<br>
	<?php echo $_smarty_tpl->tpl_vars['arr1']->value;?>
 <br>
	<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <br>
	<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
 <br>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
 <br>
    <?php echo $_smarty_tpl->tpl_vars['arr']->value['hello'][0];?>
 <br>
    <?php echo $_smarty_tpl->tpl_vars['arr']->value['hello'][0];?>
 <br> 
对象 <br>
	<?php echo $_smarty_tpl->tpl_vars['mz']->value->sex;?>
 <br>
    <?php echo $_smarty_tpl->tpl_vars['mz']->value->say()->eat();?>
 <br>

配置变量<br>
		<?php echo $_smarty_tpl->getConfigVariable('color');?>
<br>  
		<?php echo $_smarty_tpl->getConfigVariable('cc');?>
<br>  
保留变量 <br> 
		<?php echo $_GET['username'];?>
 <br>  
		<?php echo $_SESSION['hello'];?>
 <br>
		<?php echo time();?>
 <br>
		<?php echo @constant('ROOT');?>
 <br>
		<?php echo basename($_smarty_tpl->source->filepath);?>
  <br> 
		<?php echo dirname($_smarty_tpl->source->filepath);?>
 <br>
		<?php echo 'Smarty-3.1.17';?>
 <br>
变量调节器  <br>
		<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['var']->value, 'UTF-8');?>
 <br>
		<?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['var']->value, $tmp);?>
 <br>
		<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['var']->value,10);?>
//截取10个<br>
		<?php echo (($tmp = @$_smarty_tpl->tpl_vars['var']->value)===null||$tmp==='' ? "数据库中没有数据!" : $tmp);?>
//变量为空是默认值 <br>
		<?php echo (($_smarty_tpl->tpl_vars['var']->value).("test test!<br>")).("hello world");?>
 //连接 <br>
		<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
//时间格式 <br>
		<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['var']->value,"/\d/","#");?>
//正则 <br>
自定义变量调节器插件<br>
		<?php echo fontstyle($_smarty_tpl->tpl_vars['var']->value,4);?>
 <br>
		<?php echo fontstyle($_smarty_tpl->tpl_vars['var']->value,5,"blue");?>
 <br>
		<?php echo ucwords($_smarty_tpl->tpl_vars['var']->value);?>
 //大学字母 <br>    
		<?php echo zhengze($_smarty_tpl->tpl_vars['var']->value,'/\s/',"|");?>
 //把空格换成| <br> 
使用插件注册变量调节器，控制器里逻辑不混乱<br>
		<?php echo smarty_modifier_mystyle($_smarty_tpl->tpl_vars['var']->value,6,"yellow");?>
 <br>
自定义函数<br>
	<?php echo hello(array('content'=>"hello 自定义函数",'color'=>"red",'size'=>"4",'line'=>"2"),$_smarty_tpl);?>
<br>
	<?php echo smarty_function_hello1(array('color'=>"green",'line'=>"2",'size'=>"5",'content'=>"Hi自定义函数插件"),$_smarty_tpl);?>
<br>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('world', array('line'=>"2",'size'=>"4",'color'=>"red")); $_block_repeat=true; echo world(array('line'=>"2",'size'=>"4",'color'=>"red"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Hello 块函数 world
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo world(array('line'=>"2",'size'=>"4",'color'=>"red"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('world1', array('line'=>2,'size'=>5,'color'=>"blue")); $_block_repeat=true; echo smarty_block_world1(array('line'=>2,'size'=>5,'color'=>"blue"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Hello 块函数插件 world
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_world1(array('line'=>2,'size'=>5,'color'=>"blue"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	
	<?php echo smarty_function_color(array('name'=>"titlecolor",'value'=>((string)$_smarty_tpl->tpl_vars['titlecolor']->value)),$_smarty_tpl);?>
 <br>
	<?php echo smarty_function_date(array('name'=>"starttime",'time'=>1,'value'=>((string)$_smarty_tpl->tpl_vars['ctime']->value)),$_smarty_tpl);?>
 - <?php echo smarty_function_date(array('name'=>"endtime",'time'=>1),$_smarty_tpl);?>
 <br>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('name'=>"content",'toolbar'=>"basic",'color'=>"#ccc",'height'=>"200")); $_block_repeat=true; echo smarty_block_textarea(array('name'=>"content",'toolbar'=>"basic",'color'=>"#ccc",'height'=>"200"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 Hello beautiful World <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('name'=>"content",'toolbar'=>"basic",'color'=>"#ccc",'height'=>"200"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <br>

内置函数<br>
	
	
		写js{}等代码 定界符冲突用，可以写现在的<{定界符}>
		但不能加smarty标签了<br>
	
	<?php $_smarty_tpl->_capture_stack[0][] = array("one", null, null); ob_start(); ?>麻雀<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("two", null, null); ob_start(); ?>鸽子<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo Smarty::$_smarty_vars['capture']['one'];?>
 <br>

变量
	<?php $_smarty_tpl->tpl_vars["one"] = new Smarty_variable("hello world", null, 0);?> <br>
	<?php echo $_smarty_tpl->tpl_vars['one']->value;?>
 <br>
	<?php $_smarty_tpl->tpl_vars["two"] = new Smarty_variable("this is a demo", null, 0);?>
	<?php echo $_smarty_tpl->tpl_vars['two']->value;?>
 <br>
	<?php $_smarty_tpl->tpl_vars['three'] = new Smarty_variable("最终简写版", null, 0);?>
	<?php echo $_smarty_tpl->tpl_vars['three']->value;?>
 <br>
	
	<?php $_smarty_tpl->createLocalArrayVariable('four', null, 0);
$_smarty_tpl->tpl_vars['four']->value[] = 1;?> <?php $_smarty_tpl->createLocalArrayVariable('four', null, 0);
$_smarty_tpl->tpl_vars['four']->value[] = 2;?>
	<?php echo $_smarty_tpl->tpl_vars['four']->value[0];?>
 <br>
	<?php echo $_smarty_tpl->tpl_vars['four']->value[1];?>
 <br>

	<?php $_smarty_tpl->createLocalArrayVariable('four', null, 0);
$_smarty_tpl->tpl_vars['four']->value['aa']['bb'] = 10;?>
	<?php echo $_smarty_tpl->tpl_vars['four']->value['aa']['bb'];?>
 <br>

	<?php $_smarty_tpl->createLocalArrayVariable("four", null, 0);
$_smarty_tpl->tpl_vars["four"]->value["cc"] = "55555555";?> 追加，用不上<br>
	<?php echo $_smarty_tpl->tpl_vars['four']->value['cc'];?>
 <br>

	<?php $_smarty_tpl->tpl_vars['five'] = new Smarty_variable($_smarty_tpl->tpl_vars['four']->value[1]+10, null, 0);?><br>
	<?php echo $_smarty_tpl->tpl_vars['five']->value;?>
 <br>
	<?php echo $_smarty_tpl->tpl_vars['five']->value++;?>
<br>
流程<br>
	<?php if ($_smarty_tpl->tpl_vars['varr']->value==55) {?>
	5555555555555555555555<br>
	<?php } elseif ($_smarty_tpl->tpl_vars['varr']->value==6) {?>
		<?php if ($_smarty_tpl->tpl_vars['varr1']->value==8) {?>
			$varr==6 and $varr1==8 <br>
		<?php }?>
	<?php } else { ?>
		########################<br>
	<?php }?>
	
	<?php if (count($_smarty_tpl->tpl_vars['arrr']->value)>5) {?>
		$arrr数组个数大于5<br>
	<?php }?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['arrr']->value)) {?>
		$arrr数组有值存在<br>
	<?php }?>
	<?php if (!(1 & $_smarty_tpl->tpl_vars['varr']->value)) {?>
		$varr是偶数even 不是odd<br>
	<?php }?>
	

	<?php $_smarty_tpl->tpl_vars['start'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['end'] = new Smarty_variable(15, null, 0);?>

	<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 3;$_smarty_tpl->tpl_vars['var']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['var']->step)),3);
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
		<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
 <br>
	<?php }} else { ?>
		条件不成功，没有循环<br>
	<?php }  ?>


	<?php $_smarty_tpl->tpl_vars['var'] = new Smarty_variable(0, null, 0);?>
	<?php while ($_smarty_tpl->tpl_vars['var']->value<5) {?>
	<?php echo $_smarty_tpl->tpl_vars['var']->value++;?>
 &nbsp;
	<?php }?><br>
	
	//Smarty2的foreach<br>
	<?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["value"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["value"]->iteration=0;
 $_smarty_tpl->tpl_vars["value"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["one"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["value"]->key;
 $_smarty_tpl->tpl_vars["value"]->iteration++;
 $_smarty_tpl->tpl_vars["value"]->index++;
 $_smarty_tpl->tpl_vars["value"]->first = $_smarty_tpl->tpl_vars["value"]->index === 0;
 $_smarty_tpl->tpl_vars["value"]->last = $_smarty_tpl->tpl_vars["value"]->iteration === $_smarty_tpl->tpl_vars["value"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["one"]['first'] = $_smarty_tpl->tpl_vars["value"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["one"]['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["one"]['last'] = $_smarty_tpl->tpl_vars["value"]->last;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['one']['first']) {?>
			这是第一次循环:
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['one']['last']) {?>
			这是最后一次循环:
		<?php }?>
		<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['one']['iteration'];?>
==><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 <br>
	<?php }
if (!$_smarty_tpl->tpl_vars["value"]->_loop) {
?>
		数组为空或数组不存在!<br>
	<?php } ?>
	
	//Smarty3的foreach<br>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['value']->iteration=0;
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->iteration++;
 $_smarty_tpl->tpl_vars['value']->index++;
?>
		<?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
==<?php echo $_smarty_tpl->tpl_vars['value']->index;?>
==><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
=><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 <br>
	<?php } ?><br>
	<?php echo $_smarty_tpl->tpl_vars['value']->total;?>

	
	

	
	

<?php }} ?>
