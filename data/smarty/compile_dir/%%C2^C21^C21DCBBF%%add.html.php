<?php /* Smarty version 2.6.22, created on 2016-05-30 11:00:47
         compiled from user/add.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone)"  >
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>用户名：</label>
        <input type="text" size="30" onchange="isChn(this.value)" name="user_name1" id="user_name1" value="<?php echo $this->_tpl_vars['userinfo']['user_name']; ?>
" alt="请输入用户名" class="required" remote="" />
        <input type="hidden" name="usergroupid" id="usergroupid" value="<?php echo $this->_tpl_vars['userinfo']['group_id']; ?>
"  />
        <input type="hidden" id="group_authority" value="<?php echo $this->_tpl_vars['userinfo']['authority']; ?>
" name="authority" />
        <input type="hidden" id="root" value="<?php echo $this->_tpl_vars['__ROOT__']; ?>
" />
        <span id="user_name1_result_new" class="error" style="display:none;"></span>
      </div>
       
      
      <div class="divider">divider</div>
      <div class="unit">
       <label>英文名：</label>
       <input type="text" size="30" name="english_name" id="english_name" value="<?php echo $this->_tpl_vars['userinfo']['english_name']; ?>
" alt="请输入英文名" class="required" />
       <span id="english_name_result_new" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>代码：</label>
       <input type="text" size="30" name="user_code" id="user_code" value="<?php echo $this->_tpl_vars['userinfo']['user_code']; ?>
" alt="请输入代码" class="required" remote="" />
       <span id="user_code_result_new" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>性别：</label>
       <input type="radio"  name="sex" id="sex" value="1" checked="checked" />男 <input type="radio"  name="sex" id="sex" value="2"  />女 
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>入职时间：</label>
       <input type="text"  name="entry_time" readonly="true"  class="date required" value="<?php echo $this->_tpl_vars['userinfo']['entry_time']; ?>
"/>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>生日：</label>
       <input type="text"  name="birthday" readonly="true"  class="date required" value="<?php echo $this->_tpl_vars['userinfo']['birthday']; ?>
"/>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>QQ：</label>
       <input type="text"  name="qq"   size="30" value="<?php echo $this->_tpl_vars['userinfo']['qq']; ?>
" alt="请输入QQ"  remote="" />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>邮箱：</label>
       <input type="text"  name="email" id="email"   size="30" value="<?php echo $this->_tpl_vars['userinfo']['email']; ?>
" alt="请输入邮箱" class="required email" remote="" />
       <span id="email_result_new" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>移动电话：</label>
       <input type="text"  name="cellphone"   size="30" value="<?php echo $this->_tpl_vars['userinfo']['cellphone']; ?>
" alt="请输入移动电话" class="phone"  remote="" />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>固定电话：</label>
       <input type="text"  name="telephone"   size="30" value="<?php echo $this->_tpl_vars['userinfo']['telephone']; ?>
" alt="请输入固定电话" class="phone" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>选择地址：</label>
       <select class="combox" name="address">
                <option value="">全部</option>
              	<option value="大连" <?php if ($this->_tpl_vars['address'] == '大连'): ?>selected="selected"<?php endif; ?>>大连</option>
                <option value="喀左" <?php if ($this->_tpl_vars['address'] == '喀左'): ?>selected="selected"<?php endif; ?>>喀左</option>
       </select>
       </div>
       <div class="divider">divider</div>
      
      <?php if ($this->_tpl_vars['user_info']['group_name'] == '超级管理员' || $this->_tpl_vars['user_info']['group_name'] == '经理'): ?>
      
      <div class="unit">
       <label>选择用户组：</label>
       <select name="choose_user_group" class="combox">
        <?php $_from = $this->_tpl_vars['groupss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gr']):
?>
        <option value="<?php echo $this->_tpl_vars['gr']['group_id']; ?>
" <?php if ($this->_tpl_vars['userinfo']['group_id'] == $this->_tpl_vars['gr']['group_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['gr']['group_name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
       </select>
      </div>
      <?php endif; ?>
      <!--<div class="divider">divider</div>
      
      <div class="unit">
       <label style="float:left; width:100px;">管理用户组：</label>
       <div style="width:300px; float:left;">
       
       
       <?php $_from = $this->_tpl_vars['groupss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gr']):
?>
       <div style="width:100px; float:left;">
       <input name="manage_group[]" type="checkbox" value="<?php echo $this->_tpl_vars['gr']['group_id']; ?>
" /><?php echo $this->_tpl_vars['gr']['group_name']; ?>

       </div>
       <?php endforeach; endif; unset($_from); ?>
       </div>-->

      <div class="divider">divider</div>
      <div class="unit" id="little_g" <?php if ($this->_tpl_vars['usergroup_info']['group_id'] != '53' || $this->_tpl_vars['usergroup_info']['group_id'] != '68'): ?> style="display:none"<?php endif; ?> >
       <label>销售小组：</label>
       <select name="choose_little_group" class="combox"  >
       <option value=""></option>
        <option value="A0" <?php if ($this->_tpl_vars['usergroup_info']['little_group'] == 'A0'): ?> selected="selected" <?php endif; ?>>销售1部主管</option>
        <option value="A1" <?php if ($this->_tpl_vars['usergroup_info']['little_group'] == 'A1'): ?> selected="selected" <?php endif; ?>>销售1部业务</option>
        <option value="B0" <?php if ($this->_tpl_vars['usergroup_info']['little_group'] == 'B0'): ?> selected="selected" <?php endif; ?>>销售2部主管</option>
        <option value="B1" <?php if ($this->_tpl_vars['usergroup_info']['little_group'] == 'B1'): ?> selected="selected" <?php endif; ?>>销售2部业务</option>
        <option value="C0" <?php if ($this->_tpl_vars['usergroup_info']['little_group'] == 'C0'): ?> selected="selected" <?php endif; ?>>销售3部主管</option>
        <option value="C1" <?php if ($this->_tpl_vars['usergroup_info']['little_group'] == 'C1'): ?> selected="selected" <?php endif; ?>>销售3部业务</option>
        <option value="D0" <?php if ($this->_tpl_vars['usergroup_info']['little_group'] == 'D0'): ?> selected="selected" <?php endif; ?>>销售4部主管</option>
        <option value="D1" <?php if ($this->_tpl_vars['usergroup_info']['little_group'] == 'D1'): ?> selected="selected" <?php endif; ?>>销售4部业务</option>
       </select>
      </div>
      <!--<div class="divider">divider</div>
      
      <div class="unit">
       <label style="float:left; width:100px;">管理用户组：</label>
       <div style="width:300px; float:left;">
       
       
       <?php $_from = $this->_tpl_vars['groupss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gr']):
?>
       <div style="width:100px; float:left;">
       <input name="manage_group[]" type="checkbox" value="<?php echo $this->_tpl_vars['gr']['group_id']; ?>
" /><?php echo $this->_tpl_vars['gr']['group_name']; ?>

       </div>
       <?php endforeach; endif; unset($_from); ?>
       </div>-->

      <div class="divider">divider</div>
	  
            
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button"  id="submit_add">确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">

function kkk(){
	var chk_value =[];
	var json = arguments[0], result="";
//	alert(json.checked);

	$(json.items).each(function(i){
		result += "<p>name:"+this.name + " value:"+this.value+" text: "+this.text+","+"</p>";
		
	});
	
	$(".ckbox.checked>input").each(function(){    
	   chk_value.push($(this).val());    
	});  
	$("#group_authority").val(chk_value);
	
	$("#resultBox").html(result);
	
}

var chk_value =[];

var root = $('#root').val();    
/*$("#submit1").click(function (){
	var user_group_name = $("#user_group_name1").val();

	$(".ckbox.checked>input").each(function(){    
	   chk_value.push($(this).val());    
	});   

	$.ajax({
		url: root+'/usergroup/act_add-group_authority-' + chk_value+'-group_name-'+user_group_name+'.html',
		dataType: 'json',
	});
});*/


