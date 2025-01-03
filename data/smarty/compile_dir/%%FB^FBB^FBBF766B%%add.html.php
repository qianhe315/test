<?php /* Smarty version 2.6.22, created on 2015-11-26 15:52:12
         compiled from color_cn/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
     <input type="hidden" name="this_sources_id"  value="<?php echo $this->_tpl_vars['color_cn']['id']; ?>
">
      <div class="unit">
      	<label>颜色名称：</label>
        <input type="text" size="30" name="color_name" id="color_name" value="<?php echo $this->_tpl_vars['color_cn']['name']; ?>
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