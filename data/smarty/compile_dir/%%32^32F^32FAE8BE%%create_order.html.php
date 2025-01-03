<?php /* Smarty version 2.6.22, created on 2024-10-12 17:30:15
         compiled from sale_detail/create_order.html */ ?>
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
                                 <td width="80px;">客户名称：</td>
                                 <td width="150px;"><?php echo $this->_tpl_vars['customer_name']; ?>
&nbsp;</td>
                             </tr>
                             <tr height="35px;">
                                 <td width="100px;">发货时间：</td>
                                 <td><?php echo $this->_tpl_vars['sale_detail_deliver']['shipping_time']; ?>
</td>
                                 <td width="100px;">公司：</td>
                                 <td><?php echo $this->_tpl_vars['company']; ?>
</td>
                             </tr>
                             <tr height="35px;">
                                 <td width="100px;">业务员：</td>
                                 <td><?php echo $this->_tpl_vars['invoice']['saleman_name']; ?>
</td>
                                 <td width="100px;">国家：</td>
                                 <?php if ($this->_tpl_vars['country'] == 'United States'): ?>
                                 <td><?php echo $this->_tpl_vars['country']; ?>
&nbsp;</td>
                                 <?php else: ?>
                                 <td style="color:#F00;"><?php echo $this->_tpl_vars['country']; ?>
&nbsp;</td>
                                 <?php endif; ?>
                                 
                             </tr>
                             <tr height="35px;">
                                 <td width="100px;">客户代码：</td>
                                 <td><?php echo $this->_tpl_vars['invoice']['customer_code']; ?>
</td>
                                  <td width="100px;">州：</td>
                                 <td><?php echo $this->_tpl_vars['state']; ?>
&nbsp;</td>
                                 
                                 
                             </tr>
                             <tr height="35px;">
                                 <td width="100px;">发货代码：</td>
                                 <td><?php echo $this->_tpl_vars['sale_detail_deliver']['ship_code']; ?>
&nbsp;</td>
                                 <td width="100px;">城市：</td>
                                 <td><?php echo $this->_tpl_vars['city']; ?>
&nbsp;</td>
                                 
                             </tr>
                             <tr height="35px;">
                                 <td width="100px;">快递公司：</td>
                                 <td><?php echo $this->_tpl_vars['sale_detail_deliver']['shipping_company']; ?>
&nbsp;</td>
                                 <td width="100px;">邮编：</td>
                                 <td><?php echo $this->_tpl_vars['postal_code']; ?>
&nbsp;</td>
                                 
                             </tr>
                             <tr height="35px;">
                                 <!--<td width="100px;">服务类型：</td>
                                 <td><?php echo $this->_tpl_vars['sale_detail_deliver']['fuwu']; ?>
&nbsp;</td>-->
                                 <td width="100px;">发货公司：</td>
                                 
                                 
                                 <td <?php if ($this->_tpl_vars['sale_detail_deliver']['gongsi'] != '小布涂涂' && $this->_tpl_vars['sale_detail_deliver']['gongsi'] != ''): ?> style="color:#F00;"<?php endif; ?>><?php echo $this->_tpl_vars['sale_detail_deliver']['gongsi']; ?>
<?php if ($this->_tpl_vars['sale_detail_deliver']['mianfei']): ?><font style="color:#F00;"><?php echo $this->_tpl_vars['sale_detail_deliver']['mianfei']; ?>
</font><?php endif; ?></td>
                                 <td width="100px;">电话：</td>
                                 <td><?php echo $this->_tpl_vars['phone']; ?>
&nbsp;</td>
                             </tr>
                             <tr height="35px;">
                                 <td width="100px;">商品名称：</td>
                                 <td><?php echo $this->_tpl_vars['production_name']; ?>
&nbsp;</td>
                                 <td rowspan="4">地址：</td>
                                 <td rowspan="4"><?php echo $this->_tpl_vars['address']; ?>
&nbsp;</td>
                             </tr>
                             <tr height="35px;">
                                 <td width="100px;">报关：</td>
                                 <td><?php echo $this->_tpl_vars['whether_declare']; ?>
&nbsp;</td>
                                 
                                
                             </tr>
                             <tr height="35px;">
                                 <td width="100px;">货值：</td>
                                 <td><?php echo $this->_tpl_vars['sale_detail_deliver']['goods_value']; ?>
&nbsp;</td>
                                 
                                
                             </tr>
                             <tr height="35px;">
                                 <td width="100px;">运费：</td>
                                 <td><?php echo $this->_tpl_vars['freight']; ?>
&nbsp;</td>
                             </tr>
                             
                               <tr height="35px;">
                                 <td width="100px;">低值：</td>

                                 <?php if ($this->_tpl_vars['sale_detail_deliver']['dizhi_status'] == 1): ?>
                                 <td style="color:#F00;">是</td>
                                 <?php elseif ($this->_tpl_vars['sale_detail_deliver']['dizhi_status'] == 2): ?>
                                 <td>否</td>
                                 <?php else: ?>
                                 <td>&nbsp;</td>
                                 <?php endif; ?>

                                 <td width="100px;">收货人账号：</td>
                                 <?php if ($this->_tpl_vars['sale_detail_deliver']['shipping_company'] == 'UPS'): ?>
                                 <td><?php echo $this->_tpl_vars['customers']['consignee_account_ups']; ?>
&nbsp;</td>
                                 <?php elseif ($this->_tpl_vars['sale_detail_deliver']['shipping_company'] == 'DHL'): ?>
                                 <td><?php echo $this->_tpl_vars['customers']['consignee_account_dhl']; ?>
