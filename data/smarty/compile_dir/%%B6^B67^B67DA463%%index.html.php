<?php /* Smarty version 2.6.22, created on 2024-08-27 10:51:18
         compiled from sale_detail/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="stock_code" value="<?php echo $this->_tpl_vars['stock_code']; ?>
" />
    
</form>
<style>
.searchBar ul.searchContent li {
	width:auto;
	float:left;
	margin-right:10px;
}
</style>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        
        <li>
            <label style="width:60px;">已付总额：</label>
            <input type="text" name="total_paid_usd" style="width:70px;" readonly value="<?php echo $this->_tpl_vars['total_paid_usd']; ?>
" />
            <input type="text" name="total_paid_eur" style="width:70px;" readonly value="<?php echo $this->_tpl_vars['total_paid_eur']; ?>
" />
            <input type="text" name="total_paid_rmb" style="width:70px;" readonly value="<?php echo $this->_tpl_vars['total_paid_rmb']; ?>
" />
            
        </li>
        <li>
            <label style="width:60px;">未付总额：</label>
            <input type="text" name="total_unpaid_usd" style="width:70px;" readonly value="<?php echo $this->_tpl_vars['total_unpaid_usd']; ?>
" />
            <input type="text" name="total_unpaid_eur" style="width:70px;" readonly value="<?php echo $this->_tpl_vars['total_unpaid_eur']; ?>
" />
            <input type="text" name="total_unpaid_rmb" style="width:70px;" readonly value="<?php echo $this->_tpl_vars['total_unpaid_rmb']; ?>
" />
            
        </li>
        
        <li>
            <label style="width:60px;">销售总额：</label>
            <input type="text" name="total_sales_usd" style="width:70px; float:left;" readonly value="<?php echo $this->_tpl_vars['total_sales_usd']; ?>
" />
            <input type="text" name="total_sales_eur" style="width:70px; float:left;" readonly value="<?php echo $this->_tpl_vars['total_sales_eur']; ?>
" />
            <input type="text" name="total_sales_rmb" style="width:70px; float:left;" readonly value="<?php echo $this->_tpl_vars['total_sales_rmb']; ?>
" />
            <label style="width: auto; float:left;">(含特殊审批)</label>
            
        </li>
        <li style="width:240px;">
				<label style="width:60px;">提交时间：</label>
				<input type="text" name="start_time" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" class="date" readonly />
                <font style="line-height:22px;">-</font>
                <input type="text" name="end_time" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" class="date" readonly/>
			</li>
         <li>
            <label style="width:60px;">付款时间：</label>
            <input type="text" name="start_paid_time" style="width:70px;" value="<?php echo $this->_tpl_vars['start_paid_time']; ?>
" class="date" readonly />
            <font style="line-height:22px;">-</font>
            <input type="text" name="end_paid_time" style="width:70px;" value="<?php echo $this->_tpl_vars['end_paid_time']; ?>
" class="date" readonly/>
            
        </li>
        <li>
          <label style="width:60px;">产品分类：</label>
         <select class="combox" name="product_type">
            <option value="">全部</option>
            <option value="外发丝网印" <?php if ($this->_tpl_vars['product_type'] == "外发丝网印"): ?>selected="selected"<?php endif; ?>>外发丝网印</option>
            <option value="外发章类" <?php if ($this->_tpl_vars['product_type'] == "外发章类"): ?>selected="selected"<?php endif; ?>>外发章类</option>
            <option value="外发啦啦服" <?php if ($this->_tpl_vars['product_type'] == "外发啦啦服"): ?>selected="selected"<?php endif; ?>>外发啦啦服</option>
            <option value="外发服饰" <?php if ($this->_tpl_vars['product_type'] == "外发服饰"): ?>selected="selected"<?php endif; ?>>外发服饰</option>
            <option value="外发其它" <?php if ($this->_tpl_vars['product_type'] == "外发其它"): ?>selected="selected"<?php endif; ?>>外发其它</option>
            <option value="散点类" <?php if ($this->_tpl_vars['product_type'] == "散点类"): ?>selected="selected"<?php endif; ?>>散点类</option>
            <option value="切割类" <?php if ($this->_tpl_vars['product_type'] == "切割类"): ?>selected="selected"<?php endif; ?>>切割类</option>
            <option value="钻切割" <?php if ($this->_tpl_vars['product_type'] == "钻切割"): ?>selected="selected"<?php endif; ?>>钻切割</option>
             <option value="钻打印" <?php if ($this->_tpl_vars['product_type'] == "钻打印"): ?>selected="selected"<?php endif; ?>>钻打印</option>
             <option value="切割打印" <?php if ($this->_tpl_vars['product_type'] == "切割打印"): ?>selected="selected"<?php endif; ?>>切割打印</option>
             <option value="钻切打印" <?php if ($this->_tpl_vars['product_type'] == "钻切打印"): ?>selected="selected"<?php endif; ?>>钻切打印</option>
            <option value="打印类" <?php if ($this->_tpl_vars['product_type'] == "打印类"): ?>selected="selected"<?php endif; ?>>打印类</option>
            <option value="睫毛" <?php if ($this->_tpl_vars['product_type'] == "睫毛"): ?>selected="selected"<?php endif; ?>>睫毛</option>
            <option value="辅料" <?php if ($this->_tpl_vars['product_type'] == "辅料"): ?>selected="selected"<?php endif; ?>>辅料</option>           
            <option value="服饰" <?php if ($this->_tpl_vars['product_type'] == "服饰"): ?>selected="selected"<?php endif; ?>>服饰</option>
          </select>
        </li>
        
        
        <li>
          <label style="width:60px;">客户代码：</label>
          <input type="text" name="customer_code" style="width:50px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
"  />
          <input type='radio' name='standard' value='1' <?php if ($this->_tpl_vars['standard'] == 1 || empty ( $this->_tpl_vars['standard'] )): ?>checked='checked'<?php endif; ?> >精确 <input type='radio' name='standard' value='2' <?php if ($this->_tpl_vars['standard'] == 2): ?>checked='checked'<?php endif; ?> >模糊
       </li>
       <li>
          <label style="width:50px;">发票号：</label>
          <input type="text" name="invoice_number" style="width:100px;" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
" />
       </li>
        
       <li>
            <label style="width:60px;">付款状态：</label>
            <select class="combox" name="paymant_status">
            <option value="">全部</option>
            <option value="1" <?php if ($this->_tpl_vars['paymant_status'] == '1'): ?>selected="selected"<?php endif; ?>>未付款</option>
            <option value="2" <?php if ($this->_tpl_vars['paymant_status'] == '2'): ?>selected="selected"<?php endif; ?>>未完成</option>
            <option value="3" <?php if ($this->_tpl_vars['paymant_status'] == '3'): ?>selected="selected"<?php endif; ?>>已付款</option>
            <option value="4" <?php if ($this->_tpl_vars['paymant_status'] == '4'): ?>selected="selected"<?php endif; ?>>退款中</option>
            <option value="5" <?php if ($this->_tpl_vars['paymant_status'] == '5'): ?>selected="selected"<?php endif; ?>>已退款</option>
            <option value="6" <?php if ($this->_tpl_vars['paymant_status'] == '6'): ?>selected="selected"<?php endif; ?>>特殊审批通过</option>
            </select>
        </li>
        
        <li>
            <label style="width:60px;">发货状态：</label>
            <select class="combox" name="delivery_status">
            <option value="">全部</option>
            <option value="1" <?php if ($this->_tpl_vars['delivery_status'] == '1'): ?>selected="selected"<?php endif; ?>>未发货</option>
            <option value="2" <?php if ($this->_tpl_vars['delivery_status'] == '2'): ?>selected="selected"<?php endif; ?>>未完成</option>
            <option value="3" <?php if ($this->_tpl_vars['delivery_status'] == '3'): ?>selected="selected"<?php endif; ?>>已发货</option>
            </select>
        </li>
        
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
        		<li>
				<label style="width:50px;">业务员：</label>
				<select class="combox" name="sale_user">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
                </li>
         <?php endif; ?>
         
         
         
         	 <!--<?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
                <li style="width:12%;">
                    <label style="width:60px;">业务分组：</label>
                    <select class="combox" name="little_group">
                    <option value="">全部</option>
                    <option value="A" <?php if ($this->_tpl_vars['little_group'] == 'A'): ?> selected <?php endif; ?> > 销售1部 </option>
                    <option value="B" <?php if ($this->_tpl_vars['little_group'] == 'B'): ?> selected <?php endif; ?> > 销售2部 </option>
                    <option value="C" <?php if ($this->_tpl_vars['little_group'] == 'C'): ?> selected <?php endif; ?> > 销售3部 </option>
                    <option value="D" <?php if ($this->_tpl_vars['little_group'] == 'D'): ?> selected <?php endif; ?> > 销售4部 </option>
                    </select>
                </li>
            <?php endif; ?>-->
           <li>
				<label style="width:60px;">付款方式：</label>
				<select class="combox" name="payment_type">
                <option value="">全部</option>
                <option value="1" <?php if ($this->_tpl_vars['payment_type'] == 1): ?> selected <?php endif; ?> >线下-支付</option>
                <option value="2" <?php if ($this->_tpl_vars['payment_type'] == 2): ?> selected <?php endif; ?> >在线-支付</option>
                </select>
             </li>
             
             
             
             
            
            <li>
            <label style="width:60px;">公司引导：</label>
            <select class="combox" name="yindao">
            <option value="">全部</option>
            <option value="小布涂涂" <?php if ($this->_tpl_vars['yindao'] == '小布涂涂'): ?> selected <?php endif; ?> >小布涂涂</option>
            <option value="涂涂记" <?php if ($this->_tpl_vars['yindao'] == '涂涂记'): ?> selected <?php endif; ?> >涂涂记</option>
            <option value="赛思通" <?php if ($this->_tpl_vars['yindao'] == '赛思通'): ?> selected <?php endif; ?> >赛思通</option>
            </select>
            </li>
            
            <li>
            <label style="width:60px;">公司归属：</label>
            <select class="combox" name="gongsi">
            <option value="">全部</option>
            <option value="小布涂涂" <?php if ($this->_tpl_vars['gongsi'] == '小布涂涂'): ?> selected <?php endif; ?> >小布涂涂</option>
            <option value="涂涂记" <?php if ($this->_tpl_vars['gongsi'] == '涂涂记'): ?> selected <?php endif; ?> >涂涂记</option>
            <option value="赛思通" <?php if ($this->_tpl_vars['gongsi'] == '赛思通'): ?> selected <?php endif; ?> >赛思通</option>
            </select>
            </li>
 		
            
<!--			<li style="width:15%;">
				<label style="width:60px;">总价：</label>
				<input type="text" name="total_price" style="width:70px;" value="<?php echo $this->_tpl_vars['total_price']; ?>
" />
                
			</li>-->
            
            <!--<li style="float:right; margin-left:10px; width:100px;"><a class="button" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/search/" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li> -->
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>

        
            
		</ul>

	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/sd_xls_export" method="post" id="sale_detail_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			 <li class="line">line</li>
			 <!-- <li><a class="add" onClick="window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/business_invoice/');" href="#"><span>商业发票</span></a></li>
             <li class="line">line</li>
             <li><a class="add" onClick="window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/po/');"  href="#"><span>PO</span></a></li> 
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/refund_application" target="dialog" rel="refund_application"><span>退款申请</span></a></li>
             <li class="line">line</li> -->
<!--             <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '53'): ?>
             <li><a class="add" id="sale_detail_invoice" rel="*" href="#"><span>发票状态返回</span></a></li>
             <li class="line">line</li>
             <?php endif; ?>-->
			 <li><a class="add" id="sale_detail_deliver_list_all" target="navTab" rel="deliver_list_all" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/deliver_list_all"><span>查看全部发货信息</span></a></li>
<!--             <li class="line">line</li>-->
             <!--<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '68'): ?>
             <li><a class="edit" id="bulk_order_code_delivery" target="navTab" rel="bulk_order_code_delivery" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/bulk_order_code_delivery"><span>批量订单扫码发货</span></a></li>
             <li class="line">line</li>
             <?php endif; ?>-->
             <!--<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '60' || $this->_tpl_vars['user_hidden']['group_id'] == '61' || $this->_tpl_vars['user_hidden']['group_id'] == '58'): ?>
             <li><a class="icon" href="#" id="sd_ex" ><span>导出EXCEL</span></a></li>
			 <?php endif; ?>
          	 <li class="line">line</li>-->
            <!-- <?php if ($this->_tpl_vars['user_hidden']['user_id'] == '1'): ?>
             <li><a class="add" href="http://192.168.1.4/cstownrhinestone/index.php?route=common/home1&ce=1" target="_block" ><span>上单声音提醒</span></a></li>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/yinyue-ce-1.html" target="_block" ><span>上单声音提醒</span></a></li>
             <?php endif; ?>-->
			  <!--<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
             <li> <a class="add" title="处理付款信息?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/payment_manage"><span>处理付款信息</a></span></li>
          	 <li class="line">line</li>
             <?php endif; ?>-->
            <!-- <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
             <li><a class="icon" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/add_newmoney" target="ajaxTodo" rel="page1" postType="string"   title="确定美元化付款金额?" ><span>美元化付款金额</span></a></li>
          	 <li class="line">line</li>
             <?php endif; ?>-->
<!--<a class="edit" title="同步数据?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/invoice_old/">
<span>同步数据</span></a>  
<li class="line">line</li>
<a class="edit" title="同步数据?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/shipping/">
<span>发货同步数据</span></a>         -->   
		</ul>
	</div>
	<table class="table" width="1680" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids_sale_detail[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="5%">时间</th>
                <th width="4%">业务员</th>
                <th width="4%">客户代码</th>
                <th width="6%">客户名</th>
                <!--<th width="5%">发票状态</th>-->
                <th width="8%">发票号</th>
                 <?php if ($this->_tpl_vars['session_id'] != 65 && $this->_tpl_vars['session_id'] != 66): ?>
                <th width="6%">总价</th>
                <th width="6%">应付金额</th>
                <?php else: ?>
                <?php endif; ?>
                
                <?php if ($this->_tpl_vars['session_id'] != 65 && $this->_tpl_vars['session_id'] != 66): ?>
                <th width="26%" colspan="4">
                	已付金额&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ||手续费&nbsp;&nbsp;&nbsp;&nbsp;
                    ||净额&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!--||余额&nbsp;&nbsp;&nbsp;&nbsp;-->
                    ||付款时间&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ||付款渠道</td>
                
                <?php else: ?>
             
                 <?php endif; ?>
                <th width="5%" align="center">付款方式</th>
                <th width="5%">申请内容</th>
                <th width="4%">付款状态</th>
                <th width="3.5%">退款金额</th>
               <!-- <th width="6%">财务备注</th>-->
                <th width="3%">发货属性</th>
                <th width="3.5%">公司引导</th>
                <th width="3.5%">公司归属</th>
                <th width="6%">操作</th>
<!--                <th width="30">发货日期</th>
                <th width="30">已发货订单号</th>
                <th width="30">快递公司</th>
                <th width="30">快递单号</th>
                <th width="30">销售称重</th>
                <th width="30">运费导入时间</th>
                <th width="30">快递称重</th>
                <th width="30">运费</th>
                <th width="30">销售备注</th>-->
			</tr>
		</thead>
        <input type="hidden" value="<?php echo $this->_tpl_vars['session_user_name']; ?>
" id="sd_ssaleman_id" />
		<tbody>
        
        <?php if ($this->_tpl_vars['sale_detail_list']): ?>
			 <?php $_from = $this->_tpl_vars['sale_detail_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids_sale_detail[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <input type="hidden" name="sd_saleman_name" id="sd_saleman_name<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
" />
                <input type="hidden" name="export_status" id="export_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['export_status']; ?>
" />
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
<!--                <td><?php if ($this->_tpl_vars['dis']['invoice_status'] == 1): ?>
                         
                    <?php elseif ($this->_tpl_vars['dis']['invoice_status'] == 2): ?>
                         审核中
                    <?php elseif ($this->_tpl_vars['dis']['invoice_status'] == 3): ?>
                         审核通过
                    <?php elseif ($this->_tpl_vars['dis']['invoice_status'] == 4): ?>     
                         驳回
                    <?php endif; ?> 
                    <input type="hidden" id="invoice_status_a<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['invoice_status']; ?>
" />
                </td>  -->              
                <td><?php echo $this->_tpl_vars['dis']['invoice_number']; ?>
</td>
                 <?php if ($this->_tpl_vars['session_id'] != 65 && $this->_tpl_vars['session_id'] != 66): ?>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['due']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['amount_payable']; ?>
</td>
               
                <?php endif; ?>
                
                
                
                <?php if ($this->_tpl_vars['session_id'] != 65 && $this->_tpl_vars['session_id'] != 66): ?>
                <td colspan="4">
                <table class="list" width="390">
                <tbody>
               	 <?php if ($this->_tpl_vars['dis']['payment_detail']): ?>
                 <?php $_from = $this->_tpl_vars['dis']['payment_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                 <tr>
                 <td  width="60" style="text-align:right;"><?php echo $this->_tpl_vars['d']['paid_money']; ?>
</td>
				 <td  width="40" style="text-align:right;"><?php echo $this->_tpl_vars['d']['poundage']; ?>
</td>
                 <td  width="60" style="text-align:right;"><?php echo $this->_tpl_vars['d']['net_worth']; ?>
</td>                   
                 <!--<td  width="40" style="text-align:right;"><?php echo $this->_tpl_vars['d']['balance']; ?>
</td>-->
                 <td  width="64" style="text-align:right;"><?php echo $this->_tpl_vars['d']['paid_time']; ?>
</td>
                 <td  width="64" style="text-align:right;"><?php echo $this->_tpl_vars['d']['payment_methods_name']; ?>
</td>
                 </tr>
                 <?php endforeach; endif; unset($_from); ?>
                 <?php endif; ?>
                </tbody>
                </table>
                </td>
                <?php endif; ?>  
                
                
                
                
                <td>
                	<?php if ($this->_tpl_vars['dis']['cstown_order_id'] == 0): ?>
                         线下-支付
                    <?php elseif ($this->_tpl_vars['dis']['cstown_order_id'] != 0): ?>
                    	 在线-支付
                    <?php endif; ?> 
                </td>
                <td><?php echo $this->_tpl_vars['dis']['audit_type']; ?>
</td>
                <td>
					<?php if ($this->_tpl_vars['dis']['paid_status'] == 1): ?>
                         未付款 
                    <?php elseif ($this->_tpl_vars['dis']['paid_status'] == 2): ?>    
                         未完成
                    <?php elseif ($this->_tpl_vars['dis']['paid_status'] == 3): ?>     
                         已付款 
                    <?php elseif ($this->_tpl_vars['dis']['paid_status'] == 4): ?>     
                         退款中
                    <?php elseif ($this->_tpl_vars['dis']['paid_status'] == 5): ?>     
                         已退款
                    <?php elseif ($this->_tpl_vars['dis']['paid_status'] == 6): ?>
                         特殊审批通过    
                    <?php elseif ($this->_tpl_vars['dis']['paid_status'] == 7): ?>
                         部分退款                                                  
                    <?php endif; ?> 
                    <input type="hidden" id="paid_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['paid_status']; ?>
" />                
                </td>
                <td><?php echo $this->_tpl_vars['dis']['refund_price']; ?>
</td>           
                <!--<td><?php echo $this->_tpl_vars['dis']['financial_note']; ?>
</td>-->
                <td>
					<?php if ($this->_tpl_vars['dis']['delivery_completely'] == 1): ?>
                         未发货 
                    <?php elseif ($this->_tpl_vars['dis']['delivery_completely'] == 2): ?>    
                         未完成
                    <?php elseif ($this->_tpl_vars['dis']['delivery_completely'] == 3): ?>     
                         已发货                                                  
                    <?php endif; ?>
                    <input type="hidden" id="delivery_completely<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['delivery_completely']; ?>
" />                 
                </td>
                <td><?php echo $this->_tpl_vars['dis']['company_guidance']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['gongsi']; ?>
</td>                
                <td>
                <?php if ($this->_tpl_vars['user_hidden']['user_name'] == $this->_tpl_vars['dis']['saleman_name'] || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
<!--                    <?php if (( $this->_tpl_vars['dis']['paid_status'] == '3' && $this->_tpl_vars['dis']['audit_type'] == '' && $this->_tpl_vars['dis']['invoice_status'] == '1' ) || ( $this->_tpl_vars['dis']['paid_status'] == '3' && $this->_tpl_vars['dis']['audit_type'] == '先做货后付款' && $this->_tpl_vars['dis']['invoice_status'] == '3' ) || ( $this->_tpl_vars['dis']['audit_type'] == '先发货后付款' && $this->_tpl_vars['dis']['invoice_status'] == '3' ) || ( $this->_tpl_vars['dis']['paid_status'] == '3' && $this->_tpl_vars['dis']['audit_type'] == '部分付款后做货' && $this->_tpl_vars['dis']['invoice_status'] == '3' ) || ( $this->_tpl_vars['dis']['audit_type'] == '部分付款后发货' && $this->_tpl_vars['dis']['invoice_status'] == '3' ) || ( $this->_tpl_vars['dis']['audit_type'] == '免费重新做货' && $this->_tpl_vars['dis']['invoice_status'] == '3' )): ?>
                    <a title="发货列表" target="navTab" rel="stock_manage_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/deliver_list-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">编辑</a>

                    <?php endif; ?>-->
                    
                    <?php if ($this->_tpl_vars['user_hidden']['user_name'] == $this->_tpl_vars['dis']['saleman_name'] || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                        <?php if ($this->_tpl_vars['dis']['paid_status'] == '2' || $this->_tpl_vars['dis']['paid_status'] == '3'): ?>                
                            <a title="退款申请" class="btnRefund" target="dialog" rel="refund_application" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/refund_application-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html">退款申请</a>
                            <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                            <a title="撤销标款" class="btnReturn" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/payment_return-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html">撤销标款</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['dis']['paid_status'] != '3' && $this->_tpl_vars['dis']['invoice_status'] != '2'): ?>
     <a target="dialog" title="发票状态返回" rel="" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/return_back-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd"></a>  
     				<?php endif; ?>            
                </td>                
              </tr>
             <?php endif; ?>  
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
<script type="text/javascript" language="javascript">
$("#sd_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#sale_detail_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
$(document).ready(function(){
	//var check_arr = [];
	$("#sale_detail_invoice").click(function(){
			var check_arr = '';
			var invoice_status = '';
			var paid_status = '';
			var delivery_completely = '';
			var sd_saleman_name = '';
			var export_status = '';
			
			$("input[name='group_ids_sale_detail[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					invoice_status += $("#invoice_status_a" + $(this).val()).val();
					paid_status += $("#paid_status" + $(this).val()).val();
					delivery_completely += $("#delivery_completely" + $(this).val()).val();
					sd_saleman_name += $("#sd_saleman_name" + $(this).val()).val();
					export_status += $("#export_status" + $(this).val()).val();
					
				}else{
					check_arr += '|'+$(this).val();
					invoice_status += '|'+$("#invoice_status_a" + $(this).val()).val();
					paid_status += '|'+$("#paid_status" + $(this).val()).val();
					delivery_completely += '|'+$("#delivery_completely" + $(this).val()).val();
					sd_saleman_name += '|'+$("#sd_saleman_name" + $(this).val()).val();
					export_status += $("#export_status" + $(this).val()).val();
				}
			});						

/*			invoice_status=invoice_status.split("|");
			
            for(var i=0;i<invoice_status.length;i++){
                
				if(invoice_status[i]!='1'){
					var a = '1';
				    alert("只有无需审核的才可以返回！");break;
					
				}
			}*/

