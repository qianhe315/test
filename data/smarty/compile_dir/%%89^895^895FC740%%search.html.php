<?php /* Smarty version 2.6.22, created on 2014-09-24 10:08:25
         compiled from factory_order/search.html */ ?>
<div class="pageContent">
	<form method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/index" class="pageForm" onsubmit="return navTabSearch(this);">
		<div class="pageFormContent" layoutH="58">
        
			<div class="unit">
				<label style="width:60px">发货状态：</label>
				<select class="combox" name="deliver_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['deliver_status'] == '1'): ?>selected="selected"<?php endif; ?>>未发货</option>
                <option value="2" <?php if ($this->_tpl_vars['deliver_status'] == '2'): ?>selected="selected"<?php endif; ?>>部分发货</option>
                <option value="3" <?php if ($this->_tpl_vars['deliver_status'] == '3'): ?>selected="selected"<?php endif; ?>>完全发货</option>
                </select>
			</div>
			<div class="unit">
				<label style="width:60px">收货状态：</label>
				<select class="combox" name="take_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['take_status'] == '1'): ?>selected="selected"<?php endif; ?>>未收货</option>
                <option value="2" <?php if ($this->_tpl_vars['take_status'] == '2'): ?>selected="selected"<?php endif; ?>>部分收货</option>
                <option value="3" <?php if ($this->_tpl_vars['take_status'] == '3'): ?>selected="selected"<?php endif; ?>>完全收货</option>
                </select>
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