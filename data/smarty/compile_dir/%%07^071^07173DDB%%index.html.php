<?php /* Smarty version 2.6.22, created on 2014-02-27 16:05:21
         compiled from enquiries_transformation/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/enquiries_transformation/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="stock_code" value="<?php echo $this->_tpl_vars['stock_code']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/enquiries_transformation/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
             <li style="width:30%;">
				<label style="width:60px;">时间：</label>
				<input type="text" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" style="width:70px;" class="date" readonly="true" />-<input type="text" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" style="width:70px;" class="date" readonly="true"/>
                (默认当月)
			</li>
                    
		</ul>
		
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
				
			</ul>
		</div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/enquiries_transformation/pag_xls_export" method="post" id="enquiries_transformation_export">
<div class="pageContent">
	<div class="panelBar">
        <ul  class="toolBar">

         </ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
                <th width="20%">客户来源</th>
                <th width="20%">询盘数量</th>
                <th width="20%">新客户</th>
                <th width="20%">转化率</th>
			</tr>
		</thead>
		<tbody>
       		<?php $_from = $this->_tpl_vars['quotefrom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['qf']):
?>
            <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
            	<?php if ($this->_tpl_vars['qf']['id'] == '7'): ?>
                <td><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_customer/index-id-<?php echo $this->_tpl_vars['qf']['id']; ?>
.html" rel="editcustomer"  target="navTab" style="color:#06F;"><?php echo $this->_tpl_vars['qf']['quotefrom_name']; ?>
</a></td>
                <?php else: ?>
                <td><?php echo $this->_tpl_vars['qf']['quotefrom_name']; ?>
</td>
                <?php endif; ?>     
                <?php if ($this->_tpl_vars['qf']['sources'] != '0'): ?>       	
                <td><a style="color:#06F;" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_customer/inquiry-id-<?php echo $this->_tpl_vars['qf']['id']; ?>
-start_time_s-<?php echo $this->_tpl_vars['start_time_s']; ?>
-end_time_s-<?php echo $this->_tpl_vars['end_time_s']; ?>
.html"  target="navTab"><?php echo $this->_tpl_vars['qf']['sources']; ?>
</a></td>
                <?php else: ?>
                <td><?php echo $this->_tpl_vars['qf']['sources']; ?>
</td>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['qf']['newcustomer'] != '0'): ?>       	
                <td><a style="color:#06F;" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_customer/newcustomer-id-<?php echo $this->_tpl_vars['qf']['id']; ?>
-start_time_s-<?php echo $this->_tpl_vars['start_time_s']; ?>
-end_time_s-<?php echo $this->_tpl_vars['end_time_s']; ?>
.html"  target="navTab"><?php echo $this->_tpl_vars['qf']['newcustomer']; ?>
</a></td>
                <?php else: ?>
                <td><?php echo $this->_tpl_vars['qf']['newcustomer']; ?>
</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['qf']['conversion_rate']; ?>
</td>
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
</form>
</div>