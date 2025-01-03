<?php /* Smarty version 2.6.22, created on 2015-04-16 09:20:42
         compiled from sale_detail/bulk_order_code_delivery.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
          
  	  <div class="sIEK" style="width:720px;">
<form method="post" id="bulk_order_code_delivery_a" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)" >       
      <div id="b_o_c_d_Div1" style="width:720px; float:left;">
      	<div style="width:100%; float:left;">
        	<div style="width:320px; float:left; font-weight:bold;">订单</div>
        </div>
        <div style="width:720px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
        	<textarea name="textarea_1" id="order_1" style="width:600px; height:80px; float:left;"></textarea>文本框一
            <div id="order1" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
            <div id="order11" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
        </div>
        <div style="width:720px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
        	<textarea name="textarea_2" id="order_2" style="width:600px; height:80px; float:left;"></textarea>文本框二
            <div id="order2" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
            <div id="order22" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
        </div>
        <div style="width:720px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
        	<textarea name="textarea_3" id="order_3" style="width:600px; height:80px; float:left;"></textarea>文本框三
            <div id="order3" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
            <div id="order33" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
        </div>
        <div style="width:720px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
        	<textarea name="textarea_4" id="order_4" style="width:600px; height:80px; float:left;"></textarea>文本框四
            <div id="order4" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
            <div id="order44" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
        </div>
        <div style="width:720px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
        	<textarea name="textarea_5" id="order_5" style="width:600px; height:80px; float:left;"></textarea>文本框五
            <div id="order5" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
            <div id="order55" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
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
$(document).ready(function(){
    $("#submit_bulk").click(function(){

		var order_1 = $("#order_1").val();
		var order_2 = $("#order_2").val();
		var order_3 = $("#order_3").val();
		var order_4 = $("#order_4").val();
		var order_5 = $("#order_5").val();
	

		if(order_1=="" && order_2=="" && order_3=="" && order_4=="" && order_5==""){
			alert("不能提交空！");
		}else{
			
			$("#bulk_order_code_delivery_a").submit();
			
/*			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/bulk_order_code_delivery_ajax',
				data:{"order_1":order_1,"order_2":order_2,"order_3":order_3,"order_4":order_4,"order_5":order_5},
				type:'post',
				dataType:'text',
				success:function(locals)
				{
					var a= "";
					var b= "";
					var c= "";
					var d= "";
					var e= "";
					locals=locals.split("|");
					if(locals[0]==1){
						$("#order11").html("订单号重复！ ");
					}else if(locals[5]==1){
						$("#order11").html("发票不存在！ ");
					}else if(locals[10]==1){
						$("#order11").html("不在销售明细！ ");
					}else if(locals[15]==1){
						$("#order11").html("订单未确认收货！ ");
					}else{
						var $a = 1;
					}
					
					
					if(locals[1]==1){
						$("#order22").html("订单号重复！ ");
					}else if(locals[6]==1){
						$("#order22").html("发票不存在！ ");
					}else if(locals[11]==1){
						$("#order22").html("不在销售明细！ ");
					}else if(locals[16]==1){
						$("#order22").html("订单未确认收货！ ");
					}else{
						var $b = 1;
					}
					
					if(locals[2]==1){
						$("#order33").html("订单号重复！ ");
					}else if(locals[7]==1){
						$("#order33").html("发票不存在！ ");
					}else if(locals[12]==1){
						$("#order33").html("不在销售明细！ ");
					}else if(locals[17]==1){
						$("#order33").html("订单未确认收货！ ");
					}else{
						var $c = 1;
					}
					
					if(locals[3]==1){
						$("#order44").html("订单号重复！ ");
					}else if(locals[8]==1){
						$("#order44").html("发票不存在！ ");
					}else if(locals[13]==1){
						$("#order44").html("不在销售明细！ ");
					}else if(locals[18]==1){
						$("#order44").html("订单未确认收货！ ");
					}else{
						var $d = 1;
					}
					
					if(locals[4]==1){
						$("#order55").html("订单号重复！ ");
					}else if(locals[9]==1){
						$("#order55").html("发票不存在！ ");
					}else if(locals[14]==1){
						$("#order55").html("不在销售明细！ ");
					}else if(locals[19]==1){
						$("#order55").html("订单未确认收货！ ");
					}else{
						var $e = 1;
					}
		
					if($a==1 && $b==1 && $c==1 && $d==1 && $e==1){
						$("#bulk_order_code_delivery_a").submit();
					}else{
									
					}
				}								
				
			});*/
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