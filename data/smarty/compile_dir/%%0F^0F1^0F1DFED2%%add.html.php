<?php /* Smarty version 2.6.22, created on 2023-06-26 15:08:57
         compiled from cdr_quotation/add.html */ ?>
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
             <div class="sIE_title" style="width:15%;"><div class="button"><div class="buttonContent"><button onclick="document.getElementById('ttbjd_wsj_hot_1').style.display='block';document.getElementById('ttbjd_ysj_hot_1').style.display='none';">CDR报价单(无设计)</button></div></div></div>
          <?php endif; ?> 
    	  <div class="sIE_title" style="width:60%;">CDR报价单</div>
        </div>
          
      <form method="post" action="<?php if ($this->_tpl_vars['id']): ?> <?php echo $this->_tpl_vars['update_cdr_action']; ?>
<?php else: ?><?php echo $this->_tpl_vars['cdr_action']; ?>
<?php endif; ?>" id="cdr_quotation_submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
      <input type="hidden" name="tapedata_formula" id="tapedata_formula" />
      <input type="hidden" name="meiyuan_version" id="meiyuan_version" value="<?php echo $this->_tpl_vars['meiyuan_version']; ?>
" />
      <input type="hidden" name="ouyuan_version" id="ouyuan_version" value="<?php echo $this->_tpl_vars['ouyuan_version']; ?>
" />
      <input type="hidden" name="renmin_version" id="renmin_version" value="<?php echo $this->_tpl_vars['renmin_version']; ?>
" />
      <input type="hidden" name="final_quotation_hidden" id="final_quotation_hidden" value="0" />
    	  	<div class="sIEK" style="width:97%;">
              <div class="sIE_l" style="width:400px;">
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">业务员:</div>
                    <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['user_name']; ?>
"  readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">时间:</div>
                    <input type="text" value="<?php echo $this->_tpl_vars['quotation_date']; ?>
" style="width:100px;" name="time" class="sIE_No"  readonly="readonly" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户代码:</div>
                    <input type="text" name="customer_code" id="customer_code" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" class="sIE_No" onkeyup="customer_code_num_add();" />
                </div>  
            
                 <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title" style="width:80px;">报价类型:</div>
                    <select class="picture_select01" name="quotation_category_id" id="picture_select01_cdr" style="width:106px; height:26px;" onchange="design_code_cdr()">
                      <option value="">请选择</option>
                      <?php $_from = $this->_tpl_vars['quotation']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <?php if ($this->_tpl_vars['quotation_category_id'] == $this->_tpl_vars['qf']['id']): ?>
                      <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['quotation_name']; ?>
</option>
                      <?php else: ?>
                      <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['quotation_name']; ?>
</option>
                      <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
                    </select>
                  
                </div> 
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户名:</div>
                    <input type="text" name="customer_name" style="width:100px;" id="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" class="sIE_No"  readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">报价名称:</div>
                  <input type="text" name="design_pic_name" id="design_pic_name" style="width:100px;" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" class="sIE_No"  onkeyup="stock();"/>
                </div>
                 <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">公司:</div>
                  <input type="text" name="customer_company" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" class="sIE_No" id="customer_company"  readonly="readonly" />
                </div>
                 <div class="sIE_l_01" style="width:200px;">
                      <div class="sIE_l_01_title" style="width:80px;">设计编号:</div>
                     
                      <input type="text" name="quotation_code" id="picture_select02"class="sIE_No"   value="" style="display:block; width:100px;" onkeyup="quotation_code_num_cdr()"/>
          
                      <input type="text" name="stock_number_cdr" class="sIE_No" id="picture_text01_cdr" readonly="readonly" value="<?php echo $this->_tpl_vars['no_stock_number']; ?>
