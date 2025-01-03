<?php /* Smarty version 2.6.22, created on 2014-08-06 13:37:48
         compiled from h_version_set/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/h_version_set/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="exchangerate_name" value="<?php echo $this->_tpl_vars['exchangerate_name']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/h_version_set/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
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
/h_version_set/add/" target="dialog" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="5%">编号</th>
                <th width="5%">分版数量</th>
                <th width="5%">人民币</th>
                <th width="5%">美元</th>
                <th width="5%">欧元</th>
               
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['version_set']): ?>
			 <?php $_from = $this->_tpl_vars['version_set']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['ug']['group_id']; ?>
" type="checkbox"></td>
                 <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['version_count']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['ug']['rmb']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['dollar']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['euro']; ?>
</td>
                <td><a title="删除吗？" target="ajaxTodo"  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/h_version_set/del-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html"  class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/h_version_set/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
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