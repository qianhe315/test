<?php /* Smarty version 2.6.22, created on 2024-10-15 16:16:37
         compiled from product_order/outgoing.html */ ?>
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
    <input type="hidden" name="outgoing" value="<?php echo $this->_tpl_vars['deliver_goods']; ?>
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
            
            <li style="width:180px;">
				<label style="width:60px;">报价名称：</label>
				<input type="text" name="design_name" style="width:70px;" value="<?php echo $this->_tpl_vars['design_name']; ?>
" />
                
			</li>
            
            <li>
				<label style="width:60px;">报价编号：</label>
				<input type="text" name="quotation_code" style="width:70px;" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />
                
			</li>
            <?php if ($this->_tpl_vars['group_id'] != '74'): ?>
            <li>
                <label>付款时间：</label>
                <input type="text" name="start_new_time" class="date" readOnly style="width:70px;" value="<?php echo $this->_tpl_vars['start_new_time']; ?>
" />-
                <input type="text" name="end_new_time" class="date" readOnly style="width:70px;" value="<?php echo $this->_tpl_vars['end_new_time']; ?>
" />
            </li>
            <?php endif; ?>
            <li>
                <label>做货时间：</label>
                <input type="text" name="start_factory_goods_time" class="date" readOnly style="width:70px;" value="<?php echo $this->_tpl_vars['start_factory_goods_time']; ?>
" />-
                <input type="text" name="end_factory_goods_time" class="date" readOnly style="width:70px;" value="<?php echo $this->_tpl_vars['end_factory_goods_time']; ?>
" />
            </li>
            <?php if ($this->_tpl_vars['deliver_goods'] < 3): ?>
            <li>
                <label>预计发货日期：</label>
                <input type="text" name="start_estimated_time" class="date" readOnly style="width:70px;" value="<?php echo $this->_tpl_vars['start_estimated_time']; ?>
" />-
                <input type="text" name="end_estimated_time" class="date" readOnly style="width:70px;" value="<?php echo $this->_tpl_vars['end_estimated_time']; ?>
" />
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['group_id'] != '74'): ?>
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
                <label style="width:70px;">供应商代码:</label>
                <input type="text" name="supplier_code" value="<?php echo $this->_tpl_vars['supplier_code']; ?>
" style="width:60px;" />
            </li>
            
            <li>
				<label style="width:60px;">报关品类：</label>
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
            <?php endif; ?>
            <?php if ($this->_tpl_vars['deliver_goods'] == 1): ?>
            <li>
				<label style="width:60px;">做货状态：</label>
				<select class="combox" name="purchase_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['purchase_status'] == 1): ?> selected <?php endif; ?> >不可做货</option>
                <option value="2" <?php if ($this->_tpl_vars['purchase_status'] == 2): ?> selected <?php endif; ?> >可做货</option>
                <option value="3" <?php if ($this->_tpl_vars['purchase_status'] == 3): ?> selected <?php endif; ?> >已做货</option>
                </select>
			</li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['outgoing'] != 1): ?>
            <li>
				<label style="width:60px;">公司发货状态：</label>
				<select class="combox" name="shipping_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['shipping_status'] == 1): ?> selected <?php endif; ?> >未发货</option>
                <option value="2" <?php if ($this->_tpl_vars['shipping_status'] == 2): ?> selected <?php endif; ?> >已发货</option>
                <option value="3" <?php if ($this->_tpl_vars['shipping_status'] == 3): ?> selected <?php endif; ?> >已申请</option>
                <option value="4" <?php if ($this->_tpl_vars['shipping_status'] == 4): ?> selected <?php endif; ?> >无需发货</option>
                </select>
			</li>
            <?php endif; ?>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>

