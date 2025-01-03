<?php /* Smarty version 2.6.22, created on 2017-06-16 08:37:33
         compiled from cn_factory_order/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/index">
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
/cn_factory_order/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
            <li style="width:13%;">
				<label style="width:50px">业务员：</label>
				<select class="combox" name="saleman_user_id">
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
            <li style="width:20%;">
				<label style="width:80px">销售小组：</label>
				       <select name="choose_little_group" class="combox"  >
                       <option value="">全部</option>
                        <option value="A1_A0" <?php if ($this->_tpl_vars['choose_little_group'] == 'A1_A0'): ?> selected="selected" <?php endif; ?>>销售1部业务</option>
                        <option value="B1_B0" <?php if ($this->_tpl_vars['choose_little_group'] == 'B1_B0'): ?> selected="selected" <?php endif; ?>>销售2部业务</option>
                        <option value="C1_C0" <?php if ($this->_tpl_vars['choose_little_group'] == 'C1_C0'): ?> selected="selected" <?php endif; ?>>销售3部业务</option>
                        <option value="D1_D0" <?php if ($this->_tpl_vars['choose_little_group'] == 'D1_D0'): ?> selected="selected" <?php endif; ?>>销售4部业务</option>
                       </select>
			</li>
            <li style="width:22%;">
				<label style="width:40px">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            <li style="width:15%;">
				<label style="width:50px;">订单号：</label>
				<input type="text" name="order_number" style="width:70px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
			</li>
            <?php if ($this->_tpl_vars['quanxian'] == 'caiwu' || $this->_tpl_vars['quanxian'] == 'admin'): ?>
            <li style="width:15%;">
				<label style="width:50px;">发票号：</label>
				<input type="text" name="invoice_number" style="width:70px;" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
" />
			</li>
            <?php endif; ?>
            <li style="width:15%;">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            
            <li style="width:15%;">
				<label style="width:60px;">报价编号：</label>
				<input type="text" name="quotation_code" style="width:70px;" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />
			</li>
            <!--<li style="width:15%;">
				<label style="width:40px">状态：</label>
				<select class="combox" name="examine_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['examine_status'] == '1'): ?>selected="selected"<?php endif; ?>>未审核</option>
                <option value="2" <?php if ($this->_tpl_vars['examine_status'] == '2'): ?>selected="selected"<?php endif; ?>>审核通过</option>
                <option value="3" <?php if ($this->_tpl_vars['examine_status'] == '3'): ?>selected="selected"<?php endif; ?>>问题单</option>
                </select>
			</li>-->
			
            <li style="width:17%;">
				<label style="width:60px">做货状态：</label>
				<select class="combox" name="export_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['export_status'] == '1'): ?>selected="selected"<?php endif; ?>>未做货</option>
                <option value="2" <?php if ($this->_tpl_vars['export_status'] == '2'): ?>selected="selected"<?php endif; ?>>已做货</option>
                 <option value="5" <?php if ($this->_tpl_vars['export_status'] == '5'): ?>selected="selected"<?php endif; ?>>已撤销</option>
                </select>
			</li>
            
            <li style="width:15%;">
				<label style="width:60px">是否超期：</label>
				<select class="combox" name="exceed_time">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['exceed_time'] == '1'): ?>selected="selected"<?php endif; ?>>未超期</option>
                <option value="2" <?php if ($this->_tpl_vars['exceed_time'] == '2'): ?>selected="selected"<?php endif; ?>>已超期</option>
                </select>
			</li>
            <?php if ($this->_tpl_vars['quanxian'] == 'caiwu' || $this->_tpl_vars['quanxian'] == 'xiaoshou' || $this->_tpl_vars['quanxian'] == 'renshi' || $this->_tpl_vars['quanxian'] == 'admin'): ?>
            <li style="width:25%;">
                <label style="width:60px;">销售总额：</label>
                <input type="text" name="total_sales_usd" style="width:70px; float:left;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_sales_usd']; ?>
" />
                <input type="text" name="total_sales_eur" style="width:70px; float:left;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_sales_eur']; ?>
" />
                <input type="text" name="total_sales_rmb" style="width:70px; float:left;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_sales_rmb']; ?>
" />
                <label style="width: auto; float:left;">(含特殊审批)</label>
                
            </li>
            <?php endif; ?>
            <!--<li style="width:15%;">
				<label style="width:60px">优先级：</label>
				<select class="combox" name="youxian_status">
                <option value="">全部</option>
              	<option value="3" <?php if ($this->_tpl_vars['youxian_status'] == '3'): ?>selected="selected"<?php endif; ?>>高</option>
                <option value="2" <?php if ($this->_tpl_vars['youxian_status'] == '2'): ?>selected="selected"<?php endif; ?>>中</option>
                <option value="1" <?php if ($this->_tpl_vars['youxian_status'] == '1'): ?>selected="selected"<?php endif; ?>>低</option>
                <option value="4" <?php if ($this->_tpl_vars['youxian_status'] == '4'): ?>selected="selected"<?php endif; ?>>完成</option>
                </select>
			</li>-->            
            
             <li style="float:right; margin-left:10px; width:100px;"><a class="button" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/search/" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li>            
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
         
	</div>
	</form>
</div>
<div class="pageContent">
   
        <div class="panelBar">
            <ul class="toolBar">
            <li class="line">line</li>
            <li><a class="add" id="export_doinvoice" href="#" ><span>导出做货单</span></a></li>
            <li class="line">line</li>
            <!--<li><a class="add" href="#" id="export_certificate"><span>导出合格证</span></a></li>
            <li class="line">line</li>  -->
            <?php if ($this->_tpl_vars['quanxian'] == 'caiwu' || $this->_tpl_vars['quanxian'] == 'guoneishengchan' || $this->_tpl_vars['quanxian'] == 'admin'): ?>
            <li>
                <a title="批量修改未做货？" id="" target="selectedTodo" rel="factory_order_group[]" postType="string" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/be_not_do/" class="edit"><span>批量未做货</span></a></li>
            <li class="line">line</li>
			<li>	
                <a title="批量修改已做货？" id="" target="selectedTodo" rel="factory_order_group[]" postType="string" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/be_do/" class="edit"><span>批量已做货</span></a>   
            </li>
            <li class="line">line</li>
            <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/bulk_shipment/" target="dialog" id="bulk_shipment"><span>批量发货</span></a></li>
            <li class="line">line</li>
            
            <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/bulk_goods/" target="dialog" id="bulk_goods"><span>批量收货</span></a></li>
            <li class="line">line</li>
            <?php endif; ?>
            <li><a class="icon" href="#" onclick="print_info()"><span>打印</span></a></li>
            <li class="line">line</li>
            </ul>
        </div>
   
	<table class="table" width="100%" layoutH="138">
		<thead>
       		
			<tr>
				<th width="2%"><input type="checkbox" group="factory_order_group[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="10%">做货时间</th>
                <th width="3%">业务员</th>
               <!-- <th width="3%">优先级</th>-->
                <th width="4%">订单属性</th>
               <!-- <th width="4%">状态</th>-->
                <th width="4%">做货状态</th>
               
                <th width="4%">客户编号</th>
              
                <th width="7%">订单号</th>
                <?php if ($this->_tpl_vars['quanxian'] == 'caiwu' || $this->_tpl_vars['quanxian'] == 'xiaoshou' || $this->_tpl_vars['quanxian'] == 'renshi' || $this->_tpl_vars['quanxian'] == 'admin'): ?>
                <th width="5%">发票号</th>
                <th width="5%">订单金额</th>
                <?php endif; ?>
                <th width="7%">设计名称</th>
                <th width="7%">报价编号</th>
                <th width="30%" colspan="6">编码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;款式&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||颜色&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||尺寸&nbsp;&nbsp;&nbsp;&nbsp;||数量&nbsp;&nbsp;||图片下载</td>
                <th width="5%">发货时间</th>
               
                <th width="5%">收货时间</th>
               <th width="5%">做货程度</th>
                <th width="3%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['order']): ?>
			 <?php $_from = $this->_tpl_vars['order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
             
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                 <input type="hidden" id="examine_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['examine_status']; ?>
" />
                 <input type="hidden" id="deliver_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['deliver_status']; ?>
" />
                 <input type="hidden" id="take_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['take_status']; ?>
" />
                 <input type="hidden" id="youxian_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['youxian_status']; ?>
" />
                 <input type="hidden" id="gao" value="<?php echo $this->_tpl_vars['gao']; ?>
" />
                 <input type="hidden" id="status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['status']; ?>
" />
                 <input type="hidden" id="materils_count<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['materils_count']; ?>
" />
                <td><input name="factory_order_group[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['new_time']; ?>
<input type="hidden" id="new_time<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['new_time']; ?>
" /></td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
<input type="hidden" id="saleman_name<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
" /></td>
               <!-- <td><?php echo $this->_tpl_vars['dis']['youxian_status']; ?>
</td>-->
               <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                   <td>烫图订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>
                   <td>材料订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '5'): ?>
                   <td>模板订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '8'): ?>
                   <td>T恤订单</td>
                <?php else: ?>   
                   <td></td>
                <?php endif; ?>
                <!--<td>
                    <?php if ($this->_tpl_vars['dis']['examine_status'] == '1'): ?>
                        未审核
                    <?php elseif ($this->_tpl_vars['dis']['examine_status'] == '2'): ?>
                        审核通过
                    <?php elseif ($this->_tpl_vars['dis']['examine_status'] == '3'): ?>
                        问题单
                    <?php endif; ?>
                </td>-->
                <td>
                    <?php if ($this->_tpl_vars['dis']['export_status'] == '1'): ?>
                        未做货
                    <?php elseif ($this->_tpl_vars['dis']['export_status'] == '2'): ?>
                        已做货
                    <?php else: ?>
                        已撤销
                    <?php endif; ?>                
                </td>
                
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
<input type="hidden" name="customer_code[]" id="customer_code<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['customer_code']; ?>
" /><input type="hidden" id="cus_code<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['customer_code']; ?>
" /></td>
                
                <td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
<input type="hidden" id="order_number<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['order_number']; ?>
" /></td>
                <?php if ($this->_tpl_vars['quanxian'] == 'caiwu' || $this->_tpl_vars['quanxian'] == 'xiaoshou' || $this->_tpl_vars['quanxian'] == 'renshi' || $this->_tpl_vars['quanxian'] == 'admin'): ?>
                <td><?php echo $this->_tpl_vars['dis']['invoice_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['bidding_price']; ?>
</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['design_name']; ?>
<input type="hidden" id="design_name<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['design_name']; ?>
" /></td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <td colspan="6">
                <table class="table" width="100%">
                <tbody>
                	<?php $_from = $this->_tpl_vars['dis']['materils']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['d']):
?>
                     <tr>
                     <td width="80"><?php echo $this->_tpl_vars['d']['tutu_code']; ?>
</td>
                     <td width="150"><?php echo $this->_tpl_vars['d']['name']; ?>
<input type="hidden" id="name<?php echo $this->_tpl_vars['dis']['id']; ?>
_<?php echo $this->_tpl_vars['k']; ?>
" value="<?php echo $this->_tpl_vars['d']['name']; ?>
" /></td>
                     <td width="50"><?php echo $this->_tpl_vars['d']['color']; ?>
<input type="hidden" id="color<?php echo $this->_tpl_vars['dis']['id']; ?>
_<?php echo $this->_tpl_vars['k']; ?>
" value="<?php echo $this->_tpl_vars['d']['color']; ?>
" /></td>
                     <td width="30"><?php echo $this->_tpl_vars['d']['size']; ?>
<input type="hidden" id="size<?php echo $this->_tpl_vars['dis']['id']; ?>
_<?php echo $this->_tpl_vars['k']; ?>
" value="<?php echo $this->_tpl_vars['d']['size']; ?>
" /><input type="hidden" id="size_h<?php echo $this->_tpl_vars['dis']['id']; ?>
_<?php echo $this->_tpl_vars['k']; ?>
" value="<?php echo $this->_tpl_vars['d']['size_h_cm']; ?>
" /><input type="hidden" id="size_w<?php echo $this->_tpl_vars['dis']['id']; ?>
_<?php echo $this->_tpl_vars['k']; ?>
" value="<?php echo $this->_tpl_vars['d']['size_w_cm']; ?>
" /><input type="hidden" id="num_count<?php echo $this->_tpl_vars['dis']['id']; ?>
_<?php echo $this->_tpl_vars['k']; ?>
" value="<?php echo $this->_tpl_vars['d']['number']; ?>
" /></td>
                     <td width="30"><?php echo $this->_tpl_vars['d']['number']; ?>
<input type="hidden" id="number<?php echo $this->_tpl_vars['dis']['id']; ?>
_<?php echo $this->_tpl_vars['k']; ?>
" value="<?php echo $this->_tpl_vars['d']['number']; ?>
" /></td>
                     <td width="50"><a href="<?php echo $this->_tpl_vars['d']['image']; ?>
" target="_blank" style="color:#03F; cursor:pointer;">图片下载</a><input type="hidden" id="image<?php echo $this->_tpl_vars['dis']['id']; ?>
_<?php echo $this->_tpl_vars['k']; ?>
" value="<?php echo $this->_tpl_vars['d']['image']; ?>
" /><input type="hidden" id="c_image<?php echo $this->_tpl_vars['dis']['id']; ?>
_<?php echo $this->_tpl_vars['k']; ?>
" value="<?php echo $this->_tpl_vars['d']['c_image']; ?>
" /></td>
                     </tr>
                 	<?php endforeach; endif; unset($_from); ?>
                
                </tbody>
                </table>
               </td>
                <td><?php echo $this->_tpl_vars['dis']['deliver_time']; ?>
</td>   
                        
                <td><?php echo $this->_tpl_vars['dis']['take_time']; ?>
</td>
               <td><?php echo $this->_tpl_vars['dis']['cancel_influence']; ?>
</td>
                <!--<?php if ($this->_tpl_vars['dis']['cla_status'] == '1'): ?>
                	<td>审核中</td>
                <?php elseif ($this->_tpl_vars['dis']['cla_status'] == '2'): ?>
                	<td>审核通过</td>
                <?php elseif ($this->_tpl_vars['dis']['cla_status'] == '2'): ?>
                	<td>驳回</td>
                <?php else: ?>
                	<td></td>
                <?php endif; ?>-->
                <td>
                <a title="编辑" target="navTab" rel="factory_order_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                <!--<?php if ($this->_tpl_vars['quanxian'] == 'kazuo' || $this->_tpl_vars['quanxian'] == 'admin'): ?>
                <?php if ($this->_tpl_vars['dis']['export_status'] != '2' && $this->_tpl_vars['dis']['export_status'] != '5'): ?>
                 <a title="标记问题单" target="dialog" rel="confirm_goods" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/mark_wrong-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">标记问题单</a>
                 <?php endif; ?>
                
                
                 <?php if ($this->_tpl_vars['dis']['export_status'] == '5' || $this->_tpl_vars['dis']['deliver_time'] != "" || $this->_tpl_vars['dis']['take_time'] != ""): ?>
                 <?php else: ?>
                  <a title="撤销订单" target="dialog" rel="revocation_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/revocation_order-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">撤销订单</a>
                  <?php endif; ?>
                 <?php if ($this->_tpl_vars['dis']['export_status'] == '2'): ?>
                   <?php if ($this->_tpl_vars['quanxian'] != 'xiaoshou'): ?>
                        <?php if ($this->_tpl_vars['dis']['take_status'] != '3'): ?>
                            <a title="确认发货" target="dialog" rel="confirm_delivery" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/confirm_delivery-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">确认发货</a>
                        <?php endif; ?>
                    <?php endif; ?>    
                    <?php if ($this->_tpl_vars['quanxian'] != 'kazuo'): ?>
                        <a title="确认收货" target="dialog" rel="confirm_goods" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/confirm_goods-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">确认收货</a>
                    <?php endif; ?>       
                <?php endif; ?>    
                <?php endif; ?>     -->
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
<script language="javascript">
//打印
function print_info(){ 
	var check_arr = '';
	$("input[name='factory_order_group[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
		if(check_arr == ''){
			check_arr += $(this).val();
		}else{
			check_arr += '#'+$(this).val();
		}
	});
	if(check_arr ==''){
		alert('必须选择客户');
	}else{
		var patt = new RegExp('#');
//		if(patt.test(check_arr)){
//			alert('只能选择一条信息！');
//		}else{
		var _printBoxId = 'printBox';//系统自带的一个定义是否隐藏和显示的id
		//var $contentBox = rel ? $('#'+rel) : $("body"),//打印指定的div内容，rel是传参,此例子在dwz.print.js文件里
		var	$printBox = $('#'+_printBoxId);
		if ($printBox.size()==0){
			$printBox = $('<div id="'+_printBoxId+'"><img src="" /></div>').appendTo("body");
		}
		//$printBox.html($contentBox.html()).find("[layoutH]").height("auto");//打印指定的div内容
		
		if(patt.test(check_arr)){
			check_arr	=	check_arr.split('#');
			var forstr	=	'';
			for(var j=0;j<check_arr.length;j++){
				for(var i=0;i<$('#materils_count'+check_arr[j]).val();i++){
					forstr	+=	'</tr>'+
								'<tr>'+
								'<td >'+$('#name'+check_arr[j]+'_'+i).val()+'</td>'+
								'<td >'+$('#color'+check_arr[j]+'_'+i).val()+'</td>'+
								'<td >'+$('#size'+check_arr[j]+'_'+i).val()+'&nbsp'+$('#size_h'+check_arr[j]+'_'+i).val()+'X'+$('#size_w'+check_arr[j]+'_'+i).val()+'</td>'+
								'<td >'+$('#num_count'+check_arr[j]+'_'+i).val()+'</td>'+
								'<td ><img width="160" height="160" src="'+$('#c_image'+check_arr[j]+'_'+i).val()+'" /></td>'+
								'<td ><img width="160" height="160" src="'+$('#image'+check_arr[j]+'_'+i).val()+'" /></td>'+
								'</tr>';
				}
			}
		}else{
			var forstr	=	'';
			for(var i=0;i<$('#materils_count'+check_arr).val();i++){
				forstr	+=	'</tr>'+
							'<tr>'+
							'<td >'+$('#name'+check_arr+'_'+i).val()+'</td>'+
							'<td >'+$('#color'+check_arr+'_'+i).val()+'</td>'+
							'<td >'+$('#size'+check_arr+'_'+i).val()+'&nbsp'+$('#size_h'+check_arr+'_'+i).val()+'X'+$('#size_w'+check_arr+'_'+i).val()+'</td>'+
							'<td >'+$('#num_count'+check_arr+'_'+i).val()+'</td>'+
							'<td ><img width="160" height="160" src="'+$('#c_image'+check_arr+'_'+i).val()+'" /></td>'+
							'<td ><img width="160" height="160" src="'+$('#image'+check_arr+'_'+i).val()+'" /></td>'+
							'</tr>';
			}	
		}
			
			
//			 '<table width="100%" height="123" border="1">'+
//							'<tr>'+
//								'<td width="275" height="35">时间：</td>'+
//								'<td width="406">'+$('#new_time'+check_arr).val()+'</td>'+
//								'<td width="420">订单号：</td>'+
//								'<td width="391">'+$('#order_number'+check_arr).val()+'</td>'+
//							'</tr>'+
//							'<tr>'+
//								'<td height="35">业务员：</td>'+
//								'<td>'+$('#saleman_name'+check_arr).val()+'</td>'+
//								'<td>客户代码：</td>'+
//								'<td>'+$('#cus_code'+check_arr).val()+'</td>'+
//							'</tr>'+
//							'<tr>'+
//								'<td height="35">订单属性：</td>'+
//								'<td>T恤订单</td>'+
//								'<td>设计名称：</td>'+
//								'<td>'+$('#design_name'+check_arr).val()+'</td>'+
//							'</tr>'+
//						'</table>'+
		var headstr =	'<table width="100%"  border="1" >'+
							'<tr>'+
							'<td width="20%" align="center" height="20%">名称</td>'+
							'<td width="10%" align="center">颜色</td>'+
							'<td width="20%" align="center">尺寸</td>'+
							'<td width="10%" align="center">数量</td>'+
							'<td width="20%" align="center">服装</td>'+
							'<td width="20%" align="center">喷图</td>'+
							forstr+
						'</table>'; 
			$printBox.html(headstr).find("[layoutH]").height("auto");
			window.print();
		}
	//}	 
}  


$(document).ready(function()
{	
	   $("#export_certificate").click(function (){

			var check_arr = '';
			var customer_code = '';
 
			$("input[name='factory_order_group[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					
				}else{
					check_arr += '|'+$(this).val();	
					
				}
			});
			
			customer_code=customer_code.split("|");	
            for(var i=0;i<customer_code.length;i++){

				if(customer_code[0]==customer_code[i]){
					
				}else{
					var b = '1';
				    alert("客户代码必须相同");break;
				}
			}			

			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				if(!b){	
			        window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/export_certificate-'+p);
				}else{
				    return false;	
				}
			}	
		});
		
		//导出做货单
	   $("#export_doinvoice").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
           // var youxian_status = '';
			$("input[name='factory_order_group[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				//	youxian_status += $("#youxian_status" + $(this).val()).val();
				}else{
					check_arr += '#'+$(this).val();
				//	youxian_status += '|'+$("#youxian_status" + $(this).val()).val();
				}
			});
			
			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				var patt = new RegExp('#');
                if(patt.test(check_arr)){
					alert('只能选择一条信息！');
				}else{
/*					 if(gao=='gao'){
						if(youxian_status=="低" || youxian_status=="中"){
							 alert('请先操作优先级是高的！');
						}else{
							 window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/export_doinvoice-'+p);
						}*/
					
					if($("#status"+check_arr).val()==8){
						window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/export_doinvoice_pdf_Tshirt-'+p);
					}
				}
			}	
		});
		
});

