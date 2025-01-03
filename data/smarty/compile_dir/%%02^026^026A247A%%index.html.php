<?php /* Smarty version 2.6.22, created on 2016-07-01 09:43:36
         compiled from register_detail/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/register_detail/index">
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
/register_detail/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
            <li style="width:25%;">
				<label style="width:70px;">采购时间：</label>
				<input type="text" name="start_time_1" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time_1']; ?>
" />-<input type="text" name="end_time_1" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time_1']; ?>
" />
                
			</li>
            <li style="width:23%;">
				<label style="width:70px;">入库时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
			</li>
            <li style="width:16%;">
				<label style="width:80px;">采购单号：</label>
				<input type="text" name="purchase_order_number" style="width:70px;" value="<?php echo $this->_tpl_vars['purchase_order_number']; ?>
" />
                
			</li>
            <li style="width:25%;">
				<label style="width:80px;">供应商代码：</label>
				<input type="text" name="supplier_code" style="width:70px;" value="<?php echo $this->_tpl_vars['supplier_code']; ?>
" />
			</li>
             <li style="width:25%;">
				<label style="width:80px;">名称：</label>
				<input type="text" name="material_name" style="width:70px;" value="<?php echo $this->_tpl_vars['material_name']; ?>
" />
			</li>
             <li style="width:25%;">
				<label style="width:80px;">颜色：</label>
				<input type="text" name="material_color" style="width:70px;" value="<?php echo $this->_tpl_vars['material_color']; ?>
" />
			</li>
             <li style="width:25%;">
				<label style="width:80px;">尺寸：</label>
				<input type="text" name="material_size" style="width:70px;" value="<?php echo $this->_tpl_vars['material_size']; ?>
" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/register_storage/xls_export" method="post" id="rsexport">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        	<li class="line">line</li>
            <li><a class="icon" href="#" id="rs_ex"><span>导出Excel</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="1400" layoutH="138">
		<thead>
       		
			<tr>
            	<th width="3%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="3%">编号</th>
                <th width="10%">采购时间</th>
                <th width="5%">入库状态</th>
                <th width="5%">入库时间</th>
                <th width="8%">采购单号</th>
                <th width="5%">单据编号</th>
                <th width="5%">供应商代码</th>
                <th width="7%">供应商</th>               
                <th width="10%">名称</th>
                <th width="7%">颜色</th>
                <th width="7%">供应商颜色</th>
                <th width="7%">尺寸</th>
                <th width="5%">数量</th>
                <th width="5%">单位</th>
                <th width="5%">特殊换算</th>
                <th width="5%">单价</th>
			</tr>
		</thead>
		<tbody>
        	<?php if ($this->_tpl_vars['purchase_details']): ?>
			 <?php $_from = $this->_tpl_vars['purchase_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
              	<td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['insert_time']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['storage_status'] == '1'): ?>是
                <?php elseif ($this->_tpl_vars['dis']['storage_status'] == '2'): ?>否
                <?php else: ?>
                <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['dis']['storage_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['purchase_order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['document_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['supplier_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['supplier_s']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['pd_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['pd_color']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['supplier_s_color']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['pd_size']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['pd_quantity']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['pd_quantity_unit']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['pd_translated'] != '' && $this->_tpl_vars['dis']['pd_translated_unit1'] != '' && $this->_tpl_vars['dis']['pd_translated_unit2'] != ''): ?>
                <td><?php echo $this->_tpl_vars['dis']['pd_translated']; ?>
<?php echo $this->_tpl_vars['dis']['pd_translated_unit1']; ?>
=<?php echo $this->_tpl_vars['dis']['pd_translated_unit2']; ?>
</td>
                <?php else: ?>
                <td></td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['pd_unit_price']; ?>
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
</div>
</form>
<script type="text/javascript">
$("#rs_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#rsexport").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>