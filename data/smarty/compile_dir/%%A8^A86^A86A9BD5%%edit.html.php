<?php /* Smarty version 2.6.22, created on 2015-01-24 10:03:36
         compiled from cdr_quotation/edit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent" style="height:660px;">
  <div style="width:100%; margin-left:187px;">
  		
    	  <div class="sIE_title" style="width:60%; margin-top:20px; ">CDR报价单</div>
        </div>
          
      <form method="post" action="<?php if ($this->_tpl_vars['id']): ?><?php echo $this->_tpl_vars['update_cdr_action']; ?>
<?php else: ?><?php echo $this->_tpl_vars['cdr_action']; ?>
<?php endif; ?>" id="cdr_quotation_submit_form_edit" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
      <input type="hidden" name="tapedata_formula" id="tapedata_formula" />
      <input type="hidden" name="meiyuan_version" id="meiyuan_version" value="<?php echo $this->_tpl_vars['meiyuan_version']; ?>
" />
        <input type="hidden" name="mid" id="mid" value='<?php echo $this->_tpl_vars['id']; ?>
'/>

      <input type="hidden" name="ouyuan_version" id="ouyuan_version" value="<?php echo $this->_tpl_vars['ouyuan_version']; ?>
" />
      <input type="hidden" name="renmin_version" id="renmin_version" value="<?php echo $this->_tpl_vars['renmin_version']; ?>
" />
      <input type="hidden" name="final_quotation_hidden" id="final_quotation_hidden" value="0" />
    	  	<div class="sIEK" style="width:97%; margin-left:10px;">
              <div class="sIE_l" style="width:400px; margin-left:5px;">
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">业务员:</div>
                    <input type="text" class="sIE_No" style="width:100px;" name="saleman_name" value="<?php echo $this->_tpl_vars['user_name']; ?>
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
" class="sIE_No" onkeyup="customer_code_num();" />
                </div>   
                
                
                 <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title" style="width:80px;">报价类型:</div>
                    <select class="picture_select01" name="quotation_category_id" id="picture_select01_cdr" style="width:106px; height:26px;" onchange="design_code_cdr()" disabled="disabled">
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
" class="sIE_No" onkeyup="stock();" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">公司:</div>
                  <input type="text" name="customer_company" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" class="sIE_No" id="customer_company"  readonly="readonly" />
                </div>
               
                
               <div class="sIE_l_01" style="width:200px;">
                      <div class="sIE_l_01_title" style="width:80px;">设计编号:</div>
                      <input type="text" name="stock_number_cdr" class="sIE_No" style="width:100px;"id="picture_text01_cdr" readonly="readonly" value="<?php echo $this->_tpl_vars['no_stock_number']; ?>
" />
                      
               </div>
                
               
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">货币:</div>
                    <select class="combox" name="exchange_rate_id" id="exchange_rate_id">
                
                    <option value="1"  <?php if ($this->_tpl_vars['exchange_rate_id'] == "人民币"): ?>  selected="selected"<?php endif; ?>>人民币</option>
                	<option value="2" <?php if ($this->_tpl_vars['exchange_rate_id'] == "美元"): ?>  selected="selected"<?php endif; ?>>美元</option>
                    <option value="3" <?php if ($this->_tpl_vars['exchange_rate_id'] == "欧元"): ?>  selected="selected"<?php endif; ?>>欧元</option>
                </select>
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" >报价:</div>
                    <input class="sIE_No digits" id="final_quote" style="width:100px;" type="text" name="final_quote" value="<?php echo $this->_tpl_vars['final_quote']; ?>
">
                </div>
                
                <div id="cdr_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
                
              </div>
              <div class="sIE_r" style="width:630px; height:auto;">
              	<div class="sIE_l_01" style="margin-top:0px; width:210px;">
                  <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
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
                  <?php if ($this->_tpl_vars['quotation_category_id'] == '3'): ?>
                    <div   id="sheji" >
                    <div class="sIE_l_01_title" style="width:50px; height:100px; display:block;">设计师:</div>
                    <div class="sIE_r01" style="float:left; width:160px;">
                    <div class="sIE_r01_div">
                    	<input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['design_user_name']; ?>
" id="shejishi" readonly="readonly" style="width:80px;"/>
                    </div>
                    </div>
                    </div>
                   <?php endif; ?>
                </div>
                <div class="sIE_r" style="height:210px; width:210px; margin-top:0px;">
                <div class="sIE_r_img" id="image" style="width:210px; height:210px;"><img src="<?php echo $this->_tpl_vars['upload_jpg']; ?>
" style="height:210px; width:210px;" /></div>
                <input type="hidden" name="image" id="image_hidden" />
               <!-- <div class="sIE_r_img" id="cdr" style="height:36px; width:211px;  margin-left:20px; margin-top:20px; ">
                
              <div style="display:block;" id="xianshi"> CDR:<a href="<?php echo $this->_tpl_vars['upload_jpg']; ?>
"><font color="blue" size="7">下载查看</font></a></div>
              </div>-->
              </div>
              
              </div>
    	  	</div>
             
              </form>
              <div class="sIE_l_02">
              <div class="button"style="margin-left:5px;"  >
                  <div class="buttonContent" >          
                      <button type="button" id="cdr_submit_edit">确定</button>
                   </div>
                   </div>
              <div class="button" style="margin-left:1%; "><div class="buttonContent"><button class="close">取消</button></div></div>
             </div>
             </div>
<script type="text/javascript" language="javascript">
	function customer_code_num(){
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
								$("#image").html("<img style='height:220px; width:220px;' src = " + locals[4] + ">");
							
								
						       
								
								
							}								
							
						});	
					 }
		}
		function quotation_code_num_cdr(){
					   $(document).ready(function(){	
					      var id = $("#quotation_code").val();
					      var aaa = $("#parities").find("option:selected").text();;
					      aaa=aaa.split(" ");						   
					   
					     $('#aaa').css('display','none');
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
									$("#image").html("<img style='height:220px; width:220px;' src = " + locals[6] + ">");
									$("#image_hidden").val(locals[6]);
							     }
								}else{
									alert('设计编号不是该业务名下');
									$("#xianshi").css("display","none");
									$("#inch_w").val();
									$("#inch_h").val();
									$("#cm_w").val();
									$("#cm_h").val();
									$("#shejishi").val();
									$("#image").html("<img style='height:220px; width:220px;' src = " + + ">");
									$("#image_hidden").val();
								}
							}										
						});
					   });
		}
$(document).ready(function()  
{
	 $("#cdr_submit_edit").click(function () {
	    var customer_code=$("#customer_code").val();
		var customer_name=$("#customer_name").val();
		var design_pic_name=$("#design_pic_name").val();
		var quotation_code=$("#quotation_code").val();
		var final_quote=$("#final_quote").val();
		var reg = /^\d+(?=\.{0,1}\d+$|$)/;
        var a=reg.test(final_quote);
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
		else if(final_quote=="" || a==false){
			$("#cdr_error").css("display","block");
			$("#cdr_error").html("请填写报价且报价为正数！");
		}
		else if($("#inch_w").val()== "" || $("#inch_h").val()== "" || $("#cm_w").val()== "" || $("#cm_h").val()== ""){
			$("#cdr_error").css("display","block");
			$("#cdr_error").html("尺寸不为空,请填写正确的设计编号！");
		}
		else{
			
			$("#cdr_quotation_submit_form_edit").submit();
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
				data:{"exchange_rate_id":exchange_rate_id,"final_quote":final_quote},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
	
					$("#final_quote").val(locals);
				}

				
			});
		});	

</script>  