$(document).ready(function()  
{
	//判断是否为中文
	function isChn(str){ 
		var reg = /^[\u4E00-\u9FA5]+$/; 
		if(reg.test(str)){ 
			return true;
			
		}else{
			return false;
		}
		
	}
	//判断是否为字母
	function isAz(str){ 
		var reg = /[_a-zA-Z]/; 
		if(reg.test(str)){ 
			return true;
			
		}else{
			return false;
		}
		
	}
	//判断是否存在空格
	function isEmpty(str){
		var arr = new Array();

		arr = str.split(" ");
		
		if(arr.length != 1){
			return true;
		}else{
			false;
		}
	}
	
	$("#submit_add").click(function (){
		
			if(!isChn($('#user_name1').val())){
				$('#user_name1_result_new').css("display","block");
				$('#user_name1_result_new').css("background-color","#FF0000");
				$('#user_name1_result_new').css("color","#FFF");
				$('#user_name1_result_new').html('必须为中文且不可包含空格');
			}
			else if(!isAz($('#english_name').val()) || isEmpty($('#english_name').val())){
				$('#user_name1_result_new').css("display","none");
				$('#english_name_result_new').css("display","block");
				$('#english_name_result_new').css("background-color","#FF0000");
				$('#english_name_result_new').css("color","#FFF");
				$('#english_name_result_new').html('必须为英文且不可包含空格');
			}
			
			else if(isEmpty($('#user_code').val())){
				$('#user_name1_result_new').css("display","none");
				$('#english_name_result_new').css("display","none");
				
				$('#user_code_result_new').css("display","block");
				$('#user_code_result_new').css("background-color","#FF0000");
				$('#user_code_result_new').css("color","#FFF");
				$('#user_code_result_new').html('不可包含空格');
			}
			
			else{
				$('#english_name_result_new').css("display","none");
				
				if($("#user_name1_result_new").is(":visible")){
					
				}
				else if($("#user_code_result_new").is(":visible")){
					
				}
				else if($("#email_result_new").is(":visible")){
					
				}
				else{		
					$("#user_name1_result_new").css("display","none");
					$("#user_code_result_new").css("display","none");
					$("#email_result_new").css("display","none");
					$("#user_name1").submit();
				}
			
			}
			
		});
		
	
	$('input').blur(function(){
	    var usergroupid = $("#usergroupid").val();
	    if(this.id == 'user_name1'){
			if(this.value==''){
				$('#user_name1_result_new').css("display","none");
			}
			else{
				$('#user_name1_result_new').html('');
				p='user_name1='+this.value+'&usergroupid='+usergroupid;
     			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/select_user_name',
					type:'post',
					 dataType:'json',
					 data:p,
					 success:select_user_name
			    });
			}
		}
		
		if(this.id == 'user_code'){
			if(this.value==''){
				$('#user_code_result_new').css("display","none");
			}
			else{
				$('#user_code_result_new').html('');
				p='user_code='+this.value+'&usergroupid='+usergroupid;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/select_code',type:'post', dataType:'json',data:p,success:select_code_back});
			}
		}
		
		if(this.id == 'email'){
			if(this.value==''){
				$('#email_result_new').css("display","none");
			}
			else{
				$('#email_result_new').html('');
				p='email='+this.value+'&usergroupid='+usergroupid;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/select_email',type:'post', dataType:'json',data:p,success:select_email_back});
			}
		}
		
		//销售小组显示的js
		$("#select_u_g").change(function(){
			if($("#select_u_g").val()=='53' || ("#select_u_g").val()=='68'){
				$("#little_g").css("display","block");
			}else{
				$("#little_g").css("display","none");
			}	
		});
		
	
	
		
	});	
});

