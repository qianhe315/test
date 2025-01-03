<?php /* Smarty version 2.6.22, created on 2013-08-09 13:49:41
         compiled from manager_set/index.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">   
      <div class="unit">
      	<label>免费做货：</label>
        <input type="text" size="50" name="free" value="<?php echo $this->_tpl_vars['manager_set']['free']; ?>
" />
      </div>
      <div class="divider">divider</div>
      
       <div class="unit">
      	<label>退款：</label>
        <input type="text" size="50" name="refund" value="<?php echo $this->_tpl_vars['manager_set']['refund']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>先做货后付款：</label>
        <input type="text" size="50" name="after_goods" value="<?php echo $this->_tpl_vars['manager_set']['after_goods']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>先发货后付款：</label>
        <input type="text" size="50" name="after_delivery"  value="<?php echo $this->_tpl_vars['manager_set']['after_delivery']; ?>
"  />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>部分付款后做货：</label>
        <input type="text" size="50" name="after_payment" value="<?php echo $this->_tpl_vars['manager_set']['after_payment']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>部分付款后发货：</label>
        <input type="text" size="50" name="after_shipment" value="<?php echo $this->_tpl_vars['manager_set']['after_shipment']; ?>
"  />
      </div>
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['manager_set']['id']; ?>
" />
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
              <button type="submit" >取消</button>
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