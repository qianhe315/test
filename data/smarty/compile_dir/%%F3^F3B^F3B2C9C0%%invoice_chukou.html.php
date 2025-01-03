<?php /* Smarty version 2.6.22, created on 2017-07-22 12:09:40
         compiled from sale_detail/invoice_chukou.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>出口结算单</title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
</head>


<body>
	<div class="wrap">
    	<div class="QuoteK" style="width:760px; text-align:left;">
       	  <div style="float: left;height: auto;width: 100%;">
            <div style="float: left;height: auto;width: 100%;">
            	<ul style="list-style-type:none; float:left; margin:0; padding:0;">
                	<li style="float:left; width:100%;font-size:32px;text-align:right;">CSTOWN INC.</li>
                    <li style="float:left; width:100%;font-size:24px;font-weight:normal;text-align:left;">小布涂涂文化创意（大连）有限公司</li>
                    <li style="float:left; width:100%;text-align:left;font-weight:normal;">ADDRESS: Floor 4, No.13 Renxin Street, High Tech Zone, Dalian, China1 116000</li>
                    <li style="float:left; width:100%;text-align:left;font-weight:normal;">地址：中国辽宁省大连市高新技术产业园区黄浦路596号15层14、15号</li>
                    <li style="float:left; width:50%;text-align:left;font-weight:normal; width:50%;">Tel: +86-411-39769161</li>
                    <li style="float:left; width:50%;text-align:left;font-weight:normal; width:50%;">电话：+86-411-39769161</li>
                    <li style="float:left; width:50%;text-align:left;font-weight:normal; width:50%;">Fax: +86-411-39769355</li>
                    <li style="float:left; width:50%;text-align:left;font-weight:normal; width:50%;">传真：+86-411-39769355</li>
                    <li style="float:left; width:50%;text-align:left;font-weight:normal; width:50%;">Website: www.cstown.com </li>
                    <li style="float:left; width:50%;text-align:left;font-weight:normal; width:50%;">网址：www.cstown.com </li>
                    <li style="float:left; width:50%;text-align:left;font-weight:normal; width:50%;">E-mail:spring@cstown.com </li>
                    <li style="float:left; width:50%;text-align:left;font-weight:normal; width:50%;">邮箱：spring@cstown.com </li>
                </ul>
            </div>
       	  </div>
<!--       	  <div class="quoteK_r">
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
       	  </div>-->
       	  
          
          
          
          <div class="quoteK_tiao01">
          
          
          <div style="border-bottom: 1px solid #000000;
    float: right;
    height: auto;
    line-height: 26px;
    width: 100%;
    margin-bottom:20px;"></div>
          
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:100%; margin-right:0px;">
                 <font style="width:260px; margin-left:380px; font-size:28px; float:left;"> 出口结算单（发票）</font>
                 <font style="float:right; margin-right:10px; margin-top:15px;">发票号码：<div style="float:right; display:block;" id="invoice_id"><?php echo $this->_tpl_vars['invoice']; ?>
</div><div id="invoice_id1" style="float:right; display:none;" ><input size="9" style="border:none;" type="text" /></div></font>
            </div>
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:592px; margin-right:0px;">
                 <font style="width:260px; margin-left:435px; font-size:20px; float:left;">I N V O I C E</font>
            </div>
<!--            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:592px; margin-right:0px;"><font style="width:100px; float:left;">Contact:</font><font style="float:left;"><?php echo $this->_tpl_vars['customer_name']; ?>
</font></div>
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:592px; margin-right:0px;"><font style="width:100px; float:left;">Address:</font><font style="float:left;"><?php echo $this->_tpl_vars['address']; ?>
</font></div> -->           
          </div>
            <form method="post" id="quote_form1" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" >
            <input type="hidden" name="invoice_id" value="<?php echo $this->_tpl_vars['ids']; ?>
" />          
          
          
    	<div style="float:left; width:100%;">
       	  <div style="float:left;height: auto;width: 351px;">
            <div class="quoteK_l_txt">
            	<ul style="list-style-type:none; float:left; margin:0; padding:0;">
                    <li style="text-align:left;font-weight:normal;"">To：<?php echo $this->_tpl_vars['customer_name']; ?>
</li>
                    <li style="text-align:left;font-weight:normal;">销货方名称：小布涂涂文化创意（大连）有限公司</li>
                    <li style="text-align:left;font-weight:normal;">CNPJ：210211550644863</li>
                    <li style="text-align:left;font-weight:normal;">税号：210211550644863</li>
                    <li style="text-align:left;font-weight:normal;">ADDRESS：Floor 4, No.13 Renxin Street,High Tech Zone, Dalian</li>
                    <li style="text-align:left;font-weight:normal;">地址：中国辽宁省大连市高新技术产业园区黄浦路596号14、15层</li>
                    <li style="text-align:left;font-weight:normal;">TEL：+86-411-39769161</li>
                    <li style="text-align:left;font-weight:normal;">电话：+86-411-39769161</li>
                </ul>
            </div>
       	  </div>          
          
       	  <div style="float:right;height: auto;width: 351px;">
            <div class="quoteK_l_txt">
            	<ul style="list-style-type:none; float:left; margin:0; padding:0;">
                    <li style="text-align:left;font-weight:normal;"">CONTRACT NO. <?php echo $this->_tpl_vars['sale_detail_deliver']['invoice_number']; ?>
</li>
                    <li style="text-align:left;font-weight:normal;">合同号：<?php echo $this->_tpl_vars['sale_detail_deliver']['invoice_number']; ?>
</li>
                    <li style="text-align:left;font-weight:normal;">INVOICE NO. <?php echo $this->_tpl_vars['sale_detail_deliver']['invoice_number']; ?>
</li>
                    <li style="text-align:left;font-weight:normal;">结算单号：<?php echo $this->_tpl_vars['sale_detail_deliver']['invoice_number']; ?>
</li>
                    <li style="text-align:left;font-weight:normal;">B/L No. <input type="text" style="border:none; font-size:14px;" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['shipping_number']; ?>
" /></li>
                    <li style="text-align:left;font-weight:normal;">提货单号：<input type="text" style="border:none; font-size:14px;" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['shipping_number']; ?>
" /></li>
                    <li style="text-align:left;font-weight:normal;">Methods of payment：T/T</li>
                    <li style="text-align:left;font-weight:normal;">付款方式：T/T</li>
                    <li style="text-align:left;font-weight:normal;">Date：<?php echo $this->_tpl_vars['time']; ?>
</li>
                    <li style="text-align:left;font-weight:normal;">日期：<?php echo $this->_tpl_vars['time']; ?>
</li>
                    <li style="text-align:left;font-weight:normal;"><input type="text" size="60" style="border:none; font-size:15px;" value="Shipped by From Dalian, CHINA To America" /></li>
                    <li style="text-align:left;font-weight:normal;">起始地：大连 到达地：<input type="text" size="20" style="border:none; font-size:14px;" value="<?php echo $this->_tpl_vars['destination']; ?>
" /></li>
                </ul>
            </div>
       	  </div> 
         </div> 
          <div class="quoteK_tiao01">
          
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:100%; margin-right:0px;">
                 <font style="width:260px; font-size:15px; float:left;"> FOB</font>
            </div>
            <div class="quoteK_tiao01_1" style="margin-bottom:5px; width:592px; margin-right:0px;">
                 <font style="width:260px;  font-size:15px; float:left;">成交方式：FOB</font>
            </div>         
          </div>
          
          <div style="float:left;overflow: hidden; width: 100%;">
                	
                    <table cellspacing="0" style="float:left; width:100%;" border="1">
                    	<tr>
                            <th>Marks & Nos.<br>唛头</th>
                            <th>Descriptions & Quantity<br>货物名称和数量</th>
                            <th>Unit Price<br>单价</th>
                            <th>Amount<br>金额</th>
                        </tr>
                        <tr>
                            <th>N/M</th>
                            <th>Hot Fix Glass <span style="float:right; display:block;" ><?php echo $this->_tpl_vars['number']; ?>
 PCS</span><br>Imitation <span id="jingzhong1" style="float:right; display:block;" >(<?php echo $this->_tpl_vars['net1']; ?>
kg)</span><div id="jingzhong2" style="float:right; display:none;" >(<input size="3" style="border:none;" type="text" />kg)</div><br>semi-precious stones<br>玻璃烫钻饰品 </th>
                            <th><?php echo $this->_tpl_vars['price']; ?>
</th>
                            <th><?php echo $this->_tpl_vars['goods_value']; ?>
</th>
                        </tr>
                        <tr>
                            
                            <th colspan="4">TOTAL: <?php echo $this->_tpl_vars['number']; ?>
 数量合计：<?php echo $this->_tpl_vars['number']; ?>
<br>TOTAL: <?php echo $this->_tpl_vars['goods_value']; ?>
 金额合计：<?php echo $this->_tpl_vars['goods_value']; ?>
</th>

                        </tr>
                    </table>   

       	  

<!--               <input type="hidden" value="<?php echo $this->_tpl_vars['price']; ?>
" id="h_price">        
			<input type="button" class="quoteK_bottom01_button" onClick="export_pdf()" value="导出PDF" />
            <input type="button"  class="quoteK_bottom01_button" value="返回" />                         
            </form>   -->         
                        
                                	  
          </div>
          <div style="float:left;height: auto;width: 100%;">
            <div style="float:left;">
            	<ul style="list-style-type:none; float:left; margin:0; padding:0; margin-top:20px;">
                    <li style="text-align:left; font-size:13px;font-weight:normal; text-decoration:underline;">PLEASE REMIT THE ABOVE AMOUNT TO CSTOWN INC.</li>
                    <li style="text-align:left;font-weight:normal; font-weight:bold;">银行：招商银行股份有限公司大连星海支行</li>
                    <li style="text-align:left;font-weight:normal;font-weight:bold;">TLX:</li>
                    <li style="text-align:left;font-weight:normal;font-weight:bold;">电报：</li>
                    <li style="text-align:left;font-weight:normal;font-weight:bold;">SWIFT: CMBCCNBS</li>
                    <li style="text-align:left;font-weight:normal;font-weight:bold;">汇款代码：CMBCCNBS</li>
                    <li style="text-align:left;font-weight:normal;font-weight:bold;">BANK`S ADDRESS: China Merchants Bank Tower NO.7088 Shennan Boulevard Shenzhen,China</li>
                    <li style="text-align:left;font-weight:normal;font-weight:bold;">银行地址：深圳市深南大道7088号招商银行大厦</li>
                    <li style="text-align:left;font-weight:normal;font-weight:bold;">BENEFICIARY`S A/C NO: 411903954532201 </li>
                    <li style="text-align:left;font-weight:normal;font-weight:bold;">银行账号：411903954532201</li>
                    <li style="text-align:left;font-weight:normal;font-weight:bold;">BENEFICIARY: CSTOWN INC.</li>
                    <li style="text-align:left;font-weight:normal;font-weight:bold;">收款人：小布涂涂文化创意（大连）有限公司</li>
                </ul>
            </div>
       	  </div> 
          
          
        </div>
</div>
<script type="text/javascript">

	$("#invoice_id").click(function (){
        $("#invoice_id").css("display","none"); 
		$("#invoice_id1").css("display","block"); 
	});

	$("#jingzhong1").click(function (){
        $("#jingzhong1").css("display","none"); 
		$("#jingzhong2").css("display","block"); 
	});

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