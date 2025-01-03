<?php /* Smarty version 2.6.22, created on 2024-08-27 10:52:08
         compiled from special_order/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/special_order/index">
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
/special_order/index" method="get">
    <input type="hidden" name="session_name" id="session_name" value="<?php echo $this->_tpl_vars['session_name']; ?>
" />
	<div class="searchBar">
		<ul class="searchContent">
		    <li style="width:20%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
			</li>
           <?php if ($this->_tpl_vars['session_id'] != '53' || $this->_tpl_vars['session_id'] != '68'): ?>
            <li style="width:15%;">
				<label style="width:70px;">业务员：</label>
				<select class="combox" name="saleman_name">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <?php endif; ?>
            <li style="width:20%;">
				<label>订单属性：</label>
				<select class="combox" name="order_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['order_status'] == '1'): ?>selected="selected"<?php endif; ?>>烫图订单</option>
                <option value="2" <?php if ($this->_tpl_vars['order_status'] == '2'): ?>selected="selected"<?php endif; ?>>材料订单</option>
                <option value="3" <?php if ($this->_tpl_vars['order_status'] == '3'): ?>selected="selected"<?php endif; ?>>外发订单</option>
                <option value="4" <?php if ($this->_tpl_vars['order_status'] == '4'): ?>selected="selected"<?php endif; ?>>cdr订单</option>
                <option value="5" <?php if ($this->_tpl_vars['order_status'] == '5'): ?>selected="selected"<?php endif; ?>>模板订单</option>
                </select>
	       </li>
 
				 <li style="width:15%;">
				<label style="width:60px">做货状态：</label>
				<select class="combox" name="zuohuo_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['zuohuo_status'] == '1'): ?>selected="selected"<?php endif; ?>>已做货</option>
                <option value="2" <?php if ($this->_tpl_vars['zuohuo_status'] == '2'): ?>selected="selected"<?php endif; ?>>未做货</option>
                </select>
			</li>
            <li style="width:15%;">
				<label style="width:70px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
            </li>
            <li style="width:25%;">
				<label style="width:50px;">订单号：</label>
				<input type="text" name="order_number" style="width:70px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
            </li>
             <br>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
    </div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/special_order/sp_xls_export" method="post" id="special_order_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
       
         <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/special_order/back_order/" target="selectedTodo" id="del" rel="group_ids[]" postType="string" title="确定返回正常订单?"><span>返回正常订单</span></a></li>   
		<!--<li class="line">line</li>
        <li><a class="icon" href="#" id="sp_ex" ><span>导出EXCEL</span></a></li>-->
        </ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr>
            <th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="30">编号</th>
                <th width="30">时间</th>
                <th width="30">做货时间</th>
                <th width="30">业务员</th>
                <th width="30">订单属性</th>
                <th width="30">做货状态</th>
                <th width="30">客户代码</th>
                <th width="30">订单号</th>
                <th width="30">返单号</th>
                <th width="30">数量</th>
                <th width="30">报价系数</th>
                <th width="30">总成本</th>
               	
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['order']): ?>
			 <?php $_from = $this->_tpl_vars['order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
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
                <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                   <td>烫图订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>
                   <td>材料订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '3'): ?>
                   <td>外发订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '4'): ?>   
                   <td>cdr订单</td>
               <?php elseif ($this->_tpl_vars['dis']['status'] == '5'): ?>
               <td>模板订单</td>
               <?php else: ?>
               <td></td>
               <?php endif; ?>
                <?php if ($this->_tpl_vars['dis']['new_time'] == ''): ?>
                <td>否</td>
                <?php else: ?>
                <td>是</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['return_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quote_coefficient']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['factory_cost']; ?>
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
$("#sp_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#special_order_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>