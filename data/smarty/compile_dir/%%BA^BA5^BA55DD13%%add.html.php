<?php /* Smarty version 2.6.22, created on 2015-08-25 09:23:44
         compiled from delivery_record/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" style="width:90%" layoutH="120" id="ttbjd_ysj">
          
  	  <div class="sIEK" style="width:720px;">
<form method="post" id="delivery_record_submit" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)" >       
      	<div style="width:100%; float:left; ">
        	
            <div style="width:176px; float:left; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;快递单号</div>
            <div style="width:176px; float:left; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;货品代码或业务代码</div>
        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
            <input name="shipping_number1" id="s_number_1" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" />
            <input name="goods_or_sale1" id="goods_or_sale1" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" onkeyup="goods_val1();" />
         <div id="sign1" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div> 
        <div id="order1" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>
        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
        	
            <input name="shipping_number2" id="s_number_2" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" />
            <input name="goods_or_sale2" id="goods_or_sale2" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" onkeyup="goods_val2();" />
           <div id="sign2" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div> 
           <div id="order2" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>
        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
        	
            <input name="shipping_number3" id="s_number_3" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" />
            <input name="goods_or_sale3" id="goods_or_sale3" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" onkeyup="goods_val3();" />
            <div id="sign3" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div> 
            <div id="order3" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>
        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
        	
            <input name="shipping_number4" id="s_number_4" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" />
            <input name="goods_or_sale4" id="goods_or_sale4" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" onkeyup="goods_val4();"/>
            <div id="sign4" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div> 
            <div id="order4" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>
        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
            <input name="shipping_number5" id="s_number_5" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" />
            <input name="goods_or_sale5" id="goods_or_sale5" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" onkeyup="goods_val5();"/>
            <div id="sign5" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div> 
            <div id="order5" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>
        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
            <input name="shipping_number6" id="s_number_6" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" />
            <input name="goods_or_sale6" id="goods_or_sale6" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" onkeyup="goods_val6();"/>
            <div id="sign6" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div> 
            <div id="order6" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>
        </div>  
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
            <input name="shipping_number7" id="s_number_7" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" />
            <input name="goods_or_sale7" id="goods_or_sale7" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;"  onkeyup="goods_val7();"/>
            <div id="sign7" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div> 
            <div id="order7" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>
        </div>  
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
            <input name="shipping_number8" id="s_number_8" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" />
            <input name="goods_or_sale8" id="goods_or_sale8" type="text" style="float:left; width:160px; margin-top:10px; margin-left:10px;" onkeyup="goods_val8();"/>
            <div id="sign8" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div> 
            <div id="order8" style="float:left; margin-top:10px; margin-left:10px; color:#F00;"></div>
        </div>                                   
</form>        
      </div>
          
      </div>
    </div>
<div class="sIE_l_02">
  <div class="button" style="margin-left:80%; margin-right:5px; padding-bottom:20px;">
    <div class="buttonContent">
      <button type="button" id="submit_fahuo" >确定</button>
    </div>
  </div>
  <div class="button">
    <div class="buttonContent">
      <button class="close">取消</button>
    </div>
  </div>
</div>
<script type="text/javascript" language="javascript">
function goods_val1(){
	 var goods_or_sale1 = $("#goods_or_sale1").val();
	 if(goods_or_sale1){
		 reg=/^[a-z,A-Z]+$/;
		 if(!reg.test(goods_or_sale1.substring(0,1))){
			 $("#sign1").html('错误！这条发货代码首位必须为字母！');
		 }else{
			 $("#sign1").html('');	 
		}
   }
}

function goods_val2(){
	 var goods_or_sale2 = $("#goods_or_sale2").val();
	 if(goods_or_sale2){
		 reg=/^[a-z,A-Z]+$/;
		 if(!reg.test(goods_or_sale2.substring(0,1))){
			 $("#sign2").html('错误！这条发货代码首位必须为字母！');
		 }else{
			 $("#sign2").html('');	 
		}
   }
}

function goods_val3(){
	 var goods_or_sale3 = $("#goods_or_sale3").val();
	 if(goods_or_sale3){
		 reg=/^[a-z,A-Z]+$/;
		 if(!reg.test(goods_or_sale3.substring(0,1))){
			 $("#sign3").html('错误！这条发货代码首位必须为字母！');
		 }else{
			 $("#sign3").html('');	 
		}
   }
}
function goods_val4(){
	 var goods_or_sale4 = $("#goods_or_sale4").val();
	 if(goods_or_sale4){
		 reg=/^[a-z,A-Z]+$/;
		 if(!reg.test(goods_or_sale4.substring(0,1))){
			 $("#sign4").html('错误！这条发货代码首位必须为字母！');
		 }else{
			 $("#sign4").html('');	 
		}
   }
}
function goods_val5(){
	 var goods_or_sale5 = $("#goods_or_sale5").val();
	 if(goods_or_sale5){
		 reg=/^[a-z,A-Z]+$/;
		 if(!reg.test(goods_or_sale5.substring(0,1))){
			 $("#sign5").html('错误！这条发货代码首位必须为字母！');
		 }else{
			 $("#sign5").html('');	 
		}
   }
}
function goods_val6(){
	 var goods_or_sale6 = $("#goods_or_sale6").val();
	 if(goods_or_sale6){
		 reg=/^[a-z,A-Z]+$/;
		 if(!reg.test(goods_or_sale6.substring(0,1))){
			 $("#sign6").html('错误！这条发货代码首位必须为字母！');
		 }else{
			 $("#sign6").html('');	 
		}
   }
}
function goods_val7(){
	 var goods_or_sale7 = $("#goods_or_sale7").val();
	 if(goods_or_sale7){
		 reg=/^[a-z,A-Z]+$/;
		 if(!reg.test(goods_or_sale7.substring(0,1))){
			 $("#sign7").html('错误！这条发货代码首位必须为字母！');
		 }else{
			 $("#sign7").html('');	 
		}
   }
}
function goods_val8(){
	 var goods_or_sale8 = $("#goods_or_sale8").val();
	 if(goods_or_sale8){
		 reg=/^[a-z,A-Z]+$/;
		 if(!reg.test(goods_or_sale8.substring(0,1))){
			 $("#sign8").html('错误！这条发货代码首位必须为字母！');
		 }else{
			 $("#sign8").html('');	 
		}
   }
}

$(document).ready(function()  
{
	 $("#submit_fahuo").click(function () {
		
		var s_number1=$("#s_number_1").val();
		var s_number2=$("#s_number_2").val();
		var s_number3=$("#s_number_3").val();
		var s_number4=$("#s_number_4").val();
		var s_number5=$("#s_number_5").val();
		var s_number6=$("#s_number_6").val();
		var s_number7=$("#s_number_7").val();
		var s_number8=$("#s_number_8").val();
		
		var goods_or_sale_1=$("#goods_or_sale1").val();
		var goods_or_sale_2=$("#goods_or_sale2").val();
		var goods_or_sale_3=$("#goods_or_sale3").val();
		var goods_or_sale_4=$("#goods_or_sale4").val();
		var goods_or_sale_5=$("#goods_or_sale5").val();
		var goods_or_sale_6=$("#goods_or_sale6").val();
		var goods_or_sale_7=$("#goods_or_sale7").val();
		var goods_or_sale_8=$("#goods_or_sale8").val();
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
		var all_len = arr.length;
		var noSame_len	=$.unique(arr).length;//去重复后的数组长度
		
		
		if(s_number1=="" && s_number2=="" && s_number3=="" && s_number4=="" && s_number5=="" && s_number6=="" && s_number7=="" && s_number8=="" ){
			alert("不能提交空")
		}else if((s_number1!="" && goods_or_sale_1=='') || (s_number1=="" && goods_or_sale_1!='')){
		
		    alert("第一条输入信息不完整")
	    }else if((s_number2!="" && goods_or_sale_2=='') || (s_number2=="" && goods_or_sale_2!='')){
		    alert("第二条输入信息不完整");
			
	    }else if((s_number3!="" && goods_or_sale_3=='') || (s_number3=="" && goods_or_sale_3!='')){
		    alert("第三条输入信息不完整");
			
	    }else if((s_number4!="" && goods_or_sale_4=='') || (s_number4=="" && goods_or_sale_4!='')){
		    alert("第四条输入信息不完整");
			
	    }else if((s_number5!="" && goods_or_sale_5=='') || (s_number5=="" && goods_or_sale_5!='')){
		    alert("第五条输入信息不完整");
			
	    }else if((s_number6!="" && goods_or_sale_6=='') || (s_number6=="" && goods_or_sale_6!='')){
			
		    alert("第六条输入信息不完整");
	    }else if((s_number7!="" && goods_or_sale_7=='') || (s_number7=="" && goods_or_sale_7!='')){
			
		    alert("第七条输入信息不完整");
	    }else if((s_number8!="" && goods_or_sale_8=='') || (s_number8=="" && goods_or_sale_8!='')){
			
		    alert("第八条输入信息不完整");
	    }else if(all_len!=noSame_len){
			alert('快递号有重复！请仔细检查！');
		}else if($("#sign1").html()!=''||$("#sign2").html()!=''||$("#sign3").html()!=''||$("#sign4").html()!=''||$("#sign5").html()!=''||$("#sign6").html()!=''||$("#sign7").html()!=''||$("#sign8").html()!=''){
			
			alert('请先修改错吴');
		}else{
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/delivery_record/check_number',
				data:{"s_number1":s_number1,"s_number2":s_number2,"s_number3":s_number3,"s_number4":s_number4,"s_number5":s_number5,"s_number6":s_number6,"s_number7":s_number7,"s_number8":s_number8},
				type:'post',
				dataType:'json',
				success:function(locals)
				{
					if(locals.err==0){
				  		$("#delivery_record_submit").submit();
				  	}else{
						alert(locals.text);
					}
				}								
		
			});
		
		}
		
		
		/*else{
			
			
			}*/
	});
	
});

</script>

