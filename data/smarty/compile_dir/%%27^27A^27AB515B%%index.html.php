<?php /* Smarty version 2.6.22, created on 2023-08-24 14:38:48
         compiled from create_quotation_invoice/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/index">
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
/create_quotation_invoice/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            <li style="width:15%;">
				<label style="width:70px;">业务员：</label>
				<select class="combox" name="sale_user">
                <option value="">请选择</option>
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
            <li style="width:25%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="time_start" value="<?php echo $this->_tpl_vars['time_start']; ?>
" class="date" readonly="true" style="width:70px"/>-<input type="text" name="time_end" style="width:70px" value="<?php echo $this->_tpl_vars['time_end']; ?>
" class="date" readonly="true"/>
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">客户名：</label>
				<input type="text" name="customer_name" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
                
			</li>
            <li style="width:20%;">
				<label style="width:70px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">设计名称：</label>
				<input type="text" name="design_pic_name" style="width:70px;" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" />
                
			</li>
            <li style="width:20%;">
				<label style="width:70px;">报价编号：</label>
				<input type="text" name="quotation_code" style="width:110px;" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" /> 
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/xls_export1" method="post" id="quotation_delete">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			
			
			<!--<li class="line">line</li>
			 <li><a class="add" onClick="window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/create_quotation/');" rel="group_ids[]"><span>生成报价单</span></a></li>
             <li><a class="add" href="#" id="create_quotation"><span>生成报价单</span></a></li>
             <li class="line">line</li>
             <li><a class="add" href="#" id="create_quotation_image"><span>生成报价单（有图）</span></a></li>
             <li class="line">line</li>-->
            <!-- <li><a class="add" href="#" id="create_invoice_china"><span>生成形式发票（中国）</span></a></li>
             <li class="line">line</li>-->
             <li><a class="add" href="#" id="create_invoice_usa"><span>生成形式发票</span></a></li>
             <li class="line">line</li>
             <li><a class="add" href="#" id="create_invoice_usa_noimage"><span>生成形式发票（无图）</span></a></li>
             <li class="line">line</li>    
                <?php if ($this->_tpl_vars['user_id'] == '1'): ?>
              <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/update_design_customer" target="ajaxTodo" rel="page1" postType="string"   title="确定更新设计客户?" ><span>更新设计客户</span></a></li>         
             <?php endif; ?>
             <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
             <li><a class="icon" href="#" id="get_new_excel" ><span>导出EXCEL</span></a></li>
             <li class="line">line</li>
             <?php endif; ?>
		</ul>
	</div>
	<table class="table" width="1600" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids_cqi[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="4%">时间</th>
                <th width="3%">业务员</th>
                <th width="3%">报价类型</th>
                <th width="3%">客户代码</th>
                <th width="8%">客户名</th>
                <th width="8%">公司</th>
                <th width="8%">报价编号</th>
                <th width="4%">名称</th>
                 <th width="4%">烫图尺寸</th>
               <th width="15%" colspan="4">名称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||颜色&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||尺寸</td>
               
                <th width="3%">报价</th>
                <th width="2%">版费</th>
                <th width="3%">合计</th>
                <th width="4%">操作</th>
			</tr>
		</thead>
		<tbody>
         <?php if ($this->_tpl_vars['stock_manage']): ?>
			 <?php $_from = $this->_tpl_vars['stock_manage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids_cqi[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
              
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_date']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['quotation_category'] == '1' || $this->_tpl_vars['dis']['quotation_category'] == '2'): ?>
                 <td>烫图报价</td>
                
           <?php elseif ($this->_tpl_vars['dis']['quotation_category'] == '3'): ?>
           <td>材料报价</td>
         
            <?php elseif ($this->_tpl_vars['dis']['quotation_category'] == '4'): ?>
             <td>外发报价</td>
         
           <?php elseif ($this->_tpl_vars['dis']['quotation_category'] == '5' || $this->_tpl_vars['dis']['quotation_category'] == '6'): ?>
             <td>cdr报价</td>
           <?php elseif ($this->_tpl_vars['dis']['quotation_category'] == '7' || $this->_tpl_vars['dis']['quotation_category'] == '8'): ?>
             <td>模板报价</td>
           <?php elseif ($this->_tpl_vars['dis']['quotation_category'] == '13'): ?>
             <td>T恤直喷报价</td>
           <?php else: ?>
           <td></td>
           <?php endif; ?>
           
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_pic_name']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['quotation_category'] == '3' || $this->_tpl_vars['dis']['quotation_category'] == '6'): ?>
                	<td></td>
                <?php elseif ($this->_tpl_vars['dis']['quotation_category'] == '13'): ?>
            		<td>T恤直喷报价</td>
                <?php else: ?>
               <?php if (isset ( $this->_tpl_vars['dis']['cm_w1'] )): ?>
                    <td><?php echo $this->_tpl_vars['dis']['cm_w1']; ?>
*<?php echo $this->_tpl_vars['dis']['cm_h1']; ?>
cm</td>
                <?php else: ?>
                    <td><?php echo $this->_tpl_vars['dis']['cm_w']; ?>
*<?php echo $this->_tpl_vars['dis']['cm_h']; ?>
cm</td>
                <?php endif; ?> 
                <?php endif; ?>
               
                <td colspan="4">
                <table class="table" width="120">
                <tbody>
               	<?php if ($this->_tpl_vars['dis']['quotation_category'] == '13'): ?>
                	<?php $_from = $this->_tpl_vars['dis']['materils']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                     <tr>
                     <td width="130"><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
                     <td width="70"><?php echo $this->_tpl_vars['d']['color']; ?>
</td>
                     <td width="50"><?php echo $this->_tpl_vars['d']['size']; ?>
</td>
                     <?php if ($this->_tpl_vars['d']['min_order'] != ""): ?>
                     <td width="30"><?php echo $this->_tpl_vars['d']['min_order']; ?>
</td>
                     <?php else: ?>
                     <td>1</td>
                      <?php endif; ?> 
                     <td ></td>
                     </tr>
                 	<?php endforeach; endif; unset($_from); ?>
                <?php else: ?>	
                 <?php $_from = $this->_tpl_vars['dis']['materils']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                
                     <tr>
                   
                     <td width="130"><?php echo $this->_tpl_vars['d']['material_name']; ?>
</td>
                     <td width="70"><?php echo $this->_tpl_vars['d']['material_color']; ?>
</td>
                     
                     <td width="50"><?php echo $this->_tpl_vars['d']['material_size']; ?>
</td>
                     <!--<?php if ($this->_tpl_vars['d']['min_order'] != ""): ?>
                     <td width="30"><?php echo $this->_tpl_vars['d']['min_order']; ?>
</td>
                     <?php else: ?>
                     <td>1</td>
                      <?php endif; ?> 
                     <td ></td>-->
                     </tr>
                 <?php endforeach; endif; unset($_from); ?>
                 <?php endif; ?>
                </tbody>
                </table>
               </td>
              
 
                         
                <td><?php echo $this->_tpl_vars['dis']['final_quote']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['version']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['final_quote_all']; ?>
</td>
                <td><a title="编辑" target="navTab" rel="stock_manage_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                
                   <?php if ($this->_tpl_vars['dis']['quotation_category'] == '1' || $this->_tpl_vars['dis']['quotation_category'] == '2'): ?>
                    <a title="阶梯报价(有图)" target="navTab" rel="jietibaojia" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/jietibaojia-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">阶梯报价(有图)</a>
                    <a title="阶梯报价(无图)" target="navTab" rel="jietibaojia" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/jietibaojia_no-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">阶梯报价(无图)</a>
                 
                   <?php endif; ?>
                    
                 
                </td>
               
                <input type="hidden" name="exchange_rate_id[]" id="exchange_rate_id<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['exchange_rate_id']; ?>
" />
                <input type="hidden" name="customer_code[]" id="customer_code<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['customer_code']; ?>
" />
          
       
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
<script language="javascript">

$("#get_new_excel").click(function (){
	if($("input[name='group_ids_cqi[]']").is(":checked")){
		$("#quotation_delete").submit();
	}else{
		alert("请选择导出的数据");
	}
});

$(document).ready(function()
{	
	   $("#create_quotation").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			var exchange_rate_id = '';
			var customer_code = '';
			$("input[name='group_ids_cqi[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					exchange_rate_id += $("#exchange_rate_id" + $(this).val()).val();
					customer_code += $("#customer_code" + $(this).val()).val();
				}else{
					check_arr += '|'+$(this).val();
					exchange_rate_id += '|'+$("#exchange_rate_id" + $(this).val()).val();
					customer_code += '|'+$("#customer_code" + $(this).val()).val();
				}
			});
			
			exchange_rate_id=exchange_rate_id.split("|");	
            for(var i=0;i<exchange_rate_id.length;i++){

				if(exchange_rate_id[0]==exchange_rate_id[i]){
					
				}else{
					var d = '1';
				    alert("货币类型不统一");break;
				}
			}
			
			customer_code=customer_code.split("|");	
            for(var i=0;i<customer_code.length;i++){

				if(customer_code[0]==customer_code[i]){
					
				}else{
					var c = '1';
				    alert("必须统一客户名");break;
				}
			}						
			
			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				 if(!d && !c){		
	                 window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/create_quotation-'+p);
				 }
			}	
		});
		
	   $("#create_quotation_image").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			var exchange_rate_id = '';
			var customer_code = '';
			$("input[name='group_ids_cqi[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					exchange_rate_id += $("#exchange_rate_id" + $(this).val()).val();
					customer_code += $("#customer_code" + $(this).val()).val();
				}else{
					check_arr += '|'+$(this).val();
					exchange_rate_id += '|'+$("#exchange_rate_id" + $(this).val()).val();
					customer_code += '|'+$("#customer_code" + $(this).val()).val();
				}
			});
			
			exchange_rate_id=exchange_rate_id.split("|");	
            for(var i=0;i<exchange_rate_id.length;i++){

				if(exchange_rate_id[0]==exchange_rate_id[i]){
					
				}else{
					var d = '1';
				    alert("货币类型不统一");break;
				}
			}
			
			customer_code=customer_code.split("|");	
            for(var i=0;i<customer_code.length;i++){

				if(customer_code[0]==customer_code[i]){
					
				}else{
					var c = '1';
				    alert("必须统一客户名");break;
				}
			}						
			
			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				if(!d && !c){		
	                window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/create_quotation_image-'+p);
				}
			}	
		});		
		
	   $("#create_invoice_china").click(function (){
			var check_arr = '';
			var exchange_rate_id = '';
			var customer_code = '';
			$("input[name='group_ids_cqi[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					exchange_rate_id += $("#exchange_rate_id" + $(this).val()).val();
					customer_code += $("#customer_code" + $(this).val()).val();
				}else{
					check_arr += '|'+$(this).val();
					exchange_rate_id += '|'+$("#exchange_rate_id" + $(this).val()).val();
					customer_code += '|'+$("#customer_code" + $(this).val()).val();
				}
			});
			
			exchange_rate_id=exchange_rate_id.split("|");	
            for(var i=0;i<exchange_rate_id.length;i++){

				if(exchange_rate_id[0]==exchange_rate_id[i]){
					
				}else{
					var d = '1';
				    alert("货币类型不统一");break;
				}
			}
			
			customer_code=customer_code.split("|");	
            for(var i=0;i<customer_code.length;i++){

				if(customer_code[0]==customer_code[i]){
					
				}else{
					var c = '1';
				    alert("必须统一客户名");break;
				}
			}						
			
			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				if(!d && !c){			
	                window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/create_invoice_china-'+p);
				}
			}	
		});
		
	   $("#create_invoice_usa").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			var exchange_rate_id = '';
			var customer_code = '';			
			$("input[name='group_ids_cqi[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					exchange_rate_id += $("#exchange_rate_id" + $(this).val()).val();
					customer_code += $("#customer_code" + $(this).val()).val();
				}else{
					check_arr += '|'+$(this).val();
					exchange_rate_id += '|'+$("#exchange_rate_id" + $(this).val()).val();
					customer_code += '|'+$("#customer_code" + $(this).val()).val();
				}
			});
			
			exchange_rate_id=exchange_rate_id.split("|");	
            for(var i=0;i<exchange_rate_id.length;i++){

				if(exchange_rate_id[0]==exchange_rate_id[i]){
					
				}else{
					var d = '1';
				    alert("货币类型不统一");break;
				}
			}
			
			customer_code=customer_code.split("|");	
            for(var i=0;i<customer_code.length;i++){

				if(customer_code[0]==customer_code[i]){
					
				}else{
					var c = '1';
				    alert("必须统一客户名");break;
				}
			}				
			
			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				 if(!d && !c){		
				 	$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/fp',//通过Ajax取数据的目标页面
						data:{'id':check_arr},			
						type:'get',//方法，还可以是"post"
						dataType:'json',//数据类型，还有其它的，详见jQuery手册
						success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						{
							
							if(locals == 1){
								window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/create_invoice_usa-'+p);
							}else if(locals == 3){
								window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/create_invoice_usa_material-'+p);
							}else if(locals == 13){
								window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/create_invoice_usa_material_Tshirt-'+p);
							}else if(locals == 0){
								alert('T恤类型的单子不能与其他类型的单子一起生成，请统一类型！');
							}
							else{
								alert("客户信息不完整,不可生成发票！");
							}
						}
					});
	                 
				 }
			}	
		});
		
	   $("#create_invoice_usa_noimage").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			var exchange_rate_id = '';
			var customer_code = '';			
			$("input[name='group_ids_cqi[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					exchange_rate_id += $("#exchange_rate_id" + $(this).val()).val();
					customer_code += $("#customer_code" + $(this).val()).val();
				}else{
					check_arr += '|'+$(this).val();
					exchange_rate_id += '|'+$("#exchange_rate_id" + $(this).val()).val();
					customer_code += '|'+$("#customer_code" + $(this).val()).val();
				}
			});
			
			exchange_rate_id=exchange_rate_id.split("|");	
            for(var i=0;i<exchange_rate_id.length;i++){

				if(exchange_rate_id[0]==exchange_rate_id[i]){
					
				}else{
					var d = '1';
				    alert("货币类型不统一");break;
				}
			}
			
			customer_code=customer_code.split("|");	
            for(var i=0;i<customer_code.length;i++){

				if(customer_code[0]==customer_code[i]){
					
				}else{
					var c = '1';
				    alert("必须统一客户名");break;
				}
			}				
			
			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				 if(!d && !c){
					 $.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/fp_duo',//通过Ajax取数据的目标页面
						data:{'id':check_arr},			
						type:'get',//方法，还可以是"post"
						dataType:'json',//数据类型，还有其它的，详见jQuery手册
						success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						{
							
							if(locals == 1){
								window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/create_invoice_usa_noimage-'+p);
							}else if(locals == 3){
								window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/create_invoice_usa_material_noimage-'+p);
							}else if(locals == 13){
								window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/create_invoice_usa_Tshirt_noimage-'+p);
							}else if(locals == 0){
								alert('T恤类型的单子不能与其他类型的单子一起生成，请统一类型！');
							}
							else{
								alert("客户信息不完整,不可生成发票！");
							}
						}
					});		
	                 
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