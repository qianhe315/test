<?php /* Smarty version 2.6.22, created on 2014-08-26 14:56:45
         compiled from supplier_management/color.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/supplier_management/color">
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
/supplier_management/color" method="get">
	<div class="searchBar">
		<ul class="searchContent">            
         
             <li style="width:20%;">
				<label style="width:100px;">材料名：</label>
				<input type="text" name="material_english_name" id="material_english_name" style="width:70px;" value="<?php echo $this->_tpl_vars['material_name']; ?>
" />
                
			</li>
             <li style="width:20%;">
				<label style="width:100px;">材料中文名：</label>
				<input type="text" name="material_chinese_name" id="material_chinese_name" style="width:70px;" value="<?php echo $this->_tpl_vars['material_chinese_name']; ?>
" />
                
			</li>
            
             <li style="width:20%;">
				<label style="width:50px;">颜色：</label>
				<input type="text" name="material_color" id="material_color" style="width:70px;" value="<?php echo $this->_tpl_vars['material_color']; ?>
" />
			</li>
            <li style="width:20%;">
				<label style="width:50px;">尺寸：</label>
				<input type="text" name="size" id="size"style="width:70px;" value="<?php echo $this->_tpl_vars['size']; ?>
" />
			</li>
            <li style="width:20%;">
				<label style="width:80px;">供应商颜色：</label>
				<input type="text" name="id_aa" id="id_aa" style="width:70px;" value="<?php echo $this->_tpl_vars['id_aa']; ?>
" />
			</li>
            <input type="hidden" name="idd" value="<?php echo $this->_tpl_vars['id_a']; ?>
" />
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
	<div class="panelBar">
		<ul class="toolBar">

		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>       		
			<tr>  
                <th width="22"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>          
            	<th width="30">编号</th>
                <th width="30">材料中文名</th>
                <th width="30">材料名</th>
                <th width="30">颜色</th>
                <th width="30">尺寸</th>
                <th width="30">供应商颜色</th>
                <th width="30">操作</th>

			</tr>
		</thead>
		<tbody>
         <?php if ($this->_tpl_vars['materials']): ?>
			 <?php $_from = $this->_tpl_vars['materials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ms']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['ms']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['ms']['material_chinese_name']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['ms']['material_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ms']['material_color']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['ms']['size_m_w'] != '' || $this->_tpl_vars['ms']['size_m_w'] != ''): ?>
                         <?php echo $this->_tpl_vars['ms']['size_m_w']; ?>
mmx<?php echo $this->_tpl_vars['ms']['size_m_h']; ?>
mm
                <?php elseif ($this->_tpl_vars['ms']['size'] != ''): ?>         
                       <?php echo $this->_tpl_vars['ms']['size']; ?>

                <?php elseif ($this->_tpl_vars['ms']['size_mm'] != ''): ?>
                		<?php echo $this->_tpl_vars['ms']['size_mm']; ?>
mm
                <?php else: ?>
                <?php endif; ?>
                </td>               
                <td><?php echo $this->_tpl_vars['ms']['idd']; ?>
</td>
                <td><a title="编辑" target="navTab" rel="stock_manage_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/supplier_management/color_edit-id-<?php echo $this->_tpl_vars['ms']['id']; ?>
-id_a-<?php echo $this->_tpl_vars['id_a']; ?>
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