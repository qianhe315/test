<?php /* Smarty version 2.6.22, created on 2019-08-02 09:29:07
         compiled from email/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/audio/email">
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
/audio/email" method="get">
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
/audio/email" method='post'>
	<table>
			<tr><td>业务员接/收：
			<select name="sale_user_id">
               <option value="1">发送</option>
               <option value="2" >接收</option>          
               </select>
               </td></tr>
		<tr><td>邮箱：<input type="text" name="email"></td></tr>
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
				<th width="1%">发送邮箱</th>
				<th width="3%">接收邮箱</th>
                <th width="3%">IP</th>
                <th width="3%">时间</th>
			</tr>
		</thead>
		<tbody>
         <?php if ($this->_tpl_vars['email']): ?>
		<?php $_from = $this->_tpl_vars['email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ot']):
?>
        <tr>
            <td><?php echo $this->_tpl_vars['ot']['mailfrom']; ?>
</td>
	    	<td><?php echo $this->_tpl_vars['ot']['mailto']; ?>
</td>
	    	<td><?php echo $this->_tpl_vars['ot']['sendip']; ?>
</td>
	    	<td><?php echo $this->_tpl_vars['ot']['sendtime']; ?>
</td>
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
