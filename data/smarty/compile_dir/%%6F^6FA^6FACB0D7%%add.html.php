<?php /* Smarty version 2.6.22, created on 2015-10-15 14:01:31
         compiled from clients_receiving/add.html */ ?>
<div class="pageContent">
  <form method="post" id="clients_receiving_add_submit" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">
       <div class="pageFormContent" layoutH="58">
     <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['mid']; ?>
" />
     <div class="unit" style="width:300px;">
      	<label>客户代码：</label>
        <input type="text" size="20" name="customer_code" id="customer_code" class="required" value="<?php echo $this->_tpl_vars['clients_receiving']['customer_code']; ?>
" onkeyup="customer_code_num_add();"  />
       
      </div>
      <div class="unit" style="width:300px;">
      	
        <label>&nbsp;</label>
        <input type="text" size="20" name="customer_name_1" id="customer_name_1" class="required" value="<?php echo $this->_tpl_vars['customer_name']; ?>
"  readonly="readonly"/>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>名称：</label>
        <input type="text" size="20" name="name" id="name" class="required" value="<?php echo $this->_tpl_vars['clients_receiving']['name']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>客户名：</label>
        <input type="text" size="20" name="customer_name" id="customer_name" class="required" value="<?php echo $this->_tpl_vars['clients_receiving']['customer_name']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>公司：</label>
        <input type="text" size="20" name="company" id="company" class="required" value="<?php echo $this->_tpl_vars['clients_receiving']['company']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>国家：</label>
        
        <select class="combox" name="country" id="country">
            <option value="">全部</option>
            <?php $_from = $this->_tpl_vars['area']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
            <option value="<?php echo $this->_tpl_vars['du']['area_id']; ?>
" <?php if ($this->_tpl_vars['du']['area_name'] == $this->_tpl_vars['clients_receiving']['country']): ?> selected <?php endif; ?>><?php echo $this->_tpl_vars['du']['area_name']; ?>
 </option>
            <?php endforeach; endif; unset($_from); ?>
        </select>
        
       <!-- <input type="text" size="20" name="country" id="country" class="required" value="<?php echo $this->_tpl_vars['clients_receiving']['country']; ?>
"  />-->
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>城市：</label>
        <input type="text" size="20" name="city" id="city" class="required" value="<?php echo $this->_tpl_vars['clients_receiving']['city']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>州：</label>
        <input type="text" size="20" name="state" id="state" class="required" value="<?php echo $this->_tpl_vars['clients_receiving']['state']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>州代码：</label>
        <input type="text" size="20" name="state_code" id="state_code" class="required" value="<?php echo $this->_tpl_vars['clients_receiving']['state_code']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>地址：</label>
        <input type="text" size="20" name="address" id="address" class="required" value="<?php echo $this->_tpl_vars['clients_receiving']['address']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>邮编：</label>
        <input type="text" size="20" name="postal_code" id="postal_code" class="required" value="<?php echo $this->_tpl_vars['clients_receiving']['postal_code']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>电话：</label>
        <input type="text" size="20" name="phone" id="phone" class="required" value="<?php echo $this->_tpl_vars['clients_receiving']['phone']; ?>
"  />
      </div>
      <div class="divider">divider</div>
        <div class="unit">
      	<label>到付账号：</label>
        <input type="text" size="20" name="pay_number" id="pay_number" value="<?php echo $this->_tpl_vars['clients_receiving']['pay_number']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div id="error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      
    </div>
 </form> 
 <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button"  id="clients_receiving_add">确定</button>
            </div>
          </div>
        </li>
        <li> 
        <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" class="close" >取消</button>
            </div>
          </div>
        </li>
      </ul>
  </div>  
<script type="text/javascript">
function customer_code_num_add(){
						var name = $("#customer_code").val();
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/clients_receiving/add_customer',//通过Ajax取数据的目标页面
							data:{"name":name},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								$("#customer_name_1").val(locals);
								 $("#error").css("display","none");	
								
							}								
							
						});
}

$("#clients_receiving_add").click(function () {
	
		var customer_code=$("#customer_code").val();
		var name=$("#name").val();
		var customer_name=$("#customer_name").val();
		var company=$("#company").val();
		var country=$("#country").val();
		var city=$("#city").val();
		var address=$("#address").val();
		var postal_code=$("#postal_code").val();
		var photo=$("#photo").val();
		var customer_name_1=$("#customer_name_1").val();
		
        if(customer_code=="" || name=="" || customer_name=="" || company=="" || country=="" || city=="" || address=="" || postal_code=="" || photo==""){
			$("#error").css("display","block");
			$("#error").html("请将信息填写完整！");
		}if(customer_name_1==""){
			$("#error").css("display","block");
			$("#error").html("客户代码错误！");
		}else{
		    $.ajax({
				 url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/clients_receiving/check_code',//通过Ajax取数据的目标页面
					data:{"customer_code":customer_code},
					type:'post',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
					   if(locals=='1'){
						   $("#error").css("display","block");
			               $("#error").html("客户代码错误！");
						   
					   }else{
						   $("#clients_receiving_add_submit").submit();
					   }
					}		
			  });
		}
});
</script> 