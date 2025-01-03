<?php /* Smarty version 2.6.22, created on 2014-10-09 09:57:11
         compiled from customer_cooperation_details/add_yucun.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
  <input type="hidden" name="mid" id="mid" value="<?php echo $this->_tpl_vars['deposit_advance']['id']; ?>
" />
   <input type="hidden" name="customer_id" id="customer_id" value="<?php echo $this->_tpl_vars['customer_id']; ?>
" />
    <div class="pageFormContent" layoutH="58">
          <div class="unit">
            <label>时间：</label>
            <input type="text" name="time" id="time" value="<?php echo $this->_tpl_vars['deposit_advance']['time']; ?>
" class="date textInput readonly valid combox required " datefmt="yyyy-MM-dd " readonly />
          </div>
            <div id="time_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div> 
           <div class="unit">
            <label>货币：</label>
          	<select name="exchangerate_name" id="exchangerate_name" class="combox" value="<?php echo $this->_tpl_vars['deposit_advance']['name']; ?>
">
            
            <option value="">请选择</option>
              <?php $_from = $this->_tpl_vars['exchangerate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ex']):
?>
            <option value="<?php echo $this->_tpl_vars['ex']['id']; ?>
"<?php if ($this->_tpl_vars['deposit_advance']['exchangerate_name'] == $this->_tpl_vars['ex']['id']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['ex']['exchangerate_name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
            <div id="exchangerate_name_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div> 
          <div class="unit">
            <label>预存金额：</label>
            <input type="text" style="width:180px" name="audit_price" id="audit_price" value="<?php echo $this->_tpl_vars['deposit_advance']['audit_price']; ?>
"  />
          </div>
        <div id="audit_price_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div> 
      
      <div class="divider">divider</div>
      
      
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit"  >确认添加</button>
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
		var time=$("#time").val();
		var exchangerate_name=$("#exchangerate_name").val();
	    var audit_price=$("#audit_price").val();
		var reg = /^\d+(?=\.{0,1}\d+$|$)/
       var c=reg.test(audit_price) ;
		if(time==""){
		  $('#time_error').css("display","block");
		  $("#time_error").html("时间不能为空！");
		}else if(exchangerate_name==""){
		  $('#time_error').css("display","none");
		  $('#exchangerate_name_error').css("display","block");
		  $("#exchangerate_name_error").html("货币不能为空！");
		}else if(audit_price=="" || c==false){
			$('#time_error').css("display","none");
			$('#exchangerate_name_error').css("display","none");
			$('#audit_price_error').css("display","block");
		    $("#audit_price_error").html("预存金额不能为空且为正数！");
		}
		else{$("#submit").submit();}
	  });
 });
	

</script> 
