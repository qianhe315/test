<?php /* Smarty version 2.6.22, created on 2024-10-14 11:37:20
         compiled from factory_order/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/index">
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
/factory_order/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
            <div style="float:left; width:90%;">
            <!--<li style="width:13%;">
				<label style="width:60px">销售小组：</label>
				       <select name="choose_little_group" class="combox"  >
                       <option value="">全部</option>
                        <option value="A1_A0" <?php if ($this->_tpl_vars['choose_little_group'] == 'A1_A0'): ?> selected="selected" <?php endif; ?>>销售1部业务</option>
                        <option value="B1_B0" <?php if ($this->_tpl_vars['choose_little_group'] == 'B1_B0'): ?> selected="selected" <?php endif; ?>>销售2部业务</option>
                        <option value="C1_C0" <?php if ($this->_tpl_vars['choose_little_group'] == 'C1_C0'): ?> selected="selected" <?php endif; ?>>销售3部业务</option>
                        <option value="D1_D0" <?php if ($this->_tpl_vars['choose_little_group'] == 'D1_D0'): ?> selected="selected" <?php endif; ?>>销售4部业务</option>
                       </select>
			</li>-->
            
            <li style="width:320px;">
                <label style="width:60px; text-align:right;">订单总额：</label>
                <input type="text" name="total_paid_usd" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_paid_usd']; ?>
" />
                <input type="text" name="total_paid_eur" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_paid_eur']; ?>
" />
                <input type="text" name="total_paid_rmb" style="width:70px;" readonly="readonly" value="<?php echo $this->_tpl_vars['total_paid_rmb']; ?>
" />
                
            </li>
            
            <li style="width:240px;">
				<label style="width:60px; text-align:right;">做货时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            
            <li style="width:240px;">
				<label style="width:60px; text-align:right;">发货时间：</label>
				<input type="text" name="start_deliver_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_deliver_time']; ?>
" />-<input type="text" name="end_deliver_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_deliver_time']; ?>
" />
                
			</li>
            
            <li style="width:140px;">
				<label style="width:60px; text-align:right;">业务员：</label>
				<select class="combox" name="saleman_user_id">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['saleman_user_id']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            
            <li style="width:auto; margin-right:10px;">
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
            
            <li style="width:140px;">
				<label style="width:60px; text-align:right;">类别：</label>
				<select class="combox" name="teshu">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['teshu'] == '1'): ?>selected="selected"<?php endif; ?>>热转印</option>
                <option value="2" <?php if ($this->_tpl_vars['teshu'] == '2'): ?>selected="selected"<?php endif; ?>>毡布章</option>
                <option value="3" <?php if ($this->_tpl_vars['teshu'] == '3'): ?>selected="selected"<?php endif; ?>>贴纸</option>
                <!--<option value="2" <?php if ($this->_tpl_vars['teshu'] == '2'): ?>selected="selected"<?php endif; ?>>否</option>-->
                <option value="4" <?php if ($this->_tpl_vars['teshu'] == '4'): ?>selected="selected"<?php endif; ?>>装饰口罩</option>
                <option value="5" <?php if ($this->_tpl_vars['teshu'] == '5'): ?>selected="selected"<?php endif; ?>>空白口罩</option>
                </select>
			</li>
            
            <li style="width:140px;">
				<label style="width:60px; text-align:right;">做货状态：</label>
				<select class="combox" name="export_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['export_status'] == '1'): ?>selected="selected"<?php endif; ?>>未做货</option>
                <option value="2" <?php if ($this->_tpl_vars['export_status'] == '2'): ?>selected="selected"<?php endif; ?>>已做货</option>
                 <option value="5" <?php if ($this->_tpl_vars['export_status'] == '5'): ?>selected="selected"<?php endif; ?>>已撤销</option>
                </select>
			</li>
            
            <li style="width:140px;">
				<label style="width:60px; text-align:right;">发货区间：</label>
				<select class="combox" name="exceed_time">
                <option value="">全部</option>
                <option value="5" <?php if ($this->_tpl_vars['exceed_time'] == '5'): ?>selected="selected"<?php endif; ?>>未发货</option>
              	<option value="1" <?php if ($this->_tpl_vars['exceed_time'] == '1'): ?>selected="selected"<?php endif; ?>>8小时内</option>
                <option value="2" <?php if ($this->_tpl_vars['exceed_time'] == '2'): ?>selected="selected"<?php endif; ?>>24小时内</option>
                <option value="3" <?php if ($this->_tpl_vars['exceed_time'] == '3'): ?>selected="selected"<?php endif; ?>>48小时内</option>
                <option value="4" <?php if ($this->_tpl_vars['exceed_time'] == '4'): ?>selected="selected"<?php endif; ?>>超48小时</option>
                </select>
			</li>
            
            <li style="width:140px;">
				<label style="width:60px; text-align:right;">在线订单：</label>
				<select class="combox" name="cstown_order">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['cstown_order'] == '1'): ?>selected="selected"<?php endif; ?>>在线订单</option>
                <option value="2" <?php if ($this->_tpl_vars['cstown_order'] == '2'): ?>selected="selected"<?php endif; ?>>线下订单</option>
                </select>
			</li>
            
            <li style="width:150px;">
				<label style="width:50px; text-align:right;">订单号：</label>
				<input type="text" name="order_number" style="width:70px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
                
			</li>
             <li style="width:150px;">
				<label style="width:60px; text-align:right;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            
             <li style="width:150px;">
				<label style="width:60px; text-align:right;">报价编号：</label>
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
			</li>
            <li style="width:13%;">
				<label style="width:60px">订单属性：</label>
				<select class="combox" name="teshu">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['order_status'] == '1'): ?>selected="selected"<?php endif; ?>>烫图订单</option>
                <option value="2" <?php if ($this->_tpl_vars['order_status'] == '2'): ?>selected="selected"<?php endif; ?>>烫钻订单</option>
                <option value="5" <?php if ($this->_tpl_vars['order_status'] == '5'): ?>selected="selected"<?php endif; ?>>模板订单</option>
                </select>
			</li>
            -->
            
            <li style="width:150px;">
				<label style="width:60px; text-align:right;">设计名称：</label>
                <input name="design_name" type="text" value="<?php echo $this->_tpl_vars['design_name']; ?>
" style="width:70px;" >
				
			</li>
            
            <li style="width:150px;">
				<label style="width:60px; text-align:right;">数量总计：</label>
				<label style="width:70px;"><?php echo $this->_tpl_vars['zong_number']; ?>
</label>
			</li> 
            </div>
            
                   
            <div style="float:right; width:10%;">
             <li style="float:right; margin-left:10px; width:100px;"><a class="button" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/search/" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li>            
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
            </div>
		</ul>
         
	</div>
	</form>
</div>
<div class="pageContent">
   
        <div class="panelBar">
            <ul class="toolBar">
              <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '62' || $this->_tpl_vars['user_hidden']['group_id'] == '63' || $this->_tpl_vars['user_hidden']['group_id'] == '67'): ?>
            <li class="line">line</li>
                <li><a class="add" id="export_doinvoice" href="#" ><span>导出做货单</span></a></li>
                <li class="line">line</li>
                <li><a class="add" href="#" id="export_certificate"><span>导出合格证</span></a></li>
                <li class="line">line</li>
                
          <li>
                <a title="批量修改未做货？" id="" target="selectedTodo" rel="factory_order_group[]" postType="string" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/aa/" class="edit"><span>批量未做货</span></a></li>
                <li class="line">line</li>
			<li>	
                <a title="批量修改已做货？" id="" target="selectedTodo" rel="factory_order_group[]" postType="string" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/bb/" class="edit"><span>批量已做货</span></a>          
        
        
<!--            <select name="factory_order_touid" style="font-size:13px;" id="factory_order_touid">          
              <option value="1">未做货</option>
              <option value="2">已做货</option> 
            </select>-->
          </li>
          <li class="line">line</li>
                     		
           
            <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/bulk_shipment/" target="dialog" id="bulk_shipment"><span>批量发货</span></a></li>
            <li class="line">line</li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '67'): ?>
            <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/bulk_goods/" target="dialog" id="bulk_goods"><span>批量收货</span></a></li>
            <li class="line">line</li>
            <?php endif; ?>
            </ul>
        </div>
   
	<table class="table" width="1800" layoutH="138">
		<thead>
       		
			<tr>
				<th width="2%"><input type="checkbox" group="factory_order_group[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="9%">缩略图</th>
                <th width="5%">做货时间</th>
                <th width="3%">业务员</th>
                <th width="3%">跟单人</th>
               <!-- <th width="3%">优先级</th>-->
                <th width="4%">订单属性</th>
                <th width="4%">订单渠道</th>
               <!-- <th width="4%">状态</th>-->
                <th width="5%">报关类型</th>
                <th width="4%">做货状态</th>
               
                <th width="4%">客户编号</th>
              
                <th width="6%">订单号</th>
                <th width="6%">返单号</th>
                <th width="5%">报价名称</th>
                <th width="5%">报价编号</th>
                <th width="5%">尺寸</th>
                <th width="2%">数量</th>
                <th width="4%">备损数量</th>
                <th width="4%">口罩颜色</th>
                <th width="5%">发货时间</th>
               
                <th width="5%">收货时间</th>
               <th width="5%">工厂备注</th>
                <th width="5%">操作</th>
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
                <td><input name="factory_order_group[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td style="height:100px;">
                <img src="<?php echo $this->_tpl_vars['dis']['image']; ?>
" width="100px" height="100px" >
                	<?php if ($this->_tpl_vars['dis']['customer_code'] == 'C2266' || $this->_tpl_vars['dis']['customer_code'] == 'G1' || $this->_tpl_vars['dis']['customer_code'] == 'G129' || $this->_tpl_vars['dis']['customer_code'] == 'G130' || $this->_tpl_vars['dis']['customer_code'] == 'G132' || $this->_tpl_vars['dis']['customer_code'] == 'G148' || $this->_tpl_vars['dis']['customer_code'] == 'G2' || $this->_tpl_vars['dis']['customer_code'] == 'G3' || $this->_tpl_vars['dis']['customer_code'] == 'G4'): ?>
                	<br><span style="color:red; font-weight:bold;">*<?php echo $this->_tpl_vars['dis']['customer_code']; ?>
是测试订单，不要做货</span>
                	<?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['dis']['new_time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>

 					<?php if ($this->_tpl_vars['dis']['saleman_name'] == 'admin'): ?>
                	<br><span style="color:red; font-weight:bold;">*<?php echo $this->_tpl_vars['dis']['customer_code']; ?>
是测试订单，不要做货</span>
                	<?php endif; ?>
                </td>
 				 <td><?php echo $this->_tpl_vars['dis']['documentary']; ?>
</td>
               <!-- <td><?php echo $this->_tpl_vars['dis']['youxian_status']; ?>
</td>-->
               <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                   <td>烫图订单
                <?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>
                   <td>材料订单
                <?php elseif ($this->_tpl_vars['dis']['status'] == '5'): ?>
                   <td>模板订单
                <?php elseif ($this->_tpl_vars['dis']['status'] == '8'): ?>
                   <td>T恤订单
                <?php else: ?>   
                   <td>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['dis']['teshu'] == '1'): ?>
                 (可打印)
                <?php elseif ($this->_tpl_vars['dis']['teshu'] == '2'): ?>
                 (毡布章)
                <?php elseif ($this->_tpl_vars['dis']['teshu'] == '3'): ?>
                 (贴纸)
                <?php endif; ?>
                </td>
                <td><?php if ($this->_tpl_vars['dis']['cstown_order_id']): ?>
                		网站在线
                	<?php else: ?>
                		人工报价
                	<?php endif; ?>
                </td>
                <!--<td>
                    <?php if ($this->_tpl_vars['dis']['examine_status'] == '1'): ?>
                        未审核
                    <?php elseif ($this->_tpl_vars['dis']['examine_status'] == '2'): ?>
                        审核通过
                    <?php elseif ($this->_tpl_vars['dis']['examine_status'] == '3'): ?>
                        问题单
                    <?php endif; ?>
                </td>-->
                <td><?php echo $this->_tpl_vars['dis']['order_category_name']; ?>
</td>
                
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
" />
                <?php if ($this->_tpl_vars['dis']['saleman_name'] == 'admin'): ?>
                	<br><span style="color:red; font-weight:bold;">*<?php echo $this->_tpl_vars['dis']['customer_code']; ?>
是测试订单，不要做货</span>
                	<?php endif; ?>
                </td>
                
                <td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['return_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['size'] != ""): ?>
                    <td><?php echo $this->_tpl_vars['dis']['size']; ?>
cm</td>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['dis']['cm_w'] != ""): ?>
                       <td><?php echo $this->_tpl_vars['dis']['cm_w']; ?>
cmX<?php echo $this->_tpl_vars['dis']['cm_h']; ?>
cm</td>
                    <?php else: ?>
                       <td></td>
                    <?php endif; ?>   
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['preparation_number']; ?>
</td>
                 <td>
                 	<?php if ($this->_tpl_vars['dis']['mask_color'] == 176): ?>
                 	改蓝色
                 	<?php elseif ($this->_tpl_vars['dis']['mask_color'] == 175): ?>
                 	改粉色
                 	<?php elseif ($this->_tpl_vars['dis']['mask_color'] == 174): ?>
                 	灰色
                    <?php elseif ($this->_tpl_vars['dis']['mask_color'] == 223): ?>
                 	改黑色
                 	<?php endif; ?>
                 </td>
                <td><?php echo $this->_tpl_vars['dis']['deliver_time']; ?>
</td>   
                        
                <td><?php echo $this->_tpl_vars['dis']['take_time']; ?>
</td>
               <td><?php echo $this->_tpl_vars['dis']['note']; ?>
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
/factory_order/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                <?php if ($this->_tpl_vars['quanxian'] == 'kazuo' || $this->_tpl_vars['quanxian'] == 'admin' || $this->_tpl_vars['user_hidden']['group_id'] == '50'): ?>
                <?php if ($this->_tpl_vars['dis']['export_status'] != '2' && $this->_tpl_vars['dis']['export_status'] != '5'): ?>
                 <a title="标记问题单" target="dialog" rel="confirm_goods" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/mark_wrong-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">标记问题单</a>
                 <?php endif; ?>
                
                
                 <?php if ($this->_tpl_vars['dis']['export_status'] == '5' || $this->_tpl_vars['dis']['deliver_time'] != "" || $this->_tpl_vars['dis']['take_time'] != ""): ?>
                 <?php else: ?>
                  <a title="撤销订单" target="dialog" rel="revocation_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/revocation_order-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">撤销订单</a>
                  <?php endif; ?>
                 <!--<?php if ($this->_tpl_vars['dis']['export_status'] == '2'): ?>
                   <?php if ($this->_tpl_vars['quanxian'] != 'xiaoshou'): ?>
                        <?php if ($this->_tpl_vars['dis']['take_status'] != '3'): ?>
                            <a title="确认发货" target="dialog" rel="confirm_delivery" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/confirm_delivery-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">确认发货</a>
                        <?php endif; ?>
                    <?php endif; ?>    
                    <?php if ($this->_tpl_vars['quanxian'] != 'kazuo'): ?>
                        <a title="确认收货" target="dialog" rel="confirm_goods" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/confirm_goods-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">确认收货</a>
                    <?php endif; ?>       
                <?php endif; ?>  -->  
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
</div>
<script language="javascript">
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
/factory_order/export_certificate-'+p);
				}else{
				    return false;	
				}
			}	
		});
		
	   $("#export_doinvoice").click(function (){
		//var touid = $("#newtouid").val();
			
			var check_arr = $("input[name='factory_order_group[]']:checkbox:checked");
			
            var youxian_status = '';
			
			/*$("input[name='factory_order_group[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					youxian_status += $("#youxian_status" + $(this).val()).val();
				}else{
					check_arr += '#'+$(this).val();
					youxian_status += '|'+$("#youxian_status" + $(this).val()).val();
				}
			});*/
			//var gao = $("#gao").val();
			
			//var p = 'ids-'+check_arr+'.html';
			//var patt = new RegExp('#');
			if(check_arr.val() == undefined){
				alert('必须选择客户');
			}else{
				$("input[name='factory_order_group[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
					if($("#status"+$(this).val()).val()==1){
						window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/export_doinvoice_pdf-ids-'+$(this).val()+'.html');
					}else if($("#status"+$(this).val()).val()==2){
						window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/export_doinvoice_pdf_material-ids-'+$(this).val()+'.html');
					}else if($("#status"+$(this).val()).val()==5){
						window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/export_doinvoice_pdf_template-ids-'+$(this).val()+'.html');
					}
				});
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
/factory_order/change_to_active-'+p,
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