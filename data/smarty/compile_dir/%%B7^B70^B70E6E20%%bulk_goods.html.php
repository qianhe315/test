<?php /* Smarty version 2.6.22, created on 2016-03-22 09:48:02
         compiled from cn_factory_order/bulk_goods.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      	<label>订单号：</label>
        <textarea name="order_number" cols="50" rows="9"></textarea>
        <label style="width:300px;">单号之间以逗号分割!</label>
      </div>

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