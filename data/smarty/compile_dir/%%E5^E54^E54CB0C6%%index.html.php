<?php /* Smarty version 2.6.22, created on 2024-09-03 09:19:05
         compiled from metrial_procure/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/metrial_procure/index">
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
/metrial_procure/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
         
             <li style="width:15%;">
				<label style="width:60px">时间：</label>
				<input type="text" name="start_time" class="date" readonly="readonly" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="readonly" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
			
            <li style="width:15%;">
				<label style="width:70px;">采购单号：</label>
				<input type="text" name="mp_number"  value="<?php echo $this->_tpl_vars['mp_number']; ?>
"style="width:62px;" />
                
			</li>
            
             <li style="width:15%;">
				<label style="width:60px;">供应商：</label>
				<input type="text" name="supplier_s" value="<?php echo $this->_tpl_vars['supplier_s']; ?>
" style="width:62px;" />
                
			</li>
            
            <li style="width:15%;">
				<label style="width:80px;">供应商代码：</label>
				<input type="text" name="supplier_code" value="<?php echo $this->_tpl_vars['supplier_code']; ?>
" style="width:62px;" />
			</li>
            
            <li style="width:15%;">
				<label style="width:80px;">颜色：</label>
				<input type="text" name="supplier_color" value="<?php echo $this->_tpl_vars['supplier_color']; ?>
" style="width:62px;" />
			</li>
            
            
            
		</ul>
        <div class="subBar">
        	<label style="width:120px;">材料采购税后总额：</label>
            <input type="text" disabled="disabled"  value="<?php echo $this->_tpl_vars['material_table_all_price']; ?>
" style="width:100px;" />
			<ul>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
            </ul>
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
<form  id="mp_excel_info" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/metrial_procure/get_mp_excel" method="post">
	<div class="panelBar">
		<ul class="toolBar">
        <?php if ($this->_tpl_vars['s_user_id'] == 1 || $this->_tpl_vars['s_user_id'] == 119 || $this->_tpl_vars['s_user_id'] == 38 || $this->_tpl_vars['s_user_id'] == 126 || $this->_tpl_vars['s_user_id'] == 107): ?>
        <li class="line">line</li>
        <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/metrial_procure/add" target="navTab" rel="add_metrial_procure"><span>添加</span></a></li>
        <li class="line">line</li>
        <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/metrial_procure/need_purchase" target="navTab" rel="need_purchase"><span>需采购列表</span></a></li>
        <?php endif; ?>
        <li class="line">line</li>  
        <li><a class="icon" id="get_excel" href="#"><span>导出Excel</span></li></a>
        <li class="line">line</li>   
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="group_id[]" class="checkboxCtrl"></th>
                <th width="3%">编号</th>
                <th width="6%">时间</th>
                <th width="8%">采购单号</th>
                <th width="5%">入库状态</th>
                <th width="5%">供应商代码</th>
                <th width="8%">供应商</th>
                
                <!--<th width="15%">收货地址</th>-->
                <th width="5%">采购数量</th>
                <th width="5%">货币</th>
                <th width="5%">是否含税</th>
                <th width="5%">总额</th>
                <th width="4%">税点%</th>               
				<th width="5%">税后总额</th>  
                <th width="5%">备注</th>
				<th width="7%">税号</th> 
                <th width="7%">操作</th>

			</tr>
		</thead>
		<tbody>
        	<?php if ($this->_tpl_vars['metrial_procure']): ?>
			 <?php $_from = $this->_tpl_vars['metrial_procure']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
              	<td><input name="group_id[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['purchase_order_number']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['storage_status'] == '1'): ?>是
                <?php elseif ($this->_tpl_vars['dis']['storage_status'] == '2'): ?>否
                <?php else: ?>
                <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['dis']['supplier_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['supplier_s']; ?>
</td>
                <!--<td><?php echo $this->_tpl_vars['dis']['use']; ?>
</td>-->

                <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                <td>
                <?php $_from = $this->_tpl_vars['exchangerate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ex']):
?>
                	<?php if ($this->_tpl_vars['ex']['id'] == $this->_tpl_vars['dis']['currency']): ?>
                    <?php echo $this->_tpl_vars['ex']['exchangerate_name']; ?>

                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                </td>
                <td>
                <?php if ($this->_tpl_vars['dis']['tax'] == '1'): ?>是
                <?php elseif ($this->_tpl_vars['dis']['tax'] == '2'): ?>否
                <?php else: ?>
                <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['dis']['total_amount']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['tax_value']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['after_tax_amount']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['note']; ?>
</td>
                <td>
                <div id="tariff_a_<?php echo $this->_tpl_vars['dis']['id']; ?>
" > 
                <a onclick="return click_a('<?php echo $this->_tpl_vars['dis']['id']; ?>
')" style="cursor:pointer;"><?php echo $this->_tpl_vars['dis']['tariff']; ?>
</a>
                </div>
                <div id="tariff_input_<?php echo $this->_tpl_vars['dis']['id']; ?>
" style="display:none;">
                    <input  type="text" style="width:70px" value="<?php echo $this->_tpl_vars['dis']['tariff']; ?>
" id="tariff_val_<?php echo $this->_tpl_vars['dis']['id']; ?>
"  />
                    <a style="cursor:pointer;" onclick="return submit_change('<?php echo $this->_tpl_vars['dis']['id']; ?>
')">确定</a>
                </div>
                 </td>
                <td><?php if ($this->_tpl_vars['s_user_id'] == 1 || $this->_tpl_vars['s_user_id'] == 119 || $this->_tpl_vars['s_user_id'] == 38 || $this->_tpl_vars['s_user_id'] == 126): ?>
                	<a title="编辑" target="navTab" rel="add_metrial_procure" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/metrial_procure/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                	<a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/metrial_procure/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>
                    <?php endif; ?>
                    <a class="btnAdd" title="生成采购单" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/metrial_procure/export_excel-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html">生成采购单</a>
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
<script language="javascript">

//$(document).ready(function(e) {
//    var len = $(".tariff_click").length;
//	alert(len);
//	if(len>0){
//		for(var i=0;i++;i<len){
//			$(this).attr("index",i);
//			$(".table .tariff_click").eq(i).unbind("click");
//			$(".table .tariff_click").eq(i).bind("click",function(){
//				alert(123);	
//			});
//		}
//	}
//});

	//税号input显示
    function click_a(id){
		$('#tariff_a_' + id).css('display','none');
		$('#tariff_input_' + id).css('display','block');
    }
	
	//税号修改提交
	function submit_change(id){
		
		var tariff_val	=$("#tariff_val_"+id).val();
		if(tariff_val!=''){
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/metrial_procure/update_tariff',//通过Ajax取数据的目标页面
					data:{"tariff_val":tariff_val,"id":id},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
				
						 if(locals==1){
							 alert("修改成功");
							 $('#tariff_a_' + id).css('display','block');
							 $('#tariff_input_' + id).css('display','none');
							 document.getElementById("tariff_a_"+id).innerHTML="<a  onClick='return click_a(\""+id+"\" )' style=cursor:pointer;>"+tariff_val+"</a>"
						 }else{
							 alert("修改失败");
							 $('#tariff_input_' + id).css('display','none');
							 $('#tariff_a_' + id).css('display','block');
							 document.getElementById("tariff_a_"+id).innerHTML="<a  onClick='return click_a(\""+id+"\" )' style=cursor:pointer;>"+tariff_val+"</a>"
						 }
						
					}
		   });
			
		}
	}
	
//导出Excel js
$(document).ready(function(e) {
	$("#get_excel").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			//alert($('input[name=group_ids]').val());return;
			$("#mp_excel_info").submit();
		}else{
			alert("请选择导出的数据");
		}	
	});
});
		
	
</script>