<?php /* Smarty version 2.6.22, created on 2023-03-20 09:40:16
         compiled from customer_year_paid/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_year_paid/index">
  <input type="hidden" name="pageNum" value="1" />
  <input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
  <input type="hidden" name="orderField" value="group_id" />
  <input type="hidden" name="orderDirection" value="desc" />
  
  <input type="hidden" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
    <input type="hidden" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" />
    <input type="hidden" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    <input type="hidden" name="sale_user_id" value="<?php echo $this->_tpl_vars['sale_user_id']; ?>
" />
    <input type="hidden" name="customer_status" value="<?php echo $this->_tpl_vars['customer_status']; ?>
" />
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_year_paid/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        <?php if ($this->_tpl_vars['group_id'] != '53' || $this->_tpl_vars['group_id'] != '68'): ?>
                <li style="width:15%;">
                    <label style="width:60px;">业务员：</label>
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
            <li style="width:25%;">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">客户名：</label>
                <input type="text" name="customer_name" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
			</li>
            <li style="width:20%;">
				 <label style="width:60px;">公司：</label>
              <input type="text" name="customer_company" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" />
			</li>
            <br><br>
                <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/xls_export" method="post" id="new_export_new">
  <div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
     <li class="line">line</li>
    <li><a class="edit" title="更新数据库内数据?" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_year_paid/update_data/"  posttype="string" rel="page1" target="ajaxTodo" ><span>更新数据库内数据</span></a></li>
    
    
    </ul>
  </div>
 <table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
               <th width="2%"><input type="checkbox" group="customer_ids[]" class="checkboxCtrl" id="check_all_new"  ></th>
				<th width="2%">编号</th>
                <th width="5%">客户代码</th>
                <th width="5%">客户名</th>
                <th width="5%">公司</th>
                <th width="5%">业务员</th>
                <th width="5%">成交金额</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['customer_year_paid']): ?>
			 <?php $_from = $this->_tpl_vars['customer_year_paid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="customer_ids[]" value="<?php echo $this->_tpl_vars['ug']['id']; ?>
" type="checkbox" ></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td>$<?php echo $this->_tpl_vars['dis']['money']; ?>
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
<!--<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/change_to_other_user" id="ctou" method="post" onSubmit="return navTabSearch(this);">
  <input type="hidden" name="check_arr" id="check_arr" value="" />
  <input type="hidden" name="touid" id="touids" value="" />
</form>-->
</div>
<!-- {literal} --> 
<script language="javascript">

</script> 
<!-- {/literal} -->