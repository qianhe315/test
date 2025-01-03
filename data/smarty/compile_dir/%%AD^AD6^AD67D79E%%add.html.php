<?php /* Smarty version 2.6.22, created on 2013-05-29 10:19:53
         compiled from sales_activity_management/add.html */ ?>

<div class="pageContent">
  <form method="post" id="quote_form" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
    
      <div class="unit">
      	<label>日期：</label>
        <input type="text" name="quote_time" id="quote_time" value="" class="date required" readonly />
        
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>业务员：</label>
        <input type="text" size="25" name="customer_name" id="customer_name" value=""/>
       <!-- <select id="customer_code" name="customer_code" class="combox required">
        <option value="">请选择</option>
        </select>-->
      </div>
       <div class="divider">divider</div>
       <div class="unit">
      	<label>客户代码：</label>
        <input type="text" size="25" name="customer_name" id="customer_name" value="" class="required"  />
        <span id="customer_name_result" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>客户名称：</label>
        <input type="text" size="25" name="customer_name" id="customer_name" value="" class="required"  />
        <span id="customer_name_result" class="error" style="display:none;"></span>
      </div>
     
      <div class="divider">divider</div>
<div class="unit">
      	<label>公司：</label>
        <input type="text" size="25" name="customer_name" id="customer_name" value="" class="required"  />
        <span id="customer_name_result" class="error" style="display:none;"></span>
      </div>
     
      <div class="divider">divider</div>
      <div class="unit">
      	<label>邮件数量：</label>
        <input type="text" size="25" name="email" id="email" value=""  class="required email" />
        <span id="email_result" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
      
       <div class="unit">
      	<label>电话数量：</label>
        <input type="text" size="25" name="company" id="company" value="" class="required"  />
        <span id="company_result" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit" >确认</button>
            </div>
          </div>
        </li>
        <li> <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit" >取消</button>
            </div>
          </div> </li>
      </ul>
    </div>
  </form>
</div>
