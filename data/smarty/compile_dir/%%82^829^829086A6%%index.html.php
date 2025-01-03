<?php /* Smarty version 2.6.22, created on 2016-01-09 11:47:31
         compiled from cn_jst_storehouse_amount/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_storehouse_amount/index">
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
/cn_jst_storehouse_amount/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        <!--<li style="width:15%;">
			<label style="width:60px;">时间：</label>
            <input type="text" size="20" name="value_date" value="<?php echo $this->_tpl_vars['date']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" />
		</li>-->
        <li style="width:20%;">
			<label style="width:80px;">名称：</label>
            <input type="text" name="material_name" value="<?php echo $this->_tpl_vars['material_name']; ?>
" >
		</li> 
         <li style="width:10%;">
			<label style="width:40px;">颜色：</label>
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
        <li style="width:15%;">
			<label style="width:60px;">尺寸：</label>
            <select name="material_size">
                <option value=""></option>
                 <?php $_from = $this->_tpl_vars['size_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                 	<option value="<?php echo $this->_tpl_vars['val']['id']; ?>
"<?php if ($this->_tpl_vars['material_size'] == $this->_tpl_vars['val']['id']): ?> selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['val']['name1']; ?>
(<?php echo $this->_tpl_vars['val']['name']; ?>
)</option>
                 <?php endforeach; endif; unset($_from); ?>
                </select>
		</li> 
        <li style="width:50%;">
			<label style="width:60px;">时间：</label>
            <input type="text" size="20" name="value_date" value="<?php echo $this->_tpl_vars['value_date']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" />
		</li>
        
        
<!--       <li style="width:10%;">
				<label style="width:70px;">是否入库：</label>
				<select class="combox" name="ruku">
                <option value="">全部</option>
               
                <option value="是" <?php if ($this->_tpl_vars['ruku'] == "是"): ?> selected <?php endif; ?>> 是</option>
                <option value="否" <?php if ($this->_tpl_vars['ruku'] == "否"): ?> selected <?php endif; ?>> 否</option>
               
                </select>
	    </li>
        <li style="width:10%;">
				<label style="width:70px;">是否出库：</label>
				<select class="combox" name="chuku">
                <option value="">全部</option>
             
                <option value="是" <?php if ($this->_tpl_vars['chuku'] == "是"): ?> selected <?php endif; ?>> 是</option>
                <option value="否" <?php if ($this->_tpl_vars['chuku'] == "否"): ?> selected <?php endif; ?>> 否</option>
               
                </select>
	    </li>
        <li style="width:10%;">
				<label style="width:70px;">是否实盘：</label>
				<select class="combox" name="shipan">
                <option value="">全部</option>
               
                <option value="是" <?php if ($this->_tpl_vars['shipan'] == "是"): ?> selected <?php endif; ?>> 是</option>
                <option value="否" <?php if ($this->_tpl_vars['shipan'] == "否"): ?> selected <?php endif; ?>> 否</option>
               
                </select>
	    </li>-->
        <input type="hidden" size="15" name="time_1" id="time_1" value="<?php echo $this->_tpl_vars['time']; ?>
"  />
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
        </ul>
        
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_storehouse_amount/xls_export" method="post" id="storehouse_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
            
            <?php if ($this->_tpl_vars['user_id'] == '1'): ?>
            	<li><a class="add"  postType="string" title="获取此时间的库存信息?" id="storehouse_time"><span>获取数据</span></a></li>
                <li class="line">line</li>
                <li><input type="text" size="15" name="store_time" id="store_time" value="<?php echo $this->_tpl_vars['time']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" /></li>
            <?php endif; ?>
            <li><a class="icon" href="#" id="get_excel_table"  ><span>导出EXCEL</span></a></li>
			<li class="line">line</li>

		</ul>
	</div>
	<table class="list" width="2000" layoutH="88">
		<thead>
            <tr>
            	<th colspan="10" align="center" ></th>
				<th colspan="4" align="center" ><?php echo $this->_tpl_vars['value_date1']; ?>
月期初</th>
				<th colspan="4" align="center" ><?php echo $this->_tpl_vars['value_date1']; ?>
月入库</th>
				<th colspan="4" align="center" ><?php echo $this->_tpl_vars['value_date1']; ?>
月出库</th>
                <th colspan="4" align="center" ><?php echo $this->_tpl_vars['value_date1']; ?>
月结存</th>
                <th colspan="4" align="center" ><?php echo $this->_tpl_vars['value_date1']; ?>
月实盘</th>
            </tr>
			<tr>	
                <th width="20"><input type="checkbox" group="group_store_id[]" class="checkboxCtrl"></th>
                <th width="20" >编号</th>
               <!-- <th width="20" >货位</th>
                <th width="35" >货品代码</th>-->
                <th width="80" >材料名称</th>
                <th width="50" >CSTOWN颜色</th>
                <th width="35" >供应商</th>
                <th width="35" >尺寸</th>
                <th width="40" >计量单位</th>
                <th width="30" >时间</th>
                				

				<th width="40" >数量</th>
				<th width="30" >单位</th>
				<!--<th width="40" >整包罗数</th>
                <th width="40" >整包总罗</th>-->
                <th width="40" >单价/罗</th>
                <th width="40" >金额</th>
             
                <th width="40" >数量</th>
				<th width="30" >单位</th>
				<!--<th width="40" >整包罗数</th>
                <th width="40" >整包总罗</th>-->
                <th width="40" >单价/罗</th>
                <th width="40" >金额</th>
                
                <th width="40" >数量</th>
				<th width="30" >单位</th>
				<!--<th width="40" >整包罗数</th>
                <th width="40" >整包总罗</th>-->
                <th width="40" >单价/罗</th>
                <th width="40" >金额</th>
                
                <th width="40" >数量</th>
				<th width="30" >单位</th>
				<!--<th width="40" >整包罗数</th>
                <th width="40" >整包总罗</th>-->
                <th width="40" >单价/罗</th>
                <th width="40" >金额</th>
                
                <th width="40" >数量</th>
				<th width="30" >单位</th>
				<!--<th width="40" >整包罗数</th>
                <th width="40" >整包总罗</th>-->
                <th width="40" >单价/罗</th>
                <th width="40" >金额</th>
            </tr>
		</thead>
		<tbody>
            <?php if ($this->_tpl_vars['storehouse']): ?>
			 <?php $_from = $this->_tpl_vars['storehouse']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['il']):
?>
              <tr>
               <td><input name="group_store_id[]" value="<?php echo $this->_tpl_vars['il']['id']; ?>
" type="checkbox"></td>
				<td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
				<!--<td></td>
                <td></td>-->
                <td><?php echo $this->_tpl_vars['il']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['color_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['code']; ?>
</td>
                <!--<td><?php echo $this->_tpl_vars['il']['size']; ?>
</td>-->
                <td><?php echo $this->_tpl_vars['il']['size_name']; ?>
(<?php echo $this->_tpl_vars['il']['size_name_E']; ?>
)</td>
                <td><?php echo $this->_tpl_vars['il']['unit']; ?>
</td>
<!--                <?php if ($this->_tpl_vars['il']['size'] != ''): ?>
                <td>罗</td>
                <?php else: ?>
                <td>米</td>
                <?php endif; ?>-->
				<td><?php echo $this->_tpl_vars['value_date1']; ?>
月</td>
                <input type="hidden" name="yue" value="<?php echo $this->_tpl_vars['value_date']; ?>
" />
                <input type="hidden" name="yue1" value="<?php echo $this->_tpl_vars['value_date1']; ?>
" />
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['beginning_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['danwei']['name']; ?>
</td>
                <!--<td></td>
                <td></td>-->
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['beginning_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['beginning_amount']; ?>
</td>
				
               
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['inbound_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['danwei']['name']; ?>
</td>
                <!--<td></td>
                <td></td>-->
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['inbound_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['inbound_amount']; ?>
</td>
                
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['outbound_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['danwei']['name']; ?>
</td>
                <!--<td></td>
                <td></td>-->
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['outbound_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['outbound_amount']; ?>
</td>
                
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['offer_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['danwei']['name']; ?>
</td>
                <!--<td></td>
                <td></td>-->
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['offer_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['offer_amount']; ?>
</td>
                
                 <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['balance_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['danwei']['name']; ?>
</td>
                <!--<td></td>
                <td></td>-->
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['balance_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['warehouse_summary']['balance_amount']; ?>
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
<script language="javascript">

	$("#storehouse").click(function (){
	/*alert($("input[type='checkbox']").is(":checked"))
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#storehouse_export").submit();
		}else{
			alert("请选择导出的数据");
		}*/
	   var check_arr = '';
	   $("input[name='group_store_id[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(check_arr == ''){
				check_arr += $(this).val();
			}else{
				check_arr += '#'+$(this).val();
			}
		});
		
		var p = 'ids-'+check_arr+'.html';

		if(check_arr ==''){
			alert('请选择导出的数据');
		}else{
			$("#storehouse_export").submit();
		}
	});
	
	
	//获取数据js
	$("#storehouse_time").click(function (){
		var store_time = $("#store_time").val();
		if(store_time>'2015-07'){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_storehouse_amount/update_storehouse',//通过Ajax取数据的目标页面
				data:{"value_date":store_time},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					alert(locals)
					alert("更新成功,请手动刷新页面");
				}
		    });
		}else{
			alert("已经获取过" + store_time + "的数据");
		}
	});
	
	//导出Excel
	$("#get_excel_table").click(function (){
		alert("即将导出选中数据");
		$("#storehouse_export").submit();
	});		
</script>