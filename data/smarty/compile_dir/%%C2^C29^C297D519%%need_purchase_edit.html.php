<?php /* Smarty version 2.6.22, created on 2015-11-16 08:43:35
         compiled from stock_surplus/need_purchase_edit.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

     
      <div class="unit">
      	<label>单位：</label>
         <input type="text" size="50" name="unit" id="unit" value="<?php echo $this->_tpl_vars['unit_name']; ?>
" readonly />
           <input type="hidden" id="mid" name="mid"  value="<?php echo $this->_tpl_vars['need_purchase']['id']; ?>
"  />
      <!--  <select class="combox required" name="quotefrom_id" >
        <option value="">请选择</option>
        <?php $_from = $this->_tpl_vars['quotefromlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
        <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['quotefrom_name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
     -->
      </div>
      <div class="divider">divider</div>

      <div class="unit">
      	<label>数量：</label>
        <input type="text" size="50" name="quantity" id="quantity" value="<?php echo $this->_tpl_vars['need_purchase']['quantity']; ?>
"  />
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
        <li>
         <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit" >取消</button>
            </div>
          </div> </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">


</script> 
<!-- {/literal} -->