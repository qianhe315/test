<?php /* Smarty version 2.6.22, created on 2018-11-28 15:46:30
         compiled from quotecustomer/chang_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'quotecustomer/chang_list.html', 44, false),)), $this); ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/change_list">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
    <input type="hidden" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" />
    <input type="hidden" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    <input type="hidden" name="sale_user_id" value="<?php echo $this->_tpl_vars['sale_user_id']; ?>
" />
</form>


<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/xls_export" method="post" id="quoteexport">
<div class="pageContent" style="position:relative;">
 
	<div class="panelBar">
		<ul class="toolBar">
        
		</ul>
	</div>

	<table class="table" asc="asc" desc="desc" width="100%" layoutH="138">
		<thead>
			<tr>
                <th width="2%">编号</th>
                <th width="5%">月份</th>
                <th width="4%">客户代码</th>
				<th width="4%">更新时间</th>
                <th width="4%">客户属性</th>
                <th width="3%">业务员</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['newcustomer_list']): ?>
			 <?php $_from = $this->_tpl_vars['newcustomer_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
             
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td width="2%"><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td width="5%"><?php echo $this->_tpl_vars['ug']['insert_month']; ?>
</td>
                <td width="4%"><?php echo $this->_tpl_vars['ug']['customer_code']; ?>
</td>
                <td width="4%"><?php echo ((is_array($_tmp=$this->_tpl_vars['ug']['insert_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%e %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%e %H:%M:%S")); ?>
</td>
                <td width="4%"><?php if ($this->_tpl_vars['ug']['status'] == '1'): ?>新客户<?php elseif ($this->_tpl_vars['ug']['status'] == '2'): ?>老客户<?php endif; ?></td>
                <td width="3%"><?php echo $this->_tpl_vars['ug']['user_name']; ?>
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

<!-- {literal} -->
<script language="javascript">
$("#quoteex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#quoteexport").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
$(document).ready(function()
{	
	$("#reason").focus(function(){
	    $("#other").attr("checked",true); ;
	  });
	//var check_arr = [];
	$("#newpiliang").click(function (){

			var touid = $("#newtouid_new").val();
			var check_arr = '';
			$("input[name='customer_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
	
	$("#change_user").click(function (){
		var i = 0;
		var check_arr = '';
		var touid = $("#change_user_new").val();
		$("input[name='customer_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(check_arr == ''){
				check_arr += $(this).val();
			}else{
				check_arr += ','+$(this).val();
			}
			++i;
		});	
		
		if(touid){
			var p = 'check_arr-'+check_arr+'-touid-'+touid+'.html';
		}else{
			var p = 'check_arr-'+check_arr+'.html';
		}
		
		if(check_arr ==''){
			alert('必须选择客户');
		}else{
			if(i>10){
				alertMsg.confirm("最多十个客户!");
			}else{
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/findcustomer/change_add-'+p,
					type:'get', 
					dataType:'json',
					success:function (data, textStatus, jqXHR) {
		                DWZ.ajaxDone(data);
		                navTabPageBreak();
		            }
				});
			}
			
/*				$("#check_arr").val(check_arr);
			$("#touids").val(touid);
			$("#ctou").submit();*/
		}
		
	});
	
	$("#reasonbtn").click(function (){
		
		var touid = $("#newtouid_new").val();
		var check_arr = '';
		$("input[name='customer_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(check_arr == ''){
				check_arr += $(this).val();
			}else{
				check_arr += ','+$(this).val();
			}
		});	
		
		var p = 'check_arr-'+check_arr;
		
		if(check_arr ==''){
			alert('必须选择客户');
		}else{
			$(".reason").css("display","block");
			$("#button").click(function (){
				var reason = $("#reason").val();
				var reasonra = $("input[name='reasonra']:radio:checked").val();
				$(".reason").css("display","none");
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/modify_customer',
					type:'get', 
					dataType:'json',
					data:{check_arr:check_arr,reason:reason,reasonra:reasonra},
					success:check_back
				}); 
	/*				$("#check_arr").val(check_arr);
				$("#touids").val(touid);
				$("#ctou").submit();*/
			});
		}
		
	});
	
$("#youxiaoreasonbtn").click(function (){
		var check_arr = '';
		$("input[name='customer_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(check_arr == ''){
				check_arr += $(this).val();
			}else{
				check_arr += ','+$(this).val();
			}
		});	
		
		var p = 'check_arr-'+check_arr;
		
		if(check_arr ==''){
			alert('必须选择客户');
		}else{
			
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/modify_customer1',
					type:'get', 
					dataType:'json',
					data:{check_arr:check_arr},
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
			if(data==1)
			{
				//$("#dialog").css("display","none");
				alert("失败");
			}
			else
			{
				navTabPageBreak();
				//$("#dialog").css("display","none");
				//alert("成功，请手动刷新该页面");
				//window.location = "<?php echo $this->_tpl_vars['__ROOT__']; ?>
/#newcustomer";
			}
		}
</script>
<!-- {/literal} -->