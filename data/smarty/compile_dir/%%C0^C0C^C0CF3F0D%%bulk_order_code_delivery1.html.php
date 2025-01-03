<?php /* Smarty version 2.6.22, created on 2023-02-14 10:27:32
         compiled from sale_detail/bulk_order_code_delivery1.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
          
  	  <div class="sIEK" style="width:720px;">
<form method="post" id="bulk_order_code_delivery_b" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)" >       
      <div id="b_o_c_d_Div1" style="width:720px; float:left;">
      	<div style="width:100%; float:left;">
            <div style="width:176px; float:left; font-weight:bold;">快递单号</div>
        	<div style="width:176px; float:left; margin-left:10px; font-weight:bold;">发货代码</div>
            
        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
           
            <input name="shipping_number1" id="s_number1" type="text" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="customer_num_code(1);"/>
            <input name="textarea_1" id="order_1" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="goods_value(1);"/>
           <input name="s_company1" id="s_company1"  class="" value="" type="hidden" style="float:left; width:80px; text-align:left; float:left; margin-top:1px; margin-left:10px;" readonly="readonly" />

        <div id="err1" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
        <div id="sign1" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
        <div id="order1" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>
        

        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
            <input name="shipping_number2" id="s_number2" type="text" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="customer_num_code(2);"/>
         	<input name="textarea_2" id="order_2" style="float:left; width:160px; margin-top:1px; margin-left:10px;"  onkeyup="goods_value(2);"/>
           
            <input name="s_company2" id="s_company2"  value="" type="hidden" style="float:left; width:80px; text-align:left; float:left; margin-top:1px; margin-left:10px;"readonly="ture" />

            <div id="err2" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="sign2" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="order2" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>

        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
            <input name="shipping_number3" id="s_number3" type="text" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="customer_num_code(3);" />
        	<input name="textarea_3" id="order_3" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="goods_value(3);"/>
            <input name="s_company3" id="s_company3"  value="" type="hidden" style="float:left; width:80px; text-align:left; float:left; margin-top:1px; margin-left:10px;" readonly="ture"/>

            <div id="err3" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="sign3" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="order3" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>

        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
           <input name="shipping_number4" id="s_number4" type="text" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="customer_num_code(4);"/>
         	<input name="textarea_4" id="order_4" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="goods_value(4);"/>
           
            <input name="s_company4" id="s_company4"  value="" type="hidden" style="float:left; width:80px; text-align:left; float:left; margin-top:1px; margin-left:10px;" readonly="ture"/>

            <div id="err4" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="sign4" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="order4" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>

        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
            <input name="shipping_number5" id="s_number5" type="text" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="customer_num_code(5);"/>
          	<input name="textarea_5" id="order_5" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="goods_value(5);">
            
            <input name="s_company5" id="s_company5"  value="" type="hidden" style="float:left; width:80px; text-align:left; float:left; margin-top:1px; margin-left:10px;" readonly="ture"/>

            <div id="err5" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="sign5" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="order5" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>

        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
           <input name="shipping_number6" id="s_number6" type="text" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="customer_num_code(6);"/>
         	<input name="textarea_6" id="order_6" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="goods_value(6);"/>
           
            <input name="s_company6" id="s_company6"  value="" type="hidden" style="float:left; width:80px; text-align:left; float:left; margin-top:1px; margin-left:10px;" readonly="ture"/>

            <div id="err6" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="sign6" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="order6" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>

        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
           <input name="shipping_number7" id="s_number7" type="text" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="customer_num_code(7);"/>
         	<input name="textarea_7" id="order_7" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="goods_value(7);"/>
           
            <input name="s_company7" id="s_company7"  value="" type="hidden" style="float:left; width:80px; text-align:left; float:left; margin-top:1px; margin-left:10px;" readonly="ture"/>

            <div id="err7" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="sign7" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="order7" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>

        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
           <input name="shipping_number8" id="s_number8" type="text" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="customer_num_code(8);"/>
         	<input name="textarea_8" id="order_8" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="goods_value(8);"/>
           
            <input name="s_company8" id="s_company8"  value="" type="hidden" style="float:left; width:80px; text-align:left; float:left; margin-top:1px; margin-left:10px;" readonly="ture"/>

            <div id="err8" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="sign8" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="order8" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>

        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
           <input name="shipping_number9" id="s_number9" type="text" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="customer_num_code(9);"/>
         	<input name="textarea_9" id="order_9" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="goods_value(9);"/>
           
            <input name="s_company9" id="s_company9"  value="" type="hidden" style="float:left; width:80px; text-align:left; float:left; margin-top:1px; margin-left:10px;" readonly="ture"/>

            <div id="err9" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="sign9" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="order9" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>

        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
           <input name="shipping_number10" id="s_number10" type="text" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="customer_num_code(10);"/>
         	<input name="textarea_10" id="order_10" style="float:left; width:160px; margin-top:1px; margin-left:10px;" onkeyup="goods_value(10);"/>
           
            <input name="s_company10" id="s_company10"  value="" type="hidden" style="float:left; width:80px; text-align:left; float:left; margin-top:1px; margin-left:10px;" readonly="ture"/>

            <div id="err10" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="sign10" style="float:left; margin-top:10px; margin-left:10px; color:#F00; "></div>
            <div id="order10" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>

        </div>                
</form>        
      </div>
          
      </div>
    </div>
</div>
<div class="sIE_l_02">
  <div class="button" style="margin-left:80%; margin-right:5px; padding-bottom:20px;">
    <div class="buttonContent">
      <button type="button" id="submit_bulk" >确定</button>
    </div>
  </div>
  <div class="button">
    <div class="buttonContent">
      <button class="close">取消</button>
    </div>
  </div>
</div>
<script type="text/javascript" language="javascript">

function customer_num_code(n){
	 var s_number = $("#s_number"+n).val();
	 if(s_number){
		 $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/find_shipping_company',//通过Ajax取数据的目标页面
				data:{"s_number":s_number,"n":n},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{   
					if(locals.err==0){
						$("#err"+n).html(locals.text);
					}else{
						$("#err"+n).html('');
						$("#s_company"+n).val(locals.text);
					}
					
				}								
		 });
   }
}

function goods_value(n){
	 var order = $("#order_"+n).val();
	 if(order){
		 reg=/^[a-z,A-Z]+$/;
		 if(!reg.test(order.substring(0,1))){
			 $("#sign"+n).html('错误！这条发货代码首位必须为字母！');
		 }else{
			 $("#sign"+n).html('');	 
		}
   }
}


</script>
<script type="text/javascript" language="javascript">
$(document).ready(function(){
    $("#submit_bulk").click(function(){
		
		var order_1 = $("#order_1").val();
		var order_2 = $("#order_2").val();
		var order_3 = $("#order_3").val();
		var order_4 = $("#order_4").val();
		var order_5 = $("#order_5").val();
		var order_6 = $("#order_6").val();
		var order_7 = $("#order_7").val();
		var order_8 = $("#order_8").val();
		var order_9 = $("#order_9").val();
		var order_10 = $("#order_10").val();
		
		var s_company1 = $("#s_company1").val();
		var s_company2 = $("#s_company2").val();
		var s_company3 = $("#s_company3").val();
		var s_company4 = $("#s_company4").val();
		var s_company5 = $("#s_company5").val();
		var s_company6 = $("#s_company6").val();
		var s_company7 = $("#s_company7").val();
		var s_company8 = $("#s_company8").val();
		var s_company9 = $("#s_company9").val();
		var s_company10 = $("#s_company10").val();
		
		var s_number1 = $("#s_number1").val();
		var s_number2 = $("#s_number2").val();
		var s_number3 = $("#s_number3").val();
		var s_number4 = $("#s_number4").val();
		var s_number5 = $("#s_number5").val();
		var s_number6 = $("#s_number6").val();
		var s_number7 = $("#s_number7").val();
		var s_number8 = $("#s_number8").val();
		var s_number9 = $("#s_number9").val();
		var s_number10 = $("#s_number10").val();
			
		var arr	= new Array();
		if(s_number1!=''){
			arr.push(s_number1);
		}
		if(s_number2!=''){
			arr.push(s_number2);
		}
		if(s_number3!=''){
			arr.push(s_number3);
		}
		if(s_number4!=''){
			arr.push(s_number4);
		}
		if(s_number5!=''){
			arr.push(s_number5);
		}
		if(s_number6!=''){
			arr.push(s_number6);
		}
		if(s_number7!=''){
			arr.push(s_number7);
		}
		if(s_number8!=''){
			arr.push(s_number8);
		}
		if(s_number9!=''){
			arr.push(s_number9);
		}
		if(s_number10!=''){
			arr.push(s_number10);
		}
		var all_len = arr.length;
		var noSame_len	=$.unique(arr).length;


		if(order_1=="" && order_2=="" && order_3=="" && order_4=="" && order_5=="" && order_6=="" && order_7=="" && order_8=="" && order_9=="" && order_10==""  && s_number1=="" && s_number2=="" && s_number3=="" && s_number4=="" && s_number5=="" && s_number6=="" && s_number7=="" && s_number8=="" && s_number9=="" && s_number10==""){
			alert("不能提交空！");
		}else if(order_1!="" && s_number1==""){
			$("#order1").html(" 这条快递号不能为空！ ");
		}else if(order_2!="" && s_number2==""){
			$("#order2").html(" 这条快递号不能为空！ ");
		}else if(order_3!="" && s_number3==""){
			$("#order3").html(" 这条快递号不能为空！ ");
		}else if(order_4!="" && s_number4==""){
			$("#order4").html(" 这条快递号不能为空！ ");
		}else if(order_5!="" && s_number5==""){
			$("#order5").html(" 这条快递号不能为空！ ");
		}else if(order_6!="" && s_number6==""){
			$("#order6").html(" 这条快递号不能为空！ ");
		}else if(order_7!="" && s_number7==""){
			$("#order7").html(" 这条快递号不能为空！ ");
		}else if(order_8!="" && s_number8==""){
			$("#order8").html(" 这条快递号不能为空！ ");
		}else if(order_9!="" && s_number9==""){
			$("#order9").html(" 这条快递号不能为空！ ");
		}else if(order_10!="" && s_number10==""){
			$("#order10").html(" 这条快递号不能为空！ ");
		}else if(order_1=="" && s_number1!=""){
			$("#order1").html(" 这条发货代码不能为空！ ");
		}else if(order_2=="" && s_number2!=""){
			$("#order2").html(" 这条发货代码不能为空！ ");
		}else if(order_3=="" && s_number3!=""){
			$("#order3").html(" 这条发货代码不能为空！ ");
		}else if(order_4=="" && s_number4!=""){
			$("#order4").html(" 这条发货代码不能为空！ ");
		}else if(order_5=="" && s_number5!=""){
			$("#order5").html(" 这条发货代码不能为空！ ");
		}else if(order_6=="" && s_number6!=""){
			$("#order6").html(" 这条发货代码不能为空！ ");
		}else if(order_7=="" && s_number7!=""){
			$("#order7").html(" 这条发货代码不能为空！ ");
		}else if(order_8=="" && s_number8!=""){
			$("#order8").html(" 这条发货代码不能为空！ ");
		}else if(order_9=="" && s_number9!=""){
			$("#order9").html(" 这条发货代码不能为空！ ");
		}else if(order_10=="" && s_number10!=""){
			$("#order10").html(" 这条发货代码不能为空！ ");
		}
		else if($("#err1").html()!=''||$("#err2").html()!=''||$("#err3").html()!=''||$("#err4").html()!=''||$("#err5").html()!=''||$("#err6").html()!=''||$("#err7").html()!=''||$("#err8").html()!=''||$("#err9").html()!=''||$("#err10").html()!=''){
			
			alert('请先修改错吴');
		}
		else if($("#sign1").html()!=''||$("#sign2").html()!=''||$("#sign3").html()!=''||$("#sign4").html()!=''||$("#sign5").html()!=''||$("#sign6").html()!=''||$("#sign7").html()!=''||$("#sign8").html()!=''||$("#sign9").html()!=''||$("#sign10").html()!=''){
			
			alert('请先修改错吴');
		}else if(all_len!=noSame_len){
			alert('快递号有重复！请仔细检查！');
		}else{

		$("#bulk_order_code_delivery_b").submit();

}
	
   });
});

</script>  
<script type="text/javascript" language="javascript">
 		 
function getDelOutgoingQuote_Add2(k){

  $(k).parent().remove();    

}

function change_html2(k){
  $(k).val("删除");
  $(k).attr("onclick","getDelOutgoingQuote_Add2(this)");
  $(k).removeAttr("id");
  
  $("#b_o_c_d_Div1").append("<div style=\"width:720px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;\"><textarea name=\"textarea[]\" class=\"order_num\" style=\"width:300px; height:80px; float:left;\"></textarea><select name=\"\" style=\"float:left; margin-left:10px; margin-top:30px;\"><option>--请选择--</option><option>DHL</option><option>EMS</option></select><input type=\"text\" style=\"float:left; width:80px; text-align:right; float:left; margin-top:30px; margin-left:10px;\" /><font style=\"float:left; line-height:20px; float:left; margin-top:30px; margin-left:3px;\">/kg</font><input type=\"text\" style=\"float:left; width:160px; margin-top:30px; margin-left:10px;\" /><input type=\"button\" id=\"OutgoingQuote_Add\" class=\"quoteK_bottom01_button\" style=\"margin:0px; float:left; margin-left:10px; margin-top:28px;\" value=\"添加\" onclick=\"change_html2(this)\" /></div>");
  
}
</script> 