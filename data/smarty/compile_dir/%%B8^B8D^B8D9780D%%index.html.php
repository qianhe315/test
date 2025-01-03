<?php /* Smarty version 2.6.22, created on 2014-11-05 10:51:37
         compiled from financial_cleared_payment/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/financial_cleared_payment/index">
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
/financial_cleared_payment/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
         <li style="width:22%;">
				<label style="width:50px;">操作时间：</label>
				<input type="text" name="operating_start_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['operating_start_time']; ?>
" />-<input type="text" name="operating_end_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['operating_end_time']; ?>
" />
                
			</li>
         <li style="width:22%;">
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
           
              <li style="width:20%;">
				<label style="width:60px;">发票号：</label>
				<input type="text" name="invoice_number" style="width:70px;" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
" />
                
			</li>
            
             <li style="width:20%;">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">应收金额：</label>
				<input type="text" name="amount_payable" style="width:70px;" value="<?php echo $this->_tpl_vars['amount_payable']; ?>
" />
                
			</li>
			<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
      
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/financial_cleared_payment/pr_xls_export" method="post" id="payment_registration_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
		</ul>
	</div>
	<table class="table" width="1600" layoutH="138">
		<thead>
       		
			<tr>
                <th>编号</th>
                <th>操作时间</th>
                <th>时间</th>
                <th>业务员</th>
              
                <th>发票号</th>
                <th>客户名</th>
                <th>客户代码</th>
                <th>收款状态</th>
                <th>收款日期</th>
                <th>收款方式</th>
                <th>小计</th>
                <th>版费</th>
                <th>运费</th>               
                <th>折扣</th>
                <th>总金额</th>
                <th>应收金额</th>
                <th>已收金额</th>
                <th>手续费</th>
                <th>余额</th>
                <th>净值</th>               
                <th>财务备注</th>
                <th>发货日期</th>
                <th>发货状态</th>
                <th>业务备注</th>
        </tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['financial_cleared_payment']): ?>
			 <?php $_from = $this->_tpl_vars['financial_cleared_payment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                 <td><?php echo $this->_tpl_vars['dis']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                
                <td><?php echo $this->_tpl_vars['dis']['invoice_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><!--<?php if ($this->_tpl_vars['dis']['paid_status'] == '1'): ?>未收款<?php elseif ($this->_tpl_vars['dis']['invoice_status'] == '2'): ?>未完成<?php else: ?>已收款<?php endif; ?>-->
					<?php if ($this->_tpl_vars['dis']['paid_status'] == 1): ?>
                         未收款 
                    <?php elseif ($this->_tpl_vars['dis']['paid_status'] == 2): ?>    
                         未完成
                    <?php elseif ($this->_tpl_vars['dis']['paid_status'] == 3): ?>     
                         已收款
                    <?php elseif ($this->_tpl_vars['dis']['paid_status'] == 4): ?>     
                         退款中
                    <?php elseif ($this->_tpl_vars['dis']['paid_status'] == 5): ?>     
                         已退款
                    <?php elseif ($this->_tpl_vars['dis']['paid_status'] == 6): ?>    
                         特殊审批通过              
                    <?php else: ?>
                    	未收款                           
                    <?php endif; ?>                 
                </td>
                <td><?php echo $this->_tpl_vars['dis']['paid_time']; ?>
</td>
                <td>
                	<?php $_from = $this->_tpl_vars['payment_methods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ke'] => $this->_tpl_vars['pm']):
?>
                    	<?php if ($this->_tpl_vars['pm']['id'] == $this->_tpl_vars['dis']['paid_type']): ?>
                		<?php echo $this->_tpl_vars['pm']['payment_methods_name']; ?>

                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['subtotal']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['edition_price']; ?>
</td>
                <td style="text-align:right;">
                <?php if ($this->_tpl_vars['dis']['freight'] != ""): ?>
                   <?php echo $this->_tpl_vars['dis']['one']; ?>
<?php echo $this->_tpl_vars['dis']['freight']; ?>

                <?php else: ?>
                
                <?php endif; ?>   
                </td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['rebate']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['due']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['amount_payable']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['paid_money']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['poundage']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['balance']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['net_worth']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['financial_note']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['delivery_time']; ?>
</td>
                <td><?php if ($this->_tpl_vars['dis']['delivery_completely'] == '1'): ?>未发货<?php elseif ($this->_tpl_vars['dis']['delivery_completely'] == '2'): ?>未完成<?php elseif ($this->_tpl_vars['dis']['delivery_completely'] == '3'): ?>已发货<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['business_note']; ?>
</td>
           
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
</form>
</div>
<script type="text/javascript">
$("#pr_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#payment_registration_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>