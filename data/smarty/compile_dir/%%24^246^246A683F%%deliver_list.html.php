<?php /* Smarty version 2.6.22, created on 2013-11-29 14:47:42
         compiled from sale_detail/deliver_list.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/index">
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
/sale_detail/deliver_list" method="get">
	<div class="searchBar">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
    <ul class="searchContent">
    	<li style="width:14%;height:50px;"></li>
    </ul>
		<!--<ul class="searchContent">
        <li style="width:14%;">
				<label style="width:60px;">业务员：</label>
				<select class="combox" name="sale_user">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_id']; ?>
" <?php if ($this->_tpl_vars['du']['user_id'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="width:24%;">
				<label style="width:60px;">发货时间：</label>
				<input type="text" name="start_time" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" class="date" readonly="true" />-<input type="text" name="end_time" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" class="date" readonly="true"/>
                
			</li>
             <li style="width:25%;">
				<label style="width:90px;">运费导入时间：</label>
				<input type="text" name="freight_start_time" style="width:70px;" value="<?php echo $this->_tpl_vars['freight_start_time']; ?>
" class="date" readonly="true" />-<input type="text" name="freight_end_time" style="width:70px;" value="<?php echo $this->_tpl_vars['freight_end_time']; ?>
" class="date" readonly="true"/>
                
			</li>
            <li style="width:15%;">
				<label style="width:60px;">快递单号：</label>
				<input type="text" name="shipping_number" style="width:70px;" value="<?php echo $this->_tpl_vars['shipping_number']; ?>
" />
			</li>
            <li style="width:15%;">
				<label style="width:60px;">发票号：</label>
				<input type="text" name="invoice_number" style="width:70px;" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
" />
			</li>
           
            <li style="width:14%;">
				<label style="width:60px;">报关状态：</label>
				<select class="combox" name="whether_declare">
                <option value="">全部</option>
              	<option value="2" <?php if ($this->_tpl_vars['whether_declare'] == '2'): ?>selected="selected"<?php endif; ?>>是</option>
                <option value="1" <?php if ($this->_tpl_vars['whether_declare'] == '1'): ?>selected="selected"<?php endif; ?>>否</option>
                </select>
			</li>
            <li style="width:24%;">
				<label style="width:60px;">销售称重：</label>
				<select class="combox" name="sale_weight">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['sale_weight'] == '1'): ?>selected="selected"<?php endif; ?>>未称重</option>
                <option value="2" <?php if ($this->_tpl_vars['sale_weight'] == '2'): ?>selected="selected"<?php endif; ?>>已称重</option>
                </select>
			</li>
            <li style="width:25%;">
				<label style="width:90px;">快递称重：</label>
				<select class="combox" name="shipping_weight">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['shipping_weight'] == '1'): ?>selected="selected"<?php endif; ?>>未称重</option>
                <option value="2" <?php if ($this->_tpl_vars['shipping_weight'] == '2'): ?>selected="selected"<?php endif; ?>>已称重</option>
                </select>
			</li>
            <li style="width:28%;">
				<label style="width:60px;">快递状态：</label>
				<select class="combox" name="courier_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['courier_status'] == '1'): ?>selected="selected"<?php endif; ?>>未导入</option>
                <option value="2" <?php if ($this->_tpl_vars['courier_status'] == '2'): ?>selected="selected"<?php endif; ?>>已导入</option>
                </select>
			</li>
            

            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>

		</ul>-->

	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			 <li class="line">line</li>           
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/delivery_confirmation-id-<?php echo $this->_tpl_vars['id']; ?>
" target="navTab" rel="delivery_confirmation"><span>发货确认</span></a></li>
             <li class="line">line</li>
<!--             <li><a class="delete" href="*"><span>删除发货信息</span></a></li>
             <li class="line">line</li> --> 
               
             <li><a class="add" id="create_invoice_shangye" href="#"><span>生成商业发票</span></a></li>
             <li class="line">line</li>
             <li><a class="add" id="create_invoice_po" href="#"><span>生成PO</span></a></li> 
             <li class="line">line</li>                    
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr>
				<th width="22"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="30">发货时间</th>
                <th width="30">业务员</th>
                <th width="30">报关状态</th>
                <th width="30">发货代码</th>
                <th width="30">发票号</th>
                <th width="30">订单号</th>
                <th width="30">代理报关协议书号</th>
                <th width="30">快递公司</th>
                <th width="30">快递单号</th>
                <th width="30">销售称重</th>
                <th width="50">运费导入时间</th>
                <th width="30">快递称重</th>
                <th width="30">运费</th>
                <th width="30">销售备注</th>
                <th width="50">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['sale_detail_deliver_list']): ?>
			 <?php $_from = $this->_tpl_vars['sale_detail_deliver_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['dis']['delivery_time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['whether_declare'] == 1): ?>
                    否
                <?php elseif ($this->_tpl_vars['dis']['whether_declare'] == 2): ?>
                    是
                <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['dis']['ship_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['invoice_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['delivery_order']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['agent_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['shipping_company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['shipping_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['sale_weight']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['shipping_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['shipping_weight']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['shipping_money']; ?>
</td> 
                <td><?php echo $this->_tpl_vars['dis']['sale_note']; ?>
</td>                             
                <td><a title="编辑" target="navTab" rel="stock_manage_edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a></td>
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

<script language="javascript">
$(document).ready(function()
{	
	   $("#create_invoice_shangye").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
				var patt = new RegExp('#');
                if(patt.test(check_arr)){
					alert('只能选择一条信息!');
				}else{						
	               window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/create_invoice_shangye-'+p);
				}
			}	
		});
		
	   $("#create_invoice_po").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
				var patt = new RegExp('#');
                if(patt.test(check_arr)){
					alert('只能选择一条信息!');
				}else{							
	                window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/create_invoice_po-'+p);
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
				alert("成功，请手动刷新该页面");
				//window.location = "<?php echo $this->_tpl_vars['__ROOT__']; ?>
/#newcustomer";
			}
		}
</script> 