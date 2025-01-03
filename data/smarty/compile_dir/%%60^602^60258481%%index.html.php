<?php /* Smarty version 2.6.22, created on 2016-05-12 15:54:12
         compiled from payment_registration_domestic/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration_domestic/index">
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
	
	<div class="searchBar">
		<ul class="searchContent">
        	<li style="width:30%;">
            <label style="width:60px;">已付总额：</label>
            <input type="text" name="total_paid_usd" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_paid_usd']; ?>
" />
            <input type="text" name="total_paid_eur" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_paid_eur']; ?>
" />
            <input type="text" name="total_paid_rmb" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_paid_rmb']; ?>
" />
            <font>(默认当月)</font>
        </li>
        <li style="width:30%;">
            <label style="width:60px;">未付总额：</label>
            <input type="text" name="total_unpaid_usd" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_unpaid_usd']; ?>
" />
            <input type="text" name="total_unpaid_eur" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_unpaid_eur']; ?>
" />
            <input type="text" name="total_unpaid_rmb" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_unpaid_rmb']; ?>
" />
            <font>(默认当月)</font>
        </li>
        
        <li style="width:35%;">
            <label style="width:60px;">销售总额：</label>
            <input type="text" name="total_sales_usd" style="width:70px; float:left;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_sales_usd']; ?>
" />
            <input type="text" name="total_sales_eur" style="width:70px; float:left;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_sales_eur']; ?>
" />
            <input type="text" name="total_sales_rmb" style="width:70px; float:left;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_sales_rmb']; ?>
" />
            <label style="width: auto; float:left;">(默认当月,含特殊审批)</label>
            
        </li>
        <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration_domestic/index" method="get" id="f_id">
			<li style="width:15%;">
				<label style="width:60px;">收款状态：</label>
				<select class="combox" name="paid_status">
                <option value="">全部</option>
                <option value="11" <?php if ($this->_tpl_vars['paid_status'] == '11'): ?>selected="selected"<?php endif; ?>>发票</option>
              	<option value="1" <?php if ($this->_tpl_vars['paid_status'] == '1'): ?>selected="selected"<?php endif; ?>>未收款</option>
                <option value="2" <?php if ($this->_tpl_vars['paid_status'] == '2'): ?>selected="selected"<?php endif; ?>>未完成</option>
                <option value="3" <?php if ($this->_tpl_vars['paid_status'] == '3'): ?>selected="selected"<?php endif; ?>>已收款</option>
                </select>
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
				<label style="width:50px;">时间：</label>
				<input type="text" name="time_start" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['time_start']; ?>
" />-<input type="text" name="time_end" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['time_end']; ?>
" />
                
			</li>
              <li style="width:16%;">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            
             <li style="width:16%;">
				<label style="width:60px;">总金额：</label>
				<input type="text" name="due" style="width:70px;" value="<?php echo $this->_tpl_vars['due']; ?>
" />
                
			</li>
            <li style="float:right; margin-left:10px; width:100px;"><a class="button" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration_domestic/search/" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li> 
				<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="button" id="id1">检索</button></div></div></li>
            
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="button" id="id2">头部</button></div></div></li>
		</ul>
      
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration_domestic/pr_xls_export" method="post" id="payment_registration_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        	<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '60' || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
             <li><a class="icon" href="#" id="pr_ex" ><span>导出EXCEL</span></a></li>
          	 <li class="line">line</li>
             <?php endif; ?>
		</ul>
	</div>
	<table class="table" width="1900" layoutH="138">
		<thead>
       		
			<tr>
            	<th><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th>编号</th>
                <th>时间</th>
                <th>业务员</th>
                <th>订单内容</th>
                <th>发票状态</th>
                <th>发票号</th>
                <th>客户名</th>
                <th>客户代码</th>
                <th>小计</th>
                 <th>版费</th>
                <th>运费</th>               
                <th>折扣</th>
                <th>总金额</th>
                <th>应收金额</th>
                <th>已收金额</th>
                <th>收款状态</th>
                <th width="28%" colspan="7">收款日期&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||收款金额&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||收款方式&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||手续费&nbsp;&nbsp;&nbsp;&nbsp;||余额&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||净值&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||财务备注</td>
                
                 <th>发货日期</th>
                <th>发货状态</th>
                <th>业务备注</th>
                <th>操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['sale_detail_list']): ?>
			 <?php $_from = $this->_tpl_vars['sale_detail_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['invoice_type'] == '1'): ?>
                    烫图
                <?php else: ?>
                    T恤
                <?php endif; ?>
                </td>
                <td>
                <?php if ($this->_tpl_vars['dis']['sales_status'] == '1'): ?>
                    发票
                <?php else: ?>
                    销售明细
                <?php endif; ?>
                <input type="hidden" name="sale_detail" id="sale_detail<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['sales_status']; ?>
" />
                </td>
                <td><?php echo $this->_tpl_vars['dis']['invoice_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
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
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['yifu']; ?>
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
                
                
                
                
                <td colspan="7">
                <table class="list" width="130">
                <tbody>
               
                 <?php $_from = $this->_tpl_vars['dis']['payment_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                 <tr>
                 <td width="70"><?php echo $this->_tpl_vars['d']['paid_time']; ?>
</td>
                 <td width="67"><?php echo $this->_tpl_vars['d']['paid_money']; ?>
</td>
                 <td width="62"><?php echo $this->_tpl_vars['d']['payment_methods_name']; ?>
</td>
                 <td width="47"><?php echo $this->_tpl_vars['d']['poundage']; ?>
</td>
                 <td width="42"><?php echo $this->_tpl_vars['d']['balance']; ?>
</td>
                 <td width="52"><?php echo $this->_tpl_vars['d']['net_worth']; ?>
</td>
                 <td width="120"><?php echo $this->_tpl_vars['d']['note']; ?>
</td>
                 </tr>
                 <?php endforeach; endif; unset($_from); ?>
                </tbody>
                </table>
                </td>
                
                
                
                
                
                
                
                
                <td><?php echo $this->_tpl_vars['dis']['delivery_time']; ?>
</td>
                <td><?php if ($this->_tpl_vars['dis']['delivery_completely'] == '1'): ?>未发货<?php elseif ($this->_tpl_vars['dis']['delivery_completely'] == '2'): ?>未完成<?php elseif ($this->_tpl_vars['dis']['delivery_completely'] == '3'): ?>已发货<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['business_note']; ?>
</td>
               
                 <td>
             <!--   <?php if ($this->_tpl_vars['dis']['paid_status'] != '6'): ?>
                    <?php if ($this->_tpl_vars['dis']['status'] != '2'): ?>
                    <a title="编辑" target="navTab" rel="stock_manage_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['dis']['sales_status'] != '1' && $this->_tpl_vars['dis']['paid_status'] != '1' && ( $this->_tpl_vars['group_id'] == '5' || $this->_tpl_vars['group_id'] == '60' )): ?>
                <a title="清空数据？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration/financial_cleared_payment-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">清空数据</a>
                <?php endif; ?>-->
              <?php if ($this->_tpl_vars['dis']['audit_type'] != '5'): ?>
              <a title="客户付款" target="navTab" rel="customer_payment" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration_domestic/customer_payment-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd" fresh="true" >客户付款</a>
               <?php endif; ?>
               <?php if ($this->_tpl_vars['dis']['paid_status'] == '2' || $this->_tpl_vars['dis']['paid_status'] == '3'): ?>  
                  <?php if ($this->_tpl_vars['user_id'] == '60' || $this->_tpl_vars['user_id'] == '1'): ?>
                   <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration_domestic/del_payment-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">清空付款金额</a>
                    </td>
                  <?php endif; ?>  
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
	
$("#id1").click(function (){

    $("#yincang").html("<input type='hidden' name='yincang' value='1'>");
	$("#f_id").submit();

});	

$("#id2").click(function (){

   $("#yincang").html("<input type='hidden' name='yincang' value='2'>");
	$("#f_id").submit();

});	
	
</script>