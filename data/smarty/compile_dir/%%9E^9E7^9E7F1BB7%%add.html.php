<?php /* Smarty version 2.6.22, created on 2014-02-11 09:10:03
         compiled from shippingcompany/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>快递公司名称：</label>
        <input type="text" size="30" name="shippingcompany_name" id="shippingcompany_name" value="<?php echo $this->_tpl_vars['shippingcompany']['shippingcompany_name']; ?>
"  />
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['shippingcompany']['id']; ?>
" />
      </div>
      <div class="unit">
        <label>公司网址：</label>
        <input type="text" size="30" name="web_url" id="" value="<?php echo $this->_tpl_vars['shippingcompany']['web_url']; ?>
"  />
      </div>      
      
<!--      <div class="unit">
        <label>报关限额：</label>
        <input type="text" size="30" name="shippingcompany_customs_clearance_limit" id="shippingcompany_customs_clearance_limit" value="<?php echo $this->_tpl_vars['shippingcompany']['shippingcompany_customs_clearance_limit']; ?>
"  />
         <label>元</label>
      </div>-->
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