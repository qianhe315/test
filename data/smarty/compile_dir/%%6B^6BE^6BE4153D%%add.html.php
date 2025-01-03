<?php /* Smarty version 2.6.22, created on 2015-04-21 11:29:39
         compiled from employee_information/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['employee']['id']; ?>
" >
        <label>姓名：</label>
        <select class="combox" name="name" id="changeNewName"  >
            <?php $_from = $this->_tpl_vars['user_name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ta']):
?>
            	<option value="<?php echo $this->_tpl_vars['ta']['user_name']; ?>
" <?php if ($this->_tpl_vars['employee']['name'] == $this->_tpl_vars['ta']['user_name']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['ta']['user_name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            <option value="0" <?php if ($this->_tpl_vars['no'] == 1): ?> selected="selected"<?php endif; ?>>其他</option>
        </select>
      <input type="text" name="other" id="other" <?php if ($this->_tpl_vars['no'] == 1): ?> value="<?php echo $this->_tpl_vars['employee']['name']; ?>
" style=" display:block;width:70px;"<?php else: ?>style="display:none; width:70px;" value="" <?php endif; ?> /><label id="sign" style=" display:none "></label>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>部门：</label>
        <select class="combox" name="department" id="department" >
            <?php $_from = $this->_tpl_vars['group_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ta']):
?>
            	<option value="<?php echo $this->_tpl_vars['ta']['bumen']; ?>
" <?php if ($this->_tpl_vars['employee']['department'] == $this->_tpl_vars['ta']['bumen']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['ta']['bumen']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
        </select>
        
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>岗位：</label>
        <input type="text" size="30" name="post" id="post" value="<?php echo $this->_tpl_vars['employee']['post']; ?>
" alt="请输入岗位" class="required"/>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>入职时间：</label>
        <input type="text" size="30" name="time" id="time" value="<?php echo $this->_tpl_vars['employee']['time']; ?>
"  class="date required" readonly/>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>基本工资：</label>
        <input type="text" size="30" name="base_pay" id="base_pay" value="<?php echo $this->_tpl_vars['employee']['base_pay']; ?>
" alt="请输入基本工资" class="required"/>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>工资卡：</label>
        <input type="text" size="30" name="pay_card" id="pay_card" value="<?php echo $this->_tpl_vars['employee']['pay_card']; ?>
" alt="请输入工资卡" class="required"/>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>个人卡：</label>
        <input type="text" size="30" name="person_card" id="person_card" value="<?php echo $this->_tpl_vars['employee']['person_card']; ?>
" alt="请输入个人卡" class="required"/>
      </div>
      <div class="divider">divider</div>
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit" >确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
  <input type="hidden" name="root" id="root" value="<?php echo $this->_tpl_vars['__ROOT__']; ?>
" >
  
</div>

<!-- <?php echo ' --> 
<script type="text/javascript">
$(document).ready(function(){
	$(\'#changeNewName\').change(function(){
		var e_name	=	$("#changeNewName").find("option:selected").text();	
		var myReg 	=	/^[\\u4e00-\\u9fa5]+$/; //中文验证码
		var theName	=	\'\';
		
		if($("#changeNewName").val()==0){
			$(\'#sign\').css("display","none");
			$("#other").css("display","block");
			$("#other").blur(function(){
				theName	=	$("#other").val();
				if(myReg.test(theName)){
					$.ajax({
						url:$(\'#root\').val()+\'/employee_information/getAjax\',//通过Ajax取数据的目标页面
						data:{"name":theName},
						type:\'get\',//方法，还可以是"post"
						dataType:\'text\',//数据类型，还有其它的，详见jQuery手册
						success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						{
							$(\'#sign\').	css("display","block");
							$("#sign").html(locals);	
						}
					});
				}else{
					alert(\'名字必须是中文！！！\');return;
				}
			});
			
		}else{
			$(\'#sign\').css("display","none");
			$("#other").css("display","none");
			theName	=	e_name;	
			if(myReg.test(theName)){
				$.ajax({
					url:$(\'#root\').val()+\'/employee_information/getAjax\',//通过Ajax取数据的目标页面
					data:{"name":theName},
					type:\'get\',//方法，还可以是"post"
					dataType:\'text\',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						$(\'#sign\').css("display","block");
						$("#sign").html(locals);
					}
				});
			}else{
				alert(\'名字必须是中文！！！\');	return;	
			}
		}
		
		
	});
});

</script> 
<!-- '; ?>
 -->