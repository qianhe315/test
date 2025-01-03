<?php /* Smarty version 2.6.22, created on 2015-12-10 11:29:32
         compiled from nailPaste_quotation/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="stock_code" value="<?php echo $this->_tpl_vars['stock_code']; ?>
" />
     <input type="hidden" name="ids" value="222" />
    
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            <li style="width:15%;">
				<label style="width:50px;">业务员：</label>
				<select class="combox" name="sale_user">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
        <?php endif; ?>
            <li style="width:25%;">
				<label style="width:60px">时间：</label>
				<input type="text" name="time_start" value="<?php echo $this->_tpl_vars['time_start']; ?>
" class="date" readonly="true" style="width:70px"/>-<input type="text" name="time_end" style="width:70px" value="<?php echo $this->_tpl_vars['time_end']; ?>
" class="date" readonly="true"/>
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">设计属性：</label>
				<select class="combox" name="quotation_status">
                <option value="">全部</option>
              	<option value="12" <?php if ($this->_tpl_vars['quotation_status'] == '12'): ?>selected="selected"<?php endif; ?>>无设计</option>
                <option value="11" <?php if ($this->_tpl_vars['quotation_status'] == '11'): ?>selected="selected"<?php endif; ?>>有设计</option>
                </select>
			</li>
            <li style="width:15%;">
				<label style=" width:50px">客户名：</label>
				<input type="text" name="customer_name" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
                
			</li>
            <li style="width:25%;">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">设计名称：</label>
				<input type="text" name="design_pic_name" style="width:80px;" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" />
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">报价编号：</label>
				<input type="text" name="quotation_code" style="width:110px;" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />    
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/xls_export" method="post" id="quotation_delete">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
            <!--<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/add_production_order/" target="navTab" rel="production_order_add" ><span>填写做货单</span></a></li>-->
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '68'): ?>
            <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/add/" target="navTab" rel="nailPaste_quotation_add" ><span>添加</span></a></li>
            <?php endif; ?>
			<li class="line">line</li>
            <!--<li><a class="delete" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/del/" target="selectedTodo" id="del" rel="group_ids[]" postType="string"><span>删除</span></a></li>
			<li class="line">line</li>-->
            <!--<li><a class="icon" href="#" target="selectedTodo" id="excel" rel="group_ids[]" postType="string" ><span>导出EXCEL</span></a></li>-->
            <!--<li><a class="icon" href="#" id="excel"><span>导出EXCEL</span></a></li>
			<li class="line">line</li>
-->            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/add_order/" target="selectedTodo" id="del" rel="group_ids_hot[]" postType="string" title="确定要批量添加做货单？"><span>批量添加做货单</span></a></li>
           <!-- <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
         <!--   <li>
            <a class="icon" title="更新设计对应客户?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/change_customer_code/"><span>更新设计对应客户</span></a>
            </li>
			<li class="line">line</li>
            <?php endif; ?>-->
		</ul>
	</div>
	<table class="table" width="1500" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids_hot[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="4%">时间</th>
                <th width="3%">设计属性</th>               
                <th width="3%">业务员</th>
                <th width="3%">客户代码</th>
                <th width="7%">客户名</th>
                <th width="7%">公司</th>
                <th width="4%">报价编号</th>
                <th width="5%">设计名称</th>
                <th width="6%">数量</th>
                <th width="4%">报价</th>
                <th width="4%">版费</th>
                <th width="4%">合计</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['quotation_sheet']): ?>
			 <?php $_from = $this->_tpl_vars['quotation_sheet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:auto;">
                <td><input name="group_ids_hot[]" id="c_id" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_date']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['quotation_category'] == 11): ?>
                   <td>有设计</td>
                   <?php else: ?>
                   <td>无设计</td>
                <?php endif; ?>
                
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_pic_name']; ?>
</td>
                 
                <td><div id="shuliang<?php echo $this->_tpl_vars['dis']['id']; ?>
" > <a onclick="return click_a('divOne_<?php echo $this->_tpl_vars['dis']['id']; ?>
','<?php echo $this->_tpl_vars['dis']['id']; ?>
')" style="cursor:pointer;"><?php echo $this->_tpl_vars['dis']['pcs']; ?>
</a></div><div id="divOne_<?php echo $this->_tpl_vars['dis']['id']; ?>
" style="display:none;"><input type="text" id="update_pcs_<?php echo $this->_tpl_vars['dis']['id']; ?>
" style="width:35px;height:19px;"  value="<?php echo $this->_tpl_vars['dis']['pcs']; ?>
" onkeyup="update_pcs(<?php echo $this->_tpl_vars['dis']['id']; ?>
)"/> <a style="cursor:pointer;" onclick="return queding('divOne_<?php echo $this->_tpl_vars['dis']['id']; ?>
','<?php echo $this->_tpl_vars['dis']['id']; ?>
')">确定</a></div></td>
                <td><?php echo $this->_tpl_vars['dis']['one_nail_price']; ?>
</td>
                <td><div id="version_<?php echo $this->_tpl_vars['dis']['id']; ?>
">$<?php echo $this->_tpl_vars['dis']['version']; ?>
</div></td>
                <td><div id="final_quote_<?php echo $this->_tpl_vars['dis']['id']; ?>
"><?php echo $this->_tpl_vars['dis']['final_quote']; ?>
</div></td>
               
                <td><!--<a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>-->
                <?php if ($this->_tpl_vars['user_hidden']['user_name'] == $this->_tpl_vars['dis']['saleman_name'] || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>
                <?php endif; ?>
                <a title="编辑" target="navTab" rel="nailPaste_quotation_add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                <?php if ($this->_tpl_vars['dis']['d_status'] != '1' && $this->_tpl_vars['dis']['d_status'] != '3' && $this->_tpl_vars['dis']['p_status'] != '1' && $this->_tpl_vars['dis']['p_status'] != '3'): ?>
                <a title="添加做货单" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/add_production_order-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" target="navTab" rel="production_order_add" class="btnAdd" ><span>填写做货单</span></a>
                <?php endif; ?>
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
</form>     
</div>
<script language="javascript">

    $("#excel").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			$("#quotation_delete").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
	
	function click_a(divDisplay,id){
			
		if(document.getElementById(divDisplay).style.display != "block"){
			document.getElementById(divDisplay).style.display = "block";
		}else{
			document.getElementById(divDisplay).style.display = "none";
		}
		$('#shuliang' + id).css('display','none');
    }
	   
	function queding(divDisplay,id){
		var shuliang = $("#update_pcs_"+id).val();
		var c = /^\d+(?=\.{0,1}\d+$|$)/ 
		var b=c.test(shuliang);
		if(b==true && shuliang>0){
			   $.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/submit_index_update',//通过Ajax取数据的目标页面
					data:{"id":id,"pcs":shuliang},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						
						 locals=locals.split("|");
						 if(locals[0]==1){
							 alert("修改成功");
							 document.getElementById(divDisplay).style.display = "none";
							 $('#shuliang' + id).css('display','block');
							 document.getElementById("shuliang"+id).innerHTML="<a  onClick='return click_a(\"divOne_"+id+"\",\""+id+"\" )' style=cursor:pointer;>"+locals[1]+"</a>"
						 }else{
							 alert("修改失败");
							 document.getElementById(divDisplay).style.display = "none";
							 $('#shuliang' + id).css('display','block');
							 document.getElementById("shuliang"+id).innerHTML="<a  onClick='return click_a(\"divOne_"+id+"\",\""+id+"\" )' style=cursor:pointer;>"+locals[1]+"</a>"
						 }
						
					}
		   });
		}else{
			alert("数量必须为正数")
		}
		
}   
function update_pcs(key){
	
	   $(document).ready(function(){
		   var id=key;
		   var pcs = $("#update_pcs_"+id).val();
		   $.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/update_index',//通过Ajax取数据的目标页面
					data:{"id":id,"pcs":pcs},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						locals=locals.split("|");
						$("#final_quote_"+key).html(locals[0]);
						$("#version_"+key).html(locals[1]);	
						
					}
		   });
		  
	   });
}
	

</script>