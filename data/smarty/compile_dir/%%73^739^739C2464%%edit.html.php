<?php /* Smarty version 2.6.22, created on 2014-08-04 16:46:29
         compiled from payment_registration/edit.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" id="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">
    <div class="pageFormContent" layoutH="58">

        <div class="unit">
      	<label>订单日期：</label>
        <input type="text" size="30" name="time" value="<?php echo $this->_tpl_vars['inovice_list']['time']; ?>
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
        <input type="text" size="30" name="exchangerate_name"  value="<?php echo $this->_tpl_vars['sale_detail_list']['exchangerate_name']; ?>
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
      	<label>已收金额：</label>
        <input type="text" size="30" name="paid_money"  id="paid_money" value="<?php echo $this->_tpl_vars['paid_money']; ?>
" class="required number" />
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
        <input type="text" size="30" name="balance" id="balance"  value="<?php echo $this->_tpl_vars['balance']; ?>
" class="number"/>
        <span id="balance_result" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
       <div class="unit">
       	<label>是否收款：</label>
        <?php if ($this->_tpl_vars['sale_detail_list']['paid_status'] == 1): ?>
        <label style="width:70px"><input type="radio" value="1" name="paid_status" id="paid_status01" checked="checked" />未收款</label>
        <label style="width:70px"><input type="radio" value="2" name="paid_status" id="paid_status02" />未完成</label>
        <label><input type="radio" value="3" name="paid_status" id="paid_status03" />已收款</label>
        <?php elseif ($this->_tpl_vars['sale_detail_list']['paid_status'] == 2): ?>
        <label style="width:70px"><input type="radio" value="1" name="paid_status" id="paid_status01" />未收款</label>
        <label style="width:70px"><input type="radio" value="2" name="paid_status" id="paid_status02" checked="checked" />未完成</label>
        <label><input type="radio" value="3" name="paid_status" id="paid_status03" />已收款</label>
        
        <?php elseif ($this->_tpl_vars['sale_detail_list']['paid_status'] == 3): ?>
        <label style="width:70px"><input type="radio" value="1" id="paid_status01" name="paid_status" />未收款</label>
        <label style="width:70px"><input type="radio" value="2" id="paid_status02" name="paid_status" />未完成</label>
        <label><input type="radio" value="3" name="paid_status" id="paid_status03" checked="checked" />已收款</label>
        
        <?php else: ?>
        <label style="width:70px"><input type="radio" value="1" name="paid_status" id="paid_status01" checked="checked" />未收款</label>
        <label style="width:70px"><input type="radio" value="2" name="paid_status" id="paid_status02" />未完成</label>
        <label><input type="radio" value="3" name="paid_status" id="paid_status03" />已收款</label>
        <?php endif; ?>
        <span id="paid_status_result" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>收款日期：</label>
        <input type="text" size="30" name="paid_time"  value="<?php echo $this->_tpl_vars['sale_detail_list']['paid_time']; ?>
"  class="date required" readonly="readonly"/>
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>收款方式：</label>
        <select class="combox" name="delivery_status" id="delivery_status"  class="required">
                <option value="">请选择</option>
                <?php $_from = $this->_tpl_vars['payment_methods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['tc']):
?>
                    <?php if ($this->_tpl_vars['sale_detail_list']['paid_type'] == $this->_tpl_vars['tc']['id']): ?>
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
      	<label>备注：</label>
        <textarea name="financial_note" cols="30" rows="4"><?php echo $this->_tpl_vars['sale_detail_list']['financial_note']; ?>
</textarea>
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
              <button type="submit" id="submit" >确认</button>
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
	$("#submit").click(function (){
		
		if($("#delivery_status").val()!=''){
			$("#delivery_status_result").css("display","none");
			if($("#paid_money").attr("value")!= ''){
				var a=$("#due").attr("value");
				var b= "-";
				if(a.indexOf(b)>=0){
					if(parseFloat($("#paid_money").attr("value")) >= parseFloat(($("#due").attr("value")).slice(2))){	
						if(g('paid_status03').checked == true){
							$("#paid_status_result").css("display","none");
							$("#pageForm").submit();
						}else{
							$("#paid_status_result").css("display","block");
							$("#paid_status_result").html("请选择已收款");
						}
					}else{		
						if(g('paid_status02').checked == true){
							$("#paid_status_result").css("display","none");
							$("#pageForm").submit();
						}else{
							$("#paid_status_result").css("display","block");
							$("#paid_status_result").html("请选择未完成");
						}
					}
				}
				else{
					if(parseFloat($("#paid_money").attr("value")) >= parseFloat(($("#due").attr("value")).slice(1))){	
						if(g('paid_status03').checked == true){
							$("#paid_status_result").css("display","none");
							$("#pageForm").submit();
						}else{
							$("#paid_status_result").css("display","block");
							$("#paid_status_result").html("请选择已收款");
						}
					}else{		
						if(g('paid_status02').checked == true){
							$("#paid_status_result").css("display","none");
							$("#pageForm").submit();
						}else{
							$("#paid_status_result").css("display","block");
							$("#paid_status_result").html("请选择未完成");
						}
					}
				}
			}else{
				if($("#poundage").attr("value")!= ''){
					$("#poundage_result").css("display","block");
					$("#poundage_result").html("请先填写已收款");
				}else{
					if(g('paid_status01').checked == true){
						$("#poundage_result").css("display","none");
						$("#pageForm").submit();
					}else{
						$("#paid_status_result").css("display","block");
						$("#paid_status_result").html("请选择未收款");
					}
				}
			}
		}else{
			$("#delivery_status_result").css("display","block");
			$("#delivery_status_result").html("请选择收款方式");
		}
		

	});
});

</script> 
<!-- {/literal} -->