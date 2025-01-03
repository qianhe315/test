<?php /* Smarty version 2.6.22, created on 2016-06-14 14:58:17
         compiled from payment_situation/reason_rejection.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="divider">divider</div>
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
      <div class="unit">
      	<label>备注理由：</label>
        <textarea name="quote_content" cols="50" rows="4"><?php echo $this->_tpl_vars['remark']; ?>
</textarea>
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