function select_user_name(data)
	{
		if(data >= 1)
		{
			$('#user_name1_result_new').css("display","block");
			$('#user_name1_result_new').css("background-color","#FF0000");
			$('#user_name1_result_new').css("color","#FFF");
			$('#user_name1_result_new').html('该用户名已存在');
		}
		else
		{
			$('#user_name1_result_new').css("display","none");
			$('#user_name1_result_new').css("background-color","#6F0");
			$('#user_name1_result_new').css("color","#000");
			$('#user_name1_result_new').html('该用户名可以使用');
		}
	}
	
	function select_code_back(data)
	{
		if(data >= 1)
		{
			$('#user_code_result_new').css("display","block");
			$('#user_code_result_new').css("background-color","#FF0000");
			$('#user_code_result_new').css("color","#FFF");
			$('#user_code_result_new').html('该代码已存在');
		}
		else
		{
			$('#user_code_result_new').css("display","none");
			$('#user_code_result_new').css("background-color","#6F0");
			$('#user_code_result_new').css("color","#000");
			$('#user_code_result_new').html('该代码可以使用');
		}
	}
	
	function select_email_back(data)
	{
		if(data >= 1)
		{
			$('#email_result_new').css("display","block");
			$('#email_result_new').css("background-color","#FF0000");
			$('#email_result_new').css("color","#FFF");
			$('#email_result_new').html('该邮箱已被使用');
		}
		else
		{
			$('#email_result_new').css("display","none");
			$('#email_result_new').css("background-color","#6F0");
			$('#email_result_new').css("color","#000");
			$('#email_result_new').html('该邮箱可以使用');
		}
	}


</script> 
<!-- {/literal} -->