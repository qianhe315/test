<?php /* Smarty version 2.6.22, created on 2015-11-10 12:53:57
         compiled from user_department_set/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user_department_set/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user_department_set/index" method="get">
	<div class="searchBar">
		<ul class="searchContent" style="height:25px">
		</ul>
		
		<div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user_department_set/update_password" method="post" id="update_password_submit">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
            <li class="line">line</li>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user_department_set/all_page/" target="dialog" rel="page1" class="btnAdd" ><span>添加</span></a></li>
            <li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="50%" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="8%">部门</th>
                <th width="8%">公司</th>
                <th width="8%">办公区域</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['user_department_set_list']): ?>
			 <?php $_from = $this->_tpl_vars['user_department_set_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['val']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['val']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['department_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['company_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['office_name']; ?>
</td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user_department_set/del-id-<?php echo $this->_tpl_vars['val']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user_department_set/all_page-id-<?php echo $this->_tpl_vars['val']['id']; ?>
.html" class="btnEdit">编辑</a>
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