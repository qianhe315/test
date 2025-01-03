<?php /* Smarty version 2.6.22, created on 2017-06-06 16:24:01
         compiled from sale_detail/create_invoice_zhuangxiang.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>

<head>
<meta charset="UTF-8">
<title >生成装箱单</title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>

</head>

<body>
	<div class="QuoteK" style="font-family:'黑体'; width:800px;">
    	
        <div style="float:left;">
        
       	  <div class="quoteK_l" style="float:left; margin-left:70px; width:auto;">
       	    <div class="quoteK_l_logo" id="chart"><img src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/small_logo.png" alt="cstown" /></div>
          </div>
          <div class="quoteK_r" style="float:left; width:300px; margin-left:243px;" >
       	    <div class="" style=" float:left; margin-top:4px;" ><span style="font-size:24px;">CS</span><font color="#FF6600" size="+2">T</font><span style="font-size:24px;">OWN  INC.</span></div>
       	  </div>
          <div class="quoteK_r" style="float:right; margin-right:210px; width:auto;"  >
       	    <div class=""><font size="+1">www.cstown.com</font></div>
       	  </div>
          <div style="margin-top:65px;width:550px; margin-left:55px;">
            <hr> 
          </div>
          <div class="quoteK_r" style="float:left; width:90%;" >
       	    <div class="" style="margin-top:20px;width:100%;  margin-left:205px;"><span style="font-size:35px;"><b>PACKING LIST</b></span></div>
          </div>
          <div class="quoteK_r"  style="float:left; width:90%; margin-top:40px; margin-left:80px;" >
       	    <div class="" style=""><span style="font-size:15px; float:left;"><b>INV.NO.:<?php echo $this->_tpl_vars['invoice_number']; ?>
</b></span><span style="font-size:15px; float:left; margin-left:110px;"><b>Date:<?php echo $this->_tpl_vars['date']; ?>
</b></span></div>
          </div>
          <div class="sIE_l_03Tab" style="margin-top:150px;">
        
                	<table class=""  width="650" border="1" cellspacing="0" cellpadding="0" style=" border-top:solid 5px #000;">
                    	 
                         
                         <tr height="35">
                           <td rowspan="2">唛头<br>
                           MARKS </td>
                           <td rowspan="2">品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名<br>DESCRIPTION</td>
                           <td rowspan="2">数量<br>QTY-PCS</td>
                           <td rowspan="2">箱&nbsp;&nbsp;&nbsp;数<br>CTNS</td>
                           <td colspan="2">重&nbsp;&nbsp;&nbsp;量<br>WEIGHT- KGS</td>
                           <td rowspan="2">箱  规<br>Dimension of <br>carton-CM </td>
                           <td rowspan="2">体   积<br>VOLUME-CBM</td>
                            
                         </tr>
                         <tr height="35">
                             <td>总净重<br>Net</td>
                             <td>总毛重<br>Gross</td>
                         </tr>
                         <tr height="70">
                            <td>N/M </td>
                            <td>HOT-FIX GLASS <br>IMITATION <br>SEMI-PRECIOUS <br>STONES</td>
                            <?php if ($this->_tpl_vars['number'] != ""): ?>
                              <td><?php echo $this->_tpl_vars['number']; ?>
pcs</td>
                            <?php else: ?>
                              <td>&nbsp;</td>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['sale_detail_deliver']['box'] != ""): ?>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['box']; ?>
 </td>
                            <?php else: ?>
                              <td>&nbsp;</td>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['sale_detail_deliver']['box'] == '1'): ?>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['net1']; ?>
kg </td>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['gross1']; ?>
kg </td>
                              <td><?php echo $this->_tpl_vars['specifications_1']; ?>
 </td>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['volume1']; ?>
M*m </td>
                            
                            <?php elseif ($this->_tpl_vars['sale_detail_deliver']['box'] == '2'): ?>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['net1']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['net2']; ?>
kg </td>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['gross1']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['gross2']; ?>
kg </td>
                              <td><?php echo $this->_tpl_vars['specifications_1']; ?>
<br><?php echo $this->_tpl_vars['specifications_2']; ?>
 </td>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['volume1']; ?>
M*m<br><?php echo $this->_tpl_vars['sale_detail_deliver']['volume2']; ?>
M*m </td>
                            <?php elseif ($this->_tpl_vars['sale_detail_deliver']['box'] == '3'): ?>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['net1']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['net2']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['net3']; ?>
kg </td>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['gross1']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['gross2']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['gross3']; ?>
kg </td>
                              <td><?php echo $this->_tpl_vars['specifications_1']; ?>
<br><?php echo $this->_tpl_vars['specifications_2']; ?>
<br><?php echo $this->_tpl_vars['specifications_3']; ?>
 </td>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['volume1']; ?>
M*m<br><?php echo $this->_tpl_vars['sale_detail_deliver']['volume2']; ?>
M*m<br><?php echo $this->_tpl_vars['sale_detail_deliver']['volume3']; ?>
M*m </td>
                            <?php elseif ($this->_tpl_vars['sale_detail_deliver']['box'] == '4'): ?>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['net1']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['net2']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['net3']; ?>
<br><?php echo $this->_tpl_vars['sale_detail_deliver']['net4']; ?>
kg </td>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['gross1']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['gross2']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['gross3']; ?>
<br><?php echo $this->_tpl_vars['sale_detail_deliver']['gross4']; ?>
kg</td>
                              <td><?php echo $this->_tpl_vars['specifications_1']; ?>
<br><?php echo $this->_tpl_vars['specifications_2']; ?>
<br><?php echo $this->_tpl_vars['specifications_3']; ?>
<br><?php echo $this->_tpl_vars['specifications_4']; ?>
 </td>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['volume1']; ?>
M*m<br><?php echo $this->_tpl_vars['sale_detail_deliver']['volume2']; ?>
M*m<br><?php echo $this->_tpl_vars['sale_detail_deliver']['volume3']; ?>
M*m<br><?php echo $this->_tpl_vars['sale_detail_deliver']['volume4']; ?>
M*m </td>
                            <?php elseif ($this->_tpl_vars['sale_detail_deliver']['box'] == '5'): ?>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['net1']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['net2']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['net3']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['net4']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['net5']; ?>
kg </td>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['gross1']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['gross2']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['gross3']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['gross4']; ?>
kg<br><?php echo $this->_tpl_vars['sale_detail_deliver']['gross5']; ?>
kg </td>
                              <td><?php echo $this->_tpl_vars['specifications_1']; ?>
<br><?php echo $this->_tpl_vars['specifications_2']; ?>
<br><?php echo $this->_tpl_vars['specifications_3']; ?>
<br><?php echo $this->_tpl_vars['specifications_4']; ?>
<br><?php echo $this->_tpl_vars['specifications_5']; ?>
 </td>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['volume1']; ?>
M*m<br><?php echo $this->_tpl_vars['sale_detail_deliver']['volume2']; ?>
M*m<br><?php echo $this->_tpl_vars['sale_detail_deliver']['volume3']; ?>
M*m<br><?php echo $this->_tpl_vars['sale_detail_deliver']['volume4']; ?>
M*m<br><?php echo $this->_tpl_vars['sale_detail_deliver']['volume5']; ?>
M*m</td>
                              <?php else: ?>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            <?php endif; ?>
                         </tr>
                         <tr height="70">
                            <td>&nbsp;</td>
                            <td>TOTAL: </td>
                            <?php if ($this->_tpl_vars['number'] != ""): ?>
                              <td><?php echo $this->_tpl_vars['number']; ?>
pcs </td>
                            <?php else: ?>
                              <td>&nbsp;</td>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['sale_detail_deliver']['box'] != ""): ?>
                              <td><?php echo $this->_tpl_vars['sale_detail_deliver']['box']; ?>
CTN </td>
                            <?php else: ?>
                              <td>&nbsp;</td>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['nets'] != ""): ?>
                              <td><?php echo $this->_tpl_vars['nets']; ?>
KG </td>
                            <?php else: ?>
                              <td>&nbsp;</td>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['nets'] != ""): ?>
                              <td><?php echo $this->_tpl_vars['gross']; ?>
KG</td>
                            <?php else: ?>
                              <td>&nbsp;</td>
                            <?php endif; ?>
                            <td>&nbsp;</td>
                            <?php if ($this->_tpl_vars['nets'] != ""): ?>
                              <td>CBM<?php echo $this->_tpl_vars['volume']; ?>
 </td>
                            <?php else: ?>
                              <td>&nbsp;</td>
                            <?php endif; ?>
                         </tr>
                    </table>
               </div>
               <div class="quoteK_r"  style="float:left; width:90%; margin-top:200px; margin-left:50px;" >
       	         <div style="" class=""><span style="font-size:15px; float:left;">Country of Origin:  The People’s Republic of China</span></div>
                 <div style="margin-top:20px;width:235px; margin-left:142px;">
                     <hr> 
                 </div>  
               </div>  
               <div class="quoteK_r"  style="float:left; width:90%; margin-top:40px; margin-left:420px;" >
       	         <div style="" class=""><span style="font-size:15px; float:left;">Signature:</span></div>
                 <div style="margin-top:15px;width:120px; margin-left:80px;">
                     <hr> 
                 </div>  
              </div> 
              <div style="margin-top:490px;width:685px; margin-left:-15px;">
                 <hr> 
              </div>
              <div class="quoteK_r"  style="float:left; width:90%; margin-top:0px; margin-left:0px;" >
       	         <div style="" class=""><span style="font-size:10.5px; float:left; color:#666">Head Office: Floor 4, No.13 Renxin Street High Tech Zone,Dalian China 116085 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tel:86-411-39769170 Fax:86-411-39769355</span></div>
                 
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