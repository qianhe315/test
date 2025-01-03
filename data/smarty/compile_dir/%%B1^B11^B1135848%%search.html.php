<?php /* Smarty version 2.6.22, created on 2014-03-12 16:44:06
         compiled from sale_detail/search.html */ ?>
<div class="pageContent">
	<form method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/index" class="pageForm" onsubmit="return navTabSearch(this);">
		<div class="pageFormContent" layoutH="58">
        
			<div class="unit">
				<label style="width:100px;">发货状态：</label>
				<select class="combox" name="delivery_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['delivery_status'] == '1'): ?>selected="selected"<?php endif; ?>>未发货</option>
                <option value="2" <?php if ($this->_tpl_vars['delivery_status'] == '2'): ?>selected="selected"<?php endif; ?>>未完成</option>
                <option value="3" <?php if ($this->_tpl_vars['delivery_status'] == '3'): ?>selected="selected"<?php endif; ?>>已发货</option>
                </select>
			</div>
			<div class="unit">
				<label style="width:100px;">发票状态：</label>
				<select class="combox" name="invoice_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['invoice_status'] == '1'): ?>selected="selected"<?php endif; ?>>无需审核</option>
                <option value="2" <?php if ($this->_tpl_vars['invoice_status'] == '2'): ?>selected="selected"<?php endif; ?>>审核中</option>
                <!--<option value="3" <?php if ($this->_tpl_vars['invoice_status'] == '3'): ?>selected="selected"<?php endif; ?>>审核通过</option>-->
                <option value="4" <?php if ($this->_tpl_vars['invoice_status'] == '4'): ?>selected="selected"<?php endif; ?>>驳回</option>
                </select>
			</div>
            <div class="unit">
				<label style="width:100px;">付款状态：</label>
				<select class="combox" name="paymant_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['paymant_status'] == '1'): ?>selected="selected"<?php endif; ?>>未付款</option>
                <option value="2" <?php if ($this->_tpl_vars['paymant_status'] == '2'): ?>selected="selected"<?php endif; ?>>未完成</option>
                <option value="3" <?php if ($this->_tpl_vars['paymant_status'] == '3'): ?>selected="selected"<?php endif; ?>>已付款</option>
                <option value="4" <?php if ($this->_tpl_vars['paymant_status'] == '4'): ?>selected="selected"<?php endif; ?>>退款中</option>
                <option value="5" <?php if ($this->_tpl_vars['paymant_status'] == '5'): ?>selected="selected"<?php endif; ?>>已退款</option>
                <option value="6" <?php if ($this->_tpl_vars['paymant_status'] == '6'): ?>selected="selected"<?php endif; ?>>特殊审批通过</option>
                </select>
			</div>
            <div class="unit">
				<label style="width:60px;">客户名：</label>
				<input type="text" name="customer_name" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
			</div>
			
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">开始检索</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="reset">清空重输</button></div></div></li>
			</ul>
		</div>
	</form>
</div>