<?php /* Smarty version 2.6.22, created on 2024-10-23 08:42:08
         compiled from lhpl_category/add.html */ ?>
<div class="pageContent">
  <form method="post" id="lhpl_category" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <input type="hidden" id="category_id" name="category_id"  value="<?php echo $this->_tpl_vars['lhpl_category']['category_id']; ?>
">
      <div class="unit">
        <label>中文名：</label>
        <input type="text" size="30" name="cn_name" class="required" value="<?php echo $this->_tpl_vars['lhpl_category']['cn_name']; ?>
"/>
      </div>
      <div class="unit" style="margin-top:5px;">
        <label>英文名：</label>
        <input type="text" size="30" name="en_name" class="required" value="<?php echo $this->_tpl_vars['lhpl_category']['en_name']; ?>
"/>
      </div>
      <div class="unit" style="margin-top:5px;">
        <label>业务需求：</label>
        <select id="demand_module_id" class="combox required" name="demand_module_id" >
          <option value="">请选择</option>
          <?php $_from = $this->_tpl_vars['lhpl_module_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lm']):
?> <option value="<?php echo $this->_tpl_vars['lm']['module_id']; ?>
" <?php if ($this->_tpl_vars['lhpl_category']['demand_module_id'] == $this->_tpl_vars['lm']['module_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['lm']['cn_name']; ?>

          </option>
          <?php endforeach; endif; unset($_from); ?>
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
<script>
function delSure(){
	var r = confirm("确认删除吗？");
	if(r==true){
		return true;
	}
	else{
		return false;
	}
}

</script>