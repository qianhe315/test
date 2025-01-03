<?php /* Smarty version 2.6.22, created on 2015-06-12 15:37:16
         compiled from change_password.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改密码</title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-image:url(<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/login_bg.png);">
	<div class="loginK">
	  <div class="login_title">修改密码</div>
	  <div class="login_k2">
      <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/login/change_update_index" method="post">
	    <div class="login_k2_tab">
	      <div class="login_k2_tab_l">新密码：</div>
	      <div class="login_k2_tab_r">
	        <input type="" class="loginTxt" name="password" value="" />
	      </div>
	    </div>
        
        <div class="login_k2_tab">
	      <div class="login_k2_tab_l">确认新密码</div>
	      <div class="login_k2_tab_r">
	        <input type="" class="loginTxt" name="check_password" />
	      </div>
	    </div>
        
	  </div>
	  <div class="login_btnK">
	    <input type="reset" value="Cancel" class="loginBtn" />
        <input type="submit" value="OK" class="loginBtn" />
	  </div>
      </form>
	</div>
</body>
</html>