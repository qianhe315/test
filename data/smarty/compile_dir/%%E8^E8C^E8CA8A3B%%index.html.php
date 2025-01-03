<?php /* Smarty version 2.6.22, created on 2015-01-07 17:01:40
         compiled from coupon/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/coupon/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="discount_name" value="<?php echo $this->_tpl_vars['discount_name']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/coupon/index" method="post">
	<div class="searchBar">
		<ul class="searchContent">
			 <li style="width:20%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="add_time_start" value="<?php echo $this->_tpl_vars['add_time_start']; ?>
" class="date" readonly="true" style="width:70px"/>-<input type="text" name="add_time_end" style="width:70px" value="<?php echo $this->_tpl_vars['add_time_end']; ?>
" class="date" readonly="true"/>
             </li>
             <li style="width:20%;">
				<label style="width:70px;">代码：</label>
				<input type="text" name="coupon_code" style="width:80px;" value="<?php echo $this->_tpl_vars['coupon_code']; ?>
" />
                
			 </li>
             <li style="width:20%;">
				<label style="width:50px;">有效期：</label>
				<input type="text" name="use_time_start" value="<?php echo $this->_tpl_vars['use_time_start']; ?>
" class="date" readonly="true" style="width:70px"/>-<input type="text" name="use_time_end" style="width:70px" value="<?php echo $this->_tpl_vars['use_time_end']; ?>
" class="date" readonly="true"/>
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            <li style="width:20%;">
				<label>状态：</label>
				<select class="combox" name="use_ststus">
                <option value="">全部</option>
                <option value="0" <?php if ($this->_tpl_vars['use_ststus'] == '0'): ?>selected="selected"<?php endif; ?>>未使用</option>
              	<option value="1" <?php if ($this->_tpl_vars['use_ststus'] == '1'): ?>selected="selected"<?php endif; ?>>已使用</option>
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
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/coupon/add/" target="dialog" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr>

				<th width="22"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="30">编号</th>
                <th width="30">时间</th>
                <th width="30">代码</th>
                <th width="30">金额</th>
                
                <th width="30">货币</th>
                <th width="30">有效期</th>
                <th width="30">客户代码</th>
                <th width="30">状态</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['coupons_list']): ?>
			 <?php $_from = $this->_tpl_vars['coupons_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['add_time']; ?>
</td>
               
                <td><?php echo $this->_tpl_vars['dis']['coupon_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['money']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['currency']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['use_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
           
                <?php if ($this->_tpl_vars['dis']['status'] == '0'): ?>
                <td>未使用</td>
                <?php else: ?>
                <td>已使用</td>
                <?php endif; ?>
 			
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