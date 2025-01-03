<?php /* Smarty version 2.6.22, created on 2014-07-26 11:56:56
         compiled from supplier_management/color_edit.html */ ?>

<div class="pageContent">
  <form method="post"  id="supplier_management_color_edit_new" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm"  onsubmit="return validateCallback(this, navTabAjaxDone)">
    <div class="pageFormContent" layoutH="58">
    <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['materials']['id']; ?>
" />
    <input type="hidden" name="midd" value="<?php echo $this->_tpl_vars['id_aa']; ?>
" />

        <div class="unit">
      	<label>材料名（中文）：</label>
        <input type="text" size="30" name="material_chinese_name" id="material_chinese_name" readonly="true" value="<?php echo $this->_tpl_vars['materials']['material_chinese_name']; ?>
"  />
        </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>材料名（英文）：</label>
        <input type="text" size="30" name="material_name" id="material_name" readonly="true" value="<?php echo $this->_tpl_vars['materials']['material_name']; ?>
"  />
        </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>颜色：</label>
        <input type="text" size="30" name="material_color" id="material_color" readonly="true" value="<?php echo $this->_tpl_vars['materials']['material_color']; ?>
"  />
        </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>尺寸：</label>
        <input type="text" size="30" name="size" id="size"  readonly="true" value="<?php echo $this->_tpl_vars['materials']['size']; ?>
"  />
        </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>供应商颜色：</label>
        <input type="text" size="30" name="id_aa" id="id_aa" value="<?php echo $this->_tpl_vars['materials'][$this->_tpl_vars['id_aa']]; ?>
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