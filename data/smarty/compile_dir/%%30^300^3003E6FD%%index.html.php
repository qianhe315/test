<?php /* Smarty version 2.6.22, created on 2024-08-27 10:51:41
         compiled from cost_breakdown/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_breakdown/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="stock_code" value="<?php echo $this->_tpl_vars['stock_code']; ?>
"/>
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_breakdown/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            <li>
				<label style="width:60px;">业务员：</label>
				<select class="combox" name="saleman_name">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['saleman_name']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
         <?php endif; ?>
<!--            <li style="width:25%;">
				<label style="width:50px">时间：</label>
				<input type="text" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" style="width:70px;" class="date" readonly="true" />-<input type="text" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" style="width:70px;" class="date" readonly="true"/>
                
			</li>-->
            <li>
				<label style="width:60px">做货时间：</label>
				<input type="text" name="start_time1" value="<?php echo $this->_tpl_vars['start_time1']; ?>
" style="width:70px;" class="date" readonly="true" />-<input type="text" name="end_time1" value="<?php echo $this->_tpl_vars['end_time1']; ?>
" style="width:70px;" class="date" readonly="true"/>
                
			</li>
            <li>
				<label style="width:60px">付款状态：</label>
				<select class="combox" name="paid_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['paid_status'] == '1'): ?>selected="selected"<?php endif; ?>>未付款</option>
                <option value="2" <?php if ($this->_tpl_vars['paid_status'] == '2'): ?>selected="selected"<?php endif; ?>>未完成</option>
                <option value="3" <?php if ($this->_tpl_vars['paid_status'] == '3'): ?>selected="selected"<?php endif; ?>>已付款</option>
                <option value="4" <?php if ($this->_tpl_vars['paid_status'] == '4'): ?>selected="selected"<?php endif; ?>>退款中</option>
                <option value="5" <?php if ($this->_tpl_vars['paid_status'] == '5'): ?>selected="selected"<?php endif; ?>>已退款</option>
                <option value="6" <?php if ($this->_tpl_vars['paid_status'] == '6'): ?>selected="selected"<?php endif; ?>>特殊审批通过</option>
                </select>
			</li>
            <li>
				<label style="width:50px;">订单号：</label>
				<input type="text" name="order_number" style="width:70px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
                
			</li>
            <li>
				<label style="width:60px;">发票号：</label>
				<input type="text" name="invice_code" style="width:70px;" value="<?php echo $this->_tpl_vars['invice_code']; ?>
" />
                
			</li>
            
            <li>
				<label style="width:80px;">工厂总成本：</label>
				<input type="text" name="factory_total_cost" style="width:90px;" readonly="readonly" value="<?php echo $this->_tpl_vars['factory_total_cost']; ?>
" />
                <font>(无筛选条件默认当月)</font>
                
			</li>
            <li>
				<label style="width:60px;">特殊订单：</label>
				<select class="combox" name="special_order">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['special_order'] == '1'): ?>selected="selected"<?php endif; ?>>是</option>
                <option value="0" <?php if ($this->_tpl_vars['special_order'] == '0'): ?>selected="selected"<?php endif; ?>>否</option>
                </select>
                
			</li>
             <li>
				<label style="width:60px;">不扣成本：</label>
				<select class="combox" name="note_type">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['note_type'] == '1'): ?>selected="selected"<?php endif; ?>>是</option>
                <option value="0" <?php if ($this->_tpl_vars['note_type'] == '0'): ?>selected="selected"<?php endif; ?>>否</option>
                </select>
                
			</li>
            <li>
            	
				<label style="width:60px;">系数筛选：</label>
				<select class="combox" name="coefficient">
                <option value="">全部</option>
              	<option value="13"  <?php if ($this->_tpl_vars['coefficient'] == '13'): ?>selected="selected"<?php endif; ?>>1.3</option>
                <option value="15" <?php if ($this->_tpl_vars['coefficient'] == '15'): ?>selected="selected"<?php endif; ?> >1.5</option>
                </select>
                
			</li>
            
            <li>
            <label style="width:60px;">所属公司：</label>
            <select class="combox" name="gongsi">
            <option value="">全部</option>
            <option value="小布涂涂" <?php if ($this->_tpl_vars['gongsi'] == '小布涂涂'): ?> selected <?php endif; ?> >小布涂涂</option>
            <option value="涂涂记" <?php if ($this->_tpl_vars['gongsi'] == '涂涂记'): ?> selected <?php endif; ?> >涂涂记</option>
            </select>
            </li>
            
			<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div>
            </li>

		</ul>
	</div>
	</form>
</div>
<script type="text/javascript">
function aa1(){
	var str=document.getElementsByName("group_ids[]");
	var objarray=str.length;
	var chestr="";
	for (i=0;i<objarray;i++)
	{
		if(str[i].checked == true)
		{
		 chestr+=str[i].value+",";
		}
	}
	
	$.ajax({
		   url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_breakdown/ceshi',//通过Ajax取数据的目标页面
		   data:{'chestr':chestr},
		   type:'get',//方法，还可以是"post"
		   dataType:'json',//数据类型，还有其它的，详见jQuery手册
		   success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		   {
                
 
		   }
	});
}
</script>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_breakdown/cb_xls_export" method="post" id="cost_breakdown_export">
<div class="pageContent">
	<div class="panelBar">
    	<ul  class="toolBar">
		 <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '60' || $this->_tpl_vars['user_hidden']['group_id'] == '61' || $this->_tpl_vars['user_hidden']['group_id'] == '66'): ?>
         <li><a class="icon" href="#" id="cb_ex" ><span>导出EXCEL</span></a></li>
         <li class="line">line</li>
         <?php endif; ?>
         <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '66'): ?>
          <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_breakdown/mark_special_order/" target="selectedTodo" id="del" rel="group_ids[]" postType="string" title="确定标记为特殊成本订单?"><span>标记特殊成本订单</span></a></li>   
        
         <li class="line">line</li>
          <li><a target="dialog" title="批量修改备注" rel="" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_breakdown/add_note" class="add"><span onclick="aa1()">批量标记不扣成本订单</span></a></li>
          <li class="line">line</li>
          <li>
            <a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_breakdown/change_coefficient/" target="selectedTodo" rel="group_ids[]" postType="string" title="确定批量修改?" ><span>批量修改系数为1.3</span></a>
         </li>
         
        <?php endif; ?>        
         <!--<li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_breakdown/change_time/" target="ajaxTodo" rel="page1" postType="string"  title="确定更新做货时间?" ><span>更新做货时间</span></a></li>
         <li class="line">line</li>
         <li style="line-height:26px;">(计算成本前需点击更新按钮)</li>-->
         <!--<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
			 <li><a class="edit" title="时间同步?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_breakdown/order_time1/"><span>时间同步1</span></a></li>
             
             <li class="line">line</li>
			 <li><a class="edit" title="时间同步?" posttype="string" rel="page2" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_breakdown/order_time2/"><span>时间同步2</span></a></li>
              <li class="line">line</li>
      			 <li><a class="edit" title="时间同步?" posttype="string" rel="page3" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_breakdown/order_time3/"><span>时间同步3</span></a></li>  
                 <?php endif; ?>        -->                  
         </ul>
	</div>
	<table class="table" asc="asc" desc="desc" width="1660px" layoutH="138">
		<thead>
			<tr>
                <th width="1%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="4%">时间</th>
                <th width="4%" orderField="new_time" class="asc">做货时间</th>
                <th width="3%">业务员</th>
                <th width="5%">订单号</th>
                <th width="5%">发票号</th>
                <th width="3%">付款状态</th>
                <th width="3%">是否使用</th>
                <th width="3%">特殊订单</th>
                <th width="3%">不扣成本</th>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] != 53 && $this->_tpl_vars['user_hidden']['group_id'] != 68): ?>
                    <th width="3%">采购成本单价</th>
                    <th width="3%">成本系数</th>
                <?php endif; ?>
                <th width="3%">数量</th>
                <th width="3%">备损数量</th>
                <th width="3%">材料备损成本</th>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] != 53 && $this->_tpl_vars['user_hidden']['group_id'] != 68): ?>
                	<th width="4%">版费成本</th>
                <?php endif; ?>
                <th width="4%">销售成本</th>
                <th width="4%">销售成本单价</th>
                <th width="3%">销售系数</th>
                <th width="4%">销售单价</th>
                <th width="4%">销售报价</th>
                <th width="3%">版费报价</th>
                <th width="3%">设计报价</th>
                <th width="4%">销售总价</th>
                <!--<th width="5%">备注</th>-->
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['product_order']): ?>
			 <?php $_from = $this->_tpl_vars['product_order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['order_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['new_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['invoice_number']; ?>
</td>
                <td style="text-align:right;">
                <?php if ($this->_tpl_vars['dis']['paid_status'] == '1'): ?>
                    未付款   
                <?php elseif ($this->_tpl_vars['dis']['paid_status'] == '2'): ?>   
                    未完成
                <?php elseif ($this->_tpl_vars['dis']['paid_status'] == '3'): ?>
                    已付款
                <?php elseif ($this->_tpl_vars['dis']['paid_status'] == '4'): ?>
                    退款中
                <?php elseif ($this->_tpl_vars['dis']['paid_status'] == '5'): ?>
                    已退款
                <?php elseif ($this->_tpl_vars['dis']['paid_status'] == '6'): ?>
                    特殊申请通过                  
                <?php endif; ?>
                </td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['use']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['special_order'] == '1'): ?>
                	<td style="text-align:right;">是</td>
                <?php else: ?>
                	<td style="text-align:right;"> 否</td>
                <?php endif; ?>
                <td style="text-align:right;"><?php if ($this->_tpl_vars['dis']['note_type'] == '1'): ?>是<?php else: ?>否<?php endif; ?></td>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] != 53 && $this->_tpl_vars['user_hidden']['group_id'] != 68): ?>
                    <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['material_cost']; ?>
</td>
                    <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['cost_coefficient']; ?>
</td>
                <?php endif; ?>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['preparation_number']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['loss_cost']; ?>
</td>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] != 53 && $this->_tpl_vars['user_hidden']['group_id'] != 68): ?>
                	<td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['version_costs']; ?>
</td>
                <?php endif; ?>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['factory_cost']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['factory_price']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['quote_coefficient']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['price']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['final_quote']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['edition_price']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['design_fee']; ?>
</td>             
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['bidding_price']; ?>
</td>
                <!--<td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['note']; ?>
</td>-->
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
<script type="text/javascript">
$("#cb_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#cost_breakdown_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
$("#goods_time").click(function (){
		$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_breakdown/change_time',
					type:'post',
					 dataType:'json',
					 data:{},
					 success:check_change_time
			    });
	});
	function check_change_time(data)
	{
		if(data == 1)
		{
			alert('更新成功,请手动刷新页面才可生效');
		}
		else
		{
			alert('做货时间更新失败');
		}
	}
</script>