<?php /* Smarty version 2.6.22, created on 2013-06-13 16:18:39
         compiled from product_coding/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>报关产品编码：</label>
        <input type="text" name="number_code" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
        <input type="hidden" name="id" style="width:100px;" value="<?php echo $this->_tpl_vars['id']; ?>
" /> 
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
        <li> 
         <div class="buttonActive">
            <div class="buttonContent">
              <button class="close">取消</button>
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