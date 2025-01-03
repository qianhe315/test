<?php /* Smarty version 2.6.22, created on 2014-05-20 11:30:34
         compiled from quotecustomer/search.html */ ?>
<div class="pageContent">
	<form method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/index" class="pageForm" onsubmit="return navTabSearch(this);">
		<div class="pageFormContent" layoutH="58">
			<div class="unit">
				<label style="width:100px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="readonly" style="width:70px; float:left;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
                <font style="float:left; line-height:22px;">-</font>
                <input type="text" name="end_time" class="date" readonly="readonly" style="width:70px; float:left;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
			</div>
			<div class="unit">
				<label style="width:100px;">固定电话：</label>
				<input type="text" name="telephone" value="<?php echo $this->_tpl_vars['telephone']; ?>
" style="width:150px;" />
			</div>
			<div class="unit">
				<label style="width:100px;">手机：</label>
				<input type="text" name="cellphone" value="<?php echo $this->_tpl_vars['cellphone']; ?>
" style="width:150px;" />
			</div>
			
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">开始检索</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="reset">清空重输</button></div></div></li>
			</ul>
		</div>
	</form>
</div>