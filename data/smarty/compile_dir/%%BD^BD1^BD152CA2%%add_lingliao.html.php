<?php /* Smarty version 2.6.22, created on 2015-07-11 08:35:10
         compiled from cargo_picking/add_lingliao.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="submit_add">
    <div class="pageFormContent" layoutH="58">
    
      <div class="unit">
       <label>订单号：</label>
       <textarea name="order_numbers" class="add01_textarea" id="order_numbers" style="width:350px; height:180px; margin-bottom:10px;"></textarea>
      <div id="order_numbers_error" style="line-height: 26px;  margin-top:60px;color: rgb(255, 0, 0); display:none;"></div>
      
      </div>
<!--      <div class="divider">divider</div>
       <div class="unit">
      	<label>领料人：</label>
        <input type="text" style="width:150px; height:20px; margin-bottom:10px;" name="name" id="name" value="<?php echo $this->_tpl_vars['area']['code']; ?>
"/>
        <div id="name_error" style="line-height: 26px; margin-left: 10px; color: rgb(255, 0, 0); display:none;"></div>
      </div>
        <div class="divider">divider</div>
     <div class="unit">
      	<label>时间：</label>
        <input class="date textInput readonly valid focus required" value="<?php echo $this->_tpl_vars['time_now']; ?>
" style="float:left; margin-top:10px; width:150px;" type="text" readonly="true" datefmt="yyyy-MM-dd HH:mm:ss" name="time">
     </div>-->
     <div class="divider">divider</div>
 </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit_form" >确认</button>
            </div>
          </div>
        </li>
        <li>
         <div class="buttonActive">
            <div class="buttonContent">
              <button class="close" >取消</button>
            </div>
          </div> </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function() {
  $("#submit_form").click(function (){
      var order_numbers=$("#order_numbers").val();
	  var name=$("#name").val();
	  if(order_numbers==""){
		  $('#order_numbers_error').css("display","block");
		  $("#order_numbers_error").html("请填写订单号！");	
	  }else{
	      $.ajax({
			  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/check_order',//通过Ajax取数据的目标页面
			  data:{'order_numbers':order_numbers},
			  type:'get',//方法，还可以是"post"
			  dataType:'json',//数据类型，还有其它的，详见jQuery手册
			  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			  {
			      locals=locals.split("|");
				  if(locals[0]!=""){
					 $('#order_numbers_error').css("display","block");
					 $("#order_numbers_error").html(locals[0]+"在数据库有重复");		
				  }else if(locals[1]=="1"){
					 $('#order_numbers_error').css("display","block");
		             $("#order_numbers_error").html(locals[0]+"在输入框有重复");	
				  }else{
					 $("#submit_add").submit();
					  
				  }
				  
				  
				/*	if(locals[0]!="" && locals[1]!="" && locals[2]!=""){
					$('#order_numbers_error').css("display","block");
					$("#order_numbers_error").html(locals[0]+"重复"+locals[1]+"不存在"+locals[2]+"已领料");		
				}else if(locals[0]!="" && locals[1]!="" ){
					$('#order_numbers_error').css("display","block");
		            $("#order_numbers_error").html(locals[0]+"重复"+locals[1]+"不存在");	
				}else if(locals[1]!="" && locals[2]!=""){
					$('#order_numbers_error').css("display","block");
		            $("#order_numbers_error").html(locals[1]+"不存在"+locals[2]+"已领料");	
				}else if(locals[0]!="" && locals[2]!=""){
					$('#order_numbers_error').css("display","block");
		            $("#order_numbers_error").html(locals[0]+"重复"+locals[2]+"已领料");	
				}else if(locals[0]!=""){
					$('#order_numbers_error').css("display","block");
		            $("#order_numbers_error").html(locals[0]+"重复");	
				}else if(locals[1]!=""){
					$('#order_numbers_error').css("display","block");
		            $("#order_numbers_error").html(locals[1]+"不存在");
				}else if(locals[2]!=""){
					$('#order_numbers_error').css("display","block");
		            $("#order_numbers_error").html(locals[2]+"已领料");
				}else{*/
					 //$("#submit_add").submit();
				//}
			}
	      });
	  }
   });
});
</script> 