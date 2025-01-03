<?php /* Smarty version 2.6.22, created on 2024-08-14 09:53:54
         compiled from customer_order_information/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/index">
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
/customer_order_information/index" method="get">
    <input type="hidden" name="session_name" id="session_name" value="<?php echo $this->_tpl_vars['session_name']; ?>
" />
	<div class="searchBar">
		<ul class="searchContent">
			<?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            <li style="width:15%;">
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
             <li style="width:20%;">
				<label style="width:60px;">收货时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
			</li>
            <?php endif; ?>
            <li style="width:20%;">
				<label style="width:60px;">订单时间：</label>
				<input type="text" name="order_start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['order_start_time']; ?>
" />-<input type="text" name="order_end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['order_end_time']; ?>
" />
			</li>
         
           <li style="width:15%;">
				<label style="width:50px;">状态：</label>
				<select class="combox" name="shipping_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['shipping_status'] == '1'): ?>selected="selected"<?php endif; ?>>未发货</option>
                <option value="2" <?php if ($this->_tpl_vars['shipping_status'] == '2'): ?>selected="selected"<?php endif; ?>>已发货</option>
                </select>
			</li>
            <li style="width:15%;">
				<label style="width:70px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            <li style="width:15%;">
				<label style="width:50px;">订单号：</label>
				<input type="text" name="order_number" style="width:70px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
                
			</li>
            <li style="width:15%;">
				<label style="width:60px;">返单号：</label>
				<input type="text" name="return_number" style="width:70px;" value="<?php echo $this->_tpl_vars['return_number']; ?>
" />
                
			</li>
<li style="width:20%;">
				<label style="width:60px;">名称：</label>
				<input type="text" name="name" style="width:70px;" value="<?php echo $this->_tpl_vars['name']; ?>
" />
                
			</li>
           <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
       	   
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/update_status_2/" target="selectedTodo" id="del" rel="group_ids_product_order[]" postType="string" title="确定要批量修改吗？"><span>批量已发货</span></a></li>
        <li class="line">line</li>
         	<?php if ($this->_tpl_vars['user_id'] == '1' || $this->_tpl_vars['user_id'] == '2'): ?>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/update_status_1/" target="selectedTodo" id="del" rel="group_ids_product_order[]" postType="string" title="确定要批量修改吗?" ><span>批量未发货</span></a></li>
          	 <li class="line">line</li>
             <?php endif; ?> 
             <?php if ($this->_tpl_vars['user_id'] == '1'): ?>
             <li><a class="edit" id="extant_order" target="dialog" rel="extant_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/extant_order"><span>现存订单</span></a></li>
              <li class="line">line</li>
             
             <li><a class="edit" id="extant_order" target="dialog" rel="extant_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/tongbu_add"><span>修改为已发货</span></a></li>
            <?php endif; ?> 
            <li class="line">line</li>
            <li><a class="edit" id="order_delivery" target="navTab" rel="order_delivery" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/order_delivery"><span>订单发货</span></a></li>
            
	</div>
	<table class="table" width="1400" layoutH="138">
		<thead>
			<tr>
            <th width="1%"><input type="checkbox" group="group_ids_product_order[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="8%">收货时间</th>
                <th width="8%">订单时间</th>
                <th width="4%">状态</th>
                <th width="5%">客户代码</th>
                <th width="4%">订单属性</th>                
                <th width="6%">订单号</th>
                <th width="6%">返单号</th>
                <th width="7%">设计名称</th>
                <th width="3%">数量</th>
                <th width="4%">业务员</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['customer_order_information']): ?>
			 <?php $_from = $this->_tpl_vars['customer_order_information']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['dis']['id']; ?>
">
                <td><input name="group_ids_product_order[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox">
                </td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['take_time']; ?>
</td>
                 <td><?php echo $this->_tpl_vars['dis']['order_time']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['shipping_status'] == 1): ?>
                    未发货
                <?php else: ?>
                    已发货
                <?php endif; ?>                
                </td>
                
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
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
                <td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['return_number']; ?>
</td>
               
                <td><?php echo $this->_tpl_vars['dis']['design_name']; ?>
</td>
               
                <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                 <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
               
                <td>
              
                 <a title="编辑" target="navTab" rel="product_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
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
<script type="text/javascript">

</script>