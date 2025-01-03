<?php /* Smarty version 2.6.22, created on 2024-10-22 17:14:48
         compiled from lhpl_module/edit_attribute_list_value.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
<form method="post" id="attribute_list_value" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">
</form>
    <div class="pageFormContent" layoutH="58">
    	<input type="hidden" id="attribute_id" name="attribute_id"  value="<?php echo $this->_tpl_vars['attribute_id']; ?>
">
        <div style="float:left; width:100%;">
            <div class="sIE_l_02" style="width:630px;">
                <table cellspacing="0" class="sIE_l_02Tab" id="av_table_add_1">
                    <tr>
                      <th width="60">组1序号</th>
                      <th width="160">可能值(中文)</th>
                      <th width="160">可能值(英文)</th>
                      <th width="200">图片</th>
                      <th width="50">操作</th>
                    </tr>
                    <?php if ($this->_tpl_vars['lhpl_attribute_value_1']): ?>
                    <?php $_from = $this->_tpl_vars['lhpl_attribute_value_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['av']):
?>
                        <tr>
                            <td><input id="order_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" size="3" type="text" value="<?php echo $this->_tpl_vars['av']['order']; ?>
" onkeyup="change_order(<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
)"></td>
                            <td><input id="cn_name_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" size="20" type="text" value="<?php echo $this->_tpl_vars['av']['cn_name']; ?>
" onkeyup="change_cn_name(<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
)"></td>
                            <td><input id="en_name_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" size="20" type="text" value="<?php echo $this->_tpl_vars['av']['en_name']; ?>
" onkeyup="change_en_name(<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
)"></td>
                            <td>
                               <form id="av_upload_jpg_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" method="post" enctype="multipart/form-data" style="float:left; width:80px;">
                                  <div style="float:left; position:relative;">
                                  <input type="file" class="sIE_r_img_file" name="upload_file_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" id="av_upload_jpg_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" style=" float:left; opacity:0; width:80px; height:24px; cursor:pointer; position:absolute; z-index:10;" />
                                  <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; float:left; width:80px; text-align:center; height:24px; margin-top:8px; cursor:pointer; position:absolute; z-index:9;" value="浏览" />
                                  </div>
                                    
                                </form>
                                <button style="float:left; width:80px; height:24px; margin-top:5px; margin-top:38px; cursor:pointer;" onclick="av_jpg_upload_submit(<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
)">提交</button>
                              
                                <div style="float:left; margin-left:5px;">
                                <?php if ($this->_tpl_vars['av']['image'] != ''): ?>
                                	<img id="lhpl_attribute_value_image_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" src="<?php echo $this->_tpl_vars['av']['image']; ?>
" style="max-width:70px; max-height:70px; float:left; margin-right:10px; display:block;" />
                                <?php else: ?>
                                	<img id="lhpl_attribute_value_image_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" src="" style="max-width:70px; max-height:70px; float:left; margin-right:10px; display:none;" />
                                <?php endif; ?>
                                </div>
                            </td>
                            <td onClick="getDel_av(this,<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
)"><a href='#'>删除</a></td>
                        </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
                </table>
                <button type="button" style="margin-top:10px; cursor:pointer;" onclick="attribute_value_add(1)">添加选项</button>
            </div>
        </div>
        
        <?php if ($this->_tpl_vars['lhpl_attribute']['type'] == '双单选'): ?>
        <div style="float:left; width:100%;">
            <div class="sIE_l_02" style="width:630px;">
                
                <table cellspacing="0" class="sIE_l_02Tab" id="av_table_add_2" style="margin-top:30px;">
                    <tr>
                      <th width="60">组2序号</th>
                      <th width="160">可能值(中文)</th>
                      <th width="160">可能值(英文)</th>
                      <th width="200">图片</th>
                      <th width="50">操作</th>
                    </tr>
                    <?php if ($this->_tpl_vars['lhpl_attribute_value_2']): ?>
                    <?php $_from = $this->_tpl_vars['lhpl_attribute_value_2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['av']):
?>
                        <tr>
                            <td><input id="order_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" size="3" type="text" value="<?php echo $this->_tpl_vars['av']['order']; ?>
" onkeyup="change_order(<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
)"></td>
                            <td><input id="cn_name_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" size="20" type="text" value="<?php echo $this->_tpl_vars['av']['cn_name']; ?>
" onkeyup="change_cn_name(<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
)"></td>
                            <td><input id="en_name_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" size="20" type="text" value="<?php echo $this->_tpl_vars['av']['en_name']; ?>
" onkeyup="change_en_name(<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
)"></td>
                            <td>
                            
                            	<form id="av_upload_jpg_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" method="post" enctype="multipart/form-data" style="float:left; width:80px;">
                                  <div style="float:left; position:relative;">
                                  <input type="file" class="sIE_r_img_file" name="upload_file_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" id="av_upload_jpg_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" style=" float:left; opacity:0; width:80px; height:24px; cursor:pointer; position:absolute; z-index:10;" />
                                  <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; float:left; width:80px; text-align:center; height:24px; margin-top:8px; cursor:pointer; position:absolute; z-index:9;" value="浏览" />
                                  </div>
                                    
                                </form>
                                <button style="float:left; width:80px; height:24px; margin-top:5px; margin-top:38px; cursor:pointer;" onclick="av_jpg_upload_submit(<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
)">提交</button>
                              
                                <div style="float:left; margin-left:5px;">
                                <?php if ($this->_tpl_vars['av']['image'] != ''): ?>
                                	<img id="lhpl_attribute_value_image_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" src="<?php echo $this->_tpl_vars['av']['image']; ?>
" style="max-width:70px; max-height:70px; float:left; margin-right:10px; display:block;" />
                                <?php else: ?>
                                	<img id="lhpl_attribute_value_image_<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
" src="" style="max-width:70px; max-height:70px; float:left; margin-right:10px; display:none;" />
                                <?php endif; ?>
                                </div>
                                
                            </td>
                            <td><a href='#' onClick="getDel_av(this,<?php echo $this->_tpl_vars['av']['attribute_value_id']; ?>
)">删除</a></td>
                        </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
                </table>
                <button type="button" style="margin-top:10px; cursor:pointer;" onclick="attribute_value_add(2)">添加选项</button>
            </div>
        </div>
        <?php endif; ?>
        
    	
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" onclick="attribute_list_value_btn()" >确认返回列表</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  
</div>

<script type="text/javascript">
function attribute_value_add(group_value){

	var attribute_id = $("#attribute_id").val();
	
	$.ajax({
		  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_module/add_attribute_value',//通过Ajax取数据的目标页面
		  type:'get',//方法，还可以是"post"
		  data:{'attribute_id':attribute_id,'group':group_value},
		  dataType:'json',//数据类型，还有其它的，详见jQuery手册
		  success:function(insert_id)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		  {
			  if(insert_id>=0){
				  var table_value = "<tr><td><input id='order_"+insert_id+"' size='3' type='text' value='' onkeyup='change_order("+insert_id+")'></td><td><input id='cn_name_"+insert_id+"' size='20' type='text' value='' onkeyup='change_cn_name("+insert_id+")'></td><td><input id='en_name_"+insert_id+"' size='20' type='text' value='' onkeyup='change_en_name("+insert_id+")'></td><td><form id='av_upload_jpg_"+insert_id+"' method='post' enctype='multipart/form-data' style='float:left; width:80px;'><div style='float:left; position:relative;'><input type='file' class='sIE_r_img_file' name='upload_file_"+insert_id+"' id='av_upload_jpg_"+insert_id+"' style=' float:left; opacity:0; width:80px; height:24px; cursor:pointer; position:absolute; z-index:10;' /><input type='button' class='sIE_r_img_file' name='jpg' style=' opacity:1; float:left; width:80px; text-align:center; height:24px; margin-top:8px; cursor:pointer; position:absolute; z-index:9;' value='浏览' /></div></form><button style='float:left; width:80px; height:24px; margin-top:5px; margin-top:38px; cursor:pointer;' onclick='av_jpg_upload_submit("+insert_id+")'>提交</button><div style='float:left; margin-left:5px;'><img id='lhpl_attribute_value_image_"+insert_id+"' src='<?php echo $this->_tpl_vars['av']['image']; ?>
' style='max-width:70px; max-height:70px; float:left; margin-right:10px; display:none;' /</div></td><td onClick='getDel_av(this,"+insert_id+")'><a href='#'>删除</a></td></tr>";
				  $("#av_table_add_"+group_value).append(table_value);
			  }              
			  
			  
		  }
	});
};

function change_order(attribute_value_id){
	var name = $("#order_"+attribute_value_id).val();
	
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_module/change_attribute_value_order',//通过Ajax取数据的目标页面
		data:{"name":name,"attribute_value_id":attribute_value_id},
		type:'get',//方法，还可以是"post"
		dataType:'text',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		{  			
							
		}								
		
	});
};

function change_cn_name(attribute_value_id){
	var name = $("#cn_name_"+attribute_value_id).val();
	
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_module/change_attribute_value_cn_name',//通过Ajax取数据的目标页面
		data:{"name":name,"attribute_value_id":attribute_value_id},
		type:'get',//方法，还可以是"post"
		dataType:'text',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		{  			
							
		}								
		
	});
};

function change_en_name(attribute_value_id){
	var name = $("#en_name_"+attribute_value_id).val();
	
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_module/change_attribute_value_en_name',//通过Ajax取数据的目标页面
		data:{"name":name,"attribute_value_id":attribute_value_id},
		type:'get',//方法，还可以是"post"
		dataType:'text',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		{  			
							
		}								
		
	});
};

function av_jpg_upload_submit(attribute_value_id){
	
	var formData = new FormData($('#av_upload_jpg_'+attribute_value_id)[0]);
	
	$.ajax({
		type: 'post',
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_module/upload_jpg-attribute_value_id-'+attribute_value_id,//通过Ajax取数据的目标页面
		data: formData,
		cache: false,
		processData:false,  
		contentType: false,  
		dataType:'json', 
	}).success(function (locals){
		locals=locals.split("|");
		$("#lhpl_attribute_value_image_"+locals[0]).css("display","block");
		$("#lhpl_attribute_value_image_"+locals[0]).attr("src", locals[1]);
			
			
	}).error(function(){ 
			
	});
	
}


function delSure(){
	var r = confirm("确认删除吗？");
	if(r==true){
		return true;
	}
	else{
		return false;
	}
}
function getDel_av(k,id){
	if(delSure() == true){
		$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_module/delete_attribute_value',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'attribute_value_id':id},
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					alert("删除成功！"); 
	
				}
		});
		$(k).parent().remove();  
	}
}

function attribute_list_value_btn(){
	$("#attribute_list_value").submit();
}

</script> 