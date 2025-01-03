<?php /* Smarty version 2.6.22, created on 2015-01-27 11:26:18
         compiled from make_degree/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/make_degree/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="order_status" value="<?php echo $this->_tpl_vars['order_status']; ?>
" />
    <input type="hidden" name="saleman_user_id" value="<?php echo $this->_tpl_vars['saleman_user_id']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    <input type="hidden" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
    <input type="hidden" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
    <input type="hidden" name="quotation_code" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/make_degree/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
           <div class="subBar">
        <ul>
			
		</ul>
        </div>
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
/make_degree/add" target="dialog" rel="unit_add"  ><span>添加</span></a></li>
            <li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
       		
			<tr>
            	<th width="3%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="20%">编号</th> 
                <th width="20%">名称</th>             
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['make_degree']): ?>
			 <?php $_from = $this->_tpl_vars['make_degree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                 <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['name']; ?>
</td>
                 <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/make_degree/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" rel="unit_add_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/make_degree/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
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