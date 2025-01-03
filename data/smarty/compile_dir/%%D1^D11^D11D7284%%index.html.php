<?php /* Smarty version 2.6.22, created on 2016-01-27 11:53:32
         compiled from cn_no_deal_customer/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_no_deal_customer/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_no_deal_customer/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        	<li style="width:20%;">
				<label>日期：</label>
				<input type="text" class="date" name="date_time" value="<?php echo $this->_tpl_vars['date_time']; ?>
"/>
			</li>
            <li style="width:20%;">
				<label>询盘日期：</label>
				<input type="text" class="date" name="quote_date" value="<?php echo $this->_tpl_vars['quote_date']; ?>
"/>
			</li>
            <li style="width:20%;">
				<label>客户代码：</label>
				<input type="text"  name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
"/>
			</li>
            <li style="width:20%;">
				<label>公司：</label>
				<input type="text"  name="company" value="<?php echo $this->_tpl_vars['company']; ?>
"/>
			</li>
			<li style="width:20%;">
				<label>业务员：</label>
				<select  name="user_id">
                    <option value=""  >请选择业务员</option>
                    <?php $_from = $this->_tpl_vars['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['u']):
?> 
                    <option value="<?php echo $this->_tpl_vars['u']['user_id']; ?>
" <?php if ($this->_tpl_vars['user_id'] == $this->_tpl_vars['u']['user_id']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['u']['user_name']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div class="buttonContent" style="float:right;"><button type="submit">检索</button></div></div></li>
			
		</ul><!--
         <div class="subBar">
			
		</div>-->
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_no_deal_customer/addpage/" target="navTab" ><span>添加</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="98%" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="8%">日期</th>
                <th width="8%">询盘日期</th>
                <th width="5%">客户代码</th>
                <th width="10%">客户名</th>
                <th width="8%">公司</th>
                <th width="15%">地区</th>
                <th width="5%">业务员</th>
                <th width="8%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['customer_list']): ?>
			 <?php $_from = $this->_tpl_vars['customer_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['ug']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['quote_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['area_all']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['user_name']; ?>
</td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_no_deal_customer/del-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_no_deal_customer/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnEdit">编辑</a></td>
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