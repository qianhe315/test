<?php /* Smarty version 2.6.22, created on 2016-01-22 16:53:47
         compiled from create_quotation_invoice/create_invoice_usa_Tshirt.html */ ?>
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
                    <li>2880 Bicentennial #100-232</li>
                    <li>Las Vegas, NV 89044</li>
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
                    <form method="post" id="c_i_u_form" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" >
<div class="quoteK_r">
       	    <div class="quoteK_r_title">COMMERCIAL INVOICE</div>
       	    <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">Invoice Number:</div>
       	      <div class="quoteK_r_nr_r"><input type="text" name="invoice_number" value="<?php echo $this->_tpl_vars['customer_code']; ?>
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
                           
                            <!--<th>Item</th>-->
                            <th>Artwork</th>
                            <th>Size</th>
                          
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Setup Fee</th>
                            <th>Extension</th>
                        </tr>
                        <?php $_from = $this->_tpl_vars['quotation_sheet_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                        <tr>
                
                         <!--<?php if ($this->_tpl_vars['dis']['quotation_category'] == '3'): ?>
                        <td>Hot fix Material</td>
                        
                        <?php elseif ($this->_tpl_vars['dis']['quotation_category'] == '4'): ?>
                         <td>Other transfer</td>
                        
                  <?php elseif ($this->_tpl_vars['dis']['quotation_category'] == '1' || $this->_tpl_vars['dis']['quotation_category'] == '2'): ?>
                          <td>Rhinestone transfer</td>
                    <?php elseif ($this->_tpl_vars['dis']['quotation_category'] == '5' || $this->_tpl_vars['dis']['quotation_category'] == '6'): ?>
                          <td>CDR transfer</td>
                     <?php elseif ($this->_tpl_vars['dis']['quotation_category'] == '7' || $this->_tpl_vars['dis']['quotation_category'] == '8'): ?>
                 
                          <td>Rhinestone Template</td>
                        <?php else: ?>
                        <td></td>
                        <?php endif; ?>-->
                         <td> <?php echo $this->_tpl_vars['dis']['pic_name']; ?>
</td>
                         <td>
                            <select name="size[]">
                                <option value="<?php echo $this->_tpl_vars['dis']['inch_w1']; ?>
*<?php echo $this->_tpl_vars['dis']['inch_h1']; ?>
inch<?php echo $this->_tpl_vars['dis']['id']; ?>
"><?php echo $this->_tpl_vars['dis']['inch_w1']; ?>
*<?php echo $this->_tpl_vars['dis']['inch_h1']; ?>
inch</option>
                                <option value="<?php echo $this->_tpl_vars['dis']['cm_w1']; ?>
*<?php echo $this->_tpl_vars['dis']['cm_h1']; ?>
cm<?php echo $this->_tpl_vars['dis']['id']; ?>
"><?php echo $this->_tpl_vars['dis']['cm_w1']; ?>
*<?php echo $this->_tpl_vars['dis']['cm_h1']; ?>
cm</option>
                            </select>
                        </td>   
                        <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
               			<td><?php echo $this->_tpl_vars['dis']['price']; ?>
</td>
               
       
              <td><input type="text" name="setup_fee[]" style="width:60px;" readonly="readonly" value="<?php echo $this->_tpl_vars['dis']['version']; ?>
" class="quoteK_r_nr_r_input aaa" id="setup_fee_1<?php echo $this->_tpl_vars['dis']['id']; ?>
"  /></td>
      
              <td><input type="text" value="<?php echo $this->_tpl_vars['dis']['clothes_price']; ?>
" name="final_quote[]"  readonly="readonly" style="width:65px;" class="quoteK_r_nr_r_input bbb" id="final_quote<?php echo $this->_tpl_vars['dis']['id']; ?>
" /></td>
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
                              <input type="text" name="sub_total" id="sub_total" readonly="readonly" class="quoteK_r_nr_r_input" value="<?php echo $this->_tpl_vars['price']; ?>
" />
                            </div>
                          </div>
                          <div class="quoteK_r_nr" style="width:300px;">
                            <div class="quoteK_r_nr_l" style="width:130px;">Freight:</div>
                            <div class="quoteK_r_nr_r">
                              <input type="text" name="freight" class="quoteK_r_nr_r_input" id="freight_b" onKeyUp="freight_a(<?php echo $this->_tpl_vars['dis']['id']; ?>
)" />
                            </div>
                          </div>
                          <div class="quoteK_r_nr" id="freight_error" style="color:#F00; display:none;"></div>
                          <div class="quoteK_r_nr" style="width:300px;">
                            <div class="quoteK_r_nr_l" style="width:130px;">Total:</div>
                            <div class="quoteK_r_nr_r">
                              <input type="text" name="price" id="due" readonly="readonly" value="<?php echo $this->_tpl_vars['price']; ?>