<div class="pageContent">
    <?php if ($this->_tpl_vars['deliver_goods'] == 4): ?>
    <div class="panelBar">
        <ul class="toolBar">
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/update_status_2/" target="selectedTodo" id="del" rel="create_invoice_ids[]" postType="string" title="确定要批量修改吗？"><span>无需发货</span></a></li>
        	<li class="line">line</li>
         	<?php if ($this->_tpl_vars['user_id'] == '1' || $this->_tpl_vars['user_id'] == '2'): ?>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/update_status_1/" target="selectedTodo" id="del" rel="create_invoice_ids[]" postType="string" title="确定要批量修改吗?" ><span>批量未发货</span></a></li>
          	 <li class="line">line</li>
             <?php endif; ?> 
            <li class="line">line</li>
            <li><a class="edit" id="order_delivery" target="navTab" rel="order_delivery" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/order_delivery"><span>订单发货</span></a></li>
        </ul>
    </div>
    <?php elseif ($this->_tpl_vars['deliver_goods'] == 1): ?>
        <div class="panelBar">
            <ul class="toolBar">
            	<?php if (( $this->_tpl_vars['user_hidden']['group_id'] != '53' && $this->_tpl_vars['user_hidden']['group_id'] != '68' && $this->_tpl_vars['user_hidden']['group_id'] != '74' ) || $this->_tpl_vars['user_hidden']['user_id'] == '107' || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/goods_status-goods_type-1" target="selectedTodo" id="procure_outgoing" title="确定要标记已做货吗?" rel="create_invoice_ids[]" class="edit"><span>标记已做货</span></a></li>
                <li><a class="edit" id="delivery_product"><span>标记已发货</span></a></li>
                <?php elseif ($this->_tpl_vars['user_hidden']['group_id'] == '74' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['user_id'] == '107'): ?>
                <li><a class="edit" id="delivery_product"><span>标记已发货</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    <?php elseif ($this->_tpl_vars['deliver_goods'] == 3): ?>
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '68' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '67'): ?>
        <div class="panelBar">
            <ul class="toolBar">
                <li><a class="edit" id="bulk_goods" ><span>批量收货</span></a></li>
            </ul>
        </div>
        <?php endif; ?>
    <?php endif; ?>
	<table class="table" width="auto" layoutH="138">
		<thead>
			<tr>
				<th width="auto"><input type="checkbox" group="create_invoice_ids[]" class="checkboxCtrl"></th>
                <th width="auto">编号</th>
                <th width="auto">缩略图</th>

                <?php if ($this->_tpl_vars['deliver_goods'] == 1): ?>
                <?php if ($this->_tpl_vars['group_id'] != '74'): ?><th width="5%">付款时间</th><?php endif; ?>
                <th width="5%">做货时间</th>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['deliver_goods'] == 3): ?>
                <?php if ($this->_tpl_vars['outgoing'] != 4): ?>
                <th width="5%">工厂发货时间</th>
                <?php endif; ?>
                <th width="5%">预计到货时间</th>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['deliver_goods'] == 4): ?>
                <?php if ($this->_tpl_vars['outgoing'] != 4): ?>
                <th width="5%">工厂发货时间</th>
                <?php endif; ?>
                <th width="5%">公司到货时间</th>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['deliver_goods'] < 3): ?>
                <th width="5%">预计发货日期</th>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['deliver_goods'] == 1): ?>
                <th width="5%">做货状态</th>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['outgoing'] != 1 && $this->_tpl_vars['outgoing'] != 3 && $this->_tpl_vars['outgoing'] != 5): ?>
                <th width="auto">销售发货</th>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['outgoing'] == 5): ?>
                <th width="5%">公司发货时间</th>
                <th width="5%">客户到货时间</th>
                <?php endif; ?>
                <th width="auto">业务员</th>
                <th width="auto">客户代码</th>
                <th width="auto">订单号</th>
                <th width="auto">报价编号</th>
                <th width="4%">报价名称</th>
                <th width="auto">数量</th>
                <th width="auto">报关品类</th>
                <th width="auto">做货类型</th>
                <th width="auto">供应商</th>
                <!--<th width="auto">版图文件</th>-->
                <th width="3%">交货期</th>
                <?php if ($this->_tpl_vars['deliver_goods'] == 1 && $this->_tpl_vars['group_id'] != '53' && $this->_tpl_vars['group_id'] != '68' && $this->_tpl_vars['group_id'] != '74'): ?>
                <th width="auto">采购成本单价</th>
                <th width="auto">采购成本</th>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['deliver_goods'] == 3): ?>
                <th width="5%">工厂发货物流单号</th>
                <th width="5%">工厂发货物流公司</th>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['outgoing'] == 5): ?>
                <th width="5%">公司发货物流单号</th>
                <th width="5%">公司发货物流公司</th>
                <?php endif; ?>
                <th width="3%">生产要求</th>
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
" order_number="<?php echo $this->_tpl_vars['dis']['order_number']; ?>
" type="checkbox">
                </td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td style="height:100px;">
                <?php if ($this->_tpl_vars['dis']['status'] == '8'): ?>
                <a target="_blank"><img src="txu.jpg" width="100px" height="100px" ></a>
                <?php else: ?>
	                <?php if (empty ( $this->_tpl_vars['dis']['image1'] ) || ! strstr ( $this->_tpl_vars['dis']['image1'] , '.png' )): ?>
	                    <?php if (empty ( $this->_tpl_vars['dis']['image'] )): ?>
	                    <img src="/upload/image/no_image.jpg" width="100px" height="100px" >
	                    <?php else: ?>
	                	<a target="_blank" href="<?php echo $this->_tpl_vars['dis']['image']; ?>