" style="display:none; width:100px;" />
                      
               </div>
               
                <div class="sIE_l_01" style="width:200px; height:26px;">
                  <div class="sIE_l_01_title">货币:</div>
                    <select class="combox" name="exchange_rate_id" id="exchange_rate_id">
                
                <option value="1" >人民币</option>
                <option value="2" >美元</option>
                <option value="3" >欧元</option>
                </select>
                </div>
                 <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">报价:</div>
                    <input type="text" name="final_quote" style="width:100px;" value="100" class="sIE_No" id="final_quote" onkeyup="version_a();"/>
                </div> 
                <!--<div class="sIE_l_01" style="width:300px;">
                  <div class="sIE_l_01_title" style=" margin-left:-90px;">报价:</div>
                    <input class="sIE_No digits" id="final_quote" onkeyup="version_a()" style="width:100px;  margin-left:80px;  type="text" name="final_quote" value="100">
                 </div>-->
                
                <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title" style="width:80px; line-height:26px;">报关品类:</div>
                    <select class="picture_select01" name="order_category" id="order_category" style="width:106px; height:26px;">
                      <option value="">请选择</option>
                      <?php $_from = $this->_tpl_vars['order_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc']):
?> <?php if ($this->_tpl_vars['order_category_id'] == $this->_tpl_vars['oc']['id']): ?>
                      <option selected="selected" value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['name']; ?>
</option>
                      <?php else: ?>
                      <option value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['name']; ?>
</option>
                      <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
                    </select>
                  </div>
                
                
                <div id="cdr_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
                
              </div>
              <div class="sIE_r" style="width:630px; height:auto;">
              	<div class="sIE_l_01" style="margin-top:0px; width:210px; ">
                  <div class="sIE_l_01_title" style="width:50px; height:100px; ">尺寸:</div>
                  <div class="sIE_r01" style="float:left; width:160px;">
                    <div class="sIE_r01_div">
                        <input type="text" id="inch_w" style="width:80px;" value="<?php echo $this->_tpl_vars['content_inch_w']; ?>
" disabled="disabled" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">inch W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="inch_h" style="width:80px;" value="<?php echo $this->_tpl_vars['content_inch_h']; ?>
" disabled="disabled" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">inch H</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="cm_w" style="width:80px;" value="<?php echo $this->_tpl_vars['content_cm_w']; ?>
" disabled="disabled" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="cm_h" style="width:80px;" value="<?php echo $this->_tpl_vars['content_cm_h']; ?>
" disabled="disabled" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">cm H</div>
                    </div>
                    
                  </div>
                  	<?php if ($this->_tpl_vars['quotation_category_id'] != 5): ?>
                    <div   id="sheji" >
                    <div class="sIE_l_01_title" style="width:50px; height:100px; display:block;">设计师:</div>
                    <div class="sIE_r01" style="float:left; width:160px;">
                    <div class="sIE_r01_div">
                    	<input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['design_user_name']; ?>
" readonly="readonly" style="width:80px;" id="shejishi"/>
                    </div>
                    </div>
                    </div>
                    <?php endif; ?>
                </div>
                
               
                <div class="sIE_r" style="height:210px; width:210px; margin-top:0px;">
                <div class="sIE_r_img" id="image_cdr" style="width:210px; height:210px;"><img src="" style="height:210px; width:210px;" /></div>
                <input type="hidden" name="image" id="image_hidden" />
               <!-- <div class="sIE_r_img" id="cdr_add" style="height:36px; width:211px;  margin-left:20px; margin-top:20px; ">
               <a href=""><font color="blue" size="7"></font></a>
              </div>-->
       
              </div>
              
              </div>
    	  	</div>
             
              </form>
              <div class="sIE_l_02">
              <div class="button" style="margin-top:-50px;" >
                  <div class="buttonContent" >          
                      <button type="button" id="cdr_submit">确定</button>
                   </div>
                   </div>
              <div class="button" style="margin-left:4%;margin-top:-50px;"><div class="buttonContent"><button class="close">取消</button></div></div>
             </div>
             </div>
