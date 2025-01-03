<?php /* Smarty version 2.6.22, created on 2016-03-04 10:15:04
         compiled from cn_finishdesign/design.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <div class="stkInfEnter" layoutH="100" style="width:97%; margin-left:20px;">
    <div class="sIE_title">设计订单</div>
    <div class="sIEK">
      <div class="sIEK" style="width:35%;">
      <div style=" float:left;">
        <div class="sIE_l" style="width:540px;">
          <div class="sIE_l" style="width:220px;">
            
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">业务员:</div>
              <input type="text" class="sIE_No" style="width:100px;"  readonly="readonly" value="<?php echo $this->_tpl_vars['design']['salesman_name']; ?>
"/>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">时间:</div>
              <input type="text" class="sIE_No" style="width:100px;"  readonly="readonly" value="<?php echo $this->_tpl_vars['design']['design_date']; ?>
"/>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">出图周期:</div>
              <input type="text" class="sIE_No" style="width:100px;"  readonly="readonly" value="<?php echo $this->_tpl_vars['design']['make_pic_time_name']; ?>
"/>
            </div>


          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">客户代码:</div>
            <input type="text" name="customer_code" style="width:100px;" value="<?php echo $this->_tpl_vars['design']['customer_code']; ?>
" class="sIE_No" readonly="readonly" />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">客户名:</div>
            <input type="text" name="customer_name" style="width:100px;" value="<?php echo $this->_tpl_vars['design']['customer_name']; ?>
" class="sIE_No"  readonly="readonly" />
          </div>
          <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">设计名称:</div>
              <input type="text" class="sIE_No" style="width:100px;"   readonly="readonly" value="<?php echo $this->_tpl_vars['design']['design_name']; ?>
"/>
            </div>
          
          </div>
          <div class="sIE_l" style="width:260px;">

            <div style="float:left; margin-bottom:5px; margin-left:-20px;">
              <div class="sIE_l_01_title">设计类别:</div>
              <input type="text" class="sIE_No" style="width:120px;"  id="stock_code" readonly="readonly" newid="<?php echo $this->_tpl_vars['design']['design_category']; ?>
" value="<?php echo $this->_tpl_vars['design']['design_category']; ?>
"/>
            </div>
            <div style="float:left; margin-bottom:5px; margin-left:-20px;">
              <div class="sIE_l_01_title">设计编号:</div>
              <input type="text" class="sIE_No" style="width:120px;"  readonly="readonly" value="<?php echo $this->_tpl_vars['design']['design_code']; ?>
"/>
              <input type="hidden" name="total_count" id="total_count" value="<?php echo $this->_tpl_vars['total_count']; ?>
" />
            </div>
		  <div style="float:left; margin-bottom:5px;margin-left:-20px;" >
            <div class="sIE_l_01_title">位置:</div>
            <input type="text" class="sIE_No" style="width:120px;" id="design_code" value="<?php echo $this->_tpl_vars['cn_place1']['name']; ?>
" readonly />
          </div>

        <div class="sIE_l_01" style="margin-left:10px; width:270px;margin-left:-9px;" id="size">
        
          <div class="sIE_l_01_title" style="line-height:22px; height:100px; width:50px;">尺寸:</div>
          <div class="sIE_r01">
            <div class="sIE_r01_div">
              <input type="text"  class="sIE_No" id="inch_w" style="margin-left:19px" readonly value="<?php echo $this->_tpl_vars['design']['size_w_cm']; ?>
"/>
              <div class="sIE_r01_div_r">cm W</div>
            </div>
            <div class="sIE_r01_div">
              <input type="text"  class="sIE_No" id="inch_h" style="margin-left:19px" readonly value="<?php echo $this->_tpl_vars['design']['size_h_cm']; ?>
"/>
              <div class="sIE_r01_div_r">cm H</div>
            </div>
            
          </div>
        </div>       
        </div>
        </div>
      </div>

     </div>
     <div class="sIE_r" style="height:360px; width:360px; margin-top:20px;">
    
        <div class="sIE_r_img" style="width:360px; height:360px;"><img style="width:360px; height:360px;" src="<?php echo $this->_tpl_vars['design']['upload_jpg']; ?>
" width="360px" height="360px"  /></div>
        <div class="DO_download" style="margin-top:0px; margin-left:20px;"><a target="_blank" href="<?php echo $this->_tpl_vars['design']['upload_jpg']; ?>
" style="line-height:22px;" >
          <div class="button">
            <div class="buttonContent">
              <button style="width:60px;">下载</button>
            </div>
          </div>
          </a>
        </div>

      </div>
 
    
    <div class="sIEK" style="margin-top:20px;">
    
       <div class="divider" style="margin-top:20px;">divider</div>
      <div class="DesignContent" style="margin-top:0px;">
      
        <div id="DC_01" class="DC">
          <div class="sIE_title">设计内容</div>
        </div>
       
        <div class="sIEK" style="width:35%;">
          <div class="sIE_l" style="width:620px;">
            <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form">
             <input type="hidden" name="salesman_name" value="<?php echo $this->_tpl_vars['design']['salesman_user_name']; ?>
"/>
            <div style="float:left; width:210px;">
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">业务员:</div>
                <input type="hidden" name="design_id" value="<?php echo $this->_tpl_vars['design']['id']; ?>
" />
                <input type="hidden" name="customer_code" value="<?php echo $this->_tpl_vars['design']['customer_code']; ?>
" />
                <input type="hidden" id="design_content_id" name="design_content_id" value="<?php echo $this->_tpl_vars['design_content']['id']; ?>
" />
                <input style="width:100px;" type="text" class="sIE_No"  name="salesman_name" id="design_content_name" readonly="readonly" value="<?php echo $this->_tpl_vars['design']['salesman_name']; ?>
" />
              </div>
              
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">时间:</div>
                <input style="width:100px;" type="text" class="sIE_No"  name="design_content_date" id="design_content_date" readonly="readonly" value="<?php echo $this->_tpl_vars['design']['design_date']; ?>
"/>
              </div>              
              
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">客户代码:</div>
                <input type="text" name="customer_code" readonly="readonly" id="unf_customer_code" style="width:100px; <?php if ($this->_tpl_vars['design']['design_category'] == 11): ?> display:none<?php endif; ?>" value="<?php echo $this->_tpl_vars['design']['customer_code']; ?>
" class="sIE_No"  />
              </div>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">客户名:</div>
                <input type="text" name="customer_name" style="width:100px;" id="unf_customer_name" value="<?php echo $this->_tpl_vars['design']['customer_name']; ?>
" class="sIE_No"  readonly="readonly" />
              </div>
              
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">设计编号:</div>
                <input style="width:100px;" type="text" class="sIE_No"  name="design_content_code" id="design_content_code" readonly="readonly" value="<?php if ($this->_tpl_vars['design_content']['design_content_code']): ?><?php echo $this->_tpl_vars['design_content']['design_content_code']; ?>
<?php else: ?><?php echo $this->_tpl_vars['design_content_code']; ?>
<?php endif; ?>"/>
              </div>
             
            </div>  
			
            <?php if ($this->_tpl_vars['design']['design_category'] != 13): ?>
            <div style="float:right; width:210px;">
            
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">设计名称:</div>
                <input type="text" class="sIE_No" style="width:100px;"  name="design_name" id="design_name" value="<?php echo $this->_tpl_vars['design_content']['design_content_name']; ?>
"/>
              </div>
            
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">位置:</div>
                <select class="add01_select01" id="add01_select01" name="place_id" style="width:106px;">
                  <?php $_from = $this->_tpl_vars['cn_place']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['place']):
?>
                  	  <option <?php if ($this->_tpl_vars['design_content']['place_id'] == $this->_tpl_vars['place']['id']): ?>selected="selected"<?php endif; ?>  value="<?php echo $this->_tpl_vars['place']['id']; ?>
"><?php echo $this->_tpl_vars['place']['name']; ?>
</option>
                  <?php endforeach; endif; unset($_from); ?>
                </select>
              </div>
            
                <div class="sIE_l_01" style="width:210px;">
                  <div class="sIE_l_01_title" style="width:80px; height:50px;">尺寸:</div>
                  <div class="sIE_r01" style="width:130px;">

                    <div class="sIE_r01_div">
                      <input type="text"  class="sIE_No" style="width:55px;" name="content_cm_w" value="<?php echo $this->_tpl_vars['design_content']['content_cm_w']; ?>
" />
                      <div class="sIE_r01_div_r" style="margin-top:5px;">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                      <input type="text"  class="sIE_No" style="width:55px;" name="content_cm_h" value="<?php echo $this->_tpl_vars['design_content']['content_cm_h']; ?>
" />
                      <div class="sIE_r01_div_r" style="margin-top:5px;">cm H</div>
                    </div>
                  </div>
                </div>
                
                  <div style="float:left; margin-bottom:5px;">
                    <div class="sIE_l_01_title">PNG:</div>
                    <input type="text" class="sIE_No" style="width:100px;" size="60" name="upload_png" id="design_name" value="<?php echo $this->_tpl_vars['design_content']['upload_png']; ?>
"/>
                  </div> 
              
                  <div style="float:left; margin-bottom:5px;">
                    <div class="sIE_l_01_title">TIF:</div>
                    <input type="text" class="sIE_No" style="width:100px;" size="60" name="upload_tif" id="design_name" value="<?php echo $this->_tpl_vars['design_content']['upload_tif']; ?>
"/>
                  </div>
                 
              </div>
			<?php endif; ?>
              <input type="hidden" name="submit_value" value="" id="submit_value" />
            </form>
            
            <div id="unfinishdesign_error01" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
            
          </div>



    </div>       
      
      <?php if ($this->_tpl_vars['edit_no'] == 1 || $this->_tpl_vars['stock_manage']['status'] != 4): ?>
      <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '68'): ?>
      
      
      <?php if ($this->_tpl_vars['stock_manage']['status'] != 4): ?>
      <div class="sIE_l_02" style="margin-top:20px;">
      
        <div class="button" style="margin-left:70%; margin-right:5px;">
        
        
          <div class="buttonContent">
          
            <button id="design_content_save" value="1" name="design_content_save"  >确定保存</button>
          </div>
        </div>
        <div class="button" style="margin-right:5px;">
          <div class="buttonContent">
            <button id="design_content_verify" value="2" name="design_content_verify"  >通过审核</button>
          </div>
        </div>
        <div class="button" style="margin-right:5px;">
          <div class="buttonContent">
            <button id="design_content_callback" value="3" name="design_content_callback"  >返回未完成</button>
          </div>
        </div>
        <div class="button">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
      </div>
      <?php else: ?>
      
      <div class="sIE_l_02" style="margin-top:20px;">
      
        <div class="button" style="margin-left:90%; margin-right:5px;">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
      </div>
     <?php endif; ?> 
      
      <?php else: ?>
          
        <div class="button" style="margin-left:90%; margin-right:5px;">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
      </div>
      <?php endif; ?>
    <?php else: ?>
    <div class="sIE_l_02" style="margin-top:20px;">
        <div class="button" style="margin-left:90%; margin-right:5px;">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
      </div>
    <?php endif; ?>
    
    </div> 
  </div>
</div>
<div class="formBar">
  <ul>
    <li> </li>
    <li> </li>
  </ul>
</div>
</div>

<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function()  
{
	$("#design_content_save").click(function (){
		$("#submit_value").val('1');
		$("#info_form").submit();
	});
	
	$("#design_content_callback").click(function (){
		$("#submit_value").val('3');
		$("#info_form").submit();
	});
	
	$("#design_content_verify").click(function (){
		$("#submit_value").val('2');
		$("#info_form").submit();
	});
	
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
	
	//设计内容
	$("#inch_w_content").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#cm_w_content").val(cm_w);
		$("#cm_w1").val(cm_w);
	});
	
	$("#inch_h_content").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#cm_h_content").val(cm_h);
		$("#cm_h1").val(cm_h);
	});
	
	$("#cm_w_content").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#inch_w_content").val(inch_w);
		$("#inch_w1").val(inch_w);
	});
	
	$("#cm_h_content").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#inch_h_content").val(inch_h);
		$("#inch_h1").val(inch_h);
	});
	//end
	
    
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
/basemethod/insert_table_design_content_material',//通过Ajax取数据的目标页面
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
/basemethod/insert_table_design_content_material',//通过Ajax取数据的目标页面
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
/basemethod/delete_design_content_material',//通过Ajax取数据的目标页面
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