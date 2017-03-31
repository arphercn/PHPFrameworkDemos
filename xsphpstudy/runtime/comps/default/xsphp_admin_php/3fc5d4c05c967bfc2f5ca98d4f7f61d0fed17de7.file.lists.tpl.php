<?php /* Smarty version Smarty-3.1.8, created on 2015-10-03 12:57:39
         compiled from "./admin/views/default\user\lists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:735560e399bc28c36-11546467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fc5d4c05c967bfc2f5ca98d4f7f61d0fed17de7' => 
    array (
      0 => './admin/views/default\\user\\lists.tpl',
      1 => 1443848250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '735560e399bc28c36-11546467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_560e399bdbcba7_05462226',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'url' => 0,
    'fpage' => 0,
    'cpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560e399bdbcba7_05462226')) {function content_560e399bdbcba7_05462226($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<form >
	<table border="1" width="800" align="center">
		<tr>
				<th></th>
				<th>ID</th>
				<th>NAME</th>
				<th>AGE</th>
				<th>SEX</th>
				<th>EMAIL</th>
				<th><input onclick="return confirm('你确定要删除吗？')" type="submit" name="dosubmit" value="删除"></th>
			</tr>
		
		<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
			<tr>
			<td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value['age'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value['sex'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
				<td><a onclick="return confirm('你确定要删除吗？')" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" >删除</a></td>
			</tr>

		<?php } ?>
			<tr>
				
				<td colspan="7" align="right"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</td>
			</tr>
</table>
</form>
当前是<?php echo $_smarty_tpl->tpl_vars['cpage']->value;?>
页。
<?php echo $_smarty_tpl->getSubTemplate ('public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>