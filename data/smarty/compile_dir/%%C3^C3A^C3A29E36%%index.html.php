<?php /* Smarty version 2.6.22, created on 2015-12-03 11:26:41
         compiled from no_pay_no_goods/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/no_pay_no_goods/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="stock_code" value="<?php echo $this->_tpl_vars['stock_code']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/no_pay_no_goods/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
<!--        
        <li style="width:24%;">
            <label style="width:60px;">已付总额：</label>
            <input type="text" name="total_paid_usd" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_paid_usd']; ?>
" />
            <input type="text" name="total_paid_eur" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_paid_eur']; ?>
" />
            <input type="text" name="total_paid_rmb" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_paid_rmb']; ?>
" />
            
        </li>-->
        <li style="width:24%;">
            <label style="width:60px;">未付总额：</label>
            <input type="text" name="total_unpaid_usd" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_unpaid_usd']; ?>
" />
            <input type="text" name="total_unpaid_eur" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_unpaid_eur']; ?>
" />
            <input type="text" name="total_unpaid_rmb" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_unpaid_rmb']; ?>
" />
            
        </li>
        
<!--        <li style="width:25%;">
            <label style="width:60px;">销售总额：</label>
            <input type="text" name="total_sales_usd" style="width:70px; float:left;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_sales_usd']; ?>
" />
            <input type="text" name="total_sales_eur" style="width:70px; float:left;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_sales_eur']; ?>
" />
            <input type="text" name="total_sales_rmb" style="width:70px; float:left;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_sales_rmb']; ?>
" />
            <label style="width: auto; float:left;">(含特殊审批)</label>
            
        </li>-->
        <li style="width:20%;">
				<label style="width:60px;">提交时间：</label>
				<input type="text" name="start_time" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" class="date" readonly="true" />
                <font style="line-height:22px;">-</font>
                <input type="text" name="end_time" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" class="date" readonly="true"/>
			</li>
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
        		<li style="width:13%;">
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
         	 <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
                <li style="width:13%;">
                    <label style="width:60px;">业务分组：</label>
                    <select class="combox" name="little_group">
                    <option value="">全部</option>
                    <option value="A" <?php if ($this->_tpl_vars['little_group'] == 'A'): ?> selected <?php endif; ?> > 销售1部 </option>
                    <option value="B" <?php if ($this->_tpl_vars['little_group'] == 'B'): ?> selected <?php endif; ?> > 销售2部 </option>
                    <option value="C" <?php if ($this->_tpl_vars['little_group'] == 'C'): ?> selected <?php endif; ?> > 销售3部 </option>
                    <option value="D" <?php if ($this->_tpl_vars['little_group'] == 'D'): ?> selected <?php endif; ?> > 销售4部 </option>
                    </select>
                </li>
            <?php endif; ?>
             <li style="width:15%;">
				<label style="width:50px;">发票号：</label>
				<input type="text" name="invoice_number" style="width:70px;" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
" />
             </li>
             <li style="width:10%;">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:30px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            
            <li style="float:right; margin-left:10px; width:100px;"><a class="button" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/search/" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li> 
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>

        
            
		</ul>

	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/goods_no_pay/sd_xls_export" method="post" id="sale_detail_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">

		</ul>
	</div>
	<table class="table" width="1600" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids_sale_detail[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="6%">时间</th>
                <th width="4%">业务员</th>
                <th width="5%">客户代码</th>
                <th width="7%">客户名</th>
                <!--<th width="5%">发票状态</th>-->
                <th width="6%">发票号</th>
                 <?php if ($this->_tpl_vars['session_id'] != 65 && $this->_tpl_vars['session_id'] != 66): ?>
                <th width="6%">总价</th>
                <th width="6%">应付金额</th>
                <?php else: ?>
                <?php endif; ?>
                <th width="7%">申请内容</th>
                <th width="5%">付款状态</th>
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
                <td><?php echo $this->_tpl_vars['dis']['invoice_number']; ?>
</td>
                 <?php if ($this->_tpl_vars['session_id'] != 65 && $this->_tpl_vars['session_id'] != 66): ?>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['due']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['amount_payable']; ?>
</td>
               
                <?php endif; ?>

                
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
                    <?php endif; ?> 
                    <input type="hidden" id="paid_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['paid_status']; ?>
" />                
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
		
		
});		
</script>