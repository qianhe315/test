<?php /* Smarty version 2.6.22, created on 2016-05-13 09:36:19
         compiled from cn_invoice/add_freight.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="form_submit">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>运费：</label>
        <input type="text" size="30" name="freight" id="freight" value="<?php echo $this->_tpl_vars['freight']; ?>
"/>
        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
      </div>
      <div class="divider">divider</div>  
      <div id="error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
       <div class="unit">
        <label>客户快递账号：</label>
        <input type="text" size="30" name="shipping_number" id="shipping_number" value="<?php echo $this->_tpl_vars['shipping_number']; ?>
"/>
      </div>
      <div class="divider">divider</div>     
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
               <button type="button" id="submit">确定</button>
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
 $(document).ready(function(){
	 $("#submit").click(function (){
		var freight = $("#freight").val();
        var shipping_number = $("#shipping_number").val();
		var reg = /^\d+(?=\.{0,1}\d+$|$)/
        var a=reg.test(freight);
        if(freight!="" && a==false){
		  $('#error').css("display","block");
		  $("#error").html("运费为正数！");	
		}else if(freight=="" && shipping_number==""){
		  $('#error').css("display","block");
		  $("#error").html("运费和客户快递账号不可同时为空！");	
		}
		else if(freight==0 && shipping_number==""){
		  $('#error').css("display","block");
		  $("#error").html("客户快递账号为空时，运费不可为0！");	
		}
		else{
			$("#form_submit").submit();
		}
	});
	 
	 
});
</script> 
<!-- {/literal} -->