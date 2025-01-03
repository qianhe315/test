<?php /* Smarty version 2.6.22, created on 2013-07-31 10:35:36
         compiled from create_quotation_invoice/add_r.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
 <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="rhinestone_quotation_info_form">
  <div class="stkInfEnter" layoutH="100" style="width:95%; margin-left:20px;">
    <div class="sIE_title">烫钻报价单</div>
    <div class="sIEK">
      <div style="width:200px; float:left;">
       
          <div class="sIE_l" style="width:180px;">
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">业务员:</div>
              <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['rhinestone_quotation']['id']; ?>
" />
              <input type="hidden" name="saleman_user_id" value="<?php if ($this->_tpl_vars['rhinestone_quotation']['saleman_user_id'] != ''): ?><?php echo $this->_tpl_vars['rhinestone_quotation']['saleman_user_id']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_id']; ?>
<?php endif; ?>" />
              <input type="text" class="sIE_No"  name="saleman_name" id="saleman_name" value="<?php if ($this->_tpl_vars['rhinestone_quotation']['salesman_user_name'] != ''): ?><?php echo $this->_tpl_vars['rhinestone_quotation']['salesman_user_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
<?php endif; ?>" readonly />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">时间:</div>
              <input type="text" class="sIE_No"  name="quotation_date" id="quotation_date" value="<?php if ($this->_tpl_vars['rhinestone_quotation']['quotation_date'] != ''): ?><?php echo $this->_tpl_vars['rhinestone_quotation']['quotation_date']; ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"  readonly />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">客户代码:</div>
              <input type="text" class="sIE_No" readonly name="customer_code" id="rhinestone_quotation_customer_code" value="<?php echo $this->_tpl_vars['rhinestone_quotation']['customer_code']; ?>
" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">客户名:</div>
              <input type="text" class="sIE_No"  name="customer_name" id="rhinestone_quotation_customer_name" value="<?php echo $this->_tpl_vars['rhinestone_quotation']['customer_name']; ?>
" readonly />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">公司:</div>
              <input type="text" class="sIE_No" name="customer_company" readonly="readonly" id="rhinestone_quotation_company" value="<?php echo $this->_tpl_vars['rhinestone_quotation']['customer_company']; ?>
"  />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">报价编号:</div>
              <input type="text" class="sIE_No"  name="quotation_code" id="quotation_code" value="<?php if ($this->_tpl_vars['rhinestone_quotation']['quotation_code'] != ''): ?><?php echo $this->_tpl_vars['rhinestone_quotation']['quotation_code']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sale_user_code']; ?>
<?php endif; ?>" readonly />
            </div>
          </div>
       
      </div>
      <div class="sIEK" style=" width:24%;">
        <div class="sIE_l_01" style="margin-top:10px;width:100%;">
          <div class="sIE_l_01_title" style="height:32px; line-height:26px; width:40px;">材料:</div>
          <div class="sIE_r01">
            <div class="sIE_r01_div">
              <select class="sIE_r01_Select" id="rhinestone_quotation_material_select" style="width:150px;">
                <option value=""></option>
                <?php $_from = $this->_tpl_vars['meterials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mt']):
?>
                <option value="<?php echo $this->_tpl_vars['mt']['material_name']; ?>
"><?php echo $this->_tpl_vars['mt']['material_name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
          </div>
        </div>
        <div class="sIE_l_02" id="rhinestone_quotation_material_info" style="display:none;">
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
            <select id="rhinestone_quotation_material_info_color" class="sIE_r01_Select" style="width:150px;">
            </select>
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
            <input type="text" class="sIE_No" id="rhinestone_quotation_size_width" style="width:85px;"  />
            <div class="sIE_No" style="width:54px; margin-left:5px;">MM W</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size01">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>--> 
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
            <input type="text" class="sIE_No" id="rhinestone_quotation_size_height"  style="width:85px;" />
            <div class="sIE_No" style="width:54px; margin-left:5px;">MM H</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size02">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>--> 
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">数量:</div>
            <input type="text"  class="sIE_size" id="rhinestone_quotation_material_quantity" style="width:146px;" />
          </div>
          <button type="button" id="rhinestone_quotation_insert_material1">添加材料</button>
        </div>
        <div class="sIE_l_02" id="rhinestone_quotation_material_info_c" style="display:none;">
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
            <select id="rhinestone_quotation_material_info_c_color" class="sIE_r01_Select" style="width:150px;">
            </select>
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
            <select class="sIE_r01_Select" id="rhinestone_quotation_material_c_size" style="width:150px;">
              <option>请选择...</option>
            </select>
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">数量:</div>
            <input type="text"  class="sIE_size" id="rhinestone_quotation_material_c_quantity" style="width:146px;" />
          </div>
          <button type="button" id="rhinestone_quotation_insert_material2">添加材料</button>
        </div>
      </div>
      <div class="sIE_l_02" style="margin-top:10px;">
        <table cellspacing="0" class="sIE_l_02Tab" id="rhinestone_quotation_material_table">
          <tr>
            <th>名称</th>
            <th>颜色</th>
            <th>尺寸</th>
            <th>数量</th>
            <th>公式选择</th>
            <th>价格(元)</th>
            <th>操作</th>
          </tr>
          <?php if ($this->_tpl_vars['quotation_materials']): ?>
          <?php $_from = $this->_tpl_vars['quotation_materials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qm']):
?>
          <tr>
            <td><?php echo $this->_tpl_vars['qm']['material_name']; ?>
</td>
            <td><?php echo $this->_tpl_vars['qm']['material_color']; ?>
</td>
            <td><?php echo $this->_tpl_vars['qm']['material_size']; ?>
</td>
            <td><?php echo $this->_tpl_vars['qm']['material_quantity']; ?>
</td>
            <td><?php echo $this->_tpl_vars['qm']['formula']; ?>
</td>
            <td><?php echo $this->_tpl_vars['qm']['material_total_price']; ?>
</td>
            <td onClick="getDel(this,<?php echo $this->_tpl_vars['qm']['id']; ?>
)"><a href="#">删除</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <?php endif; ?>
          
        </table>
      </div>
      <div class="sIE_l_02">
        <table cellspacing="0" class="picture_Tab" style="border:none; width:100%;">
          <tr>
            <td><font style="float:left; margin-right:10px; line-height:24px;">合计</font>
              <input type="text"  class="sIE_No" style="width:50px;" id="total1"  value="<?php if ($this->_tpl_vars['rhinestone_quotation']['whole_cost_price']): ?><?php echo $this->_tpl_vars['rhinestone_quotation']['whole_cost_price']; ?>
<?php else: ?>0<?php endif; ?>"  name="whole_cost_price" keypress="final_quote_price(this.value);" />
              <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px;""> X 报价系数</font>
              <input type="text"  class="sIE_No" style="width:50px;" name="quote_factor" id="quote_factor" value="<?php if ($this->_tpl_vars['rhinestone_quotation']['cost_factor'] != ''): ?><?php echo $this->_tpl_vars['rhinestone_quotation']['cost_factor']; ?>
<?php else: ?><?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
<?php endif; ?>" />
              
              <input type="hidden" id="default_quote_coefficient" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
" />
              <input type="hidden" id="lowest_cost_factor" value="<?php echo $this->_tpl_vars['lowest_cost_factor']; ?>
" />
              <input type="hidden" id="quotation_status" value="<?php if ($this->_tpl_vars['rhinestone_quotation']['quotation_status']): ?><?php echo $this->_tpl_vars['rhinestone_quotation']['quotation_status']; ?>
<?php else: ?>2<?php endif; ?>" name="quotation_status" />
              <input type="hidden" id="exchange_value" value="<?php if ($this->_tpl_vars['rhinestone_quotation']['exchange_value']): ?><?php echo $this->_tpl_vars['rhinestone_quotation']['exchange_value']; ?>
<?php else: ?><?php endif; ?>" />
              <input type="hidden" id="exchangerate_character" value="<?php if ($this->_tpl_vars['rhinestone_quotation']['exchangerate_character']): ?><?php echo $this->_tpl_vars['rhinestone_quotation']['exchangerate_character']; ?>
<?php else: ?><?php endif; ?>"  />
              <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px;""> X</font>
              <select class="picture_select02" style="float:left; height:24px;" id="exchange_rate_id" name="exchange_rate_id">
                <option value="" >货币选择</option>
                <?php $_from = $this->_tpl_vars['exchanges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ex']):
?>
                <option value="<?php echo $this->_tpl_vars['ex']['id']; ?>
" <?php if ($this->_tpl_vars['rhinestone_quotation']['exchange_rate_id'] == $this->_tpl_vars['ex']['exchangerate_name']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['ex']['exchangerate_name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                
              </select>
              <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px;""> = 最终报价</font>
              <input type="text"  class="sIE_No" style="width:100px;" readonly="readonly" id="final_quote" name="final_quote" value="<?php if ($this->_tpl_vars['rhinestone_quotation']['final_quote']): ?><?php echo $this->_tpl_vars['rhinestone_quotation']['final_quote']; ?>
<?php else: ?>0<?php endif; ?>" /><span id="final_quote_result" class="error" style="display:none; width:285px;"></span></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  </form>
  <div class="formBar">
    <ul>
      <li>
        <div class="buttonActive">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
      </li>
      <li> </li>
    </ul>
  </div>
   
</div>

<!-- {literal} --> 
<script type="text/javascript">
/*function final_quote_price(value){
	var quote_factor = parseFloat($("#quote_factor").val());  //报价系数
	var exchange_value = parseFloat($("#exchange_value").val());  //汇率
		
	if($("#exchange_value").val() == ''){
		exchange_value = 0;
	}
	var result = value * quote_factor * exchange_value;
	result = result.toFixed(2);
	$("#final_quote").val(result);
}*/

