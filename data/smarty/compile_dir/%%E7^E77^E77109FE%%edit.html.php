<?php /* Smarty version 2.6.22, created on 2016-11-29 17:18:22
         compiled from check_stock/edit.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="submit_add">
    <div class="pageFormContent" layoutH="58">
   <input type="hidden" size="30"  name="mid" value="<?php echo $this->_tpl_vars['inventory_list']['id']; ?>
" />
     <div class="unit">
      	<label>登记人：</label>
       <input type="text" class="required" style="width:100px;" id="procure_man" name="procure_man" value="<?php echo $this->_tpl_vars['inventory_list']['procure_man']; ?>
"/>
      </div>
      <div id="procure_man_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>时间：</label>
        <input type="text" style="width:100px;height:19px;"  id="time" name="time"  datefmt="yyyy-MM-dd" value="<?php echo $this->_tpl_vars['inventory_list']['time']; ?>
" class="date required" readonly />
      </div>
      <div id="time_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
      <div class="unit">
    <label>材料名称：</label>
        <select class="required" name="material_name" id="material_name">
       
         <?php $_from = $this->_tpl_vars['materials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mt']):
?>
                <option value="<?php echo $this->_tpl_vars['mt']['material_name']; ?>
"<?php if ($this->_tpl_vars['inventory_list']['material_name'] == $this->_tpl_vars['mt']['material_name']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['mt']['material_name']; ?>
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
            <option value="<?php echo $this->_tpl_vars['ma']['material_color']; ?>
"<?php if ($this->_tpl_vars['inventory_list']['color'] == $this->_tpl_vars['ma']['material_color']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['ma']['material_color']; ?>
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
            <?php if ($this->_tpl_vars['ma']['size'] != ""): ?>
              <option value="<?php echo $this->_tpl_vars['ma']['size']; ?>
"<?php if ($this->_tpl_vars['inventory_list']['size'] == $this->_tpl_vars['ma']['size']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['ma']['size']; ?>
</option>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['ma']['size_mm'] != ""): ?>
              <option value="<?php echo $this->_tpl_vars['ma']['size_mm']; ?>
"<?php if ($this->_tpl_vars['inventory_list']['size'] == $this->_tpl_vars['ma']['size_mm']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['ma']['size_mm']; ?>
mm</option>
            <?php endif; ?>
             <?php if ($this->_tpl_vars['ma']['size_m_w'] != ""): ?>
              <option value="<?php echo $this->_tpl_vars['ma']['size_w_h']; ?>
"<?php if ($this->_tpl_vars['inventory_list']['size'] == $this->_tpl_vars['ma']['size_w_h']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['ma']['size_w_h']; ?>
mm</option>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?> 
        </select>
     </div>
         <div id="material_size_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
    <div class="unit">
      	<label>实存数量：</label>
            <input type="text" class=""  style="width:35px;height:13px;"  id="pd_quantity"  name="pd_quantity" value="<?php echo $this->_tpl_vars['inventory_list']['number_count']; ?>
" />
            <?php $_from = $this->_tpl_vars['unit1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['u1']):
?>
            <?php if ($this->_tpl_vars['inventory_list']['unit'] == $this->_tpl_vars['u1']['id']): ?><input type="text" readonly="readonly" name="pd_quantity_unit" value="<?php echo $this->_tpl_vars['u1']['name']; ?>
" id="pd_quantity_unit" /> <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            <!--<select class="add01_select01" style=" margin-left:5px;" id="pd_quantity_unit" name="pd_quantity_unit">
              <?php $_from = $this->_tpl_vars['unit1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['u1']):
?> <option value="<?php echo $this->_tpl_vars['u1']['id']; ?>
" <?php if ($this->_tpl_vars['inventory_list']['unit'] == $this->_tpl_vars['u1']['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['u1']['name']; ?>

              </option>
              <?php endforeach; endif; unset($_from); ?>
            </select>-->
           </div>
           <div id="pd_quantity_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
     <div class="divider">divider</div>
     
     <div class="unit">
        <label>实存重量：</label>
            <input type="text" class="sIE_No" style="width:35px;height:13px;"  id="pd_weight"  name="pd_weight" value="<?php echo $this->_tpl_vars['inventory_list']['number_weight']; ?>
" />
            <select class="add01_select01" id="pd_weight_unit" style=" margin-left:5px;"  name="pd_weight_unit">
              <?php $_from = $this->_tpl_vars['unit2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['u2']):
?> <option value="<?php echo $this->_tpl_vars['u2']['id']; ?>
" <?php if ($this->_tpl_vars['inventory_list']['weight'] == $this->_tpl_vars['u2']['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['u2']['name']; ?>

              </option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
          <div id="pd_weight_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>单价：</label>
            <input type="text" class="sIE_No" style="width:35px;height:13px;"  id="price_edit"  name="price_edit" value="<?php echo $this->_tpl_vars['inventory_list']['price']; ?>
" />
            <div class="sIE_r01_div_r" style="margin-top:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;元</div>
          </div>
          <div id="price_edit_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
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

<script type="text/javascript">

$(document).ready(function()  
{
	
	//材料联动
    $("#material_name").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
			$("#material_color").val("");
    	    var a = $("#material_name").val();
    	    var opti = "<option value=\"\"></option>";
			if(a != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/check_stock/get_mp_infomation',//通过Ajax取数据的目标页面
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
    	}
    );
	
	$("#material_color").change(function (){
		var a = $("#material_name").val();
		var color = $("#material_color").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/check_stock/get_mp_color_infomation',//通过Ajax取数据的目标页面
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
 $("#submit_form").click(function () {
	    var procure_man = $("#procure_man").val();
	    var time = $("#time").val();
	    var material_name = $("#material_name").val();
	    var color = $("#material_color").val();
		var size = $("#material_size").val();
		var pd_quantity = $("#pd_quantity").val();
		var pd_quantity_unit = $("#pd_quantity_unit").val();
		var pd_weight = $("#pd_weight").val();
		var pd_weight_unit = $("#pd_weight_unit").val();
	    var price_edit = $("#price_edit").val();
		var reg = /^\d+(?=\.{0,1}\d+$|$)/;
        var a=reg.test(pd_quantity);
		var b=reg.test(pd_weight);
		var c=reg.test(price_edit);
		if(procure_man==""){
			$("#procure_man_error").css("display","block");
			$("#procure_man_error").html("请添加登记人！");
		}else if(time==""){
			$("#procure_man_error").css("display","none");
			$("#time_error").css("display","block");
			$("#time_error").html("请添加时间！");
		}else if(material_name==""){
			$("#time_error").css("display","none");
			$("#material_name_error").css("display","block");
			$("#material_name_error").html("请添加名称！");
		}else if(color==""){
			$("#material_name_error").css("display","none");
			$("#material_color_error").css("display","block");
			$("#material_color_error").html("请添加颜色！");
		}/*else if(size==""){
			$("#material_color_error").css("display","none");
			$("#material_size_error").css("display","block");
			$("#material_size_error").html("请添加尺寸！");
		}*/else if(a==false){
			$("#material_size_error").css("display","none");
			$("#pd_quantity_error").css("display","block");
			$("#pd_quantity_error").html("请添加实存数量且数量为正数！");
		}else if(c==false){
			$("#pd_quantity_error").css("display","none");
			$("#price_edit_error").css("display","block");
			$("#price_edit_error").html("请添加单价且单价为正数！");
		}else{
			if(pd_weight==""){
				$("#submit_add").submit();
			}else{
				if(b==false){
					$("#price_edit_error").css("display","none");
			        $("#pd_weight_error").css("display","block");
			        $("#pd_weight_error").html("重量应为正数！");
					
				}else{
					$("#submit_add").submit();
				}
			}
			
		}
		
		
	});


	
	});
	
	

</script> 
<!-- {/literal} -->