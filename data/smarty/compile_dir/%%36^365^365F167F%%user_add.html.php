<?php /* Smarty version 2.6.22, created on 2013-03-12 13:59:21
         compiled from user/user_add.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)"  >
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>用户名：</label>
        <input type="text" size="30" name="user_name1" id="user_name1" value="<?php echo $this->_tpl_vars['userinfo']['user_name']; ?>
" alt="请输入用户名" class="required" remote="" />
        <input type="hidden" name="usergroupid" value="<?php echo $this->_tpl_vars['groupss']['group_id']; ?>
"  />
        <input type="hidden" id="group_authority" value="<?php echo $this->_tpl_vars['userinfo']['authority']; ?>
" name="authority" />
        <input type="hidden" id="root" value="<?php echo $this->_tpl_vars['__ROOT__']; ?>
" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>用户级别：</label>
       <input type="text" size="30" name="groupname" id="groupname" value="<?php echo $this->_tpl_vars['groupss']['group_name']; ?>
"  readonly />
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
      
     
            
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit">确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>

<!-- <?php echo ' --> 
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

var root = $(\'#root\').val();    
$("#submit1").click(function (){
	var user_group_name = $("#user_group_name1").val();

	$(".ckbox.checked>input").each(function(){    
	   chk_value.push($(this).val());    
	});   

	$.ajax({
		url: root+\'/usergroup/act_add-group_authority-\' + chk_value+\'-group_name-\'+user_group_name+\'.html\',
		dataType: \'json\',
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
<!-- '; ?>
 -->