//			export_status=export_status.split("|");
//			
//            for(var i=0;i<export_status.length;i++){
//
//				if(paid_status[i]!='2'){
//					var a = '1';
//				    alert("销售明细下订单有已做货 ！");	break;			
//				}
//			}

			paid_status=paid_status.split("|");
			
            for(var i=0;i<paid_status.length;i++){

				if(paid_status[i]!='1'){
					var b = '1';
				    alert("必须未付款才可以返回！");	break;			
				}
			}
			
			delivery_completely=delivery_completely.split("|");
			
            for(var i=0;i<delivery_completely.length;i++){

				if(delivery_completely[i]!='1'){
					var c = '1';
				    alert("必须未发货才可以返回！");	break;			
				}
			}	
			
			sd_saleman_name=sd_saleman_name.split("|");
			
            for(var i=0;i<sd_saleman_name.length;i++){
				if(sd_saleman_name[i]){
					if(sd_saleman_name[i]!= $("#sd_ssaleman_id").val() && $("#sd_ssaleman_id").val() != 'admin'){
						var d = '1';
						alert("必须为本人信息,请重试！");	break;
					}
				}
			}	
								
			
			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择明细！');
			}else{
				if(!b && !c && !d){
					if(window.confirm('是否发票返回？')){
							$.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/invoice_status-'+p,//通过Ajax取数据的目标页面
								data:p,
								type:'get',//方法，还可以是"post"
								dataType:'text',//数据类型，还有其它的，详见jQuery手册
								success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
								{
									alert("发票返回成功！请手动刷新页面！");												
								}								
								
							});
					}else{
						return false;
					}
				}
				
			}
			
		});
		
		
		$("#create_invoice_china_1").click(function (){

			var check_arr = '';
			$("input[name='group_ids_invoice[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += '#'+$(this).val();	
				}
			});

           

			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				var patt = new RegExp('#');
                if(patt.test(check_arr)){
					alert('只能选择一条发票');
				}else{
					
					var check_arr = '';
					var saleman_name01 = '';
					$("input[name='group_ids_invoice[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
						if(check_arr == ''){
							check_arr += $(this).val();
							saleman_name01 += $("#saleman_name01" + $(this).val()).val();
						}else{
							check_arr += '|'+$(this).val();
							saleman_name01 += '|'+$("#saleman_name01" + $(this).val()).val();
						}
					});						
					
					saleman_name01=saleman_name01.split("|");
					
					for(var i=0;i<saleman_name01.length;i++){
		
						if(saleman_name01[i]){
							if(saleman_name01[i]!= $("#saleman_id").val() && $("#saleman_id").val() != 'admin'){
								var a = '1';
								alert("只能操作本人信息,请重试！");	break;
							}else{
								window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/create_invoice_china-'+p);
							}
						}
					}
			        
				}
			}	
		});
		
		//生成发票无图
		$("#s_create_no_image").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_sale_detail[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += '#'+$(this).val();
				}
			});
			
			//var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				
				var patt = new RegExp('#');
				
                if(patt.test(check_arr)){
					alert('只能选择一条发票');
				}else{
					
					
					var check_arr = '';
						var saleman_name01 = '';
						$("input[name='group_ids_sale_detail[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
							if(check_arr == ''){
								check_arr += $(this).val();
								saleman_name01 += $("#sd_saleman_name" + $(this).val()).val();
							}else{
								check_arr += '|'+$(this).val();
								saleman_name01 += '|'+$("#sd_saleman_name" + $(this).val()).val();
							}
						});						
						
						saleman_name01=saleman_name01.split("|");
					
						for(var i=0;i<saleman_name01.length;i++){
			
							if(saleman_name01[i]){
								if(saleman_name01[i]!= $("#sd_ssaleman_id").val() && $("#sd_ssaleman_id").val() != 'admin'){
									var a = '1';
									alert("只能操作本人信息,请重试！");	break;
								}else{
									$.ajax({
										url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/fp_duo',//通过Ajax取数据的目标页面
										data:{'id':check_arr},			
										type:'get',//方法，还可以是"post"
										dataType:'json',//数据类型，还有其它的，详见jQuery手册
										success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										{
											var p = 'ids-'+locals.id+'.html';
											if(locals.r == 1){
												window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/create_invoice_usa_no_image-'+p);
											}else if(locals.r == 3){
												window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/create_invoice_usa_no_image_materials-'+p);
											}else if(locals.r == 13){
												window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/create_invoice_Tshirt_no_image-'+p);
											}else{
												alert("客户信息不完整,不可生成发票！");
											}
										}
									});
									 
								}
							}
						}   
				}
			}	
		});			
		
		//生成发票
	   $("#s_create_invoice").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_sale_detail[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += '#'+$(this).val();
				}
			});
			
			

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				
				var patt = new RegExp('#');
				
                if(patt.test(check_arr)){
					alert('只能选择一条发票');
				}else{
					var check_arr = '';
						var saleman_name01 = '';
						$("input[name='group_ids_sale_detail[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
							if(check_arr == ''){
								check_arr += $(this).val();
								saleman_name01 += $("#sd_saleman_name" + $(this).val()).val();
							}else{
								check_arr += '|'+$(this).val();
								saleman_name01 += '|'+$("#sd_saleman_name" + $(this).val()).val();
							}
						});						
						
						saleman_name01=saleman_name01.split("|");
						
						for(var i=0;i<saleman_name01.length;i++){
			
							if(saleman_name01[i]){
								if(saleman_name01[i]!= $("#sd_ssaleman_id").val() && $("#sd_ssaleman_id").val() != 'admin'){
									var a = 'check_arr';
									alert("只能操作本人信息,请重试！");	break;
								}else{
									//alert(check_arr)
									$.ajax({
										url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/fp',//通过Ajax取数据的目标页面
										data:{'id':check_arr},			
										type:'get',//方法，还可以是"post"
										dataType:'json',//数据类型，还有其它的，详见jQuery手册
										success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										{
											var p = 'ids-'+locals.id+'.html';
											if(locals.r == 1){
												window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/create_invoice_usa-'+p);
											}else if(locals.r == 3){
												window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/create_invoice_usa_materials-'+p);
											}else if(locals.r == 13){
												window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/create_invoice_Tshirt-'+p);
											}else{
												alert("客户信息不完整,不可生成发票！");
											}
										}
									});
									
									 //window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/create_invoice_usa-'+p);
								}
							}
						}
				}
			}	
		});
		
		
});		
</script>