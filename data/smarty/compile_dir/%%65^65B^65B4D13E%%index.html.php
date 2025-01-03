<?php /* Smarty version 2.6.22, created on 2016-05-20 13:28:12
         compiled from cn_invoice/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/index">
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
/cn_invoice/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            <li style="width:15%;">
				<label style="width:70px;">业务员：</label>
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
            <li style="width:23%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
			</li>
            <li style="width:17%;">
				<label>发票状态：</label>
				<select class="combox" name="order_status">
                <option value="">全部</option>
                <option value="5" <?php if ($this->_tpl_vars['order_status'] == '5'): ?>selected="selected"<?php endif; ?>>空</option>
              	<option value="1" <?php if ($this->_tpl_vars['order_status'] == '1'): ?>selected="selected"<?php endif; ?>>无需审核</option>
                <option value="2" <?php if ($this->_tpl_vars['order_status'] == '2'): ?>selected="selected"<?php endif; ?>>审核中</option>
                <option value="3" <?php if ($this->_tpl_vars['order_status'] == '3'): ?>selected="selected"<?php endif; ?>>审核通过</option>
                <option value="4" <?php if ($this->_tpl_vars['order_status'] == '4'): ?>selected="selected"<?php endif; ?>>驳回</option>
                </select>
			</li>
                <li style="width:20%;">
				<label style="width:120px;">是否添加到销售明细：</label>
				<select class="combox" name="sales_status">
                <option value="">全部</option>
              	<option value="2" <?php if ($this->_tpl_vars['sales_status'] == '2'): ?>selected="selected"<?php endif; ?>>是</option>
                <option value="1" <?php if ($this->_tpl_vars['sales_status'] == '1'): ?>selected="selected"<?php endif; ?>>否</option>
                </select>
			</li>
            <li style="width:20%;">
				<label>是否享受折扣：</label>
				<select class="combox" name="rebate">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['rebate'] == '1'): ?>selected="selected"<?php endif; ?>>是</option>
                <option value="2" <?php if ($this->_tpl_vars['rebate'] == '2'): ?>selected="selected"<?php endif; ?>>否</option>
                </select>
			</li>
            <li style="width:15%;">
				<label style="width:70px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
<li style="width:23%;">
				<label style="width:50px;">发票号：</label>
				<input type="text" name="invoice_number" style="width:70px;" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
" />
                
			</li>
<li style="width:17%;">
				<label style="width:60px;">订单号：</label>
				<input type="text" name="order_number" style="width:70px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
                
			</li>
<li style="width:20%;">
				<label style="width:60px;">总计：</label>
				<input type="text" name="total" style="width:70px;" value="<?php echo $this->_tpl_vars['total']; ?>
" />
                
			</li>
<li style="width:20%;">
				<label style="width:60px;">应付款：</label>
				<input type="text" name="due" style="width:70px;" value="<?php echo $this->_tpl_vars['due']; ?>
" />
                
			</li>
<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
		
		
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/xls_export" method="post" id="invoice_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			
             <!--  <li><a class="delete" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/del/" target="selectedTodo" id="del" rel="group_ids_invoice[]" postType="string"><span>删除</span></a></li>-->
             
              <li class="line">line</li>
            <!--  <li><a class="add" id="sale_detail" rel="*" href="#"><span>添加到销售明细</span></a></li>-->
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/bb/" target="selectedTodo" id="del" rel="group_ids_invoice[]" postType="string" title="确定生成销售明细?"><span>添加到销售明细</span></a></li>            
             <li class="line">line</li>
            <!-- <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
             <li><a class="icon" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/change/" ><span>发票成本批量修改</span></a></li>
             <li class="line">line</li>
             <?php endif; ?>-->
            <!--  <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/special_invoice_approval/" target="dialog" rel="special_invoice_approval"><span>特殊发票审批</span></a></li>-->
			 <!--<li><a class="add" href="#" id="create_invoice_china_1"><span>生成中国发票</span></a></li>
             <li class="line">line</li>-->
             <!--<li><a class="add" href="#" id="create_invoice_usa_1" ><span>生成发票</span></a></li>
             <li class="line">line</li>-->
             <?php if ($this->_tpl_vars['user_hidden']['user_name'] == $this->_tpl_vars['dis']['saleman_name'] || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
             <li><a class="icon" href="#" id="invoice_ex" ><span>导出EXCEL</span></a></li>
          	 <li class="line">line</li>
             <?php endif; ?>
             <!--<li><a class="icon" href="#" id="invoice_csv"><span>导出CSV</span></a></li> 
             
          	 <li class="line">line</li>
             
             <li><a class="add" href="#" id="create_invoice_usa_1_no_image"><span>生成发票无图片(适用超过20条订单的发票)</span></a></li>
               <li class="line">line</li> 
              <li><a class="add" href="#" id="create_invoice_review"><span>客户发票回顾</span></a></li>-->
            <!-- <li class="line">line</li> 
			 <li><a class="edit" title="同步数据?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/invoice_old/"><span>同步数据</span></a></li>
             <li class="line">line</li>-->
</a>               
		</ul>
	</div>   
	<table class="table" width="1500" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids_invoice[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="6%">时间</th>
                <th width="4%">业务员</th>
                <th width="6%">申请内容</th>
                <th width="4%">发票状态</th>
                <th width="6%">销售明细</th>
                <th width="8%">客户名</th>
                <th width="4%">客户代码</th>
                <th width="8%">发票号</th>
                <th width="14%">订单号</th>
                <th width="4%">版费</th>
                <th width="5%">小计(含版费)</th>
                <th width="4%">运费</th>               
                <th width="4%">总计</th>
                <th width="4%">折扣</th>
                <th width="4%">应付款</th>
                <th width="7%">客户快递账号</th>
                <th width="10%">操作</th>
			</tr>
		</thead>
        <input type="hidden" value="<?php echo $this->_tpl_vars['session_user_name']; ?>
" id="saleman_id" />
        <input type="hidden" value="" id="csv_id" name="csv_id" />
		<tbody>
         
        <?php if ($this->_tpl_vars['invoice_list']): ?>
			 <?php $_from = $this->_tpl_vars['invoice_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids_invoice[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <input type="hidden" name="saleman_name01" id="saleman_name01<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
" />
                <td>
                <?php if ($this->_tpl_vars['dis']['audit_type'] == '1'): ?>
                     先做货后付款
                <?php elseif ($this->_tpl_vars['dis']['audit_type'] == '2'): ?>
                     先发货后付款
                <?php elseif ($this->_tpl_vars['dis']['audit_type'] == '3'): ?>
                     部分付款后做货
                <?php elseif ($this->_tpl_vars['dis']['audit_type'] == '4'): ?>
                     部分付款后发货
                <?php elseif ($this->_tpl_vars['dis']['audit_type'] == '5'): ?>
                     免费重新做货
                <?php else: ?>
                
                <?php endif; ?>
                </td>
                <td>
                   <?php if ($this->_tpl_vars['dis']['status'] == 5): ?>
                    
                   <?php elseif ($this->_tpl_vars['dis']['status'] == 1): ?>
                       无需审核
                   <?php elseif ($this->_tpl_vars['dis']['status'] == 2): ?>
                       审核中
                   <?php elseif ($this->_tpl_vars['dis']['status'] == 3): ?> 
                       审核通过
                   <?php elseif ($this->_tpl_vars['dis']['status'] == 4): ?>  
                       驳回
                   <?php endif; ?>
                </td>
                <td>
                <?php if ($this->_tpl_vars['dis']['sales_status'] == '1'): ?>
                    未加入明细
                <?php else: ?>
                    已加入明细
                <?php endif; ?>
                <input type="hidden" name="sale_detail" id="sale_detail<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['sales_status']; ?>
" />
                </td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['invoice_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['order_n']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['edition_price']; ?>
</td>                
                <td><?php echo $this->_tpl_vars['dis']['subtotal']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['freight'] != ""): ?>
                     <?php echo $this->_tpl_vars['dis']['one']; ?>
<?php echo $this->_tpl_vars['dis']['freight']; ?>

                <?php else: ?>    
                     <?php echo $this->_tpl_vars['dis']['freight']; ?>

                <?php endif; ?>       
                </td>

                <td><?php echo $this->_tpl_vars['dis']['total']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['rebate'] == ""): ?>
                <td>
           
                    <?php echo $this->_tpl_vars['dis']['one']; ?>
0
              
                </td>
                <?php else: ?>
                <td>
           
                    <?php echo $this->_tpl_vars['dis']['one']; ?>
<?php echo $this->_tpl_vars['dis']['rebate']; ?>
 
              
                </td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['due']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['shipping_number']; ?>
</td>
		        <td>
                <?php if ($this->_tpl_vars['user_hidden']['user_name'] == $this->_tpl_vars['dis']['saleman_name'] || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                    <?php if ($this->_tpl_vars['dis']['sales_status'] == '1' && $this->_tpl_vars['dis']['status'] != '2'): ?>
                        <a target="dialog" title="添加运费" rel="" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/add_freight-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd"></a>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['dis']['sales_status'] == '1'): ?>
<!--                   		<a target="dialog" title="添加折扣" rel="" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/add_discount-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd"></a>
-->                    <?php endif; ?>  
                    <?php if ($this->_tpl_vars['dis']['sales_status'] == '1' && $this->_tpl_vars['dis']['status'] != '2' && $this->_tpl_vars['dis']['status'] != '3'): ?>
                        <a target="dialog" title="特殊发票审核" rel="" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/special_invoice_approval-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit"></a>
                    <?php endif; ?>              
                    <?php if ($this->_tpl_vars['dis']['sales_status'] == '1' && $this->_tpl_vars['dis']['status'] != '2'): ?>
                        <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>
                    <?php endif; ?>                   
                <?php endif; ?>
                </td>
              </tr>
             <?php endforeach; endif; unset($_from); ?>
              <?php endif; ?>
		</tbody>
       
	</table>
	<!--<div class="panelBar">
		<div class="pages">
			
			<span>共<?php echo $this->_tpl_vars['total_count']; ?>
条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>

	</div>
-->    
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


$("#invoice_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			$("#csv_id").val('');
			alert("即将导出选中数据");
			$("#invoice_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});




$(document).ready(function(){
	$("#sale_detail").click(function(){
			var check_arr = '';
			var sale_detail = '';
			var saleman_name01 = '';
			$("input[name='group_ids_invoice[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					sale_detail += $("#sale_detail" + $(this).val()).val();
					saleman_name01 += $("#saleman_name01" + $(this).val()).val();
				}else{
					check_arr += '|'+$(this).val();
					sale_detail += '|'+$("#sale_detail" + $(this).val()).val();
					saleman_name01 += '|'+$("#saleman_name01" + $(this).val()).val();
				}
			});						
			
			sale_detail=sale_detail.split("|");
			
            for(var i=0;i<sale_detail.length;i++){

				if(sale_detail[i]=='2'){
					var a = '1';
				    alert("不能重复加入销售明细！");	break;			
				}
			}					
			
			saleman_name01=saleman_name01.split("|");
			
            for(var i=0;i<saleman_name01.length;i++){
				if(saleman_name01[i]){
					if(saleman_name01[i]!= $("#saleman_id").val() && $("#saleman_id").val() != 'admin'){
						var a = '1';
						alert("只能操作本人信息,请重试！");	break;
					}
				}
			}
			
			
			
			
			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				if(!a){
					if(window.confirm('是否添加到销售明细？')){
							$.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/sale_detail-'+p,//通过Ajax取数据的目标页面
								data:p,
								type:'get',//方法，还可以是"post"
								dataType:'text',//数据类型，还有其它的，详见jQuery手册
								success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
								{
									alert("生成销售明细成功！请手动刷新页面！");
								}								
								
							});
					}else{
						return false;
					}
				}
				
			}
			
		});
		
$("#invoice_csv").click(function (){
		//var touid = $("#newtouid").val();
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
					alert('只能选择一条信息');
				}else{
					$("#csv_id").val('1');
				   $("#invoice_export").submit();
					
				}
			}
		 });
});		
</script>
<script language="javascript">

$("#excel").click(function (){
	if($("input[name='group_ids_invoice[]']").is(":checked")){
		$("#quotation_delete").submit();
	}else{
		alert("请选择导出的数据");
	}
});

$(document).ready(function()
{	
 $("#create_invoice_review").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_invoice[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += '|'+$(this).val();
				}
			});
			
			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				  $.ajax({
					  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/fp_review',//通过Ajax取数据的目标页面
					  data:{'id':check_arr},			
					  type:'get',//方法，还可以是"post"
					  dataType:'json',//数据类型，还有其它的，详见jQuery手册
					  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					  {
						  if(locals == 1){
											
	                     window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/create_invoice_usa_review-'+p);
						  }else{
							  alert("客户代码不统一！");
						  }
										}
				  });
				
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
/cn_invoice/create_invoice_china-'+p);
							}
						}
					}
					
					
					
			        
				}
			}	
		});
		
	   $("#create_invoice_usa_1_no_image").click(function (){
		//var touid = $("#newtouid").val();
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
									$.ajax({
										url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/fp_duo',//通过Ajax取数据的目标页面
										data:{'id':check_arr},			
										type:'get',//方法，还可以是"post"
										dataType:'json',//数据类型，还有其它的，详见jQuery手册
										success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										{
											if(locals == 1){
												window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/create_invoice_usa_no_image-'+p);
											}else if(locals == 3){
												window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/create_invoice_usa_no_image_materials-'+p);
											}else if(locals == 13){
												window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/create_invoice_Tshirt_no_image-'+p);
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
		
	   $("#create_invoice_usa_1").click(function (){
		//var touid = $("#newtouid").val();
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
									var a = 'check_arr';
									alert("只能操作本人信息,请重试！");	break;
								}else{
									
									$.ajax({
										url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/fp',//通过Ajax取数据的目标页面
										data:{'id':check_arr},			
										type:'get',//方法，还可以是"post"
										dataType:'json',//数据类型，还有其它的，详见jQuery手册
										success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										{
											if(locals == 1){
												window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/create_invoice_usa-'+p);
											}else if(locals == 3){
												window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/create_invoice_usa_materials-'+p);
											}else if(locals == 13){
												window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/create_invoice_Tshirt-'+p);
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
		
		
		function check_back(data)
		{
			if(data.error==1)
			{
				//$("#dialog").css("display","none");
				alert("失败");
			}
			else
			{
				
				//$("#dialog").css("display","none");
				navTabPageBreak();
				//window.location = "<?php echo $this->_tpl_vars['__ROOT__']; ?>
/#newcustomer";
			}
		}
</script> 