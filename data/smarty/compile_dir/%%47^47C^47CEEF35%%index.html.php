<?php /* Smarty version 2.6.22, created on 2015-12-12 09:32:07
         compiled from cn_register_storage/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_register_storage/index">
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
/cn_register_storage/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
            <!--<li style="width:16%;">
				<label style="width:80px">入库负责人：</label>
				<select class="combox" name="saleman_user_id">
                <option value=""></option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_id']; ?>
" <?php if ($this->_tpl_vars['du']['user_id'] == $this->_tpl_vars['saleman_user_id']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
             <li style="width:16%;">
				<label>采购负责人：</label>
				<select class="combox" name="saleman_user_id">
                <option value=""></option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_id']; ?>
" <?php if ($this->_tpl_vars['du']['user_id'] == $this->_tpl_vars['saleman_user_id']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>-->
        <li style="width:23%;">
				<label style="width:70px;">入库时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
			</li>
            <li style="width:25%;">
				<label style="width:70px;">采购时间：</label>
				<input type="text" name="start_time_1" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time_1']; ?>
" />-<input type="text" name="end_time_1" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time_1']; ?>
" />
                
			</li>
            <li style="width:18%;">
				<label style="width:70px;">对账状态：</label>
				<select class="combox" name="duizhang_status">
                <option value="">全部</option>
              	<!--<option value="1" <?php if ($this->_tpl_vars['order_status'] == '1'): ?>selected="selected"<?php endif; ?>>等待入库</option>-->
                <option value="0" <?php if ($this->_tpl_vars['duizhang_status'] == '0'): ?>selected="selected"<?php endif; ?>>否</option>
                <option value="1" <?php if ($this->_tpl_vars['duizhang_status'] == '1'): ?>selected="selected"<?php endif; ?>>是</option>
                </select>
			</li>            
            <li style="width:18%;">
				<label style="width:70px;">入库状态：</label>
				<select class="combox" name="storage_status">
                <option value="">全部</option>
              	<!--<option value="1" <?php if ($this->_tpl_vars['order_status'] == '1'): ?>selected="selected"<?php endif; ?>>等待入库</option>-->
                <option value="1" <?php if ($this->_tpl_vars['storage_status'] == '1'): ?>selected="selected"<?php endif; ?>>已入库</option>
                <option value="2" <?php if ($this->_tpl_vars['storage_status'] == '2'): ?>selected="selected"<?php endif; ?>>未入库</option>
                </select>
			</li>
            <li style="width:16%;">
				<label style="width:80px;">采购单号：</label>
				<input type="text" name="purchase_order_number" style="width:70px;" value="<?php echo $this->_tpl_vars['purchase_order_number']; ?>
" />
                
			</li>
            
             <li style="width:16%;">
				<label style="width:80px;">供应商：</label>
				<input type="text" name="supplier_s" style="width:70px;" value="<?php echo $this->_tpl_vars['supplier_s']; ?>
" />
                
			</li>
            
             <li style="width:23%;">
				<label style="width:80px;">供应商代码：</label>
				<input type="text" name="supplier_code" style="width:70px;" value="<?php echo $this->_tpl_vars['supplier_code']; ?>
" />
			</li>
            <li style="width:25%;">
				<label style="width:80px;">总价：</label>
				<input type="text" name="final" style="width:100px;" value="￥<?php echo $this->_tpl_vars['final']; ?>
" readonly/>
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_register_storage/xls_export" method="post" id="rsexport">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        	<li class="line">line</li>
            <li><a class="icon" href="#" id="rs_ex"><span>导出Excel</span></a></li>
			<li class="line">line</li>
			<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '60' || $this->_tpl_vars['user_hidden']['group_id'] == '61'): ?>
               <li><a title="对账状态？" href="#" class="edit" id="duizhang_status"><span>对账状态</span></a>
                <select name="userid" style="font-size:13px;" id="duizhang_id">
                   
                   <option value="0">否</option>
                   <option value="1">是</option>
                </select>
               </li>
               <li class="line">line</li>
            <?php endif; ?> 
			<!--<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_register_storage/procurement_warehousing/" target="navTab" rel="procurement_warehousing"  ><span>采购入库</span></a></li>
			<li class="line">line</li>-->
		</ul>
	</div>
	<table class="table" width="98%" layoutH="138">
		<thead>
       		
			<tr>
            	<th width="1%"><input type="checkbox" group="group_ids_duizhang[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="5%">采购时间</th>
                <th width="5%">入库状态</th>
                <th width="5%">对账状态</th>
                <th width="5%">入库时间</th>
                <th width="5%">采购单号</th>
                <th width="5%">单据编号</th>
                <th width="5%">供应商代码</th>
                <th width="5%">供应商</th>               
                <th width="5%">采购数量</th>
                <th width="5%">是否含税</th>
                <th width="5%">税点</th>
                <th width="5%">总价</th>
                <th width="5%">退、换货</th>
                <th width="5%">合格率</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        	<?php if ($this->_tpl_vars['metrial_procure']): ?>
			 <?php $_from = $this->_tpl_vars['metrial_procure']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
              	<td><input name="group_ids_duizhang[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['insert_time']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['storage_status'] == '1'): ?>是
                <?php elseif ($this->_tpl_vars['dis']['storage_status'] == '2'): ?>否
                <?php else: ?>
                <?php endif; ?>
                </td>
                <td>
                <?php if ($this->_tpl_vars['dis']['duizhang_status'] == '1'): ?>是
                <?php elseif ($this->_tpl_vars['dis']['duizhang_status'] == '0'): ?>否
                <?php else: ?>
                <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['dis']['storage_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['purchase_order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['document_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['supplier_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['supplier_s']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['tax'] == '1'): ?>是
                <?php elseif ($this->_tpl_vars['dis']['tax'] == '2'): ?>否
                <?php else: ?>
                <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['dis']['tax_value']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['totle']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['returns'] == '1'): ?>是
                <?php elseif ($this->_tpl_vars['dis']['returns'] == '2'): ?>否
                <?php else: ?>
                <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['dis']['pass_rate']; ?>
</td>
                <td>
                	<a title="编辑" target="navTab" rel="add_metrial_procure" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_register_storage/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
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
<script type="text/javascript">

$(document).ready(function()
{	
	//对账状态js
	$("#duizhang_status").click(function (){
			var touid = $("#duizhang_id").val();
			var check_arr = '';
			$("input[name='group_ids_duizhang[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += ','+$(this).val();
				}
			});	
			
			var p = 'check_arr-'+check_arr+'-touid-'+touid+'.html';
			
			if(check_arr ==''){
				alert('必须选择!');
			}else{
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_register_storage/change_to_duizhang-'+p,
					type:'get', 
					dataType:'json',
					data:p,
					success:check_back
				});
			}
		});
});

function check_back(data){
	if(data!=1){
		alert("失败");
	}else{
		navTabPageBreak();
	}
}


$("#rs_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#rsexport").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>