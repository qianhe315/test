<?php /* Smarty version 2.6.22, created on 2016-02-26 16:33:43
         compiled from cn_exit_storehouse/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="submit_add">
	<div class="pageFormContent" layoutH="58">
    	<!--<table class="table" width="98%" >
        	<thead>
                <tr >
                    <th width="5%">出库日期</th>
                    <th width="8%">中文名</th>
                    <th width="4%">颜色</th>
                    <th width="4%">尺寸</th>               
                    <th width="5%">数量</th>
                    <th width="5%">出库类型</th>
                    <th width="5%">出库用途</th>
                    <th width="5%">所属部门</th>
                    <th width="5%">经办人</th>
                    <th width="5%">采购单价</th>
                    <th width="5%">成本</th>
                    <th width="5%">销售单价</th>
                    <th width="3%"></th>
                </tr>
            </thead>
            <tbody id="tbody_info" >
            </tbody>
        </table><a><button type="button" id="add_one"  >添加</button></a>	-->
      <div class="unit">
      	<label>出库日期：</label>
        <input type="text" name="quote_time" id="quote_time"  datefmt="yyyy-MM-dd" value="<?php echo $this->_tpl_vars['time']; ?>
" class="date required" readonly />
        <a class="inputDateButton" href="javascript:;">选择</a>
      </div>
      <div id="quote_time_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
      <div class="unit">
      <label>中文名称：</label>
      <select class="required" name="material_name" id="material_name">
      <option value="">请选择</option>
      <?php $_from = $this->_tpl_vars['materials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ma']):
?>
      <option value="<?php echo $this->_tpl_vars['ma']['name']; ?>
"><?php echo $this->_tpl_vars['ma']['name']; ?>
</option>
      <?php endforeach; endif; unset($_from); ?>
      </select>
      </div>
       <div id="material_name_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>颜色：</label>
        <select class="required" name="material_color" id="material_color" >
        <option value="">请选择</option>
        </select>
      </div>
      <div id="material_color_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>尺寸：</label>
        <select class="required" name="material_size" id="material_size"  >
        <option value="">请选择</option>
        </select>
     </div>
     <div id="material_size_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
     <div class="divider">divider</div>
     <div class="unit">
      	<label>数量：</label>
        <input type="text" size="30" name="omr_quantity" id="omr_quantity" value=""  class="required" />
     </div>
     <div id="omr_quantity_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
     <div class="divider">divider</div>
      <div class="unit">
      <label>出库类型：</label>
      <select class="required" name="out_type" id="out_type">
      <option value="">请选择</option>
      <?php $_from = $this->_tpl_vars['cn_outbound_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ma']):
?>
      <option value="<?php echo $this->_tpl_vars['ma']['id']; ?>
"><?php echo $this->_tpl_vars['ma']['name']; ?>
</option>
      <?php endforeach; endif; unset($_from); ?>
      </select>
      </div>
      <div id="out_type_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
     <div class="unit">
      	<label>出库用途：</label>
        <textarea  name="go_use" id="go_use" class="required"  style="width: 340px; height: 80px;"  ></textarea>
     </div>
     <div id="go_use_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
     <div class="divider">divider</div>
      <div class="unit">
      <label>所属部门：</label>
      <select class="required" name="department_type" id="department_type">
      <option value="">请选择</option>
      <?php $_from = $this->_tpl_vars['user_department_set']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ma']):
?>
      <option value="<?php echo $this->_tpl_vars['ma']['id']; ?>
"><?php echo $this->_tpl_vars['ma']['department_name']; ?>
</option>
      <?php endforeach; endif; unset($_from); ?>
      </select>
      </div>
       <div id="department_type_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
     <div class="divider">divider</div>
     <div class="unit">
      	<label>经办人：</label>
        <select class="required" name="attn" id="attn" >
        <option value="">请选择</option>
        </select>
      </div>
      <div id="attn_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
	  <div class="divider">divider</div>
     <div class="unit">
      	<label>采购单价：</label>
        <input type="text" size="30" name="purchase_price" id="purchase_price" value=""  class="required" />
     </div>
     <div id="purchase_price_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
     <div class="divider">divider</div>
     <div class="unit">
      	<label>成本：</label>
        <input type="text" size="30" name="cost" id="cost" value=""  class="required" />
     </div>
     <div id="cost_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
     <div class="divider">divider</div>
     <div class="unit">
      	<label>销售单价：</label>
        <input type="text" size="30" name="sale_price" id="sale_price" value=""  class="required" />
     </div>
     <div id="sale_price_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit_form" >确认</button>
            </div>
          </div>
        </li>
        <li>
         <div class="buttonActive">
            <div class="buttonContent">
              <button class="close" >取消</button>
            </div>
          </div> </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function() {
	////添加一条材料
//	$('#add_one').click(function(){
//		var tr_number	=	$('#tbody_info').find('tr').length;
//		//alert(tr_number);
//		$.ajax({
//			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_exit_storehouse/get_select_info',
//			data:{'number':tr_number+1},
//			dataType:"json",
//			type:"post",
//			success: function(data){
//				var td_time_str	=	'<td>'+
//								'<input type="text"  id="quote_time'+(tr_number+1)+'"   value="'+data.time+'" />'+
//								'<a id="a'+(tr_number+1)+'" href="javascript:;">选择</a>'+
//								'</td>';
//				//衣服名称内容				
//				var op_m_str	=	'<option value="">请选择衣服</option>';
//				if(data.all_m!=''){
//					for(var i=0;i<data.all_m.length;i++){
//						op_m_str+='<option value="'+data.all_m[i].name+'">'+data.all_m[i].name+'</option>';
//					}
//				}
//				var td_m_str	=	'<td>'+
//									'<select class="required" id="material_name'+(tr_number+1)+'">'+op_m_str+'</select>'+
//									'</td>';
//				//颜色
//				var td_c_str	=	'<td>'+
//									'<select class="required" id="material_color'+(tr_number+1)+'">'+
//									'<option value="">请选择颜色</option>'+
//									'</select>'+
//									'</td>';
//				//尺寸
//				var td_s_str	=	'<td>'+
//									'<select class="required" id="material_size'+(tr_number+1)+'">'+
//									'<option value="">请选择尺寸</option>'+
//									'</select>'+
//									'</td>';
//				//数量
//				var td_n_str	=	'<td>'+
//									'<input  id="omr_quantity'+(tr_number+1)+'" value="" />'+
//									'</td>';
//				//出库类型
//				var op_out_str	=	'<option value="">请选择</option>';	
//				if(data.all_o!=''){
//					for(var i=0;i<data.all_o.length;i++){
//						op_out_str+='<option value="'+data.all_o[i].id+'">'+data.all_o[i].name+'</option>';
//					}
//				}			
//				var td_out_str	=	'<td>'+
//									'<select class="required" id="out_type'+(tr_number+1)+'">'+op_out_str+'</select>'+
//									'</td>';
//				//出库用途
//				var td_out_info_str	=	'<td>'+
//									'<input  id="out_info'+(tr_number+1)+'" value="" />'+
//									'</td>';
//				//所属部门
//				var op_d_str	=	'<option value="">请选择</option>';	
//				if(data.all_d!=''){
//					for(var i=0;i<data.all_d.length;i++){
//						op_d_str+='<option value="'+data.all_d[i].id+'">'+data.all_d[i].department_name+'</option>';
//					}
//				}		
//				var td_d_str	=	'<td>'+
//									'<select class="required" id="department_type'+(tr_number+1)+'">'+op_d_str+'</select>'+
//									'</td>';
//				//经办人					
//				var td_attn_str	=	'<td>'+
//									'<select class="required" id="attn'+(tr_number+1)+'">'+
//									'<option value="">请选择</option>'+
//									'</select>'+
//									'</td>';
//				//采购单价
//				var td_p_price_str	=	'<td>'+
//									'<input  id="purchase_price'+(tr_number+1)+'" value="" />'+
//									'</td>';
//				//成本
//				var td_cost_str	=	'<td>'+
//									'<input  id="cost'+(tr_number+1)+'" value="" />'+
//									'</td>';					
//				//销售单价
//				var td_sale_price_str	=	'<td>'+
//									'<input  id="sale_price'+(tr_number+1)+'" value="" />'+
//									'</td>';
//				var tr_info	=	'<tr>'+
//								td_time_str+
//								td_m_str+
//								td_c_str+
//								td_s_str+
//								td_n_str+
//								td_out_str+
//								td_out_info_str+
//								td_d_str+
//								td_attn_str+
//								td_p_price_str+
//								td_cost_str+
//								td_sale_price_str+
//								'<td>'+
//								'<a><button type="button" onclick="del_one('+(tr_number+1)+')" >添加</button></a>'+
//								'</tr>';					
//				$('#tbody_info').append(tr_info);
//				$('#quote_time'+(tr_number+1)).addClass('date required ');
//				$('#quote_time'+(tr_number+1)).attr('datefmt','yyyy-MM-dd');
//				$('#a'+(tr_number+1)).addClass('inputDateButton');
//			}	
//		});
//	});
	
	
	//材料联动获取材料颜色
	$("#material_name").change(function(){
		//获取id为select的下拉框选中的值
		//$("#omr_color_add").val("");
		var name = $("#material_name").val();
		var opti = "<option value=\"\">请选择</option>";
		if(name != ''){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_exit_storehouse/get_mp_infomation',//通过Ajax取数据的目标页面
				data:{'material_name':name},
				type:'get',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					$("#material_color").find("option").remove();
					$("#material_size").find("option").remove();
					var objs = locals.color;
					$("#material_color").append(opti);   //为Select追加一个Option(下拉项)     
					for (var o in objs) {
						var  jsonObj  =  objs[o];
						var  optionstring = "<option value=\"" + jsonObj.id + "\" >" + jsonObj.color_name + "</option>";
						$("#material_color").append(optionstring);   //为Select追加一个Option(下拉项)           
					}
				}
			});
		}
	});
		
	//材料联动获取材料尺寸
	$("#material_color").change(function (){
		var name = $("#material_name").val();
		var color = $("#material_color").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_exit_storehouse/get_mp_color_infomation',//通过Ajax取数据的目标页面
			data:{'material_name':name,'material_color':color},
			type:'get',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				var objs = locals.size;
				var size = '';
				$("#material_size").find("option").remove();	
				var  optionstring = "<option value=\"\" >请选择</option>";
				$("#material_size").append(optionstring);   //为Select追加一个Option(下拉项			
				for (var o in objs) {
					var  jsonObj  =  objs[o];
					var  optionstring = "<option value=\"" + jsonObj.id + "\" >" + jsonObj.size_name+"("+ jsonObj.size_name_E +")</option>";
					$("#material_size").append(optionstring);   //为Select追加一个Option(下拉项
				} 
			}
		});
	});
	
	//所属部门联动
	$('#department_type').change(function (){
		var d_id = $("#department_type").val();
		var opti = "<option value=\"\">请选择</option>";
		if(d_id != ''){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_exit_storehouse/get_dt_info',//通过Ajax取数据的目标页面
				data:{'d_id':d_id},
				type:'get',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					$("#attn").find("option").remove();
					if(locals!=''){
						
						var objs = locals;
						$("#material_color").append(opti);   //为Select追加一个Option(下拉项)     
						for (var o in objs) {
							var  jsonObj  =  objs[o];
							var  optionstring = "<option value=\"" + jsonObj.user_id + "\" >" + jsonObj.user_name + "</option>";
							$("#attn").append(optionstring);   //为Select追加一个Option(下拉项)           
						}
					}else{
						alert('暂无此部门人员！');	
					}
				}
			});
		}	
	});
	
	
	
	//页面提交
	$("#submit_form").click(function (){
		var quote_time=$("#quote_time").val();
		var material_name=$("#material_name").val();
		var color=$("#material_color").val();
		var size = $("#material_size").val();
		var quantity=$("#omr_quantity").val();
		var reg = /^\d+(?=\.{0,1}\d+$|$)/
		var a=reg.test(quantity);
		//var b=reg.test($("#price").val());
		//var weight=$("#omr_weight").val();
		//var a=reg.test(quantity);
		//var b=reg.test(weight);
		$('#quote_time_error').css("display","none");
		$('#material_name_error').css("display","none");
		$('#material_color_error').css("display","none");
		$('#material_size_error').css("display","none");
		$('#omr_quantity_error').css("display","none");
		$('#out_type_error').css("display","none");
		$('#go_use_error').css("display","none");
		$('#department_type_error').css("display","none");
		$('#attn_error').css("display","none");
		$('#purchase_price_error').css("display","none");
		$('#cost_error').css("display","none");
		$('#sale_price_error').css("display","none");
		
		if(quote_time==""){
			$('#quote_time_error').css("display","block");
			$("#quote_time_error").html("出库日期不可为空！");	
		}else if(material_name==""){
			$('#material_name_error').css("display","block");
			$("#material_name_error").html("材料名不可为空！");	
		}else if(color==""){
			$('#material_color_error').css("display","block");
			$("#material_color_error").html("颜色名不可为空！");
		}else if(size==""){
			$('#material_size_error').css("display","block");
			$("#material_size_error").html("尺寸名不可为空！");
		}else if(a==false){
			$('#omr_quantity_error').css("display","block");
			$("#omr_quantity_error").html("数量不为空且为正数！");
		}else if($('#out_type').val()==""){
			$('#out_type_error').css("display","block");
			$("#out_type_error").html("出库类型不能为空！");
		}else if($('#go_use').val()==""){
			$('#go_use_error').css("display","block");
			$("#go_use_error").html("出库用途不能为空！");
		}else if($('#department_type').val()==""){
			$('#department_type_error').css("display","block");
			$("#department_type_error").html("出库类型不能为空！");
		}else if($('#attn').val()==""){
			$('#attn_error').css("display","block");
			$("#attn_error").html("经办人不能为空！");
		}else if($('#purchase_price').val()==""){
			$('#purchase_price_error').css("display","block");
			$("#purchase_price_error").html("采购单价不能为空！");
		}else if($("#cost").val()==''){
			$('#cost_error').css("display","block");
			$("#cost_error").html("成本不能为空！");
		}else if($("#sale_price").val()==''){
			$('#sale_price_error').css("display","block");
			$("#sale_price_error").html("销售单价不能为空！");
		}/*else if(weight!='' && b==false){
			$('#omr_quantity_error').css("display","none");
			$('#omr_weight_error').css("display","block");
			$("#omr_weight_error").html("出库重量为正数！");	
		}*/
		else{
			$("#submit_add").submit();	
		}
		
	});
	
	
});

</script> 