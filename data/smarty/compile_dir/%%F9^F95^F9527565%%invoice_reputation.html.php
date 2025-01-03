<?php /* Smarty version 2.6.22, created on 2018-10-17 10:43:30
         compiled from sale_detail/invoice_reputation.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml">

<head>   
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>

	<div class="QuoteK" style="font-family:'黑体'; width:800px;">
        <div id="divPrint">
       	  
          
          <div class="" style="margin-top:20px; margin-left:250px;" ><font size="+2.5">发票声明书</font></div>
         
          <div class="" style="margin-top:10px; margin-left:205px;" ><font size="+2.5">Invoice Statement</font></div>
         
         
          <div class="quoteK_r" style="float:left; width:40%;" >
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:17px;"><b>1)收件人(Consignee):</b><br>
                <span style="font-size:15px;"> &nbsp;&nbsp;<?php echo $this->_tpl_vars['customer_name']; ?>
  </span>
                </div>
                
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;">&nbsp;&nbsp;<b>地址(Address):</b><br>
                <span style="font-size:15px;">&nbsp;&nbsp;<?php echo $this->_tpl_vars['address']; ?>
</span>
               
 
                </div>
                
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;">&nbsp;&nbsp;<b>公司名称(Company Name):</b><br>
                <span style="font-size:15px;">&nbsp;&nbsp;<?php echo $this->_tpl_vars['company']; ?>
 </span> 
                </div>
                
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;">&nbsp;&nbsp;<b>城市/地区号(Town/Area Code):</b><br>
                <span style="font-size:15px;">&nbsp;&nbsp;<?php echo $this->_tpl_vars['city']; ?>
/<?php echo $this->_tpl_vars['postal_code']; ?>
</span>  
                </div>
                
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;">&nbsp;&nbsp;<b>电话/传真(Phone/Fax):</b><br>
                <span style="font-size:15px;">&nbsp;&nbsp;<?php echo $this->_tpl_vars['phone']; ?>
</span> 
                </div>
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;">&nbsp;&nbsp;<b>州名/国家(State/Country):</b><br>
                <span style="font-size:15px;">&nbsp;&nbsp;<?php echo $this->_tpl_vars['state']; ?>
/<?php echo $this->_tpl_vars['country']; ?>
 </span>
                </div>
                 <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;"><b>2)运单号(Tracking Number)：</b><br>
                <span style="font-size:15px;">&nbsp;&nbsp;<?php echo $this->_tpl_vars['sale_detail_deliver']['shipping_number']; ?>
</span>
                </div>
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;"><b>原产国(Original)：</b><br>
                <span style="font-size:15px;">&nbsp;&nbsp;China</span><br />
                </div> 
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;">&nbsp;&nbsp;<b>贸易方式:一般贸易</b><br>
                
                </div>
               
           </div>
          <div class="quoteK_r" style="float:left; width:50%; margin-top:-5px;" >
          
          		 <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:17px;"><b>订单号(Order Number):</b><br>
                <span style="font-size:15px;">&nbsp;&nbsp;<?php echo $this->_tpl_vars['sale_detail_deliver']['invoice_number']; ?>
 </span> 
                </div>
          
          
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:17px;"><b>3)发件人(Consignee):</b><br>
                <span style="font-size:15px;">&nbsp;&nbsp;<?php echo $this->_tpl_vars['english_name']; ?>
 </span> 
                </div>
                
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;">&nbsp;&nbsp;<b>地址(Address):</b><br>
                <span style="font-size:15px;">&nbsp;&nbsp;Floor 4, No.13 Renxian Street<br> &nbsp;&nbsp;High Tech Zone <br>&nbsp;&nbsp;<br>&nbsp;&nbsp;Dalian,<br>&nbsp;&nbsp;China</span>
               </div>
                
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;">&nbsp;&nbsp;<b>公司名称(Company Name):</b><br>
                <span style="font-size:15px;">&nbsp;&nbsp;CSTOWN INC.</span>
                </div>
                
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;"><b>&nbsp;&nbsp;城市/地区号(Town/Area Code):</b><br>
                <span style="font-size:15px;">&nbsp;&nbsp;116000  
                </div>
                
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;">&nbsp;&nbsp;<b>电话/传真(Phone/Fax):</b><br>
                <span style="font-size:15px;">&nbsp;&nbsp;86-411 39769161  </span> 
                </div>
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;">&nbsp;&nbsp;<b>州名/国家(State/Country):</b><br>
                <span style="font-size:15px; ">&nbsp;&nbsp;Dalian, China</span> 
                </div>
                
                
                <div class="" style="margin-top:25px;width:100%; margin-left:10px;"><span style="font-size:15px;">&nbsp;&nbsp;<b>成交方式:FOB</b><br>
                
                </div>
                
           </div>
          
           
           <table cellspacing="0" class="sIE_l_03Tab" style="margin-top:20px;"  border="1" width="590px;">
                    	<tr>
                            <th width="1%">商品名称<br>Description of Goods</th>
                            
                            <th width="2%">物品税则编码<br>HS CODE</th>
                            <th width="2%">包裹件数<br>NO. of PKGS</th>
                            <th width="1%">净重<br>Net Weight (kg)</th>
                            <th width="1%">毛重<br>Gross Weight (kg)</th>
                            <th width="1%">数量<br>PSC</th>
                            <th width="1%">单价<br>Unit-Price</th>
                            <th width="1%">总价值<br>Total Value</th>
                        </tr>
                       
                            <tr>
                                <td><?php echo $this->_tpl_vars['sale_detail_deliver']['production_name']; ?>
<?php if ($this->_tpl_vars['sale_detail_deliver']['production_name'] == 'Imitation Semi-precious stones'): ?><br /><span >玻璃烫钻饰品</span><?php endif; ?></td>
                                
                                <td><?php echo $this->_tpl_vars['sale_detail_deliver']['production_code']; ?>
</td>
                                <td>
                                
                                <?php if ($this->_tpl_vars['sale_detail_deliver']['box'] == ""): ?>
                                     1
                                <?php else: ?>
                                     <?php echo $this->_tpl_vars['sale_detail_deliver']['box']; ?>

                                <?php endif; ?>
                                
                                </td>
                                <td><?php echo $this->_tpl_vars['net']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['gross']; ?>
</td>
                                
                                <td><input id="number" style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px; width:38px;' value="<?php echo $this->_tpl_vars['number']; ?>
" /></td>
                                <td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size="4" value="<?php echo $this->_tpl_vars['currency']; ?>
"><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' id="price_a" size="10" value="<?php echo $this->_tpl_vars['price']; ?>
" onkeyup="price11();"></td>
                                <td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size="4" value="<?php echo $this->_tpl_vars['currency']; ?>
"><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' id="num" size="10" value="<?php echo $this->_tpl_vars['goods_value']; ?>
"></td>
                            </tr>
                       
          </table>
    <input id="add_txu" class="noprint" value="添加T恤数据" type="button" style="cursor:pointer;" />
    <input id="add_heji" class="noprint" value="添加合计" type="button" style="cursor:pointer;" />
    <div style="float:left; width:100%; margin-top:20px;">
    <div style="margin-top:0px; margin-left:50px; float:left; width:300px;"><b>Shipper’s Signature:</b><br><?php echo $this->_tpl_vars['english_name']; ?>
</div>
    <div style="margin-left:50px; float:left;"><b>Date Exportation:</b><br><?php echo $this->_tpl_vars['time']; ?>
</div>
    </div>
    </div>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function()  
{
	$("#add_txu").click(function (){
		var table_value = "<tr> <td>cotton T-shirt<br/>T恤</td> <td>6109100021</td><td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='10' value='0'></td><td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='10' value='0'></td><td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='10' value='0'></td><td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='10' value='0'></td><td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='4' value='USD'><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='10' value='0'></td><td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='4' value='USD'><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='10' value='0'></td></tr>";
				
		$(".sIE_l_03Tab").append(table_value);   //为table追加一个tr(下拉项)
	});
	$("#add_heji").click(function (){
		var table_value = "<tr> <td>合计</td> <td></td><td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='10' value='0'></td><td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='10' value='0'></td><td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='10' value='0'></td><td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='10' value='0'></td><td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='4' value='USD'><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='10' value='0'></td><td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='4' value='USD'><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size='10' value='0'></td></tr>";
				
		$(".sIE_l_03Tab").append(table_value);   //为table追加一个tr(下拉项)
	});
});
</script>
<script type="text/javascript" language="javascript"> 
	function price11(){
		var price_a = $("#price_a").val();
		var number = $("#number").val();
		
		var num = price_a*number;
	    $("#num").val(num);
	}
</script>
<script type="text/javascript" language="javascript">  

var global_Html = "";   

function printme() {

        global_Html = document.body.innerHTML;       

      document.body.innerHTML = document.getElementById('divPrint').innerHTML;         　　　　　　　　　　　　　　     

       window.print();

        window.setTimeout(function () {

            document.body.innerHTML = global_Html;       

}, 1500);   

}
</script>
</html>