$(document).ready(function()  
{
	
	
	$("#rhinestone_quotation_submit_form").click(function () {
		$("#rhinestone_quotation_info_form").submit();
	});
	
	//绑定合计报价系数计算总报价
	/*$("#total1").bind("input propertychange", function() {
		//alert($(this).val());
		
		var total1 = parseFloat($("#total1").val());   //合计
		var quote_factor = parseFloat($("#quote_factor").val());  //报价系数
		var exchange_value = parseFloat($("#exchange_value").val());  //汇率
		
		if($("#exchange_value").val() == ''){
			exchange_value = 0;
		}
		var result = total1 * quote_factor * exchange_value;
		result = result.toFixed(2);
		$("#final_quote").val(result);
	});
	*/
	$("#quote_factor").bind("input propertychange", function() {
		//alert($(this).val());
		
		var total1 = parseFloat($("#total1").val());   //合计
		var quote_factor = parseFloat($("#quote_factor").val());  //报价系数
		var exchange_value = parseFloat($("#exchange_value").val());  //汇率
		if($("#exchange_value").val() == ''){
			exchange_value = 0;
		}
		var this_value = parseFloat($(this).val());
		var lowest_cost_factor = parseFloat($("#lowest_cost_factor").val());
		if( this_value < lowest_cost_factor){
			$("#final_quote_result").css("display","block");
			$("#final_quote_result").html("*此报价系数低于标准，需要提交主管审核后生效！");
			$("#quotation_status").val('1');
		}else{
			$("#final_quote_result").css("display","none");
			$("#final_quote_result").html("");
			$("#quotation_status").val('2');
		}
		
		var result = total1 * quote_factor / exchange_value;
		result = result.toFixed(2);
		$("#final_quote").val($("#exchangerate_character").val()+result);
	});
	//end
	
	$("#inch_w").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(4);
		}
		$("#cm_w").val(cm_w);
		$("#cm_w1").val(cm_w);
	});
	
	$("#rhinestone_quotation_customer_code").bind("input propertychange", function() {
		//alert($(this).val());
		if($("#rhinestone_quotation_customer_code").val() != ''){
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_customer_info',//通过Ajax取数据的目标页面
					data:{'customer_code':$("#rhinestone_quotation_customer_code").val()},
					type:'post',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(data)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
					{
						if(data){
							//alert(data.customer_name);
							$("#rhinestone_quotation_customer_name").val(data.customer_name);
							$("#rhinestone_quotation_company").val(data.company);
						}else{
							$("#rhinestone_quotation_customer_name").val('');
							$("#rhinestone_quotation_company").val('');
						}
					}
			});
		}
	});
	
	
    
    $("#rhinestone_quotation_material_select").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#rhinestone_quotation_material_select").val();
    	    var opti = "<option value=\"\"></option>";
			if(a != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_infomation-material_name-'+a+'.html',//通过Ajax取数据的目标页面
					type:'get',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
					{
						$("#rhinestone_quotation_material_info_c_color").find("option").remove();
						$("#rhinestone_quotation_material_info_color").find("option").remove();
						//alert(locals.result);
						if(locals.result == 0){
							
						}else if(locals.result == 2){
							$("#rhinestone_quotation_material_info").css("display","none");
							$("#rhinestone_quotation_material_info_c").css("display","block");
							$("#rhinestone_quotation_material_info_color").empty();
							var objs = locals.color;
							$("#rhinestone_quotation_material_info_c_color").append(opti);   //为Select追加一个Option(下拉项)     
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.material_color + "\" >" + jsonObj.material_color + "</option>";
							    $("#rhinestone_quotation_material_info_c_color").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}else if(locals.result == 1){
							$("#rhinestone_quotation_material_info").css("display","block");
							$("#rhinestone_quotation_material_info_c").css("display","none");
							$("#rhinestone_quotation_material_info_c_color").empty();
							//alert(locals.color.length);//输出子对象数量
							var objs = locals.color;
							$("#rhinestone_quotation_material_info_color").append(opti);   //为Select追加一个Option(下拉项)        
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.color + "\" >" + jsonObj.color + "</option>";
							    $("#rhinestone_quotation_material_info_color").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}
						//alert(locals);
						//$("#customer_code").val(locals);
					}
				});
			}
    	}
    );
	
	//汇率
	$("#exchange_rate_id").change(function (){
		var a = $("#exchange_rate_id").val();
		
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_exchange_info',//通过Ajax取数据的目标页面
			data:{'id':a},
			type:'post',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				$("#exchange_value").val(locals.value);
				$("#exchangerate_character").val(locals.exchangerate_character);
				var total1 = parseFloat($("#total1").val());   //合计
				var quote_factor = parseFloat($("#quote_factor").val());  //报价系数
				var exchange_value = parseFloat(locals.value);  //汇率
				if($("#exchange_value").val() == ''){
					exchange_value = 0;
				}
				var result = total1 * quote_factor / exchange_value;
				result = result.toFixed(2);
				$("#final_quote").val($("#exchangerate_character").val()+result);
			}
		});
		
	});
	
	$("#rhinestone_quotation_material_info_c_color").change(function (){
		var a = $("#rhinestone_quotation_material_select").val();
		var color = $("#rhinestone_quotation_material_info_c_color").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_c_infomation-material_name-'+a+'-material_color-'+color+'.html',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				var objs = locals.size;
				var size = '';
				$("#rhinestone_quotation_material_c_size").find("option").remove();
				for (var o in objs) {
					var  jsonObj  =  objs[o];
					if(jsonObj.size){
						size = jsonObj.size;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
						$("#rhinestone_quotation_material_c_size").append(optionstring);   //为Select追加一个Option(下拉项
					}
					else if(jsonObj.size_mm){
						size = jsonObj.size_mm;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#rhinestone_quotation_material_c_size").append(optionstring);   //为Select追加一个Option(下拉项)  
					}
					else if(jsonObj.size_m_w&& jsonObj.size_m_h){
						size = jsonObj.size_m_w+'*'+jsonObj.size_m_h;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#rhinestone_quotation_material_c_size").append(optionstring);   //为Select追加一个Option(下拉项)   
					}
					
					        
				} 
			}
		});
		
	});
	
	
	var row_number = 0 ;
	$("#rhinestone_quotation_insert_material1").click(function (){
		
		var material_name = $("#rhinestone_quotation_material_select").val();
		var size_width = $("#rhinestone_quotation_size_width").val();
		var size_height = $("#rhinestone_quotation_size_height").val();
		var color = $("#rhinestone_quotation_material_info_color").val();
		var quantity = $("#rhinestone_quotation_material_quantity").val();
		var s01 = $("#rhinestone_quotation_sIE_size01").val();
		var size = size_width+"*"+size_height;
		var m_unit = '';
		if(s01 == '1'){
			m_unit = 'inch';
		}
		if(s01 == '2'){
			m_unit = 'cm';
		}
		var type = '1';
		//需要添加材料公式
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_rhinestone_quotation_material',//通过Ajax取数据的目标页面
			type:'post',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity,'type':type},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				//alert(locals);
				var table_value = "<tr> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+size_width+"*"+size_height+"  "+m_unit+"<input type='hidden' name='materials["+row_number+"][size_width]' value='"+size_width+"' /><input type='hidden' name='materials["+row_number+"][size_height]' value='"+size_height+"' /><input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /><input type='hidden' name='materials["+row_number+"][m_unit]' value='"+m_unit+"' /></td>  <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td>"+locals.select+"</td><td>0</td><td onClick='getDel(this,"+locals.insert_id+")'><a href='#'>删除</a></td></tr>";
				$("#rhinestone_quotation_material_table").append(table_value);   //为table追加一个tr(下拉项)
				
				
			}
		});
		
		row_number++;    
	});
	
	$("#rhinestone_quotation_insert_material2").click(function (){
		var material_name = $("#rhinestone_quotation_material_select").val();
		
		var color = $("#rhinestone_quotation_material_info_c_color").val();
		var quantity = $("#rhinestone_quotation_material_c_quantity").val();
		
		var size = $("#rhinestone_quotation_material_c_size").val();
		var size_text = $("#rhinestone_quotation_material_c_size").find("option:selected").text(); 
		var type = '2';
		var s=0;
		//不需添加材料公式
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_rhinestone_quotation_material',//通过Ajax取数据的目标页面
			type:'post',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity,'type':type},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				var total_price = locals.total_price;
				var table_value = "<tr> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td><td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td>  <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td></td><td>"+total_price+"</td><td onClick='getDel(this,"+locals.insert_id+")'><a href='#'>删除</a></td></tr>";
				$("#rhinestone_quotation_material_table").append(table_value);   //为table追加一个tr(下拉项)
				
				$("#total1").val(locals.m_total_price);
				/*var p = parseFloat(parseFloat(total_price) +   parseFloat($("#total1").val()));
				$("#total1").val(p);*/
/*				 $("#rhinestone_quotation_material_table tr:gt(1)").each(function(){
					 alert($(this).children("td").eq(5).text());
					//var s=parseFloat($(this).children("td").eq(5).text());
					//s += s;
					
				 });*/
				 //alert(s);
				//计算总报价
				var total1 = parseFloat($("#total1").val());   //合计
				var quote_factor = parseFloat($("#quote_factor").val());  //报价系数
				var exchange_value = parseFloat($("#exchange_value").val());  //汇率
				
				if($("#exchange_value").val() == ''){
					exchange_value = 0;
				}
				var result = total1 * quote_factor / exchange_value;
				result = result.toFixed(2);
				$("#final_quote").val($("#exchangerate_character").val()+result);
				//end
			}
		});
		 
	    row_number++;    
	});
	
});

