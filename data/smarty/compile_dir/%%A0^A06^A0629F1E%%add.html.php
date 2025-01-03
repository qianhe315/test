<?php /* Smarty version 2.6.22, created on 2013-09-06 09:48:11
         compiled from tapedata/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>名称：</label>
        <input type="text" size="30" name="tapedata_name" id="tapedata_name" class="required" value="<?php echo $this->_tpl_vars['tapedata']['tapedata_name']; ?>
"  />
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['tapedata']['id']; ?>
" />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
        <label>宽度：</label>
        <input type="text" size="30" name="tapedata_width" id="tapedata_width" class="required number" value="<?php echo $this->_tpl_vars['tapedata']['tapedata_width']; ?>
"  />
         <label>CM</label>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>预留尺寸：</label>
        <input type="text" size="30" name="tapedata_reserved_size" id="tapedata_reserved_size" class="required number" value="<?php echo $this->_tpl_vars['tapedata']['tapedata_reserved_size']; ?>
"  />
         <label>CM</label>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>单价：</label>
        <input type="text" size="30" name="tapedata_price" id="tapedata_price" class="required number" value="<?php echo $this->_tpl_vars['tapedata']['tapedata_price']; ?>
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