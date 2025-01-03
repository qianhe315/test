<?php /* Smarty version 2.6.22, created on 2015-11-10 13:14:01
         compiled from user_company_set/all_page.html */ ?>

<div class="pageContent">
	<form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
		<div class="pageFormContent" layoutH="58">
            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['get_info']['id']; ?>
" />
            <div class="unit">
                <label>公司：</label>
                <input type="text" size="50" name="company_name" value="<?php echo $this->_tpl_vars['get_info']['company_name']; ?>
"  />
            </div>
            <div class="divider">divider</div>
            <div class="unit">
                <label>办公区域：</label>
                <select name="office_id" >
                	<?php $_from = $this->_tpl_vars['office_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['val']):
?>
                	<option  value="<?php echo $this->_tpl_vars['val']['id']; ?>
" <?php if ($this->_tpl_vars['val']['id'] == $this->_tpl_vars['get_info']['office_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['val']['office_name']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </div>
            <div class="divider">divider</div>
    	</div>
    	<div class="formBar">
            <ul>
                <li>
                    <div class="buttonActive">
                        <div class="buttonContent">
                            <button type="submit" >确认</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="buttonActive">
                        <div class="buttonContent">
                            <button type="button" class="close" >取消</button>
                        </div>
                    </div> 
                </li>
            </ul>
        </div>
    </form>
</div>