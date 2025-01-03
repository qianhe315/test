<?php /* Smarty version 2.6.22, created on 2014-03-13 16:56:19
         compiled from findcustomer/search.html */ ?>
<div class="pageContent">
	<form method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/findcustomer/index" class="pageForm" onsubmit="return navTabSearch(this);">
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
				 <label style="width:100px;">客户状态：</label>
           <select  name="activation" style="font-size:12px;" class="combox">
          <option value="">全部</option>
          <option value="1" <?php if ($this->_tpl_vars['activation'] == '1'): ?>selected="selected"<?php endif; ?> >无</option>
          <option value="2" <?php if ($this->_tpl_vars['activation'] == '2'): ?>selected="selected"<?php endif; ?> >已激活</option>
          <option value="3" <?php if ($this->_tpl_vars['activation'] == '3'): ?>selected="selected"<?php endif; ?> >未激活</option>
          
        </select>
			</div>
            <div class="unit">
				<label style="width:100px;">折扣状态：</label>
           <select  name="d_status" style="font-size:12px;" class="combox">
          <option value="">全部</option>
          <option value="1" <?php if ($this->_tpl_vars['d_status'] == '1'): ?>selected="selected"<?php endif; ?> >未审核</option>
          <option value="2" <?php if ($this->_tpl_vars['d_status'] == '2'): ?>selected="selected"<?php endif; ?> >审核通过</option>
          <option value="3" <?php if ($this->_tpl_vars['d_status'] == '3'): ?>selected="selected"<?php endif; ?> >驳回</option>
          
        </select>
			</div>
<!--			<div class="unit">
				<label style="width:100px;">固定电话：</label>
          <input type="text" name="telephone" value="<?php echo $this->_tpl_vars['telephone']; ?>
" alt="" style="width:150px;" />
			</div>-->
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