<?php /* Smarty version 2.6.22, created on 2024-08-27 09:46:47
         compiled from customer_order_rate/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_rate/index">
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
/customer_order_rate/index" method="get">
    <div class="searchBar">
      <ul class="searchContent">
		<?php if ($this->_tpl_vars['user_hidden_old']['group_id'] == '5' || $this->_tpl_vars['user_hidden_old']['group_id'] == '50'): ?>
      	<li style="width:15%;">
			<label style="width:60px;">业务员：</label>
			<select class="combox" name="sale_user_id">
            <option value="" >全部</option>
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

        <li style="width:15%;">
          <label style="width:60px;">客户名：</label>
          <input type="text" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" alt="" style="width:120px;" />
        </li>
        <li style="width:15%;">
          <label style="width:60px;">客户代码：</label>
          <input type="text" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" alt="" style="width:120px;" />
        </li>
        <li style="width:15%;">
          <label style="width:60px;">邮箱：</label>
          <input type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" alt="" style="width:120px;" />
        </li>

        <li style="width:30%;">
          <label style="width:60px;">客户公司：</label>
          <input type="text" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
" alt="" style="width:120px;" />
        </li>
        <li style="width: 15%;">
            <label style="width:60px;">电话：</label>
            <select class="combox" name="contact">
                <option value="">全部</option>
                <option value="有" <?php if ($this->_tpl_vars['contact'] == '有'): ?>selected="selected"<?php endif; ?>>有</option>
                <option value="无"<?php if ($this->_tpl_vars['contact'] == '无'): ?>selected="selected"<?php endif; ?>>无</option>
            </select>
        </li>
        <li style="width: 15%;">
            <label style="width:60px;">国家：</label>
            <select class="combox required" id="area_level_one_id_old" ref="province" name="area_level_one_id">
            <option value="">请选择</option>
              <?php $_from = $this->_tpl_vars['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <option value="<?php echo $this->_tpl_vars['qf']['area_id']; ?>
" <?php if ($this->_tpl_vars['area_level_one_id'] == $this->_tpl_vars['qf']['area_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qf']['area_name']; ?>

              
              </option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
        </li>
        
        <li style="width: 15%;">
				<label style="width:60px;">首付时间：</label>
				<input type="text" name="start_sale_time" class="date" readonly="readonly" style="width:70px; float:left;" value="<?php echo $this->_tpl_vars['start_sale_time']; ?>
" />
                <font style="float:left; line-height:22px;">-</font>
                <input type="text" name="end_sale_time" class="date" readonly="readonly" style="width:70px; float:left;" value="<?php echo $this->_tpl_vars['end_sale_time']; ?>
" />
		</li>
        
        <li style="width: 15%;">
				<label style="width:60px;">首询时间：</label>
				<input type="text" name="start_time" class="date" readonly="readonly" style="width:70px; float:left;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
                <font style="float:left; line-height:22px;">-</font>
                <input type="text" name="end_time" class="date" readonly="readonly" style="width:70px; float:left;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
		</li>
        
        <!--<li style="width: 15%;">
				<label style="width:60px;">下单率：</label>
				<input type="text" name="start_xiadanlv" style="width:70px; float:left;" value="<?php echo $this->_tpl_vars['start_xiadanlv']; ?>
" />
                <font style="float:left; line-height:22px;">%</font>
                <font style="float:left; line-height:22px;"> ~ </font>
                <input type="text" name="end_xiadanlv" style="width:70px; float:left;" value="<?php echo $this->_tpl_vars['end_xiadanlv']; ?>
" />
                <font style="float:left; line-height:22px;">%</font>
		</li>-->
        

              
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
/customer_order_rate/xls_export" method="post" id="xiadan_export">
  <div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">


      	<li class="line">line</li>
      	<li><a class="icon" href="#" id="xiadan_ex" ><span>导出EXCEL</span></a></li>
         <li class="line">line</li>

       
    </ul>
  </div>
  
  <table class="table" width="1300" layoutH="138">
    <thead>
      <tr>
      	<th width="2%"><input type="checkbox" group="customer_ids[]" class="checkboxCtrl" id="check_all"  ></th>
        <th width="2%">编号</th>
        <th width="9%">首次付款时间</th>
        <th width="9%">首次询盘时间</th>
        <th width="4%">客户代码</th>
        <th width="4%">下单率</th>
        <th width="8%">客户名</th>
        <th width="8%">邮箱</th>
        <th width="10%">公司</th>
        <th width="5%">付款</th>
        <th width="7%">国家</th>
        <th width="4%">业务员</th>       
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
      <td><?php echo $this->_tpl_vars['ug']['old_customers_change_time']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['quote_time_c']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['customer_code']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['xiadanlv']; ?>
%</td>
      <td><?php echo $this->_tpl_vars['ug']['customer_name']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['email']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['company']; ?>
</td>
      <td>$<?php echo $this->_tpl_vars['ug']['yifukuan']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['country']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['yewu_name']; ?>
</td>
      
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
	$("#xiadan_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#xiadan_export").submit();
		}else{
			alert("请选择导出的数据");
		}
		
	});

</script> 
<!-- {/literal} -->