<script type="text/javascript" language="javascript">
	function customer_code_num_add(){
						var name = $("#customer_code").val();
						
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/add_customer',//通过Ajax取数据的目标页面
							data:{"name":name},
							type:'post',//方法，还可以是"post"
							dataType:'json',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								if(locals){
									$("#customer_name").val(locals.customer_name);
									$("#customer_company").val(locals.company);
									
								}else{
									$("#customer_name").val('');
									$("#customer_company").val('');									
								}
							}								
							
						});
					}	
		function quotation_code_num_cdr(){

					  
					   var type = $("#picture_select01_cdr").val();
					   if(type=="3"){
						   var id = $("#picture_select02").val();
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/add_design_code',//通过Ajax取数据的目标页面
							data:{"id":id},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								if(locals!=1){
									locals=locals.split("|");
									
									if(locals[1]!=""){
										$("#inch_w").val(locals[1]);
										$("#inch_h").val(locals[2]);
										$("#cm_w").val(locals[3]);
										$("#cm_h").val(locals[4]);
										$("#shejishi").val(locals[5]);
								
										$("#image_cdr").html("<img style='height:220px; width:220px;' src = " + locals[6] + ">");
										//$("#cdr_add").html("CDR:<a style='color:#0033FF;text-align:center; ' href = " + locals[7] + ">下载查看</font></a>");
										$("#cdr").val(locals[7]);
								     }
								
							}			
					       }
					    });
					   }
		}
		function design_code_cdr(){
					    $(document).ready(function(){
					
							var customer_name=$("#customer_name").val();
							var customer_code=$("#customer_code").val();
							$('#inch_w').val("");
							$('#inch_h').val("");
							$('#cm_w').val("");
							$('#cm_h').val("");
							$("#cdr_add").html("");
							$("#image_cdr").html("");
							$("#design_pic_name").html("");
						    var id2 = $("#picture_select01_cdr").val();
							if(id2=="5"){
								$('#picture_select02').css('display','none');
								$('#picture_text01_cdr').css('display','block');
							}else{
								$('#picture_select02').val("");
								$('#picture_select02').css('display','block');
								$('#picture_text01_cdr').css('display','none');
							}
						    
					   });
				}
				
				
                 function stock(){
					 var id2 = $("#picture_select01_cdr").val();
					// var parities = $("#parities").val();
					 if(id2=='5'){
						 var stock = $("#design_pic_name").val();
						
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/add_stock',//通过Ajax取数据的目标页面
							data:{"stock":stock,},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								locals=locals.split("|");
								$("#inch_w").val(locals[0]);
								$("#inch_h").val(locals[1]);
								$("#cm_w").val(locals[2]);
								$("#cm_h").val(locals[3]);
								$('#sheji').css('display','none');
							//	$("#cdr_add").html("CDR:<a style='color:#0033FF;text-align:center; ' href = " + locals[4] + ">下载查看</font></a>");
								$("#image_cdr").html("<img style='height:220px; width:220px;' src = " + locals[4] + ">");
							
								
						       
								
								
							}								
							
						});	
					 }
						
						
					}
$(document).ready(function()  
{
	 $("#cdr_submit").click(function () {
	    var customer_code=$("#customer_code").val();
		var customer_name=$("#customer_name").val();
		var design_pic_name=$("#design_pic_name").val();
		var quotation_code=$("#quotation_code").val();
		var final_quote=$("#final_quote").val();
		if(customer_code==""){
			$("#cdr_error").css("display","block");
			$("#cdr_error").html("请填写客户代码！");
		}else if(customer_name==""){
			
			$("#cdr_error").css("display","block");
			$("#cdr_error").html("请填写客户名字！");
		}else if(design_pic_name==""){
			
			$("#cdr_error").css("display","block");
			$("#cdr_error").html("请填写名称！");
		}
		else if(quotation_code==""){
			$("#cdr_error").css("display","block");
			$("#cdr_error").html("请填写设计编码！");
		}
		else if(final_quote==""){
			$("#cdr_error").css("display","block");
			$("#cdr_error").html("请填写报价！");
		}
		else if($("#inch_w").val()== "" || $("#inch_h").val()== "" || $("#cm_w").val()== "" || $("#cm_h").val()== ""){
			$("#cdr_error").css("display","block");
			$("#cdr_error").html("尺寸不为空,请填写正确的设计编号！");
		}
		else if($("#order_category").val() == ""){
			$("#cdr_error").css("display","block");
			$("#cdr_error").html("请填写报关品类！");
		}
		else{
			
			$("#cdr_quotation_submit_form").submit();
			}
	});
	
});
$("#exchange_rate_id").change(
	  function()
    	{ 
		var exchange_rate_id = $("#exchange_rate_id").val();
		var final_quote = $("#final_quote").val();
		
		$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/contact_change',//通过Ajax取数据的目标页面
				data:{"exchange_rate_id":exchange_rate_id},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
	
					$("#final_quote").val(locals);
					
				
				}

				
			});
		});	