" class="quoteK_r_nr_r_input" />
                            </div>
                          </div>
                         <input type="hidden" value="<?php echo $this->_tpl_vars['price']; ?>
" id="h_price">
                        <input type="hidden" name="ids" value="<?php echo $this->_tpl_vars['ids']; ?>
">
                        <input type="hidden" name="imgBase64Code" value="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/small_logo.png">                          
                          
                          
                        </div>
            </div>
          
            	<div style="float:left; width:1000px;">
                    <ul style="margin:0px; padding:0px; float:left; list-style:none; width:1000px;">
                        <?php $_from = $this->_tpl_vars['image_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                        	<li style="float:left; margin-top:10px; margin-left:15px;"><img src="<?php echo $this->_tpl_vars['dis']; ?>
" style="width:120px; height:120px;"/></li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
           		</div>
        
                      <div class="quoteK_bot02" style="margin-top:10px;"><font style="float:left; width:130px;">Shipping:</font><font style="float:left;">UPS/DHL/FEDEX DUTIES AND TAXES ARE UNDERSTOOD TO BE PAID BY CUSTOMER.</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">Payment Terms:</font> <font style="float:left;">At the sight of the Bill / Full payment is requested.</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">PayPal:</font> <font style="float:left;">payment@cstown.com</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">Credit Card:</font> <font style="float:left;">Call (702) 567-0047 to process a credit card payment</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">Check:</font> <font style="float:left;">Mailing address: 2880 Bicentennial #100-232, Las Vegas, NV 89044.</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">Wire Transfer:</font> <font style="float:left;">Please contact rhinestone@cstown.com for TT payment.</font></div>
                      <div class="quoteK_bot02"><font style="float:left; width:130px;">E-mail Inquiries:</font> <font style="float:left;">jerry.cstown@gmail.com</font></div>
                      
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
function freight_a(key){
   $(document).ready(function(){
		var freight = $("#freight_b").val();
		var due = $("#h_price").val();
		var one = due.substr(0, 1);
		var due =due.replace(one,"");
		
		var check_arr = '';
		$(".pageForm table td .aaa").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(check_arr == ''){
				if($(this).val()!=''){
				   check_arr += $(this).val();
				}else{
				   check_arr += 0;	
				}
			}else{
				if($(this).val()!=''){
					check_arr += '+'+$(this).val();
				}else{
					check_arr += '+'+0;
				}
			}
			
			
		});

	    var due_price = freight + "+" + due;
	    due_price = eval('('+due_price+')');
		due_price = due_price.toFixed(2);
        $("#due").val(one + due_price);		
	});
}

function setup_fee_a(key){
	
	var setup_fee_1 = $("#setup_fee_1"+key).val();
	var final_quote = $("#final_quote_h"+key).val();
	var one = final_quote.substr(0, 1);
	var final_quote =final_quote.replace(one,"");

	var due_price = setup_fee_1 + "+" + final_quote;
	due_price = eval('('+due_price+')');
	due_price = due_price.toFixed(2);
	$("#final_quote"+key).val(one + due_price);		
	
	var check_arr = '';
	$(".pageForm table td .bbb").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
		if(check_arr == ''){
			if($(this).val()!=''){
			   check_arr += $(this).val().replace(one,"");
			}else{
			   check_arr += 0;	
			}
			//sale_detail += $("#sale_detail" + $(this).val()).val();
		}else{
			if($(this).val()!=''){
				check_arr += '+'+$(this).val().replace(one,"");
			}else{
				check_arr += '+'+0;
			}
			//sale_detail += '|'+$("#sale_detail" + $(this).val()).val();
		}
	});

    var freight = $("#freight_b").val();	
	if(freight!=""){
	    var due_price_1 = freight + "+" + check_arr;
	}else{
	    var due_price_1 = 0 + "+" + check_arr;
	}
	
	$("#sub_total").val(one + eval('('+check_arr+')').toFixed(2));
	
	due_price_1 = eval('('+due_price_1+')');
	due_price_1 = due_price_1.toFixed(2);
	$("#due").val(one + due_price_1);
}
	
function export_pdf(){
	if($("#freight_b").val() == ""){
		$("#freight_error").css("display","block");
		$("#freight_error").html("请填写运费！");
	}else{
	    $("#c_i_u_form").submit();	
	}
}
</script>
</body>
</html>