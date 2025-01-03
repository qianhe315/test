<?php /* Smarty version 2.6.22, created on 2017-06-14 11:47:20
         compiled from t_shirt_quotation/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
   <div class="stkInfEnter" style="width:102%;margin-left:-100px; overflow-x:hidden;" layoutH="100"  id="ttbjd_ysj" >
    	<div class="sIE_title" style="margin-left:-10px;">T恤直喷报价</div>
    	  	<div class="sIEK" style="width:1480px;">
            <form method="post" style="float:left;" name="demo" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form_add">
            <input type="hidden" name="submit_value" id="submit_value" value="" />
        <div class="sIE_l" style="width:200px; margin-left:110px; margin-top:25px;">
        <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">业务员:</div>
            <input type="text" class="" style="width:100px;height:19px;" id="Saleman_name" name="saleman_name" value="<?php echo $this->_tpl_vars['user_name']; ?>
" readonly/>
         </div>

         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">客户代码:</div>
          <input type="text" style="width:100px;height:19px;" id="Customer_code" name="Customer_code" value="" class="sIE_No" onkeyup="customer_num_code();"/>
         </div>         
         
         <div id="Customer_code_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">客户名:</div>
          <input type="text" style="width:100px;height:19px;"  id="Customer_name" name="Customer_name"  value="" class="" readonly/>
         </div>
          <div id="Customer_name_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">公司:</div>
          <input type="text" style="width:100px;height:19px;"  id="Customer_company" name="Customer_company" value="" class="" readonly />
         </div>
         
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">最终报价:</div>
          <input type="text" style="width:100px;height:19px;"  id="Final_quote" name="Final_quote"  value="0" class=""  readonly/>
         </div>         
         
      </div>
         <div class="sIE_l" style="width:200px; margin-left:50px; margin-top:25px;">
         
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">时间:</div>
          <input type="text" style="width:100px;height:19px;"  id="Quotation_date" name="Quotation_date"value="<?php echo $this->_tpl_vars['quotation_date']; ?>
" class="date" readonly />
         </div>         
         
         <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">名称:</div>
            <input type="text" class="" style="width:100px;height:19px;" id="design_pic_name" name="design_pic_name" value=""/>
         </div>
         
         
          <div id="design_pic_name_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">报价编号:</div>
          <input type="text" style="width:100px;height:19px;"  id="Quotation_code" name="Quotation_code"  value="<?php echo $this->_tpl_vars['sale_user_code']; ?>
" class="" readonly/>
         </div>
<!--         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">成本价:</div>
          <input type="text" style="width:100px;height:19px;"  id="Whole_cost_price" name="Whole_cost_price"  value="" class=""  readonly/>
         </div>-->

         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">货币:</div>
          <!--<input type="text" style="width:100px;height:19px;"  id="time" name="time"  datefmt="yyyy-MM-dd" value="<?php echo $this->_tpl_vars['time_add_quotecustomer']; ?>
" class="date required" readonly />-->
          <select class="combox" name="contact" style="width:200px;height:19px;" id="contact_name" onchange="customer_num();" >
          			<option value="6">$美元</option>
                	<option value="1">￥人民币</option>
                    <option value="7">€欧元</option>
                </select>
         </div>
      </div>
      <div class="sIE_l" style="width:260px; margin-left:50px; margin-top:25px;">
         <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">款式:</div>
            <select class="add01_select01"  id="unit_name" style="width:105px;" name="material_name">
              <option value="">请选择</option>
                <?php $_from = $this->_tpl_vars['cn_materials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['materials']):
?>
                
                <option value="<?php echo $this->_tpl_vars['materials']['id']; ?>
"><?php echo $this->_tpl_vars['materials']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
         </div>
          
         <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">颜色:</div>
            <select class="add01_select01" id="color_name" style="width:105px;" name="material_color">
                <option value="">请选择</option>
                <?php $_from = $this->_tpl_vars['cn_color']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['color']):
?>
                	<option value="<?php echo $this->_tpl_vars['color']['id']; ?>
"><?php echo $this->_tpl_vars['color']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
         </div>
          
         <div style="float:left; margin-bottom:5px;display:block;" id="size">
            <div class="sIE_l_01_title" >尺寸:</div>
            <select class="add01_select01" id="size_name" style="width:105px; height:24px;" name="material_size">
                <option value="">请选择</option>
                <?php $_from = $this->_tpl_vars['cn_standard']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['standard']):
?>
                	<option value="<?php echo $this->_tpl_vars['standard']['id']; ?>
"><?php echo $this->_tpl_vars['standard']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
          <button type="button" id="material_add">添加材料</button>
          <button type="button" id="liulan">浏览</button>
          <div id="mp_error" style=" color:#FFF; background-color:#F00; height:21px; line-height:21px; text-align:center; padding-left:5px; padding-right:5px; float:left; margin-bottom:10px; display:none;"></div>
          </div>
          <div class="sIE_r" style="width:320px; height:auto;">
            <div class="sIE_r" style="height:160px; width:160px; margin-top:0px;">
              <div class="sIE_r_img" id="image" style="width:160px; height:160px;"><img src="<?php echo $this->_tpl_vars['upload_jpg']; ?>
" style="height:160px; width:160px;" /></div>
              <input type="hidden" name="image" id="image_hidden" />
            </div>
          </div>
          
          
    </form>       
       
   
      <div class="sIE_l_02" style="width:80%; margin-left:100px;">
      <table cellspacing="0" class="sIE_l_02Tab" id="mp_table_add">
        <tr>
          <th>款式</th>
          <th>颜色</th>
          <th>尺寸</th>
          <th>价格</th>
          <th>系数</th>
          <th>数量</th>
          <th>设计类型</th>
          <th>图片名称</th>
          <th>编码</th>
          <th>图片尺寸</th>
          <th>图片</th>
          <th>操作</th>
        </tr>
      </table>
    </div>
    </div>
    </div>
    
    
 
       
   <div class="formBar">
        <div class="button" style="margin-left:80%; margin-right:5px;">
    		<div class="buttonContent">
       			 <button type="button" id="submit_add">确定</button>
    		</div>
  		</div>
  		<div class="button" style="margin-left:85%; margin-right:5px; margin-top:-25px;">
    		<div class="buttonContent">
       			<button class="close">取消</button>
    		</div>
  		</div>
<!--        <div class="button" style="margin-left:90%; margin-right:5px; margin-top:-25px;">
        <div class="buttonContent" >
          <button type="button" id="add_order">添加做货单</button>
        </div>
      </div>-->
	</div>
    
    
 

<script type="text/javascript">
function customer_num_code(){
	var name = $("#Customer_code").val();
	if(name!=""){
		$("#Customer_code_error").css("display","none");
	}
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/add_customer',//通过Ajax取数据的目标页面
		data:{"name":name},
		type:'post',//方法，还可以是"post"
		dataType:'json',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		{
			//alert(locals)
			if(locals){
				$("#Customer_name").val(locals.customer_name);
				$("#Customer_company").val(locals.company);
			}else{
				$("#Customer_name").val('');
				$("#Customer_company").val('');									
			}
		}								
		
	});
}

function min_order_change(key){
	
	   $(document).ready(function(){
		var min_order=$("#min_order"+key).val();
		var c= /^\+?[1-9][0-9]*$/;
		var b=c.test(min_order);
		if(b==true){
		 var contact = $("#contact").val();
		   $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/min_order_change',//通过Ajax取数据的目标页面
				data:{"key":key,"material_name":$("#material_name"+key).val(),"material_color":$("#material_color"+key).val(),"material_size":$("#material_size"+key).val(),"min_order":$("#min_order"+key).val(),"contact":contact},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{  
					 locals=locals.split("|");
					 $("#minerror_"+key).css("display","none");
					  min_order=min_order-0;
					  locals[2]=locals[2]-0;
					  if(min_order<locals[2]){
						  $("#shougongfei_"+key).html("￥"+locals[3]);
						  $("#minerror_"+key).css("display","block");
						  $("#minerror_"+key).html("数量小于初始值！");
					 }else{
						 $("#shougongfei_"+key).html("￥"+0);
					 }
					if(locals){
				      $.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_total',//通过Ajax取数据的目标页面
						type:'get',//方法，还可以是"post"
						data:{"key":key,'contact':contact},
						dataType:'json',//数据类型，还有其它的，详见jQuery手册
						success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						{
							loc=loc.split("|");
							if(contact=="￥人民币"){
								$("#Whole_cost_price").val("￥"+loc[0]);
								$("#Final_quote").val("￥"+loc[1]);
								}else if(contact=="$美元"){
								  $("#Whole_cost_price").val("￥"+loc[0]);
								  $("#Final_quote").val("$"+loc[1]);
								}else if(contact=="€欧元"){
									$("#Whole_cost_price").val("￥"+loc[0]);
									$("#Final_quote").val("€"+loc[1]);
								}
							
					   }
					   });
					    $("#bk_"+key).html("￥"+locals[0]);
						if(contact=="￥人民币"){
						$("#bj_"+key).html("￥"+locals[1]);
						}else if(contact=="$美元"){
						$("#bj_"+key).html("$"+locals[1]);
						}else if(contact=="€欧元"){
						$("#bj_"+key).html("€"+locals[1]);
						}
					}											
				}								
				
			});
		}else{
			
			  $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/min_order_change',//通过Ajax取数据的目标页面
				data:{"key":key,"material_name":$("#material_name"+key).val(),"material_color":$("#material_color"+key).val(),"material_size":$("#material_size"+key).val(),"min_order":$("#min_order"+key).val(),"contact":contact},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{  
			    $("#minerror_"+key).css("display","block");
		        $("#minerror_"+key).html("起订量为正整数！");	
				}});
		}
			
		});
};
function quote_coefficient_change(key){
	   $(document).ready(function(){
		var contact = $("#contact").val();
		 var quote_coefficient=$("#quote_coefficient"+key).val();
		
		var c= /^\d+(?=\.{0,1}\d+$|$)/;
		var b=c.test(quote_coefficient);
		if(b==true && quote_coefficient!='0'){
		   $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/quote_coefficient_change',//通过Ajax取数据的目标页面
				data:{"key":key,"material_name":$("#material_name"+key).val(),"material_color":$("#material_color"+key).val(),"material_size":$("#material_size"+key).val(),"min_order":$("#min_order"+key).val(),"quote_coefficient":$("#quote_coefficient"+key).val()},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{ locals=locals.split("|");
				 $("#quote_coefficienterror_"+key).css("display","none");
	    	  quote_coefficient=quote_coefficient-0;
			locals[1]=locals[1]-0;
			if(quote_coefficient<locals[1]){
				
				$("#quote_coefficienterror_"+key).css("display","block");
		        $("#quote_coefficienterror_"+key).html("数量小于初始值！");	
			}
					if(locals){
						$.ajax({
			    url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_total',//通过Ajax取数据的目标页面
			    type:'get',//方法，还可以是"post"
		        data:{"key":key,'contact':contact},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
					loc=loc.split("|");
					if(contact=="￥人民币"){
						$("#Whole_cost_price").val("￥"+loc[0]);
					    $("#Final_quote").val("￥"+loc[1]);
						}else if(contact=="$美元"){
						  $("#Whole_cost_price").val("￥"+loc[0]);
					      $("#Final_quote").val("$"+loc[1]);
						}else if(contact=="€欧元"){
							$("#Whole_cost_price").val("￥"+loc[0]);
					        $("#Final_quote").val("€"+loc[1]);
						}
			 }
			});
						if(contact=="￥人民币"){
						$("#bj_"+key).html("￥"+locals[0]);
						}else if(contact=="$美元"){
						$("#bj_"+key).html("$"+(locals[0]/6).toFixed(2));
						}else if(contact=="€欧元"){
							$("#bj_"+key).html("€"+(locals[0]/7).toFixed(2));
						}
					}											
				}								
				
			});
				}else{
					
					 $.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/quote_coefficient_change',//通过Ajax取数据的目标页面
						data:{"key":key,"material_name":$("#material_name"+key).val(),"material_color":$("#material_color"+key).val(),"material_size":$("#material_size"+key).val(),"min_order":$("#min_order"+key).val(),"quote_coefficient":$("#quote_coefficient"+key).val()},
						type:'post',//方法，还可以是"post"
						dataType:'json',//数据类型，还有其它的，详见jQuery手册
						success:function(locals){//成功后执行的
						$("#quote_coefficienterror_"+key).css("display","block");
						$("#quote_coefficienterror_"+key).html("报价系数为正数！");	
				 }
			});
			
		}
		})
};

$(document).ready(function()  
{
	 $("#submit_add").click(function () {
		 
		var image_name = new Array();
		var els = document.getElementsByName("materials[0][image]");
		for (var i = 0, j = els.length; i < j; i++){
		   image_name.push(els[i].value); 
		}
		
		var size_w_name = new Array();
		var els = document.getElementsByName("materials[0][size_w]");
		for (var i = 0, j = els.length; i < j; i++){
		   size_w_name.push(els[i].value); 
		}
		
		var size_h_name = new Array();
		var els = document.getElementsByName("materials[0][size_h]");
		for (var i = 0, j = els.length; i < j; i++){
		   size_h_name.push(els[i].value); 
		}
		
		var materials_cost = new Array();
		var els = document.getElementsByName("materials_cost[0][price]");
		for (var i = 0, j = els.length; i < j; i++){
		   materials_cost.push(els[i].value); 
		}
		 
		var image_yincang = new Array();
		var els = document.getElementsByName("image_yincang[0][aa]");
		for (var i = 0, j = els.length; i < j; i++){
		   image_yincang.push(els[i].value); 
		}
		 
		var contact_name = $("#contact_name").val(); 
		 
		
		
	    $.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/content_null',//通过Ajax取数据的目标页面
			data:{"image_name":image_name,'size_w_name':size_w_name,"size_h_name":size_h_name,"image_yincang":image_yincang,"materials_cost":materials_cost,"contact_name":contact_name},
			type:'post',//方法，还可以是"post"
			dataType:'text',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{    
			    locals=locals.split("|");

				if(locals[0]==1){
					alert("图片名称不能为空！");
				}/*else if(locals[1]==1){
					alert("图片尺寸1不能为空！");
				}else if(locals[2]==1){
					alert("图片尺寸2不能为空！");
				}*/else if(locals[3]==1){
					alert("图片不能为空！");
				}else{
					var Customer_code=$("#Customer_code").val();
					var Customer_name=$("#Customer_name").val();
					var design_pic_name=$("#design_pic_name").val();
					if(!$(".mp_tabClass01").is(":visible")){
						$("#mp_error").css("display","block");
						$("#mp_error").html("请添加材料项！");
					}else if(Customer_code==""){
						$("#Customer_code_error").css("display","block");
						$("#Customer_code_error").html("请填写客户代码！");
					}else if(Customer_name==""){
						$("#Customer_code_error").css("display","none");
						$("#Customer_name_error").css("display","block");
						$("#Customer_name_error").html("请填写客户名字！");
					}else if(design_pic_name==""){
						$("#Customer_name_error").css("display","none");
						$("#design_pic_name_error").css("display","block");
						$("#design_pic_name_error").html("请填写名称！");
					}else{
						$("#info_form_add").submit();
					}
				}
				
			}
	    });		 

		 

	 });
	 
	 //添加做货单
	 $("#add_order").click(function () {
		var Customer_code=$("#Customer_code").val();
		var Customer_name=$("#Customer_name").val();
		var design_pic_name=$("#design_pic_name").val();
		if(!$(".mp_tabClass01").is(":visible")){
			$("#mp_error").css("display","block");
			$("#mp_error").html("请添加材料项！");
		}else if(Customer_code==""){
			$("#Customer_code_error").css("display","block");
			$("#Customer_code_error").html("请填写客户代码！");
		}else if(Customer_name==""){
			$("#Customer_code_error").css("display","none");
			$("#Customer_name_error").css("display","block");
			$("#Customer_name_error").html("请填写客户名字！");
		}else if(design_pic_name==""){
			$("#Customer_name_error").css("display","none");
			$("#design_pic_name_error").css("display","block");
			$("#design_pic_name_error").html("请填写名称！");
		}
	    else{
			$("#design_pic_name_error").css("display","none");
			 $.ajax({
				  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/check',//通过Ajax取数据的目标页面
				  data:{},
				  type:'post',//方法，还可以是"post"
				  dataType:'json',//数据类型，还有其它的，详见jQuery手册
				  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				  {    locals=locals.split("|");
					   if(locals[0]==3){
						$("#submit_value").val('2');	   
					   $("#info_form_add").submit();
					  }else{
						  if(locals[0]==1){
						  alert("数量和报价系数不可以均低于初始值！");
						  }else if(locals[0]==2){
							  alert("请填写正确的数量和报价系数！");
						  }
					  }
				  }
			 });
		}
	 });
	 
	 
	//材料联动
    $("#unit_name").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#unit_name").val();
			
    	    var opti = "<option value=\"\"></option>";
			if(a != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/get_mp_infomation',//通过Ajax取数据的目标页面
					data:{'material_name':a},
					type:'get',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						$("#color_name").find("option").remove();
						$("#size_name").find("option").remove();
						var objs = locals.color;
						$("#color_name").append(opti);   //为Select追加一个Option(下拉项)     
						for (var o in objs) {
							var  jsonObj  =  objs[o];
							var  optionstring = "<option value=\"" + jsonObj.id + "\" >" + jsonObj.name + "</option>";
							$("#color_name").append(optionstring);   //为Select追加一个Option(下拉项)           
						}
						
						var objs1 = locals.size;
						for (var o in objs1) {
							var  jsonObj  =  objs1[o];
							var  optionstring = "<option value=\"" + jsonObj.id1 + "\" >" + jsonObj.name1 + "</option>";
							$("#size_name").append(optionstring);   //为Select追加一个Option(下拉项)           
						} 
					}
				});
			}
    	}
    );
	$("#material_color").change(function (){
		var a = $("#material_name").val();
		var color = $("#material_color").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_mp_color_infomation',//通过Ajax取数据的目标页面
			data:{'material_name':a,'material_color':color},
			type:'get',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				var objs = locals.size;
				var size = '';
				$("#material_size").find("option").remove();	
				var  optionstring = "<option value=\"\" ></option>";
				$("#material_size").append(optionstring);   //为Select追加一个Option(下拉项			
				for (var o in objs) {
					var  jsonObj  =  objs[o];
					if(jsonObj.size=="" && jsonObj.size_mm=="" && jsonObj.size_m_w==""){
						$('#size').css("display","none");
						}
						else{
							$('#size').css("display","block");
						}
					if(jsonObj.size){
						size = jsonObj.size;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
						$("#material_size").append(optionstring);   //为Select追加一个Option(下拉项
					}
					else if(jsonObj.size_mm){
						size = jsonObj.size_mm;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_size").append(optionstring);   //为Select追加一个Option(下拉项)  
					}
					else if(jsonObj.size_m_w&& jsonObj.size_m_h){
						size = jsonObj.size_m_w+'*'+jsonObj.size_m_h;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_size").append(optionstring);   //为Select追加一个Option(下拉项)   
					}
				} 
			}
		});
		
	});
	
	$("#liulan").click(function (){
		var material_name = $("#unit_name").val();
		var color = $("#color_name").val();
		var size = $("#size_name").val();
		
		$.ajax({
			  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/find_image',//通过Ajax取数据的目标页面
			  type:'post',//方法，还可以是"post"
			  data:{'name':material_name,'color':color,'size':size},
			  dataType:'json',//数据类型，还有其它的，详见jQuery手册
			  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			  {
				 // alert(locals.image)
				  $("#image").html("<img src=" + locals.image + " style=height:160px; width:160px; />");	
			  }
		});		
		
	});	
	
	$("#material_add").click(function (){
			$("#mp_error").css("display","none");
			var row_number = 0;
			
			var material_name = $("#unit_name").val();
			var color = $("#color_name").val();
			var size = $("#size_name").val();

            if(material_name==""){
				alert("材料名不为空！");
				return false;
			}

			if(color==""){
				alert("颜色不为空！");
				return false;
			}
			
			if(size==""){
				alert("尺寸不为空！");
				return false;
			}

			var mid = $("#mid").val();
			var contact = $("#contact").val();
			var contact_name = $("#contact_name").val();

				$.ajax({
					  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/find_minorder_1',//通过Ajax取数据的目标页面
					  type:'post',//方法，还可以是"post"
					  data:{'name':material_name,'color':color,'size':size,"contact_name":contact_name},
					  dataType:'json',//数据类型，还有其它的，详见jQuery手册
					  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					  {
						  
		var table_value = "<tr class='mp_tabClass01'>                           <td>"+locals.name+"<input type='hidden' name='materials["+row_number+"][name]' id = material_name"+locals.insert_id+"  value='"+locals.name+"' /></td>                           <td>"+locals.cn_color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals.insert_id+" value='"+locals.cn_color+"' /></td>                           <td>"+locals.cn_size+"<input type='hidden' name='materials["+row_number+"][size]' id=material_size"+locals.insert_id+" value='"+locals.cn_size+"' /></td>                           <td><input size='6' readonly type='text' name='materials[]' id=material_price"+locals.insert_id+" value='"+locals.cn_clothes_price+"'>                                                               <input type='hidden' name='materials_hidden["+row_number+"][price]' id=material_price_hidden"+locals.insert_id+" value='"+locals.cn_clothes_price_hidden+"'>                               <input type='hidden' name='materials_price' value='"+locals.insert_id+"' />                                                                                                        <input type='hidden' id = clothes_price"+locals.insert_id+"  value='"+locals.clothes_price+"' /><input type='hidden' name='materials_cost[0][price]' id = cost_id"+locals.insert_id+"  value='"+locals.clothes_price+"' /></td>                                      <td><input size='6' type='text' name='materials["+row_number+"][xishu]' onkeyup='change_xishu("+locals.insert_id+")' id=material_xishu"+locals.insert_id+" value='2'></td>                            <td><input size='6' type='text' value='1' name='materials["+row_number+"][shuliang]' onkeyup='change_shuliang("+locals.insert_id+")' id=material_shuliang"+locals.insert_id+"></td>                   <td><select onchange='change_type("+locals.insert_id+")' name='sheji' id=material_sheji"+locals.insert_id+"><option value='1'>公司设计</option><option value='2'>定制设计</option><option value='3'>无设计</option></select>        <td><input size='10' type='text' name='materials["+row_number+"][image]' onkeyup='change_image("+locals.insert_id+")' id=material_image"+locals.insert_id+"></td><td><input type='text' style='width:100px;'  readonly name='materials["+row_number+"][tutu_code]' id=tutu_code"+locals.insert_id+" value="+locals.tutu_code+"><input type='hidden' readonly  id=tutu_code_k"+locals.insert_id+" value="+locals.tutu_code+"></td>                           <td><div id=chicun"+locals.insert_id+"><input onkeyup='change_image_w("+locals.insert_id+")' size='3' type='text' name='materials["+row_number+"][size_w]' id=material_size_w"+locals.insert_id+">cm W * <input size='3' onkeyup='change_image_h("+locals.insert_id+")' type='text' name='materials["+row_number+"][size_h]' id=material_size_h"+locals.insert_id+">cm H</div></td>                            <td><div id=upload_id_image"+locals.insert_id+" style='display:none;'><form method='post' action='<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/upload_jpg' target='yframe_unfinish"+locals.insert_id+"' id='add_image' enctype='multipart/form-data'><input type='file' name='ufile' /><input type='hidden' name='h_image' value='"+locals.insert_id+"' /><input type='submit' value='提交' /></div></form><div style='display:block;' id=image_xianshi"+locals.insert_id+"><iframe name='yframe_unfinish"+locals.insert_id+"' src='<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/upload_jpg' style='border:none; width:145px; height:145px;'></iframe></div><a style='display:none;'>查看</a><a style='display:none;'>浏览</a><div id=xiazai"+locals.insert_id+"></div><div id=xiazai_image"+locals.insert_id+"><input type = 'hidden' name = 'hidden_image' id = 'hidden_image"+locals.insert_id+"'></div></td>              <td onClick='getDel_cl(this,"+locals.insert_id+")'><a href='#'>删除</a></td></tr>";
											
						  $("#mp_table_add").append(table_value);
	
						  row_number++;
	
						  var zuizhong_price1 = $("#Final_quote").val();
	
						  var zuizhong_price = locals.cn_clothes_price + "+" + zuizhong_price1;
						  $("#Final_quote").val(eval(zuizhong_price));
						 // $("#material_price_hidden"+key).val(locals.cn_clothes_price_hidden);
						  
					  }
				});
			
			
			
	});
		
	 
