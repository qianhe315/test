<?php /* Smarty version 2.6.22, created on 2016-03-17 16:32:35
         compiled from cn_unfinishdesign/edit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>

<!--  批量上传调用-->     
<link rel="stylesheet" type="text/css" href="http://<?php echo $this->_tpl_vars['host']; ?>
/js/diyUpload/css/webuploader.css">
<link rel="stylesheet" type="text/css" href="http://<?php echo $this->_tpl_vars['host']; ?>
/js/diyUpload/css/diyUpload.css">
<script type="text/javascript" src="http://<?php echo $this->_tpl_vars['host']; ?>
/js/diyUpload/js/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="http://<?php echo $this->_tpl_vars['host']; ?>
/js/diyUpload/js/diyUpload.js"></script>
<!--  批量上传调用--> 


<div class="pageContent">
  <div class="stkInfEnter" layoutH="100" style="width:97%; margin-left:20px;">
    <div class="sIE_title">设计信息录入</div>
    
    <div class="sIEK" style="width:65%;" id="table_size">
    	<div style="width:470px; float:left;">
      <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form">
        <div class="sIE_l" style="width:200px;">
        
          <input type="hidden" name="stock_id" value="<?php echo $this->_tpl_vars['design']['id']; ?>
" />
          <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
          <div style="float:left; margin-bottom:5px;">
          
            <div class="sIE_l_01_title">业务员:</div>
            <input type="hidden" class="sIE_No" style="width:100px;"  name="salesman_id" id="salesman_id" value="<?php if ($this->_tpl_vars['design']['salesman_id'] != ''): ?><?php echo $this->_tpl_vars['design']['salesman_id']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_id']; ?>
<?php endif; ?>" />
            <input type="text" class="sIE_No" style="width:100px;"  name="salesman_user_name" id="salesman_user_name" value="<?php if ($this->_tpl_vars['design']['salesman_user_name'] != ''): ?><?php echo $this->_tpl_vars['design']['salesman_user_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
<?php endif; ?>" readonly />
          </div>
          <?php endif; ?>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">时间:</div>
            <input type="text" class="sIE_No" style="width:100px;"  name="design_date" id="design_date" value="<?php if ($this->_tpl_vars['design']['design_date'] != ''): ?><?php echo $this->_tpl_vars['design']['design_date']; ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"  readonly />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">出图周期:</div>
            <input type="hidden" name="stock_id" value="<?php echo $this->_tpl_vars['design']['id']; ?>
" />
            <select class="add01_select01" id="add01_select01" name="make_pic_time" style="width:106px;">
              <?php $_from = $this->_tpl_vars['time_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time']):
?>
              <option <?php if ($this->_tpl_vars['design']['make_pic_time'] == $this->_tpl_vars['time']['id']): ?>selected="selected"<?php endif; ?>  value="<?php echo $this->_tpl_vars['time']['id']; ?>
"><?php echo $this->_tpl_vars['time']['time_name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">客户代码:</div>
            <input type="text" name="customer_code" id="unf_customer_code" style="width:100px; <?php if ($this->_tpl_vars['design']['design_category'] == 11): ?> display:none<?php endif; ?>" value="<?php echo $this->_tpl_vars['design']['customer_code']; ?>
" class="sIE_No" onkeyup="customer_num();" />
            <input type="text" name="601_customer_code" id="601_customer_code" style="width:100px;<?php if ($this->_tpl_vars['design']['design_category'] != 11): ?> display:none<?php endif; ?>" readonly="readonly" value="<?php echo $this->_tpl_vars['design']['customer_code']; ?>
" class="sIE_No"  />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">客户名:</div>
            <input type="text" name="customer_name" style="width:100px;" id="unf_customer_name" value="<?php echo $this->_tpl_vars['design']['customer_name']; ?>
" class="sIE_No"  readonly="readonly" />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">设计名称:</div>
            <input type="text" class="sIE_No" style="width:100px;"  name="design_name" id="design_name" value="<?php echo $this->_tpl_vars['design']['design_name']; ?>
"/>
          </div>
        </div>

        <div class="sIE_l" style="width:260px;">
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">设计类别:</div>
            <input type="text" readonly class="sIE_No" style="width:100px;"  name="design_category" id="design_category" value="<?php echo $this->_tpl_vars['design']['design_category']; ?>
"/>
          </div>
          <div style="float:left; margin-bottom:5px;">
          
            <div class="sIE_l_01_title">设计编号:</div>
            <input type="text" class="sIE_No"  name="design_code" style="width:120px;" id="design_code" value="<?php echo $this->_tpl_vars['design']['design_code']; ?>
" readonly />
          </div>
        
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">位置:</div>
            <select class="add01_select01" id="add01_select01" name="place_id" style="width:106px;">
              <?php $_from = $this->_tpl_vars['cn_place']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['place']):
?>
              <option <?php if ($this->_tpl_vars['design']['place_id'] == $this->_tpl_vars['place']['id']): ?>selected="selected"<?php endif; ?>  value="<?php echo $this->_tpl_vars['place']['id']; ?>
"><?php echo $this->_tpl_vars['place']['name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
        
        <div class="sIE_l_01" style="margin-left:10px; width:260px;" id="size">
        
          <div class="sIE_l_01_title" style="line-height:22px; height:100px; width:50px;">尺寸:</div>
          <div class="sIE_r01">
            <div class="sIE_r01_div">
              <input type="text"  class="sIE_No" id="inch_w" name="size_w_cm" style="margin-left:19px" value="<?php echo $this->_tpl_vars['design']['size_w_cm']; ?>
"/>
              <div class="sIE_r01_div_r">cm W</div>
            </div>
            <div class="sIE_r01_div">
              <input type="text"  class="sIE_No" id="inch_h" name="size_h_cm" style="margin-left:19px" value="<?php echo $this->_tpl_vars['design']['size_h_cm']; ?>
"/>
              <div class="sIE_r01_div_r">cm H</div>
            </div>
            
          </div>
        </div>       
        </div>
        <textarea class="add01_textarea" onfocus="if(this.value=='备注')this.value='';" style="width:220px; height:140px; margin-left:10px;"><?php if ($this->_tpl_vars['design']['note']): ?><?php echo $this->_tpl_vars['design']['note']; ?>
<?php else: ?>备注<?php endif; ?></textarea>
        </form>
     
            <div id="unfinishdesign_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
        </div>
        <div class="sIEK" style=" width:210px;" id="siek">
		</div>

  </div>
	<div class="sIE_r" style="width:20%;">
        <div class="sIE_r_img" style="height:380px; width:360px; margin-left:0px;">
        <div style="float:left;  width:360px; height:360px;"> 
          <!--<img src="sss.jpg" width="224px" height="224px" />-->
          <iframe name="yframe_unfinish" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_unfinishdesign/upload_jpg" style="border:none; " width="360px" height="360px;"></iframe>
        </div>
        <div id="upload_name" style="float:left; margin-top:0px; font-size:14px; margin-left:10px;height:20px; width:200px;"></div>
      </div>
      <div style="float:left; margin-top:0px; width:360px;">
          <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_unfinishdesign/upload_jpg" id="upload_jpg" target="yframe_unfinish" method="post" enctype="multipart/form-data" >                                   
            <div style="float:left; height:50px; width:80px; overflow:hidden; position:relative;">
                 <input type="file" class="sIE_r_img_file" name="upload_file" onchange="image()" id="upload_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                 <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:80px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                </div>
                 <input type="submit" value="上传JPG/PNG" id="jpg_upload_submit" style=" float:right; width:90px; height:24px;" /> 
            </form>
        </div>

    </div>
    
</div>
</div>
<div class="formBar">
  <ul>
    <li>
      <div class="buttonActive">
        <div class="buttonContent">
          <button type="button" id="submit_form">确认</button>
        </div>
      </div>
    </li>
    <li>
    	<div class="buttonActive">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
    </li>
  </ul>
</div>
</div>

<script type="text/javascript">
function image(){
	$("#upload_name").html($("#upload_file").val())
}
function image_cdr(){
	$("#upload_name_cdr").html($("#upload_cdr").val())
}
$(document).ready(function()  
{
	if($("#quotation_categroy").val()==13){
		$("#design_NO").prop("readonly", true);
		$("#color_date").prop("readonly", true);
		$("#size").css("display","none");
		$("#siek").css("display","none");
		$("#m_list").css("display","none");
		$("#table_size").css("width","35%");
	}
	
	$("#jpg_upload_submit").click(function (){
		//alert('1111');
		$("#upload_jpg").submit();
	});
	$("#cdr_upload_submit").click(function (){
		//alert('1111');
		$("#content_upload_cdr").submit();
	});
	
	
	$("#submit_form").click(function () {

			if($("#design_name").val() == ""){
				$("#unfinishdesign_error").css("display","block");
				$("#unfinishdesign_error").html("请填写设计名称！");
			}else if($("#unf_customer_name").val()== ""){
				$("#unfinishdesign_error").css("display","block");
				$("#unfinishdesign_error").html("客户名不能为空！");
			}else if($("#inch_w").val()== "" || $("#inch_h").val()== ""){
				$("#unfinishdesign_error").css("display","block");
				$("#unfinishdesign_error").html("尺寸不能为空！");
			}else{
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_unfinishdesign/check_photo',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#unfinishdesign_error").css("display","none");
							$("#info_form").submit();
						}else{
							$("#unfinishdesign_error").css("display","block");
							$("#unfinishdesign_error").html("请上传图片,且名称不包含空格！");
							
						}
					}
				});
			}
		
	    
	});
	
	
	$("#inch_w").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#cm_w").val(cm_w);
		$("#cm_w1").val(cm_w);
	});
	
	$("#inch_h").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#cm_h").val(cm_h);
		$("#cm_h1").val(cm_h);
	});
	
	$("#cm_w").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#inch_w").val(inch_w);
		$("#inch_w1").val(inch_w);
	});
	
	$("#cm_h").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#inch_h").val(inch_h);
		$("#inch_h1").val(inch_h);
	});


	$("#size_width_unfinish_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_w = $(this).val() / 25.4;
		if(mm_w != ''){
			mm_w = mm_w.toFixed(2);
		}
		$("#size_inch_width_unfinish_edit").val(mm_w);
	});
	
	$("#size_height_unfinish_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_h = $(this).val() / 25.4;
		if(mm_h != ''){
			mm_h = mm_h.toFixed(2);
		}
		
		$("#size_inch_height_unfinish_edit").val(mm_h);
	});
	
	$("#size_inch_width_unfinish_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() * 25.4;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#size_width_unfinish_edit").val(inch_w);
	});
	
	$("#size_inch_height_unfinish_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() * 25.4;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#size_height_unfinish_edit").val(inch_h);
	});
	
	$("#quotation_categroy").change(function (){
		var qc = $("#quotation_categroy").val();
		if(qc == '6'){
			$("#siek").css("display","none");
			$("#material_table_unfinish_edit").css("display","none");
		}else{
			$("#siek").css("display","");
			$("#material_table_unfinish_edit").css("display","");
		}
		if(qc != '' ){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_design_code-design_category-'+qc+'.html',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
				{
					$("#design_code").val(locals);
				}
			});
		}
		if(qc==13){
			$("#design_NO").prop("readonly", true);
			$("#color_date").prop("readonly", true);
			$("#size").css("display","none");
			$("#siek").css("display","none");
			$("#m_list").css("display","none");
			$("#table_size").css("width","35%");
		}else{
			$("#design_NO").prop("readonly", false);
			$("#color_date").prop("readonly", false);
			$("#size").css("display","block");
			$("#siek").css("display","block");
			$("#m_list").css("display","block");
			$("#table_size").css("width","65%");
		}
		
	});
    
    $("#material_select_unfinish_edit").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#material_select_unfinish_edit").val();
    	    var opti = "<option value=\"\"></option>";
			if(a != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_infomation',//通过Ajax取数据的目标页面
					data:{'material_name':a},
					type:'get',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
					{
						$("#material_info_color_unfinish_edit").find("option").remove();
						$("#material_info_c_color_unfinish_edit").find("option").remove();
						$("#material_c_size_unfinish_edit").find("option").remove();
						$("#material_c_quantity_unfinish_edit").val("");	
						$("#size_width_unfinish_edit").val("");
						$("#size_height_unfinish_edit").val("");
						$("#material_quantity_unfinish_edit").val("1");
						if(locals.result == 0){
							
						}else if(locals.result == 2){
							$("#material_info_unfinish_edit").css("display","none");
							$("#material_info_c_unfinish_edit").css("display","block");
							$("#material_info_color_unfinish_edit").empty();
							var objs = locals.color;
							$("#material_info_c_color_unfinish_edit").append(opti);   //为Select追加一个Option(下拉项)     
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.material_color + "\" >" + jsonObj.material_color + "</option>";
							    $("#material_info_c_color_unfinish_edit").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}else if(locals.result == 1){
							$("#material_info_unfinish_edit").css("display","block");
							$("#material_info_c_unfinish_edit").css("display","none");
							$("#material_info_c_color_unfinish_edit").empty();
							//alert(locals.color.length);//输出子对象数量
							var objs = locals.color;
							$("#material_info_color_unfinish_edit").append(opti);   //为Select追加一个Option(下拉项)        
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.color + "\" >" + jsonObj.color + "</option>";
							    $("#material_info_color_unfinish_edit").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}
						//alert(locals);
						//$("#customer_code").val(locals);
					}
				});
			}
    	}
    );
	
	$("#material_c_size_unfinish_edit").change(function (){
	    $("#material_c_quantity_unfinish_edit").val("");
	});
	
	$("#material_info_color_unfinish_edit").change(function (){
	    $("#size_width_unfinish_edit").val("");
		$("#size_height_unfinish_edit").val("");
		$("#material_quantity_unfinish_edit").val("1");
	});		
	
	$("#material_info_c_color_unfinish_edit").change(function (){
		var a = $("#material_select_unfinish_edit").val();
		var color = $("#material_info_c_color_unfinish_edit").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_c_infomation',//通过Ajax取数据的目标页面
			data:{'material_name':a,'material_color':color,},
			type:'get',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				var objs = locals.size;
				var size = '';
				$("#material_c_size_unfinish_edit").find("option").remove();
				$("#material_c_quantity_unfinish_edit").val("");				
				for (var o in objs) {
					var  jsonObj  =  objs[o];
					if(jsonObj.size){
						size = jsonObj.size;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
						$("#material_c_size_unfinish_edit").append(optionstring);   //为Select追加一个Option(下拉项
					}
					else if(jsonObj.size_mm){
						size = jsonObj.size_mm;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size_unfinish_edit").append(optionstring);   //为Select追加一个Option(下拉项)  
					}
					else if(jsonObj.size_m_w&& jsonObj.size_m_h){
						size = jsonObj.size_m_w+'*'+jsonObj.size_m_h;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size_unfinish_edit").append(optionstring);   //为Select追加一个Option(下拉项)   
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
	$("#insert_material1_unfinish_edit").click(function (){
		
		var material_name = $("#material_select_unfinish_edit").val();
		var size_width = $("#size_inch_width_unfinish_edit").val();
		var size_height = $("#size_inch_height_unfinish_edit").val();
		var color = $("#material_info_color_unfinish_edit").val();
		var quantity = $("#material_quantity_unfinish_edit").val();
		var s01 = $("#sIE_size01").val();
		var size = size_width+"*"+size_height;
		var m_unit = '';
		if(s01 == '1'){
			m_unit = 'inch';
		}
		if(s01 == '2'){
			m_unit = 'cm';
		}
		
		if($("#material_info_color_unfinish_edit").val()!="" && $("#size_width_unfinish_edit").val()!="" && $("#size_height_unfinish_edit").val()!="" && $("#material_quantity_unfinish_edit").val()!=""){
		
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_design_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				if(locals != 0){
				var table_value = "<tr class='uf_tabClass01'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+size_width+"*"+size_height+" inch "+m_unit+"<input type='hidden' name='materials["+row_number+"][size_width]' value='"+size_width+"' /><input type='hidden' name='materials["+row_number+"][size_height]' value='"+size_height+"' /><input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /><input type='hidden' name='materials["+row_number+"][m_unit]' value='"+m_unit+"' /></td>  <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table_unfinish_edit").append(table_value);   //为table追加一个tr(下拉项)
				}else{
					alert("材料数据有重复,请重新录入");
				}
			}
		});
		
		row_number++;
		}else{
			alert("请添加完整信息！");
		}
	});
	
	$("#insert_material2_unfinish_edit").click(function (){
		var material_name = $("#material_select_unfinish_edit").val();
		
		var color = $("#material_info_c_color_unfinish_edit").val();
		var quantity = $("#material_c_quantity_unfinish_edit").val();
		
		var size = $("#material_c_size_unfinish_edit").val();
		var size_text = $("#material_c_size_unfinish_edit").find("option:selected").text(); 
		
		if($("#material_info_c_color_unfinish_edit").val()!="" && $("#material_c_size_unfinish_edit").val()!="" && $("#material_c_quantity_unfinish_edit").val()!=""){
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_design_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				if(locals != 0){
				var table_value = "<tr class='uf_tabClass01'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td><td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td>  <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table_unfinish_edit").append(table_value);   //为table追加一个tr(下拉项)
				}else{
					alert("此数据有重复,请重新录入");
				}
			}
		});
		 
	    row_number++;
		}else{
			alert("请添加完整信息！");
		}
	});
	
});

function getDel(k,row){
	//alert(row);
	var material_name = $("#material_select_unfinish_edit").val();
	var size_width = $("#size_inch_width_unfinish_edit").val();
	var size_height = $("#size_inch_height_unfinish_edit").val();
	var color = $("#material_info_color_unfinish_edit").val();
	var quantity = $("#material_quantity_unfinish_edit").val();
	var color2 = $("#material_info_c_color_unfinish_edit").val();
	var quantity2 = $("#material_c_quantity_unfinish_edit").val();
	var size = size_width+"*"+size_height;
	var size2 = $("#material_c_size_unfinish_edit").val();
	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/delete_design_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'id':row,'material_name':material_name,'material_color':color,'material_color2':color2,'material_size':size,'material_size2':size2,'material_quantity':quantity,'material_quantity2':quantity2},
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
<script type="text/javascript" language="javascript">
					function customer_num(){
						var name = $("#unf_customer_code").val();
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_customer',//通过Ajax取数据的目标页面
							data:{"name":name},
							type:'post',//方法，还可以是"post"
							dataType:'json',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								if(locals){
									$("#unf_customer_name").val(locals.customer_name);
									$("#unf_customer_company").val(locals.company);
								}else{
									$("#unf_customer_name").val('');
									$("#unf_customer_company").val('');									
								}
							}								
							
						});
					}
</script>





<!--<script type="text/javascript"> 
function test() 
{ var num = document.getElementById("num").value; 
if (num=="") 
{ alert('请输入内容'); return false; }
 if (!(/(^[1-9]\d*$)/.test(num))) 
 { alert('输入的不是正整数'); return false; }
 else { alert('输入的是正整数'); } }
</script> -->