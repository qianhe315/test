<?php /* Smarty version 2.6.22, created on 2016-06-07 13:28:03
         compiled from six_quotation/add_old.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">          
	<div class="stkInfEnter" style="width:98%;display:block;" layoutH="30" id="ttbjd_wsj_hot_1">
        <div style="width:100%; float:left;">	
        	<div class="sIE_title" style="width:60%; margin-left:-100px;">601报价单(无设计)</div>
        </div>  	   
      	<form name="form1" method="post" action="<?php echo $this->_tpl_vars['six_action_no']; ?>
"  id="no_six_action_submit" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)"> 
        	<!--本条id-->
            <input type="hidden" readonly="readonly" value="<?php echo $this->_tpl_vars['id']; ?>
" class="sIE_No" name="q_id" id="q_id" style="width:100px;" />
            <!--业务员-->
            <input type="hidden" readonly="readonly" value="<?php echo $this->_tpl_vars['user_name']; ?>
" class="sIE_No" name="no_saleman_name"style="width:100px;" />
            <!--客户代码-->
            <input type="hidden" class="sIE_No" name="no_601customer_code" value="<?php echo $this->_tpl_vars['customers']['customer_code']; ?>
" readonly="readonly" style="width:100px;" />
            <!--客户名-->
            <input type="hidden" class="sIE_No" name="no_601customer_name" value="<?php echo $this->_tpl_vars['customers']['customer_name']; ?>
" style="width:100px;" id="no_customer_code" readonly="readonly"/>
            <!--公司-->
            <input type="hidden" class="sIE_No" id="no_601company" value="<?php echo $this->_tpl_vars['customers']['company']; ?>
" name="company_no" style="width:100px;" readonly="readonly"/>
            <!--计算会用到的其他设置-->
            <input type="hidden" id="601_paper_price" style="width:100px;"  name="601_paper_price" value="<?php echo $this->_tpl_vars['six_paper_price']; ?>
"class="sIE_No" />
           <div class="sIEK" style="width:85%; margin-left:-210px;">
                <div class="sIE_l" style="width:200px; margin-left:215px;">
                    <div class="sIE_l_01" style="width:200px;">
                        <div class="sIE_l_01_title">时间:</div>
                        <input type="text" readonly="readonly" value="<?php echo $this->_tpl_vars['date']; ?>
" class="sIE_No"  name="no_601time"style="width:100px;" />
                    </div>
                    <div class="sIE_l_01" style="width:200px;">
                        <div class="sIE_l_01_title">报价名称:</div>
                        <input type="text" class="sIE_No" name="no_design_pic_name" value="<?php echo $this->_tpl_vars['quotation_sheet']['design_pic_name']; ?>
" style="width:100px;" />
                    </div>
                    <div class="sIE_l_01" style="width:200px;">
                        <div class="sIE_l_01_title">601设计编号:</div>
                        <input type="text" class="sIE_No" name="no_601_design_number" value="<?php echo $this->_tpl_vars['quotation_sheet']['601_design_number']; ?>
" style="width:100px;" />
                    </div>
                    <div class="sIE_l_01" style="width:200px;">
                        <div class="sIE_l_01_title">报价编号:</div>
                        <input type="text" class="sIE_No" name="no_601quotation_code" <?php if ($this->_tpl_vars['quotation_sheet']['quotation_code'] == ""): ?> value="<?php echo $this->_tpl_vars['no_stock_number']; ?>
" <?php else: ?> value="<?php echo $this->_tpl_vars['quotation_sheet']['quotation_code']; ?>
"<?php endif; ?>  style="width:100px;" readonly="readonly"/>
                    </div>
                    <div class="sIE_l_01" style="width:200px;">
                        <div class="sIE_l_01_title">备损数量:</div>
                        <input type="text" class="sIE_No" name="no_standby_loss_number" <?php if ($this->_tpl_vars['quotation_sheet']['preparation_number'] == ""): ?>value="0"<?php else: ?>value="<?php echo $this->_tpl_vars['quotation_sheet']['preparation_number']; ?>
"<?php endif; ?> style="width:100px;" id="no_standby_loss_number"  />
                    </div>
                    <div class="sIE_l_01" style="width:200px;">
                        <div class="sIE_l_01_title">模板系数:</div>
                        <select class="picture_select01" name="coefficient_id_no" id="coefficient_id_no" style="width:106px; height:26px;" onchange="coefficient_id_no_find()">
                            <option value="">请选择</option>
                            <?php $_from = $this->_tpl_vars['six_coefficient']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
                            <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
" <?php if ($this->_tpl_vars['qf']['id'] == $this->_tpl_vars['quotation_sheet']['601_coefficient_template']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['qf']['name']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    </div>
                    <div class="sIE_l" style="width:140px; height:auto;">
                         <div class="sIE_l_02">
                             <table cellspacing="0" class="sIE_l_02Tab"  id="hq_tableClass01" style="margin-top:0px; margin-left:0px;">
                                 <thead id="six_coefficient_no">
                                     <tr>
                                         <th width=18%>单价</th>
                                         <th width=18%>系数</th>
                                     </tr>
                                     <?php if ($this->_tpl_vars['six_coefficient_name']): ?>
                                           <?php $_from = $this->_tpl_vars['six_coefficient_name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
                                            <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:auto;">
                                               <td><?php echo $this->_tpl_vars['us']['under']; ?>
-<?php echo $this->_tpl_vars['us']['up']; ?>
</td>
                                               <td><?php echo $this->_tpl_vars['us']['coefficient_up']; ?>
-<?php echo $this->_tpl_vars['us']['coefficient_under']; ?>
</td>
                                            </tr>
                                           <?php endforeach; endif; unset($_from); ?>
                                      <?php endif; ?>
                                 </thead>
                                      
                             </table>
                         </div>
                    </div>
                </div>
                <div class="sIE_l" style="width:auto; margin-left:10px;">
                     <div class="sIE_l_01" style="width:200px;">
                        <div class="sIE_l_01_title">图片名称:</div>
                        <input type="text"  name="so_image" value="" id="so_image" class="sIE_No" style="width:100px;" />
                        <a href="#"  onclick="spill_it()" style="margin-left:80px; margin-top:10px"><button type='button'>确定</button></a>
                        <div id="image_div"></div>
                    </div>
                </div>
                <div class="sIE_l_01" style="margin-top:10px; width:210px; margin-left:10px;">
                    <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
                    <div class="sIE_r01" style="float:left; width:160px;">
                        <div class="sIE_r01_div" style="margin-left:30px;">
                            <input type="text" id="601_no_inch_w" style="width:100px;"  name="601_no_inch_w" value="<?php echo $this->_tpl_vars['quotation_sheet']['inch_w']; ?>
"class="sIE_No" />
                            <div style=" margin-left:5px; float:left;">inch W</div>
                        </div>
                        <div class="sIE_r01_div" style="margin-left:30px;">
                            <input type="text" id="601_no_inch_h" style="width:100px;" name="601_no_inch_h" value="<?php echo $this->_tpl_vars['quotation_sheet']['inch_h']; ?>
"  class="sIE_No" />
                            <div style=" margin-left:5px; float:left;">inch H</div>
                        </div>
                        <div class="sIE_r01_div" style="margin-left:30px;">
                            <input type="text" id="601_no_cm_w" style="width:100px;" value="<?php echo $this->_tpl_vars['quotation_sheet']['cm_w']; ?>
" name="601_no_cm_w"class="sIE_No" />
                            <div style=" margin-left:5px; float:left;">cm W</div>
                        </div>
                        <div class="sIE_r01_div" style="margin-left:30px;">
                            <input type="text" id="601_no_cm_h" style="width:100px;" value="<?php echo $this->_tpl_vars['quotation_sheet']['cm_h']; ?>
" name="601_no_cm_h" class="sIE_No" />
                            <div style=" margin-left:5px; float:left;">cm H</div>
                        </div>
                        <div class="sIE_l_01" style="width:200px; margin-left:-50px;">
                            <div class="sIE_l_01_title">胶纸费:</div>
                            <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['quotation_sheet']['tapedata_price']; ?>
" name="no_601tapedata_price" id="no_601tapedata_price" style="width:100px;"  readonly="readonly" />
                        </div>
                        <div class="sIE_l_01" style="width:200px; margin-left:-50px;">
                            <div class="sIE_l_01_title">材料费:</div>
                            <input type="text" class="sIE_No" name="no_601material_price" id='no_601material_price' value="<?php echo $this->_tpl_vars['quotation_sheet']['material_price']; ?>
" style="width:100px;" readonly="readonly"/>
                        </div>
                        <div class="sIE_l_01" style="width:200px; margin-left:-50px;">
                            <div class="sIE_l_01_title">手工费:</div>
                            <input type="text" class="sIE_No" name="no_601factory_workmanship_price" value="<?php echo $this->_tpl_vars['quotation_sheet']['factory_workmanship_price']; ?>
" id="no_601factory_workmanship_price" style="width:100px;"  readonly="readonly" />
                        </div>
                        <div class="sIE_l_01" style="width:200px; margin-left:-50px;">
                            <div class="sIE_l_01_title">成本价:</div>
                            <input type="text" class="sIE_No" name="no_601total_costs" value="<?php echo $this->_tpl_vars['quotation_sheet']['601_whole_cost_price']; ?>
" id="no_601total_costs" style="width:100px;"  readonly="readonly" />
                        </div>
                        <div class="sIE_l_01" style="width:200px; margin-left:-50px;">
                            <div class="sIE_l_01_title">报价系数:</div>
                            <input type="text" class="sIE_No" name="no_601coefficient" id='no_601coefficient' value="<?php echo $this->_tpl_vars['quotation_sheet']['quote_factor']; ?>
" style="width:100px;" readonly="readonly"/>
                        </div>
                        <div class="sIE_l_01" style="width:200px; margin-left:-50px;"">
                            <div class="sIE_l_01_title">单片报价:</div>
                            <input type="text" class="sIE_No" name="no_601price" id='no_601price' value="<?php echo $this->_tpl_vars['quotation_sheet']['unite_quote']; ?>
" style="width:100px;" readonly="readonly"/>
                        </div>
                        <div class="sIE_l_01" style="width:200px; margin-left:-50px;"">
                            <div class="sIE_l_01_title">片数:</div>
                            <input type="text" class="sIE_No" name="no_601number" id='no_601number' <?php if ($this->_tpl_vars['quotation_sheet']['pcs'] == ""): ?>value="50"<?php else: ?>value="<?php echo $this->_tpl_vars['quotation_sheet']['pcs']; ?>
"<?php endif; ?>  style="width:100px;"  onkeyup="number_update_no()"/>
                        </div>
                        <div class="sIE_l_01" style="width:200px; margin-left:-50px;"">
                            <div class="sIE_l_01_title">最终报价:</div>
                            <input type="text" class="sIE_No" name="no_601whole_cost_price" id='no_601whole_cost_price' value="<?php echo $this->_tpl_vars['quotation_sheet']['final_quote']; ?>
" style="width:100px;" readonly="readonly"/>
                        </div>
                    </div>
                </div>
                <div class="sIE_l" style="width:200px; margin-left:55px;">
                    <div class="sIEK" style="width:190px;margin-left:0px; margin-top:0px;">
                        <div class="sIE_l_01" style="width:100%;">
                            <div class="sIE_l_01_title" style="width:40px;">材料:</div>
                            <div class="sIE_r01" style="width:120px;">
                                <div class="sIE_r01_div">
                                    <select class="sIE_r01_Select" id="material_select_601" style="width:120px;">
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
                        <div class="sIE_l_02" id="material_info_c_601" style="display:none;">
                            <div class="sIE_l_02_div">
                                <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
                                <select id="material_info_c_color_601" class="sIE_r01_Select" style="width:120px;">
                                </select>
                            </div>
                            <div class="sIE_l_02_div" id="size_601_no">
                                <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
                                <select class="sIE_r01_Select" id="material_c_size_601" style="width:120px;">
                                </select>
                            </div>
                            <div class="sIE_l_02_div" id="size_601_no_1">
                                <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
                                <input type="text" class="sIE_No" id="size_width_601" style="width:80px;"  />
                                <div class="sIE_No" style="width:54px; margin-left:5px;">MM W</div>
                            </div>
                            <div class="sIE_l_02_div" id="size_601_no_2">
                                <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
                                <input type="text" class="sIE_No" id="size_height_601"  style="width:80px;" />
                                <div class="sIE_No" style="width:54px; margin-left:5px;">MM H</div>
                            </div>
                            <div class="sIE_l_02_div" id="size_601_no_3">
                                <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
                                <input type="text" class="sIE_No" id="size_inch_width_601"  style="width:80px;" />
                                <div class="sIE_No" style="width:54px; margin-left:5px;">inch W</div>
                            </div>
                            <div class="sIE_l_02_div" id="size_601_no_4">
                                <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
                                <input type="text" class="sIE_No" id="size_inch_height_601"  style="width:80px;" />
                                <div class="sIE_No" style="width:54px; margin-left:5px;">inch H</div>
                            </div>
                            <div class="sIE_l_02_div">
                                <div class="sIE_l_01_title" style="width:40px;">数量:</div>
                                <input type="text"  class="sIE_size" id="material_c_quantity_601" style="width:116px;" value="50"/>
                            </div>
                        </div>      
                    </div>
                    <input type="button" id="insert_material_601"  style=" margin-top:130px; margin-left:0px; display:none;"value="添加材料" /> 
                 </div>      
                 <div class="sIE_l_01" style=" margin-top:20px; margin-left:-500x; width:550px;" >
                    <div class="sIE_l_02"> 
                      <table cellspacing="0" class="sIE_l_02Tab"  id="hq_tableClass01" style="margin-top:5px;  margin-left:210px;width:550px; ">
                         <thead id="material_601">
                            <th width=15%>名称</th>
                            <th width=15%>颜色</th>
                            <th width=15%>尺寸</th>
                            <th width=15%>数量</th>
                            <th width=15%>价格</th>
                            <th width=20%>操作</th>
                            <?php if ($this->_tpl_vars['quotation_sheet_material']): ?>
                                 <?php $_from = $this->_tpl_vars['quotation_sheet_material']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us_1']):
?>
                                  <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:auto;">
                                     <td><?php echo $this->_tpl_vars['us_1']['material_name']; ?>
</td>
                                     <td><?php echo $this->_tpl_vars['us_1']['material_color']; ?>
</td>
                                     <td><?php echo $this->_tpl_vars['us_1']['material_size']; ?>
</td>
                                     <td><?php echo $this->_tpl_vars['us_1']['material_quantity']; ?>
</td>
                                     <td><?php echo $this->_tpl_vars['us_1']['material_total_price']; ?>
</td>
                                     <td onClick='getDel(this,<?php echo $this->_tpl_vars['us_1']['id']; ?>
)'><a href='#'>删除</a></td>
                                  </tr>
                                 <?php endforeach; endif; unset($_from); ?>
                             <?php endif; ?>
                         </thead>
                      </table>
                    </div>    
                 </div>
           </div> 
        </form>
        <div class="sIE_r" style="height:300px; width:280px; margin-top:0px; float:left;">
        	<div class="sIE_r_img" style="height:300px; width:280px; margin-left:0px;"id="image_no_1">
            	<?php if ($this->_tpl_vars['quotation_sheet']['image'] != ''): ?>
            	<img src="<?php echo $this->_tpl_vars['quotation_sheet']['image']; ?>
" style="height:300px; width:280px;"/><br><div style=' float:right; margin-right:0px;'> CDR：<a href="<?php echo $this->_tpl_vars['quotation_sheet']['image1']; ?>
" style="color:#06F;" >下载查看</a></div>
                <?php endif; ?>
        	</div> 
                 
        </div>
              
        <div class="sIE_l_02">
            <div class="button"  style="margin-top:40px;" >
                <div class="buttonContent" >          
                    <button type="button" id="no_601_submit">确定</button>
                 </div>
            </div>
            <div class="button"  style="margin-left:1%;margin-top:40px;">
                <div class="buttonContent" >
                      <button class="close">取消</button>
                </div>
            </div>
       </div>
      </div>     

<!-- {literal} --> 
<script type="text/javascript">
	//模板系数
	function coefficient_id_no_find(){
		var coefficient_id_no = $("#coefficient_id_no").val();
		var no_601total_costs = $("#no_601total_costs").val().replace("$","");
		var no_601number = $("#no_601number").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/find_coefficient',//通过Ajax取数据的目标页面
			data:{"coefficient_id":coefficient_id_no},
			type:'post',//方法，还可以是"post"
			dataType:'text',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{	
				$("#six_coefficient_no").html("");
				$("#six_coefficient_no").html(locals);
				if(no_601total_costs!=""){
					$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/update_coefficient',//通过Ajax取数据的目标页面
					data:{"six_total_costs":no_601total_costs,"coefficient_id":coefficient_id_no},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						
						$("#no_601coefficient").val(locals);
						var six_price=no_601total_costs*locals;
						six_price = six_price.toFixed(2);
						$("#no_601price").val("$"+six_price);
						var final_price=(no_601number*six_price).toFixed(2);
						$("#no_601whole_cost_price").val("$"+final_price);
					}
					});
				}
			}				  
		});
	}
	//片数
	function number_update_no(){
		var sixprice=$("#no_601price").val();
		sixprice=sixprice.replace("$","");
		var sixnumber=$("#no_601number").val();
		if(sixprice!=""){
			var final_price=(sixprice *sixnumber).toFixed(4);
			$("#no_601whole_cost_price").val("$"+final_price);
		}
	}	
	//材料js
	$("#material_select_601").change(function(){
		//获取id为select的下拉框选中的值
		var a = $("#material_select_601").val();
		var opti = "<option value=\"\"></option>";
		if(a != ''){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_infomation',//通过Ajax取数据的目标页面
				data:{'material_name':a},					
				type:'get',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					$("#material_info_c_color_601").find("option").remove();
					$("#material_c_size_601").find("option").remove();
					if(locals.result == 0){
						
					}else if(locals.result == 2){
						$("#material_info_c_601").css("display","block");
						$("#insert_material_601").css("display","block");
						$("#size_601_no").css("display","block");
						$("#size_601_no_1").css("display","none");
						$("#size_601_no_2").css("display","none");
						$("#size_601_no_3").css("display","none");
						$("#size_601_no_4").css("display","none");
						$("#size_width_601").val("");
						$("#size_height_601").val("");
						$("#size_inch_width_601").val("");
						$("#size_inch_height_601").val("");
						$("#material_info_color").empty();
						var objs = locals.color;
						$("#material_info_c_color_601").append(opti);   //为Select追加一个Option(下拉项)     
						for(var o in objs) {
							var  jsonObj  =  objs[o];
							var  optionstring = "<option value=\"" + jsonObj.material_color + "\" >" + jsonObj.material_color + "</option>";
							$("#material_info_c_color_601").append(optionstring);   //为Select追加一个Option(下拉项)           
						} 
					}else if(locals.result == 1){
					   
						$("#material_info_c_601").css("display","block");
						$("#insert_material_601").css("display","block");
						$("#size_601_no").css("display","none");
						$("#size_601_no_1").css("display","block");
						$("#size_601_no_2").css("display","block");
						$("#size_601_no_3").css("display","block");
						$("#size_601_no_4").css("display","block");
						 $("#material_c_size_601").val("");
						$("#material_info_color").empty();
						var objs = locals.color;
					  
						$("#material_info_c_color_601").append(opti);   //为Select追加一个Option(下拉项)     
						for (var o in objs) {
							var  jsonObj  =  objs[o];
							var  optionstring = "<option value=\"" + jsonObj.color + "\" >" + jsonObj.color + "</option>";
							$("#material_info_c_color_601").append(optionstring);   //为Select追加一个Option(下拉项)           
						} 
						
					}
					//alert(locals);
					//$("#customer_code").val(locals);
				}
			});
		}
	});
	
	//无设计选择颜色的js
	$("#material_info_c_color_601").change(function (){
		  var a = $("#material_select_601").val();
		  var color = $("#material_info_c_color_601").val();
		  $.ajax({
			  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_c_infomation',//通过Ajax取数据的目标页面
			  data:{'material_name':a,'material_color':color},			
			  type:'get',//方法，还可以是"post"
			  dataType:'json',//数据类型，还有其它的，详见jQuery手册
			  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			  {
				  var objs = locals.size;
				  var size = '';
				  $("#material_c_size_601").find("option").remove();
				  for (var o in objs) {
					  var  jsonObj  =  objs[o];
					  if(jsonObj.size){
						  size = jsonObj.size;
						  var  optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
						  $("#material_c_size_601").append(optionstring);   //为Select追加一个Option(下拉项
					  }
					  else if(jsonObj.size_mm){
						  size = jsonObj.size_mm;
						  var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						  $("#material_c_size_601").append(optionstring);   //为Select追加一个Option(下拉项)  
					  }
					  else if(jsonObj.size_m_w&& jsonObj.size_m_h){
						  size = jsonObj.size_m_w+'*'+jsonObj.size_m_h;
						  var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						  $("#material_c_size_601").append(optionstring);   //为Select追加一个Option(下拉项)   
					  } 
				  } 
			  }
		  });
		
	});
	
	//无设计输入宽的js
	$("#601_no_inch_w").bind("input propertychange", function() {
		var six_no_inch_w = $("#601_no_inch_w").val();//宽
		var six_no_inch_h = $("#601_no_inch_h").val();//高
		var six_paper_price = $("#601_paper_price").val();//胶纸单价
		var coefficient_id = $("#coefficient_id_no").val();//模板系数
		var no_601number = $("#no_601number").val();//片数
		if(six_no_inch_h!="" && six_no_inch_w!=""){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/shougongfei',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'inch_w':six_no_inch_w,'inch_h':six_no_inch_h},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					locals=locals.split("|");	
					var a=Math.ceil(six_no_inch_w/19);
					var b=Math.ceil(six_no_inch_h/19);
					manual_1=(locals[0] * a * b * locals[1]).toFixed(2);
					$("#no_601factory_workmanship_price").val("$"+manual_1);//手工费
					var w=eval(six_no_inch_w+"+"+1.2);
					var h=eval(six_no_inch_h+"+"+1.2);
					jiaozhi=(w * h * six_paper_price).toFixed(2);
					$("#no_601tapedata_price").val("$"+jiaozhi);//胶纸费
					chengben=(eval(locals[2]+"+"+jiaozhi+"+"+manual_1)).toFixed(4);
					$("#no_601total_costs").val("$"+chengben);//成本价	
					if(coefficient_id!=""){
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/update_coefficient',//通过Ajax取数据的目标页面
							data:{"six_total_costs":chengben,"coefficient_id":coefficient_id},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								$("#no_601coefficient").val("$"+locals);//报价系数
								var six_price=chengben*locals;
								six_price = six_price.toFixed(4);
								$("#no_601price").val("$"+six_price);//单片报价
								var final_price=(no_601number*six_price).toFixed(4);
								$("#no_601whole_cost_price").val("$"+final_price);//最终报价
							}
						});
					}
				}
			});
        }else{
			$("#no_601tapedata_price").val("$"+0);
			$("#no_601factory_workmanship_price").val("$"+0);
			//$("#no_601total_costs").val(locals[2]+"元");	
		}	  
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#601_no_cm_w").val(cm_w);
	});
	
	$("#size_width_601").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_w = $(this).val() / 25.4;
		if(mm_w != ''){
			mm_w = mm_w.toFixed(2);
		}
		$("#size_inch_width_601").val(mm_w);
	});
	
	$("#size_height_601").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_h = $(this).val() / 25.4;
		if(mm_h != ''){
			mm_h = mm_h.toFixed(2);
		}
		
		$("#size_inch_height_601").val(mm_h);
	});
	
	$("#size_inch_width_601").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() * 25.4;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#size_width_601").val(inch_w);
	});
	
	$("#size_inch_height_601").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() * 25.4;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#size_height_601").val(inch_h);
	});
	
	$("#601_no_inch_h").bind("input propertychange", function() {
		var six_no_inch_w = $("#601_no_inch_w").val();
		var six_no_inch_h = $("#601_no_inch_h").val();
		var six_paper_price = $("#601_paper_price").val();
		var coefficient_id = $("#coefficient_id_no").val();
		var no_601number = $("#no_601number").val();
		if(six_no_inch_h!="" && six_no_inch_w!=""){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/shougongfei',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'inch_w':six_no_inch_w,'inch_h':six_no_inch_h},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					locals=locals.split("|");	
					var a=Math.ceil(six_no_inch_w/19);
					var b=Math.ceil(six_no_inch_h/19);
					manual_1=(locals[0] * a * b * locals[1]).toFixed(2);
					$("#no_601factory_workmanship_price").val("$"+manual_1);
					var w=eval(six_no_inch_w+"+"+1.2);
					var h=eval(six_no_inch_h+"+"+1.2);
					jiaozhi=(w * h * six_paper_price).toFixed(2);
					$("#no_601tapedata_price").val("$"+jiaozhi);
					chengben=(eval(locals[2]+"+"+jiaozhi+"+"+manual_1)).toFixed(4);
					$("#no_601total_costs").val("$"+chengben);
					if(coefficient_id!=""){
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/update_coefficient',//通过Ajax取数据的目标页面
							data:{"six_total_costs":chengben,"coefficient_id":coefficient_id},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
							
								
								$("#no_601coefficient").val("$"+locals);
								var six_price=chengben*locals;
								six_price = six_price.toFixed(4);
								$("#no_601price").val("$"+six_price);
								var final_price=(no_601number*six_price).toFixed(4);
								$("#no_601whole_cost_price").val("$"+final_price);
							}
						});
					}
				}
			});
        }else{
			$("#no_601tapedata_price").val("$"+0);
			$("#no_601factory_workmanship_price").val("$"+0);
			//$("#no_601total_costs").val(locals[2]+"元");	
		}	  
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#601_no_cm_h").val(cm_h);
		
	});

	
	$("#601_no_cm_w").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#601_no_inch_w").val(inch_h);
		
	});
	$("#601_no_cm_h").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#601_no_inch_h").val(inch_h);
		
	});
	
	//无设计添加材料按钮的js
	$("#insert_material_601").click(function (){
	    var row_number = 0 ;
		var material_name = $("#material_select_601").val();//材料名称
		var color = $("#material_info_c_color_601").val();//颜色
		var quantity = $("#material_c_quantity_601").val();//数量
		var o =document.getElementById("size_601_no_1").style.display;
		if(o=="block"){
			var size_width_601 = $("#size_width_601").val();
			var size_height_601 = $("#size_height_601").val();
			var size_inch_width_601 = $("#size_inch_width_601").val();
			var size_inch_height_601 = $("#size_inch_height_601").val();
			var size=size_inch_width_601+"*"+size_inch_height_601;
			var size_text = size+"inch ";
		}else{
	    	var size = $("#material_c_size_601").val();
			var size_text = $("#material_c_size_601").find("option:selected").text();
		}
		var six_no_inch_w = $("#601_no_inch_w").val();
		var six_no_inch_h = $("#601_no_inch_h").val();
		var coefficient_id = $("#coefficient_id_no").val();
		var no_601number = $("#no_601number").val();
		if(quantity!="" && color!="" && ($("#material_c_size_601").val()!=null ||(size_width_601!='' && size_height_601!='' && size_inch_width_601!='' && size_inch_height_601!=''))){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/insert_table_quotation_sheet_material',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity,'inch_w':six_no_inch_w,'inch_h':six_no_inch_h},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(locals != 0){
						locals=locals.split("|");	
					   	$("#no_601material_price").val("$"+locals[2]);
						if(six_no_inch_w!="" && six_no_inch_h!=""){
							var a=Math.ceil(six_no_inch_w/19);
						    var b=Math.ceil(six_no_inch_h/19);
						    manual_1=(locals[4]*a*b*locals[5]).toFixed(4);
						    $("#no_601factory_workmanship_price").val("$"+manual_1);
						}else{
							$("#no_601factory_workmanship_price").val("$"+0.0000);
						}
						var no_601tapedata_price = $("#no_601tapedata_price").val().replace("$","");
						var no_601factory_workmanship_price = $("#no_601factory_workmanship_price").val().replace("$","");
						var no_601total_costs=(eval(no_601tapedata_price+"+"+locals[2]+"+"+no_601factory_workmanship_price)).toFixed(4);
						$("#no_601total_costs").val("$"+no_601total_costs);
						if(coefficient_id!=""){
							$.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/update_coefficient',//通过Ajax取数据的目标页面
								data:{"six_total_costs":no_601total_costs,"coefficient_id":coefficient_id},
								type:'post',//方法，还可以是"post"
								dataType:'text',//数据类型，还有其它的，详见jQuery手册
								success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								{
									$("#no_601coefficient").val(locals);
									var six_price=no_601total_costs*locals;
									six_price = six_price.toFixed(2);
									$("#no_601price").val("$"+six_price);
									var final_price=(no_601number*six_price).toFixed(2);
									$("#no_601whole_cost_price").val("$"+final_price);
								}
							});
						}			
					    var table_value = "<tr class='hq_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td>  <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td><td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td id=no_price_a"+locals[0]+">"+locals[1]+"</td><td onClick='getDel(this,"+locals[0]+")'><a href='#'>删除</a></td></tr>";
					    $("#material_601").append(table_value);   //为table追加一个tr(下拉项)
					}else{
						alert("此数据有重复,请重新录入");
					}
				}
			});
	    	row_number++; 
		}else{
			alert("请添加完整的信息！")
		}
	});
	
	
	//材料删除
	function getDel(k,row){
		var six_no_inch_w = $("#601_no_inch_w").val();
		var six_no_inch_h = $("#601_no_inch_h").val();
		var coefficient_id = $("#coefficient_id_no").val();
		var no_601number = $("#no_601number").val();
		var q_id = $("#q_id").val();
		if(q_id==''){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/delete_design_material',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'id':row},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					locals=locals.split("|");	
					$("#no_601material_price").val("$"+locals[0]);  
					if(six_no_inch_w!="" && six_no_inch_h!=""){
						var a=Math.ceil(six_no_inch_w/19);
						var b=Math.ceil(six_no_inch_h/19);
						manual_1=(locals[1]*a*b*locals[2]).toFixed(4);
						$("#no_601factory_workmanship_price").val("$"+manual_1);
					}else{
						$("#no_601factory_workmanship_price").val(0);
					} 
					var no_601tapedata_price = $("#no_601tapedata_price").val().replace("$","");
					var no_601factory_workmanship_price = $("#no_601factory_workmanship_price").val().replace("$","");;
					var no_601total_costs=(eval(no_601tapedata_price+"+"+locals[0]+"+"+no_601factory_workmanship_price)).toFixed(4);
					$("#no_601total_costs").val("$"+no_601total_costs);
					if(coefficient_id!=""){
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/update_coefficient',//通过Ajax取数据的目标页面
							data:{"six_total_costs":no_601total_costs,"coefficient_id":coefficient_id},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								$("#no_601coefficient").val(locals);
								var six_price=no_601total_costs*locals;
								six_price = six_price.toFixed(4);
								$("#no_601price").val("$"+six_price);
								var final_price=(no_601number*six_price).toFixed(4);
								$("#no_601whole_cost_price").val("$"+final_price);
							}
						});
					}
				}
			});
		}else{
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/delete_design_material_edit',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'id':row,'mid':q_id},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					locals=locals.split("|");	
					$("#no_601material_price_edit").val("$"+locals[0]);  
					if(six_no_inch_w!="" && six_no_inch_h!=""){
						var a=Math.ceil(six_no_inch_w/19);
						var b=Math.ceil(six_no_inch_h/19);
						manual_1=(locals[1]*a*b*locals[2]).toFixed(4);
						$("#no_601factory_workmanship_price_edit").val("$"+manual_1);
					}else{
						$("#no_601factory_workmanship_price_edit").val(0);
					} 
					var no_601tapedata_price = $("#no_601tapedata_price").val().replace("$","");
					var no_601factory_workmanship_price = $("#no_601factory_workmanship_price").val().replace("$","");;
					var no_601total_costs=(eval(no_601tapedata_price+"+"+locals[0]+"+"+no_601factory_workmanship_price)).toFixed(4);
					$("#no_601total_costs").val("$"+no_601total_costs);
					if(coefficient_id!=""){
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/update_coefficient',//通过Ajax取数据的目标页面
							data:{"six_total_costs":no_601total_costs,"coefficient_id":coefficient_id},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								$("#no_601coefficient").val(locals);
								var six_price=no_601total_costs*locals;
								six_price = six_price.toFixed(4);
								$("#no_601price").val("$"+six_price);
								var final_price=(no_601number*six_price).toFixed(4);
								$("#no_601whole_cost_price").val("$"+final_price);
							}
						});
					}
				}
			});	
		}
		$(k).parent().remove();  
	}
	
	
	//页面提交
	$("#no_601_submit").click(function (){
		no_601tapedata_price=$("#no_601tapedata_price").val();//胶纸
		no_601material_price=$("#no_601material_price").val();//材料费
		no_601factory_workmanship_price=$("#no_601factory_workmanship_price").val();//手工费
		no_601total_costs=$("#no_601total_costs").val();//手工费
		no_601coefficient=$("#no_601coefficient").val();//报价系数
		no_601price=$("#no_601price").val();//单价
		no_601number=$("#no_601number").val();//片数
		no_601whole_cost_price=$("#no_601whole_cost_price").val();//最终报价
		no_601quotation_code=$("#no_601quotation_code").val();//设计编号
		no_standby_loss_number=$("#no_standby_loss_number").val();//备损数量
		coefficient_id_no=$("#coefficient_id_no").val();//模板系数
		six_no_inch_w=$("#601_no_inch_w").val();
		six_no_cm_w=$("#601_no_cm_w").val();
		var no_standby_loss_number=$("#no_standby_loss_number").val();//备损数量
		if(isNaN(no_standby_loss_number) || no_standby_loss_number<0){
			alert("备损数量为不小于0的数字")
		}else if(no_601tapedata_price==""){
			alert("请填写完整的尺寸");
		}else if(no_601material_price==""){
			alert("请添加材料");
		}else if(no_601factory_workmanship_price==""){
			alert("请添加材料和正确的尺寸");
		}else if($("#design_pic_name").val()==""){
			alert("请输入报价名称");
		}else if(no_601price==""){
			alert("请选择报价系数模板");
		}else{
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/check_photo',//通过Ajax取数据的目标页面
				data:{},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(locals==1){
						$("#no_cdr_error").css("display","none");
						$("#no_six_action_submit").submit();
					}else{
						alert("请上传图片,且名称不包含空格！");
					}
				}
			});
		}
	});
	
	//搜索图片
	function spill_it(){
		var img_v	=	$("#so_image").val();	
		if(img_v!=''){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/get_image_spill_it',
				data:{'name':img_v},
				type:'post',
				dataType:'json',
				success: function(data){
					var img_len	=	data.image.length;
					if(img_len>0){
						$("#image_div").html("");
						for(var i=0;i<img_len;i++){
							var table_value = "<input name='image_ids[]'  value='"+data.image[i].id+"' type='checkbox'>"+data.image[i].image_name+"<br>";
							$("#image_div").append(table_value);
						}
						$("#image_div").append("<a href='#' onclick='choose_image()'><button type='button'>确定</button></a>");
					}
				}
			});
		}else{
			alert('请输入你要搜索的图片名称！');	
		}
	}
	
	//选择图片
	function choose_image(){
		var save_id ='';
		var i = 0;
		$("input[name='image_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(save_id == ''){
				save_id += $(this).val();
				i++;
			}else{
				save_id += ','+$(this).val();
				i++;
			}
		});	
		if(i!=2){
			alert("只能选择两个！");
		}else{
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/get_two_image',
				data:{'ids':save_id},
				type:'post',
				dataType:'json',
				success: function(data){
					if(data.err==0){
						alert(data.text);
					}else if(data.err==1){
						$("#image_no_1").html("");
						$("#image_no_1").append("<img src='"+data.jpg+"' style='height:300px; width:280px;' /><br><div style=' float:right; margin-right:0px;'> CDR：<a href='"+data.cdr+"' style='color:#06F;' >下载查看</a></div>");
					}
				}
			});	
		}
	}
		  
</script>
<!-- {/literal} -->