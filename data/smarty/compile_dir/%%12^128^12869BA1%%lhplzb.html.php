<?php /* Smarty version 2.6.22, created on 2023-05-30 11:24:30
         compiled from unfinishdesign/lhplzb.html */ ?>
<div class="pageContent">
  
    <div class="pageFormContent" layoutH="58">
      <form method="post" id="lhplzb" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
      <div style="float:left; width:200px; margin-left:5px;">
          <div style="float:left; width:100%; line-height:26px;">关联版图编号</div>
          <div style="float:left; width:100%;">
              <input type="text" size="30" id="design_content_code" name="design_content_code" class="required" value=""/>
          </div>
      </div>
      
      <div style="float:left; width:200px; margin-left:10px;">
          <div style="float:left; width:100%; line-height:26px;">关联设计员</div>
          <div style="float:left; width:100%;">
             <select id="design_user_name" class="combox required" name="design_user_name" >
              <option value="">请选择</option>
              <?php $_from = $this->_tpl_vars['design_user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
              <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
"><?php echo $this->_tpl_vars['du']['user_name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
      </div>
      
      <div style="float:left; width:100%; margin-top:5px;">
      	<div style="float:left; margin-left:5px; line-height:26px; width:60px;">钻版部位：</div>
        <div style="float:left;">
        	<input id="parts_1" type="checkbox" name="parts[]" value="前片" style="float:left; width:16px; height:16px; margin-left:10px; cursor:pointer;" />
            <label for="parts_1" style="float:left; line-height:26px; cursor:pointer; width:auto;">前片</label>
            
            <input id="parts_2" type="checkbox" name="parts[]" value="后片" style="float:left; width:16px; height:16px; margin-left:10px; cursor:pointer;" />
            <label for="parts_2" style="float:left; line-height:26px; cursor:pointer; width:auto;">后片</label>
            
            <input id="parts_3" type="checkbox" name="parts[]" value="袖子" style="float:left; width:16px; height:16px; margin-left:10px; cursor:pointer;" />
            <label for="parts_3" style="float:left; line-height:26px; cursor:pointer; width:auto;">袖子</label>
            
            <input id="parts_4" type="checkbox" name="parts[]" value="裙子" style="float:left; width:16px; height:16px; margin-left:10px; cursor:pointer;" />
            <label for="parts_4" style="float:left; line-height:26px; cursor:pointer; width:auto;">裙子</label>
            
            <input id="parts_5" type="checkbox" name="parts[]" value="裤子" style="float:left; width:16px; height:16px; margin-left:10px; cursor:pointer;" />
            <label for="parts_5" style="float:left; line-height:26px; cursor:pointer; width:auto;">裤子</label>
            
            <input id="parts_6" type="checkbox" name="parts[]" value="披肩" style="float:left; width:16px; height:16px; margin-left:10px; cursor:pointer;" />
            <label for="parts_6" style="float:left; line-height:26px; cursor:pointer; width:auto;">披肩</label>
        </div>
      </div>
	  </form>
      
      <form action="" id="lhplzb_file" method="post" enctype="multipart/form-data" >
      <div style="float:left; width:100%; margin-top:5px;">
      	<div style="float:left; margin-left:5px; line-height:26px; width:60px;">钻版源图：</div>
        <input type="file" name="upload_file" id="upload_file" style="float:left; width:200px; height:26px; margin-left:10px; cursor:pointer;" />
      </div>
      
      <div style="float:left; width:100%; margin-top:5px;">
      	<div style="float:left; margin-left:5px; line-height:26px; width:60px;">JPG图片：</div>
        <input type="file" name="upload_img" id="upload_img" style="float:left; width:200px; height:26px; margin-left:10px; cursor:pointer;" />
      </div>
      </form>
      
    </div> 
      
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button id="lhplzb_btn" type="button" >确认</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  
</div>
<script>
$(document).ready(function(){
	$("#lhplzb_btn").click(function(){

		var design_content_code = $('#design_content_code').val();
		var design_user_name = $('#design_user_name').val();
		
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/check_lhplzb',
			type:'post',
			data:{'design_content_code':design_content_code,'design_user_name':design_user_name},
			dataType:"text",
			success: function(data){
				if(data == 1){
					var formData = new FormData($('#lhplzb_file')[0]);
					$.ajax({
						type: 'post',
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/act_lhplzb_file',          
						data: formData,
						cache: false,
						processData:false,  
						contentType: false,  
						dataType:'text', 
					}).success(function (data_img){
						if(data_img == 1){
							$("#lhplzb").submit();
						}
						else{
							alert('请上传文件或图片');
						}
							
					}).error(function(){ 
						alert('图片上传失败');
					});
					
				}else{
					alert('版图编号与设计人员不符');	
				}
			}
		});	
	});
});

</script>