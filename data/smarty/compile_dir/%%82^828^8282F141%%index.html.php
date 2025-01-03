<?php /* Smarty version 2.6.22, created on 2024-10-16 16:10:05
         compiled from index/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=7" />
  <title>小布涂涂ERP管理系统</title>
  <link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/themes/default/style.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/themes/css/core.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
  <link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/uploadify/css/uploadify.css" rel="stylesheet" type="text/css" media="screen"/>
  <!--[if IE]>
  <link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
  <![endif]-->

  <!--[if lte IE 9]>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/speedup.js" type="text/javascript"></script>
  <![endif]-->

  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery.validate.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery.bgiframe.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/xheditor/xheditor-1.1.14-zh-cn.min.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/uploadify/scripts/jquery.uploadify.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/highcharts.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/highcharts.src.js" type="text/javascript"></script>
  <!--<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/index.js" type="text/javascript"></script>-->

  <!-- svg图表  supports Firefox 3.0+, Safari 3.0+, Chrome 5.0+, Opera 9.5+ and Internet Explorer 6.0+ -->
  <!--<script type="text/javascript" src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/chart/raphael.js"></script>
  <script type="text/javascript" src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/chart/g.raphael.js"></script>
  <script type="text/javascript" src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/chart/g.bar.js"></script>
  <script type="text/javascript" src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/chart/g.line.js"></script>
  <script type="text/javascript" src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/chart/g.pie.js"></script>
  <script type="text/javascript" src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/chart/g.dot.js"></script>-->
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.core.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.util.date.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.validate.method.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.regional.zh.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.barDrag.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.drag.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.tree.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.accordion.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.ui.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.theme.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.switchEnv.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.alertMsg.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.contextmenu.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.navTab.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.tab.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.resize.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.dialog.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.dialogDrag.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.sortDrag.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.cssTable.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.stable.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.taskBar.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.ajax.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.pagination.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.database.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.datepicker.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.effects.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.panel.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.checkbox.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.history.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.combox.js" type="text/javascript"></script>
  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.print.js" type="text/javascript"></script>
  <!--
  <script src="bin/dwz.min.js" type="text/javascript"></script>
  -->

  <script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/dwz.regional.zh.js" type="text/javascript">
  </script>
  <script type="text/javascript">
    /*  window.onbeforeunload = onbeforeunload_handler;
     window.onunload = onunload_handler;
     function onbeforeunload_handler() {
         $.ajax({
                type: 'GET',
                url: '<?php echo $this->_tpl_vars['__ROOT__']; ?>
/login/logout'
              });
     }

     function onunload_handler() {
         $.ajax({
              type: 'GET',
              url: '<?php echo $this->_tpl_vars['__ROOT__']; ?>
/login/logout'
            });
     } */
  </script>
  <!-- {literal} -->

  <script type="text/javascript">
    $(function(){
      var xxx = './dwz.frag.xml';
      //alert(xxx);
      DWZ.init(xxx, {
        loginUrl:"login_dialog.html", loginTitle:"登录",	// 弹出登录对话框
//		loginUrl:"login.html",	// 跳到登录页面
        statusCode:{ok:200, error:300, timeout:301}, //【可选】
        pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"orderField", orderDirection:"orderDirection"}, //【可选】
        debug:false,	// 调试模式 【true|false】
        callback:function(){
          initEnv();
          $("#themeList").theme({themeBase:"../public/themes"}); // themeBase 相对于index页面的主题base路径
        }
      });
    });
  </script>
  <!-- {/literal} -->
  <script type="text/javascript">
    <!--
    document.oncontextmenu=function(e){return false;}
    //-->
  </script>
</head>

<!--<body scroll="no" oncontextmenu="self.event.return=false"; onselectstart="return false" onload="keyy()">-->
<!--<body onload="keyy()">-->
<body>
<div id="layout">
  <div id="header">
    <div class="headerNav">
      <div class="ManageK">
        <div style=" color: #FFFFFF;float: left; font-size: 20px; height: 50px;line-height: 50px; margin-left: 20px;">小布涂涂ERP管理系统 </div>
        <div class="main-nav">
          <div class="categorymenu"></div>
          <!-- END: CATEGORY-MENU -->
        </div>
        <?php if (isset ( $this->_tpl_vars['password'] )): ?>
        <div style="float:left; color:#F00; margin-left:220px; line-height:50px; font-size:18px; font-weight:bold;">您的密码为初始密码，为了安全起见请尽快<a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/login/changepassword" target="dialog" style="color:#F00; font-size:18px; font-weight:bold; text-decoration:underline;">修改</a>!</div>
        <?php endif; ?>
        <ul class="nav">
          <li style="color: #B9CCDA;"><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
,欢迎您！</li>
          <li style="color: #B9CCDA;">您属于：<?php echo $this->_tpl_vars['user_info']['group_name']; ?>
