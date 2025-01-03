<?php /* Smarty version 2.6.22, created on 2014-07-09 14:16:40
         compiled from supplier_settlement_time/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

        <div class="unit">
      	<label>时间周期：</label>
        <input type="text" size="10" name="cycle" id="cycle" value="<?php echo $this->_tpl_vars['supplier_settlement_time']['cycle']; ?>
"  /><font style=" float:left; line-height:22px; margin-left:5px;">天</font>
        <input type="hidden" name="hidden_id" value="<?php echo $this->_tpl_vars['supplier_settlement_time']['id']; ?>
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