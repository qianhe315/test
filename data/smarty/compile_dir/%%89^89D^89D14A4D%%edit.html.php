<?php /* Smarty version 2.6.22, created on 2016-03-04 11:55:54
         compiled from rhinestone_quotation/edit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
     
   <div class="stkInfEnter" style="width:102%;margin-left:-100px;" layoutH="100" id="ttbjd_ysj">
    	 <div class="sIE_title" style="margin-left:-60px;">材料报价表</div>
    	  	<div class="sIEK" style="width:980;">
            <form method="post" style="float:left;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form_edit">
            <input type="hidden" name="submit_value" id="submit_value" value="" />
      <div class="sIE_l" style="width:200px; margin-left:150px; margin-top:25px;">
        <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">业务员:</div>
            <input type="text" class="" style="width:100px;height:19px;" id="Saleman_name" name="Saleman_name" value="<?php echo $this->_tpl_vars['quotation_sheet']['saleman_name']; ?>
"/>
             <input type="hidden" name="mid" id="mid" style="margin-left:-100px;" value="<?php echo $this->_tpl_vars['quotation_sheet']['id']; ?>
" />
         </div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">时间:</div>
          <input type="text" style="width:100px;height:19px;"  id="Quotation_date" name="Quotation_date"value="<?php echo $this->_tpl_vars['quotation_sheet']['quotation_date']; ?>
" class="date" readonly />
         </div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">客户代码:</div>
          <input type="text" style="width:100px;height:19px;"  id="Customer_code" name="Customer_code" value="<?php echo $this->_tpl_vars['quotation_sheet']['customer_code']; ?>
" class="sIE_No" onkeyup="customer_num_code();"/>
         </div>
         <div id="Customer_code_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">客户名:</div>
          <input type="text" style="width:100px;height:19px;"  id="Customer_name" name="Customer_name"  value="<?php echo $this->_tpl_vars['quotation_sheet']['customer_name']; ?>
" class="" readonly/>
         </div>
          <div id="Customer_name_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">公司:</div>
          <input type="text" style="width:100px;height:19px;"  id="Customer_company" name="Customer_company" value="<?php echo $this->_tpl_vars['quotation_sheet']['customer_company']; ?>
" class="" readonly />
         </div>
      </div>
         <div class="sIE_l" style="width:200px; margin-left:50px; margin-top:25px;">
        <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">名称:</div>
            <input type="text" class="" style="width:100px;height:19px;" id="design_pic_name" name="design_pic_name" value="<?php echo $this->_tpl_vars['quotation_sheet']['design_pic_name']; ?>
"/>
         </div>
          <div id="design_pic_name_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">报价编号:</div>
          <input type="text" style="width:100px;height:19px;"  id="Quotation_code" name="Quotation_code"  value="<?php echo $this->_tpl_vars['quotation_sheet']['quotation_code']; ?>
" class="" readonly/>
         </div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">成本价:</div>
          <input type="text" style="width:100px;height:19px;"  id="Whole_cost_price" name="Whole_cost_price"  value="<?php echo $this->_tpl_vars['quotation_sheet']['whole_cost_price']; ?>
" class=""  readonly/>
           <input type="hidden" style="width:100px;height:19px;"  id="mo" name="mo"  value="" class=""  />
           <input type="hidden" style="width:100px;height:19px;"  id="qc" name="qc"  value="" class=""  />
           <input type="hidden" style="width:100px;height:19px;"  id="id" name="id"  value="" class="" />
         </div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">最终报价:</div>
          <input type="text" style="width:100px;height:19px;"  id="Final_quote" name="Final_quote"  value="<?php echo $this->_tpl_vars['quotation_sheet']['final_quote']; ?>
" class=""  readonly/>
         </div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">货币:</div>
          <!--<input type="text" style="width:100px;height:19px;"  id="time" name="time"  datefmt="yyyy-MM-dd" value="<?php echo $this->_tpl_vars['time_add_quotecustomer']; ?>
" class="date required" readonly />-->
          <select class="combox" name="contact" style="width:200px;height:19px;" id="contact" onkeyup="customer_num();">
        
                 
                    <option value="￥人民币"  <?php if ($this->_tpl_vars['quotation_sheet']['exchange_rate_id'] == "人民币"): ?>  selected="selected"<?php endif; ?>>￥人民币</option>
                	<option value="美元" <?php if ($this->_tpl_vars['quotation_sheet']['exchange_rate_id'] == "美元"): ?>  selected="selected"<?php endif; ?>>$美元</option>
                    <option value="€欧元" <?php if ($this->_tpl_vars['quotation_sheet']['exchange_rate_id'] == "欧元"): ?>  selected="selected"<?php endif; ?>>€欧元</option>

                </select>
         </div>
      </div>
      <div class="sIE_l" style="width:260px; margin-left:50px; margin-top:25px;">
        <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">材料:</div>
            <select class="add01_select01"  id="material_name" style="width:105px;" name="material_name">
              <option value=""></option>
                <?php $_from = $this->_tpl_vars['materials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mt']):
?>
                <option value="<?php echo $this->_tpl_vars['mt']['material_name']; ?>
"><?php echo $this->_tpl_vars['mt']['material_name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
         <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">颜色:</div>
            <select class="add01_select01" id="material_color" style="width:105px;" name="material_color">
            </select>
          </div>
          
          <div style="float:left; margin-bottom:5px;display:block;" id="size">
            <div class="sIE_l_01_title" >尺寸:</div>
            <select class="add01_select01" id="material_size" style="width:105px; height:24px;" name="material_size">
              <option></option>
            </select>
          </div>
          <button type="button" id="material_add">添加材料</button>
          <div id="mp_error" style=" color:#FFF; background-color:#F00; height:21px; line-height:21px; text-align:center; padding-left:5px; padding-right:5px; float:left; margin-bottom:10px; display:none;"></div>
       </div>
       </form>
   
      <div class="sIE_l_02" style="width:80%; margin-left:100px;">
      <table cellspacing="0" class="sIE_l_02Tab" id="mp_table_add">
        <tr>
          <th>名称</th>
          <th>颜色</th>
          <th>尺寸</th>
          <th>数量</th>
          <th>单价</th>
          <th>手工费</th>
          <th>成本价</th>
          <th>报价系数</th>
          <th>报价</th>
          <th>操作</th>
        </tr>
        <?php if ($this->_tpl_vars['quotation_sheet_material'] != ""): ?>
        <?php $_from = $this->_tpl_vars['quotation_sheet_material']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['qf']):
?>
                              <tr>
                                
                                 <td><?php echo $this->_tpl_vars['qf']['material_name']; ?>
</td>
                                 <td><?php echo $this->_tpl_vars['qf']['material_color']; ?>
</td>
                                 <td><?php echo $this->_tpl_vars['qf']['material_size']; ?>
</td>
                                   <?php if ($this->_tpl_vars['qf']['material_size'] != ""): ?>
                                  <?php if ($this->_tpl_vars['qf']['min_order'] != ""): ?>
                                  <td><input type="text" id="min_order<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order']; ?>
" style="width:30px;height:19px;"  onkeyup="min_order_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)" />G <div id="minorder_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div> <input type="hidden" id="min_order_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order_start']; ?>
" /></td>
                                <?php else: ?>
                                 <td><input type="text" id="min_order<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="1" style="width:30px;height:19px;"  onkeyup="min_order_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)" />G <div id="minorder_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div> <input type="hidden" id="min_order_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order_start']; ?>
" /></td>
                                <?php endif; ?>
                                  <?php else: ?>
                                   <?php if ($this->_tpl_vars['qf']['min_order'] != ""): ?>
                                  <td><input type="text" id="min_order<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order']; ?>
" style="width:30px;height:19px;"  onkeyup='min_order_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)'/>M<div id="minorder_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div><input type="hidden" id="min_order_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order_start']; ?>
" /></td>
                                  <?php else: ?>
                                  <td><input type="text" id="min_order<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="1" style="width:30px;height:19px;"  onkeyup='min_order_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)'/>M<div id="minorder_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div><input type="hidden" id="min_order_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order_start']; ?>
" /></td>
                                  <?php endif; ?>
                                    <?php endif; ?>
                                 <td><?php echo $this->_tpl_vars['qf']['price']; ?>
</td>
                                 <?php if ($this->_tpl_vars['qf']['shougongfei'] == ''): ?>
                                  <td><div id="shougongfei_<?php echo $this->_tpl_vars['qf']['id']; ?>
">￥0</div></td>
                                  <?php else: ?>
                                 <td><div id="shougongfei_<?php echo $this->_tpl_vars['qf']['id']; ?>
">￥<?php echo $this->_tpl_vars['qf']['shougongfei']; ?>
</div></td>
                                 <?php endif; ?>  
                                 <td><div id="bk_<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['chengbenjia']; ?>
</div><input type="hidden" id="bk_<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="" /></td>
                                 <?php if ($this->_tpl_vars['qf']['quote_coefficient'] != ""): ?>   
                                 <td><input type="text" id="quote_coefficient<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['quote_coefficient']; ?>
"  style="width:30px;height:19px;"onkeyup="quote_coefficient_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)" /><div id="quote_coefficient_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div> <input type="hidden" id="quote_coefficient_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['quote_coefficient_start']; ?>
" /></td>
                                 <?php else: ?>
                                 <td><input type="text" id="quote_coefficient<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="1"  style="width:30px;height:19px;"onkeyup="quote_coefficient_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)" /><div id="quote_coefficient_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div> <input type="hidden" id="quote_coefficient_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['quote_coefficient_start']; ?>
" /></td>
                                 <?php endif; ?>
                                 <td><div id="bj_<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['baojia']; ?>
</div><input type="hidden" id="bj_<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="" /></td>
                                 <td onClick='getDel(this,"<?php echo $this->_tpl_vars['qf']['id']; ?>
")'><a href='#'>删除</a></td>
                              </tr>
                              
                           <?php endforeach; endif; unset($_from); ?>  
                           <?php endif; ?>
      </table>
    </div>
    </div>
   </div>
   
   <div class="formBar"> 
        <div class="button" style="margin-left:80%; margin-right:5px;">
    		<div class="buttonContent">
       			 <button type="button" id="submit_edit" >确定</button>
    		</div>
  		</div>
  		<div class="button" style="margin-left:85%; margin-right:5px; margin-top:-25px;">
    		<div class="buttonContent">
       			<button class="close">取消</button>
    		</div>
  		</div>
        <div class="button" style="margin-left:90%; margin-right:5px; margin-top:-25px;">
        <div class="buttonContent" >
          <button type="button" id="edit_order">添加做货单</button>
        </div>
      </div>
	</div>

<script type="text/javascript">
function customer_num_code(){
	                  
						var name = $("#Customer_code").val();
						if(name!=""){
							$("#Customer_code_error").css("display","none");
						}
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/add_customer',//通过Ajax取数据的目标页面
							data:{"name":name},
							type:'post',//方法，还可以是"post"
							dataType:'json',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								if(locals){
									$("#Customer_name").val(locals.customer_name);
									$("#Customer_company").val(locals.company);
								}else{
									$("#Customer_name").val('');
									$("#Customer_company").val('');									
								}
							}								
							
						});
					}
function min_order_change(key){
	
	   $(document).ready(function(){
		 var min_order=$("#min_order"+key).val();
		var c= /^\+?[1-9][0-9]*$/;
		var b=c.test(min_order);
		var mid = $("#mid").val();
		if(b==true){
		  var contact = $("#contact").val();
		   $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/min_order_change',//通过Ajax取数据的目标页面
				data:{"key":key,"material_name":$("#material_name"+key).val(),"material_color":$("#material_color"+key).val(),"material_size":$("#material_size"+key).val(),"min_order":$("#min_order"+key).val(),"contact":contact},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{  
					locals=locals.split("|");
					
					$("#bk_"+key).html("￥"+locals[0]);
					if(contact=="￥人民币"){
					   $("#bj_"+key).html("￥"+locals[1]);	
					  
				    }else if(contact=="美元"){
					  
					  $("#bj_"+key).html("$"+locals[1]);	
				    }else if(contact=="€欧元"){
					  $("#bj_"+key).html("€"+locals[1]);	
				    }
					$("#minerror_"+key).css("display","none");
	    	        min_order=min_order-0;
					locals[2]=locals[2]-0;
					if(min_order<locals[2]){
						$("#shougongfei_"+key).html("￥"+1);	
						$("#minerror_"+key).css("display","block");
						$("#minerror_"+key).html("数量小于初始值！");	
					}else{
						$("#shougongfei_"+key).html("￥"+0);	
					}
					if(locals){
				      $.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_total_edit2',//通过Ajax取数据的目标页面
						type:'get',//方法，还可以是"post"
						data:{"key":key,'contact':contact,'mid':mid},
						dataType:'json',//数据类型，还有其它的，详见jQuery手册
						success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						{
							loc=loc.split("|");
							 locs=loc[0].split("-");
							 var op="";
							 var zongjia="";
							 for(var i = 0; i < loc[1]; i++){
								 loc_s=locs[i].split(",");
								 var min_order= $("#min_order"+loc_s[0]).val();
								 var quote_coefficient= $("#quote_coefficient"+loc_s[0]).val();
								 var chengbenjia=eval(loc_s[1]+"*"+min_order).toFixed(2);
								 var c=eval(loc_s[2]+"-"+min_order);
								 if(c>0){
									 chengbenjia=eval(chengbenjia+"+"+1);
								 }
								 if(contact=="￥人民币"){
									 var a='￥';
								   baojia=eval(chengbenjia+"*"+quote_coefficient).toFixed(2);
								 }else if(contact=="美元"){
								   baojia=eval(chengbenjia+"*"+quote_coefficient+"/"+6).toFixed(2);
									var a='$';
								 }else if(contact=="€欧元"){
								   baojia=eval(chengbenjia+"*"+quote_coefficient+"/"+7).toFixed(2);
									var a='€';
								 }
								
								 op+=chengbenjia+"+";
								 zongjia+=baojia+"+";
							 }
							 op=op.substring(0,op.length-1);
							 op=eval(op).toFixed(2);
							 
							 zongjia=zongjia.substring(0,zongjia.length-1);
							 zongjia=eval(zongjia).toFixed(2);
							 $("#Whole_cost_price").val("￥"+op);
							 $("#Final_quote").val(a+zongjia);
					   }
					});
						
					}											
				}								
				
			});
		}else{
			 $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/min_order_change',//通过Ajax取数据的目标页面
				data:{"key":key,"material_name":$("#material_name"+key).val(),"material_color":$("#material_color"+key).val(),"material_size":$("#material_size"+key).val(),"min_order":$("#min_order"+key).val(),"contact":contact},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{  
			$("#minerror_"+key).css("display","block");
		        $("#minerror_"+key).html("起订量为正整数！");	
				}});
		}
			
		});
};

function min_order_change_edit(key){
	
	   $(document).ready(function(){
			 var contact = $("#contact").val();
			 var mid = $("#mid").val();
			 var min_order=$("#min_order"+key).val();
			 var quote_coefficient=$("#quote_coefficient"+key).val();
			 var c= /^\+?[1-9][0-9]*$/;
			 var b=c.test(min_order);
			 if(b==true){
				$("#minorder_error"+key).css("display","none");
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/min_order_change_edit',//通过Ajax取数据的目标页面
					data:{"id":key,"min_order": $("#min_order"+key).val(),"quote_coefficient": $("#quote_coefficient"+key).val()},
					type:'post',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						locals=locals.split("|");
						min_order=min_order-0;
						locals[2]=locals[2]-0;
						var k=eval(min_order+"-"+locals[2]);
						$("#bk_"+key).html("￥"+locals[0]);
						if(contact=="￥人民币"){
					    $("#bj_"+key).html("￥"+locals[1]);	
					
						}else if(contact=="美元"){
						  var cc=eval(locals[1]+"/"+6).toFixed(2);
						  $("#bj_"+key).html("$"+cc);	
						}else if(contact=="€欧元"){
							var cc=eval(locals[1]+"/"+7).toFixed(2);
						   $("#bj_"+key).html("€"+cc);	
						}
						if(k<0){
							$("#shougongfei_"+key).html("￥"+1);
							$("#minorder_error"+key).css("display","block");
							$("#minorder_error"+key).html("数量小于初始值！");	
						}else{
							$("#shougongfei_"+key).html("￥"+0);
						}
					
						if(locals){
						  $.ajax({
							  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_total_edit2',//通过Ajax取数据的目标页面
							  type:'get',//方法，还可以是"post"
							  data:{'contact':contact,'mid':mid},
							  dataType:'json',//数据类型，还有其它的，详见jQuery手册
							  success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							  {
								  loc=loc.split("|");
								 locs=loc[0].split("-");
								 var op="";
								 var zongjia="";
								 for(var i = 0; i < loc[1]; i++){
									 loc_s=locs[i].split(",");
									 var min_order= $("#min_order"+loc_s[0]).val();
									 var quote_coefficient= $("#quote_coefficient"+loc_s[0]).val();
									 var chengbenjia=eval(loc_s[1]+"*"+min_order).toFixed(2);
									 var c=eval(loc_s[2]+"-"+min_order);
									 if(c>0){
										 chengbenjia=eval(chengbenjia+"+"+1);
									 }
									 if(contact=="￥人民币"){
										 var a='￥';
									   baojia=eval(chengbenjia+"*"+quote_coefficient).toFixed(2);
									 }else if(contact=="美元"){
									   baojia=eval(chengbenjia+"*"+quote_coefficient+"/"+6).toFixed(2);
										var a='$';
									 }else if(contact=="€欧元"){
									   baojia=eval(chengbenjia+"*"+quote_coefficient+"/"+7).toFixed(2);
										var a='€';
									 }
									
									 op+=chengbenjia+"+";
									 zongjia+=baojia+"+";
								 }
								 op=op.substring(0,op.length-1);
								 op=eval(op).toFixed(2);
								 
								 zongjia=zongjia.substring(0,zongjia.length-1);
								 zongjia=eval(zongjia).toFixed(2);
								 $("#Whole_cost_price").val("￥"+op);
								 $("#Final_quote").val(a+zongjia);
							 }
						  });       
						}											
					}								
				});
			 }else{
			   $.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/min_order_change_edit',//通过Ajax取数据的目标页面
					data:{"id":key,"min_order": $("#min_order"+key).val(),"quote_coefficient": $("#quote_coefficient"+key).val()},
					type:'post',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						  $("#minorder_error"+key).css("display","block");
						  $("#minorder_error"+key).html("起订量为正整数！");	
					}
			   });
			 }
		});
}
function quote_coefficient_change(key){
	   $(document).ready(function(){
		var contact = $("#contact").val();
		 var quote_coefficient=$("#quote_coefficient"+key).val();
	    var mid = $("#mid").val();
		var c = /^\d+(?=\.{0,1}\d+$|$)/ 
		var b=c.test(quote_coefficient);
		if(b==true && quote_coefficient!='0'){
		   $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/quote_coefficient_change',//通过Ajax取数据的目标页面
				data:{"key":key,"material_name":$("#material_name"+key).val(),"material_color":$("#material_color"+key).val(),"material_size":$("#material_size"+key).val(),"min_order":$("#min_order"+key).val(),"quote_coefficient":$("#quote_coefficient"+key).val()},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{ 
				
				  locals=locals.split("|");
				   if(contact=="￥人民币"){
					   $("#bj_"+key).html("￥"+locals[0]);	
					  
				   }else if(contact=="美元"){
					   var cc=eval(locals[0]+"/"+6).toFixed(2);
					  $("#bj_"+key).html("$"+cc);	
				   }else if(contact=="€欧元"){
					   var cc=eval(locals[0]+"/"+7).toFixed(2);
					  $("#bj_"+key).html("€"+cc);	
				   }
				  $("#quote_coefficienterror_"+key).css("display","none");
	    	      quote_coefficient=quote_coefficient-0;
			      locals[1]=locals[1]-0;
				  if(quote_coefficient<locals[1]){
					  
					  $("#quote_coefficienterror_"+key).css("display","block");
					  $("#quote_coefficienterror_"+key).html("数量小于初始值！");	
				  }
					if(locals){
						$.ajax({
			    url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_total_edit2',//通过Ajax取数据的目标页面
			    type:'get',//方法，还可以是"post"
		        data:{"key":key,'contact':contact,'mid':mid},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
						 loc=loc.split("|");
						 locs=loc[0].split("-");
						 var op="";
						 var zongjia="";
						 for(var i = 0; i < loc[1]; i++){
							 loc_s=locs[i].split(",");
							 var min_order= $("#min_order"+loc_s[0]).val();
							 var quote_coefficient= $("#quote_coefficient"+loc_s[0]).val();
							 var chengbenjia=eval(loc_s[1]+"*"+min_order).toFixed(2);
							 var c=eval(loc_s[2]+"-"+min_order);
							 if(c>0){
								 chengbenjia=eval(chengbenjia+"+"+1);
							 }
							 if(contact=="￥人民币"){
								 var a='￥';
							   baojia=eval(chengbenjia+"*"+quote_coefficient).toFixed(2);
							 }else if(contact=="美元"){
							   baojia=eval(chengbenjia+"*"+quote_coefficient+"/"+6).toFixed(2);
								var a='$';
							 }else if(contact=="€欧元"){
							   baojia=eval(chengbenjia+"*"+quote_coefficient+"/"+7).toFixed(2);
								var a='€';
							 }
							
							 op+=chengbenjia+"+";
							 zongjia+=baojia+"+";
						 }
						 op=op.substring(0,op.length-1);
						 op=eval(op).toFixed(2);
						 
						 zongjia=zongjia.substring(0,zongjia.length-1);
						 zongjia=eval(zongjia).toFixed(2);
						 $("#Whole_cost_price").val("￥"+op);
						 $("#Final_quote").val(a+zongjia);
				 }
			});
					}											
				}								
				
			});
				}else{
					  $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/quote_coefficient_change',//通过Ajax取数据的目标页面
				data:{"key":key,"material_name":$("#material_name"+key).val(),"material_color":$("#material_color"+key).val(),"material_size":$("#material_size"+key).val(),"min_order":$("#min_order"+key).val(),"quote_coefficient":$("#quote_coefficient"+key).val()},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{ 
			$("#quote_coefficienterror_"+key).css("display","block");
		    $("#quote_coefficienterror_"+key).html("报价系数为正数！");	
				}
					  });
		}
		})
};

function quote_coefficient_change_edit(key){
	
	   $(document).ready(function(){
		var contact = $("#contact").val();
		var mid = $("#mid").val();
		var quote_coefficient=$("#quote_coefficient"+key).val();
	
     	c = /^\d+(?=\.{0,1}\d+$|$)/ 
		var b=c.test(quote_coefficient);
		if(b==true && quote_coefficient!='0'){
			$("#quote_coefficient_error"+key).css("display","none");
			
		   $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/quote_coefficient_change_edit',//通过Ajax取数据的目标页面
				data:{"id":key,"quote_coefficient": $("#quote_coefficient"+key).val()},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{ 
				
				
				locals=locals.split("|");
				if(contact=="￥人民币"){
					   $("#bj_"+key).html("￥"+locals[0]);	
					  
				   }else if(contact=="美元"){
					   var cc=eval(locals[0]+"/"+6).toFixed(2);
					  $("#bj_"+key).html("$"+cc);	
				   }else if(contact=="€欧元"){
					   var cc=eval(locals[0]+"/"+7).toFixed(2);
					  $("#bj_"+key).html("€"+cc);	
				   }
			  quote_coefficient=quote_coefficient-0;
			locals[1]=locals[1]-0;
			if(quote_coefficient<locals[1]){
				
				$("#quote_coefficient_error"+key).css("display","block");
		        $("#quote_coefficient_error"+key).html("数量小于初始值！");
			}
			if(locals){
				$.ajax({
			    url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_total_edit2',//通过Ajax取数据的目标页面
			    type:'get',//方法，还可以是"post"
		        data:{'contact':contact,'mid':mid},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					 loc=loc.split("|");
					 locs=loc[0].split("-");
					 var op="";
					 var zongjia="";
					 for(var i = 0; i < loc[1]; i++){
						 loc_s=locs[i].split(",");
						 var min_order= $("#min_order"+loc_s[0]).val();
						 var quote_coefficient= $("#quote_coefficient"+loc_s[0]).val();
						 var chengbenjia=eval(loc_s[1]+"*"+min_order).toFixed(2);
						 var c=eval(loc_s[2]+"-"+min_order);
						 if(c>0){
							 chengbenjia=eval(chengbenjia+"+"+1);
						 }
						 if(contact=="￥人民币"){
							 var a='￥';
						   baojia=eval(chengbenjia+"*"+quote_coefficient).toFixed(2);
						 }else if(contact=="美元"){
						   baojia=eval(chengbenjia+"*"+quote_coefficient+"/"+6).toFixed(2);
							var a='$';
						 }else if(contact=="€欧元"){
						   baojia=eval(chengbenjia+"*"+quote_coefficient+"/"+7).toFixed(2);
							var a='€';
						 }
						
						 op+=chengbenjia+"+";
						 zongjia+=baojia+"+";
					 }
					 op=op.substring(0,op.length-1);
					 op=eval(op).toFixed(2);
					 
					 zongjia=zongjia.substring(0,zongjia.length-1);
					 zongjia=eval(zongjia).toFixed(2);
					 $("#Whole_cost_price").val("￥"+op);
					 $("#Final_quote").val(a+zongjia);
				 }
				});
					}											
				}								
				
			});
			}else{
				 $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/quote_coefficient_change_edit',//通过Ajax取数据的目标页面
				data:{"id":key,"quote_coefficient": $("#quote_coefficient"+key).val()},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{ 
			$("#quote_coefficient_error"+key).css("display","block");
		    $("#quote_coefficient_error"+key).html("报价系为正数！");
				}
				 });
		}
	   });
}
$(document).ready(function()  
{
	 $("#submit_edit").click(function () {
		var mid = $("#mid").val();
		var Customer_code=$("#Customer_code").val();
		var Customer_name=$("#Customer_name").val();
		var design_pic_name=$("#design_pic_name").val();
		if(Customer_code==""){
			$("#Customer_code_error").css("display","block");
			$("#Customer_code_error").html("请填写客户代码！");
		}else if(Customer_name==""){
			$("#Customer_code_error").css("display","none");
			$("#Customer_name_error").css("display","block");
			$("#Customer_name_error").html("请填写客户名字！");
		}else if(design_pic_name==""){
			$("#Customer_name_error").css("display","none");
			$("#design_pic_name_error").css("display","block");
			$("#design_pic_name_error").html("请填写名称！");
		}
		else{
			$("#design_pic_name_error").css("display","none");
			 $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/check',//通过Ajax取数据的目标页面
				data:{"mid":mid},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{  
				//alert(locals);return;
				 //alert(locals.quote_coefficient);
				   locals=locals.split("|");
					 if(locals[0]==3){
					 loc=locals[1].split(",");
					 var mo;
					 var qc;
					 var id;
					 for(var i = 0; i < locals[2]; i++){
					   var min_order= $("#min_order"+loc[i]).val();
					   var quote_coefficient= $("#quote_coefficient"+loc[i]).val();
					   mo+=min_order+"+";
					   qc+=quote_coefficient+"+";
					   id+=loc[i]+"+";
					 }
					 mo=mo.substring(0,mo.length-1);
					 mo=mo.replace("undefined","");
					 qc=qc.substring(0,qc.length-1);
					 qc=qc.replace("undefined","");
					 
					 id=id.substring(0,id.length-1);
					 id=id.replace("undefined","");
					 $("#mo").val(mo);
					 $("#qc").val(qc);
					 $("#id").val(id);
					 $("#submit_value").val('1');
					 $("#info_form_edit").submit();
					 }else{
						
						if(locals[0]==1){
						alert("数量和报价系数不可以均低于初始值！");
						}else if(locals[0]==2){
							alert("请填写正确的数量和报价系数！");
						}
					}				}});
		
		}
	 });
	 
	 //添加做货单
	 $("#edit_order").click(function () {
		var mid = $("#mid").val();
		var Customer_code=$("#Customer_code").val();
		var Customer_name=$("#Customer_name").val();
		var design_pic_name=$("#design_pic_name").val();
		if(Customer_code==""){
			$("#Customer_code_error").css("display","block");
			$("#Customer_code_error").html("请填写客户代码！");
		}else if(Customer_name==""){
			$("#Customer_code_error").css("display","none");
			$("#Customer_name_error").css("display","block");
			$("#Customer_name_error").html("请填写客户名字！");
		}else if(design_pic_name==""){
			$("#Customer_name_error").css("display","none");
			$("#design_pic_name_error").css("display","block");
			$("#design_pic_name_error").html("请填写名称！");
		}
		else{
			$("#design_pic_name_error").css("display","none");
			 $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/check',//通过Ajax取数据的目标页面
				data:{"mid":mid},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{  
				//alert(locals);return;
				 //alert(locals.quote_coefficient);
				   locals=locals.split("|");
					 if(locals[0]==3){
					 loc=locals[1].split(",");
					 var mo;
					 var qc;
					 var id;
					 for(var i = 0; i < locals[2]; i++){
					   var min_order= $("#min_order"+loc[i]).val();
					   var quote_coefficient= $("#quote_coefficient"+loc[i]).val();
					   mo+=min_order+"+";
					   qc+=quote_coefficient+"+";
					   id+=loc[i]+"+";
					 }
					 mo=mo.substring(0,mo.length-1);
					 mo=mo.replace("undefined","");
					 qc=qc.substring(0,qc.length-1);
					 qc=qc.replace("undefined","");
					 
					 id=id.substring(0,id.length-1);
					 id=id.replace("undefined","");
					 $("#mo").val(mo);
					 $("#qc").val(qc);
					 $("#id").val(id);
					 $("#submit_value").val('2');
					 $("#info_form_edit").submit();
					 }else{
						
						if(locals[0]==1){
						alert("数量和报价系数不可以均低于初始值！");
						}else if(locals[0]==2){
							alert("请填写正确的数量和报价系数！");
						}
					}				}});
		
		}
	 });
	 
	 
	 
	 
	 
	 
	 
	 
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
/rhinestone_quotation/get_mp_infomation',//通过Ajax取数据的目标页面
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
/rhinestone_quotation/get_mp_color_infomation',//通过Ajax取数据的目标页面
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
					if(jsonObj.size=="" && jsonObj.size_mm=="" && jsonObj.size_m_w==""){
						$('#size').css("display","none");
						}
						else{
							$('#size').css("display","block");
						}
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
$("#material_add").click(function (){
  	    
		$("#mp_error").css("display","none");
		var row_number = 0;
		var material_name = $("#material_name").val();
	    var color = $("#material_color").val();
		var size = $("#material_size").val();
	  	var mid = $("#mid").val();
		var contact = $("#contact").val();
	    $.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/find_minorder',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
			     var shougongfei =0;
					  var aa = locals.min_order;//起订量
					  var bb = locals.quote_coefficient;//报价系数
					  var price_m=locals.price;
				      if(size!=''){
						  price_m=eval(price_m+"*"+144).toFixed(2);
						  
					  }else{
						  price_m=eval(price_m+"*"+1000).toFixed(2);
					  }
					  if(aa==null){
						  aa=1;
					  }
					  if(bb==null){
						  bb=1;
					  }
					  var cc = locals.price;
					  var ee =locals.size;
					  gg=cc*aa;
					  ff=(price_m*aa).toFixed(2);
					  hh=(price_m*aa).toFixed(2);
			    if($("#material_name").val()!="" && $("#material_color").val()!=""){
					$.ajax({
						  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/insert_table_design_material_edit',//通过Ajax取数据的目标页面
						  type:'get',//方法，还可以是"post"
						  data:{'material_name':material_name,'material_color':color,'material_size':size,'contact':contact,'mid':mid                          },
						  dataType:'json',//数据类型，还有其它的，详见jQuery手册
						  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						  { 
							   locals=locals.split("|");
							  if(locals[0]==0 && size==""){
								   alert("请添加完整信！");
							  }else if(locals[1]!= 0 ){
								  $.ajax({
										url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_total_edit2',//通过Ajax取数据的目标页面
										type:'get',//方法，还可以是"post"
										data:{'contact':contact,'mid':mid},
										dataType:'json',//数据类型，还有其它的，详见jQuery手册
										success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										{  
										       loc=loc.split("|");
											   locs=loc[0].split("-");
											   var op="";
											   var zongjia="";
											   for(var i = 0; i < loc[1]; i++){
												   loc_s=locs[i].split(",");
												   var min_order= $("#min_order"+loc_s[0]).val();
												   var quote_coefficient= $("#quote_coefficient"+loc_s[0]).val();
											
												   var chengbenjia=eval(loc_s[1]+"*"+min_order).toFixed(2);
												   var c=eval(loc_s[2]+"-"+min_order);
												   if(c>0){
													   chengbenjia=eval(chengbenjia+"+"+1);
												   }
												   if(contact=="￥人民币"){
													   var a='￥';
													 baojia=eval(chengbenjia+"*"+quote_coefficient).toFixed(2);
											       }else if(contact=="美元"){
												  	 baojia=eval(chengbenjia+"*"+quote_coefficient+"/"+6).toFixed(2);
													  var a='$';
											       }else if(contact=="€欧元"){
													 baojia=eval(chengbenjia+"*"+quote_coefficient+"/"+7).toFixed(2);
													  var a='€';
											       }
												  
						                           op+=chengbenjia+"+";
												   zongjia+=baojia+"+";
											   }
										       op=op.substring(0,op.length-1);
											   op=eval(op).toFixed(2);
											    
											   zongjia=zongjia.substring(0,zongjia.length-1);
											   zongjia=eval(zongjia).toFixed(2);
											   $("#Whole_cost_price").val("￥"+op);
											   $("#Final_quote").val(a+zongjia);
											  /* if(contact=="￥人民币"){
													$("#Whole_cost_price").val("￥"+op);
													$("#Final_quote").val("￥"+zongjia);
											   }else if(contact=="美元"){
													$("#Whole_cost_price").val("￥"+op);
													zongjia=eval(zongjia+"/"+'6').toFixed(2);
													$("#Final_quote").val("$"+zongjia);
											   }else if(contact=="€欧元"){
													$("#Whole_cost_price").val("￥"+op);
													zongjia=eval(zongjia+"/"+'8').toFixed(2);
													$("#Final_quote").val("€"+zongjia);
											   }*/
										}
								  });
								 if(contact=="￥人民币"){
											
											yy=eval(ff+"*"+bb).toFixed(2);
											kk=eval(hh+"*"+bb).toFixed(2);
											var price=11;
										    if(size!="" ){
											  if(ee!=""){
											   var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+"  value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+"  value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px; name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' onkeyup='min_order_change("+locals[1]+")' />G<div id=minerror_"+locals[1]+" style=display:none;></div></td><td><div id=price_"+locals[1]+">￥"+price_m+"</div><input type='hidden' name='materials["+row_number+"][price]' id=price"+locals[1]+"  value='"+price_m+"' /></td> <td><div id=shougongfei_"+locals[1]+">￥"+shougongfei+"</div><input type='hidden' name='materials["+row_number+"][shougongfei]' id=shougongfei"+locals[1]+"  value='"+shougongfei+"' /></td><td><div id=bk_"+locals[1]+">￥"+ff+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+ff+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px;  name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' onkeyup='quote_coefficient_change("+locals[1]+")'  /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></td><td><div id=bj_"+locals[1]+">￥"+yy+"</div><input type='hidden' id='' name='materials["+row_number+"][material_name]' value='"+yy+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";                    
											   $("#mp_table_add").append(table_value); //为table追加一个tr(下拉项)
											}else{
												var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+" value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]'  id=material_size"+locals[1]+" value='"+size+"' />mm</td><td>"+""+"<input type='text' style=width:30px;height:19px; name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' onkeyup='min_order_change("+locals[1]+")'/>G<div id=minerror_"+locals[1]+" style=display:none;></div></td><td><div id=price_"+locals[1]+">￥"+price_m+"</div><input type='hidden' name='materials["+row_number+"][price]' id=price"+locals[1]+"  value='"+price_m+"' /></td> <td><div id=shougongfei_"+locals[1]+">￥"+shougongfei+"</div><input type='hidden' name='materials["+row_number+"][shougongfei]' id=shougongfei"+locals[1]+"  value='"+shougongfei+"' /></td><td><div id=bk_"+locals[1]+">￥"+ff+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+ff+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px;  name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' onkeyup='quote_coefficient_change("+locals[1]+")' /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></td><td><div id=bj_"+locals[1]+">￥"+yy+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+yy+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";
												$("#mp_table_add").append(table_value); 
												}
											}else{
												var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+"  value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px; name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' onkeyup='min_order_change("+locals[1]+")' />M<div id=minerror_"+locals[1]+" style=display:none;></div></td><td><div id=price_"+locals[1]+">￥"+price_m+"</div><input type='hidden' name='materials["+row_number+"][price]' id=price"+locals[1]+"  value='"+price_m+"' /></td> <td><div id=shougongfei_"+locals[1]+">￥"+shougongfei+"</div><input type='hidden' name='materials["+row_number+"][shougongfei]' id=shougongfei"+locals[1]+"  value='"+shougongfei+"' /></td><td><div id=bk_"+locals[1]+">￥"+hh+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+hh+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px;  name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' onkeyup='quote_coefficient_change("+locals[1]+")' /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></td><td><div id=bj_"+locals[1]+">￥"+kk+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+kk+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";
												$("#mp_table_add").append(table_value); //为table追加一个tr(下拉项)
										   }
										}
										if(contact=="美元"){
											ll=ff*bb;
											yy=(ll/6).toFixed(2);
											qq=hh*bb;
											kk=(qq/6).toFixed(2);
												if(size!="" ){
												if(ee!=""){
												   var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+" value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px; name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' onkeyup='min_order_change("+locals[1]+")' />G<div id=minerror_"+locals[1]+" style=display:none;></div></td><td><div id=price_"+locals[1]+">￥"+price_m+"</div><input type='hidden' name='materials["+row_number+"][price]' id=price"+locals[1]+"  value='"+price_m+"' /></td> <td><div id=shougongfei_"+locals[1]+">￥"+shougongfei+"</div><input type='hidden' name='materials["+row_number+"][shougongfei]' id=shougongfei"+locals[1]+"  value='"+shougongfei+"' /></td><td><div id=bk_"+locals[1]+">￥"+ff+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+ff+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px;  name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' onkeyup='quote_coefficient_change("+locals[1]+")'  /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></td><td><div id=bj_"+locals[1]+">$"+yy+"</div><input type='hidden' id='' name='materials["+row_number+"][material_name]' value='"+yy+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";                    
												   $("#mp_table_add").append(table_value); //为table追加一个tr(下拉项)
												}else{
													var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+" value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' />mm</td><td>"+""+"<input type='text' style=width:30px;height:19px; name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' onkeyup='min_order_change("+locals[1]+")'/>G<div id=minerror_"+locals[1]+" style=display:none;></div></td><td><div id=price_"+locals[1]+">￥"+price_m+"</div><input type='hidden' name='materials["+row_number+"][price]' id=price"+locals[1]+"  value='"+price_m+"' /></td> <td><div id=shougongfei_"+locals[1]+">￥"+shougongfei+"</div><input type='hidden' name='materials["+row_number+"][shougongfei]' id=shougongfei"+locals[1]+"  value='"+shougongfei+"' /></td><td><div id=bk_"+locals[1]+">￥"+ff+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+ff+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px;  name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' onkeyup='quote_coefficient_change("+locals[1]+")' /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></td><td><div id=bj_"+locals[1]+">$"+yy+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+yy+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";
												$("#mp_table_add").append(table_value); 
												}
											}else{
												var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+" value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px; name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' onkeyup='min_order_change("+locals[1]+")' />M<div id=minerror_"+locals[1]+" style=display:none;></div></td><td><div id=price_"+locals[1]+">￥"+price_m+"</div><input type='hidden' name='materials["+row_number+"][price]' id=price"+locals[1]+"  value='"+price_m+"' /></td> <td><div id=shougongfei_"+locals[1]+">￥"+shougongfei+"</div><input type='hidden' name='materials["+row_number+"][shougongfei]' id=shougongfei"+locals[1]+"  value='"+shougongfei+"' /></td><td><div id=bk_"+locals[1]+">￥"+hh+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+hh+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px;  name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' onkeyup='quote_coefficient_change("+locals[1]+")' /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></td><td><div id=bj_"+locals[1]+">$"+kk+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+kk+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";
												$("#mp_table_add").append(table_value); //为table追加一个tr(下拉项)
											}
												
										}
										if(contact=="€欧元"){
												 ll=ff*bb;
												 yy=(ll/7).toFixed(2);
												 qq=hh*bb;
												 kk=(qq/7).toFixed(2);
												 if(size!="" ){
													  if(ee!=""){
														  var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+"  value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px; name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' onkeyup='min_order_change("+locals[1]+")' />G<div id=minerror_"+locals[1]+" style=display:none;></div></td><td><div id=price_"+locals[1]+">￥"+price_m+"</div><input type='hidden' name='materials["+row_number+"][price]' id=price"+locals[1]+"  value='"+price_m+"' /></td> <td><div id=shougongfei_"+locals[1]+">￥"+shougongfei+"</div><input type='hidden' name='materials["+row_number+"][shougongfei]' id=shougongfei"+locals[1]+"  value='"+shougongfei+"' /></td><td><div id=bk_"+locals[1]+">￥"+ff+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+ff+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px;  name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' onkeyup='quote_coefficient_change("+locals[1]+")'  /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></td><td><div id=bj_"+locals[1]+">€"+yy+"</div><input type='hidden' id='' name='materials["+row_number+"][material_name]' value='"+yy+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";                    $("#mp_table_add").append(table_value); //为table追加一个tr(下拉项)
													  }else{
														 var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+"  value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' />mm</td><td>"+""+"<input type='text' style=width:30px;height:19px; name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' onkeyup='min_order_change("+locals[1]+")'/>G<div id=minerror_"+locals[1]+" style=display:none;></div></td><td><div id=price_"+locals[1]+">￥"+price_m+"</div><input type='hidden' name='materials["+row_number+"][price]' id=price"+locals[1]+"  value='"+price_m+"' /></td> <td><div id=shougongfei_"+locals[1]+">￥"+shougongfei+"</div><input type='hidden' name='materials["+row_number+"][shougongfei]' id=shougongfei"+locals[1]+"  value='"+shougongfei+"' /></td><td><div id=bk_"+locals[1]+">￥"+ff+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+ff+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px;  name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' onkeyup='quote_coefficient_change("+locals[1]+")' /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></td><td><div id=bj_"+locals[1]+">€"+yy+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+yy+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";
													  $("#mp_table_add").append(table_value); 
													  }
												}else{
												var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]'id=material_name"+locals[1]+"   value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px; name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' onkeyup='min_order_change("+locals[1]+")' />M<div id=minerror_"+locals[1]+" style=display:none;></div></td><td><div id=price_"+locals[1]+">￥"+price_m+"</div><input type='hidden' name='materials["+row_number+"][price]' id=price"+locals[1]+"  value='"+price_m+"' /></td> <td><div id=shougongfei_"+locals[1]+">￥"+shougongfei+"</div><input type='hidden' name='materials["+row_number+"][shougongfei]' id=shougongfei"+locals[1]+"  value='"+shougongfei+"' /></td><td><div id=bk_"+locals[1]+">￥"+hh+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+hh+"' /></td><td>"+""+"<input type='text' style=width:30px;height:19px;  name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' onkeyup='quote_coefficient_change("+locals[1]+")' /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></td><td><div id=bj_"+locals[1]+">€"+kk+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+kk+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";
												$("#mp_table_add").append(table_value); //为table追加一个tr(下拉项)
												}
										}
							 }else{
			  
								alert("材料数据有重复,请重新录入");
							 }
						  }
					});
				 
					row_number++;
		        }else{
			        alert("请添加完整信！");
		        }
			}
		});
}); 
$("#design_pic_name").change(
	  function()
    	{var design_pic_name = $("#design_pic_name").val();
		if(design_pic_name!=""){
			$("#design_pic_name_error").css("display","none");
			
		}
		});
