<?php /* Smarty version 2.6.22, created on 2015-12-04 14:08:44
         compiled from payment_time/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_time/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="exchangerate_name" value="<?php echo $this->_tpl_vars['exchangerate_name']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_time/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:25%;">
			<label style="width:60px;">时间：</label>
            <input type="text" size="20" name="detail_time" value="<?php echo $this->_tpl_vars['detail_time']; ?>
"  class="date textInput valid" datefmt="yyyy-MM" readonly/>
			</li>
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            <li style="width:17%;">
				<label style="width:60px;">业务员：</label>
				<select class="combox" name="saleman_name">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['saleman_name']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
        	<?php endif; ?>
			
            <li style="width:25%;">
			<label style="width:60px;">客户代码：</label>
            <input type="text" size="20" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
"   />
			</li>
            <li style="width:25%;">
			<label style="width:60px;">客户名：</label>
            <input type="text" size="20" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
"   />
			</li>
            <li style="width:25%;">
			<label style="width:60px;">发票号：</label>
            <input type="text" size="20" name="invoice_number" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
"   />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
       <!-- <div class="subBar">
        <ul>
			<li style="float:right;">
            
            </li>
		</ul>
        </div>-->
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_time/commission_xls_export" method="post" id="commssion_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
        <!--<li><a class="icon" href="#" id="commission_ex" ><span>导出EXCEL</span></a></li> 
		<input type="hidden" name="time" value="<?php echo $this->_tpl_vars['value_date']; ?>
">	-->
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
            <tr>
                <th width="1%"><input type="checkbox" group="group_commission[]" class="checkboxCtrl"></th>
				<th width="2%">序号</th>
                <th width="2%">时间</th>
                <th width="2%">业务员</th>
                <th width="3%">客户代码</th>
                <th width="4%">客户名</th>
                <th width="3%">发票号</th>
                <th width="4%">总价</th>
                <th width="3%">应付金额</th>
                <th width="4%">申请内容</th>
			</tr>
		</thead>
		<tbody>
            <?php if ($this->_tpl_vars['payment_list']): ?>
            <?php $_from = $this->_tpl_vars['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
            <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_commission[]" value="<?php echo $this->_tpl_vars['us']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['detail_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['customer_name']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['invoice_number']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['due']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['amount_payable']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['audit_type']; ?>
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
<script language="javascript">


</script>