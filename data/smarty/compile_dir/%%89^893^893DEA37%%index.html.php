<?php /* Smarty version 2.6.22, created on 2018-12-27 14:14:10
         compiled from audio/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/audio/index">
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



<form rel="pagerForm"  onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/audio/index" method='post'>
<input type="hidden" name="date" value="<?php echo $this->_tpl_vars['date']; ?>
">
	<table>
		<tr><td>输入内容：<textarea name="content" style="width:300px; height:200px;"><?php echo $this->_tpl_vars['content']; ?>
</textarea></td></tr>
		<?php if ($this->_tpl_vars['flag'] == 1): ?>
		<tr><td>是否正式播报：<input type="checkbox" name="flag" value="1"></td></tr>
		<?php endif; ?>
		<tr><td><div class="buttonActive" style="float:right;"><div class="buttonContent" style="float:right;"><button type="submit">提交</button></div></div></td></tr>
	</table>
</form>
