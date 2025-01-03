<?php /* Smarty version 2.6.22, created on 2013-08-20 15:23:49
         compiled from discount_approval/reason_rejection.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="divider">divider</div>
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
      <input type="hidden" name="c_id" value="<?php echo $this->_tpl_vars['c_id']; ?>
">
      <div class="unit">
      	<label>驳回理由：</label>
        <textarea name="quote_content" cols="50" rows="4"></textarea>
      </div>
      <div class="divider">divider</div>
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit" >确定</button>
            </div>
          </div>
        </li>
        <li> 
         <div class="buttonActive">
            <div class="buttonContent">
              <button class="close" >取消</button>
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