<?php /* Smarty version 2.6.22, created on 2015-12-14 15:20:18
         compiled from cn_metrial_procure/edit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <div class="stkInfEnter" layoutH="100" style="width:97%; margin-left:20px;">
    <div class="sIE_title">采购信息录入</div>
    
    <div class="sIEK" style="width:80%;">
    	<div style="width:470px; float:left;">
          <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form">
          	<input type="hidden" id="exchangerate_character" value="<?php echo $this->_tpl_vars['exchangerate_character']; ?>
" />
            <div class="sIE_l" style="width:200px;">
            <input type="hidden" class="sIE_No"  name="ids" id="ids" value="<?php echo $this->_tpl_vars['ids']; ?>
"  />
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">负责人:</div>
                <input type="text" class="sIE_No" style="width:100px;"  name="procure_man" value="<?php echo $this->_tpl_vars['metrial_procure']['procure_man']; ?>
"  />
              </div>
              <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
              <div style="float:left; margin-bottom:5px;">
              
                <div class="sIE_l_01_title">用途:</div>
                <input type="text" class="sIE_No" style="width:100px;"  name="use"  value="<?php echo $this->_tpl_vars['metrial_procure']['use']; ?>
" />
              </div>
              <?php endif; ?>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">最迟发货期:</div>
                <input type="text" class="sIE_No date" style="width:100px;"  name="late_delivery_date"  value="<?php echo $this->_tpl_vars['metrial_procure']['late_delivery_date']; ?>
"  readonly="readonly" />
              </div>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">供应商代码:</div>
                <input type="text" class="sIE_No" style="width:100px;" id="supplier_code"  name="supplier_code" onkeyup="select_supplier();"  value="<?php echo $this->_tpl_vars['metrial_procure']['supplier_code']; ?>
"/>
              </div>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">供应商:</div>
                <input type="text" class="sIE_No" style="width:100px;" id="supplier_s"  name="supplier_s"  value="<?php echo $this->_tpl_vars['metrial_procure']['supplier_s']; ?>
" readonly="readonly" />
              </div>
              
             <div id="mp_error" style=" color:#FFF; background-color:#F00; height:21px; line-height:21px; text-align:center; padding-left:5px; padding-right:5px; float:left; margin-bottom:10px; display:none;"></div>
              
            </div>
            <div class="sIE_l" style="width:200px; margin-left:50px;">
            
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">采购单号:</div>
                <input type="text" class="sIE_No" style="width:100px;"  name="purchase_order_number" value="<?php echo $this->_tpl_vars['metrial_procure']['purchase_order_number']; ?>
"  />
              </div>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">发货方式:</div>
                <input type="text" class="sIE_No" style="width:100px;"  name="shipping_method" value="<?php echo $this->_tpl_vars['metrial_procure']['shipping_method']; ?>
"  />
              </div>
              <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
              <div style="float:left; margin-bottom:5px;">
              
                <div class="sIE_l_01_title">收货地址:</div>
                <select class="add01_select01" style="width:106px; height:24px;" name="address">
                  <?php $_from = $this->_tpl_vars['pga']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
                  <option <?php if ($this->_tpl_vars['metrial_procure']['address'] == $this->_tpl_vars['p']['id']): ?> selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['p']['id']; ?>
"><?php echo $this->_tpl_vars['p']['name']; ?>
</option>
                  <?php endforeach; endif; unset($_from); ?>
                </select>
              </div>
              <?php endif; ?>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">货币:</div>
                <select class="add01_select01" id="exchangerate" style="width:106px; height:24px;" name="currency">
                  <?php $_from = $this->_tpl_vars['exchangerate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['exc']):
?>
                  <option <?php if ($this->_tpl_vars['exc']['id'] == $this->_tpl_vars['metrial_procure']['currency']): ?> selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['exc']['id']; ?>
"><?php echo $this->_tpl_vars['exc']['exchangerate_name']; ?>
</option>
                  <?php endforeach; endif; unset($_from); ?>
                </select>
              </div>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">是否含税:</div>
                <select class="add01_select01" id="tax" style="width:106px; height:24px;" name="tax" onchange="change_tax()">
                <?php if ($this->_tpl_vars['metrial_procure']['tax'] == '1'): ?>
                  <option value="1" selected="selected">是</option>
                  <option value="2">否</option>
                <?php elseif ($this->_tpl_vars['metrial_procure']['tax'] == '2'): ?>  
                  <option value="1">是</option>
                  <option value="2" selected="selected">否</option>
                <?php else: ?>
                  <option value="1">是</option>
                  <option value="2" selected="selected">否</option>
                <?php endif; ?>
                </select>
                
              </div>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">总金额:</div>
                 <input type="text" class="sIE_No" id="total_amount" style="width:100px; "  name="total_amount" value="<?php echo $this->_tpl_vars['metrial_procure']['total_amount']; ?>
" readonly="readonly"  />
              </div>
              <?php if ($this->_tpl_vars['metrial_procure']['tax'] == '1'): ?>
              <div id="tax_value_k" style="display:block;">
              <?php else: ?>
              <div id="tax_value_k" style="display:none;">
              <?php endif; ?>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">税点:</div>
                <input type="text" class="sIE_No" id="tax_value" style="width:100px; text-align:right;" onkeyup="change_tax_amount()"  name="tax_value" value="<?php echo $this->_tpl_vars['metrial_procure']['tax_value']; ?>
"  /><font style="float:left; line-height:26px;">%</font>
              </div>
              <!--<div class="sIE_l" style="width:180px; margin-top:0px;">
                (如税点是17%,请填写0.17)
              </div>-->
              
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">税后金额:</div>
                <input type="text" class="sIE_No" id="after_tax_amount" style="width:100px; "  name="after_tax_amount" value="<?php echo $this->_tpl_vars['metrial_procure']['after_tax_amount']; ?>
"  readonly="readonly" />
              </div>
              </div>
            </div>
            </form>
        </div>
        <?php if ($this->_tpl_vars['storage_status'] == '2'): ?>
        <div class="sIE_l" style="width:280px; float:left; margin-left:50px;">
        
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">名称:</div>
            <select class="add01_select01"  id="insert_mp_add" style="width:126px; height:24px;" name="pd_name">
              <option value=""></option>
                <?php $_from = $this->_tpl_vars['meterials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mt']):
?>
                <option value="<?php echo $this->_tpl_vars['mt']['name']; ?>
"><?php echo $this->_tpl_vars['mt']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
          <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
          <div style="float:left; margin-bottom:5px;">
          
            <div class="sIE_l_01_title">颜色:</div>
            <select class="add01_select01" id="mp_color_add" style="width:126px; height:24px;" name="pd_color">
              
            </select>
          </div>
          <?php endif; ?>
          
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">尺寸:</div>
            <select class="add01_select01" id="mp_size_add" style="width:126px; height:24px;" name="pd_size">
              <option></option>
            </select>
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">数量:</div>
            <input type="text" class="sIE_No" style="width:65px;" id="pd_quantity"  name="pd_quantity" value="" />
            <input type="text" class="sIE_No" disabled="disabled" style="width:65px;  width:45px; margin-left:5px;" id="pd_unit"  value="" />
            <input type="hidden"  id="pd_quantity_unit" name="pd_quantity_unit"  value="">
          </div>
         <!-- <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">重量:</div>
            <input type="text" class="sIE_No" style="width:65px;" id="pd_weight"  name="pd_weight" value="" />
            <select class="add01_select01" id="pd_weight_unit" style="height:24px; width:50px; margin-left:5px;" name="pd_weight_unit">
              <?php $_from = $this->_tpl_vars['unit_add2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ua2']):
?>
              <option  value="<?php echo $this->_tpl_vars['ua2']['id']; ?>
"><?php echo $this->_tpl_vars['ua2']['name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
          <div style="float:left; margin-bottom:5px; display:none;" id="huansuan">
            <div class="sIE_l_01_title">数量换算:</div>
            <input type="text" class="sIE_No" style="width:65px;" id="mp_translated_add"  name="pd_translated" value="" />
            <select class="add01_select01" style="height:24px; width:50px; margin-left:5px;" id="mp_unit1" name="pd_translated_unit1"  disabled="disabled" >
              
            </select>
            <font style="float:left; line-height:24px; margin-left:5px; margin-right:5px;"> = </font>
            <select class="add01_select01" style="height:24px; width:50px; margin-left:5px;" id="mp_unit2" name="pd_translated_unit2" disabled="disabled" >
              
            </select>
          </div>-->
         <button type="button" id="mp_add">添加材料</button>
         <input type="hidden" id="all_purchase_details"  value="<?php echo $this->_tpl_vars['purchase_details']; ?>
" /> <!--所有材料的信息-->
        </div>
    <?php endif; ?>
    <div class="sIE_l_02" style="width:85%;">
      <table cellspacing="0" class="sIE_l_02Tab" id="mp_table_add">
        <tr>
          <th>中文名</th>
          <th>颜色</th>
          <th>尺寸</th>
          <th>数量</th>
          <th>单位</th>
          <th>单价</th>
          <th>操作</th>
        </tr>
        <?php if ($this->_tpl_vars['purchase_details'] != ''): ?>
        <?php $_from = $this->_tpl_vars['purchase_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pd']):
?>
        <tr class="mp_tabClass01">
          <td id="pd_name<?php echo $this->_tpl_vars['pd']['id']; ?>
"><?php echo $this->_tpl_vars['pd']['pd_name']; ?>
</td>
          <td id="pd_color<?php echo $this->_tpl_vars['pd']['id']; ?>
"><?php echo $this->_tpl_vars['pd']['color_name']; ?>
</td>
          
          <td><?php echo $this->_tpl_vars['pd']['size_name']; ?>
(<?php echo $this->_tpl_vars['pd']['size_name_E']; ?>
)</td>        
          <input type="hidden" id="pd_size<?php echo $this->_tpl_vars['pd']['id']; ?>
"  value="<?php echo $this->_tpl_vars['pd']['pd_size']; ?>
" />
          <td><input type="hidden" id="pd_q_<?php echo $this->_tpl_vars['pd']['id']; ?>
"  value="<?php echo $this->_tpl_vars['pd']['pd_quantity']; ?>
" /><?php echo $this->_tpl_vars['pd']['pd_quantity']; ?>
</td>
          <td><?php echo $this->_tpl_vars['pd']['pd_quantity_unit']; ?>
</td>
          <td>
          <?php if ($this->_tpl_vars['storage_status'] == '2'): ?>
          <font class="exchangerate_character"><?php echo $this->_tpl_vars['pd']['exchangerate_character']; ?>
</font><input type="text" style="width:148px;" id="pd_unit_price<?php echo $this->_tpl_vars['pd']['id']; ?>
" value="<?php echo $this->_tpl_vars['pd']['pd_unit_price']; ?>
" onkeyup="supplier_price_change(<?php echo $this->_tpl_vars['pd']['id']; ?>
)" />
          <input type="hidden" id="val_<?php echo $this->_tpl_vars['pd']['id']; ?>
"  value="<?php echo $this->_tpl_vars['pd']['all_price']; ?>
" />
          <?php else: ?>
          <font class="exchangerate_character"><?php echo $this->_tpl_vars['pd']['exchangerate_character']; ?>
</font><input type="text" style="width:148px;" readonly="readonly" id="pd_unit_price<?php echo $this->_tpl_vars['pd']['id']; ?>
" value="<?php echo $this->_tpl_vars['pd']['pd_unit_price']; ?>
" onkeyup="supplier_price_change(<?php echo $this->_tpl_vars['pd']['id']; ?>
)" />
          <?php endif; ?>
          </td>
          <?php if ($this->_tpl_vars['storage_status'] == '2'): ?>
          <td onclick="getDel(this,<?php echo $this->_tpl_vars['pd']['id']; ?>
)">          
          <a href="#">删除</a>
          </td>
          <?php else: ?>
          <td></td>
          <?php endif; ?>
          
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
      </table>
    </div>
  </div>
   
</div>
<div class="formBar">
  <ul>
  <?php if ($this->_tpl_vars['storage_status'] == '2'): ?>
  <?php if ($this->_tpl_vars['edit_no'] == 1): ?>
    <li>
     	<div class="buttonActive">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
    </li>
  <?php else: ?>
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
   <?php endif; ?>
   <?php endif; ?>
  </ul>
</div>
</div>

<!-- {literal} --> 
<script type="text/javascript">
//修改材料 供应商颜色的js
//function supplier_color_change(key){
///*	alert(key);alert();*/
//	   $(document).ready(function(){
//		   var pd_unit_price = $("#pd_unit_price"+key).val();
//		   if(pd_unit_price == ''){
//			   pd_unit_price = 0;
//			}
//		   $.ajax({
//				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_metrial_procure/temporary_change',//通过Ajax取数据的目标页面
//				data:{"color":$("#pd_supplier_color"+key).val(),"id":key,"price":pd_unit_price,"pd_name":$("#pd_name"+key).text(),"pd_color":$("#pd_color"+key).text(),"pd_size":$("#pd_size"+key).text(),"mp_code":$("#supplier_code").val()},
//				type:'post',//方法，还可以是"post"
//				dataType:'text',//数据类型，还有其它的，详见jQuery手册
//				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
//				{
//					if(locals == 2){
//						alert("单价请填写正确的数字（注：不要带特殊符号）")
//					}													
//				}								
//				
//			});
//		})
//};

	//修改材料 单价的js
	function supplier_price_change(key){
	   $(document).ready(function(){
		   var pd_unit_price = $("#pd_unit_price"+key).val();//单个金额
		   var pd_quantity	=	 $("#pd_q_"+key).val();//单个数量
		   var total_amount	=	$("#total_amount").val();//总金额
		   var all_price	=	$("#val_"+key).val();//单个材料原来的总价
		   var last_price	=	eval('('+total_amount + "-" + all_price+ ')');//减去当前单条材料后的值
		   if(pd_unit_price == ''){
			   pd_unit_price = 0;
		   }

		   $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_metrial_procure/price_change',//通过Ajax取数据的目标页面
				data:{"id":key,"price":pd_unit_price,'cn_m_id':$('#ids').val()},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(locals == 2){
						alert("单价请填写正确的数字（注：不要带特殊符号）")
					}else{
						//$("#pd_unit_price"+key).attr("disabled","disabled");
						var new_all_price		=	eval('('+pd_unit_price + "*" + pd_quantity+ ')');//计算单条金额：材料的单价*数量
						$("#val_"+key).val(new_all_price);//单条金额
						var end_total_price	=	 eval('('+last_price + "+" + new_all_price+ ')');//计算总金额:所以单条金额的和
						$("#total_amount").val(end_total_price);
						
						if($("#tax").val()==1){	
							if($("#tax_value").val()!=''){
								$("#after_tax_amount").val(eval('('+end_total_price + "*"+"(" + $("#tax_value").val()+ "/" + 100 + "+" + 1+ ")" +')').toFixed(2));//计算税后金额 ：总金额*（1+税点）
							}
						}	
					}													
				}								
				
			});
		})
	};



