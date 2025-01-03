<?php /* Smarty version 2.6.22, created on 2015-02-06 11:29:06
         compiled from create_quotation_invoice/edit_material.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <div class="stkInfEnter" style="width:106%;overflow:scroll; overflow-x:hidden; height:500px; margin-left:-100px;">
   
 <div class="sIE_title" style="margin-left:-60px;">材料报价表</div>
    <form method="post" style="float:left;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form_edit">
    <div class="sIEK" style="width: 80%;">
     <div class="sIE_l" style="width:200px; margin-left:150px; margin-top:25px;">
        <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">业务员:</div>
            <input type="text" class="" style="width:100px;height:19px;" id="Saleman_name" name="Saleman_name" value="<?php echo $this->_tpl_vars['quotation_sheet']['saleman_name']; ?>
" readonly/>
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
" class="sIE_No" onkeyup="customer_num_code();"readonly />
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
"readonly />
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
         </div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">最终报价:</div>
          <input type="text" style="width:100px;height:19px;"  id="Final_quote" name="Final_quote"  value="<?php echo $this->_tpl_vars['quotation_sheet']['final_quote']; ?>
" class=""  readonly/>
         </div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">货币:</div>
        
                  <input type="text"style="width:60px;height:19px;" id="contact" name="contact"  value="<?php echo $this->_tpl_vars['quotation_sheet']['exchange_rate_id']; ?>
" class=""  readonly/>
                 

                
         </div>
      </div>
     
       </form>
   
      <div class="sIE_l_02" style="width:100%; margin-left:100px;">
      <table cellspacing="0" class="sIE_l_02Tab" id="mp_table_add">
        <tr>
          <th>名称</th>
          <th>颜色</th>
          <th>尺寸</th>
          <th>数量</th>
          <th>报价系数</th>
          <th>成本价</th>
          <th>报价</th>
         
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
" style="width:100px;height:19px;"  onkeyup="min_order_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)" readonly />G <div id="minorder_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div> <input type="hidden" id="min_order_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order_start']; ?>
" /></td>
                                <?php else: ?>
                                 <td><input type="text" id="min_order<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="1" style="width:100px;height:19px;"  onkeyup="min_order_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)" readonly />G <div id="minorder_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div> <input type="hidden" id="min_order_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order_start']; ?>
" /></td>
                                <?php endif; ?>
                                  <?php else: ?>
                                   <?php if ($this->_tpl_vars['qf']['min_order'] != ""): ?>
                                  <td><input type="text" id="min_order<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order']; ?>
" style="width:100px;height:19px;"  onkeyup='min_order_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)'readonly />M<div id="minorder_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div><input type="hidden" id="min_order_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order_start']; ?>
" /></td>
                                  <?php else: ?>
                                  <td><input type="text" id="min_order<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="1" style="width:100px;height:19px;"  onkeyup='min_order_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)'readonly />M<div id="minorder_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div><input type="hidden" id="min_order_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order_start']; ?>
" /></td>
                                  <?php endif; ?>
                                    <?php endif; ?>
                                  <?php if ($this->_tpl_vars['qf']['quote_coefficient'] != ""): ?>   
                                 <td><input type="text" id="quote_coefficient<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['quote_coefficient']; ?>
"  style="width:100px;height:19px;"onkeyup="quote_coefficient_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)" readonly /><div id="quote_coefficient_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div> <input type="hidden" id="quote_coefficient_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['quote_coefficient_start']; ?>
" /></td>
                                 <?php else: ?>
                                 <td><input type="text" id="quote_coefficient<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="1"  style="width:100px;height:19px;"onkeyup="quote_coefficient_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)" readonly /><div id="quote_coefficient_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div> <input type="hidden" id="quote_coefficient_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['quote_coefficient_start']; ?>
" /></td>
                                 <?php endif; ?>
                                 <td><div id="chengbenjia<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['chengbenjia']; ?>
</div><input type="hidden" id="chengbenjia<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="" /></td>
                                 <td><div id="baojia<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['baojia']; ?>
</div><input type="hidden" id="baojia<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="" /></td>
                                 
                              </tr>
                              
                           <?php endforeach; endif; unset($_from); ?>  
                           <?php endif; ?>
      </table>
    </div>
    </div>
   </div>
   <!--<div id="minorder_error" style="float:left; width:500px; margin-top:-325px; margin-left:420px;color:#F00; display:none; font-size:12px;">数量为正整数</div>
   <div id="quote_coefficient_error" style="float:left; width:500px; margin-top:-325px; margin-left:650px;color:#F00; display:none; font-size:12px;">报价系数为正整数</div>
    <div id="minorder_error_start" style="float:left; width:500px; margin-top:-325px; margin-left:420px;;color:#F00; display:none; font-size:12px;">数量,报价系数均低于初始值</div>-->
   
  
   <div class="formBar"> 
       <!-- <div class="button" style="margin-left:92%; margin-right:5px;">
    		<div class="buttonContent">
       			 <button type="button" id="submit_edit" >确定</button>
    		</div>
  		</div>-->
  		<div class="button" style="margin-left:96%; margin-right:5px; margin-top:15px;">
    		<div class="buttonContent">
       			<button class="close">取消</button>
    		</div>
  		</div>
	</div>
    
    
    
<script type="text/javascript">
/*function customer_num_code(){
	                   
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
					 $("#minerror_"+key).css("display","none");
	    	min_order=min_order-0;
			locals[2]=locals[2]-0;
			if(min_order<locals[2]){
				
				$("#minerror_"+key).css("display","block");
		        $("#minerror_"+key).html("数量小于初始值！");	
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
					if(contact=="￥人民币"){
						$("#Whole_cost_price").val("￥"+loc[0]);
					    $("#Final_quote").val("￥"+loc[1]);
						}else if(contact=="$美元"){
						  $("#Whole_cost_price").val("￥"+loc[0]);
					      $("#Final_quote").val("$"+loc[1]);
						}else if(contact=="€欧元"){
							$("#Whole_cost_price").val("￥"+loc[0]);
					        $("#Final_quote").val("€"+loc[1]);
						}
					
			   }
			});
						
						$("#bk_"+key).html("￥"+locals[0]);
						if(contact=="￥人民币"){
						$("#bj_"+key).html("￥"+locals[1]);
						}else if(contact=="$美元"){
						$("#bj_"+key).html("$"+locals[1]);
						}else if(contact=="€欧元"){
						$("#bj_"+key).html("€"+locals[1]);
						}
					}											
				}								
				
			});
		}else{
			$("#minerror_"+key).css("display","block");
		        $("#minerror_"+key).html("起订量为正整数！");	
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
			if(min_order<locals[2]){
				
				$("#minorder_error"+key).css("display","block");
		        $("#minorder_error"+key).html("数量小于初始值！");	
			}
				
					if(locals){
				      $.ajax({
			    url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_total_edit',//通过Ajax取数据的目标页面
			    type:'get',//方法，还可以是"post"
		        data:{'contact':contact,'mid':mid},
			    dataType:'json',//数据类型，还有其它的，详见jQuery手册
			    success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			    {
					loc=loc.split("|");
					if(contact=="￥人民币"){
						$("#Whole_cost_price").val("￥"+loc[0]);
					    $("#Final_quote").val("￥"+loc[1]);
						}else if(contact=="美元"){
						  $("#Whole_cost_price").val("￥"+loc[0]);
					      $("#Final_quote").val("$"+loc[1]);
						}else if(contact=="€欧元"){
							$("#Whole_cost_price").val("￥"+loc[0]);
					        $("#Final_quote").val("€"+loc[1]);
						}
					
			   }
			});       
		             	var aa=locals[0];
		             	var bb=locals[1];
						$("#chengbenjia"+key).html("￥"+aa);
						if(contact=="￥人民币"){
						$("#baojia"+key).html("￥"+bb);
						}else if(contact=="美元"){
						$("#baojia"+key).html("$"+(bb/6).toFixed(2));
						}else if(contact=="€欧元"){
						$("#baojia"+key).html("€"+(bb/7).toFixed(2));
						}
					}											
				}								
				
			});
			}else{
				
			$("#minorder_error"+key).css("display","block");
		    $("#minorder_error"+key).html("起订量为正整数！");	
		}
		});
};
function quote_coefficient_change(key){
	   $(document).ready(function(){
		var contact = $("#contact").val();
		 var quote_coefficient=$("#quote_coefficient"+key).val();
	    var mid = $("#mid").val();
		var c= /^\+?[1-9][0-9]*$/;
		var b=c.test(quote_coefficient);
		if(b==true){
		   $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/quote_coefficient_change',//通过Ajax取数据的目标页面
				data:{"key":key,"material_name":$("#material_name"+key).val(),"material_color":$("#material_color"+key).val(),"material_size":$("#material_size"+key).val(),"min_order":$("#min_order"+key).val(),"quote_coefficient":$("#quote_coefficient"+key).val()},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{ locals=locals.split("|");
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
					if(contact=="￥人民币"){
						$("#Whole_cost_price").val("￥"+loc[0]);
					    $("#Final_quote").val("￥"+loc[1]);
						}else if(contact=="$美元"){
						  $("#Whole_cost_price").val("￥"+loc[0]);
					      $("#Final_quote").val("$"+loc[1]);
						}else if(contact=="€欧元"){
							$("#Whole_cost_price").val("￥"+loc[0]);
					        $("#Final_quote").val("€"+loc[1]);
						}
			 }
			});
						if(contact=="￥人民币"){
						$("#bj_"+key).html("￥"+locals[0]);
						}else if(contact=="$美元"){
						$("#bj_"+key).html("$"+(locals[0]/6).toFixed(2));
						}else if(contact=="€欧元"){
							$("#bj_"+key).html("€"+(locals[0]/7).toFixed(2));
						}
					}											
				}								
				
			});
				}else{
			$("#quote_coefficienterror_"+key).css("display","block");
		    $("#quote_coefficienterror_"+key).html("报价系数为正整数！");	
		}
		})
};

function quote_coefficient_change_edit(key){
	
	   $(document).ready(function(){
		var contact = $("#contact").val();
		var mid = $("#mid").val();
		var quote_coefficient=$("#quote_coefficient"+key).val();
	
		var c= /^\+?[1-9][0-9]*$/;
		var b=c.test(quote_coefficient);
		if(b==true){
			$("#quote_coefficient_error"+key).css("display","none");
			
		   $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/quote_coefficient_change_edit',//通过Ajax取数据的目标页面
				data:{"id":key,"quote_coefficient": $("#quote_coefficient"+key).val()},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{ locals=locals.split("|");
			 quote_coefficient=quote_coefficient-0;
			locals[1]=locals[1]-0;
			if(quote_coefficient<locals[1]){
				
				$("#quote_coefficient_error"+key).css("display","block");
		        $("#quote_coefficient_error"+key).html("数量小于初始值！");
			}
					if(locals){
						$.ajax({
			    url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_total_edit',//通过Ajax取数据的目标页面
			    type:'get',//方法，还可以是"post"
		        data:{'contact':contact,'mid':mid},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
					loc=loc.split("|");
					if(contact=="￥人民币"){
						$("#Whole_cost_price").val("￥"+loc[0]);
					    $("#Final_quote").val("￥"+loc[1]);
						}else if(contact=="$美元"){
						  $("#Whole_cost_price").val("￥"+loc[0]);
					      $("#Final_quote").val("$"+loc[1]);
						}else if(contact=="€欧元"){
							$("#Whole_cost_price").val("￥"+loc[0]);
					        $("#Final_quote").val("€"+loc[1]);
						}
			 }
			});
						if(contact=="￥人民币"){
							$("#baojia"+key).html("￥"+locals[0]);
						}else if(contact=="$美元"){
						$("#baojia"+key).html("$"+(locals[0]/6).toFixed(2));
						}else if(contact=="€欧元"){
						$("#baojia"+key).html("€"+(locals[0]/7).toFixed(2));
						}
					}											
				}								
				
			});
			}else{
			$("#quote_coefficient_error"+key).css("display","block");
		    $("#quote_coefficient_error"+key).html("报价系为正整数值！");
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
				{  if(locals==0){
					 $("#info_form_edit").submit();
					}else{
						alert("数量和报价系数不可以均低于初始值！");
					}
				}});
		
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
				
				var aa = locals.min_order;
				var bb = locals.quote_coefficient;
				if(aa==null ||aa==0){
					aa=1;
				}
				if(bb==null || bb==0){
					bb=1;
				}
				var cc = locals.price;
				var ee =locals.size;
				gg=cc*aa;
				ff=(gg*144).toFixed(2);
				hh=(gg*1000).toFixed(2);
				
	        if($("#material_name").val()!="" && $("#material_color").val()!=""){
	        $.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/insert_table_design_material_edit',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'contact':contact,'mid':mid},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{ 
			
			locals=locals.split("|");
			if(locals[0]==0 && size==""){
				alert("请添加完整信！");
			}else
		    if(locals[1]!= 0 ){
			$.ajax({
			    url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_total_edit2',//通过Ajax取数据的目标页面
			    type:'get',//方法，还可以是"post"
		        data:{'contact':contact,'mid':mid},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{  
					loc=loc.split("|");
					if(contact=="￥人民币"){
						$("#Whole_cost_price").val("￥"+loc[0]);
					    $("#Final_quote").val("￥"+loc[1]);
						}else if(contact=="美元"){
						  $("#Whole_cost_price").val("￥"+loc[0]);
					      $("#Final_quote").val("$"+loc[1]);
						}else if(contact=="€欧元"){
							$("#Whole_cost_price").val("￥"+loc[0]);
					        $("#Final_quote").val("€"+loc[1]);
						}
					
			 }
			});
				
			  if(contact=="￥人民币"){
				
				ll=gg*144*bb;
				yy=ll.toFixed(2);
				qq=gg*1000*bb;
				kk=qq.toFixed(2);
				if(size!="" ){
				  if(ee!=""){
				   var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+"  value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+"  value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' /></td><td>"+""+"<input type='text' name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+"  value='"+aa+"' style=width:100px;height:19px; onkeyup='min_order_change("+locals[1]+")' />G<div id=minerror_"+locals[1]+" style=display:none;></div></td><td>"+""+"<input type='text' name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' style=width:100px;height:19px; onkeyup='quote_coefficient_change("+locals[1]+")'  /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></div></td><td><div id=bk_"+locals[1]+">￥"+ff+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+ff+"' /></td><td><div id=bj_"+locals[1]+">￥"+yy+"</div><input type='hidden' id='' name='materials["+row_number+"][material_name]' value='"+yy+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";                    $("#mp_table_add").append(table_value); //为table追加一个tr(下拉项)
					}else{
					var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+" value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]'  id=material_size"+locals[1]+" value='"+size+"' />mm</td><td>"+""+"<input type='text' name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' style=width:100px;height:19px; onkeyup='min_order_change("+locals[1]+")'/>G<div id=minerror_"+locals[1]+" style=display:none;></div></td><td>"+""+"<input type='text' name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' style=width:100px;height:19px; onkeyup='quote_coefficient_change("+locals[1]+")' /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></div></td><td><div id=bk_"+locals[1]+">￥"+ff+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+ff+"' /></td><td><div id=bj_"+locals[1]+">￥"+yy+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+yy+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";
				    $("#mp_table_add").append(table_value); 
					}
				}else{
					var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+"  value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' /></td><td>"+""+"<input type='text' name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' style=width:100px;height:19px; onkeyup='min_order_change("+locals[1]+")' />M<div id=minerror_"+locals[1]+" style=display:none;></div></td><td>"+""+"<input type='text' name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' style=width:100px;height:19px; onkeyup='quote_coefficient_change("+locals[1]+")' /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></div></td><td><div id=bk_"+locals[1]+">￥"+hh+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+hh+"' /></td><td><div id=bj_"+locals[1]+">￥"+kk+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+kk+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";
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
				   var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+" value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' /></td><td>"+""+"<input type='text' name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' style=width:100px;height:19px; onkeyup='min_order_change("+locals[1]+")' />G<div id=minerror_"+locals[1]+" style=display:none;></div></td><td>"+""+"<input type='text' name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' style=width:100px;height:19px; onkeyup='quote_coefficient_change("+locals[1]+")'  /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></div></td><td><div id=bk_"+locals[1]+">￥"+ff+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+ff+"' /></td><td><div id=bj_"+locals[1]+">$"+yy+"</div><input type='hidden' id='' name='materials["+row_number+"][material_name]' value='"+yy+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";                    $("#mp_table_add").append(table_value); //为table追加一个tr(下拉项)
					}else{
					var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+" value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' />mm</td><td>"+""+"<input type='text' name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"'style=width:100px;height:19px;  onkeyup='min_order_change("+locals[1]+")'/>G<div id=minerror_"+locals[1]+" style=display:none;></div></td><td>"+""+"<input type='text' name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' style=width:100px;height:19px; onkeyup='quote_coefficient_change("+locals[1]+")' /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></div></td><td><div id=bk_"+locals[1]+">￥"+ff+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+ff+"' /></td><td><div id=bj_"+locals[1]+">$"+yy+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+yy+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";
				    $("#mp_table_add").append(table_value); 
					}
				}else{
					var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+" value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' /></td><td>"+""+"<input type='text' name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' style=width:100px;height:19px; onkeyup='min_order_change("+locals[1]+")' />M<div id=minerror_"+locals[1]+" style=display:none;></div></td><td>"+""+"<input type='text' name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' style=width:100px;height:19px; onkeyup='quote_coefficient_change("+locals[1]+")' /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></div></td><td><div id=bk_"+locals[1]+">￥"+hh+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+hh+"' /></td><td><div id=bj_"+locals[1]+">$"+kk+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+kk+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";
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
				   var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+"  value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' /></td><td>"+""+"<input type='text' name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' style=width:100px;height:19px; onkeyup='min_order_change("+locals[1]+")' />G<div id=minerror_"+locals[1]+" style=display:none;></div></td><td>"+""+"<input type='text' name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' style=width:100px;height:19px; onkeyup='quote_coefficient_change("+locals[1]+")'  /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></div></td><td><div id=bk_"+locals[1]+">￥"+ff+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+ff+"' /></td><td><div id=bj_"+locals[1]+">€"+yy+"</div><input type='hidden' id='' name='materials["+row_number+"][material_name]' value='"+yy+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";                    $("#mp_table_add").append(table_value); //为table追加一个tr(下拉项)
					}else{
					var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]' id=material_name"+locals[1]+"  value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' />mm</td><td>"+""+"<input type='text' name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' style=width:100px;height:19px; onkeyup='min_order_change("+locals[1]+")'/>G<div id=minerror_"+locals[1]+" style=display:none;></div></td><td>"+""+"<input type='text' name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' style=width:100px;height:19px; onkeyup='quote_coefficient_change("+locals[1]+")' /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></div></td><td><div id=bk_"+locals[1]+">￥"+ff+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+ff+"' /></td><td><div id=bj_"+locals[1]+">€"+yy+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+yy+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";
				    $("#mp_table_add").append(table_value); 
					}
				}else{
					var table_value = "<tr class='mp_tabClass01'> <td>"+material_name+"<input type='hidden' name='materials["+row_number+"][material_name]'id=material_name"+locals[1]+"   value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' id=material_color"+locals[1]+" value='"+color+"' /></td><td>"+size+"<input type='hidden' name='materials["+row_number+"][quantity]' id=material_size"+locals[1]+" value='"+size+"' /></td><td>"+""+"<input type='text' name='materials["+row_number+"][min_order]' id=min_order"+locals[1]+" value='"+aa+"' style=width:100px;height:19px; onkeyup='min_order_change("+locals[1]+")' />M<div id=minerror_"+locals[1]+" style=display:none;></div></td><td>"+""+"<input type='text' name='quote_coefficient' id=quote_coefficient"+locals[1]+" value='"+bb+"' style=width:100px;height:19px; onkeyup='quote_coefficient_change("+locals[1]+")' /><div id=quote_coefficienterror_"+locals[1]+" style=display:none;></div></td><td><div id=bk_"+locals[1]+">￥"+hh+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+hh+"' /></td><td><div id=bj_"+locals[1]+">€"+kk+"</div><input type='hidden' name='materials["+row_number+"][material_name]' value='"+kk+"' /></td><td onClick='getDel(this,"+locals[1]+")'><a href='#'>删除</a></td></tr>";
				    $("#mp_table_add").append(table_value); //为table追加一个tr(下拉项)
				}
				}
			}
				else{

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
/rhinestone_quotation/contact_change_edit',//通过Ajax取数据的目标页面
				data:{"contact":contact,'mid':mid},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					locals=locals.split(",");
					loc1=locals[0].split("+");//提取每条的ID
					loc2=locals[1]//条数
					loc3=locals[2]//得到的报价数
					loc4=loc3.split("|");
					for(var i=0;i<=loc2;i++){
						if(contact=="￥人民币"){
						$("#baojia"+loc1[i]).html("￥"+loc4[i]);
						}else if(contact=="美元"){
						$("#baojia"+loc1[i]).html("$"+loc4[i]);
						}else if(contact=="€欧元"){
						$("#baojia"+loc1[i]).html("€"+loc4[i]);
						}
						
					}
					
				}
		});
		$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/contact_change',//通过Ajax取数据的目标页面
				data:{"contact":contact},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					$.ajax({
			    url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/get_total_edit2',//通过Ajax取数据的目标页面
			    type:'get',//方法，还可以是"post"
		        data:{'contact':contact,'mid':mid},
		    	dataType:'json',//数据类型，还有其它的，详见jQuery手册
		    	success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		    	{ 
					loc=loc.split("|");
					if(contact=="￥人民币"){
						$("#Whole_cost_price").val("￥"+loc[0]);
					    $("#Final_quote").val("￥"+loc[1]);
						}else if(contact=="美元"){
						  $("#Whole_cost_price").val("￥"+loc[0]);
					      $("#Final_quote").val("$"+loc[1]);
						}else if(contact=="€欧元"){
							$("#Whole_cost_price").val("￥"+loc[0]);
					        $("#Final_quote").val("€"+loc[1]);
						}
					
					
			   }
			});
			
				locals=locals.split("|");
				locals_1=locals[0].split(",")//拆分每条的ID
				locals_2=locals[1].split(",")//得出报价
				var len=locals_2.length;
				for(var i=0;i<=len;i++){
					
						if(contact=="￥人民币"){
						 $("#bj_"+locals_1[i]).html("￥"+locals_2[i]);
						}else if(contact=="美元"){
							$("#bj_"+locals_1[i]).html("$"+locals_2[i]);
						}else if(contact=="€欧元"){
							$("#bj_"+locals_1[i]).html("€"+locals_2[i]);
						}
				
				}

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
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				
				locals=locals.split("|");
					if(contact=="￥人民币"){
						$("#Whole_cost_price").val("￥"+locals[0]);
					    $("#Final_quote").val("￥"+locals[1]);
						}else if(contact=="美元"){
						  $("#Whole_cost_price").val("￥"+locals[0]);
					      $("#Final_quote").val("$"+locals[1]);
						}else if(contact=="€欧元"){
							$("#Whole_cost_price").val("￥"+locals[0]);
					        $("#Final_quote").val("€"+locals[1]);
						}
					
					
			 
			}
	});
     $(k).parent().remove();  
}	*/
</script> 
<!-- {/literal} -->