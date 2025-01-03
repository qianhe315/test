<?php /* Smarty version 2.6.22, created on 2015-12-10 17:11:23
         compiled from cn_check_stock/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <div class="stkInfEnter" style="width:100%; margin-left:-108px;" layoutH="30">
    <div class="sIE_title" align="center" style="font-size:36px;">盘点</div>
    <form method="post" style="float:left;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form">
    <div class="sIEK" style="width: 80%;">
     <div class="sIE_l" style="width:200px; margin-left:250px; margin-top:25px;">
        <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">登记人:</div>
            <input type="text" class="required" style="width:100px;" id="procure_man" name="procure_man" value="<?php echo $this->_tpl_vars['name']; ?>
"/>
         </div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">时间:</div>
          <input type="text" style="width:100px;height:19px;"  id="time" name="time"  datefmt="yyyy-MM-dd" value="<?php echo $this->_tpl_vars['time_add_quotecustomer']; ?>
" class="date required" readonly />
         </div>
      </div>
         
      <div class="sIE_l" style="width:260px; margin-left:50px; margin-top:25px;">
        <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">名称:</div>
            <select class="add01_select01"  id="material_name" style="width:105px;" name="material_name">
              <option value=""></option>
                <?php $_from = $this->_tpl_vars['materials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mt']):
?>
                <option value="<?php echo $this->_tpl_vars['mt']['name']; ?>
"><?php echo $this->_tpl_vars['mt']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
         <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">颜色:</div>
            <select class="add01_select01" id="material_color" style="width:105px;" name="material_color">
            </select>
          </div>
          
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">尺寸:</div>
            <select class="add01_select01" id="material_size" style="width:105px; height:24px;" name="material_size">
              <option></option>
            </select>
          </div>
         <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">实存数量:</div>
            <input type="text" class="sIE_No" style="width:65px;" id="pd_quantity"  name="pd_quantity" value="" />
            <input type="text"  disabled="disabled" name="pd_quantity_unit" value="" id="pd_quantity_unit" style="height:21px;width:45px;margin-left:5px;" />
            <input type="hidden"  name="pd_unit" value="" id="pd_unit" />
           </div>
           
          <!--<div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">实存重量:</div>
            <input type="text" class="sIE_No" style="width:65px;" id="pd_weight"  name="pd_weight" value="" />
            <select class="add01_select01" id="pd_weight_unit" style="height:24px; width:50px; margin-left:5px;" name="pd_weight_unit">
              <?php $_from = $this->_tpl_vars['unit2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['u2']):
?>
              <option  <?php if ($this->_tpl_vars['u2']['id'] == '3'): ?>selected="selected"<?php endif; ?>  value="<?php echo $this->_tpl_vars['u2']['name']; ?>
"><?php echo $this->_tpl_vars['u2']['name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>-->
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">单价:</div>
            <input type="text" class="sIE_No" style="width:65px;" id="price"  name="price" value="" />
             <div class="sIE_r01_div_r" style="margin-top:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;元</div>
          </div>
       
          <button type="button" id="material_add">添加材料</button>
          <div id="mp_error" style=" color:#FFF; background-color:#F00; height:21px; line-height:21px; text-align:center; padding-left:5px; padding-right:5px; float:left; margin-bottom:10px; display:none;"></div>
       </div>
     
       </form>
   
      <div class="sIE_l_02" style="width:100%; margin-left:120px;">
      <table cellspacing="0" class="sIE_l_02Tab" id="mp_table_add">
        <tr>
          <th>名称</th>
          <th>颜色</th>
          <th>尺寸</th>
          <th>数量</th>
          <th>单位</th>
          <th>单价</th>
          <th>总价</th>
          <th>操作</th>
        </tr>
        
      </table>
    </div></div>
    <div class="sIE_l_02" style="margin-top:180px;">
  
          <div class="button" style="margin-left:85%; margin-right:5px;">
    		<div class="buttonContent">
       			 <button type="button" id="submit_form">确定</button>
    		</div>
  		</div>
  		<div class="button" style="margin-left:90%; margin-right:5px; margin-top:-25px;">
    		<div class="buttonContent">
       			<button class="close">取消</button>
    		</div>
  		</div>
	
    </div> 
<script type="text/javascript">

$(document).ready(function()  
{
	
	//材料联动获取颜色
    $("#material_name").change(
    	function(){
    		//获取id为select的下拉框选中的值
			$("#material_color").val("");
    	    var name = $("#material_name").val();
    	    var opti = "<option value=\"\"></option>";
			if(name != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_check_stock/get_mp_infomation',//通过Ajax取数据的目标页面
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
    	}
    );
	
	//材料联动获取尺寸
	$("#material_color").change(function (){
		var name = $("#material_name").val();
		var color = $("#material_color").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_check_stock/get_mp_color_infomation',//通过Ajax取数据的目标页面
			data:{'material_name':name,'material_color':color},
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
					var  optionstring = "<option value=\"" + jsonObj.id + "\" >" + jsonObj.size_name+"("+ jsonObj.size_name_E +")</option>";
					$("#material_size").append(optionstring);   //为Select追加一个Option(下拉项
				} 
			}
		});
	});
	
	//材料联动的获取单位
	$("#material_size").change(function (){
		var name = $("#material_name").val();
		var color = $("#material_color").val();
		var size = $("#material_size").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_metrial_procure/get_pd_unit',//通过Ajax取数据的目标页面
			data:{'material_name':name,'material_color':color,'material_size':size},
			type:'get',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{ 
				$("#pd_unit").val(locals.id);
				$("#pd_quantity_unit").val(locals.name);
			}
		});
	});
	
	//添加材料
	$("#material_add").click(function (){
		$("#mp_error").css("display","none");
		var row_number = 0;
		var material_name = $("#material_name").val();
	    var color = $("#material_color").val();
		var size = $("#material_size").val();
		var pd_quantity = $("#pd_quantity").val();
		var pd_unit = $("#pd_unit").val();
		//var pd_weight = $("#pd_weight").val();
		//var pd_weight_unit = $("#pd_weight_unit").val();
		var price = $("#price").val();
		var total = price*pd_quantity;
		var reg = /^\d+(?=\.{0,1}\d+$|$)/;
        var a=reg.test(pd_quantity);
        //var b=reg.test(pd_weight);
		var c=reg.test(price);
		var color_text = $("#material_color").find("option:selected").text(); 
		var size_text = $("#material_size").find("option:selected").text(); 
		//if(pd_weight!=""){
//		  if($("#material_name").val()!="" && $("#material_color").val()!="" && $("#pd_quantity").val()!="" && $("#price").val()!="" && a!=false && c!=false&& b!=false){
//			  $.ajax({
//				  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_check_stock/insert_table_design_material',//通过Ajax取数据的目标页面
//				  type:'get',//方法，还可以是"post"
//				  data:{'material_name':material_name,'material_color':color,'material_size':size,'pd_quantity':pd_quantity,'pd_quantity_unit':pd_quantity_unit,'pd_weight':pd_weight,'pd_weight_unit':pd_weight_unit,'price':price},
//				  dataType:'json',//数据类型，还有其它的，详见jQuery手册
//				  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
//				  {  
//					 
//					  if(locals!= 0){
//						  var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+size+"' /></td> <td>"+pd_quantity+"<input type='hidden' name='materials["+row_number+"][pd_quantity]' value='"+pd_quantity+"' /></td> <td>"+pd_quantity_unit+"<input type='hidden' name='materials["+row_number+"][pd_quantity_unit]' value='"+pd_quantity_unit+"' /></td> <td>"+pd_weight+"<input type='hidden' name='materials["+row_number+"][pd_weight]' value='"+pd_weight+"' /></td> <td>"+pd_weight_unit+"<input type='hidden' name='materials["+row_number+"][pd_weight_unit]' value='"+pd_weight_unit +"' /></td> <td>"+price+"<input type='hidden' name='materials["+row_number+"][price]' value='"+price +"' /></td> <td>"+total+"<input type='hidden' name='materials["+row_number+"][total]' value='"+total +"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
//						  $("#mp_table_add").append(table_value);   //为table追加一个tr(下拉项)
//					  }else{
//						  alert("材料数据有重复,请重新录入");
//					  }
//				  }
//			  });
//			   
//			  row_number++;
//		  }else{
//			   
//			  alert("请添加完整信息并且实存数量和单价和数量为正数！");
//		  }
//		}else{
		if($("#material_name").val()!="" && $("#material_color").val()!="" && $("#pd_quantity").val()!="" && $("#price").val()!="" && a!=false && c!=false){
		  $.ajax({
			  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_check_stock/insert_table_design_material',//通过Ajax取数据的目标页面
			  type:'get',//方法，还可以是"post"
			  data:{'material_name':material_name,'material_color':color,'material_size':size,'pd_quantity':pd_quantity,'pd_unit':pd_unit,'price':price},
			  dataType:'json',//数据类型，还有其它的，详见jQuery手册
			  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			  {  
				 if(locals!= 0){
					  var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+color_text+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td></td><td>"+size_text+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+size+"' /></td> <td>"+pd_quantity+"<input type='hidden' name='materials["+row_number+"][pd_quantity]' value='"+pd_quantity+"' /></td> <td>"+$("#pd_quantity_unit").val()+"<input type='hidden' name='materials["+row_number+"][pd_unit]' value='"+pd_unit+"' /></td> <td>"+price+"<input type='hidden' name='materials["+row_number+"][price]' value='"+price +"' /></td> <td>"+total+"<input type='hidden' name='materials["+row_number+"][total]' value='"+total +"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
					  $("#mp_table_add").append(table_value);   //为table追加一个tr(下拉项)
				  }else{
					  alert("材料数据有重复,请重新录入");
				  }
			  }
		  });
		  row_number++;
	  }else{
		   
		  alert("请添加完整信息并且实存数量和单价为正数！");
	  }
	});
	
	//页面提交
    $("#submit_form").click(function () {
		if(!$(".mp_tabClass01").is(":visible")){
			$("#mp_error").css("display","block");
			$("#mp_error").html("请添加材料项！");
		}
		else{
			$("#info_form").submit();
		}
	});
	
});

	//材料删除	
	function getDel(k,row){
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_check_stock/delete_design_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'id':row},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				
			}
		});
		$(k).parent().remove();  
	}	
</script> 
<!-- {/literal} -->