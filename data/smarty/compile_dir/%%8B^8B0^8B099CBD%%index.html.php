<?php /* Smarty version 2.6.22, created on 2013-03-27 13:42:45
         compiled from picturesetuptime/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picturesetuptime/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="picturesetuptime_name" value="<?php echo $this->_tpl_vars['picturesetuptime_name']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picturesetuptime/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li>
				<label>排图时间名称：</label>
				<input type="text" name="picturesetuptime_name" value="<?php echo $this->_tpl_vars['picturesetuptime_name']; ?>
"/>
			</li>
            
			
		</ul>
		
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
				
			</ul>
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picturesetuptime/add/" target="dialog" rel="page1"><span>添加排图时间</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr>
				<th width="22"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="30">排图时间名称</th>
                <th width="30">时间</th>
                
                <th width="70">操作</th>
			</tr>
		</thead>
		<tbody>
			 <?php $_from = $this->_tpl_vars['picturesetuptimes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['ug']['group_id']; ?>
" type="checkbox"></td>
                
 				<td><?php echo $this->_tpl_vars['ug']['picturesetuptime_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['picturesetuptime_value']; ?>
小时</td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picturesetuptime/del-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picturesetuptime/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnEdit">编辑</a></td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
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