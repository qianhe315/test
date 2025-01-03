<?php /* Smarty version 2.6.22, created on 2016-02-29 17:16:30
         compiled from cn_place/add.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['cn_place_edit']['id']; ?>
" >
      </div>
      <div class="unit">
      	<label>请输入名称：</label>
        <input type="text" size="30" name="name" id="name" value="<?php echo $this->_tpl_vars['cn_place_edit']['name']; ?>
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