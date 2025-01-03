<?php /* Smarty version 2.6.22, created on 2013-09-27 16:09:22
         compiled from changepassword.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm required-validate" id="cp_yuanPassword_form" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>用户名：</label>
        <input type="text" name="user_name1" size="30" value="<?php echo $this->_tpl_vars['username']; ?>
" readonly="readonly" />
        <input type="hidden" name="uuid" value="<?php echo $this->_tpl_vars['uuid']; ?>
" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>原密码：</label>
        <input type="password" size="30" name="yuanPassword" id="cp_yuanPassword" value="<?php echo $this->_tpl_vars['userinfo']['english_name']; ?>
" class="required alphanumeric" minlength="6" maxlength="20"/>
      </div>      
      <div class="divider">divider</div>
      <div class="unit">
        <label>新密码：</label>
        <input type="password" size="30" name="newPassword" id="cp_newPassword" value="<?php echo $this->_tpl_vars['userinfo']['english_name']; ?>
" class="required alphanumeric" minlength="6" maxlength="20"/>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>再次重复密码：</label>
        <input type="password" size="30" name="rnewPassword" equalTo="#cp_newPassword" class="required alphanumeric" />
      </div>

    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit">确定</button>
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
<script type="text/javascript" language="javascript">
$(document).ready(function()  
{
	$("#submit").click(function(){
		var cp_yuanPassword = $("#cp_yuanPassword").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/login/yuanpassword',//通过Ajax取数据的目标页面
			data:{"yuanpassword":cp_yuanPassword},
			type:'post',//方法，还可以是"post"
			dataType:'text',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
                if(locals==1){
					$("#cp_yuanPassword_form").submit();
				}else{
					alert("原密码错误！");
				}
			}								
			
		});	
		
		
	});
});	
</script>   
<script type="text/javascript">
function customvalidPwd(element){
	if ($(element).val() == "111111") return false;
	return true;
}
</script> 
<!-- {/literal} -->