<?php /* Smarty version 2.6.22, created on 2015-11-10 12:54:05
         compiled from usergroup/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/usergroup/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/usergroup/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:30%">
				<label>用户组名：</label>
				<input type="text" name="keywords" value="<?php echo $this->_tpl_vars['keywords']; ?>
"/>
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
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/usergroup/change_power/"  title="确定整组使用组权限吗？" target="selectedTodo" rel="group_ids[]" postType="string" ><span>整组使用组权限</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="10%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="20%">组名</th>
                <th width="20%">部门</th>
                <th width="20%">公司</th>
                <th width="20%">办公区域</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['user_group_list']): ?>
			 <?php $_from = $this->_tpl_vars['user_group_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['ug']['group_id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['ug']['group_name']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['ug']['department_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['company_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['office_name']; ?>
</td>
                <td><!--<a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/usergroup/del-id-<?php echo $this->_tpl_vars['ug']['group_id']; ?>
.html" class="btnDel">删除</a>--> 
                <a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/usergroup/edit-id-<?php echo $this->_tpl_vars['ug']['group_id']; ?>
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