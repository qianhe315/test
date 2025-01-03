<?php /* Smarty version 2.6.22, created on 2014-09-10 14:05:19
         compiled from deductions_set/edit.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
  <input type="hidden" name="id" id="id" value="<?php echo $this->_tpl_vars['deductions_set']['id']; ?>
" />
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      	<label>时间：</label>
        <input type="text" size="30" name="date_value" value="<?php echo $this->_tpl_vars['deductions_set']['date_value']; ?>
"  class="date textInput readonly valid" />
      </div>
      <div class="unit">
      	<label>业务员：</label>
        <select class="combox" name="sale_name">
            <option value="">全部</option>
            <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
            <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_name']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
            <?php endforeach; endif; unset($_from); ?>
        </select>
      </div>
      <div class="unit">
      	<label>金额：</label>
        <input type="text" size="30" name="money" value="<?php echo $this->_tpl_vars['deductions_set']['money']; ?>
"  class="required" />
      </div>
      <div class="unit">
      	<label>事由：</label>
        <textarea name="note" cols="28" rows=""><?php echo $this->_tpl_vars['deductions_set']['note']; ?>
</textarea>
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
</div>

<!-- <?php echo ' --> 
<script type="text/javascript">


</script> 
<!-- '; ?>
 -->