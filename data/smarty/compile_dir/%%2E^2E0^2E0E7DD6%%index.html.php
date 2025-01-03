<?php /* Smarty version 2.6.22, created on 2021-09-24 11:36:17
         compiled from user/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:15%">
				<label style="width:50px;">用户名：</label>
				<input type="text" name="keywords" value="<?php echo $this->_tpl_vars['keywords']; ?>
"  style="width:80px;" />
			</li>
            <li style="width:15%">
				<label style="width:50px;">代码：</label>
				<input type="text" name="coding" value="<?php echo $this->_tpl_vars['coding']; ?>
"  style="width:80px;" />
			</li>
            <li style="width:18%">
				<label style="width:70px;">所属部门：</label>
                <select class="combox" name="group_name">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['user_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['bumen']; ?>
" <?php if ($this->_tpl_vars['du']['bumen'] == $this->_tpl_vars['group_name']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['bumen']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="width:18%">
				<label style="width:70px;">所属公司：</label>
                <select class="combox" name="gongsi">
                <option value="">全部</option>
                	<option value="小布涂涂" <?php if ($this->_tpl_vars['gongsi'] == "小布涂涂"): ?> selected <?php endif; ?> > 小布涂涂 </option>
                    <option value="涂涂记" <?php if ($this->_tpl_vars['gongsi'] == "涂涂记"): ?> selected <?php endif; ?> > 涂涂记 </option>
                </select>
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
			
		</ul>
		
		<div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/update_password" method="post" id="update_password_submit">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/add/" target="navTab" rel="page1"><span>添加</span></a></li>
			<?php if ($this->_tpl_vars['users']['group_id'] == '5'): ?>
			<li class="line">line</li>
          <li><a title="重置密码" href="#" class="edit" id="user_piliang_password"><span>重置密码</span></a>
          </li>
          <li class="line">line</li>
           <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/update_password/" target="selectedTodo" id="del" rel="group_ids[]" postType="string" title="确定要强制修改用户密码？"><span>强制修改用户密码</span></a></li>
           <?php endif; ?>
           <?php if ($this->_tpl_vars['users']['group_id'] == '5' || $this->_tpl_vars['now_user_id'] == '2'): ?>
           <li class="line">line</li>
           <li><a id="bulk_goods" class="edit" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/update_customer/"><span>更改用户信息</span></a></li>
           <?php endif; ?>
           
           <li class="line">line</li>
           <li><a href="#" id="user_unlock" class="edit"><span>登录状态解锁</span></a></li>
           
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="5%">用户名</th>
                <th width="5%">英文名</th>
                <th width="5%">代码</th>
                <th width="5%">所属公司</th>
                <th width="5%">所属部门</th>
                <th width="5%">所在用户组</th>
                <th width="3%">特殊权限</th>
                <th width="3%">登录状态</th>
                <th width="3%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['user_group_list']): ?>
			 <?php $_from = $this->_tpl_vars['user_group_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['ug']['user_id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['user_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['english_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['user_code']; ?>
</td> 
                <td><?php echo $this->_tpl_vars['ug']['gongsi']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['bumen']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['group_name']; ?>
</td>
				<td><?php if ($this->_tpl_vars['ug']['teshu'] == 1): ?>有<?php else: ?>无<?php endif; ?></td>
                <td><?php if ($this->_tpl_vars['ug']['log_status'] == 1): ?>可用<?php else: ?>禁用<?php endif; ?></td>
                <td><!--<a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/del-id-<?php echo $this->_tpl_vars['ug']['user_id']; ?>
.html" class="btnDel">删除</a> --><a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/edit-id-<?php echo $this->_tpl_vars['ug']['user_id']; ?>
-teshu-<?php echo $this->_tpl_vars['ug']['teshu']; ?>
.html" class="btnEdit">编辑</a>
                <!--<a title="人员变更" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/edit_user-id-<?php echo $this->_tpl_vars['ug']['user_id']; ?>
.html" class="btnAdd">人员变更</a>-->
                </td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
            <?php if ($this->_tpl_vars['listRows'] == 50): ?>
				<option value="50" selected="selected">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
                <option value="<?php echo $this->_tpl_vars['total_count']; ?>
"><?php echo $this->_tpl_vars['total_count']; ?>
</option>
            <?php elseif ($this->_tpl_vars['listRows'] == 100): ?>
            	<option value="50">50</option>
				<option value="100" selected="selected">100</option>
				<option value="200">200</option>
                <option value="<?php echo $this->_tpl_vars['total_count']; ?>
"><?php echo $this->_tpl_vars['total_count']; ?>
</option>
			
            <?php elseif ($this->_tpl_vars['listRows'] == 200): ?>
            	<option value="50">50</option>
				<option value="100">100</option>
				<option value="200" selected="selected">200</option>
                <option value="<?php echo $this->_tpl_vars['total_count']; ?>
"><?php echo $this->_tpl_vars['total_count']; ?>
</option>
            <?php elseif ($this->_tpl_vars['listRows'] == $this->_tpl_vars['total_count']): ?>
            	<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
                <option value="<?php echo $this->_tpl_vars['total_count']; ?>
" selected="selected"><?php echo $this->_tpl_vars['total_count']; ?>
</option>
            <?php endif; ?>
            </select>
			<span>共<?php echo $this->_tpl_vars['total_count']; ?>
条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>


	</div>
</div>
</form>
<script type="text/javascript">
$(document).ready(function()
{
/*重置密码*/
		$("#user_piliang_password").click(function (){
			var check_arr1 = '';
			$("input[name='group_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr1 == ''){
					check_arr1 += $(this).val();
				}else{
					check_arr1 += ','+$(this).val();
				}
			});	
			
			var p = 'check_arr1-'+check_arr1+'.html';
			
			if(check_arr1 ==''){
				alert('必须选择客户');
			}else{
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/change_to_active-'+p,
					type:'get', 
					dataType:'json',
					data:p,
					success:check_back
				});
/*				$("#check_arr").val(check_arr);
				$("#touids").val(touid);
				$("#ctou").submit();*/
			}
			
		});
		
		//登录状态解锁
		$("#user_unlock").click(function (){
			var check_arr1 = '';
			$("input[name='group_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr1 == ''){
					check_arr1 += $(this).val();
				}else{
					check_arr1 += ','+$(this).val();
				}
			});	
			
			var p = 'check_arr1-'+check_arr1+'.html';
			
			if(check_arr1 ==''){
				alert('必须选择客户');
			}else{
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/user_unlock-'+p,
					type:'get', 
					dataType:'json',
					data:p,
					success:check_back
				});
/*				$("#check_arr").val(check_arr);
				$("#touids").val(touid);
				$("#ctou").submit();*/
			}
			
		});
});

function check_back(data)
{
	if(data.error==1)
	{
		//$("#dialog").css("display","none");
		alert("操作失败");
	}
	else
	{
		
		//$("#dialog").css("display","none");
		navTabPageBreak();
		//window.location = "<?php echo $this->_tpl_vars['__ROOT__']; ?>
/#newcustomer";
	}
}

</script>