<?php /* Smarty version 2.6.22, created on 2016-03-23 09:50:20
         compiled from cn_unfinishdesign/design.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<!--  批量上传调用-->     
<link rel="stylesheet" type="text/css" href="http://<?php echo $this->_tpl_vars['host']; ?>
/js/diyUpload/css/webuploader.css">
<link rel="stylesheet" type="text/css" href="http://<?php echo $this->_tpl_vars['host']; ?>
/js/diyUpload/css/diyUpload.css">
<script type="text/javascript" src="http://<?php echo $this->_tpl_vars['host']; ?>
/js/diyUpload/js/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="http://<?php echo $this->_tpl_vars['host']; ?>
/js/diyUpload/js/diyUpload.js"></script>
<!--  批量上传调用--> 

<div class="pageContent">
  <div class="stkInfEnter" layoutH="100" style="width:98%; margin-left:10px;">
    <div class="sIE_title">设计订单</div>
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
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">备注:</div>
                <textarea  class="add01_textarea" style="width:220px; height:140px; margin-left:10px;" style="width:100px;"   disabled="disabled" ><?php echo $this->_tpl_vars['design']['note']; ?>
</textarea>
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
      
      <div class="sIEK" style="margin-top:100px;">
    
    
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
              <div style="float:left; margin-bottom:5px;">
                    <div class="sIE_l_01_title">备注:</div>
                    <textarea  class="add01_textarea" style="width:220px; height:140px; margin-left:10px;" style="width:100px;" name="design_note"    ><?php echo $this->_tpl_vars['design_content']['design_note']; ?>
</textarea>
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
                      <input type="text"  class="sIE_No" style="width:55px;" id="content_cm_w" name="content_cm_w" value="<?php echo $this->_tpl_vars['design_content']['content_cm_w']; ?>
" />
                      <div class="sIE_r01_div_r" style="margin-top:5px;">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                      <input type="text"  class="sIE_No" style="width:55px;" id="content_cm_h" name="content_cm_h" value="<?php echo $this->_tpl_vars['design_content']['content_cm_h']; ?>
" />
                      <div class="sIE_r01_div_r" style="margin-top:5px;">cm H</div>
                    </div>
                  </div>
                </div>
                
                  <div style="float:left; margin-bottom:5px;">
                    <div class="sIE_l_01_title">PNG:</div>
                    <input type="text" class="sIE_No" style="width:100px;" size="60" name="upload_png" readonly="readonly" id="design_name_png" value="<?php echo $this->_tpl_vars['design_content']['upload_png']; ?>
"/>
                  </div> 
              
                  <div style="float:left; margin-bottom:5px;">
                    <div class="sIE_l_01_title">TIF:</div>
                    <input type="text" class="sIE_No" style="width:100px;" size="60" name="upload_tif" readonly="readonly" id="design_name_tif" value="<?php echo $this->_tpl_vars['design_content']['upload_tif']; ?>
"/>
                  </div>
                 <a href="#" id="get_png_tif" style="display:none;"><button type="button" >获取PNG和TIF</button></a>
                
                 

              </div>
			<?php endif; ?>
            
              <input type="hidden" name="submit_value" value="" id="submit_value" />
            </form>
            
            <div id="unfinishdesign_error01" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
            
          </div>

    </div> 
    
    <div class="sIE_r" style="width:300px; float:right;margin-right:130px;">
          <div class="sIE_r_img" style="height:400px; width:360px;">
              <div style="float:left;  width:360px; height:360px;"> 
                
                <iframe name="yframe_unfinish_design" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_unfinishdesign/two_img_upload" style="border:none; " width="360px" height="400px;"></iframe>
                
               </div>
            <div style="float:left; margin-top:0px; width:360px;">
                <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_unfinishdesign/two_img_upload" id="upload_jpg"  target="yframe_unfinish_design" method="post" enctype="multipart/form-data" >
                  
                 <div style="float:left; width:60px; height:50px; overflow:hidden;position:relative;">
                 <input type="file" class="sIE_r_img_file" name="upload_file[]" multiple="multiple" onChange="image()" id="upload_file"  style=" opacity:0; position:relative; z-index:10; margin-top:0px;"  />
                 <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                 </div>
                 <input type="submit" id="jpg_upload_submit" value="上传PNG和TIF" style=" float:right; width:100px;" /> 
                <div id="testFileInput" class="uploadify" style="height: 30px; width: 120px; float:left; margin-top:10px;"> 
                </div>  
                 </form>
              </div>
            </div>
      </div>
      
      <div class="sIE_l_02" style="margin-top:36px;">
        <div class="button" style="margin-left:80%; margin-right:5px;">
          <div class="buttonContent">
          
            <button id="design_content_sub" value="1" name="design_content_sub"  >确定保存</button>
          </div>
        </div>
        <div class="button" style="margin-right:5px;">
          <div class="buttonContent">
            <button id="submit_verify" value="2" name="submit_verify"  >提交审核</button>
          </div>
        </div>
        <div class="button">
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
	
	
	//添加分版js
	function board_change(){
		if($("#board_status").val()==1){
			$("#board_upload_div").css('display','block');
			//批量分版上传：js
			$('#bulk_upload').diyUpload({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/all_fileupload',
				success:function( data ) {
				},
				error:function( err ) {
					console.info( err );	
				},
				buttonText : '批量分版图',
				chunked:true,
				// 分片大小
				chunkSize:512 * 1024,
				//最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
				fileNumLimit:20,
				fileSizeLimit:500000 * 1024,
				fileSingleSizeLimit:50000 * 1024,
			
			});
		}else{
			$("#board_upload_div").css('display','none');	
		}
	}
	
	//添加其他效果图js
	function other_image_change(){
		if($("#other_image").val()==1){
			$("#other_image_upload_div").css('display','block');
			//添加其他效果图js
			$('#other_image_upload').diyUpload({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/degin_other_imsge_fileuploads',
				success:function( data ) {
				},
				error:function( err ) {
					console.info( err );	
				},
				buttonText : '添加其他效果图',
				chunked:true,
				// 分片大小
				chunkSize:512 * 1024,
				//最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
				fileNumLimit:10,
				fileSizeLimit:500000 * 1024,
				fileSingleSizeLimit:50000 * 1024,
			
			});
		}else{
			$("#other_image_upload_div").css('display','none');	
		}
	}

                
//修改页面时，对批量上传图片的删除
function del_bulk(id){
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/get_del_bulk',
		data:{'id':id},
		type:'post',
		success: function(){
			$("#old_img_"+id).remove();
		}	
	});
}

//删除其他效果图
function del_other_image(id){
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/del_other_image',
		data:{'id':id},
		type:'post',
		success: function(){
			$("#old_img_"+id).remove();
		}	
	});
}


function image(){
	$("#upload_name").html($("#upload_file").val())
}
function image_cdr(){
	$("#upload_name_cdr").html($("#upload_cdr").val())
}
$(document).ready(function()  
{
		//添加分版js
	$('#bulk_upload').diyUpload({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/all_fileupload',
		success:function( data ) {
		},
		error:function( err ) {
			console.info( err );	
		},
		buttonText : '批量分版图',
		chunked:true,
		// 分片大小
		chunkSize:512 * 1024,
		//最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
		fileNumLimit:20,
		fileSizeLimit:500000 * 1024,
		fileSingleSizeLimit:50000 * 1024,
	});

	//添加其他效果图js
	$('#other_image_upload').diyUpload({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/degin_other_imsge_fileuploads',
		success:function( data ) {
		},
		error:function( err ) {
			console.info( err );	
		},
		buttonText : '添加其他效果图',
		chunked:true,
		 //分片大小
		chunkSize:512 * 1024,
		//最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
		fileNumLimit:10,
		fileSizeLimit:500000 * 1024,
		fileSingleSizeLimit:50000 * 1024,
	});
	
	$("#design_content_sub").click(function (){
		$("#unfinishdesign_error01").css("display","none");
		$("#unfinishdesign_error01").html("");
		if(isNaN($("#content_cm_w").val()) || isNaN($("#content_cm_h").val()) || $("#content_cm_w").val() =="" || $("#content_cm_h").val()=="" ){
			$("#unfinishdesign_error01").css("display","block");
			$("#unfinishdesign_error01").html("尺寸为空或有特殊符号！");
		}else if($("#design_name").val()==''){
			$("#unfinishdesign_error01").css("display","block");
			$("#unfinishdesign_error01").html("设计名称不能为空！");
		}else if($("#design_name_png").val()=='' || $("#design_name_tif").val()==''){
			$("#unfinishdesign_error01").css("display","block");
			$("#unfinishdesign_error01").html("png和tif不能为空！");
		}else{
			$("#submit_value").val('1');
			$("#info_form").submit();
		}
	});
	
	
	$("#submit_verify").click(function (){

		  var d=$("#design_content_id").val();
		  if($("#cm_w_content").val() == "" || $("#cm_h_content").val() == ""){
			  $("#unfinishdesign_error01").css("display","block");
			  $("#unfinishdesign_error01").html("请输入尺寸！");
		  }else{
			  $("#submit_value").val('2');		
			  $("#info_form").submit();
		  }

	});
	
	//上传图片
	$("#jpg_upload_submit").click(function (){
		//alert('1111');
		$("#upload_jpg").submit();
		$("#design_name_png").val('');
		$("#design_name_tif").val('');
		$("#get_png_tif").css("display","block");
	});
	
	//获取png和tif的路径
	$("#get_png_tif").click(function (){
		var g_i= window.frames["yframe_unfinish_design"].document.getElementById("get_image"); //获取图片的属性
		var g_a= window.frames["yframe_unfinish_design"].document.getElementById("get_a"); //获取图片的属性
		$("#design_name_png").val(g_i.src);
		$("#design_name_tif").val(g_a.href);	
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
		
		var w = $("#cm_w_content").val();
		var h = $("#cm_h_content").val();
		
		$("#submit_value").val('2');
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/biankuang_1',//通过Ajax取数据的目标页面
				data:{"w":w,"h":h},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
                    locals=locals.split("|");
					if(parseInt(w)>parseInt(h)){
						$("#biankuang_w").val(locals[0]);
						$("#biankuang_h").val(locals[1]);
					}else{
						$("#biankuang_w").val(locals[1]);
						$("#biankuang_h").val(locals[0]);
					}
					
					
				}
		});
		
	});
	
	$("#inch_h_content").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#cm_h_content").val(cm_h);
		$("#cm_h1").val(cm_h);
		
		var w = $("#cm_w_content").val();
		var h = $("#cm_h_content").val();
		
		$("#submit_value").val('2');
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/biankuang_2',//通过Ajax取数据的目标页面
				data:{"w":w,"h":h},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
                    locals=locals.split("|");
					
					if(parseInt(w)>parseInt(h)){
						$("#biankuang_w").val(locals[0]);
						$("#biankuang_h").val(locals[1]);
					}else{
						$("#biankuang_w").val(locals[1]);
						$("#biankuang_h").val(locals[0]);
					}
					
				}
		});		
		
	});
	
	$("#cm_w_content").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#inch_w_content").val(inch_w);
		$("#inch_w1").val(inch_w);
		
		var w = $("#cm_w_content").val();
		var h = $("#cm_h_content").val();
		
		$("#submit_value").val('2');
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/biankuang_3',//通过Ajax取数据的目标页面
				data:{"w":w,"h":h},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
                    locals=locals.split("|");
					
					if(parseInt(w)>parseInt(h)){
						$("#biankuang_w").val(locals[0]);
						$("#biankuang_h").val(locals[1]);
					}else{
						$("#biankuang_w").val(locals[1]);
						$("#biankuang_h").val(locals[0]);
					}
					
				}
		});			
		
	});
	
	$("#cm_h_content").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#inch_h_content").val(inch_h);
		$("#inch_h1").val(inch_h);
		
		var w = $("#cm_w_content").val();
		var h = $("#cm_h_content").val();
		
		$("#submit_value").val('2');
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/biankuang_4',//通过Ajax取数据的目标页面
				data:{"w":w,"h":h},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
                    locals=locals.split("|");
					
					if(parseInt(w)>parseInt(h)){
						$("#biankuang_w").val(locals[0]);
						$("#biankuang_h").val(locals[1]);
					}else{
						$("#biankuang_w").val(locals[1]);
						$("#biankuang_h").val(locals[0]);
					}
					
				}
		});			
		
	});
	
	$("#size_width_design_add").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_w = $(this).val() / 25.4;
		if(mm_w != ''){
			mm_w = mm_w.toFixed(2);
		}
		$("#size_inch_width_design_add").val(mm_w);
	});
	
	$("#size_height_design_add").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_h = $(this).val() / 25.4;
		if(mm_h != ''){
			mm_h = mm_h.toFixed(2);
		}
		
		$("#size_inch_height_design_add").val(mm_h);
	});
	
	$("#size_inch_width_design_add").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() * 25.4;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#size_width_design_add").val(inch_w);
	});
	
	$("#size_inch_height_design_add").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() * 25.4;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#size_height_design_add").val(inch_h);
	});	
	
	//end
	
    $("#material_select_design_add").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#material_select_design_add").val();
    	    var opti = "<option value=\"\"></option>";
			if(a != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_infomation',//通过Ajax取数据的目标页面
					data:{"material_name":a},
					type:'get',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
					{
						$("#material_info_color_design_add").find("option").remove();
						$("#material_info_c_color_design_add").find("option").remove();
						$("#material_c_size_design_add").find("option").remove();
						$("#material_c_quantity_design_add").val("");	
						$("#size_width_design_add").val("");
						$("#size_height_design_add").val("");
						$("#material_quantity_design_add").val("1");
						if(locals.result == 0){
							
						}else if(locals.result == 2){
							$("#material_info_design_add").css("display","none");
							$("#material_info_c_design_add").css("display","block");
							$("#material_info_color_design_add").empty();
							var objs = locals.color;
							$("#material_info_c_color_design_add").append(opti);   //为Select追加一个Option(下拉项)     
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.material_color + "\" >" + jsonObj.material_color + "</option>";
							    $("#material_info_c_color_design_add").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}else if(locals.result == 1){
							$("#material_info_design_add").css("display","block");
							$("#material_info_c_design_add").css("display","none");
							$("#material_info_c_color_design_add").empty();
							//alert(locals.color.length);//输出子对象数量
							var objs = locals.color;
							$("#material_info_color_design_add").append(opti);   //为Select追加一个Option(下拉项)        
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.color + "\" >" + jsonObj.color + "</option>";
							    $("#material_info_color_design_add").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}
						//alert(locals);
						//$("#customer_code").val(locals);
					}
				});
			}
    	}
    );
	
	$("#material_c_size_design_add").change(function (){
	    $("#material_c_quantity_design_add").val("");
	});
	
	$("#material_info_color_design_add").change(function (){
	    $("#size_width_design_add").val("");
		$("#size_height_design_add").val("");
		$("#material_quantity_design_add").val("1");
	});		
	
	$("#material_info_c_color_design_add").change(function (){
		var a = $("#material_select_design_add").val();
		var color = $("#material_info_c_color_design_add").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_c_infomation',//通过Ajax取数据的目标页面
			data:{'material_name':a,'material_color':color,},
			type:'get',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				var objs = locals.size;
				var size = '';
				$("#material_c_size_design_add").find("option").remove();
				$("#material_c_quantity_design_add").val("");					
				for (var o in objs) {
					var  jsonObj  =  objs[o];
					if(jsonObj.size){
						size = jsonObj.size;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
						$("#material_c_size_design_add").append(optionstring);   //为Select追加一个Option(下拉项
					}
					else if(jsonObj.size_mm){
						size = jsonObj.size_mm;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size_design_add").append(optionstring);   //为Select追加一个Option(下拉项)  
					}
					else if(jsonObj.size_m_w&& jsonObj.size_m_h){
						size = jsonObj.size_m_w+'*'+jsonObj.size_m_h;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size_design_add").append(optionstring);   //为Select追加一个Option(下拉项)   
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
	$("#insert_material1_design_add").click(function (){
		
		var material_name = $("#material_select_design_add").val();
		var size_width = $("#size_inch_width_design_add").val();
		var size_height = $("#size_inch_height_design_add").val();
		var color = $("#material_info_color_design_add").val();
		var quantity = $("#material_quantity_design_add").val();
		var s01 = $("#sIE_size01").val();
		var size = size_width+"*"+size_height;
		var m_unit = '';
		if(s01 == '1'){
			m_unit = 'inch';
		}
		if(s01 == '2'){
			m_unit = 'cm';
		}
		if($("#material_info_color_design_add").val()!="" && $("#size_width_design_add").val()!="" && $("#size_height_design_add").val()!="" && $("#material_quantity_design_add").val()!=""){
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_design_content_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				if(locals != 0){
				var table_value = "<tr class='uf_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+size_width+"*"+size_height+" inch "+m_unit+"<input type='hidden' name='materials["+row_number+"][size_width]' value='"+size_width+"' /><input type='hidden' name='materials["+row_number+"][size_height]' value='"+size_height+"' /><input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /><input type='hidden' name='materials["+row_number+"][m_unit]' value='"+m_unit+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table_design_add").append(table_value);   //为table追加一个tr(下拉项)
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
	
	$("#insert_material2_design_add").click(function (){
		var material_name = $("#material_select_design_add").val();
		
		var color = $("#material_info_c_color_design_add").val();
		var quantity = $("#material_c_quantity_design_add").val();
		
		var size = $("#material_c_size_design_add").val();
		var size_text = $("#material_c_size_design_add").find("option:selected").text(); 
		
		if($("#material_info_c_color_design_add").val()!="" && $("#material_c_size_design_add").val()!="" && $("#material_c_quantity_design_add").val()!=""){
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_design_content_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				if(locals != 0){
				var table_value = "<tr class='uf_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table_design_add").append(table_value);   //为table追加一个tr(下拉项)
				}else{
					alert("材料数据有重复,请重新录入");
				}
			}
		});
		 
	    row_number++;
		}else{
			alert("请添加完整信息！");
		}
	});
	
	
	//添加输入的材料
	$("#insert_materials_textarea").click(function (){
		var str	=	$("#add_materials_textarea").val();
		$("#text_err_design").html('');
		$("#text_err_design").css('display','none');
		if(str==''){
			alert("请输入材料信息！");
		}else{
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_and_insert_materials',
				data:{'all_materials':str},
				type:'post',
				dataType:'json',
				success: function(data){
					if(data.err==1){
						$("#text_err_design").css('display','block');
						$("#text_err_design").html(data.text);	return;
					}else if(data.err==2){
						alert(data.text);return;
					}else if(data.err==0){
						var material_len	=	data.arr_materials.length;
						if(material_len>0){
							for(var i=0;i<material_len;i++){
								var table_value = "<tr class='uf_tableClass02'> <td>"+data.arr_materials[i].material_name+"</td><td>"+data.arr_materials[i].material_color+"</td>  <td >"+data.arr_materials[i].material_size+" </td>  <td>"+data.arr_materials[i].material_quantity+"</td><td onClick='getDel(this,"+data.arr_materials[i].id+")'><a href='#'>删除</a></td></tr>";
								$("#material_table_design_add").append(table_value);
								row_number++; 
							}
						}	
					}
				}	
			});
				
		}	
		
	});
	
});





function getDel(k,row){
	//alert(row);
	var material_name = $("#material_select_design_add").val();
	var size_width = $("#size_inch_width_design_add").val();
	var size_height = $("#size_inch_height_design_add").val();
	var color = $("#material_info_color_design_add").val();
	var quantity = $("#material_quantity_design_add").val();
	var color2 = $("#material_info_c_color_design_add").val();
	var quantity2 = $("#material_c_quantity_design_add").val();
	var size = size_width+"*"+size_height;
	var size2 = $("#material_c_size_design_add").val();
	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/delete_design_content_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'id':row,'material_name':material_name,'material_color':color,'material_color2':color2,'material_size':size,'material_size2':size2,'material_quantity':quantity,'material_quantity2':quantity2},
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