<?php /* Smarty version 2.6.22, created on 2013-10-08 09:43:05
         compiled from customeroption/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>选项名称：</label>
        <input type="text" size="30" name="customeroption_name" id="customeroption_name" class="required" value="<?php echo $this->_tpl_vars['customeroption']['customeroption_name']; ?>
"/>
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['customeroption']['id']; ?>
" />
      </div>
      <div class="divider">divider</div>
      
       <div class="unit">
        <label>英文名称：</label>
        <input type="text" size="30" name="english_name" id="english_name" class="required lettersonly" value="<?php echo $this->_tpl_vars['customeroption']['english_name']; ?>
"  />
        
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