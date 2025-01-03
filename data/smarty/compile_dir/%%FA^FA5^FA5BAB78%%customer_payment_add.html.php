<?php /* Smarty version 2.6.22, created on 2023-06-12 16:19:15
         compiled from payment_registration/customer_payment_add.html */ ?>

<div class="pageContent">
 <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="customer_payment_add">
    <div class="pageFormContent" layoutH="58">

        <div class="unit">
      	<label>订单日期：</label>
        <input type="text" size="30" name="time" value="<?php echo $this->_tpl_vars['inovice_list']['time']; ?>
" readonly="readonly"/>
        <input type="hidden" size="30" name="mid" value="<?php echo $this->_tpl_vars['id']; ?>
" readonly="readonly"/>
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>业务员：</label>
        <input type="text" size="30" name="customer_name" value="<?php echo $this->_tpl_vars['inovice_list']['saleman_name']; ?>
" readonly="readonly"/>
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>客户名：</label>
        <input type="text" size="30" name="customer_name" value="<?php echo $this->_tpl_vars['inovice_list']['customer_name']; ?>
" readonly="readonly"/>
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>发票编号：</label>
        <input type="text" size="30" name="invoice_number"  value="<?php echo $this->_tpl_vars['inovice_list']['invoice_number']; ?>
" readonly="readonly"/>
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>单位：</label>
        <input type="text" size="30" name="exchangerate_name"  value="<?php echo $this->_tpl_vars['unit']; ?>
" readonly="readonly"/>
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>运费：</label>
        <input type="text" size="30" name="shipping_money"  value="<?php echo $this->_tpl_vars['inovice_list']['freight']; ?>
" readonly="readonly"/>
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>应收金额：</label>
        <input type="text" size="30" name="due"  id="due" value="<?php echo $this->_tpl_vars['amount_payable']; ?>
" readonly="readonly"/>
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>收款金额：</label>
        <input type="text" size="30" name="paid_money"  id="paid_money" value="<?php echo $this->_tpl_vars['paid_money']; ?>
" class="required number" />
        <span id="paid_money_result" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
      
       <div class="unit">
      	<label>手续费：</label>
        <input type="text" size="30" name="poundage" id="poundage"  value="<?php echo $this->_tpl_vars['poundage']; ?>
" class="number"/>
        <span id="poundage_result" class="error" style="display:none;"></span>
      </div>
       
      <div class="divider">divider</div>
      <div class="unit">
      	<label>余额：</label>
        <input type="text" size="30" name="balance" id="balance"  value="0" class="number"/>
        <span id="balance_result" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
     
       <div class="unit">
      	<label>收款日期：</label>
        <input type="text" size="30" name="paid_time"  value="<?php echo $this->_tpl_vars['time']; ?>
" />
        <span id="paid_time_result" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>收款方式：</label>
        <select class="combox" name="delivery_status" id="delivery_status"  class="required">
                <option value="">请选择</option>
                <?php $_from = $this->_tpl_vars['payment_methods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['tc']):
?>
                    <?php if ($this->_tpl_vars['tc']['id'] == '17'): ?>
                        <option selected="selected" value="<?php echo $this->_tpl_vars['tc']['id']; ?>
"><?php echo $this->_tpl_vars['tc']['payment_methods_name']; ?>
</option>
                    <?php else: ?>
                        <option value="<?php echo $this->_tpl_vars['tc']['id']; ?>
"><?php echo $this->_tpl_vars['tc']['payment_methods_name']; ?>
</option>
                    <?php endif; ?>    
               <?php endforeach; endif; unset($_from); ?>
        </select>
        <span id="delivery_status_result" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>付款客户名：</label>
        <input type="text" size="30" name="paid_customer_name"  value=""  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>付款账号：</label>
        <input type="text" size="30" name="paid_account_number"  value=""  />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>备注：</label>
        <textarea name="financial_note" cols="30" rows="4"></textarea>
      </div>
      
      <div class="divider">divider</div>
      <div class="unit">
      	<label>收款账号：</label>
        <input type="text" size="30" name="receiver_email"  value=""  />
      </div>
      
      
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['inovice_list']['id']; ?>
" />
      <div class="divider">divider</div>
    </div>
</form>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit" id="submit_customer_payment" >确认</button>
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
  
</div>

<!-- {literal} --> 
<script type="text/javascript">
function g(o){return document.getElementById(o);}
$(document).ready(function()  
{
	$("#submit_customer_payment").click(function (){
		paid_money=$("#paid_money").val();
		poundage=$("#poundage").val();
		balance=$("#balance").val();
		delivery_status=$("#delivery_status").val();
		var c= /^\d+(?=\.{0,1}\d+$|$)/;
		var b=c.test(paid_money);
		var d=c.test(poundage);
		var g=balance.substr(1);
		var e=c.test(g);
		var m=c.test(balance);
		var f=balance.substr(0, 1);
		if(b==false || paid_money<0){
			$("#balance_result").css("display","none");
			$("#poundage_result").css("display","none");
			$("#delivery_status_result").css("display","none");
			$("#paid_money_result").css("display","block");
			$("#paid_money_result").html("收款金额必须为正数");
		}else if(d==false || paid_money<0){
			$("#paid_money_result").css("display","none");
			$("#balance_result").css("display","none");
			$("#delivery_status_result").css("display","none");
			$("#poundage_result").css("display","block");
			$("#poundage_result").html("手续费必须为正数");
		}else if(f!="-" && e!=true &&  m!=true){
			$("#paid_money_result").css("display","none");
			$("#poundage_result").css("display","none");
			$("#delivery_status_result").css("display","none");
			$("#balance_result").css("display","block");
			$("#balance_result").html("余额必须为数字");
		}else if(delivery_status==''){
			$("#paid_money_result").css("display","none");
			$("#poundage_result").css("display","none");
			$("#balance_result").css("display","none");
			$("#delivery_status_result").css("display","block");
			$("#delivery_status_result").html("请选择付款方式");
		}else{
			$("#customer_payment_add").submit();
		}
		

	});
});

</script> 
<!-- {/literal} -->