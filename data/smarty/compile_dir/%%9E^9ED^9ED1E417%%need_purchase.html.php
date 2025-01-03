<?php /* Smarty version 2.6.22, created on 2016-01-26 10:10:06
         compiled from metrial_procure/need_purchase.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/metrial_procure/need_purchase">
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
/metrial_procure/need_purchase" method="get">
	<div class="searchBar">
		<ul class="searchContent">
            

           <li style="width:25%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            <li style="width: 16%;">
            <label style="width:60px;">处理状态：</label>
            <select class="combox" name="process_status">
                <option value="">全部</option>
                <option value="1" <?php if ($this->_tpl_vars['process_status'] == '1'): ?>selected="selected"<?php endif; ?>>未处理</option>
                <option value="2"<?php if ($this->_tpl_vars['process_status'] == '2'): ?>selected="selected"<?php endif; ?>>已处理</option>
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
<form rel="pagerForm" onsubmit="return navTabSearch(this);" id="metrial_procure_submit" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/metrial_procure/metrial_procure_list" method="post">
	<div class="panelBar">
		<ul class="toolBar">
 			<li class="line">line</li>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/metrial_procure/audited/" target="selectedTodo" id="del" rel="group_id[]" postType="string" title="是否批量生成已处理?"><span>已处理</span></a></li>

            <li class="line">line</li>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/metrial_procure/no_audited/" target="selectedTodo" id="del" rel="group_id[]" postType="string" title="是否批量生成未处理?"><span>未处理</span></a></li>

            <li class="line">line</li>
            <input type="button" id="metrial_procure_add" value="材料采购" />
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>       		
			<tr>
             <th width="2%"><input type="checkbox" group="group_id[]" class="checkboxCtrl"></th>
                <th width="30">时间</th>
                <th width="30">处理状态</th>
                <th width="30">材料名称（英文）</th>
                <th width="30">材料名称（中文）</th>
                <th width="30">颜色</th>
                <th width="30">尺寸</th>
                <th width="30">紧急程度</th>
                <th width="30">需要数量</th>
                <th width="30">已采购数量</th>
                <th width="30">单位</th>               
                
			</tr>
		</thead>
		<tbody>
<?php if ($this->_tpl_vars['need_purchase'] != ""): ?>
			 <?php $_from = $this->_tpl_vars['need_purchase']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ss']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_id[]" value="<?php echo $this->_tpl_vars['ss']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['ss']['insert_time']; ?>
</td>
                <?php if ($this->_tpl_vars['ss']['process_status'] == 1): ?>
                <td>未处理</td>
                <?php else: ?>
                 <td>已处理</td>
                 <?php endif; ?>
                <td><?php echo $this->_tpl_vars['ss']['material_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['material_chinese_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['material_color']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['material_size']; ?>
</td>
 				<td>
                    <?php if ($this->_tpl_vars['ss']['n_state'] == 0): ?>
                    普通
					<?php else: ?>
                    加急
                    <?php endif; ?>                        
                </td>
                <td><?php echo $this->_tpl_vars['ss']['quantity']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['already_quantity']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ss']['unit_name']; ?>
</td>
                 
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
	$("#metrial_procure_add").click(function (){
			var check_arr = '';
			$("input[name='group_id[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += '|'+$(this).val();
				}
			});
		if(check_arr!=''){
				$("#metrial_procure_submit").submit();
		}else{
			alert("请选择信息！");
		}
    });
	
});
</script>