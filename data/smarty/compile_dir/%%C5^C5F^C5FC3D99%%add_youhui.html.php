<?php /* Smarty version 2.6.22, created on 2014-08-15 17:14:03
         compiled from customer_cooperation_details/add_youhui.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="submit_add">
  <input type="hidden" name="mid" id="mid" value="<?php echo $this->_tpl_vars['save_detail']['id']; ?>
" />
  <input type="hidden" name="customer_id" id="customer_id" value="<?php echo $this->_tpl_vars['customer_id']; ?>
" />
    <div class="pageFormContent" layoutH="58">
    <div class="unit">
            <label>名称：</label>
            <input type="text" style="width:180px" class="valid combox required "id="name" name="name" value="<?php echo $this->_tpl_vars['save_detail']['name']; ?>
" />
          </div>
          <div id="name_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>  
        <div class="unit">
            <label>折扣返利：</label>
            <input type="text" style="width:180px" name="save_money" id="save_money"  value="<?php echo $this->_tpl_vars['save_money']; ?>
"  />
          </div> 
          <div id="save_money_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
           <div class="unit">
            <label>折扣模板：</label>
          	<select name="save_id" id="save_id" class="combox" value="<?php echo $this->_tpl_vars['save_money']; ?>
">
            <option value="">请选择</option>
            <?php $_from = $this->_tpl_vars['discount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dis']):
?>
            <option value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" <?php if ($this->_tpl_vars['save_detail']['save_id'] == $this->_tpl_vars['dis']['id']): ?> selected="selected" <?php endif; ?> ><?php if ($this->_tpl_vars['dis']['discount_category'] == 1): ?>总价满<?php echo $this->_tpl_vars['dis']['top_price']; ?>
元，立减<?php echo $this->_tpl_vars['dis']['discount_price']; ?>
元<?php elseif ($this->_tpl_vars['dis']['discount_category'] == 2): ?>总价满<?php echo $this->_tpl_vars['dis']['by_top_price']; ?>
元包邮<?php elseif ($this->_tpl_vars['dis']['discount_category'] == 6): ?>包邮<?php elseif ($this->_tpl_vars['dis']['discount_category'] == 3): ?><?php echo $this->_tpl_vars['dis']['discount']; ?>
折<?php endif; ?></option>
            <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
          <div id="save_money_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div> 
         
          
      <div class="unit">
      	<label>使用次数：</label>
        <?php if ($this->_tpl_vars['save_detail']['number'] != ''): ?>
        <input type="text" size="30" name="number" id="number" class="valid combox required " value="<?php echo $this->_tpl_vars['save_detail']['number']; ?>
"  />
        <?php else: ?>
         <input type="text" size="30" name="number" id="number" class="valid combox required " value="1"  />
         <?php endif; ?>
      </div>
      <div id="number_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div> 
      <div class="unit">
      	<label>有效期至：</label>
         <?php if ($this->_tpl_vars['save_detail']['usetime'] != ''): ?>
        <input type="text" name="usetime" id="usetime" value="<?php echo $this->_tpl_vars['save_detail']['usetime']; ?>
" class="date textInput readonly valid combox required " datefmt="yyyy-MM-dd " readonly />
        <?php else: ?>
        <input type="text" name="usetime" id="usetime" value="<?php echo $this->_tpl_vars['tomorrow']; ?>
" class="date textInput readonly valid combox required " datefmt="yyyy-MM-dd " readonly />
        <?php endif; ?>
      </div>
        <div id="usetime_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>备注：</label>
        <textarea name="Account" cols="50" rows="3"><?php echo $this->_tpl_vars['save_detail']['Account']; ?>
</textarea>
      </div>
      
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit" >确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>
<script type="text/javascript">
$(document).ready(function() {
      $("#submit").click(function (){
		var name=$("#name").val();
		var save_money=$("#save_money").val();
		
		var save_id=$("#save_id").val();
		var number=$("#number").val();
		var reg = /^\d+(?=\.{0,1}\d+$|$)/
		var c= /^\+?[1-9][0-9]*$/;
		var b=c.test(number);
        var a=reg.test(save_money);
		var weight=$("#pd_weight").val();
    
		
		if(save_money=="" && save_id==""){
		  $('#save_money_error').css("display","block");
		  $("#save_money_error").html("折扣模板和折扣返利必选一个！");
		}else{
			var d1=1;
			$('#save_money_error').css("display","none");
			if(save_money!="" && a==false){
			$('#save_money_error').css("display","block");
			$("#save_money_error").html("折扣返利为正数！");
		    }else{
			var a1=1;
			$('#save_money_error').css("display","none");
			}
		 }
		if(b==false){
			$('#number_error').css("display","block");
			$("#number_error").html("试用次数不为空且是正整数！");
		}else{
			var b1=1;
			$('#number_error').css("display","none");
		}
		   if(name==""){
			$('#name_error').css("display","block");
			$("#name_error").html("名称不可以为空！");	
		}else{
			$('#name_error').css("display","none");
			var c1=1;
		}
	
		var thetime = document.getElementById("usetime").value;//所选的时间
        var   d=new   Date(Date.parse(thetime .replace(/-/g,"/")));//获取今天的时间
        var   curDate=new   Date();
        if(d <=curDate){
			$('#usetime_error').css("display","block");
			$("#usetime_error").html("请选择大于今天的有效时间！");	
        
        }else{
			$('#usetime_error').css("display","none");
			var e1=1;
		}
			if(a1 && b1 && c1 && d1 && e1){
		$("#submit_add").submit();
		}
		
		
		});
	
	   var b = $("#save_id").val();
		if(b != ''){
			$("#save_money").attr("disabled","disabled");//不能输入
			$("#save_money").val("");
		}else{
			$("#save_money").removeAttr("disabled","disabled");
		}

		/*if($("#save_money").val() != ''){
		$("#save_id").attr("disabled","disabled");
		$("#save_id option[value='']").attr("selected","selected");
	}
	if($("#save_id").val()!=''){
		$("#save_money").attr("disabled","disabled");
		$("#save_money").val("");
	}*/
	var discount_id = $("#save_id");
	discount_id.change(function (){
		var b = $("#save_id").val();
		if(b != ''){
			$("#save_money").attr("disabled","disabled");//不能输入
			$("#save_money").val("");
		}else{
			$("#save_money").removeAttr("disabled","disabled");
		}
	});
 });
	

</script> 