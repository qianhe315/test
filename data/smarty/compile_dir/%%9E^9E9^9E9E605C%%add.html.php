<?php /* Smarty version 2.6.22, created on 2015-11-27 10:59:02
         compiled from six_coefficient/add.html */ ?>
<div class="pageContent">
 <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" id="submit_add_coefficient"    class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

        <div class="unit">
      	<label>名称：</label>
        <input type="text" size="30" name="name" id="name" value="<?php echo $this->_tpl_vars['six_coefficient']['name']; ?>
"  />
       
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>单价下限：</label>
        <input type="text" size="30" name="under" id="under" value="<?php echo $this->_tpl_vars['six_coefficient']['under']; ?>
"  />
       
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>单价上限：</label>
        <input type="text" size="30" name="up" id="up" value="<?php echo $this->_tpl_vars['six_coefficient']['up']; ?>
"  />
        
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>报价系数上限：</label>
        <input type="text" size="30" name="coefficient_up" id="coefficient_up" value="<?php echo $this->_tpl_vars['six_coefficient']['coefficient_up']; ?>
"  />
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['ids']; ?>
" />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>报价系数下限：</label>
        <input type="text" size="30" name="coefficient_under" id="coefficient_under" value="<?php echo $this->_tpl_vars['six_coefficient']['coefficient_under']; ?>
"  />
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['ids']; ?>
" />
      </div>
      <div class="divider">divider</div>
      <div id="error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit_coefficient" >确认</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">
$("#submit_coefficient").click(function (){
      var name = $("#name").val();
	  var under = $("#under").val();
	  var up = $("#up").val();
	  var coefficient_up = $("#coefficient_up").val();
	  var coefficient_under = $("#coefficient_under").val();
	  var c= /^\d+(?=\.{0,1}\d+$|$)/;
	  var b=c.test(coefficient_up);
	  
	  var e=c.test(under);
	  var f=c.test(up);
	  var j=c.test(coefficient_under);
	  //判断小数
	  var r= /^[+-]?[1-9]?[0-9]*\.[0-9]*$/;
	  var h=r.test(under);
	  var n=r.test(up);
	  var m=r.test(coefficient_up);
	  var x=r.test(coefficient_under);
	  if(under!="" && h==true){
		  var under_length=under.toString().split(".")[1].length;
	  }
	  if(up!="" && n==true){
		 var up_length=up.toString().split(".")[1].length;
	  }
	  if(coefficient_up!="" && m==true){
		  
	      var coefficient_length_up=coefficient_up.toString().split(".")[1].length;
	  }
	  if(coefficient_under!="" && x==true){
		  
	      var coefficient_length_under=coefficient_under.toString().split(".")[1].length;
	  }
	  if(name==""){
		   $("#error").css("display","block");
		   $("#error").html("名称不可为空！");
	  }else if(e==false && under!=""){
		   $("#error").css("display","block");
		   $("#error").html("单价下限必须是正数！");
	  }else if(h==true &&  under_length>2){
		  $("#error").css("display","block");
		  $("#error").html("单价下限小数点后不超过2位！");
	  }else if(f==false && up!=""){
		  $("#error").css("display","block");
		  $("#error").html("单价上限必须是正数！");
	  }else if(n==true &&  up_length>2){
		  $("#error").css("display","block");
		  $("#error").html("单价上限小数点后不超过2位！");
	  }else if(b==false || coefficient_up=="0"){
		  $("#error").css("display","block");
		  $("#error").html("报价系数上限必须是正数！");
	  }else if(m==true &&  coefficient_length_up>2){
		  $("#error").css("display","block");
		  $("#error").html("报价系数上限小数点后不超过2位！");
	  }else if(j==false || coefficient_under=="0"){
		  $("#error").css("display","block");
		  $("#error").html("报价系下限数必须是正数！");
	  }else if(x==true &&  coefficient_length_under>2){
		  $("#error").css("display","block");
		  $("#error").html("报价系数上限小数点后不超过2位！");
	  }else{
		  $("#submit_add_coefficient").submit();
	  }
	  
	  
                
});

</script> 
<!-- {/literal} -->