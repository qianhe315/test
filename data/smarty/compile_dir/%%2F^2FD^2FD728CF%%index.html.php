<?php /* Smarty version 2.6.22, created on 2017-11-28 15:54:35
         compiled from materials_management/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_management/index">
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
/materials_management/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:15%;">
				<label style="width:40px;">名称：</label>
                <input type="text" class="textInput" style="width:62px;" name="material_name" value="<?php echo $this->_tpl_vars['material_name']; ?>
" />
			</li>
            <li style="width:15%;">
				<label style="width:40px;">颜色：</label>
				<input type="text" class="textInput" style="width:62px;" name="material_color" value="<?php echo $this->_tpl_vars['material_color']; ?>
" />
			</li>
            <li style="width:15%;">
				<label style="width:40px;">尺寸：</label>
				<input type="text" class="textInput" style="width:62px;" name="select_size" value="<?php echo $this->_tpl_vars['select_size']; ?>
" />
			</li>
          
            <li style="width:25%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
         <div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_management/act_out_excel" method="post" id="new_excel">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_management/add" target="Dialog" rel="materials_management"  ><span>添加</span></a></li>
            <li class="line">line</li>
             <li><a class="icon" href="#"  id='out_excel'  ><span>导出Excel</span></a></li>
            <li class="line">line</li>
             <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_management/in_excel" target="navTab" rel="mark_acquisition"  ><span>导入Excel</span></a></li>
            <li class="line">line</li>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_management/sale_use/" target="selectedTodo" id="del" rel="group_ids[]" postType="string" title="确定销售可使用?"><span>销售可使用</span></a></li>   
            <li class="line">line</li>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_management/no_use/" target="selectedTodo" id="del" rel="group_ids[]" postType="string" title="确定销不售可使用?"><span>销售不可使用</span></a></li>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_management/tshirt_use/" target="selectedTodo" id="del" rel="group_ids[]" postType="string" title="确定T恤直喷可使用?"><span>T恤直喷可使用</span></a></li>
            <li class="line">line</li>
             <li><a class="add" href="#" id="create_barcode"><span>生成材料条形码</span></a></li> 
            <li class="line">line</li>
		</ul>
	</div>
    
	<table class="table" width="100%" layoutH="138">
		<thead>
       		
			<tr>
           	    <th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="6%">时间</th>
                <th width="6%">销售使用状态</th>
               	<!-- <th width="7%">材料代码</th>-->
                <th width="5%">属性</th>
                <th width="7%">名称</th>
                <th width="7%">颜色</th>
                <th width="7%">尺寸</th>
                <th width="7%">基准单位</th>
                <th width="4%">数量1</th>
                <th width="7%">换算数量</th>
                <th width="4%">数量2</th>
                <th width="4%">重量1</th>
                <th width="6%">换算重量</th>
                <th width="4%">重量2</th>
                <th width="4%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['times']): ?>
			 <?php $_from = $this->_tpl_vars['times']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['s_time']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                 <td>销售可使用</td>
                 <?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>
                 <td>不可使用</td>
                 <?php elseif ($this->_tpl_vars['dis']['status'] == '3'): ?>
                 <td>T恤直喷可用</td>
                 <?php else: ?>
                 <?php endif; ?>
               <!-- <td><?php echo $this->_tpl_vars['dis']['material_code']; ?>
</td> -->
                <td>
                	<?php if ($this->_tpl_vars['dis']['property'] == '1'): ?>
                         主要材料
                    <?php endif; ?>   
                    <?php if ($this->_tpl_vars['dis']['property'] == '2'): ?>
                         辅助材料
                    <?php endif; ?>    
                </td>
                <td><?php echo $this->_tpl_vars['dis']['material_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['material_color']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['size_m_w'] != '' || $this->_tpl_vars['dis']['size_m_h'] != ''): ?>
                         <?php echo $this->_tpl_vars['dis']['size_m_w']; ?>
mmx<?php echo $this->_tpl_vars['dis']['size_m_h']; ?>
mm
                <?php elseif ($this->_tpl_vars['dis']['size'] != ''): ?>         
                       <?php echo $this->_tpl_vars['dis']['size']; ?>

                <?php elseif ($this->_tpl_vars['dis']['size_mm'] != ''): ?>
                		<?php echo $this->_tpl_vars['dis']['size_mm']; ?>
mm
                <?php else: ?>
                <?php endif; ?>
                </td>   
                <td><?php echo $this->_tpl_vars['dis']['unit_name']; ?>
</td>            
                <td><?php echo $this->_tpl_vars['dis']['number_unit2']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quantity']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['number_unit1']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['weight_unit2']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['weight']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['weight_unit1']; ?>
</td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_management/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" rel="materials_management_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_management/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a></td>
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
<script language="javascript">
$(document).ready(function()
{	
	   $("#create_barcode").click(function (){

			var check_arr = '';

			$("input[name='group_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += '|'+$(this).val();	
				}
			});			
            var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择信息！');
			}else{
			    window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_management/barcode-'+p);
				
			}	
		});
		
		
		$("#out_excel").click(function (){
			if($("input[type='checkbox']").is(":checked")){
				alert("即将导出选中数据");
				$("#new_excel").submit();
			}else{
				alert("请选择导出的数据");
			}
		});
		
});
</script>