$(document).ready(function()  
{
	
	//页面提交
	$("#submit_form").click(function () {
		if($("#supplier_code").val() == ""){
			$("#mp_error").css("display","block");
			$("#mp_error").html("供应商代码不能为空！");
		}
		else if($("#supplier_s").val()== ""){
			$("#mp_error").css("display","block");
			$("#mp_error").html("供应商未能查到！");
		}
		else if(!$(".mp_tabClass01").is(":visible")){
			$("#mp_error").css("display","block");
			$("#mp_error").html("请添加材料项！");
		}
		else{
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_metrial_procure/empty_check',//通过Ajax取数据的目标页面
				data:{},
				type:'get',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(locals[0] == 1 ){
						locals1=locals[1].split(",");
						for(var i=0;i<locals1.length;i++){
							if( $("#pd_unit_price"+locals1[i]).val() == '' ){
								$("#mp_error").css("display","block");
								$("#mp_error").html("单价不可为空！");
								break;
							}else{
								$("#mp_error").css("display","none");
								$("#mp_error").html("");
							}
						}
						if(!$("#mp_error").is(":visible")){
							$("#info_form").submit();
						}
					}
					else {
						if($("#pd_unit_price"+locals[1]).val() == '' ){
								$("#mp_error").css("display","block");
								$("#mp_error").html("单价不可为空！");
							}else{
								$("#mp_error").css("display","none");
								$("#mp_error").html("");
							}
						if(!$("#mp_error").is(":visible")){
							$("#info_form").submit();
						}
					}
				}
			});
		}
	});
	
	
	
	//根据材料名称获取材料的颜色
    $("#insert_mp_add").change(
    	function(){
    		//获取id为select的下拉框选中的值
			$("#pd_color_add").val("");
    	    var name = $("#insert_mp_add").val();
    	    var opti = "<option value=\"\"></option>";
			if(name != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_metrial_procure/get_mp_infomation',//通过Ajax取数据的目标页面
					data:{'material_name':name},
					type:'get',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						$("#mp_color_add").find("option").remove();
						$("#mp_size_add").find("option").remove();
						var objs = locals.color;
						$("#mp_color_add").append(opti);   //为Select追加一个Option(下拉项)     
						for (var o in objs) {
							var  jsonObj  =  objs[o];
							var  optionstring = "<option value=\"" + jsonObj.id + "\" >" + jsonObj.color_name + "</option>";
							$("#mp_color_add").append(optionstring);   //为Select追加一个Option(下拉项)           
						} 
						//$("#pd_unit").val(locals.name);
//						$("#pd_quantity_unit").val(locals.id); 
					}
				});
			}
    	}
    );
	
	//根据材料颜色获取材料的尺寸
	$("#mp_color_add").change(function (){
		$("#pd_color_add").val("");
		var name = $("#insert_mp_add").val();
		var color = $("#mp_color_add").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_metrial_procure/get_mp_color_infomation',//通过Ajax取数据的目标页面
			data:{'material_name':name,'material_color':color},
			type:'get',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				var objs = locals.size;
				var size = '';
				$("#mp_size_add").find("option").remove();	
				var  optionstring = "<option value=\"\" ></option>";
				$("#mp_size_add").append(optionstring);   //为Select追加一个Option(下拉项			
				for (var o in objs) {
					var  jsonObj  =  objs[o];
					var  optionstring = "<option value=\"" + jsonObj.id + "\" >" + jsonObj.size_name+"("+ jsonObj.size_name_E +")</option>";
					$("#mp_size_add").append(optionstring);   //为Select追加一个Option(下拉项                
				} 
			}
		});
		
	});
	
	//根据材料尺寸获取材料的单位
	$("#mp_size_add").change(function (){
		var name = $("#insert_mp_add").val();
		var color = $("#mp_color_add").val();
		var size = $("#mp_size_add").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_metrial_procure/get_pd_unit',//通过Ajax取数据的目标页面
			data:{'material_name':name,'material_color':color,'material_size':size},
			type:'get',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				$("#pd_unit").val(locals.name);
				$("#pd_quantity_unit").val(locals.id);
			}
		});
	});
	
	
	//根据材料单位，显示换算公式
