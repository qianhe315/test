<?php /* Smarty version 2.6.22, created on 2024-10-22 17:14:24
         compiled from lhpl_module/add_attribute.html */ ?>
<div class="pageContent">
  <form method="post" id="lhpl_attribute" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <input type="hidden" name="module_id"  value="<?php echo $this->_tpl_vars['module_id']; ?>
">
      <input type="hidden" name="attribute_id"  value="<?php echo $this->_tpl_vars['attribute_id']; ?>
">
      <div class="unit">
        <label>属性中文名：</label>
        <input type="text" size="30" name="cn_name" class="required" value="<?php echo $this->_tpl_vars['lhpl_attribute']['cn_name']; ?>
"/>
      </div>
      <div class="unit" style="margin-top:5px;">
        <label>属性英文名：</label>
        <input type="text" size="30" name="en_name" class="required" value="<?php echo $this->_tpl_vars['lhpl_attribute']['en_name']; ?>
"/>
      </div>
      <div class="unit" style="margin-top:5px;">
        <label>程序区分名：</label>
        <input type="text" size="30" name="en_name1" class="required" value="<?php echo $this->_tpl_vars['lhpl_attribute']['en_name1']; ?>
"/>
      </div>
      <div class="unit" style="margin-top:5px;">
        <label>类型：</label>
        <select id="type" class="combox required" onchange="select_type();" name="type" >
   
          <option value="">选择类型</option>
          <option value="单选" <?php if ($this->_tpl_vars['lhpl_attribute']['type'] == '单选'): ?>  selected="selected" <?php endif; ?>>单选</option>
          <option value="多选" <?php if ($this->_tpl_vars['lhpl_attribute']['type'] == '多选'): ?>  selected="selected" <?php endif; ?>>多选</option>
          <option value="文本框" <?php if ($this->_tpl_vars['lhpl_attribute']['type'] == '文本框'): ?>  selected="selected" <?php endif; ?>>文本框</option>
          <option value="文本域" <?php if ($this->_tpl_vars['lhpl_attribute']['type'] == '文本域'): ?>  selected="selected" <?php endif; ?>>文本域</option>
          <option value="双单选" <?php if ($this->_tpl_vars['lhpl_attribute']['type'] == '双单选'): ?>  selected="selected" <?php endif; ?>>双单选</option>
          <option value="潘通色" <?php if ($this->_tpl_vars['lhpl_attribute']['type'] == '潘通色'): ?>  selected="selected" <?php endif; ?>>潘通色</option>
          <!-- <option value="潘通色与单选" <?php if ($this->_tpl_vars['lhpl_attribute']['type'] == '潘通色与单选'): ?>  selected="selected" <?php endif; ?>>潘通色与单选</option> -->
        </select>
      </div>
      <div class="unit" style="margin-top:5px;">
        <label>模块内顺序：</label>
        <input type="text" size="10" name="order" class="required" value="<?php echo $this->_tpl_vars['lhpl_attribute']['order']; ?>
"/>
      </div>
       <div class="unit" style="margin-top:5px;">
        <label>必填项：</label>
        <select id="is_required" class="combox required" name="required" >
          <option value=""  <?php if ($this->_tpl_vars['lhpl_attribute']['required'] == ''): ?>  selected="selected" <?php endif; ?>>否</option>
          <option value="1"  <?php if ($this->_tpl_vars['lhpl_attribute']['required'] == '1'): ?>  selected="selected" <?php endif; ?>>是</option>
          
        </select>
      </div>
      <div class="unit" style="margin-top:5px;">
        <label>类别：</label>
        <select id="attr_category" class="combox required" name="attr_category" >
          <option value="" >请选择</option>
          <option value="1"  <?php if ($this->_tpl_vars['lhpl_attribute']['attr_category'] == '1'): ?>  selected="selected" <?php endif; ?>>服装部位</option>

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