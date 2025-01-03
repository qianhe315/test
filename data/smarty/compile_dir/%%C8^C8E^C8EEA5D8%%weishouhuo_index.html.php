<?php /* Smarty version 2.6.22, created on 2015-01-23 09:49:32
         compiled from factory_order/weishouhuo_index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/weishouhuo_index">
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
/factory_order/weishouhuo_index" method="get">
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
            <li style="width:15%;">
				<label style="width:40px">状态：</label>
				<select class="combox" name="examine_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['examine_status'] == '1'): ?>selected="selected"<?php endif; ?>>未审核</option>
                <option value="2" <?php if ($this->_tpl_vars['examine_status'] == '2'): ?>selected="selected"<?php endif; ?>>审核通过</option>
                <option value="3" <?php if ($this->_tpl_vars['examine_status'] == '3'): ?>selected="selected"<?php endif; ?>>问题单</option>
                </select>
			</li>
            <li style="width:18%;">
				<label style="width:60px">订单属性：</label>
				<select class="combox" name="exceed_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['exceed_status'] == '1'): ?>selected="selected"<?php endif; ?>>烫图订单</option>
                <option value="2" <?php if ($this->_tpl_vars['exceed_status'] == '2'): ?>selected="selected"<?php endif; ?>>烫钻订单</option>
                <option value="3" <?php if ($this->_tpl_vars['exceed_status'] == '3'): ?>selected="selected"<?php endif; ?>>外发订单</option>
                </select>
			</li>
			
            <li style="width:17%;">
				<label style="width:60px">做货状态：</label>
				<select class="combox" name="export_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['export_status'] == '1'): ?>selected="selected"<?php endif; ?>>未做货</option>
                <option value="2" <?php if ($this->_tpl_vars['export_status'] == '2'): ?>selected="selected"<?php endif; ?>>已做货</option>
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
            <li style="width:15%;">
				<label style="width:60px">发货状态：</label>
				<select class="combox" name="deliver_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['deliver_status'] == '1'): ?>selected="selected"<?php endif; ?>>未发货</option>
                <option value="2" <?php if ($this->_tpl_vars['deliver_status'] == '2'): ?>selected="selected"<?php endif; ?>>部分发货</option>
                <option value="3" <?php if ($this->_tpl_vars['deliver_status'] == '3'): ?>selected="selected"<?php endif; ?>>完全发货</option>
                </select>
			</li>
            <li style="width:18%;">
				<label style="width:60px">收货状态：</label>
				<select class="combox" name="take_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['take_status'] == '1'): ?>selected="selected"<?php endif; ?>>未收货</option>
                <option value="2" <?php if ($this->_tpl_vars['take_status'] == '2'): ?>selected="selected"<?php endif; ?>>部分收货</option>
                <option value="3" <?php if ($this->_tpl_vars['take_status'] == '3'): ?>selected="selected"<?php endif; ?>>完全收货</option>
                </select>
			</li>
             
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
         
	</div>
	</form>
</div>
<div class="pageContent">
   
        <div class="panelBar">
            <ul class="toolBar">
             <?php if ($this->_tpl_vars['quanxian'] == 'kazuo' || $this->_tpl_vars['quanxian'] == 'admin'): ?>
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
           <?php endif; ?>          		
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '62' || $this->_tpl_vars['user_hidden']['group_id'] == '63'): ?>
            <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/bulk_shipment/" target="dialog" id="bulk_shipment"><span>批量发货</span></a></li>
            <li class="line">line</li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50'): ?>
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
                <th width="7%">时间</th>
                <th width="3%">业务员</th>
                <th width="3%">订单属性</th>
                <th width="4%">状态</th>
                <th width="4%">做货状态</th>
                <th width="7%">交货日期</th>
                <th width="4%">客户编号</th>
              
                <th width="5%">订单号</th>
                <th width="5%">返单号</th>
                <th width="5%">设计名称</th>
                <th width="5%">报价编号</th>
                <th width="5%">尺寸</th>
                <th width="2%">数量</th>
                <th width="4%">备损数量</th>
                <th width="5%">发货时间</th>
                <th width="3%">发货数量</th>
                <th width="5%">收货时间</th>
                <th width="3%">收货数量</th>
                <!--<th width="40">审核状态</th>-->
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
                <td><input name="factory_order_group[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
               <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                   <td>烫图订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>
                   <td>材料订单</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == '3'): ?>
                   <td>外发订单</td>
                <?php else: ?>   
                   <td></td>
                <?php endif; ?>
                <td>
                    <?php if ($this->_tpl_vars['dis']['examine_status'] == '1'): ?>
                        未审核
                    <?php elseif ($this->_tpl_vars['dis']['examine_status'] == '2'): ?>
                        审核通过
                    <?php elseif ($this->_tpl_vars['dis']['examine_status'] == '3'): ?>
                        问题单
                    <?php endif; ?>
                </td>
                <td>
                    <?php if ($this->_tpl_vars['dis']['export_status'] == '1'): ?>
                        未做货
                    <?php elseif ($this->_tpl_vars['dis']['export_status'] == '2'): ?>
                        已做货
                    <?php endif; ?>                
                </td>
                <td><?php echo $this->_tpl_vars['dis']['delivery_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
<input type="hidden" name="customer_code[]" id="customer_code<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['customer_code']; ?>
" /></td>
                
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
                <td><?php echo $this->_tpl_vars['dis']['deliver_time']; ?>
</td>   
                <td>
                <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                    <?php echo $this->_tpl_vars['dis']['deliver_number']; ?>

                <?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>
                	<?php if ($this->_tpl_vars['dis']['deliver_status'] == '3'): ?>全部
                        <?php elseif ($this->_tpl_vars['dis']['deliver_status'] == '2'): ?>部分
                    <?php else: ?>
                    <?php endif; ?>
                <?php else: ?>
                <?php endif; ?>
                </td>                
                <td><?php echo $this->_tpl_vars['dis']['take_time']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                <?php echo $this->_tpl_vars['dis']['take_number']; ?>

                <?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>
                	<?php if ($this->_tpl_vars['dis']['take_status'] == '3'): ?>全部
                    <?php elseif ($this->_tpl_vars['dis']['take_status'] == '2'): ?>部分
                    <?php else: ?>
                    <?php endif; ?>
                <?php else: ?>
                <?php endif; ?>
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
                <?php if ($this->_tpl_vars['dis']['export_status'] == '2'): ?>
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

</script> 