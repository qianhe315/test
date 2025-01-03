<?php /* Smarty version 2.6.22, created on 2015-12-12 11:14:54
         compiled from cn_stock_surplus/need_purchase.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_surplus/need_purchase">
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
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" id="mark_acquisition_new" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_surplus/need_purchase" method="get">
	<div class="searchBar">
		<ul class="searchContent">
            

           <li style="width:25%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            <li style="width:25%;">
				<label style="width:100px;">处理状态：</label>
                <select class="combox" name="process_status">
                <option value="">全部</option>
                <option value="1" <?php if ($this->_tpl_vars['process_status'] == '1'): ?>selected="selected"<?php endif; ?>>未处理</option>
                <option value="2" <?php if ($this->_tpl_vars['process_status'] == '2'): ?>selected="selected"<?php endif; ?>>已处理</option>
                </select>
                
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
<div class="pageContent">
<form rel="pagerForm" onsubmit="return navTabSearch(this);" id="mark_acquisition_new" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/mark_acquisition" method="post">
	<div class="panelBar">
		<ul class="toolBar">

			<li><a class="edit"  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_surplus/need_purchase_del" target="selectedTodo" rel="group_ids[]" postType="string" title="确定要批量删除？" ><span>批量删除</span></a></li>
           
		</ul>
	</div>
	<table class="table" width="98%" layoutH="138">
		<thead>       		
			<tr>
            	<th width="1%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="5%">时间</th>
                <th width="5%">处理状态</th>
                <th width="8%">材料名称</th>
                <th width="5%">颜色</th>
                <th width="5%">尺寸</th>
                <th width="5%">紧急程度</th>
                <th width="5%">数量</th>
                <th width="5%">单位</th>               
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if ($this->_tpl_vars['need_purchase'] != ""): ?>
			<?php $_from = $this->_tpl_vars['need_purchase']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ss']):
?>
        		<tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
              	<td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['ss']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['insert_time']; ?>
</td>
                <?php if ($this->_tpl_vars['ss']['process_status'] == 1): ?>
                <td>未处理</td>
                <?php else: ?>
                 <td>已处理</td>
                 <?php endif; ?>
                <td><?php echo $this->_tpl_vars['ss']['material_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['color_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['size_name']; ?>
(<?php echo $this->_tpl_vars['ss']['size_name_E']; ?>
)</td>
				<td>
                    <?php if ($this->_tpl_vars['ss']['n_state'] == 0): ?>
                    普通
					<?php else: ?>
                    加急
                    <?php endif; ?>                        
                </td>
                <td><?php echo $this->_tpl_vars['ss']['quantity']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['unit_name']; ?>
</td>
                <?php if ($this->_tpl_vars['ss']['process_status'] == 1): ?>
                <td><a title="编辑" target="dialog" rel="need_purchase_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_surplus/need_purchase_edit-id-<?php echo $this->_tpl_vars['ss']['id']; ?>
.html" class="btnEdit">编辑</a> </td>
            	<?php else: ?>
            	<td></td>
            	<?php endif; ?>
            	</tr>
        	<?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
		</tbody> 
	</table>
</form>    
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
</div>