$("#contact").change(
	  function()
    	{ 
		var contact = $("#contact").val();
		var mid = $("#mid").val();
		
					$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_total_edit2',//通过Ajax取数据的目标页面
						type:'get',//方法，还可以是"post"
						data:{'contact':contact,'mid':mid},
						dataType:'json',//数据类型，还有其它的，详见jQuery手册
						success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						{ 
							 loc=loc.split("|");
							 locs=loc[0].split("-");
							 var op="";
							 var zongjia="";
							 for(var i = 0; i < loc[1]; i++){
								 loc_s=locs[i].split(",");
								 var min_order= $("#min_order"+loc_s[0]).val();
								 var quote_coefficient= $("#quote_coefficient"+loc_s[0]).val();
								 var chengbenjia=eval(loc_s[1]+"*"+min_order).toFixed(2);
								 var c=eval(loc_s[2]+"-"+min_order);
								 if(c>0){
									 chengbenjia=eval(chengbenjia+"+"+1);
								 }
								 if(contact=="￥人民币"){
									 var a='￥';
								   baojia=eval(chengbenjia+"*"+quote_coefficient).toFixed(2);
								   
								 }else if(contact=="美元"){
								   baojia=eval(chengbenjia+"*"+quote_coefficient+"/"+6).toFixed(2);
									var a='$';
								 }else if(contact=="€欧元"){
								   baojia=eval(chengbenjia+"*"+quote_coefficient+"/"+7).toFixed(2);
									var a='€';
								 }
								 $("#bj_"+loc_s[0]).html(a+baojia);
								 op+=chengbenjia+"+";
								 zongjia+=baojia+"+";
							 }
							 op=op.substring(0,op.length-1);
							 op=eval(op).toFixed(2);
							 
							 zongjia=zongjia.substring(0,zongjia.length-1);
							 zongjia=eval(zongjia).toFixed(2);
							 $("#Whole_cost_price").val("￥"+op);
							 $("#Final_quote").val(a+zongjia);
						}
			        });
		});

	 var x = $("#material_size");
    x.change(
    	function()
    	{
			
			
    		//获取id为select的下拉框选中的值
    	    var a = $("#material_color").val();
    	    var b = $("#material_name").val();
			
			
    	    $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_min_order',//通过Ajax取数据的目标页面
				data:{"material_name":b,"material_color":a},
				type:'get',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					//alert(locals);
					$("#min_order").val(locals);
				}
			});
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_quote_coefficient',//通过Ajax取数据的目标页面
				data:{"material_name":b,"material_color":a},
				type:'get',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(k,locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					$("#quote_coefficient").val(locals);
				}
			});
    	}
    );
});
function getDel(k,row){
		var Whole_cost_price	=	$("#Whole_cost_price").val();//成本价
		var Final_quote		    =	$("#Final_quote").val();//最终报价
	    var material_name = $("#material_name").val();
	    var color = $("#material_color").val();
		var size = $("#material_size").val();
		var contact = $("#contact").val();
		var mid = $("#mid").val();
	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/delete_design_material_edit',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'id':row,'material_name':material_name,'material_color':color,'material_size':size,'contact':contact,'mid':mid},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(loc )//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				//loc=loc.split("|");
			    //locs=loc[0].split("-");
				//var op="";
//				var zongjia="";
				//for(var i = 0; i < loc[1]; i++){
				loc_s=loc.split(",");
				var min_order= $("#min_order"+loc_s[0]).val();//数量
				var quote_coefficient= $("#quote_coefficient"+loc_s[0]).val();//报价系数
				var chengbenjia=eval(loc_s[1]+"*"+min_order).toFixed(2);//被删除的成本价
				 
				 //var c=eval(loc_s[2]+"-"+min_order);
				// if(c>0){
//						 chengbenjia=eval(chengbenjia+"+"+1);
//					 }
				baojia=eval(chengbenjia+"*"+quote_coefficient);
//				op+=chengbenjia+"+";
//				zongjia+=baojia+"+";
				//}
				//op=op.substring(0,op.length-1);
//				op=eval(op);
//				zongjia=zongjia.substring(0,zongjia.length-1);
//				zongjia=eval(zongjia);
				Whole_cost_price = Whole_cost_price.substring(1);
				Final_quote=Final_quote.substring(1);
				Whole_cost_price	=	eval(Whole_cost_price+'-'+chengbenjia).toFixed(2);
				

				if(contact=="￥人民币"){
					Final_quote	=	eval(Final_quote+'-'+baojia).toFixed(2);
					 $("#Whole_cost_price").val("￥"+Whole_cost_price);
					 $("#Final_quote").val("￥"+Final_quote);
				}else if(contact=="美元"){
					Final_quote	=	eval(Final_quote+'*'+6+'-'+baojia).toFixed(2);
					 $("#Whole_cost_price").val("￥"+Whole_cost_price);
					 Final_quote=eval(Final_quote+"/"+'6').toFixed(2);
					 $("#Final_quote").val("$"+Final_quote);
				}else if(contact=="€欧元"){
					Final_quote	=	eval(Final_quote+'*'+8+'-'+baojia).toFixed(2);
					 $("#Whole_cost_price").val("￥"+Whole_cost_price);
					 Final_quote=eval(Final_quote+"/"+'8').toFixed(2);
					 $("#Final_quote").val("€"+Final_quote);
				}
					
			 	$(k).parent().remove();  
			}
	});
     
}	
</script> 
<!-- {/literal} -->