//    function pd_quantity_unit_change(){
//		//获取id为select的下拉框选中的值
//		var a = $("#pd_quantity_unit").val();
//		var opti = "<option value=\"\"></option>";
//		if(a != ''){
//			$("#mp_unit1").find("option").remove();
//			$("#mp_unit2").find("option").remove();
//			if(a == '10'){
//				$("#huansuan").css("display","block");
//				var  optionstring1 = "<?php $_from = $this->_tpl_vars['unit_add']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ua3']):
?><option <?php if ($this->_tpl_vars['ua3']['id'] == '5'): ?>selected=\"selected\"<?php endif; ?>  value=\"<?php echo $this->_tpl_vars['ua3']['id']; ?>
\"><?php echo $this->_tpl_vars['ua3']['name']; ?>
</option><?php endforeach; endif; unset($_from); ?>";
//				var  optionstring2 = "<?php $_from = $this->_tpl_vars['unit_add']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ua3']):
?><option <?php if ($this->_tpl_vars['ua3']['id'] == '10'): ?>selected=\"selected\"<?php endif; ?>  value=\"<?php echo $this->_tpl_vars['ua3']['id']; ?>
\"><?php echo $this->_tpl_vars['ua3']['name']; ?>
</option><?php endforeach; endif; unset($_from); ?>";
//				$("#mp_unit1").append(optionstring1);
//				$("#mp_unit2").append(optionstring2);   //为Select追加一个Option(下拉项)  
//			}
//			else if(a == '6'){
//				$("#huansuan").css("display","block");
//				var  optionstring3 = "<?php $_from = $this->_tpl_vars['unit_add']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ua3']):
?><option <?php if ($this->_tpl_vars['ua3']['id'] == '7'): ?>selected=\"selected\"<?php endif; ?>  value=\"<?php echo $this->_tpl_vars['ua3']['id']; ?>
\"><?php echo $this->_tpl_vars['ua3']['name']; ?>
</option><?php endforeach; endif; unset($_from); ?>";
//				var  optionstring4 = "<?php $_from = $this->_tpl_vars['unit_add']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ua3']):
?><option <?php if ($this->_tpl_vars['ua3']['id'] == '6'): ?>selected=\"selected\"<?php endif; ?>  value=\"<?php echo $this->_tpl_vars['ua3']['id']; ?>
\"><?php echo $this->_tpl_vars['ua3']['name']; ?>
</option><?php endforeach; endif; unset($_from); ?>";
//				$("#mp_unit1").append(optionstring3);
//				$("#mp_unit2").append(optionstring4);   //为Select追加一个Option(下拉项)  
//			}
//			else {
//				$("#mp_unit1").find("option").remove();
//				$("#mp_unit2").find("option").remove();
//				$("#mp_translated_add").val("");
//				$("#huansuan").css("display","none");
//			} 
//		}
//	}

	
	$("#exchangerate").change(function (){
		var exchangerate = $("#exchangerate").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_metrial_procure/get_exchangerate',//通过Ajax取数据的目标页面
			data:{'exchangerate':exchangerate},
			type:'post',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				if(locals){
					$(".exchangerate_character").html(locals);
				}
			}
		});
		
	});	
	
	/*添加材料*/
	var row_number = 0 ;
	$("#mp_add").click(function (){
		var material_name = $("#insert_mp_add").val();		
		var color = $("#mp_color_add").val();		
		var size = $("#mp_size_add").val();
		var pd_quantity = $("#pd_quantity").val();
		var pd_quantity_unit = $("#pd_quantity_unit").val();
		//var pd_weight = $("#pd_weight").val();
//		var pd_weight_unit = $("#pd_weight_unit").val();
//		var pd_supplier_color = $("#pd_color_add").val();
//		var pd_translated = $("#mp_translated_add").val();
//		var pd_translated_unit1 = $("#mp_unit1").val();
//		var pd_translated_unit2 = $("#mp_unit2").val();
		var size_text = $("#mp_size_add").find("option:selected").text();
		var color_text = $("#mp_color_add").find("option:selected").text();  
		var exchangerate = $("#exchangerate").val();
		
		if($("#insert_mp_add").val()!="" && $("#mp_color_add").val()!="" && $("#pd_quantity").val()!="" ){
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_metrial_procure/insert_table_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'pd_quantity':pd_quantity,'pd_quantity_unit':pd_quantity_unit,'exchangerate':exchangerate,'cn_m_id':$("#ids").val()},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{				
				locals=locals.split("|");
				if(locals[0] != 0){
					var table_value = "<tr class='mp_tabClass01'><td id=pd_name"+locals[0]+">"+material_name+"<input type='hidden' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td><td id='pd_color"+locals[0]+"'>"+color_text+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td><td id=pd_size"+locals[0]+">"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+pd_quantity+"<input type='hidden' name='materials["+row_number+"][pd_quantity]' value='"+pd_quantity+"' id='pd_q_"+locals[0]+"'  /></td><td>"+locals[1]+"<input type='hidden' name='materials["+row_number+"][pd_quantity_unit]' value='"+pd_quantity_unit+"' /></td><td><font class='exchangerate_character'>"+locals[2]+"</font><input type='text'  id='pd_unit_price"+locals[0]+"' name='materials["+row_number+"][pd_unit_price]' value='' onkeyup='supplier_price_change("+locals[0]+")' /><input type='hidden' id='val_"+locals[0]+"' value='0' /></td><td onClick='getDel(this,"+locals[0]+")'><a href='#'>删除</a></td></tr>";
				
				$("#mp_table_add").append(table_value);   //为table追加一个tr(下拉项)
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

//是否含税：js
function change_tax(){
  	if($("#tax").val() == '1'){
		$("#tax_value_k").css("display","block");  
  	}
  	else{
	  $("#tax_value").val("");
	  $("#after_tax_amount").val("");
	  $("#tax_value_k").css("display","none");
	}
}



//供应商信息查询
function select_supplier(){
	var name = $("#supplier_code").val();
	$("#insert_mp_add").val("");
	$("#mp_color_add").val("");
	$("#mp_size_add").val("");
	$("#pd_color_add").val("");
	$("#supplier_s").val("");
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_metrial_procure/add_supplier',//通过Ajax取数据的目标页面
		data:{"name":name},
		type:'post',//方法，还可以是"post"
		dataType:'json',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		{
			if(locals){
				//locals=locals.split("-");
				$("#supplier_s").val(locals);
			}else{
				$("#supplier_s").val('');
			}
		}								
		
	});
}

//删除材料js
function getDel(k,row){
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_metrial_procure/delete_table_mp',//通过Ajax取数据的目标页面
		type:'get',//方法，还可以是"post"
		data:{'id':row,'cn_m_id':$("#ids").val()},
		dataType:'json',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		{
			 
		}
	});
	var total_amount	=	$("#total_amount").val();//总金额
	var all_price	=	$("#val_"+row).val();//单个材料原来的总价
	var last_price	=	eval('('+total_amount + "-" + all_price+ ')');//减去当前单条材料后的值
	$("#total_amount").val(last_price);
	if($("#tax").val()==1){	
	   if($("#tax_value").val()!=''){
		   $("#after_tax_amount").val(eval('('+last_price + "*"+"(" + $("#tax_value").val()+ "/" + 100 + "+" + 1+ ")" +')').toFixed(2));//计算税后金额 ：总金额*（1+税点）
	   }
	}	
	$(k).parent().remove();  
	//$("#material_table1").$(k).remove();
}

//税率的js：计算税后金额
function change_tax_amount(){
	$("#after_tax_amount").val(eval('('+$("#total_amount").val() + "*"+"(" + $("#tax_value").val()+ "/" + 100 + "+" + 1+ ")" +')').toFixed(2));//计算税后金额 ：总金额*（1+税点）				
}

</script> 
<!-- {/literal} -->