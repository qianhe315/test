<?php /* Smarty version 2.6.22, created on 2013-08-05 11:52:50
         compiled from supplier_attributes/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" id="pageForm" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

        <div class="unit">
      	<label>名称：</label>
        <input type="text" size="50" name="name" id="name" value="<?php echo $this->_tpl_vars['supplier_attributes']['name']; ?>
"  />
        <input type="hidden" name="hidden_id" value="<?php echo $this->_tpl_vars['supplier_attributes']['id']; ?>
" />
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
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">


</script> 
<!-- {/literal} -->