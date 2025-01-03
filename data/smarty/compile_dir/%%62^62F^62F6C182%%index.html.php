<?php /* Smarty version 2.6.22, created on 2016-03-31 14:54:39
         compiled from cargo_picking/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/index">
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
/cargo_picking/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
            <li style="width:25%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            <li style="width:25%;">
				<label style="width:50px;">做货时间：</label>
				<input type="text" name="start_zuohuo_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_zuohuo_time']; ?>
" />-<input type="text" name="end_zuohuo_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_zuohuo_time']; ?>
" />
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">订单号：</label>
				<input type="text" name="order_number" style="width:100px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />               
			</li>
<!--            <li style="width:20%;">
				<label style="width:60px;">材料名称：</label>
				<input type="text" name="material_name" style="width:100px;" value="<?php echo $this->_tpl_vars['material_name']; ?>
" />               
			</li>
            <li style="width:20%;">
				<label style="width:60px;">颜色：</label>
				<input type="text" name="material_color" style="width:100px;" value="<?php echo $this->_tpl_vars['material_color']; ?>
" />               
			</li>
            <li style="width:20%;">
				<label style="width:50px;">尺寸：</label>
				<input type="text" name="material_size" style="width:100px;" value="<?php echo $this->_tpl_vars['material_size']; ?>
" />               
			</li>-->
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div>
            </li>
            
		</ul>
<!--         <div class="subBar">
		</div>-->
	</div>
	</form>
</div>
<!--<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/cargo_picking_export_xls_export" method="post" id="cargo_picking_export">-->

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
       	 	
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/order_list/" target="navTab" rel="order_list"><span>显示材料信息</span></a></li>
            <li class="line">line</li>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/add_lingliao/" target="dialog" rel="add_lingliao" ><span>标记领料</span></a></li>
           <li class="line">line</li>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/chuli_order/" target="ajaxTodo" id="del" postType="string" title="确定批量处理?" ><span>处理订单材料按钮</span></a></li>
            <?php if ($this->_tpl_vars['group_id'] == '5'): ?>
            <li class="line">line</li>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/lost_order/" target="ajaxTodo" id="del" postType="string" title="确定批量处理?" ><span>处理遗漏做货订单</span></a></li>
            <?php endif; ?>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/all_order_info/" target="navTab" rel="all_order_info"><span>显示材料汇总信息</span></a></li>
<!--            <form rel="pagerForm" onsubmit="return navTabSearch(this);" id="print_content_submit" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/print_content_submit" method="post">
            <input type="button" id="print_content" value="导出打印内容" />
            <li><a class="icon" href="#" id="cargo_picking_ex" ><span>导出EXCEL</span></a></li> 
         </form>-->
         
          
		</ul>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/cargo_picking_export_xls_export" method="post" id="cargo_picking_export">

	<table class="table" width="100%" layoutH="138">
		<thead>
       		
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="5">编号</th>
                <th width="30">时间</th>
                <th width="30">做货时间</th>
                <th width="30">订单号</th>
                <th width="30">片数</th>
<th width="20%" colspan="5">名称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||颜色&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||尺寸&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||数量&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||总数量</td>
                <th width="30">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['material_acquisition']): ?>
			 <?php $_from = $this->_tpl_vars['material_acquisition']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['od']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['od']['id']; ?>
" >
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['od']['id']; ?>
" type="checkbox"></td>
               <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['od']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['od']['goods_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['od']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['od']['number']; ?>
</td>
                    <?php if ($this->_tpl_vars['session_id'] != 65 && $this->_tpl_vars['session_id'] != 66): ?>
                    <td colspan="4">
                    <table class="list" width="400">
                    <tbody>
                   
                     <?php $_from = $this->_tpl_vars['od']['acquisition_material']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                     <tr>
                     <td  width="94" style="text-align:right;"><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
                     <td  width="44" style="text-align:right;"><?php echo $this->_tpl_vars['d']['color']; ?>
</td>
                     <td  width="44"><?php echo $this->_tpl_vars['d']['size']; ?>
</td>
                     <td  width="44"><?php echo $this->_tpl_vars['d']['number']; ?>
</td>  
                     <td  width="34"><?php echo $this->_tpl_vars['d']['all_number']; ?>
</td>  
                     </tr>
                     <?php endforeach; endif; unset($_from); ?>
                    </tbody>
                    </table>
                    </td>
                    <?php endif; ?>  
                <td>
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/del-id-<?php echo $this->_tpl_vars['od']['id']; ?>
.html" class="btnDel">删除</a>
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
<script type="text/javascript" language="javascript">



 $(document).ready(function(){
	 
	$("#print_content").click(function (){

			var check_arr = '';
			$("input[name='group_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += '|'+$(this).val();
				}
			});
		if(check_arr!=''){
				$("#print_content_submit").submit();
		}else{
			alert("请选择要打印的信息！");
		}
    });
	
});
/*$("#cargo_picking_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			
			alert("即将导出选中数据");
			$("#cargo_picking_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});*/
</script>