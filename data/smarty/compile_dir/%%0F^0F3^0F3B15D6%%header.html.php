<?php /* Smarty version 2.6.22, created on 2013-03-06 08:53:05
         compiled from common/header.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>西象ERP管理系统</title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/login.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/app.js" type="text/javascript"></script>
</head>

<body style="background:#497fad;" >
<div class="ManageK">
  <div class="Manage">
    <div class="Manage_title">
      <div class="Manage_title_l">西象ERP管理系统</div>
      <div class="Manage_title_r"><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
,欢迎您！您属于：<?php echo $this->_tpl_vars['user_info']['group_name']; ?>
 <a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/login/user_center">个人信息</a> <a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/login/logout">安全退出</a></div>
    </div>
  </div>
  <div class="main-nav">
    <div class="categorymenu">
      <ul>
        <li class="departments1"> <a class="" href="#"> <span> 销售管理 </span> </a>
          <div class="submenu1">
            <div class="submenuTab">
              <div class="submenuTab_t"></div>
              <div class="submenuTab_c">
                <ul>
                  <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer/">客户信息管理</a></li>
                  <li><a href="#">报价</a></li>
                  <li><a href="#">订单</a></li>
                  <li><a href="#">发票</a></li>
                </ul>
              </div>
              <div class="submenuTab_d"></div>
            </div>
          </div>
          <!-- END: SUBNAV --> 
        </li>
        <li class="departments2"> <a class="" href="#"> <span> 设计管理 </span> </a>
          <div class="submenu2">
            <div class="submenuTab">
              <div class="submenuTab_t"></div>
              <div class="submenuTab_c">
                <ul>
                  <li><a href="#">未完成设计</a></li>
                  <li><a href="#">未检验设计</a></li>
                  <li><a href="#">已完成设计</a></li>
                </ul>
              </div>
              <div class="submenuTab_d"></div>
            </div>
          </div>
        </li>
        <li class="departments3"> <a class="" href="#"> <span> 工厂管理 </span> </a>
          <div class="submenu3">
            <div class="submenuTab">
              <div class="submenuTab_t"></div>
              <div class="submenuTab_c">
                <ul>
                  <li><a href="#">订单信息</a></li>
                  <li><a href="#">仓库信息</a></li>
                  <li><a href="#">制版信息</a></li>
                  <li><a href="#">采购信息</a></li>
                </ul>
              </div>
              <div class="submenuTab_d"></div>
            </div>
          </div>
        </li>
        <li class="departments4"> <a class="" href="#"> <span> 财务管理 </span> </a>
          <div class="submenu4">
            <div class="submenuTab">
              <div class="submenuTab_t"></div>
              <div class="submenuTab_c">
                <ul>
                  <li><a href="#">收款登记</a></li>
                </ul>
              </div>
              <div class="submenuTab_d"></div>
            </div>
          </div>
        </li>
        <li class="departments5"> <a class="" href="#"> <span> 电商管理 </span> </a>
          <div class="submenu5">
            <div class="submenuTab">
              <div class="submenuTab_t"></div>
              <div class="submenuTab_c">
                <ul>
                  <li><a href="#">流量登记</a></li>
                </ul>
              </div>
              <div class="submenuTab_d"></div>
            </div>
          </div>
        </li>
        
        <li class="departments6"> <a class="" href="#"> <span> 账户管理 </span> </a>
          <div class="submenu6">
            <div class="submenuTab">
              <div class="submenuTab_t"></div>
              <div class="submenuTab_c">
                <ul>
                  <li><a href="#">部门管理</a></li>
                  <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/usergroup/index">用户组管理</a></li>
                  <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/index">用户管理</a></li>
                </ul>
              </div>
              <div class="submenuTab_d"></div>
            </div>
          </div>
        </li>
        
        <li class="departments7"> <a class="" href="#"> <span> 报表总汇 </span> </a>
          <div class="submenu7">
            <div class="submenuTab">
              <div class="submenuTab_t"></div>
              <div class="submenuTab_c">
                <ul>
                  <li><a href="#">销售明细</a></li>
                  <li><a href="#">成本明细</a></li>
                  <li><a href="#">报表汇总</a></li>
                </ul>
              </div>
              <div class="submenuTab_d"></div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <!-- END: CATEGORY-MENU --> 
  </div>
</div>