&nbsp;</td>
                                 <?php else: ?>
                                 <td>&nbsp;</td>
                                 <?php endif; ?>
                             </tr>
                               <tr height="35px;">
                                 <td width="100px;">国外报关额：</td>
                                 <td><?php echo $this->_tpl_vars['sale_detail_deliver']['abroad']; ?>
&nbsp;</td>
                                 <td width="100px;">收货人邮箱：</td>
                                 <td><?php echo $this->_tpl_vars['customers']['consignee_email_ups']; ?>
&nbsp;</td>
                             </tr>
                             
                             <tr height="35px;">
                                 <td width="100px;">毛重：</td>
                                 <td><?php echo $this->_tpl_vars['zongmaozhong']; ?>
&nbsp;</td>
                                  <td rowspan="3">备注：</td>
                                 <td rowspan="3"><?php echo $this->_tpl_vars['sale_detail_deliver']['sale_note']; ?>
&nbsp;</td>
                                 
                             </tr>
                             <tr height="35px;">
                                 <td width="50px;">俱乐部/学校：</td>
                                 <?php if ($this->_tpl_vars['sale_detail_deliver']['clubs_schools'] == 1): ?>
                                 <td style="color:#F00;">是</td>
                                 <?php elseif ($this->_tpl_vars['sale_detail_deliver']['clubs_schools'] == 2): ?>
                                 <td>否</td>
                                 <?php endif; ?>
                                 &nbsp; 
                             </tr>
                             <tr height="35px;">
                                 <td width="50px;">其他货品：</td>
                                 <td><?php echo $this->_tpl_vars['other_name']; ?>
&nbsp;</td>
                                 
                             </tr>
                             <tr height="35px;;">
                                 <td colspan="5">订单号：</td>
                             </tr>
                             <tr height="70px;">
                                 <td colspan="4">
                                 <?php if ($this->_tpl_vars['delivery_orders_arr']): ?>
                                     <?php $_from = $this->_tpl_vars['delivery_orders_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                                       <div style="float:left; width:100px; height:130px; margin-bottom:5px; margin-top:15px;margin-right:10px; margin-left:10px;">
                                       
                                           <img src="<?php echo $this->_tpl_vars['dis']['image']; ?>
" width="100px" height="100px" ><br>
                                           <?php echo $this->_tpl_vars['dis']['order_number']; ?>

                                      </div>
                                      
                                    <?php endforeach; endif; unset($_from); ?>
                                <?php endif; ?>
                                &nbsp;
        </td>
                                
                             </tr>
                             <tr height="70px;"> 
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
                                            <input type="hidden" name="customer_code" value="<?php echo $this->_tpl_vars['customers']['customer_code']; ?>
">
                                            
                                            <input type="hidden" name="consignee_email" value="<?php echo $this->_tpl_vars['customers']['consignee_email_ups']; ?>
">
                                            <?php if ($this->_tpl_vars['sale_detail_deliver']['shipping_company'] == 'UPS' && $this->_tpl_vars['sale_detail_deliver']['shipping_number'] == ""): ?>
                                            	<input type="hidden" name="consignee_account" value="<?php echo $this->_tpl_vars['customers']['consignee_account_ups']; ?>
">
                                            	<input type="submit" value="点击生成ups运单">
                                            <?php endif; ?>    
                                       </form>
                                       <form method="post" style="width:100%;" action="<?php echo $this->_tpl_vars['act1']; ?>
" class="pageForm" enctype="multipart/form-data" >
                                           <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['id']; ?>
">
                                            
                                            <?php if ($this->_tpl_vars['sale_detail_deliver']['shipping_company'] == 'DHL' && $this->_tpl_vars['sale_detail_deliver']['shipping_number'] == ""): ?>
                                            	<input type="hidden" name="consignee_account" value="<?php echo $this->_tpl_vars['customers']['consignee_account_dhl']; ?>
">  
                                                
                                                <div style="float:left;">
                                                    <label  style="float:left; margin-left:10px;">DHL账号：</label>
                                                    <select name="zhanghao" style="float:left;">
                                                    	<?php if ($this->_tpl_vars['sale_detail_deliver']['receiver_email'] == 'payee@cstown.com' || $this->_tpl_vars['sale_detail_deliver']['receiver_email'] == 'payment@cstown.com'): ?>
                                                        	<option value="601748479" selected="selected">小布涂涂</option>
                                                        <?php elseif ($this->_tpl_vars['sale_detail_deliver']['receiver_email'] == 'pay@cstown.com'): ?>
                                                        	<option value="605428346" selected="selected">涂涂记</option>
                                                    	<?php elseif ($this->_tpl_vars['sale_detail_deliver']['receiver_email'] == 'payables@cstown.com'): ?>
                                                        	<option value="605216415" selected="selected">赛思通</option>
                                                        <?php else: ?>
                                                        	<option value="601748479" selected="selected">小布涂涂</option>
                                                        	<option value="605428346">涂涂记</option>
                                                            <option value="605216415">赛思通</option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                                
                                            	<input type="submit" value="点击生成dhl运单" style="float:left; margin-left:20px;">
                                                
                                            <?php endif; ?>    
                                       </form> 
                                       <form method="post" style="width:100%;" action="<?php echo $this->_tpl_vars['act2']; ?>
" class="pageForm" enctype="multipart/form-data" >
                                           <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['id']; ?>
">
                                            
                                            <?php if ($this->_tpl_vars['sale_detail_deliver']['shipping_company'] == 'Fedex' && $this->_tpl_vars['sale_detail_deliver']['shipping_number'] == ""): ?>
                                            	<input type="hidden" name="consignee_account" value="<?php echo $this->_tpl_vars['customers']['consignee_account_fedex']; ?>
">
                                            	<input type="submit" value="点击生成fedex运单">
                                            <?php endif; ?>    
                                       </form> 
                                       
        						 </td>
                             </tr> 
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