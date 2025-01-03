<?php /* Smarty version 2.6.22, created on 2014-10-15 14:02:58
         compiled from design_cycle_statistics/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/exit_storehouse/index">
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
/supplier_attributes/index" method="get">
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
		</ul>
	</div>
	<table class="table" width="1350" layoutH="135">
		<thead>
			<tr>
                <th colspan="2" align="center" ></th>
				<th colspan="8" align="center" >当月</th>
				<th colspan="4" align="center" >前一个月</th>
				<th colspan="4" align="center" >前两个月</th>
			</tr>
			<tr>	
                <th width="50" >编号</th>
                <th width="50" >设计人员</th>
                
                
				<th width="50" >任务数</th>
				<th width="50" >0-6小时</th>
				<th width="50">6-12小时</th>
                <th width="50">12-18小时</th>
                <th width="50">18-24小时</th>
                <th width="50">24-48小时</th>
                <th width="50">超时数量</th>
                <th width="50">超时率</th>
                
                
                <th width="50" >任务数</th>
				<th width="50" >0-24小时</th>
				<th width="50">24-48小时内完成数</th>
                <th width="50">超时率</th>
                
                
                <th width="50" >任务数</th>
				<th width="50" >0-24小时</th>
				<th width="50">24-48小时内完成数</th>
                <th width="50">超时率</th>
            </tr>
		</thead>
		<tbody>
             <?php if ($this->_tpl_vars['design_cycle']): ?>
			 <?php $_from = $this->_tpl_vars['design_cycle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr>
				<td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
				<td><?php echo $this->_tpl_vars['dis']['user_name']; ?>
</td>
                
				<td><?php echo $this->_tpl_vars['dis']['this_month_count']; ?>
</td>
				<td><?php echo $this->_tpl_vars['dis']['this_month_6']; ?>
</td>
				<td><?php echo $this->_tpl_vars['dis']['this_month_12']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['this_month_18']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['this_month_24']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['this_month_48']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['this_month_chaoshi']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['this_chaoshi_lv'] == ""): ?>
                <td>0.00%</td>
                <?php else: ?>
				<td><?php echo $this->_tpl_vars['dis']['this_chaoshi_lv']; ?>
%</td>
                <?php endif; ?>
              
				<td><?php echo $this->_tpl_vars['dis']['last_month_count']; ?>
</td>
				<td><?php echo $this->_tpl_vars['dis']['last_month_24']; ?>
</td>
				<td><?php echo $this->_tpl_vars['dis']['last_month_48']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['last_chaoshi'] == ""): ?>
                <td>0.00%</td>
                <?php else: ?>
				<td><?php echo $this->_tpl_vars['dis']['last_chaoshi']; ?>
%</td>
                <?php endif; ?>
				<td><?php echo $this->_tpl_vars['dis']['two_months_ago_count']; ?>
</td>
				<td><?php echo $this->_tpl_vars['dis']['two_months_ago_24']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['two_months_ago_48']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['two_ago_chaoshi'] == ""): ?>
                <td>0.00%</td>
                <?php else: ?>
				<td><?php echo $this->_tpl_vars['dis']['two_ago_chaoshi']; ?>
%</td>
                <?php endif; ?>
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