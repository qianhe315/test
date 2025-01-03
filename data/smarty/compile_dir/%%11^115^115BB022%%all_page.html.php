<?php /* Smarty version 2.6.22, created on 2015-11-10 13:14:08
         compiled from user_office_area_set/all_page.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

     <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['get_info']['id']; ?>
" />
        <div class="unit">
      	<label>办公区域：</label>
        <input type="text" size="50" name="office_name" value="<?php echo $this->_tpl_vars['get_info']['office_name']; ?>
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