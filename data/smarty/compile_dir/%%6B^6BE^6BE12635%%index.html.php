<?php /* Smarty version 2.6.22, created on 2024-08-27 10:53:22
         compiled from wrong_product_order/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/wrong_product_order/index">
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
/wrong_product_order/index" method="get">
    <input type="hidden" name="session_name" id="session_name" value="<?php echo $this->_tpl_vars['session_name']; ?>
" />
	<div class="searchBar">
		<ul class="searchContent">
			<?php if ($this->_tpl_vars['group_id'] != '53' || $this->_tpl_vars['group_id'] != '68'): ?>
            <li style="width:15%;">
				<label style="width:70px;">业务员：</label>
				<select class="combox" name="saleman_user_id">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['saleman_user_id']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <?php endif; ?>
            <li style="width:22%;">
				<label style="width:40px">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
            </li>
            <li style="width:15%;">
				<label style="width:50px;">订单号：</label>
				<input type="text" name="order_number" style="width:70px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
                
			</li>
             <li style="width:15%;">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            <li style="width: 15%;">
				<label style="width:60px;">处理状态：</label>
				<select class="combox" name="status">
                	<option value="">全部</option>
                	<option value="2" <?php if ($this->_tpl_vars['status'] == '2'): ?>selected="selected"<?php endif; ?>>错误</option>
                    <option value="3"<?php if ($this->_tpl_vars['status'] == '3'): ?>selected="selected"<?php endif; ?>>审核通过</option>
                    <option value="4"<?php if ($this->_tpl_vars['status'] == '4'): ?>selected="selected"<?php endif; ?>>已修改</option>
                </select>			
            </li>
<br>
           <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/xls_export" method="post" id="product_order_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <?php if ($this->_tpl_vars['group_id'] == '5' || $this->_tpl_vars['group_id'] == '62' || $this->_tpl_vars['group_id'] == '63'): ?>
       	<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/wrong_product_order/check/" target="selectedTodo" id="del" rel="group_ids_product_order[]" postType="string" title="确定通过审核？"><span>审核通过</span></a></li>
        <?php endif; ?>
         
        <li class="line">line</li> 
        <?php if ($this->_tpl_vars['group_id'] == '5' || $this->_tpl_vars['group_id'] == '53' || $this->_tpl_vars['group_id'] == '50' || $this->_tpl_vars['group_id'] == '68' || $this->_tpl_vars['group_id'] == '56' || $this->_tpl_vars['group_id'] == '57'): ?>   
		<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/wrong_product_order/update/" target="selectedTodo" id="del" rel="group_ids_product_order[]" postType="string" title="确定提交修改？"><span>提交修改</span></a></li>  	
        <?php endif; ?>
		</ul>
	</div>
	<table class="table" width="1300" layoutH="125">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids_product_order[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="4%">处理状态</th>
                <th width="8%">做货时间</th>
                <th width="4%">业务员</th>
                <th width="4%">客户代码</th>                
                <th width="5%">订单号</th>
                <th width="3%">返单号</th>
                <th width="3%">设计编号</th>
               <!-- <th width="5%">成本差异</th>
                <th width="5%">报价差异</th>-->
                <th width="6%">错误位置</th>
                <th width="6%">错误原因</th>
                <th width="4%">负责人</th>
                <th width="3%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['wrong_order']): ?>
			 <?php $_from = $this->_tpl_vars['wrong_order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['dis']['id']; ?>
">
                <td><input name="group_ids_product_order[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['wrong']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['new_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['return_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <!--<td><?php echo $this->_tpl_vars['dis']['cost_difference']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['price_difference']; ?>
</td>-->
                <td><?php echo $this->_tpl_vars['dis']['wrong_area']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['note_wrong']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['name']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['wrong'] != "审核通过"): ?>
                
                    <?php if ($this->_tpl_vars['dis']['quotation_category_id'] == '5' && $this->_tpl_vars['dis']['quotation_category'] == '2'): ?> 
                        <td><a title="编辑" target="navTab" rel="product_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/wrong_product_order/stock_edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a></td>
                    <?php elseif (( $this->_tpl_vars['dis']['quotation_category_id'] == '3' && $this->_tpl_vars['dis']['quotation_category'] == '2' ) || $this->_tpl_vars['dis']['cstown_order_id'] != 0): ?>
                        <td><a title="编辑" target="navTab" rel="product_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/wrong_product_order/yousheji_edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a></td>                    
                    <?php else: ?>

                        <td><a title="编辑" target="navTab" rel="product_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/wrong_product_order/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a></td> 
                    <?php endif; ?>
                        
                <?php else: ?>
                <td></td>
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

$("#po_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			
			alert("即将导出选中数据");
			$("#product_order_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});


$(document).ready(function()
{
	
	
	$("#product_order_invoice").click(function (){
			//var touid = $("#newtouid").val();
			var check_arr = '';
			var saleman_name = '';
			var customer_code = '';
			var invoice_status = '';
			var exchange_rate_id = '';
			$("input[name='group_ids_product_order[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					saleman_name += $("#saleman_name" + $(this).val()).val();
					customer_code += $("#customer_code" + $(this).val()).val();
					invoice_status += $("#invoice_status" + $(this).val()).val();
					exchange_rate_id += $("#exchange_rate_id" + $(this).val()).val();
				}else{
					check_arr += '|'+$(this).val();			
					saleman_name += '|'+$("#saleman_name" + $(this).val()).val();
					customer_code += '|'+$("#customer_code" + $(this).val()).val();
					invoice_status += '|'+$("#invoice_status" + $(this).val()).val();
					exchange_rate_id += '|'+$("#exchange_rate_id" + $(this).val()).val();
				}
			});

			saleman_name=saleman_name.split("|");
            for(var i=0;i<saleman_name.length;i++){

				if(saleman_name[0]==saleman_name[i]){
					
				}else{
					var a = '1';
				    alert("业务员必须相同");break;
				}
			}
			
			customer_code=customer_code.split("|");	
            for(var i=0;i<customer_code.length;i++){

				if(customer_code[0]==customer_code[i]){
					
				}else{
					var b = '1';
				    alert("客户代码必须相同");break;
				}
			}			
			
			invoice_status=invoice_status.split("|");
				
            for(var i=0;i<invoice_status.length;i++){

				if(invoice_status[i]!='1'){
					
				}else{
					var c = '1';
				    alert("发票必须为未生成");break;
				}
			}
			
			exchange_rate_id=exchange_rate_id.split("|");	
            for(var i=0;i<exchange_rate_id.length;i++){

				if(exchange_rate_id[0]==exchange_rate_id[i]){
					
				}else{
					var d = '1';
				    alert("货币类型不统一");break;
				}
			}						

			var p = 'ids-'+check_arr+'.html';
			
			if($("#session_name").val() != 'admin'){
				//判断是否操作的是登录用户数据
				var check_arr1 = '';
				var invoice_name = '';
				var session_name = $("#session_name").val();
				$("input[name='group_ids_product_order[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
					if(check_arr1 == ''){
						check_arr1 += $(this).val();
						invoice_name += $("#saleman_name" + $(this).val()).val();;
						
					}else{
						
						check_arr1 += '|'+$(this).val();
						invoice_name += '|'+$("#saleman_name" + $(this).val()).val();
					}
				});						
	
				invoice_name=invoice_name.split("|");
				
				
				for(var i=0;i<invoice_name.length;i++){
					
					if(invoice_name[i]!= session_name){
						var e = '1';
						alert("只可以生成本人发票！");break;
						
					}
				}
			
			
			}
			var p = 'ids-'+check_arr+'.html';
			
			
			
			if(check_arr =='' || check_arr1 ==''){
				alert('必须选择客户');
			}else{
				if(!a && !b && !c && !d && !e){					
					
					if(window.confirm('是否生成发票？')){
							$.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/invoice_status-'+p,//通过Ajax取数据的目标页面
								data:p,
								type:'get',//方法，还可以是"post"
								dataType:'text',//数据类型，还有其它的，详见jQuery手册
								success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
								{
									alert("发票返111回成功！请手动刷新页面！");												
								}								
								
							});
					}else{
						return false;
					}
					
								   	
				}
				
			}
		});	
});
</script>