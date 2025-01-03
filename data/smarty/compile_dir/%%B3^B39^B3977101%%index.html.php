<?php /* Smarty version 2.6.22, created on 2015-12-18 09:08:47
         compiled from cn_check_stock/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_check_stock/index">
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
/cn_check_stock/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
            <li style="width:25%;">
				<label style="width:50px">时间：</label>
				<input type="text" name="start_time" class="date textInput readonly valid" datefmt="yyyy-MM" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date textInput readonly valid" datefmt="yyyy-MM" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            
            <li style="width:20%;">
				<label style="width:70px;">材料名称：</label>
				<input type="text" name="material_name" value="<?php echo $this->_tpl_vars['material_name']; ?>
" />
                
			</li>
            
             <li style="width:20%;">
				<label style="width:70px;">颜色：</label>
				<select name="material_color">
                <option value=""></option>
                 <?php $_from = $this->_tpl_vars['color_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                 	<option value="<?php echo $this->_tpl_vars['val']['id']; ?>
"<?php if ($this->_tpl_vars['material_color'] == $this->_tpl_vars['val']['id']): ?> selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['val']['name']; ?>
</option>
                 <?php endforeach; endif; unset($_from); ?>
                </select>
                
			</li>
			<li style="width:20%;">
				<label style="width:70px;">尺寸：</label>
				<select name="material_size">
                <option value=""></option>
                 <?php $_from = $this->_tpl_vars['size_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                 	<option value="<?php echo $this->_tpl_vars['val']['id']; ?>
"<?php if ($this->_tpl_vars['material_size'] == $this->_tpl_vars['val']['id']): ?> selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['val']['name1']; ?>
(<?php echo $this->_tpl_vars['val']['name']; ?>
)</option>
                 <?php endforeach; endif; unset($_from); ?>
                </select>
                
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
         <div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_check_stock/xls_export" method="post" id="getEx">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_check_stock/add" target="navTab" rel="check_stock_add"  ><span>添加</span></a></li>
             <li class="line">line</li>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_check_stock/materials_check_stock" target="navTab" rel="tongbu_add"  ><span>材料扫码盘点</span></a></li>
             <li class="line">line</li>
             <li><a class="icon" href="#" id="get_ex"><span>导出Excel</span></a></li>
			 <li class="line">line</li>
             <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_check_stock/all_del/" target="selectedTodo" rel="group_ids[]" postType="string" title="确定要批量删除？"><span>批量删除</span></a></li>
           
		</ul>
	</div>
	<table class="table" width="98%" layoutH="138">
		<thead>
       		
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="5%">时间</th>
                <th width="6%">添加时间</th>
                <th width="8%">材料名称</th>
                <th width="5%">颜色</th>
                <th width="5%">尺寸</th>
                <th width="5%">单价</th>
                <th width="5%">预警数量</th>
                <th width="5%">盘点数量</th>
                <th width="5%">单位</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
      <?php if ($this->_tpl_vars['inventory_list']): ?>
			 <?php $_from = $this->_tpl_vars['inventory_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['il']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['il']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['il']['time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['add_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['material_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['color_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['size_name']; ?>
(<?php echo $this->_tpl_vars['il']['size_name_E']; ?>
)</td>
                <td><?php echo $this->_tpl_vars['il']['price']; ?>
</td>
                <td></td>
                <td><?php echo $this->_tpl_vars['il']['number_count']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['unit1']; ?>
</td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_check_stock/del-id-<?php echo $this->_tpl_vars['il']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" rel="supplier_attributes_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_check_stock/edit-id-<?php echo $this->_tpl_vars['il']['id']; ?>
.html" class="btnEdit">编辑</a> </td>
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
$("#get_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			//alert($('input[name=group_ids]').val());return;
			$("#getEx").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>