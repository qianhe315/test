<?php /* Smarty version 2.6.22, created on 2013-10-24 10:19:41
         compiled from invoice/invoice_zh.html */ ?>
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
            <div class="quoteK_l_txt">
            	<ul>
                	<li>CSTOWN INC.</li>
                    <li>15th Floor, Sunshine Digital Building,</li>
                    <li>596 Huangpu Rd, High tech Zone, Dalian, China</li>
                    <li>China Phone: 86-411-39769161</li>
                    <li>www.cstown.com</li>
                </ul>
            </div>
       	  </div>
       	  <div class="quoteK_r">
       	    <div class="quoteK_r_title">COMMERCIAL INVOICE</div>
       	    <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">Invoice Number:</div>
       	      <div class="quoteK_r_nr_r" style="height:52px;"><?php echo $this->_tpl_vars['invoice_number']; ?>
</div>
       	    </div>
            <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">Date:</div>
       	      <div class="quoteK_r_nr_r"><?php echo $this->_tpl_vars['time']; ?>
</div>
       	    </div>
            <form method="post" id="quote_form1" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" >
            <input type="hidden" name="invoice_id" value="<?php echo $this->_tpl_vars['ids']; ?>
" />
            <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">Customer PO:</div>
       	      <div class="quoteK_r_nr_r" style="height:52px;"><input type="text" name="customer_po" class="quoteK_r_nr_r_input" style="margin-top:10px;" /></div>
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
                            <th>OrderNo.</th>
                            <th>Item</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Steup Fee</th>
                            <th>Extension</th>
                        </tr>
                        
                      <?php $_from = $this->_tpl_vars['quotation_sheet_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                            <tr>
                                <td><?php echo $this->_tpl_vars['dis']['order']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['design_pic_name']; ?>
</td>
                                <td>
                                    <select name="size[]">
                                        <option value="<?php echo $this->_tpl_vars['dis']['cm_w1']; ?>
*<?php echo $this->_tpl_vars['dis']['cm_h1']; ?>
cm"><?php echo $this->_tpl_vars['dis']['cm_w1']; ?>
*<?php echo $this->_tpl_vars['dis']['cm_h1']; ?>
cm</option>
                                        <option value="<?php echo $this->_tpl_vars['dis']['inch_w1']; ?>
*<?php echo $this->_tpl_vars['dis']['inch_h1']; ?>
inch"><?php echo $this->_tpl_vars['dis']['inch_w1']; ?>
*<?php echo $this->_tpl_vars['dis']['inch_h1']; ?>
inch</option>
                                    </select>
                                </td>
                                <td><?php echo $this->_tpl_vars['dis']['color']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['pcs']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['unite_quote']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['edition_price']; ?>
</td>
                                <td><input type="text" value="<?php echo $this->_tpl_vars['dis']['final_quote']; ?>
" name="final_quote[]" style="width:65px;" class="quoteK_r_nr_r_input bbb" /></td>
                                <input type="hidden" value="<?php echo $this->_tpl_vars['dis']['final_quote']; ?>
" id="final_quote_h<?php echo $this->_tpl_vars['dis']['id']; ?>
" >
                            </tr>
						<?php endforeach; endif; unset($_from); ?>

                    </table>
                    
                      <div class="quoteK_div">
                        <div class="quoteK_r" style="width:300px;">
                          <div class="quoteK_r_nr" style="width:300px;">
                            <div class="quoteK_r_nr_l" style="width:130px;">Sub-Total:</div>
                            <div class="quoteK_r_nr_r">
                              <input type="text" name="result_price" value="<?php echo $this->_tpl_vars['result_price']; ?>
" class="quoteK_r_nr_r_input" />
                            </div>
                          </div>
                          <div class="quoteK_r_nr" style="width:300px;">
                            <div class="quoteK_r_nr_l" style="width:130px;">Freight:</div>
                            <div class="quoteK_r_nr_r">
                              <input type="text" name="freight" value="<?php echo $this->_tpl_vars['freight']; ?>
" class="quoteK_r_nr_r_input" />
                            </div>
                          </div>
                          
                          <div class="quoteK_r_nr" style="width:300px;">
                            <div class="quoteK_r_nr_l" style="width:130px;">Total Amount:</div>
                            <div class="quoteK_r_nr_r">
                              <input type="text" name="total_amount" value="<?php echo $this->_tpl_vars['total_amount']; ?>
" class="quoteK_r_nr_r_input" />
                            </div>
                          </div>
                          
                          <div class="quoteK_r_nr" style="width:300px;">
                            <div class="quoteK_r_nr_l" style="width:130px;">Deposit:</div>
                            <div class="quoteK_r_nr_r">
                              <input type="text" name="rebate" value="<?php echo $this->_tpl_vars['rebate']; ?>
" class="quoteK_r_nr_r_input" />
                            </div>
                          </div>
                          
                          <div class="quoteK_r_nr" style="width:300px;">
                            <div class="quoteK_r_nr_l" style="width:130px;">Amount Due:</div>
                            <div class="quoteK_r_nr_r">
                              <input type="text" name="due" value="<?php echo $this->_tpl_vars['due']; ?>
" class="quoteK_r_nr_r_input" />
                            </div>
                          </div>
                          
                          
                          
                        </div>
            </div>
            
            	<div style="float:left; width:573px;">
                    <ul style="margin:0px; padding:0px; float:left; list-style:none; width:573px;">
                        <?php $_from = $this->_tpl_vars['quotation_sheet_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                            <li style="float:left; margin-top:10px; margin-left:15px;"><img src="<?php echo $this->_tpl_vars['dis']['image']; ?>
" style="width:80px; height:80px;"/></li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
           		</div>
            
                      <div class="quoteK_bot02" style="margin-top:10px;"><font style="float:left; width:110px;">Shipping:</font><font style="float:left;">UPS/DHL/FEDEX DUTIES AND TAXES ARE UNDERSTOOD TO BE PAID BY CUSTOMER.</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:110px;">Payment Terms:</font> <font style="float:left;">At the sight of the Bill / Full payment is requested.</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:110px;">Credit Card:</font> <font style="float:left;">Call (702) 567-0047 to process a credit card payment</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:110px;">Check:</font> <font style="float:left;">Mailing address: 2880 Bicentennial #100-232, Las Vegas, NV 89044.</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:110px;">E-mail Inquiries:</font> <font style="float:left;">jerry.cstown@gmail.com</font></div>
                      
                      <div class="quoteK_bot02" style="margin-top:20px;">CSTOWN USA Office</div>
                      <div class="quoteK_bot02">2880 Bicentennial #100-232, Las Vegas, NV 89044</div>
                      <div class="quoteK_bot02">(702) 567-0047</div>
                      <div class="quoteK_bot02">jerry.cstown@gmail.com</div>
                      
                      <div class="quoteK_bot03">
                      DELIVERY INFORMATION: NORMAL transit and delivery time from China to anywhere in the U.S. is 3 business days including the day of deposit. That is usual or normal. We cannot control what happens after the shipment leaves our factory. Thus, whenever possible, adjust any deadlines you have to meet.
                      </div>
                      
			<input type="button" class="quoteK_bottom01_button" onClick="export_pdf()" value="导出PDF" />
            <input type="button"  class="quoteK_bottom01_button" value="返回" />                         
            </form>            
                        
                                	  
          </div>
          
          
        </div>
</div>
<script type="text/javascript">
function export_pdf(){
	$("#quote_form1").submit();
}
</script>
</body>
</html>