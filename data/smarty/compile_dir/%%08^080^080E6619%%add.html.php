<?php /* Smarty version 2.6.22, created on 2013-06-12 15:15:59
         compiled from payment_methods/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
     <input type="hidden" name="this_payment_methods_id"  value="<?php echo $this->_tpl_vars['payment_methods']['id']; ?>
">
      <div class="unit">
      	<label>收款方式：</label>
        <input type="text" size="30" name="payment_methods_name" id="payment_methods_name" value="<?php echo $this->_tpl_vars['payment_methods']['payment_methods_name']; ?>
" class="required" />
      </div>
      <div class="divider">divider</div>
      
      
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit" >确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>

<!-- <?php echo ' --> 
<script type="text/javascript">


</script> 
<!-- '; ?>
 -->