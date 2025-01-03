<?php /* Smarty version 2.6.22, created on 2016-01-08 16:20:05
         compiled from cn_other_register_storage/edit.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="submit_add">
    <div class="pageFormContent" layoutH="58">
    <input type="hidden" size="30"  name="mid" value="<?php echo $this->_tpl_vars['get_omr_list']['id']; ?>
" />
      <div class="unit">
      	<label>入库日期：</label>
        <input type="text" name="quote_time" id="quote_time" class="date required" readonly value="<?php echo $this->_tpl_vars['get_omr_list']['quote_time']; ?>
"/>
        <a class="inputDateButton" href="javascript:;">选择</a>
      </div>
      <div id="quote_time_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
      <div class="unit">
    <label>材料名称：</label>
        <select class="required" name="material_name" id="material_name">
        <?php $_from = $this->_tpl_vars['materials_name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ma']):
?>
        <option value="<?php echo $this->_tpl_vars['ma']['name']; ?>
"<?php if ($this->_tpl_vars['get_omr_list']['omr_name'] == $this->_tpl_vars['ma']['name']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['ma']['name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
      </div>
       <div id="material_name_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>颜色：</label>
        <select class="required" name="material_color" id="material_color" >
        
         <?php $_from = $this->_tpl_vars['materials_color']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ma']):
?>
            <option value="<?php echo $this->_tpl_vars['ma']['id']; ?>
"<?php if ($this->_tpl_vars['get_omr_list']['omr_color'] == $this->_tpl_vars['ma']['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['ma']['name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?> 
        </select>
      </div>
      <div id="material_color_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>尺寸：</label>
        <select class="" name="material_size" id="material_size"  >
            <?php $_from = $this->_tpl_vars['materials_size']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ma']):
?>
                <option value="<?php echo $this->_tpl_vars['ma']['id']; ?>
"<?php if ($this->_tpl_vars['get_omr_list']['omr_size'] == $this->_tpl_vars['ma']['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['ma']['name1']; ?>
(<?php echo $this->_tpl_vars['ma']['name']; ?>
)</option>
            <?php endforeach; endif; unset($_from); ?> 
        </select>
      </div>
      <div id="material_size_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>入库数量：</label>
        <input type="text" size="30" name="omr_quantity" id="omr_quantity" value="<?php echo $this->_tpl_vars['get_omr_list']['omr_quantity']; ?>
"  class="required" />
      </div>
      <div id="omr_quantity_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
	<div class="divider">divider</div>
     <div class="unit">
      	<label>单价：</label>
        <input type="text" size="30" name="price" id="price" value="<?php echo $this->_tpl_vars['get_omr_list']['price']; ?>
"  class="required" />
     </div>
     <div id="price_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
     <div class="divider">divider</div>
     <div class="unit">
      	<label>入库来源：</label>
        <input type="text" size="30" name="go_where" id="go_where" value="<?php echo $this->_tpl_vars['get_omr_list']['go_where']; ?>
"  class="required" />
     </div>
     <div id="go_where_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
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

<script type="text/javascript">
$(document).ready(function() {
	//获取材料颜色
	$("#material_name").change(function(){
		//获取id为select的下拉框选中的值
		//$("#omr_color_add").val("");
		var name = $("#material_name").val();
		var opti = "<option value=\"\"></option>";
		if(name != ''){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_other_register_storage/get_mp_infomation',//通过Ajax取数据的目标页面
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
	
	//获取材料的尺寸
	$("#material_color").change(function (){
		var name = $("#material_name").val();
		var color = $("#material_color").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_other_register_storage/get_mp_color_infomation',//通过Ajax取数据的目标页面
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
	
	//页面提交
	$("#submit_form").click(function (){
		var quote_time=$("#quote_time").val();
		var material_name=$("#material_name").val();
		var color=$("#material_color").val();
		var size=$("#material_size").val();
		var quantity=$("#omr_quantity").val();
		var reg = /^\d+(?=\.{0,1}\d+$|$)/
		var a=reg.test(quantity);
		var b=reg.test($("#price").val());
		//  var weight=$("#omr_weight").val();
		//var a=reg.test(quantity);
		//var b=reg.test(weight);
		$('#quote_time_error').css("display","none"); 
		$('#material_name_error').css("display","none");
		$('#material_color_error').css("display","none");
		$('#material_size_error').css("display","none");
		$('#omr_quantity_error').css("display","none");
		
		if(quote_time==""){
			$('#quote_time_error').css("display","block");
			$("#quote_time_error").html("入库日期不可为空！");	
		}else if(material_name==""){
			$('#material_name_error').css("display","block");
			$("#material_name_error").html("材料名不可为空！");	
		}else if(color==""){
			$('#material_color_error').css("display","block");
			$("#material_color_error").html("颜色名不可为空！");
		}else if(a==false){
			$('#omr_quantity_error').css("display","block");
			$("#omr_quantity_error").html("入库数量不为空且为正数！");
		}else if(b==false){
			$('#price_error').css("display","block");
			$("#price_error").html("单价不为空且为正数！");
		}else if($("#go_where").val()==''){
			$('#go_where_error').css("display","block");
			$("#go_where_error").html("入库来源不为空！");
		}
		else{
			$("#submit_add").submit();
		}
	});
});

</script> 