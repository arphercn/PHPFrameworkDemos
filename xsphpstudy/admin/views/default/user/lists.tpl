<{include 'public/header.tpl'}>
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
		
		<{foreach $users as $user}>
			<tr>
			<td><input type="checkbox" name="id[]" value="<{$user.id}>"></td>
				<td><{$user.id}></td>
				<td><{$user.name}></td>
				<td><{$user.age}></td>
				<td><{$user.sex}></td>
				<td><{$user.email}></td>
				<td><a onclick="return confirm('你确定要删除吗？')" href="<{$url}>/del/id/<{$user.id}>" >删除</a></td>
			</tr>

		<{/foreach}>
			<tr>
				
				<td colspan="7" align="right"><{$fpage}></td>
			</tr>
</table>
</form>
当前是<{$cpage}>页。
<{include 'public/footer.tpl'}>