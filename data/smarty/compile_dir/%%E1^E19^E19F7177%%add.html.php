<?php /* Smarty version 2.6.22, created on 2013-06-13 13:42:55
         compiled from area/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      <input type="hidden" name="this_area_id" value="<?php echo $this->_tpl_vars['area']['area_id']; ?>
" >
        <label>选择上级区域：</label>
        <select class="combox" name="area_id" id="country">
            <option value="0">顶级区域</option>
            <?php $_from = $this->_tpl_vars['top_area']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ta']):
?>
            <option value="<?php echo $this->_tpl_vars['ta']['area_id']; ?>
" <?php if ($this->_tpl_vars['area']['parent_id'] == $this->_tpl_vars['ta']['area_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['ta']['area_name']; ?>
</option>
            	<?php if ($this->_tpl_vars['ta']['children']): ?>
            	<?php $_from = $this->_tpl_vars['ta']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
                <option value="<?php echo $this->_tpl_vars['p']['area_id']; ?>
" <?php if ($this->_tpl_vars['area']['parent_id'] == $this->_tpl_vars['p']['area_id']): ?> selected="selected" <?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['p']['area_name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            	<?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </select>
        
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>请输入区域名称：</label>
        <input type="text" size="30" name="area_name" id="area_name" value="<?php echo $this->_tpl_vars['area']['area_name']; ?>
" alt="请输入区域名称" class="required"/>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>请输入区域代码：</label>
        <input type="text" size="30" name="code" id="code" value="<?php echo $this->_tpl_vars['area']['code']; ?>
" alt="请输入区域代码" />
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