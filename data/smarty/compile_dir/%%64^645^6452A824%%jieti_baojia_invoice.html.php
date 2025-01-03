<?php /* Smarty version 2.6.22, created on 2022-03-01 17:18:49
         compiled from create_quotation_invoice/jieti_baojia_invoice.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>报价单</title>
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
            <div class="quoteK_l_txt">
            	<ul>
                	<li>CSTOWN USA.</li>
                    <li>4306 Helios Street </li>
                    <li>Las Vegas, NV 89135</li>
                    <li>(702) 567-0047</li>
                    <li>www.cstown.com</li>
                </ul>
            </div>
       	  </div>
          <div class="quoteK_l">
       	    <div class="quoteK_l_logo">
       	    </div>
            <div class="quoteK_l_txt">
            	<ul>
                	<li>CSTOWN INC.</li>
                    <li>15th Floor, Sunshine Digital Building,</li>
                    <li>596 Huangpu Rd, High tech Zone, Dalian, China</li>
                    <li>China Phone: 86-411-39769161</li>
                </ul>
            </div>
       	  </div>
                    <form method="post" id="jietibaojia_pdf" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" >
<div class="quoteK_r">
       	    <div class="quoteK_r_title">COMMERCIAL INVOICE</div>
       	    <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">Invoice Number:</div>
       	      <div class="quoteK_r_nr_r"><input type="text" name="invoice_number" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" /><input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" /></div>
       	    </div>
            <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">Date:</div>
       	      <div class="quoteK_r_nr_r"><?php echo $this->_tpl_vars['time']; ?>
</div>
       	    </div>
            <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">Sales:</div>
       	      <div class="quoteK_r_nr_r"><?php echo $this->_tpl_vars['saleman_name']; ?>
</div>
       	    </div>
            <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">Email:</div>
       	      <div class="quoteK_r_nr_r">
              	<?php echo $this->_tpl_vars['email']; ?>
</div>
       	    </div>
       	  </div>
<div class="quoteK_tiao01">
          <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:296px; margin-right:0px;"><font style="float:left;">Buyer</font></div>
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:296px; margin-right:0px;">&nbsp;</div>
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:296px; margin-right:0px;"><font style="float:left;">Company:<?php echo $this->_tpl_vars['company']; ?>
</font></div>
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:296px; margin-right:0px;">&nbsp;</div>
          	<div class="quoteK_tiao01_1" style="margin-bottom:5px; width:296px; margin-right:0px;"><font style="width:100px; float:left;">Contact:</font><font style="float:left;"><?php echo $this->_tpl_vars['customer_name']; ?>
</font></div>
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:296px; margin-right:0px;"><font style="width:100px; float:left;">Email:</font><font style="float:left;"><?php echo $this->_tpl_vars['email1']; ?>
</font></div>
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:296px; margin-right:0px;"><font style="width:100px; float:left;">Phone:</font><font style="float:left;"><?php echo $this->_tpl_vars['telephone']; ?>
</font></div>
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:296px; margin-right:0px;"><font style="width:100px; float:left;">Fax:</font><font style="float:left;"><?php echo $this->_tpl_vars['fax']; ?>
</font></div>
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:580px; margin-right:0px;"><font style="width:100px; float:left;">Address:</font><font style="float:left;"><?php echo $this->_tpl_vars['address']; ?>
</font></div>
            
          </div>

          <div class="sIE_l_03">
                	<table cellspacing="0" class="sIE_l_03Tab">
                    	<tr>
                           
                           
                            <th>Artwork</th>
                            <th>Size</th>
                          
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Setup Fee</th>
                            <th>Extension</th>
                            <th>Freight</th>
                            <th>Total Amount</th>
                        </tr>
                        <?php $_from = $this->_tpl_vars['quotation_sheet_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                        <tr>
           
                         <td> <?php echo $this->_tpl_vars['dis']['name']; ?>
</td>
                         <td>
                        
                            <select name="size[]">
                                <option value="<?php echo $this->_tpl_vars['dis']['inch_w1']; ?>
*<?php echo $this->_tpl_vars['dis']['inch_h1']; ?>
inch"><?php echo $this->_tpl_vars['dis']['inch_w1']; ?>
*<?php echo $this->_tpl_vars['dis']['inch_h1']; ?>
inch</option>
                                <option value="<?php echo $this->_tpl_vars['dis']['cm_w1']; ?>
*<?php echo $this->_tpl_vars['dis']['cm_h1']; ?>
cm"><?php echo $this->_tpl_vars['dis']['cm_w1']; ?>
*<?php echo $this->_tpl_vars['dis']['cm_h1']; ?>
cm</option>
                            </select>
                         </td>
                        <td> <?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                        <td> <?php echo $this->_tpl_vars['dis']['price']; ?>
</td>
                        <td> <?php echo $this->_tpl_vars['dis']['veision']; ?>
</td>
                         <td> <?php echo $this->_tpl_vars['dis']['extension']; ?>
</td>
                          <td> <?php echo $this->_tpl_vars['dis']['yunfei']; ?>
</td>
                          <td> <?php echo $this->_tpl_vars['dis']['total_prices']; ?>
</td>
            
          </tr>
				<?php endforeach; endif; unset($_from); ?>
                    </table>
            </div>
          
            	<div style="float:left; width:1000px;">
                    <ul style="margin:0px; padding:0px; float:left; list-style:none; width:1000px;">
                     
                       
                            <li style="float:left; margin-top:10px; margin-left:15px;"><img src="<?php echo $this->_tpl_vars['image']; ?>
" style="width:120px; height:120px;"/></li>
                      
                        
                    </ul>
           		</div>
        
                      <div class="quoteK_bot02" style="margin-top:10px;"><font style="float:left; width:130px;">Shipping:</font><font style="float:left;">UPS/DHL/FEDEX</font></div>
                      <div class="quoteK_bot02" style="margin-top:10px;"><font style="float:left; width:130px;">Government Fees:</font><font style="float:left;">It is understood that any fee (including a Duty,Tariff, or Inspection fee) imposed by a governmental agency is to be paid by the customer.</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">Payment Terms:</font> <font style="float:left;">At the sight of the Bill / Full payment is requested.</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">PayPal:</font> <font style="float:left;">payee@cstown.com</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">Credit Card:</font> <font style="float:left;">Call (702) 567-0047 to process a credit card payment</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">Check:</font> <font style="float:left;">Mailing address: 4306 Helios Street Las Vegas, NV 89135.</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">Wire Transfer:</font> <font style="float:left;">Please contact rhinestone@cstown.com for TT payment.</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">E-mail Inquiries:</font> <font style="float:left;">jerry.cstown@gmail.com</font></div>
                      
                      <div class="quoteK_bot03">
                      DELIVERY INFORMATION: NORMAL transit and delivery time from China to anywhere in the U.S. is 3 business days including the day of deposit. That is usual or normal. We cannot control what happens after the shipment leaves our factory. Thus, whenever possible, adjust any deadlines you have to meet.
                      </div>
                      
			<input type="button" class="quoteK_bottom01_button" onClick="export_pdf_1()" value="导出PDF" />
            <input type="button"  class="quoteK_bottom01_button" value="返回" /> 
              <input type="hidden" value="<?php echo $this->_tpl_vars['veision_s']; ?>
" id="veision_s" name="veision_s" >
            <input type="hidden"  value="<?php echo $this->_tpl_vars['quote_coefficient_s']; ?>
" id="quote_coefficient_s" name="quote_coefficient_s" >             <input type="hidden" value="<?php echo $this->_tpl_vars['number_s']; ?>
" id="number_s" name="number_s" >
            <input type="hidden" value="<?php echo $this->_tpl_vars['price_s']; ?>
" id="price_s" name="price_s"> 
            <input type="hidden"  value="<?php echo $this->_tpl_vars['quote_coefficient_s']; ?>
" id="quote_coefficient_s" name="quote_coefficient_s" >
            <input type="hidden" value="<?php echo $this->_tpl_vars['yunfei_s']; ?>
" id="yunfei_s" name="yunfei_s"  >           
           <input type="hidden" value="<?php echo $this->_tpl_vars['total_prices_s']; ?>
" id="total_prices_s" name="total_prices_s" >            
                        
            </form>                    	  
          </div>
          
          
        </div>
</div>
<script type="text/javascript">	
function export_pdf_1(){
	
	    $("#jietibaojia_pdf").submit();	
	
}
</script>
</body>
</html>