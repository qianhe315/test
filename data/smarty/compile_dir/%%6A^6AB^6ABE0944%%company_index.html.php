<?php /* Smarty version 2.6.22, created on 2015-09-18 13:40:10
         compiled from admin/company_index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_manage/customer_index">
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
/materials_chinese_management/index" method="get">

	</div>
	</form>
</div>
<div class="pageContent">
	<table class="table" width="1200" layoutH="60">
		<thead>
       		
			<tr>
				<!--<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>-->
                <th width="2%">客户id</th>
                <th width="6%">客户代码</th>
                <th width="6%">客户名</th>
                <th width="6%">公司</th>
                <th width="6%">邮箱</th>
                
                <!--<th width="35%" colspan="2">客户代码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||业务员</td>-->
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['customers']): ?>
			 <?php $_from = $this->_tpl_vars['customers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
             
                 <?php $_from = $this->_tpl_vars['dis']['customers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k1'] => $this->_tpl_vars['dis1']):
?>
                  <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                    <!--<td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>-->
                    <td><?php echo $this->_tpl_vars['dis1']['id']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis1']['customer_code']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis1']['customer_name']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis1']['company']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis1']['email']; ?>
</td>
                  </tr>
                 <?php endforeach; endif; unset($_from); ?> 
             <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>     
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			
		</div>
		
		

	</div>
</div>