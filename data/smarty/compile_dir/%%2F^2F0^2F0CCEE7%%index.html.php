<?php /* Smarty version 2.6.22, created on 2013-09-05 16:59:28
         compiled from materialformula/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materialformula/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="materialformula_name" value="<?php echo $this->_tpl_vars['materialformula_name']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materialformula/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:25%;">
				<label>材料公式名称：</label>
				<input type="text" name="materialformula_name" value="<?php echo $this->_tpl_vars['materialformula_name']; ?>
"/>
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div class="buttonContent" style="float:right;"><button type="submit">检索</button></div></div></li>
			
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
/materialformula/add/" target="dialog" rel="page1"><span>添加材料公式</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr>
				<th width="22"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="30">名称</th>
                <th width="30">颜色</th>
                <th width="30">计算公式</th>
                
                <th width="70">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['materialformula_list']): ?>
			 <?php $_from = $this->_tpl_vars['materialformula_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['ug']['group_id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['ug']['materialformula_name']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['ug']['color']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['value1']; ?>
 <?php echo $this->_tpl_vars['ug']['operation1']; ?>
 (<?php echo $this->_tpl_vars['ug']['value2']; ?>
)<?php if ($this->_tpl_vars['ug']['value3'] != ''): ?><?php echo $this->_tpl_vars['ug']['operation2']; ?>
<?php echo $this->_tpl_vars['ug']['value3']; ?>
<?php endif; ?></td>
               
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materialformula/del-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materialformula/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
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