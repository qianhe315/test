<?php /* Smarty version 2.6.22, created on 2014-03-01 10:33:56
         compiled from web_customer/newcustomer.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_customer/newcustomer">
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
</form>

<div class="pageHeader">
	<form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_customer/newcustomer" method="get">
	<div class="searchBar">
		<ul class="searchContent">
             <li style="width:25%;">
				
			</li>
                    
		</ul>
		
		<div class="subBar">
			<ul>
				
				
			</ul>
		</div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_customer/xls_export" method="post" id="quoteexport">
<div class="pageContent">
<div class="panelBar">
        <ul  class="toolBar">

         </ul>
	</div>
	<table class="table" asc="asc" desc="desc" width="100%" layoutH="138">
		<thead>
			<tr>
				<!--<th width="2%"><input type="checkbox" group="customer_ids[]" class="checkboxCtrl" id="check_all"  ></th>-->
                <th width="2%">编号</th>
                <th width="5%">日期</th>
                <th width="8%" orderField="quote_time" class="asc">询盘日期</th>
                <th width="4%">客户代码</th>
                <th width="8%">客户名</th>
                <th width="5%">客户来源</th>
                <th width="5%">询盘方式</th>
                <th width="5%">来源渠道</th>
                <th width="6%">公司</th>
                <th width="7%">国家</th>             
                <th width="4%">业务员</th>
                <!--<th width="4%">操作</th>-->
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['newcustomer_list']): ?>
			 <?php $_from = $this->_tpl_vars['newcustomer_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <!--<td><input name="customer_ids[]" value="<?php echo $this->_tpl_vars['ug']['id']; ?>
" type="checkbox" ></td>-->
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
                <td><?php echo $this->_tpl_vars['ug']['quotefrom']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['quotecategory_name']; ?>
</td>
                <td>
                <?php $_from = $this->_tpl_vars['sources_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sl']):
?>
                <?php if ($this->_tpl_vars['ug']['sources_id'] == $this->_tpl_vars['sl']['id']): ?>
                <?php echo $this->_tpl_vars['sl']['sources_name']; ?>

                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                </td>
                
                <td><?php echo $this->_tpl_vars['ug']['company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['country']; ?>
</td>
               
                <td><?php echo $this->_tpl_vars['ug']['yewu_name']; ?>
</td>
               
               
                
<!--                <td>
                <?php if ($this->_tpl_vars['session_name'] == $this->_tpl_vars['ug']['yewu_name'] || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '58' || $this->_tpl_vars['user_hidden']['group_id'] == '59'): ?>
                <?php if ($this->_tpl_vars['ug']['status'] == '1'): ?>
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/del-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnDel">删除</a>
                <?php endif; ?>
                <a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnEdit" rel="editquotecustomer">编辑</a>
                <?php endif; ?>
                </td>-->
                
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