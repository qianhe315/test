<?php /* Smarty version 2.6.22, created on 2023-03-20 09:39:57
         compiled from customer_last_order/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_last_order/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="exchangerate_name" value="<?php echo $this->_tpl_vars['exchangerate_name']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_last_order/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:25%;">
				<label style="width:60px">最后付款时间：</label>
				<input type="text" name="time_start" value="<?php echo $this->_tpl_vars['time_start']; ?>
" class="date" readonly style="width:70px"/>-<input type="text" name="time_end" style="width:70px" value="<?php echo $this->_tpl_vars['time_end']; ?>
" class="date" readonly/>
                
			</li>
            <?php if ($this->_tpl_vars['group_id'] != '53' || $this->_tpl_vars['group_id'] != '68'): ?>
            <li style="width:15%;">
				<label style="width:50px;">业务员：</label>
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
            <?php endif; ?>
            <li style="width:25%;">
			<label style="width:60px;">客户代码：</label>
            <input type="text" size="20" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
"  />
			</li>
            <li style="width:25%;">
			<label style="width:60px;">客户名：</label>
            <input type="text" size="20" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
"  />
			</li>
             <li style="width:25%;">
			<label style="width:60px;">发票号：</label>
            <input type="text" size="20" name="invoice_number" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
"  />
			</li>
            
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		
        </ul>
     
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_contribute/commission_xls_export" method="post" id="commssion_export">
<div class="pageContent">
	
    <div class="panelBar">
    <ul class="toolBar">
      <?php if ($this->_tpl_vars['user_hidden_old']['group_id'] == '5' || $this->_tpl_vars['user_hidden_old']['group_id'] == '50'): ?>
      <li class="line">line</li>
      <li><a title="批量分配客户？" href="#" class="edit" id="oldpiliang_old"><span>分配客户</span></a>
        <select  name="userid" style="font-size:13px;" id="oldtouid_old">
          <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
          <option value="<?php echo $this->_tpl_vars['qf']['user_id']; ?>
"><?php echo $this->_tpl_vars['qf']['user_name']; ?>
</option>
          <?php endforeach; endif; unset($_from); ?>
        </select>
      </li>
      <?php endif; ?>

      <!--<?php if ($this->_tpl_vars['user_hidden_old']['group_id'] == '5'): ?>
      	<li class="line">line</li>
      	<li><a class="icon" href="#" id="old_ex_old" ><span>导出EXCEL</span></a></li>
         <li class="line">line</li>
      <?php endif; ?>-->
     <input type="hidden" name="time" value="<?php echo $this->_tpl_vars['value_date']; ?>
">	
     <!-- <?php if ($this->_tpl_vars['user_id'] == '1'): ?>
      <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/oldcustomer/update_oldcustomer" target="ajaxTodo" rel="page1" postType="string"   title="确定更新老客户?" ><span>更新老客户</span></a></li>
        <li class="line">line</li>
      <?php endif; ?>-->
       
    </ul>
  </div>

	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
                <th width="1%"><input type="checkbox" group="old_customer_ids[]" class="checkboxCtrl"></th>
				<th width="2%">编号</th>
                <th width="3%">明细时间</th>
                <th width="3%">询盘时间</th>
                
                <th width="4%">最后付款时间</th>
                <th width="4%">业务员</th>
                <th width="4%">客户代码</th>
                <!--<th>平均报价系数</th>-->
                <th width="4%">来源渠道</th>
                <th width="4%">询盘方式</th>
                <th width="3%">成交次数</th>
                <th width="4%">客户名</th>
                <th width="4%">发票号</th>
                <th width="4%">付款总额</th>
                
                <th width="3%">邮箱</th>
                <th width="4%">客户名</th>
                <th width="4%">公司</th>
                <th width="4%">国家</th>
                <th width="2%">州代码</th>
                <th width="4%">城市</th>
                <th width="6%">地址</th>
                <th width="3%">邮编</th>
                <th width="3%">电话</th>
                
            </tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['sale_detail']): ?>
              <?php $_from = $this->_tpl_vars['sale_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                  <td><input name="old_customer_ids[]" value="<?php echo $this->_tpl_vars['us']['id']; ?>
" type="checkbox"></td>
                  <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['detail_time']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['quote_time_c']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['paid_time']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['saleman_name']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['customer_code']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['sources_name']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['quotecategory_name']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['count']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['customer_name']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['invoice_number']; ?>
</td>
                  <td>$<?php echo $this->_tpl_vars['us']['total']; ?>
</td>
                  
                  <td><?php echo $this->_tpl_vars['us']['email']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['customer_name']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['company']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['country']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['state_code']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['city']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['address']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['postal_code']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['phone']; ?>
</td>
                  
                  
               </tr>
              <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
      </tbody>
	</table>
	<div class="panelBar">		
			<div class="pages">
        <span>显示</span>
			<select class="combox" name="numPerPage" onChange="navTabPageBreak({numPerPage:this.value})">
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
<script language="javascript">
	$("#old_ex_old").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#new_export_old").submit();
		}else{
			alert("请选择导出的数据");
		}
		
	});
$(document).ready(function()
{	
	//var check_arr = [];
	$("#oldpiliang_old").click(function (){
			var touid = $("#oldtouid_old").val();
			var check_arr = '';
			$("input[name='old_customer_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += ','+$(this).val();
				}
			});	
			
			var p = 'check_arr-'+check_arr+'-touid-'+touid+'.html';
			
			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/change_to_other_user-'+p,
					type:'get', 
					dataType:'json',
					data:p,
					success:check_back
				});
/*				$("#check_arr").val(check_arr);
				$("#touids").val(touid);
				$("#ctou").submit();*/
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