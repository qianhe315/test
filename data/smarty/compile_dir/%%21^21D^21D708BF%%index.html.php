<?php /* Smarty version 2.6.22, created on 2013-06-06 15:43:48
         compiled from payment_goods_first/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/exit_storehouse/index">
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
/cargo_picking/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:15%;">
				<label style="width:60px;">收款状态：</label>
				<select class="combox" name="order_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['order_status'] == '1'): ?>selected="selected"<?php endif; ?>>未审核</option>
                <option value="2" <?php if ($this->_tpl_vars['order_status'] == '2'): ?>selected="selected"<?php endif; ?>>审核通过</option>
                <option value="3" <?php if ($this->_tpl_vars['order_status'] == '3'): ?>selected="selected"<?php endif; ?>>驳回</option>
                </select>
			</li>
            <li style="width:15%;">
				<label style="width:60px;">业务员：</label>
				<select class="combox" name="saleman_user_id">
                <option value=""></option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_id']; ?>
" <?php if ($this->_tpl_vars['du']['user_id'] == $this->_tpl_vars['saleman_user_id']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="width:25%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
			</li>
			<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
         <div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
            <li><a class="edit" href="*" target="navTab" rel="payment_registration"  ><span>审核通过</span></a></li>
            <li class="line">line</li>
             <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_goods_first/dismiss" target="dialog" rel="payment_goods_first"><span>驳回</span></a></li>
            <li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
       		
			<tr>
            <th width="22"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="30">时间</th>
                <th width="30">业务员</th>
                <th width="30">发票号</th>
                <th width="30">客户名</th>
                <th width="30">客户代码</th>
                <th width="30">总金额</th>
                <th width="30">状态</th>
                <th width="30">备注</th>
			</tr>
		</thead>
		<tbody>
			 <?php $_from = $this->_tpl_vars['stock_manage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_date']; ?>
</td>
 				<td><?php if ($this->_tpl_vars['dis']['order_status'] == '2'): ?>未添加<?php else: ?>已添加<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <td colspan="4">
                <table class="table" width="120">
                <tbody>
               
                 <?php $_from = $this->_tpl_vars['dis']['materils']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                 
                 <tr>
                 <td width="90"><?php echo $this->_tpl_vars['d']['material_name']; ?>
</td>
                 <td width="90"><?php echo $this->_tpl_vars['d']['material_color']; ?>
</td>
                 <td width="90"><?php echo $this->_tpl_vars['d']['material_size']; ?>
mm</td>
                 <td width="90"><?php echo $this->_tpl_vars['d']['material_quantity']; ?>
</td>
                 </tr>
                 <?php endforeach; endif; unset($_from); ?>
                </tbody>
                </table>
                </td>
                
                <td><?php echo $this->_tpl_vars['dis']['final_quote']; ?>
</td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="navTab" rel="stock_manage_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a> <a title="填写做货单" target="navTab" rel="add_production_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/add_production_order-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">填写做货单</a></td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
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