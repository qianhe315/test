<?php /* Smarty version 2.6.22, created on 2014-07-09 17:18:22
         compiled from materials_chinese_management/edit.html */ ?>
<div class="pageContent">
  <form method="post"  id="materials_chinese_management_edit" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm"  onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
    <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['ms']['material_name']; ?>
" />
    <div class="unit">
      	<label>材料名（英文）：</label>
        <input type="text" size="30" name="material_name" readonly="true" id="material_name" value="<?php echo $this->_tpl_vars['ms']['material_name']; ?>
"  />
      </div>
      <div class="divider">divider</div>
        <div class="unit">
      	<label>材料名（中文）：</label>
        <input type="text" size="30" name="material_chinese_name"  id="material_chinese_name"  value="<?php echo $this->_tpl_vars['material_chinese_name']; ?>
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
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">	
</script> 