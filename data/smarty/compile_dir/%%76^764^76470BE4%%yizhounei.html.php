<?php /* Smarty version 2.6.22, created on 2015-11-17 13:38:35
         compiled from newcustomer/yizhounei.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/yizhounei">
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
    <input type="hidden" name="customer_status" value="<?php echo $this->_tpl_vars['customer_status']; ?>
" />
</form>
<div class="pageHeader">
  <form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/yizhounei" method="get">
    <div class="searchBar">
      <ul class="searchContent">
       <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50'): ?>
       <li style="width: 23%;">
			<label style="width:50px;">业务员：</label>
			<select class="combox" name="sale_user_id">
            <option value="" >全部</option>
            <option value="0" <?php if ($this->_tpl_vars['sale_user_id'] == '0'): ?>selected="selected"<?php endif; ?>>空</option>
             <?php $_from = $this->_tpl_vars['sales_user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['su']):
?>
                 <option value="<?php echo $this->_tpl_vars['su']['user_id']; ?>
" <?php if ($this->_tpl_vars['su']['user_id'] == $this->_tpl_vars['sale_user_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['su']['user_name']; ?>
</option>
             <?php endforeach; endif; unset($_from); ?>
            </select>
	    </li>
        <?php endif; ?>

        <li style="width:23%;">
          <label style="width:60px;">客户名：</label>
          <input type="text" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
"  style="width:120px;" />
        </li>
        <li style="width:23%;">
          <label style="width:60px;">客户代码：</label>
          <input type="text" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
"  style="width:120px;" />
        </li>
        <li style="width:23%;">
          <label style="width:60px;">客户公司：</label>
          <input type="text" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
" alt="" style="width:120px;" />
        </li>
       <li style="width:23%;">
          <label style="width:50px;">主邮箱：</label>
          <input type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" alt="" style="width:120px;" />
        </li>
        <li style="width:23%;">
          <label style="width:60px;">备用邮箱：</label>
          <input type="text" name="reserve_email" value="<?php echo $this->_tpl_vars['reserve_email']; ?>
" alt="" style="width:120px;" />
        </li>
        <li style="width: 16%;">
            <label style="width:60px;">电话：</label>
            <select class="combox" name="contact">
                <option value="">全部</option>
                <option value="有" <?php if ($this->_tpl_vars['contact'] == '有'): ?>selected="selected"<?php endif; ?>>有</option>
                <option value="无"<?php if ($this->_tpl_vars['contact'] == '无'): ?>selected="selected"<?php endif; ?>>无</option>
            </select>
        </li>
<!--        <li style="width:15%;">
          <label style="width:60px;">固定电话：</label>
          <input type="text" name="telephone" value="<?php echo $this->_tpl_vars['telephone']; ?>
" alt="" style="width:70px;" />
        </li>-->
        <!--<li style="width:17%;">
          <label style="width:40px;">手机：</label>
          <input type="text" name="cellphone" value="<?php echo $this->_tpl_vars['cellphone']; ?>
" alt="" style="width:70px;" />
        </li>-->
        <li style="float:right; margin-left:10px; width:100px;"><a class="button" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/search/" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li> 
        <li style="float:right;">
            <div class="buttonActive" style="float:right;">
              <div class="buttonContent" style="float:right;">
                <button type="submit">检索</button>
              </div>
            </div>
          </li>
      </ul>
      
    </div>
  </form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/xls_export" method="post" id="new_export_new">
  <div class="pageContent">
  <div class="panelBar">
   
  </div>
  <table class="table" width="1300" layoutH="138">
    <thead>
      <tr>
        <th width="2%"><input type="checkbox" group="customer_ids[]" class="checkboxCtrl" id="check_all_new"  ></th>
        <th width="2%">编号</th>
        <th width="5%">日期</th>
        <th width="9%">询盘日期</th>
        <th width="4%">客户代码</th>
        <th width="8%">客户名</th>
        <th width="5%">客户来源</th>
        <th width="5%">询盘方式</th>
        <th width="5%">询盘数量</th>
         <th width="5%">询盘周期</th>
        <th width="10%">公司</th>
        <th width="8%">国家</th>
        <th width="4%">客户属性</th>
        <th width="4%">业务员</th>
        
        <th width="4%">客户状态</th>
        <th width="4%">操作</th>
      </tr>
    </thead>
    <tbody>
    <?php if ($this->_tpl_vars['newcustomer_list']): ?>
    <?php $_from = $this->_tpl_vars['newcustomer_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
    <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
      <td><input name="customer_ids[]" value="<?php echo $this->_tpl_vars['ug']['id']; ?>
" type="checkbox" ></td>
      <td><?php echo $this->_tpl_vars['ug']['key']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['insert_time']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['quote_time_c']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['customer_code']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['customer_name']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['quotefrom']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['quotecategory_name1']; ?>
</td>
      <td><?php if ($this->_tpl_vars['ug']['customer_code_num'] == '0'): ?>
      
          <?php else: ?>
              <a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_inquiries_into/processed-customer_code-<?php echo $this->_tpl_vars['ug']['customer_code']; ?>
.html" target="navTab" rel="yidong"><span><?php echo $this->_tpl_vars['ug']['customer_code_num']; ?>
</a>
          <?php endif; ?> 
      </td>
       <td><?php if ($this->_tpl_vars['ug']['quotecustomer_cycle'] == '1'): ?>
       未回复
       <?php elseif ($this->_tpl_vars['ug']['quotecustomer_cycle'] == '2'): ?>
       一周内回复
       <?php elseif ($this->_tpl_vars['ug']['quotecustomer_cycle'] == '3'): ?>
       一个月内回复
       <?php elseif ($this->_tpl_vars['ug']['quotecustomer_cycle'] == '4'): ?>
       三个月内回复
       <?php elseif ($this->_tpl_vars['ug']['quotecustomer_cycle'] == '5'): ?>
       三个月以上
       <?php else: ?>
       无
       <?php endif; ?>
       </td>
      <td><?php echo $this->_tpl_vars['ug']['company']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['country']; ?>
</td>
      <td><?php if ($this->_tpl_vars['ug']['status'] == '1'): ?>新客户<?php elseif ($this->_tpl_vars['ug']['status'] == '2'): ?>老客户<?php endif; ?></td>
      <td><?php echo $this->_tpl_vars['ug']['yewu_name']; ?>
</td>
      <td><?php if ($this->_tpl_vars['ug']['activation'] == '1'): ?><?php elseif ($this->_tpl_vars['ug']['activation'] == '2'): ?>已激活<?php elseif ($this->_tpl_vars['ug']['activation'] == '3'): ?>未激活<?php endif; ?></td>
      <td>
   
        <a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/yizhounei_edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnEdit" rel="editcustomer">编辑</a>
       
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
<!--<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/change_to_other_user" id="ctou" method="post" onSubmit="return navTabSearch(this);">
  <input type="hidden" name="check_arr" id="check_arr" value="" />
  <input type="hidden" name="touid" id="touids" value="" />
</form>-->
</div>
<!-- {literal} --> 
<script language="javascript">
	$("#new_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#new_export_new").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
$(document).ready(function()
{	
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
		
		
		
		$("#customer_newpiliang").click(function (){
			var touid = $("#customer_newtouid_new").val();
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
/newcustomer/change_customer_status-'+p,
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
			if(data==1)
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
<!-- {/literal} -->