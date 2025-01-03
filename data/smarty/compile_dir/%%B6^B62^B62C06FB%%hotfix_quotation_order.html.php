<?php /* Smarty version 2.6.22, created on 2022-03-02 16:24:54
         compiled from send_out_info/hotfix_quotation_order.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
    	  <div class="sIE_title">填写做货单</div>
    	  	<div class="sIEK" style="width:1000px;">
     		 <div>           
              <div class="sIE_l" style="float:left; width:200px;">
                <div class="sIE_l_01" style="width:100%;">
                  <div class="sIE_l_01_title">业务员:</div>
                    <input type="text" name="saleman_name" value="<?php echo $this->_tpl_vars['saleman_name']; ?>
" readonly class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:100%;">
                  <div class="sIE_l_01_title">数量:</div>
                    
                    <input type="text" name="pcs" value="<?php echo $this->_tpl_vars['pcs']; ?>
" readonly class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:100%;">
                  <div class="sIE_l_01_title">时间:</div>
                    <input type="text" name="quotation_date" value="<?php echo $this->_tpl_vars['q_time']; ?>
" readonly class="sIE_No" />
                </div>             
                <div class="sIE_l_01" style="width:100%;">
                  <div class="sIE_l_01_title">报价编号:</div>
                    
                    <input type="text" name="quotation_code" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" readonly class="sIE_No" />
                </div> 
                <div class="sIE_l_01" style="width:100%;">
                  <div class="sIE_l_01_title">颜色:</div>
                    
                    <input type="text" name="color" value="<?php echo $this->_tpl_vars['color']; ?>
" readonly class="sIE_No" />
                </div> 
                <div class="sIE_l_01" style="width:100%;">
                  <div class="sIE_l_01_title">产品分类:</div>
                    
                    <input type="text" name="color" value="<?php echo $this->_tpl_vars['product_type']; ?>
" readonly class="sIE_No" />
                </div>                        
                </div>                        
              </div>
              
              <div class="sIE_r" style="width:70%;">
              	<div class="sIE_l_01" style="margin-top:0px; width:260px;">
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
                
                <textarea name="remark" class="add01_textarea" style="width:160px; margin-bottom:10px; float:left;"><?php echo $this->_tpl_vars['remark']; ?>
</textarea>
                
                
                <div class="sIE_r" style="height:260px; width:200px; margin-top:0px;">
                <div class="sIE_r_img" style="width:225px; height:225px;"><img width="120" height="120" src="<?php echo $this->_tpl_vars['image']; ?>
" /></div>
                <div class="sIE_l_01_title" style="margin-left:50px; width:40px; line-height:30px;">设计师:</div>
                    <input type="text" name="design_name" value="<?php echo $this->_tpl_vars['design_name']; ?>
" readonly class="sIE_No" />
                </div>
              </div> 
    	  	</div>               
    	  	</div>
        </div> 
        </div>
       
   <div class="formBar">
  <ul>
  <?php if ($this->_tpl_vars['quanxian'] == 'admin' || $this->_tpl_vars['quanxian'] == 'kazuo'): ?>
  <?php if ($this->_tpl_vars['examine_status'] != '2' && $this->_tpl_vars['export_status'] != '2'): ?>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button id="examine_2_save" value="2" name="examine_2"  >审核通过</button>
            </div>
          </div>
        </li>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button id="examine_3_save" value="3" name="examine_3"  >问题单</button>
            </div>
          </div>
        </li>
    <?php endif; ?>
   <?php endif; ?>  
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

<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function()  
{
	
    $("#examine_2_save").click(function(){
		$("#submit_value").val('2');
	    $("#submit_form").submit();
    });
	
    $("#examine_3_save").click(function(){
		$("#submit_value").val('3');
	    $("#submit_form").submit();
    });		
	
	$("#jpg_upload_submit").click(function (){
		$("#upload_jpg").submit();
	});
	
    $("#design_content_save").click(function(){
	    $("#submit_form").submit();
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