</script>       
        
   <?php if ($this->_tpl_vars['quotation_category'] == 5): ?>     
      <div class="stkInfEnter" style="width:98%;display:block;" layoutH="30" id="ttbjd_wsj_hot_1">
      <?php else: ?>
      <div class="stkInfEnter" style="width:98%; display:none;" layoutH="30" id="ttbjd_wsj_hot_1">
   <?php endif; ?>   
   		<div style="width:100%; float:left;">	
            <?php if (! $this->_tpl_vars['quotation_category']): ?>
             <div class="sIE_title" style="width:15%;"><div class="button"><div class="buttonContent"><button onclick="document.getElementById('ttbjd_ysj_hot_1').style.display='block';document.getElementById('ttbjd_wsj_hot_1').style.display='none';">CDR报价单</button></div></div></div>
    	  <?php endif; ?>
    	  <div class="sIE_title" style="width:60%; margin-left:-100px;">CDR报价单(无设计)</div>
        </div>  	   
      <form name="form1" method="post" action="<?php if ($this->_tpl_vars['id']): ?> <?php echo $this->_tpl_vars['update_no_cdr_action']; ?>
<?php else: ?><?php echo $this->_tpl_vars['no_cdr_action']; ?>
<?php endif; ?>" id="no_cdr_quotation_submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)"> 
          <input type="hidden" name="no_tapedata_formula" id="no_tapedata_formula" />         
            <div class="sIEK" style="width:77%; margin-left:-210px;">
              <div class="sIE_l" style="width:400px; margin-left:215px;">
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">业务员:</div>
                    <input type="text" readonly="readonly" value="<?php echo $this->_tpl_vars['user_name']; ?>
" class="sIE_No" style="width:100px;" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">时间:</div>
                    <input type="text" class="sIE_No" name="no_time" value="<?php echo $this->_tpl_vars['quotation_date']; ?>
" readonly="readonly" style="width:100px;" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户代码:</div>
                    <input type="text" class="sIE_No" name="no_customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" style="width:100px;" id="no_customer_code" onkeyup="no_customer_num_cdr();" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title">名称:</div>
					<input type="text" class="sIE_No" id="no_design_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" name="no_design_pic_name" style="width:100px;" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户名:</div>
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" name="no_customer_name" id="no_customer_name" style="width:100px;"  readonly="readonly" />
                </div>

                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">设计编号:</div>
                    <input type="text" class="sIE_No" name="no_quotation_code" id='no_quotation_code' value="<?php echo $this->_tpl_vars['no_stock_number']; ?>
" style="width:100px;" readonly="readonly"/>
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">公司:</div>
                    <input type="text" class="sIE_No" name="no_customer_company" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" id="no_customer_company" style="width:100px;"  readonly="readonly" />
                </div>
               
                
                <div class="sIE_l_01" style="width:200px; height:26px;">
                 
                  <div class="sIE_l_01_title">货币:</div>
                    <select class="combox" name="no_exchange_rate_id" id="no_exchange_rate_id">
                
                <option value="1" >人民币</option>
                <option value="2" >美元</option>
                <option value="3" >欧元</option>
                </select>
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">报价:</div>
                  <input class="sIE_No digits" id="no_final_quote" onkeyup="version_a()" style="width:100px; margin-left:-2px;"  type="text" name="no_final_quote" value="100">
                
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title" style="width:80px; line-height:26px;">报关品类:</div>
                    <select class="picture_select01" name="no_order_category" id="no_order_category" style="width:106px; height:26px;">
                      <option value="">请选择</option>
                      <?php $_from = $this->_tpl_vars['order_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc']):
