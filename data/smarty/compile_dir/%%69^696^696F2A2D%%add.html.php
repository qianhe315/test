<?php /* Smarty version 2.6.22, created on 2024-10-22 16:58:24
         compiled from lhpl_module/add.html */ ?>
<div class="pageContent">
  <form method="post" id="lhpl_module" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <input type="hidden" name="module_id"  value="<?php echo $this->_tpl_vars['lhpl_module']['module_id']; ?>
">
      <div class="unit">
        <label>模块中文名：</label>
        <input type="text" size="30" name="cn_name" class="required" value="<?php echo $this->_tpl_vars['lhpl_module']['cn_name']; ?>
"/>
      </div>
      <div class="unit" style="margin-top:5px;">
        <label>模块英文名：</label>
        <input type="text" size="30" name="en_name" class="required" value="<?php echo $this->_tpl_vars['lhpl_module']['en_name']; ?>
"/>
      </div>
      <div class="unit" style="margin-top:5px;">
        <label>图片支持：</label>
        <select id="support_image" class="combox required" name="support_image" >
          <?php if ($this->_tpl_vars['lhpl_module']['support_image'] == 1): ?>
          <option value="1" selected="selected">启用</option>
          <option value="">关闭</option>
          <?php else: ?>
          <option value="" selected="selected">关闭</option>
          <option value="1">启用</option>
          <?php endif; ?>
        </select>
      </div>
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
        <li> </li>
      </ul>
    </div>
  </form>
</div>