function getDel(k,row){
	//alert(row);
	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/delete_rhinestone_quotation_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'id':row},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				 $("#total1").val(locals);
			}
	});
	//计算总报价
				var total1 = parseFloat($("#total1").val());   //合计
				var quote_factor = parseFloat($("#quote_factor").val());  //报价系数
				var exchange_value = parseFloat($("#exchange_value").val());  //汇率
				
				if($("#exchange_value").val() == ''){
					exchange_value = 0;
				}
				var result = total1 * quote_factor / exchange_value;
				result = result.toFixed(2);
				$("#final_quote").val($("#exchangerate_character").val()+result);
     $(k).parent().remove();  
	//$("#material_table1").$(k).remove();
}

function calculate_price(price,value,k,formula_id){
	//alert(price);
	//alert(value);
	//alert(k);
	var size = $(k).parent().parent().children("td:eq(2)").text();
	var num = $(k).parent().parent().children("td:eq(3)").text();
	var s=0;
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/price_num',//通过Ajax取数据的目标页面，从材料公式计算价格
		type:'post',//方法，还可以是"post"
		data:{'size':size,'id':price,'value':value,'num':num,'formula_id':formula_id},
		dataType:'json',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
		{
			$(k).parent().parent().children("td:eq(5)").text(locals.result);	
			
			$("#total1").val(locals.m_total_price);
			
			//计算总报价
			var total1 = parseFloat($("#total1").val());   //合计
			var quote_factor = parseFloat($("#quote_factor").val());  //报价系数
			var exchange_value = parseFloat($("#exchange_value").val());  //汇率
				
			if($("#exchange_value").val() == ''){
				exchange_value = 0;
			}
			var result = total1 * quote_factor / exchange_value;
			result = result.toFixed(2);
			$("#final_quote").val($("#exchangerate_character").val()+result);
			//end
		}
	}); 

}

function price_num(key){
	$(document).ready(function(){						
		var price = $("#price"+key).val();
	    price = price.replace(new RegExp(/(除)/g),'/');
		price = price.replace(new RegExp(/(加)/g),'+');
		price = price.replace(new RegExp(/(减)/g),'-');
		price = price.replace(new RegExp(/(乘)/g),'*');
	    price =  eval('('+price+')');
	    var material_price = $("#material_price").text();
		$("#price_a" + key).html(price + "元");
		material_price = material_price.replace("元","");
		var material_price_num = material_price + "+" + price;
	    alert(material_price_num);
		//$("#material_price").html(eval('('+material_price_num+')') + "元");
	 });
					   
}
</script> 
<!-- {/literal} -->