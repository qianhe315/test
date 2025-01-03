<?php /* Smarty version 2.6.22, created on 2015-04-22 15:13:54
         compiled from newcustomer_quotecustomer/newcustomer_pay.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer_quotecustomer/index">
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
/newcustomer_quotecustomer/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"></div></div></li>
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
        </ul>
	</div>
	<table class="table" width="80%" layoutH="138">
		<thead>
			<tr>
				<th width="2%">编号</th>
                <th width="10%">询盘日期</th>
                <th width="10%">客户代码</th>
                <th width="5%">客户名</th>
                <th width="5%">公司</th>
                 <th width="10%">业务员</th>
                <th width="10%">付款时间</th>
                <th width="5%">发票号</th>
                <th width="5%">首笔金额</th>
                <th width="7%">当月付款总金额</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['customer_codes']): ?>
		<?php $_from = $this->_tpl_vars['customer_codes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
        <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
            <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['quote_time_c']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['customer_code']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['customer_name']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['company']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['saleman_name']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['paid_time']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['invoice_number']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['paid_money']; ?>
</td>
            <td >$<?php echo $this->_tpl_vars['us']['sum_paid_money']; ?>
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