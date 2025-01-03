<?php /* Smarty version 2.6.22, created on 2016-01-09 11:18:46
         compiled from cn_jst_other_register_storage/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_other_register_storage/index">
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
/cn_jst_other_register_storage/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:25%;">
				<label style="width:50px;">名称：</label>
                <input type="text" name="omr_name" value="<?php echo $this->_tpl_vars['omr_name']; ?>
" />
			</li>
            <li style="width:15%;">
                <label style="width:50px;">颜色：</label>
				<select name="omr_color">
                <option value=""></option>
                 <?php $_from = $this->_tpl_vars['color_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                 	<option value="<?php echo $this->_tpl_vars['val']['id']; ?>
"<?php if ($this->_tpl_vars['omr_color'] == $this->_tpl_vars['val']['id']): ?> selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['val']['name']; ?>
</option>
                 <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="width:15%;">
				<label style="width:50px;">尺寸：</label>
				<select name="omr_size">
                <option value=""></option>
                 <?php $_from = $this->_tpl_vars['size_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                 	<option value="<?php echo $this->_tpl_vars['val']['id']; ?>
"<?php if ($this->_tpl_vars['omr_size'] == $this->_tpl_vars['val']['id']): ?> selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['val']['name1']; ?>
(<?php echo $this->_tpl_vars['val']['name']; ?>
)</option>
                 <?php endforeach; endif; unset($_from); ?>
                </select>
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
/cn_jst_other_register_storage/xls_export" method="post" id="new_export_new">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        	<li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_other_register_storage/add" target="dialog" rel="cn_jst_other_register_storage"><span>添加</span></a></li>
            <li class="line">line</li>
            <!--<li><a class="delete" href="*" target="navTab" rel="mark_acquisition"  ><span>删除</span></a></li>
			<li class="line">line</li>-->
           <li><a class="icon" href="#" id="new_ex" ><span>导出EXCEL</span></a></li>
			<li class="line">line</li>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_other_register_storage/materials_exit" target="navTab" rel="tongbu_add"  ><span>材料扫码入库</span></a></li>
             <li class="line">line</li>
			 <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_other_register_storage/del_piliang/" target="selectedTodo" id="del" rel="group_ids[]" postType="string" title="确定要批量删除？"><span>批量删除</span></a></li>
		</ul>
	</div>
	<table class="table" width="98%" layoutH="138">
		<thead>
       		
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="5%">入库日期</th>
                <th width="8%">材料名称</th>
                <th width="4%">颜色</th>
                <th width="4%">尺寸</th>               
                <th width="5%">入库数量</th>
                <th width="2%">单位</th>
                <th width="5%">单价</th>
                <th width="15%">入库来源</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
      
        <?php if ($this->_tpl_vars['cn_jst_other_register_storage']): ?>
			 <?php $_from = $this->_tpl_vars['cn_jst_other_register_storage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['omr']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['omr']['id']; ?>
" type="checkbox"></td>
               <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['omr']['quote_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['omr']['omr_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['omr']['color_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['omr']['size_name']; ?>
(<?php echo $this->_tpl_vars['omr']['size_name_E']; ?>
)</td>
                <td><?php echo $this->_tpl_vars['omr']['omr_quantity']; ?>
</td>
                <td><?php echo $this->_tpl_vars['omr']['unit']; ?>
</td>
                <td>
                    <div id="div_price<?php echo $this->_tpl_vars['omr']['id']; ?>
" onclick="show_input_price(<?php echo $this->_tpl_vars['omr']['id']; ?>
)" style="cursor: hand;cursor: pointer;" ><?php echo $this->_tpl_vars['omr']['price']; ?>
</div>
                    <input type="text"  style="display:none; width:50px;" id="price<?php echo $this->_tpl_vars['omr']['id']; ?>
" value="<?php echo $this->_tpl_vars['omr']['price']; ?>
" />
                    <div id="div_price_way<?php echo $this->_tpl_vars['omr']['id']; ?>
" style="display:none;" >
                        <a href="#" onclick="price_is_ok(<?php echo $this->_tpl_vars['omr']['id']; ?>
)"><button type='button'>确定</button></a>
                        <a href="#" onclick="price_is_cancel(<?php echo $this->_tpl_vars['omr']['id']; ?>
)"><button type='button'>取消</button></a>
                    </div>
                </td>
                <td>
                    <div id="div_where<?php echo $this->_tpl_vars['omr']['id']; ?>
" onclick="show_input_where(<?php echo $this->_tpl_vars['omr']['id']; ?>
)" style="cursor: hand;cursor: pointer;"><?php echo $this->_tpl_vars['omr']['go_where']; ?>
</div>
                    <input type="text"  style="display:none" onkeyup="change_where(<?php echo $this->_tpl_vars['omr']['id']; ?>
)"   id="where<?php echo $this->_tpl_vars['omr']['id']; ?>
" value="<?php echo $this->_tpl_vars['omr']['go_where']; ?>
" />
                    <div id="div_where_way<?php echo $this->_tpl_vars['omr']['id']; ?>
" style="display:none;" >
                        <a href="#" onclick="where_is_ok(<?php echo $this->_tpl_vars['omr']['id']; ?>
)"><button type='button'>确定</button></a>
                        <a href="#" onclick="where_is_cancel(<?php echo $this->_tpl_vars['omr']['id']; ?>
)"><button type='button'>取消</button></a>
                    </div>
                </td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_other_register_storage/del-id-<?php echo $this->_tpl_vars['omr']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" rel="exit_storehouse_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_other_register_storage/edit-id-<?php echo $this->_tpl_vars['omr']['id']; ?>
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
<script>
$("#new_ex").click(function (){
	if($("input[type='checkbox']").is(":checked")){
		alert("即将导出选中数据");
		$("#new_export_new").submit();
	}else{
		alert("请选择导出的数据");
	}
});

//显示单价的input
function show_input_price(id){
	$("#price"+id).css("display","block");
	$("#div_price"+id).css("display","none");
	$("#div_price_way"+id).css("display","block");
}

//确定修改单价js
function price_is_ok(id){
	var price	=	$("#price"+id).val();
	var z= /^[0-9]*$/;
	var re	=	z.test(price);
	if(price!=''&&re!=false){
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_other_register_storage/change_price',
			type:'post',
			dataType:"text",
			data:{'id':id,'price':price},
			success: function(data){
				if(data==1){
					$("#div_price"+id).html(price);
					$("#price"+id).css("display","none");
					$("#div_price"+id).css("display","block");
					$("#div_price_way"+id).css("display","none");
				}else{
					
				}
			}	
		});
	}else{
		alert("单价不能为空，且必须是数字！");	
	}
}

//取消修改单价js
function price_is_cancel(id){
	$("#price"+id).css("display","none");
	$("#div_price"+id).css("display","block");
	$("#div_price_way"+id).css("display","none");
	$("#price"+id).val($("#div_price"+id).html());
}


//显示来源的input
function show_input_where(id){
	$("#where"+id).css("display","block");
	$("#div_where"+id).css("display","none");
	$("#div_where_way"+id).css("display","block");
}

//确定修改来源js
function where_is_ok(id){
	var where	=	$("#where"+id).val();
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_other_register_storage/change_where',
		type:'post',
		dataType:"text",
		data:{'id':id,'where':where},
		success: function(data){
			if(data==1){
				$("#div_where"+id).html(where);
				$("#where"+id).css("display","none");
				$("#div_where"+id).css("display","block");
				$("#div_where_way"+id).css("display","none");
			}else{
				
			}
		}	
	});
}

//取消修改来源js
function where_is_cancel(id){
	$("#where"+id).css("display","none");
	$("#div_where"+id).css("display","block");
	$("#div_where_way"+id).css("display","none");
	$("#where"+id).val($("#div_where"+id).html());
}

</script>