$(document).ready(function()
{	
	   /*修改做货状态*/
		$("#factory_order_piliang").click(function (){
			var touid1 = $("#factory_order_touid").val();
			var check_arr1 = '';
			var examine_status = '';
			var deliver_status = '';
			var take_status = '';

			$("input[name='factory_order_group[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr1 == ''){
					check_arr1 += $(this).val();
					examine_status += $("#examine_status" + $(this).val()).val();
					deliver_status += $("#deliver_status" + $(this).val()).val();
					take_status += $("#take_status" + $(this).val()).val();
				}else{
					check_arr1 += ','+$(this).val();
					examine_status += '|'+$("#examine_status" + $(this).val()).val();
					deliver_status += '|'+$("#deliver_status" + $(this).val()).val();
					take_status += '|'+$("#take_status" + $(this).val()).val();
				}
			});	
			
			examine_status=examine_status.split("|");
            for(var i=0;i<examine_status.length;i++){

				if(examine_status[i]=='3'){
					var a = '1';
				    alert("问题单不能改变状态！");break;					
				}
			}
			
			deliver_status=deliver_status.split("|");
            for(var i=0;i<deliver_status.length;i++){

				if(deliver_status[i]=='3'){
					var b = '1';
				    alert("完全发货，不能修改状态！");break;					
				}
			}
			
			take_status=take_status.split("|");
            for(var i=0;i<take_status.length;i++){

				if(take_status[i]=='3'){
					var c = '1';
				    alert("完全收货，不能修改状态！");break;					
				}
			}			
			
			var p = 'check_arr1-'+check_arr1+'-touid1-'+touid1+'.html';

			if(check_arr1 ==''){
				alert('必须选择客户');
			}else{
				if(!a && !b && !c){
					$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/change_to_active-'+p,
						type:'get', 
						dataType:'json',
						data:p,
						success:check_back
					});
				}
			}
			
		});

});
		
		
	function check_back(data)
		{
			if(data.error==1)
			{
				//$("#dialog").css("display","none");
				alert("不可包含未审核或未知错误");
			}
			else
			{
				
				//$("#dialog").css("display","none");
				navTabPageBreak();
				//window.location = "<?php echo $this->_tpl_vars['__ROOT__']; ?>
/#newcustomer";
			}
		}
</script> 