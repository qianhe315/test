<?php /* Smarty version 2.6.22, created on 2023-03-20 09:49:26
         compiled from salesman_collection_query/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/salesman_collection_query/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="" />
	<input type="hidden" name="orderDirection" value="" />
    
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
/salesman_collection_query/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
         	<li style="width:25%;">
				<label style="width:70px;">时间：</label>
				<input type="text" name="star_time"  style="width:70px;" class="date" value="<?php echo $this->_tpl_vars['star_time']; ?>
" />——<input type="text" class="date" name="end_time"  style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
			</li>
            <li style="width:25%;" >
				<label style="width:70px;">美元汇率：</label>
                <input type="text" name="d_exchange_rate"  style="width:70px;" value="<?php echo $this->_tpl_vars['d_exchange_rate']; ?>
" />
			</li>
            <li style="width:25%;" >
				<label style="width:70px;">欧元汇率：</label>
                <input type="text" name="e_exchange_rate"  style="width:70px;" value="<?php echo $this->_tpl_vars['e_exchange_rate']; ?>
" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/register_storage/xls_export" method="post" id="rsexport">
<div class="pageContent">
	<div class="panelBar" style="height:30px" >
		<ul class="toolBar">
        
		</ul>
	</div>
	<table class="table" width="60%" layoutH="138">
		<thead>
			<tr>
            	<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="3%">编号</th>
                <th width="5%">业务员</th>
                <th width="5%">美元</th>
                <th width="5%">欧元</th>
                <th width="5%">人民币</th>
                <th width="8%">总计</th>
			</tr>
		</thead>
		<tbody>
        	<?php if ($this->_tpl_vars['all_uaer_info']): ?>
			 <?php $_from = $this->_tpl_vars['all_uaer_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
              	<td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['user_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['us']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['eur']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['rmb']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['all_one']; ?>
</td>
              </tr>
           	<?php endforeach; endif; unset($_from); ?>
            <tr >
              <td></td>
              <td></td>
              <td>总计：</td>
              <td><?php echo $this->_tpl_vars['all_us']; ?>
</td>
              <td><?php echo $this->_tpl_vars['all_eur']; ?>
</td>
              <td><?php echo $this->_tpl_vars['all_rmb']; ?>
</td>
              <td><?php echo $this->_tpl_vars['all_money']; ?>
</td>
            </tr>
           <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<!--<div class="pages">
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
-->
	</div>
</div>
</form>
<script type="text/javascript">
$(document).ready(function(e) {

});
</script>