<?php /* Smarty version 2.6.22, created on 2023-06-12 16:19:14
         compiled from payment_registration/customer_payment_index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration/customer_payment">
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
/payment_registration/customer_payment" method="get">
    
	<div class="searchBar">
		<ul class="searchContent">
		</ul>
		
		<div class="subBar">
		
		</div>
        <div class="subBar">
		 <input type="hidden" name="mid" id="mid" value="<?php echo $this->_tpl_vars['id']; ?>
">
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration/customer_payment_add-mid-<?php echo $this->_tpl_vars['id']; ?>
.html" target="navTab" rel="design_content_add" ><span>添加</span></a></li>
           
			<li class="line">line</li>
			
		</ul>
	</div>
    <table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
                <th width="2%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="6%">时间</th>
                <th width="6%">应收金额</th>
                <th width="6%">收款日期</th>
                <th width="6%">业务员</th>
                <th width="6%">客户代码</th>
                <th width="6%">收款方式</th>
                <th width="6%">货币</th>
                <th width="6%">收款金额</th>
                <th width="6%">手续费</th>
                <th width="6%">净值</th>
                <th width="6%">余额</th>
                <th width="6%">备注</th>
                <th width="7%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['payment_detail']): ?>
			 <?php $_from = $this->_tpl_vars['payment_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:100px;">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['yingfu']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['paid_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
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
                <td>
                <?php if (( $this->_tpl_vars['user_id'] == '1' || $this->_tpl_vars['user_id'] == '68' ) && $this->_tpl_vars['export_status'] == '0'): ?>
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration/del_customer_payment-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
-mid-<?php echo $this->_tpl_vars['id']; ?>
.html" class="btnDel">删除</a> 
                <?php endif; ?>
                <a title="编辑" target="navTab" rel="design_content_add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration/edit_customer_payment-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
-mid-<?php echo $this->_tpl_vars['id']; ?>
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