$("#design_pic_name").change(
	  function()
    	{var design_pic_name = $("#design_pic_name").val();
		if(design_pic_name!=""){
			$("#design_pic_name_error").css("display","none");
			
		}
		});
$("#contact").change(
	  function()
    	{ 
		var contact = $("#contact").val();
		$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/contact_change',//通过Ajax取数据的目标页面
				data:{"contact":contact},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
	
					$.ajax({
						  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_total',//通过Ajax取数据的目标页面
						  type:'get',//方法，还可以是"post"
						  data:{'contact':contact},
						  dataType:'json',//数据类型，还有其它的，详见jQuery手册
						  success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						  { 
							  loc=loc.split("|");
							  if(contact=="￥人民币"){
								  $("#Whole_cost_price").val("￥"+loc[0]);
								  $("#Final_quote").val("￥"+loc[1]);
							  }else if(contact=="$美元"){
								$("#Whole_cost_price").val("￥"+loc[0]);
								$("#Final_quote").val("$"+loc[1]);
							  }else if(contact=="€欧元"){
								  $("#Whole_cost_price").val("￥"+loc[0]);
								  $("#Final_quote").val("€"+loc[1]);
							  }
						 }
				});
			
				locals=locals.split("|");
				locals_1=locals[0].split(",")
				locals_2=locals[1].split(",")
				var len=locals_2.length;
				for(var i=0,k=0;i<len,k<len;i++,k++){
					
						if(contact=="￥人民币"){
						 $("#bj_"+locals_1[k]).html("￥"+locals_2[i]);
						}else if(contact=="$美元"){
							$("#bj_"+locals_1[k]).html("$"+locals_2[i]);
						}else if(contact=="€欧元"){
							$("#bj_"+locals_1[k]).html("€"+locals_2[i]);
						}
				
				}

				}
		
			});
		});

	 var x = $("#material_size");
    x.change(
    	function()
    	{
			
			
    		//获取id为select的下拉框选中的值
    	    var a = $("#material_color").val();
    	    var b = $("#material_name").val();
			
			
    	    $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_min_order',//通过Ajax取数据的目标页面
				data:{"material_name":b,"material_color":a},
				type:'get',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					//alert(locals);
					$("#min_order").val(locals);
				}
			});
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_quote_coefficient',//通过Ajax取数据的目标页面
				data:{"material_name":b,"material_color":a},
				type:'get',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(k,locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					$("#quote_coefficient").val(locals);
				}
			});
    	}
    );
});

	function change_image(key){
		
		   $(document).ready(function(){
				var material_image = $("#material_image"+key).val();
				var material_sheji = $("#material_sheji"+key).val();
				var tutu_code = $("#tutu_code_k"+key).val();
				
				if(material_sheji==1){
					
					$("#upload_id_image"+key).css("display","none");

					$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/change_image',//通过Ajax取数据的目标页面
						data:{"key":key,"material_image":$("#material_image"+key).val(),"material_sheji":$("#material_sheji"+key).val(),"tutu_code":$("#tutu_code"+key).val(),"tutu_code_k":$("#tutu_code_k"+key).val()},
						type:'post',//方法，还可以是"post"
						dataType:'json',//数据类型，还有其它的，详见jQuery手册
						success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						{  	 
							 if(locals.tutu_code!=undefined){
								 $("#tutu_code"+key).val(locals.tutu_code);
							 }else{
								 
							 }
							 if(locals.size_cm_w!=undefined){
								 $("#material_size_w"+key).val(locals.size_cm_w);
							 }else{
								 $("#material_size_w"+key).val('');
							 }
							 if(locals.size_cm_h!=undefined){
								 $("#material_size_h"+key).val(locals.size_cm_h);
							 }else{
								 $("#material_size_h"+key).val('');
							 }
							 if(locals.image_jpg!=undefined){
								 $("#xiazai"+key).html("<a style='font-size:16px;text-decoration:underline;' target='_blank' href=" + locals.image_jpg + ">下载</a>&nbsp;&nbsp;<input type='hidden' name='image_yincang[0][aa]' value=" + locals.image_jpg + "><img style='width:100px;height:100px;' src=" + locals.image_jpg + ">");
								 $("#hidden_image"+key).val(locals.image_jpg);
							 }else{
								 $("#xiazai"+key).html('');
								 $("#hidden_image"+key).val('');
							 }
							 
							 $("#image_xianshi"+key).css("display","none");
						}								
						
					});

				}else{

					$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/change_image',//通过Ajax取数据的目标页面
						data:{"key":key,"material_image":$("#material_image"+key).val(),"material_sheji":$("#material_sheji"+key).val()},
						type:'post',//方法，还可以是"post"
						dataType:'json',//数据类型，还有其它的，详见jQuery手册
						success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						{  

						}								
						
					});
				}
				        

				
			});
	};
	
	function change_image_w(key){
		
		   $(document).ready(function(){

				var material_size_w = $("#material_size_w"+key).val();
				
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/material_size_w',//通过Ajax取数据的目标页面
					data:{"key":key,"material_size_w":$("#material_size_w"+key).val()},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{  

					}								
					
				});
				
			});
	};	    

	function change_image_h(key){
		
		   $(document).ready(function(){
				var material_size_h = $("#material_size_h"+key).val();
				
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/material_size_h',//通过Ajax取数据的目标页面
					data:{"key":key,"material_size_h":$("#material_size_h"+key).val()},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{  

					}								
					
				});
				
			});
	};

	function customer_num(){
		
		   $(document).ready(function(){
			   
			    var contact_name = $("#contact_name").val();
			   
                var insurance_name = new Array();
				var els = document.getElementsByName("materials_hidden[0][price]");
				for (var i = 0, j = els.length; i < j; i++){
				   insurance_name.push(els[i].value);
				} 
				
				var insurance_name1 = new Array();
				var els1 = document.getElementsByName("materials_price");
				for (var i = 0, j = els1.length; i < j; i++){
				   insurance_name1.push(els1[i].value);
				}

				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/contact_name',//通过Ajax取数据的目标页面
					data:{"contact_name":contact_name,"insurance_name":insurance_name,"insurance_name1":insurance_name1},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{  
						 if(locals!=""){
							 
							 locals = locals.split("|");
							 
							 var arr = locals[0].split(",");
							
							 for (var i=0;i<arr.length;i++){
							    $("#material_price"+insurance_name1[i]).val(arr[i]);
							 }
							 
							 $("#Final_quote").val(locals[1]);
						 }									
					}								
					
				});
				
			});
	};    

	function change_shuliang(key){
		
		   $(document).ready(function(){
				var material_price = $("#material_price"+key).val();
				var material_xishu = $("#material_xishu"+key).val();
				var material_shuliang = $("#material_shuliang"+key).val();
				var material_sheji = $("#material_sheji"+key).val();
				
				var clothes_price = $("#clothes_price"+key).val();
				var contact_name = $("#contact_name").val();
				var price = $("#Final_quote").val();
				
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/shuliang_change',//通过Ajax取数据的目标页面
					data:{"key":key,"material_price":$("#material_price"+key).val(),"material_xishu":$("#material_xishu"+key).val(),"material_shuliang":$("#material_shuliang"+key).val(),"material_sheji":$("#material_sheji"+key).val(),"clothes_price":$("#clothes_price"+key).val(),"contact_name":contact_name},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{  
					
					     locals = locals.split("|");
						 $("#material_price"+key).val(locals[1]);
						 $("#material_price_hidden"+key).val(locals[0]);
						 var cha_price = price - material_price;						 
						 var zuizhong_price = cha_price + "+" + locals[1];
						 $("#Final_quote").val(eval(zuizhong_price));
						 $("#cost_id"+key).val(locals[2]);									
					}								
					
				});
	
				
			});
	};

	function change_xishu(key){
		
		   $(document).ready(function(){
				var material_price = $("#material_price"+key).val();
				var material_xishu = $("#material_xishu"+key).val();
				var material_shuliang = $("#material_shuliang"+key).val();
				var material_sheji = $("#material_sheji"+key).val();
				
				var clothes_price = $("#clothes_price"+key).val();
				var contact_name = $("#contact_name").val();
				var price = $("#Final_quote").val();
				
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/xishu_change',//通过Ajax取数据的目标页面
					data:{"key":key,"material_price":$("#material_price"+key).val(),"material_xishu":$("#material_xishu"+key).val(),"material_shuliang":$("#material_shuliang"+key).val(),"material_sheji":$("#material_sheji"+key).val(),"clothes_price":$("#clothes_price"+key).val(),"contact_name":contact_name},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{  //alert(locals)
					//return false;
					     locals = locals.split("|");
						 $("#material_price"+key).val(locals[1]);
						 $("#material_price_hidden"+key).val(locals[0]);
						 var cha_price = price - material_price;						 
						 var zuizhong_price = cha_price + "+" + locals[1];
						 $("#Final_quote").val(eval(zuizhong_price));
						 $("#cost_id"+key).val(locals[2]);									
					}								
					
				});
	
				
			});
	};
	
	function change_type(key){
		
		   $(document).ready(function(){
				var material_price = $("#material_price"+key).val();
				var material_xishu = $("#material_xishu"+key).val();
				var material_shuliang = $("#material_shuliang"+key).val();
				var material_sheji = $("#material_sheji"+key).val();
				
				if(material_sheji==2){
					$("#material_image"+key).css("display","block");
					$("#chicun"+key).css("display","inline");
					$("#upload_id_image"+key).css("display","block");
					$("#image_xianshi"+key).css("display","block");
					$("#xiazai"+key).css("display","none");
					$("#hidden_image"+key).val('');
					$("#material_image"+key).val('');					
				}else if(material_sheji == 1){
					$("#material_image"+key).css("display","block");
					$("#chicun"+key).css("display","inline");
					$("#upload_id_image"+key).css("display","none");
					$("#image_xianshi"+key).css("display","none");
					$("#xiazai"+key).css("display","block");
					$("#hidden_image"+key).val('');
					$("#material_image"+key).val('');								
				}else if(material_sheji == 3){
					$("#material_image"+key).css("display","none");
					$("#chicun"+key).css("display","none");
					$("#upload_id_image"+key).css("display","none");
					$("#image_xianshi"+key).css("display","none");
					$("#xiazai"+key).css("display","none");
					$("#hidden_image"+key).val('');
					$("#material_image"+key).val('');								
				}else{
				}
				
				var contact_name = $("#contact_name").val();
				var clothes_price = $("#clothes_price"+key).val();
				var price = $("#Final_quote").val();
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/type_change',//通过Ajax取数据的目标页面
					data:{"key":key,"material_price":$("#material_price"+key).val(),"material_xishu":$("#material_xishu"+key).val(),"material_shuliang":$("#material_shuliang"+key).val(),"material_sheji":$("#material_sheji"+key).val(),"clothes_price":$("#clothes_price"+key).val(),"contact_name":contact_name},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{  
						 locals = locals.split("|");
						 $("#material_price"+key).val(locals[1]);
						 $("#material_price_hidden"+key).val(locals[0]);
						 var cha_price = price - material_price;						 
						 var zuizhong_price = cha_price + "+" + locals[1];
						 $("#Final_quote").val(eval(zuizhong_price));
						 $("#cost_id"+key).val(locals[2]);										
					}								
					
				});
	
				
			});
	};

	function getDel_cl(k,row){
		    //var material_name = $("#material_name").val();
			//var color = $("#material_color").val();
			//var size = $("#material_size").val();
			var contact_name = $("#contact_name").val();
			var price = $("#Final_quote").val();
			var clothes_price = $("#material_price"+row).val();
			
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/delete_design_material_cl',//通过Ajax取数据的目标页面
					type:'get',//方法，还可以是"post"
					data:{'id':row,"price":price,"clothes_price":clothes_price},
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						 $("#Final_quote").val(locals);
                         alert("删除成功！");
							
							
					 
					}
			});
		 $(k).parent().remove();  
	}		
</script> 