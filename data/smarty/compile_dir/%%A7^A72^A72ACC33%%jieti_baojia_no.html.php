<?php /* Smarty version 2.6.22, created on 2022-03-01 17:12:46
         compiled from create_quotation_invoice/jieti_baojia_no.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
 <form target="_blank" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/jieti_baojia_invoice_no" class="pageForm"  id="jietibaojia_add">
  <div class="stkInfEnter" style="width:98%; position:relative;" layoutH="100" id="ttbjd_ysj">
        <div class="sIEK" style="width:720px;">
          <div style="width:100%; float:left; ">
        	<div style="width:75px; float:left; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;数量</div>
            <div style="width:100px; float:left; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;报价系数</div>
            <div style="width:100px; float:left; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;单价</div>
            <div style="width:100px; float:left; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;版费</div>
            <div style="width:100px; float:left; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;运费</div>
            <div style="width:100px; float:left; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;总价</div>
          </div>
    
          <div id="OutgoingQuote_AddDiv1" class="sIE_l_01" style="width:200px; float:left;">
          	  <div style="float:right; height:52px; width:200px; margin-bottom:0px;">
                 <div style="width:800px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:10px;">
                      <input type="text"   id="number1" value="<?php echo $this->_tpl_vars['quotation_sheet']['pcs']; ?>
" style="width:80px; margin-top:2px; margin-left:10px;" class="sIE_No" name="number[]" onkeyup='number_edit(1);'/>
                      <input type="text"   id="quote_coefficient1" value="<?php echo $this->_tpl_vars['quotation_sheet']['quote_factor']; ?>
" style="width:80px; margin-top:2px; margin-left:10px;" class="sIE_No" name="quote_coefficient[]" onkeyup='quote_coefficient_edit(1)'/>
                      <input type="text"   id="price1" value="<?php echo $this->_tpl_vars['one']; ?>
<?php echo $this->_tpl_vars['price']; ?>
"style="width:80px; margin-top:2px; margin-left:10px;" class="sIE_No"  readonly="true"  name="price[]" onkeyup='price_edit(1)'/>
                      <input type="text"   id="version1" style="width:80px; margin-top:2px; margin-left:10px;" class="sIE_No" name="version[]" onkeyup='version_edit(1)'/>
                      <input type="text"   id="yunfei1" style="width:80px; margin-top:2px; margin-left:10px;" class="sIE_No" name="yunfei[]" value="15"onkeyup="yunfei_edit(1)"/>
                      <input type="text"   id="total_price1" value="<?php echo $this->_tpl_vars['one']; ?>
<?php echo $this->_tpl_vars['final_quote']; ?>
" style="width:80px; margin-top:2px; margin-left:10px;" class="sIE_No" name="total_price[]" readonly="true"  onkeyup="total_price_edit(1)"/>
                      <input type="button" id="OutgoingQuote_Add1"  class="quoteK_bottom01_button" style="margin-top:2px; margin-left:10px;"  value="添加" onclick="change_html(this)" />
                      
                 </div>
              </div>
          </div>
          
        </div>
        <input type="hidden" id="number" name="number1" value="<?php echo $this->_tpl_vars['quotation_sheet']['pcs']; ?>
"/>
        <input type="hidden" id="quote_coefficient" name="quote_coefficient1" value="<?php echo $this->_tpl_vars['quotation_sheet']['quote_factor']; ?>
"/>
        <input type="hidden" id="price" name="price1" value="<?php echo $this->_tpl_vars['one']; ?>
<?php echo $this->_tpl_vars['price']; ?>
"/>
        <input type="hidden" id="total_price" name="total_price1" value="<?php echo $this->_tpl_vars['one']; ?>
<?php echo $this->_tpl_vars['final_quote']; ?>
"/>
        <input type="hidden" id="id" name="id" value="1"/>
        <input type="hidden" id="whole_cost_price" name="whole_cost_price" value="<?php echo $this->_tpl_vars['whole_cost_price']; ?>
"/>
        <input type="hidden" id="one" name="one" value="<?php echo $this->_tpl_vars['one']; ?>
"/>
        <input type="hidden" id="mid" name="mid" value="<?php echo $this->_tpl_vars['quotation_sheet']['id']; ?>
"/>
 <script>
		function getDelOutgoingQuote_Add(k){
		    $(k).parent().remove();    
		}
		function change_html(k){
			
			var id=$("#id").val();
		    var ids=eval(id+"+"+1);
			$("#id").val(ids);
			var number = $("#number").val();
			var quote_coefficient = $("#quote_coefficient").val();
			var price = $("#price").val();
			var total_price = $("#total_price").val();
			$(k).val("删除");
			$(k).attr("onclick","getDelOutgoingQuote_Add(this)");
			$(k).removeAttr("id");
			$("#OutgoingQuote_AddDiv1").append("<div style=\" height:22px; width:690px; float:left; text-align:center; margin-bottom:10px;margin-top:5px; border-top:1px solid #CCC; padding-top:10px;\"><input type=\"text\" style=\"width:80px; margin_top:2px;margin-left:10px;\" class=\"sIE_No\"  name=\"number[]\"   value='"+number+"'  id=number"+ids+"  onkeyup='number_edit("+ids+")' /><input type=\"text\" style=\"width:80px;margin_top:2px;margin-left:10px;\" class=\"sIE_No\"  name=\"quote_coefficient[]\" value='"+quote_coefficient+"' id=quote_coefficient"+ids+"  onkeyup='quote_coefficient_edit("+ids+")'/><input type=\"text\" style=\"width:80px;margin_top:2px;margin-left:10px;\" class=\"sIE_No\"  readonly=\"true\" name=\"price[]\" value='"+price+"' id=price"+ids+"  onkeyup='price_edit("+ids+")'/><input type=\"text\" style=\"width:80px;margin_top:2px;margin-left:10px;\" class=\"sIE_No\"  name=\"version[]\" id=version"+ids+"  onkeyup='version_edit("+ids+")'/><input type=\"text\" style=\"width:80px;margin_top:2px;margin-left:10px;\" class=\"sIE_No\"  name=\"yunfei[]\" id=yunfei"+ids+"  value='"+15+"' onkeyup='yunfei_edit("+ids+")'/><input type=\"text\" style=\"width:80px;margin_top:2px;margin-left:10px;\" class=\"sIE_No\" readonly=\"true\"  name=\"total_price[]\"  value='"+total_price+"' id=total_price"+ids+"  onkeyup='total_price_edit("+ids+")'/><input type=\"button\" id=\"OutgoingQuote_Add\"  class=\"quoteK_bottom01_button\" style=\"margin-top:2px; margin-left:10px;\"  value=\"添加\" onclick=\"change_html(this)\" /></div>");
		}
	   function number_edit(k){
		    var  one= $("#one").val();
		    var  number= $("#number"+k).val();
			var c= /^\+?[1-9][0-9]*$/;
		    var b=c.test(number);
		    var quote_coefficient = $("#quote_coefficient"+k).val();
			var f= /^\d+(?=\.{0,1}\d+$|$)/;
		    var e=f.test(quote_coefficient);
			var price = $("#price"+k).val();
			var yunfei = $("#yunfei"+k).val();
			var version = $("#version"+k).val();
			if(yunfei==""){
				yunfei=0;
			}
			if(version==""){
				version=0;
			}
			var  y=f.test(yunfei);
			var  v=f.test(version);
			if(b==true  && number>0 && e==true && quote_coefficient>0 && y==true  && v==true){
				
				price=price.substr(1);
				total=eval(price+"*"+number);
				total_price=eval(yunfei+"+"+version+"+"+total).toFixed(2);
				$("#total_price"+k).val(one+total_price);
			}else{
				var d="";
				$("#total_price"+k).val(d);
			}
	   }
	   function quote_coefficient_edit(k){
		    var  one= $("#one").val();//货币符号
		    var  whole_cost_price= $("#whole_cost_price").val();//总计
		    var  number= $("#number"+k).val();
			var  c= /^\+?[1-9][0-9]*$/;
		    var  b=c.test(number);//数量
		    var  quote_coefficient = $("#quote_coefficient"+k).val();
			var  f= /^\d+(?=\.{0,1}\d+$|$)/;
		    var  e=f.test(quote_coefficient);
			var yunfei = $("#yunfei"+k).val();
			var version = $("#version"+k).val();
			if(yunfei==""){
				yunfei=0;
			}
			if(version==""){
				version=0;
			}
			var  y=f.test(yunfei);
			var  v=f.test(version);
			if(b==true  && number>0 && e==true && quote_coefficient>0 && y==true  && v==true){
				price=eval(whole_cost_price*quote_coefficient);
				
				if(one=="€"){
					price=(price/7).toFixed(2);
					$("#price"+k).val(one+price);
				}else if(one=="$"){
					price=eval(price+"/"+6).toFixed(2);
					$("#price"+k).val(one+price);
				}else if(one=="¥"){
					$("#price"+k).val(one+price);
				}
				total=eval(price+"*"+number).toFixed(2);
			    total_price=eval(total+"+"+yunfei+"+"+version).toFixed(2);
				$("#total_price"+k).val(one+total_price);
			}else{
				var d="";
				$("#price"+k).val(d);
				$("#total_price"+k).val(d);
			}
	   }
	   function version_edit(k){
		   var  one= $("#one").val();//货币符号
		    var  whole_cost_price= $("#whole_cost_price").val();//总计
		    var  number= $("#number"+k).val();
			var  c= /^\+?[1-9][0-9]*$/;
		    var  b=c.test(number);//数量
		    var  quote_coefficient = $("#quote_coefficient"+k).val();
			var  f= /^\d+(?=\.{0,1}\d+$|$)/;
		    var  e=f.test(quote_coefficient);
			var yunfei = $("#yunfei"+k).val();
			var version = $("#version"+k).val();
			var price = $("#price"+k).val();
			  if(yunfei==""){
				yunfei=0;
			}
			if(version==""){
				version=0;
			}
			var  y=f.test(yunfei);
			var  v=f.test(version);
			 if(b==true  && number>0 && e==true && quote_coefficient>0 && y==true  && v==true){
				price=price.substr(1);
				total=eval(price+"*"+number).toFixed(2);
			    total_price=eval(total+"+"+yunfei+"+"+version).toFixed(2);
				$("#total_price"+k).val(one+total_price);
			}else{
				var d="";
				$("#total_price"+k).val(d);
			}
	   }
	   function yunfei_edit(k){
		     var  one= $("#one").val();//货币符号
		    var  whole_cost_price= $("#whole_cost_price").val();//总计
		    var  number= $("#number"+k).val();
			var  c= /^\+?[1-9][0-9]*$/;
		    var  b=c.test(number);//数量
		    var  quote_coefficient = $("#quote_coefficient"+k).val();
			var  f= /^\d+(?=\.{0,1}\d+$|$)/;
		    var  e=f.test(quote_coefficient);
			var yunfei = $("#yunfei"+k).val();
			var version = $("#version"+k).val();
			var price = $("#price"+k).val();
			if(yunfei==""){
				yunfei=0;
			}
			if(version==""){
				version=0;
			}
			var  y=f.test(yunfei);
			var  v=f.test(version);
			if(b==true  && number>0 && e==true && quote_coefficient>0 && y==true  && v==true){
				price=price.substr(1);
				total=eval(price+"*"+number).toFixed(2);
			    total_price=eval(total+"+"+yunfei+"+"+version).toFixed(2);
				$("#total_price"+k).val(one+total_price);
			}else{
				var d="";
				$("#total_price"+k).val(d);
			}
	   }
</script> 
</div>
 <div class="formBar">
    <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
                <button type="submit" id="submit_jieti" >确认</button>
            </div>
          </div>
        </li>
      </ul>
</div>
</form>
 

   
 

<!--<script type="text/javascript">
$(document).ready(function()  
{
	 $("#submit_jieti").click(function () {
		 $("#jietibaojia_add").submit();
		
	 });
 });
	//材料联动
   
</script>-->

<!-- {/literal} -->