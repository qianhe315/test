<?php /* Smarty version 2.6.22, created on 2023-06-27 10:41:26
         compiled from invoice/pdf_invoice.html */ ?>
<div class="pageContent">
<style>
.payment_type_div input,.payment_type_div label {
	cursor:pointer;
}
</style>
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="form_submit">
  <?php if ($this->_tpl_vars['address_status'] == 1): ?>
    <div class="pageFormContent" layoutH="58">
    	
      <div class="unit">
        <label style="font-size:14px; width:auto;">付款方式信息(多选)：</label>
        <div class="payment_type_div" style="float:left;">
        
        <?php if ($this->_tpl_vars['gongsi_style'] == 1): ?>
        	<?php if ($this->_tpl_vars['due'] < 1400): ?>
            	<input id="type1" name="payment_type" type="checkbox" value="1" style="float:left;" checked="checked" disabled="disabled" /><label for="type1" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px;font-size:14px; ">PayPal(小布涂涂)</label>
            <?php else: ?>
            	<input id="type1" name="payment_type" type="checkbox" value="1" style="float:left;" checked="checked" /><label for="type1" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px;font-size:14px; ">PayPal(小布涂涂)</label>
            <?php endif; ?>
        <?php elseif ($this->_tpl_vars['gongsi_style'] == 2): ?>
        	<?php if ($this->_tpl_vars['due'] < 1400): ?>
            	<input id="type1" name="payment_type" type="checkbox" value="1" style="float:left;" checked="checked" disabled="disabled" /><label for="type1" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px;font-size:14px; ">PayPal(涂涂记)</label>
            <?php else: ?>
            	<input id="type1" name="payment_type" type="checkbox" value="1" style="float:left;" checked="checked" /><label for="type1" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px;font-size:14px; ">PayPal(涂涂记)</label>
            <?php endif; ?>
        <?php endif; ?>
        
        <?php if ($this->_tpl_vars['one'] == '$'): ?>
        
            <?php if ($this->_tpl_vars['gongsi_style'] == 1): ?>
            	<?php if ($this->_tpl_vars['due'] >= 1400): ?>
                	<input id="type3" name="payment_type" type="checkbox" value="3" checked="checked" style="float:left;" disabled="disabled" /><label for="type3" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px; font-size:14px; ">美元-花旗 (小布涂涂)</label>
                <?php elseif ($this->_tpl_vars['due'] >= 500): ?>
                	<input id="type3" name="payment_type" type="checkbox" value="3" checked="checked" style="float:left;" /><label for="type3" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px; font-size:14px; ">美元-花旗 (小布涂涂)</label>
                <?php else: ?>
                	<input id="type3" name="payment_type" type="checkbox" value="3" style="float:left;" /><label for="type3" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px; font-size:14px; ">美元-花旗 (小布涂涂)</label>
                <?php endif; ?>
            <?php endif; ?>
            
            <?php if ($this->_tpl_vars['gongsi_style'] == 2): ?>
            	<?php if ($this->_tpl_vars['due'] >= 1400): ?>
                	<input id="type3" name="payment_type" type="checkbox" value="3" checked="checked" style="float:left;" disabled="disabled" /><label for="type3" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px; font-size:14px; ">美元-花旗 (涂涂记)</label>
                <?php else: ?>
                	<input id="type3" name="payment_type" type="checkbox" value="3" checked="checked" style="float:left;" /><label for="type3" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px; font-size:14px; ">美元-花旗 (涂涂记)</label>
                <?php endif; ?>
            <?php endif; ?>
            
            <input id="type2" name="payment_type" type="checkbox" value="2" style="float:left;" /><label for="type2" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px; font-size:14px; ">美元-招商 <?php if ($this->_tpl_vars['gongsi_style'] == 1): ?>(小布涂涂)<?php elseif ($this->_tpl_vars['gongsi_style'] == 2): ?>(涂涂记)<?php endif; ?></label>
            
        <?php elseif ($this->_tpl_vars['one'] == '€'): ?>
        
            <?php if ($this->_tpl_vars['gongsi_style'] == 1): ?>
                <?php if ($this->_tpl_vars['due'] >= 1400): ?>
                	<input id="type5" name="payment_type" type="checkbox" value="5" checked="checked" disabled="disabled" style="float:left;" /><label for="type5" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px; font-size:14px; ">欧元-摩根大通 (小布涂涂)</label>
                <?php elseif ($this->_tpl_vars['due'] >= 500): ?>
                	<input id="type5" name="payment_type" type="checkbox" value="5" checked="checked" style="float:left;" /><label for="type5" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px; font-size:14px; ">欧元-摩根大通 (小布涂涂)</label>
                <?php else: ?>
                	<input id="type5" name="payment_type" type="checkbox" value="5" style="float:left;" /><label for="type5" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px; font-size:14px; ">欧元-摩根大通 (小布涂涂)</label>
                <?php endif; ?>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['gongsi_style'] == 2): ?>
            	<?php if ($this->_tpl_vars['due'] >= 1400): ?>
                	<input id="type5" name="payment_type" type="checkbox" value="5" checked="checked" disabled="disabled" style="float:left;" /><label for="type5" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px; font-size:14px; ">欧元-摩根大通 (涂涂记)</label>
                <?php else: ?>
                	<input id="type5" name="payment_type" type="checkbox" value="5" checked="checked" style="float:left;" /><label for="type5" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px; font-size:14px; ">欧元-摩根大通 (涂涂记)</label>
                <?php endif; ?>
            <?php endif; ?>
            <input id="type4" name="payment_type" type="checkbox" value="4" style="float:left;" /><label for="type4" style="float:left; margin-right:15px; line-height:20px; width:auto; padding:0px; font-size:14px;">欧元-招商 <?php if ($this->_tpl_vars['gongsi_style'] == 1): ?>(小布涂涂)<?php elseif ($this->_tpl_vars['gongsi_style'] == 2): ?>(涂涂记)<?php endif; ?></label>
            
        <?php endif; ?>
               
        </div>
        <div class="divider">divider</div>  
        <div class="unit">
            <input type="hidden" id="invoice_id" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
            <font style="font-size:14px; width:auto; float:left; line-height:22px;">Customer PO:</font><input id="customer_po" type="text" name="customer_po" class="quoteK_r_nr_r_input" style="width:200px; float:left; margin-left:5px;">
      	</div>
      </div>
      <div class="divider">divider</div>      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
               <button type="button" id="submit">生成发票</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  <?php else: ?>
  <font style="float:left; width:96%; margin-left:2%; font-size:14px; line-height:26px;">无客户收货地址信息，请到【物流管理】【设置】添加客户收货地址后，再生成发票。</font>
  <?php endif; ?>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">
 $(document).ready(function(){
	 $("#submit").click(function (){
		 var ids= $("#invoice_id").val();
		 var customer_po_arr= $("#customer_po").val();
		 var customer_po = customer_po_arr.replace("-", "_");
		 var p = 'ids-'+ids+'.html';
		 var check_arr = '';
		  $("input[name='payment_type']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
		  
			  if(check_arr == ''){
				  check_arr += $(this).val();
			  }else{
				  check_arr += ','+$(this).val();
			  }
		  });
		 
		
		 window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/create_invoice_usa-checkboxall-'+check_arr+'-customer_po-'+customer_po+'-invoice_pdf_btn-1-'+p);
		//$("#form_submit").submit();
	});
	 
	 
});
</script> 
<!-- {/literal} -->