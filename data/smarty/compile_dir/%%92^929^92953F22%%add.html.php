<?php /* Smarty version 2.6.22, created on 2015-04-21 11:38:04
         compiled from salary_record/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['salary']['id']; ?>
" >
        <label>姓名：</label>
        <select class="combox" name="name_id" id="nameNew_id"  class="required" >
            <?php $_from = $this->_tpl_vars['employee']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ta']):
?>
            	<option value="<?php echo $this->_tpl_vars['ta']['id']; ?>
" <?php if ($this->_tpl_vars['salary']['name_id'] == $this->_tpl_vars['ta']['id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['ta']['name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
        </select>
        <input type="hidden" size="30" name="name" id="Newname" value="<?php echo $this->_tpl_vars['salary']['name']; ?>
"  class="required" />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>时间：</label>
        <input type="text" size="30" name="time" id="time" value="<?php echo $this->_tpl_vars['salary']['time']; ?>
"  class="date required" readonly/>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>金额：</label>
        <input type="text" size="30" name="money" id="money" value="<?php echo $this->_tpl_vars['salary']['money']; ?>
"  class="required"/>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>事由：</label>
        <textarea type="text" size="30" name="note" id="note"class="required"><?php echo $this->_tpl_vars['salary']['note']; ?>
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
  <input type="hidden" name="root" id="root" value="<?php echo $this->_tpl_vars['__ROOT__']; ?>
" >
  
</div>

<!-- <?php echo ' --> 
<script type="text/javascript">
$(document).ready(function(){
	$("#Newname").val($("#nameNew_id").find("option:selected").text());		
	$(\'#nameNew_id\').change(function(){
		$("#Newname").val($("#nameNew_id").find("option:selected").text());		
	});
});

</script> 
<!-- '; ?>
 -->