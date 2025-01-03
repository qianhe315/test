<?php /* Smarty version 2.6.22, created on 2018-10-09 16:37:06
         compiled from usergroup/add.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>用户组名：</label>
        <input type="text" size="50" name="user_group_name1"  id="user_group_name1" value="<?php echo $this->_tpl_vars['usergroup_info']['group_name']; ?>
" <?php if ($this->_tpl_vars['usergroup_info']['group_id'] != ''): ?>disabled="disabled"<?php endif; ?>   alt="请输入用户组名" />
        <input type="hidden" name="usergroupid" value="<?php echo $this->_tpl_vars['usergroup_info']['group_id']; ?>
"  />
        <input type="hidden" id="group_authority" value="<?php echo $this->_tpl_vars['usergroup_info']['authority']; ?>
" name="group_authority" />
        <input type="hidden" id="root" value="<?php echo $this->_tpl_vars['__ROOT__']; ?>
" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
          <label>部门：</label>
          <select name="department_id" <?php if ($this->_tpl_vars['usergroup_info']['group_id'] != ''): ?>disabled="disabled"<?php endif; ?> >
              <?php $_from = $this->_tpl_vars['department_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['val']):
?>
              <option  value="<?php echo $this->_tpl_vars['val']['id']; ?>
" <?php if ($this->_tpl_vars['val']['id'] == $this->_tpl_vars['usergroup_info']['department_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['val']['department_name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
          </select>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
          <label>公司：</label>
          <select name="company_id" <?php if ($this->_tpl_vars['usergroup_info']['group_id'] != ''): ?>disabled="disabled"<?php endif; ?>>
              <?php $_from = $this->_tpl_vars['company_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['val']):
?>
              <option  value="<?php echo $this->_tpl_vars['val']['id']; ?>
" <?php if ($this->_tpl_vars['val']['id'] == $this->_tpl_vars['usergroup_info']['company_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['val']['company_name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
          </select>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
          <label>办公区域：</label>
          <select name="office_id" <?php if ($this->_tpl_vars['usergroup_info']['group_id'] != ''): ?>disabled="disabled"<?php endif; ?>>
              <?php $_from = $this->_tpl_vars['office_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['val']):
?>
              <option  value="<?php echo $this->_tpl_vars['val']['id']; ?>
" <?php if ($this->_tpl_vars['val']['id'] == $this->_tpl_vars['usergroup_info']['office_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['val']['office_name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
          </select>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>权限设置：</label>
        <ul class="tree treeFolder treeCheck expand" oncheck="kkk">
        <!--<ul class="tree treeFolder treeCheck collapse" oncheck="kkk">-->
          <li><a>首页权限管理</a>
             <ul>
                  <li><a tname="shouyeyujing" tvalue="shouyeyujing:1" <?php if ($this->_tpl_vars['shouyeyujing'] == '1'): ?> checked="true" <?php endif; ?>>预警</a></li>
                  <li><a tname="shouyedaibanshiyi" tvalue="shouyedaibanshiyi:1" <?php if ($this->_tpl_vars['shouyedaibanshiyi'] == '1'): ?> checked="true" <?php endif; ?>>待办事宜</a></li>
                  <li><a tname="shouyeshujuzixun" tvalue="shouyeshujuzixun:1" <?php if ($this->_tpl_vars['shouyeshujuzixun'] == '1'): ?> checked="true" <?php endif; ?>>数据资讯</a></li>
                  <li><a tname="shouyekehuhuifu" tvalue="shouyekehuhuifu:1" <?php if ($this->_tpl_vars['shouyekehuhuifu'] == '1'): ?> checked="true" <?php endif; ?>>客户回复周期统计</a></li>
                  <li><a tname="shouyexunpantongji" tvalue="shouyexunpantongji:1" <?php if ($this->_tpl_vars['shouyexunpantongji'] == '1'): ?> checked="true" <?php endif; ?>>询盘数量统计</a></li>
                  <li><a tname="shouyeyuexiaoshoue" tvalue="shouyeyuexiaoshoue:1" <?php if ($this->_tpl_vars['shouyeyuexiaoshoue'] == '1'): ?> checked="true" <?php endif; ?>>月销售额</a></li>
                  <li><a tname="chajian" tvalue="chajian:1" <?php if ($this->_tpl_vars['chajian'] == '1'): ?> checked="true" <?php endif; ?>>页面小插件</a></li>
             </ul>
          </li>        
          <li><a>客户管理</a>
             <ul>
             <li><a tname="wangzhanxunpanzhuru" tvalue="wangzhanxunpanzhuru:1" <?php if ($this->_tpl_vars['wangzhanxunpanzhuru'] == '1'): ?> checked="true" <?php endif; ?>>网站询盘注入</a></li>
             <li><a tname="zuixinxunpanneirong" tvalue="zuixinxunpanneirong:1" <?php if ($this->_tpl_vars['zuixinxunpanneirong'] == '1'): ?> checked="true" <?php endif; ?>>最新询盘内容</a></li>
				  <li><a tname="xunpanguanli" tvalue="xunpanguanli:1" <?php if ($this->_tpl_vars['xunpanguanli'] == '1'): ?> checked="true" <?php endif; ?>>询盘管理</a></li>
                  <li><a tname="kaifakehuguanli" tvalue="kaifakehuguanli:1" <?php if ($this->_tpl_vars['kaifakehuguanli'] == '1'): ?> checked="true" <?php endif; ?>>开发客户管理</a></li>
                  <li><a tname="laokehuguanli" tvalue="laokehuguanli:1" <?php if ($this->_tpl_vars['laokehuguanli'] == '1'): ?> checked="true" <?php endif; ?>>老客户管理</a></li>
                  <li><a tname="kehuxinxijiansuo" tvalue="kehuxinxijiansuo:1" <?php if ($this->_tpl_vars['kehuxinxijiansuo'] == '1'): ?> checked="true" <?php endif; ?>>客户信息检索</a></li>
                  <li><a tname="kehuziyuanhuishouzhan" tvalue="kehuziyuanhuishouzhan:1" <?php if ($this->_tpl_vars['kehuziyuanhuishouzhan'] == '1'): ?> checked="true" <?php endif; ?>>客户资源回收站</a></li>
                  <li><a tname="kehuziyuanfenpeiqingkuang" tvalue="kehuziyuanfenpeiqingkuang:1" <?php if ($this->_tpl_vars['kehuziyuanfenpeiqingkuang'] == '1'): ?> checked="true" <?php endif; ?>>客户资源分配情况</a></li>
                  <li><a tname="piliangchaxunkehuxinxi" tvalue="piliangchaxunkehuxinxi:1" <?php if ($this->_tpl_vars['piliangchaxunkehuxinxi'] == '1'): ?> checked="true" <?php endif; ?>>批量查询客户信息</a></li>
                  <li><a tname="kehuhezuomingxi" tvalue="kehuhezuomingxi:1" <?php if ($this->_tpl_vars['kehuhezuomingxi'] == '1'): ?> checked="true" <?php endif; ?>>客户合作明细</a></li>
                  <li><a tname="kehuzhekouguanli" tvalue="kehuzhekouguanli:1" <?php if ($this->_tpl_vars['kehuzhekouguanli'] == '1'): ?> checked="true" <?php endif; ?>>客户折扣管理</a></li>
                  <li><a tname="wuxiaokehuchi" tvalue="wuxiaokehuchi:1" <?php if ($this->_tpl_vars['wuxiaokehuchi'] == '1'): ?> checked="true" <?php endif; ?>>无效客户池</a></li>
                  <li><a tname="gongsikehuchi" tvalue="gongsikehuchi:1" <?php if ($this->_tpl_vars['gongsikehuchi'] == '1'): ?> checked="true" <?php endif; ?>>公司客户池</a></li>
             </ul>
             </li>
          <li><a>销售管理</a>
            <ul>
              <li><a tname="xiaoshoujihui" tvalue="xiaoshoujihui:1" <?php if ($this->_tpl_vars['xiaoshoujihui'] == '1'): ?> checked="true" <?php endif; ?>>销售机会</a></li>
              <li><a tname="lianxijilu" tvalue="lianxijilu:1" <?php if ($this->_tpl_vars['lianxijilu'] == '1'): ?> checked="true" <?php endif; ?>>联系记录</a></li>
              <li><a tname="lianxipinlvtongji" tvalue="lianxipinlvtongji:1" <?php if ($this->_tpl_vars['lianxipinlvtongji'] == '1'): ?> checked="true" <?php endif; ?>>联系频率统计</a></li>
              <li><a>报价</a>
              	<ul>
                	<li><a>报价单</a>
                    	<ul>
                    	<li><a tname="tangtubaojiadan" tvalue="tangtubaojiadan:1" <?php if ($this->_tpl_vars['tangtubaojiadan'] == '1'): ?> checked="true" <?php endif; ?>>烫图报价单</a></li>
                        <li><a tname="cailiaobaojiadan" tvalue="cailiaobaojiadan:1" <?php if ($this->_tpl_vars['cailiaobaojiadan'] == '1'): ?> checked="true" <?php endif; ?>>材料报价单</a></li>
                        <li><a tname="cdrbaojiadan" tvalue="cdrbaojiadan:1" <?php if ($this->_tpl_vars['cdrbaojiadan'] == '1'): ?> checked="true" <?php endif; ?>>CDR报价单</a></li>
                        <li><a tname="mobanbaojiadan" tvalue="mobanbaojiadan:1" <?php if ($this->_tpl_vars['mobanbaojiadan'] == '1'): ?> checked="true" <?php endif; ?>>模版报价单</a></li>
                        <li><a tname="Txuzhipenbaojia" tvalue="Txuzhipenbaojia:1" <?php if ($this->_tpl_vars['Txuzhipenbaojia'] == '1'): ?> checked="true" <?php endif; ?>>T恤直喷报价</a></li>
                        <li><a tname="zhijiatiebaojiadan" tvalue="zhijiatiebaojiadan:1" <?php if ($this->_tpl_vars['zhijiatiebaojiadan'] == '1'): ?> checked="true" <?php endif; ?>>指甲贴报价单</a></li>
                        <li><a tname="baojiadan601" tvalue="baojiadan601:1" <?php if ($this->_tpl_vars['baojiadan601'] == '1'): ?> checked="true" <?php endif; ?>>601报价单</a></li>
                        </ul>
                    </li>
                    <li><a>外发单</a>
                    	<ul>
                        <li><a tname="waifaxunjiadan" tvalue="waifaxunjiadan:1" <?php if ($this->_tpl_vars['waifaxunjiadan'] == '1'): ?> checked="true" <?php endif; ?>>外发询价单</a></li>
                        <li><a tname="waifabaojiadan" tvalue="waifabaojiadan:1" <?php if ($this->_tpl_vars['waifabaojiadan'] == '1'): ?> checked="true" <?php endif; ?>>外发报价单</a></li>
                        </ul>
                    </li>
                    <li><a tname="shengchengbaojiadanhexingshifapiao" tvalue="shengchengbaojiadanhexingshifapiao:1" <?php if ($this->_tpl_vars['shengchengbaojiadanhexingshifapiao'] == '1'): ?> checked="true" <?php endif; ?>>生成报价单&形式发票 </a></li>
                </ul>
              </li>
              <li><a tname="dingdan" tvalue="dingdan:1" <?php if ($this->_tpl_vars['dingdan'] == '1'): ?> checked="true" <?php endif; ?>>订单</a></li>
              <li><a tname="dingdan601" tvalue="dingdan601:1" <?php if ($this->_tpl_vars['dingdan601'] == '1'): ?> checked="true" <?php endif; ?>>601订单</a></li>
              <li><a tname="fapiao" tvalue="fapiao:1" <?php if ($this->_tpl_vars['fapiao'] == '1'): ?> checked="true" <?php endif; ?>>发票</a></li>
              <li><a tname="fapiao601" tvalue="fapiao601:1" <?php if ($this->_tpl_vars['fapiao601'] == '1'): ?> checked="true" <?php endif; ?>>601发票</a></li>
              <li><a tname="xiaoshoumingxi" tvalue="xiaoshoumingxi:1" <?php if ($this->_tpl_vars['xiaoshoumingxi'] == '1'): ?> checked="true" <?php endif; ?>>销售明细</a></li>
              <li><a tname="fukuanqingkuangxianshi" tvalue="fukuanqingkuangxianshi:1" <?php if ($this->_tpl_vars['fukuanqingkuangxianshi'] == '1'): ?> checked="true" <?php endif; ?>>付款情况显示</a></li>
              <li><a tname="chengbenkoujianheyunfeizengtian" tvalue="chengbenkoujianheyunfeizengtian:1" <?php if ($this->_tpl_vars['chengbenkoujianheyunfeizengtian'] == '1'): ?> checked="true" <?php endif; ?>>成本扣减和运费增添</a></li>
              <li><a>成本明细</a>
             <ul>
              <li><a tname="yuechengbenmingxi" tvalue="yuechengbenmingxi:1" <?php if ($this->_tpl_vars['yuechengbenmingxi'] == '1'): ?> checked="true" <?php endif; ?>>月成本明细</a></li>
              <li><a tname="cailiaochengbenbiao" tvalue="cailiaochengbenbiao:1" <?php if ($this->_tpl_vars['cailiaochengbenbiao'] == '1'): ?> checked="true" <?php endif; ?>>材料成本表</a></li>
              </ul>
             </li> 
              <li><a tname="mianfeidingdanhuizong" tvalue="mianfeidingdanhuizong:1" <?php if ($this->_tpl_vars['mianfeidingdanhuizong'] == '1'): ?> checked="true" <?php endif; ?>>免费订单汇总</a></li>
             <li><a tname="teshudingdanhuizong" tvalue="teshudingdanhuizong:1" <?php if ($this->_tpl_vars['teshudingdanhuizong'] == '1'): ?> checked="true" <?php endif; ?>>特殊订单汇总</a></li>
              <!--<li><a tname="xiaoshouhuodongguanli" tvalue="xiaoshouhuodongguanli:1" <?php if ($this->_tpl_vars['xiaoshouhuodongguanli'] == '1'): ?> checked="true" <?php endif; ?>>销售活动管理</a></li>
              <li><a tname="xiaoshouchengji" tvalue="xiaoshouchengji:1" <?php if ($this->_tpl_vars['xiaoshouchengji'] == '1'): ?> checked="true" <?php endif; ?>>销售成绩&目标</a></li>-->
             
              <li><a tname="xiaoshoushenpi" tvalue="xiaoshoushenpi:1" <?php if ($this->_tpl_vars['xiaoshoushenpi'] == '1'): ?> checked="true" <?php endif; ?>>审批</a></li>
              <li><a>设置</a>
              <ul>
                  <li><a tname="stockshezhi" tvalue="stockshezhi:1" <?php if ($this->_tpl_vars['stockshezhi'] == '1'): ?> checked="true" <?php endif; ?>>STOCK设置</a></li>
                  <li><a tname="diqushezhishezhi" tvalue="diqushezhishezhi:1" <?php if ($this->_tpl_vars['diqushezhishezhi'] == '1'): ?> checked="true" <?php endif; ?>>地区设置</a></li>
                  <li><a tname="huilvshezhi" tvalue="huilvshezhi:1" <?php if ($this->_tpl_vars['huilvshezhi'] == '1'): ?> checked="true" <?php endif; ?>>汇率设置</a></li>
                  <li><a tname="xunpanshezhi" tvalue="xunpanshezhi:1" <?php if ($this->_tpl_vars['xunpanshezhi'] == '1'): ?> checked="true" <?php endif; ?>>询盘来源设置</a></li>
                  <li><a tname="xunpanfenleishezhi" tvalue="xunpanfenleishezhi:1" <?php if ($this->_tpl_vars['xunpanfenleishezhi'] == '1'): ?> checked="true" <?php endif; ?>>询盘分类设置</a></li>
                  <li><a tname="cailiaogongshishezhi" tvalue="cailiaogongshishezhi:1" <?php if ($this->_tpl_vars['cailiaogongshishezhi'] == '1'): ?> checked="true" <?php endif; ?>>材料公式设置</a></li>
                  <li><a tname="kehuxinxixuanxiang" tvalue="kehuxinxixuanxiang:1" <?php if ($this->_tpl_vars['kehuxinxixuanxiang'] == '1'): ?> checked="true" <?php endif; ?>>客户信息选项设置</a></li>
                  <li><a tname="huishouliwaikehu" tvalue="huishouliwaikehu:1" <?php if ($this->_tpl_vars['huishouliwaikehu'] == '1'): ?> checked="true" <?php endif; ?>>回收例外客户</a></li>
                  <li><a tname="gongchangchengbenxishukehu" tvalue="gongchangchengbenxishukehu:1" <?php if ($this->_tpl_vars['gongchangchengbenxishukehu'] == '1'): ?> checked="true" <?php endif; ?>>工厂成本系数1.3客户</a></li>
                   <li><a tname="mianbanfeikehu" tvalue="mianbanfeikehu:1" <?php if ($this->_tpl_vars['mianbanfeikehu'] == '1'): ?> checked="true" <?php endif; ?>>免版费客户</a></li>
                  <li><a tname="rezhuanyincailiao" tvalue="rezhuanyincailiao:1" <?php if ($this->_tpl_vars['rezhuanyincailiao'] == '1'): ?> checked="true" <?php endif; ?>>热转印材料筛选</a></li>
                  <li><a tname="baojiadanfenleishezhi" tvalue="baojiadanfenleishezhi:1" <?php if ($this->_tpl_vars['baojiadanfenleishezhi'] == '1'): ?> checked="true" <?php endif; ?>>报价单分类设置</a></li>
                  <li><a tname="zhekoushezhi" tvalue="zhekoushezhi:1" <?php if ($this->_tpl_vars['zhekoushezhi'] == '1'): ?> checked="true" <?php endif; ?>>折扣设置</a></li>
                  <li><a tname="tichengbili" tvalue="tichengbili:1" <?php if ($this->_tpl_vars['tichengbili'] == '1'): ?> checked="true" <?php endif; ?>>提成比例</a></li>
                  <li><a tname="youhuiquan" tvalue="youhuiquan:1" <?php if ($this->_tpl_vars['youhuiquan'] == '1'): ?> checked="true" <?php endif; ?>>优惠券</a></li>
                 <li><a tname="youhuiquanqujian" tvalue="youhuiquanqujian:1" <?php if ($this->_tpl_vars['youhuiquanqujian'] == '1'): ?> checked="true" <?php endif; ?>>优惠券区间</a></li>
                  <li><a tname="dongchangshougongfeishezhi" tvalue="dongchangshougongfeishezhi:1" <?php if ($this->_tpl_vars['dongchangshougongfeishezhi'] == '1'): ?> checked="true" <?php endif; ?>>工厂手工费设置</a></li>
                   <li><a tname="tangtubanfeishezhi" tvalue="tangtubanfeishezhi:1" <?php if ($this->_tpl_vars['tangtubanfeishezhi'] == '1'): ?> checked="true" <?php endif; ?>>烫图版费设置</a></li>
                  <li><a tname="mobanjiage" tvalue="mobanjiage:1" <?php if ($this->_tpl_vars['mobanjiage'] == '1'): ?> checked="true" <?php endif; ?>>模板价格</a></li>
                  <li><a tname="baojiaxishu601" tvalue="baojiaxishu601:1" <?php if ($this->_tpl_vars['baojiaxishu601'] == '1'): ?> checked="true" <?php endif; ?>>601报价系数</a></li>
                  <li><a tname="shijianshezhi" tvalue="shijianshezhi:1" <?php if ($this->_tpl_vars['shijianshezhi'] == '1'): ?> checked="true" <?php endif; ?>>时间设置</a></li>
                  <li><a tname="shijianfenleishezhi" tvalue="shijianfenleishezhi:1" <?php if ($this->_tpl_vars['shijianfenleishezhi'] == '1'): ?> checked="true" <?php endif; ?>>时间分类设置</a></li>
                  <li><a tname="jiagefanweishezhi" tvalue="jiagefanweishezhi:1" <?php if ($this->_tpl_vars['jiagefanweishezhi'] == '1'): ?> checked="true" <?php endif; ?>>价格范围设置</a></li>
                  <li><a tname="jiagefanweifenleishezhi" tvalue="jiagefanweifenleishezhi:1" <?php if ($this->_tpl_vars['jiagefanweifenleishezhi'] == '1'): ?> checked="true" <?php endif; ?>>价格范围分类设置</a></li>
                  <li><a tname="kuaidigongsishezhi" tvalue="kuaidigongsishezhi:1" <?php if ($this->_tpl_vars['kuaidigongsishezhi'] == '1'): ?> checked="true" <?php endif; ?>>快递公司设置</a></li>
                  <li><a tname="jiaozhishujushezhi" tvalue="jiaozhishujushezhi:1" <?php if ($this->_tpl_vars['jiaozhishujushezhi'] == '1'): ?> checked="true" <?php endif; ?>>胶纸数据设置</a></li>
                  <li><a tname="gongsixinxishezhi" tvalue="gongsixinxishezhi:1" <?php if ($this->_tpl_vars['gongsixinxishezhi'] == '1'): ?> checked="true" <?php endif; ?>>公司信息设置</a></li>
                  <li><a tname="baoguanchanpinmingcheng" tvalue="baoguanchanpinmingcheng:1" <?php if ($this->_tpl_vars['baoguanchanpinmingcheng'] == '1'): ?> checked="true" <?php endif; ?>>报关产品名称</a></li>
                  <li><a tname="baoguanchanpinbianma" tvalue="baoguanchanpinbianma:1" <?php if ($this->_tpl_vars['baoguanchanpinbianma'] == '1'): ?> checked="true" <?php endif; ?>>报关产品编码</a></li>
              	  <li><a tname="qitashezhi" tvalue="qitashezhi:1" <?php if ($this->_tpl_vars['qitashezhi'] == '1'): ?> checked="true" <?php endif; ?>>其他设置</a></li>
              </ul>              
              </li>
            </ul>
          </li>

          <li><a>设计管理</a>
            <ul>
              <li><a tname="weiwanchengsheji" tvalue="weiwanchengsheji:1" <?php if ($this->_tpl_vars['weiwanchengsheji'] == '1'): ?>checked="true" <?php endif; ?>>未完成设计</a></li>
              <li><a tname="weijianyansheji" tvalue="weijianyansheji:1" <?php if ($this->_tpl_vars['weijianyansheji'] == '1'): ?>checked="true" <?php endif; ?>>未检验设计</a></li>
              <li><a tname="yiwanchengsheji" tvalue="yiwanchengsheji:1" <?php if ($this->_tpl_vars['yiwanchengsheji'] == '1'): ?>checked="true" <?php endif; ?>>已完成设计</a></li>
              <li><a tname="shejitushuliangluru" tvalue="shejitushuliangluru:1" <?php if ($this->_tpl_vars['shejitushuliangluru'] == '1'): ?>checked="true" <?php endif; ?>>设计图数量录入</a></li>
              <li><a tname="tupianfenleiguanli" tvalue="tupianfenleiguanli:1" <?php if ($this->_tpl_vars['tupianfenleiguanli'] == '1'): ?>checked="true" <?php endif; ?>>图片分类管理</a>
                <ul>
                  <li><a tname="tupianfenleichuli" tvalue="tupianfenleichuli:1" <?php if ($this->_tpl_vars['tupianfenleichuli'] == '1'): ?>checked="true" <?php endif; ?>>图片分类处理</a></li>
                  <li><a tname="shejishezhi" tvalue="shejishezhi:1" <?php if ($this->_tpl_vars['shezhi'] == '1'): ?>checked="true" <?php endif; ?>>设置</a>
                     <ul>
                      <li><a tname="shuxingfenlei" tvalue="shuxingfenlei:1" <?php if ($this->_tpl_vars['shuxingfenlei'] == '1'): ?>checked="true" <?php endif; ?>>属性分类</a></li>
                      <li><a tname="laiyuanfenlei" tvalue="laiyuanfenlei:1" <?php if ($this->_tpl_vars['laiyuanfenlei'] == '1'): ?>checked="true" <?php endif; ?>>来源分类</a></li>
                     </ul>
                  </li>
               </ul>
              </li>
            </ul>
          </li>

          <li><a>工厂管理</a>
            <ul>
             <li><a tname="dingdanxinxi" tvalue="dingdanxinxi:1" <?php if ($this->_tpl_vars['dingdanxinxi'] == '1'): ?>checked="true" <?php endif; ?>>订单信息</a></li>
             <li><a tname="waifaxinxi" tvalue="waifaxinxi:1" <?php if ($this->_tpl_vars['waifaxinxi'] == '1'): ?>checked="true" <?php endif; ?>>外发信息</a></li>
             <li><a tname="cuowudingdanchuli" tvalue="cuowudingdanchuli:1" <?php if ($this->_tpl_vars['cuowudingdanchuli'] == '1'): ?>checked="true" <?php endif; ?>>错误订单处理</a></li>
             <li><a tname="zhibanxinxi" tvalue="zhibanxinxi:1" <?php if ($this->_tpl_vars['zhibanxinxi'] == '1'): ?>checked="true" <?php endif; ?>>制版信息</a></li>
             <li><a tname="dingdanliucheng" tvalue="dingdanliucheng:1" <?php if ($this->_tpl_vars['dingdanliucheng'] == '1'): ?>checked="true" <?php endif; ?>>订单流程记录</a></li>
             <li><a >供应商管理</a>
               <ul>
                   <li><a tname="gongyingshangxinxi" tvalue="gongyingshangxinxi:1" <?php if ($this->_tpl_vars['gongyingshangxinxi'] == '1'): ?>checked="true" <?php endif; ?>>供应商信息</a></li>
                   <li><a tname="gongyingshangshuxing" tvalue="gongyingshangshuxing:1" <?php if ($this->_tpl_vars['gongyingshangshuxing'] == '1'): ?>checked="true" <?php endif; ?>>供应商属性</a></li>
                   <li><a tname="gongyingshangjiesuanqixian" tvalue="gongyingshangjiesuanqixian:1" <?php if ($this->_tpl_vars['gongyingshangjiesuanqixian'] == '1'): ?>checked="true" <?php endif; ?>>供应商结算限期</a></li>
              </ul>
             </li>
             <li><a>采购信息</a>
              <ul>
                   <li><a tname="waifa" tvalue="waifa:1" <?php if ($this->_tpl_vars['waifa'] == '1'): ?>checked="true" <?php endif; ?>>外发</a></li>
                   <li><a tname="cailiaocaigou" tvalue="cailiaocaigou:1" <?php if ($this->_tpl_vars['cailiaocaigou'] == '1'): ?>checked="true" <?php endif; ?>>材料采购</a></li>
              </ul>
             </li>
             <li><a >仓库管理</a>
                <ul>
                    <li><a tname="rukudengji" tvalue="rukudengji:1" <?php if ($this->_tpl_vars['rukudengji'] == '1'): ?>checked="true" <?php endif; ?>>入库登记</a></li>
                   <li><a tname="zuohuolingliao" tvalue="zuohuolingliao:1" <?php if ($this->_tpl_vars['zuohuolingliao'] == '1'): ?>checked="true" <?php endif; ?>>做货领料</a></li>
                    <li><a tname="chukudengji" tvalue="chukudengji:1" <?php if ($this->_tpl_vars['chukudengji'] == '1'): ?>checked="true" <?php endif; ?>>出库登记</a></li>
                     <li><a tname="kucunyingyu" tvalue="kucunyingyu:1" <?php if ($this->_tpl_vars['kucunyingyu'] == '1'): ?>checked="true" <?php endif; ?>>库存盈余</a></li>
                    <li><a tname="pandian" tvalue="pandian:1" <?php if ($this->_tpl_vars['pandian'] == '1'): ?>checked="true" <?php endif; ?>>盘点</a></li>
                    <li><a tname="kufanghuizong" tvalue="kufanghuizong:1" <?php if ($this->_tpl_vars['kufanghuizong'] == '1'): ?>checked="true" <?php endif; ?>>库房汇总</a></li>
                </ul>
              </li>
              <li><a>设置</a>
                  <ul>
                       <li><a tname="danweitianjia" tvalue="danweitianjia:1" <?php if ($this->_tpl_vars['danweitianjia'] == '1'): ?>checked="true" <?php endif; ?>>单位添加</a></li>
                       <li><a tname="cailiaozhongwenmingguanli" tvalue="cailiaozhongwenmingguanli:1" <?php if ($this->_tpl_vars['cailiaozhongwenmingguanli'] == '1'): ?>checked="true" <?php endif; ?>>材料中文名管理</a></li>
                       <li><a tname="cailiaoguanli" tvalue="cailiaoguanli:1" <?php if ($this->_tpl_vars['cailiaoguanli'] == '1'): ?>checked="true" <?php endif; ?>>材料管理</a></li>
                       <li><a tname="caigoushouhuodizhi" tvalue="caigoushouhuodizhi:1" <?php if ($this->_tpl_vars['caigoushouhuodizhi'] == '1'): ?>checked="true" <?php endif; ?>>采购收货地址</a></li>
                  </ul>
               </li>
            </ul>
          </li>
     
        <li><a>物流管理</a>
            <ul>
              <li><a tname="kehudingdanmingxi" tvalue="kehudingdanmingxi:1" <?php if ($this->_tpl_vars['kehudingdanmingxi'] == '1'): ?>checked="true" <?php endif; ?>>客户订单明细</a></li>
              <li><a tname="upsxinxi" tvalue="upsxinxi:1" <?php if ($this->_tpl_vars['upsxinxi'] == '1'): ?>checked="true" <?php endif; ?>>UPS信息</a></li>
              <li><a tname="dhlxinxi" tvalue="dhlxinxi:1" <?php if ($this->_tpl_vars['dhlxinxi'] == '1'): ?>checked="true" <?php endif; ?>>DHL信息</a></li>
              <li><a tname="wuliudengji" tvalue="wuliudengji:1" <?php if ($this->_tpl_vars['wuliudengji'] == '1'): ?>checked="true" <?php endif; ?>>物流登记</a></li>
              <li><a tname="gongchangfahuomingxi" tvalue="gongchangfahuomingxi:1" <?php if ($this->_tpl_vars['gongchangfahuomingxi'] == '1'): ?>checked="true" <?php endif; ?>>工厂发货明细</a></li>
              <li><a tname="xiaoshoushouhuomingxi" tvalue="xiaoshoushouhuomingxi:1" <?php if ($this->_tpl_vars['xiaoshoushouhuomingxi'] == '1'): ?>checked="true" <?php endif; ?>>销售收货明细</a></li>
              <li><a tname="wuliushezhi" tvalue="wuliushezhi:1" <?php if ($this->_tpl_vars['wuliushezhi'] == '1'): ?>checked="true" <?php endif; ?>>设置</a>
              <ul>
                 <li><a tname="qitafahuochanpin" tvalue="qitafahuochanpin:1" <?php if ($this->_tpl_vars['qitafahuochanpin'] == '1'): ?>checked="true" <?php endif; ?>>其他发货产品</a></li>
                 <li><a tname="kehushouhuodizhi" tvalue="kehushouhuodizhi:1" <?php if ($this->_tpl_vars['kehushouhuodizhi'] == '1'): ?>checked="true" <?php endif; ?>>客户收货地址</a></li>
              </ul>
             </li>
             
            </ul>
          </li>
     
     
     
          <li><a>财务管理</a>
            <ul>
              <li><a tname="shoukuandengji" tvalue="shoukuandengji:1" <?php if ($this->_tpl_vars['shoukuandengji'] == '1'): ?>checked="true" <?php endif; ?>>收款登记</a></li>
              <li><a tname="meirishoukuanmingxi" tvalue="meirishoukuanmingxi:1" <?php if ($this->_tpl_vars['meirishoukuanmingxi'] == '1'): ?>checked="true" <?php endif; ?>>每日收款明细</a></li>
              <li><a tname="caiwushenhe" tvalue="caiwushenhe:1" <?php if ($this->_tpl_vars['caiwushenhe'] == '1'): ?>checked="true" <?php endif; ?>>审核</a></li>
              <li><a tname="caiwushezhi" tvalue="caiwushezhi:1" <?php if ($this->_tpl_vars['caiwushezhi'] == '1'): ?>checked="true" <?php endif; ?>>设置</a></li>
            </ul>
          </li>
			
          
          <li><a>人事管理</a>
            <ul>
              <li><a tname="xinzixinxi" tvalue="xinzixinxi:1" <?php if ($this->_tpl_vars['xinzixinxi'] == '1'): ?>checked="true" <?php endif; ?>>薪资信息</a></li>
              <li><a tname="renshishezhi" tvalue="renshishezhi:1" <?php if ($this->_tpl_vars['renshishezhi'] == '1'): ?>checked="true" <?php endif; ?>>设置</a>
              <ul>
              	  <li><a tname="yuangongxinxi" tvalue="yuangongxinxi:1" <?php if ($this->_tpl_vars['yuangongxinxi'] == '1'): ?>checked="true" <?php endif; ?>>员工信息</a>
                  </li>
                  <li><a tname="xinzitiaozhengjilu" tvalue="xinzitiaozhengjilu:1" <?php if ($this->_tpl_vars['xinzitiaozhengjilu'] == '1'): ?>checked="true" <?php endif; ?>>薪资调整记录</a>
                  </li>
                  <li><a tname="chixubutieneirong" tvalue="chixubutieneirong:1" <?php if ($this->_tpl_vars['chixubutieneirong'] == '1'): ?>checked="true" <?php endif; ?>>持续补贴内容</a>
                  </li>
                  <li><a tname="chixubutie" tvalue="chixubutie:1" <?php if ($this->_tpl_vars['chixubutie'] == '1'): ?>checked="true" <?php endif; ?>>持续补贴</a>
                  </li>
                  <li><a tname="chixukoufei" tvalue="chixukoufei:1" <?php if ($this->_tpl_vars['chixukoufei'] == '1'): ?>checked="true" <?php endif; ?>>持续扣费</a>
                  </li>
                  <li><a tname="dangyuebutie" tvalue="dangyuebutie:1" <?php if ($this->_tpl_vars['dangyuebutie'] == '1'): ?>checked="true" <?php endif; ?>>当月补贴</a>
                  </li>
                  <li><a tname="dangyuekoufei" tvalue="dangyuekoufei:1" <?php if ($this->_tpl_vars['dangyuekoufei'] == '1'): ?>checked="true" <?php endif; ?>>当月扣费</a>
                  </li>
              </ul>
              </li>
            </ul>
          </li>  
            
        <li><a tname="dianshangguanli" tvalue="dianshangguanli:1" <?php if ($this->_tpl_vars['dianshangguanli'] == '1'): ?>checked="true" <?php endif; ?>>电商管理</a></li>
        <li><a>客户管理（国内）</a>
          <ul>
            <li><a tname="pingtaikehuxinxihuoquguonei" tvalue="pingtaikehuxinxihuoquguonei:1" <?php if ($this->_tpl_vars['pingtaikehuxinxihuoquguonei'] == '1'): ?>checked="true" <?php endif; ?>>平台客户信息获取</a></li>
            <li><a tname="wechengjiaokehuguonei" tvalue="wechengjiaokehuguonei:1" <?php if ($this->_tpl_vars['wechengjiaokehuguonei'] == '1'): ?>checked="true" <?php endif; ?>>未成交客户</a></li>
            <li><a tname="yichengjiaokehuguonei" tvalue="yichengjiaokehuguonei:1" <?php if ($this->_tpl_vars['yichengjiaokehuguonei'] == '1'): ?>checked="true" <?php endif; ?>>已成交客户</a></li>
            <li><a tname="kehuxinxizongbiaoguonei" tvalue="kehuxinxizongbiaoguonei:1" <?php if ($this->_tpl_vars['kehuxinxizongbiaoguonei'] == '1'): ?>checked="true" <?php endif; ?>>客户信息总表</a></li>
          </ul>
        </li>
        <li><a>销售管理（国内）</a>
          <ul>
            <li><a>报价</a>
              <ul>
                  <li><a tname="txubaojiaguonei" tvalue="txubaojiaguonei:1" <?php if ($this->_tpl_vars['txubaojiaguonei'] == '1'): ?> checked="true" <?php endif; ?>>T恤直喷报价</a></li>
              </ul>
            </li>
            <li><a tname="dingdanguonei" tvalue="dingdanguonei:1" <?php if ($this->_tpl_vars['dingdanguonei'] == '1'): ?> checked="true" <?php endif; ?>>订单</a></li>
            <li><a tname="fapiaoguonei" tvalue="fapiaoguonei:1" <?php if ($this->_tpl_vars['fapiaoguonei'] == '1'): ?> checked="true" <?php endif; ?>>发票</a></li>
            <li><a tname="xiaoshoumingxiguonei" tvalue="xiaoshoumingxiguonei:1" <?php if ($this->_tpl_vars['xiaoshoumingxiguonei'] == '1'): ?> checked="true" <?php endif; ?>>销售明细</a></li>
            
            <li><a>成本明细</a>
                <ul>
                    <li><a tname="yuechengbenmingxiguonei" tvalue="yuechengbenmingxiguonei:1" <?php if ($this->_tpl_vars['yuechengbenmingxiguonei'] == '1'): ?> checked="true" <?php endif; ?>>月成本明细</a></li>
                    <li><a tname="cailiaochengbenbiaoguonei" tvalue="cailiaochengbenbiaoguonei:1" <?php if ($this->_tpl_vars['cailiaochengbenbiaoguonei'] == '1'): ?> checked="true" <?php endif; ?>>材料成本表</a></li>
                </ul>
            </li>
            <li><a tname="xiaoshoushenpiguonei" tvalue="xiaoshoushenpiguonei:1" <?php if ($this->_tpl_vars['xiaoshoushenpiguonei'] == '1'): ?> checked="true" <?php endif; ?>>审批</a></li>
            <li><a>设置</a>
            <ul>
                <li><a tname="kehudaimashezhiguonei" tvalue="kehudaimashezhiguonei:1" <?php if ($this->_tpl_vars['kehudaimashezhiguonei'] == '1'): ?> checked="true" <?php endif; ?>>客户代码设置</a></li>
                <li><a tname="stockshezhiguonei" tvalue="stockshezhiguonei:1" <?php if ($this->_tpl_vars['stockshezhiguonei'] == '1'): ?> checked="true" <?php endif; ?>>STOCK设置</a></li>
            </ul>              
            </li>
          </ul>
        </li>
        
          <li><a>工厂管理（国内）</a>
            <ul>
              <li><a tname="dingdanxinxiguonei" tvalue="dingdanxinxiguonei:1" <?php if ($this->_tpl_vars['dingdanxinxiguonei'] == '1'): ?>checked="true" <?php endif; ?>>订单信息（国内）</a></li>
              <li><a tname="dingdanxinxiguowai" tvalue="dingdanxinxiguowai:1" <?php if ($this->_tpl_vars['dingdanxinxiguowai'] == '1'): ?>checked="true" <?php endif; ?>>订单信息（国外）</a></li>
              <li><a tname="caigouguanliguonei" tvalue="caigouguanliguonei:1" <?php if ($this->_tpl_vars['caigouguanliguonei'] == '1'): ?>checked="true" <?php endif; ?>>采购管理</a></li>
              <li><a tname="gongfangcangkuguanliguonei" tvalue="gongfangcangkuguanliguonei:1" <?php if ($this->_tpl_vars['gongfangcangkuguanliguonei'] == '1'): ?>checked="true" <?php endif; ?>>工坊仓库管理</a></li>
              <li><a tname="jinshitancangkuguanliguonei" tvalue="jinshitancangkuguanliguonei:1" <?php if ($this->_tpl_vars['jinshitancangkuguanliguonei'] == '1'): ?>checked="true" <?php endif; ?>>金石滩仓库管理</a></li>
              <li><a tname="gongyingshangguanliguonei" tvalue="gongyingshangguanliguonei:1" <?php if ($this->_tpl_vars['gongyingshangguanliguonei'] == '1'): ?>checked="true" <?php endif; ?>>供应商管理</a></li>
              <li><a tname="gongchangshezhiguonei" tvalue="gongchangshezhiguonei:1" <?php if ($this->_tpl_vars['gongchangshezhiguonei'] == '1'): ?>checked="true" <?php endif; ?>>设置</a></li>
            </ul>
          </li>
          
          <li><a>账户管理</a>
            <ul>
              <li><a tname="zhanghuguanlishezhi" tvalue="zhanghuguanlishezhi:1" <?php if ($this->_tpl_vars['zhanghuguanlishezhi'] == '1'): ?>checked="true" <?php endif; ?>>设置</a></li>
              <li><a tname="yonghuzuquanxianguanli" tvalue="yonghuzuquanxianguanli:1" <?php if ($this->_tpl_vars['yonghuzuquanxianguanli'] == '1'): ?>checked="true" <?php endif; ?>>用户组权限管理</a></li>
              <li><a tname="yonghuguanli" tvalue="yonghuguanli:1" <?php if ($this->_tpl_vars['yonghuguanli'] == '1'): ?>checked="true" <?php endif; ?>>用户管理</a></li>
            </ul>
          </li>
          
          <li><a>报表汇总</a>
        	  <ul>
              <li><a tname="kehutongjibiao" tvalue="kehutongjibiao:1" <?php if ($this->_tpl_vars['kehutongjibiao'] == '1'): ?>checked="true" <?php endif; ?>>客户统计表</a>
                <ul>
                  <li><a tname="kehuzhuangtaichaxun" tvalue="kehuzhuangtaichaxun:1" <?php if ($this->_tpl_vars['kehuzhuangtaichaxun'] == '1'): ?>checked="true" <?php endif; ?>>客户状态查询</a></li>
                  <li><a tname="meiyuekehushijian" tvalue="meiyuekehushijian:1" <?php if ($this->_tpl_vars['meiyuekehushijian'] == '1'): ?>checked="true" <?php endif; ?>>客户每月事件</a></li>
                </ul>
               </li>
              <li><a tname="xiaoshoutongjibiao" tvalue="xiaoshoutongjibiao:1" <?php if ($this->_tpl_vars['xiaoshoutongjibiao'] == '1'): ?>checked="true" <?php endif; ?>>销售统计表</a>
                  <ul>
                    <li><a tname="xiaoshoutichengbiao" tvalue="xiaoshoutichengbiao:1" <?php if ($this->_tpl_vars['xiaoshoutichengbiao'] == '1'): ?>checked="true" <?php endif; ?>>销售提成表</a></li>
                    <li><a tname="fudonggongzi" tvalue="fudonggongzi:1" <?php if ($this->_tpl_vars['fudonggongzi'] == '1'): ?>checked="true" <?php endif; ?>>浮动工资</a></li>
                    <li><a tname="xinkehuchengjiaomingxi" tvalue="xinkehuchengjiaomingxi:1" <?php if ($this->_tpl_vars['xinkehuchengjiaomingxi'] == '1'): ?>checked="true" <?php endif; ?>>新客户成交明细</a></li>
                    <li><a tname="yewuxunpanhexinkehu" tvalue="yewuxunpanhexinkehu:1" <?php if ($this->_tpl_vars['yewuxunpanhexinkehu'] == '1'): ?>checked="true" <?php endif; ?>>业务询盘和新客户</a></li>
                    <li><a tname="yewushoukuanchaxunguowai" tvalue="yewushoukuanchaxunguowai:1" <?php if ($this->_tpl_vars['yewushoukuanchaxunguowai'] == '1'): ?>checked="true" <?php endif; ?>>业务收款查询</a></li>
                    <li><a tname="xunpanhexinkehusanshitian" tvalue="xunpanhexinkehusanshitian:1" <?php if ($this->_tpl_vars['xunpanhexinkehusanshitian'] == '1'): ?>checked="true" <?php endif; ?>>询盘和新客户浮动30天统计</a></li>
                   <li><a tname="xiaoshoupaituhezuohuoliang" tvalue="xiaoshoupaituhezuohuoliang:1" <?php if ($this->_tpl_vars['xiaoshoupaituhezuohuoliang'] == '1'): ?>checked="true" <?php endif; ?>>销售派图和做货量</a></li>
                   <li><a tname="kehugongxianduliebiao" tvalue="kehugongxianduliebiao:1" <?php if ($this->_tpl_vars['kehugongxianduliebiao'] == '1'): ?>checked="true" <?php endif; ?>>客户贡献度列表</a></li>
				   <li><a tname="fukuanzhangqi" tvalue="fukuanzhangqi:1" <?php if ($this->_tpl_vars['fukuanzhangqi'] == '1'): ?>checked="true" <?php endif; ?>>付款账期</a></li>
                   <li><a tname="kehuzuihouxiadan" tvalue="kehuzuihouxiadan:1" <?php if ($this->_tpl_vars['kehuzuihouxiadan'] == '1'): ?>checked="true" <?php endif; ?>>客户最后下单</a></li>
                    <li><a tname="fudongyiniankehuchengjiaobang" tvalue="fudongyiniankehuchengjiaobang:1" <?php if ($this->_tpl_vars['fudongyiniankehuchengjiaobang'] == '1'): ?>checked="true" <?php endif; ?>>浮动1年客户成交榜</a></li>
                    <li><a tname="kehuxiaoshoupaihangbang" tvalue="kehuxiaoshoupaihangbang:1" <?php if ($this->_tpl_vars['kehuxiaoshoupaihangbang'] == '1'): ?>checked="true" <?php endif; ?>>客户销售排行榜</a></li>
                    <li><a tname="yewuyuanrixiaoshoumingxi" tvalue="yewuyuanrixiaoshoumingxi:1" <?php if ($this->_tpl_vars['yewuyuanrixiaoshoumingxi'] == '1'): ?>checked="true" <?php endif; ?>>业务员日销售额明细</a></li>
                </ul>
             </li>
             <li><a tname="shejitongjibiao" tvalue="shejitongjibiao:1" <?php if ($this->_tpl_vars['shejitongjibiao'] == '1'): ?>checked="true" <?php endif; ?>>设计统计表</a>
                 <ul>
                     <li><a tname="shejitichengbiao" tvalue="shejitichengbiao:1" <?php if ($this->_tpl_vars['shejitichengbiao'] == '1'): ?>checked="true" <?php endif; ?>>设计提成表</a></li>
                     <li><a tname="shejizhouqitongji" tvalue="shejizhouqitongji:1" <?php if ($this->_tpl_vars['shejizhouqitongji'] == '1'): ?>checked="true" <?php endif; ?>>设计周期统计</a></li>
                     <li><a tname="shejizhouqijishichaxun" tvalue="shejizhouqijishichaxun:1" <?php if ($this->_tpl_vars['shejizhouqijishichaxun'] == '1'): ?>checked="true" <?php endif; ?>>设计周期及时查询</a></li>
                     <li><a tname="xitongpaitushutongji" tvalue="xitongpaitushutongji:1" <?php if ($this->_tpl_vars['xitongpaitushutongji'] == '1'): ?>checked="true" <?php endif; ?>>系统排图数统计</a></li>
                </ul>
             </li>
             <li><a tname="gongchangtongjibiao" tvalue="gongchangtongjibiao:1" <?php if ($this->_tpl_vars['gongchangtongjibiao'] == '1'): ?>checked="true" <?php endif; ?>>工厂统计表</a>
                 <ul>
                 	<li><a tname="shengchanzhouqitongji" tvalue="shengchanzhouqitongji:1" <?php if ($this->_tpl_vars['shengchanzhouqitongji'] == '1'): ?>checked="true" <?php endif; ?>>生产周期统计</a></li>
                     <li><a tname="shengchanjieduanshichang" tvalue="shengchanjieduanshichang:1" <?php if ($this->_tpl_vars['shengchanjieduanshichang'] == '1'): ?>checked="true" <?php endif; ?>>生产阶段时长统计</a></li>
                     <li><a tname="cailiaoshiyongqingkuang" tvalue="cailiaoshiyongqingkuang:1" <?php if ($this->_tpl_vars['cailiaoshiyongqingkuang'] == '1'): ?>checked="true" <?php endif; ?>>材料使用情况统计</a></li>
                     <li><a tname="yuecailiaocaigou" tvalue="yuecailiaocaigou:1" <?php if ($this->_tpl_vars['yuecailiaocaigou'] == '1'): ?>checked="true" <?php endif; ?>>月材料采购统计</a></li>
                     <li><a tname="yuecailiaochuku" tvalue="yuecailiaochuku:1" <?php if ($this->_tpl_vars['yuecailiaochuku'] == '1'): ?>checked="true" <?php endif; ?>>月材料出库统计</a></li>
                     <li><a tname="yuecailiaozuohuo" tvalue="yuecailiaozuohuo:1" <?php if ($this->_tpl_vars['yuecailiaozuohuo'] == '1'): ?>checked="true" <?php endif; ?>>月材料做货统计</a></li>
                     <li><a tname="yuecailiaoduibi" tvalue="yuecailiaoduibi:1" <?php if ($this->_tpl_vars['yuecailiaoduibi'] == '1'): ?>checked="true" <?php endif; ?>>月材料出库和做货对比</a></li>
                 </ul>
             </li>
          </ul>   
          </li>
          <li><a>经理功能</a>
			<ul>
              <li><a tname="jinglishezhi" tvalue="jinglishezhi:1" <?php if ($this->_tpl_vars['jinglishezhi'] == '1'): ?>checked="true" <?php endif; ?>>经理设置</a></li>
              <li><a tname="jinglishenhe" tvalue="jinglishenhe:1" <?php if ($this->_tpl_vars['jinglishenhe'] == '1'): ?>checked="true" <?php endif; ?>>经理审核</a></li>
            </ul>
          </li>
          <li><a tname="linshi" tvalue="linshi:1" <?php if ($this->_tpl_vars['linshi'] == '1'): ?>checked="true" <?php endif; ?>>表格图形化实例</a></li>

        </ul>
      </div>
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit" onclick="alertMsg.correct('您的数据提交成功！')">确认添加</button>
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
$("#submit1").click(function (){
	var user_group_name = $("#user_group_name1").val();

	$(".ckbox.checked>input").each(function(){    
	   chk_value.push($(this).val());    
	});   

	$.ajax({
		url: root+'/usergroup/act_add-group_authority-' + chk_value+'-group_name-'+user_group_name+'.html',
		dataType: 'json',
		//success:
	});
	//alert(chk_value);
});

$(document).ready(function()
{
	/*$(".ckbox.checked>input").each(function(){    
	   chk_value.push($(this).val());    
	});*/
	

});
</script> 
<!-- {/literal} -->