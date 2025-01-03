<?php /* Smarty version 2.6.22, created on 2017-03-08 14:02:19
         compiled from factory_delivery_detail/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_delivery_detail/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="discount_name" value="<?php echo $this->_tpl_vars['discount_name']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_delivery_detail/index" method="get">
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
        	<li style="width:25%;">
				<label style="width:60px;">发货时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
			</li>
			<li style="width:20%;">
				<label style="width:70px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            <li style="width:25%;">
				<label style="width:80px;">订单号：</label>
				<input type="text" name="order_number" style="width:100px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
                
			</li>
           <li style="width:20%;">
				<label style="width:70px;">报价编号：</label>
				<input type="text" name="quotation_code" style="width:100px;" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />
                
			</li>
            <li style="width:15%; margin-top:5px;">数量合计：<?php echo $this->_tpl_vars['count_number']; ?>
</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
<!--         <div class="subBar">
         <ul>
			
		</ul>
        </div>-->
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_delivery_detail/fdd_export" method="post" id="factor_delivery_detail_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li><a class="icon" id="fdd_ex"><span>导出EXCEL</span></a></li>	
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr>
            	<th width="2%"><input type="checkbox" group="group_ids_product_order[]" class="checkboxCtrl"></th>
            	<th width="3%">编号</th>
                <th width="5%">发货时间</th>
                <th width="5%">业务员</th>
                <th width="5%">客户代码</th>
                <th width="5%">订单号</th>
                <th width="5%">返单号</th>
                <th width="5%">设计名称</th>
                <th width="5%">报价编号</th>                
                <th width="5%">数量</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['product_order']): ?>
        	<?php $_from = $this->_tpl_vars['product_order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['or']):
?>
            <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
            	<td><input name="group_ids_product_order[]" value="<?php echo $this->_tpl_vars['or']['id']; ?>
" type="checkbox">
            	<td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['or']['deliver_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['or']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['or']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['or']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['or']['return_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['or']['design_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['or']['quotation_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['or']['number']; ?>
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
</div>
<script type="text/javascript">

$("#fdd_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#factor_delivery_detail_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>