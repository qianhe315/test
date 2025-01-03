<?php /* Smarty version 2.6.22, created on 2015-03-31 09:50:32
         compiled from customer_order_information/tongbu_add.html */ ?>

<div class="pageContent">
  <form method="post" id="submit_order_number" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
       <div class="pageFormContent" layoutH="58">
     <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['discount']['id']; ?>
" />
     <div class="unit">
      	<label style="width:70px;">订单号：</label>
         <textarea name="shuju" id="order_number" style="width:350px; height:150px; float:left;" class="required"></textarea>
      </div>
     
      <div id="error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      
    </div>
     
 <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit" >确定</button>
            </div>
          </div>
        </li>
        <li> 
        <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" class="close" >取消</button>
            </div>
          </div>
        </li>
      </ul>
</div>
</form>