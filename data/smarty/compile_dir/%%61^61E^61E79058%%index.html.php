<?php /* Smarty version 2.6.22, created on 2016-09-30 23:58:21
         compiled from cdr_review/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/check_stock/index">
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
/material_review/index" method="get">
	<div class="searchBar">
	
         <div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
        <ul  class="toolBar">
        
        <li>
            <a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_review/shtg/" target="selectedTodo" rel="group_ids[]" postType="string" title="确定批量修改?" ><span>批量审核通过</span></a>
         </li>
         <li class="line">line</li>
         
         </ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
       		
			<tr>
				<th width="22"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="30">时间</th>
                 <th width="30">业务员</th>
                 <th width="30">客户名</th>
                  <th width="30">客户代码</th>
                
                 <th width="30">状态</th>
                 <th width="30">默认报价</th>
                 <th width="30">报价</th>
                <th width="30">驳回理由</th>

                <th width="70">操作</th>
			</tr>
		</thead>
		<tbody>
      <?php if ($this->_tpl_vars['cdr_review']): ?>
			 <?php $_from = $this->_tpl_vars['cdr_review']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['mr']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['mr']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['mr']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['mr']['salesman']; ?>
</td>
                <td><?php echo $this->_tpl_vars['mr']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['mr']['customer_code']; ?>
</td>
                
                <?php if ($this->_tpl_vars['mr']['status'] == '1'): ?>
                <td>未审核</td>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['mr']['status'] == '2'): ?>
                <td>审核通过</td>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['mr']['status'] == '3'): ?>
                <td>驳回</td>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['mr']['exchange_rate_id'] == '人民币'): ?>
              <td>￥<?php echo $this->_tpl_vars['mr']['min_final_quote']; ?>
</td>
                <td>￥<?php echo $this->_tpl_vars['mr']['final_quote']; ?>
</td>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['mr']['exchange_rate_id'] == '美元'): ?>
              <td>$<?php echo $this->_tpl_vars['mr']['min_final_quote']; ?>
</td>
                <td>$<?php echo $this->_tpl_vars['mr']['final_quote']; ?>
</td>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['mr']['exchange_rate_id'] == '欧元'): ?>
              <td>€<?php echo $this->_tpl_vars['mr']['min_final_quote']; ?>
</td>
                <td>€<?php echo $this->_tpl_vars['mr']['final_quote']; ?>
</td>
              <?php endif; ?>
               <?php if ($this->_tpl_vars['mr']['exchange_rate_id'] == ''): ?>
              <td></td>
              <td></td>
              <?php endif; ?>
             
                <td><?php echo $this->_tpl_vars['mr']['reason_rejection']; ?>
</td>
           <?php if ($this->_tpl_vars['mr']['status'] != '3'): ?>
           <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
               <td> <a title="驳回" target="dialog" rel="goods_free" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_review/reason_rejection-id-<?php echo $this->_tpl_vars['mr']['id']; ?>
.html" class="btnAdd">驳回</a> </td>
           <?php endif; ?>
         <?php endif; ?>
           <?php if ($this->_tpl_vars['mr']['status'] == '3'): ?>
           <td></td>
           <?php endif; ?>
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