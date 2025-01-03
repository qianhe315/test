<?php /* Smarty version 2.6.22, created on 2016-07-29 10:53:40
         compiled from invoice_status_return_sales/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice_status_return_sales/index">
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
/invoice_status_return_sales/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        <li style="width:15%;">
				<label style="width:50px;">业务员：</label>
				<select class="combox" name="sale_user">
                <option value="">请选择</option>
                <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
             <li style="width:25%;">
				<label style="width:60px;">时间：</label>
				<input type="text" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" style="width:70px;" class="date" readonly="true" />-<input type="text" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" style="width:70px;" class="date" readonly="true"/>
                
			</li>
            
            <li style="width:25%;">
				<label style="width:60px;">原销售明细时间：</label>
				<input type="text" name="start_old_time" value="<?php echo $this->_tpl_vars['start_old_time']; ?>
" style="width:70px;" class="date" readonly="true" />-<input type="text" name="end_old_time" value="<?php echo $this->_tpl_vars['end_old_time']; ?>
" style="width:70px;" class="date" readonly="true"/>
                
			</li>
            
			<li style="width:15%;">
          <label style="width:60px;">审核状态：</label>
           <select  name="customer_status" style="font-size:12px;" class="combox">
          <option value="">全部</option>
          <option value="1" <?php if ($this->_tpl_vars['customer_status'] == '1'): ?>selected="selected"<?php endif; ?> >未审核</option>
          <option value="2" <?php if ($this->_tpl_vars['customer_status'] == '2'): ?>selected="selected"<?php endif; ?> >审核通过</option>
          <option value="3" <?php if ($this->_tpl_vars['customer_status'] == '3'): ?>selected="selected"<?php endif; ?> >驳回</option>
          
        </select>
        </li>
            
           <li style="width:15%;">
          <label style="width:50px;">客户名：</label>
          <input type="text" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
"  style="width:70px;" />
        </li>
        <li style="width:15%;">
          <label style="width:60px;">客户编号：</label>
          <input type="text" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" alt="" style="width:70px;" />
        </li>
        <li style="width:15%;">
          <label style="width:60px;">发票号：</label>
          <input type="text" name="invoice_number" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
" alt="" style="width:70px;" />
        </li>  
        <li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>               
		</ul>
		
		<!--<div class="subBar">
			<ul>
				
				
			</ul>
		</div>-->
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice_status_return_sales/isrs_xls_export" method="post" id="invoice_status_return_sales_export">
<div class="pageContent">
	<div class="panelBar">
<!--		<ul class="toolBar">
       	    <li class="line">line</li>
			<li><a class="add" href="#" onClick="window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/check_product_order/');"  ><span>审核通过</span></a></li>
			<li class="line">line</li>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/goods_free/reason_rejection/" target="dialog" ><span>驳回</span></a></li>
            <li class="line">line</li>
			 
		</ul>-->
        <ul  class="toolBar">
        
        <li>
            <a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice_status_return_sales/shtg/" target="selectedTodo" rel="group_ids[]" postType="string" title="确定批量修改?" ><span>批量审核通过</span></a>
         </li>
         <li class="line">line</li>
		 <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
         <li><a class="icon" href="#" id="isrs_ex" ><span>导出EXCEL</span></a></li>
         <li class="line">line</li>
         <?php endif; ?>
         </ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="7%">时间</th>
                <th width="7%">原销售明细时间</th>
                <th width="30">业务员</th>
                <th width="30">状态</th>
                <th width="30">发票号</th>
                <th width="30">客户名</th>
                <th width="30">客户代码</th>
                <th width="30">成交金额</th>
                <th width="30">应付款</th>        
                <th width="30">备注</th>
                <th width="30">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['invoice_status_list']): ?>
			 <?php $_from = $this->_tpl_vars['invoice_status_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['old_time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman']; ?>
</td>
                <td>
                   <?php if ($this->_tpl_vars['dis']['type'] == '1'): ?>
                        未审核
                   <?php elseif ($this->_tpl_vars['dis']['type'] == '2'): ?>
                        审核通过
                   <?php elseif ($this->_tpl_vars['dis']['type'] == '3'): ?>
                        驳回
                   <?php else: ?>
                       
                   <?php endif; ?>                 </td>
                <td><?php echo $this->_tpl_vars['dis']['invoice_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['end_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['payment_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['remark']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50'): ?>
                <?php if ($this->_tpl_vars['dis']['type'] != '2'): ?>
                <!--<a title="是否审核通过" target="ajaxTodo" rel="goods_free" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice_status_return_sales/approved-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">审核通过</a>-->
                <a title="驳回" target="dialog" rel="goods_free" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice_status_return_sales/reason_rejection-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">驳回</a>
                <?php endif; ?>
                <?php endif; ?>
                </td>
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
<script type="text/javascript">
$("#isrs_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#invoice_status_return_sales_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>