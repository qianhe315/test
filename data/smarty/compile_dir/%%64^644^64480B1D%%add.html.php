<?php /* Smarty version 2.6.22, created on 2021-06-23 11:04:43
         compiled from material/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="form_submit">
    <div class="pageFormContent" layoutH="58">  
     <div class="unit">
      	<label>起订量：</label>

        <input type="text" size="30" name="min_order" id="min_order" value="<?php echo $this->_tpl_vars['material']['min_order']; ?>
"  /><label><?php echo $this->_tpl_vars['material']['name']; ?>
</label>

      </div>
      <div id="min_order_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>报价系数：</label>
        <input type="text" size="30" name="quote_coefficient" id="quote_coefficient" value="<?php echo $this->_tpl_vars['material']['quote_coefficient']; ?>
" />
      </div>
      <div id="quote_coefficient_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>    
      <div class="unit">
      	<label>销售单价：</label>
        <input type="text" size="30" name="price" id="price" value="<?php echo $this->_tpl_vars['material']['price']; ?>
" alt="请输入单价" /><label>元</label>
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['material']['id']; ?>
" />
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
$(document).ready(function()  
{
	$("#submit").click(function (){
	   var min_order = $("#min_order").val();
	   var quote_coefficient = $("#quote_coefficient").val();
	   var c= /^\+?[1-9][0-9]*$/;
	   var b=c.test(min_order);
       var reg = /^\d+(?=\.{0,1}\d+$|$)/
       var d=reg.test(quote_coefficient);
	   if(min_order==""){
		   $("#min_order_error").css("display","block");
		   $("#min_order_error").html("起订量不可以为空！");
	   }else if(b==false){
		   $("#min_order_error").css("display","block");
		   $("#min_order_error").html("起订量必为正整数！");
	   }else if(quote_coefficient==""){
		   $("#min_order_error").css("display","none");
		   $("#quote_coefficient_error").css("display","block");
		   $("#quote_coefficient_error").html("报价系数不可以为空！");
	   }else if(d==false){
		   $("#min_order_error").css("display","none");
		   $("#quote_coefficient_error").css("display","block");
		   $("#quote_coefficient_error").html("报价系数必为正数！");
	   }
	   else{
		   $("#form_submit").submit();
	   }
	   

		
	});	
});
</script> 
<!-- {/literal} -->