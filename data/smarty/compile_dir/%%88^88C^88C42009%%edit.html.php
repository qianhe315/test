<?php /* Smarty version 2.6.22, created on 2013-10-05 10:11:31
         compiled from create_quotation_invoice/edit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
    	  <div class="sIE_title">修改外发报价单</div>
      <form method="post" action="<?php echo $this->_tpl_vars['baojia_action']; ?>
" id="rhinestone_quotation_submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">          
  	  <div class="sIEK" style="width:580px;">
      		<div style="float:left; width:550px;">
              <div class="sIE_l" style=" width:370px;">
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title">业务员:</div>
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['saleman_name']; ?>
" readonly />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title" style="width:80px;">客户代码:</div>
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['customer_code']; ?>
" readonly/>
                </div>
                
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title">时间:</div>
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['quotation_date']; ?>
" readonly />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title">客户名:</div>
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['customer_name']; ?>
" readonly />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                  
                  <div class="sIE_l_01_title">名称:</div>
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_pic_name']; ?>
" readonly/>
                </div>
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title">公司:</div>
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['customer_company']; ?>
" readonly/>
                </div>
                
                <div class="sIE_l_01" style="width:186px;">
                  <div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
                    
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['quotation_code']; ?>
" readonly/>
                </div>
      
                <div class="sIE_l_01" style="width:100%;">
                  <div class="sIE_l_01_title" style="width:80px;">颜色:</div>
                  
                    <div style="float:right; height:22px; width:256px; margin-bottom:10px; margin-right:34px;">
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['color']; ?>
" readonly style="width:256px;" />
                    </div>
                </div> 
                </div>
                <div style="float:left; width:160px; margin-left:10px;">
                	<textarea name="note" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['note']; ?>
" readonly style="width:160px; margin-bottom:10px;" onfocus="if(this.value=='备注')this.value='';" class="add01_textarea textInput"><?php echo $this->_tpl_vars['outgoing_quotation_sheet']['note']; ?>
</textarea>
                </div>

        </div>
            </div>
              <div class="sIE_r" style=" width:400px;">
              	<div class="sIE_l_01" style="margin-top:0px; width:200px;">
                  <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
                  <div class="sIE_r01" style="float:left; width:130px;">
                    <div class="sIE_r01_div" style="width:130px;">
                        <input type="text"  class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['inch_w']; ?>
" readonly />
                        <div style=" margin-left:5px; float:left;">inch W</div>
                    </div>
                    <div class="sIE_r01_div" style="width:130px;">
                        <input type="text"  class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['inch_h']; ?>
" readonly />
                        <div style=" margin-left:5px; float:left;">inch H</div>
                    </div>
                    <div class="sIE_r01_div" style="width:130px;">
                        <input type="text"  class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['cm_w']; ?>
" readonly />
                        <div style=" margin-left:5px; float:left;">cm W</div>
                    </div>
                    <div class="sIE_r01_div" style="width:130px;">
                        <input type="text"  class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['cm_h']; ?>
" readonly />
                        <div style=" margin-left:5px; float:left;">cm H</div>
                    </div>
                  </div>
                </div>
                
                <div class="sIE_r" style="height:100px; width:100px; margin-top:0px;">
                <div  style="height:160px; width:160px;"><img width="160px;" height="160px;" src="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['image']; ?>
" /></div>
 <div class="sIE_l_01_title"  style="width:60px;">设计师:</div>
          <input type="text" class="sIE_No" disabled="disabled" id="design_user" name="design_user_name" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_user_name']; ?>
"  style="width:60px;"/>                
              </div>
              </div>
              <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['id']; ?>
" />
              <table cellspacing="0" class="picture_Tab" style="border:none; width:60%;">
                        <tr>
                        	<td>
                            <font style="float:left; margin-right:10px; line-height:24px;">成本价</font>
                            <input type="text" name="cost_price" id="cost_price_id" class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['whole_cost_price']; ?>
" readonly style="width:50px; margin-right:5px;" />
                            <font style="float:left; margin-right:10px; line-height:24px;">X 数量</font>
                            <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['pcs'] != ""): ?>
                                <input type="text" name="number" id="number_id" onkeyup="number1()" class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['pcs']; ?>
" style="width:50px; margin-right:5px;" />
                            <?php else: ?>
                                <input type="text" name="number" id="number_id" onkeyup="number1()" class="sIE_No" value="1" style="width:50px; margin-right:5px;" />
                            <?php endif; ?>
                            
                            <font style="float:left; margin-right:10px; line-height:24px;">X 报价系数</font>
                            <?php if (isset ( $this->_tpl_vars['coefficient'] )): ?> 
                                <input type="text" name="coefficient" id="coefficient_id" onkeyup="coefficient1()" class="sIE_No" value="<?php echo $this->_tpl_vars['coefficient']; ?>
" style="width:50px; margin-right:5px;" />
                            <?php else: ?>
                                <input type="text" name="coefficient" id="coefficient_id" onkeyup="coefficient1()" class="sIE_No" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
" style="width:50px; margin-right:5px;" />                            
                            <?php endif; ?>
                            <input type="hidden" id="lowest_cost_factor" value="<?php echo $this->_tpl_vars['lowest_cost_factor']; ?>
" />
                            <font style="float:left; margin-right:10px; line-height:24px;">/ 货币</font>
                            
                            <select class="picture_select01" id="money_id" name="money_1" onchange="money()" style="height:26px; width:80px; margin-right:5px;">
                            <option value="0">请选择</option>
                                <?php $_from = $this->_tpl_vars['exchangerate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                                    <?php if ($this->_tpl_vars['money'] == $this->_tpl_vars['qf']['value']): ?>
                                         <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                                    <?php else: ?>
                                         <option value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                                    <?php endif; ?> 
                                <?php endforeach; endif; unset($_from); ?>
                                
                            </select>
                            
                            <font style="float:left; margin-right:10px; line-height:24px;">= 最终报价</font>
                            <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['final_quotation']; ?>
" name="final_quotation" id="final_quotation_id" readonly style="width:90px; margin-right:5px;" />
                            </td>
                        </tr>
                        <tr>
                           <td><div style=" float:left; margin-left:110px;" id="number_error"></div><div style=" float:left;margin-left:120px;" id="coefficient_error"></div></td>
                        </tr>                        
                    </table>
              
    	  	</div>
           
<script type="text/javascript" language="javascript">	   
            
	  function number1(){
		 $(document).ready(function(){
			 var cost_price = $("#cost_price_id").val();
			 
			 cost_price = cost_price.replace("元","");
			 var number = $("#number_id").val();
			 var coefficient = $("#coefficient_id").val();
			 var money = $("#money_id").val();
			 
			 var aaa = $("#money_id").find("option:selected").text();
			 aaa=aaa.split(" ");
			 
			 if(number=="" || number==0){
			 	 $("#number_error").html("<div style=color:#F00;>*数量不能为空，或者为0！</div>");
			 	 var final_quotation = cost_price + "*" + 0 + "*" + coefficient + "/" + money;
			 }else if(coefficient==""){
			 	 var final_quotation = cost_price + "*" + 0 + "*" + 0 + "/" + money;
			 }else{
			 	 $("#number_error").html("");
			 	 var final_quotation = cost_price + "*" + number + "*" + coefficient + "/" + money;
			 }			
			 
			 final_quotation = eval('('+final_quotation+')');
			 final_quotation = final_quotation.toFixed(2);
			 $("#final_quotation_id").val(aaa[0] + final_quotation);			   
			 
		 }); 
	  } 
	  
	  function coefficient1(){
		 $(document).ready(function(){
			 var cost_price = $("#cost_price_id").val();
			 cost_price = cost_price.replace("元","");
			 var number = $("#number_id").val();
			 var coefficient = $("#coefficient_id").val();
			 var lowest_cost_factor = $("#lowest_cost_factor").val();
			 
			 var money = $("#money_id").val();
			 
			 var aaa = $("#money_id").find("option:selected").text();
			 aaa=aaa.split(" ");

			 if(coefficient<lowest_cost_factor){
				 $("#coefficient_error").html("<div style=color:#F00;>*此报价系数低于标准，需要提交主管审核后生效！</div>");
			 }else{
				 $("#coefficient_error").html("");
			 }
			 
			if(coefficient=="" || coefficient==0){
				var final_quotation = cost_price + "*" + 0 + "*" + coefficient + "/" + money;
			}else{
				var final_quotation = cost_price + "*" + number + "*" + coefficient + "/" + money;
			}			 
			 
			final_quotation = eval('('+final_quotation+')');
			final_quotation = final_quotation.toFixed(2);
			$("#final_quotation_id").val(aaa[0] + final_quotation);				   
			 
		 });	   
	  }
	  
	  function money(){
		 $(document).ready(function(){
			 var cost_price = $("#cost_price_id").val();
			 cost_price = cost_price.replace("元","");
			 var number = $("#number_id").val();
			 var coefficient = $("#coefficient_id").val();
			 var lowest_cost_factor = $("#lowest_cost_factor").val();
			 
			 var money = $("#money_id").val();
			 
			 var aaa = $("#money_id").find("option:selected").text();
			 aaa=aaa.split(" ");

             var final_quotation = cost_price + "*" + number + "*" + coefficient + "/" + money;			 
			 
			final_quotation = eval('('+final_quotation+')');
			final_quotation = final_quotation.toFixed(2);
			$("#final_quotation_id").val(aaa[0] + final_quotation);				   
			 
		 });	   
	  }	  
	  
</script>            
</form>             
  	  <div class="sIE_l_02">
        <div class="button" style="float:right; margin-right:20px;">
          <div class="buttonContent">
          
            <button class="close">取消</button>
          </div>
        </div>
      </div>
              
             
    	  	</div>
        </div>
        
</div>
 
<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function()  
{
	$("#design_content_save").click(function (){
		//alert('1111');
		$("#rhinestone_quotation_submit_form").submit();
	});
	
	$("#submit_form").click(function () {
		$("#info_form").submit();
	});
	
	
	$("#inch_w").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(4);
		}
		$("#cm_w").val(cm_w);
		$("#cm_w1").val(cm_w);
	});
	
	$("#inch_h").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(4);
		}
		
		$("#cm_h").val(cm_h);
		$("#cm_h1").val(cm_h);
	});
	
	$("#cm_w").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(4);
		}
		
		$("#inch_w").val(inch_w);
		$("#inch_w1").val(inch_w);
	});
	
	$("#cm_h").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(4);
		}
		$("#inch_h").val(inch_h);
		$("#inch_h1").val(inch_h);
	});
	
    
    $("#material_select").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#material_select").val();
    	    var opti = "<option value=\"\"></option>";
			if(a != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_infomation-material_name-'+a+'.html',//通过Ajax取数据的目标页面
					type:'get',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
					{
						//alert(locals.result);
						if(locals.result == 0){
							
						}else if(locals.result == 2){
							$("#material_info").css("display","none");
							$("#material_info_c").css("display","block");
							$("#material_info_color").empty();
							var objs = locals.color;
							$("#material_info_c_color").append(opti);   //为Select追加一个Option(下拉项)     
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.material_color + "\" >" + jsonObj.material_color + "</option>";
							    $("#material_info_c_color").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}else if(locals.result == 1){
							$("#material_info").css("display","block");
							$("#material_info_c").css("display","none");
							$("#material_info_c_color").empty();
							//alert(locals.color.length);//输出子对象数量
							var objs = locals.color;
							$("#material_info_color").append(opti);   //为Select追加一个Option(下拉项)        
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.color + "\" >" + jsonObj.color + "</option>";
							    $("#material_info_color").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}
						//alert(locals);
						//$("#customer_code").val(locals);
					}
				});
			}
    	}
    );
	
	$("#material_info_c_color").change(function (){
		var a = $("#material_select").val();
		var color = $("#material_info_c_color").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_c_infomation-material_name-'+a+'-material_color-'+color+'.html',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				var objs = locals.size;
				var size = '';
				for (var o in objs) {
					var  jsonObj  =  objs[o];
					if(jsonObj.size){
						size = jsonObj.size;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
						$("#material_c_size").append(optionstring);   //为Select追加一个Option(下拉项
					}
					else if(jsonObj.size_mm){
						size = jsonObj.size_mm;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size").append(optionstring);   //为Select追加一个Option(下拉项)  
					}
					else if(jsonObj.size_m_w&& jsonObj.size_m_h){
						size = jsonObj.size_m_w+'*'+jsonObj.size_m_h;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size").append(optionstring);   //为Select追加一个Option(下拉项)   
					}
					
					        
				} 
			}
		});
		
	});
	$("#sIE_size01").change(function (){
		var s01 = $("#sIE_size01").val();
		//alert(s01);
		if(s01 == 1){
			//alert('1');
			//$("#sIE_size02 option[value='1']").attr("selected", "selected");
			$("#sIE_size02").find("option[value='1']").attr("selected",true);
		}
		if(s01 == 2){
			//alert('2');
			//$("#sIE_size02 option[value='2']").attr("selected", "selected");
			$("#sIE_size02").find("option[value='2']").attr("selected",true);
		}
		
	});
	
	$("#sIE_size02").change(function (){
		var s02 = $("#sIE_size02").val();
		//$("#sIE_size01 option[value='1']").attr("selected", "selected");
		if(s02 == 1){
			//$("#sIE_size01 option[value='1']").attr("selected", "selected");
			$("#sIE_size01").find("option[value='1']").attr("selected",true);
		}
		if(s02 == 2){
			//$("#sIE_size01 option[value='2']").attr("selected", "selected");
			$("#sIE_size01").find("option[value='2']").attr("selected",true);
		}
	});
	
	var row_number = 0 ;
	$("#insert_material1").click(function (){
		
		var material_name = $("#material_select").val();
		var size_width = $("#size_width").val();
		var size_height = $("#size_height").val();
		var color = $("#material_info_color").val();
		var quantity = $("#material_quantity").val();
		var s01 = $("#sIE_size01").val();
		var size = size_width+"*"+size_height;
		var m_unit = '';
		if(s01 == '1'){
			m_unit = 'inch';
		}
		if(s01 == '2'){
			m_unit = 'cm';
		}
		
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				//alert(locals);
				var table_value = "<tr> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+size_width+"*"+size_height+"  "+m_unit+"<input type='hidden' name='materials["+row_number+"][size_width]' value='"+size_width+"' /><input type='hidden' name='materials["+row_number+"][size_height]' value='"+size_height+"' /><input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /><input type='hidden' name='materials["+row_number+"][m_unit]' value='"+m_unit+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table").append(table_value);   //为table追加一个tr(下拉项)
			}
		});
		
		row_number++;    
	});
	
	$("#insert_material2").click(function (){
		var material_name = $("#material_select").val();
		
		var color = $("#material_info_c_color").val();
		var quantity = $("#material_c_quantity").val();
		
		var size = $("#material_c_size").val();
		var size_text = $("#material_c_size").find("option:selected").text(); 
		
		
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				var table_value = "<tr> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table").append(table_value);   //为table追加一个tr(下拉项)
			}
		});
		 
	    row_number++;    
	});
	
});

function getDel(k,row){
	//alert(row);
	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/delete_table_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'id':row},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				 
			}
	});
     $(k).parent().remove();  
	//$("#material_table1").$(k).remove();
}


function sIE_size01(n){
	
	if(n==1){
		g('sIE_size02').value=1;
	}else{
		g('sIE_size02').value=2;
	}
}
function sIE_size02(n){
	if(n==1){
		g('sIE_size01').value=1;
	}else{
		g('sIE_size01').value=2;
	}
}

function uploadok(event, queueId, fileObj, response, data){
	//alert('aaa');
}

</script> 
<!-- {/literal} -->