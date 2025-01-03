<?php /* Smarty version 2.6.22, created on 2013-04-05 11:03:10
         compiled from user/user_edit.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)"  >
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>用户名：</label>
        <input type="text" size="30" name="user_name1" id="user_name1" value="<?php echo $this->_tpl_vars['userinfo']['user_name']; ?>
" alt="请输入用户名" class="required" remote="" />
        <input type="hidden" name="uuid" value="<?php echo $this->_tpl_vars['userinfo']['user_id']; ?>
" />
        <input type="hidden" name="usergroupid" value="<?php echo $this->_tpl_vars['userinfo']['group_id']; ?>
"  />
        <input type="hidden" id="group_authority" value="<?php echo $this->_tpl_vars['userinfo']['authority']; ?>
" name="authority1" />
        <input type="hidden" id="root" value="<?php echo $this->_tpl_vars['__ROOT__']; ?>
" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>登录状态：</label>
       <select name="log_status" class="combox">
       	<option value="1" <?php if ($this->_tpl_vars['userinfo']['log_status'] == 1): ?>selected="selected" <?php endif; ?>>可用</option>
        <option value="0" <?php if ($this->_tpl_vars['userinfo']['log_status'] == 0): ?>selected="selected" <?php endif; ?>>禁用</option>
       </select>
      </div>
      
      <div class="divider">divider</div>
      <div class="unit">
       <label>英文名：</label>
       <input type="text" size="30" name="english_name" id="english_name" value="<?php echo $this->_tpl_vars['userinfo']['english_name']; ?>
" alt="请输入英文名" class="required" />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>代码：</label>
       <input type="text" size="30" name="user_code" id="user_code" value="<?php echo $this->_tpl_vars['userinfo']['user_code']; ?>
" alt="请输入代码" class="required" remote="" />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>性别：</label>
       <input type="radio"  name="sex" id="sex" value="1" <?php if ($this->_tpl_vars['userinfo']['sex'] == '1'): ?> checked="checked"<?php endif; ?> />男 <input type="radio"  name="sex" id="sex" value="2" <?php if ($this->_tpl_vars['userinfo']['sex'] == '2'): ?> checked="checked"<?php endif; ?> />女 
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>生日：</label>
       <input type="text"  name="birthday" class="date" readonly="true" value="<?php echo $this->_tpl_vars['userinfo']['birthday']; ?>
"/>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>QQ：</label>
       <input type="text"  name="qq"   size="30" value="<?php echo $this->_tpl_vars['userinfo']['qq']; ?>
" alt="请输入QQ" class="required" remote="" />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>邮箱：</label>
       <input type="text"  name="email"   size="30" value="<?php echo $this->_tpl_vars['userinfo']['email']; ?>
" alt="请输入邮箱" class="required email" remote="" />
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
      
      <?php if ($this->_tpl_vars['user_info']['group_name'] == '超级管理员'): ?>
      
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
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>管理用户组：</label>
       <?php $_from = $this->_tpl_vars['groupss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gr']):
?>
       <input type="radio"  name="manage_group" value="<?php echo $this->_tpl_vars['gr']['group_id']; ?>
" <?php if ($this->_tpl_vars['userinfo']['manage_group_id'] == $this->_tpl_vars['gr']['group_id']): ?> checked="checked" <?php endif; ?> /><?php echo $this->_tpl_vars['gr']['group_name']; ?>

       <?php endforeach; endif; unset($_from); ?>
       
      </div>
      <div class="divider">divider</div>
	  <?php endif; ?>
            
      <div class="unit">
        <label>权限设置：</label>
        <ul class="tree treeFolder treeCheck expand" oncheck="kkk">
          <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['xiaoshouguanli'] == '1'): ?>
          <li><a>销售管理</a>
            <ul>
             <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['kehuxinxiguanli'] == '1'): ?>
              <li><a tname="authority" tvalue="kehuxinxiguanli:1" <?php if ($this->_tpl_vars['ck_kehuxinxiguanli'] == '1'): ?> checked="true" <?php endif; ?>>客户信息管理</a> </li>
              <?php endif; ?>
               <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['baojia'] == '1'): ?>
              <li><a tname="authority" tvalue="baojia:1" <?php if ($this->_tpl_vars['ck_baojia'] == '1'): ?> checked="true" <?php endif; ?>>报价</a></li>
              <?php endif; ?>
               <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['dingdan'] == '1'): ?>
              <li><a tname="authority" tvalue="dingdan:1" <?php if ($this->_tpl_vars['ck_dingdan'] == '1'): ?> checked="true" <?php endif; ?>>订单</a></li>
              <?php endif; ?>
               <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['fapiao'] == '1'): ?>
              <li><a tname="authority" tvalue="fapiao:1" <?php if ($this->_tpl_vars['ck_fapiao'] == '1'): ?> checked="true" <?php endif; ?>>发票</a></li>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['xiaoshoushezhi'] == '1'): ?>
              <li><a tname="authority" tvalue="xiaoshoushezhi:1" <?php if ($this->_tpl_vars['xiaoshoushezhi'] == '1'): ?> checked="true" <?php endif; ?>>设置</a></li>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['xiaoshoushenpi'] == '1'): ?>
              <li><a tname="authority" tvalue="xiaoshoushenpi:1" <?php if ($this->_tpl_vars['xiaoshoushenpi'] == '1'): ?> checked="true" <?php endif; ?>>审批</a></li>
              <?php endif; ?>
            </ul>
          </li>
		  <?php endif; ?>
          
           <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['shejiguanli'] == '1'): ?>
          <li><a>设计管理</a>
            <ul>
             <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['weiwanchengsheji'] == '1'): ?>
              <li><a tname="weiwanchengsheji" tvalue="weiwanchengsheji:1" <?php if ($this->_tpl_vars['ck_weiwanchengsheji'] == '1'): ?>checked="true" <?php endif; ?>>未完成设计</a></li><?php endif; ?>
               <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['weijianyansheji'] == '1'): ?>
              <li><a tname="weijianyansheji" tvalue="weijianyansheji:1" <?php if ($this->_tpl_vars['ck_weijianyansheji'] == '1'): ?>checked="true" <?php endif; ?>>未检验设计</a></li><?php endif; ?>
               <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['yiwanchengsheji'] == '1'): ?>
              <li><a tname="yiwanchengsheji" tvalue="yiwanchengsheji:1" <?php if ($this->_tpl_vars['ck_yiwanchengsheji'] == '1'): ?>checked="true" <?php endif; ?>>已完成设计</a></li><?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>
			
             <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['gongchangguanli'] == '1'): ?>
          <li><a>工厂管理</a>
            <ul>
             <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['dingdanxinxi'] == '1'): ?>
              <li><a tname="dingdanxinxi" tvalue="dingdanxinxi:1" <?php if ($this->_tpl_vars['ck_dingdanxinxi'] == '1'): ?>checked="true" <?php endif; ?>>订单信息</a></li>
              <?php endif; ?>
               <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['changkuxinxi'] == '1'): ?>
              <li><a tname="changkuxinxi" tvalue="changkuxinxi:1" <?php if ($this->_tpl_vars['ck_changkuxinxi'] == '1'): ?>checked="true" <?php endif; ?>>仓库信息</a></li>
              <?php endif; ?>
               <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['zhibanxinxi'] == '1'): ?>
              <li><a tname="zhibanxinxi" tvalue="zhibanxinxi:1" <?php if ($this->_tpl_vars['ck_zhibanxinxi'] == '1'): ?>checked="true" <?php endif; ?>>制版信息</a></li>
              <?php endif; ?>
               <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['caigouxinxi'] == '1'): ?>
              <li><a tname="caigouxinxi" tvalue="caigouxinxi:1" <?php if ($this->_tpl_vars['ck_caigouxinxi'] == '1'): ?>checked="true" <?php endif; ?>>采购信息</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>
			
             <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['caiwuguanli'] == '1'): ?>
          <li><a>财务管理</a>
            <ul>
             <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['shoukuandengji'] == '1'): ?>
              <li><a tname="shoukuandengji" tvalue="shoukuandengji:1" <?php if ($this->_tpl_vars['ck_shoukuandengji'] == '1'): ?>checked="true" <?php endif; ?>>收款登记</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>
			
             <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['dianshangguanli'] == '1'): ?>
          <li><a>电商管理</a>
            <ul>
             <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['liuliangdengji'] == '1'): ?>
              <li><a tname="liuliangdengji" tvalue="liuliangdengji:1" <?php if ($this->_tpl_vars['ck_liuliangdengji'] == '1'): ?>checked="true" <?php endif; ?>>流量登记</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>
			
             <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['zhanghuguanli'] == '1'): ?>
          <li><a>账户管理</a>
            <ul>
             <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['bumenguanli'] == '1'): ?>
              <li><a tname="bumenguanli" tvalue="bumenguanli:1" <?php if ($this->_tpl_vars['ck_bumenguanli'] == '1'): ?>checked="true" <?php endif; ?>>部门管理</a></li>
              <?php endif; ?>
               <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['yonghuzuguanli'] == '1'): ?>
              <li><a tname="yonghuzuguanli" tvalue="yonghuzuguanli:1" <?php if ($this->_tpl_vars['ck_yonghuzuguanli'] == '1'): ?>checked="true" <?php endif; ?>>用户组管理</a></li>
              <?php endif; ?>
               <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['yonghuguanli'] == '1'): ?>
              <li><a tname="yonghuguanli" tvalue="yonghuguanli:1" <?php if ($this->_tpl_vars['ck_yonghuguanli'] == '1'): ?>checked="true" <?php endif; ?>>用户管理</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>
			
             <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['baobiaohuizong'] == '1'): ?>
          <li><a>报表总汇</a>
            <ul>
             <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['xiaoshoumingxi'] == '1'): ?>
              <li><a tname="xiaoshoumingxi" tvalue="xiaoshoumingxi:1" <?php if ($this->_tpl_vars['ck_xiaoshoumingxi'] == '1'): ?>checked="true" <?php endif; ?>>销售明细</a></li>
              <?php endif; ?>
               <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['chengbenmingxi'] == '1'): ?>
              <li><a tname="chengbenmingxi" tvalue="chengbenmingxi:1" <?php if ($this->_tpl_vars['ck_chengbenmingxi'] == '1'): ?>checked="true" <?php endif; ?>>成本明细</a></li>
              <?php endif; ?>
               <?php if ($this->_tpl_vars['user_info']['authority'] == 'all' || $this->_tpl_vars['baobiaohuizong'] == '1'): ?>
              <li><a tname="baobiaohuizong" tvalue="baobiaohuizong:1" <?php if ($this->_tpl_vars['ck_baobiaohuizong'] == '1'): ?>checked="true" <?php endif; ?>>报表汇总</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>

        </ul>
      </div>
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit">确认</button>
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