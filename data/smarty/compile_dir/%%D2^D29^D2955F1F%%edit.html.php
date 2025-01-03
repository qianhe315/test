<?php /* Smarty version 2.6.22, created on 2022-12-02 09:15:48
         compiled from payment_situation/edit.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="form_submit">
    <div class="pageFormContent" layoutH="58">  
    <input type="hidden" size="30" name="info_id" id="info_id" readonly="readonly" value="<?php echo $this->_tpl_vars['get_p_info']['id']; ?>
"  /> 
      <div class="unit">
      	<label>付款人：</label>
        <input type="text" size="30" name="name" id="name" readonly="readonly" value="<?php echo $this->_tpl_vars['get_p_info']['name']; ?>
"  /> 
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>付款人公司：</label>
        <input type="text" size="30" name="payer_business_name" id="payer_business_name" readonly="readonly"  value="<?php echo $this->_tpl_vars['get_p_info']['payer_business_name']; ?>
"  /> 
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>付款邮箱：</label>
        <input type="text" size="30" name="payer_email" id="payer_email" readonly="readonly"  value="<?php echo $this->_tpl_vars['get_p_info']['payer_email']; ?>
"  /> 
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>收款邮箱：</label>
        <input type="text" size="30" name="receiver_email" readonly="readonly"  value="<?php echo $this->_tpl_vars['get_p_info']['receiver_email']; ?>
"  /> 
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>货币：</label>
        <input type="text" size="30" name="payment_currency" id="payment_currency" readonly="readonly"  value="<?php echo $this->_tpl_vars['get_p_info']['payment_currency']; ?>
"  /> 
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>付款金额：</label>
        <input type="text" size="30" name="payment_amount" id="payment_amount"  readonly="readonly" value="<?php echo $this->_tpl_vars['get_p_info']['payment_amount']; ?>
"  /> 
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>手续费：</label>
        <input type="text" size="30" name="poundage" id="poundage" readonly="readonly"  value="<?php echo $this->_tpl_vars['get_p_info']['poundage']; ?>
"  /> 
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>客户代码：</label>
        <?php if ($this->_tpl_vars['get_p_info']['customer_code'] != ''): ?>
        <input type="text" size="30" name="customer_code" id="customer_code" value="<?php echo $this->_tpl_vars['get_p_info']['customer_code']; ?>
" readonly="readonly"  /> 
        <?php else: ?>
        <input type="text" size="30" name="customer_code" id="customer_code" value=""  onchange="check_code()" /> 
        <?php endif; ?>
        <div id="customer_code_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>客户名：</label>
        <input type="text" size="30" name="customer_name" id="customer_name" readonly="readonly"  value="<?php echo $this->_tpl_vars['get_p_info']['customer_name']; ?>
"  /> 
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>客户公司：</label>
        <input type="text" size="30" name="company" id="company" readonly="readonly"  value="<?php echo $this->_tpl_vars['get_p_info']['company']; ?>
"  /> 
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>发票号：</label>
        <input type="text" size="30" name="item_name" id="item_name" onchange="check_invoice()" value="<?php echo $this->_tpl_vars['get_p_info']['item_name']; ?>
"  /> 
        <div id="item_name_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>业务员：</label>
        <?php if ($this->_tpl_vars['users']): ?>
        <select name="user_id" id="user_id">
        	<option value="">全部</option>
            <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            	<option  value="<?php echo $this->_tpl_vars['v']['user_id']; ?>
" <?php if ($this->_tpl_vars['get_p_info']['user_id'] == $this->_tpl_vars['v']['user_id']): ?>selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['v']['user_name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
        </select>
        <?php else: ?>
        <input type="text" size="30" name="user_name" id="user_name" readonly="readonly"  value="<?php echo $this->_tpl_vars['get_p_info']['user_name']; ?>
"  /> 
        <input type="hidden" size="30" name="user_id" id="user_id"  value="<?php echo $this->_tpl_vars['get_p_info']['user_id']; ?>
"  /> 
        <?php endif; ?>
      </div>
      <div class="divider">divider</div>
      
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit">确认添加</button>
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

function check_code(){
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_situation/check_code',//通过Ajax取数据的目标页面
		data:{'customer_code':$("#customer_code").val()},			
		type:'post',//方法，还可以是"post"
		dataType:'json',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		{
			if(locals.type =='No'){
				$("#customer_code_error").css('display','block');
				$("#customer_code_error").html("客户代码不存在！");
			}else{
				$("#customer_code_error").css('display','none');
				$("#customer_code_error").html("");
				$("#customer_name").val(locals.customer_name);
				$("#company").val(locals.company);
			}
		}
	});	
}
//检查发票号
function check_invoice(){
	$.ajax({
		  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_situation/check_invoice',//通过Ajax取数据的目标页面
		  data:{'item_name':$("#item_name").val()},			
		  type:'post',//方法，还可以是"post"
		  dataType:'json',//数据类型，还有其它的，详见jQuery手册
		  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		  {
			  
			  if(locals.type == 'No'){
				  $("#item_name_error").css('display','block');
				  $("#item_name_error").html("发票号不正确！");
			  }else{
				 $("#item_name_error").css('display','none');
				 $("#item_name_error").html(""); 
			  }
		  }
	});		
}

$(document).ready(function()  
{
	$("#submit").click(function (){
	   var customer_code = $("#customer_code").val();
	   var item_name = $("#item_name").val();
	   var user_id = $("#user_id").val();
	   if(customer_code==""){
		   alert('客户代码不能为空！');
	   }else if(item_name==""){
		  alert('发票号不能为空！');
	   }else if(user_id==""){
		  alert('业务员不能为空！');
	   }else if($("#customer_code_error").html()!=""){
		   alert('请先修改客户代码的错误！');
	   }else if($("#item_name_error").html()!=""){
		   alert('请先修改发票号的错误！');
	   }else{
		  $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_situation/check_info',//通过Ajax取数据的目标页面
				data:{'item_name':item_name,'customer_code':customer_code,'user_id':user_id},			
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					
					/*if(locals.type == 'No'){
						alert('业务员与此发票号的业务员不相同！');
					}else{*/
						$("#form_submit").submit();
					/*}*/
				}
		  });	 
		   
		   
	   }
	});	
});
</script> 
<!-- {/literal} -->