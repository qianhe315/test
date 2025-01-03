<?php /* Smarty version 2.6.22, created on 2015-01-14 09:48:46
         compiled from coupon/add.html */ ?>
<div class="pageContent">
  <form method="post" id="coupon_submit" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
       <div class="pageFormContent" layoutH="58">
     <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['discount']['id']; ?>
" />
   
      <div class="unit">
      	<label>货币：</label>
        <select class="combox required" id="currency" name="currency" >
        <option value="">请选择</option>
       <?php $_from = $this->_tpl_vars['exchangerate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sa']):
?> <option value="<?php echo $this->_tpl_vars['sa']['exchangerate_name']; ?>
"><?php echo $this->_tpl_vars['sa']['exchangerate_name']; ?>

              </option>
              <?php endforeach; endif; unset($_from); ?>
        </select>
     
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>金额：</label>
        <input type="text" size="20" name="money" id="money" class="" value=""  />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>有效期：</label>
        <input type="text" size="20" name="use_time" id="use_time" class="date" value="<?php echo $this->_tpl_vars['use_time']; ?>
"  readonly/>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>数量：</label>
        <input type="text" size="20" name="number" id="number" class="required" value="1"  />
      </div>
      <div class="divider">divider</div>
      <div id="error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      
    </div>
   </form>
    
 <div class="formBar"> 
        <div class="button" style="margin-left:80%; margin-right:10px;">
    		<div class="buttonContent">
       			 <button type="button" id="coupon_add">确定</button>
    		</div>
  		</div>
  		<div class="button" style="margin-left:90%; margin-right:5px; margin-top:-25px;">
    		<div class="buttonContent">
       			<button class="close">取消</button>
    		</div>
  		</div>
	</div>
    
<script type="text/javascript">
$("#coupon_add").click(function () {
		var currency=$("#currency").val();
		var money=$("#money").val();
		var c= /^\d+(?=\.{0,1}\d+$|$)/;
		var b=c.test(money);
		var use_time=$("#use_time").val();
		var number=$("#number").val();
		var e= /^[1-9][\d]*$/;
		var f=c.test(number);
	    var reg1 =  /^\d+$/;
        f=reg1.test(number);
		var thetime = document.getElementById("use_time").value;//所选的时间
        var   d=new   Date(Date.parse(thetime .replace(/-/g,"/")));//获取今天的时间
        var   curDate=new   Date();
   
	    if(money!=="" && currency==""){
			$("#error").css("display","block");
			$("#error").html("请选择货币！");
		}else if(b==false && money!=""){
			$("#error").css("display","block");
			$("#error").html("金额必须是大于0的数字或者为空！");
		}else if(d <=curDate){
			$('#error').css("display","block");
			$("#error").html("请选择大于今天的有效时间！");	
		}else if(f==false || number<1){
			$("#error").css("display","block");
			$("#error").html("数量必须是大于0的整数！");
		}else{
		    $("#coupon_submit").submit();
		}
});
</script> 