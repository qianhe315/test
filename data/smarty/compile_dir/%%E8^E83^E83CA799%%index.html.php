<?php /* Smarty version 2.6.22, created on 2017-08-30 11:36:43
         compiled from cost_coefficient_customer/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_coefficient_customer/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
    <input type="hidden" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" />
    <input type="hidden" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    <input type="hidden" name="sale_user_id" value="<?php echo $this->_tpl_vars['sale_user_id']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_coefficient_customer/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:15%;">
				<label style="width:50px;">客户代码：</label>
               <input type="text" name="customer_code" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
			</li>
            <li style="width:15%;">
                <label style="width:50px;">客户名：</label>
				<input type="text" name="customer_name"  style="width:80px;" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
         <div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_coefficient_customer/xls_export" method="post" id="quoteexport">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_coefficient_customer/add/" target="dialog" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
   
	<table class="table" asc="asc" desc="desc" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="customer_ids[]" class="checkboxCtrl" id="check_all"  ></th>
                <th width="1%">编号</th>
                <th width="3%">时间</th>
                <th width="3%">客户代码</th>
                <th width="3%">客户名</th>
                <th width="15%">操作</th>                
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['cost_coefficient_customer']): ?>
			 <?php $_from = $this->_tpl_vars['cost_coefficient_customer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
             
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="customer_ids[]" value="<?php echo $this->_tpl_vars['ug']['id']; ?>
" type="checkbox" ></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['customer_name']; ?>
</td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_coefficient_customer/del-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_coefficient_customer/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" rel="page1" class="btnEdit">编辑</a></td>
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
