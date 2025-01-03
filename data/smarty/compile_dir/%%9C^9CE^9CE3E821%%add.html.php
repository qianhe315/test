<?php /* Smarty version 2.6.22, created on 2014-09-18 17:11:35
         compiled from nature_classify/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['nature_classify_edit']['id']; ?>
" >
        <label>选择上级名称：</label>
        <select class="combox" name="father_name" id="father_name">
            <option value="0">顶级名称</option>
            <?php $_from = $this->_tpl_vars['nature_classify']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ta']):
?>
            <option value="<?php echo $this->_tpl_vars['ta']['id']; ?>
" <?php if ($this->_tpl_vars['nature_classify_edit']['from_id'] == $this->_tpl_vars['ta']['id']): ?> selected="selected"<?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['ta']['name']; ?>
</option>
            	<?php if ($this->_tpl_vars['ta']['erji']): ?>
                  <?php $_from = $this->_tpl_vars['ta']['erji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
                  <option value="<?php echo $this->_tpl_vars['p']['id']; ?>
" <?php if ($this->_tpl_vars['nature_classify_edit']['from_id'] == $this->_tpl_vars['p']['id']): ?> selected="selected"<?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['p']['name']; ?>
</option>
                    <?php if ($this->_tpl_vars['p']['sanji']): ?>
                      <?php $_from = $this->_tpl_vars['p']['sanji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['m']):
?>
                      <option value="<?php echo $this->_tpl_vars['m']['id']; ?>
" <?php if ($this->_tpl_vars['nature_classify_edit']['from_id'] == $this->_tpl_vars['m']['id']): ?> selected="selected"<?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['m']['name']; ?>
</option>
                         <?php if ($this->_tpl_vars['m']['siji']): ?>
                           <?php $_from = $this->_tpl_vars['m']['siji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n']):
?>
                           <option value="<?php echo $this->_tpl_vars['n']['id']; ?>
" <?php if ($this->_tpl_vars['nature_classify_edit']['from_id'] == $this->_tpl_vars['n']['id']): ?> selected="selected"<?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['n']['name']; ?>
</option>
                           <?php endforeach; endif; unset($_from); ?>
                         <?php endif; ?>
                      <?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
                  <?php endforeach; endif; unset($_from); ?>
            	<?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </select>
        
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>请输入名称：</label>
        <input type="text" size="30" name="name" id="name" value="<?php echo $this->_tpl_vars['nature_classify_edit']['name']; ?>
" alt="请输入名称" class="required"/>
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