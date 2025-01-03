<?php /* Smarty version 2.6.22, created on 2013-04-02 09:55:22
         compiled from pricerangecategory/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>名称：</label>
        <input type="text" size="30" name="pricerangecategory_name" id="pricerangecategory_name" value="<?php echo $this->_tpl_vars['pricerangecategory']['pricerangecategory_name']; ?>
"  />
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['pricerangecategory']['id']; ?>
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
        <li> </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">

</script> 
<!-- {/literal} -->