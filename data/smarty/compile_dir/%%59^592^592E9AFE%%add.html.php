<?php /* Smarty version 2.6.22, created on 2015-10-22 13:49:01
         compiled from six_quotation/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <?php if ($this->_tpl_vars['quotation_category'] == 1): ?>
      <div class="stkInfEnter" style="width:98%; display:none; padding-bottom:25px;" layoutH="30" id="ttbjd_ysj_hot_1">
      <?php else: ?>
      <div class="stkInfEnter" style="width:98%" layoutH="30" id="ttbjd_ysj_hot_1">
  <?php endif; ?>  
  
  <div style="float:left; width:100%;">
  		<?php if (! $this->_tpl_vars['quotation_category']): ?>
             <div class="sIE_title" style="width:15%;"><div class="button"><div class="buttonContent"><button onclick="document.getElementById('ttbjd_wsj_hot_1').style.display='block';document.getElementById('ttbjd_ysj_hot_1').style.display='none';">601报价单(无设计)</button></div></div></div>
          <?php endif; ?> 
    	  <div class="sIE_title" style="width:60%;">601报价单</div>
        </div>
      <form method="post" action="<?php echo $this->_tpl_vars['six_action']; ?>
" id="six_action_submit" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
           <div class="sIEK" style="width:45%; float:left;">
              <div class="sIE_l" style="width:400px;">
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">业务员:</div>
                    <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['user_name']; ?>
"  readonly="readonly" />
                    <input type="hidden" name="count" id="count" value=""/>
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">时间:</div>
                    <input type="text" value="<?php echo $this->_tpl_vars['date']; ?>
" style="width:100px;" name="601time" id="601time"  class="sIE_No"  readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户代码:</div>
                    <input type="text" name="601customer_code" id="601customer_code" style="width:100px;" value="<?php echo $this->_tpl_vars['customers']['customer_code']; ?>
" class="sIE_No" readonly="readonly" />
                </div>  
              <!--  <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
                    <select class="picture_select01" name="601quotation_category_id" id="601quotation_category_id" style="width:106px; height:26px;" onchange="design_code_601()">
                      <option value="">请选择</option>
                      <?php $_from = $this->_tpl_vars['quote_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
                      <option value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
                      <?php endforeach; endif; unset($_from); ?>
                    </select>
                </div> -->
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
                  <input type="text" name="601quotation_category_id" id="601quotation_category_id" style="width:100px;" value="" class="sIE_No"/>
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户名:</div>
                    <input type="text" name="601customer_name" style="width:100px;" id="601customer_name" value="<?php echo $this->_tpl_vars['customers']['customer_name']; ?>
" class="sIE_No"  readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">601设计编号:</div>
                  <input type="text" name="601quotation_code" id="601quotation_code" style="width:100px;" value="" class="sIE_No"/>
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">公司:</div>
                  <input type="text" name="customer_company" style="width:100px;" value="<?php echo $this->_tpl_vars['customers']['company']; ?>
" class="sIE_No" id="customer_company"  readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">报价名称:</div>
                  <input type="text" name="design_pic_name" id="design_pic_name" style="width:100px;" value="" class="sIE_No"/>
                </div>
                
                
                <div class="sIE_l_01" style="width:200px;">
                      <div class="sIE_l_01_title">模板系数:</div>
                      <select class="picture_select01" name="coefficient_id" id="coefficient_id" style="width:106px; height:26px;" onchange="coefficient_id_find()">
                      <option value="">请选择</option>
                      <?php $_from = $this->_tpl_vars['six_coefficient']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
                      <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['name']; ?>
</option>
                     <?php endforeach; endif; unset($_from); ?>
                    </select>
                </div>
                 <div class="sIE_l_01" style="width:200px; margin-left:0px;margin-top:0px;">
                  
                    <div class="sIE_l_01_title" style="width:80px;">备损数量:</div>
                      <input type="text" name="standby_loss_number" id="standby_loss_number"class="sIE_No"   value="0" style="display:block; width:100px;" />
                     
                </div>
              </div>
              <div class="sIE_r" style="width:200px;; height:auto;">
                  <div class="sIE_l_02">
                       <table cellspacing="0" class="sIE_l_02Tab"  id="hq_tableClass01">
                         <thead id="six_coefficient">
                              <tr>
                                    <th width=18%>单价</th>
                                    <th width=18%>系数</th>
                              </tr>
                        </thead>
                       </table>
                   </div>
                </div>
              <div class="sIE_l_01" style=" margin-top:10px; margin-left:5px; width:550px; float:left; ">
                      <div class="sIE_l_02">
                          <table cellspacing="0" class="sIE_l_02Tab"  id="hq_tableClass01">
                             <thead id="601material">
                                <th width=18%>名称</th>
                                <th width=18%>颜色</th>
                                <th width=18%>尺寸</th>
                                <th width=20%>数量</th>
                                <th width=20%>价格</th>
                             </thead>
                          </table>
                      </div>
                      <table cellspacing="0" class="picture_Tab" style="border:none; width:200px; margin-top:25px;">
                        <tr>
                          <td style="width:72px;">胶纸费:</td>
                          <td><input type="text" name="601tapedata_price" value="" style="float:left; width:100px; height:20px;" readonly="readonly" id="601tapedata_price"/></td>
                        </tr>
                        <tr>
                          <td>材料费:</td>
                          <td><input type="text" style="width:100px;" value="" name="601material_price" readonly="readonly" id="601material_price" class="sIE_No" /></td>
                        </tr>
                        <tr>
                          <td>手工费:</td>
                          <td><input type="text" style="width:100px;" value="" name="601factory_workmanship_price" readonly="readonly" id="601factory_workmanship_price" class="sIE_No" /></td>
                        </tr>
                        <tr>
                          <td>成本费:</td>
                          <td><input type="text" style="width:100px;" value="" name="601total_costs" readonly="readonly" id="601total_costs" class="sIE_No" style="width:80px;" /></td>
                        </tr>
                      </table>
                      <table cellspacing="0" class="picture_Tab" style="border:none; width:70%; margin-top:-125px; margin-left:240px;">
                         <tr>
                          <td style="width:72px;">报价系数:</td>
                          <td><input type="text" name="601coefficient" value="" style="float:left; width:60px; height:20px;" id="601coefficient" readonly="readonly" onkeyup="coefficient_id_update()"/></td>
                        </tr>
                        <tr>
                          <td>单片报价:</td>
                          <td><input type="text" style="width:100px;" value="" name="601price" readonly="readonly" id="601price" class="sIE_No" /></td>
                        </tr>
                        <tr>
                          <td>片数:</td>
                          <td><input type="text" style="width:60px;" value="50" name="601number" id="601number" class="sIE_No" onkeyup="number_update()"/></td>
                        </tr>
                        <tr>
                        <td>最终报价:</td>
                          <td><input type="text" style="width:100px;" value="" name="601whole_cost_price" readonly="readonly" id="601whole_cost_price" class="sIE_No" style="width:80px;" /></td>
                        </tr>
                      </table>
              </div>
            </div>
            <div class="sIE_l_01" style="margin-top:180px; width:610px; float:left; ">
                      <div class="sIE_r" style="height:210px; width:210px; margin-top:-163px; margin-left:60px;">
                          <div class="sIE_r_img" id="image_601" style="width:210px; height:210px;"><img src="" style="height:210px; width:210px;" /></div>
                          <input type="hidden" name="image" id="image_hidden" />
                      </div>
                     <div class="sIE_l_01_title" style="width:50px; height:100px; margin-left:-190px; margin-top:80px;">尺寸:</div>
                      <div class="sIE_r01" style=" width:160px; margin-left:-135px; margin-top:80px;">
                        <div class="sIE_r01_div">
                            <input type="text" id="601inch_w" style="width:80px;" value="" disabled="disabled" class="sIE_No" />
                            <div style=" margin-left:5px; float:left;">inch W</div>
                        </div>
                        <div class="sIE_r01_div">
                            <input type="text" id="601inch_h" style="width:80px;" value="" disabled="disabled" class="sIE_No" />
                            <div style=" margin-left:5px; float:left;">inch H</div>
                        </div>
                        <div class="sIE_r01_div">
                            <input type="text" id="601cm_w" style="width:80px;" value="" disabled="disabled" class="sIE_No" />
                            <div style=" margin-left:5px; float:left;">cm W</div>
                        </div>
                        <div class="sIE_r01_div">
                            <input type="text" id="601cm_h" style="width:80px;" value="" disabled="disabled" class="sIE_No" />
                            <div style=" margin-left:5px; float:left;">cm H</div>
                        </div>
                        <div class="sIE_l_01_title" style="width:50px; height:100px; margin-left:-217px; margin-top:30px;display:block;">设计师:</div>
                           
                            <div class="sIE_r01_div" style="margin-top:0px;">
                                <input type="text" class="sIE_No" value="" readonly="readonly" style="width:80px;" id="601shejishi"/>
                            </div>
                       </div>
                     
              </div>
       </form>
              <div class="sIE_l_02">
                  <div class="button"  >
                      <div class="buttonContent" >          
                          <button type="button" id="601_submit">确定</button>
                       </div>
                  </div>
                  <div class="button"  style="margin-left:1%;">
                      <div class="buttonContent" >
                            <button class="close">取消</button>
                      </div>
                  </div>
                  
             </div>
    </div>     
<script type="text/javascript" language="javascript">
	//模板系数
	function coefficient_id_find(){
		var coefficient_id = $("#coefficient_id").val();
		var six_total_costs = $("#601total_costs").val();
		var sixnumber = $("#601number").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/find_coefficient',//通过Ajax取数据的目标页面
			data:{"coefficient_id":coefficient_id},
			type:'post',//方法，还可以是"post"
			dataType:'text',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				$("#six_coefficient").html(locals);
				if(six_total_costs!=""){
					$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/update_coefficient',//通过Ajax取数据的目标页面
						data:{"six_total_costs":six_total_costs,"coefficient_id":coefficient_id},
						type:'post',//方法，还可以是"post"
						dataType:'text',//数据类型，还有其它的，详见jQuery手册
						success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						{
							
							$("#601coefficient").val(locals);
							six_total_costs=six_total_costs.replace("$","");
							var six_price=six_total_costs*locals;
							six_price = six_price.toFixed(2);
							$("#601price").val("$"+six_price);
							var final_price=(sixnumber*six_price).toFixed(2);
							$("#601whole_cost_price").val("$"+final_price);
						}
					});
				}
			}	
		});
	}
$(document).ready(function(){		
	//有设计：根据设计编号获取报价信息
	$('#601quotation_category_id').bind("input propertychange", function() {{
			var quotation_category_id = $("#601quotation_category_id").val();//报价编号
			var six_coefficient = $("#601coefficient").val();//报价系数
			var sixnumber = $("#601number").val();//片数
			var coefficient_id = $("#coefficient_id").val();//模板系数
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/add_design_code',//通过Ajax取数据的目标页面
				data:{"id":quotation_category_id},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					locals=locals.split("|");
					if(locals[1]!=""){
						$("#601material").html(locals[0]);//材料信息
						$("#601inch_w").val(locals[1]);
						$("#601inch_h").val(locals[2]);
						$("#601cm_w").val(locals[3]);
						$("#601cm_h").val(locals[4]);
						$("#601shejishi").val(locals[5]);
						$("#image_601").html("<img style='height:220px; width:220px;' src = " + locals[6] + ">");
						//材料费
						var price = eval('('+locals[7]+')');
						price = price.toFixed(4);
						$("#601material_price").val("$"+price  );
						//手工费
						var a=Math.ceil(locals[1]/19);
						var b=Math.ceil(locals[2]/19);
						manual_1=(locals[10]*a*b*locals[11]).toFixed(4);
						$("#601factory_workmanship_price").val("$"+manual_1);
						//胶纸费
						$("#601tapedata_price").val("$"+locals[9]);
						//var cost=eval('('+price+manual_1+locals[9]+')');
						//price+manual_1+locals[9];
						//成本费
						var cost = (eval('('+price+ "+" + manual_1+"+"+locals[9]+')')).toFixed(4);
						$("#601total_costs").val("$"+cost);
						
						$("#count").val(locals[10]);
						var six_total_costs=$("#601total_costs").val();
						if(coefficient_id!=""){
							$.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/update_coefficient',//通过Ajax取数据的目标页面
								data:{"six_total_costs":six_total_costs,"coefficient_id":coefficient_id},
								type:'post',//方法，还可以是"post"
								dataType:'text',//数据类型，还有其它的，详见jQuery手册
								success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								{
									$("#601coefficient").val(locals);//报价系数
									six_total_costs=six_total_costs.replace("$","");//成本费
									var six_price=six_total_costs*locals;
									six_price = six_price.toFixed(2);
									$("#601price").val("$"+six_price );//单片报价 
									var final_price=(sixnumber*six_price).toFixed(2);
									$("#601whole_cost_price").val("$"+final_price);//最终报价
								}
							});
						}
					 }else if(locals[0]==1){
						 alert('这个已经报过价了！');
						 $("#601quotation_category_id").val('');
					 }
				 }										
			});
		}
		
	});
});
	function coefficient_id_update(){
		
		var sixtotal_costs=$("#601total_costs").val();
		sixtotal_costs=sixtotal_costs.replace("$","");
		var sixcoefficient=$("#601coefficient").val();
		if(sixtotal_costs!=""){
			var six_price=(sixtotal_costs *sixcoefficient).toFixed(2);
			$("#601price").val("$"+six_price);
		}
		
		
	}
	
	function number_update(){
		
		var sixprice=$("#601price").val();
		sixprice=sixprice.replace("$","");
		var sixnumber=$("#601number").val();
		if(sixprice!=""){
			var final_price=(sixprice *sixnumber).toFixed(2);
			$("#601whole_cost_price").val("$"+final_price);
		}
		
		
	}
	//有设计提交
	$("#601_submit").click(function(){
		 var six_quotation_category_id=$("#601quotation_category_id").val();//报价编号
		 var coefficient_id=$("#coefficient_id").val();//报价系数
		 var six_quotation_code=$("#601quotation_code").val();//设计编号
		 var standby_loss_number=$("#standby_loss_number").val();//备损数量
		 if(isNaN(standby_loss_number) || standby_loss_number<0){
		     alert("备损数量为不小于0的数字");
		 }else if(six_quotation_category_id==""){
			 alert("请选择报价编号");
		 }else if(six_quotation_code==""){
			 alert("请输入设计编号");
		 }else if(coefficient_id==""){
			 alert("请选择模板系数");
		 }else if($("#design_pic_name").val()==""){
			 alert("请输入报价名称");
		 }else{
			 $("#six_action_submit").submit();
	     }
		
	 });

</script>     
        
   <?php if ($this->_tpl_vars['quotation_category'] == 5): ?>     
      <div class="stkInfEnter" style="width:98%;display:block;" layoutH="30" id="ttbjd_wsj_hot_1">
      <?php else: ?>
      <div class="stkInfEnter" style="width:98%; display:none;" layoutH="30" id="ttbjd_wsj_hot_1">
   <?php endif; ?>   
   		<div style="width:100%; float:left;">	
            <?php if (! $this->_tpl_vars['quotation_category']): ?>
             <div class="sIE_title" style="width:15%;"><div class="button"><div class="buttonContent"><button onclick="document.getElementById('ttbjd_ysj_hot_1').style.display='block';document.getElementById('ttbjd_wsj_hot_1').style.display='none';">601报价单</button></div></div></div>
    	  <?php endif; ?>
    	  <div class="sIE_title" style="width:60%; margin-left:-100px;">601报价单(无设计)</div>
        </div>  	   
      <form name="form1" method="post" action="<?php echo $this->_tpl_vars['six_action_no']; ?>
"  id="no_six_action_submit" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)"> 
               <div class="sIEK" style="width:77%; margin-left:-210px;">
                    <div class="sIE_l" style="width:200px; margin-left:215px;">
                        <div class="sIE_l_01" style="width:200px;">
                            <div class="sIE_l_01_title">业务员:</div>
                              <input type="text" readonly="readonly" value="<?php echo $this->_tpl_vars['user_name']; ?>
" class="sIE_No" name="no_saleman_name"style="width:100px;" />
                          </div>
                          <div class="sIE_l_01" style="width:200px;">
                            <div class="sIE_l_01_title">客户代码:</div>
                              <input type="text" class="sIE_No" name="no_601customer_code" value="<?php echo $this->_tpl_vars['customers']['customer_code']; ?>
" readonly="readonly" style="width:100px;" />
                          </div>
                          
                          <div class="sIE_l_01" style="width:200px;">
                            <div class="sIE_l_01_title">客户名:</div>
                              <input type="text" class="sIE_No" name="no_601customer_name" value="<?php echo $this->_tpl_vars['customers']['customer_name']; ?>
" style="width:100px;" id="no_customer_code" readonly="readonly"/>
                          </div>
                          
                          <div class="sIE_l_01" style="width:200px;">
                              <div class="sIE_l_01_title">公司:</div>
                              <input type="text" class="sIE_No" id="no_601company" value="<?php echo $this->_tpl_vars['customers']['company']; ?>
" name="company_no" style="width:100px;" readonly="readonly"/>
                          </div>
                          <div class="sIE_l_01" style="width:200px;">
                            <div class="sIE_l_01_title">胶纸费:</div>
                              <input type="text" class="sIE_No" value="" name="no_601tapedata_price" id="no_601tapedata_price" style="width:100px;"  readonly="readonly" />
                          </div>
          
                          <div class="sIE_l_01" style="width:200px;">
                            <div class="sIE_l_01_title">材料费:</div>
                              <input type="text" class="sIE_No" name="no_601material_price" id='no_601material_price' value="" style="width:100px;" readonly="readonly"/>
                          </div>
                           <div class="sIE_l_01" style="width:200px;">
                            <div class="sIE_l_01_title">手工费:</div>
                              <input type="text" class="sIE_No" name="no_601factory_workmanship_price" value="" id="no_601factory_workmanship_price" style="width:100px;"  readonly="readonly" />
                          </div>
                         <div class="sIE_l_01" style="width:200px;">
                            <div class="sIE_l_01_title">成本价:</div>
                              <input type="text" class="sIE_No" name="no_601total_costs" value="" id="no_601total_costs" style="width:100px;"  readonly="readonly" />
                         </div>
                    </div>
                    <div class="sIE_l_01" style="margin-top:10px; width:210px; margin-left:200px;">
                        <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
                        <div class="sIE_r01" style="float:left; width:160px;">
                          <div class="sIE_r01_div" style="margin-left:30px;">
                              <input type="text" id="601_no_inch_w" style="width:100px;"  name="601_no_inch_w" value=""class="sIE_No" />
                              <input type="hidden" id="601_paper_price" style="width:100px;"  name="601_paper_price" value="<?php echo $this->_tpl_vars['six_paper_price']; ?>
"class="sIE_No" />
                              <div style=" margin-left:5px; float:left;">inch W</div>
                          </div>
                          <div class="sIE_r01_div" style="margin-left:30px;">
                              <input type="text" id="601_no_inch_h" style="width:100px;" name="601_no_inch_h" value=""  class="sIE_No" />
                              <div style=" margin-left:5px; float:left;">inch H</div>
                          </div>
                          <div class="sIE_r01_div" style="margin-left:30px;">
                              <input type="text" id="601_no_cm_w" style="width:100px;" value="" name="601_no_cm_w"class="sIE_No" />
                              <div style=" margin-left:5px; float:left;">cm W</div>
                          </div>
                          <div class="sIE_r01_div" style="margin-left:30px;">
                              <input type="text" id="601_no_cm_h" style="width:100px;" value="" name="601_no_cm_h" class="sIE_No" />
                              <div style=" margin-left:5px; float:left;">cm H</div>
                          </div>
                           <div class="sIE_l_01" style="width:200px; margin-left:-50px;">
                            <div class="sIE_l_01_title">报价系数:</div>
                              <input type="text" class="sIE_No" name="no_601coefficient" id='no_601coefficient' value="" style="width:60px;" readonly="readonly"/>
                          </div>
                           <div class="sIE_l_01" style="width:200px; margin-left:-50px;"">
                            <div class="sIE_l_01_title">单片报价:</div>
                              <input type="text" class="sIE_No" name="no_601price" id='no_601price' value="" style="width:100px;" readonly="readonly"/>
                          </div>
                           <div class="sIE_l_01" style="width:200px; margin-left:-50px;"">
                            <div class="sIE_l_01_title">片数:</div>
                              <input type="text" class="sIE_No" name="no_601number" id='no_601number' value="50" style="width:60px;"  onkeyup="number_update_no()"/>
                          </div>
                           <div class="sIE_l_01" style="width:200px; margin-left:-50px;"">
                            <div class="sIE_l_01_title">最终报价:</div>
                              <input type="text" class="sIE_No" name="no_601whole_cost_price" id='no_601whole_cost_price' value="" style="width:100px;" readonly="readonly"/>
                          </div>
                        
                        </div>
                     </div>
                    <div class="sIE_l" style="width:200px; margin-left:-410px;">
                         <div class="sIE_l_01" style="width:200px;">
                            <div class="sIE_l_01_title">时间:</div>
                              <input type="text" readonly="readonly" value="<?php echo $this->_tpl_vars['date']; ?>
" class="sIE_No"  name="no_601time"style="width:100px;" />
                          </div>
                           <div class="sIE_l_01" style="width:200px;">
                            <div class="sIE_l_01_title">报价名称:</div>
                              <input type="text" class="sIE_No" name="no_design_pic_name" value="" style="width:100px;" />
                          </div>
                          <div class="sIE_l_01" style="width:200px;">
                            <div class="sIE_l_01_title">601设计编号:</div>
                              <input type="text" class="sIE_No" name="no_601_design_number" value="" style="width:100px;" />
                          </div>
                           <div class="sIE_l_01" style="width:200px;">
                            <div class="sIE_l_01_title">报价编号:</div>
                              <input type="text" class="sIE_No" name="no_601quotation_code" value="<?php echo $this->_tpl_vars['no_stock_number']; ?>
" style="width:100px;" readonly="readonly"/>
                          </div>
                          
                          <div class="sIE_l_01" style="width:200px;">
                            <div class="sIE_l_01_title">备损数量:</div>
                              <input type="text" class="sIE_No" name="no_standby_loss_number" value="0" style="width:100px;" id="no_standby_loss_number"  />
                          </div>
                          
                          <div class="sIE_l_01" style="width:200px;">
                                <div class="sIE_l_01_title">模板系数:</div>
                                  <select class="picture_select01" name="coefficient_id_no" id="coefficient_id_no" style="width:106px; height:26px;" onchange="coefficient_id_no_find()">
                                    <option value="">请选择</option>
                                    <?php $_from = $this->_tpl_vars['six_coefficient']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
                                    <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['name']; ?>
</option>
                                   <?php endforeach; endif; unset($_from); ?>
                                  </select>
                           </div>
                           <div class="sIEK" style="width:190px;margin-left:500px; margin-top:-180px;">
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
                          <input type="button" id="insert_material_601"  style=" margin-top:130px; margin-left:540px; display:none;"value="添加材料"> 
                      </div>        
                     
                     <div class="sIE_r" style="width:140px;; height:auto;">
                             <div class="sIE_l_02">
                                
                                     <table cellspacing="0" class="sIE_l_02Tab"  id="hq_tableClass01" style="margin-top:190px; margin-left:-410px;">
                                       <thead id="six_coefficient_no">
                                            <tr>
                                                  <th width=18%>单价</th>
                                                  <th width=18%>系数</th>
                                            </tr>
    
                                      </thead>
                                     </table>
                             </div>
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
                                       </thead>
                                    </table>
                              </div>    
                     </div>
               
               
               </div> 
        </form>
            <div class="sIE_r" style="height:260px; width:260px; margin-top:0px; float:right;">
                  <div class="sIE_r_img" style="height:260px; width:260px; margin-left:0px; display:none;" id="image_no">
                      <div style="float:left;  width:260px; height:auto;">
                        <iframe style="border:none; width:260px; height:260px;"></iframe>
                      </div>  
                   </div>
                  <div class="sIE_r_img" style="height:280px; width:260px; margin-left:0px;"id="image_no_1">
                        <div style="float:left;  width:260px; height:auto;">
                          <iframe name="hq_yframe_hotfix" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/two_img_upload" style="border:none; width:280px; height:280px;"></iframe>
                        </div>
                  </div> 
                    <form style="float:left; width:260px;" id="hq_upload_jpg_601" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/two_img_upload" target="hq_yframe_hotfix" method="post" enctype="multipart/form-data" >
                      <div style="float:left; height:30px; width:60px; overflow:hidden; margin-left:20px; position:relative;">
                        <input type="file" class="sIE_r_img_file"  name="upload_file[]" multiple="multiple" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                        <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                      </div>
                      <input type="button" id="hq_jpg_upload_submit_601" value="上传JPG和CDR" style=" float:right; width:100px;" />
                    </form> 
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
	$(document).ready(function()  
	{
		$("#hq_jpg_upload_submit_601").click(function (){
			$("#hq_upload_jpg_601").submit();
		});
		
	});	
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

		  
</script>
<!-- {/literal} -->