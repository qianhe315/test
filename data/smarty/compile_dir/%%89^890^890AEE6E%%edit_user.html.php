<?php /* Smarty version 2.6.22, created on 2014-05-12 15:51:08
         compiled from user/edit_user.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

     <input type="hidden" name="uid" value="<?php echo $this->_tpl_vars['usergroup_info']['user_id']; ?>
" />
        <div class="unit">
      	<label>用户名：</label>
        <input type="text" size="50" name="user_name" value="<?php echo $this->_tpl_vars['usergroup_info']['user_name']; ?>
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
        <li>
         <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" class="close" >取消</button>
            </div>
          </div> </li>
      </ul>
    </div>
  </form>
</div>