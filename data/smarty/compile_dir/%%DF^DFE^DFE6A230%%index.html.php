<?php /* Smarty version 2.6.22, created on 2020-06-02 15:35:44
         compiled from business_limit/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/exchangerate/index">
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
/business_limit/half_month" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:25%;">
			<label style="width:60px;">时间：</label>
            <input type="text" size="20" name="value_date" value="<?php echo $this->_tpl_vars['value_date']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM-dd" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
        <div class="subBar">
        <ul>
			<li style="float:right;">
            
            </li>
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
/business_limit/add/" target="dialog" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="1200" layoutH="1200" >
		<thead>
			<tr>
                <th width="30">排名</th>
                <th width="30">业务员</th>
				<th width="70">30天询盘剩余数</th>
				<th width="70">24小时询盘剩余数</th>
				<th width="70">网站新客户数</th>
				<th width="70">成交新客户数</th>
				<th width="70">动态成交率</th>
				<th width="70">认领一小时回复数</th>
				<th width="70">认领一小时回复率</th>
				<th width="70">网站询盘客户回复率</th>
				<th width="70">网站询盘回复时长</th>
				<th width="70">分配排名</th>
                <th width="70">操作</th>
			</tr>
		</thead>
		
        <?php if ($this->_tpl_vars['business_limit']): ?>
			 <?php $_from = $this->_tpl_vars['business_limit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
			 <?php if ($this->_tpl_vars['ug']['user_id'] == 110 || $this->_tpl_vars['ug']['user_id'] == 122): ?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td>0</td>
 				<td><?php echo $this->_tpl_vars['ug']['user_name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['quote_deal_month']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['deal_4']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['deal']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['volume']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['lv']; ?>
%</td>
				<td><?php echo $this->_tpl_vars['ug']['email']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['elv']; ?>
%</td>
				<td><?php echo $this->_tpl_vars['ug']['first_send_time']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['send_time']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['slv']; ?>
%</td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/business_limit/del-id-<?php echo $this->_tpl_vars['ug']['user_id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/business_limit/edit-id-<?php echo $this->_tpl_vars['ug']['user_id']; ?>
.html" class="btnEdit">编辑</a></td>
              </tr>
              <?php endif; ?>
             <?php endforeach; endif; unset($_from); ?>
         <?php endif; ?>
		
	</table>

	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr>
                <th width="30">排名</th>
                <th width="30">业务员</th>
				<th width="70">7天询盘剩余数</th>
				<th width="70">24小时询盘剩余数</th>
				<th width="70">网站新客户数</th>
				<th width="70">成交新客户数</th>
				<th width="70">动态成交率</th>
				<th width="70">认领一小时回复数</th>
				<th width="70">认领一小时回复率</th>
				<th width="70">网站询盘客户回复率</th>
				<th width="70">网站询盘回复时长</th>
				<th width="70">分配排名</th>
                <th width="70">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['business_limit']): ?>
        
			 <?php $_from = $this->_tpl_vars['business_limit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
			 <?php if ($this->_tpl_vars['ug']['user_id'] != 110 && $this->_tpl_vars['ug']['user_id'] != 122): ?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><?php echo $this->_tpl_vars['i']++; ?>
</td>
 				<td><?php echo $this->_tpl_vars['ug']['user_name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['deal_7']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['deal_4']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['deal']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['volume']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['lv']; ?>
%</td>
				<td><?php echo $this->_tpl_vars['ug']['email']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['elv']; ?>
%</td>
				<td><?php echo $this->_tpl_vars['ug']['first_send_time']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['send_time']; ?>
</td>
				<td><?php echo $this->_tpl_vars['ug']['slv']; ?>
%</td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/business_limit/del-id-<?php echo $this->_tpl_vars['ug']['user_id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/business_limit/edit-id-<?php echo $this->_tpl_vars['ug']['user_id']; ?>
.html" class="btnEdit">编辑</a></td>
              </tr>
              
              <?php endif; ?>
             <?php endforeach; endif; unset($_from); ?>
         <?php endif; ?>
			 <tr target="sid_user" style="background:#FFF5CD;">
                <td></td>
 				<td>总数</td>
				<td></td>
				<td></td>
				<td><?php echo $this->_tpl_vars['total_quote_deal']; ?>
</td>
				<td><?php echo $this->_tpl_vars['total_quote_volume']; ?>
</td>
				<td><?php echo $this->_tpl_vars['total_quote']; ?>
%</td>
				<td><?php echo $this->_tpl_vars['total_email_list']; ?>
</td>
				<td><?php echo $this->_tpl_vars['total_email']; ?>
%</td>
				<td><?php echo $this->_tpl_vars['first_send_time_total']; ?>
</td>
				<td><?php echo $this->_tpl_vars['send_time_total']; ?>
</td>
                <td><?php echo $this->_tpl_vars['total']; ?>
%</td>
                <td> </td>
              </tr>
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