</li>
          <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/login/user_center" target="dialog" width="600">个人中心</a></li>
          <?php if ($this->_tpl_vars['user_hidden']['group_id'] == 5): ?>
          <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/login/changepassword" target="dialog" width="600">修改密码</a></li>
          <?php endif; ?>
          <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/login/logout"> 安全退出</a></li>
        </ul>
        <ul class="themeList" id="themeList">
          <li theme="default">
            <div class="selected">蓝色</div>
          </li>
          <li theme="green">
            <div>绿色</div>
          </li>
          <!--<li theme="red"><div>红色</div></li>-->
          <li theme="purple">
            <div>紫色</div>
          </li>
          <li theme="silver">
            <div>银色</div>
          </li>
          <li theme="azure">
            <div>天蓝</div>
          </li>
        </ul>
      </div>
    </div>

    <!-- navMenu -->

  </div>
  <!--密码为默认，不显示主列表，-->
  <?php if (isset ( $this->_tpl_vars['password'] )): ?>
  <?php else: ?>
  <div id="leftside">
    <div id="sidebar_s">
      <div class="collapse">
        <div class="toggleCollapse">
          <div></div>
        </div>
      </div>
    </div>
    <div id="sidebar">
      <div class="toggleCollapse">
        <h2>主菜单</h2>
        <div>收缩</div>
      </div>
      <div class="accordion" fillSpace="sidebar"> <?php if ($this->_tpl_vars['kehuguanli'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>客户管理</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder">
            <?php if ($this->_tpl_vars['wangzhanxunpanzhuru'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_inquiries_into/index" target="navTab" rel="web_inquiries_into" fresh="true" >网站询盘注入</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['zuixinxunpanneirong'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/inquiry_content/index" target="navTab" rel="inquiry_content" fresh="true" >市场营销咨询</a></li>
            <?php if ($this->_tpl_vars['user_hidden']['user_id'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/inquiry_content/mql_list" target="navTab" rel="mql_list" fresh="true" >MQL孵化列表</a></li>
            <?php endif; ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/inquiry_content/clue_list" target="navTab" rel="clue_list" fresh="true" >线索列表</a></li>
            <?php if ($this->_tpl_vars['user_hidden']['user_id'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/inquiry_content/clue_list-mqa-1" target="navTab" rel="mqa_list" fresh="true" >MQA孵化列表</a></li>
            <?php endif; ?>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['kehuxiadanlv'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_rate/index" target="navTab" rel="customer_order_rate" fresh="true" >客户下单率</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['xunpanguanli'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/index-flag-1" target="navTab" rel="quotecustomer_list" fresh="true" >客户列表</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/index" target="navTab" rel="quotecustomer" fresh="true" >客户管理</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['kaifakehuguanli'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/index" target="navTab" rel="newcustomer" fresh="true" >未成交客户</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['laokehuguanli'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/oldcustomer/index" target="navTab" rel="oldcustomer" fresh="true" >已成交客户</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['user_hidden']['user_id'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/index-clue-1" target="navTab" rel="cluecustomer" fresh="true" >培育客户</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['wuxiaokehuchi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/index-customerstatus-2.html" target="navTab" rel="quotecustomer_wuxiao" fresh="true" >无效客户</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['gongsikehuchi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/index-customerstatus-3.html" target="navTab" rel="quotecustomer_gonggong" fresh="true" >公共客户</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['kehuxinxijiansuo'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/findcustomer/index" target="navTab" rel="findcustomer" fresh="true" >客户信息检索</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['kehuziyuanhuishouzhan'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_recycling/index" target="navTab" rel="customer_recycling" fresh="true" >客户资源回收站</a></li>
            <?php endif; ?>
            <!--<?php if ($this->_tpl_vars['kehuhezhuomingxi'] == 1): ?>     
           
           <?php endif; ?>-->
            <?php if ($this->_tpl_vars['kehuziyuanfenpeiqingkuang'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_resources/index" target="navTab" rel="customer_resources" fresh="true" >客户资源分配情况</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['piliangchaxunkehuxinxi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/batch_findcustomer/index" target="navTab" rel="batch_findcustomer" fresh="true" >批量查询客户信息</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['kehuhezuomingxi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_cooperation_details/index" target="navTab" rel="customer_cooperation_details" fresh="true" >客户合作明细</a></li>
            <?php endif; ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_transaction/index" target="navTab" rel="customer_transaction" fresh="true" >客户成交查询</a></li>

            <!--<?php if ($this->_tpl_vars['kehuzhekouguanli'] == 1): ?>
           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_discount_management/index" target="navTab" rel="customer_discount_management" fresh="true" >客户折扣管理</a></li>
           <?php endif; ?>-->
          </ul>
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['shejiguanli'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>设计管理</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder">
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/finishdesign/index-all_design-1" target="navTab" rel="alldesign" fresh="true">全部设计</a></li>
            <?php if ($this->_tpl_vars['weifenpeisheji'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unassigneddesign/index" target="navTab" rel="unassigneddesign" fresh="true" >未分配设计</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['weiwanchengsheji'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/index" target="navTab" rel="unfinishdesign" fresh="true" >未完成设计</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['weijianyansheji'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/uncheckdesign/index" target="navTab" rel="uncheckdesign" fresh="true">未检验设计</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['yiwanchengsheji'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/finishdesign/index" target="navTab" rel="finishdesign" fresh="true">已完成设计</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/revieweddesign/index" target="navTab" rel="revieweddesign" fresh="true">已审核设计</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/paiddesign/index" target="navTab" rel="paiddesign" fresh="true">已付款设计</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['shejitushuliangluru'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_number_entering/index" target="navTab" rel="design_number_entering" fresh="true">设计图数量录入</a></li>
            <?php endif; ?>



            <?php if ($this->_tpl_vars['tupianfenleiguanli'] == 1): ?>
            <li><a href="#">图片分类管理</a>
              <ul>
                <?php if ($this->_tpl_vars['laiyuanfenlei'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picture_type/index" target="navTab" rel="picture_type" fresh="true" >图片分类处理</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['shejishezhi'] == 1): ?>
                <li><a href="#" >设置</a>
                  <ul>
                    <?php if ($this->_tpl_vars['shuxingfenlei'] == 1): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nature_classify/index" target="navTab" rel="nature_classify" fresh="true" >属性分类</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['laiyuanfenlei'] == 1): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/come_classify/index" target="navTab" rel="come_classify" fresh="true" >来源分类</a></li>
                    <?php endif; ?>
                  </ul>
                </li>
                <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['linghuopinlei'] == 1): ?>
            <li><a href="#">灵活品类</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_category/index" target="navTab" rel="lhpl_category" fresh="true" >灵活品类管理</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_module/index" target="navTab" rel="lhpl_module" fresh="true" >灵活品类-模块管理</a></li>
              </ul>
            </li>
            <?php endif; ?>
            
            <?php if ($this->_tpl_vars['shejizongshezhi'] == 1): ?>
            <li><a href="#">设置</a>
              <ul>
              	<?php if ($this->_tpl_vars['weijianyanshenpiguanli'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/uncheckdesign_shezhi/index" target="navTab" rel="uncheckdesign_shezhi" fresh="true" >未检验审批管理</a></li>
                <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>
            
          </ul>
        </div>
        <?php endif; ?>


        <?php if ($this->_tpl_vars['xiaoshouguanli'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>销售管理</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder collapse">
            <li><a href="#">版权库</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/copyright_gallery/index" target="navTab" rel="copyright_gallery" fresh="true" >版权图库</a></li>
                <!--<li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/infringement_detection/index" target="navTab" rel="Infringement_detection" fresh="true" >侵权图检测</a></li>-->
              </ul>
            </li>
            <li><a href="#">报价</a>
              <ul>
                <li><a href="#" >报价单</a>
                  <ul>
                    <?php if ($this->_tpl_vars['tangtubaojiadan'] == 1): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/index" target="navTab" rel="hotfix_quotation" fresh="true" >烫图报价单</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['cailiaobaojiadan'] == 1): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/index" target="navTab" rel="rhinestone_quotation" fresh="true" >材料报价单</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['cdrbaojiadan'] == 1): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/index" target="navTab" rel="cdr_quotation" fresh="true" >CDR报价单</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['mobanbaojiadan'] == 1): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/index" target="navTab" rel="template_quotation" fresh="true" >模版报价单</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['Txuzhipenbaojia'] == 1): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/index" target="navTab" rel="t_shirt_quotation" fresh="true" >T恤直喷报价</a></li>
                    <?php endif; ?>
                    <!--<?php if ($this->_tpl_vars['zhijiatiebaojiadan'] == 1): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/index" target="navTab" rel="nailPaste_quotation" fresh="true" >指甲贴报价单</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['baojiadan601'] == 1): ?> 
                             <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/index" target="navTab" rel="six_quotation" fresh="true" >601报价单</a></li>     
                        	<?php endif; ?>-->
                  </ul>
                </li>
                <li><a href="#" >外发单</a>
                  <ul>
                    <?php if ($this->_tpl_vars['waifaxunjiadan'] == 1): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/index" target="navTab" rel="outgoing_inquiry_sheet" fresh="true" >外发询价单</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['waifabaojiadan'] == 1): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_quotation_sheet/index" target="navTab" rel="outgoing_quotation_sheet" fresh="true" >外发报价单</a></li>
                    <?php endif; ?>
                  </ul>
                </li>
                <?php if ($this->_tpl_vars['shengchengbaojiadanhexingshifapiao'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/create_quotation_invoice/index" target="navTab" rel="create_quotation_invoice" fresh="true" >报价单</a> </li>
                <?php endif; ?>
              </ul>
            </li>
            <?php if ($this->_tpl_vars['dingdan'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/index" target="navTab" rel="order_product_order" fresh="true" >订单</a> </li>
            <?php endif; ?>
            <!--<?php if ($this->_tpl_vars['dingdan601'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order_szo/index" target="navTab" rel="product_order_szo" fresh="true" >601订单</a>
                </li>
            <?php endif; ?>-->
            <?php if ($this->_tpl_vars['fapiao'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/index" target="navTab" rel="invoice" fresh="true" >发票</a> </li>
            <?php endif; ?>
            <!--<?php if ($this->_tpl_vars['fapiao601'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice_szo/index" target="navTab" rel="invoice_601" fresh="true" >601发票</a>
            </li>
            <?php endif; ?>-->
            <?php if ($this->_tpl_vars['xiaoshoumingxi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/index" target="navTab" rel="sale_detail" fresh="true" >销售明细</a> </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['fukuanqingkuangxianshi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_situation/index" target="navTab" rel="payment_situation" fresh="true" >付款情况显示</a> </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['chengbenkoujianheyunfeizengtian'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_add/index" target="navTab" rel="commission_add" fresh="true" >成本扣减</a> </li>
            <?php endif; ?>
            <!--<li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_sale_detail/index" target="navTab" rel="old_sale_detail" fresh="true" >旧系统销售明细</a>-->
            </li>
            <?php if ($this->_tpl_vars['chengbenmingxi'] == 1): ?>
            <li> <a href="#">成本明细</a>
              <ul>
                <?php if ($this->_tpl_vars['yuechengbenmingxi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_breakdown/index" target="navTab" rel="cost_breakdown" fresh="true" >月成本明细</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['cailiaochengbenbiao'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material/index" target="navTab" rel="material" fresh="true" >材料成本表</a></li>
                <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['mianfeidingdanhuizong'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/free_order/index" target="navTab" rel="free_order" fresh="true" >免费订单汇总</a> </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['teshudingdanhuizong'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/special_order/index" target="navTab" rel="special_order" fresh="true" >特殊订单汇总</a> </li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/no_deduction_cost_order/index" target="navTab" rel="no_deduction_cost_order" fresh="true" >不扣成本订单</a> </li>
            <?php endif; ?>
            <!--<?php if ($this->_tpl_vars['xiaoshouhuodongguanli'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sales_activity_management/index" target="navTab" rel="sales_activity_management" fresh="true" >销售活动管理</a>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['xiaoshouchengji'] == 1): ?> 
            <li><a href="#">销售成绩&目标</a>
            	<ul>
              		<li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/monthly_sales/index" target="navTab" rel="monthly_sales" fresh="true" >月销售</a></li>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/daily_sales/index" target="navTab" rel="daily_sales" fresh="true" >日销售</a></li>
                </ul>
            </li>
            <?php endif; ?>-->

            <?php if ($this->_tpl_vars['xiaoshoushenpi'] == 1): ?>
            <li><a href="#">审批</a>
              <ul>
                <!--<li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/mask_danjia/index" target="navTab" rel="mask_danjia" fresh="true" >口罩单价低于标准</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_customer_email_checked/index" target="navTab" rel="old_customer_email_checked" fresh="true" >老客户邮箱修改审批</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_return/index" target="navTab" rel="design_return" fresh="true" >设计返回审批</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/deposit_advance_approval/index" target="navTab" rel="deposit_advance_approval" fresh="true" >预存款审批</a></li>-->
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_discount_approval/index" target="navTab" rel="customer_discount_approval" fresh="true" >客户折扣审批</a></li>
                <!--  <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/discount_approval/index" target="navTab" rel="discount_approval" fresh="true" >折扣审批</a></li>-->
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/coefficient_lower_quotation/index" target="navTab" rel="coefficient_lower_quotation" fresh="true" >报价系数低于标准</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/loss_quantity_approval/index" target="navTab" rel="loss_quantity_approval" fresh="true" >备损数量审批</a></li>
                <!--<li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/multiple_orders_do_first_cargo/index" target="navTab" rel="multiple_orders_do_first_cargo" fresh="true" >多订单先做货</a></li>-->
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice_status_return_sales/index" target="navTab" rel="invoice_status_return_sales" fresh="true" >发票状态返回</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_review/index" target="navTab" rel="material_review" fresh="true" >材料报价审核</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_review/index" target="navTab" rel="cdr_review" fresh="true" >cdr报价审核</a></li>
                
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/refund_application_sales/index" target="navTab" rel="refund_application_sales" fresh="true" >退款申请</a></li>
                
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/goods_free/index" target="navTab" rel="goods_free" fresh="true" >免费做货</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_after_goods/index" target="navTab" rel="payment_after_goods" fresh="true" >先做货后付款</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice/index-flag-1" target="navTab" rel="freight_approval" fresh="true" >运费审批</a></li>
                <!--<li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_after_delivery/index" target="navTab" rel="payment_after_delivery" fresh="true" >先发货后付款</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/goods_after_payment_sales/index" target="navTab" rel="goods_after_payment_sales" fresh="true" >部分付款后做货</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_after_shipment/index" target="navTab" rel="payment_after_shipment" fresh="true" >部分付款后发货</a></li>-->
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['xiaoshoushezhi'] == 1): ?>
            <li><a href="#" >设置</a>
              <ul>
                <?php if ($this->_tpl_vars['stockshezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/index" target="navTab" rel="stock_manage" fresh="true" >STOCK设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['pinleixishubiaozhun'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/category_coefficient_standard/index" target="navTab" rel="category_coefficient_standard" fresh="true" >品类系数标准</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['diqushezhishezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/area/index" target="navTab" rel="area_setting" fresh="true" >地区设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['huilvshezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/exchangerate/index" target="navTab" rel="exchangerate" fresh="true" >汇率设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['xunpanshezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotefrom/index" target="navTab" rel="quotefrom" fresh="true" >询盘来源设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['xunpanfenleishezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecategory/index" target="navTab" rel="quotecategory" fresh="true" >询盘方式设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['laiyuanqudao'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sources/index" target="navTab" rel="sources" fresh="true" >来源渠道</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['cailiaogongshishezhi'] == 1): ?>
                <!-- <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material/index" target="navTab" rel="material" fresh="true" >材料设置</a></li>-->
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materialformula/index" target="navTab" rel="materialformula" fresh="true" >材料公式设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['kehuxinxixuanxiang'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customeroption/index" target="navTab" rel="customeroption" fresh="true" >客户信息选项设置</a></li>
                <?php endif; ?>
                <!--<?php if ($this->_tpl_vars['huishouliwaikehu'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/exceptions_customers/index" target="navTab" rel="exceptions_customers" fresh="true" >回收例外客户</a></li>
                <?php endif; ?>-->
                <?php if ($this->_tpl_vars['gongchangchengbenxishukehu'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cost_coefficient_customer/index" target="navTab" rel="cost_coefficient_customer" fresh="true" >工厂成本系数1.3客户</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['mianbanfeikehu'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/free_version_customer/index" target="navTab" rel="free_version_customer" fresh="true" >免版费客户</a></li>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['rezhuanyincailiao'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/heat_transfer_materials/index" target="navTab" rel="heat_transfer_materials" fresh="true" >热转印材料筛选</a></li>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['baojiadanfenleishezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotation/index" target="navTab" rel="quotation" fresh="true" >报价单分类设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['zhekoushezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/discount/index" target="navTab" rel="discount" fresh="true" >折扣设置</a></li>
                <!-- <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picturesetuptime/index" target="navTab" rel="picturesetuptime" fresh="true" >排图时间设置</a></li>-->
                <?php endif; ?>
                <?php if ($this->_tpl_vars['youhuiquan'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/coupon/index" target="navTab" rel="coupon" fresh="true" >优惠券</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['youhuiquanqujian'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/coupon_interval/index" target="navTab" rel="coupon_interval" fresh="true" >优惠券区间</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['tichengbili'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_ratio/index" target="navTab" rel="commission_ratio" fresh="true" >提成比例</a></li>
                <!-- <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picturesetuptime/index" target="navTab" rel="picturesetuptime" fresh="true" >排图时间设置</a></li>-->
                <?php endif; ?>
                <?php if ($this->_tpl_vars['dongchangshougongfeishezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factorylaborcost/index" target="navTab" rel="factorylaborcost" fresh="true" >工厂手工费设置</a></li>
                <!--<li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factoryproductcycle/index" target="navTab" rel="factoryproductcycle" fresh="true" >工厂做货周期设置</a></li>-->
                <?php endif; ?>
                <?php if ($this->_tpl_vars['tangtubanfeishezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/h_version_set/index" target="navTab" rel="version_set" fresh="true" >烫图版费设置</a></li>
                <!--<li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factoryproductcycle/index" target="navTab" rel="factoryproductcycle" fresh="true" >工厂做货周期设置</a></li>-->
                <?php endif; ?>
                <?php if ($this->_tpl_vars['mobanjiage'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_price/index" target="navTab" rel="template_price" fresh="true" >模板价格</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['baojiaxishu601'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_coefficient/index" target="navTab" rel="six_coefficient" fresh="true" >601报价系数</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['shijianshezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/time/index" target="navTab" rel="time" fresh="true" >时间设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['shijianfenleishezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/timecategory/index" target="navTab" rel="timecategory" fresh="true" >时间分类设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['jiagefanweishezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/pricerange/index" target="navTab" rel="pricerange" fresh="true" >价格范围设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['jiagefanweifenleishezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/pricerangecategory/index" target="navTab" rel="pricerangecategory" fresh="true" >价格范围分类设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['kuaidigongsishezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/shippingcompany/index" target="navTab" rel="shippingcompany" fresh="true" >快递公司设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['jiaozhishujushezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/tapedata/index" target="navTab" rel="tapedata" fresh="true" >胶纸数据设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['gongsixinxishezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/company_setting/index" target="navTab" rel="company_setting" fresh="true" >公司信息设置</a></li>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['qitashezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/audio/month_limit" target="navTab" rel="month_limit" fresh="true" >每月销售设置</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['chanpinduibi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/contrast/index" target="navTab" rel="contrast" fresh="true" >产品对比</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['qitashezhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/setting/index" target="navTab" rel="setting" fresh="true" >其他设置</a></li>
                <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>
          </ul>
        </div>
        <?php endif; ?>



        <?php if ($this->_tpl_vars['gongchangguanli'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>工厂管理</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder">
            <?php if ($this->_tpl_vars['dingdanxinxi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/index" target="navTab" rel="factory_order" fresh="true">订单信息</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['gongchangfahuo'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_fahuo/index" target="navTab" rel="factory_fahuo" fresh="true">工厂发货</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['waifaxinxi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/index" target="navTab" rel="send_out_info" fresh="true">外发信息</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['cuowudingdanchuli'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/wrong_product_order/index" target="navTab" rel="wrong_product_order" fresh="true">错误订单处理</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['chexiaodingdan'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cancel_order/index" target="navTab" rel="cancel_order" fresh="true">撤销订单</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['zhibanxinxi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/process_information/index" target="navTab">制版信息</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['dingdanliucheng'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/order_process/index" target="navTab" rel="order_process" fresh="true">订单流程记录</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['gongyingshangguanli'] == 1): ?>
            <li><a href="#" >供应商管理</a>
              <ul>
                <?php if ($this->_tpl_vars['gongyingshangxinxi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/supplier_management/index" target="navTab" rel="supplier_management" fresh="true">供应商信息</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['gongyingshangshuxing'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/supplier_attributes/index" target="navTab" rel="supplier_attributes" fresh="true">供应商属性</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['gongyingshangjiesuanqixian'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/supplier_settlement_time/index" target="navTab" rel="supplier_settlement_time" fresh="true">供应商结算限期</a></li>
                <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['caigouxinxi'] == 1): ?>
            <li><a href="#">采购信息</a>
              <ul>
                <?php if ($this->_tpl_vars['waifaweibaojia'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/not_quoted" target="navTab" rel="not_quoted" fresh="true">外发未报价</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['waifaweifahuo'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/index-outgoing-1" target="navTab" rel="unprocessed_goods" fresh="true">外发未发货</a></li>
                <?php endif; ?>
                <!--<li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/index-outgoing-2" target="navTab" rel="in_production" fresh="true">外发做货中</a></li>-->
                <?php if ($this->_tpl_vars['waifa'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/index" target="navTab" rel="procure_outgoing" fresh="true">外发明细</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['cailiaocaigou'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/metrial_procure/index" target="navTab" rel="metrial_procure" fresh="true">材料采购</a></li>
                <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['cangkuguanli'] == 1): ?>
            <li><a href="#" >仓库管理</a>
              <ul>
                <?php if ($this->_tpl_vars['rukudengji'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/register_storage/index" target="navTab" rel="register_storage" fresh="true">入库登记</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['cailiaotongji'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_take_off/index" target="navTab" rel="material_take_off" fresh="true">做货材料记录</a></li>
                <?php endif; ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/register_detail/index" target="navTab" rel="register_detail" fresh="true">入库明细</a></li>
                <?php if ($this->_tpl_vars['zuohuolingliao'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/index" target="navTab" rel="cargo_picking" fresh="true">做货领料</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['chukudengji'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/exit_storehouse/index" target="navTab" rel="exit_storehouse" fresh="true">出库登记</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['kucunyingyu'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_surplus/index" target="navTab" rel="stock_surplus" fresh="true">库存盈余</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['pandian'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/check_stock/index" target="navTab" rel="check_stock" fresh="true">盘点</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['kufanghuizong'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/storehouse_amount/index" target="navTab" rel="storehouse_amount" fresh="true">库房汇总</a></li>
                <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>



            <?php if ($this->_tpl_vars['gongchangshezhi'] == 1): ?>
            <li><a href="#">设置</a>
              <ul>
                <?php if ($this->_tpl_vars['cailiaoguanli'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_management/index" target="navTab" rel="materials_management" fresh="true">材料管理</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['cailiaozhongwenmingguanli'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_chinese_management/index" target="navTab" rel="materials_chinese_management" fresh="true">材料中文名管理</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['danweitianjia'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unit_add/index" target="navTab" rel="unit_add" fresh="true">单位添加</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['caigoushouhuodizhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/purchasing_goods_address/index" target="navTab" rel="purchasing_goods_address" fresh="true">采购收货地址</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['gongchangzhejicailiaogongyipingfen'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_design_score/index" target="navTab" rel="factory_design_score" fresh="true">设计材料工艺评分</a></li>
                <?php endif; ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/standard_paper_set/index" target="navTab" rel="standard_paper_set" fresh="true">标准胶纸设置</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/make_degree/index" target="navTab" rel="make_degree" fresh="true">做货程度</a></li>
              </ul>
            </li>
            <?php endif; ?>
          </ul>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['wuliuguanli'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>物流管理</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder">
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/index-outgoing-3" target="navTab" rel="waifa_shipped" fresh="true">工厂已发货</a></li>
            <?php if ($this->_tpl_vars['kehudingdanmingxi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/index-outgoing-4" target="navTab" rel="company_goods" fresh="true">公司已到货</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/index-outgoing-5" target="navTab" rel="company_shipped" fresh="true">公司已发货</a></li>
            <?php endif; ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/deliver_list_all" target="navTab" rel="deliver_list_all" fresh="true">发货信息</a></li>
            <?php if ($this->_tpl_vars['upsxinxi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ups/index" target="navTab" rel="ups_imformation" fresh="true" >UPS信息</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['dhlxinxi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/dhl/index" target="navTab" rel="dhl_imformation" fresh="true" >DHL信息</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['wuliudengji'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/delivery_record/index" target="navTab" rel="delivery_record" fresh="true" >物流登记</a></li>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['gongchangfahuomingxi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_delivery_detail/index" target="navTab" rel="factory_delivery_detail" fresh="true">工厂发货明细</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['xiaoshoushouhuomingxi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/selling_goods_detail/index" target="navTab" rel="selling_goods_detail" fresh="true">销售收货明细</a></li>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['dingdanpinlei'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/order_category/index" target="navTab" rel="order_category" fresh="true" >订单品类</a></li>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['wuliushezhi'] == 1): ?>
            <li><a href="#">设置</a>
              <ul>
                <?php if ($this->_tpl_vars['qitafahuochanpin'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/other_shipping_goods/index" target="navTab" rel="other_shipping_goods" fresh="true">其他发货产品</a> <?php endif; ?> </li>
                <?php if ($this->_tpl_vars['kehushouhuodizhi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/clients_receiving/index" target="navTab" rel="clients_receiving" fresh="true">客户收货地址</a> </li>
                <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>
          </ul>
        </div>
        <?php endif; ?>


        <?php if ($this->_tpl_vars['caiwuguanli'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>财务管理</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder">
            <?php if ($this->_tpl_vars['shoukuandengji'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration/index" rel="payment_registration" target="navTab">收款登记（国外）</a></li>
            <?php endif; ?>
            <!--<?php if ($this->_tpl_vars['shoukuandengjiguonei'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_registration_domestic/index" rel="payment_registration_domestic" target="navTab" title="收款登记（国内）">收款登记（国内）</a></li>
            <?php endif; ?>-->
            <?php if ($this->_tpl_vars['meirishoukuanmingxi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/day_payment_registration/index" rel="day_payment_registration" target="navTab">每日收款明细</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['caiwushenhe'] == 1): ?>
            <li><a href="#">审核</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice_status_return/index" target="navTab" rel="invoice_status_return" fresh="true">状态返回</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/refund_application/index" target="navTab" rel="refund_application" fresh="true">退款申请</a></li>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['caiwushezhi'] == 1): ?>
            <li><a href="#">设置</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_methods/index" target="navTab" rel="payment_methods" fresh="true">收款方式</a> </li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/exchangerate_finance/index" target="navTab" rel="exchangerate_finance" fresh="true">财务汇率</a> </li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/deductions_set/index" target="navTab" rel="deductions_set" fresh="true">扣款金额</a> </li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/financial_cleared_payment/index" target="navTab" rel="financial_cleared_payment" fresh="true">收款清空记录</a> </li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/tuikuan_detail/index" target="navTab" rel="tuikuan_detail" fresh="true">退款明细</a> </li>
              </ul>
            </li>
            <?php endif; ?>
            <li><a href="#">帐套管理</a>
              <ul>
                <li><a href="*" target="navTab" rel="*" fresh="true">企业信息</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">计量单位</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">费用项目</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">结算方式</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">费用种类</a> </li>
              </ul>
            </li>
            <li><a href="#">会计资料</a>
              <ul>
                <li><a href="*" target="navTab" rel="*" fresh="true">会计规则</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">会计科目</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">科目余额</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">外币汇率</a> </li>
              </ul>
            </li>
            <li><a href="#">凭证操作</a>
              <ul>
                <li><a href="*" target="navTab" rel="*" fresh="true">凭证登记</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">出纳签字</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">凭证确认</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">凭证审核</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">凭证修改</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">凭证登录</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">单张查询</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">汇总查询</a> </li>
              </ul>
            </li>
            <li><a href="#">期末作业</a>
              <ul>
                <li><a href="*" target="navTab" rel="*" fresh="true">汇总损益</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">期间损益</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">期末结转</a> </li>
              </ul>
            </li>
            <li><a href="#">账簿管理</a>
              <ul>
                <li><a href="*" target="navTab" rel="*" fresh="true">基本账簿</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">多栏账簿</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">报表设置</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">科目余额</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">报表查询</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">现金流量</a> </li>
              </ul>
            </li>
            <li><a href="#">操作人员</a>
              <ul>
                <li><a href="*" target="navTab" rel="*" fresh="true">账号管理</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">角色管理</a> </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">操作日志</a> </li>
              </ul>
            </li>
          </ul>
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['renshiguanli'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>OA管理</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder collapse">
            <li><a href="#">日常工作</a>
              <ul>
                <li><a href="#">计划任务</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">计划</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">任务</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">汇报</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">共享</a> </li>
                  </ul>
                </li>
                <li><a href="#">项目管理</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">我的项目</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">新建项目</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">审核管理</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">项目监控</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">项目管控</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">物资管理</a> </li>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/oa_material_purchasing/index" target="navTab" rel="oa_material_purchasing" fresh="true">物资采购</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">物资调拨</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">权限方案</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">流程定义</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">模版管理</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">项目字典</a> </li>
                  </ul>
                </li>
                <li><a href="#">工作报表</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">浏览</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">提交</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">类别</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">模版</a> </li>
                  </ul>
                </li>
                <li><a href="#">工作交接</a> </li>
              </ul>
            </li>
            <li><a href="#">行政公文</a>
              <ul>
                <li><a href="#">发文</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">拟稿</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">审核</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">签发</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">分发</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">传阅</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">登记簿</a> </li>
                  </ul>
                </li>
                <li><a href="#">收文</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">登记</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">分发</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">拟办</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">批办</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">承办</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">督办</a> </li>
                  </ul>
                </li>
                <li><a href="#">监控</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">发文</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">收文</a> </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">人力资源</a>
              <ul>
                <li><a href="#">人资信息</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">员工档案</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">本月寿星</a> </li>
                  </ul>
                </li>
                <li><a href="*" target="navTab" rel="*" fresh="true">劳动合同</a> </li>
                <li><a href="#">薪酬福利</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">工资报表</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">工资发放</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">工资项目</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">计算公式</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">工资级别</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">社保方案</a> </li>
                  </ul>
                </li>
                <li><a href="#">员工考勤</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">登记</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">排班</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">点名</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">查询</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">请假</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">公出</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">统计</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">班次</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">排班规则</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">排班组</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">设置</a> </li>
                  </ul>
                </li>
                <li><a href="#">绩效考核</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">考核浏览</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">个人考核</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">团队考核</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">项目设置</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">参数设置</a> </li>
                  </ul>
                </li>
                <li><a href="#">招聘配置</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">人员需求</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">人才储备</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">招聘计划</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">招聘邮件</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">人员分类</a> </li>
                  </ul>
                </li>
                <li><a href="#">培训开发</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">浏览</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">分类</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">计划</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">项目</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">汇总</a> </li>
                  </ul>
                </li>
                <li><a href="#">人事申请</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">转正</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">调岗</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">奖惩</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">请假</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">公出</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">离职</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">加班</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">校正</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">退休</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">审核</a> </li>
                  </ul>
                </li>
                <li><a href="#">人资报表</a> </li>
                <li><a href="#">管理制度</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">制度</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">分类</a> </li>
                  </ul>
                </li>
                <li><a href="#">参数设置</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">模版</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">字典</a> </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">资源管理</a>
              <ul>
                <li><a href="#">公共关系</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">关系档案</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">往来维护</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">名片信息</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">关系类别</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">内部通讯录</a> </li>
                  </ul>
                </li>
                <li><a href="#">图书馆</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">查询</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">借阅</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">管理</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">分类</a> </li>
                  </ul>
                </li>
                <li><a href="#">办公用品</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">已领物品</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">领用申请</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">领用审核</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">用品信息</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">用品采购</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">用品报废</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">用品分类</a> </li>
                  </ul>
                </li>
                <li><a href="#">固定资产</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">审核</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">申请</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">登记</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">维护</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">变更</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">注销</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">类别</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">查询</a> </li>
                  </ul>
                </li>
                <li><a href="#">资源预约</a>
                  <ul>
                    <li><a href="*" target="navTab" rel="*" fresh="true">申请资源</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">预约审核</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">信息维护</a> </li>
                    <li><a href="*" target="navTab" rel="*" fresh="true">资源分类</a> </li>
                  </ul>
                </li>
              </ul>
            </li>
            <?php if ($this->_tpl_vars['xinzixinxi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/salary_information/index" target="navTab" rel="salary_information" fresh="true">薪资信息</a> </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['renshishezhi'] == 1): ?>
            <li><a href="#">设置</a>
              <ul>
                <?php if ($this->_tpl_vars['yuangongxinxi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/employee_information/index" target="navTab" rel="employee_information" fresh="true">员工信息</a> </li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['xinzitiaozhengjilu'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/salary_record/index" target="navTab" rel="salary_record" fresh="true">薪资调整记录</a> </li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['chixubutieneirong'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/continuous_content/index" target="navTab" rel="continuous_content" fresh="true">持续补贴内容</a> </li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['chixubutie'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/continuous_subsidies/index" target="navTab" rel="continuous_subsidies" fresh="true">持续补贴</a> </li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['chixukoufei'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/continuous_deduction/index" target="navTab" rel="continuous_deduction" fresh="true">持续扣费</a> </li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['dangyuebutie'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/month_subsidies/index" target="navTab" rel="month_subsidies" fresh="true">当月补贴</a> </li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['dangyuekoufei'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/monthly_fee/index" target="navTab" rel="monthly_fee" fresh="true">当月扣费</a> </li>
                <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>
          </ul>
        </div>
        <?php endif; ?>


        <?php if ($this->_tpl_vars['dianshangguanli'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>电商管理</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder collapse">
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ss_freight/index" target="navTab" rel="findcustomer" fresh="true" >SS运费修改</a></li>
            <li><a href="#">流量登记</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/flow_book/index"  target="navTab"  rel="flow_book" fresh="true">网站流量</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ali_hits/index"  target="navTab"  rel="ali_hits" fresh="true">阿里点击量</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/audio/index" target="navTab" rel="audio" fresh="true">定制输入</a> </li>
              </ul>
            </li>
          </ul>
        </div>
        <?php endif; ?>
        <!--<?php if ($this->_tpl_vars['kehuguanliguonei'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>客户管理（国内）</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder collapse">
            <?php if ($this->_tpl_vars['pingtaikehuxinxihuoquguonei'] == 1): ?>
            <li><a href="#">平台客户信息获取</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['wechengjiaokehuguonei'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_no_deal_customer/index" target="navTab" rel="cn_no_deal_customer" fresh="true">未成交客户</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['yichengjiaokehuguonei'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_deal_customer/index" target="navTab" rel="cn_deal_customer" fresh="true">已成交客户</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['kehuxinxizongbiaoguonei'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_customer_info_list/index" target="navTab" rel="cn_customer_info_list" fresh="true">客户信息总表</a></li>
            <?php endif; ?>
          </ul>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['xiaoshouguanliguonei'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>销售管理（国内）</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder collapse">
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/tshirt_design/index" target="navTab" rel="tshirt_design" fresh="true" >T恤效果</a></li>
            <?php if ($this->_tpl_vars['baojiaguonei'] == 1): ?>
            <li><a href="#" >报价</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_t_shirt_quotation/index"  target="navTab" rel="cn_t_shirt_quotation" fresh="true" >T恤报价</a></li>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['dingdanguonei'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_product_order/index" target="navTab" rel="cn_product_order" >订单</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['fapiaoguonei'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/index" target="navTab" rel="cn_invoice" fresh="true" >发票</a> <?php endif; ?>
              <?php if ($this->_tpl_vars['xiaoshoumingxiguonei'] == 1): ?>
            
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_sale_detail/index" target="navTab" rel="cn_sale_detail" fresh="true" >销售明细</a> <?php endif; ?>
              <?php if ($this->_tpl_vars['chengbenmingxiguonei'] == 1): ?>
            
            <li><a href="#">成本明细</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_cost_breakdown/index" target="navTab" rel="cn_cost_breakdown" fresh="true" >月成本明细</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_material/index" target="navTab" rel="cn_material" fresh="true" >材料成本表</a></li>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['xiaoshoushenpiguonei'] == 1): ?>
            <li><a href="#" >审批</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_customer_discount_approval/index" target="navTab" rel="cn_customer_discount_approval" fresh="true" >客户折扣审批</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice_status_return_sales/index" target="navTab" rel="cn_invoice_status_return_sales" fresh="true" >发票状态返回</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_refund_application_sales/index" target="navTab" rel="cn_refund_application_sales" fresh="true" >退款申请</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_goods_free/index" target="navTab" rel="cn_goods_free" fresh="true" >免费做货</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_payment_after_goods/index" target="navTab" rel="cn_payment_after_goods" fresh="true" >先做货后付款</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_payment_after_delivery/index" target="navTab" rel="cn_payment_after_delivery" fresh="true" >先发货后付款</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_goods_after_payment_sales/index" target="navTab" rel="cn_goods_after_payment_sales" fresh="true" >部分付款后做货</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_payment_after_shipment/index" target="navTab" rel="cn_payment_after_shipment" fresh="true" >部分付款后发货</a></li>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['xiaoshouguanlishezhiguonei'] == 1): ?>
            <li><a href="#" >设置</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_customer_code_set/index" target="navTab" rel="cn_customer_code_set" fresh="true">客户代码设置</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_manage/index" target="navTab" rel="cn_stock_manage" fresh="true" >STOCK设置</a></li>
              </ul>
            </li>
            <?php endif; ?>
          </ul>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['guoneishejiguanli'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>设计管理（国内）</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder collapse">
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_unfinishdesign/index" target="navTab" rel="cn_unfinishdesign" fresh="true" >未完成设计</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_uncheckdesign/index" target="navTab" rel="cn_uncheckdesign" fresh="true">未检验设计</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_finishdesign/index" target="navTab" rel="cn_finishdesign" fresh="true">已完成设计</a></li>
            <li><a href="#">设置</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_place/index" target="navTab" rel="cn_place" fresh="true" >服装位置管理</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <?php endif; ?>-->
        <?php if ($this->_tpl_vars['gongchangguanliguonei'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>工厂管理（国内）</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder collapse">
            <?php if ($this->_tpl_vars['dingdanxinxiguowai'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order/index" target="navTab" rel="cn_factory_order" fresh="true">订单信息（国外）</a> <?php endif; ?>
              <?php if ($this->_tpl_vars['dingdanxinxiguonei'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_factory_order_guonei/index" target="navTab" rel="cn_factory_order_guonei" fresh="true">订单信息（国内）</a> <?php endif; ?>
              <?php if ($this->_tpl_vars['caigouguanliguonei'] == 1): ?>
            <li><a href="#">采购管理</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_metrial_procure/index"  target="navTab"  rel="cn_metrial_procure" fresh="true">材料采购</a></li>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['gongfangcangkuguanliguonei'] == 1): ?>
            <li><a href="#">工坊仓库管理</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_register_storage/index"  target="navTab"  rel="cn_register_storage" fresh="true">采购入库登记</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_other_register_storage/index"  target="navTab"  rel="cn_other_register_storage" fresh="true">其他入库登记</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_exit_storehouse/index"  target="navTab"  rel="cn_exit_storehouse" fresh="true">出库登记</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_surplus/index"  target="navTab"  rel="cn_stock_surplus" fresh="true">库存盈余</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_check_stock/index"  target="navTab"  rel="cn_check_stock" fresh="true">盘点</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_storehouse_amount/index"  target="navTab"  rel="cn_storehouse_amount" fresh="true">库房汇总</a></li>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['jinshitancangkuguanliguonei'] == 1): ?>
            <li><a href="#">金石滩仓库管理</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_register_storage/index"  target="navTab"  rel="cn_jst_register_storage" fresh="true">采购入库登记</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_other_register_storage/index"  target="navTab"  rel="cn_jst_other_register_storage" fresh="true">其他入库登记</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_exit_storehouse/index"  target="navTab"  rel="cn_jst_exit_storehouse" fresh="true">出库登记</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_stock_surplus/index"  target="navTab"  rel="cn_jst_stock_surplus" fresh="true">库存盈余</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_check_stock/index"  target="navTab"  rel="cn_jst_check_stock" fresh="true">盘点</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_jst_storehouse_amount/index"  target="navTab"  rel="cn_jst_storehouse_amount" fresh="true">库房汇总</a></li>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['gongyingshangguanliguonei'] == 1): ?>
            <li><a href="#">供应商管理</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/supplier_management_cn/index"  target="navTab"  rel="supplier_management_cn" fresh="true">供应商信息</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/supplier_attributes_cn/index"  target="navTab"  rel="supplier_attributes_cn" fresh="true">供应商属性</a></li>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['gongchangshezhiguonei'] == 1): ?>
            <li><a href="#">设置</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_cn/index"  target="navTab"  rel="materials_cn" fresh="true">材料管理</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/standard_cn/index"  target="navTab"  rel="standard_cn" fresh="true">规格</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/color_cn/index"  target="navTab"  rel="color_cn" fresh="true">颜色</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unit_cn/index"  target="navTab"  rel="unit_cn" fresh="true">计量单位</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/channel_cn/index"  target="navTab"  rel="channel_cn" fresh="true">渠道</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_outbound_type/index" target="navTab" rel="cn_outbound_type" fresh="true">出库类型</a>
              </ul>
            </li>
            <?php endif; ?>
          </ul>
        </div>
        <?php endif; ?>
        <!--<div class="accordionHeader">
          <h2><span>Folder</span>物流管理（国内）</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder collapse">
            <li><a href="*" target="navTab" fresh="true">客户订单明细</a>
            <li><a href="#">设置</a>
              <ul>
                <li><a href="*"  target="navTab" fresh="true">其他发货产品</a></li>
                <li><a href="*"  target="navTab" fresh="true">客户收货地址</a></li>
              </ul>
            </li>
          </ul>
        </div>-->
        <?php if ($this->_tpl_vars['zhanghuguanli'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>账户管理</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder">
            <?php if ($this->_tpl_vars['zhanghuguanlishezhi'] == 1): ?>
            <li><a href="#">设置</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user_transfer/index" target="navTab" rel="user_transfer" fresh="true">用户转移记录</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_transfer/index" target="navTab" rel="customer_transfer" fresh="true">客户转移记录</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user_group_set/index" target="navTab" rel="user_group_set" fresh="true">用户组设置</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user_department_set/index" target="navTab" rel="user_department_set" fresh="true">部门设置</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user_company_set/index" target="navTab" rel="user_company_set" fresh="true">公司设置</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user_office_area_set/index" target="navTab" rel="user_office_area_set" fresh="true">办公区域设置</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user_organization_structure_set/index" target="navTab" rel="user_organization_structure_set" fresh="true">组织架构设置</a></li>
              </ul>
            </li>
            <?php endif; ?>
            <!-- <?php if ($this->_tpl_vars['bumenguanli'] == 1): ?> <li><a href="#" target="navTab">部门管理</a></li><?php endif; ?>-->
            <?php if ($this->_tpl_vars['yonghuzuquanxianguanli'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/usergroup/index" target="navTab" rel="group_index" fresh="true">用户组权限管理</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['yonghuguanli'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/index" target="navTab" rel="user_index" fresh="true">用户管理</a></li>
            <?php endif; ?>
          </ul>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['baobiaohuizong'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>报表汇总</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder collapse">

            <!--<li><a href="#">客户统计表</a>
            <ul>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/flow_book/index"  target="navTab"  rel="flow_book" fresh="true">1</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ali_hits/index"  target="navTab"  rel="ali_hits" fresh="true">2</a></li>
            </ul>
            </li>
           
            <li><a href="#">人员统计表</a>
            <ul>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/flow_book/index"  target="navTab"  rel="flow_book" fresh="true">1</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ali_hits/index"  target="navTab"  rel="ali_hits" fresh="true">2</a></li>
            </ul>
            </li>
          
            <li><a href="#">采购统计表</a>
            <ul>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/flow_book/index"  target="navTab"  rel="flow_book" fresh="true">1</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ali_hits/index"  target="navTab"  rel="ali_hits" fresh="true">2</a></li>
            </ul>
            </li>
         
            <li><a href="#">仓存统计表</a>
            <ul>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/flow_book/index"  target="navTab"  rel="flow_book" fresh="true">1</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ali_hits/index"  target="navTab"  rel="ali_hits" fresh="true">2</a></li>
            </ul>
            </li>
     
            <li><a href="#">生产统计表</a>
            <ul>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/flow_book/index"  target="navTab"  rel="flow_book" fresh="true">1</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ali_hits/index"  target="navTab"  rel="ali_hits" fresh="true">2</a></li>
            </ul>
            </li>-->
            <?php if ($this->_tpl_vars['kehutongjibiao'] == 1): ?>
            <li><a href="#">客户统计表</a>
              <ul>
                <?php if ($this->_tpl_vars['kehuzhuangtaichaxun'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customers_status/index" target="navTab" rel="sales_leads" fresh="true" >客户状态查询</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['meiyuekehushijian'] == 1): ?>
                <li><a href="#">每月客户事件</a>
                  <ul>
                    <li><a  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_january"  target="navTab"  rel="commission_amount" fresh="true">1月</a>
                    <li><a  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_february"  target="navTab"  rel="commission_amount" fresh="true">2月</a>
                    <li><a  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_march"  target="navTab"  rel="commission_amount" fresh="true">3月</a>
                    <li><a  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_april"  target="navTab"  rel="commission_amount" fresh="true">4月</a>
                    <li><a  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_may"  target="navTab"  rel="commission_amount" fresh="true">5月</a>
                    <li><a  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_june"  target="navTab"  rel="commission_amount" fresh="true">6月</a>
                    <li><a  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_july"  target="navTab"  rel="commission_amount" fresh="true">7月</a>
                    <li><a  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_august"  target="navTab"  rel="commission_amount" fresh="true">8月</a>
                    <li><a  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_september"  target="navTab"  rel="commission_amount" fresh="true">9月</a>
                    <li><a  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_october"  target="navTab"  rel="commission_amount" fresh="true">10月</a>
                    <li><a  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_november"  target="navTab"  rel="commission_amount" fresh="true">11月</a>
                    <li><a  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_december"  target="navTab"  rel="commission_amount" fresh="true">12月</a>
                  </ul>
                </li>
                <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['xiaoshoutongjibiao'] == 1): ?>
            <li><a href="#">销售统计表</a>
              <ul>

                <?php if ($this->_tpl_vars['dianshangguanli'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount_commerce/index"  target="navTab"  rel="commission_amount_commerce" fresh="true">电商销售提成表</a></li>
                <?php endif; ?>

                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount/index"  target="navTab"  rel="commission_amount" fresh="true">销售提成表</a></li>

                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount_online/index"  target="navTab"  rel="commission_amount_online" fresh="true">在线销售统计表</a></li>

                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount_order/index"  target="navTab"  rel="commission_amount_order" fresh="true">订单销售统计表</a></li>

                <?php if ($this->_tpl_vars['fudonggongzi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/floating_wages/index"  target="navTab"  rel="floating_wages" fresh="true">浮动工资</a></li>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['yewuyuanyuexiaoshoumingxi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sales_detail_month/customer_level_gather"  target="navTab"  rel="customer_level_gather" fresh="true">客户分层报表</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sales_detail_month/customer_level_detailed"  target="navTab"  rel="customer_level_detailed" fresh="true">客户分层明细表</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sales_detail_month/index"  target="navTab"  rel="sales_detail_month" fresh="true">业务-月销售报表</a></li>

                <?php endif; ?>
                <?php if ($this->_tpl_vars['yewuyuanrixiaoshoumingxi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sales_detail_days/index"  target="navTab"  rel="sales_detail_days" fresh="true">业务-日销售报表</a></li>
                <?php endif; ?>

                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sales_detail_month_clothing/index"  target="navTab"  rel="sales_detail_month_clothing" fresh="true">(服装)-月销售报表</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/business_day_data/index" target="navTab" rel="business_day_data" fresh="true" >月常规统计表</a></li>

                <?php if ($this->_tpl_vars['xinkehuchengjiaomingxi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer_transactions/index"  target="navTab"  rel="newcustomer_transactions" fresh="true">新客户成交明细</a></li>
                <?php endif; ?>

                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/business_limit/quote_cstown" target="navTab" rel="quote_cstown" fresh="true" >J询盘分配排名</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/business_limit/index" target="navTab" rel="business_limit" fresh="true" >P询盘分配排名</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/business_limit/half_month" target="navTab" rel="half_monty" fresh="true" >半月询盘分配排名</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/business_limit/quote_email" target="navTab" rel="email_quote" fresh="true" >询盘回复时长</a></li>

                <!--<?php if ($this->_tpl_vars['xiaoshoutichengbiao'] == 1): ?>-->
                <!--<?php endif; ?>-->
                <!--<?php if ($this->_tpl_vars['zhipenxiaoshoutichengbiao'] == 1): ?>-->
                <!-- <?php endif; ?>-->
                <!--<li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/direct_injection_sales_commission/index"  target="navTab"  rel="direct_injection_sales_commission" fresh="true">直喷销售提成表</a></li>-->



                <!--<?php if ($this->_tpl_vars['yewuxunpanhexinkehu'] == 1): ?>
                   <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer_quotecustomer/index"  target="navTab"  rel="newcustomer_quotecustomer" fresh="true">业务员询盘和新客户</a></li>
                <?php endif; ?>-->
                <?php if ($this->_tpl_vars['yewushoukuanchaxunguowai'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/salesman_collection_query/index"  target="navTab"  rel="salesman_collection_query" fresh="true">业务收款查询</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['xunpanhexinkehusanshitian'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer_quotecustomer_thirtyday/index"  target="navTab"  rel="newcustomer_quotecustomer_thirtyday" fresh="true">询盘和新客户浮动30天统计</a></li>
                <?php endif; ?>



                <?php if ($this->_tpl_vars['xiaoshoupaituhezuohuoliang'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_paitu/index"  target="navTab"  rel="sale_paitu" fresh="true">销售派图和做货量</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['kehugongxianduliebiao'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_contribute/index"  target="navTab"  rel="customer_contribute" fresh="true">客户贡献度列表</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['fukuanzhangqi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_time/index"  target="navTab"  rel="payment_time" fresh="true">付款账期</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['kehuzuihouxiadan'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_last_order/index"  target="navTab"  rel="customer_last_order" fresh="true">客户最后下单</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['fudongyiniankehuchengjiaobang'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_year_paid/index"  target="navTab"  rel="customer_year_paid" fresh="true">浮动1年客户成交榜</a></li>
                <?php endif; ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_sales_charts/index"  target="navTab"  rel="customer_sales_charts" fresh="true">客户销售额排行榜</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/goods_no_pay/index"  target="navTab"  rel="goods_no_pay" fresh="true">做货未付款明细</a></li>

                <!--<li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/no_pay_no_goods/index"  target="navTab"  rel="no_pay_no_goods" fresh="true">未付未做货明细</a></li>
                   
                   
                      <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/saleman_day_detail/index"  target="navTab"  rel="saleman_day_detail" fresh="true">业务日业绩明细测试</a></li>
                   
                    <?php if ($this->_tpl_vars['xiaoshoutichengbiaoceshi'] == 1): ?>
                      <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount1/index"  target="navTab"  rel="commission_amount1" fresh="true">销售提成表测试</a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_orders_price_info/index" target="navTab" rel="customer_orders_price_info" fresh="true" title="13-19客户下单金额"  >13-19客户下单金额</a></li>				
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_structure/index" target="navTab" rel="customer_structure" fresh="true" title="客户构成"  >客户构成</a></li>-->
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['shejitongjibiao'] == 1): ?>
            <li><a href="#">设计统计表</a>
              <ul>
                <?php if ($this->_tpl_vars['shejitichengbiao'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount_design/index"  target="navTab"  rel="commission_amount_design" fresh="true">设计提成表</a> </li>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['shejiyuanripaituliangmingxi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_detail_days/index"  target="navTab"  rel="design_detail_days" fresh="true">设计员-日排图量明细</a></li>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['shejixinpinxiaoshoubiao'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_new_order/index"  target="navTab"  rel="design_new_order" fresh="true">设计新品销售表</a> </li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['shejizhouqitongji'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_cycle_statistics/index"  target="navTab"  rel="design_cycle_statistics" fresh="true">设计周期统计</a> </li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['shejizhouqijishichaxun'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_cycle_find/index"  target="navTab"  rel="design_cycle_find" fresh="true">设计周期及时查询</a> </li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['xitongpaitushutongji'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_count/index"  target="navTab"  rel="design_count" fresh="true">系统排图数统计</a> </li>
                <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['gongchangtongjibiao'] == 1): ?>
            <li><a href="#">工厂统计表</a>
              <ul>
                <?php if ($this->_tpl_vars['shengchanzhouqitongji'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/production_cycle/index"  target="navTab"  rel="production_cycle" fresh="true">生产周期统计</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['shengchanjieduanshichang'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/production_length/index"  target="navTab"  rel="production_length" fresh="true">生产阶段时长统计</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['cailiaoshiyongqingkuang'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_amount/index"  target="navTab"  rel="material_amount" fresh="true">材料使用情况统计</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['yuecailiaocaigou'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_purchase_monthly/index"  target="navTab"  rel="material_purchase_monthly" fresh="true">月材料采购统计</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['yuecailiaochuku'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_delivery_monthly/index"  target="navTab"  rel="material_delivery_monthly" fresh="true">月材料出库统计</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['yuecailiaozuohuo'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_goods_monthly/index"  target="navTab"  rel="material_goods_monthly" fresh="true">月材料做货统计</a></li>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['yuecailiaoduibi'] == 1): ?>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_contrast_monthly/index"  target="navTab"  rel="material_contrast_monthly" fresh="true">月材料出库和做货对比</a></li>
                <?php endif; ?>
              </ul>
            </li>
            <?php endif; ?>
            <!--<li><a href="#">财务统计表</a>
            <ul>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/flow_book/index"  target="navTab"  rel="flow_book" fresh="true">1</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ali_hits/index"  target="navTab"  rel="ali_hits" fresh="true">2</a></li>
            </ul>
            </li>
         
            <li><a href="#">电商营销分析表</a>
            <ul>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/flow_book/index"  target="navTab"  rel="flow_book" fresh="true">1</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ali_hits/index"  target="navTab"  rel="ali_hits" fresh="true">2</a></li>
            </ul>
            </li>
         
            <li><a href="#">报表设置</a>
            <ul>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/exchange_rate/index"  target="navTab"  rel="flow_book" fresh="true">汇率设置</a></li>
            </ul>
            </li>-->

          </ul>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['jingligongneng'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>经理功能</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder">
            <?php if ($this->_tpl_vars['jinglishezhi'] == 1): ?>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/manager_set/index"  target="navTab"  rel="manager_set" fresh="true">经理设置</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['jinglishenhe'] == 1): ?>
            <li><a href="#" >经理审核</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_price_adjustment/index" target="navTab" rel="material_price_adjustment" fresh="true" >材料价格调整</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/goods_free_manager/index" target="navTab" rel="goods_free_manager" fresh="true" >免费做货</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/refund_application_manager/index" target="navTab" rel="refund_application_manager" fresh="true" >退款申请</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_after_goods_manager/index" target="navTab" rel="payment_after_goods_manager" fresh="true" >先做货后付款</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_after_delivery_manager/index" target="navTab" rel="payment_after_delivery_manager" fresh="true" >先发货后付款</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/goods_after_payment_manager/index" target="navTab" rel="goods_after_payment_manager" fresh="true" >部分付款后做货</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_after_shipment_manager/index" target="navTab" rel="payment_after_shipment_manager" fresh="true" >部分付款后发货</a></li>
              </ul>
            </li>
            <?php endif; ?>
          </ul>
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['guanliyuan'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>管理员功能区</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder">
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_manage/index" target="navTab" rel="material_price_adjustment" fresh="true" >客户管理</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage" target="navTab" rel="sale_manage" fresh="true">销售管理</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_manage" target="navTab" rel="design_manage" fresh="true">设计管理</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_manage" target="navTab" rel="factory_manage" fresh="true">工厂管理</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/wuliu_manage" target="navTab" rel="wuliu_manage" fresh="true">物流管理</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/accountant_manage" target="navTab" rel="accountant_manage" fresh="true">财务管理</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/online_retailers_manage" target="navTab"rel="online_retailers_manage" fresh="true" >电商管理</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/account_manage" target="navTab" rel="account_manage" fresh="true">账户管理</a></li>
            <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/forms_manage" target="navTab" rel="forms_manage" fresh="true">报表管理</a></li>
            <!--           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/other_manage" target="navTab" rel="other_manage" fresh="true" >其他</a></li>
-->
            <li><a href="#" >其他</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/statistical_table/index" target="navTab" rel="statistical_table" fresh="true"  title="客户排图做货数统计表" >客户排图做货数统计表</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/enquiry_table/index" target="navTab" rel="enquiry_table" fresh="true" title="13年、14年和15年每月询盘" >13年、14年和15年每月询盘</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/client_orde_table/index" target="navTab" rel="client_orde_table" fresh="true" title="14,15年每月下单客户数" >14,15年每月下单客户数</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/new_client_transaction_cycle/index" target="navTab" rel="new_client_transaction_cycle" fresh="true" title="13-15年新客户首单成交周期"  >13-15年新客户首单成交周期</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_order_cycle/index" target="navTab" rel="old_client_order_cycle" fresh="true" title="新客户首次成交和下次成交间隔周期"  >客户首次成交和下次成交间隔周期</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/index" target="navTab" rel="old_client_lost" fresh="true" title="老客户流失（一年）"  >老客户流失（一年）</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost_two/index" target="navTab" rel="old_client_lost_two" fresh="true" title="老客户流失（8个月）"  >老客户流失（8个月）</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost_three/index" target="navTab" rel="old_client_lost_three" fresh="true" title="老客户流失（半年）"  >老客户流失（半年）</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_orders_proportion/index" target="navTab" rel="customer_orders_proportion" fresh="true" title="13、14、15年客户下单比例"  >客户下单比例</a></li>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_orders_price_proportion/index" target="navTab" rel="customer_orders_price_proportion" fresh="true" title="13-15年客户下单金额比例"  >客户下单金额比例</a></li>
              </ul>
            </li>
            <li><a href="#" >日志管理</a>
              <ul>
                <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rizhi_manage" target="navTab" rel="rizhi_manage" fresh="true" >登录日志</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <?php endif; ?>

        <!--表格图形化实例 开始 -->
        <!--        <?php if ($this->_tpl_vars['linshi'] == 1): ?>
        <div class="accordionHeader">
          <h2><span>Folder</span>表格图形化实例</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder">
           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/chart/basic_line" target="navTab">Basic line</a></li>
           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/chart/spline_with_plot_bands" target="navTab">Spline with plot bands</a></li>
           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/chart/stacked_area" target="navTab">Stacked area</a></li>
           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/chart/area_spline" target="navTab">Area-spline</a></li>
           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/chart/basic_column" target="navTab" >Basic column</a></li>
           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/chart/column_with_rotated_labels" target="navTab" >Column with rotated labels</a></li>
           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/chart/column_with_drilldown" target="navTab" >Column with drilldown</a></li>
           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/chart/data_defined_in_a_HTML_table" target="navTab" >Data defined in a HTML table</a></li>
           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/chart/pie_chart" target="navTab" >Pie chart</a></li>
           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/chart/spline_updating_each_second" target="navTab" >Spline updating each second</a></li>
           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/chart/column_line_and_pie" target="navTab" >Column, line and pie</a></li>
           <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/chart/dual_axes_line_and_column" target="navTab">Dual axes, line and column</a></li>
           
          </ul>
        </div>
        <?php endif; ?> -->
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div id="container">
    <div id="navTab" class="tabsPage">
      <div class="tabsPageHeader">
        <div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
          <ul class="navTab-tab">
            <li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
          </ul>
        </div>
        <div class="tabsLeft">left</div>
        <!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
        <div class="tabsRight">right</div>
        <!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
        <div class="tabsMore">more</div>
      </div>
      <ul class="tabsMoreList">
        <li><a href="javascript:;">我的主页</a></li>
      </ul>
      <!--<div class="navTab-panel tabsPageContent layoutBox" style="overflow:scroll"; >-->
      <div class="navTab-panel tabsPageContent layoutBox" style="background-color:#ebf0f5;" >
        <div style="width:100%; height:100%; float:left; overflow:scroll;">
          <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?><!-- 屏蔽供应商判断开始 -->
          <div class="page unitBox" style="width:100%;"> <?php if ($this->_tpl_vars['user_hidden']['user_id'] == '1'): ?> <a style="float:left;" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/yinyue-ce-1.html" target="_block" >
            <button type="button">上单声音提醒</button>
          </a> <br/>
            <br/>
            <br/>
            <?php endif; ?>
            <div style=" float:left; display:block; margin:10px; overflow:auto; width:22%; height:200px; border:solid 1px #CCC; line-height:21px; background:#FFF;">
              <ul class="tree">
                <li><a href="#">预警</a>
                  <ul>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/weizuohuo_index" title="未做货订单" target="navTab" rel="design_return" fresh="true">未做货订单(<?php echo $this->_tpl_vars['weizuohuo']; ?>
条)</a></li>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/weifahuo_index" title="未发货订单" target="navTab" rel="design_return" fresh="true">未发货订单(<?php echo $this->_tpl_vars['weifahuo']; ?>
条)</a></li>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_order/weishouhuo_index" title="未收货订单" target="navTab" rel="design_return" fresh="true">未收货订单(<?php echo $this->_tpl_vars['weishouhuo']; ?>
条)</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div style=" float:left; display:block; margin:10px; overflow:auto; width:22%; height:200px; border:solid 1px #CCC; line-height:21px; background:#FFF;">
              <ul class="tree">
                <li><a href="#">待办事宜</a>
                  <ul>
                    <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50'): ?>
                    <?php if ($this->_tpl_vars['design_return_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_return/index" title="设计返回审批" target="navTab" rel="design_return" fresh="true">设计返回审批(<?php echo $this->_tpl_vars['design_return_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['deposit_advance_approval_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/deposit_advance_approval/index" title="预存款审批" target="navTab" rel="deposit_advance_approval" fresh="true" >预存款审批(<?php echo $this->_tpl_vars['deposit_advance_approval_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['customer_discount_approval_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_discount_approval/index" title="客户折扣审批" target="navTab" rel="customer_discount_approval" fresh="true" >客户折扣审批(<?php echo $this->_tpl_vars['customer_discount_approval_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['discount_approval_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/discount_approval/index" title="折扣审批" target="navTab" rel="discount_approval" fresh="true" >折扣审批(<?php echo $this->_tpl_vars['discount_approval_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['coefficient_lower_quotation_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/coefficient_lower_quotation/index" title="报价系数低于标准" target="navTab" rel="coefficient_lower_quotation" fresh="true" >报价系数低于标准(<?php echo $this->_tpl_vars['coefficient_lower_quotation_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['loss_quantity_approval_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/loss_quantity_approval/index" title="备损数量审批" target="navTab" rel="loss_quantity_approval" fresh="true" >备损数量审批(<?php echo $this->_tpl_vars['loss_quantity_approval_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['multiple_orders_do_first_cargo_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/multiple_orders_do_first_cargo/index" title="多订单先做货" target="navTab" rel="multiple_orders_do_first_cargo" fresh="true" >多订单先做货(<?php echo $this->_tpl_vars['multiple_orders_do_first_cargo_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['invoice_status_return_sales_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/invoice_status_return_sales/index" title="发票状态返回" target="navTab" rel="invoice_status_return_sales" fresh="true" >发票状态返回(<?php echo $this->_tpl_vars['invoice_status_return_sales_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['refund_application_sales_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/refund_application_sales/index" title="退款申请" target="navTab" rel="refund_application_sales" fresh="true" >退款申请(<?php echo $this->_tpl_vars['refund_application_sales_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['goods_free_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/goods_free/index" title="免费做货" target="navTab" rel="goods_free" fresh="true" >免费做货(<?php echo $this->_tpl_vars['goods_free_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['payment_after_goods_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_after_goods/index" title="先做货后付款" target="navTab" rel="payment_after_goods" fresh="true" >先做货后付款(<?php echo $this->_tpl_vars['payment_after_goods_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['payment_after_delivery_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_after_delivery/index" title="先发货后付款" target="navTab" rel="payment_after_delivery" fresh="true" >先发货后付款(<?php echo $this->_tpl_vars['payment_after_delivery_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['goods_after_payment_sales_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/goods_after_payment_sales/index" title="部分付款后做货" target="navTab" rel="goods_after_payment_sales" fresh="true" >部分付款后做货(<?php echo $this->_tpl_vars['goods_after_payment_sales_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['payment_after_shipment_count'] > 0): ?>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_after_shipment/index" title="部分付款后发货" target="navTab" rel="payment_after_shipment" fresh="true" >部分付款后发货(<?php echo $this->_tpl_vars['payment_after_shipment_count']; ?>
条)</a></li>
                    <?php endif; ?>
                    <?php endif; ?>
                  </ul>
                </li>
              </ul>
            </div>
            <div style=" float:left; display:block; margin:10px; overflow:auto; width:22%; height:200px; border:solid 1px #CCC; line-height:21px; background:#FFF;">
              <ul class="tree">
                <li><a href="#">数据资讯</a>
                  <ul>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/enquiries_new_customers/index" target="navTab" rel="enquiries_new_customers" fresh="true" >询盘和新客户数量</a></li>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/national_distribution/index" target="navTab" rel="national_distribution" fresh="true" >国家分布</a></li>
                    <li><a target="_blank" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/map/index" rel="meiguo_map" fresh="true" >美国地图</a></li>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/salesman_month_sales/index" target="navTab" rel="salesman_month_sales" fresh="true" >业务员月销售额</a></li>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/enquiries_transformation/index" target="navTab" rel="enquiries_transformation" fresh="true" >各渠道询盘转化</a></li>
                    <!--                      <li><a href="#">热门材料</a></li>
                      <li><a href="#">设计出图量</a></li>
                      <li><a href="#">设计出图业绩</a></li>
                      <li><a href="#">网站流量</a></li>
                      <li><a href="#">阿里点击量</a></li>-->

                  </ul>
                </li>
              </ul>
            </div>
            <div style=" float:left; display:block; margin:10px; overflow:auto; width:22%; height:200px; border:solid 1px #CCC; line-height:21px; background:#FFF;">
              <ul class="tree">
                <li><a href="#">客户回复周期统计 </a>
                  <ul>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/wuzhouqi" title="无周期" target="navTab" rel="wuzhouqi" fresh="true">无周期数(<?php echo $this->_tpl_vars['wuzhouqi']; ?>
)条</a></li>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/weihuifu" title="未回复" target="navTab" rel="weihuifu" fresh="true">未回复(<?php echo $this->_tpl_vars['weihuifu']; ?>
条)</a></li>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/yizhounei" title="一周内回复" target="navTab" rel="yizhounei" fresh="true">一周内回复(<?php echo $this->_tpl_vars['yizhounei']; ?>
条)</a></li>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/yigeyuenei" title="一个月内回复" target="navTab" rel="yigeyuenei" fresh="true">一个月内回复(<?php echo $this->_tpl_vars['yigeyuenei']; ?>
条)</a></li>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/sangeyuenei" title="三个月内回复" target="navTab" rel="sangeyuenei" fresh="true">三个月内回复(<?php echo $this->_tpl_vars['sangeyuenei']; ?>
条)</a></li>
                    <li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/sangeyueyishang" title="三个月以上回复" target="navTab" rel="sangeyueyishang" fresh="true">三个月以上回复(<?php echo $this->_tpl_vars['sangeyueyishang']; ?>
条)</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <?php if ($this->_tpl_vars['shouyexunpantongji'] == 1): ?>
            <div id="index_container01" style=" float:left; display:block; margin:10px; overflow: auto; width:500px; height:280px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;"> </div>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['shouyeyuexiaoshoue'] == 1): ?>
            <div id="index_container02" style=" float:left; display:block; margin:10px; overflow: auto; width:500px; height:280px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;"> </div>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['chajian'] == 1): ?>

            <!-- 国内新闻 -->
            <!-- <div style="height:20px;">
              
			  <iframe name=sina_roll src="http://news.sina.com.cn/o/allnews/input/index.html" frameborder=No width="660 " scrolling=no height=15 Border=0 marginheight=0 marginwidth=0 ></iframe>    
              </div>
              <br/>
              <br/> 
             
              <div style="width:auto; height:323px;margin-top:500px;">
              	<font style="margin:10px; font-size:18px; font-style: normal;">工作便签:</font><br/>
                <div id="note_model" style=" margin:10px; width:auto; height:300px;">
                	<div id="note_div" style="<?php if ($this->_tpl_vars['note']['id'] == ''): ?>display:none;<?php endif; ?> width:271px; height:275px; border-color:#CCC; border-width:1px; border-style:solid; text-align:center; border-radius:5px 5px 5px 5px;">
                    	<div id="note_info" style="width:271px; height:248px; border-radius:5px 5px 5px 5px;">
                        	<div style="font-size:16px; background-color:#A4D1FF; height:30px; line-height:30px; border-radius:5px 5px 0px 0px;"><?php echo $this->_tpl_vars['note']['time']; ?>
</div>
                            <div style=" background-color:#FFFF8E; height:218px;border-radius:0px 0px 5px 5px; "><div style="line-height:25px; font-size:20px; text-align:left; border-radius:0px 0px 5px 5px; height:218px; width:260px; margin-left:5px;"><?php echo $this->_tpl_vars['note']['note']; ?>
</div></div>
                        </div>
                        <a href="#" style="cursor:pointer; float:left; margin-left:0px;" onclick="get_info(<?php echo $this->_tpl_vars['note']['id']; ?>
);"><button type="button">修改</button></a>
                        <a href="#" style="cursor:pointer; float:right; margin-right:0px;" onclick="del_note(<?php echo $this->_tpl_vars['note']['id']; ?>
);"><button type="button">删除</button></a>
                    </div>
                	<div id="note_text" style="display:none; width:271px; height:275px; border-color:#CCC; border-width:1px; border-style:solid;  border-radius:5px 5px 5px 5px;text-align:center;">
                    	<textarea name="note_textarea" id="note_textarea" style="width:255px; height:242px; line-height:25px; border-radius:5px 5px 5px 5px; resize:none; font-size:20px; background-color:#FFFF8E;" ></textarea>
                        <a href="#" style="cursor:pointer; float:left; margin-left:0px;" onclick="add_info();"><button type="button">确定</button></a>
                        <a href="#" style="cursor:pointer; float:right; margin-right:0px;" onclick="cancel();"><button type="button">取消</button></a>
                    </div>
                	<a href="#" style="cursor:pointer; <?php if ($this->_tpl_vars['note']['id'] != ''): ?>display:none;<?php endif; ?>"  id="add_button" onclick="click_add();"><button type="button">添加新的便签</button></a>
                    
                </div>
              </div> -->
            <?php endif; ?>
            <div style="width:auto; height:300px;margin-top:50px; float:left;"> <font style="margin:10px; font-size:18px; font-style: normal;">新询盘列表</font><br/>
              <div style="width:auto; height:280px; overflow-y:auto;">
                <table width="1300" class="table">
                  <thead>
                  <tr>
                    <th width="2%">编号</th>
                    <th width="3%">状态</th>
                    <!-- <th width="4%">客户代码</th> -->
                    <th width="4%">操作</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php if ($this->_tpl_vars['new_quote']): ?>
                  <?php $_from = $this->_tpl_vars['new_quote']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                  <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']; ?>
">
                    <td><?php echo $this->_tpl_vars['k']; ?>
</td>
                    <td>未领取</td>
                    <!-- <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td> -->
                    <td><a href='/web_inquiries_into/obtain-flag-<?php echo $this->_tpl_vars['user_id']; ?>
-code-<?php echo $this->_tpl_vars['dis']['customer_code']; ?>
-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
' target='_blank'>点击领取</a></td>
                  </tr>
                  <?php endforeach; endif; unset($_from); ?>
                  <?php endif; ?>
                  </tbody>

                </table>
              </div>
            </div>
            <div style="width:auto; height:300px;margin-top:50px; float:left;"> <font style="margin:10px; font-size:18px; font-style: normal;">未回复及回复失败询盘</font><br/>
              <div style="width:auto; height:280px; overflow-y:auto;">
                <table width="1300" class="table">
                  <thead>
                  <tr>
                    <th width="2%">编号</th>
                    <th width="8%">时间</th>
                    <th width="3%">状态</th>
                    <th width="6%">客户名</th>
                    <th width="8%">公司</th>
                    <th width="8%">邮箱</th>
                    <th width="5%">电话</th>
                    <th width="4%">客户代码</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php if ($this->_tpl_vars['web_quote_list']): ?>
                  <?php $_from = $this->_tpl_vars['web_quote_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                  <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
"
                  <?php if ($this->_tpl_vars['dis']['feedback_state'] == '2'): ?>style="color:#f00;"<?php endif; ?>>

                  <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                  <td><?php echo $this->_tpl_vars['dis']['time']; ?>
 <?php if (time ( ) - strtotime ( $this->_tpl_vars['dis']['time'] ) < 86400 && $this->_tpl_vars['dis']['feedback_state'] == '1'): ?><img src='<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/new.gif' ><?php endif; ?></td>
                  <td><?php if ($this->_tpl_vars['dis']['feedback_state'] == '2'): ?>
                    发送失败
                    <?php elseif ($this->_tpl_vars['dis']['feedback_state'] == '1'): ?>
                    未回复
                    <?php endif; ?> </td>
                  <td><?php echo $this->_tpl_vars['dis']['name']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['dis']['company']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['dis']['email']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['dis']['telephone']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                  </tr>
                  <?php endforeach; endif; unset($_from); ?>
                  <?php endif; ?>
                  </tbody>

                </table>
              </div>
            </div>
            <div style="width:100%; height:250px;margin-top:50px; float:left;"> <font style="margin:10px; font-size:18px; font-style: normal;">7天进公共池客户列表</font><br/>
              <div style="width:100%; height:230px; overflow-y:auto;">
                <table width="100%" class="table">
                  <thead>
                  <tr>
                    <th width="8%">添加时间</th>
                    <th width="3%">客户代码</th>
                    <!-- <th width="3%">业务员</th> -->
                    <th width="3%">客户属性</th>
                    <th width="8%">首次询盘时间</th>
                    <th width="8%">最后一次付款时间</th>
                    <th width="8%">最后一次分配时间</th>
                    <th width="8%">最后一次询盘时间</th>
                    <th width="8%">最后一次报价时间</th>
                    <th width="8%">最后一次订单时间</th>
                    <th width="8%">最后一次发票时间</th>
                    <th width="8%">最后一次收信时间</th>
                    <th width="8%">最后一次发信时间</th>
                  </tr>
                  </thead>
                  <tbody style="overflow: auto;height:180px;">
                  <?php if ($this->_tpl_vars['customer_list']): ?>
                  <?php $_from = $this->_tpl_vars['customer_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                  <tr target="sid_user">
                    <td><?php echo $this->_tpl_vars['dis']['insert_time']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                    <!-- <td><?php echo $this->_tpl_vars['dis']['user_id']; ?>
</td> -->
                    <td><?php if ($this->_tpl_vars['dis']['status'] == '2'): ?>
                      老客户
                      <?php elseif ($this->_tpl_vars['dis']['status'] == '1'): ?>
                      新客户
                      <?php endif; ?> </td>
                    <td><?php echo $this->_tpl_vars['dis']['first_quote_time']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['last_pay_time']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['last_change_time']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['last_quote_time']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['last_sheet_time']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['last_order_time']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['last_invoice_time']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['last_receiving_time']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['last_send_time']; ?>
</td>
                  </tr>
                  <?php endforeach; endif; unset($_from); ?>
                  <?php endif; ?>
                  </tbody>

                </table>
              </div>
            </div>
            <!--              <div id="index_container03" style=" float:left; display:block; margin:10px; overflow: auto; width:500px; height:230px; line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;">
              </div>
              <div id="index_container04" style=" float:left; display:block; margin:10px; overflow: auto; width:500px; height:230px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;">
              </div>
              
			  <div id="index_container05" style=" float:left; display:block; margin:10px; overflow: auto; width:1020px; height:500px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;">
              </div>
              -->
          </div>
          <?php endif; ?><!-- 屏蔽供应商判断结束 -->
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div id="footer"><?php echo $this->_tpl_vars['footer']; ?>
</div>
</body>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/highcharts-more.js"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/modules/exporting.js"></script>
<script type="text/javascript">
  //便签**************************************************************************开始****************/
  //添加便签框
  function click_add(){
    $("#note_textarea").val("");
    $("#note_text").css("display",'block');
    $("#note_text").html('<textarea name="note_textarea" id="note_textarea" style="width:255px; height:248px; line-height:25px; resize:none; font-size:20px; background-color:#FFFF8E; border-radius:5px 5px 5px 5px;"></textarea>'+
            '<a href="#" style="cursor:pointer; float:left; margin-left:0px;" onclick="up_info();"><button type="button">确定</button></a>'+
            '<a href="#" style="cursor:pointer; float:right; margin-right:0px;" onclick="up_cancel();"><button type="button">取消</button></a>'
    );
    $("#add_button").css("display","none");
  }
  //添加便签信息
  function add_info(){
    var val	=	$("#note_textarea").val();
    if(val!=''){
      $.ajax({
        url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/index/add_info',
        data:{'val':val},
        type:"post",
        dataType:'json',
        success: function(data){
          if(data.err==0){
            alert(data.message);
            $("#note_text").css("display",'none');
            $("#note_div").css("display","block");
            $("#note_div").html("");
            $("#note_div").append('<div id="note_info" style="width:271px; height:248px; border-radius:5px 5px 5px 5px;">'+
                    '<div style="font-size:16px; background-color:#A4D1FF; height:30px;line-height:30px; border-radius:5px 5px 0px 0px;">'+data.time+
                    '</div>'+
                    '<div style=" background-color:#FFFF8E; height:218px;border-radius:0px 0px 5px 5px; "><div style="line-height:25px; font-size:20px; text-align:left; border-radius:0px 0px 5px 5px; height:218px; width:260px; margin-left:5px;">'+data.text+
                    '</div></div>'+
                    '</div>'+
                    '<a href="#" style="cursor:pointer; float:left; margin-left:0px;" onclick="get_info('+data.id+');"><button type="button">修改</button></a>'+
                    '<a href="#" style="cursor:pointer; float:right; margin-right:0px;" onclick="del_note('+data.id+');"><button type="button">删除</button></a>'
            );
          }else{
            alert(data.message);
          }
        }
      });
    }else{
      alert("内容不能为空！");
    }
  }
  //取消便签框架
  function cancel(){
    $("#note_text").css("display",'none');
    $("#add_button").css("display","block");
  }
  //修改便签框架
  function get_info(id){
    if(id!=''){
      $.ajax({
        url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/index/get_info',
        data:{'id':id},
        type:"post",
        dataType:'json',
        success: function(data){
          $("#note_div").css("display",'none');
          $("#note_text").css("display","block");
          $("#note_text").html("");
          $("#note_text").html('<textarea name="note_textarea" id="note_textarea" style="width:255px; height:248px; line-height:25px; resize:none; font-size:20px; background-color:#FFFF8E; border-radius:5px 5px 5px 5px;">'+data.note+'</textarea>'+
                  '<a href="#" style="cursor:pointer; float:left; margin-left:0px;" onclick="up_info('+data.id+');"><button type="button">确定</button></a>'+
                  '<a href="#" style="cursor:pointer; float:right; margin-right:0px;" onclick="up_cancel();"><button type="button">取消</button></a>'
          );
        }
      });
    }else{
      alert("id不能为空！");
    }
  }
  //修改便签内容
  function up_info(id){
    var val	=	$("#note_textarea").val();
    if(val!=''){
      $.ajax({
        url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/index/add_info',
        data:{'val':val,'id':id},
        type:"post",
        dataType:'json',
        success: function(data){
          if(data.err==0){
            alert(data.message);
            $("#note_text").css("display",'none');
            $("#note_div").css("display","block");
            $("#note_div").html("");
            $("#note_div").append('<div id="note_info" style="width:271px; height:248px; border-radius:5px 5px 5px 5px;">'+
                    '<div style="font-size:16px; background-color:#A4D1FF; height:30px;line-height:30px; border-radius:5px 5px 0px 0px;">'+data.time+
                    '</div>'+
                    '<div style=" background-color:#FFFF8E; height:218px;border-radius:0px 0px 5px 5px; "><div style="line-height:25px; font-size:20px; text-align:left; border-radius:0px 0px 5px 5px; height:218px; width:260px; margin-left:5px;">'+data.text+
                    '</div></div>'+
                    '</div>'+
                    '<a href="#" style="cursor:pointer; float:left; margin-left:0px;" onclick="get_info('+data.id+');"><button type="button">修改</button></a>'+
                    '<a href="#" style="cursor:pointer; float:right; margin-right:0px;" onclick="del_note('+data.id+');"><button type="button">删除</button></a>'
            );
          }else{
            alert(data.message);
          }
        }
      });
    }else{
      alert("内容不能为空！");
    }
  }

  //修改中的取消关闭便签
  function up_cancel(){
    $("#note_text").css("display",'none');
    $("#note_div").css("display","block");
  }
  //删除便签
  function del_note(id){
    if(id!=''){
      $.ajax({
        url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/index/del_note',
        data:{'id':id},
        type:"post",
        dataType:'json',
        success: function(data){
          if(data.err==0){
            alert(data.message);
            $("#add_button").css("display","block");
            $("#note_div").css("display",'none');
          }else{
            alert(data.message);
          }
        }
      });
    }else{
      alert("id不能为空！");
    }
  }

  //便签*****************************************************************************************结束*******************/
  $(function () {
    var chart;

    /*var year_2012_1 = <?php echo $this->_tpl_vars['year_2012_01']; ?>
;
    var year_2012_2 = <?php echo $this->_tpl_vars['year_2012_02']; ?>
;
    var year_2012_3 = <?php echo $this->_tpl_vars['year_2012_03']; ?>
;
    var year_2012_4 = <?php echo $this->_tpl_vars['year_2012_04']; ?>
;
    var year_2012_5 = <?php echo $this->_tpl_vars['year_2012_05']; ?>
;
    var year_2012_6 = <?php echo $this->_tpl_vars['year_2012_06']; ?>
;
    var year_2012_7 = <?php echo $this->_tpl_vars['year_2012_07']; ?>
;
    var year_2012_8 = <?php echo $this->_tpl_vars['year_2012_08']; ?>
;
    var year_2012_9 = <?php echo $this->_tpl_vars['year_2012_09']; ?>
;
    var year_2012_10 = <?php echo $this->_tpl_vars['year_2012_10']; ?>
;
    var year_2012_11 = <?php echo $this->_tpl_vars['year_2012_11']; ?>
;
    var year_2012_12 = <?php echo $this->_tpl_vars['year_2012_12']; ?>
;

    var year_2013_1 = <?php echo $this->_tpl_vars['year_2013_01']; ?>
;
    var year_2013_2 = <?php echo $this->_tpl_vars['year_2013_02']; ?>
;
    var year_2013_3 = <?php echo $this->_tpl_vars['year_2013_03']; ?>
;
    var year_2013_4 = <?php echo $this->_tpl_vars['year_2013_04']; ?>
;
    var year_2013_5 = <?php echo $this->_tpl_vars['year_2013_05']; ?>
;
    var year_2013_6 = <?php echo $this->_tpl_vars['year_2013_06']; ?>
;
    var year_2013_7 = <?php echo $this->_tpl_vars['year_2013_07']; ?>
;
    var year_2013_8 = <?php echo $this->_tpl_vars['year_2013_08']; ?>
;
    var year_2013_9 = <?php echo $this->_tpl_vars['year_2013_09']; ?>
;
    var year_2013_10 = <?php echo $this->_tpl_vars['year_2013_10']; ?>
;
    var year_2013_11 = <?php echo $this->_tpl_vars['year_2013_11']; ?>
;
    var year_2013_12 = <?php echo $this->_tpl_vars['year_2013_12']; ?>
;

    var year_2014_1 = <?php echo $this->_tpl_vars['year_2014_01']; ?>
;
    var year_2014_2 = <?php echo $this->_tpl_vars['year_2014_02']; ?>
;
    var year_2014_3 = <?php echo $this->_tpl_vars['year_2014_03']; ?>
;
    var year_2014_4 = <?php echo $this->_tpl_vars['year_2014_04']; ?>
;
    var year_2014_5 = <?php echo $this->_tpl_vars['year_2014_05']; ?>
;
    var year_2014_6 = <?php echo $this->_tpl_vars['year_2014_06']; ?>
;
    var year_2014_7 = <?php echo $this->_tpl_vars['year_2014_07']; ?>
;
    var year_2014_8 = <?php echo $this->_tpl_vars['year_2014_08']; ?>
;
    var year_2014_9 = <?php echo $this->_tpl_vars['year_2014_09']; ?>
;
    var year_2014_10 = <?php echo $this->_tpl_vars['year_2014_10']; ?>
;
    var year_2014_11 = <?php echo $this->_tpl_vars['year_2014_11']; ?>
;
    var year_2014_12 = <?php echo $this->_tpl_vars['year_2014_12']; ?>
;*/

    var year_2015_1 = <?php echo $this->_tpl_vars['year_2015_01']; ?>
;
  var year_2015_2 = <?php echo $this->_tpl_vars['year_2015_02']; ?>
;
  var year_2015_3 = <?php echo $this->_tpl_vars['year_2015_03']; ?>
;
  var year_2015_4 = <?php echo $this->_tpl_vars['year_2015_04']; ?>
;
  var year_2015_5 = <?php echo $this->_tpl_vars['year_2015_05']; ?>
;
  var year_2015_6 = <?php echo $this->_tpl_vars['year_2015_06']; ?>
;
  var year_2015_7 = <?php echo $this->_tpl_vars['year_2015_07']; ?>
;
  var year_2015_8 = <?php echo $this->_tpl_vars['year_2015_08']; ?>
;
  var year_2015_9 = <?php echo $this->_tpl_vars['year_2015_09']; ?>
;
  var year_2015_10 = <?php echo $this->_tpl_vars['year_2015_10']; ?>
;
  var year_2015_11 = <?php echo $this->_tpl_vars['year_2015_11']; ?>
;
  var year_2015_12 = <?php echo $this->_tpl_vars['year_2015_12']; ?>
;

  var year_2016_1 = <?php echo $this->_tpl_vars['year_2016_01']; ?>
;
  var year_2016_2 = <?php echo $this->_tpl_vars['year_2016_02']; ?>
;
  var year_2016_3 = <?php echo $this->_tpl_vars['year_2016_03']; ?>
;
  var year_2016_4 = <?php echo $this->_tpl_vars['year_2016_04']; ?>
;
  var year_2016_5 = <?php echo $this->_tpl_vars['year_2016_05']; ?>
;
  var year_2016_6 = <?php echo $this->_tpl_vars['year_2016_06']; ?>
;
  var year_2016_7 = <?php echo $this->_tpl_vars['year_2016_07']; ?>
;
  var year_2016_8 = <?php echo $this->_tpl_vars['year_2016_08']; ?>
;
  var year_2016_9 = <?php echo $this->_tpl_vars['year_2016_09']; ?>
;
  var year_2016_10 = <?php echo $this->_tpl_vars['year_2016_10']; ?>
;
  var year_2016_11 = <?php echo $this->_tpl_vars['year_2016_11']; ?>
;
  var year_2016_12 = <?php echo $this->_tpl_vars['year_2016_12']; ?>
;

  var year_2017_1 = <?php echo $this->_tpl_vars['year_2017_01']; ?>
;
  var year_2017_2 = <?php echo $this->_tpl_vars['year_2017_02']; ?>
;
  var year_2017_3 = <?php echo $this->_tpl_vars['year_2017_03']; ?>
;
  var year_2017_4 = <?php echo $this->_tpl_vars['year_2017_04']; ?>
;
  var year_2017_5 = <?php echo $this->_tpl_vars['year_2017_05']; ?>
;
  var year_2017_6 = <?php echo $this->_tpl_vars['year_2017_06']; ?>
;
  var year_2017_7 = <?php echo $this->_tpl_vars['year_2017_07']; ?>
;
  var year_2017_8 = <?php echo $this->_tpl_vars['year_2017_08']; ?>
;
  var year_2017_9 = <?php echo $this->_tpl_vars['year_2017_09']; ?>
;
  var year_2017_10 = <?php echo $this->_tpl_vars['year_2017_10']; ?>
;
  var year_2017_11 = <?php echo $this->_tpl_vars['year_2017_11']; ?>
;
  var year_2017_12 = <?php echo $this->_tpl_vars['year_2017_12']; ?>
;

  var year_2018_1 = <?php echo $this->_tpl_vars['year_2018_01']; ?>
;
  var year_2018_2 = <?php echo $this->_tpl_vars['year_2018_02']; ?>
;
  var year_2018_3 = <?php echo $this->_tpl_vars['year_2018_03']; ?>
;
  var year_2018_4 = <?php echo $this->_tpl_vars['year_2018_04']; ?>
;
  var year_2018_5 = <?php echo $this->_tpl_vars['year_2018_05']; ?>
;
  var year_2018_6 = <?php echo $this->_tpl_vars['year_2018_06']; ?>
;
  var year_2018_7 = <?php echo $this->_tpl_vars['year_2018_07']; ?>
;
  var year_2018_8 = <?php echo $this->_tpl_vars['year_2018_08']; ?>
;
  var year_2018_9 = <?php echo $this->_tpl_vars['year_2018_09']; ?>
;
  var year_2018_10 = <?php echo $this->_tpl_vars['year_2018_10']; ?>
;
  var year_2018_11 = <?php echo $this->_tpl_vars['year_2018_11']; ?>
;
  var year_2018_12 = <?php echo $this->_tpl_vars['year_2018_12']; ?>
;

  var year_2019_1 = <?php echo $this->_tpl_vars['year_2019_01']; ?>
;
  var year_2019_2 = <?php echo $this->_tpl_vars['year_2019_02']; ?>
;
  var year_2019_3 = <?php echo $this->_tpl_vars['year_2019_03']; ?>
;
  var year_2019_4 = <?php echo $this->_tpl_vars['year_2019_04']; ?>
;
  var year_2019_5 = <?php echo $this->_tpl_vars['year_2019_05']; ?>
;
  var year_2019_6 = <?php echo $this->_tpl_vars['year_2019_06']; ?>
;
  var year_2019_7 = <?php echo $this->_tpl_vars['year_2019_07']; ?>
;
  var year_2019_8 = <?php echo $this->_tpl_vars['year_2019_08']; ?>
;
  var year_2019_9 = <?php echo $this->_tpl_vars['year_2019_09']; ?>
;
  var year_2019_10 = <?php echo $this->_tpl_vars['year_2019_10']; ?>
;
  var year_2019_11 = <?php echo $this->_tpl_vars['year_2019_11']; ?>
;
  var year_2019_12 = <?php echo $this->_tpl_vars['year_2019_12']; ?>
;

  var year_2020_1 = <?php echo $this->_tpl_vars['year_2020_01']; ?>
;
  var year_2020_2 = <?php echo $this->_tpl_vars['year_2020_02']; ?>
;
  var year_2020_3 = <?php echo $this->_tpl_vars['year_2020_03']; ?>
;
  var year_2020_4 = <?php echo $this->_tpl_vars['year_2020_04']; ?>
;
  var year_2020_5 = <?php echo $this->_tpl_vars['year_2020_05']; ?>
;
  var year_2020_6 = <?php echo $this->_tpl_vars['year_2020_06']; ?>
;
  var year_2020_7 = <?php echo $this->_tpl_vars['year_2020_07']; ?>
;
  var year_2020_8 = <?php echo $this->_tpl_vars['year_2020_08']; ?>
;
  var year_2020_9 = <?php echo $this->_tpl_vars['year_2020_09']; ?>
;
  var year_2020_10 = <?php echo $this->_tpl_vars['year_2020_10']; ?>
;
  var year_2020_11 = <?php echo $this->_tpl_vars['year_2020_11']; ?>
;
  var year_2020_12 = <?php echo $this->_tpl_vars['year_2020_12']; ?>
;

  var year_2021_1 = <?php echo $this->_tpl_vars['year_2021_01']; ?>
;
  var year_2021_2 = <?php echo $this->_tpl_vars['year_2021_02']; ?>
;
  var year_2021_3 = <?php echo $this->_tpl_vars['year_2021_03']; ?>
;
  var year_2021_4 = <?php echo $this->_tpl_vars['year_2021_04']; ?>
;
  var year_2021_5 = <?php echo $this->_tpl_vars['year_2021_05']; ?>
;
  var year_2021_6 = <?php echo $this->_tpl_vars['year_2021_06']; ?>
;
  var year_2021_7 = <?php echo $this->_tpl_vars['year_2021_07']; ?>
;
  var year_2021_8 = <?php echo $this->_tpl_vars['year_2021_08']; ?>
;
  var year_2021_9 = <?php echo $this->_tpl_vars['year_2021_09']; ?>
;
  var year_2021_10 = <?php echo $this->_tpl_vars['year_2021_10']; ?>
;
  var year_2021_11 = <?php echo $this->_tpl_vars['year_2021_11']; ?>
;
  var year_2021_12 = <?php echo $this->_tpl_vars['year_2021_12']; ?>
;

  var year_2022_1 = <?php echo $this->_tpl_vars['year_2022_01']; ?>
;
  var year_2022_2 = <?php echo $this->_tpl_vars['year_2022_02']; ?>
;
  var year_2022_3 = <?php echo $this->_tpl_vars['year_2022_03']; ?>
;
  var year_2022_4 = <?php echo $this->_tpl_vars['year_2022_04']; ?>
;
  var year_2022_5 = <?php echo $this->_tpl_vars['year_2022_05']; ?>
;
  var year_2022_6 = <?php echo $this->_tpl_vars['year_2022_06']; ?>
;
  var year_2022_7 = <?php echo $this->_tpl_vars['year_2022_07']; ?>
;
  var year_2022_8 = <?php echo $this->_tpl_vars['year_2022_08']; ?>
;
  var year_2022_9 = <?php echo $this->_tpl_vars['year_2022_09']; ?>
;
  var year_2022_10 = <?php echo $this->_tpl_vars['year_2022_10']; ?>
;
  var year_2022_11 = <?php echo $this->_tpl_vars['year_2022_11']; ?>
;
  var year_2022_12 = <?php echo $this->_tpl_vars['year_2022_12']; ?>
;


  $(document).ready(function() {
    chart = new Highcharts.Chart({
      chart: {
        renderTo: 'index_container01',
        type: 'line',
        marginRight: 100,
        marginBottom: 25
      },
      title: {
        text: '询盘数量统计',
        x: -20 //center
      },
      subtitle: {
        text: '',
        x: -20
      },
      xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
          'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
      },
      yAxis: {
        title: {
          text: '询盘数量（个）'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },
      tooltip: {
        formatter: function() {
          return "<b><a href='http://www.baidu.com' target='navTab' >"+ this.series.name +"</a></b><br/>"+   //加HTML代码
                  this.x +": "+ this.y +"个";
        }
      },
      legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -10,
        y: 100,
        borderWidth: 0
      },



      series: [{
        name: '2022',
        data: [year_2022_1, year_2022_2, year_2022_3, year_2022_4, year_2022_5, year_2022_6, year_2022_7, year_2022_8, year_2022_9, year_2022_10, year_2022_11, year_2022_12]
      },
        {
          name: '2021',
          data: [year_2021_1, year_2021_2, year_2021_3, year_2021_4, year_2021_5, year_2021_6, year_2021_7, year_2021_8, year_2021_9, year_2021_10, year_2021_11, year_2021_12]
        },
        {
          name: '2020',
          data: [year_2020_1, year_2020_2, year_2020_3, year_2020_4, year_2020_5, year_2020_6, year_2020_7, year_2020_8, year_2020_9, year_2020_10, year_2020_11, year_2020_12]
        },
        {
          name: '2019',
          data: [year_2019_1, year_2019_2, year_2019_3, year_2019_4, year_2019_5, year_2019_6, year_2019_7, year_2019_8, year_2019_9, year_2019_10, year_2019_11, year_2019_12]
        },
        {
          name: '2018',
          data: [year_2018_1, year_2018_2, year_2018_3, year_2018_4, year_2018_5, year_2018_6, year_2018_7, year_2018_8, year_2018_9, year_2018_10, year_2018_11, year_2018_12]
        },
        {
          name: '2017',
          data: [year_2017_1, year_2017_2, year_2017_3, year_2017_4, year_2017_5, year_2017_6, year_2017_7, year_2017_8, year_2017_9, year_2017_10, year_2017_11, year_2017_12]
        },
        {
          name: '2016',
          data: [year_2016_1, year_2016_2, year_2016_3, year_2016_4, year_2016_5, year_2016_6, year_2016_7, year_2016_8, year_2016_9, year_2016_10, year_2016_11, year_2016_12]
        },
        {
          name: '2015',
          data: [year_2015_1, year_2015_2, year_2015_3, year_2015_4, year_2015_5, year_2015_6, year_2015_7, year_2015_8, year_2015_9, year_2015_10, year_2015_11, year_2015_12]
        }/*,
			{
                name: '2014',
                data: [year_2014_1, year_2014_2, year_2014_3, year_2014_4, year_2014_5, year_2014_6, year_2014_7, year_2014_8, year_2014_9, year_2014_10, year_2014_11, year_2014_12]
            }, {
                name: '2013',
                data: [year_2013_1, year_2013_2, year_2013_3, year_2013_4, year_2013_5, year_2013_6, year_2013_7, year_2013_8, year_2013_9, year_2013_10, year_2013_11, year_2013_12]
            }, {
                name: '2012',
                data: [year_2012_1, year_2012_2, year_2012_3, year_2012_4, year_2012_5, year_2012_6, year_2012_7, year_2012_8, year_2012_9, year_2012_10, year_2012_11, year_2012_12]
            }*/]
    });

  });

  });

  $(function () {
    var chart;

    var sales_2022_01 = <?php echo $this->_tpl_vars['sales_2022_01']; ?>
;
  var sales_2022_02 = <?php echo $this->_tpl_vars['sales_2022_02']; ?>
;
  var sales_2022_03 = <?php echo $this->_tpl_vars['sales_2022_03']; ?>
;
  var sales_2022_04 = <?php echo $this->_tpl_vars['sales_2022_04']; ?>
;
  var sales_2022_05 = <?php echo $this->_tpl_vars['sales_2022_05']; ?>
;
  var sales_2022_06 = <?php echo $this->_tpl_vars['sales_2022_06']; ?>
;
  var sales_2022_07 = <?php echo $this->_tpl_vars['sales_2022_07']; ?>
;
  var sales_2022_08 = <?php echo $this->_tpl_vars['sales_2022_08']; ?>
;
  var sales_2022_09 = <?php echo $this->_tpl_vars['sales_2022_09']; ?>
;
  var sales_2022_10 = <?php echo $this->_tpl_vars['sales_2022_10']; ?>
;
  var sales_2022_11 = <?php echo $this->_tpl_vars['sales_2022_11']; ?>
;
  var sales_2022_12 = <?php echo $this->_tpl_vars['sales_2022_12']; ?>
;

  var sales_2021_01 = <?php echo $this->_tpl_vars['sales_2021_01']; ?>
;
  var sales_2021_02 = <?php echo $this->_tpl_vars['sales_2021_02']; ?>
;
  var sales_2021_03 = <?php echo $this->_tpl_vars['sales_2021_03']; ?>
;
  var sales_2021_04 = <?php echo $this->_tpl_vars['sales_2021_04']; ?>
;
  var sales_2021_05 = <?php echo $this->_tpl_vars['sales_2021_05']; ?>
;
  var sales_2021_06 = <?php echo $this->_tpl_vars['sales_2021_06']; ?>
;
  var sales_2021_07 = <?php echo $this->_tpl_vars['sales_2021_07']; ?>
;
  var sales_2021_08 = <?php echo $this->_tpl_vars['sales_2021_08']; ?>
;
  var sales_2021_09 = <?php echo $this->_tpl_vars['sales_2021_09']; ?>
;
  var sales_2021_10 = <?php echo $this->_tpl_vars['sales_2021_10']; ?>
;
  var sales_2021_11 = <?php echo $this->_tpl_vars['sales_2021_11']; ?>
;
  var sales_2021_12 = <?php echo $this->_tpl_vars['sales_2021_12']; ?>
;

  var sales_2020_01 = <?php echo $this->_tpl_vars['sales_2020_01']; ?>
;
  var sales_2020_02 = <?php echo $this->_tpl_vars['sales_2020_02']; ?>
;
  var sales_2020_03 = <?php echo $this->_tpl_vars['sales_2020_03']; ?>
;
  var sales_2020_04 = <?php echo $this->_tpl_vars['sales_2020_04']; ?>
;
  var sales_2020_05 = <?php echo $this->_tpl_vars['sales_2020_05']; ?>
;
  var sales_2020_06 = <?php echo $this->_tpl_vars['sales_2020_06']; ?>
;
  var sales_2020_07 = <?php echo $this->_tpl_vars['sales_2020_07']; ?>
;
  var sales_2020_08 = <?php echo $this->_tpl_vars['sales_2020_08']; ?>
;
  var sales_2020_09 = <?php echo $this->_tpl_vars['sales_2020_09']; ?>
;
  var sales_2020_10 = <?php echo $this->_tpl_vars['sales_2020_10']; ?>
;
  var sales_2020_11 = <?php echo $this->_tpl_vars['sales_2020_11']; ?>
;
  var sales_2020_12 = <?php echo $this->_tpl_vars['sales_2020_12']; ?>
;

  var sales_2019_01 = <?php echo $this->_tpl_vars['sales_2019_01']; ?>
;
  var sales_2019_02 = <?php echo $this->_tpl_vars['sales_2019_02']; ?>
;
  var sales_2019_03 = <?php echo $this->_tpl_vars['sales_2019_03']; ?>
;
  var sales_2019_04 = <?php echo $this->_tpl_vars['sales_2019_04']; ?>
;
  var sales_2019_05 = <?php echo $this->_tpl_vars['sales_2019_05']; ?>
;
  var sales_2019_06 = <?php echo $this->_tpl_vars['sales_2019_06']; ?>
;
  var sales_2019_07 = <?php echo $this->_tpl_vars['sales_2019_07']; ?>
;
  var sales_2019_08 = <?php echo $this->_tpl_vars['sales_2019_08']; ?>
;
  var sales_2019_09 = <?php echo $this->_tpl_vars['sales_2019_09']; ?>
;
  var sales_2019_10 = <?php echo $this->_tpl_vars['sales_2019_10']; ?>
;
  var sales_2019_11 = <?php echo $this->_tpl_vars['sales_2019_11']; ?>
;
  var sales_2019_12 = <?php echo $this->_tpl_vars['sales_2019_12']; ?>
;

  var sales_2018_01 = <?php echo $this->_tpl_vars['sales_2018_01']; ?>
;
  var sales_2018_02 = <?php echo $this->_tpl_vars['sales_2018_02']; ?>
;
  var sales_2018_03 = <?php echo $this->_tpl_vars['sales_2018_03']; ?>
;
  var sales_2018_04 = <?php echo $this->_tpl_vars['sales_2018_04']; ?>
;
  var sales_2018_05 = <?php echo $this->_tpl_vars['sales_2018_05']; ?>
;
  var sales_2018_06 = <?php echo $this->_tpl_vars['sales_2018_06']; ?>
;
  var sales_2018_07 = <?php echo $this->_tpl_vars['sales_2018_07']; ?>
;
  var sales_2018_08 = <?php echo $this->_tpl_vars['sales_2018_08']; ?>
;
  var sales_2018_09 = <?php echo $this->_tpl_vars['sales_2018_09']; ?>
;
  var sales_2018_10 = <?php echo $this->_tpl_vars['sales_2018_10']; ?>
;
  var sales_2018_11 = <?php echo $this->_tpl_vars['sales_2018_11']; ?>
;
  var sales_2018_12 = <?php echo $this->_tpl_vars['sales_2018_12']; ?>
;

  var sales_2017_01 = <?php echo $this->_tpl_vars['sales_2017_01']; ?>
;
  var sales_2017_02 = <?php echo $this->_tpl_vars['sales_2017_02']; ?>
;
  var sales_2017_03 = <?php echo $this->_tpl_vars['sales_2017_03']; ?>
;
  var sales_2017_04 = <?php echo $this->_tpl_vars['sales_2017_04']; ?>
;
  var sales_2017_05 = <?php echo $this->_tpl_vars['sales_2017_05']; ?>
;
  var sales_2017_06 = <?php echo $this->_tpl_vars['sales_2017_06']; ?>
;
  var sales_2017_07 = <?php echo $this->_tpl_vars['sales_2017_07']; ?>
;
  var sales_2017_08 = <?php echo $this->_tpl_vars['sales_2017_08']; ?>
;
  var sales_2017_09 = <?php echo $this->_tpl_vars['sales_2017_09']; ?>
;
  var sales_2017_10 = <?php echo $this->_tpl_vars['sales_2017_10']; ?>
;
  var sales_2017_11 = <?php echo $this->_tpl_vars['sales_2017_11']; ?>
;
  var sales_2017_12 = <?php echo $this->_tpl_vars['sales_2017_12']; ?>
;

  var sales_2016_01 = <?php echo $this->_tpl_vars['sales_2016_01']; ?>
;
  var sales_2016_02 = <?php echo $this->_tpl_vars['sales_2016_02']; ?>
;
  var sales_2016_03 = <?php echo $this->_tpl_vars['sales_2016_03']; ?>
;
  var sales_2016_04 = <?php echo $this->_tpl_vars['sales_2016_04']; ?>
;
  var sales_2016_05 = <?php echo $this->_tpl_vars['sales_2016_05']; ?>
;
  var sales_2016_06 = <?php echo $this->_tpl_vars['sales_2016_06']; ?>
;
  var sales_2016_07 = <?php echo $this->_tpl_vars['sales_2016_07']; ?>
;
  var sales_2016_08 = <?php echo $this->_tpl_vars['sales_2016_08']; ?>
;
  var sales_2016_09 = <?php echo $this->_tpl_vars['sales_2016_09']; ?>
;
  var sales_2016_10 = <?php echo $this->_tpl_vars['sales_2016_10']; ?>
;
  var sales_2016_11 = <?php echo $this->_tpl_vars['sales_2016_11']; ?>
;
  var sales_2016_12 = <?php echo $this->_tpl_vars['sales_2016_12']; ?>
;

  var sales_2015_01 = <?php echo $this->_tpl_vars['sales_2015_01']; ?>
;
  var sales_2015_02 = <?php echo $this->_tpl_vars['sales_2015_02']; ?>
;
  var sales_2015_03 = <?php echo $this->_tpl_vars['sales_2015_03']; ?>
;
  var sales_2015_04 = <?php echo $this->_tpl_vars['sales_2015_04']; ?>
;
  var sales_2015_05 = <?php echo $this->_tpl_vars['sales_2015_05']; ?>
;
  var sales_2015_06 = <?php echo $this->_tpl_vars['sales_2015_06']; ?>
;
  var sales_2015_07 = <?php echo $this->_tpl_vars['sales_2015_07']; ?>
;
  var sales_2015_08 = <?php echo $this->_tpl_vars['sales_2015_08']; ?>
;
  var sales_2015_09 = <?php echo $this->_tpl_vars['sales_2015_09']; ?>
;
  var sales_2015_10 = <?php echo $this->_tpl_vars['sales_2015_10']; ?>
;
  var sales_2015_11 = <?php echo $this->_tpl_vars['sales_2015_11']; ?>
;
  var sales_2015_12 = <?php echo $this->_tpl_vars['sales_2015_12']; ?>
;

  /*var sales_2014_01 = <?php echo $this->_tpl_vars['sales_2014_01']; ?>
;
  var sales_2014_02 = <?php echo $this->_tpl_vars['sales_2014_02']; ?>
;
  var sales_2014_03 = <?php echo $this->_tpl_vars['sales_2014_03']; ?>
;
  var sales_2014_04 = <?php echo $this->_tpl_vars['sales_2014_04']; ?>
;
  var sales_2014_05 = <?php echo $this->_tpl_vars['sales_2014_05']; ?>
;
  var sales_2014_06 = <?php echo $this->_tpl_vars['sales_2014_06']; ?>
;
  var sales_2014_07 = <?php echo $this->_tpl_vars['sales_2014_07']; ?>
;
  var sales_2014_08 = <?php echo $this->_tpl_vars['sales_2014_08']; ?>
;
  var sales_2014_09 = <?php echo $this->_tpl_vars['sales_2014_09']; ?>
;
  var sales_2014_10 = <?php echo $this->_tpl_vars['sales_2014_10']; ?>
;
  var sales_2014_11 = <?php echo $this->_tpl_vars['sales_2014_11']; ?>
;
  var sales_2014_12 = <?php echo $this->_tpl_vars['sales_2014_12']; ?>
;

  var sales_2013_01 = <?php echo $this->_tpl_vars['sales_2013_01']; ?>
;
  var sales_2013_02 = <?php echo $this->_tpl_vars['sales_2013_02']; ?>
;
  var sales_2013_03 = <?php echo $this->_tpl_vars['sales_2013_03']; ?>
;
  var sales_2013_04 = <?php echo $this->_tpl_vars['sales_2013_04']; ?>
;
  var sales_2013_05 = <?php echo $this->_tpl_vars['sales_2013_05']; ?>
;
  var sales_2013_06 = <?php echo $this->_tpl_vars['sales_2013_06']; ?>
;
  var sales_2013_07 = <?php echo $this->_tpl_vars['sales_2013_07']; ?>
;
  var sales_2013_08 = <?php echo $this->_tpl_vars['sales_2013_08']; ?>
;
  var sales_2013_09 = <?php echo $this->_tpl_vars['sales_2013_09']; ?>
;
  var sales_2013_10 = <?php echo $this->_tpl_vars['sales_2013_10']; ?>
;
  var sales_2013_11 = <?php echo $this->_tpl_vars['sales_2013_11']; ?>
;
  var sales_2013_12 = <?php echo $this->_tpl_vars['sales_2013_12']; ?>
;

  var sales_2012_01 = <?php echo $this->_tpl_vars['sales_2012_01']; ?>
;
  var sales_2012_02 = <?php echo $this->_tpl_vars['sales_2012_02']; ?>
;
  var sales_2012_03 = <?php echo $this->_tpl_vars['sales_2012_03']; ?>
;
  var sales_2012_04 = <?php echo $this->_tpl_vars['sales_2012_04']; ?>
;
  var sales_2012_05 = <?php echo $this->_tpl_vars['sales_2012_05']; ?>
;
  var sales_2012_06 = <?php echo $this->_tpl_vars['sales_2012_06']; ?>
;
  var sales_2012_07 = <?php echo $this->_tpl_vars['sales_2012_07']; ?>
;
  var sales_2012_08 = <?php echo $this->_tpl_vars['sales_2012_08']; ?>
;
  var sales_2012_09 = <?php echo $this->_tpl_vars['sales_2012_09']; ?>
;
  var sales_2012_10 = <?php echo $this->_tpl_vars['sales_2012_10']; ?>
;
  var sales_2012_11 = <?php echo $this->_tpl_vars['sales_2012_11']; ?>
;
  var sales_2012_12 = <?php echo $this->_tpl_vars['sales_2012_12']; ?>
;*/


  $(document).ready(function() {
    chart = new Highcharts.Chart({
      chart: {
        renderTo: 'index_container02',
        type: 'line',
        marginRight: 100,
        marginBottom: 25
      },
      title: {
        text: '月销售额',
        x: -20 //center
      },
      subtitle: {
        text: '',
        x: -20
      },
      xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
          'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
      },
      yAxis: {
        title: {
          text: '金额（美元）'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },
      tooltip: {
        formatter: function() {
          return "<b><a href='http://www.baidu.com' target='navTab' >"+ this.series.name +"</a></b><br/>"+   //加HTML代码
                  this.x +": "+ "$" + this.y ;
        }
      },
      legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -10,
        y: 100,
        borderWidth: 0
      },
      series: [{

        name: '2022',
        data: [sales_2022_01, sales_2022_02, sales_2022_03, sales_2022_04, sales_2022_05, sales_2022_06, sales_2022_07, sales_2022_08, sales_2022_09, sales_2022_10, sales_2022_11, sales_2022_12]
      },{

        name: '2021',
        data: [sales_2021_01, sales_2021_02, sales_2021_03, sales_2021_04, sales_2021_05, sales_2021_06, sales_2021_07, sales_2021_08, sales_2021_09, sales_2021_10, sales_2021_11, sales_2021_12]
      },{

        name: '2020',
        data: [sales_2020_01, sales_2020_02, sales_2020_03, sales_2020_04, sales_2020_05, sales_2020_06, sales_2020_07, sales_2020_08, sales_2020_09, sales_2020_10, sales_2020_11, sales_2020_12]
      },{

        name: '2019',
        data: [sales_2019_01, sales_2019_02, sales_2019_03, sales_2019_04, sales_2019_05, sales_2019_06, sales_2019_07, sales_2019_08, sales_2019_09, sales_2019_10, sales_2019_11, sales_2019_12]
      },{

        name: '2018',
        data: [sales_2018_01, sales_2018_02, sales_2018_03, sales_2018_04, sales_2018_05, sales_2018_06, sales_2018_07, sales_2018_08, sales_2018_09, sales_2018_10, sales_2018_11, sales_2018_12]
      },{
        name: '2017',
        data: [sales_2017_01, sales_2017_02, sales_2017_03, sales_2017_04, sales_2017_05, sales_2017_06, sales_2017_07, sales_2017_08, sales_2017_09, sales_2017_10, sales_2017_11, sales_2017_12]
      },{
        name: '2016',
        data: [sales_2016_01, sales_2016_02, sales_2016_03, sales_2016_04, sales_2016_05, sales_2016_06, sales_2016_07, sales_2016_08, sales_2016_09, sales_2016_10, sales_2016_11, sales_2016_12]
      },{
        name: '2015',
        data: [sales_2015_01, sales_2015_02, sales_2015_03, sales_2015_04, sales_2015_05, sales_2015_06, sales_2015_07, sales_2015_08, sales_2015_09, sales_2015_10, sales_2015_11, sales_2015_12]
      }/*, {
                name: '2014',
                data: [sales_2014_01, sales_2014_02, sales_2014_03, sales_2014_04, sales_2014_05, sales_2014_06, sales_2014_07, sales_2014_08, sales_2014_09, sales_2014_10, sales_2014_11, sales_2014_12]
            }, {
                name: '2013',
                data: [sales_2013_01, sales_2013_02, sales_2013_03, sales_2013_04, sales_2013_05, sales_2013_06, sales_2013_07, sales_2013_08, sales_2013_09, sales_2013_10, sales_2013_11, sales_2013_12]
            }, {
                name: '2012',
                data: [sales_2012_01, sales_2012_02, sales_2012_03, sales_2012_04, sales_2012_05, sales_2012_06, sales_2012_07, sales_2012_08, sales_2012_09, sales_2012_10, sales_2012_11, sales_2012_12]
            }*/
      ]
    });
  });

  });

  /*$(function () {
             data = <?php echo $this->_tpl_vars['data']; ?>
;
          data2 = <?php echo $this->_tpl_vars['data2']; ?>
;
          $('#index_container03').highcharts({

              chart: {
                  type: 'arearange',
                  zoomType: 'x'
              },

              title: {
                  text: '询盘&新客户成交'
              },

              xAxis: {
                  type: 'datetime'
              },

              yAxis: {
                  title: {
                      text: null
                  }
              },

              tooltip: {
                  crosshairs: true,
                  shared: true,
                  valueSuffix: '个 '
              },



              series: [{
                  name: '询盘',
                  data: data
              },{
                  name: '新客户',
                  data: data2
              }
              ]

          });


  });
  $(function () {
      var chart;
      $(document).ready(function() {
          chart = new Highcharts.Chart({
              chart: {
                  renderTo: 'index_container04',
                  plotBackgroundColor: null,
                  plotBorderWidth: null,
                  plotShadow: false
              },
              title: {
                  text: '国家分布'
              },
              tooltip: {
                  formatter: function() {
                      return '<b>'+ this.point.name +'</b>: '+ (this.percentage).toFixed(1) +' %';
                  }
              },
              plotOptions: {
                  pie: {
                      allowPointSelect: true,
                      cursor: 'pointer',
                      dataLabels: {
                          enabled: true,
                          color: '#000000',
                          connectorColor: '#000000',
                          formatter: function() {
                              return '<b>'+ this.point.name +'</b>: '+ (this.percentage).toFixed(1) +' %';
                          }
                      }
                  }
              },
              series: [{
                  type: 'pie',
                  name: 'Browser share',
                  data: [
                      {
                          name: '<?php echo $this->_tpl_vars['gj_name01']; ?>
',
                          y: <?php echo $this->_tpl_vars['data_gj01']; ?>
,
                          sliced: true,
                          selected: true
                      },
                      ['<?php echo $this->_tpl_vars['gj_name02']; ?>
', <?php echo $this->_tpl_vars['data_gj02']; ?>
],
                      ['<?php echo $this->_tpl_vars['gj_name03']; ?>
', <?php echo $this->_tpl_vars['data_gj03']; ?>
],
                      ['<?php echo $this->_tpl_vars['gj_name04']; ?>
', <?php echo $this->_tpl_vars['data_gj04']; ?>
],
                      ['<?php echo $this->_tpl_vars['gj_name05']; ?>
', <?php echo $this->_tpl_vars['data_gj05']; ?>
],
                      ['<?php echo $this->_tpl_vars['gj_name06']; ?>
', <?php echo $this->_tpl_vars['data_gj06']; ?>
],
                      ['<?php echo $this->_tpl_vars['gj_name07']; ?>
', <?php echo $this->_tpl_vars['data_gj07']; ?>
],
                      ['<?php echo $this->_tpl_vars['gj_name08']; ?>
', <?php echo $this->_tpl_vars['data_gj08']; ?>
],
                      ['<?php echo $this->_tpl_vars['gj_name09']; ?>
', <?php echo $this->_tpl_vars['data_gj09']; ?>
],
                      ['<?php echo $this->_tpl_vars['gj_name10']; ?>
', <?php echo $this->_tpl_vars['data_gj10']; ?>
]
                  ]
              }]
          });
      });

  });

  $(function () {
      var chart;
      $(document).ready(function() {
          chart = new Highcharts.Chart({
              chart: {
                  renderTo: 'index_container05',
                  type: 'column',
                  marginRight: 130,
                  marginBottom: 50
              },
              title: {
                  text: '业务员月销售额',
                  x: -20 //center
              },
              subtitle: {
                  text: '',
                  x: -20
              },
              xAxis: {
                  categories: <?php echo $this->_tpl_vars['data_user']; ?>

              },
              yAxis: {
                  title: {
                      text: '金额（美元）'
                  },
                  plotLines: [{
                      value: 0,
                      width: 1,
                      color: '#808080'
                  }]
              },
              tooltip: {
                  formatter: function() {
                          return "<b><a href='http://www.baidu.com' target='navTab' >"+ this.series.name +"</a></b><br/>"+   //加HTML代码
                          this.x +": "+ "$" +this.y;
                  }
              },
              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'top',
                  x: -10,
                  y: 50,
                  borderWidth: 0
              },
              series: [{
                  name: '<?php echo $this->_tpl_vars['date_ym02']; ?>
',
                  data: <?php echo $this->_tpl_vars['yewu02']; ?>

              }, {
                  name: '<?php echo $this->_tpl_vars['date_ym01']; ?>
',
                  data: <?php echo $this->_tpl_vars['yewu01']; ?>

              }, {
                  name: '<?php echo $this->_tpl_vars['date_ym']; ?>
',
                  data: <?php echo $this->_tpl_vars['yewu']; ?>

              }]
          });
      });

  });
  */



</script>
</html>