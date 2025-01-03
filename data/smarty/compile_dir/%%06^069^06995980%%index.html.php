<?php /* Smarty version 2.6.22, created on 2013-09-05 16:47:31
         compiled from area/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/area/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="area_name" value="<?php echo $this->_tpl_vars['area_name']; ?>
" />
    <input type="hidden" name="code" value="<?php echo $this->_tpl_vars['code']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/area/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:25%;">
				<label>地区名称：</label>
				<input type="text" name="area_name" value="<?php echo $this->_tpl_vars['area_name']; ?>
"/>
			</li>
            <li style="width:25%;">
				<label>地区代码：</label>
				<input type="text" name="code" value="<?php echo $this->_tpl_vars['code']; ?>
"/>
			</li>
          
            
			
		</ul>
        <div class="subBar">
        <ul>
			 <li style="float:right;"><div class="buttonActive" style="float:right;"><div class="buttonContent" style="float:right;"><button type="submit">检索</button></div></div></li>
		</ul>
        </div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/area/add/" target="dialog" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="5%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="20%">地区名称</th>
                <th width="10%">地区代码</th>
                <th width="20%">上级区域</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['area_list']): ?>
			 <?php $_from = $this->_tpl_vars['area_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['ug']['user_id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['ug']['area_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['parent_name']; ?>
</td> 
                
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/area/del-id-<?php echo $this->_tpl_vars['ug']['area_id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/area/edit-id-<?php echo $this->_tpl_vars['ug']['area_id']; ?>
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