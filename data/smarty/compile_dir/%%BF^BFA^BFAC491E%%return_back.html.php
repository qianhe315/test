<?php /* Smarty version 2.6.22, created on 2014-07-05 10:19:34
         compiled from sale_detail/return_back.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="return_back_submit">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>发票号：</label>
        <?php echo $this->_tpl_vars['invoice_number']; ?>

        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
      </div>
      <div class="divider">divider</div>  
      <div id="error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
       <div class="unit">
        <label>客户代码：</label>
        <?php echo $this->_tpl_vars['customer_code']; ?>

      </div>
      <div class="divider">divider</div> 
      <div id="error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
       <div class="unit">
        <label>总价：</label>
        <?php echo $this->_tpl_vars['amount_payable']; ?>

      </div>
      <div class="divider">divider</div>
      <div id="error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
       <div class="unit">
        <label>应付金额：</label>
        <?php echo $this->_tpl_vars['due']; ?>

      </div>
      <input type="hidden" name="export_status" id="export_status" value="<?php echo $this->_tpl_vars['export_status']; ?>
" />
      <input type="hidden" name="paid_status" id="paid_status" value="<?php echo $this->_tpl_vars['paid_status']; ?>
" />
      <input type="hidden" name="delivery_completely" id="delivery_completely" value="<?php echo $this->_tpl_vars['delivery_completely']; ?>
" />
      <input type="hidden" name="saleman_name" id="saleman_name" value="<?php echo $this->_tpl_vars['saleman_name']; ?>
" />
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
      <div class="divider">divider</div> 
      
      <div id="error_return" style="color:#F00;"></div>
                       
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
               <button type="button" id="submit">确定</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>
<script type="text/javascript">
 $(document).ready(function(){
	 $("#submit").click(function (){
		var export_status = $("#export_status").val();
        var paid_status = $("#paid_status").val();
		var delivery_completely = $("#delivery_completely").val();
		var saleman_name = $("#saleman_name").val();

        if(export_status=='2'){
		  //$('#error').css("display","block");
		  $("#error_return").html("销售明细下订单有已做货!");	
		}
		else if(paid_status!='1'){
		  $("#error_return").html("必须未付款才可以返回！");	
		}
		else if(delivery_completely!='1'){
		  $("#error_return").html("必须未发货才可以返回！");	
		}
		else if(saleman_name!='1'){
		  $("#error_return").html("必须为本人信息,请重试！");	
		}
		else{
			$("#return_back_submit").submit();
		}
	});
	 
	 
});
</script> 