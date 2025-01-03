<?php /* Smarty version 2.6.22, created on 2015-07-08 09:11:42
         compiled from payment_registration/day_customer_payment_index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/day_payment_registration/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    <input type="hidden" name="design_user" value="<?php echo $this->_tpl_vars['design_user']; ?>
" />
    <input type="hidden" name="salesman_id" value="<?php echo $this->_tpl_vars['salesman_id']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/day_payment_registration/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:15%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="time_start" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['time_start']; ?>
" />-<input type="text" name="time_end" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['time_end']; ?>
" />
			</li>
            <li style="width:15%;">
				<label style="width:60px;">业务员：</label>
				<select class="combox" name="saleman_name">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['saleman_name']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="width:22%;">
				<label style="width:60px;">收款时间：</label>
				<input type="text" name="paid_time_start" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['paid_time_start']; ?>
" />-<input type="text" name="paid_time_end" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['paid_time_end']; ?>
" />
                
			</li>
            <li style="width:16%;">
				<label style="width:60px;">应收金额：</label>
				<input type="text" name="paid_money" style="width:70px;" value="<?php echo $this->_tpl_vars['paid_money']; ?>
" />
                
			</li>
              <li style="width:16%;">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            
             <li style="width:16%;">
				<label style="width:60px;">收款金额：</label>
				<input type="text" name="paid_money1" style="width:70px;" value="<?php echo $this->_tpl_vars['paid_money1']; ?>
" />
                
			</li>
 <li style="width:16%;">
				<label style="width:60px;">发票号：</label>
				<input type="text" name="invoice_no" style="width:70px;" value="<?php echo $this->_tpl_vars['invoice_no']; ?>
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
    <table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
<!--                <th width="2%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>-->
                <th width="2%">编号</th>
                <th width="6%">时间</th>
                <th width="6%">业务员</th>
                <th width="6%">发票号</th>
                <th width="6%">应收金额</th>
                <th width="6%">客户代码</th>
                <th width="6%">收款日期</th>               
                <th width="6%">收款方式</th>
                <th width="6%">货币</th>
                <th width="6%">收款金额</th>
                <th width="6%">手续费</th>
                <th width="6%">净值</th>
                <th width="6%">余额</th>
				<th width="6%">备注</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['payment_detail']): ?>
			 <?php $_from = $this->_tpl_vars['payment_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
<!--                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>-->
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['invoice_no']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['yingfu']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['paid_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['pay_type']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['currency']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['paid_money']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['poundage']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['net_worth']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['balance']; ?>
</td>
				<td><?php echo $this->_tpl_vars['dis']['note']; ?>
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