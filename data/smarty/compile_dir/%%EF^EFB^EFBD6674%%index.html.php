<?php /* Smarty version 2.6.22, created on 2015-01-27 15:06:03
         compiled from other_shipping_goods/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/other_shipping_goods/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="discount_name" value="<?php echo $this->_tpl_vars['discount_name']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/other_shipping_goods/index" method="post">
	<div class="searchBar">
		<ul class="searchContent">
			 
             <li style="width:20%;">
				<label style="width:70px;">名称：</label>
				<input type="text" name="name" style="width:80px;" value="<?php echo $this->_tpl_vars['name']; ?>
" />
                
			 </li>
             <li style="width:20%;">
				<label style="width:70px;">英文名称：</label>
				<input type="text" name="e_name" style="width:80px;" value="<?php echo $this->_tpl_vars['e_name']; ?>
" />
                
			 </li>
            <br>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/other_shipping_goods/add/" target="dialog" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="1200" layoutH="125">
		<thead>
			<tr>

				<th width="22"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="30">编号</th>
                <th width="30">名称</th>
                <th width="30">英文名</th>
                <th width="30">成本</th>
                 <th width="30">单价</th>
                <th width="30">操作</th>
                
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['other_shipping_goods']): ?>
			 <?php $_from = $this->_tpl_vars['other_shipping_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['e_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['cost']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['price']; ?>
</td>
                <td>
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/other_shipping_goods/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>
                <a title="编辑" target="dialog" rel="stock_manage_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/other_shipping_goods/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                </td>
 			
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