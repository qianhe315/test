<?php /* Smarty version 2.6.22, created on 2015-12-18 09:06:27
         compiled from cn_stock_surplus/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_surplus/index">
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
/cn_stock_surplus/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
            
             <li style="width:20%;">
				<label style="width:60px;">材料名称：</label>
				<input type="text" name="material_name" value="<?php echo $this->_tpl_vars['material_name']; ?>
" />
                
			</li>
            
             <li style="width:20%;">
				<label style="width:60px;">颜色：</label>
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
				<label style="width:60px;">尺寸：</label>
				<select name="size">
                <option value=""></option>
                 <?php $_from = $this->_tpl_vars['size_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                 	<option value="<?php echo $this->_tpl_vars['val']['id']; ?>
"<?php if ($this->_tpl_vars['size'] == $this->_tpl_vars['val']['id']): ?> selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['val']['name1']; ?>
(<?php echo $this->_tpl_vars['val']['name']; ?>
)</option>
                 <?php endforeach; endif; unset($_from); ?>
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
<form rel="pagerForm" onsubmit="return navTabSearch(this);" id="need_purchase_submit" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_surplus/need_purchase" method="post">
 </form>      
</div> 
<div class="pageContent">

<form rel="pagerForm" onsubmit="return navTabSearch(this);" id="material_procurement" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_surplus/material_procurement" method="post">
	<div class="panelBar">
		<ul class="toolBar">   
         <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_surplus/need_purchase" target="navTab" rel="need_purchase"  ><span>需采购列表</span></a></li>  
			
         <li class="line">line</li>
         <input type="button" id="stock_surplus_submit" value="材料采购" />
          
		</ul>
	</div>
	<table class="table" width="98%" layoutH="138">
		<thead>
       		
			<tr>
                <th width="2%"><input type="checkbox" group="group_id[]" class="checkboxCtrl"></th>

                <th width="8%">材料名称</th>
                <th width="5%">颜色</th>
                <th width="5%">尺寸</th>
                <th width="5%">计量单位</th>
                <th width="5%">库存数量</th>
                <th width="5%">预警数量</th>
                <th width="5%">单价</th>
                <th width="5%">金额</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['stock_surplus'] != ""): ?>
			 <?php $_from = $this->_tpl_vars['stock_surplus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ss']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_id[]" value="<?php echo $this->_tpl_vars['ss']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['ss']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['color_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['new_size_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['unit_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['all_num']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['Warning_count']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['one_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['money']; ?>
</td>
                <td><a title="编辑" target="dialog" rel="supplier_attributes_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_surplus/edit-id-<?php echo $this->_tpl_vars['ss']['id']; ?>
.html" class="btnEdit">编辑</a> </td>
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
<script type="text/javascript" language="javascript">



 $(document).ready(function(){
	//材料采购
	$("#stock_surplus_submit").click(function (){

			var check_arr = '';
			$("input[name='group_id[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				
				}else{
					check_arr += '|'+$(this).val();
	
				}
			});
		if(check_arr!=""){
				$("#material_procurement").submit();
		}else{
			alert("请选择信息！");
		}
	});	 
	
	
		});	
	</script>