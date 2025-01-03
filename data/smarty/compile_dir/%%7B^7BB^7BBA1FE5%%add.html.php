<?php /* Smarty version 2.6.22, created on 2016-02-23 17:01:25
         compiled from cn_outbound_type/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
     <input type="hidden" name="this_sources_id"  value="<?php echo $this->_tpl_vars['cn_outbound_type']['id']; ?>
">
      <div class="unit">
      	<label>名称：</label>
        <input type="text" size="30" name="name" id="name" value="<?php echo $this->_tpl_vars['cn_outbound_type']['name']; ?>
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