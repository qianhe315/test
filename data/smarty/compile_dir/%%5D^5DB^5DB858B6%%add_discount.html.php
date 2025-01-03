<?php /* Smarty version 2.6.22, created on 2016-05-20 11:52:21
         compiled from cn_invoice/add_discount.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="discount_form_submit">
    <div class="pageFormContent" layoutH="58">
     <div class="unit">
           免版费：<br/>
          <?php if ($this->_tpl_vars['cs_free_version_customer_code'] != ''): ?>
      
           <?php if ($this->_tpl_vars['edition_price_id'] == '1' || $this->_tpl_vars['edition_price_id'] == ''): ?>
             <div style="margin-left:55px;"><input type="radio" name="banfei" value="1" checked="checked"/> 无 <input type="radio" name="banfei" value="2" />有</div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['edition_price_id'] == '2'): ?>
             <div style="margin-left:55px;"><input type="radio" name="banfei" value="1" /> 无 <input type="radio" name="banfei" value="2" checked="checked"/>有</div>
    <?php endif; ?>
    
     <?php else: ?>
    
     <div style="margin-left:55px;"><input type="radio" id="youbanfei" name="youbanfei" value="1" checked="checked"/> 无</div>
    
     <?php endif; ?>
      </div>
      <div class="divider">divider</div>  
    
    
    
       <div class="unit">
           折扣：<br/>
           <div style="margin-left:55px;"> <input type="radio" id="discount" name="discount" value="" checked="checked"/>无</div>
            <br/>
           <?php if ($this->_tpl_vars['save_detail']): ?>
			 <?php $_from = $this->_tpl_vars['save_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
               <?php if ($this->_tpl_vars['discount_id'] == $this->_tpl_vars['dis']['id']): ?>
            <div style="margin-left:55px;"><input type="radio" id="discount" name="discount" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" checked="checked"/> <?php echo $this->_tpl_vars['dis']['save_money1']; ?>
</div>
            <?php else: ?>
             <div style="margin-left:55px;"><input type="radio" id="discount" name="discount" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" /> <?php echo $this->_tpl_vars['dis']['save_money1']; ?>
</div>
           <?php endif; ?>
            <br/>
         <?php endforeach; endif; unset($_from); ?>
         <?php endif; ?>
   
      </div>
      <div class="divider">divider</div>  
      <div class="unit">
          预存款:<br/>
           <?php if ($this->_tpl_vars['deposit_advance']): ?>
			 <?php $_from = $this->_tpl_vars['deposit_advance']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['da']):
?>
            
             <?php if ($this->_tpl_vars['da']['deposits_id'] == $this->_tpl_vars['da']['id']): ?>
           <div style="margin-left:55px;"> <input type="checkbox"  id="audit_price" name="audit_price[]" value="<?php echo $this->_tpl_vars['da']['id']; ?>
" checked="checked"/> <?php echo $this->_tpl_vars['da']['name']; ?>
</div>
           <?php else: ?>
           <div style="margin-left:55px;"> <input type="checkbox"  id="audit_price" name="audit_price[]" value="<?php echo $this->_tpl_vars['da']['id']; ?>
" /> <?php echo $this->_tpl_vars['da']['name']; ?>
</div>
           <?php endif; ?>
            <br/>
         <?php endforeach; endif; unset($_from); ?>
         <?php endif; ?>
       <input type='hidden' name='mid' id='mid' value="<?php echo $this->_tpl_vars['id']; ?>
">
      </div>
      <div class="divider">divider</div>    
       <div class="unit">
          优惠券:<div style="margin-left:55px; margin-top:-15px;"><input type='text' name='coupon' id='coupon' value="<?php echo $this->_tpl_vars['coupon_code']; ?>
"></div>
      </div>
      <div class="divider">divider</div>     
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
               <button type="button" id="discout_submit">确定</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>
<script type="text/javascript">
 $(document).ready(function(){
	 $("#discout_submit").click(function (){
		var mid = $("#mid").val();
		var discount = $("#discount").val();
        var audit_price = $("#audit_price").val();
		var coupon = $("#coupon").val();
		var audit_price = '';
			$("input[name='audit_price[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(audit_price == ''){
					audit_price += $(this).val();
				
				}else{
					audit_price += '|'+$(this).val();
	
				}
			});
			if(audit_price!="" && coupon==""){
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/check_exchangerate',//通过Ajax取数据的目标页面
					data:{"mid":mid,"audit_price":audit_price,"coupon":coupon},
					type:'post',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						  if(locals=="1"){
							alert('预存款货币不统一'); 
							
						  }else{
							  $("#discount_form_submit").submit();
						  }
					}								
					
				});			
			
			}else if(coupon!="" && audit_price==""){
				
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/check_exchangerate',//通过Ajax取数据的目标页面
					data:{"mid":mid,"audit_price":audit_price,"coupon":coupon},
					type:'post',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						  if(locals=="2"){
							alert('验证码不存在');   
						  }else if(locals=="3"){
							alert('优惠券货币不统一');   
						  }else if(locals=="4"){
							alert('优惠已经券过期了！');   
						  }else if(locals=="5"){
							alert('优惠券已经使用了');   
						  }else if(locals=="6"){
							alert('代码不一致');   
						  }else{
							 $("#discount_form_submit").submit();
						  }
					}								
					
				});			
			
			}else if(coupon!="" && audit_price!=""){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_invoice/check_exchangerate',//通过Ajax取数据的目标页面
					data:{"mid":mid,"audit_price":audit_price,"coupon":coupon},
					type:'post',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						  if(locals=="1"){
						  }else if(locals=="2"){
							alert('验证码不存在');   
						  }else if(locals=="3"){
							alert('优惠券货币不统一');   
						  }else if(locals=="4"){
							alert('优惠已经券过期了！');   
						  }else if(locals=="5"){
							alert('优惠券已经使用了');   
						  }else if(locals=="6"){
							alert('代码不一致');   
						  }else if(locals=="7"){
							alert('该优惠券无优惠金额');
						  }else{
							 $("#discount_form_submit").submit();
						  }
					}								
					
				});			
				
			}else{
				$("#discount_form_submit").submit();
			}
	});
	 
	 
});
</script> 
<!-- {/literal} -->