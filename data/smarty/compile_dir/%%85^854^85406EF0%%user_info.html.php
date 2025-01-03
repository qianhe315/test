<?php /* Smarty version 2.6.22, created on 2013-09-10 14:43:49
         compiled from user_info.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>用户名：</label>
        <input type="text" name="user_name1" size="30" value="<?php echo $this->_tpl_vars['userinfo']['user_name']; ?>
" readonly="readonly" />
        <input type="hidden" name="uuid" value="<?php echo $this->_tpl_vars['userinfo']['user_id']; ?>
" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>英文名：</label>
        <input type="text" size="30" name="english_name" id="english_name" value="<?php echo $this->_tpl_vars['userinfo']['english_name']; ?>
" alt="请输入英文名" class="required" /><span id="english_name_notice" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>代码：</label>
        <input type="text" size="30" name="user_code" id="user_code" value="<?php echo $this->_tpl_vars['userinfo']['user_code']; ?>
" alt="请输入代码" class="required" remote="" /><span id="user_code_notice" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>性别：</label>
        <input type="radio"  name="sex" id="sex" value="1" <?php if ($this->_tpl_vars['userinfo']['sex'] == '1'): ?> checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['userinfo']['sex'] == ''): ?> checked="checked"<?php endif; ?> />
        男
        <input type="radio"  name="sex" id="sex" value="2" <?php if ($this->_tpl_vars['userinfo']['sex'] == '2'): ?> checked="checked"<?php endif; ?> />
        女 </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>生日：</label>
        <input type="text"  name="birthday" class="date required" readonly="true" value="<?php echo $this->_tpl_vars['userinfo']['birthday']; ?>
" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>QQ：</label>
        <input type="text"  name="qq"  id="qq"  size="30" value="<?php echo $this->_tpl_vars['userinfo']['qq']; ?>
" alt="请输入QQ" class="required" remote="" /><span id="qq_notice" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>邮箱：</label>
        <input type="text"  name="email" id="email" size="30" value="<?php echo $this->_tpl_vars['userinfo']['email']; ?>
" alt="请输入邮箱" class="required email" remote="" />
        <span id="email_notice" class="error" style="display:none;"></span>
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
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit">提交</button>
            </div>
          </div>
        </li>
        <li>
          <div class="button">
            <div class="buttonContent">
              <button type="button" class="close">取消</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </form>
</div>
<!-- {literal} --> 
<script type="text/javascript">
function customvalidPwd(element){
	if ($(element).val() == "111111") return false;
	return true;
}

$(document).ready(function()  
{
	$('input').blur(function(){
     
   		if(this.id == 'english_name'){
			if(this.value==''){
				
			}
			else{
				$('#english_name_notice').html('');
				p='english_name='+this.value;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_english_name',type:'post', dataType:'json',data:p,success:check_english_name_back});
			}
		}
		
		if(this.id == 'user_code'){
			if(this.value==''){
				
			}
			else{
				$('#user_code_notice').html('');
				p='user_code='+this.value;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_user_code',type:'post', dataType:'json',data:p,success:check_user_code_back});
			}
		}
		
		if(this.id == 'qq'){
			if(this.value==''){
				
			}
			else{
				$('#qq_notice').html('');
				p='qq='+this.value;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_qq',type:'post', dataType:'json',data:p,success:check_qq_back});
			}
		}
		
		
		if(this.id == 'email'){
			if(this.value==''){
				
			}
			else{
				$('#email_notice').html('');
				p='email='+this.value;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_email',type:'post', dataType:'json',data:p,success:check_email_back});
			}
		}
		
		
		
	});
	
	
	
});

	function check_qq_back(data)
	{
		if(data == 1)
		{
			$('#qq_notice').css("display","block");
			$('#qq_notice').css("background-color","#FF0000");
			$('#qq_notice').css("color","#FFF");
			$('#qq_notice').html('该QQ已经被使用');
		}
		else
		{
			$('#qq_notice').css("display","block");
			$('#qq_notice').css("background-color","#6F0");
			$('#qq_notice').css("color","#000");
			$('#qq_notice').html('该QQ可以使用');
		}
	}
	function check_email_back(data)
	{
		if(data == 1)
		{
			$('#email_notice').css("display","block");
			$('#email_notice').css("background-color","#FF0000");
			$('#email_notice').css("color","#FFF");
			$('#email_notice').html('该邮箱已经被使用');
		}
		else
		{
			$('#email_notice').css("display","block");
			$('#email_notice').css("background-color","#6F0");
			$('#email_notice').css("color","#000");
			$('#email_notice').html('该邮箱可以使用');
		}
	}
	
	function check_english_name_back(data)
	{
		if(data == 1)
		{
			$('#english_name_notice').css("display","block");
			$('#english_name_notice').css("background-color","#FF0000");
			$('#english_name_notice').css("color","#FFF");
			$('#english_name_notice').html('该英文名已经被使用');
		}
		else
		{
			$('#english_name_notice').css("display","block");
			$('#english_name_notice').css("background-color","#6F0");
			$('#english_name_notice').css("color","#000");
			$('#english_name_notice').html('该英文名可以使用');
		}
	}
	
	function check_user_code_back(data)
	{
		if(data == 1)
		{
			$('#user_code_notice').css("display","block");
			$('#user_code_notice').css("background-color","#FF0000");
			$('#user_code_notice').css("color","#FFF");
			$('#user_code_notice').html('该代码已经被使用');
		}
		else
		{
			$('#user_code_notice').css("display","block");
			$('#user_code_notice').css("background-color","#6F0");
			$('#user_code_notice').css("color","#000");
			$('#user_code_notice').html('该代码可以使用');
		}
	}
	
</script> 
<!-- {/literal} -->