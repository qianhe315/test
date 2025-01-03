<?php /* Smarty version 2.6.22, created on 2015-12-12 11:23:59
         compiled from cn_stock_surplus/need_purchase_edit.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

     
      <div class="unit">
          <label>单位：</label>
          <input type="text" size="50" name="unit" id="unit" disabled="disabled" value="<?php echo $this->_tpl_vars['unit_name']; ?>
"  />
          <input type="hidden" id="mid" name="mid"  value="<?php echo $this->_tpl_vars['need_purchase']['id']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
          <label>数量：</label>
          <input type="text" size="50" name="quantity" id="quantity" value="<?php echo $this->_tpl_vars['need_purchase']['quantity']; ?>
"  />
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
              <button type="submit" >取消</button>
            </div>
          </div> </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">


</script> 
<!-- {/literal} -->