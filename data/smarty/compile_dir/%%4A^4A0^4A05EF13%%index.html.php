<?php /* Smarty version 2.6.22, created on 2013-09-05 17:03:47
         compiled from discount/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/discount/index">
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
/discount/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:30%";>
				<label>折扣名：</label>
				<input type="text" name="discount_name" value="<?php echo $this->_tpl_vars['discount_name']; ?>
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
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/discount/add/" target="dialog" rel="page1"><span>添加折扣</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr>
				<th width="22"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="30">折扣名</th>
                <th width="30">折扣类别</th>
                <th width="30">折扣内容</th>
                
                <th width="70">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['discount']): ?>
			 <?php $_from = $this->_tpl_vars['discount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['dis']['discount_name']; ?>
</td>
 				<td><?php if ($this->_tpl_vars['dis']['discount_category'] == 1): ?>满立减<?php elseif ($this->_tpl_vars['dis']['discount_category'] == 2): ?>满包邮<?php elseif ($this->_tpl_vars['dis']['discount_category'] == 3): ?>折扣<?php elseif ($this->_tpl_vars['dis']['discount_category'] == 4): ?>返利券<?php elseif ($this->_tpl_vars['dis']['discount_category'] == 5): ?>抵值券<?php endif; ?></td>
               
                <td><?php if ($this->_tpl_vars['dis']['discount_category'] == 1): ?>总价满<?php echo $this->_tpl_vars['dis']['top_price']; ?>
元，立减<?php echo $this->_tpl_vars['dis']['discount_price']; ?>
元<?php elseif ($this->_tpl_vars['dis']['discount_category'] == 2): ?>总价满<?php echo $this->_tpl_vars['dis']['by_top_price']; ?>
元包邮<?php elseif ($this->_tpl_vars['dis']['discount_category'] == 3): ?><?php echo $this->_tpl_vars['dis']['discount']; ?>
折<?php elseif ($this->_tpl_vars['dis']['discount_category'] == 4): ?>总价满<?php echo $this->_tpl_vars['dis']['fl_top_price']; ?>
元，下次购物减<?php echo $this->_tpl_vars['dis']['next_discount']; ?>
元<?php elseif ($this->_tpl_vars['dis']['discount_category'] == 5): ?>下次购物减<?php echo $this->_tpl_vars['dis']['dz_next_discount']; ?>
元<?php endif; ?></td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/discount/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/discount/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
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