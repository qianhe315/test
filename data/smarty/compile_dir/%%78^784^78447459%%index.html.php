<?php /* Smarty version 2.6.22, created on 2013-03-29 09:13:13
         compiled from bosssetting/index.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>先做货后付款：</label>
        <input type="text" size="30" name="do_payment_after_the_goods_first" id="do_payment_after_the_goods_first" value="<?php echo $this->_tpl_vars['do_payment_after_the_goods_first']; ?>
"  />
        <label>元</label>
      </div>
      
     
      <div class="unit">
        <label>赔付做货（免费）：</label>
        <input type="text" size="30" name="pay_to_do_goods_free" id="pay_to_do_goods_free" value="<?php echo $this->_tpl_vars['pay_to_do_goods_free']; ?>
"  />
        <label>元</label>
      </div>
      <div class="unit">
        <label>退款：</label>
        <input type="text" size="30" name="refund" id="refund" value="<?php echo $this->_tpl_vars['refund']; ?>
"  />
        <label>元</label>
      </div>
      <div class="divider">divider</div>
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit">确认</button>
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