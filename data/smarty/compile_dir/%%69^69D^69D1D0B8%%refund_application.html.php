<?php /* Smarty version 2.6.22, created on 2015-01-06 11:07:38
         compiled from sale_detail/refund_application.html */ ?>
<div class="pageContent">
  <form method="post" id="quote_form" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
  	<input type="hidden" size="25" name="saleman_name" value="<?php echo $this->_tpl_vars['sale_detail']['saleman_name']; ?>
" id="saleman_name" readonly/>
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      	<label>申请日期：</label>
        <input type="text" size="25" name="customer_name" value="<?php echo $this->_tpl_vars['sale_detail']['time']; ?>
" id="customer_name" readonly/>
       <!-- <span id="customer_name_result" class="error" style="display:none;"></span>-->
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>客户代码：</label>
        <input type="text" size="25" name="email" value="<?php echo $this->_tpl_vars['sale_detail']['customer_code']; ?>
" id="email" readonly/>
        <!--<span id="email_result" class="error" style="display:none;"></span>-->
      </div>
      <div class="divider">divider</div>
      
       <div class="unit">
      	<label>客户名：</label>
        <input type="text" size="25" name="company" value="<?php echo $this->_tpl_vars['sale_detail']['customer_name']; ?>
" id="company" readonly/>
        <!--<span id="company_result" class="error" style="display:none;"></span>-->
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>发票号：</label>
        <input type="text" size="25" name="company" value="<?php echo $this->_tpl_vars['sale_detail']['invoice_number']; ?>
" id="company" readonly/>
        <!--<span id="company_result" class="error" style="display:none;"></span>-->
      </div>
       
      <div class="divider">divider</div>
        <div class="unit">
      	<label>已付金额：</label>
        <input type="text" size="25" name="company" value="<?php echo $this->_tpl_vars['sale_detail']['paid_money']; ?>
" id="company" readonly/>
        <!--<span id="company_result" class="error" style="display:none;"></span>-->
      </div>
       
      <div class="divider">divider</div>
        <div class="unit">
      	<label>退款金额：</label>
        <input type="text" size="25" class="number" name="refund_price" value="<?php echo $this->_tpl_vars['sale_detail']['refund_price']; ?>
" id="company"/>
        <span id="refund_price_result" class="error" style="display:none;"></span>
      </div>
       
      <div class="divider">divider</div>
       <div class="unit">
      	<label>备注：</label>
       <textarea name="content" id="remark" cols="50" rows="4"><?php echo $this->_tpl_vars['sale_detail']['refund_remark']; ?>
</textarea>
      </div>
       <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['sale_detail']['id']; ?>
" /> 
      <div class="divider">divider</div>
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit" >确定</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>

<script type="text/javascript">

$("#submit").click(function (){
		if($("#company").val() == '' || $("#remark").val() == ''){
			$("#refund_price_result").css("display","block");
			$("#refund_price_result").html("退款金额与备注不为空");
		}else{
			$("#submit").submit();
		}
	});

</script>