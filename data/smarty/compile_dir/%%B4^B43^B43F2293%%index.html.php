<?php /* Smarty version 2.6.22, created on 2025-01-03 11:54:15
         compiled from product_order/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/index">
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

<div class="pageHeader" style="height:50px; overflow:scroll; overflow-x:hidden;">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/index" method="get">
    <input type="hidden" name="session_name" id="session_name" value="<?php echo $this->_tpl_vars['session_name']; ?>
" />
	<div class="searchBar">
		<ul class="searchContent">
        	
            <li>
				<label style="width:70px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            <li>
				<label style="width:50px;">订单号：</label>
				<input type="text" name="order_number" style="width:70px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
                
			</li>
            
            <li>
				<label style="width:60px;">报价名称：</label>
				<input type="text" name="design_name" style="width:70px;" value="<?php echo $this->_tpl_vars['design_name']; ?>
" />
                
			</li>
            
            <li>
				<label style="width:60px;">报价编号：</label>
				<input type="text" name="quotation_code" style="width:70px;" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />
			</li>
            
            
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            
            <li>
				<label style="width:70px;">业务员：</label>
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
				<label>订单属性：</label>
				<select class="combox" name="order_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['order_status'] == '1'): ?>selected="selected"<?php endif; ?>>烫图订单</option>
                <option value="9" <?php if ($this->_tpl_vars['order_status'] == '9'): ?>selected="selected"<?php endif; ?>>服装订单</option>
                <option value="2" <?php if ($this->_tpl_vars['order_status'] == '2'): ?>selected="selected"<?php endif; ?>>烫钻订单</option>
                <option value="3" <?php if ($this->_tpl_vars['order_status'] == '3'): ?>selected="selected"<?php endif; ?>>外发订单</option>
                <option value="4" <?php if ($this->_tpl_vars['order_status'] == '4'): ?>selected="selected"<?php endif; ?>>cdr订单</option>
                <option value="5" <?php if ($this->_tpl_vars['order_status'] == '5'): ?>selected="selected"<?php endif; ?>>模板订单</option>
                <option value="8" <?php if ($this->_tpl_vars['order_status'] == '8'): ?>selected="selected"<?php endif; ?>>T恤订单</option>
                </select>
			</li>
            <li>
				<label>发票状态：</label>
				<select class="combox" name="invoice_status">
                <option value="">全部</option>
              	<option value="0" <?php if ($this->_tpl_vars['invoice_status'] == '0'): ?>selected="selected"<?php endif; ?>>未生成发票</option>
                <option value="1" <?php if ($this->_tpl_vars['invoice_status'] == '1'): ?>selected="selected"<?php endif; ?>>已生成发票</option>
                </select>
			</li>
            <li>
				<label>是否返单：</label>
				<select class="combox" name="return_number">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['return_number'] == '1'): ?>selected="selected"<?php endif; ?>>是</option>
                <option value="2" <?php if ($this->_tpl_vars['return_number'] == '2'): ?>selected="selected"<?php endif; ?>>否</option>
                </select>
			</li>
            <li>
				<label style="width:60px;">订单渠道：</label>
				<select class="combox" name="order_type">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['order_type'] == '1'): ?>selected="selected"<?php endif; ?>>人工报价</option>
                <option value="2" <?php if ($this->_tpl_vars['order_type'] == '2'): ?>selected="selected"<?php endif; ?>>网站在线</option>
                </select>
			</li>
            <li>

				<label style="width:60px;">报关类型：</label>

				<select class="combox" name="order_category_2">
                <option value="">全部</option>
              	<?php $_from = $this->_tpl_vars['order_category_2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc2']):
?>
                <option value="<?php echo $this->_tpl_vars['oc2']['id']; ?>
" <?php if ($this->_tpl_vars['oc2']['id'] == $this->_tpl_vars['order_category_id_2']): ?> selected <?php endif; ?> > 
                <?php if ($this->_tpl_vars['oc2']['id'] == 9): ?>
                散钻/原材料
                <?php else: ?>
                <?php echo $this->_tpl_vars['oc2']['c_name']; ?>
 
                <?php endif; ?>
                </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li>
				<label style="width:60px;">付款状态：</label>
				<select class="combox" name="new_time">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['new_time'] == '1'): ?>selected="selected"<?php endif; ?>>已付款</option>
                <option value="2" <?php if ($this->_tpl_vars['new_time'] == '2'): ?>selected="selected"<?php endif; ?>>未付款</option>
                </select>
			</li>
            
            <li>
				<label style="width:60px;">订单状态：</label>
				<select class="combox" name="purchase_status">
                <option value="">全部</option>
                <option value="3" <?php if ($this->_tpl_vars['outgoing_status'] == 3): ?> selected <?php endif; ?> >订单</option>
                <option value="5" <?php if ($this->_tpl_vars['outgoing_status'] == 5): ?> selected <?php endif; ?> >未发货</option>
                <option value="6" <?php if ($this->_tpl_vars['outgoing_status'] == 6): ?> selected <?php endif; ?> >工厂已发货</option>
                <option value="7" <?php if ($this->_tpl_vars['outgoing_status'] == 7): ?> selected <?php endif; ?> >公司已到货</option>
                <option value="8" <?php if ($this->_tpl_vars['outgoing_status'] == 8): ?> selected <?php endif; ?> >公司已发货</option>

                </select>
			</li>
            
            <li>
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
			</li>
            
            <li>
                <label style="width:60px;">订单总额：</label>
                <input type="text" name="total_paid_usd" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_paid_usd']; ?>
" />
                <input type="text" name="total_paid_eur" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_paid_eur']; ?>
" />
                <input type="text" name="total_paid_rmb" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_paid_rmb']; ?>
" />
                
            </li>
                  

           <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/xls_export" method="post" id="product_order_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
       	    
			<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '68' || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                 <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/aa/" target="selectedTodo" id="del" rel="create_invoice_ids[]" postType="string" title="确定要生成发票？"><span>生成发票</span></a></li>
                 <li class="line">line</li>
                 <!--<?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
                 <li><a class="icon" href="#" id="po_ex" ><span>导出EXCEL</span></a></li>
                 <li class="line">line</li>
                 <?php endif; ?>
                 <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/xzh/" target="selectedTodo" id="del" rel="create_invoice_ids[]" postType="string" title="确定批量申请?" ><span>批次订单先做货申请</span></a></li>
                 <li class="line">line</li>-->
                <?php if ($this->_tpl_vars['user_hidden']['user_id'] != '113'): ?>
                <li><a class="delete" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/del_all/" target="selectedTodo" id="del" rel="create_invoice_ids[]" postType="string" title="确定要批量删除订单？"><span>批量删除订单</span></a></li>
                <?php endif; ?>
            <?php endif; ?>
            <!--<li><a class="add" href="#" onClick="window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/check_product_order/');"  ><span>查看做货单</span></a></li>
			<li class="line">line</li>
            <li><a class="add" href="#" onClick="window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/check_outgoing_product_order/');" ><span>查看外发做货单</span></a></li>-->
             
             <!--<li class="line">line</li>
			 <li><a class="add" id="product_order_invoice" href="#"><span>生成发票</span></a></li>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/aa" rel="group_ids_product_orders[]" target="ajaxTodo" title="确定生成发票?" postType="string"><span>生成发票</span></a></li>-->
             <!--<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/change_fd/" ><span>批量返单金额修改</span></a></li>-->
             <!--<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/change_cb/" ><span>批量成本金额修改</span></a></li>
             <li class="line">line</li>
             <?php endif; ?>-->
             <!--<li><a class="add" onClick="window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/create_quotation_pic/');"  href="#"><span>订单返回</span></a></li>-->

		</ul>
	</div>
	<table class="table" width="auto" layoutH="138">
		<thead>
			<tr>
				<th width="auto"><input type="checkbox" group="create_invoice_ids[]" class="checkboxCtrl"></th>
                <th width="auto">编号</th>
                <th width="auto">缩略图</th>
                <th width="5%">时间</th>
                <th width="auto">客户代码</th>
                <th width="auto">业务员</th>
                <th width="auto">跟单人</th>
                <th width="auto">订单号</th>
                <th width="auto">报价编号</th>
                <th width="7%">报价名称</th>
                <th width="auto">返单号</th>
                <th width="auto">订单渠道</th>
                <th width="auto">订单属性</th>
                <th width="auto">产品分类</th> 
                <th width="auto">报关品类</th> 
                <th width="auto">做货类型</th> 
                <th width="auto">优先级</th> 
                <th width="auto">设计状态</th>
                <th width="auto">发票状态</th>
                <th width="auto">付款状态</th>   
                <th width="auto">订单状态</th>
                <th width="auto">销售单价</th>               
                <th width="auto">数量</th>
                <th width="auto">销售报价</th>
                <th width="auto">设计报价</th>
                <th width="auto">版费报价</th>
                <th width="auto" >销售总价</th>
                <th width="auto">运费</th>
                <!--<th width="3%">交货期</th>-->
                <!--<th width="3%">分批状态</th>
                <th width="3%">备损状态</th>-->
                <th width="auto">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['product_order']): ?>
			 <?php $_from = $this->_tpl_vars['product_order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['dis']['id']; ?>
">
                <td><input name="create_invoice_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox">
                </td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td style="height:100px; text-align:center;">
                <?php if ($this->_tpl_vars['dis']['status'] == '8'): ?>
                <a target="_blank"><img src="txu.jpg" width="100px" height="100px" ></a>
                <?php else: ?>
	                <?php if (empty ( $this->_tpl_vars['dis']['image1'] ) || ! strstr ( $this->_tpl_vars['dis']['image1'] , '.png' )): ?>
	                    <?php if (empty ( $this->_tpl_vars['dis']['image'] )): ?>
	                    <img src="/upload/image/no_image.jpg" width="100px" height="100px" >
	                    <?php else: ?>
	                	<a target="_blank" href="<?php echo $this->_tpl_vars['dis']['image']; ?>
"><img src="<?php echo $this->_tpl_vars['dis']['image']; ?>
" width="<?php echo $this->_tpl_vars['dis']['file_width']; ?>
px" height="<?php echo $this->_tpl_vars['dis']['file_bili']; ?>
px" ></a>
	                	<?php endif; ?>
	                <?php else: ?>
	                	<a target="_blank" href="<?php echo $this->_tpl_vars['dis']['image']; ?>
"><img src="<?php echo $this->_tpl_vars['dis']['image']; ?>
" width="<?php echo $this->_tpl_vars['dis']['file_width']; ?>
px" height="<?php echo $this->_tpl_vars['dis']['file_bili']; ?>
px" ></a><a target="_blank" href="<?php echo $this->_tpl_vars['dis']['image1']; ?>
"><img src="<?php echo $this->_tpl_vars['dis']['image1']; ?>
" width="<?php echo $this->_tpl_vars['dis']['cdr_width']; ?>
px" height="<?php echo $this->_tpl_vars['dis']['cdr_bili']; ?>
px" ></a>
	               	<?php endif; ?>
	                
                <?php endif; ?>
                
                </td>
                <td><?php echo $this->_tpl_vars['dis']['order_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
<input type="hidden" name="customer_code[]" id="customer_code<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['customer_code']; ?>
" /><input type="hidden" name="exchange_rate_id[]" id="exchange_rate_id<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['exchange_rate_id']; ?>
" /></td>
                <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
<input type="hidden" name="saleman_name[]" id="saleman_name<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
" /> </td>
                <td><?php echo $this->_tpl_vars['dis']['documentary']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <td style="word-break:break-all;width:200px; overflow:auto; "><?php echo $this->_tpl_vars['dis']['design_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['return_number']; ?>
</td>
                 <td><?php if ($this->_tpl_vars['dis']['cstown_order_id']): ?>
                        网站在线
                    <?php else: ?>
                        人工报价
                    <?php endif; ?>
                </td>
                <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                	 <?php if ($this->_tpl_vars['dis']['ss_order_id'] || strstr ( $this->_tpl_vars['dis']['image'] , '/ss/' )): ?>
                	 	<td>服装订单</td>
                	 <?php else: ?>
                   		<td>烫图订单</td>
                   	 <?php endif; ?>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>
                   <td>材料订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '3'): ?>
                   <td>外发订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '4'): ?>   
                   <td>cdr订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '5'): ?>
                   <td>模板订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '8'): ?>
                   <td>T恤直喷订单</td>
                <?php else: ?>
                   <td></td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['group_id']; ?>
</td>
                <td>
                <!-- 报关品类 -->
                <div id="divCategory_<?php echo $this->_tpl_vars['dis']['id']; ?>
" style="display:none;">
                <select id="update_category_<?php echo $this->_tpl_vars['dis']['id']; ?>
"  class="picture_select01"  name="order_category" style="width:106px; height:26px;">
                    <option value="">请选择</option>
                    <?php $_from = $this->_tpl_vars['order_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc']):
?> <?php if ($this->_tpl_vars['order_category_id'] == $this->_tpl_vars['oc']['id']): ?>
                    <option selected="selected" value="<?php echo $this->_tpl_vars['oc']['id']; ?>
">
                        <?php if ($this->_tpl_vars['oc']['id'] == 9): ?>
                        散钻
                        <?php else: ?>
                        <?php echo $this->_tpl_vars['oc']['c_name']; ?>

                        <?php endif; ?>
                    </option>
                    <?php else: ?>
                    <option value="<?php echo $this->_tpl_vars['oc']['id']; ?>
">
                        <?php if ($this->_tpl_vars['oc']['id'] == 9): ?>
                        散钻
                        <?php else: ?>
                        <?php echo $this->_tpl_vars['oc']['c_name']; ?>

                        <?php endif; ?>
                    </option>
                    <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
                </select>
                <a style="cursor:pointer;" onclick="return queding_category('divCategory_<?php echo $this->_tpl_vars['dis']['id']; ?>
','<?php echo $this->_tpl_vars['dis']['id']; ?>
')">确定</a>
                </div>
                <div id="category<?php echo $this->_tpl_vars['dis']['id']; ?>
" > <a onclick="return click_category('divCategory_<?php echo $this->_tpl_vars['dis']['id']; ?>
','<?php echo $this->_tpl_vars['dis']['id']; ?>
')" style="cursor:pointer;"><?php echo $this->_tpl_vars['dis']['order_category_name']; ?>
</a></div>
                <!-- 做货类型 -->
                <td><?php echo $this->_tpl_vars['dis']['goods_type']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['deliver_goods']; ?>
</td>
                <!-- 设计状态 -->
                <td>
                    <?php echo $this->_tpl_vars['dis']['design_status']; ?>

                </td>
                <td>
                <?php if ($this->_tpl_vars['dis']['invoice_status'] == 0): ?>
                    未生成发票
                <?php else: ?>
                    已生成发票
                <?php endif; ?>                
                <input type="hidden" name="invoice_status[]" id="invoice_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['invoice_status']; ?>
" />
                </td>
                <td>
                <!-- 付款状态 -->
                <?php if ($this->_tpl_vars['dis']['new_time'] == ''): ?>
                    未付款
                <?php else: ?>
                    已付款
                <?php endif; ?>                 
				</td>
                <!-- 订单状态 -->
                <td width="40">
                <?php if ($this->_tpl_vars['dis']['outgoing_status'] == '3'): ?>
                订单
                <?php elseif ($this->_tpl_vars['dis']['outgoing_status'] == '5'): ?>
                未发货
                <?php elseif ($this->_tpl_vars['dis']['outgoing_status'] == '6'): ?>
                工厂已发货
                <?php elseif ($this->_tpl_vars['dis']['outgoing_status'] == '7'): ?>
                公司已到货
                <?php elseif ($this->_tpl_vars['dis']['outgoing_status'] == '8'): ?>
                公司已发货
                <?php endif; ?>
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
                <!-- 设计费 -->
                <td><?php echo $this->_tpl_vars['dis']['design_fee']; ?>
</td>
                <!-- 版费 -->
                <td><div id="edition_price_<?php echo $this->_tpl_vars['dis']['id']; ?>
"><?php echo $this->_tpl_vars['dis']['edition_price']; ?>
</div></td>

                <!-- 销售总价 -->
                <td><div id="bidding_price_<?php echo $this->_tpl_vars['dis']['id']; ?>
"><?php echo $this->_tpl_vars['dis']['bidding_price']; ?>
</div></td>
                  <td><?php echo $this->_tpl_vars['dis']['freight']; ?>
</td>
                <!-- 操作 -->
                <td>
                <?php if ($this->_tpl_vars['user_hidden']['user_name'] == $this->_tpl_vars['dis']['saleman_name'] || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                    <?php if ($this->_tpl_vars['dis']['invoice_status'] == 0 && $this->_tpl_vars['dis']['cla_status'] != 2 && $this->_tpl_vars['dis']['cla_status'] != 1): ?>
                    <a title="返回报价单" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/product_order_del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">返回报价单</a>
                    <?php endif; ?>
                <?php endif; ?>
                    <?php if ($this->_tpl_vars['dis']['status'] == '3'): ?>
                    <a title="订单详情" target="navTab" rel="product_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/outbound_return_order-flag-1-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">订单详情</a>
                    <?php else: ?>
                    <a title="订单详情" target="navTab" rel="product_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/edit-order_flag-1-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">订单详情</a>
                    <?php endif; ?>

                    <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '50' || $this->_tpl_vars['user_hidden']['user_id'] == 113): ?>
                        <?php if ($this->_tpl_vars['dis']['new_time'] != "" && $this->_tpl_vars['dis']['goods_type'] == "大货"): ?>
                            <a title="增加返单" target="navTab" rel="product_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/outbound_return_order-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">增加返单</a>
                            <!--<?php if ($this->_tpl_vars['dis']['return_number']): ?>
                            <a title="该操作将直接删除返单，不会返回至报价单，确定删除吗？" target="ajaxTodo" class="btnDel" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/delete_outbound_return_order-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html">删除返单</a>
                            <?php endif; ?>-->
                        <?php endif; ?>

                        <?php if ($this->_tpl_vars['dis']['cstown_order_id']): ?>
                            <!--网站在线无法下返单-->
                        <?php else: ?>

                            <?php if ($this->_tpl_vars['dis']['status'] != 8): ?>

                             <?php if ($this->_tpl_vars['dis']['new_time'] != ""): ?>
                                 <?php if ($this->_tpl_vars['user_hidden']['user_name'] == $this->_tpl_vars['dis']['saleman_name'] || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                                      <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                                          <?php if ($this->_tpl_vars['dis']['month'] != '1'): ?>
                                              <a title="增加返单" target="navTab" rel="product_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/add_return_number-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">增加返单</a>

                                          <?php endif; ?>
                                       <?php endif; ?>
                                 <?php endif; ?>
                             <?php endif; ?>
                              <?php if ($this->_tpl_vars['dis']['new_time'] != ""): ?>
                                 <?php if ($this->_tpl_vars['user_hidden']['user_name'] == $this->_tpl_vars['dis']['saleman_name'] || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                                      <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                                          <?php if ($this->_tpl_vars['dis']['month'] != '1'): ?>
<!--                                              <a title="增加换色返单" target="navTab" rel="product_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/add_change_color_return_number-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">增加换色返单</a>-->

                                          <?php endif; ?>
                                       <?php endif; ?>
                                 <?php endif; ?>
                             <?php endif; ?>
                             <?php if ($this->_tpl_vars['dis']['invoice_status'] == 0 && $this->_tpl_vars['dis']['cla_status'] == ''): ?>
                                 <a title="替换撤销订单" target="dialog" rel="replace_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/replace_order-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">替换撤销订单</a>
                             <?php endif; ?>
                          <?php endif; ?>
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

$("#po_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			
			alert("即将导出选中数据");
			$("#product_order_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});


$(document).ready(function()
{
	
	
	$("#product_order_invoice").click(function (){
			//var touid = $("#newtouid").val();
			var check_arr = '';
			var saleman_name = '';
			var customer_code = '';
			var invoice_status = '';
			var exchange_rate_id = '';
			$("input[name='create_invoice_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					saleman_name += $("#saleman_name" + $(this).val()).val();
					customer_code += $("#customer_code" + $(this).val()).val();
					invoice_status += $("#invoice_status" + $(this).val()).val();
					exchange_rate_id += $("#exchange_rate_id" + $(this).val()).val();
				}else{
					check_arr += '|'+$(this).val();			
					saleman_name += '|'+$("#saleman_name" + $(this).val()).val();
					customer_code += '|'+$("#customer_code" + $(this).val()).val();
					invoice_status += '|'+$("#invoice_status" + $(this).val()).val();
					exchange_rate_id += '|'+$("#exchange_rate_id" + $(this).val()).val();
				}
			});

			saleman_name=saleman_name.split("|");
            for(var i=0;i<saleman_name.length;i++){

				if(saleman_name[0]==saleman_name[i]){
					
				}else{
					var a = '1';
				    alert("业务员必须相同");break;
				}
			}
			
			customer_code=customer_code.split("|");	
            for(var i=0;i<customer_code.length;i++){

				if(customer_code[0]==customer_code[i]){
					
				}else{
					var b = '1';
				    alert("客户代码必须相同");break;
				}
			}			
			
			invoice_status=invoice_status.split("|");
				
            for(var i=0;i<invoice_status.length;i++){

				if(invoice_status[i]!='1'){
					
				}else{
					var c = '1';
				    alert("发票必须为未生成");break;
				}
			}
			
			exchange_rate_id=exchange_rate_id.split("|");	
            for(var i=0;i<exchange_rate_id.length;i++){

				if(exchange_rate_id[0]==exchange_rate_id[i]){
					
				}else{
					var d = '1';
				    alert("货币类型不统一");break;
				}
			}						

			var p = 'ids-'+check_arr+'.html';
			
			if($("#session_name").val() != 'admin'){
				//判断是否操作的是登录用户数据
				var check_arr1 = '';
				var invoice_name = '';
				var session_name = $("#session_name").val();
				$("input[name='create_invoice_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
					if(check_arr1 == ''){
						check_arr1 += $(this).val();
						invoice_name += $("#saleman_name" + $(this).val()).val();;
						
					}else{
						
						check_arr1 += '|'+$(this).val();
						invoice_name += '|'+$("#saleman_name" + $(this).val()).val();
					}
				});						
	
				invoice_name=invoice_name.split("|");
				
				
				for(var i=0;i<invoice_name.length;i++){
					
					if(invoice_name[i]!= session_name){
						var e = '1';
						alert("只可以生成本人发票！");break;
						
					}
				}
			
			
			}
			var p = 'ids-'+check_arr+'.html';
			
			
			
			if(check_arr =='' || check_arr1 ==''){
				alert('必须选择客户');
			}else{
				if(!a && !b && !c && !d && !e){					
					
					if(window.confirm('是否生成发票？')){
							$.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/invoice_status-'+p,//通过Ajax取数据的目标页面
								data:p,
								type:'get',//方法，还可以是"post"
								dataType:'text',//数据类型，还有其它的，详见jQuery手册
								success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
								{
									alert("发票返111回成功！请手动刷新页面！");												
								}								
								
							});
					}else{
						return false;
					}
					
								   	
				}
				
			}
		});	
});
</script>
<script>
function click_a(divDisplay,id){
			
	if(document.getElementById(divDisplay).style.display != "block"){
		document.getElementById(divDisplay).style.display = "block";
	}else{
		document.getElementById(divDisplay).style.display = "none";
	}
	$('#shuliang' + id).css('display','none');
}

function click_category(divDisplay,id){
			
	if(document.getElementById(divDisplay).style.display != "block"){
		document.getElementById(divDisplay).style.display = "block";
	}else{
		document.getElementById(divDisplay).style.display = "none";
	}
	$('#category' + id).css('display','none');
}


function queding(divDisplay,id){
		var shuliang = $("#update_pcs_"+id).val();
		var c = /^\d+(?=\.{0,1}\d+$|$)/ 
		var b=c.test(shuliang);
		if(b==true && shuliang>0){
			   $.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/submit_index_update',//通过Ajax取数据的目标页面
					data:{"id":id,"number":shuliang},
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



function queding_category(divDisplay,id){
	var category = $("#update_category_"+id).val();

	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/submit_index_update_category',//通过Ajax取数据的目标页面
		data:{"id":id,"category":category},
		type:'post',//方法，还可以是"post"
		dataType:'text',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		{
			
			 locals=locals.split("|");
			 if(locals[0]==1){
				 alert("修改成功");
				 document.getElementById(divDisplay).style.display = "none";
				 $('#category' + id).css('display','block');
				 document.getElementById("category"+id).innerHTML="<a  onClick='return click_category(\"divCategory_"+id+"\",\""+id+"\" )' style=cursor:pointer;>"+locals[1]+"</a>"
			 }else{
				 alert("修改失败");
				 document.getElementById(divDisplay).style.display = "none";
				 $('#category' + id).css('display','block');
				 document.getElementById("category"+id).innerHTML="<a  onClick='return click_category(\"divCategory_"+id+"\",\""+id+"\" )' style=cursor:pointer;>"+locals[1]+"</a>"
			 }
			
		}
	});

		
}   


function update_pcs(key){
	
	   $(document).ready(function(){
		   var id=key;
		   var number = $("#update_pcs_"+id).val();
		   $.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/update_index',//通过Ajax取数据的目标页面
					data:{"id":id,"number":number},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						locals=locals.split("|");
						$("#bidding_price_"+key).html(locals[0]);
						$("#edition_price_"+key).html(locals[1]);
						$("#final_quote_"+key).html(locals[2]);
						
					}
		   });
		  
	   });
}
</script>