<?php /* Smarty version 2.6.22, created on 2015-04-21 11:32:40
         compiled from continuous_deduction/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
    <div class="unit">
      <input type="hidden" name="id" id="id" value="<?php echo $this->_tpl_vars['continuousOne']['id']; ?>
" >

      <label>姓名：</label>      
      <select class="combox" name="name"  >
          <?php $_from = $this->_tpl_vars['employee']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ta']):
?>
              <option value="<?php echo $this->_tpl_vars['ta']['name']; ?>
" <?php if ($this->_tpl_vars['continuousOne']['name'] == $this->_tpl_vars['ta']['name']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['ta']['name']; ?>
</option>
          <?php endforeach; endif; unset($_from); ?>
      </select>  
        
     </div>
       <div class="divider">divider</div>
      <div class="unit">
      	<label>项目：</label>
        <select class="combox" name="program"  >
            <option value="社保缴费" <?php if ($this->_tpl_vars['continuousOne']['program'] == '社保缴费'): ?> selected="selected"<?php endif; ?>>社保缴费</option>
            <option value="公积金缴费" <?php if ($this->_tpl_vars['continuousOne']['program'] == '公积金缴费'): ?> selected="selected"<?php endif; ?>>公积金缴费</option>
         </select>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>金额：</label>
        <input type="text" size="30" name="money" id="money" value="<?php echo $this->_tpl_vars['continuousOne']['money']; ?>
"  class="required"/>
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
  <input type="hidden" name="root" id="root" value="<?php echo $this->_tpl_vars['__ROOT__']; ?>
" >
  
</div>

<!-- <?php echo ' --> 
<script type="text/javascript">


</script> 
<!-- '; ?>
 -->