<?php /* Smarty version 2.6.22, created on 2024-08-27 10:53:23
         compiled from cancel_order/index.html */ ?>

<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cancel_order/index">
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
/cancel_order/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
            <li>
				<label style="width:50px">业务员：</label>
				<select class="combox" name="saleman_user_id">
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
            <li>
				<label style="width:60px">做货时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
            </li>
            <li>
				<label style="width:50px;">订单号：</label>
				<input type="text" name="order_number" style="width:70px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
                
			</li>
            
		</ul>
         <div class="subBar">
        <ul>
			<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
        </div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cancel_order/c_xls_export" method="post" id="cancle_order_export">
<div class="pageContent">
   
        <div class="panelBar">
            <ul class="toolBar">
            <li class="line">line</li>
        <li><a class="icon" href="#" id="cancel_order_ex" ><span>导出EXCEL</span></a></li>
            </ul>
        </div>
   
	<table class="table" width="1800" layoutH="138">
		<thead>
       		
			<tr>
				<th width="1%"><input type="checkbox" group="factory_order_group[]" class="checkboxCtrl"></th>
                <th width="1%">编号</th>
                <th width="5%">做货时间</th>
                <th width="3%">业务员</th>
               	<th width="5%">撤销时间</th>
               	<th width="3%">撤销人</th>
                
                <th width="3%">订单属性</th>
               
                <th width="2%">做货状态</th>
                
                <th width="3%">客户编号</th>
                <th width="5%">订单号</th>
                <th width="5%">返单号</th>
               
                <th width="5%">报价名称</th>
                <th width="5%">报价编号</th>
                <th width="5%">尺寸</th>
                <th width="2%">数量</th>
                <th width="2%">成本</th>
               
                <th width="5%">做货程度</th>
              <th width="2%">操作</th>
                
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['order']): ?>
			 <?php $_from = $this->_tpl_vars['order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
             
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                 <input type="hidden" id="examine_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['examine_status']; ?>
" />
                 <input type="hidden" id="deliver_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['deliver_status']; ?>
" />
                 <input type="hidden" id="take_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['take_status']; ?>
" />
                 <input type="hidden" id="youxian_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['youxian_status']; ?>
" />
                 <input type="hidden" id="gao" value="<?php echo $this->_tpl_vars['gao']; ?>
" />
                <td><input name="factory_order_group[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['new_time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['revocation_time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['revocation_name']; ?>
</td>
               
               <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                   <td>烫图订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>
                   <td>材料订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '5'): ?>
                   <td>模板订单</td>
                <?php else: ?>   
                   <td></td>
                <?php endif; ?>
               
                <td>
                    <?php if ($this->_tpl_vars['dis']['export_status'] == '1'): ?>
                        未做货
                    <?php elseif ($this->_tpl_vars['dis']['export_status'] == '2'): ?>
                        已做货
                    <?php else: ?>
                        已撤销
                    <?php endif; ?>                
                </td>
                
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
<input type="hidden" name="customer_code[]" id="customer_code<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['customer_code']; ?>
" /></td>
                
                <td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['return_number']; ?>
</td>
                
                <td><?php echo $this->_tpl_vars['dis']['design_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['size'] != ""): ?>
                    <td><?php echo $this->_tpl_vars['dis']['size']; ?>
cm</td>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['dis']['cm_w'] != ""): ?>
                       <td><?php echo $this->_tpl_vars['dis']['cm_w']; ?>
cmX<?php echo $this->_tpl_vars['dis']['cm_h']; ?>
cm</td>
                    <?php else: ?>
                       <td></td>
                    <?php endif; ?>   
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                <td>¥<?php echo $this->_tpl_vars['dis']['factory_cost']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['cancel_influence']; ?>
</td> 
               <td><a target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cancel_order/cancel-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" title="恢复" class="btnEdit" rel="quotecustomeradd">恢复</a></td>
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
</div>
<script language="javascript">

$("#cancel_order_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#cancle_order_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
$(document).ready(function()
{	
	   $("#export_certificate").click(function (){

			var check_arr = '';
			var customer_code = '';
 
			$("input[name='factory_order_group[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					
				}else{
					check_arr += '|'+$(this).val();	
					
				}
			});
			
			customer_code=customer_code.split("|");	
            for(var i=0;i<customer_code.length;i++){

				if(customer_code[0]==customer_code[i]){
					
				}else{
					var b = '1';
				    alert("客户代码必须相同");break;
				}
			}			

			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				if(!b){	
			        window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/export_certificate-'+p);
				}else{
				    return false;	
				}
			}	
		});
		
	   $("#export_doinvoice").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
            var youxian_status = '';
			$("input[name='factory_order_group[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					youxian_status += $("#youxian_status" + $(this).val()).val();
				}else{
					check_arr += '#'+$(this).val();
					youxian_status += '|'+$("#youxian_status" + $(this).val()).val();
				}
			});
			var gao = $("#gao").val();
			
			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				var patt = new RegExp('#');
                if(patt.test(check_arr)){
					alert('只能选择一条信息！');
				}else{
					 
					 $.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/check_status',//通过Ajax取数据的目标页面
							data:{"id":check_arr},
							type:'post',//方法，还可以是"post"
							dataType:'json',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								if(locals=="1"){
									alert("此订单已撤销,不可到处做货单");
								}else{
									window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/export_doinvoice-'+p);
								}
							}								
							
						});
/*					 if(gao=='gao'){
						if(youxian_status=="低" || youxian_status=="中"){
							 alert('请先操作优先级是高的！');
						}else{
							 window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/export_doinvoice-'+p);
						}*/
					 //}else{
						 
					 //}
				}
			}	
		});
		
});

$(document).ready(function()
{	
	   /*修改做货状态*/
		$("#factory_order_piliang").click(function (){
			var touid1 = $("#factory_order_touid").val();
			var check_arr1 = '';
			var examine_status = '';
			var deliver_status = '';
			var take_status = '';

			$("input[name='factory_order_group[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr1 == ''){
					check_arr1 += $(this).val();
					examine_status += $("#examine_status" + $(this).val()).val();
					deliver_status += $("#deliver_status" + $(this).val()).val();
					take_status += $("#take_status" + $(this).val()).val();
				}else{
					check_arr1 += ','+$(this).val();
					examine_status += '|'+$("#examine_status" + $(this).val()).val();
					deliver_status += '|'+$("#deliver_status" + $(this).val()).val();
					take_status += '|'+$("#take_status" + $(this).val()).val();
				}
			});	
			
			examine_status=examine_status.split("|");
            for(var i=0;i<examine_status.length;i++){

				if(examine_status[i]=='3'){
					var a = '1';
				    alert("问题单不能改变状态！");break;					
				}
			}
			
			deliver_status=deliver_status.split("|");
            for(var i=0;i<deliver_status.length;i++){

				if(deliver_status[i]=='3'){
					var b = '1';
				    alert("完全发货，不能修改状态！");break;					
				}
			}
			
			take_status=take_status.split("|");
            for(var i=0;i<take_status.length;i++){

				if(take_status[i]=='3'){
					var c = '1';
				    alert("完全收货，不能修改状态！");break;					
				}
			}			
			
			var p = 'check_arr1-'+check_arr1+'-touid1-'+touid1+'.html';

			if(check_arr1 ==''){
				alert('必须选择客户');
			}else{
				if(!a && !b && !c){
					$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/change_to_active-'+p,
						type:'get', 
						dataType:'json',
						data:p,
						success:check_back
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
				alert("不可包含未审核或未知错误");
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