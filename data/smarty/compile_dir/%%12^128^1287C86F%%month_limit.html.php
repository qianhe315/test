<?php /* Smarty version 2.6.22, created on 2019-08-02 09:28:14
         compiled from audio/month_limit.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/audio/month_limit">
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
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/audio/month_limit" method="get">
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


<form rel="pagerForm"  onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/audio/month_limit" method='post'>
	<table>
			<tr><td>业务员：
			<select name="sale_user_id">
               <option value="" >全部</option>
               <option value="888">奥德队</option>
               <option value="777" >战狼队</option>
               <option value="999" >抢单队</option>             
               <?php $_from = $this->_tpl_vars['sales_user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['su']):
?>
                <option value="<?php echo $this->_tpl_vars['su']['user_id']; ?>
" <?php if ($this->_tpl_vars['su']['user_id'] == $this->_tpl_vars['sale_user_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['su']['user_name']; ?>
</option>
               <?php endforeach; endif; unset($_from); ?>
               </select>
               </td></tr>
		<tr><td>销售额：<input type="text" name="money"></td></tr>
		<tr><td>新客户：<input type="text" name="customer"></td></tr>
		<tr><td>月份：<input type="text" size="20" name="month"  class="date textInput readonly valid" datefmt="yyyy-MM" /></td></tr>
		<tr><td><div class="buttonActive" style="float:right;"><div class="buttonContent" style="float:right;"><button type="submit">提交</button></div></div></td></tr>
	</table>
</form>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        </ul>
	</div>
	<table class="table" width="80%" layoutH="138">
		<thead>
			<tr>
				<th width="1%">编号</th>
				<th width="3%">名称</th>
                <th width="3%">销售额</th>
                <th width="3%">新客户</th>
                <th width="3%">月份</th>
                <th width="3%">录入时间</th>
                <th width="3%">操作</th>
			</tr>
		</thead>
		<tbody>
         <?php if ($this->_tpl_vars['objective']): ?>
		<?php $_from = $this->_tpl_vars['objective']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ot']):
?>
        <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" <?php if ($this->_tpl_vars['ot']['user_id'] == 6 || $this->_tpl_vars['ot']['user_id'] == 7 || $this->_tpl_vars['ot']['user_id'] == 78 || $this->_tpl_vars['ot']['user_id'] == 18): ?>style='background:#ff0'<?php elseif ($this->_tpl_vars['ot']['user_id'] == 13 || $this->_tpl_vars['ot']['user_id'] == 12 || $this->_tpl_vars['ot']['user_id'] == 106 || $this->_tpl_vars['ot']['user_id'] == 3 || $this->_tpl_vars['ot']['user_id'] == 35): ?>style='background:#BFEFFF'<?php elseif ($this->_tpl_vars['ot']['user_id'] == 4 || $this->_tpl_vars['ot']['user_id'] == 5 || $this->_tpl_vars['ot']['user_id'] == 110 || $this->_tpl_vars['ot']['user_id'] == 37): ?>style='background:#B0B0B0'<?php endif; ?>>
            <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
            <td><?php echo $this->_tpl_vars['ot']['name']; ?>
</td>
	    	<td><?php echo $this->_tpl_vars['ot']['money']; ?>
</td>
	    	<td><?php echo $this->_tpl_vars['ot']['customer']; ?>
</td>
	    	<td><?php echo $this->_tpl_vars['ot']['month']; ?>
</td>
	    	<td><?php echo $this->_tpl_vars['ot']['insert_time']; ?>
</td>
	    	<td><?php if ($this->_tpl_vars['ot']['user_id'] != 666): ?><a title="删除吗？" target="ajaxTodo" href='<?php echo $this->_tpl_vars['__ROOT__']; ?>
/audio/delete-id-<?php echo $this->_tpl_vars['ot']['id']; ?>
.html' class="btnDel">删除</a><?php endif; ?></td>
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
