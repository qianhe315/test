<?php /* Smarty version 2.6.22, created on 2013-06-14 11:51:13
         compiled from time/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>时间名称：</label>
        <input type="text" size="30" name="time_name" id="time_name" class="required" value="<?php echo $this->_tpl_vars['time']['time_name']; ?>
"  />
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['time']['id']; ?>
" />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
        <label>时间：</label>
        <input type="text" size="30" name="time_value" id="time_value" class="required digits" value="<?php echo $this->_tpl_vars['time']['time_value']; ?>
"  /><label>小时</label>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
        <label>时间分类：</label>
       <select name="time_category" class="combox">
       <?php $_from = $this->_tpl_vars['time_categorys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tc']):
?>
       <option value="<?php echo $this->_tpl_vars['tc']['id']; ?>
" <?php if ($this->_tpl_vars['time']['time_category'] == $this->_tpl_vars['tc']['id']): ?>selected <?php endif; ?>><?php echo $this->_tpl_vars['tc']['timecategory_name']; ?>
</option>
       <?php endforeach; endif; unset($_from); ?>
       </select>
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