<?php /* Smarty version 2.6.22, created on 2015-10-23 11:47:28
         compiled from tuikuan_detail/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      	<label>退款时间：</label>
        <input type="text" size="30" name="tui_time"  class="date textInput readonly valid" />
      </div>
      <div class="unit">
      	<label>付款时间：</label>
        <input type="text" size="30" name="fu_time"  class="date textInput readonly valid" />
      </div>
      <div class="unit">
      	<label>业务员：</label>
        <select class="combox" name="sale_name">
            <option value="">全部</option>
            <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
            <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['salesman']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
            <?php endforeach; endif; unset($_from); ?>
        </select>
      </div>
      <div class="unit">
      	<label>退款金额：</label>
        <input type="text" size="30" name="tui_price"  class="required" />
      </div>
      <div class="unit">
      	<label>事由：</label>
        <textarea name="remark" cols="28" rows=""></textarea>
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