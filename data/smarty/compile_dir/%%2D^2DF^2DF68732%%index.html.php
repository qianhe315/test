<?php /* Smarty version 2.6.22, created on 2024-10-23 13:09:22
         compiled from outgoing_quotation_sheet/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_quotation_sheet/index">
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
/outgoing_quotation_sheet/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            <li>
				<label style="width:60px;">业务员：</label>
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
            <li>
				<label style="width:40px;">时间：</label>
				<input type="text" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" class="date" readonly="true" style="width:70px"/>-<input type="text" name="end_time" style="width:70px" value="<?php echo $this->_tpl_vars['end_time']; ?>
" class="date" readonly="true"/>
                
			</li>
<li style="width:20%;">
				<label style="width:60px;">客户名：</label>
				<input type="text" name="customer_name"  style="width:80px;" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
                
			</li>
            
            <li>
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code"  style="width:80px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            
            <li>
				<label style="width:60px;">报价名称：</label>
				<input type="text" name="design_name"  style="width:80px;" value="<?php echo $this->_tpl_vars['design_name']; ?>
" />
                
			</li>
            
              <li>
				<label style="width:60px;">报价编号：</label>
				<input type="text" name="design_code"  style="width:120px;" value="<?php echo $this->_tpl_vars['design_code']; ?>
" />
                
			</li>
            
            <div class="subBar">
			<ul>
				<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
				
			</ul>
		</div>
		</ul>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_quotation_sheet/xls_export" method="post" id="quotation_delete">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			 <li class="line">line</li>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_quotation_sheet/add_order/" target="selectedTodo" rel="group_ids[]" postType="string" title="确定要批量生成订单？"><span>批量生成订单</span></a></li>
             <li class="line">line</li>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_quotation_sheet1/index/" target="navTab" rel="outgoing_quotation_sheet1" ><span>外发报价单(旧)</span></a></li>
            <li class="line">line</li>
            <!-- <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_quotation_sheet/add_production_order/" target="navTab" rel="production_order_add_outgoing_quotation_sheet" ><span>填写做货单</span></a></li>
             <li class="line">line</li>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_quotation_sheet/edit_production_order/" target="navTab" rel="production_order_edit_outgoing_quotation_sheet" ><span>修改外发报价单</span></a></li> 
             <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
             <li><a class="icon" href="#" id="excel"><span>导出EXCEL</span></a></li>
             <?php endif; ?>
			 <li class="line">line</li>-->
             
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="4%">缩略图</th>
                <th width="5%">时间</th>                
                <th width="3%">业务员</th>                 
                <th width="3%">客户代码</th>
                <th width="6%">客户名</th>
                <th width="6%">报价名称</th>
                <th width="4%">类型</th>
                <th width="8%">报价编号</th>
                <th width="4%">报关品类</th>
                <th width="3%">做货类型</th>
                <th width="3%">交货期</th>
                <th width="auto">销售单价</th>
                <th width="auto">数量</th>
                <th width="auto">销售报价</th>
                <th width="8%">备注</th>
                <!--<th width="5%">报价状态</th>-->
                <th width="3%">销售系数</th>
                <th width="3%">系数状态</th>
                <th width="3%">设计费</th>
                <th width="3%">版费</th>
<!--                <th width="4%">销售单价</th>-->
                <th width="4%">销售总价</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']): ?>
			 <?php $_from = $this->_tpl_vars['outgoing_inquiry_sheet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><img src="<?php echo $this->_tpl_vars['dis']['image']; ?>
" width="100px" height="100px;" /></td>
                <td><?php echo $this->_tpl_vars['dis']['q_time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['type']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['order_category']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['goods_type']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['deliver_goods']; ?>
</td>
                  <!-- 销售单价 -->
                  <td><?php echo $this->_tpl_vars['dis']['price']; ?>
</td>
                  <!-- 数量 -->
                  <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                  <?php if ($this->_tpl_vars['dis']['ss_order_id'] || strstr ( $this->_tpl_vars['dis']['image'] , '/ss/' )): ?>
                  <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                  <?php else: ?>
                  <td><div id="shuliang<?php echo $this->_tpl_vars['dis']['id']; ?>
" > <a onclick="return click_a('divOne_<?php echo $this->_tpl_vars['dis']['id']; ?>
','<?php echo $this->_tpl_vars['dis']['id']; ?>
')" style="cursor:pointer;"><?php echo $this->_tpl_vars['dis']['number']; ?>
</a></div><div id="divOne_<?php echo $this->_tpl_vars['dis']['id']; ?>
" style="display:none;"><input type="text" id="update_pcs_<?php echo $this->_tpl_vars['dis']['id']; ?>
" style="width:35px;height:19px;"  value="<?php echo $this->_tpl_vars['dis']['number']; ?>
" onkeyup="update_pcs(<?php echo $this->_tpl_vars['dis']['id']; ?>
)"/> <a style="cursor:pointer;" onclick="return queding('divOne_<?php echo $this->_tpl_vars['dis']['id']; ?>
','<?php echo $this->_tpl_vars['dis']['id']; ?>
')">确定</a></div></td>
                  <?php endif; ?>
                  <?php else: ?>
                  <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                  <?php endif; ?>
                  <!-- <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td> -->
                  <!-- 销售报价 -->
                  <td id="final_quote_<?php echo $this->_tpl_vars['dis']['id']; ?>
"><?php echo $this->_tpl_vars['dis']['final_quote']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['remark']; ?>
</td>
                <td style=""><?php echo $this->_tpl_vars['dis']['quote_coefficient']; ?>
</td>
                <td><?php if ($this->_tpl_vars['dis']['d_status'] == '1'): ?>
                        未审核
                   <?php elseif ($this->_tpl_vars['dis']['d_status'] == '2'): ?>
                        审核通过
                   <?php elseif ($this->_tpl_vars['dis']['d_status'] == '3'): ?>
                        驳回
                   <?php else: ?>
                       
                   <?php endif; ?></td>
<!--                <td><?php echo $this->_tpl_vars['dis']['price']; ?>
</td>-->
                  <td><?php echo $this->_tpl_vars['dis']['design_cost']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['dis']['edition_cost']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['bidding_price']; ?>
</td>
                <td><!--<a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>--> <a title="编辑" target="navTab" rel="outgoing_sheet_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_quotation_sheet/edit_production_order-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                    <a title="确认返回询价单？" target="ajaxTodo"  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_quotation_sheet/outgoing_back-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">返回询价单</a>
                    
                <?php if ($this->_tpl_vars['dis']['d_status'] != '1' && $this->_tpl_vars['dis']['d_status'] != '3'): ?>
                   <?php if ($this->_tpl_vars['dis']['status'] != 1 && $this->_tpl_vars['dis']['quote_coefficient']): ?>
                   	   <a title="导出报价单" target="_blank" rel="" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_quotation_sheet/generate_outgoing_quotation_sheet-ids-<?php echo $this->_tpl_vars['dis']['id']; ?>
-invoice_pdf_btn-1.html" class="btnView">导出报价单</a>
                       <a class="btnAdd" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_quotation_sheet/add_production_order_outgoing-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" rel="add_production_order" target="navTab" title="生成订单">生成订单</a>
                   <?php endif; ?>    
                <?php endif; ?>
                </td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			
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
    $("#excel").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			$("#quotation_delete").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
	
	

</script>