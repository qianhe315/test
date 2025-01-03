<?php /* Smarty version 2.6.22, created on 2015-03-30 10:27:19
         compiled from design_count/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_count/index">
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
/design_count/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:25%;">
			<label style="width:60px;">时间：</label>
            <input type="text" size="20" name="value_date" value="<?php echo $this->_tpl_vars['value_date']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
        <div class="subBar">
        <ul>
			<li style="float:right;">
            
            </li>
		</ul>
        </div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount/commission_xls_export" method="post" id="commssion_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
        
		<input type="hidden" name="time" value="<?php echo $this->_tpl_vars['value_date']; ?>
">	
		</ul>
	</div>
	<table class="table" width="150%" layoutH="138">
		<thead>
			<tr>
                <th width="1%"><input type="checkbox" group="group_commission[]" class="checkboxCtrl"></th>
				<th width="1%">编号</th>
                <th width="1%">时间</th>
               	<th width="1%">设计人员</th>
                <th width="1%">任务数</th>
                <th width="1%">排图数(含多版)</th>
                <?php if ($this->_tpl_vars['saleman']): ?>
		<?php $_from = $this->_tpl_vars['saleman']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                     <th width="1%"><?php echo $this->_tpl_vars['dis']['user_name']; ?>
</th>
                     <?php endforeach; endif; unset($_from); ?>
                     <?php endif; ?>
              
              
              
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['users']): ?>
		<?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
        <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
            <td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['user_id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['value_date']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['user_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['count']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['design_NO']; ?>
</td>
                 <?php $_from = $this->_tpl_vars['us']['counts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k_1'] => $this->_tpl_vars['d']):
?>
                       <td><?php echo $this->_tpl_vars['d']['id']; ?>
</td>
                 <?php endforeach; endif; unset($_from); ?>
              
         </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
           
         </tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
      		  
			<span>   每页显示<?php echo $this->_tpl_vars['listRows']; ?>
条，</span>
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