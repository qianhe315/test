<?php /* Smarty version 2.6.22, created on 2013-05-15 17:11:19
         compiled from monthly_sales/add.html */ ?>

<div class="pageContent">
  <form method="post" id="quote_form" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
    
      
      
      <div class="unit">
      	<label>业务员：</label>
        <select class="combox required" name="quotefrom_id" id="quotefrom_id" >
        <option value="">请选择</option>
        <?php $_from = $this->_tpl_vars['quotefromlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
        <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['quotefrom_name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
        <span id="quotefrom_id_result" class="error" style="display:none;"></span>
        <input name="customer_code" id="customer_code" value="" readonly style="display:none;" />
       <!-- <select id="customer_code" name="customer_code" class="combox required">
        <option value="">请选择</option>
        </select>-->
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>月销售目标：</label>
        <input type="text" size="25" name="customer_name" id="customer_name" value="" class="required"  />
        <span id="customer_name_result" class="error" style="display:none;"></span>
      </div>
      
      <div class="divider">divider</div>
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit" >确认</button>
            </div>
          </div>
        </li>
        <li> <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit" >取消</button>
            </div>
          </div> </li>
      </ul>
    </div>
  </form>
</div>