?> <?php if ($this->_tpl_vars['order_category_id'] == $this->_tpl_vars['oc']['id']): ?>
                      <option selected="selected" value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['name']; ?>
</option>
                      <?php else: ?>
                      <option value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['name']; ?>
</option>
                      <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
                    </select>
                  </div>
                
                <div id="no_cdr_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div> 
               </div>
               
               <div class="sIE_l_01" style="margin-top:10px; width:210px; margin-left:-5px;">
                  <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
                  <div class="sIE_r01" style="float:left; width:160px;">
                    <div class="sIE_r01_div">
                        <input type="text" id="cdr_no_inch_w" style="width:80px;"  name="cdr_no_inch_w" value=""class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">inch W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="cdr_no_inch_h" style="width:80px;" name="cdr_no_inch_h" value=""  class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">inch H</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="cdr_no_cm_w" style="width:80px;" value="" name="cdr_no_cm_w"class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="cdr_no_cm_h" style="width:80px;" value="" name="cdr_no_cm_h" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">cm H</div>
                    </div>
                    
                  </div>
          
                </div>
                </div>
                
              	
                
     
               
                </form>

                  <div class="sIE_r" style="height:260px; width:260px; margin-top:0px; float:right;">
                    <div class="sIE_r_img" style="height:280px; width:260px; margin-left:-160px; margin-top:10px;">
                    <div style="float:left;  width:260px; height:auto;"> 
                  <iframe name="hq_yframe_hotfix_1" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/two_img_upload" style="border:none; width:260px; height:280px; "></iframe>
                             </div>
                    </div>     
              <form style="margin-left:-260px; height:26px;width:260px;margin-top:270px;" id="hq_upload_jpg_1" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/two_img_upload" target="hq_yframe_hotfix_1" method="post" enctype="multipart/form-data" >
              	<div style="float:left; height:30px; width:260px; overflow:hidden; margin-left:100px; position:relative;">
                 <input type="file" class="sIE_r_img_file" id="hq_jpg_file_1" name="upload_file[]" multiple="multiple" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                 <input type="button" class="sIE_r_img_file" name="jpg" style="width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                 <input type="button" id="hq_jpg_upload_submit_1" value="上传JPG和CDR" style=" float:right; width:100px;"  /> 
                </div>
               
               
              </form>
              </div>

                   <!--<div class="sIE_r" style="height:36px; width:260px; padding-top:15px; margin-top:110px; float:right;">
                    <div class="sIE_r_img" style="height:36px; width:260px; margin-left:100px;">
                    <div style="float:left;  width:260px; height:auto;"> 
                      
               <iframe name="yframe_hotfix_cdr_1" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/upload_cdr" style="border:none; width:260px; height:260px;"></iframe>
                    </div>
                    </div>
            <form style="float:left; width:260px;" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/upload_cdr" id="hq_upload_cdr_1" target="yframe_hotfix_cdr_1" method="post" enctype="multipart/form-data" >
            
             <div style="float:left; height:26px; width:260px; overflow:hidden; margin-left:100px; position:relative;">
              <input type="file" class="sIE_r_img_file" id="hq_cdr_file_1" name="cdr_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                 <input type="button" class="sIE_r_img_file" name="jpg" style=" width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                 <input type="button" id="hq_cdr_upload_submit_1" value="上传CDR" style=" float:right; width:70px;margin-top:0px;" /> 
              </div>
                 
               
              </form>
        
                    </div>-->

              <div class="sIE_l_02">
           <div class="button" style="margin-top:-100px; ">
           <div class="buttonContent">          
              <button type="button" id="no_cdr_submit">确定</button>
           </div>
        </div>
        <div class="button" style="margin-left:4%;margin-top:-100px; ">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
      </div>    
        </div>
		     
</div>
</div>

