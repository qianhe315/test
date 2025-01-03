<?php /* Smarty version 2.6.22, created on 2015-10-20 10:38:27
         compiled from exit_storehouse/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="submit_add">
    <div class="pageFormContent" layoutH="58">
    
      <div class="unit">
      	<label>出库日期：</label>
        <input type="text" name="quote_time" id="quote_time"  datefmt="yyyy-MM-dd" value="<?php echo $this->_tpl_vars['time_add_quotecustomer']; ?>
" class="date required" readonly />
        <a class="inputDateButton" href="javascript:;">选择</a>
      </div>
      <div id="quote_time_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
      <div class="unit">
      <label>材料名称：</label>
        <select class="required" name="material_name" id="material_name">
       <option value="">请选择</option>
        <?php $_from = $this->_tpl_vars['materials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ma']):
?>
        <option value="<?php echo $this->_tpl_vars['ma']['id']; ?>
"><?php echo $this->_tpl_vars['ma']['material_name']; ?>
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
        <select class="" name="material_size" id="material_size"  >
        <option value="">请选择</option>
        </select>
     </div>
       <div id="material_size_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>数量单位：</label>
        <input type="text" readonly="readonly" name="pd_quantity_unit" value="" id="pd_quantity_unit" />
        <!--<select class="combox required" name="pd_quantity_unit" value="">
        <?php $_from = $this->_tpl_vars['unit1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['u1']):
?>
            <?php if ($this->_tpl_vars['u1']['id'] == '5'): ?>
               <option selected="selected" value="<?php echo $this->_tpl_vars['u1']['id']; ?>
"><?php echo $this->_tpl_vars['u1']['name']; ?>
</option>
            <?php else: ?>
               <option value="<?php echo $this->_tpl_vars['u1']['id']; ?>
"><?php echo $this->_tpl_vars['u1']['name']; ?>
</option>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        </select>-->
     
      </div>
      <div class="divider">divider</div>

      <div class="unit">
      	<label>出库数量：</label>
        <input type="text" size="30" name="pd_quantity" id="pd_quantity" value=""  class="required" />
      </div>
       <div id="pd_quantity_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>重量单位：</label>
        <select class="combox required" name="pd_weight_unit"  >
        <?php $_from = $this->_tpl_vars['unit2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['u2']):
?>
        <option value="<?php echo $this->_tpl_vars['u2']['id']; ?>
"><?php echo $this->_tpl_vars['u2']['name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
     
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>出库重量：</label>
        <input type="text" size="30" name="pd_weight" id="pd_weight" value="" class=""/>
      </div>
       <div id="pd_weight_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
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
	$("#material_name").change(function()
    	{
    		//获取id为select的下拉框选中的值
			//$("#pd_color_add").val("");
    	    var a = $("#material_name").val();
    	    var opti = "<option value=\"\"></option>";
			if(a != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/exit_storehouse/get_mp_infomation',//通过Ajax取数据的目标页面
					data:{'material_name':a},
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
							var  optionstring = "<option value=\"" + jsonObj.material_color + "\" >" + jsonObj.material_color + "</option>";
							$("#material_color").append(optionstring);   //为Select追加一个Option(下拉项)           
						} 
						$("#pd_quantity_unit").val(locals.unit_name);
					}
				});
			}
    	});
		
	  $("#material_color").change(function (){
		  var a = $("#material_name").val();
		  var color = $("#material_color").val();
		  $.ajax({
			  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/exit_storehouse/get_mp_color_infomation',//通过Ajax取数据的目标页面
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
					   if(jsonObj.size){
						  size = jsonObj.size;
						  
						  var optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
						  $("#material_size").append(optionstring);   //为Select追加一个Option(下拉项
					  }
					  else if(jsonObj.size_mm){
						  size = jsonObj.size_mm;
						  var optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						  $("#material_size").append(optionstring);   //为Select追加一个Option(下拉项)  
					  }
					  else if(jsonObj.size_m_w&& jsonObj.size_m_h){
						  size = jsonObj.size_m_w+'*'+jsonObj.size_m_h;
						  var optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						  $("#material_size").append(optionstring);   //为Select追加一个Option(下拉项)   
					  }
				  } 
			  }
		  });
	  });
  $("#submit_form").click(function (){
	  var quote_time=$("#quote_time").val();
	  var material_name=$("#material_name").val();
	  var color=$("#material_color").val();
	  var quantity=$("#pd_quantity").val();
	  var reg = /^\d+(?=\.{0,1}\d+$|$)/
	  var a=reg.test(quantity);
	  var weight=$("#pd_weight").val();
	  var a=reg.test(quantity);
	  var b=reg.test(weight);
	   
	  if(quote_time==""){
		  $('#quote_time_error').css("display","block");
		  $("#quote_time_error").html("出库日期不可为空！");	
		  }else if(material_name==""){
		  $('#quote_time_error').css("display","none");
		  $('#material_name_error').css("display","block");
		  $("#material_name_error").html("材料名不可为空！");	
		  }else if(color==""){
		  $('#material_name_error').css("display","none");
		  $('#material_color_error').css("display","block");
		  $("#material_color_error").html("颜色名不可为空！");
		  }else if(a==false){
		  $('#material_color_error').css("display","none");
		  $('#pd_quantity_error').css("display","block");
		  $("#pd_quantity_error").html("出库数量不为空且为正数！");
		  }else if(weight!='' && b==false){
		  $('#pd_quantity_error').css("display","none");
		  $('#pd_weight_error').css("display","block");
		  $("#pd_weight_error").html("出库重量为正数！");	
		  }
		  else{
			 /* $('#material_color_error').css("display","none");
			  $('#material_name_error').css("display","none");
			  $('#quote_time_error').css("display","none");*/
			  $('#pd_weight_error').css("display","none");
			  $('#pd_quantity_error').css("display","none");
			   var size=$("#material_size").val();
	   $.ajax({
		  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/exit_storehouse/check_size',//通过Ajax取数据的目标页面
		  data:{'material_name':material_name,'material_color':color},
		  type:'get',//方法，还可以是"post"
		  dataType:'json',//数据类型，还有其它的，详见jQuery手册
		  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		  {
			 if(locals == 1){ 
			 
			   if(size!=""){
				   $('#material_size_error').css("display","none");
			      $("#submit_add").submit();
			   }else{
				  $('#material_size_error').css("display","block");
				  $("#material_size_error").html("请选择尺寸！");
			   }
			 }
			 if(locals== 0){
			     $("#submit_add").submit();
			 }
			
		  }
	  });
	  
	
		  }
	  
	  });
	  
  
  });

</script> 