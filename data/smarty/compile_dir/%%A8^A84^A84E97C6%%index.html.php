<?php /* Smarty version 2.6.22, created on 2014-03-24 10:46:07
         compiled from customer_discount_management/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_discount_management/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_discount_management/index" method="get">
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
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
			
		</ul>
		
		<div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        	<li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_discount_management/add/" target="dialog" rel="page1"><span>添加折扣</span></a></li>			
			<li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="5%">时间</th>
                <th width="5%">享受折扣</th>
                <th width="5%">客户代码</th>
                <th width="10%">客户名</th>
                <th width="10%">客户来源</th>
                <th width="9%">公司</th>
                <th width="9%">国家</th>
                <th width="4%">客户属性</th>
                <th width="4%">业务员</th>
                <th width="4%">成交笔数</th>
                <th width="4%">成交金额</th>
                <th width="4%">操作</th>
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
                <td><?php echo $this->_tpl_vars['ug']['bumen']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['group_name']; ?>
</td>
				<td><?php if ($this->_tpl_vars['ug']['teshu'] == 1): ?>有<?php else: ?>无<?php endif; ?></td>
                <td><?php if ($this->_tpl_vars['ug']['log_status'] == 1): ?>可用<?php else: ?>禁用<?php endif; ?></td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/del-id-<?php echo $this->_tpl_vars['ug']['user_id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/edit-id-<?php echo $this->_tpl_vars['ug']['user_id']; ?>
-teshu-<?php echo $this->_tpl_vars['ug']['teshu']; ?>
.html" class="btnEdit">编辑</a></td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			
			<span>共<?php echo $this->_tpl_vars['total_count']; ?>
条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>

	</div>
</div>
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
		alert("重置成功");
		//window.location = "<?php echo $this->_tpl_vars['__ROOT__']; ?>
/#newcustomer";
	}
}

</script>