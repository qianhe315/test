<?php /* Smarty version 2.6.22, created on 2014-10-20 16:58:47
         compiled from factory_order/mark_wrong.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" id="pageForm" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

        <div class="unit">
      	<label>问题：</label>
        <textarea class="add01_textarea textInput" style="width:180px;height:65px; margin-bottom:30px;" name="note_wrong"></textarea>
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['id']; ?>
">
      </div>
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
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">


</script> 
<!-- {/literal} -->