<!-- {literal} --> 
<script type="text/javascript">
function no_customer_num_cdr(){
						var name = $("#no_customer_code").val();
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/add_customer',//通过Ajax取数据的目标页面
							data:{"name":name},
							type:'post',//方法，还可以是"post"
							dataType:'json',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								if(locals){
									$("#no_customer_name").val(locals.customer_name);
									$("#no_customer_company").val(locals.company);
								}else{
									$("#no_customer_name").val('');
									$("#no_customer_company").val('');									
								}
							}								
							
						});
					}	
$(document).ready(function()  
{
	
	
	$("#hq_jpg_upload_submit_1").click(function (){
		$("#hq_upload_jpg_1").submit();
	});
	
	$("#hq_cdr_upload_submit_1").click(function (){
		$("#hq_upload_cdr_1").submit();
	});	
	$("#no_cdr_submit").click(function () {
	    var no_customer_code=$("#no_customer_code").val();
		var no_customer_name=$("#no_customer_name").val();
		var no_design_pic_name=$("#no_design_pic_name").val();
		var no_quotation_code=$("#no_quotation_code").val();
		var no_final_quote=$("#no_final_quote").val();
		var cdr_no_inch_w=$("#cdr_no_inch_w").val();
		var cdr_no_inch_h=$("#cdr_no_inch_h").val();
	    var reg = /^\d+(?=\.{0,1}\d+$|$)/;
        var a=reg.test(no_final_quote);
        if(no_customer_code==""){
			$("#no_cdr_error").css("display","block");
			$("#no_cdr_error").html("请填写客户代码！");
		}else if(no_customer_name==""){
			$("#no_cdr_error").css("display","block");
			$("#no_cdr_error").html("请填写客户名字！");
		}else if(no_design_pic_name==""){
			
			$("#no_cdr_error").css("display","block");
			$("#no_cdr_error").html("请填写名称！");
		}
		else if(no_quotation_code==""){
			$("#no_cdr_error").css("display","block");
			$("#no_cdr_error").html("请填写设计编码！");
		}
		else if(cdr_no_inch_w==""){
			$("#no_cdr_error").css("display","block");
			$("#no_cdr_error").html("请填写完整尺寸！");
		}
		else if(cdr_no_inch_h==""){
			$("#no_cdr_error").css("display","block");
			$("#no_cdr_error").html("请填写完整尺寸！");
		}
		else if(no_final_quote=="" || a==false){
			$("#no_cdr_error").css("display","block");
			$("#no_cdr_error").html("请填写报价且报价为正数！");
		}
		else if($("#no_order_category").val() == ""){
			$("#no_cdr_error").css("display","block");
			$("#no_cdr_error").html("请填写报关品类！");
		}
		else{
			$("#no_cdr_error").css("display","none");
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/check_photo',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#no_cdr_error").css("display","none");
							$("#no_cdr_quotation_submit_form").submit();
						}else{
							$("#no_cdr_error").css("display","block");
							$("#no_cdr_error").html("请上传图片,且名称不包含空格！");
							
						}
					}
			    });
			
			}
	});
});
$("#cdr_no_inch_w").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#cdr_no_cm_w").val(cm_w);
		
		
	});
	

	$("#cdr_no_inch_h").bind("input propertychange", function() {
		//alert($(this).val());;
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#cdr_no_cm_h").val(cm_h);
		
	});

	
		$("#cdr_no_cm_w").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#cdr_no_inch_w").val(inch_h);
		
	});
	$("#cdr_no_cm_h").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#cdr_no_inch_h").val(inch_h);
		
	});
	
	
$("#no_exchange_rate_id").change(
	  function()
    	{ 
		var exchange_rate_id = $("#no_exchange_rate_id").val();
		var final_quote = $("#no_final_quote").val();
		
		$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/contact_change',//通过Ajax取数据的目标页面
				data:{"exchange_rate_id":exchange_rate_id},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
	
					$("#no_final_quote").val(locals);
					
				
				}

				
			});
		});	

</script>
<!-- {/literal} -->