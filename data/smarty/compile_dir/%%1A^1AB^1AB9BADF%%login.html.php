<?php /* Smarty version 2.6.22, created on 2024-10-15 16:16:16
         compiled from login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>小布涂涂ERP管理系统</title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-image:url(<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/login_bg.png);">
	<div class="loginK">
	  <div class="login_title">小布涂涂ERP管理系统</div>
	  <div class="login_k2">
      <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/login/login" method="post">
	    <div class="login_k2_tab">
	      <div class="login_k2_tab_l">User Name</div>
	      <div class="login_k2_tab_r">
	        <input type="text" class="loginTxt" name="user_name" />
	      </div>
	    </div>
        
        <div class="login_k2_tab">
	      <div class="login_k2_tab_l">Password</div>
	      <div class="login_k2_tab_r">
	        <input type="password" class="loginTxt" name="password" />
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