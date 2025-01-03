<?php /* Smarty version 2.6.22, created on 2015-10-26 10:10:44
         compiled from factory_fahuo/create_order.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>

<head>
<meta charset="UTF-8">
<title >生成发货单</title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>

</head>


<body>
	<div class="QuoteK" style="font-family:'黑体'; width:850px;">
    	
        <div style="float:left;">
        
              <div class="quoteK_l" style="float:left; margin-left:10px; width:auto;">
                <div class="quoteK_l_logo" id="chart"><img src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/small_logo.png" alt="cstown" /></div>
              </div>
              <div class="quoteK_r" style="float:left; width:300px; margin-left:280px;" >
                <div class="" style=" float:left; margin-top:4px;" ><span style="font-size:24px;">SHIPPING ORDER</span></div>
              </div>
              <div class="sIE_l_03Tab" style="margin-top:60px;">
            
                        <table class=""  width="620" border="1" cellspacing="0" cellpadding="0" style=" border-top:solid 5px #000;">
                             <tr  height="35px;">
                                 <td width="80px;">时间：</td>
                                 <td width="150px;"><?php echo $this->_tpl_vars['sale_detail_deliver']['add_time']; ?>
</td>
                                 <td width="80px;">客户代码：</td>
                                 <td width="150px;"><?php echo $this->_tpl_vars['invoice']['customer_code']; ?>
</td>
                             </tr>
                             <tr height="35px;">
                                 <td width="100px;">发货时间：</td>
                                 <td><?php echo $this->_tpl_vars['sale_detail_deliver']['shipping_time']; ?>
</td>
                                 <td width="100px;">业务员：</td>
                                 <td><?php echo $this->_tpl_vars['invoice']['saleman_name']; ?>
</td>
                             </tr>
                                                          <tr height="70px;">
                                 <td width="50px;">其他货品：</td>
                                 <td><?php echo $this->_tpl_vars['other_name']; ?>
&nbsp;</td>
                                 <td width="50px;">备注：</td>
                                 <td><?php echo $this->_tpl_vars['sale_detail_deliver']['sale_note']; ?>
&nbsp;</td>
                             </tr>
                             
                             <tr height="35px;;">
                                 <td width="100px;">订单号：</td>
                                 <td colspan="3">
                                 <?php if ($this->_tpl_vars['delivery_orders']): ?>
                                     <?php $_from = $this->_tpl_vars['delivery_orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                                       <div style="float:left; width:100px; height:30px; margin-bottom:5px; margin-top:10px;margin-right:10px; margin-left:5px;">
                                         <?php echo $this->_tpl_vars['dis']; ?>

                                       
                                       </div>
                                    <?php endforeach; endif; unset($_from); ?>
                                <?php endif; ?>
                                 &nbsp;
                                 </td>
                             </tr>
                             <tr height="70px;">
                                 <td colspan="4">
                                 <?php if ($this->_tpl_vars['iamges']): ?>
                                     <?php $_from = $this->_tpl_vars['iamges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                                       <div style="float:left; width:120px; height:130px; margin-bottom:5px; margin-top:15px;margin-right:10px; margin-left:10px;">
                                       
                                           <a style="float:left;" href="#"><img src="<?php echo $this->_tpl_vars['dis']; ?>
" width="100px" height="100px" ></a>
                                      </div>
                                    <?php endforeach; endif; unset($_from); ?>
                                <?php endif; ?>
                                &nbsp;
        </td>
                                
                             </tr>
<!--                             <tr height="70px;"> 
                                 <td colspan="4">
                 					   <form method="post" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" >
                                            <input type="hidden" name="saleman_name" value="<?php echo $this->_tpl_vars['invoice']['saleman_name']; ?>
">
                                            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['id']; ?>
">
                                            <input type="hidden" name="address" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['address']; ?>
">
                                            <input type="hidden" name="company" value="<?php echo $this->_tpl_vars['customers']['company']; ?>
"> 
                                            <input type="hidden" name="customer_name" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['customer_name']; ?>
">
                                            <input type="hidden" name="city" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['city']; ?>
">
                                            
                                            <?php if ($this->_tpl_vars['sale_detail_deliver']['shipping_company'] == 'UPS' && $this->_tpl_vars['sale_detail_deliver']['shipping_number'] == ""): ?>
                                            	<input type="submit" value="点击生成ups运单">
                                            <?php endif; ?>    
                                       </form>
                                       <form method="post" style="width:100%;" action="<?php echo $this->_tpl_vars['act1']; ?>
" class="pageForm" enctype="multipart/form-data" >
                                           <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['id']; ?>
">
                                            
                                            <?php if ($this->_tpl_vars['sale_detail_deliver']['shipping_company'] == 'DHL' && $this->_tpl_vars['sale_detail_deliver']['shipping_number'] == ""): ?>
                                            	<input type="submit" value="点击生成dhl运单">
                                            <?php endif; ?>    
                                       </form> 
                                       
        						 </td>
                             </tr> -->
                        </table>
               </div>
              
        </div>
    </div>
        

<script type="text/javascript">
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
	
function export_pdf(){

}
</script>
</body>
</html>