"><img src="<?php echo $this->_tpl_vars['dis']['image']; ?>
" width="100px" height="100px" ></a>
	                	<?php endif; ?>
	                <?php else: ?>
	                	<a target="_blank" href="<?php echo $this->_tpl_vars['dis']['image']; ?>
"><img src="<?php echo $this->_tpl_vars['dis']['image']; ?>
" width="100px" height="50px" ></a><a target="_blank" href="<?php echo $this->_tpl_vars['dis']['image1']; ?>
"><img src="<?php echo $this->_tpl_vars['dis']['image1']; ?>
" width="100px" height="50px" ></a>
	               	<?php endif; ?>

                <?php endif; ?>
                </td>

                <?php if ($this->_tpl_vars['deliver_goods'] == 1): ?>
                <?php if ($this->_tpl_vars['group_id'] != '74'): ?><td><?php echo $this->_tpl_vars['dis']['new_time']; ?>
</td><?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['factory_goods_time']; ?>
</td>
                <input id="factory_goods_time_<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['factory_goods_time']; ?>
" type="hidden">
                <?php endif; ?>
                <?php if ($this->_tpl_vars['deliver_goods'] == 3): ?>
                <?php if ($this->_tpl_vars['outgoing'] != 4): ?>
                <td><?php echo $this->_tpl_vars['dis']['deliver_time']; ?>
</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['estimated_delivery_time']; ?>
</td>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['deliver_goods'] == 4): ?>
                <?php if ($this->_tpl_vars['outgoing'] != 4): ?>
                <td><?php echo $this->_tpl_vars['dis']['deliver_time']; ?>
</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['take_time']; ?>
</td>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['deliver_goods'] < 3): ?>
                <td><?php echo $this->_tpl_vars['dis']['estimated_time']; ?>
</td>
                <?php endif; ?>
                
                <?php if ($this->_tpl_vars['deliver_goods'] == 1): ?>
                <td>
                <?php if ($this->_tpl_vars['dis']['purchase_status'] == '1'): ?>
                不可做货
                <?php elseif ($this->_tpl_vars['dis']['purchase_status'] == '2'): ?>
                可做货
                <?php elseif ($this->_tpl_vars['dis']['purchase_status'] == '3'): ?>
                已做货
                <?php endif; ?>
                </td>
                <?php endif; ?>
                
                <?php if ($this->_tpl_vars['outgoing'] != 1 && $this->_tpl_vars['outgoing'] != 3 && $this->_tpl_vars['outgoing'] != 5): ?>
                <td>
                <?php if ($this->_tpl_vars['dis']['shipping_status'] == 1): ?>
                  未发货
                <?php elseif ($this->_tpl_vars['dis']['shipping_status'] == 2): ?>
                  已发货
                <?php elseif ($this->_tpl_vars['dis']['shipping_status'] == 3): ?>
                  已申请
                <?php elseif ($this->_tpl_vars['dis']['shipping_status'] == 4): ?>
                  无需发货
                <?php endif; ?>    
                </td>
                <?php endif; ?>
                
                <?php if ($this->_tpl_vars['outgoing'] == 5): ?>
                <td><?php echo $this->_tpl_vars['dis']['company_delivery_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_take_time']; ?>
