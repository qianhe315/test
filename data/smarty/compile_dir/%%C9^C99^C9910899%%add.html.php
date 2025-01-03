<?php /* Smarty version 2.6.22, created on 2015-02-27 09:18:02
         compiled from other_shipping_goods/add.html */ ?>
<div class="pageContent">
  <form method="post" id="other_submit" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
       <div class="pageFormContent" layoutH="58">
     <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['mid']; ?>
" />
   
      <div class="unit">
      	<label>名称：</label>
        <input type="text" size="20" name="name" id="name" class="required" value="<?php echo $this->_tpl_vars['other_shipping_goods']['name']; ?>
"  />
      </div>
      <div class="divider">divider</div>
     
      <div class="unit">
      	<label>英文名：</label>
        <input type="text" size="20" name="e_name" id="e_name" class="required" value="<?php echo $this->_tpl_vars['other_shipping_goods']['e_name']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>成本：</label>
        <input type="text" size="20" name="cost" id="cost" class="required" value="<?php echo $this->_tpl_vars['other_shipping_goods']['cost']; ?>
"  />
      </div>
      
       <div class="unit">
      	<label>单价：</label>
        <input type="text" size="20" name="price" id="price" class="required" value="<?php echo $this->_tpl_vars['other_shipping_goods']['price']; ?>
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
              <button type="button" id="other_add" >确定</button>
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
$("#other_add").click(function () {
	
		var name=$("#name").val();
		var e_name=$("#e_name").val();
		var cost=$("#cost").val();
		var price=$("#price").val();
		var c= /^\d+(?=\.{0,1}\d+$|$)/;
		var b=c.test(cost);
	    var a=c.test(price);
        if(name==""){
			$("#error").css("display","block");
			$("#error").html("名称不为空！");
		}else if(e_name==""){
			$("#error").css("display","block");
			$("#error").html("英文名称不为空！");
		}else if(b==false || cost=="0"){
			$("#error").css("display","block");
			$("#error").html("成本必须是正数！");
		}else if(a==false || price=="0"){
			$("#error").css("display","block");
			$("#error").html("单价必须是正数！");
		}else{
		    $("#other_submit").submit();
		}
});
</script> 