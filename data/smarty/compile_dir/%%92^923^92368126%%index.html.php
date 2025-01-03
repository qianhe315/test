<?php /* Smarty version 2.6.22, created on 2014-10-20 09:32:18
         compiled from production_cycle/index.html */ ?>
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
/supplier_attributes/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
           
		</ul>
         <div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
       
            
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
            <!--<th width="5%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>-->
                <th width="5%">时间</th>
                <th width="10%">工厂订单总数</th>
               	<th width="10%">工厂24小时内做货</th>
                <th width="10%">未做货片数</th>
                <th width="10%">做货超时率</th>
                <th width="10%">销售24小时内收货</th>
                <th width="10%">收货超时率</th>
               	<th width="10%">销售当天发货</th>
                <th width="10%">发货超时率</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['production_cycle']): ?>
			 <?php $_from = $this->_tpl_vars['production_cycle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <!--<td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>-->
                <td><?php echo $this->_tpl_vars['dis']['time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['new_time_count']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['this_24_count']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['weizuohuo']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['zuohuochaoshi']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['this_24_count_1']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['shouhuochaoshi']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['this_24_count_2']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['fahuochaoshi']; ?>
</td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			
			
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>

	</div>
</div>