<?php /* Smarty version 2.6.22, created on 2016-03-18 14:27:06
         compiled from cn_customer_code_set/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
     <input type="hidden" name="this_quotefrom_id"  value="<?php echo $this->_tpl_vars['cn_customer_code_set']['id']; ?>
">
      <div class="unit">
      	<label>询盘来源名称：</label>
        <input type="text" size="30" name="quotefrom_name" id="quotefrom_name" value="<?php echo $this->_tpl_vars['cn_customer_code_set']['quotefrom_name']; ?>
" class="required"/>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>询盘来源字母编号：</label>
        <input type="text" size="30" name="quotefrom_letter" class="required lettersonly" id="quotefrom_letter" value="<?php echo $this->_tpl_vars['cn_customer_code_set']['quotefrom_letter']; ?>
"/>
      </div>
     <!-- <div class="divider">divider</div>
      
      <div class="unit">
      	<label>是否必填询盘分类：</label>
        <input type="radio" name="quotefrom_check"  value="1" <?php if ($this->_tpl_vars['quotefrom']['quotefrom_check'] == '1'): ?> checked <?php endif; ?> />是  
        <input type="radio" name="quotefrom_check"  value="0" <?php if ($this->_tpl_vars['quotefrom']['quotefrom_check'] == '0'): ?> checked <?php endif; ?> />否
      </div>-->
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