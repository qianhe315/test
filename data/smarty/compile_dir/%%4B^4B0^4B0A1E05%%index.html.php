<?php /* Smarty version 2.6.22, created on 2014-04-22 14:32:48
         compiled from batch_findcustomer/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/batch_findcustomer/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>

<div class="pageHeader">
	<!--<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/batch_findcustomer/index" method="get">-->
     <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" id="pageForm" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
	<div class="searchBar">
		<ul class="searchContent">
			
	<li style="float:right; margin-left:10px; width:100px;"><a class="button" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/batch_findcustomer/search/" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li> 
		</ul>
		
		<div class="subBar">
	
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        	<!--<li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/batch_findcustomer/add/" target="dialog" rel="page1"><span>添加</span></a></li>			
			<li class="line">line</li>-->
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr>
                <th width="30">编号</th>
                <th width="30">客户代码</th>
                <th width="30">客户名</th>
                <th width="30">公司</th>
                <th width="30">业务员</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['customers']): ?>
			 <?php $_from = $this->_tpl_vars['customers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['cs']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['cs']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['cs']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['cs']['company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['cs']['name']; ?>
</td>
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			
			<span>共<?php echo $this->_tpl_vars['total_count']; ?>
条</span>
		</div>
		
		<!--<div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>

	</div-->
</div>