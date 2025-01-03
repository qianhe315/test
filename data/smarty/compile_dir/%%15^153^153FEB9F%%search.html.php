<?php /* Smarty version 2.6.22, created on 2014-04-21 13:30:16
         compiled from batch_findcustomer/search.html */ ?>
<div class="pageContent">
	<form method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/batch_findcustomer/index" class="pageForm" onsubmit="return navTabSearch(this);">
		<div class="pageFormContent" layoutH="58">
			
			<div class="unit">
				<label style="width:100px;">客户代码：</label>
				<textarea name="quote_content" cols="30" rows="10"></textarea>
                <label style="width:300px;">单号之间以逗号分割!</label>
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