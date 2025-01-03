<?php /* Smarty version 2.6.22, created on 2023-10-07 15:32:25
         compiled from product_order/replace_order.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['action']; ?>
" id="pageForm" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

        <div class="unit">
      	<label>被替换订单号：</label>
        <input type="text" name="replace_order_number" id="replace_order_number" value="">
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