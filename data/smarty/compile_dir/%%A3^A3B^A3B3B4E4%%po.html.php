<?php /* Smarty version 2.6.22, created on 2017-06-06 16:23:02
         compiled from sale_detail/po.html */ ?>
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
            	
            </div>
       	  </div>
       	  <div class="quoteK_r">
       	    <div class="quoteK_r_title">Purchase Order</div>
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
       	      <div class="quoteK_r_nr_l">P.O.NO.</div>
       	      <div class="quoteK_r_nr_r"><input type="text" style="width:100%;" name="p_o_no" style="width:60px;" class="quoteK_r_nr_r_input" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
" /></div>
       	    </div>
       	  </div>
       	  
          
          <div class="sIE_l_03">
                	<table cellspacing="0" class="sIE_l_03Tab">
                    	<tr>
                            <td>Vendor</td>
                            <td>CSTOWN INC. Floor 4, No.13 Renxin Street High Tech Zone Dalian, China 116000</td>
                        </tr>
                        <tr>
                            <td>Ship To</td>
                            <td><?php echo $this->_tpl_vars['address']; ?>
</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td><?php echo $this->_tpl_vars['phone']; ?>
</td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td><?php echo $this->_tpl_vars['customer_arr']['fax']; ?>
</td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td><?php echo $this->_tpl_vars['customer_arr']['email']; ?>
</td>
                        </tr>
                    </table>
                    
                    <table cellspacing="0" class="sIE_l_03Tab" style="margin-top:20px; width:360px;">
                    	<tr>
                            <th>Due Date</th>
                            <th>Cust PO</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="due_date" style="width:160px;" class="quoteK_r_nr_r_input" /></td>
                            <td><input type="text" name="cust_po" style="width:160px;" class="quoteK_r_nr_r_input" /></td>
                        </tr>
                    </table>
                    
                    
                    <table cellspacing="0" class="sIE_l_03Tab" style="margin-top:20px;">
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
                                <td><?php echo $this->_tpl_vars['dis']['pcs']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['unite_quote']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['version']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['final_quote']; ?>
</td>
                            </tr>
                        <?php endforeach; endif; unset($_from); ?>  
                    </table>
                    
                      <div class="quoteK_div">
                        <div class="quoteK_r" style="width:300px;">
                        
                          <div class="quoteK_r_nr" style="width:300px;">
                            <div class="quoteK_r_nr_l" style="width:130px;">Total:</div>
                            <div class="quoteK_r_nr_r">
                              <input type="text" name="price" readonly="readonly" value="<?php echo $this->_tpl_vars['price']; ?>
" class="quoteK_r_nr_r_input" />
                            </div>
                          </div>
                          
                          
                          
                        </div>
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