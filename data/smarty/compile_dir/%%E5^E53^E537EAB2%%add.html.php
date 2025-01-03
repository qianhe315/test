<?php /* Smarty version 2.6.22, created on 2014-07-31 10:14:13
         compiled from template_price/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
          
  	  <div class="sIEK" style="width:720px;">
<form method="post" id="template_price_info" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)" >       
      <div id="b_o_c_d_Div1" style="width:720px; float:left;">
      	<div style="width:100%; float:left;">
        	<font style="line-height:22px; margin-left:10px;">面积大于</font>
            <input type="text" id="big_area" name="big_area" value="" style="margin-left:8px;" />
            <font style=" line-height:22px;">平方英寸</font>
            <font style="line-height:22px; margin-left:20px;">面积小于等于</font>
            <input type="text" id="small_area" name="small_area" value="" />
            <font style="line-height:22px;">平方英寸</font>
            
        </div>
       
        <div style="width:720px; float:left; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
        	<font style="line-height:22px; margin-left:10px;">第一版</font>
            <font style="line-height:22px; margin-left:10px;">$</font>
            <input type="text" id="us1" name="us1" value="" />
            <font style="line-height:22px; margin-left:10px;">€</font>
            <input type="text" id="eu1" name="eu1" value="" />
            <font style="line-height:22px; margin-left:10px;">￥</font>
            <input type="text" id="rmb1" name="rmb1" value="" /><br /><br />
            <font style="line-height:22px; margin-left:10px;">第二版</font>
            <font style="line-height:22px; margin-left:10px;">$</font>
            <input type="text" id="us2" name="us2" value="" />
            <font style="line-height:22px; margin-left:10px;">€</font>
            <input type="text" id="eu2" name="eu2" value="" />
            <font style="line-height:22px; margin-left:10px;">￥</font>
            <input type="text" id="rmb2" name="rmb2" value="" /><br /><br />
            <font style="line-height:22px; margin-left:10px;">第三版</font>
            <font style="line-height:22px; margin-left:10px;">$</font>
            <input type="text" id="us3" name="us3" value="" />
            <font style="line-height:22px; margin-left:10px;">€</font>
            <input type="text" id="eu3" name="eu3" value="" />
            <font style="line-height:22px; margin-left:10px;">￥</font>
            <input type="text" id="rmb3" name="rmb3" value="" /><br /><br />
            <font style="line-height:22px; margin-left:10px;">第四版</font>
            <font style="line-height:22px; margin-left:10px;">$</font>
            <input type="text" id="us4" name="us4" value="" />
            <font style="line-height:22px; margin-left:10px;">€</font>
            <input type="text" id="eu4" name="eu4" value="" />
            <font style="line-height:22px; margin-left:10px;">￥</font>
            <input type="text" id="rmb4" name="rmb4" value="" /><br /><br />
            <font style="line-height:22px; margin-left:10px;">第五版</font>
            <font style="line-height:22px; margin-left:10px;">$</font>
            <input type="text" id="us5" name="us5" value="" />
            <font style="line-height:22px; margin-left:10px;">€</font>
            <input type="text" id="eu5" name="eu5" value="" />
            <font style="line-height:22px; margin-left:10px;">￥</font>
            <input type="text" id="rmb5" name="rmb5" value="" /><br /><br />
            <font id="error" style="line-height:22px; margin-left:10px; color:#F00; display:none;"></font>
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
<script type="text/javascript">
$("#submit_bulk").click(function () {
	var big_area = $("#big_area").val();
	var small_area = $("#small_area").val();
	var us1 = $("#us1").val();
	var eu1 = $("#eu1").val();
	var rmb1 = $("#rmb1").val();
	var us2 = $("#us2").val();
	var eu2 = $("#eu2").val();
	var rmb2 = $("#rmb2").val();
	var us3 = $("#us3").val();
	var eu3 = $("#eu3").val();
	var rmb3 = $("#rmb3").val();
	var us4 = $("#us4").val();
	var eu4 = $("#eu4").val();
	var rmb4 = $("#rmb4").val();
	var us5 = $("#us5").val();
	var eu5 = $("#eu5").val();
	var rmb5 = $("#rmb5").val();
	
	if(!isNumber_fp(big_area) || !isNumber_fp(small_area) || !isNumber_fp(us1) || !isNumber_fp(eu1) || !isNumber_fp(rmb1) || !isNumber_fp(us2) || !isNumber_fp(eu2) || !isNumber_fp(rmb2) || !isNumber_fp(us3) || !isNumber_fp(eu3) || !isNumber_fp(rmb3) || !isNumber_fp(us4) || !isNumber_fp(eu4) || !isNumber_fp(rmb4) || !isNumber_fp(us5) || !isNumber_fp(eu5) || !isNumber_fp(rmb5)){
		$("#error").css("display","block");
		$("#error").html("所有文本框必填,输入内容只能为正数,且不可包含空格");
	}
	else if(big_area == small_area){
		$("#error").css("display","block");
		$("#error").html("面积区间不可相同");
	}
	else{
		$("#template_price_info").submit();
	}
	
});
</script>