<?php /* Smarty version 2.6.22, created on 2015-08-01 11:34:09
         compiled from material_amount/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_amount/index">
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
/material_amount/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">

            <li style="width:23%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
			</li>

<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
		
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">

	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
       		
			<tr>
				<th width="22"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="30">时间</th>
                <th width="30">名称</th>
                <th width="30">颜色</th>
                <th width="30">尺寸</th>
                <th width="30">数量(粒)</th>
                <th width="30">数量(罗)</th>
			</tr>
		</thead>
		<tbody>
      <?php if ($this->_tpl_vars['new_arr']): ?>
         <?php $_from = $this->_tpl_vars['new_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['mr']):
?>
          <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
            <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['mr']['id']; ?>
" type="checkbox"></td>
            <td><?php echo $this->_tpl_vars['mr']['insert_time']; ?>
</td>
            <td><?php echo $this->_tpl_vars['mr']['name']; ?>
</td>
            <td><?php echo $this->_tpl_vars['mr']['color']; ?>
</td>
            <td><?php echo $this->_tpl_vars['mr']['size']; ?>
</td>
            <td><?php echo $this->_tpl_vars['mr']['all_number']; ?>
</td>
            <td><?php echo $this->_tpl_vars['mr']['number']; ?>
</td>
          </tr>
          
         <?php endforeach; endif; unset($_from); ?>
     <?php endif; ?>
		</tbody>
	</table>
<!--	<div class="panelBar">
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

	</div>-->
</div>