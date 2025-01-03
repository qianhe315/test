<?php /* Smarty version 2.6.22, created on 2015-07-24 10:14:51
         compiled from cdr_quotation/no_edit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <div style="float:left; width:100%;"  layoutH="21">
       <div class="sIE_title" style="width:60%; margin-left:-100px;">CDR报价单(无设计)</div>
         <form name="form1" method="post" action="<?php if ($this->_tpl_vars['id']): ?> <?php echo $this->_tpl_vars['update_no_cdr_action']; ?>
<?php else: ?><?php echo $this->_tpl_vars['no_cdr_action']; ?>
<?php endif; ?>" id="no_cdr_quotation_submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)"> 
          <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['id']; ?>
" />
          <input type="hidden" name="jpg_save_name" value="<?php echo $this->_tpl_vars['image']; ?>
" />
          <input type="hidden" name="cdr_save_name" value="<?php echo $this->_tpl_vars['image1']; ?>
" />
          <input type="hidden" name="no_tapedata_formula" id="no_tapedata_formula" />       
            <div class="sIEK" style="width:97%; margin-left:4px;">
              <div class="sIE_l" style="width:400px;height:120px;">
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">业务员:</div>
                   <input type="text" readonly="readonly" value="<?php echo $this->_tpl_vars['no_user_name']; ?>
" name="no_saleman_name"class="sIE_No" style="width:100px;" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">时间:</div>
                    <input type="text" value="<?php echo $this->_tpl_vars['no_quotation_date']; ?>
" style="width:100px;" name="no_quotation_date" class="sIE_No"  readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户代码:</div>
                    <input type="text" class="sIE_No" name="no_customer_code" value="<?php echo $this->_tpl_vars['no_customer_code']; ?>
" style="width:100px;" id="no_customer_code" onkeyup="no_customer_num_cdr();" />
                </div>    
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">报价名称:</div>
                  <input type="text" class="sIE_No" id="no_design_pic_name" value="<?php echo $this->_tpl_vars['no_design_pic_name']; ?>
" name="no_design_pic_name" style="width:100px;" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户名:</div>
                    <input type="text" name="no_customer_name" style="width:100px;" id="no_customer_name" value="<?php echo $this->_tpl_vars['no_customer_name']; ?>
" class="sIE_No"  readonly="readonly" />
                </div>
               
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">设计编号:</div>
                       <input type="text" class="sIE_No" name="no_quotation_code" id='no_quotation_code'value="<?php echo $this->_tpl_vars['no_quotation_code']; ?>
" style="width:100px;" readonly/>
                </div> 
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">公司:</div>
                  <input type="text" name="no_customer_company" style="width:100px;" value="<?php echo $this->_tpl_vars['no_customer_company']; ?>
" class="sIE_No" id="no_customer_company"  readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">货币:</div>
                    <select class="combox" name="no_exchange_rate_id" id="no_exchange_rate_id">
                     <option value="1"  <?php if ($this->_tpl_vars['exchange_rate_id'] == "人民币"): ?>  selected="selected"<?php endif; ?>>人民币</option>
                	<option value="2" <?php if ($this->_tpl_vars['exchange_rate_id'] == "美元"): ?>  selected="selected"<?php endif; ?>>美元</option>
                    <option value="3" <?php if ($this->_tpl_vars['exchange_rate_id'] == "欧元"): ?>  selected="selected"<?php endif; ?>>欧元</option>
                </select>
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style=" margin-left:-200px; margin-top:7px;">报价:</div>
                    <input type="text" name="no_final_quote" value="<?php echo $this->_tpl_vars['no_final_quote']; ?>
" id="no_final_quote" class="sIE_No" style="width:100px; margin-left:-120px; margin-top:3px;" />
                </div>
                <div id="no_cdr_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div> 
               </div>
               
              	<div class="sIE_l_01" style="margin-top:10px; width:210px; margin-left:-10px;">
                  <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
                  <div class="sIE_r01" style="float:left; width:160px;">
                    <div class="sIE_r01_div">
                       <input type="text" id="cdr_no_inch_w" style="width:80px;" name="cdr_no_inch_w" value="<?php echo $this->_tpl_vars['inch_w']; ?>
" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">inch W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="cdr_no_inch_h" style="width:80px;" name="cdr_no_inch_h" value="<?php echo $this->_tpl_vars['inch_h']; ?>
" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">inch H</div>
                    </div>
                    <div class="sIE_r01_div">
                       <input type="text" id="cdr_no_cm_w" style="width:80px;" name="cdr_no_cm_w" value="<?php echo $this->_tpl_vars['cm_w']; ?>
"class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                       <input type="text" id="cdr_no_cm_h" style="width:80px;" name="cdr_no_cm_h" value="<?php echo $this->_tpl_vars['cm_h']; ?>
" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">cm H</div>
                    </div>
                    
                  </div>
          
                </div>
                </div>
               </form>

                    <div class="sIE_r" style="height:260px; width:260px; padding-top:15px;margin-top:-155px;float:right;">
                    <div class="sIE_r_img" style="height:280px; width:260px; margin-left:-160px; margin-top:10px;">
                    <div style="float:left;  width:260px; height:auto;"> 
                  <iframe name="hq_yframe_hotfix_1" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/two_img_upload" style="border:none; width:260px; height:280px;  "></iframe>
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

                   <!--<div class="sIE_r" style="height:36px; width:260px; padding-top:15px; margin-top:135px; float:right;">
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
              <button type="button" id="no_cdr_edit_submit">确定</button>
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
$(document).ready(function()  
{
	
	
	$("#hq_jpg_upload_submit_1").click(function (){
		$("#hq_upload_jpg_1").submit();
	});
	
	$("#hq_cdr_upload_submit_1").click(function (){
		$("#hq_upload_cdr_1").submit();
	});	
	$("#no_cdr_edit_submit").click(function () {
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