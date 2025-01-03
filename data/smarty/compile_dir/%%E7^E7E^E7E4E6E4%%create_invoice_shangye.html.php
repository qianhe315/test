<?php /* Smarty version 2.6.22, created on 2018-10-17 10:43:05
         compiled from sale_detail/create_invoice_shangye.html */ ?>
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
                	<li>SELLER:CSTOWN INC.</li>
                    <li>销货方名称：小布涂涂文化创意（大连）股份有限公司</li>
                    <li>CNPJ:91210231550644863P</li>
                    <li>统一社会信用代码：91210231550644863P</li>
                    <li>ADDRESS:Floor 4, No.13 Renxian Street </li>
                    <li>High Tech Zone DALIAN</li>
                    <li>地址：中国辽宁省大连市高新区七贤岭任贤街13号四层</li>
                    <li>TEL:+86-411-39769161</li>
                    <li>电话：+86-411-39769161</li>
                </ul>
            </div>
       	  </div>
       	  <div class="quoteK_r">
       	    <div class="quoteK_r_title">COMMERCIAL INVOICE</div>
       	    <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">Invoice Number:</div>
       	      <div class="quoteK_r_nr_r"><?php echo $this->_tpl_vars['invoice_number']; ?>
</div>
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
       	  </div>
       	  
          
          <div class="quoteK_tiao01">
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:592px; margin-right:0px;"><font style="width:100px; float:left;">Company:</font><font style="float:left;"><?php echo $this->_tpl_vars['company']; ?>
</font></div>
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:592px; margin-right:0px;"><font style="width:100px; float:left;">Contact:</font><font style="float:left;"><?php echo $this->_tpl_vars['customer_name']; ?>
</font></div>
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:592px; margin-right:0px;"><font style="width:100px; float:left;">Address:</font><font style="float:left;"><?php echo $this->_tpl_vars['address']; ?>
</font></div> 
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:592px; margin-right:0px;"><font style="width:100px; float:left;">Country:</font><font style="float:left;"><?php echo $this->_tpl_vars['area_level_one_id']; ?>
</font></div>            
          </div>
            <form method="post" id="quote_form1" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" >
            <input type="hidden" name="invoice_id" value="<?php echo $this->_tpl_vars['ids']; ?>
" />          
          
          <div class="sIE_l_03">
                	
                    <table cellspacing="0" class="sIE_l_03Tab">
                    	<tr>
                            <th>Item</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Setup Fee</th>
                            <th>Amount</th>
                        </tr>
                        <?php $_from = $this->_tpl_vars['quotation_sheet_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                            <tr>
                                <td><?php echo $this->_tpl_vars['dis']['design_pic_name']; ?>
</td>
                                <td>
                                    <select name="size[]">
                                    
                                        <?php if ($this->_tpl_vars['dis']['inch_h1'] != ""): ?>
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
                                        <?php else: ?>
                                            <option value="1*1inch">1*1inch</option>
                                            <option value="1*1cm">1*1cm</option>
                                        <?php endif; ?>    
                                    </select>                                
                                </td>
                                <td><?php echo $this->_tpl_vars['dis']['pcs']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['unite_quote']; ?>
</td>
                                <td><?php if ($this->_tpl_vars['dis']['version'] != ""): ?><?php echo $this->_tpl_vars['dis']['version']; ?>
<?php else: ?>0<?php endif; ?></td>
                                <td><?php echo $this->_tpl_vars['dis']['final_quote']; ?>
</td>
                            </tr>
                        <?php endforeach; endif; unset($_from); ?>    
                    </table>
                    
                      <div class="quoteK_div">
                        <div class="quoteK_r" style="width:300px;">
                        
                          <div class="quoteK_r_nr" style="width:300px;">
                            <div class="quoteK_r_nr_l" style="width:130px;">Freight:</div>
                            <div class="quoteK_r_nr_r">
                              <input type="text" name="freight" class="quoteK_r_nr_r_input" id="freight_b" onKeyUp="freight_a()" />
                            </div>
                          </div>
                           <div class="quoteK_r_nr" id="freight_error" style="color:#F00; display:none;"></div>
                          
                          <div class="quoteK_r_nr" style="width:300px;">
                            <div class="quoteK_r_nr_l" style="width:130px;">Total:</div>
                            <div class="quoteK_r_nr_r">
                              <input type="text" name="price" readonly="readonly" value="<?php echo $this->_tpl_vars['price']; ?>
" id="due" class="quoteK_r_nr_r_input" />
                            </div>
                          </div>
                          
                          
                          
                        </div>
            </div>
               <input type="hidden" value="<?php echo $this->_tpl_vars['price']; ?>
" id="h_price">        
			<input type="button" class="quoteK_bottom01_button" onClick="export_pdf()" value="导出PDF" />
            <input type="button"  class="quoteK_bottom01_button" value="返回" />                         
            </form>            
                        
                                	  
          </div>
          
          
        </div>
</div>
<script type="text/javascript">
function export_pdf(){
	
	   var freight_b = $("#freight_b").val();
	   if(freight_b==""){
		  
			$("#freight_error").css("display","block");
			$("#freight_error").html("请填写运费！");
	
	   }else{
		    $("#quote_form1").submit();
	   }
}
function freight_a(){
   $(document).ready(function(){
		var freight = $("#freight_b").val();
		var due = $("#h_price").val();
		var one = due.substr(0, 1);
		var due =due.replace(one,"");
		 
	    var due_price = freight + "+" + due;
	    due_price = eval('('+due_price+')');
		due_price = due_price.toFixed(2);
        $("#due").val(one + due_price);		
	});
}
</script>
</body>
</html>