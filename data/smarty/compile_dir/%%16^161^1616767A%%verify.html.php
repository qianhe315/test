<?php /* Smarty version 2.6.22, created on 2013-04-18 10:04:24
         compiled from uncheckdesign/verify.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent"> 
  
    <div class="stkInfEnter" layoutH="100" style="width:95%; margin-left:20px;">
    	  <div class="sIE_title">设计订单</div>
    	  	<div class="sIEK">
              <div class="sIE_l" style="width:720px;">
              <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form">
              <div class="sIE_l" style="width:190px;">
        

			<div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">出图周期:</div>
            <input type="hidden" name="stock_id" value="<?php echo $this->_tpl_vars['stock_manage']['id']; ?>
" />
            <input type="text" class="sIE_No"  name="stock_code" id="stock_code" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
            </div>

			<div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">业务员:</div>
            <input type="text" class="sIE_No"  name="stock_code" id="stock_code" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
            </div>

            
<div style="float:left; margin-bottom:5px;">
             <div class="sIE_l_01_title">时间:</div>
            <input type="text" class="sIE_No"  name="stock_code" id="stock_code" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
            </div>

            
<div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">设计名称:</div>
            <input type="text" class="sIE_No"  name="stock_code" id="stock_code" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
            </div>

            
            
<div style="float:left; margin-bottom:5px;">
             <div class="sIE_l_01_title">设计类别:</div>
            <input type="text" class="sIE_No"  name="stock_code" id="stock_code" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
            </div>

            
<div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">设计编号:</div>
            <input type="text" class="sIE_No"  name="stock_code" id="stock_code" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
            </div>
            </div>
          
          
         
          
         
         <div class="sIE_l" style="width:160px;">
          <div class="sIE_l_01">
            <div class="sIE_l_01_title" style="line-height:22px; margin-bottom:12px;">尺寸:</div>
            <div class="sIE_r01">
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" id="inch_w" name="size_inch_w" value="<?php echo $this->_tpl_vars['stock_manage']['size_inch_w']; ?>
"/>
                <div class="sIE_r01_div_r">inch W</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" id="inch_h" name="size_inch_h" value="<?php echo $this->_tpl_vars['stock_manage']['size_inch_h']; ?>
"/>
                <div class="sIE_r01_div_r">inch H</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" id="cm_w" name="size_cm_w" value="<?php echo $this->_tpl_vars['stock_manage']['size_cm_w']; ?>
" />
                <div class="sIE_r01_div_r">cm W</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" id="cm_h" name="size_cm_h" value="<?php echo $this->_tpl_vars['stock_manage']['size_cm_h']; ?>
" />
                <div class="sIE_r01_div_r">cm H</div>
              </div>
            </div>
            
          </div>
          </div>
          
          
          <div class="sIE_l" style="width:360px;">
          <textarea class="add01_textarea" onfocus="if(this.value=='销售备注')this.value='';" style="width:360px; height:140px;">销售备注</textarea>
          </div>
          
          
         </form>

          
        </div>
              <div class="sIE_r" style="height:200px; width:200px;">
                <div class="sIE_r_img"></div>
                
                <input type="button" value="下载" class="DO_download" src="Design_orders.rar" />
              </div>
              
    	  	</div>
            <div class="sIE_l_02" style="margin-bottom:20px;">
            <table cellspacing="0" class="sIE_l_02Tab" id="material_table">
              <tr>
                <th>材料</th>
                <th>颜色</th>
                <th>尺寸</th>
                <th>数量</th>
                <th>操作</th>
              </tr>
              <?php if ($this->_tpl_vars['materials_select'] != ''): ?>
              <?php $_from = $this->_tpl_vars['materials_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ms']):
?>
              <tr> 
                  <td><?php echo $this->_tpl_vars['ms']['material_name']; ?>
</td> 
                  <td><?php echo $this->_tpl_vars['ms']['material_size']; ?>
</td> 
                  <td><?php echo $this->_tpl_vars['ms']['material_color']; ?>
</td> 
                  <td><?php echo $this->_tpl_vars['ms']['material_quantity']; ?>
</td>
                  <td onclick="getDel(this,<?php echo $this->_tpl_vars['ms']['id']; ?>
)"><a href="#">删除</a></td>
              </tr>
              <?php endforeach; endif; unset($_from); ?>
              <?php endif; ?>
            </table>
          </div>
            
            
            
            
            
            
            <div class="sIEK">
              
                <div class="divider">divider</div>
                
              <div class="DesignContent" style="margin-top:0px;">
                <div id="DC_01" class="DC">
                	<div class="sIE_title">设计内容</div>
                </div>
            
            <div class="sIEK">
        <div class="sIE_l" style="width:450px;">
        <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form">
        	<div class="sIE_l" style="width:190px;">

			<div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">设计名称:</div>
            <input type="hidden" name="stock_id" value="<?php echo $this->_tpl_vars['stock_manage']['id']; ?>
" />
            <input type="text" class="sIE_No"  name="stock_code" id="stock_code" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
            </div>

			<div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">设计编号:</div>
            <input type="text" class="sIE_No"  name="stock_code" id="stock_code" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
            </div>

            
<div style="float:left; margin-bottom:5px;">
             <div class="sIE_l_01_title">时间:</div>
            <input type="text" class="sIE_No"  name="stock_code" id="stock_code" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
            </div>

            

          
          
         
          
         
         
          <div class="divider">divider</div>
          <div class="sIE_l_01">
            <div class="sIE_l_01_title">尺寸:</div>
            <div class="sIE_r01">
              <div class="sIE_r01_div">
                <input type="text" style="width:130px;"  class="sIE_No" id="inch_w" name="size_inch_w" value="<?php echo $this->_tpl_vars['stock_manage']['size_inch_w']; ?>
" />
                <div class="sIE_r01_div_r">inch W</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text" style="width:130px;"  class="sIE_No" id="inch_h" name="size_inch_h" value="<?php echo $this->_tpl_vars['stock_manage']['size_inch_h']; ?>
"/>
                <div class="sIE_r01_div_r">inch H</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text" style="width:130px;"  class="sIE_No" id="cm_w" name="size_cm_w" value="<?php echo $this->_tpl_vars['stock_manage']['size_cm_w']; ?>
" />
                <div class="sIE_r01_div_r">cm W</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text" style="width:130px;"  class="sIE_No" id="cm_h" name="size_cm_h" value="<?php echo $this->_tpl_vars['stock_manage']['size_cm_h']; ?>
" />
                <div class="sIE_r01_div_r">cm H</div>
              </div>
            </div>
            
          </div>
          </div>
          
          <div class="sIE_l" style="width:240px; margin-left:10px;">
          	<textarea class="add01_textarea" onfocus="if(this.value=='销售备注')this.value='';" style="width:226px;">销售备注</textarea>
      <textarea class="add01_textarea" onfocus="if(this.value=='检验备注')this.value='';" style="width:226px;">检验备注</textarea>
          </div>
          
          
         </form>
          <div class="divider">divider</div>
          
        </div>
        <div class="sIE_r" style="width:45%;">
        
          <div class="sIE_r_img" style="height:240px; width:200px;">
          
          <div style="float:left;  width:200px; height:atuo;">
          <!--<img src="sss.jpg" width="224px" height="224px" />-->
          <iframe name="yframe" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/upload_jpg" style="border:none; " width="200px" height="200px;"></iframe>
          </div> 
          <input type="button" value="下载" class="DO_download" src="Design_orders.rar" />
        </div>
        
        
        <div class="sIE_r_img" style="height:240px; width:200px;">

          <div style="float:left; width:200px; height:atuo;">
          <!--<img src="sss.jpg" width="224px" height="224px" />-->
          <iframe name="yframecdr" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/upload_cdr" style="border:none; " width="200px" height="200px;"></iframe>
          </div> 
          <input type="button" value="下载" class="DO_download" src="Design_orders.rar" />
        </div>
          
        </div>
        
        <div class="sIEK" style=" width:30%;">
        
        
        
        
        
      </div>
      
        
        
      </div>
            
            
                </div>
                <div class="sIE_l_02" style="margin-bottom:20px;">
            <table cellspacing="0" class="sIE_l_02Tab" id="material_table">
              <tr>
                <th>材料</th>
                <th>颜色</th>
                <th>尺寸</th>
                <th>数量</th>
                <th>操作</th>
              </tr>
              <?php if ($this->_tpl_vars['materials_select'] != ''): ?>
              <?php $_from = $this->_tpl_vars['materials_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ms']):
?>
              <tr> 
                  <td><?php echo $this->_tpl_vars['ms']['material_name']; ?>
</td> 
                  <td><?php echo $this->_tpl_vars['ms']['material_size']; ?>
</td> 
                  <td><?php echo $this->_tpl_vars['ms']['material_color']; ?>
</td> 
                  <td><?php echo $this->_tpl_vars['ms']['material_quantity']; ?>
</td>
                  <td onclick="getDel(this,<?php echo $this->_tpl_vars['ms']['id']; ?>
)"><a href="#">删除</a></td>
              </tr>
              <?php endforeach; endif; unset($_from); ?>
              <?php endif; ?>
            </table>
          </div>
                <div class="sIE_l_02">
                
                	<div class="button" style="margin-left:80%; margin-right:5px;"><div class="buttonContent"><button>确定保存</button></div></div>
                	<div class="button" style="margin-right:5px;"><div class="buttonContent"><button>提交审核</button></div></div>
                    <div class="button"><div class="buttonContent"><button>取消</button></div></div>
                
              </div>
                
              </div>
                
            </div>
            
            
        </div>
    

    <div class="formBar">
      <ul>
        <li>
          
        </li>
        <li> </li>
      </ul>
    </div>
 		
    
</div>

<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function()  
{
	$("#jpg_upload_submit").click(function (){
		//alert('1111');
		$("#upload_jpg").submit();
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