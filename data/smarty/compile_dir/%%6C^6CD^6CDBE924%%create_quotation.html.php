<?php /* Smarty version 2.6.22, created on 2014-01-06 09:21:09
         compiled from create_quotation_invoice/create_quotation.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>报价单</title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- pdf生成JS文件 -->
<!--<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.addimage.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.cell.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.from_html.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.ie_below_9_shim.js" type="text/javascript"></script>

<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.javascript.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.sillysvgrenderer.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.split_text_to_size.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.standard_fonts_metrics.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.PLUGINTEMPLATE.js" type="text/javascript"></script>-->
<!-- end -->
</head>

<body>
	<div class="QuoteK" style="font-family:'黑体';">
    	
        <div style="float:left;">
        
       	  <div class="quoteK_l">
       	    <div class="quoteK_l_logo" id="chart"><img src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/small_logo.png" alt="cstown" /></div>
            <div class="quoteK_l_txt">
            	<ul>
                	<li><?php echo $this->_tpl_vars['usa_company_info']; ?>
</li>
                    <li><?php echo $this->_tpl_vars['website']; ?>
</li>
                    <li><?php echo $this->_tpl_vars['c_email']; ?>
</li>
                    <li><?php echo $this->_tpl_vars['china_company_info']; ?>
</li>
                </ul>
            </div>
       	  </div>
       	  <div class="quoteK_r">
       	    <div class="quoteK_r_title">Rhinestone Quote</div>
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
       	      <div class="quoteK_r_nr_l">&nbsp;</div>
       	      <div class="quoteK_r_nr_r"><?php echo $this->_tpl_vars['email']; ?>
</div>
       	    </div>
       	  </div>
       	  <div class="quoteK_tiao01">
          	<div class="quoteK_tiao01_1">Customer: <?php echo $this->_tpl_vars['customer_name']; ?>
</div>
            <div class="quoteK_tiao01_1">Company: <?php echo $this->_tpl_vars['customer_company']; ?>
</div>
          </div>
          <form method="post" id="quote_form1" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" >
          <div class="sIE_l_03">
                	<table cellspacing="0" class="sIE_l_03Tab">
                    	<tr>
                        	<th>Quote NO.</th>
                            <th>Artwork</th>
                            <th>Design Size</th>
                            <th>Color</th>
                            <th>Quantity</th>
                            <th>Quote</th>
                            <th>Setup Fee</th>
                            <th>Sub-total</th>
                        </tr>
                        <?php $_from = $this->_tpl_vars['quotation_sheet_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                            <tr>
                                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['design_pic_name']; ?>
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
                                <td><?php echo $this->_tpl_vars['dis']['color']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['pcs']; ?>
</td>
                                <td style=" font-size:12px;font-family:Arial"><?php echo $this->_tpl_vars['dis']['unite_quote']; ?>
</td>
                                <td><input type="text" name="setup_fee[]" style="width:30px;" class="quoteK_r_nr_r_input aaa" id="setup_fee_1<?php echo $this->_tpl_vars['dis']['id']; ?>
" onKeyUp="setup_fee_a(<?php echo $this->_tpl_vars['dis']['id']; ?>
)" /></td>
                                <td><input type="text" value="<?php echo $this->_tpl_vars['dis']['final_quote']; ?>
" name="final_quote[]"  readonly="readonly" style="width:65px;" class="quoteK_r_nr_r_input bbb" id="final_quote<?php echo $this->_tpl_vars['dis']['id']; ?>
" /></td>
                                <input type="hidden" value="<?php echo $this->_tpl_vars['dis']['final_quote']; ?>
" id="final_quote_h<?php echo $this->_tpl_vars['dis']['id']; ?>
" >
                            </tr>
						<?php endforeach; endif; unset($_from); ?>
                    </table>
                    
                      <div class="quoteK_div">
                        <div class="quoteK_r">
                          <div class="quoteK_r_nr">
                            <div class="quoteK_r_nr_l">Freight:</div>
                            <div class="quoteK_r_nr_r">
                              <input type="text" name="freight" class="quoteK_r_nr_r_input" id="freight_b" onKeyUp="freight_a(<?php echo $this->_tpl_vars['dis']['id']; ?>
)" />
                            </div>
                          </div>
                          <div class="quoteK_r_nr" id="freight_error" style="color:#F00; display:none;"></div>
                          <div class="quoteK_r_nr">
                            <div class="quoteK_r_nr_l">Total Amount:</div>
                            <div class="quoteK_r_nr_r"><input type="text" name="price" readonly id="due" value="<?php echo $this->_tpl_vars['price']; ?>
" class="quoteK_r_nr_r_input"  /></div>
                          </div>
                        </div>
                        <input type="hidden" value="<?php echo $this->_tpl_vars['price']; ?>
" id="h_price">
                        <input type="hidden" name="ids" value="<?php echo $this->_tpl_vars['ids']; ?>
">
                        <input type="hidden" name="imgBase64Code" value="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/small_logo.png">
       
            </div>
                      
            <div class="quoteK_bottom01">
                        	<ul>
                            	<li><?php echo $this->_tpl_vars['service_promise']; ?>
</li>
                            </ul>
                        </div>  
                </div>
                
                
          	</div>
            <input type="button" class="quoteK_bottom01_button" onClick="export_pdf()" value="导出PDF" />
            <input type="button"  class="quoteK_bottom01_button" value="返回" /> 
            </form>
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
				//sale_detail += $("#sale_detail" + $(this).val()).val();
			}else{
				if($(this).val()!=''){
					check_arr += '+'+$(this).val();
				}else{
					check_arr += '+'+0;
				}
				//sale_detail += '|'+$("#sale_detail" + $(this).val()).val();
			}
			
			
		});

	    var due_price = freight + "+" + due + "+" + check_arr;
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
	due_price_1 = eval('('+due_price_1+')');
	due_price_1 = due_price_1.toFixed(2);
	$("#due").val(one + due_price_1);

}
	
function export_pdf(){
	if($("#freight_b").val() == ""){
		$("#freight_error").css("display","block");
		$("#freight_error").html("请填写运费！");
	}else{
	    $("#quote_form1").submit();	
	}
}
</script>
</body>
</html>