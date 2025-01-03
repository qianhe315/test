<?php /* Smarty version 2.6.22, created on 2015-01-14 17:09:07
         compiled from coupon_interval/add.html */ ?>
<div class="pageContent">
  <form method="post" id="coupon_interval_submit" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
       <div class="pageFormContent" layoutH="58">
       <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['id']; ?>
" />
   
      <div class="unit">
      	<label>货币：</label>
        <select class="combox required" id="currency" name="currency" >
        <option value="">请选择</option>
       <?php $_from = $this->_tpl_vars['exchangerate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sa']):
?> <option value="<?php echo $this->_tpl_vars['sa']['exchangerate_name']; ?>
" <?php if ($this->_tpl_vars['sa']['exchangerate_name'] == $this->_tpl_vars['preferential_range']['currency']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['sa']['exchangerate_name']; ?>
</option>
             
              
              <?php endforeach; endif; unset($_from); ?>
        </select>
     
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>金额：</label>
        <input type="text" size="20" name="money" id="money" class="required" value="<?php echo $this->_tpl_vars['preferential_range']['money']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>销售额>=：</label>
        <input type="text" size="20" name="money_min" id="money_min" class="required" value="<?php echo $this->_tpl_vars['preferential_range']['down']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>销售额<：</label>
        <input type="text" size="20" name="money_max" id="money_max" class="required" value="<?php echo $this->_tpl_vars['preferential_range']['up']; ?>
"  />
      </div>
      <div class="divider">divider</div>
     
      <div id="error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      
    </div>
   </form>
    
 <div class="formBar"> 
        <div class="button" style="margin-left:80%; margin-right:10px;">
    		<div class="buttonContent">
       			 <button type="button" id="coupon_interval_add">确定</button>
    		</div>
  		</div>
  		<div class="button" style="margin-left:90%; margin-right:5px; margin-top:-25px;">
    		<div class="buttonContent">
       			<button class="close">取消</button>
    		</div>
  		</div>
	</div>
    
<script type="text/javascript">
$("#coupon_interval_add").click(function () {
		var currency=$("#currency").val();
		var money=$("#money").val();
		var c= /^\d+(?=\.{0,1}\d+$|$)/;
		var b=c.test(money);
		var money_min=$("#money_min").val();
		var d=c.test(money_min);
        var money_max=$("#money_max").val();
		var f=c.test(money_max);
	    if(currency==""){
			$("#error").css("display","block");
			$("#error").html("请选择货币！");
		}else if(b==false || money==""){
			$("#error").css("display","block");
			$("#error").html("金额必须是大于0的数字！");
		}else if(d==false || money_min=="0"){
			$("#error").css("display","block");
			$("#error").html("销售额>=必须是大于0的数字！");
		}else if(f==false || money_max=="0"){
			$("#error").css("display","block");
			$("#error").html("销售额<必须是大于0的数字！");
		}else{
		    $("#coupon_interval_submit").submit();
		}
});
</script> 