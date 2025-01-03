<?php /* Smarty version 2.6.22, created on 2022-11-28 13:10:20
         compiled from invoice/create_invoice_usa_review.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
</head>


<body>
	<div class="wrap">
    	<div class="QuoteK">
       	  <div class="quoteK_l">
       	    <div class="quoteK_l_logo"><img src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/small_logo.png" alt="cstown" />
       	    </div>
            <div class="quoteK_l_txt" style="margin-top:70px; margin-left:10px;font-size:15px;font-weight:bold; ">
            	<ul>
                	<li>CSTOWN USA.</li>
                    <li>4306 Helios Street</li>
                    <li>Las Vegas, NV 89135</li>
                    <li>(702) 567-0047</li>
                    <li>www.cstown.com</li>
                </ul>
            </div>
       	  </div>
          <div class="quoteK_l">
       	   
            <div class="quoteK_l_txt" style="margin-top:100px; margin-left:-35px;font-size:15px;font-weight:bold; ">
            	<ul>
                	<li>CSTOWN INC.</li>
                    <li>Floor 4, No. 13 Renxian Street,</li>
                    <li>High Tech Zone, Dalian, China</li>
                    <li>China Phone: 86-411-39769161</li>
                </ul>
            </div>
       	  </div>
       	    <form method="post" id="quote_form_review" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" >
            <input type="hidden" name="invoice_id" value="<?php echo $this->_tpl_vars['id']; ?>
" />      	 
       	    <div style="font-size:32px;font-weight:bold; margin-left:120px;">COMMERCIAL INVOICE</div>
       	   <div style="margin-top:70px;">
            <div class="quoteK_r_nr" >
       	      <div class="quoteK_r_nr_l" >Date:</div>
       	      <div class="quoteK_r_nr_r"><?php echo $this->_tpl_vars['time']; ?>
</div>
       	    </div>
            <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">Sales:</div>
       	      <div class="quoteK_r_nr_r"><?php echo $this->_tpl_vars['english_name']; ?>
</div>
       	    </div>
            <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">Email:</div>
       	      <div class="quoteK_r_nr_r">
              	<?php echo $this->_tpl_vars['email']; ?>
</div>
       	    </div>
 </div>
       	  <div class="quoteK_tiao01" style="margin-left:-30px;">
          <ul>
           <div>Company:&nbsp;&nbsp;<?php echo $this->_tpl_vars['company']; ?>
</div>
             <div>Contact:&nbsp;&nbsp;<?php echo $this->_tpl_vars['customer_name']; ?>
;</div>
              <div>Phone:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['telephone']; ?>
</div>
               <div>Address:&nbsp;&nbsp;<?php echo $this->_tpl_vars['address']; ?>
</div>
                 <div>Email:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['email1']; ?>
</div>
                   <div>Fax:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['fax']; ?>
</div>
                </ul>
   </div>
          
          <div class="sIE_l_03">
                	<table cellspacing="0" class="sIE_l_03Tab">
                    	<tr>
                            
                            <th>Invoice No</th>
                            <th>OrderQuantity.</th>
                            <th>Sub-Total</th>
                            <th>Freight</th>
                            <th>Total_Amount</th>
                            <th>Deposit</th>
                             <th>Amount_Due</th>
                        </tr>
                      <?php $_from = $this->_tpl_vars['quotation_sheet_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                            <tr>
                   
                        
                     
                                <td><?php echo $this->_tpl_vars['dis']['invoice_number']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['count_order']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['subtotal']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['freight']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['total_amount']; ?>
</td>
                                 <td><?php echo $this->_tpl_vars['dis']['deposit']; ?>
</td> 
                                <td><?php echo $this->_tpl_vars['dis']['due']; ?>
</td> 
                            </tr>
						<?php endforeach; endif; unset($_from); ?>
                    </table>
                    
                       <div class="quoteK_div">
                        <div class="quoteK_r" style="width:300px;">
                        
                            <div class="quoteK_r_nr_l" style="width:130px; margin-right:-20px;">Due:</div>
                            <div class="quoteK_r_nr_r">
                              <input type="text" name="result_price" readonly="readonly" value="<?php echo $this->_tpl_vars['total_price']; ?>
" class="quoteK_r_nr_r_input" />
                            </div>
                          </div>
                         
                          
                        
                       
                          
                         </div>
            </div>
            
          
                      <div class="quoteK_bot02" style="margin-top:10px;"><font style="float:left; width:130px;">Shipping:</font><font style="float:left;">UPS/DHL/FEDEX </font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">Payment Terms:</font> <font style="float:left;">Full payment before production</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">PayPal:</font> <font style="float:left;">payee@cstown.com</font><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notice:Please provide the Inboice No.when you make the payment.</div>
                      <!--<div class="quoteK_bot02"><font style="float:left; width:130px;">Credit Card:</font> <font style="float:left;">Call (702) 567-0047 to process a credit card payment</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">Check:</font> <font style="float:left;">Mailing address: 4306 Helios Street Las Vegas, NV 89135.</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">Wire Transfer:</font> <font style="float:left;">Please contact rhinestone@cstown.com for TT payment.</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">E-mail Inquiries:</font> <font style="float:left;">jerry.cstown@gmail.com</font></div>-->
                      
                      <div class="quoteK_bot03">
                      DELIVERY INFORMATION: NORMAL transit and delivery time from China to anywhere in the U.S. is 3 business days including the day of deposit. That is usual or normal. We cannot control what happens after the shipment leaves our factory. Thus, whenever possible, adjust any deadlines you have to meet.
                      </div>
                      
			<input type="button" class="quoteK_bottom01_button" onClick="export_pdf()" value="导出PDF" />
            <input type="button"  class="quoteK_bottom01_button" value="返回" />                         
             	</form>  
          </div>

<script type="text/javascript">
function export_pdf(){
	$("#quote_form_review").submit();
}
</script>
</body>
</html>