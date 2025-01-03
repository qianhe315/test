<?php /* Smarty version 2.6.22, created on 2024-12-12 15:24:20
         compiled from product_order/hotfix_quotation_return_order.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
    	  <div class="sIE_title">添加返单</div>
    	  	<div class="sIEK" style="width:1000px;">
            
      <form method="post" action="<?php echo $this->_tpl_vars['action']; ?>
" id="submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)"> 
      <div>           
              <div class="sIE_l">
                <div class="sIE_l_01">
                  <div class="sIE_l_01_title">业务员:</div>
                    <input type="text" name="saleman_name" value="<?php echo $this->_tpl_vars['saleman_name']; ?>
" readonly class="sIE_No" />
                </div>
                <div class="sIE_l_01">
                  <div class="sIE_l_01_title">客户代码:</div>
                    <input type="text" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" readonly class="sIE_No" />
                </div>
                
                <div class="sIE_l_01">
                  <div class="sIE_l_01_title">时间:</div>
                    <input type="text" name="quotation_date" value="<?php echo $this->_tpl_vars['q_time']; ?>
" readonly class="sIE_No" />
                </div>
                
                <div class="sIE_l_01">
                  
                  <div class="sIE_l_01_title">客户名:</div>
                    <input type="text" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" readonly class="sIE_No" />
                </div>
                <div class="sIE_l_01">
                  <div class="sIE_l_01_title">发货期:</div>
                    <select class="picture_select01"  name="deliver_goods" id="po_hqro_deliver_goods" style="height:26px; width:82px;">
                      <?php $_from = $this->_tpl_vars['quote_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
                      <option <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['time_id'] == $this->_tpl_vars['t']['id']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['t']['time_name']; ?>
"><?php echo $this->_tpl_vars['t']['time_name']; ?>
</option>
                      <?php endforeach; endif; unset($_from); ?>
                    </select>                    
                </div>
                <div class="sIE_l_01">
                  
                  <div class="sIE_l_01_title">报价名称:</div>
                    <input type="text" name="design_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" class="sIE_No" />
                </div>
                 
                
                
                <div class="sIE_l_01">
                  <div class="sIE_l_01_title">订单号:</div>
                    
                    <input type="text" name="order_number" value="<?php echo $this->_tpl_vars['order_number']; ?>
" readonly class="sIE_No" />
                </div>
                <div class="sIE_l_01">
                  <div class="sIE_l_01_title">单价:</div>
                    <input type="text" name="unite_quote" value="<?php echo $this->_tpl_vars['unite_quote']; ?>
" readonly class="sIE_No" />
                </div>
                <div class="sIE_l_01">
                  <div class="sIE_l_01_title">返单号:</div>
                    
                    <input type="text" name="single_number" value="<?php echo $this->_tpl_vars['order_return_number']; ?>
" readonly class="sIE_No" />
                </div>
                <div class="sIE_l_01">
                  <div class="sIE_l_01_title">数量:</div>
                    
                    <input type="text" name="pcs" id="po_hqro_pcs" value="<?php echo $this->_tpl_vars['pcs']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01">
                  <div class="sIE_l_01_title">客户提供单号:</div>
                    
                    <input type="text" name="customers_order" value="<?php echo $this->_tpl_vars['customer_number']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01">
                  <div class="sIE_l_01_title">版费:</div>
                    
                    <input type="text" name="costs" value="" class="sIE_No" />
                </div>

                <div class="sIE_l_01">
                  <div class="sIE_l_01_title">备损数量:</div>
                    
                    <input type="text" name="preparation_number" class="sIE_No" />
                </div>  
                
                
                <div class="sIE_l_01">
                  <div class="sIE_l_01_title">报关品类:</div>
                      <select class="picture_select01" style="width:82px; height:26px;" disabled="disabled">
                        <option value="">请选择</option>
                        <?php $_from = $this->_tpl_vars['order_category_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc']):
?> <?php if ($this->_tpl_vars['order_category'] == $this->_tpl_vars['oc']['id']): ?>
                        <option selected="selected" value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['c_name']; ?>
</option>
                        <?php else: ?>
                        <option value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['c_name']; ?>
</option>
                        <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
                      </select>
                    </div>
                
                
                <div class="sIE_l_01">
                  <div class="sIE_l_01_title">材料备损状态:</div>
                  	<input name="cailiao_status" type="radio" value="1" />是
                    <input name="cailiao_status" type="radio" value="0" checked="checked" />否
                </div>      
               <div class="sIE_l_01">
                    <div class="sIE_l_01_title">烫压测试:</div>
                      <label> 
                      <input type="radio" name="hot_test" value="1" <?php if ($this->_tpl_vars['hot_test'] == 1): ?> checked="checked"<?php endif; ?> /> 
                      是
                      </label>
                      <label> 
                      <input type="radio" name="hot_test" value="2" <?php if (( $this->_tpl_vars['hot_test'] == 2 || $this->_tpl_vars['hot_test'] == '' )): ?> checked="checked"<?php endif; ?> /> 
                      否
                      </label> 
                 </div>
                 <div class="sIE_l_01">
                    <div class="sIE_l_01_title">工厂烫压:</div>
                        <input type="radio" name="factory_hot" value="1" <?php if ($this->_tpl_vars['factory_hot'] == 1): ?> checked="checked"<?php endif; ?> /> 
                        是
                        </label>
                        <label> 
                        <input type="radio" name="factory_hot" value="2" <?php if (( $this->_tpl_vars['factory_hot'] == 2 || $this->_tpl_vars['factory_hot'] == '' )): ?> checked="checked"<?php endif; ?> /> 
                        否
                        </label> 
                </div>
                 <div class="sIE_l_01">
                    <div class="sIE_l_01_title" style="line-height:24px;">多图虚线切割:</div>
                      <input type="radio" name="dotted_line" value="1" <?php if ($this->_tpl_vars['dotted_line'] == 1): ?> checked="checked"<?php endif; ?> /> 
                      是
                      </label>
                      <label> 
                      <input type="radio" name="dotted_line" value="2" <?php if (( $this->_tpl_vars['dotted_line'] == 2 || $this->_tpl_vars['dotted_line'] == '' )): ?> checked="checked"<?php endif; ?> /> 
                      否
                      </label>  
                </div>
                
                <div style="line-height:26px; float:left; color:#F00; margin-top:5px;"><!--备损数量不为0，此做货单需要主管审核！--></div>
              <div id="po_error" style="line-height:26px; float:left; color:#F00; margin-left:5px;"></div>
                
              </div>
              
              
              
              
              <div class="sIE_r">
              	<div class="sIE_l_01" style="margin-top:0px; width:300px;">
                  <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
                  <div class="sIE_r01" style="float:left;">
                    <div class="sIE_r01_div">
                        <input type="text" name="inch_w" readonly value="<?php echo $this->_tpl_vars['inch_w']; ?>
" class="sIE_No" />
                        <div style=" margin-left:5px; float:left; line-height:22px;">inch W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" name="inch_h" readonly value="<?php echo $this->_tpl_vars['inch_h']; ?>
" class="sIE_No" />
                        <div style=" margin-left:5px; float:left; line-height:22px;">inch H</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" name="cm_w" readonly value="<?php echo $this->_tpl_vars['cm_w']; ?>
" class="sIE_No" />
                        <div style=" margin-left:5px; float:left; line-height:22px;">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" name="cm_h" readonly value="<?php echo $this->_tpl_vars['cm_h']; ?>
" class="sIE_No" />
                        <div style=" margin-left:5px; float:left; line-height:22px;">cm H</div>
                    </div>
                  </div>
                </div>
                
                
                <div class="sIE_r" style="height:200px; width:200px; margin-top:0px;">
                <div class="sIE_r_img" style="width:200px; height:200px;"><img width="200" height="200" src="<?php echo $this->_tpl_vars['image']; ?>
" /></div>
                </div>
                
                
              </div>
             <input type="hidden" name="image" value="<?php echo $this->_tpl_vars['image']; ?>
" />
             <input type="hidden" name="quotation_category" value="<?php echo $this->_tpl_vars['quotation_category']; ?>
" /> 
             <input type="hidden" name="quotation_category_id" value="<?php echo $this->_tpl_vars['quotation_category_id']; ?>
" /> 
             <input type="hidden" name="design_id" value="<?php echo $this->_tpl_vars['design_id']; ?>
" />
             <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />  
             <input type="hidden" name="order_id" value="<?php echo $this->_tpl_vars['order_id']; ?>
" /> 
             <input type="hidden"  id="order_category" name="order_category" value="<?php echo $this->_tpl_vars['order_category']; ?>
" /> 
    	  	</div>
            
            
            <!--<textarea name="remark" class="add01_textarea" style="width:800px; margin-bottom:10px;"></textarea>-->
              
              
              
              <div class="sIE_l_02" style="margin-bottom:10px;">
                	<table cellspacing="0" class="sIE_l_02Tab">
                    	<tr>
                        	<th>名称</th>
                            <th>颜色</th>
                            <th>尺寸</th>
                            <th>数量</th>
                        </tr>
                        <?php $_from = $this->_tpl_vars['quotation_material']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                        <tr>
                        	<td><?php echo $this->_tpl_vars['dis']['material_name']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['dis']['material_color']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['dis']['material_size']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['dis']['material_quantity']; ?>
</td>
                        </tr>
                        <?php endforeach; endif; unset($_from); ?>
                    </table>              	  
                </div>
    	  	</div>
        </div> 
        </div>   
     </form>  
    <div class="sIE_l_02">
  <div class="button" style="margin-left:80%; margin-right:5px;">
    <div class="buttonContent">
       <button id="submit" type="button" >确定</button>
    </div>
  </div>
  <div class="button">
    <div class="buttonContent">
       <button class="close">取消</button>
    </div>
  </div>
</div>
 		
    
</div>

<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function()  
{
	$("#jpg_upload_submit").click(function (){
		$("#upload_jpg").submit();
	});
	
    $("#submit").click(function(){
/*		if($("#po_hqro_deliver_goods").val() == ""){
			$("#po_error").css("display","block");
			$("#po_error").html("请选择发货期！");
		}
		else */
		if($("#po_hqro_pcs").val() == "" || $("#po_hqro_pcs").val() <= 0 || !isNumber_z($('#po_hqro_pcs').val()) || isEmpty($('#po_hqro_pcs').val())){
			$("#po_error").css("display","block");
			$("#po_error").html("数量不为空,且大于0！");
		}
		else if($("#order_category").val()==''){
			$("#po_error").css("display","block");
			$("#po_error").html("请选择报关品类！");
		}
		else{
			$("#submit_form").submit();
		}
	    
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