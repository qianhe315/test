<?php /* Smarty version 2.6.22, created on 2013-03-27 13:30:51
         compiled from picturesetuptime/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>排图时间名称：</label>
        <input type="text" size="30" name="picturesetuptime_name" id="picturesetuptime_name" value="<?php echo $this->_tpl_vars['picturesetuptime']['picturesetuptime_name']; ?>
"  />
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['picturesetuptime']['id']; ?>
" />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
        <label>时间：</label>
        <input type="text" size="30" name="picturesetuptime_value" id="picturesetuptime_value" value="<?php echo $this->_tpl_vars['picturesetuptime']['picturesetuptime_value']; ?>
"  /><label>小时</label>
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
        <li> </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">

</script> 
<!-- {/literal} -->