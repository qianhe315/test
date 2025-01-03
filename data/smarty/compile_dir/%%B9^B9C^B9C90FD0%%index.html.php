<?php /* Smarty version 2.6.22, created on 2015-01-26 16:41:00
         compiled from customer_transaction/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_transaction/index">
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
/customer_transaction/index" method="get">
    <input type="hidden" name="session_name" id="session_name" value="<?php echo $this->_tpl_vars['session_name']; ?>
" />
	<div class="searchBar">
		<ul class="searchContent">
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
				<label style="width:90px;">最后下单时间：</label>
				<input type="text" name="paid_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['paid_time']; ?>
" />
			</li>
           
           
            <li style="width:20%;">
				<label style="width:70px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
           
<li style="width:20%;">
				<label style="width:60px;">客户名：</label>
				<input type="text" name="customer_name" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
                
			</li>
           
		</ul>

        <div class="subBar">
			<ul>
				<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>				
			</ul>
		</div>
	</div>
	</form>
</div>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
       	   
           
            
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
              <th width="1%"><input type="checkbox" group="group_ids_product_order[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="6%">最后下单时间</th>
                <th width="6%">客户代码</th>
                <th width="10%">询盘时间</th>
                <th width="5%">下单金额</th>
                <th width="7%">客户名</th>                
                <th width="7%">公司</th>
                <th width="9%">邮箱</th>
                <th width="4%">业务员</th>
               
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['sale_detail']): ?>
			 <?php $_from = $this->_tpl_vars['sale_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['dis']['id']; ?>
">
                <td><input name="group_ids_product_order[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox">
                </td>
               <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
               <td><?php echo $this->_tpl_vars['dis']['paid_time']; ?>
</td>
               <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
               <td><?php echo $this->_tpl_vars['dis']['quote_time_c']; ?>
</td>
               <td><?php echo $this->_tpl_vars['dis']['paid_money']; ?>
</td>
               <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
               <td><?php echo $this->_tpl_vars['dis']['company']; ?>
</td>
               <td><?php echo $this->_tpl_vars['dis']['email']; ?>
</td>
               <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
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