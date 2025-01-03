<?php /* Smarty version 2.6.22, created on 2023-06-26 09:10:13
         compiled from quotation/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>报价单分类名称：</label>
        <input type="text" size="30" name="quotation_name" id="quotation_name" class="required" value="<?php echo $this->_tpl_vars['quotation']['quotation_name']; ?>
"  />
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['quotation']['id']; ?>
" />
      </div>
      <div class="divider">divider</div>
     
      <div class="unit">
        <label>报价单代码：</label>
        <input type="text" size="30" name="quotation_code" id="quotation_code" class="required lettersonly" value="<?php echo $this->_tpl_vars['quotation']['quotation_code']; ?>
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