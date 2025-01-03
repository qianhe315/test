<?php /* Smarty version 2.6.22, created on 2018-06-15 16:50:03
         compiled from business_limit/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>业务员：</label>
		<?php if ($this->_tpl_vars['user']['user_name']): ?>
			<?php echo $this->_tpl_vars['user']['user_name']; ?>

		<?php else: ?>
         <select name="userid" style="font-size:13px;" id="newtouid_new">
		   <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
			   <option value="<?php echo $this->_tpl_vars['qf']['user_id']; ?>
"><?php echo $this->_tpl_vars['qf']['user_name']; ?>
</option>
		   <?php endforeach; endif; unset($_from); ?>
		</select>
		<?php endif; ?>
      </div>
	  <div class="unit">
        <label>业务上限：</label>
        <input type="text" name="upperlimit" style="width:100px;" value="<?php echo $this->_tpl_vars['user_list']['upperlimit']; ?>
" />
		 <input type="hidden" name="user_id" style="width:100px;" value="<?php echo $this->_tpl_vars['user_id']; ?>
" /> 
		 <input type="hidden" name="user_name" style="width:100px;" value="<?php echo $this->_tpl_vars['user']['user_name']; ?>
" /> 
      </div>
      <div class="divider">divider</div>
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit">确认添加</button>
            </div>
          </div>
        </li>
        <li> 
         <div class="buttonActive">
            <div class="buttonContent">
              <button class="close">取消</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">

</script> 
<!-- {/literal} -->