<?php /* Smarty version 2.6.22, created on 2013-09-06 13:12:12
         compiled from quotecategory/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
     <input type="hidden" name="this_quotecategory_id"  value="<?php echo $this->_tpl_vars['quotecategory']['id']; ?>
">
      <div class="unit">
      	<label>询盘分类名称：</label>
        <input type="text" size="30" name="quotecategory_name" id="quotecategory_name" value="<?php echo $this->_tpl_vars['quotecategory']['quotecategory_name']; ?>
" class="required" />
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