</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_name']; ?>
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
                <a style="cursor:pointer;" onclick="cancel_category('divCategory_<?php echo $this->_tpl_vars['dis']['id']; ?>
','<?php echo $this->_tpl_vars['dis']['id']; ?>
')">取消</a>
                </div>
                <script>
                    function cancel_category(divCategory_id,id){
                        $("#"+divCategory_id).css("display","none");
                        $("#category"+id).css("display","inline");
                    }
                </script>
                <div id="category<?php echo $this->_tpl_vars['dis']['id']; ?>
" > <a onclick="return click_category('divCategory_<?php echo $this->_tpl_vars['dis']['id']; ?>
','<?php echo $this->_tpl_vars['dis']['id']; ?>
')" style="cursor:pointer;"><?php echo $this->_tpl_vars['dis']['order_category_name']; ?>
</a></div>
                <!-- 做货类型 -->
                <td><?php echo $this->_tpl_vars['dis']['goods_type']; ?>
</td>
                
                  <td><?php echo $this->_tpl_vars['dis']['supplier_code']; ?>
</td>
                  <!--<td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>-->
                  <td><?php echo $this->_tpl_vars['dis']['deliver_goods']; ?>
</td>
                  <?php if ($this->_tpl_vars['deliver_goods'] == 1 && $this->_tpl_vars['group_id'] != '53' && $this->_tpl_vars['group_id'] != '68' && $this->_tpl_vars['group_id'] != '74'): ?>
                  <td><?php echo $this->_tpl_vars['dis']['material_cost']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['dis']['factory_out_cost']; ?>
</td>
                  <?php endif; ?>
                  <?php if ($this->_tpl_vars['deliver_goods'] == 3): ?>
                  <td><?php echo $this->_tpl_vars['dis']['express_number']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['dis']['express_company']; ?>
</td>
                  <?php endif; ?>
                  <?php if ($this->_tpl_vars['outgoing'] == 5): ?>
                  <td><?php echo $this->_tpl_vars['dis']['company_express_number']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['dis']['company_express_company']; ?>
</td>
                  <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['sale_remark']; ?>
<?php echo $this->_tpl_vars['dis']['remark']; ?>
</td>
                <!-- 操作 -->
                <td>

                    <?php if ($this->_tpl_vars['deliver_goods'] == 1): ?>
                    <a title="编辑" target="navTab" rel="product_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
-outgoing-<?php echo $this->_tpl_vars['deliver_goods']; ?>
" class="btnEdit">编辑</a>
                    <?php else: ?>
                    <a title="编辑" target="navTab" rel="product_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
" class="btnEdit">编辑</a>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['deliver_goods'] == 1): ?>
                    <a title="打印做货单" target="_blank" rel="" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/generate_outgoing_inquiry_sheet-ids-<?php echo $this->_tpl_vars['dis']['id']; ?>
-invoice_pdf_btn-1.html" class="btnView">打印做货单</a>
<!--                    <a title="是否进入做货？" target="ajaxTodo" class="btnAdd" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/goods_status-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
-goods_type-1">进入做货</a>-->
                    <?php if ($this->_tpl_vars['dis']['factory_goods_time'] != '' && $this->_tpl_vars['dis']['deliver_time'] == '' && $this->_tpl_vars['user_hidden']['group_id'] != '53'): ?>
<!--                    <a title="添加发货信息" target="dialog" class="btnAdd" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/goods_status-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
-goods_type-3">标记发货</a>-->
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
                <?php if ($this->_tpl_vars['total_count'] != 50): ?>
                <option value="<?php echo $this->_tpl_vars['total_count']; ?>
"><?php echo $this->_tpl_vars['total_count']; ?>
</option>
                <?php endif; ?>
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
<div class="dialog" id="express" style="top: 150px; left: 392.5px; z-index: 74; height: 300px; width: 580px; display: none;">
    <div class="dialogHeader" onselectstart="return false;" oncopy="return false;" onpaste="return false;" oncut="return false;">
        <div class="dialogHeader_r">
            <div class="dialogHeader_c">
                <a class="close" href="#close" onclick="javascript:$('.dialog').css('display','none');">close</a>
                <h1>修改为已发货</h1>
            </div>
        </div>
    </div>
    <div class="dialogContent layoutBox unitBox" style="height: 400px;">
        <div class="pageContent" style="width: 566px;">
            <div class="pageFormContent" style="height: 340px; overflow: auto;">
                <div class="unit">
                    <label>订单号：</label>
                    <textarea name="order_number" id="order_number_list" cols="50" rows="9"></textarea>
                    <label style="width:300px;">单号之间以逗号分割!</label>
                </div>
                <div class="unit">
                    <label>物流单号：</label>
                    <input type="text" size="30" name="express_number" id="express_number" value="" class="textInput">
                </div>
                <div class="divider">divider</div>
                <div class="unit">
                    <label>物流公司：</label>
                    <input type="text" size="30" name="express_company" id="express_company" value="" class="textInput">

                </div>
                <div class="divider">divider</div>
                <div class="unit">
                    <label>预计到货时间：</label>
                    <input type="text" size="30" name="estimated_delivery_time" id="estimated_delivery_time" value="" class="textInput date">

                </div>
                <div class="divider">divider</div>
                <div class="unit" style="font-size:14px;">
                   <input type="checkbox" id="send_goods_address_1" name="send_goods_address1" value="1">辽宁省大连市甘井子区高新园区凌水街道河口工业园任贤街13号4楼<br />
                   <input type="checkbox" id="send_goods_address_2" name="send_goods_address2" value="2">辽宁省朝阳市喀左县敖木伦大桥南鸿日汽车二楼
                </div>
            </div>
            <div class="formBar">
                <ul>
                    <li>
                        <div class="buttonActive">
                            <div class="buttonContent">
                                <button type="button" id="add_express">确认添加</button>
                            </div>
                        </div>
                    </li>
                    <li> </li>
                </ul>
            </div>
        </div>
    </div>
<div class="dialogFooter"><div class="dialogFooter_r"><div class="dialogFooter_c"></div></div></div>
</div>
<div class="dialog" id="goods" style="top: 150px; left: 392.5px; z-index: 74; height: 300px; width: 580px; display: none;">
    <div class="dialogHeader" onselectstart="return false;" oncopy="return false;" onpaste="return false;" oncut="return false;">
        <div class="dialogHeader_r">
            <div class="dialogHeader_c">
                <a class="close" href="#close" onclick="javascript:$('.dialog').css('display','none');">close</a>
                <h1>批量收货</h1>
            </div>
        </div>
    </div>
    <div class="dialogContent layoutBox unitBox" style="height: 261px;">
        <div class="pageContent" style="width: 566px;">
            <div class="pageFormContent" style="height: 203px; overflow: auto;">
                <div class="unit">
                    <label>订单号：</label>
                    <textarea name="order_number" id="order_number_list1" cols="50" rows="9"></textarea>
                    <label style="width:300px;">单号之间以逗号分割!</label>
                </div>
            </div>
            <div class="formBar">
                <ul>
                    <li>
                        <div class="buttonActive">
                            <div class="buttonContent">
                                <button type="button" id="add_goods">确认添加</button>
                            </div>
                        </div>
                    </li>
                    <li> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="dialogFooter"><div class="dialogFooter_r"><div class="dialogFooter_c"></div></div></div>
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


$(document).ready(function(){
    $("#delivery_product").click(function (){
        var order_number='';
        $("input[name='create_invoice_ids[]']:checkbox:checked").each(function(){
            order_number+=$(this).attr("order_number")+",";
        });
        $("#order_number_list").val(order_number.replace(/,$/,""));
        $("#express").css("display","inline");
    });

    $("#bulk_goods").click(function (){
        var order_number='';
        $("input[name='create_invoice_ids[]']:checkbox:checked").each(function(){
            order_number+=$(this).attr("order_number")+",";
        });
        $("#order_number_list1").val(order_number.replace(/,$/,""));
        $("#goods").css("display","inline");
    });

    $("#order_number_list,#order_number_list1").change(function (){
       $(this).val($(this).val()+',');
       $(this).focus();
    });

    $("#add_goods").click(function (){
        var check_arr = '';
        $("input[name='create_invoice_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
            if(check_arr == ''){
                check_arr += $(this).val();
            }else{
                check_arr += '|'+$(this).val();
            }
        });

        $.ajax({
            url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/act_bulk_goods/',//通过Ajax取数据的目标页面
            data: {create_invoice_ids:check_arr,order_number_list:$("#order_number_list1").val()},
            type:'post',//方法，还可以是"post"
            dataType:'json',//数据类型，还有其它的，详见jQuery手册
            success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
            {
                navTabAjaxDone(locals);
            }

        });
    });

    $("#add_express").click(function (){
        $("#express").css("display","none");

        var check_arr = '';
        var purchase_status = '';
        var express_company=$("#express_company").val();
        var express_number=$("#express_number").val();
        var a=0;


        $("input[name='create_invoice_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
            if(check_arr == ''){
                check_arr += $(this).val();
                purchase_status += $("#factory_goods_time_" + $(this).val()).val();
            }else{
                check_arr += '|'+$(this).val();
                purchase_status += '|'+$("#factory_goods_time_" + $(this).val()).val();
            }
        });

        purchase_status=purchase_status.split("|");
        for(var i=0;i<purchase_status.length;i++){
            if(purchase_status[i]=='' && $("#order_number_list").val()==''){
                var a=1;
                alert("必须已做货才可以发货！");break;
            }
        }

        if(a==1){
            return false;
        }

        // if(check_arr ==''){
        //     alert('必须选择信息！');
        // }else{
            $.ajax({
                url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/goods_status',//通过Ajax取数据的目标页面
                data: {id:check_arr,goods_type:2,express_company:express_company,express_number:express_number,estimated_delivery_time:$("#estimated_delivery_time").val(),send_goods_address1:$("input[name='send_goods_address1']:checked").val(),send_goods_address2:$("input[name='send_goods_address2']:checked").val(),order_number_list:$("#order_number_list").val()},
                type:'post',//方法，还可以是"post"
                dataType:'json',//数据类型，还有其它的，详见jQuery手册
                success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
                {
                    navTabAjaxDone(locals);
                }

            });
        // }
    });

    $("#procure_outgoing").click(function () {
        //$("#start_time").css("display", "inline");
    });
    $("#add_time").click(function () {
        $("#start_time").css("display", "none");

        var delivery_time=$("#delivery_time").val();
        var check_arr = '';
        var purchase_status = '';
        $("input[name='create_invoice_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
            if(check_arr == ''){
                check_arr += $(this).val();
                purchase_status += $("#factory_goods_time_" + $(this).val()).val();
            }else{
                check_arr += '|'+$(this).val();
                purchase_status += '|'+$("#factory_goods_time_" + $(this).val()).val();
            }
        });

        purchase_status=purchase_status.split("|");

        if(purchase_status!=""){
            for(var i=0;i<purchase_status.length;i++){
                if(purchase_status[i]){
                    var a = '1';
                    alert("必须未做货才可以标记！");break;
                }
            }
        }else{
           var a=0;
        }

        var p = 'ids-'+check_arr+'.html';

        if(check_arr ==''){
            alert('必须选择信息！');
        }else{
            if(!a){
                if(window.confirm('是否标记为已做货？')){
                    $.ajax({
                        url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/goods_status',//通过Ajax取数据的目标页面
                        data: {id:check_arr,goods_type:1,delivery_time:delivery_time},
                        type:'post',//方法，还可以是"post"
                        dataType:'json',//数据类型，还有其它的，详见jQuery手册
                        success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
                        {
                            navTabAjaxDone(locals);
                        }

                    });
                }else{
                    return false;
                }
            }
        }
    });
	
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
						
					}
		   });
		  
	   });
}
</script>